<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePaymentRecordResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePaymentRecordResponse extends AbstractStructBase
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
     * The isDisabled
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $isDisabled = null;
    /**
     * The disableDate
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $disableDate = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $walletId = null;
    /**
     * Constructor method for updatePaymentRecordResponse
     * @uses UpdatePaymentRecordResponse::setResult()
     * @uses UpdatePaymentRecordResponse::setRecurring()
     * @uses UpdatePaymentRecordResponse::setIsDisabled()
     * @uses UpdatePaymentRecordResponse::setDisableDate()
     * @uses UpdatePaymentRecordResponse::setPrivateDataList()
     * @uses UpdatePaymentRecordResponse::setOrder()
     * @uses UpdatePaymentRecordResponse::setWalletId()
     * @param \StructType\Result $result
     * @param \StructType\Recurring $recurring
     * @param string $isDisabled
     * @param string $disableDate
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\Order $order
     * @param string $walletId
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Recurring $recurring = null, ?string $isDisabled = null, ?string $disableDate = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\Order $order = null, ?string $walletId = null)
    {
        $this
            ->setResult($result)
            ->setRecurring($recurring)
            ->setIsDisabled($isDisabled)
            ->setDisableDate($disableDate)
            ->setPrivateDataList($privateDataList)
            ->setOrder($order)
            ->setWalletId($walletId);
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
     * @return \StructType\UpdatePaymentRecordResponse
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
     * @return \StructType\UpdatePaymentRecordResponse
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

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
     * @return \StructType\UpdatePaymentRecordResponse
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
     * @return \StructType\UpdatePaymentRecordResponse
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
     * @return \StructType\UpdatePaymentRecordResponse
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
     * @return \StructType\UpdatePaymentRecordResponse
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;

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
     * @return \StructType\UpdatePaymentRecordResponse
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
}
