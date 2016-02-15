<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\AccountHistorySelectionCodeType $AccountHistorySelection
 * @property \DateTime $InvoiceDate
 * @property \DateTime $BeginDate
 * @property \DateTime $EndDate
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property boolean $ExcludeBalance
 * @property boolean $ExcludeSummary
 * @property boolean $IncludeConversionRate
 * @property \DTS\eBaySDK\Trading\Enums\AccountEntrySortTypeCodeType $AccountEntrySortType
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property string $ItemID
 */
class GetAccountRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AccountHistorySelection' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountHistorySelection'
        ],
        'InvoiceDate' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceDate'
        ],
        'BeginDate' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BeginDate'
        ],
        'EndDate' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndDate'
        ],
        'Pagination' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ],
        'ExcludeBalance' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExcludeBalance'
        ],
        'ExcludeSummary' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExcludeSummary'
        ],
        'IncludeConversionRate' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeConversionRate'
        ],
        'AccountEntrySortType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountEntrySortType'
        ],
        'Currency' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'ItemID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetAccountRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}