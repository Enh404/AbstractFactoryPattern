<?php

namespace Sweetman\AbstractFactoryPattern;

class DHLPackage implements PackageInterface
{
    public function getConsist(): void
    {
        echo 'Проверяем состав посылки DHL...' . PHP_EOL;
    }
}