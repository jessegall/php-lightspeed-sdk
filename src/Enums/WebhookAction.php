<?php

namespace JesseGall\LightspeedSDK\Enums;

enum WebhookAction: string
{
    case CREATED = 'created';
    case UPDATED = 'updated';
    case DELETED = 'deleted';
    case PAID = 'paid';
    case SHIPPED = 'shipped';
    case ANSWERED = 'answered';
    case ALL = '*';
}
