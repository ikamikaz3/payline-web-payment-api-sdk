<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the address
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Address extends AbstractStructBase
{
    /**
     * The title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The street1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $street1 = null;
    /**
     * The street2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $street2 = null;
    /**
     * The streetNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $streetNumber = null;
    /**
     * The cityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cityName = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The county
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $county = null;
    /**
     * The phoneType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $phoneType = null;
    /**
     * The addressCreateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $addressCreateDate = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for address
     * @uses Address::setTitle()
     * @uses Address::setName()
     * @uses Address::setFirstName()
     * @uses Address::setLastName()
     * @uses Address::setStreet1()
     * @uses Address::setStreet2()
     * @uses Address::setStreetNumber()
     * @uses Address::setCityName()
     * @uses Address::setZipCode()
     * @uses Address::setCountry()
     * @uses Address::setPhone()
     * @uses Address::setState()
     * @uses Address::setCounty()
     * @uses Address::setPhoneType()
     * @uses Address::setAddressCreateDate()
     * @uses Address::setEmail()
     * @param string $title
     * @param string $name
     * @param string $firstName
     * @param string $lastName
     * @param string $street1
     * @param string $street2
     * @param string $streetNumber
     * @param string $cityName
     * @param string $zipCode
     * @param string $country
     * @param string $phone
     * @param string $state
     * @param string $county
     * @param string $phoneType
     * @param string $addressCreateDate
     * @param string $email
     */
    public function __construct(?string $title = null, ?string $name = null, ?string $firstName = null, ?string $lastName = null, ?string $street1 = null, ?string $street2 = null, ?string $streetNumber = null, ?string $cityName = null, ?string $zipCode = null, ?string $country = null, ?string $phone = null, ?string $state = null, ?string $county = null, ?string $phoneType = null, ?string $addressCreateDate = null, ?string $email = null)
    {
        $this
            ->setTitle($title)
            ->setName($name)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setStreetNumber($streetNumber)
            ->setCityName($cityName)
            ->setZipCode($zipCode)
            ->setCountry($country)
            ->setPhone($phone)
            ->setState($state)
            ->setCounty($county)
            ->setPhoneType($phoneType)
            ->setAddressCreateDate($addressCreateDate)
            ->setEmail($email);
    }
    /**
     * Get title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }
    /**
     * Set title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \StructType\Address
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->title);
        } else {
            $this->title = $title;
        }
        
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\Address
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get firstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName ?? null;
    }
    /**
     * Set firstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \StructType\Address
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->firstName);
        } else {
            $this->firstName = $firstName;
        }
        
        return $this;
    }
    /**
     * Get lastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName ?? null;
    }
    /**
     * Set lastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \StructType\Address
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->lastName);
        } else {
            $this->lastName = $lastName;
        }
        
        return $this;
    }
    /**
     * Get street1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet1(): ?string
    {
        return $this->street1 ?? null;
    }
    /**
     * Set street1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street1
     * @return \StructType\Address
     */
    public function setStreet1(?string $street1 = null): self
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street1, true), gettype($street1)), __LINE__);
        }
        if (is_null($street1) || (is_array($street1) && empty($street1))) {
            unset($this->street1);
        } else {
            $this->street1 = $street1;
        }
        
        return $this;
    }
    /**
     * Get street2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->street2 ?? null;
    }
    /**
     * Set street2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street2
     * @return \StructType\Address
     */
    public function setStreet2(?string $street2 = null): self
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street2, true), gettype($street2)), __LINE__);
        }
        if (is_null($street2) || (is_array($street2) && empty($street2))) {
            unset($this->street2);
        } else {
            $this->street2 = $street2;
        }
        
        return $this;
    }
    /**
     * Get streetNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber ?? null;
    }
    /**
     * Set streetNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $streetNumber
     * @return \StructType\Address
     */
    public function setStreetNumber(?string $streetNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNumber) && !is_string($streetNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNumber, true), gettype($streetNumber)), __LINE__);
        }
        if (is_null($streetNumber) || (is_array($streetNumber) && empty($streetNumber))) {
            unset($this->streetNumber);
        } else {
            $this->streetNumber = $streetNumber;
        }
        
        return $this;
    }
    /**
     * Get cityName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName ?? null;
    }
    /**
     * Set cityName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cityName
     * @return \StructType\Address
     */
    public function setCityName(?string $cityName = null): self
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        if (is_null($cityName) || (is_array($cityName) && empty($cityName))) {
            unset($this->cityName);
        } else {
            $this->cityName = $cityName;
        }
        
        return $this;
    }
    /**
     * Get zipCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode ?? null;
    }
    /**
     * Set zipCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zipCode
     * @return \StructType\Address
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        if (is_null($zipCode) || (is_array($zipCode) && empty($zipCode))) {
            unset($this->zipCode);
        } else {
            $this->zipCode = $zipCode;
        }
        
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country ?? null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \StructType\Address
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        
        return $this;
    }
    /**
     * Get phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone ?? null;
    }
    /**
     * Set phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \StructType\Address
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->phone);
        } else {
            $this->phone = $phone;
        }
        
        return $this;
    }
    /**
     * Get state value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state ?? null;
    }
    /**
     * Set state value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \StructType\Address
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->state);
        } else {
            $this->state = $state;
        }
        
        return $this;
    }
    /**
     * Get county value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCounty(): ?string
    {
        return $this->county ?? null;
    }
    /**
     * Set county value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $county
     * @return \StructType\Address
     */
    public function setCounty(?string $county = null): self
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($county, true), gettype($county)), __LINE__);
        }
        if (is_null($county) || (is_array($county) && empty($county))) {
            unset($this->county);
        } else {
            $this->county = $county;
        }
        
        return $this;
    }
    /**
     * Get phoneType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneType(): ?string
    {
        return $this->phoneType ?? null;
    }
    /**
     * Set phoneType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneType
     * @return \StructType\Address
     */
    public function setPhoneType(?string $phoneType = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneType) && !is_string($phoneType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneType, true), gettype($phoneType)), __LINE__);
        }
        if (is_null($phoneType) || (is_array($phoneType) && empty($phoneType))) {
            unset($this->phoneType);
        } else {
            $this->phoneType = $phoneType;
        }
        
        return $this;
    }
    /**
     * Get addressCreateDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressCreateDate(): ?string
    {
        return $this->addressCreateDate ?? null;
    }
    /**
     * Set addressCreateDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressCreateDate
     * @return \StructType\Address
     */
    public function setAddressCreateDate(?string $addressCreateDate = null): self
    {
        // validation for constraint: string
        if (!is_null($addressCreateDate) && !is_string($addressCreateDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressCreateDate, true), gettype($addressCreateDate)), __LINE__);
        }
        if (is_null($addressCreateDate) || (is_array($addressCreateDate) && empty($addressCreateDate))) {
            unset($this->addressCreateDate);
        } else {
            $this->addressCreateDate = $addressCreateDate;
        }
        
        return $this;
    }
    /**
     * Get email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }
    /**
     * Set email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \StructType\Address
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->email);
        } else {
            $this->email = $email;
        }
        
        return $this;
    }
}
