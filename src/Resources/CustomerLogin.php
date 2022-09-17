<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * CustomerLogin
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/customerlogin
 */
class CustomerLogin extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/customers/{id}/logins';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'customerLogin';


    /**
     * @return bool|null
     */
    public function getLoggedin(): ?bool
    {
        return $this->get('loggedin');
    }

    /**
     * @param bool|null $loggedin
     * @return $this
     */
    public function setLoggedin(bool $loggedin = null): static
    {
        return $this->set('loggedin', $loggedin);
    }

}
