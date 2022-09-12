<?php

namespace JesseGall\LightspeedSDK\Tests;

class LightspeedSDKTest extends TestCase
{

    public function test_environment_variables_are_loaded()
    {
        $env = $this->sdk->getEnv();

        $this->assertArrayHasKey('LIGHTSPEED_API_SERVER', $env);
        $this->assertArrayHasKey('LIGHTSPEED_API_KEY', $env);
        $this->assertArrayHasKey('LIGHTSPEED_API_SECRET', $env);
        $this->assertArrayHasKey('LIGHTSPEED_API_LANGUAGE', $env);
    }

}