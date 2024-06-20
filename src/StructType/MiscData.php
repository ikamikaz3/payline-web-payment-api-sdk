<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for miscData StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of pairs
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class MiscData extends AbstractStructBase
{
    /**
     * The miscDataPair
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var MiscDataPair[]
     */
    protected ?array $miscDataPair = null;

    /**
     * Constructor method for miscData
     * @param MiscDataPair[] $miscDataPair
     * @uses MiscData::setMiscDataPair()
     */
    public function __construct(?array $miscDataPair = null)
    {
        $this
            ->setMiscDataPair($miscDataPair);
    }

    /**
     * Get miscDataPair value
     * @return array|null
     */
    public function getMiscDataPair(): ?array
    {
        return $this->miscDataPair;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setMiscDataPair method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMiscDataPair method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMiscDataPairForArrayConstraintFromSetMiscDataPair(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $miscDataMiscDataPairItem) {
            // validation for constraint: itemType
            if (!$miscDataMiscDataPairItem instanceof MiscDataPair) {
                $invalidValues[] = is_object($miscDataMiscDataPairItem) ? get_class($miscDataMiscDataPairItem) : sprintf('%s(%s)', gettype($miscDataMiscDataPairItem), var_export($miscDataMiscDataPairItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The miscDataPair property can only contain items of type MiscDataPair, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set miscDataPair value
     * @param MiscDataPair[] $miscDataPair
     * @return MiscData
     * @throws InvalidArgumentException
     */
    public function setMiscDataPair(?array $miscDataPair = null): self
    {
        // validation for constraint: array
        if ('' !== ($miscDataPairArrayErrorMessage = self::validateMiscDataPairForArrayConstraintFromSetMiscDataPair($miscDataPair))) {
            throw new InvalidArgumentException($miscDataPairArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($miscDataPair) && count($miscDataPair) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($miscDataPair)), __LINE__);
        }
        $this->miscDataPair = $miscDataPair;

        return $this;
    }

    /**
     * Add item to miscDataPair value
     * @param MiscDataPair $item
     * @return MiscData
     * @throws InvalidArgumentException
     */
    public function addToMiscDataPair(MiscDataPair $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(100)
        if (is_array($this->miscDataPair) && count($this->miscDataPair) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->miscDataPair)), __LINE__);
        }
        $this->miscDataPair[] = $item;

        return $this;
    }
}
