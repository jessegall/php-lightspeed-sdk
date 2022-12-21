<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\LightspeedSDK\LightspeedSDK;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected LightspeedSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();

        $sdk = LightspeedSDK::instance();

        $sdk->setKey('test_key');
        $sdk->setSecret('test_secret');
        $sdk->setServer('test_server');
        $sdk->setLanguage('test_language');

        $this->sdk = $sdk;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        LightspeedApi::clearInterceptors();

        LightspeedApi::clearCache();
    }

}