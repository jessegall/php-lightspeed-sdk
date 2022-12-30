<?php

namespace JesseGall\LightspeedSDK\Resources\Concerns;

use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\Resources\Api;
use JesseGall\Resources\Concerns\IsRemote;

trait LightspeedResource
{
    use IsRemote;

    /**
     * Return the api instance
     *
     * @return Api
     */
    protected static function api(): Api
    {
        return new LightspeedApi();
    }
}