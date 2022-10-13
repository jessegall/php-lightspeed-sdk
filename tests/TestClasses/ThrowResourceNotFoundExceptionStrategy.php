<?php

namespace JesseGall\LightspeedSDK\Tests\TestClasses;

use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\Proxy\Strategies\ForwardStrategy;

class ThrowResourceNotFoundExceptionStrategy extends ForwardStrategy
{

    protected function doExecute()
    {
        throw new ResourceNotFoundException(
            get_class($this->getCaller()),
            123456788
        );
    }

}