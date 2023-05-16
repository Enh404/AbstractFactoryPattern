<?php

namespace Sweetman\AbstractFactoryPattern;

class DHLDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package): void
    {
        echo 'Отправляем посылку через DHL...' . PHP_EOL;
    }
}