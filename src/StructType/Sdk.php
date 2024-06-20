<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sdk StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about SDK.
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Sdk extends AbstractStructBase
{
    /**
     * The deviceRenderingOptionsIF
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $deviceRenderingOptionsIF = null;

    /**
     * The deviceRenderOptionsUI
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $deviceRenderOptionsUI = null;

    /**
     * The appID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $appID = null;

    /**
     * The ephemPubKey
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ephemPubKey = null;

    /**
     * The maxTimeout
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $maxTimeout = null;

    /**
     * The referenceNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $referenceNumber = null;

    /**
     * The transID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transID = null;

    /**
     * The encData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $encData = null;

    /**
     * Constructor method for sdk
     * @param string|null $deviceRenderingOptionsIF
     * @param string|null $deviceRenderOptionsUI
     * @param string|null $appID
     * @param string|null $ephemPubKey
     * @param string|null $maxTimeout
     * @param string|null $referenceNumber
     * @param string|null $transID
     * @param string|null $encData
     * @uses Sdk::setDeviceRenderingOptionsIF()
     * @uses Sdk::setDeviceRenderOptionsUI()
     * @uses Sdk::setAppID()
     * @uses Sdk::setEphemPubKey()
     * @uses Sdk::setMaxTimeout()
     * @uses Sdk::setReferenceNumber()
     * @uses Sdk::setTransID()
     * @uses Sdk::setEncData()
     */
    public function __construct(?string $deviceRenderingOptionsIF = null, ?string $deviceRenderOptionsUI = null, ?string $appID = null, ?string $ephemPubKey = null, ?string $maxTimeout = null, ?string $referenceNumber = null, ?string $transID = null, ?string $encData = null)
    {
        $this
            ->setDeviceRenderingOptionsIF($deviceRenderingOptionsIF)
            ->setDeviceRenderOptionsUI($deviceRenderOptionsUI)
            ->setAppID($appID)
            ->setEphemPubKey($ephemPubKey)
            ->setMaxTimeout($maxTimeout)
            ->setReferenceNumber($referenceNumber)
            ->setTransID($transID)
            ->setEncData($encData);
    }

    /**
     * Get deviceRenderingOptionsIF value
     * @return string|null
     */
    public function getDeviceRenderingOptionsIF(): ?string
    {
        return $this->deviceRenderingOptionsIF;
    }

    /**
     * Set deviceRenderingOptionsIF value
     * @param string|null $deviceRenderingOptionsIF
     * @return Sdk
     */
    public function setDeviceRenderingOptionsIF(?string $deviceRenderingOptionsIF = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceRenderingOptionsIF) && !is_string($deviceRenderingOptionsIF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceRenderingOptionsIF, true), gettype($deviceRenderingOptionsIF)), __LINE__);
        }
        $this->deviceRenderingOptionsIF = $deviceRenderingOptionsIF;

        return $this;
    }

    /**
     * Get deviceRenderOptionsUI value
     * @return string|null
     */
    public function getDeviceRenderOptionsUI(): ?string
    {
        return $this->deviceRenderOptionsUI;
    }

    /**
     * Set deviceRenderOptionsUI value
     * @param string|null $deviceRenderOptionsUI
     * @return Sdk
     */
    public function setDeviceRenderOptionsUI(?string $deviceRenderOptionsUI = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceRenderOptionsUI) && !is_string($deviceRenderOptionsUI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceRenderOptionsUI, true), gettype($deviceRenderOptionsUI)), __LINE__);
        }
        $this->deviceRenderOptionsUI = $deviceRenderOptionsUI;

        return $this;
    }

    /**
     * Get appID value
     * @return string|null
     */
    public function getAppID(): ?string
    {
        return $this->appID;
    }

    /**
     * Set appID value
     * @param string|null $appID
     * @return Sdk
     */
    public function setAppID(?string $appID = null): self
    {
        // validation for constraint: string
        if (!is_null($appID) && !is_string($appID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appID, true), gettype($appID)), __LINE__);
        }
        $this->appID = $appID;

        return $this;
    }

    /**
     * Get ephemPubKey value
     * @return string|null
     */
    public function getEphemPubKey(): ?string
    {
        return $this->ephemPubKey;
    }

    /**
     * Set ephemPubKey value
     * @param string|null $ephemPubKey
     * @return Sdk
     */
    public function setEphemPubKey(?string $ephemPubKey = null): self
    {
        // validation for constraint: string
        if (!is_null($ephemPubKey) && !is_string($ephemPubKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ephemPubKey, true), gettype($ephemPubKey)), __LINE__);
        }
        $this->ephemPubKey = $ephemPubKey;

        return $this;
    }

    /**
     * Get maxTimeout value
     * @return string|null
     */
    public function getMaxTimeout(): ?string
    {
        return $this->maxTimeout;
    }

    /**
     * Set maxTimeout value
     * @param string|null $maxTimeout
     * @return Sdk
     */
    public function setMaxTimeout(?string $maxTimeout = null): self
    {
        // validation for constraint: string
        if (!is_null($maxTimeout) && !is_string($maxTimeout)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxTimeout, true), gettype($maxTimeout)), __LINE__);
        }
        $this->maxTimeout = $maxTimeout;

        return $this;
    }

    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    /**
     * Set referenceNumber value
     * @param string|null $referenceNumber
     * @return Sdk
     */
    public function setReferenceNumber(?string $referenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNumber, true), gettype($referenceNumber)), __LINE__);
        }
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * Get transID value
     * @return string|null
     */
    public function getTransID(): ?string
    {
        return $this->transID;
    }

    /**
     * Set transID value
     * @param string|null $transID
     * @return Sdk
     */
    public function setTransID(?string $transID = null): self
    {
        // validation for constraint: string
        if (!is_null($transID) && !is_string($transID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transID, true), gettype($transID)), __LINE__);
        }
        $this->transID = $transID;

        return $this;
    }

    /**
     * Get encData value
     * @return string|null
     */
    public function getEncData(): ?string
    {
        return $this->encData;
    }

    /**
     * Set encData value
     * @param string|null $encData
     * @return Sdk
     */
    public function setEncData(?string $encData = null): self
    {
        // validation for constraint: string
        if (!is_null($encData) && !is_string($encData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encData, true), gettype($encData)), __LINE__);
        }
        $this->encData = $encData;

        return $this;
    }
}
