<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaymentRecordResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getPaymentRecord method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentRecordResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Recurring|null
     */
    protected ?\StructType\Recurring $recurring = null;
    /**
     * The billingRecordList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\BillingRecordList|null
     */
    protected ?\StructType\BillingRecordList $billingRecordList = null;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $walletId = null;
    /**
     * The isDisabled
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isDisabled = null;
    /**
     * The disableDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $disableDate = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * Constructor method for getPaymentRecordResponse
     * @uses GetPaymentRecordResponse::setResult()
     * @uses GetPaymentRecordResponse::setRecurring()
     * @uses GetPaymentRecordResponse::setBillingRecordList()
     * @uses GetPaymentRecordResponse::setWalletId()
     * @uses GetPaymentRecordResponse::setIsDisabled()
     * @uses GetPaymentRecordResponse::setDisableDate()
     * @uses GetPaymentRecordResponse::setPrivateDataList()
     * @uses GetPaymentRecordResponse::setOrder()
     * @param \StructType\Result $result
     * @param \StructType\Recurring $recurring
     * @param \StructType\BillingRecordList $billingRecordList
     * @param string $walletId
     * @param string $isDisabled
     * @param string $disableDate
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\Order $order
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Recurring $recurring = null, ?\StructType\BillingRecordList $billingRecordList = null, ?string $walletId = null, ?string $isDisabled = null, ?string $disableDate = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\Order $order = null)
    {
        $this
            ->setResult($result)
            ->setRecurring($recurring)
            ->setBillingRecordList($billingRecordList)
            ->setWalletId($walletId)
            ->setIsDisabled($isDisabled)
            ->setDisableDate($disableDate)
            ->setPrivateDataList($privateDataList)
            ->setOrder($order);
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
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get recurring value
     * @return \StructType\Recurring|null
     */
    public function getRecurring(): ?\StructType\Recurring
    {
        return $this->recurring;
    }
    /**
     * Set recurring value
     * @param \StructType\Recurring $recurring
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;
        
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
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setBillingRecordList(?\StructType\BillingRecordList $billingRecordList = null): self
    {
        $this->billingRecordList = $billingRecordList;
        
        return $this;
    }
    /**
     * Get walletId value
     * @return string|null
     */
    public function getWalletId(): ?string
    {
        return $this->walletId;
    }
    /**
     * Set walletId value
     * @param string $walletId
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setWalletId(?string $walletId = null): self
    {
        // validation for constraint: string
        if (!is_null($walletId) && !is_string($walletId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletId, true), gettype($walletId)), __LINE__);
        }
        $this->walletId = $walletId;
        
        return $this;
    }
    /**
     * Get isDisabled value
     * @return string|null
     */
    public function getIsDisabled(): ?string
    {
        return $this->isDisabled;
    }
    /**
     * Set isDisabled value
     * @param string $isDisabled
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setIsDisabled(?string $isDisabled = null): self
    {
        // validation for constraint: string
        if (!is_null($isDisabled) && !is_string($isDisabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isDisabled, true), gettype($isDisabled)), __LINE__);
        }
        $this->isDisabled = $isDisabled;
        
        return $this;
    }
    /**
     * Get disableDate value
     * @return string|null
     */
    public function getDisableDate(): ?string
    {
        return $this->disableDate;
    }
    /**
     * Set disableDate value
     * @param string $disableDate
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setDisableDate(?string $disableDate = null): self
    {
        // validation for constraint: string
        if (!is_null($disableDate) && !is_string($disableDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disableDate, true), gettype($disableDate)), __LINE__);
        }
        $this->disableDate = $disableDate;
        
        return $this;
    }
    /**
     * Get privateDataList value
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList;
    }
    /**
     * Set privateDataList value
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get order value
     * @return \StructType\Order|null
     */
    public function getOrder(): ?\StructType\Order
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param \StructType\Order $order
     * @return \StructType\GetPaymentRecordResponse
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
        return $this;
    }
}
