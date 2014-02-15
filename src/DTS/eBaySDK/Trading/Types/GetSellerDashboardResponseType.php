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

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType $buyerSatisfaction
 * @property DTS\eBaySDK\Trading\Types\PerformanceDashboardType $performance
 * @property DTS\eBaySDK\Trading\Types\PolicyComplianceDashboardType $policyCompliance
 * @property DTS\eBaySDK\Trading\Types\PowerSellerDashboardType $powerSellerStatus
 * @property DTS\eBaySDK\Trading\Types\SearchStandingDashboardType $searchStanding
 * @property DTS\eBaySDK\Trading\Types\SellerAccountDashboardType $sellerAccount
 * @property DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType $sellerFeeDiscount
 */
class GetSellerDashboardResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'buyerSatisfaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyerSatisfactionDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerSatisfaction'
        ),
        'performance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PerformanceDashboardType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Performance'
        ),
        'policyCompliance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PolicyComplianceDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PolicyCompliance'
        ),
        'powerSellerStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PowerSellerDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PowerSellerStatus'
        ),
        'searchStanding' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SearchStandingDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchStanding'
        ),
        'sellerAccount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerAccountDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerAccount'
        ),
        'sellerFeeDiscount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerFeeDiscountDashboardType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerFeeDiscount'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
