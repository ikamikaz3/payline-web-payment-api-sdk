<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doWebPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doWebPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoWebPaymentRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The returnURL
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $returnURL = null;
    /**
     * The cancelURL
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $cancelURL = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
    /**
     * The notificationURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $notificationURL = null;
    /**
     * The selectedContractList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SelectedContractList|null
     */
    protected ?\StructType\SelectedContractList $selectedContractList = null;
    /**
     * The secondSelectedContractList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SelectedContractList|null
     */
    protected ?\StructType\SelectedContractList $secondSelectedContractList = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The languageCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $languageCode = null;
    /**
     * The customPaymentPageCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $customPaymentPageCode = null;
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Owner|null
     */
    protected ?\StructType\Owner $owner = null;
    /**
     * The securityMode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $securityMode = null;
    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Recurring|null
     */
    protected ?\StructType\Recurring $recurring = null;
    /**
     * The customPaymentTemplateURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $customPaymentTemplateURL = null;
    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ContractNumberWalletList|null
     */
    protected ?\StructType\ContractNumberWalletList $contractNumberWalletList = null;
    /**
     * The merchantName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantName = null;
    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SubMerchant|null
     */
    protected ?\StructType\SubMerchant $subMerchant = null;
    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;
    /**
     * The asynchronousRetryTimeout
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $asynchronousRetryTimeout = null;
    /**
     * The threeDSInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ThreeDSInfo|null
     */
    protected ?\StructType\ThreeDSInfo $threeDSInfo = null;
    /**
     * The merchantScore
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantScore = null;
    /**
     * The skipSmartDisplay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $skipSmartDisplay = null;
    /**
     * Constructor method for doWebPaymentRequest
     * @uses DoWebPaymentRequest::setVersion()
     * @uses DoWebPaymentRequest::setPayment()
     * @uses DoWebPaymentRequest::setReturnURL()
     * @uses DoWebPaymentRequest::setCancelURL()
     * @uses DoWebPaymentRequest::setOrder()
     * @uses DoWebPaymentRequest::setBuyer()
     * @uses DoWebPaymentRequest::setNotificationURL()
     * @uses DoWebPaymentRequest::setSelectedContractList()
     * @uses DoWebPaymentRequest::setSecondSelectedContractList()
     * @uses DoWebPaymentRequest::setPrivateDataList()
     * @uses DoWebPaymentRequest::setLanguageCode()
     * @uses DoWebPaymentRequest::setCustomPaymentPageCode()
     * @uses DoWebPaymentRequest::setOwner()
     * @uses DoWebPaymentRequest::setSecurityMode()
     * @uses DoWebPaymentRequest::setRecurring()
     * @uses DoWebPaymentRequest::setCustomPaymentTemplateURL()
     * @uses DoWebPaymentRequest::setContractNumberWalletList()
     * @uses DoWebPaymentRequest::setMerchantName()
     * @uses DoWebPaymentRequest::setSubMerchant()
     * @uses DoWebPaymentRequest::setMiscData()
     * @uses DoWebPaymentRequest::setAsynchronousRetryTimeout()
     * @uses DoWebPaymentRequest::setThreeDSInfo()
     * @uses DoWebPaymentRequest::setMerchantScore()
     * @uses DoWebPaymentRequest::setSkipSmartDisplay()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param string $returnURL
     * @param string $cancelURL
     * @param \StructType\Order $order
     * @param \StructType\Buyer $buyer
     * @param string $notificationURL
     * @param \StructType\SelectedContractList $selectedContractList
     * @param \StructType\SelectedContractList $secondSelectedContractList
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $languageCode
     * @param string $customPaymentPageCode
     * @param \StructType\Owner $owner
     * @param string $securityMode
     * @param \StructType\Recurring $recurring
     * @param string $customPaymentTemplateURL
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @param string $merchantName
     * @param \StructType\SubMerchant $subMerchant
     * @param string $miscData
     * @param string $asynchronousRetryTimeout
     * @param \StructType\ThreeDSInfo $threeDSInfo
     * @param string $merchantScore
     * @param bool $skipSmartDisplay
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?string $returnURL = null, ?string $cancelURL = null, ?\StructType\Order $order = null, ?\StructType\Buyer $buyer = null, ?string $notificationURL = null, ?\StructType\SelectedContractList $selectedContractList = null, ?\StructType\SelectedContractList $secondSelectedContractList = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $languageCode = null, ?string $customPaymentPageCode = null, ?\StructType\Owner $owner = null, ?string $securityMode = null, ?\StructType\Recurring $recurring = null, ?string $customPaymentTemplateURL = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null, ?string $merchantName = null, ?\StructType\SubMerchant $subMerchant = null, ?string $miscData = null, ?string $asynchronousRetryTimeout = null, ?\StructType\ThreeDSInfo $threeDSInfo = null, ?string $merchantScore = null, ?bool $skipSmartDisplay = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setOrder($order)
            ->setBuyer($buyer)
            ->setNotificationURL($notificationURL)
            ->setSelectedContractList($selectedContractList)
            ->setSecondSelectedContractList($secondSelectedContractList)
            ->setPrivateDataList($privateDataList)
            ->setLanguageCode($languageCode)
            ->setCustomPaymentPageCode($customPaymentPageCode)
            ->setOwner($owner)
            ->setSecurityMode($securityMode)
            ->setRecurring($recurring)
            ->setCustomPaymentTemplateURL($customPaymentTemplateURL)
            ->setContractNumberWalletList($contractNumberWalletList)
            ->setMerchantName($merchantName)
            ->setSubMerchant($subMerchant)
            ->setMiscData($miscData)
            ->setAsynchronousRetryTimeout($asynchronousRetryTimeout)
            ->setThreeDSInfo($threeDSInfo)
            ->setMerchantScore($merchantScore)
            ->setSkipSmartDisplay($skipSmartDisplay);
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
     * @return \StructType\DoWebPaymentRequest
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
     * Get payment value
     * @return \StructType\Payment|null
     */
    public function getPayment(): ?\StructType\Payment
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \StructType\Payment $payment
     * @return \StructType\DoWebPaymentRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }
    /**
     * Get returnURL value
     * @return string|null
     */
    public function getReturnURL(): ?string
    {
        return $this->returnURL;
    }
    /**
     * Set returnURL value
     * @param string $returnURL
     * @return \StructType\DoWebPaymentRequest
     */
    public function setReturnURL(?string $returnURL = null): self
    {
        // validation for constraint: string
        if (!is_null($returnURL) && !is_string($returnURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnURL, true), gettype($returnURL)), __LINE__);
        }
        $this->returnURL = $returnURL;

        return $this;
    }
    /**
     * Get cancelURL value
     * @return string|null
     */
    public function getCancelURL(): ?string
    {
        return $this->cancelURL;
    }
    /**
     * Set cancelURL value
     * @param string $cancelURL
     * @return \StructType\DoWebPaymentRequest
     */
    public function setCancelURL(?string $cancelURL = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelURL) && !is_string($cancelURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelURL, true), gettype($cancelURL)), __LINE__);
        }
        $this->cancelURL = $cancelURL;

        return $this;
    }
    /**
     * Get order value
     * @return \StructType\Order|null
     */
    public function getOrder(): ?\StructType\Order
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param \StructType\Order $order
     * @return \StructType\DoWebPaymentRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }
    /**
     * Get buyer value
     * @return \StructType\Buyer|null
     */
    public function getBuyer(): ?\StructType\Buyer
    {
        return $this->buyer;
    }
    /**
     * Set buyer value
     * @param \StructType\Buyer $buyer
     * @return \StructType\DoWebPaymentRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

        return $this;
    }
    /**
     * Get notificationURL value
     * @return string|null
     */
    public function getNotificationURL(): ?string
    {
        return $this->notificationURL;
    }
    /**
     * Set notificationURL value
     * @param string $notificationURL
     * @return \StructType\DoWebPaymentRequest
     */
    public function setNotificationURL(?string $notificationURL = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationURL) && !is_string($notificationURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationURL, true), gettype($notificationURL)), __LINE__);
        }
        $this->notificationURL = $notificationURL;

        return $this;
    }
    /**
     * Get selectedContractList value
     * @return \StructType\SelectedContractList|null
     */
    public function getSelectedContractList(): ?\StructType\SelectedContractList
    {
        return $this->selectedContractList;
    }
    /**
     * Set selectedContractList value
     * @param \StructType\SelectedContractList $selectedContractList
     * @return \StructType\DoWebPaymentRequest
     */
    public function setSelectedContractList(?\StructType\SelectedContractList $selectedContractList = null): self
    {
        $this->selectedContractList = $selectedContractList;

        return $this;
    }
    /**
     * Get secondSelectedContractList value
     * @return \StructType\SelectedContractList|null
     */
    public function getSecondSelectedContractList(): ?\StructType\SelectedContractList
    {
        return $this->secondSelectedContractList;
    }
    /**
     * Set secondSelectedContractList value
     * @param \StructType\SelectedContractList $secondSelectedContractList
     * @return \StructType\DoWebPaymentRequest
     */
    public function setSecondSelectedContractList(?\StructType\SelectedContractList $secondSelectedContractList = null): self
    {
        $this->secondSelectedContractList = $secondSelectedContractList;

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
     * @return \StructType\DoWebPaymentRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
    /**
     * Get languageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
    /**
     * Set languageCode value
     * @param string $languageCode
     * @return \StructType\DoWebPaymentRequest
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->languageCode = $languageCode;

        return $this;
    }
    /**
     * Get customPaymentPageCode value
     * @return string|null
     */
    public function getCustomPaymentPageCode(): ?string
    {
        return $this->customPaymentPageCode;
    }
    /**
     * Set customPaymentPageCode value
     * @param string $customPaymentPageCode
     * @return \StructType\DoWebPaymentRequest
     */
    public function setCustomPaymentPageCode(?string $customPaymentPageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customPaymentPageCode) && !is_string($customPaymentPageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customPaymentPageCode, true), gettype($customPaymentPageCode)), __LINE__);
        }
        $this->customPaymentPageCode = $customPaymentPageCode;

        return $this;
    }
    /**
     * Get owner value
     * @return \StructType\Owner|null
     */
    public function getOwner(): ?\StructType\Owner
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param \StructType\Owner $owner
     * @return \StructType\DoWebPaymentRequest
     */
    public function setOwner(?\StructType\Owner $owner = null): self
    {
        $this->owner = $owner;

        return $this;
    }
    /**
     * Get securityMode value
     * @return string|null
     */
    public function getSecurityMode(): ?string
    {
        return $this->securityMode;
    }
    /**
     * Set securityMode value
     * @param string $securityMode
     * @return \StructType\DoWebPaymentRequest
     */
    public function setSecurityMode(?string $securityMode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityMode) && !is_string($securityMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityMode, true), gettype($securityMode)), __LINE__);
        }
        $this->securityMode = $securityMode;

        return $this;
    }
    /**
     * Get recurring value
     * @return \StructType\Recurring|null
     */
    public function getRecurring(): ?\StructType\Recurring
    {
        return $this->recurring;
    }
    /**
     * Set recurring value
     * @param \StructType\Recurring $recurring
     * @return \StructType\DoWebPaymentRequest
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

        return $this;
    }
    /**
     * Get customPaymentTemplateURL value
     * @return string|null
     */
    public function getCustomPaymentTemplateURL(): ?string
    {
        return $this->customPaymentTemplateURL;
    }
    /**
     * Set customPaymentTemplateURL value
     * @param string $customPaymentTemplateURL
     * @return \StructType\DoWebPaymentRequest
     */
    public function setCustomPaymentTemplateURL(?string $customPaymentTemplateURL = null): self
    {
        // validation for constraint: string
        if (!is_null($customPaymentTemplateURL) && !is_string($customPaymentTemplateURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customPaymentTemplateURL, true), gettype($customPaymentTemplateURL)), __LINE__);
        }
        $this->customPaymentTemplateURL = $customPaymentTemplateURL;

        return $this;
    }
    /**
     * Get contractNumberWalletList value
     * @return \StructType\ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?\StructType\ContractNumberWalletList
    {
        return $this->contractNumberWalletList;
    }
    /**
     * Set contractNumberWalletList value
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @return \StructType\DoWebPaymentRequest
     */
    public function setContractNumberWalletList(?\StructType\ContractNumberWalletList $contractNumberWalletList = null): self
    {
        $this->contractNumberWalletList = $contractNumberWalletList;

        return $this;
    }
    /**
     * Get merchantName value
     * @return string|null
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }
    /**
     * Set merchantName value
     * @param string $merchantName
     * @return \StructType\DoWebPaymentRequest
     */
    public function setMerchantName(?string $merchantName = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantName) && !is_string($merchantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantName, true), gettype($merchantName)), __LINE__);
        }
        $this->merchantName = $merchantName;

        return $this;
    }
    /**
     * Get subMerchant value
     * @return \StructType\SubMerchant|null
     */
    public function getSubMerchant(): ?\StructType\SubMerchant
    {
        return $this->subMerchant;
    }
    /**
     * Set subMerchant value
     * @param \StructType\SubMerchant $subMerchant
     * @return \StructType\DoWebPaymentRequest
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

        return $this;
    }
    /**
     * Get miscData value
     * @return string|null
     */
    public function getMiscData(): ?string
    {
        return $this->miscData;
    }
    /**
     * Set miscData value
     * @param string $miscData
     * @return \StructType\DoWebPaymentRequest
     */
    public function setMiscData(?string $miscData = null): self
    {
        // validation for constraint: string
        if (!is_null($miscData) && !is_string($miscData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscData, true), gettype($miscData)), __LINE__);
        }
        $this->miscData = $miscData;

        return $this;
    }
    /**
     * Get asynchronousRetryTimeout value
     * @return string|null
     */
    public function getAsynchronousRetryTimeout(): ?string
    {
        return $this->asynchronousRetryTimeout;
    }
    /**
     * Set asynchronousRetryTimeout value
     * @param string $asynchronousRetryTimeout
     * @return \StructType\DoWebPaymentRequest
     */
    public function setAsynchronousRetryTimeout(?string $asynchronousRetryTimeout = null): self
    {
        // validation for constraint: string
        if (!is_null($asynchronousRetryTimeout) && !is_string($asynchronousRetryTimeout)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asynchronousRetryTimeout, true), gettype($asynchronousRetryTimeout)), __LINE__);
        }
        $this->asynchronousRetryTimeout = $asynchronousRetryTimeout;

        return $this;
    }
    /**
     * Get threeDSInfo value
     * @return \StructType\ThreeDSInfo|null
     */
    public function getThreeDSInfo(): ?\StructType\ThreeDSInfo
    {
        return $this->threeDSInfo;
    }
    /**
     * Set threeDSInfo value
     * @param \StructType\ThreeDSInfo $threeDSInfo
     * @return \StructType\DoWebPaymentRequest
     */
    public function setThreeDSInfo(?\StructType\ThreeDSInfo $threeDSInfo = null): self
    {
        $this->threeDSInfo = $threeDSInfo;

        return $this;
    }
    /**
     * Get merchantScore value
     * @return string|null
     */
    public function getMerchantScore(): ?string
    {
        return $this->merchantScore;
    }
    /**
     * Set merchantScore value
     * @param string $merchantScore
     * @return \StructType\DoWebPaymentRequest
     */
    public function setMerchantScore(?string $merchantScore = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantScore) && !is_string($merchantScore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantScore, true), gettype($merchantScore)), __LINE__);
        }
        $this->merchantScore = $merchantScore;

        return $this;
    }
    /**
     * Get skipSmartDisplay value
     * @return bool|null
     */
    public function getSkipSmartDisplay(): ?bool
    {
        return $this->skipSmartDisplay;
    }
    /**
     * Set skipSmartDisplay value
     * @param bool $skipSmartDisplay
     * @return \StructType\DoWebPaymentRequest
     */
    public function setSkipSmartDisplay(?bool $skipSmartDisplay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skipSmartDisplay) && !is_bool($skipSmartDisplay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipSmartDisplay, true), gettype($skipSmartDisplay)), __LINE__);
        }
        $this->skipSmartDisplay = $skipSmartDisplay;

        return $this;
    }
}
