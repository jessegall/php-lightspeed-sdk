<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * AccountMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/accountmetafield
 */
class AccountMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/accounts/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'accountMetafield';

}
