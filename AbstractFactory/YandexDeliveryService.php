<?php

namespace Sweetman\AbstractFactoryPattern;

class YandexDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package): void
    {
        echo 'Отправляем посылку через Yandex...' . PHP_EOL;
    }
}