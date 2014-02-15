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
class DisputeActivityCodeType
{
    const CAME_TO_AGREEMENT_NEEDFVF_CREDIT = 'CameToAgreementNeedFVFCredit';
    const CUSTOM_CODE = 'CustomCode';
    const MUTUAL_AGREEMENT_OR_NO_BUYER_RESPONSE = 'MutualAgreementOrNoBuyerResponse';
    const SELLER_ADD_INFORMATION = 'SellerAddInformation';
    const SELLER_COMMENT = 'SellerComment';
    const SELLER_COMPLETED_TRANSACTION = 'SellerCompletedTransaction';
    const SELLER_END_COMMUNICATION = 'SellerEndCommunication';
    const SELLER_OFFERS_REFUND = 'SellerOffersRefund';
    const SELLER_PAYMENT_NOT_RECEIVED = 'SellerPaymentNotReceived';
    const SELLER_SHIPPED_ITEM = 'SellerShippedItem';
}
