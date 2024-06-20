<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMeansTransHist StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of PaymentMeansTrans
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentMeansTransHist extends AbstractStructBase
{
    /**
     * The PaymentMeansTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PaymentMeansTrans[]
     */
    protected ?array $PaymentMeansTrans = null;
    /**
     * Constructor method for PaymentMeansTransHist
     * @uses PaymentMeansTransHist::setPaymentMeansTrans()
     * @param \StructType\PaymentMeansTrans[] $paymentMeansTrans
     */
    public function __construct(?array $paymentMeansTrans = null)
    {
        $this
            ->setPaymentMeansTrans($paymentMeansTrans);
    }
    /**
     * Get PaymentMeansTrans value
     * @return \StructType\PaymentMeansTrans[]
     */
    public function getPaymentMeansTrans(): ?array
    {
        return $this->PaymentMeansTrans;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPaymentMeansTrans method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMeansTrans method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMeansTransForArrayConstraintFromSetPaymentMeansTrans(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentMeansTransHistPaymentMeansTransItem) {
            // validation for constraint: itemType
            if (!$paymentMeansTransHistPaymentMeansTransItem instanceof \StructType\PaymentMeansTrans) {
                $invalidValues[] = is_object($paymentMeansTransHistPaymentMeansTransItem) ? get_class($paymentMeansTransHistPaymentMeansTransItem) : sprintf('%s(%s)', gettype($paymentMeansTransHistPaymentMeansTransItem), var_export($paymentMeansTransHistPaymentMeansTransItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentMeansTrans property can only contain items of type \StructType\PaymentMeansTrans, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentMeansTrans value
     * @throws InvalidArgumentException
     * @param \StructType\PaymentMeansTrans[] $paymentMeansTrans
     * @return \StructType\PaymentMeansTransHist
     */
    public function setPaymentMeansTrans(?array $paymentMeansTrans = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentMeansTransArrayErrorMessage = self::validatePaymentMeansTransForArrayConstraintFromSetPaymentMeansTrans($paymentMeansTrans))) {
            throw new InvalidArgumentException($paymentMeansTransArrayErrorMessage, __LINE__);
        }
        $this->PaymentMeansTrans = $paymentMeansTrans;
        
        return $this;
    }
    /**
     * Add item to PaymentMeansTrans value
     * @throws InvalidArgumentException
     * @param \StructType\PaymentMeansTrans $item
     * @return \StructType\PaymentMeansTransHist
     */
    public function addToPaymentMeansTrans(\StructType\PaymentMeansTrans $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PaymentMeansTrans) {
            throw new InvalidArgumentException(sprintf('The PaymentMeansTrans property can only contain items of type \StructType\PaymentMeansTrans, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentMeansTrans[] = $item;
        
        return $this;
    }
}
