<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recurring StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for recurring operation
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Recurring extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $amount = null;

    /**
     * The billingCycle
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $billingCycle = null;

    /**
     * The billingLeft
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $billingLeft = null;

    /**
     * The firstAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstAmount = null;

    /**
     * The billingDay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $billingDay = null;

    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $startDate = null;

    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $endDate = null;

    /**
     * The newAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $newAmount = null;

    /**
     * The amountModificationDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $amountModificationDate = null;

    /**
     * The billingRank
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $billingRank = null;

    /**
     * Constructor method for recurring
     * @param string|null $amount
     * @param string|null $billingCycle
     * @param string|null $billingLeft
     * @param string|null $firstAmount
     * @param string|null $billingDay
     * @param string|null $startDate
     * @param string|null $endDate
     * @param string|null $newAmount
     * @param string|null $amountModificationDate
     * @param string|null $billingRank
     * @uses Recurring::setAmount()
     * @uses Recurring::setBillingCycle()
     * @uses Recurring::setBillingLeft()
     * @uses Recurring::setFirstAmount()
     * @uses Recurring::setBillingDay()
     * @uses Recurring::setStartDate()
     * @uses Recurring::setEndDate()
     * @uses Recurring::setNewAmount()
     * @uses Recurring::setAmountModificationDate()
     * @uses Recurring::setBillingRank()
     */
    public function __construct(?string $amount = null, ?string $billingCycle = null, ?string $billingLeft = null, ?string $firstAmount = null, ?string $billingDay = null, ?string $startDate = null, ?string $endDate = null, ?string $newAmount = null, ?string $amountModificationDate = null, ?string $billingRank = null)
    {
        $this
            ->setAmount($amount)
            ->setBillingCycle($billingCycle)
            ->setBillingLeft($billingLeft)
            ->setFirstAmount($firstAmount)
            ->setBillingDay($billingDay)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setNewAmount($newAmount)
            ->setAmountModificationDate($amountModificationDate)
            ->setBillingRank($billingRank);
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
     * @return Recurring
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
     * Get billingCycle value
     * @return string|null
     */
    public function getBillingCycle(): ?string
    {
        return $this->billingCycle;
    }

    /**
     * Set billingCycle value
     * @param string|null $billingCycle
     * @return Recurring
     */
    public function setBillingCycle(?string $billingCycle = null): self
    {
        // validation for constraint: string
        if (!is_null($billingCycle) && !is_string($billingCycle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCycle, true), gettype($billingCycle)), __LINE__);
        }
        $this->billingCycle = $billingCycle;

        return $this;
    }

    /**
     * Get billingLeft value
     * @return string|null
     */
    public function getBillingLeft(): ?string
    {
        return $this->billingLeft;
    }

    /**
     * Set billingLeft value
     * @param string|null $billingLeft
     * @return Recurring
     */
    public function setBillingLeft(?string $billingLeft = null): self
    {
        // validation for constraint: string
        if (!is_null($billingLeft) && !is_string($billingLeft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingLeft, true), gettype($billingLeft)), __LINE__);
        }
        $this->billingLeft = $billingLeft;

        return $this;
    }

    /**
     * Get firstAmount value
     * @return string|null
     */
    public function getFirstAmount(): ?string
    {
        return $this->firstAmount;
    }

    /**
     * Set firstAmount value
     * @param string|null $firstAmount
     * @return Recurring
     */
    public function setFirstAmount(?string $firstAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($firstAmount) && !is_string($firstAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstAmount, true), gettype($firstAmount)), __LINE__);
        }
        $this->firstAmount = $firstAmount;

        return $this;
    }

    /**
     * Get billingDay value
     * @return string|null
     */
    public function getBillingDay(): ?string
    {
        return $this->billingDay;
    }

    /**
     * Set billingDay value
     * @param string|null $billingDay
     * @return Recurring
     */
    public function setBillingDay(?string $billingDay = null): self
    {
        // validation for constraint: string
        if (!is_null($billingDay) && !is_string($billingDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingDay, true), gettype($billingDay)), __LINE__);
        }
        $this->billingDay = $billingDay;

        return $this;
    }

    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Set startDate value
     * @param string|null $startDate
     * @return Recurring
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * Set endDate value
     * @param string|null $endDate
     * @return Recurring
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get newAmount value
     * @return string|null
     */
    public function getNewAmount(): ?string
    {
        return $this->newAmount;
    }

    /**
     * Set newAmount value
     * @param string|null $newAmount
     * @return Recurring
     */
    public function setNewAmount(?string $newAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($newAmount) && !is_string($newAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newAmount, true), gettype($newAmount)), __LINE__);
        }
        $this->newAmount = $newAmount;

        return $this;
    }

    /**
     * Get amountModificationDate value
     * @return string|null
     */
    public function getAmountModificationDate(): ?string
    {
        return $this->amountModificationDate;
    }

    /**
     * Set amountModificationDate value
     * @param string|null $amountModificationDate
     * @return Recurring
     */
    public function setAmountModificationDate(?string $amountModificationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($amountModificationDate) && !is_string($amountModificationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amountModificationDate, true), gettype($amountModificationDate)), __LINE__);
        }
        $this->amountModificationDate = $amountModificationDate;

        return $this;
    }

    /**
     * Get billingRank value
     * @return string|null
     */
    public function getBillingRank(): ?string
    {
        return $this->billingRank;
    }

    /**
     * Set billingRank value
     * @param string|null $billingRank
     * @return Recurring
     */
    public function setBillingRank(?string $billingRank = null): self
    {
        // validation for constraint: string
        if (!is_null($billingRank) && !is_string($billingRank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingRank, true), gettype($billingRank)), __LINE__);
        }
        $this->billingRank = $billingRank;

        return $this;
    }
}
