<?php

namespace JesseGall\LightspeedSDK\Enums;

enum WebhookGroup: string
{
    case RETURNS = 'returns';
    case CUSTOMERS = 'customers';
    case ORDERS = 'orders';
    case INVOICES = 'invoices';
    case SHIPMENTS = 'shipments';
    case PRODUCTS = 'products';
    case VARIANTS = 'variants';
    case QUOTES = 'quotes';
    case REVIEWS = 'reviews';
    case SUBSCRIPTIONS = 'subscriptions';
}