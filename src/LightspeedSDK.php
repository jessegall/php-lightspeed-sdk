<?php

namespace JesseGall\LightspeedSDK;

use Dotenv\Dotenv;
use JesseGall\ContainsData\ContainsData;

class LightspeedSDK
{
    use ContainsData;

    public static LightspeedSDK $instance;

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
        $env = (Dotenv::createMutable(__DIR__ . "/../"))->load();

        $this->setServer($env['LIGHTSPEED_API_SERVER']);
        $this->setKey($env['LIGHTSPEED_API_KEY']);
        $this->setSecret($env['LIGHTSPEED_API_SECRET']);
        $this->setLanguage($env['LIGHTSPEED_API_LANGUAGE']);
    }

    public function setServer(string $server): void
    {
        $this->set('api.server', $server);
    }

    public function setKey(string $key): void
    {
        $this->set('api.key', $key);
    }

    public function setSecret(string $secret): void
    {
        $this->set('api.secret', $secret);
    }

    public function setLanguage(string $language): void
    {
        $this->set('api.language', $language);
    }

}