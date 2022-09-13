<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Order;

class ResourceTest extends TestCase
{

    public function test_resource()
    {
        $one = (new Order)->setId(224905911)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        $two = (new Order)->setId(224854308)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        $three = (new Order)->setId(224854308)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        dd($one->getId(), $two->getId(), $three->getId());
    }


}