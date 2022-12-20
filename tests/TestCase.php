<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Api\LightspeedApi;
use JesseGall\LightspeedSDK\LightspeedSDK;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected LightspeedSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sdk = LightspeedSDK::instance();

        $this->sdk->loadEnvironmentVariables();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        LightspeedApi::clearInterceptors();

        LightspeedApi::clearCache();
    }

}