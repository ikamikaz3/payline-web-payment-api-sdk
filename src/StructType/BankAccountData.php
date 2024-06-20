<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankAccountData StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains bank Account information
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class BankAccountData extends AbstractStructBase
{
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $countryCode = null;

    /**
     * The bankCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $bankCode = null;

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
     * Constructor method for bankAccountData
     * @param string|null $countryCode
     * @param string|null $bankCode
     * @param string|null $accountNumber
     * @param string|null $key
     * @uses BankAccountData::setCountryCode()
     * @uses BankAccountData::setBankCode()
     * @uses BankAccountData::setAccountNumber()
     * @uses BankAccountData::setKey()
     */
    public function __construct(?string $countryCode = null, ?string $bankCode = null, ?string $accountNumber = null, ?string $key = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setBankCode($bankCode)
            ->setAccountNumber($accountNumber)
            ->setKey($key);
    }

    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Set countryCode value
     * @param string|null $countryCode
     * @return BankAccountData
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get bankCode value
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * Set bankCode value
     * @param string|null $bankCode
     * @return BankAccountData
     */
    public function setBankCode(?string $bankCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCode) && !is_string($bankCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCode, true), gettype($bankCode)), __LINE__);
        }
        $this->bankCode = $bankCode;

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
     * @param string|null $accountNumber
     * @return BankAccountData
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
     * @param string|null $key
     * @return BankAccountData
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
