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
#[\AllowDynamicProperties]
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
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
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
     * @uses BillingRecord::setDate()
     * @uses BillingRecord::setAmount()
     * @uses BillingRecord::setStatus()
     * @uses BillingRecord::setResult()
     * @uses BillingRecord::setTransaction()
     * @uses BillingRecord::setAuthorization()
     * @uses BillingRecord::setNbTry()
     * @uses BillingRecord::setRank()
     * @param string $date
     * @param string $amount
     * @param string $status
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\Authorization $authorization
     * @param string $nbTry
     * @param string $rank
     */
    public function __construct(?string $date = null, ?string $amount = null, ?string $status = null, ?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\Authorization $authorization = null, ?string $nbTry = null, ?string $rank = null)
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
     * @param string $date
     * @return \StructType\BillingRecord
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
     * @return \StructType\BillingRecord
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
     * @return \StructType\BillingRecord
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result ?? null;
    }
    /**
     * Set result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Result $result
     * @return \StructType\BillingRecord
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        if (is_null($result) || (is_array($result) && empty($result))) {
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
     * @return \StructType\Transaction|null
     */
    public function getTransaction(): ?\StructType\Transaction
    {
        return $this->transaction ?? null;
    }
    /**
     * Set transaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Transaction $transaction
     * @return \StructType\BillingRecord
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        if (is_null($transaction) || (is_array($transaction) && empty($transaction))) {
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
     * @return \StructType\Authorization|null
     */
    public function getAuthorization(): ?\StructType\Authorization
    {
        return $this->authorization ?? null;
    }
    /**
     * Set authorization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Authorization $authorization
     * @return \StructType\BillingRecord
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        if (is_null($authorization) || (is_array($authorization) && empty($authorization))) {
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
     * @param string $nbTry
     * @return \StructType\BillingRecord
     */
    public function setNbTry(?string $nbTry = null): self
    {
        // validation for constraint: string
        if (!is_null($nbTry) && !is_string($nbTry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbTry, true), gettype($nbTry)), __LINE__);
        }
        if (is_null($nbTry) || (is_array($nbTry) && empty($nbTry))) {
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
     * @param string $rank
     * @return \StructType\BillingRecord
     */
    public function setRank(?string $rank = null): self
    {
        // validation for constraint: string
        if (!is_null($rank) && !is_string($rank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rank, true), gettype($rank)), __LINE__);
        }
        if (is_null($rank) || (is_array($rank) && empty($rank))) {
            unset($this->rank);
        } else {
            $this->rank = $rank;
        }

        return $this;
    }
}
