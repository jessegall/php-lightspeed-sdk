<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Exceptions\MultipleInstancesException;
use JesseGall\LightspeedSDK\LightspeedSDK;

class LightspeedSDKTest extends TestCase
{

    public function test_exception_is_thrown_when_multiple_instance_are_created()
    {
        $this->expectException(MultipleInstancesException::class);

        new LightspeedSDK();
    }

    public function test_environment_variables_are_loaded()
    {
        $env = $this->sdk->getEnv();

        $this->assertArrayHasKey('LIGHTSPEED_API_SERVER', $env);
        $this->assertArrayHasKey('LIGHTSPEED_API_KEY', $env);
        $this->assertArrayHasKey('LIGHTSPEED_API_SECRET', $env);
        $this->assertArrayHasKey('LIGHTSPEED_API_LANGUAGE', $env);
    }

    public function test_environment_variable_can_be_retrieved_with_key()
    {
        $this->sdk->setEnv(['TEST_VARIABLE' => 'expected']);

        $this->assertEquals('expected', $this->sdk->getEnv('TEST_VARIABLE'));
    }

}