<?php

namespace JesseGall\LightspeedSDK;

use WebshopappApiClient;

class Api
{

    private static Api $instance;

    protected WebshopappApiClient $client;

    private function __construct()
    {
        $sdk = LightspeedSDK::instance();

        $this->client = new WebshopappApiClient(
            $sdk->getEnv('LIGHTSPEED_API_SERVER'),
            $sdk->getEnv('LIGHTSPEED_API_KEY'),
            $sdk->getEnv('LIGHTSPEED_API_SECRET'),
            $sdk->getEnv('LIGHTSPEED_API_LANGUAGE'),
        );
    }

    public static function client()
    {
        if (! isset(self::$instance)) {
            self::$instance = new Api();
        }

        return self::$instance->client;
    }

}