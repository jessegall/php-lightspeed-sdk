<?php

namespace JesseGall\LightspeedSDK\Exceptions;

class IdNullException extends \RuntimeException
{

    public function __construct()
    {
        parent::__construct("The ID of the resource is null");
    }
}