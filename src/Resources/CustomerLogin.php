<?php

namespace JesseGall\LightspeedSDK\Resources;

class CustomerLogin extends Resource
{


    /**
     * @return bool
     */
    public function getLoggedin(): bool
    {
        return $this->get('loggedin');
    }

    /**
     * @param bool $loggedin
     * @return $this
     */
    public function setLoggedin(bool $loggedin): static
    {
        return $this->set('loggedin', $loggedin);
    }

}
