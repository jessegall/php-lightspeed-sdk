<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Order;
use JesseGall\LightspeedSDK\Resources\Variant;

class ResourceTest extends TestCase
{

    public function test_resource()
    {
        $one = (new Order)
            ->setId(224905911)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        $two = (new Order)
            ->setId(224854308)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        $three = (new Order)
            ->setId(224854308)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        $variant = (new Variant)
            ->setId(243575637)
            ->hydrate();

        dd($one->getId(), $two->getId(), $three->getId(), $variant);
    }


}