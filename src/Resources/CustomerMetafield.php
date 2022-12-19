<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * CustomerMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/customermetafield
 */
class CustomerMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/customers/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'customerMetafield';


}
