<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaymentRecordResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getPaymentRecord method
 * @subpackage Structs
 */
class GetPaymentRecordResponse extends AbstractStructBase
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
     * The billingRecordList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var BillingRecordList|null
     */
    protected ?BillingRecordList $billingRecordList = null;

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
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * Constructor method for getPaymentRecordResponse
     * @param Result|null $result
     * @param Recurring|null $recurring
     * @param BillingRecordList|null $billingRecordList
     * @param string|null $walletId
     * @param string|null $isDisabled
     * @param string|null $disableDate
     * @param PrivateDataList|null $privateDataList
     * @param Order|null $order
     * @uses GetPaymentRecordResponse::setResult()
     * @uses GetPaymentRecordResponse::setRecurring()
     * @uses GetPaymentRecordResponse::setBillingRecordList()
     * @uses GetPaymentRecordResponse::setWalletId()
     * @uses GetPaymentRecordResponse::setIsDisabled()
     * @uses GetPaymentRecordResponse::setDisableDate()
     * @uses GetPaymentRecordResponse::setPrivateDataList()
     * @uses GetPaymentRecordResponse::setOrder()
     */
    public function __construct(?Result $result = null, ?Recurring $recurring = null, ?BillingRecordList $billingRecordList = null, ?string $walletId = null, ?string $isDisabled = null, ?string $disableDate = null, ?PrivateDataList $privateDataList = null, ?Order $order = null)
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
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return GetPaymentRecordResponse
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
     * @return GetPaymentRecordResponse
     */
    public function setRecurring(?Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

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
     * @return GetPaymentRecordResponse
     */
    public function setBillingRecordList(?BillingRecordList $billingRecordList = null): self
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
     * @param string|null $walletId
     * @return GetPaymentRecordResponse
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
     * @return GetPaymentRecordResponse
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
     * @return GetPaymentRecordResponse
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
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return GetPaymentRecordResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

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
     * @return GetPaymentRecordResponse
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }
}
