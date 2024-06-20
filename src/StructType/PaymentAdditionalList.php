<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentAdditionalList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of paymentAdditionalList
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PaymentAdditionalList extends AbstractStructBase
{
    /**
     * The paymentAdditional
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var PaymentAdditional[]
     */
    protected ?array $paymentAdditional = null;

    /**
     * Constructor method for paymentAdditionalList
     * @param PaymentAdditional[] $paymentAdditional
     * @uses PaymentAdditionalList::setPaymentAdditional()
     */
    public function __construct(?array $paymentAdditional = null)
    {
        $this
            ->setPaymentAdditional($paymentAdditional);
    }

    /**
     * Get paymentAdditional value
     * @return array|null
     */
    public function getPaymentAdditional(): ?array
    {
        return $this->paymentAdditional;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPaymentAdditional method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentAdditional method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentAdditionalForArrayConstraintFromSetPaymentAdditional(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentAdditionalListPaymentAdditionalItem) {
            // validation for constraint: itemType
            if (!$paymentAdditionalListPaymentAdditionalItem instanceof PaymentAdditional) {
                $invalidValues[] = is_object($paymentAdditionalListPaymentAdditionalItem) ? get_class($paymentAdditionalListPaymentAdditionalItem) : sprintf('%s(%s)', gettype($paymentAdditionalListPaymentAdditionalItem), var_export($paymentAdditionalListPaymentAdditionalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The paymentAdditional property can only contain items of type PaymentAdditional, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set paymentAdditional value
     * @param PaymentAdditional[] $paymentAdditional
     * @return PaymentAdditionalList
     * @throws InvalidArgumentException
     */
    public function setPaymentAdditional(?array $paymentAdditional = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentAdditionalArrayErrorMessage = self::validatePaymentAdditionalForArrayConstraintFromSetPaymentAdditional($paymentAdditional))) {
            throw new InvalidArgumentException($paymentAdditionalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($paymentAdditional) && count($paymentAdditional) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($paymentAdditional)), __LINE__);
        }
        $this->paymentAdditional = $paymentAdditional;

        return $this;
    }

    /**
     * Add item to paymentAdditional value
     * @param PaymentAdditional $item
     * @return PaymentAdditionalList
     * @throws InvalidArgumentException
     */
    public function addToPaymentAdditional(PaymentAdditional $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(100)
        if (is_array($this->paymentAdditional) && count($this->paymentAdditional) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->paymentAdditional)), __LINE__);
        }
        $this->paymentAdditional[] = $item;

        return $this;
    }
}
