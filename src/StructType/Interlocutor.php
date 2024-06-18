<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for interlocutor StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about Interlocutor
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Interlocutor extends AbstractStructBase
{
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The addressInterlocutor
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\AddressInterlocutor|null
     */
    protected ?\StructType\AddressInterlocutor $addressInterlocutor = null;
    /**
     * Constructor method for interlocutor
     * @uses Interlocutor::setFirstName()
     * @uses Interlocutor::setLastName()
     * @uses Interlocutor::setEmail()
     * @uses Interlocutor::setPhone()
     * @uses Interlocutor::setMobile()
     * @uses Interlocutor::setFax()
     * @uses Interlocutor::setAddressInterlocutor()
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     * @param string $mobile
     * @param string $fax
     * @param \StructType\AddressInterlocutor $addressInterlocutor
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $phone = null, ?string $mobile = null, ?string $fax = null, ?\StructType\AddressInterlocutor $addressInterlocutor = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setPhone($phone)
            ->setMobile($mobile)
            ->setFax($fax)
            ->setAddressInterlocutor($addressInterlocutor);
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \StructType\Interlocutor
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \StructType\Interlocutor
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \StructType\Interlocutor
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
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
     * @return \StructType\Interlocutor
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
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \StructType\Interlocutor
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \StructType\Interlocutor
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get addressInterlocutor value
     * @return \StructType\AddressInterlocutor|null
     */
    public function getAddressInterlocutor(): ?\StructType\AddressInterlocutor
    {
        return $this->addressInterlocutor;
    }
    /**
     * Set addressInterlocutor value
     * @param \StructType\AddressInterlocutor $addressInterlocutor
     * @return \StructType\Interlocutor
     */
    public function setAddressInterlocutor(?\StructType\AddressInterlocutor $addressInterlocutor = null): self
    {
        $this->addressInterlocutor = $addressInterlocutor;
        
        return $this;
    }
}
