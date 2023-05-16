<?php

namespace Sweetman\AbstractFactoryPattern;

interface DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package);
}