<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for interlocutor StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about Interlocutor
 * @subpackage Structs
 */
#[AllowDynamicProperties]
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
     * @var AddressInterlocutor|null
     */
    protected ?AddressInterlocutor $addressInterlocutor = null;

    /**
     * Constructor method for interlocutor
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string|null $email
     * @param string|null $phone
     * @param string|null $mobile
     * @param string|null $fax
     * @param AddressInterlocutor|null $addressInterlocutor
     * @uses Interlocutor::setFirstName()
     * @uses Interlocutor::setLastName()
     * @uses Interlocutor::setEmail()
     * @uses Interlocutor::setPhone()
     * @uses Interlocutor::setMobile()
     * @uses Interlocutor::setFax()
     * @uses Interlocutor::setAddressInterlocutor()
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $phone = null, ?string $mobile = null, ?string $fax = null, ?AddressInterlocutor $addressInterlocutor = null)
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
     * @param string|null $firstName
     * @return Interlocutor
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
     * @param string|null $lastName
     * @return Interlocutor
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
     * @param string|null $email
     * @return Interlocutor
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
     * @param string|null $phone
     * @return Interlocutor
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
     * @param string|null $mobile
     * @return Interlocutor
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
     * @param string|null $fax
     * @return Interlocutor
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
     * @return AddressInterlocutor|null
     */
    public function getAddressInterlocutor(): ?AddressInterlocutor
    {
        return $this->addressInterlocutor;
    }

    /**
     * Set addressInterlocutor value
     * @param AddressInterlocutor|null $addressInterlocutor
     * @return Interlocutor
     */
    public function setAddressInterlocutor(?AddressInterlocutor $addressInterlocutor = null): self
    {
        $this->addressInterlocutor = $addressInterlocutor;

        return $this;
    }
}
