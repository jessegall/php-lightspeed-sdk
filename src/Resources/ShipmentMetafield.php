<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShipmentMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shipmentmetafield
 */
class ShipmentMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shipments/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shipmentMetafield';


}
