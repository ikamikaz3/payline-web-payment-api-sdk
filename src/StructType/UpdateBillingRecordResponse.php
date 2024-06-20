<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateBillingRecordResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateBillingRecordResponse extends AbstractStructBase
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
     * The billingRecord
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\BillingRecord|null
     */
    protected ?\StructType\BillingRecord $billingRecord = null;
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
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * Constructor method for updateBillingRecordResponse
     * @uses UpdateBillingRecordResponse::setResult()
     * @uses UpdateBillingRecordResponse::setRecurring()
     * @uses UpdateBillingRecordResponse::setBillingRecord()
     * @uses UpdateBillingRecordResponse::setWalletId()
     * @uses UpdateBillingRecordResponse::setIsDisabled()
     * @uses UpdateBillingRecordResponse::setDisableDate()
     * @uses UpdateBillingRecordResponse::setOrder()
     * @uses UpdateBillingRecordResponse::setPrivateDataList()
     * @param \StructType\Result $result
     * @param \StructType\Recurring $recurring
     * @param \StructType\BillingRecord $billingRecord
     * @param string $walletId
     * @param string $isDisabled
     * @param string $disableDate
     * @param \StructType\Order $order
     * @param \StructType\PrivateDataList $privateDataList
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Recurring $recurring = null, ?\StructType\BillingRecord $billingRecord = null, ?string $walletId = null, ?string $isDisabled = null, ?string $disableDate = null, ?\StructType\Order $order = null, ?\StructType\PrivateDataList $privateDataList = null)
    {
        $this
            ->setResult($result)
            ->setRecurring($recurring)
            ->setBillingRecord($billingRecord)
            ->setWalletId($walletId)
            ->setIsDisabled($isDisabled)
            ->setDisableDate($disableDate)
            ->setOrder($order)
            ->setPrivateDataList($privateDataList);
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
     * @return \StructType\UpdateBillingRecordResponse
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
     * @return \StructType\UpdateBillingRecordResponse
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

        return $this;
    }
    /**
     * Get billingRecord value
     * @return \StructType\BillingRecord|null
     */
    public function getBillingRecord(): ?\StructType\BillingRecord
    {
        return $this->billingRecord;
    }
    /**
     * Set billingRecord value
     * @param \StructType\BillingRecord $billingRecord
     * @return \StructType\UpdateBillingRecordResponse
     */
    public function setBillingRecord(?\StructType\BillingRecord $billingRecord = null): self
    {
        $this->billingRecord = $billingRecord;

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
     * @return \StructType\UpdateBillingRecordResponse
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
     * @return \StructType\UpdateBillingRecordResponse
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
     * @return \StructType\UpdateBillingRecordResponse
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
     * @return \StructType\UpdateBillingRecordResponse
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;

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
     * @return \StructType\UpdateBillingRecordResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
