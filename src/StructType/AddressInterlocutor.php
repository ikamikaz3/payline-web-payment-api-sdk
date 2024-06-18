<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressInterlocutor StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about Interlocutor address
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressInterlocutor extends AbstractStructBase
{
    /**
     * The street1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $street1 = null;
    /**
     * The street2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $street2 = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * Constructor method for addressInterlocutor
     * @uses AddressInterlocutor::setStreet1()
     * @uses AddressInterlocutor::setStreet2()
     * @uses AddressInterlocutor::setCity()
     * @uses AddressInterlocutor::setZipCode()
     * @uses AddressInterlocutor::setState()
     * @uses AddressInterlocutor::setCountry()
     * @param string $street1
     * @param string $street2
     * @param string $city
     * @param string $zipCode
     * @param string $state
     * @param string $country
     */
    public function __construct(?string $street1 = null, ?string $street2 = null, ?string $city = null, ?string $zipCode = null, ?string $state = null, ?string $country = null)
    {
        $this
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setCity($city)
            ->setZipCode($zipCode)
            ->setState($state)
            ->setCountry($country);
    }
    /**
     * Get street1 value
     * @return string|null
     */
    public function getStreet1(): ?string
    {
        return $this->street1;
    }
    /**
     * Set street1 value
     * @param string $street1
     * @return \StructType\AddressInterlocutor
     */
    public function setStreet1(?string $street1 = null): self
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street1, true), gettype($street1)), __LINE__);
        }
        $this->street1 = $street1;
        
        return $this;
    }
    /**
     * Get street2 value
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->street2;
    }
    /**
     * Set street2 value
     * @param string $street2
     * @return \StructType\AddressInterlocutor
     */
    public function setStreet2(?string $street2 = null): self
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street2, true), gettype($street2)), __LINE__);
        }
        $this->street2 = $street2;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \StructType\AddressInterlocutor
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
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
     * @return \StructType\AddressInterlocutor
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
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \StructType\AddressInterlocutor
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
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
     * @return \StructType\AddressInterlocutor
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
}
