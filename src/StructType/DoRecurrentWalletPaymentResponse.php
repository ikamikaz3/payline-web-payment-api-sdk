<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doRecurrentWalletPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doRecurrentWalletPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoRecurrentWalletPaymentResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
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
     * @var \StructType\BillingRecordList|null
     */
    protected ?\StructType\BillingRecordList $billingRecordList = null;
    /**
     * Constructor method for doRecurrentWalletPaymentResponse
     * @uses DoRecurrentWalletPaymentResponse::setResult()
     * @uses DoRecurrentWalletPaymentResponse::setPaymentRecordId()
     * @uses DoRecurrentWalletPaymentResponse::setBillingRecordList()
     * @param \StructType\Result $result
     * @param string $paymentRecordId
     * @param \StructType\BillingRecordList $billingRecordList
     */
    public function __construct(?\StructType\Result $result = null, ?string $paymentRecordId = null, ?\StructType\BillingRecordList $billingRecordList = null)
    {
        $this
            ->setResult($result)
            ->setPaymentRecordId($paymentRecordId)
            ->setBillingRecordList($billingRecordList);
    }
    /**
     * Get result value
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\DoRecurrentWalletPaymentResponse
     */
    public function setResult(?\StructType\Result $result = null): self
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
     * @param string $paymentRecordId
     * @return \StructType\DoRecurrentWalletPaymentResponse
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
     * @return \StructType\BillingRecordList|null
     */
    public function getBillingRecordList(): ?\StructType\BillingRecordList
    {
        return $this->billingRecordList;
    }
    /**
     * Set billingRecordList value
     * @param \StructType\BillingRecordList $billingRecordList
     * @return \StructType\DoRecurrentWalletPaymentResponse
     */
    public function setBillingRecordList(?\StructType\BillingRecordList $billingRecordList = null): self
    {
        $this->billingRecordList = $billingRecordList;
        
        return $this;
    }
}
