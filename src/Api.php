<?php

namespace JesseGall\LightspeedSDK;

use WebshopappApiClient;

class Api
{

    protected WebshopappApiClient $client;

    public function __construct()
    {
        $sdk = LightspeedSDK::instance();

        $this->client = new WebshopappApiClient(
            $sdk->getEnv('LIGHTSPEED_API_SERVER'),
            $sdk->getEnv('LIGHTSPEED_API_KEY'),
            $sdk->getEnv('LIGHTSPEED_API_SECRET'),
            $sdk->getEnv('LIGHTSPEED_API_LANGUAGE'),
        );
    }

    public function client(): WebshopappApiClient
    {
        return $this->client;
    }

}