<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBillingRecordRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingRecordRequest extends AbstractStructBase
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
     * The billingRecordId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $billingRecordId = null;
    /**
     * Constructor method for getBillingRecordRequest
     * @uses GetBillingRecordRequest::setContractNumber()
     * @uses GetBillingRecordRequest::setPaymentRecordId()
     * @uses GetBillingRecordRequest::setBillingRecordId()
     * @param string $contractNumber
     * @param string $paymentRecordId
     * @param string $billingRecordId
     */
    public function __construct(?string $contractNumber = null, ?string $paymentRecordId = null, ?string $billingRecordId = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPaymentRecordId($paymentRecordId)
            ->setBillingRecordId($billingRecordId);
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
     * @param string $contractNumber
     * @return \StructType\GetBillingRecordRequest
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
     * @param string $paymentRecordId
     * @return \StructType\GetBillingRecordRequest
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
    /**
     * Get billingRecordId value
     * @return string|null
     */
    public function getBillingRecordId(): ?string
    {
        return $this->billingRecordId;
    }
    /**
     * Set billingRecordId value
     * @param string $billingRecordId
     * @return \StructType\GetBillingRecordRequest
     */
    public function setBillingRecordId(?string $billingRecordId = null): self
    {
        // validation for constraint: string
        if (!is_null($billingRecordId) && !is_string($billingRecordId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingRecordId, true), gettype($billingRecordId)), __LINE__);
        }
        $this->billingRecordId = $billingRecordId;

        return $this;
    }
}
