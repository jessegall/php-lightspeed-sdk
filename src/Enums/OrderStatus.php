<?php

namespace JesseGall\LightspeedSDK\Enums;

enum OrderStatus: string
{
    case ON_HOLD = 'on_hold';
    case PROCESSING_AWAITING_PAYMENT = 'processing_awaiting_payment';
    case PROCESSING_AWAITING_SHIPMENT = 'processing_awaiting_shipment';
    case PROCESSING_AWAITING_PICKUP = 'processing_awaiting_pickup';
    case PROCESSING_READY_FOR_PICKUP = 'processing_ready_for_pickup';
    case COMPLETED = 'completed';
    case COMPLETED_SHIPPED = 'completed_shipped';
    case COMPLETED_PICKED_UP = 'completed_picked_up';
    case CANCELLED = 'cancelled';
}