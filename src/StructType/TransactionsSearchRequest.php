<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transactionsSearchRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the transactionsSearch method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransactionsSearchRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The orderRef
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderRef = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The authorizationNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $authorizationNumber = null;
    /**
     * The returnCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $returnCode = null;
    /**
     * The paymentMean
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $paymentMean = null;
    /**
     * The transactionType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
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
     * The cardNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardNumber = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The minAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $minAmount = null;
    /**
     * The maxAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $maxAmount = null;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletId = null;
    /**
     * The sequenceNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $sequenceNumber = null;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The pointOfSellId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $pointOfSellId = null;
    /**
     * The cardNetwork
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardNetwork = null;
    /**
     * The threeDSecured
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSecured = null;
    /**
     * The customerMediaId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $customerMediaId = null;
    /**
     * Constructor method for transactionsSearchRequest
     * @uses TransactionsSearchRequest::setVersion()
     * @uses TransactionsSearchRequest::setStartDate()
     * @uses TransactionsSearchRequest::setEndDate()
     * @uses TransactionsSearchRequest::setTransactionId()
     * @uses TransactionsSearchRequest::setOrderRef()
     * @uses TransactionsSearchRequest::setContractNumber()
     * @uses TransactionsSearchRequest::setAuthorizationNumber()
     * @uses TransactionsSearchRequest::setReturnCode()
     * @uses TransactionsSearchRequest::setPaymentMean()
     * @uses TransactionsSearchRequest::setTransactionType()
     * @uses TransactionsSearchRequest::setName()
     * @uses TransactionsSearchRequest::setFirstName()
     * @uses TransactionsSearchRequest::setEmail()
     * @uses TransactionsSearchRequest::setCardNumber()
     * @uses TransactionsSearchRequest::setCurrency()
     * @uses TransactionsSearchRequest::setMinAmount()
     * @uses TransactionsSearchRequest::setMaxAmount()
     * @uses TransactionsSearchRequest::setWalletId()
     * @uses TransactionsSearchRequest::setSequenceNumber()
     * @uses TransactionsSearchRequest::setToken()
     * @uses TransactionsSearchRequest::setPointOfSellId()
     * @uses TransactionsSearchRequest::setCardNetwork()
     * @uses TransactionsSearchRequest::setThreeDSecured()
     * @uses TransactionsSearchRequest::setCustomerMediaId()
     * @param string $version
     * @param string $startDate
     * @param string $endDate
     * @param string $transactionId
     * @param string $orderRef
     * @param string $contractNumber
     * @param string $authorizationNumber
     * @param string $returnCode
     * @param string $paymentMean
     * @param string $transactionType
     * @param string $name
     * @param string $firstName
     * @param string $email
     * @param string $cardNumber
     * @param string $currency
     * @param string $minAmount
     * @param string $maxAmount
     * @param string $walletId
     * @param string $sequenceNumber
     * @param string $token
     * @param string $pointOfSellId
     * @param string $cardNetwork
     * @param string $threeDSecured
     * @param string $customerMediaId
     */
    public function __construct(?string $version = null, ?string $startDate = null, ?string $endDate = null, ?string $transactionId = null, ?string $orderRef = null, ?string $contractNumber = null, ?string $authorizationNumber = null, ?string $returnCode = null, ?string $paymentMean = null, ?string $transactionType = null, ?string $name = null, ?string $firstName = null, ?string $email = null, ?string $cardNumber = null, ?string $currency = null, ?string $minAmount = null, ?string $maxAmount = null, ?string $walletId = null, ?string $sequenceNumber = null, ?string $token = null, ?string $pointOfSellId = null, ?string $cardNetwork = null, ?string $threeDSecured = null, ?string $customerMediaId = null)
    {
        $this
            ->setVersion($version)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setTransactionId($transactionId)
            ->setOrderRef($orderRef)
            ->setContractNumber($contractNumber)
            ->setAuthorizationNumber($authorizationNumber)
            ->setReturnCode($returnCode)
            ->setPaymentMean($paymentMean)
            ->setTransactionType($transactionType)
            ->setName($name)
            ->setFirstName($firstName)
            ->setEmail($email)
            ->setCardNumber($cardNumber)
            ->setCurrency($currency)
            ->setMinAmount($minAmount)
            ->setMaxAmount($maxAmount)
            ->setWalletId($walletId)
            ->setSequenceNumber($sequenceNumber)
            ->setToken($token)
            ->setPointOfSellId($pointOfSellId)
            ->setCardNetwork($cardNetwork)
            ->setThreeDSecured($threeDSecured)
            ->setCustomerMediaId($customerMediaId);
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
     * @return \StructType\TransactionsSearchRequest
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\TransactionsSearchRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;

        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\TransactionsSearchRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;

        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \StructType\TransactionsSearchRequest
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;

        return $this;
    }
    /**
     * Get orderRef value
     * @return string|null
     */
    public function getOrderRef(): ?string
    {
        return $this->orderRef;
    }
    /**
     * Set orderRef value
     * @param string $orderRef
     * @return \StructType\TransactionsSearchRequest
     */
    public function setOrderRef(?string $orderRef = null): self
    {
        // validation for constraint: string
        if (!is_null($orderRef) && !is_string($orderRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderRef, true), gettype($orderRef)), __LINE__);
        }
        $this->orderRef = $orderRef;

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
     * @return \StructType\TransactionsSearchRequest
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
     * Get authorizationNumber value
     * @return string|null
     */
    public function getAuthorizationNumber(): ?string
    {
        return $this->authorizationNumber;
    }
    /**
     * Set authorizationNumber value
     * @param string $authorizationNumber
     * @return \StructType\TransactionsSearchRequest
     */
    public function setAuthorizationNumber(?string $authorizationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizationNumber) && !is_string($authorizationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationNumber, true), gettype($authorizationNumber)), __LINE__);
        }
        $this->authorizationNumber = $authorizationNumber;

        return $this;
    }
    /**
     * Get returnCode value
     * @return string|null
     */
    public function getReturnCode(): ?string
    {
        return $this->returnCode;
    }
    /**
     * Set returnCode value
     * @param string $returnCode
     * @return \StructType\TransactionsSearchRequest
     */
    public function setReturnCode(?string $returnCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCode) && !is_string($returnCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCode, true), gettype($returnCode)), __LINE__);
        }
        $this->returnCode = $returnCode;

        return $this;
    }
    /**
     * Get paymentMean value
     * @return string|null
     */
    public function getPaymentMean(): ?string
    {
        return $this->paymentMean;
    }
    /**
     * Set paymentMean value
     * @param string $paymentMean
     * @return \StructType\TransactionsSearchRequest
     */
    public function setPaymentMean(?string $paymentMean = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMean) && !is_string($paymentMean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMean, true), gettype($paymentMean)), __LINE__);
        }
        $this->paymentMean = $paymentMean;

        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \StructType\TransactionsSearchRequest
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;

        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\TransactionsSearchRequest
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;

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
     * @param string $firstName
     * @return \StructType\TransactionsSearchRequest
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
     * @param string $email
     * @return \StructType\TransactionsSearchRequest
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
     * Get cardNumber value
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }
    /**
     * Set cardNumber value
     * @param string $cardNumber
     * @return \StructType\TransactionsSearchRequest
     */
    public function setCardNumber(?string $cardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        $this->cardNumber = $cardNumber;

        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \StructType\TransactionsSearchRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;

        return $this;
    }
    /**
     * Get minAmount value
     * @return string|null
     */
    public function getMinAmount(): ?string
    {
        return $this->minAmount;
    }
    /**
     * Set minAmount value
     * @param string $minAmount
     * @return \StructType\TransactionsSearchRequest
     */
    public function setMinAmount(?string $minAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($minAmount) && !is_string($minAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minAmount, true), gettype($minAmount)), __LINE__);
        }
        $this->minAmount = $minAmount;

        return $this;
    }
    /**
     * Get maxAmount value
     * @return string|null
     */
    public function getMaxAmount(): ?string
    {
        return $this->maxAmount;
    }
    /**
     * Set maxAmount value
     * @param string $maxAmount
     * @return \StructType\TransactionsSearchRequest
     */
    public function setMaxAmount(?string $maxAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($maxAmount) && !is_string($maxAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxAmount, true), gettype($maxAmount)), __LINE__);
        }
        $this->maxAmount = $maxAmount;

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
     * @return \StructType\TransactionsSearchRequest
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
     * Get sequenceNumber value
     * @return string|null
     */
    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }
    /**
     * Set sequenceNumber value
     * @param string $sequenceNumber
     * @return \StructType\TransactionsSearchRequest
     */
    public function setSequenceNumber(?string $sequenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceNumber) && !is_string($sequenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \StructType\TransactionsSearchRequest
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;

        return $this;
    }
    /**
     * Get pointOfSellId value
     * @return string|null
     */
    public function getPointOfSellId(): ?string
    {
        return $this->pointOfSellId;
    }
    /**
     * Set pointOfSellId value
     * @param string $pointOfSellId
     * @return \StructType\TransactionsSearchRequest
     */
    public function setPointOfSellId(?string $pointOfSellId = null): self
    {
        // validation for constraint: string
        if (!is_null($pointOfSellId) && !is_string($pointOfSellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointOfSellId, true), gettype($pointOfSellId)), __LINE__);
        }
        $this->pointOfSellId = $pointOfSellId;

        return $this;
    }
    /**
     * Get cardNetwork value
     * @return string|null
     */
    public function getCardNetwork(): ?string
    {
        return $this->cardNetwork;
    }
    /**
     * Set cardNetwork value
     * @param string $cardNetwork
     * @return \StructType\TransactionsSearchRequest
     */
    public function setCardNetwork(?string $cardNetwork = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNetwork) && !is_string($cardNetwork)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNetwork, true), gettype($cardNetwork)), __LINE__);
        }
        $this->cardNetwork = $cardNetwork;

        return $this;
    }
    /**
     * Get threeDSecured value
     * @return string|null
     */
    public function getThreeDSecured(): ?string
    {
        return $this->threeDSecured;
    }
    /**
     * Set threeDSecured value
     * @param string $threeDSecured
     * @return \StructType\TransactionsSearchRequest
     */
    public function setThreeDSecured(?string $threeDSecured = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSecured) && !is_string($threeDSecured)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSecured, true), gettype($threeDSecured)), __LINE__);
        }
        $this->threeDSecured = $threeDSecured;

        return $this;
    }
    /**
     * Get customerMediaId value
     * @return string|null
     */
    public function getCustomerMediaId(): ?string
    {
        return $this->customerMediaId;
    }
    /**
     * Set customerMediaId value
     * @param string $customerMediaId
     * @return \StructType\TransactionsSearchRequest
     */
    public function setCustomerMediaId(?string $customerMediaId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerMediaId) && !is_string($customerMediaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMediaId, true), gettype($customerMediaId)), __LINE__);
        }
        $this->customerMediaId = $customerMediaId;

        return $this;
    }
}
