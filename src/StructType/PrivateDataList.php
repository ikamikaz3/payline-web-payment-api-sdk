<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for privateDataList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of private data
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrivateDataList extends AbstractStructBase
{
    /**
     * The privateData
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \StructType\PrivateData[]
     */
    protected ?array $privateData = null;
    /**
     * Constructor method for privateDataList
     * @uses PrivateDataList::setPrivateData()
     * @param \StructType\PrivateData[] $privateData
     */
    public function __construct(?array $privateData = null)
    {
        $this
            ->setPrivateData($privateData);
    }
    /**
     * Get privateData value
     * @return \StructType\PrivateData[]
     */
    public function getPrivateData(): ?array
    {
        return $this->privateData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrivateData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrivateData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
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
            if (!$privateDataListPrivateDataItem instanceof \StructType\PrivateData) {
                $invalidValues[] = is_object($privateDataListPrivateDataItem) ? get_class($privateDataListPrivateDataItem) : sprintf('%s(%s)', gettype($privateDataListPrivateDataItem), var_export($privateDataListPrivateDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The privateData property can only contain items of type \StructType\PrivateData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set privateData value
     * @throws InvalidArgumentException
     * @param \StructType\PrivateData[] $privateData
     * @return \StructType\PrivateDataList
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
     * @throws InvalidArgumentException
     * @param \StructType\PrivateData $item
     * @return \StructType\PrivateDataList
     */
    public function addToPrivateData(\StructType\PrivateData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PrivateData) {
            throw new InvalidArgumentException(sprintf('The privateData property can only contain items of type \StructType\PrivateData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->privateData) && count($this->privateData) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->privateData)), __LINE__);
        }
        $this->privateData[] = $item;
        
        return $this;
    }
}
