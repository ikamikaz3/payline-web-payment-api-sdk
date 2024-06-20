<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyAuthenticationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doAuthentication method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyAuthenticationRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The pares
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $pares = null;
    /**
     * The transient
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transient = null;
    /**
     * The md
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $md = null;
    /**
     * The card
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $card = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * Constructor method for verifyAuthenticationRequest
     * @uses VerifyAuthenticationRequest::setVersion()
     * @uses VerifyAuthenticationRequest::setContractNumber()
     * @uses VerifyAuthenticationRequest::setPares()
     * @uses VerifyAuthenticationRequest::setTransient()
     * @uses VerifyAuthenticationRequest::setMd()
     * @uses VerifyAuthenticationRequest::setCard()
     * @uses VerifyAuthenticationRequest::setPrivateDataList()
     * @param string $version
     * @param string $contractNumber
     * @param string $pares
     * @param string $transient
     * @param string $md
     * @param \StructType\Card $card
     * @param \StructType\PrivateDataList $privateDataList
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?string $pares = null, ?string $transient = null, ?string $md = null, ?\StructType\Card $card = null, ?\StructType\PrivateDataList $privateDataList = null)
    {
        $this
            ->setVersion($version)
            ->setContractNumber($contractNumber)
            ->setPares($pares)
            ->setTransient($transient)
            ->setMd($md)
            ->setCard($card)
            ->setPrivateDataList($privateDataList);
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        
        return $this;
    }
    /**
     * Get pares value
     * @return string|null
     */
    public function getPares(): ?string
    {
        return $this->pares;
    }
    /**
     * Set pares value
     * @param string $pares
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setPares(?string $pares = null): self
    {
        // validation for constraint: string
        if (!is_null($pares) && !is_string($pares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pares, true), gettype($pares)), __LINE__);
        }
        $this->pares = $pares;
        
        return $this;
    }
    /**
     * Get transient value
     * @return string|null
     */
    public function getTransient(): ?string
    {
        return $this->transient;
    }
    /**
     * Set transient value
     * @param string $transient
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setTransient(?string $transient = null): self
    {
        // validation for constraint: string
        if (!is_null($transient) && !is_string($transient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transient, true), gettype($transient)), __LINE__);
        }
        $this->transient = $transient;
        
        return $this;
    }
    /**
     * Get md value
     * @return string|null
     */
    public function getMd(): ?string
    {
        return $this->md;
    }
    /**
     * Set md value
     * @param string $md
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setMd(?string $md = null): self
    {
        // validation for constraint: string
        if (!is_null($md) && !is_string($md)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($md, true), gettype($md)), __LINE__);
        }
        $this->md = $md;
        
        return $this;
    }
    /**
     * Get card value
     * @return \StructType\Card|null
     */
    public function getCard(): ?\StructType\Card
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param \StructType\Card $card
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setCard(?\StructType\Card $card = null): self
    {
        $this->card = $card;
        
        return $this;
    }
    /**
     * Get privateDataList value
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList;
    }
    /**
     * Set privateDataList value
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\VerifyAuthenticationRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
}
