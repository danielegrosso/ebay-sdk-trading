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
 * @property boolean $includeCrossPromotion
 * @property boolean $includeItemCompatibilityList
 * @property boolean $includeItemSpecifics
 * @property boolean $includeTaxTable
 * @property boolean $includeWatchCount
 * @property string $itemId
 * @property string $sku
 * @property string $transactionId
 * @property string $variationSku
 * @property DTS\eBaySDK\Trading\Types\NameValueListArrayType $variationSpecifics
 */
class GetItemRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'includeCrossPromotion' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeCrossPromotion'
        ),
        'includeItemCompatibilityList' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeItemCompatibilityList'
        ),
        'includeItemSpecifics' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeItemSpecifics'
        ),
        'includeTaxTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeTaxTable'
        ),
        'includeWatchCount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeWatchCount'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'sku' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'transactionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'variationSku' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationSKU'
        ),
        'variationSpecifics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        $elementNamesMap = self::buildElementNamesMap(self::$propertyTypes);

        list($parentValues, $childValues) = self::getParentValues($elementNamesMap, self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$elementNames)) {
            self::$elementNames[__CLASS__] = array_merge(self::$elementNames[get_parent_class()], $elementNamesMap);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
