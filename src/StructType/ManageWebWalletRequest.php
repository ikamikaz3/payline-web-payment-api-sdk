<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for manageWebWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the manageWebWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ManageWebWalletRequest extends AbstractStructBase
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
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
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
     * The selectedContractList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SelectedContractList|null
     */
    protected ?\StructType\SelectedContractList $selectedContractList = null;
    /**
     * The updatePersonalDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatePersonalDetails = null;
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Owner|null
     */
    protected ?\StructType\Owner $owner = null;
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
     * The securityMode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $securityMode = null;
    /**
     * The notificationURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $notificationURL = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
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
     * The threeDSInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ThreeDSInfo|null
     */
    protected ?\StructType\ThreeDSInfo $threeDSInfo = null;
    /**
     * Constructor method for manageWebWalletRequest
     * @uses ManageWebWalletRequest::setVersion()
     * @uses ManageWebWalletRequest::setContractNumber()
     * @uses ManageWebWalletRequest::setBuyer()
     * @uses ManageWebWalletRequest::setReturnURL()
     * @uses ManageWebWalletRequest::setCancelURL()
     * @uses ManageWebWalletRequest::setSelectedContractList()
     * @uses ManageWebWalletRequest::setUpdatePersonalDetails()
     * @uses ManageWebWalletRequest::setOwner()
     * @uses ManageWebWalletRequest::setLanguageCode()
     * @uses ManageWebWalletRequest::setCustomPaymentPageCode()
     * @uses ManageWebWalletRequest::setSecurityMode()
     * @uses ManageWebWalletRequest::setNotificationURL()
     * @uses ManageWebWalletRequest::setPrivateDataList()
     * @uses ManageWebWalletRequest::setCustomPaymentTemplateURL()
     * @uses ManageWebWalletRequest::setContractNumberWalletList()
     * @uses ManageWebWalletRequest::setMerchantName()
     * @uses ManageWebWalletRequest::setThreeDSInfo()
     * @param string $version
     * @param string $contractNumber
     * @param \StructType\Buyer $buyer
     * @param string $returnURL
     * @param string $cancelURL
     * @param \StructType\SelectedContractList $selectedContractList
     * @param string $updatePersonalDetails
     * @param \StructType\Owner $owner
     * @param string $languageCode
     * @param string $customPaymentPageCode
     * @param string $securityMode
     * @param string $notificationURL
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $customPaymentTemplateURL
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @param string $merchantName
     * @param \StructType\ThreeDSInfo $threeDSInfo
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?\StructType\Buyer $buyer = null, ?string $returnURL = null, ?string $cancelURL = null, ?\StructType\SelectedContractList $selectedContractList = null, ?string $updatePersonalDetails = null, ?\StructType\Owner $owner = null, ?string $languageCode = null, ?string $customPaymentPageCode = null, ?string $securityMode = null, ?string $notificationURL = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $customPaymentTemplateURL = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null, ?string $merchantName = null, ?\StructType\ThreeDSInfo $threeDSInfo = null)
    {
        $this
            ->setVersion($version)
            ->setContractNumber($contractNumber)
            ->setBuyer($buyer)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setSelectedContractList($selectedContractList)
            ->setUpdatePersonalDetails($updatePersonalDetails)
            ->setOwner($owner)
            ->setLanguageCode($languageCode)
            ->setCustomPaymentPageCode($customPaymentPageCode)
            ->setSecurityMode($securityMode)
            ->setNotificationURL($notificationURL)
            ->setPrivateDataList($privateDataList)
            ->setCustomPaymentTemplateURL($customPaymentTemplateURL)
            ->setContractNumberWalletList($contractNumberWalletList)
            ->setMerchantName($merchantName)
            ->setThreeDSInfo($threeDSInfo);
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
     */
    public function setSelectedContractList(?\StructType\SelectedContractList $selectedContractList = null): self
    {
        $this->selectedContractList = $selectedContractList;

        return $this;
    }
    /**
     * Get updatePersonalDetails value
     * @return string|null
     */
    public function getUpdatePersonalDetails(): ?string
    {
        return $this->updatePersonalDetails;
    }
    /**
     * Set updatePersonalDetails value
     * @param string $updatePersonalDetails
     * @return \StructType\ManageWebWalletRequest
     */
    public function setUpdatePersonalDetails(?string $updatePersonalDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($updatePersonalDetails) && !is_string($updatePersonalDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatePersonalDetails, true), gettype($updatePersonalDetails)), __LINE__);
        }
        $this->updatePersonalDetails = $updatePersonalDetails;

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
     * @return \StructType\ManageWebWalletRequest
     */
    public function setOwner(?\StructType\Owner $owner = null): self
    {
        $this->owner = $owner;

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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
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
     * @return \StructType\ManageWebWalletRequest
     */
    public function setThreeDSInfo(?\StructType\ThreeDSInfo $threeDSInfo = null): self
    {
        $this->threeDSInfo = $threeDSInfo;

        return $this;
    }
}
