<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statusHistory StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the status History
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StatusHistory extends AbstractStructBase
{
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $amount = null;
    /**
     * The fees
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $fees = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The originTransactionId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $originTransactionId = null;
    /**
     * The amountValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $amountValue = null;
    /**
     * The amountCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $amountCurrency = null;
    /**
     * The feesValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $feesValue = null;
    /**
     * The feesCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $feesCurrency = null;
    /**
     * Constructor method for statusHistory
     * @uses StatusHistory::setTransactionId()
     * @uses StatusHistory::setDate()
     * @uses StatusHistory::setAmount()
     * @uses StatusHistory::setFees()
     * @uses StatusHistory::setStatus()
     * @uses StatusHistory::setOriginTransactionId()
     * @uses StatusHistory::setAmountValue()
     * @uses StatusHistory::setAmountCurrency()
     * @uses StatusHistory::setFeesValue()
     * @uses StatusHistory::setFeesCurrency()
     * @param string $transactionId
     * @param string $date
     * @param string $amount
     * @param string $fees
     * @param string $status
     * @param string $originTransactionId
     * @param string $amountValue
     * @param string $amountCurrency
     * @param string $feesValue
     * @param string $feesCurrency
     */
    public function __construct(?string $transactionId = null, ?string $date = null, ?string $amount = null, ?string $fees = null, ?string $status = null, ?string $originTransactionId = null, ?string $amountValue = null, ?string $amountCurrency = null, ?string $feesValue = null, ?string $feesCurrency = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setDate($date)
            ->setAmount($amount)
            ->setFees($fees)
            ->setStatus($status)
            ->setOriginTransactionId($originTransactionId)
            ->setAmountValue($amountValue)
            ->setAmountCurrency($amountCurrency)
            ->setFeesValue($feesValue)
            ->setFeesCurrency($feesCurrency);
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \StructType\StatusHistory
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;

        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\StatusHistory
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;

        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \StructType\StatusHistory
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;

        return $this;
    }
    /**
     * Get fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->fees;
    }
    /**
     * Set fees value
     * @param string $fees
     * @return \StructType\StatusHistory
     */
    public function setFees(?string $fees = null): self
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
        $this->fees = $fees;

        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \StructType\StatusHistory
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;

        return $this;
    }
    /**
     * Get originTransactionId value
     * @return string|null
     */
    public function getOriginTransactionId(): ?string
    {
        return $this->originTransactionId;
    }
    /**
     * Set originTransactionId value
     * @param string $originTransactionId
     * @return \StructType\StatusHistory
     */
    public function setOriginTransactionId(?string $originTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($originTransactionId) && !is_string($originTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originTransactionId, true), gettype($originTransactionId)), __LINE__);
        }
        $this->originTransactionId = $originTransactionId;

        return $this;
    }
    /**
     * Get amountValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAmountValue(): ?string
    {
        return $this->amountValue ?? null;
    }
    /**
     * Set amountValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $amountValue
     * @return \StructType\StatusHistory
     */
    public function setAmountValue(?string $amountValue = null): self
    {
        // validation for constraint: string
        if (!is_null($amountValue) && !is_string($amountValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amountValue, true), gettype($amountValue)), __LINE__);
        }
        if (is_null($amountValue) || (is_array($amountValue) && empty($amountValue))) {
            unset($this->amountValue);
        } else {
            $this->amountValue = $amountValue;
        }

        return $this;
    }
    /**
     * Get amountCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAmountCurrency(): ?string
    {
        return $this->amountCurrency ?? null;
    }
    /**
     * Set amountCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $amountCurrency
     * @return \StructType\StatusHistory
     */
    public function setAmountCurrency(?string $amountCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($amountCurrency) && !is_string($amountCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amountCurrency, true), gettype($amountCurrency)), __LINE__);
        }
        if (is_null($amountCurrency) || (is_array($amountCurrency) && empty($amountCurrency))) {
            unset($this->amountCurrency);
        } else {
            $this->amountCurrency = $amountCurrency;
        }

        return $this;
    }
    /**
     * Get feesValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFeesValue(): ?string
    {
        return $this->feesValue ?? null;
    }
    /**
     * Set feesValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $feesValue
     * @return \StructType\StatusHistory
     */
    public function setFeesValue(?string $feesValue = null): self
    {
        // validation for constraint: string
        if (!is_null($feesValue) && !is_string($feesValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feesValue, true), gettype($feesValue)), __LINE__);
        }
        if (is_null($feesValue) || (is_array($feesValue) && empty($feesValue))) {
            unset($this->feesValue);
        } else {
            $this->feesValue = $feesValue;
        }

        return $this;
    }
    /**
     * Get feesCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFeesCurrency(): ?string
    {
        return $this->feesCurrency ?? null;
    }
    /**
     * Set feesCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $feesCurrency
     * @return \StructType\StatusHistory
     */
    public function setFeesCurrency(?string $feesCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($feesCurrency) && !is_string($feesCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feesCurrency, true), gettype($feesCurrency)), __LINE__);
        }
        if (is_null($feesCurrency) || (is_array($feesCurrency) && empty($feesCurrency))) {
            unset($this->feesCurrency);
        } else {
            $this->feesCurrency = $feesCurrency;
        }

        return $this;
    }
}
