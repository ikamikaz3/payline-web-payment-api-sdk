<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refund StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the refund
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Refund extends AbstractStructBase
{
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $transactionID = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * Constructor method for refund
     * @param string|null $transactionID
     * @param Payment|null $payment
     * @uses Refund::setTransactionID()
     * @uses Refund::setPayment()
     */
    public function __construct(?string $transactionID = null, ?Payment $payment = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setPayment($payment);
    }

    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }

    /**
     * Set transactionID value
     * @param string|null $transactionID
     * @return Refund
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;

        return $this;
    }

    /**
     * Get payment value
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    /**
     * Set payment value
     * @param Payment|null $payment
     * @return Refund
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }
}
