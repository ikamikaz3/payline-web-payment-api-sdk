<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebPaymentDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doWebPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWebPaymentDetailsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
    /**
     * The card
     * @var \StructType\CardOut|null
     */
    protected ?\StructType\CardOut $card = null;
    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
    /**
     * The order
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The paymentRecordId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $paymentRecordId = null;
    /**
     * The billingRecordList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BillingRecordList|null
     */
    protected ?\StructType\BillingRecordList $billingRecordList = null;
    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The paymentAdditionalList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PaymentAdditionalList|null
     */
    protected ?\StructType\PaymentAdditionalList $paymentAdditionalList = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The numberOfAttempt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $numberOfAttempt = null;
    /**
     * The wallet
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Wallet|null
     */
    protected ?\StructType\Wallet $wallet = null;
    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ContractNumberWalletList|null
     */
    protected ?\StructType\ContractNumberWalletList $contractNumberWalletList = null;
    /**
     * The bankAccountData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\BankAccountData|null
     */
    protected ?\StructType\BankAccountData $bankAccountData = null;
    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SubMerchant|null
     */
    protected ?\StructType\SubMerchant $subMerchant = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
    /**
     * The linkedTransactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkedTransactionId = null;
    /**
     * The travelFileNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $travelFileNumber = null;
    /**
     * Constructor method for getWebPaymentDetailsResponse
     * @uses GetWebPaymentDetailsResponse::setResult()
     * @uses GetWebPaymentDetailsResponse::setTransaction()
     * @uses GetWebPaymentDetailsResponse::setPayment()
     * @uses GetWebPaymentDetailsResponse::setAuthorization()
     * @uses GetWebPaymentDetailsResponse::setCard()
     * @uses GetWebPaymentDetailsResponse::setExtendedCard()
     * @uses GetWebPaymentDetailsResponse::setOrder()
     * @uses GetWebPaymentDetailsResponse::setContractNumber()
     * @uses GetWebPaymentDetailsResponse::setPrivateDataList()
     * @uses GetWebPaymentDetailsResponse::setPaymentRecordId()
     * @uses GetWebPaymentDetailsResponse::setBillingRecordList()
     * @uses GetWebPaymentDetailsResponse::setAuthentication3DSecure()
     * @uses GetWebPaymentDetailsResponse::setPaymentAdditionalList()
     * @uses GetWebPaymentDetailsResponse::setMedia()
     * @uses GetWebPaymentDetailsResponse::setNumberOfAttempt()
     * @uses GetWebPaymentDetailsResponse::setWallet()
     * @uses GetWebPaymentDetailsResponse::setContractNumberWalletList()
     * @uses GetWebPaymentDetailsResponse::setBankAccountData()
     * @uses GetWebPaymentDetailsResponse::setSubMerchant()
     * @uses GetWebPaymentDetailsResponse::setBuyer()
     * @uses GetWebPaymentDetailsResponse::setLinkedTransactionId()
     * @uses GetWebPaymentDetailsResponse::setTravelFileNumber()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\Payment $payment
     * @param \StructType\Authorization $authorization
     * @param \StructType\CardOut $card
     * @param \StructType\ExtendedCardType $extendedCard
     * @param \StructType\Order $order
     * @param string $contractNumber
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $paymentRecordId
     * @param \StructType\BillingRecordList $billingRecordList
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param \StructType\PaymentAdditionalList $paymentAdditionalList
     * @param string $media
     * @param string $numberOfAttempt
     * @param \StructType\Wallet $wallet
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @param \StructType\BankAccountData $bankAccountData
     * @param \StructType\SubMerchant $subMerchant
     * @param \StructType\Buyer $buyer
     * @param string $linkedTransactionId
     * @param string $travelFileNumber
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\Payment $payment = null, ?\StructType\Authorization $authorization = null, ?\StructType\CardOut $card = null, ?\StructType\ExtendedCardType $extendedCard = null, ?\StructType\Order $order = null, ?string $contractNumber = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $paymentRecordId = null, ?\StructType\BillingRecordList $billingRecordList = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?\StructType\PaymentAdditionalList $paymentAdditionalList = null, ?string $media = null, ?string $numberOfAttempt = null, ?\StructType\Wallet $wallet = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null, ?\StructType\BankAccountData $bankAccountData = null, ?\StructType\SubMerchant $subMerchant = null, ?\StructType\Buyer $buyer = null, ?string $linkedTransactionId = null, ?string $travelFileNumber = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setPayment($payment)
            ->setAuthorization($authorization)
            ->setCard($card)
            ->setExtendedCard($extendedCard)
            ->setOrder($order)
            ->setContractNumber($contractNumber)
            ->setPrivateDataList($privateDataList)
            ->setPaymentRecordId($paymentRecordId)
            ->setBillingRecordList($billingRecordList)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setPaymentAdditionalList($paymentAdditionalList)
            ->setMedia($media)
            ->setNumberOfAttempt($numberOfAttempt)
            ->setWallet($wallet)
            ->setContractNumberWalletList($contractNumberWalletList)
            ->setBankAccountData($bankAccountData)
            ->setSubMerchant($subMerchant)
            ->setBuyer($buyer)
            ->setLinkedTransactionId($linkedTransactionId)
            ->setTravelFileNumber($travelFileNumber);
    }
    /**
     * Get result value
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction(): ?\StructType\Transaction
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;
        
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
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get authorization value
     * @return \StructType\Authorization|null
     */
    public function getAuthorization(): ?\StructType\Authorization
    {
        return $this->authorization;
    }
    /**
     * Set authorization value
     * @param \StructType\Authorization $authorization
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        $this->authorization = $authorization;
        
        return $this;
    }
    /**
     * Get card value
     * @return \StructType\CardOut|null
     */
    public function getCard(): ?\StructType\CardOut
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param \StructType\CardOut $card
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setCard(?\StructType\CardOut $card = null): self
    {
        $this->card = $card;
        
        return $this;
    }
    /**
     * Get extendedCard value
     * @return \StructType\ExtendedCardType|null
     */
    public function getExtendedCard(): ?\StructType\ExtendedCardType
    {
        return $this->extendedCard;
    }
    /**
     * Set extendedCard value
     * @param \StructType\ExtendedCardType $extendedCard
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
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
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
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
     * @return \StructType\GetWebPaymentDetailsResponse
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
     * Get privateDataList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList ?? null;
    }
    /**
     * Set privateDataList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        if (is_null($privateDataList) || (is_array($privateDataList) && empty($privateDataList))) {
            unset($this->privateDataList);
        } else {
            $this->privateDataList = $privateDataList;
        }
        
        return $this;
    }
    /**
     * Get paymentRecordId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaymentRecordId(): ?string
    {
        return $this->paymentRecordId ?? null;
    }
    /**
     * Set paymentRecordId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paymentRecordId
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setPaymentRecordId(?string $paymentRecordId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRecordId) && !is_string($paymentRecordId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRecordId, true), gettype($paymentRecordId)), __LINE__);
        }
        if (is_null($paymentRecordId) || (is_array($paymentRecordId) && empty($paymentRecordId))) {
            unset($this->paymentRecordId);
        } else {
            $this->paymentRecordId = $paymentRecordId;
        }
        
        return $this;
    }
    /**
     * Get billingRecordList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BillingRecordList|null
     */
    public function getBillingRecordList(): ?\StructType\BillingRecordList
    {
        return $this->billingRecordList ?? null;
    }
    /**
     * Set billingRecordList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\BillingRecordList $billingRecordList
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setBillingRecordList(?\StructType\BillingRecordList $billingRecordList = null): self
    {
        if (is_null($billingRecordList) || (is_array($billingRecordList) && empty($billingRecordList))) {
            unset($this->billingRecordList);
        } else {
            $this->billingRecordList = $billingRecordList;
        }
        
        return $this;
    }
    /**
     * Get authentication3DSecure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?\StructType\Authentication3DSecure
    {
        return $this->authentication3DSecure ?? null;
    }
    /**
     * Set authentication3DSecure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
    {
        if (is_null($authentication3DSecure) || (is_array($authentication3DSecure) && empty($authentication3DSecure))) {
            unset($this->authentication3DSecure);
        } else {
            $this->authentication3DSecure = $authentication3DSecure;
        }
        
        return $this;
    }
    /**
     * Get paymentAdditionalList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PaymentAdditionalList|null
     */
    public function getPaymentAdditionalList(): ?\StructType\PaymentAdditionalList
    {
        return $this->paymentAdditionalList ?? null;
    }
    /**
     * Set paymentAdditionalList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PaymentAdditionalList $paymentAdditionalList
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setPaymentAdditionalList(?\StructType\PaymentAdditionalList $paymentAdditionalList = null): self
    {
        if (is_null($paymentAdditionalList) || (is_array($paymentAdditionalList) && empty($paymentAdditionalList))) {
            unset($this->paymentAdditionalList);
        } else {
            $this->paymentAdditionalList = $paymentAdditionalList;
        }
        
        return $this;
    }
    /**
     * Get media value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media ?? null;
    }
    /**
     * Set media value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $media
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        if (is_null($media) || (is_array($media) && empty($media))) {
            unset($this->media);
        } else {
            $this->media = $media;
        }
        
        return $this;
    }
    /**
     * Get numberOfAttempt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumberOfAttempt(): ?string
    {
        return $this->numberOfAttempt ?? null;
    }
    /**
     * Set numberOfAttempt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $numberOfAttempt
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setNumberOfAttempt(?string $numberOfAttempt = null): self
    {
        // validation for constraint: string
        if (!is_null($numberOfAttempt) && !is_string($numberOfAttempt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberOfAttempt, true), gettype($numberOfAttempt)), __LINE__);
        }
        if (is_null($numberOfAttempt) || (is_array($numberOfAttempt) && empty($numberOfAttempt))) {
            unset($this->numberOfAttempt);
        } else {
            $this->numberOfAttempt = $numberOfAttempt;
        }
        
        return $this;
    }
    /**
     * Get wallet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Wallet|null
     */
    public function getWallet(): ?\StructType\Wallet
    {
        return $this->wallet ?? null;
    }
    /**
     * Set wallet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Wallet $wallet
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setWallet(?\StructType\Wallet $wallet = null): self
    {
        if (is_null($wallet) || (is_array($wallet) && empty($wallet))) {
            unset($this->wallet);
        } else {
            $this->wallet = $wallet;
        }
        
        return $this;
    }
    /**
     * Get contractNumberWalletList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?\StructType\ContractNumberWalletList
    {
        return $this->contractNumberWalletList ?? null;
    }
    /**
     * Set contractNumberWalletList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setContractNumberWalletList(?\StructType\ContractNumberWalletList $contractNumberWalletList = null): self
    {
        if (is_null($contractNumberWalletList) || (is_array($contractNumberWalletList) && empty($contractNumberWalletList))) {
            unset($this->contractNumberWalletList);
        } else {
            $this->contractNumberWalletList = $contractNumberWalletList;
        }
        
        return $this;
    }
    /**
     * Get bankAccountData value
     * @return \StructType\BankAccountData|null
     */
    public function getBankAccountData(): ?\StructType\BankAccountData
    {
        return $this->bankAccountData;
    }
    /**
     * Set bankAccountData value
     * @param \StructType\BankAccountData $bankAccountData
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setBankAccountData(?\StructType\BankAccountData $bankAccountData = null): self
    {
        $this->bankAccountData = $bankAccountData;
        
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
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;
        
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
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;
        
        return $this;
    }
    /**
     * Get linkedTransactionId value
     * @return string|null
     */
    public function getLinkedTransactionId(): ?string
    {
        return $this->linkedTransactionId;
    }
    /**
     * Set linkedTransactionId value
     * @param string $linkedTransactionId
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setLinkedTransactionId(?string $linkedTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedTransactionId) && !is_string($linkedTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedTransactionId, true), gettype($linkedTransactionId)), __LINE__);
        }
        $this->linkedTransactionId = $linkedTransactionId;
        
        return $this;
    }
    /**
     * Get travelFileNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTravelFileNumber(): ?string
    {
        return $this->travelFileNumber ?? null;
    }
    /**
     * Set travelFileNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $travelFileNumber
     * @return \StructType\GetWebPaymentDetailsResponse
     */
    public function setTravelFileNumber(?string $travelFileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFileNumber) && !is_string($travelFileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFileNumber, true), gettype($travelFileNumber)), __LINE__);
        }
        if (is_null($travelFileNumber) || (is_array($travelFileNumber) && empty($travelFileNumber))) {
            unset($this->travelFileNumber);
        } else {
            $this->travelFileNumber = $travelFileNumber;
        }
        
        return $this;
    }
}
