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
 * @property DTS\eBaySDK\Trading\Types\SellingManagerInventoryPropertyTypeCodeType(string) $filter
 * @property integer $folderId
 * @property DTS\eBaySDK\Trading\Types\PaginationType $pagination
 * @property DTS\eBaySDK\Trading\Types\SellingManagerSearchType $search
 * @property DTS\eBaySDK\Trading\Types\SellingManagerProductSortCodeType(string) $sort
 * @property DTS\eBaySDK\Trading\Types\SortOrderCodeType(string) $sortOrder
 * @property integer $storeCategoryId
 */
class GetSellingManagerInventoryRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'filter' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Filter'
        ),
        'folderId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ),
        'pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
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
