<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for buyer StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the buyer
 * @subpackage Structs
 */
class Buyer extends AbstractStructBase
{
    /**
     * The title
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $title = null;

    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastName = null;

    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstName = null;

    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $email = null;

    /**
     * The shippingAdress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Address|null
     */
    protected ?Address $shippingAdress = null;

    /**
     * The billingAddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Address|null
     */
    protected ?Address $billingAddress = null;

    /**
     * The accountCreateDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $accountCreateDate = null;

    /**
     * The accountAverageAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $accountAverageAmount = null;

    /**
     * The accountOrderCount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $accountOrderCount = null;

    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletId = null;

    /**
     * The walletDisplayed
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletDisplayed = null;

    /**
     * The walletSecured
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletSecured = null;

    /**
     * The walletCardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletCardInd = null;

    /**
     * The ip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ip = null;

    /**
     * The mobilePhone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mobilePhone = null;

    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $customerId = null;

    /**
     * The legalStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $legalStatus = null;

    /**
     * The legalDocumentType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $legalDocumentType = null;

    /**
     * The legalDocument
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $legalDocument = null;

    /**
     * The birthDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $birthDate = null;

    /**
     * The fingerprintID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $fingerprintID = null;

    /**
     * The deviceFingerprint
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $deviceFingerprint = null;

    /**
     * The isBot
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isBot = null;

    /**
     * The isIncognito
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isIncognito = null;

    /**
     * The isBehindProxy
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isBehindProxy = null;

    /**
     * The isFromTor
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isFromTor = null;

    /**
     * The isEmulator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isEmulator = null;

    /**
     * The isRooted
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isRooted = null;

    /**
     * The hasTimezoneMismatch
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $hasTimezoneMismatch = null;

    /**
     * The loyaltyMemberType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $loyaltyMemberType = null;

    /**
     * The buyerExtended
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $buyerExtended = null;

    /**
     * The merchantAuthentication
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var MerchantAuthentication|null
     */
    protected ?MerchantAuthentication $merchantAuthentication = null;

