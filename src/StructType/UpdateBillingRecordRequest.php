<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateBillingRecordRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateBillingRecordRequest extends AbstractStructBase
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
     * The billingRecordForUpdate
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\BillingRecordForUpdate|null
     */
    protected ?\StructType\BillingRecordForUpdate $billingRecordForUpdate = null;
    /**
     * Constructor method for updateBillingRecordRequest
     * @uses UpdateBillingRecordRequest::setContractNumber()
     * @uses UpdateBillingRecordRequest::setPaymentRecordId()
     * @uses UpdateBillingRecordRequest::setBillingRecordId()
     * @uses UpdateBillingRecordRequest::setBillingRecordForUpdate()
     * @param string $contractNumber
     * @param string $paymentRecordId
     * @param string $billingRecordId
     * @param \StructType\BillingRecordForUpdate $billingRecordForUpdate
     */
    public function __construct(?string $contractNumber = null, ?string $paymentRecordId = null, ?string $billingRecordId = null, ?\StructType\BillingRecordForUpdate $billingRecordForUpdate = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPaymentRecordId($paymentRecordId)
            ->setBillingRecordId($billingRecordId)
            ->setBillingRecordForUpdate($billingRecordForUpdate);
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
     * @return \StructType\UpdateBillingRecordRequest
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
     * @return \StructType\UpdateBillingRecordRequest
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
     * @return \StructType\UpdateBillingRecordRequest
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
    /**
     * Get billingRecordForUpdate value
     * @return \StructType\BillingRecordForUpdate|null
     */
    public function getBillingRecordForUpdate(): ?\StructType\BillingRecordForUpdate
    {
        return $this->billingRecordForUpdate;
    }
    /**
     * Set billingRecordForUpdate value
     * @param \StructType\BillingRecordForUpdate $billingRecordForUpdate
     * @return \StructType\UpdateBillingRecordRequest
     */
    public function setBillingRecordForUpdate(?\StructType\BillingRecordForUpdate $billingRecordForUpdate = null): self
    {
        $this->billingRecordForUpdate = $billingRecordForUpdate;

        return $this;
    }
}
