<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingRecordList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of billing record
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BillingRecordList extends AbstractStructBase
{
    /**
     * The billingRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var BillingRecord[]
     */
    protected ?array $billingRecord = null;

    /**
     * Constructor method for billingRecordList
     * @param BillingRecord[] $billingRecord
     * @uses BillingRecordList::setBillingRecord()
     */
    public function __construct(?array $billingRecord = null)
    {
        $this
            ->setBillingRecord($billingRecord);
    }

    /**
     * Get billingRecord value
     * @return array|null
     */
    public function getBillingRecord(): ?array
    {
        return $this->billingRecord;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBillingRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingRecord method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBillingRecordForArrayConstraintFromSetBillingRecord(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingRecordListBillingRecordItem) {
            // validation for constraint: itemType
            if (!$billingRecordListBillingRecordItem instanceof BillingRecord) {
                $invalidValues[] = is_object($billingRecordListBillingRecordItem) ? get_class($billingRecordListBillingRecordItem) : sprintf('%s(%s)', gettype($billingRecordListBillingRecordItem), var_export($billingRecordListBillingRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The billingRecord property can only contain items of type BillingRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set billingRecord value
     * @param BillingRecord[] $billingRecord
     * @return BillingRecordList
     * @throws InvalidArgumentException
     */
    public function setBillingRecord(?array $billingRecord = null): self
    {
        // validation for constraint: array
        if ('' !== ($billingRecordArrayErrorMessage = self::validateBillingRecordForArrayConstraintFromSetBillingRecord($billingRecord))) {
            throw new InvalidArgumentException($billingRecordArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($billingRecord) && count($billingRecord) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($billingRecord)), __LINE__);
        }
        $this->billingRecord = $billingRecord;

        return $this;
    }

    /**
     * Add item to billingRecord value
     * @param BillingRecord $item
     * @return BillingRecordList
     * @throws InvalidArgumentException
     */
    public function addToBillingRecord(BillingRecord $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(100)
        if (is_array($this->billingRecord) && count($this->billingRecord) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->billingRecord)), __LINE__);
        }
        $this->billingRecord[] = $item;

        return $this;
    }
}
