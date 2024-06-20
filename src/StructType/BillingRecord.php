<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingRecord StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for a billing record
 * @subpackage Structs
 */
class BillingRecord extends AbstractStructBase
{
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
     * The result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Authorization|null
     */
    protected ?Authorization $authorization = null;

    /**
     * The nbTry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $nbTry = null;

    /**
     * The rank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $rank = null;

    /**
     * Constructor method for billingRecord
     * @param string|null $date
     * @param string|null $amount
     * @param string|null $status
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param Authorization|null $authorization
     * @param string|null $nbTry
     * @param string|null $rank
     * @uses BillingRecord::setDate()
     * @uses BillingRecord::setAmount()
     * @uses BillingRecord::setStatus()
     * @uses BillingRecord::setResult()
     * @uses BillingRecord::setTransaction()
     * @uses BillingRecord::setAuthorization()
     * @uses BillingRecord::setNbTry()
     * @uses BillingRecord::setRank()
     */
    public function __construct(?string $date = null, ?string $amount = null, ?string $status = null, ?Result $result = null, ?Transaction $transaction = null, ?Authorization $authorization = null, ?string $nbTry = null, ?string $rank = null)
    {
        $this
            ->setDate($date)
            ->setAmount($amount)
            ->setStatus($status)
            ->setResult($result)
            ->setTransaction($transaction)
            ->setAuthorization($authorization)
            ->setNbTry($nbTry)
            ->setRank($rank);
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
     * @return BillingRecord
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
     * @return BillingRecord
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
     * @return BillingRecord
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
     * Get result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result ?? null;
    }

    /**
     * Set result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Result|null $result
     * @return BillingRecord
     */
    public function setResult(?Result $result = null): self
    {
        if (is_null($result)) {
            unset($this->result);
        } else {
            $this->result = $result;
        }

        return $this;
    }

    /**
     * Get transaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->transaction ?? null;
    }

    /**
     * Set transaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Transaction|null $transaction
     * @return BillingRecord
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        if (is_null($transaction)) {
            unset($this->transaction);
        } else {
            $this->transaction = $transaction;
        }

        return $this;
    }

    /**
     * Get authorization value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Authorization|null
     */
    public function getAuthorization(): ?Authorization
    {
        return $this->authorization ?? null;
    }

    /**
     * Set authorization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Authorization|null $authorization
     * @return BillingRecord
     */
    public function setAuthorization(?Authorization $authorization = null): self
    {
        if (is_null($authorization)) {
            unset($this->authorization);
        } else {
            $this->authorization = $authorization;
        }

        return $this;
    }

    /**
     * Get nbTry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNbTry(): ?string
    {
        return $this->nbTry ?? null;
    }

    /**
     * Set nbTry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $nbTry
     * @return BillingRecord
     */
    public function setNbTry(?string $nbTry = null): self
    {
        // validation for constraint: string
        if (!is_null($nbTry) && !is_string($nbTry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbTry, true), gettype($nbTry)), __LINE__);
        }
        if (is_null($nbTry)) {
            unset($this->nbTry);
        } else {
            $this->nbTry = $nbTry;
        }

        return $this;
    }

    /**
     * Get rank value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRank(): ?string
    {
        return $this->rank ?? null;
    }

    /**
     * Set rank value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $rank
     * @return BillingRecord
     */
    public function setRank(?string $rank = null): self
    {
        // validation for constraint: string
        if (!is_null($rank) && !is_string($rank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        if (is_null($rank)) {
            unset($this->rank);
        } else {
            $this->rank = $rank;
        }

        return $this;
    }
}