    /**
     * Constructor method for buyer
     * @param string|null $title
     * @param string|null $lastName
     * @param string|null $firstName
     * @param string|null $email
     * @param Address|null $shippingAdress
     * @param Address|null $billingAddress
     * @param string|null $accountCreateDate
     * @param string|null $accountAverageAmount
     * @param string|null $accountOrderCount
     * @param string|null $walletId
     * @param string|null $walletDisplayed
     * @param string|null $walletSecured
     * @param string|null $walletCardInd
     * @param string|null $ip
     * @param string|null $mobilePhone
     * @param string|null $customerId
     * @param string|null $legalStatus
     * @param string|null $legalDocumentType
     * @param string|null $legalDocument
     * @param string|null $birthDate
     * @param string|null $fingerprintID
     * @param string|null $deviceFingerprint
     * @param string|null $isBot
     * @param string|null $isIncognito
     * @param string|null $isBehindProxy
     * @param string|null $isFromTor
     * @param string|null $isEmulator
     * @param string|null $isRooted
     * @param string|null $hasTimezoneMismatch
     * @param string|null $loyaltyMemberType
     * @param string|null $buyerExtended
     * @param MerchantAuthentication|null $merchantAuthentication
     * @uses Buyer::setTitle()
     * @uses Buyer::setLastName()
     * @uses Buyer::setFirstName()
     * @uses Buyer::setEmail()
     * @uses Buyer::setShippingAdress()
     * @uses Buyer::setBillingAddress()
     * @uses Buyer::setAccountCreateDate()
     * @uses Buyer::setAccountAverageAmount()
     * @uses Buyer::setAccountOrderCount()
     * @uses Buyer::setWalletId()
     * @uses Buyer::setWalletDisplayed()
     * @uses Buyer::setWalletSecured()
     * @uses Buyer::setWalletCardInd()
     * @uses Buyer::setIp()
     * @uses Buyer::setMobilePhone()
     * @uses Buyer::setCustomerId()
     * @uses Buyer::setLegalStatus()
     * @uses Buyer::setLegalDocumentType()
     * @uses Buyer::setLegalDocument()
     * @uses Buyer::setBirthDate()
     * @uses Buyer::setFingerprintID()
     * @uses Buyer::setDeviceFingerprint()
     * @uses Buyer::setIsBot()
     * @uses Buyer::setIsIncognito()
     * @uses Buyer::setIsBehindProxy()
     * @uses Buyer::setIsFromTor()
     * @uses Buyer::setIsEmulator()
     * @uses Buyer::setIsRooted()
     * @uses Buyer::setHasTimezoneMismatch()
     * @uses Buyer::setLoyaltyMemberType()
     * @uses Buyer::setBuyerExtended()
     * @uses Buyer::setMerchantAuthentication()
     */
    public function __construct(?string $title = null, ?string $lastName = null, ?string $firstName = null, ?string $email = null, ?Address $shippingAdress = null, ?Address $billingAddress = null, ?string $accountCreateDate = null, ?string $accountAverageAmount = null, ?string $accountOrderCount = null, ?string $walletId = null, ?string $walletDisplayed = null, ?string $walletSecured = null, ?string $walletCardInd = null, ?string $ip = null, ?string $mobilePhone = null, ?string $customerId = null, ?string $legalStatus = null, ?string $legalDocumentType = null, ?string $legalDocument = null, ?string $birthDate = null, ?string $fingerprintID = null, ?string $deviceFingerprint = null, ?string $isBot = null, ?string $isIncognito = null, ?string $isBehindProxy = null, ?string $isFromTor = null, ?string $isEmulator = null, ?string $isRooted = null, ?string $hasTimezoneMismatch = null, ?string $loyaltyMemberType = null, ?string $buyerExtended = null, ?MerchantAuthentication $merchantAuthentication = null)
    {
        $this
            ->setTitle($title)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setEmail($email)
            ->setShippingAdress($shippingAdress)
            ->setBillingAddress($billingAddress)
            ->setAccountCreateDate($accountCreateDate)
            ->setAccountAverageAmount($accountAverageAmount)
            ->setAccountOrderCount($accountOrderCount)
            ->setWalletId($walletId)
            ->setWalletDisplayed($walletDisplayed)
            ->setWalletSecured($walletSecured)
            ->setWalletCardInd($walletCardInd)
            ->setIp($ip)
            ->setMobilePhone($mobilePhone)
            ->setCustomerId($customerId)
            ->setLegalStatus($legalStatus)
            ->setLegalDocumentType($legalDocumentType)
            ->setLegalDocument($legalDocument)
            ->setBirthDate($birthDate)
            ->setFingerprintID($fingerprintID)
            ->setDeviceFingerprint($deviceFingerprint)
            ->setIsBot($isBot)
            ->setIsIncognito($isIncognito)
            ->setIsBehindProxy($isBehindProxy)
            ->setIsFromTor($isFromTor)
            ->setIsEmulator($isEmulator)
            ->setIsRooted($isRooted)
            ->setHasTimezoneMismatch($hasTimezoneMismatch)
            ->setLoyaltyMemberType($loyaltyMemberType)
            ->setBuyerExtended($buyerExtended)
            ->setMerchantAuthentication($merchantAuthentication);
    }

    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set title value
     * @param string|null $title
     * @return Buyer
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;

