<?php

namespace JesseGall\LightspeedSDK\Exceptions;

class UnknownMethodException extends \Exception
{

    /**
     * @param string $method
     */
    public function __construct(string $method)
    {
        parent::__construct("Unknown method: $method");
    }

}