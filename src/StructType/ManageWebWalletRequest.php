<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for manageWebWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the manageWebWallet method
 * @subpackage Structs
 */
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
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

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
     * @var SelectedContractList|null
     */
    protected ?SelectedContractList $selectedContractList = null;

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
     * @var Owner|null
     */
    protected ?Owner $owner = null;

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
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

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
     * The threeDSInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var ThreeDSInfo|null
     */
    protected ?ThreeDSInfo $threeDSInfo = null;

    /**
     * Constructor method for manageWebWalletRequest
     * @param string|null $version
     * @param string|null $contractNumber
     * @param Buyer|null $buyer
     * @param string|null $returnURL
     * @param string|null $cancelURL
     * @param SelectedContractList|null $selectedContractList
     * @param string|null $updatePersonalDetails
     * @param Owner|null $owner
     * @param string|null $languageCode
     * @param string|null $customPaymentPageCode
     * @param string|null $securityMode
     * @param string|null $notificationURL
     * @param PrivateDataList|null $privateDataList
     * @param string|null $customPaymentTemplateURL
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @param string|null $merchantName
     * @param ThreeDSInfo|null $threeDSInfo
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
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?Buyer $buyer = null, ?string $returnURL = null, ?string $cancelURL = null, ?SelectedContractList $selectedContractList = null, ?string $updatePersonalDetails = null, ?Owner $owner = null, ?string $languageCode = null, ?string $customPaymentPageCode = null, ?string $securityMode = null, ?string $notificationURL = null, ?PrivateDataList $privateDataList = null, ?string $customPaymentTemplateURL = null, ?ContractNumberWalletList $contractNumberWalletList = null, ?string $merchantName = null, ?ThreeDSInfo $threeDSInfo = null)
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
     * @param string|null $version
     * @return ManageWebWalletRequest
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
     * @return ManageWebWalletRequest
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
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    /**
     * Set buyer value
     * @param Buyer|null $buyer
     * @return ManageWebWalletRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
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
     * @param string|null $returnURL
     * @return ManageWebWalletRequest
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
     * @return ManageWebWalletRequest
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
     * @return SelectedContractList|null
     */
    public function getSelectedContractList(): ?SelectedContractList
    {
        return $this->selectedContractList;
    }

    /**
     * Set selectedContractList value
     * @param SelectedContractList|null $selectedContractList
     * @return ManageWebWalletRequest
     */
    public function setSelectedContractList(?SelectedContractList $selectedContractList = null): self
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
     * @param string|null $updatePersonalDetails
     * @return ManageWebWalletRequest
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
     * @return Owner|null
     */
    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    /**
     * Set owner value
     * @param Owner|null $owner
     * @return ManageWebWalletRequest
     */
    public function setOwner(?Owner $owner = null): self
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
     * @param string|null $languageCode
     * @return ManageWebWalletRequest
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
     * @return ManageWebWalletRequest
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
     * @param string|null $securityMode
     * @return ManageWebWalletRequest
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
     * @param string|null $notificationURL
     * @return ManageWebWalletRequest
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
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return ManageWebWalletRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
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
     * @param string|null $customPaymentTemplateURL
     * @return ManageWebWalletRequest
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
     * @return ManageWebWalletRequest
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
     * @return ManageWebWalletRequest
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
     * @return ThreeDSInfo|null
     */
    public function getThreeDSInfo(): ?ThreeDSInfo
    {
        return $this->threeDSInfo;
    }

    /**
     * Set threeDSInfo value
     * @param ThreeDSInfo|null $threeDSInfo
     * @return ManageWebWalletRequest
     */
    public function setThreeDSInfo(?ThreeDSInfo $threeDSInfo = null): self
    {
        $this->threeDSInfo = $threeDSInfo;

        return $this;
    }
}
