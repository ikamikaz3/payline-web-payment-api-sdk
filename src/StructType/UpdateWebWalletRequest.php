<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateWebWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the updateWebWallet method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
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
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

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
     * Constructor method for updateWebWalletRequest
     * @param string|null $version
     * @param string|null $contractNumber
     * @param string|null $walletId
     * @param string|null $returnURL
     * @param string|null $cancelURL
     * @param string|null $cardInd
     * @param string|null $updatePersonalDetails
     * @param string|null $updateOwnerDetails
     * @param string|null $updatePaymentDetails
     * @param Buyer|null $buyer
     * @param string|null $languageCode
     * @param string|null $customPaymentPageCode
     * @param string|null $securityMode
     * @param string|null $notificationURL
     * @param PrivateDataList|null $privateDataList
     * @param string|null $customPaymentTemplateURL
     * @param ContractNumberWalletList|null $contractNumberWalletList
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
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?string $walletId = null, ?string $returnURL = null, ?string $cancelURL = null, ?string $cardInd = null, ?string $updatePersonalDetails = null, ?string $updateOwnerDetails = null, ?string $updatePaymentDetails = null, ?Buyer $buyer = null, ?string $languageCode = null, ?string $customPaymentPageCode = null, ?string $securityMode = null, ?string $notificationURL = null, ?PrivateDataList $privateDataList = null, ?string $customPaymentTemplateURL = null, ?ContractNumberWalletList $contractNumberWalletList = null)
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
     * @param string|null $version
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @param string|null $walletId
     * @return UpdateWebWalletRequest
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
     * @param string|null $returnURL
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @param string|null $cardInd
     * @return UpdateWebWalletRequest
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
     * @param string|null $updatePersonalDetails
     * @return UpdateWebWalletRequest
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
     * @param string|null $updateOwnerDetails
     * @return UpdateWebWalletRequest
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
     * @param string|null $updatePaymentDetails
     * @return UpdateWebWalletRequest
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
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    /**
     * Set buyer value
     * @param Buyer|null $buyer
     * @return UpdateWebWalletRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
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
     * @param string|null $languageCode
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
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
     * @return UpdateWebWalletRequest
     */
    public function setContractNumberWalletList(?ContractNumberWalletList $contractNumberWalletList = null): self
    {
        $this->contractNumberWalletList = $contractNumberWalletList;

        return $this;
    }
}
