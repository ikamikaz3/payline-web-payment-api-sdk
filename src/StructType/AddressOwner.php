<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressOwner StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the address
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressOwner extends AbstractStructBase
{
    /**
     * The street
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The cityName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cityName = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * Constructor method for addressOwner
     * @uses AddressOwner::setStreet()
     * @uses AddressOwner::setCityName()
     * @uses AddressOwner::setZipCode()
     * @uses AddressOwner::setCountry()
     * @uses AddressOwner::setPhone()
     * @param string $street
     * @param string $cityName
     * @param string $zipCode
     * @param string $country
     * @param string $phone
     */
    public function __construct(?string $street = null, ?string $cityName = null, ?string $zipCode = null, ?string $country = null, ?string $phone = null)
    {
        $this
            ->setStreet($street)
            ->setCityName($cityName)
            ->setZipCode($zipCode)
            ->setCountry($country)
            ->setPhone($phone);
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \StructType\AddressOwner
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get cityName value
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }
    /**
     * Set cityName value
     * @param string $cityName
     * @return \StructType\AddressOwner
     */
    public function setCityName(?string $cityName = null): self
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        $this->cityName = $cityName;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \StructType\AddressOwner
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \StructType\AddressOwner
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \StructType\AddressOwner
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
}
