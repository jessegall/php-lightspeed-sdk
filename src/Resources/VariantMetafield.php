<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * VariantMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/variantmetafield
 */
class VariantMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/variants/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'variantMetafield';

}
