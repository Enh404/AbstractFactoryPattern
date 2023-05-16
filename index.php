<?php

require_once 'vendor/autoload.php';

function delivery(array $factories) {
    foreach ($factories as $factory) {
        $deliveryService = $factory -> createDeliveryService();
        $package = $factory -> createPackage();
        $package -> getConsist();
        $deliveryService -> sendPackage($package);
    }
}

$factories = [
    new \Sweetman\AbstractFactoryPattern\DHLDeliveryFactory(),
    new \Sweetman\AbstractFactoryPattern\YandexDeliveryFactory(),
    new \Sweetman\AbstractFactoryPattern\YandexDeliveryFactory(),
    new \Sweetman\AbstractFactoryPattern\DHLDeliveryFactory(),
];

delivery($factories);