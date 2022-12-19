<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * InvoiceMetafield
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/invoicemetafield
 */
class InvoiceMetafield extends Metafield
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/invoices/{id}/metafields';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'invoiceMetafield';

}
