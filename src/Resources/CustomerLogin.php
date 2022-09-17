<?php

namespace JesseGall\LightspeedSDK\Resources;

class CustomerLogin extends Resource
{

    protected string $endpoint = '/customers/{id}/logins';

    protected string $handle = 'customerLogin';

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
