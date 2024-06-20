<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doWebPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doWebPayment method
 * @subpackage Structs
 */
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
     * @var Payment|null
     */
    protected ?Payment $payment = null;

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
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

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
     * @var SelectedContractList|null
     */
    protected ?SelectedContractList $selectedContractList = null;

    /**
     * The secondSelectedContractList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var SelectedContractList|null
     */
    protected ?SelectedContractList $secondSelectedContractList = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

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
     * @var Owner|null
     */
    protected ?Owner $owner = null;

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
     * @var Recurring|null
     */
    protected ?Recurring $recurring = null;

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
     * @var ContractNumberWalletList|null
     */
    protected ?ContractNumberWalletList $contractNumberWalletList = null;

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
     * @var SubMerchant|null
     */
    protected ?SubMerchant $subMerchant = null;

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
     * @var ThreeDSInfo|null
     */
    protected ?ThreeDSInfo $threeDSInfo = null;

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
     * @param string|null $version
     * @param Payment|null $payment
     * @param string|null $returnURL
     * @param string|null $cancelURL
     * @param Order|null $order
     * @param Buyer|null $buyer
     * @param string|null $notificationURL
     * @param SelectedContractList|null $selectedContractList
     * @param SelectedContractList|null $secondSelectedContractList
     * @param PrivateDataList|null $privateDataList
     * @param string|null $languageCode
     * @param string|null $customPaymentPageCode
     * @param Owner|null $owner
     * @param string|null $securityMode
     * @param Recurring|null $recurring
     * @param string|null $customPaymentTemplateURL
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @param string|null $merchantName
     * @param SubMerchant|null $subMerchant
     * @param string|null $miscData
     * @param string|null $asynchronousRetryTimeout
     * @param ThreeDSInfo|null $threeDSInfo
     * @param string|null $merchantScore
     * @param bool $skipSmartDisplay
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
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?string $returnURL = null, ?string $cancelURL = null, ?Order $order = null, ?Buyer $buyer = null, ?string $notificationURL = null, ?SelectedContractList $selectedContractList = null, ?SelectedContractList $secondSelectedContractList = null, ?PrivateDataList $privateDataList = null, ?string $languageCode = null, ?string $customPaymentPageCode = null, ?Owner $owner = null, ?string $securityMode = null, ?Recurring $recurring = null, ?string $customPaymentTemplateURL = null, ?ContractNumberWalletList $contractNumberWalletList = null, ?string $merchantName = null, ?SubMerchant $subMerchant = null, ?string $miscData = null, ?string $asynchronousRetryTimeout = null, ?ThreeDSInfo $threeDSInfo = null, ?string $merchantScore = null, ?bool $skipSmartDisplay = null)
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
     * @param string|null $version
     * @return DoWebPaymentRequest
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
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    /**
     * Set payment value
     * @param Payment|null $payment
     * @return DoWebPaymentRequest
     */
    public function setPayment(?Payment $payment = null): self
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
     * @param string|null $returnURL
     * @return DoWebPaymentRequest
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
     * @param string|null $cancelURL
     * @return DoWebPaymentRequest
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
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * Set order value
     * @param Order|null $order
     * @return DoWebPaymentRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get buyer value
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    /**
     * Set buyer value
     * @param Buyer|null $buyer
     * @return DoWebPaymentRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
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
     * @param string|null $notificationURL
     * @return DoWebPaymentRequest
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
     * @return SelectedContractList|null
     */
    public function getSelectedContractList(): ?SelectedContractList
    {
        return $this->selectedContractList;
    }

    /**
     * Set selectedContractList value
     * @param SelectedContractList|null $selectedContractList
     * @return DoWebPaymentRequest
     */
    public function setSelectedContractList(?SelectedContractList $selectedContractList = null): self
    {
        $this->selectedContractList = $selectedContractList;

        return $this;
    }

    /**
     * Get secondSelectedContractList value
     * @return SelectedContractList|null
     */
    public function getSecondSelectedContractList(): ?SelectedContractList
    {
        return $this->secondSelectedContractList;
    }

    /**
     * Set secondSelectedContractList value
     * @param SelectedContractList|null $secondSelectedContractList
     * @return DoWebPaymentRequest
     */
    public function setSecondSelectedContractList(?SelectedContractList $secondSelectedContractList = null): self
    {
        $this->secondSelectedContractList = $secondSelectedContractList;

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
     * @return DoWebPaymentRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
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
     * @param string|null $languageCode
     * @return DoWebPaymentRequest
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
     * @param string|null $customPaymentPageCode
     * @return DoWebPaymentRequest
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
     * @return Owner|null
     */
    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    /**
     * Set owner value
     * @param Owner|null $owner
     * @return DoWebPaymentRequest
     */
    public function setOwner(?Owner $owner = null): self
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
     * @param string|null $securityMode
     * @return DoWebPaymentRequest
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
     * @return Recurring|null
     */
    public function getRecurring(): ?Recurring
    {
        return $this->recurring;
    }

    /**
     * Set recurring value
     * @param Recurring|null $recurring
     * @return DoWebPaymentRequest
     */
    public function setRecurring(?Recurring $recurring = null): self
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
     * @param string|null $customPaymentTemplateURL
     * @return DoWebPaymentRequest
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
     * @return ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?ContractNumberWalletList
    {
        return $this->contractNumberWalletList;
    }

    /**
     * Set contractNumberWalletList value
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @return DoWebPaymentRequest
     */
    public function setContractNumberWalletList(?ContractNumberWalletList $contractNumberWalletList = null): self
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
     * @param string|null $merchantName
     * @return DoWebPaymentRequest
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
     * @return SubMerchant|null
     */
    public function getSubMerchant(): ?SubMerchant
    {
        return $this->subMerchant;
    }

    /**
     * Set subMerchant value
     * @param SubMerchant|null $subMerchant
     * @return DoWebPaymentRequest
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
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
     * @param string|null $miscData
     * @return DoWebPaymentRequest
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
     * @param string|null $asynchronousRetryTimeout
     * @return DoWebPaymentRequest
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
     * @return ThreeDSInfo|null
     */
    public function getThreeDSInfo(): ?ThreeDSInfo
    {
        return $this->threeDSInfo;
    }

    /**
     * Set threeDSInfo value
     * @param ThreeDSInfo|null $threeDSInfo
     * @return DoWebPaymentRequest
     */
    public function setThreeDSInfo(?ThreeDSInfo $threeDSInfo = null): self
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
     * @param string|null $merchantScore
     * @return DoWebPaymentRequest
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
     * @return DoWebPaymentRequest
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
