<?php

namespace Sweetman\AbstractFactoryPattern;

class YandexPackage implements PackageInterface
{
    public function getConsist(): void
    {
        echo 'Проверяем состав посылки Yandex...' . PHP_EOL;
    }
}