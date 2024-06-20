<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateWebWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the updateWebWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateWebWalletRequest extends AbstractStructBase
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
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $walletId = null;
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
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;
    /**
     * The updatePersonalDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatePersonalDetails = null;
    /**
     * The updateOwnerDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $updateOwnerDetails = null;
    /**
     * The updatePaymentDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $updatePaymentDetails = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
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
     * Constructor method for updateWebWalletRequest
     * @uses UpdateWebWalletRequest::setVersion()
     * @uses UpdateWebWalletRequest::setContractNumber()
     * @uses UpdateWebWalletRequest::setWalletId()
     * @uses UpdateWebWalletRequest::setReturnURL()
     * @uses UpdateWebWalletRequest::setCancelURL()
     * @uses UpdateWebWalletRequest::setCardInd()
     * @uses UpdateWebWalletRequest::setUpdatePersonalDetails()
     * @uses UpdateWebWalletRequest::setUpdateOwnerDetails()
     * @uses UpdateWebWalletRequest::setUpdatePaymentDetails()
     * @uses UpdateWebWalletRequest::setBuyer()
     * @uses UpdateWebWalletRequest::setLanguageCode()
     * @uses UpdateWebWalletRequest::setCustomPaymentPageCode()
     * @uses UpdateWebWalletRequest::setSecurityMode()
     * @uses UpdateWebWalletRequest::setNotificationURL()
     * @uses UpdateWebWalletRequest::setPrivateDataList()
     * @uses UpdateWebWalletRequest::setCustomPaymentTemplateURL()
     * @uses UpdateWebWalletRequest::setContractNumberWalletList()
     * @param string $version
     * @param string $contractNumber
     * @param string $walletId
     * @param string $returnURL
     * @param string $cancelURL
     * @param string $cardInd
     * @param string $updatePersonalDetails
     * @param string $updateOwnerDetails
     * @param string $updatePaymentDetails
     * @param \StructType\Buyer $buyer
     * @param string $languageCode
     * @param string $customPaymentPageCode
     * @param string $securityMode
     * @param string $notificationURL
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $customPaymentTemplateURL
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?string $walletId = null, ?string $returnURL = null, ?string $cancelURL = null, ?string $cardInd = null, ?string $updatePersonalDetails = null, ?string $updateOwnerDetails = null, ?string $updatePaymentDetails = null, ?\StructType\Buyer $buyer = null, ?string $languageCode = null, ?string $customPaymentPageCode = null, ?string $securityMode = null, ?string $notificationURL = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $customPaymentTemplateURL = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null)
    {
        $this
            ->setVersion($version)
            ->setContractNumber($contractNumber)
            ->setWalletId($walletId)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setCardInd($cardInd)
            ->setUpdatePersonalDetails($updatePersonalDetails)
            ->setUpdateOwnerDetails($updateOwnerDetails)
            ->setUpdatePaymentDetails($updatePaymentDetails)
            ->setBuyer($buyer)
            ->setLanguageCode($languageCode)
            ->setCustomPaymentPageCode($customPaymentPageCode)
            ->setSecurityMode($securityMode)
            ->setNotificationURL($notificationURL)
            ->setPrivateDataList($privateDataList)
            ->setCustomPaymentTemplateURL($customPaymentTemplateURL)
            ->setContractNumberWalletList($contractNumberWalletList);
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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * Get walletId value
     * @return string|null
     */
    public function getWalletId(): ?string
    {
        return $this->walletId;
    }
    /**
     * Set walletId value
     * @param string $walletId
     * @return \StructType\UpdateWebWalletRequest
     */
    public function setWalletId(?string $walletId = null): self
    {
        // validation for constraint: string
        if (!is_null($walletId) && !is_string($walletId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletId, true), gettype($walletId)), __LINE__);
        }
        $this->walletId = $walletId;

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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * Get cardInd value
     * @return string|null
     */
    public function getCardInd(): ?string
    {
        return $this->cardInd;
    }
    /**
     * Set cardInd value
     * @param string $cardInd
     * @return \StructType\UpdateWebWalletRequest
     */
    public function setCardInd(?string $cardInd = null): self
    {
        // validation for constraint: string
        if (!is_null($cardInd) && !is_string($cardInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardInd, true), gettype($cardInd)), __LINE__);
        }
        $this->cardInd = $cardInd;

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
     * @return \StructType\UpdateWebWalletRequest
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
     * Get updateOwnerDetails value
     * @return string|null
     */
    public function getUpdateOwnerDetails(): ?string
    {
        return $this->updateOwnerDetails;
    }
    /**
     * Set updateOwnerDetails value
     * @param string $updateOwnerDetails
     * @return \StructType\UpdateWebWalletRequest
     */
    public function setUpdateOwnerDetails(?string $updateOwnerDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($updateOwnerDetails) && !is_string($updateOwnerDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateOwnerDetails, true), gettype($updateOwnerDetails)), __LINE__);
        }
        $this->updateOwnerDetails = $updateOwnerDetails;

        return $this;
    }
    /**
     * Get updatePaymentDetails value
     * @return string|null
     */
    public function getUpdatePaymentDetails(): ?string
    {
        return $this->updatePaymentDetails;
    }
    /**
     * Set updatePaymentDetails value
     * @param string $updatePaymentDetails
     * @return \StructType\UpdateWebWalletRequest
     */
    public function setUpdatePaymentDetails(?string $updatePaymentDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($updatePaymentDetails) && !is_string($updatePaymentDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatePaymentDetails, true), gettype($updatePaymentDetails)), __LINE__);
        }
        $this->updatePaymentDetails = $updatePaymentDetails;

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
     * @return \StructType\UpdateWebWalletRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
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
     * @return \StructType\UpdateWebWalletRequest
     */
    public function setContractNumberWalletList(?\StructType\ContractNumberWalletList $contractNumberWalletList = null): self
    {
        $this->contractNumberWalletList = $contractNumberWalletList;

        return $this;
    }
}
