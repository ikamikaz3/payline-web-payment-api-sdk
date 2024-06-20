<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyAuthenticationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doAuthentication method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
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
     * @var Card|null
     */
    protected ?Card $card = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * Constructor method for verifyAuthenticationRequest
     * @param string|null $version
     * @param string|null $contractNumber
     * @param string|null $pares
     * @param string|null $transient
     * @param string|null $md
     * @param Card|null $card
     * @param PrivateDataList|null $privateDataList
     * @uses VerifyAuthenticationRequest::setVersion()
     * @uses VerifyAuthenticationRequest::setContractNumber()
     * @uses VerifyAuthenticationRequest::setPares()
     * @uses VerifyAuthenticationRequest::setTransient()
     * @uses VerifyAuthenticationRequest::setMd()
     * @uses VerifyAuthenticationRequest::setCard()
     * @uses VerifyAuthenticationRequest::setPrivateDataList()
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?string $pares = null, ?string $transient = null, ?string $md = null, ?Card $card = null, ?PrivateDataList $privateDataList = null)
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
     * @param string|null $version
     * @return VerifyAuthenticationRequest
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
     * @param string|null $contractNumber
     * @return VerifyAuthenticationRequest
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
     * @param string|null $pares
     * @return VerifyAuthenticationRequest
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
     * @param string|null $transient
     * @return VerifyAuthenticationRequest
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
     * @param string|null $md
     * @return VerifyAuthenticationRequest
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
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param Card|null $card
     * @return VerifyAuthenticationRequest
     */
    public function setCard(?Card $card = null): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get privateDataList value
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return VerifyAuthenticationRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
