<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateBillingRecordResponse StructType
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpdateBillingRecordResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Recurring|null
     */
    protected ?Recurring $recurring = null;

    /**
     * The billingRecord
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var BillingRecord|null
     */
    protected ?BillingRecord $billingRecord = null;

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
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * Constructor method for updateBillingRecordResponse
     * @param Result|null $result
     * @param Recurring|null $recurring
     * @param BillingRecord|null $billingRecord
     * @param string|null $walletId
     * @param string|null $isDisabled
     * @param string|null $disableDate
     * @param Order|null $order
     * @param PrivateDataList|null $privateDataList
     * @uses UpdateBillingRecordResponse::setResult()
     * @uses UpdateBillingRecordResponse::setRecurring()
     * @uses UpdateBillingRecordResponse::setBillingRecord()
     * @uses UpdateBillingRecordResponse::setWalletId()
     * @uses UpdateBillingRecordResponse::setIsDisabled()
     * @uses UpdateBillingRecordResponse::setDisableDate()
     * @uses UpdateBillingRecordResponse::setOrder()
     * @uses UpdateBillingRecordResponse::setPrivateDataList()
     */
    public function __construct(?Result $result = null, ?Recurring $recurring = null, ?BillingRecord $billingRecord = null, ?string $walletId = null, ?string $isDisabled = null, ?string $disableDate = null, ?Order $order = null, ?PrivateDataList $privateDataList = null)
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
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return UpdateBillingRecordResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get recurring value
     * @return Recurring|null
     */
    public function getRecurring(): ?Recurring
    {
        return $this->recurring;
    }

    /**
     * Set recurring value
     * @param Recurring|null $recurring
     * @return UpdateBillingRecordResponse
     */
    public function setRecurring(?Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

        return $this;
    }

    /**
     * Get billingRecord value
     * @return BillingRecord|null
     */
    public function getBillingRecord(): ?BillingRecord
    {
        return $this->billingRecord;
    }

    /**
     * Set billingRecord value
     * @param BillingRecord|null $billingRecord
     * @return UpdateBillingRecordResponse
     */
    public function setBillingRecord(?BillingRecord $billingRecord = null): self
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
     * @param string|null $walletId
     * @return UpdateBillingRecordResponse
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
     * @param string|null $isDisabled
     * @return UpdateBillingRecordResponse
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
     * @param string|null $disableDate
     * @return UpdateBillingRecordResponse
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
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * Set order value
     * @param Order|null $order
     * @return UpdateBillingRecordResponse
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get privateDataList value
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return UpdateBillingRecordResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
