<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerTransHist StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of CustomerTrans
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class CustomerTransHist extends AbstractStructBase
{
    /**
     * The CustomerTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var CustomerTrans[]
     */
    protected ?array $CustomerTrans = null;

    /**
     * Constructor method for CustomerTransHist
     * @param CustomerTrans[] $customerTrans
     * @uses CustomerTransHist::setCustomerTrans()
     */
    public function __construct(?array $customerTrans = null)
    {
        $this
            ->setCustomerTrans($customerTrans);
    }

    /**
     * Get CustomerTrans value
     * @return array|null
     */
    public function getCustomerTrans(): ?array
    {
        return $this->CustomerTrans;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCustomerTrans method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerTrans method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerTransForArrayConstraintFromSetCustomerTrans(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerTransHistCustomerTransItem) {
            // validation for constraint: itemType
            if (!$customerTransHistCustomerTransItem instanceof CustomerTrans) {
                $invalidValues[] = is_object($customerTransHistCustomerTransItem) ? get_class($customerTransHistCustomerTransItem) : sprintf('%s(%s)', gettype($customerTransHistCustomerTransItem), var_export($customerTransHistCustomerTransItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerTrans property can only contain items of type CustomerTrans, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set CustomerTrans value
     * @param CustomerTrans[] $customerTrans
     * @return CustomerTransHist
     * @throws InvalidArgumentException
     */
    public function setCustomerTrans(?array $customerTrans = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerTransArrayErrorMessage = self::validateCustomerTransForArrayConstraintFromSetCustomerTrans($customerTrans))) {
            throw new InvalidArgumentException($customerTransArrayErrorMessage, __LINE__);
        }
        $this->CustomerTrans = $customerTrans;

        return $this;
    }

    /**
     * Add item to CustomerTrans value
     * @param CustomerTrans $item
     * @return CustomerTransHist
     * @throws InvalidArgumentException
     */
    public function addToCustomerTrans(CustomerTrans $item): self
    {
        // validation for constraint: itemType
        $this->CustomerTrans[] = $item;

        return $this;
    }
}
