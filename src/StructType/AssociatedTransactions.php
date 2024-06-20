<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for associatedTransactions StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the associated transactions
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssociatedTransactions extends AbstractStructBase
{
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $type = null;
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
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for associatedTransactions
     * @uses AssociatedTransactions::setTransactionId()
     * @uses AssociatedTransactions::setType()
     * @uses AssociatedTransactions::setDate()
     * @uses AssociatedTransactions::setAmount()
     * @uses AssociatedTransactions::setStatus()
     * @uses AssociatedTransactions::setOriginTransactionId()
     * @uses AssociatedTransactions::setCurrency()
     * @param string $transactionId
     * @param string $type
     * @param string $date
     * @param string $amount
     * @param string $status
     * @param string $originTransactionId
     * @param string $currency
     */
    public function __construct(?string $transactionId = null, ?string $type = null, ?string $date = null, ?string $amount = null, ?string $status = null, ?string $originTransactionId = null, ?string $currency = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setType($type)
            ->setDate($date)
            ->setAmount($amount)
            ->setStatus($status)
            ->setOriginTransactionId($originTransactionId)
            ->setCurrency($currency);
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
     * @return \StructType\AssociatedTransactions
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\AssociatedTransactions
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;

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
     * @return \StructType\AssociatedTransactions
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
     * @return \StructType\AssociatedTransactions
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
     * @param string $status
     * @return \StructType\AssociatedTransactions
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
     * @return \StructType\AssociatedTransactions
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
     * Get currency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency ?? null;
    }
    /**
     * Set currency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency
     * @return \StructType\AssociatedTransactions
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->currency);
        } else {
            $this->currency = $currency;
        }

        return $this;
    }
}
