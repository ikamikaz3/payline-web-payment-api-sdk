<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for privateDataList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of private data
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PrivateDataList extends AbstractStructBase
{
    /**
     * The privateData
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var PrivateData[]
     */
    protected ?array $privateData = null;

    /**
     * Constructor method for privateDataList
     * @param PrivateData[] $privateData
     * @uses PrivateDataList::setPrivateData()
     */
    public function __construct(?array $privateData = null)
    {
        $this
            ->setPrivateData($privateData);
    }

    /**
     * Get privateData value
     * @return array|null
     */
    public function getPrivateData(): ?array
    {
        return $this->privateData;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPrivateData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrivateData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrivateDataForArrayConstraintFromSetPrivateData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $privateDataListPrivateDataItem) {
            // validation for constraint: itemType
            if (!$privateDataListPrivateDataItem instanceof PrivateData) {
                $invalidValues[] = is_object($privateDataListPrivateDataItem) ? get_class($privateDataListPrivateDataItem) : sprintf('%s(%s)', gettype($privateDataListPrivateDataItem), var_export($privateDataListPrivateDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The privateData property can only contain items of type PrivateData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set privateData value
     * @param PrivateData[] $privateData
     * @return PrivateDataList
     * @throws InvalidArgumentException
     */
    public function setPrivateData(?array $privateData = null): self
    {
        // validation for constraint: array
        if ('' !== ($privateDataArrayErrorMessage = self::validatePrivateDataForArrayConstraintFromSetPrivateData($privateData))) {
            throw new InvalidArgumentException($privateDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($privateData) && count($privateData) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($privateData)), __LINE__);
        }
        $this->privateData = $privateData;

        return $this;
    }

    /**
     * Add item to privateData value
     * @param PrivateData $item
     * @return PrivateDataList
     * @throws InvalidArgumentException
     */
    public function addToPrivateData(PrivateData $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(100)
        if (is_array($this->privateData) && count($this->privateData) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->privateData)), __LINE__);
        }
        $this->privateData[] = $item;

        return $this;
    }
}
