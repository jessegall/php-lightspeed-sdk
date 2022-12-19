<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * OrderMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/ordermetafield
 */
class OrderMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/orders/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'orderMetafield';

}
