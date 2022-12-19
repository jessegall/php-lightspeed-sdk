<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ProductMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/productmetafield
 */
class ProductMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/products/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'productMetafield';

}
