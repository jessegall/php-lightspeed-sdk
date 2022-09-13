<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Order;

class ResourceTest extends TestCase
{

    public function test_resource()
    {
        $order = new Order();

        $variant = $order->setId(224905911)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        $variant = $order->setId(224905911)
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        dd($variant);
    }


}