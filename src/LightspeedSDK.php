<?php

namespace JesseGall\LightspeedSDK;

use Closure;
use Dotenv\Dotenv;
use JesseGall\ContainsData\ContainsData;

class LightspeedSDK
{
    use ContainsData;

    private static LightspeedSDK $instance;

    private function __construct() { }

    public static function instance(): LightspeedSDK
    {
        if (! isset(self::$instance)) {
            self::$instance = new LightspeedSDK();
        }

        return self::$instance;
    }

    public function loadEnvironmentVariables(): void
    {
        $env = (Dotenv::createImmutable(__DIR__ . "/../"))->load();

        $this->set('api.server', $env['LIGHTSPEED_API_SERVER']);
        $this->set('api.key', $env['LIGHTSPEED_API_KEY']);
        $this->set('api.secret', $env['LIGHTSPEED_API_SECRET']);
        $this->set('api.language', $env['LIGHTSPEED_API_LANGUAGE']);
    }

}