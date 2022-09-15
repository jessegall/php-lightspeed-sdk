<?php

namespace JesseGall\LightspeedSDK\Tests;

use Dotenv\Dotenv;
use JesseGall\LightspeedSDK\LightspeedSDK;

class LightspeedSDKTest extends TestCase
{

    protected LightspeedSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();

        $sdk = LightspeedSDK::instance();

        $sdk->loadEnvironmentVariables();

        $this->sdk = $sdk;
    }

    public function test_environment_variables_are_loaded()
    {
        $env = (Dotenv::createMutable(__DIR__ . "/../"))->load();

        $this->assertEquals($env['LIGHTSPEED_API_SERVER'], $this->sdk->get('api.server'));
        $this->assertEquals($env['LIGHTSPEED_API_KEY'], $this->sdk->get('api.key'));
        $this->assertEquals($env['LIGHTSPEED_API_SECRET'], $this->sdk->get('api.secret'));
        $this->assertEquals($env['LIGHTSPEED_API_LANGUAGE'], $this->sdk->get('api.language'));
    }

}