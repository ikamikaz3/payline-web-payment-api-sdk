<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for threeDSInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about 3DS.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\Browser|null
     */
    protected ?\StructType\Browser $browser = null;
    /**
     * The sdk
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Sdk|null
     */
    protected ?\StructType\Sdk $sdk = null;
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
     * @uses ThreeDSInfo::setChallengeInd()
     * @uses ThreeDSInfo::setThreeDSReqPriorAuthData()
     * @uses ThreeDSInfo::setThreeDSReqPriorAuthMethod()
     * @uses ThreeDSInfo::setThreeDSReqPriorAuthTimestamp()
     * @uses ThreeDSInfo::setBrowser()
     * @uses ThreeDSInfo::setSdk()
     * @uses ThreeDSInfo::setThreeDSMethodNotificationURL()
     * @uses ThreeDSInfo::setThreeDSMethodResult()
     * @uses ThreeDSInfo::setChallengeWindowSize()
     * @param string $challengeInd
     * @param string $threeDSReqPriorAuthData
     * @param string $threeDSReqPriorAuthMethod
     * @param string $threeDSReqPriorAuthTimestamp
     * @param \StructType\Browser $browser
     * @param \StructType\Sdk $sdk
     * @param string $threeDSMethodNotificationURL
     * @param string $threeDSMethodResult
     * @param string $challengeWindowSize
     */
    public function __construct(?string $challengeInd = null, ?string $threeDSReqPriorAuthData = null, ?string $threeDSReqPriorAuthMethod = null, ?string $threeDSReqPriorAuthTimestamp = null, ?\StructType\Browser $browser = null, ?\StructType\Sdk $sdk = null, ?string $threeDSMethodNotificationURL = null, ?string $threeDSMethodResult = null, ?string $challengeWindowSize = null)
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
     * @param string $challengeInd
     * @return \StructType\ThreeDSInfo
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
     * @param string $threeDSReqPriorAuthData
     * @return \StructType\ThreeDSInfo
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
     * @param string $threeDSReqPriorAuthMethod
     * @return \StructType\ThreeDSInfo
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
     * @param string $threeDSReqPriorAuthTimestamp
     * @return \StructType\ThreeDSInfo
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
     * @return \StructType\Browser|null
     */
    public function getBrowser(): ?\StructType\Browser
    {
        return $this->browser;
    }
    /**
     * Set browser value
     * @param \StructType\Browser $browser
     * @return \StructType\ThreeDSInfo
     */
    public function setBrowser(?\StructType\Browser $browser = null): self
    {
        $this->browser = $browser;
        
        return $this;
    }
    /**
     * Get sdk value
     * @return \StructType\Sdk|null
     */
    public function getSdk(): ?\StructType\Sdk
    {
        return $this->sdk;
    }
    /**
     * Set sdk value
     * @param \StructType\Sdk $sdk
     * @return \StructType\ThreeDSInfo
     */
    public function setSdk(?\StructType\Sdk $sdk = null): self
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
     * @param string $threeDSMethodNotificationURL
     * @return \StructType\ThreeDSInfo
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
     * @param string $threeDSMethodResult
     * @return \StructType\ThreeDSInfo
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
     * @param string $challengeWindowSize
     * @return \StructType\ThreeDSInfo
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
