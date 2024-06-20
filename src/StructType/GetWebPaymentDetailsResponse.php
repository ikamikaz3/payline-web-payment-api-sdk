<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebPaymentDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doWebPayment method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetWebPaymentDetailsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Authorization|null
     */
    protected ?Authorization $authorization = null;

    /**
     * The card
     * @var CardOut|null
     */
    protected ?CardOut $card = null;

    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * The order
     * @var Order|null
     */
    protected ?Order $order = null;

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
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

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
     * @var BillingRecordList|null
     */
    protected ?BillingRecordList $billingRecordList = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

    /**
     * The paymentAdditionalList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var PaymentAdditionalList|null
     */
    protected ?PaymentAdditionalList $paymentAdditionalList = null;

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
     * @var Wallet|null
     */
    protected ?Wallet $wallet = null;

    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var ContractNumberWalletList|null
     */
    protected ?ContractNumberWalletList $contractNumberWalletList = null;

    /**
     * The bankAccountData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var BankAccountData|null
     */
    protected ?BankAccountData $bankAccountData = null;

    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var SubMerchant|null
     */
    protected ?SubMerchant $subMerchant = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

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
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param Payment|null $payment
     * @param Authorization|null $authorization
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @param Order|null $order
     * @param string|null $contractNumber
     * @param PrivateDataList|null $privateDataList
     * @param string|null $paymentRecordId
     * @param BillingRecordList|null $billingRecordList
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param PaymentAdditionalList|null $paymentAdditionalList
     * @param string|null $media
     * @param string|null $numberOfAttempt
     * @param Wallet|null $wallet
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @param BankAccountData|null $bankAccountData
     * @param SubMerchant|null $subMerchant
     * @param Buyer|null $buyer
     * @param string|null $linkedTransactionId
     * @param string|null $travelFileNumber
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
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?Payment $payment = null, ?Authorization $authorization = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null, ?Order $order = null, ?string $contractNumber = null, ?PrivateDataList $privateDataList = null, ?string $paymentRecordId = null, ?BillingRecordList $billingRecordList = null, ?Authentication3DSecure $authentication3DSecure = null, ?PaymentAdditionalList $paymentAdditionalList = null, ?string $media = null, ?string $numberOfAttempt = null, ?Wallet $wallet = null, ?ContractNumberWalletList $contractNumberWalletList = null, ?BankAccountData $bankAccountData = null, ?SubMerchant $subMerchant = null, ?Buyer $buyer = null, ?string $linkedTransactionId = null, ?string $travelFileNumber = null)
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
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return GetWebPaymentDetailsResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get transaction value
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    /**
     * Set transaction value
     * @param Transaction|null $transaction
     * @return GetWebPaymentDetailsResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

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
     * @return GetWebPaymentDetailsResponse
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get authorization value
     * @return Authorization|null
     */
    public function getAuthorization(): ?Authorization
    {
        return $this->authorization;
    }

    /**
     * Set authorization value
     * @param Authorization|null $authorization
     * @return GetWebPaymentDetailsResponse
     */
    public function setAuthorization(?Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

        return $this;
    }

    /**
     * Get card value
     * @return CardOut|null
     */
    public function getCard(): ?CardOut
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param CardOut|null $card
     * @return GetWebPaymentDetailsResponse
     */
    public function setCard(?CardOut $card = null): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get extendedCard value
     * @return ExtendedCardType|null
     */
    public function getExtendedCard(): ?ExtendedCardType
    {
        return $this->extendedCard;
    }

    /**
     * Set extendedCard value
     * @param ExtendedCardType|null $extendedCard
     * @return GetWebPaymentDetailsResponse
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

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
     * @return GetWebPaymentDetailsResponse
     */
    public function setOrder(?Order $order = null): self
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
     * @param string|null $contractNumber
     * @return GetWebPaymentDetailsResponse
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
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList ?? null;
    }

    /**
     * Set privateDataList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param PrivateDataList|null $privateDataList
     * @return GetWebPaymentDetailsResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        if (is_null($privateDataList)) {
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
     * @param string|null $paymentRecordId
     * @return GetWebPaymentDetailsResponse
     */
    public function setPaymentRecordId(?string $paymentRecordId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRecordId) && !is_string($paymentRecordId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRecordId, true), gettype($paymentRecordId)), __LINE__);
        }
        if (is_null($paymentRecordId)) {
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
     * @return BillingRecordList|null
     */
    public function getBillingRecordList(): ?BillingRecordList
    {
        return $this->billingRecordList ?? null;
    }

    /**
     * Set billingRecordList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param BillingRecordList|null $billingRecordList
     * @return GetWebPaymentDetailsResponse
     */
    public function setBillingRecordList(?BillingRecordList $billingRecordList = null): self
    {
        if (is_null($billingRecordList)) {
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
     * @return Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?Authentication3DSecure
    {
        return $this->authentication3DSecure ?? null;
    }

    /**
     * Set authentication3DSecure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Authentication3DSecure|null $authentication3DSecure
     * @return GetWebPaymentDetailsResponse
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
    {
        if (is_null($authentication3DSecure)) {
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
     * @return PaymentAdditionalList|null
     */
    public function getPaymentAdditionalList(): ?PaymentAdditionalList
    {
        return $this->paymentAdditionalList ?? null;
    }

    /**
     * Set paymentAdditionalList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param PaymentAdditionalList|null $paymentAdditionalList
     * @return GetWebPaymentDetailsResponse
     */
    public function setPaymentAdditionalList(?PaymentAdditionalList $paymentAdditionalList = null): self
    {
        if (is_null($paymentAdditionalList)) {
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
     * @param string|null $media
     * @return GetWebPaymentDetailsResponse
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        if (is_null($media)) {
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
     * @param string|null $numberOfAttempt
     * @return GetWebPaymentDetailsResponse
     */
    public function setNumberOfAttempt(?string $numberOfAttempt = null): self
    {
        // validation for constraint: string
        if (!is_null($numberOfAttempt) && !is_string($numberOfAttempt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberOfAttempt, true), gettype($numberOfAttempt)), __LINE__);
        }
        if (is_null($numberOfAttempt)) {
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
     * @return Wallet|null
     */
    public function getWallet(): ?Wallet
    {
        return $this->wallet ?? null;
    }

    /**
     * Set wallet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Wallet|null $wallet
     * @return GetWebPaymentDetailsResponse
     */
    public function setWallet(?Wallet $wallet = null): self
    {
        if (is_null($wallet)) {
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
     * @return ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?ContractNumberWalletList
    {
        return $this->contractNumberWalletList ?? null;
    }

    /**
     * Set contractNumberWalletList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @return GetWebPaymentDetailsResponse
     */
    public function setContractNumberWalletList(?ContractNumberWalletList $contractNumberWalletList = null): self
    {
        if (is_null($contractNumberWalletList)) {
            unset($this->contractNumberWalletList);
        } else {
            $this->contractNumberWalletList = $contractNumberWalletList;
        }

        return $this;
    }

    /**
     * Get bankAccountData value
     * @return BankAccountData|null
     */
    public function getBankAccountData(): ?BankAccountData
    {
        return $this->bankAccountData;
    }

    /**
     * Set bankAccountData value
     * @param BankAccountData|null $bankAccountData
     * @return GetWebPaymentDetailsResponse
     */
    public function setBankAccountData(?BankAccountData $bankAccountData = null): self
    {
        $this->bankAccountData = $bankAccountData;

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
     * @return GetWebPaymentDetailsResponse
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

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
     * @return GetWebPaymentDetailsResponse
     */
    public function setBuyer(?Buyer $buyer = null): self
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
     * @param string|null $linkedTransactionId
     * @return GetWebPaymentDetailsResponse
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
     * @param string|null $travelFileNumber
     * @return GetWebPaymentDetailsResponse
     */
    public function setTravelFileNumber(?string $travelFileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFileNumber) && !is_string($travelFileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFileNumber, true), gettype($travelFileNumber)), __LINE__);
        }
        if (is_null($travelFileNumber)) {
            unset($this->travelFileNumber);
        } else {
            $this->travelFileNumber = $travelFileNumber;
        }

        return $this;
    }
}
