<?php

namespace Sweetman\AbstractFactoryPattern;
interface AbstractFactoryInterface
{
    public function createDeliveryService(): DeliveryServiceInterface;
    public function createPackage(): PackageInterface;
}