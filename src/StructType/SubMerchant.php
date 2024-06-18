<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subMerchant StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about a subMerchant associated with a Payment Facilitator
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SubMerchant extends AbstractStructBase
{
    /**
     * The subMerchantMCC
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $subMerchantMCC;
    /**
     * The subMerchantId
     * Meta information extracted from the WSDL
     * - nillable: false
     * - required: true
     * @var string|null
     */
    protected ?string $subMerchantId = null;
    /**
     * The subMerchantName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantName = null;
    /**
     * The subMerchantSIRET
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantSIRET = null;
    /**
     * The subMerchantTaxCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantTaxCode = null;
    /**
     * The subMerchantStreet
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantStreet = null;
    /**
     * The subMerchantCity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantCity = null;
    /**
     * The subMerchantZipCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantZipCode = null;
    /**
     * The subMerchantCountry
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantCountry = null;
    /**
     * The subMerchantState
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantState = null;
    /**
     * The subMerchantEmailAddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantEmailAddress = null;
    /**
     * The subMerchantPhoneNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $subMerchantPhoneNumber = null;
    /**
     * Constructor method for subMerchant
     * @uses SubMerchant::setSubMerchantMCC()
     * @uses SubMerchant::setSubMerchantId()
     * @uses SubMerchant::setSubMerchantName()
     * @uses SubMerchant::setSubMerchantSIRET()
     * @uses SubMerchant::setSubMerchantTaxCode()
     * @uses SubMerchant::setSubMerchantStreet()
     * @uses SubMerchant::setSubMerchantCity()
     * @uses SubMerchant::setSubMerchantZipCode()
     * @uses SubMerchant::setSubMerchantCountry()
     * @uses SubMerchant::setSubMerchantState()
     * @uses SubMerchant::setSubMerchantEmailAddress()
     * @uses SubMerchant::setSubMerchantPhoneNumber()
     * @param string $subMerchantMCC
     * @param string $subMerchantId
     * @param string $subMerchantName
     * @param string $subMerchantSIRET
     * @param string $subMerchantTaxCode
     * @param string $subMerchantStreet
     * @param string $subMerchantCity
     * @param string $subMerchantZipCode
     * @param string $subMerchantCountry
     * @param string $subMerchantState
     * @param string $subMerchantEmailAddress
     * @param string $subMerchantPhoneNumber
     */
    public function __construct(string $subMerchantMCC, ?string $subMerchantId = null, ?string $subMerchantName = null, ?string $subMerchantSIRET = null, ?string $subMerchantTaxCode = null, ?string $subMerchantStreet = null, ?string $subMerchantCity = null, ?string $subMerchantZipCode = null, ?string $subMerchantCountry = null, ?string $subMerchantState = null, ?string $subMerchantEmailAddress = null, ?string $subMerchantPhoneNumber = null)
    {
        $this
            ->setSubMerchantMCC($subMerchantMCC)
            ->setSubMerchantId($subMerchantId)
            ->setSubMerchantName($subMerchantName)
            ->setSubMerchantSIRET($subMerchantSIRET)
            ->setSubMerchantTaxCode($subMerchantTaxCode)
            ->setSubMerchantStreet($subMerchantStreet)
            ->setSubMerchantCity($subMerchantCity)
            ->setSubMerchantZipCode($subMerchantZipCode)
            ->setSubMerchantCountry($subMerchantCountry)
            ->setSubMerchantState($subMerchantState)
            ->setSubMerchantEmailAddress($subMerchantEmailAddress)
            ->setSubMerchantPhoneNumber($subMerchantPhoneNumber);
    }
    /**
     * Get subMerchantMCC value
     * @return string
     */
    public function getSubMerchantMCC(): string
    {
        return $this->subMerchantMCC;
    }
    /**
     * Set subMerchantMCC value
     * @param string $subMerchantMCC
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantMCC(string $subMerchantMCC): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantMCC) && !is_string($subMerchantMCC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantMCC, true), gettype($subMerchantMCC)), __LINE__);
        }
        $this->subMerchantMCC = $subMerchantMCC;
        
        return $this;
    }
    /**
     * Get subMerchantId value
     * @return string|null
     */
    public function getSubMerchantId(): ?string
    {
        return $this->subMerchantId;
    }
    /**
     * Set subMerchantId value
     * @param string $subMerchantId
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantId(?string $subMerchantId = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantId) && !is_string($subMerchantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantId, true), gettype($subMerchantId)), __LINE__);
        }
        $this->subMerchantId = $subMerchantId;
        
        return $this;
    }
    /**
     * Get subMerchantName value
     * @return string|null
     */
    public function getSubMerchantName(): ?string
    {
        return $this->subMerchantName;
    }
    /**
     * Set subMerchantName value
     * @param string $subMerchantName
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantName(?string $subMerchantName = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantName) && !is_string($subMerchantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantName, true), gettype($subMerchantName)), __LINE__);
        }
        $this->subMerchantName = $subMerchantName;
        
        return $this;
    }
    /**
     * Get subMerchantSIRET value
     * @return string|null
     */
    public function getSubMerchantSIRET(): ?string
    {
        return $this->subMerchantSIRET;
    }
    /**
     * Set subMerchantSIRET value
     * @param string $subMerchantSIRET
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantSIRET(?string $subMerchantSIRET = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantSIRET) && !is_string($subMerchantSIRET)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantSIRET, true), gettype($subMerchantSIRET)), __LINE__);
        }
        $this->subMerchantSIRET = $subMerchantSIRET;
        
        return $this;
    }
    /**
     * Get subMerchantTaxCode value
     * @return string|null
     */
    public function getSubMerchantTaxCode(): ?string
    {
        return $this->subMerchantTaxCode;
    }
    /**
     * Set subMerchantTaxCode value
     * @param string $subMerchantTaxCode
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantTaxCode(?string $subMerchantTaxCode = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantTaxCode) && !is_string($subMerchantTaxCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantTaxCode, true), gettype($subMerchantTaxCode)), __LINE__);
        }
        $this->subMerchantTaxCode = $subMerchantTaxCode;
        
        return $this;
    }
    /**
     * Get subMerchantStreet value
     * @return string|null
     */
    public function getSubMerchantStreet(): ?string
    {
        return $this->subMerchantStreet;
    }
    /**
     * Set subMerchantStreet value
     * @param string $subMerchantStreet
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantStreet(?string $subMerchantStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantStreet) && !is_string($subMerchantStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantStreet, true), gettype($subMerchantStreet)), __LINE__);
        }
        $this->subMerchantStreet = $subMerchantStreet;
        
        return $this;
    }
    /**
     * Get subMerchantCity value
     * @return string|null
     */
    public function getSubMerchantCity(): ?string
    {
        return $this->subMerchantCity;
    }
    /**
     * Set subMerchantCity value
     * @param string $subMerchantCity
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantCity(?string $subMerchantCity = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantCity) && !is_string($subMerchantCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantCity, true), gettype($subMerchantCity)), __LINE__);
        }
        $this->subMerchantCity = $subMerchantCity;
        
        return $this;
    }
    /**
     * Get subMerchantZipCode value
     * @return string|null
     */
    public function getSubMerchantZipCode(): ?string
    {
        return $this->subMerchantZipCode;
    }
    /**
     * Set subMerchantZipCode value
     * @param string $subMerchantZipCode
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantZipCode(?string $subMerchantZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantZipCode) && !is_string($subMerchantZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantZipCode, true), gettype($subMerchantZipCode)), __LINE__);
        }
        $this->subMerchantZipCode = $subMerchantZipCode;
        
        return $this;
    }
    /**
     * Get subMerchantCountry value
     * @return string|null
     */
    public function getSubMerchantCountry(): ?string
    {
        return $this->subMerchantCountry;
    }
    /**
     * Set subMerchantCountry value
     * @param string $subMerchantCountry
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantCountry(?string $subMerchantCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantCountry) && !is_string($subMerchantCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantCountry, true), gettype($subMerchantCountry)), __LINE__);
        }
        $this->subMerchantCountry = $subMerchantCountry;
        
        return $this;
    }
    /**
     * Get subMerchantState value
     * @return string|null
     */
    public function getSubMerchantState(): ?string
    {
        return $this->subMerchantState;
    }
    /**
     * Set subMerchantState value
     * @param string $subMerchantState
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantState(?string $subMerchantState = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantState) && !is_string($subMerchantState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantState, true), gettype($subMerchantState)), __LINE__);
        }
        $this->subMerchantState = $subMerchantState;
        
        return $this;
    }
    /**
     * Get subMerchantEmailAddress value
     * @return string|null
     */
    public function getSubMerchantEmailAddress(): ?string
    {
        return $this->subMerchantEmailAddress;
    }
    /**
     * Set subMerchantEmailAddress value
     * @param string $subMerchantEmailAddress
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantEmailAddress(?string $subMerchantEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantEmailAddress) && !is_string($subMerchantEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantEmailAddress, true), gettype($subMerchantEmailAddress)), __LINE__);
        }
        $this->subMerchantEmailAddress = $subMerchantEmailAddress;
        
        return $this;
    }
    /**
     * Get subMerchantPhoneNumber value
     * @return string|null
     */
    public function getSubMerchantPhoneNumber(): ?string
    {
        return $this->subMerchantPhoneNumber;
    }
    /**
     * Set subMerchantPhoneNumber value
     * @param string $subMerchantPhoneNumber
     * @return \StructType\SubMerchant
     */
    public function setSubMerchantPhoneNumber(?string $subMerchantPhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($subMerchantPhoneNumber) && !is_string($subMerchantPhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subMerchantPhoneNumber, true), gettype($subMerchantPhoneNumber)), __LINE__);
        }
        $this->subMerchantPhoneNumber = $subMerchantPhoneNumber;
        
        return $this;
    }
}
