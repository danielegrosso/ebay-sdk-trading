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
 * @property boolean $archived
 * @property DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsPropertyTypeCodeType(string) $filter
 * @property DTS\eBaySDK\Trading\Types\PaginationType $pagination
 * @property DTS\eBaySDK\Trading\Types\TimeRangeType $saleDateRange
 * @property DTS\eBaySDK\Trading\Types\SellingManagerSearchType $search
 * @property DTS\eBaySDK\Trading\Enums\SellingManagerSoldListingsSortTypeCodeType(string) $sort
 * @property DTS\eBaySDK\Trading\Enums\SortOrderCodeType(string) $sortOrder
 * @property integer $storeCategoryId
 */
class GetSellingManagerSoldListingsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'archived' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Archived'
        ),
        'filter' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Filter'
        ),
        'pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ),
        'saleDateRange' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TimeRangeType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleDateRange'
        ),
        'search' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerSearchType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Search'
        ),
        'sort' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ),
        'sortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ),
        'storeCategoryId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreCategoryID'
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
