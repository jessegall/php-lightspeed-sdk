<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\LightspeedSDK;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected LightspeedSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();

        if (! isset($this->sdk)) {
            $this->sdk = new LightspeedSDK();

            $this->sdk->initialize();
        }
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

}