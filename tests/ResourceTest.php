<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Order;
use JesseGall\LightspeedSDK\Tests\TestClasses\ResourceFiller;
use JesseGall\Resources\ResourceCollection;

class ResourceTest extends TestCase
{

    public function test_test()
    {
        $filler = new ResourceFiller();

        $values = $filler->fill($order = new Order());

        $order->setFeed(false);

        foreach ($values as $key => $value) {
            $actual = $order->{"get$key"}();

            if ($actual instanceof ResourceCollection) {
                continue;
            }

            $this->assertEquals($value, $actual);
        }
    }

}