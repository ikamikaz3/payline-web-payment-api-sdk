<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customPaymentPageCodeList StructType
 * Meta information extracted from the WSDL
 * - documentation: list of custom payment page code
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CustomPaymentPageCodeList extends AbstractStructBase
{
    /**
     * The customPaymentPageCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var CustomPaymentPageCode[]
     */
    protected ?array $customPaymentPageCode = null;

    /**
     * Constructor method for customPaymentPageCodeList
     * @param CustomPaymentPageCode[] $customPaymentPageCode
     * @uses CustomPaymentPageCodeList::setCustomPaymentPageCode()
     */
    public function __construct(?array $customPaymentPageCode = null)
    {
        $this
            ->setCustomPaymentPageCode($customPaymentPageCode);
    }

    /**
     * Get customPaymentPageCode value
     * @return array|null
     */
    public function getCustomPaymentPageCode(): ?array
    {
        return $this->customPaymentPageCode;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCustomPaymentPageCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomPaymentPageCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomPaymentPageCodeForArrayConstraintFromSetCustomPaymentPageCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customPaymentPageCodeListCustomPaymentPageCodeItem) {
            // validation for constraint: itemType
            if (!$customPaymentPageCodeListCustomPaymentPageCodeItem instanceof CustomPaymentPageCode) {
                $invalidValues[] = is_object($customPaymentPageCodeListCustomPaymentPageCodeItem) ? get_class($customPaymentPageCodeListCustomPaymentPageCodeItem) : sprintf('%s(%s)', gettype($customPaymentPageCodeListCustomPaymentPageCodeItem), var_export($customPaymentPageCodeListCustomPaymentPageCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customPaymentPageCode property can only contain items of type CustomPaymentPageCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set customPaymentPageCode value
     * @param CustomPaymentPageCode[] $customPaymentPageCode
     * @return CustomPaymentPageCodeList
     * @throws InvalidArgumentException
     */
    public function setCustomPaymentPageCode(?array $customPaymentPageCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($customPaymentPageCodeArrayErrorMessage = self::validateCustomPaymentPageCodeForArrayConstraintFromSetCustomPaymentPageCode($customPaymentPageCode))) {
            throw new InvalidArgumentException($customPaymentPageCodeArrayErrorMessage, __LINE__);
        }
        $this->customPaymentPageCode = $customPaymentPageCode;

        return $this;
    }

    /**
     * Add item to customPaymentPageCode value
     * @param CustomPaymentPageCode $item
     * @return CustomPaymentPageCodeList
     * @throws InvalidArgumentException
     */
    public function addToCustomPaymentPageCode(CustomPaymentPageCode $item): self
    {
        // validation for constraint: itemType
        $this->customPaymentPageCode[] = $item;

        return $this;
    }
}