        return $this;
    }

    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Set lastName value
     * @param string|null $lastName
     * @return Buyer
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set firstName value
     * @param string|null $firstName
     * @return Buyer
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email value
     * @param string|null $email
     * @return Buyer
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get shippingAdress value
     * @return Address|null
     */
    public function getShippingAdress(): ?Address
    {
        return $this->shippingAdress;
    }

    /**
     * Set shippingAdress value
     * @param Address|null $shippingAdress
     * @return Buyer
     */
    public function setShippingAdress(?Address $shippingAdress = null): self
    {
        $this->shippingAdress = $shippingAdress;

        return $this;
    }

    /**
     * Get billingAddress value
     * @return Address|null
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * Set billingAddress value
     * @param Address|null $billingAddress
     * @return Buyer
     */
    public function setBillingAddress(?Address $billingAddress = null): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get accountCreateDate value
     * @return string|null
     */
    public function getAccountCreateDate(): ?string
    {
        return $this->accountCreateDate;
    }

    /**
     * Set accountCreateDate value
     * @param string|null $accountCreateDate
     * @return Buyer
     */
    public function setAccountCreateDate(?string $accountCreateDate = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCreateDate) && !is_string($accountCreateDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCreateDate, true), gettype($accountCreateDate)), __LINE__);
        }
        $this->accountCreateDate = $accountCreateDate;

        return $this;
    }

    /**
     * Get accountAverageAmount value
     * @return string|null
     */
    public function getAccountAverageAmount(): ?string
    {
        return $this->accountAverageAmount;
    }

    /**
     * Set accountAverageAmount value
     * @param string|null $accountAverageAmount
     * @return Buyer
     */
    public function setAccountAverageAmount(?string $accountAverageAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($accountAverageAmount) && !is_string($accountAverageAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountAverageAmount, true), gettype($accountAverageAmount)), __LINE__);
        }
        $this->accountAverageAmount = $accountAverageAmount;

        return $this;
    }

    /**
     * Get accountOrderCount value
     * @return string|null
     */
    public function getAccountOrderCount(): ?string
    {
        return $this->accountOrderCount;
    }

    /**
     * Set accountOrderCount value
     * @param string|null $accountOrderCount
     * @return Buyer
     */
    public function setAccountOrderCount(?string $accountOrderCount = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOrderCount) && !is_string($accountOrderCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOrderCount, true), gettype($accountOrderCount)), __LINE__);
        }
        $this->accountOrderCount = $accountOrderCount;

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
     * @return Buyer
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
     * Get walletDisplayed value
     * @return string|null
     */
    public function getWalletDisplayed(): ?string
    {
        return $this->walletDisplayed;
    }

    /**
     * Set walletDisplayed value
     * @param string|null $walletDisplayed
     * @return Buyer
     */
    public function setWalletDisplayed(?string $walletDisplayed = null): self
    {
        // validation for constraint: string
        if (!is_null($walletDisplayed) && !is_string($walletDisplayed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletDisplayed, true), gettype($walletDisplayed)), __LINE__);
        }
        $this->walletDisplayed = $walletDisplayed;

        return $this;
    }

    /**
     * Get walletSecured value
     * @return string|null
     */
    public function getWalletSecured(): ?string
    {
        return $this->walletSecured;
    }

    /**
     * Set walletSecured value
     * @param string|null $walletSecured
     * @return Buyer
     */
    public function setWalletSecured(?string $walletSecured = null): self
    {
        // validation for constraint: string
        if (!is_null($walletSecured) && !is_string($walletSecured)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletSecured, true), gettype($walletSecured)), __LINE__);
        }
        $this->walletSecured = $walletSecured;

        return $this;
    }

    /**
     * Get walletCardInd value
     * @return string|null
     */
    public function getWalletCardInd(): ?string
    {
        return $this->walletCardInd;
    }

    /**
     * Set walletCardInd value
     * @param string|null $walletCardInd
     * @return Buyer
     */
    public function setWalletCardInd(?string $walletCardInd = null): self
    {
        // validation for constraint: string
        if (!is_null($walletCardInd) && !is_string($walletCardInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletCardInd, true), gettype($walletCardInd)), __LINE__);
        }
        $this->walletCardInd = $walletCardInd;

        return $this;
    }

    /**
     * Get ip value
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * Set ip value
     * @param string|null $ip
     * @return Buyer
     */
    public function setIp(?string $ip = null): self
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get mobilePhone value
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    /**
     * Set mobilePhone value
     * @param string|null $mobilePhone
     * @return Buyer
     */
    public function setMobilePhone(?string $mobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Set customerId value
     * @param string|null $customerId
     * @return Buyer
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get legalStatus value
     * @return string|null
     */
    public function getLegalStatus(): ?string
    {
        return $this->legalStatus;
    }

    /**
     * Set legalStatus value
     * @param string|null $legalStatus
     * @return Buyer
     */
    public function setLegalStatus(?string $legalStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($legalStatus) && !is_string($legalStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalStatus, true), gettype($legalStatus)), __LINE__);
        }
        $this->legalStatus = $legalStatus;

        return $this;
    }

    /**
     * Get legalDocumentType value
     * @return string|null
     */
    public function getLegalDocumentType(): ?string
    {
        return $this->legalDocumentType;
    }

    /**
     * Set legalDocumentType value
     * @param string|null $legalDocumentType
     * @return Buyer
     */
    public function setLegalDocumentType(?string $legalDocumentType = null): self
    {
        // validation for constraint: string
        if (!is_null($legalDocumentType) && !is_string($legalDocumentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalDocumentType, true), gettype($legalDocumentType)), __LINE__);
        }
        $this->legalDocumentType = $legalDocumentType;

        return $this;
    }

    /**
     * Get legalDocument value
     * @return string|null
     */
    public function getLegalDocument(): ?string
    {
        return $this->legalDocument;
    }

    /**
     * Set legalDocument value
     * @param string|null $legalDocument
     * @return Buyer
     */
    public function setLegalDocument(?string $legalDocument = null): self
    {
        // validation for constraint: string
        if (!is_null($legalDocument) && !is_string($legalDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalDocument, true), gettype($legalDocument)), __LINE__);
        }
        $this->legalDocument = $legalDocument;

        return $this;
    }

    /**
     * Get birthDate value
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Set birthDate value
     * @param string|null $birthDate
     * @return Buyer
     */
    public function setBirthDate(?string $birthDate = null): self
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDate, true), gettype($birthDate)), __LINE__);
        }
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get fingerprintID value
     * @return string|null
     */
    public function getFingerprintID(): ?string
    {
        return $this->fingerprintID;
    }

    /**
     * Set fingerprintID value
     * @param string|null $fingerprintID
     * @return Buyer
     */
    public function setFingerprintID(?string $fingerprintID = null): self
    {
        // validation for constraint: string
        if (!is_null($fingerprintID) && !is_string($fingerprintID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fingerprintID, true), gettype($fingerprintID)), __LINE__);
        }
        $this->fingerprintID = $fingerprintID;

        return $this;
    }

    /**
     * Get deviceFingerprint value
     * @return string|null
     */
    public function getDeviceFingerprint(): ?string
    {
        return $this->deviceFingerprint;
    }

    /**
     * Set deviceFingerprint value
     * @param string|null $deviceFingerprint
     * @return Buyer
     */
    public function setDeviceFingerprint(?string $deviceFingerprint = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceFingerprint) && !is_string($deviceFingerprint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceFingerprint, true), gettype($deviceFingerprint)), __LINE__);
        }
        $this->deviceFingerprint = $deviceFingerprint;

        return $this;
    }

    /**
     * Get isBot value
     * @return string|null
     */
    public function getIsBot(): ?string
    {
        return $this->isBot;
    }

    /**
     * Set isBot value
     * @param string|null $isBot
     * @return Buyer
     */
    public function setIsBot(?string $isBot = null): self
    {
        // validation for constraint: string
        if (!is_null($isBot) && !is_string($isBot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isBot, true), gettype($isBot)), __LINE__);
        }
        $this->isBot = $isBot;

        return $this;
    }

    /**
     * Get isIncognito value
     * @return string|null
     */
    public function getIsIncognito(): ?string
    {
        return $this->isIncognito;
    }

    /**
     * Set isIncognito value
     * @param string|null $isIncognito
     * @return Buyer
     */
    public function setIsIncognito(?string $isIncognito = null): self
    {
        // validation for constraint: string
        if (!is_null($isIncognito) && !is_string($isIncognito)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isIncognito, true), gettype($isIncognito)), __LINE__);
        }
        $this->isIncognito = $isIncognito;

        return $this;
    }

    /**
     * Get isBehindProxy value
     * @return string|null
     */
    public function getIsBehindProxy(): ?string
    {
        return $this->isBehindProxy;
    }

    /**
     * Set isBehindProxy value
     * @param string|null $isBehindProxy
     * @return Buyer
     */
    public function setIsBehindProxy(?string $isBehindProxy = null): self
    {
        // validation for constraint: string
        if (!is_null($isBehindProxy) && !is_string($isBehindProxy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isBehindProxy, true), gettype($isBehindProxy)), __LINE__);
        }
        $this->isBehindProxy = $isBehindProxy;

        return $this;
    }

    /**
     * Get isFromTor value
     * @return string|null
     */
    public function getIsFromTor(): ?string
    {
        return $this->isFromTor;
    }

    /**
     * Set isFromTor value
     * @param string|null $isFromTor
     * @return Buyer
     */
    public function setIsFromTor(?string $isFromTor = null): self
    {
        // validation for constraint: string
        if (!is_null($isFromTor) && !is_string($isFromTor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isFromTor, true), gettype($isFromTor)), __LINE__);
        }
        $this->isFromTor = $isFromTor;

        return $this;
    }

    /**
     * Get isEmulator value
     * @return string|null
     */
    public function getIsEmulator(): ?string
    {
        return $this->isEmulator;
    }

    /**
     * Set isEmulator value
     * @param string|null $isEmulator
     * @return Buyer
     */
    public function setIsEmulator(?string $isEmulator = null): self
    {
        // validation for constraint: string
        if (!is_null($isEmulator) && !is_string($isEmulator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isEmulator, true), gettype($isEmulator)), __LINE__);
        }
        $this->isEmulator = $isEmulator;

        return $this;
    }

    /**
     * Get isRooted value
     * @return string|null
     */
    public function getIsRooted(): ?string
    {
        return $this->isRooted;
    }

    /**
     * Set isRooted value
     * @param string|null $isRooted
     * @return Buyer
     */
    public function setIsRooted(?string $isRooted = null): self
    {
        // validation for constraint: string
        if (!is_null($isRooted) && !is_string($isRooted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isRooted, true), gettype($isRooted)), __LINE__);
        }
        $this->isRooted = $isRooted;

        return $this;
    }

    /**
     * Get hasTimezoneMismatch value
     * @return string|null
     */
    public function getHasTimezoneMismatch(): ?string
    {
        return $this->hasTimezoneMismatch;
    }

    /**
     * Set hasTimezoneMismatch value
     * @param string|null $hasTimezoneMismatch
     * @return Buyer
     */
    public function setHasTimezoneMismatch(?string $hasTimezoneMismatch = null): self
    {
        // validation for constraint: string
        if (!is_null($hasTimezoneMismatch) && !is_string($hasTimezoneMismatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hasTimezoneMismatch, true), gettype($hasTimezoneMismatch)), __LINE__);
        }
        $this->hasTimezoneMismatch = $hasTimezoneMismatch;

        return $this;
    }

    /**
     * Get loyaltyMemberType value
     * @return string|null
     */
    public function getLoyaltyMemberType(): ?string
    {
        return $this->loyaltyMemberType;
    }

    /**
     * Set loyaltyMemberType value
     * @param string|null $loyaltyMemberType
     * @return Buyer
     */
    public function setLoyaltyMemberType(?string $loyaltyMemberType = null): self
    {
        // validation for constraint: string
        if (!is_null($loyaltyMemberType) && !is_string($loyaltyMemberType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyMemberType, true), gettype($loyaltyMemberType)), __LINE__);
        }
        $this->loyaltyMemberType = $loyaltyMemberType;

        return $this;
    }

    /**
     * Get buyerExtended value
     * @return string|null
     */
    public function getBuyerExtended(): ?string
    {
        return $this->buyerExtended;
    }

    /**
     * Set buyerExtended value
     * @param string|null $buyerExtended
     * @return Buyer
     */
    public function setBuyerExtended(?string $buyerExtended = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerExtended) && !is_string($buyerExtended)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerExtended, true), gettype($buyerExtended)), __LINE__);
        }
        $this->buyerExtended = $buyerExtended;

        return $this;
    }

    /**
     * Get merchantAuthentication value
     * @return MerchantAuthentication|null
     */
    public function getMerchantAuthentication(): ?MerchantAuthentication
    {
        return $this->merchantAuthentication;
    }

    /**
     * Set merchantAuthentication value
     * @param MerchantAuthentication|null $merchantAuthentication
     * @return Buyer
     */
    public function setMerchantAuthentication(?MerchantAuthentication $merchantAuthentication = null): self
    {
        $this->merchantAuthentication = $merchantAuthentication;

        return $this;
    }
}
