<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doScheduledWalletPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doScheduledWalletPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoScheduledWalletPaymentResponse extends AbstractStructBase
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
     * Constructor method for doScheduledWalletPaymentResponse
     * @uses DoScheduledWalletPaymentResponse::setResult()
     * @uses DoScheduledWalletPaymentResponse::setPaymentRecordId()
     * @param \StructType\Result $result
     * @param string $paymentRecordId
     */
    public function __construct(?\StructType\Result $result = null, ?string $paymentRecordId = null)
    {
        $this
            ->setResult($result)
            ->setPaymentRecordId($paymentRecordId);
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
     * @return \StructType\DoScheduledWalletPaymentResponse
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
     * @return \StructType\DoScheduledWalletPaymentResponse
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
