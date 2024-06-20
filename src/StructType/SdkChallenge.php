<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sdkChallenge StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about SDK 3DS Challenge.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SdkChallenge extends AbstractStructBase
{
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The threeDSServerTransID
     * @var string|null
     */
    protected ?string $threeDSServerTransID = null;
    /**
     * The threeDSVersion
     * @var string|null
     */
    protected ?string $threeDSVersion = null;
    /**
     * The authenticationType
     * @var string|null
     */
    protected ?string $authenticationType = null;
    /**
     * The transStatus
     * @var string|null
     */
    protected ?string $transStatus = null;
    /**
     * The sdkTransID
     * @var string|null
     */
    protected ?string $sdkTransID = null;
    /**
     * The dsTransID
     * @var string|null
     */
    protected ?string $dsTransID = null;
    /**
     * The acsTransID
     * @var string|null
     */
    protected ?string $acsTransID = null;
    /**
     * The acsRenderingType
     * @var string|null
     */
    protected ?string $acsRenderingType = null;
    /**
     * The acsReferenceNumber
     * @var string|null
     */
    protected ?string $acsReferenceNumber = null;
    /**
     * The acsSignedContent
     * @var string|null
     */
    protected ?string $acsSignedContent = null;
    /**
     * The acsOperatorID
     * @var string|null
     */
    protected ?string $acsOperatorID = null;
    /**
     * The acsChallengeMandated
     * @var string|null
     */
    protected ?string $acsChallengeMandated = null;
    /**
     * Constructor method for sdkChallenge
     * @uses SdkChallenge::setCardType()
     * @uses SdkChallenge::setThreeDSServerTransID()
     * @uses SdkChallenge::setThreeDSVersion()
     * @uses SdkChallenge::setAuthenticationType()
     * @uses SdkChallenge::setTransStatus()
     * @uses SdkChallenge::setSdkTransID()
     * @uses SdkChallenge::setDsTransID()
     * @uses SdkChallenge::setAcsTransID()
     * @uses SdkChallenge::setAcsRenderingType()
     * @uses SdkChallenge::setAcsReferenceNumber()
     * @uses SdkChallenge::setAcsSignedContent()
     * @uses SdkChallenge::setAcsOperatorID()
     * @uses SdkChallenge::setAcsChallengeMandated()
     * @param string $cardType
     * @param string $threeDSServerTransID
     * @param string $threeDSVersion
     * @param string $authenticationType
     * @param string $transStatus
     * @param string $sdkTransID
     * @param string $dsTransID
     * @param string $acsTransID
     * @param string $acsRenderingType
     * @param string $acsReferenceNumber
     * @param string $acsSignedContent
     * @param string $acsOperatorID
     * @param string $acsChallengeMandated
     */
    public function __construct(?string $cardType = null, ?string $threeDSServerTransID = null, ?string $threeDSVersion = null, ?string $authenticationType = null, ?string $transStatus = null, ?string $sdkTransID = null, ?string $dsTransID = null, ?string $acsTransID = null, ?string $acsRenderingType = null, ?string $acsReferenceNumber = null, ?string $acsSignedContent = null, ?string $acsOperatorID = null, ?string $acsChallengeMandated = null)
    {
        $this
            ->setCardType($cardType)
            ->setThreeDSServerTransID($threeDSServerTransID)
            ->setThreeDSVersion($threeDSVersion)
            ->setAuthenticationType($authenticationType)
            ->setTransStatus($transStatus)
            ->setSdkTransID($sdkTransID)
            ->setDsTransID($dsTransID)
            ->setAcsTransID($acsTransID)
            ->setAcsRenderingType($acsRenderingType)
            ->setAcsReferenceNumber($acsReferenceNumber)
            ->setAcsSignedContent($acsSignedContent)
            ->setAcsOperatorID($acsOperatorID)
            ->setAcsChallengeMandated($acsChallengeMandated);
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \StructType\SdkChallenge
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;

        return $this;
    }
    /**
     * Get threeDSServerTransID value
     * @return string|null
     */
    public function getThreeDSServerTransID(): ?string
    {
        return $this->threeDSServerTransID;
    }
    /**
     * Set threeDSServerTransID value
     * @param string $threeDSServerTransID
     * @return \StructType\SdkChallenge
     */
    public function setThreeDSServerTransID(?string $threeDSServerTransID = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSServerTransID) && !is_string($threeDSServerTransID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSServerTransID, true), gettype($threeDSServerTransID)), __LINE__);
        }
        $this->threeDSServerTransID = $threeDSServerTransID;

        return $this;
    }
    /**
     * Get threeDSVersion value
     * @return string|null
     */
    public function getThreeDSVersion(): ?string
    {
        return $this->threeDSVersion;
    }
    /**
     * Set threeDSVersion value
     * @param string $threeDSVersion
     * @return \StructType\SdkChallenge
     */
    public function setThreeDSVersion(?string $threeDSVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSVersion) && !is_string($threeDSVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSVersion, true), gettype($threeDSVersion)), __LINE__);
        }
        $this->threeDSVersion = $threeDSVersion;

        return $this;
    }
    /**
     * Get authenticationType value
     * @return string|null
     */
    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }
    /**
     * Set authenticationType value
     * @param string $authenticationType
     * @return \StructType\SdkChallenge
     */
    public function setAuthenticationType(?string $authenticationType = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticationType) && !is_string($authenticationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationType, true), gettype($authenticationType)), __LINE__);
        }
        $this->authenticationType = $authenticationType;

        return $this;
    }
    /**
     * Get transStatus value
     * @return string|null
     */
    public function getTransStatus(): ?string
    {
        return $this->transStatus;
    }
    /**
     * Set transStatus value
     * @param string $transStatus
     * @return \StructType\SdkChallenge
     */
    public function setTransStatus(?string $transStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($transStatus) && !is_string($transStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transStatus, true), gettype($transStatus)), __LINE__);
        }
        $this->transStatus = $transStatus;

        return $this;
    }
    /**
     * Get sdkTransID value
     * @return string|null
     */
    public function getSdkTransID(): ?string
    {
        return $this->sdkTransID;
    }
    /**
     * Set sdkTransID value
     * @param string $sdkTransID
     * @return \StructType\SdkChallenge
     */
    public function setSdkTransID(?string $sdkTransID = null): self
    {
        // validation for constraint: string
        if (!is_null($sdkTransID) && !is_string($sdkTransID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sdkTransID, true), gettype($sdkTransID)), __LINE__);
        }
        $this->sdkTransID = $sdkTransID;

        return $this;
    }
    /**
     * Get dsTransID value
     * @return string|null
     */
    public function getDsTransID(): ?string
    {
        return $this->dsTransID;
    }
    /**
     * Set dsTransID value
     * @param string $dsTransID
     * @return \StructType\SdkChallenge
     */
    public function setDsTransID(?string $dsTransID = null): self
    {
        // validation for constraint: string
        if (!is_null($dsTransID) && !is_string($dsTransID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dsTransID, true), gettype($dsTransID)), __LINE__);
        }
        $this->dsTransID = $dsTransID;

        return $this;
    }
    /**
     * Get acsTransID value
     * @return string|null
     */
    public function getAcsTransID(): ?string
    {
        return $this->acsTransID;
    }
    /**
     * Set acsTransID value
     * @param string $acsTransID
     * @return \StructType\SdkChallenge
     */
    public function setAcsTransID(?string $acsTransID = null): self
    {
        // validation for constraint: string
        if (!is_null($acsTransID) && !is_string($acsTransID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsTransID, true), gettype($acsTransID)), __LINE__);
        }
        $this->acsTransID = $acsTransID;

        return $this;
    }
    /**
     * Get acsRenderingType value
     * @return string|null
     */
    public function getAcsRenderingType(): ?string
    {
        return $this->acsRenderingType;
    }
    /**
     * Set acsRenderingType value
     * @param string $acsRenderingType
     * @return \StructType\SdkChallenge
     */
    public function setAcsRenderingType(?string $acsRenderingType = null): self
    {
        // validation for constraint: string
        if (!is_null($acsRenderingType) && !is_string($acsRenderingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsRenderingType, true), gettype($acsRenderingType)), __LINE__);
        }
        $this->acsRenderingType = $acsRenderingType;

        return $this;
    }
    /**
     * Get acsReferenceNumber value
     * @return string|null
     */
    public function getAcsReferenceNumber(): ?string
    {
        return $this->acsReferenceNumber;
    }
    /**
     * Set acsReferenceNumber value
     * @param string $acsReferenceNumber
     * @return \StructType\SdkChallenge
     */
    public function setAcsReferenceNumber(?string $acsReferenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($acsReferenceNumber) && !is_string($acsReferenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsReferenceNumber, true), gettype($acsReferenceNumber)), __LINE__);
        }
        $this->acsReferenceNumber = $acsReferenceNumber;

        return $this;
    }
    /**
     * Get acsSignedContent value
     * @return string|null
     */
    public function getAcsSignedContent(): ?string
    {
        return $this->acsSignedContent;
    }
    /**
     * Set acsSignedContent value
     * @param string $acsSignedContent
     * @return \StructType\SdkChallenge
     */
    public function setAcsSignedContent(?string $acsSignedContent = null): self
    {
        // validation for constraint: string
        if (!is_null($acsSignedContent) && !is_string($acsSignedContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsSignedContent, true), gettype($acsSignedContent)), __LINE__);
        }
        $this->acsSignedContent = $acsSignedContent;

        return $this;
    }
    /**
     * Get acsOperatorID value
     * @return string|null
     */
    public function getAcsOperatorID(): ?string
    {
        return $this->acsOperatorID;
    }
    /**
     * Set acsOperatorID value
     * @param string $acsOperatorID
     * @return \StructType\SdkChallenge
     */
    public function setAcsOperatorID(?string $acsOperatorID = null): self
    {
        // validation for constraint: string
        if (!is_null($acsOperatorID) && !is_string($acsOperatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsOperatorID, true), gettype($acsOperatorID)), __LINE__);
        }
        $this->acsOperatorID = $acsOperatorID;

        return $this;
    }
    /**
     * Get acsChallengeMandated value
     * @return string|null
     */
    public function getAcsChallengeMandated(): ?string
    {
        return $this->acsChallengeMandated;
    }
    /**
     * Set acsChallengeMandated value
     * @param string $acsChallengeMandated
     * @return \StructType\SdkChallenge
     */
    public function setAcsChallengeMandated(?string $acsChallengeMandated = null): self
    {
        // validation for constraint: string
        if (!is_null($acsChallengeMandated) && !is_string($acsChallengeMandated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsChallengeMandated, true), gettype($acsChallengeMandated)), __LINE__);
        }
        $this->acsChallengeMandated = $acsChallengeMandated;

        return $this;
    }
}
