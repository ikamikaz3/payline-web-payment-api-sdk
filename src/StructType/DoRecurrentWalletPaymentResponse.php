<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doRecurrentWalletPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doRecurrentWalletPayment method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoRecurrentWalletPaymentResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The paymentRecordId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $paymentRecordId = null;

    /**
     * The billingRecordList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var BillingRecordList|null
     */
    protected ?BillingRecordList $billingRecordList = null;

    /**
     * Constructor method for doRecurrentWalletPaymentResponse
     * @param Result|null $result
     * @param string|null $paymentRecordId
     * @param BillingRecordList|null $billingRecordList
     * @uses DoRecurrentWalletPaymentResponse::setResult()
     * @uses DoRecurrentWalletPaymentResponse::setPaymentRecordId()
     * @uses DoRecurrentWalletPaymentResponse::setBillingRecordList()
     */
    public function __construct(?Result $result = null, ?string $paymentRecordId = null, ?BillingRecordList $billingRecordList = null)
    {
        $this
            ->setResult($result)
            ->setPaymentRecordId($paymentRecordId)
            ->setBillingRecordList($billingRecordList);
    }

    /**
     * Get result value
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return DoRecurrentWalletPaymentResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

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
     * @return DoRecurrentWalletPaymentResponse
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
     * Get billingRecordList value
     * @return BillingRecordList|null
     */
    public function getBillingRecordList(): ?BillingRecordList
    {
        return $this->billingRecordList;
    }

    /**
     * Set billingRecordList value
     * @param BillingRecordList|null $billingRecordList
     * @return DoRecurrentWalletPaymentResponse
     */
    public function setBillingRecordList(?BillingRecordList $billingRecordList = null): self
    {
        $this->billingRecordList = $billingRecordList;

        return $this;
    }
}
