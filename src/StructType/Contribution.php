<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contribution StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains all information about contrinution
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Contribution extends AbstractStructBase
{
    /**
     * The enable
     * @var bool|null
     */
    protected ?bool $enable = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The nbFreeTransaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $nbFreeTransaction = null;
    /**
     * The minAmountTransaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $minAmountTransaction = null;
    /**
     * The maxAmountTransaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $maxAmountTransaction = null;
    /**
     * Constructor method for contribution
     * @uses Contribution::setEnable()
     * @uses Contribution::setType()
     * @uses Contribution::setValue()
     * @uses Contribution::setNbFreeTransaction()
     * @uses Contribution::setMinAmountTransaction()
     * @uses Contribution::setMaxAmountTransaction()
     * @param bool $enable
     * @param string $type
     * @param string $value
     * @param string $nbFreeTransaction
     * @param string $minAmountTransaction
     * @param string $maxAmountTransaction
     */
    public function __construct(?bool $enable = null, ?string $type = null, ?string $value = null, ?string $nbFreeTransaction = null, ?string $minAmountTransaction = null, ?string $maxAmountTransaction = null)
    {
        $this
            ->setEnable($enable)
            ->setType($type)
            ->setValue($value)
            ->setNbFreeTransaction($nbFreeTransaction)
            ->setMinAmountTransaction($minAmountTransaction)
            ->setMaxAmountTransaction($maxAmountTransaction);
    }
    /**
     * Get enable value
     * @return bool|null
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }
    /**
     * Set enable value
     * @param bool $enable
     * @return \StructType\Contribution
     */
    public function setEnable(?bool $enable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enable) && !is_bool($enable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enable, true), gettype($enable)), __LINE__);
        }
        $this->enable = $enable;
        
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
     * @return \StructType\Contribution
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
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \StructType\Contribution
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get nbFreeTransaction value
     * @return string|null
     */
    public function getNbFreeTransaction(): ?string
    {
        return $this->nbFreeTransaction;
    }
    /**
     * Set nbFreeTransaction value
     * @param string $nbFreeTransaction
     * @return \StructType\Contribution
     */
    public function setNbFreeTransaction(?string $nbFreeTransaction = null): self
    {
        // validation for constraint: string
        if (!is_null($nbFreeTransaction) && !is_string($nbFreeTransaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nbFreeTransaction, true), gettype($nbFreeTransaction)), __LINE__);
        }
        $this->nbFreeTransaction = $nbFreeTransaction;
        
        return $this;
    }
    /**
     * Get minAmountTransaction value
     * @return string|null
     */
    public function getMinAmountTransaction(): ?string
    {
        return $this->minAmountTransaction;
    }
    /**
     * Set minAmountTransaction value
     * @param string $minAmountTransaction
     * @return \StructType\Contribution
     */
    public function setMinAmountTransaction(?string $minAmountTransaction = null): self
    {
        // validation for constraint: string
        if (!is_null($minAmountTransaction) && !is_string($minAmountTransaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minAmountTransaction, true), gettype($minAmountTransaction)), __LINE__);
        }
        $this->minAmountTransaction = $minAmountTransaction;
        
        return $this;
    }
    /**
     * Get maxAmountTransaction value
     * @return string|null
     */
    public function getMaxAmountTransaction(): ?string
    {
        return $this->maxAmountTransaction;
    }
    /**
     * Set maxAmountTransaction value
     * @param string $maxAmountTransaction
     * @return \StructType\Contribution
     */
    public function setMaxAmountTransaction(?string $maxAmountTransaction = null): self
    {
        // validation for constraint: string
        if (!is_null($maxAmountTransaction) && !is_string($maxAmountTransaction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxAmountTransaction, true), gettype($maxAmountTransaction)), __LINE__);
        }
        $this->maxAmountTransaction = $maxAmountTransaction;
        
        return $this;
    }
}
