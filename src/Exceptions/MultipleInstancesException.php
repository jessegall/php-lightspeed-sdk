<?php

namespace JesseGall\LightspeedSDK\Exceptions;

use RuntimeException;

class MultipleInstancesException extends RuntimeException
{

    public function __construct()
    {
        parent::__construct('Cannot create multiple instances of LightspeedSDK');
    }

}