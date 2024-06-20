<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for owner StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the owner
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Owner extends AbstractStructBase
{
    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastName = null;
    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The billingAddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\AddressOwner|null
     */
    protected ?\StructType\AddressOwner $billingAddress = null;
    /**
     * The issueCardDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $issueCardDate = null;
    /**
     * Constructor method for owner
     * @uses Owner::setLastName()
     * @uses Owner::setFirstName()
     * @uses Owner::setBillingAddress()
     * @uses Owner::setIssueCardDate()
     * @param string $lastName
     * @param string $firstName
     * @param \StructType\AddressOwner $billingAddress
     * @param string $issueCardDate
     */
    public function __construct(?string $lastName = null, ?string $firstName = null, ?\StructType\AddressOwner $billingAddress = null, ?string $issueCardDate = null)
    {
        $this
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setBillingAddress($billingAddress)
            ->setIssueCardDate($issueCardDate);
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
     * @return \StructType\Owner
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
     * @return \StructType\Owner
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
     * Get billingAddress value
     * @return \StructType\AddressOwner|null
     */
    public function getBillingAddress(): ?\StructType\AddressOwner
    {
        return $this->billingAddress;
    }
    /**
     * Set billingAddress value
     * @param \StructType\AddressOwner $billingAddress
     * @return \StructType\Owner
     */
    public function setBillingAddress(?\StructType\AddressOwner $billingAddress = null): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }
    /**
     * Get issueCardDate value
     * @return string|null
     */
    public function getIssueCardDate(): ?string
    {
        return $this->issueCardDate;
    }
    /**
     * Set issueCardDate value
     * @param string $issueCardDate
     * @return \StructType\Owner
     */
    public function setIssueCardDate(?string $issueCardDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueCardDate) && !is_string($issueCardDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueCardDate, true), gettype($issueCardDate)), __LINE__);
        }
        $this->issueCardDate = $issueCardDate;

        return $this;
    }
}
