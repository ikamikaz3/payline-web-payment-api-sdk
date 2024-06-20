<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disablePaymentRecordRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the disablePaymentRecord method
 * @subpackage Structs
 */
class DisablePaymentRecordRequest extends AbstractStructBase
{
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;

    /**
     * The paymentRecordId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $paymentRecordId = null;

    /**
     * Constructor method for disablePaymentRecordRequest
     * @param string|null $contractNumber
     * @param string|null $paymentRecordId
     * @uses DisablePaymentRecordRequest::setContractNumber()
     * @uses DisablePaymentRecordRequest::setPaymentRecordId()
     */
    public function __construct(?string $contractNumber = null, ?string $paymentRecordId = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPaymentRecordId($paymentRecordId);
    }

    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    /**
     * Set contractNumber value
     * @param string|null $contractNumber
     * @return DisablePaymentRecordRequest
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Get paymentRecordId value
     * @return string|null
     */
    public function getPaymentRecordId(): ?string
    {
        return $this->paymentRecordId;
    }

    /**
     * Set paymentRecordId value
     * @param string|null $paymentRecordId
     * @return DisablePaymentRecordRequest
     */
    public function setPaymentRecordId(?string $paymentRecordId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRecordId) && !is_string($paymentRecordId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRecordId, true), gettype($paymentRecordId)), __LINE__);
        }
        $this->paymentRecordId = $paymentRecordId;

        return $this;
    }
}
