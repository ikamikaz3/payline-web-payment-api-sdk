<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rib StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains RIB information
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Rib extends AbstractStructBase
{
    /**
     * The tellerCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $tellerCode = null;
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * Constructor method for rib
     * @uses Rib::setTellerCode()
     * @uses Rib::setAccountNumber()
     * @uses Rib::setKey()
     * @param string $tellerCode
     * @param string $accountNumber
     * @param string $key
     */
    public function __construct(?string $tellerCode = null, ?string $accountNumber = null, ?string $key = null)
    {
        $this
            ->setTellerCode($tellerCode)
            ->setAccountNumber($accountNumber)
            ->setKey($key);
    }
    /**
     * Get tellerCode value
     * @return string|null
     */
    public function getTellerCode(): ?string
    {
        return $this->tellerCode;
    }
    /**
     * Set tellerCode value
     * @param string $tellerCode
     * @return \StructType\Rib
     */
    public function setTellerCode(?string $tellerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tellerCode) && !is_string($tellerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tellerCode, true), gettype($tellerCode)), __LINE__);
        }
        $this->tellerCode = $tellerCode;

        return $this;
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \StructType\Rib
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \StructType\Rib
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;

        return $this;
    }
}
