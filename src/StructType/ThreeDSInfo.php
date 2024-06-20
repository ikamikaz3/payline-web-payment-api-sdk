<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for threeDSInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about 3DS.
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ThreeDSInfo extends AbstractStructBase
{
    /**
     * The challengeInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $challengeInd = null;

    /**
     * The threeDSReqPriorAuthData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSReqPriorAuthData = null;

    /**
     * The threeDSReqPriorAuthMethod
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSReqPriorAuthMethod = null;

    /**
     * The threeDSReqPriorAuthTimestamp
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSReqPriorAuthTimestamp = null;

    /**
     * The browser
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Browser|null
     */
    protected ?Browser $browser = null;

    /**
     * The sdk
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Sdk|null
     */
    protected ?Sdk $sdk = null;

    /**
     * The threeDSMethodNotificationURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSMethodNotificationURL = null;

    /**
     * The threeDSMethodResult
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSMethodResult = null;

    /**
     * The challengeWindowSize
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $challengeWindowSize = null;

    /**
     * Constructor method for threeDSInfo
     * @param string|null $challengeInd
     * @param string|null $threeDSReqPriorAuthData
     * @param string|null $threeDSReqPriorAuthMethod
     * @param string|null $threeDSReqPriorAuthTimestamp
     * @param Browser|null $browser
     * @param Sdk|null $sdk
     * @param string|null $threeDSMethodNotificationURL
     * @param string|null $threeDSMethodResult
     * @param string|null $challengeWindowSize
     * @uses ThreeDSInfo::setChallengeInd()
     * @uses ThreeDSInfo::setThreeDSReqPriorAuthData()
     * @uses ThreeDSInfo::setThreeDSReqPriorAuthMethod()
     * @uses ThreeDSInfo::setThreeDSReqPriorAuthTimestamp()
     * @uses ThreeDSInfo::setBrowser()
     * @uses ThreeDSInfo::setSdk()
     * @uses ThreeDSInfo::setThreeDSMethodNotificationURL()
     * @uses ThreeDSInfo::setThreeDSMethodResult()
     * @uses ThreeDSInfo::setChallengeWindowSize()
     */
    public function __construct(?string $challengeInd = null, ?string $threeDSReqPriorAuthData = null, ?string $threeDSReqPriorAuthMethod = null, ?string $threeDSReqPriorAuthTimestamp = null, ?Browser $browser = null, ?Sdk $sdk = null, ?string $threeDSMethodNotificationURL = null, ?string $threeDSMethodResult = null, ?string $challengeWindowSize = null)
    {
        $this
            ->setChallengeInd($challengeInd)
            ->setThreeDSReqPriorAuthData($threeDSReqPriorAuthData)
            ->setThreeDSReqPriorAuthMethod($threeDSReqPriorAuthMethod)
            ->setThreeDSReqPriorAuthTimestamp($threeDSReqPriorAuthTimestamp)
            ->setBrowser($browser)
            ->setSdk($sdk)
            ->setThreeDSMethodNotificationURL($threeDSMethodNotificationURL)
            ->setThreeDSMethodResult($threeDSMethodResult)
            ->setChallengeWindowSize($challengeWindowSize);
    }

    /**
     * Get challengeInd value
     * @return string|null
     */
    public function getChallengeInd(): ?string
    {
        return $this->challengeInd;
    }

    /**
     * Set challengeInd value
     * @param string|null $challengeInd
     * @return ThreeDSInfo
     */
    public function setChallengeInd(?string $challengeInd = null): self
    {
        // validation for constraint: string
        if (!is_null($challengeInd) && !is_string($challengeInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($challengeInd, true), gettype($challengeInd)), __LINE__);
        }
        $this->challengeInd = $challengeInd;

        return $this;
    }

    /**
     * Get threeDSReqPriorAuthData value
     * @return string|null
     */
    public function getThreeDSReqPriorAuthData(): ?string
    {
        return $this->threeDSReqPriorAuthData;
    }

    /**
     * Set threeDSReqPriorAuthData value
     * @param string|null $threeDSReqPriorAuthData
     * @return ThreeDSInfo
     */
    public function setThreeDSReqPriorAuthData(?string $threeDSReqPriorAuthData = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSReqPriorAuthData) && !is_string($threeDSReqPriorAuthData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSReqPriorAuthData, true), gettype($threeDSReqPriorAuthData)), __LINE__);
        }
        $this->threeDSReqPriorAuthData = $threeDSReqPriorAuthData;

        return $this;
    }

    /**
     * Get threeDSReqPriorAuthMethod value
     * @return string|null
     */
    public function getThreeDSReqPriorAuthMethod(): ?string
    {
        return $this->threeDSReqPriorAuthMethod;
    }

    /**
     * Set threeDSReqPriorAuthMethod value
     * @param string|null $threeDSReqPriorAuthMethod
     * @return ThreeDSInfo
     */
    public function setThreeDSReqPriorAuthMethod(?string $threeDSReqPriorAuthMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSReqPriorAuthMethod) && !is_string($threeDSReqPriorAuthMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSReqPriorAuthMethod, true), gettype($threeDSReqPriorAuthMethod)), __LINE__);
        }
        $this->threeDSReqPriorAuthMethod = $threeDSReqPriorAuthMethod;

        return $this;
    }

    /**
     * Get threeDSReqPriorAuthTimestamp value
     * @return string|null
     */
    public function getThreeDSReqPriorAuthTimestamp(): ?string
    {
        return $this->threeDSReqPriorAuthTimestamp;
    }

    /**
     * Set threeDSReqPriorAuthTimestamp value
     * @param string|null $threeDSReqPriorAuthTimestamp
     * @return ThreeDSInfo
     */
    public function setThreeDSReqPriorAuthTimestamp(?string $threeDSReqPriorAuthTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSReqPriorAuthTimestamp) && !is_string($threeDSReqPriorAuthTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSReqPriorAuthTimestamp, true), gettype($threeDSReqPriorAuthTimestamp)), __LINE__);
        }
        $this->threeDSReqPriorAuthTimestamp = $threeDSReqPriorAuthTimestamp;

        return $this;
    }

    /**
     * Get browser value
     * @return Browser|null
     */
    public function getBrowser(): ?Browser
    {
        return $this->browser;
    }

    /**
     * Set browser value
     * @param Browser|null $browser
     * @return ThreeDSInfo
     */
    public function setBrowser(?Browser $browser = null): self
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get sdk value
     * @return Sdk|null
     */
    public function getSdk(): ?Sdk
    {
        return $this->sdk;
    }

    /**
     * Set sdk value
     * @param Sdk|null $sdk
     * @return ThreeDSInfo
     */
    public function setSdk(?Sdk $sdk = null): self
    {
        $this->sdk = $sdk;

        return $this;
    }

    /**
     * Get threeDSMethodNotificationURL value
     * @return string|null
     */
    public function getThreeDSMethodNotificationURL(): ?string
    {
        return $this->threeDSMethodNotificationURL;
    }

    /**
     * Set threeDSMethodNotificationURL value
     * @param string|null $threeDSMethodNotificationURL
     * @return ThreeDSInfo
     */
    public function setThreeDSMethodNotificationURL(?string $threeDSMethodNotificationURL = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSMethodNotificationURL) && !is_string($threeDSMethodNotificationURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSMethodNotificationURL, true), gettype($threeDSMethodNotificationURL)), __LINE__);
        }
        $this->threeDSMethodNotificationURL = $threeDSMethodNotificationURL;

        return $this;
    }

    /**
     * Get threeDSMethodResult value
     * @return string|null
     */
    public function getThreeDSMethodResult(): ?string
    {
        return $this->threeDSMethodResult;
    }

    /**
     * Set threeDSMethodResult value
     * @param string|null $threeDSMethodResult
     * @return ThreeDSInfo
     */
    public function setThreeDSMethodResult(?string $threeDSMethodResult = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSMethodResult) && !is_string($threeDSMethodResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSMethodResult, true), gettype($threeDSMethodResult)), __LINE__);
        }
        $this->threeDSMethodResult = $threeDSMethodResult;

        return $this;
    }

    /**
     * Get challengeWindowSize value
     * @return string|null
     */
    public function getChallengeWindowSize(): ?string
    {
        return $this->challengeWindowSize;
    }

    /**
     * Set challengeWindowSize value
     * @param string|null $challengeWindowSize
     * @return ThreeDSInfo
     */
    public function setChallengeWindowSize(?string $challengeWindowSize = null): self
    {
        // validation for constraint: string
        if (!is_null($challengeWindowSize) && !is_string($challengeWindowSize)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($challengeWindowSize, true), gettype($challengeWindowSize)), __LINE__);
        }
        $this->challengeWindowSize = $challengeWindowSize;

        return $this;
    }
}
