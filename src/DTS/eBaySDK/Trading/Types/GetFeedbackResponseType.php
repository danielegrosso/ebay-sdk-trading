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
 * @property integer $entriesPerPage
 * @property DTS\eBaySDK\Trading\Types\FeedbackDetailArrayType $feedbackDetailArray
 * @property integer $feedbackDetailItemTotal
 * @property integer $feedbackScore
 * @property DTS\eBaySDK\Trading\Types\FeedbackSummaryType $feedbackSummary
 * @property integer $pageNumber
 * @property DTS\eBaySDK\Trading\Types\PaginationResultType $paginationResult
 */
class GetFeedbackResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'entriesPerPage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EntriesPerPage'
        ),
        'feedbackDetailArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackDetailArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailArray'
        ),
        'feedbackDetailItemTotal' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailItemTotal'
        ),
        'feedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ),
        'feedbackSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackSummary'
        ),
        'pageNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ),
        'paginationResult' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationResultType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
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
