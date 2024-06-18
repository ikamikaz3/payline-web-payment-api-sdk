<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recurringForUpdate StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for update a recurring operation
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecurringForUpdate extends AbstractStructBase
{
    /**
     * The billingLeft
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $billingLeft = null;
    /**
     * The billingDay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $billingDay = null;
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
     * Constructor method for recurringForUpdate
     * @uses RecurringForUpdate::setBillingLeft()
     * @uses RecurringForUpdate::setBillingDay()
     * @uses RecurringForUpdate::setEndDate()
     * @uses RecurringForUpdate::setNewAmount()
     * @uses RecurringForUpdate::setAmountModificationDate()
     * @param string $billingLeft
     * @param string $billingDay
     * @param string $endDate
     * @param string $newAmount
     * @param string $amountModificationDate
     */
    public function __construct(?string $billingLeft = null, ?string $billingDay = null, ?string $endDate = null, ?string $newAmount = null, ?string $amountModificationDate = null)
    {
        $this
            ->setBillingLeft($billingLeft)
            ->setBillingDay($billingDay)
            ->setEndDate($endDate)
            ->setNewAmount($newAmount)
            ->setAmountModificationDate($amountModificationDate);
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
     * @param string $billingLeft
     * @return \StructType\RecurringForUpdate
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
     * Get billingDay value
     * @return string|null
     */
    public function getBillingDay(): ?string
    {
        return $this->billingDay;
    }
    /**
     * Set billingDay value
     * @param string $billingDay
     * @return \StructType\RecurringForUpdate
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
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\RecurringForUpdate
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
     * @param string $newAmount
     * @return \StructType\RecurringForUpdate
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
     * @param string $amountModificationDate
     * @return \StructType\RecurringForUpdate
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
}
