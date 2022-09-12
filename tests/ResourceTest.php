<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Order;

class ResourceTest extends TestCase
{

    public function test_relation_is_fed_when_missing()
    {
        $variant = (new Order())
            ->setId('224854308')
            ->hydrate()
            ->getProducts()
            ->first()
            ->getVariant();

        dd($variant);
    }

}