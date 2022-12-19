<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShopMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shopmetafield
 */
class ShopMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shopMetafield';

}
