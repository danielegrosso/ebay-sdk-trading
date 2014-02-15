<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Enums;

/**
 *
 */
class SellingManagerPaisaPayPropertyTypeCodeType
{
    const CUSTOM_CODE = 'CustomCode';
    const PAISA_PAY_AWAITING_SHIPMENT = 'PaisaPayAwaitingShipment';
    const PAISA_PAY_PENDING_RECEIVED = 'PaisaPayPendingReceived';
    const PAISA_PAY_REFUND_INITIATED = 'PaisaPayRefundInitiated';
    const PAISA_PAY_TIME_EXTENSION_REQUESTED = 'PaisaPayTimeExtensionRequested';
    const PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED = 'PaisaPayTimeExtensionRequestDeclined';
}
