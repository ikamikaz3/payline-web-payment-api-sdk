<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for details StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains an array of orderDetail
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Details extends AbstractStructBase
{
    /**
     * The details
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \StructType\OrderDetail[]
     */
    protected ?array $details = null;
    /**
     * Constructor method for details
     * @uses Details::setDetails()
     * @param \StructType\OrderDetail[] $details
     */
    public function __construct(?array $details = null)
    {
        $this
            ->setDetails($details);
    }
    /**
     * Get details value
     * @return \StructType\OrderDetail[]
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailsForArrayConstraintFromSetDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $detailsDetailsItem) {
            // validation for constraint: itemType
            if (!$detailsDetailsItem instanceof \StructType\OrderDetail) {
                $invalidValues[] = is_object($detailsDetailsItem) ? get_class($detailsDetailsItem) : sprintf('%s(%s)', gettype($detailsDetailsItem), var_export($detailsDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The details property can only contain items of type \StructType\OrderDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set details value
     * @throws InvalidArgumentException
     * @param \StructType\OrderDetail[] $details
     * @return \StructType\Details
     */
    public function setDetails(?array $details = null): self
    {
        // validation for constraint: array
        if ('' !== ($detailsArrayErrorMessage = self::validateDetailsForArrayConstraintFromSetDetails($details))) {
            throw new InvalidArgumentException($detailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($details) && count($details) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($details)), __LINE__);
        }
        $this->details = $details;
        
        return $this;
    }
    /**
     * Add item to details value
     * @throws InvalidArgumentException
     * @param \StructType\OrderDetail $item
     * @return \StructType\Details
     */
    public function addToDetails(\StructType\OrderDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrderDetail) {
            throw new InvalidArgumentException(sprintf('The details property can only contain items of type \StructType\OrderDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->details) && count($this->details) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->details)), __LINE__);
        }
        $this->details[] = $item;
        
        return $this;
    }
}
