<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingRecordForUpdate StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for update a recurring operation
 * @subpackage Structs
 */
class BillingRecordForUpdate extends AbstractStructBase
{
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $date = null;

    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $amount = null;

    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $status = null;

    /**
     * The executionDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $executionDate = null;

    /**
     * Constructor method for billingRecordForUpdate
     * @param string|null $date
     * @param string|null $amount
     * @param string|null $status
     * @param string|null $executionDate
     * @uses BillingRecordForUpdate::setDate()
     * @uses BillingRecordForUpdate::setAmount()
     * @uses BillingRecordForUpdate::setStatus()
     * @uses BillingRecordForUpdate::setExecutionDate()
     */
    public function __construct(?string $date = null, ?string $amount = null, ?string $status = null, ?string $executionDate = null)
    {
        $this
            ->setDate($date)
            ->setAmount($amount)
            ->setStatus($status)
            ->setExecutionDate($executionDate);
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
     * @param string|null $date
     * @return BillingRecordForUpdate
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
     * @param string|null $amount
     * @return BillingRecordForUpdate
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set status value
     * @param string|null $status
     * @return BillingRecordForUpdate
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
     * Get executionDate value
     * @return string|null
     */
    public function getExecutionDate(): ?string
    {
        return $this->executionDate;
    }

    /**
     * Set executionDate value
     * @param string|null $executionDate
     * @return BillingRecordForUpdate
     */
    public function setExecutionDate(?string $executionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($executionDate) && !is_string($executionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executionDate, true), gettype($executionDate)), __LINE__);
        }
        $this->executionDate = $executionDate;

        return $this;
    }
}
