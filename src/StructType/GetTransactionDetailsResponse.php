<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTransactionDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the response for the getTransactionDetails method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetTransactionDetailsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The card
     * @var CardOut|null
     */
    protected ?CardOut $card = null;

    /**
     * The extendedCard
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * The customerMedia
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Media|null
     */
    protected ?Media $customerMedia = null;

    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;

    /**
     * The pointOfSell
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var PointOfSell|null
     */
    protected ?PointOfSell $pointOfSell = null;

    /**
     * The routingRule
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var RoutingRule|null
     */
    protected ?RoutingRule $routingRule = null;

    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authorization|null
     */
    protected ?Authorization $authorization = null;

    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The associatedTransactionsList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var AssociatedTransactionsList|null
     */
    protected ?AssociatedTransactionsList $associatedTransactionsList = null;

    /**
     * The statusHistoryList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var StatusHistoryList|null
     */
    protected ?StatusHistoryList $statusHistoryList = null;

    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;

    /**
     * The paymentAdditionalList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var PaymentAdditionalList|null
     */
    protected ?PaymentAdditionalList $paymentAdditionalList = null;

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
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

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
     * Constructor method for getTransactionDetailsResponse
     * @param Result|null $result
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @param Media|null $customerMedia
     * @param string|null $contractNumber
     * @param PointOfSell|null $pointOfSell
     * @param RoutingRule|null $routingRule
     * @param Transaction|null $transaction
     * @param Payment|null $payment
     * @param Authorization|null $authorization
     * @param Order|null $order
     * @param Buyer|null $buyer
     * @param PrivateDataList|null $privateDataList
     * @param AssociatedTransactionsList|null $associatedTransactionsList
     * @param StatusHistoryList|null $statusHistoryList
     * @param string|null $media
     * @param PaymentAdditionalList|null $paymentAdditionalList
     * @param BankAccountData|null $bankAccountData
     * @param SubMerchant|null $subMerchant
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param string|null $linkedTransactionId
     * @param string|null $travelFileNumber
     * @uses GetTransactionDetailsResponse::setResult()
     * @uses GetTransactionDetailsResponse::setCard()
     * @uses GetTransactionDetailsResponse::setExtendedCard()
     * @uses GetTransactionDetailsResponse::setCustomerMedia()
     * @uses GetTransactionDetailsResponse::setContractNumber()
     * @uses GetTransactionDetailsResponse::setPointOfSell()
     * @uses GetTransactionDetailsResponse::setRoutingRule()
     * @uses GetTransactionDetailsResponse::setTransaction()
     * @uses GetTransactionDetailsResponse::setPayment()
     * @uses GetTransactionDetailsResponse::setAuthorization()
     * @uses GetTransactionDetailsResponse::setOrder()
     * @uses GetTransactionDetailsResponse::setBuyer()
     * @uses GetTransactionDetailsResponse::setPrivateDataList()
     * @uses GetTransactionDetailsResponse::setAssociatedTransactionsList()
     * @uses GetTransactionDetailsResponse::setStatusHistoryList()
     * @uses GetTransactionDetailsResponse::setMedia()
     * @uses GetTransactionDetailsResponse::setPaymentAdditionalList()
     * @uses GetTransactionDetailsResponse::setBankAccountData()
     * @uses GetTransactionDetailsResponse::setSubMerchant()
     * @uses GetTransactionDetailsResponse::setAuthentication3DSecure()
     * @uses GetTransactionDetailsResponse::setLinkedTransactionId()
     * @uses GetTransactionDetailsResponse::setTravelFileNumber()
     */
    public function __construct(?Result $result = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null, ?Media $customerMedia = null, ?string $contractNumber = null, ?PointOfSell $pointOfSell = null, ?RoutingRule $routingRule = null, ?Transaction $transaction = null, ?Payment $payment = null, ?Authorization $authorization = null, ?Order $order = null, ?Buyer $buyer = null, ?PrivateDataList $privateDataList = null, ?AssociatedTransactionsList $associatedTransactionsList = null, ?StatusHistoryList $statusHistoryList = null, ?string $media = null, ?PaymentAdditionalList $paymentAdditionalList = null, ?BankAccountData $bankAccountData = null, ?SubMerchant $subMerchant = null, ?Authentication3DSecure $authentication3DSecure = null, ?string $linkedTransactionId = null, ?string $travelFileNumber = null)
    {
        $this
            ->setResult($result)
            ->setCard($card)
            ->setExtendedCard($extendedCard)
            ->setCustomerMedia($customerMedia)
            ->setContractNumber($contractNumber)
            ->setPointOfSell($pointOfSell)
            ->setRoutingRule($routingRule)
            ->setTransaction($transaction)
            ->setPayment($payment)
            ->setAuthorization($authorization)
            ->setOrder($order)
            ->setBuyer($buyer)
            ->setPrivateDataList($privateDataList)
            ->setAssociatedTransactionsList($associatedTransactionsList)
            ->setStatusHistoryList($statusHistoryList)
            ->setMedia($media)
            ->setPaymentAdditionalList($paymentAdditionalList)
            ->setBankAccountData($bankAccountData)
            ->setSubMerchant($subMerchant)
            ->setAuthentication3DSecure($authentication3DSecure)
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
     * @return GetTransactionDetailsResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

        return $this;
    }

    /**
     * Get customerMedia value
     * @return Media|null
     */
    public function getCustomerMedia(): ?Media
    {
        return $this->customerMedia;
    }

    /**
     * Set customerMedia value
     * @param Media|null $customerMedia
     * @return GetTransactionDetailsResponse
     */
    public function setCustomerMedia(?Media $customerMedia = null): self
    {
        $this->customerMedia = $customerMedia;

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
     * @return GetTransactionDetailsResponse
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
     * Get pointOfSell value
     * @return PointOfSell|null
     */
    public function getPointOfSell(): ?PointOfSell
    {
        return $this->pointOfSell;
    }

    /**
     * Set pointOfSell value
     * @param PointOfSell|null $pointOfSell
     * @return GetTransactionDetailsResponse
     */
    public function setPointOfSell(?PointOfSell $pointOfSell = null): self
    {
        $this->pointOfSell = $pointOfSell;

        return $this;
    }

    /**
     * Get routingRule value
     * @return RoutingRule|null
     */
    public function getRoutingRule(): ?RoutingRule
    {
        return $this->routingRule;
    }

    /**
     * Set routingRule value
     * @param RoutingRule|null $routingRule
     * @return GetTransactionDetailsResponse
     */
    public function setRoutingRule(?RoutingRule $routingRule = null): self
    {
        $this->routingRule = $routingRule;

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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
     */
    public function setAuthorization(?Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
     */
    public function setBuyer(?Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return GetTransactionDetailsResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }

    /**
     * Get associatedTransactionsList value
     * @return AssociatedTransactionsList|null
     */
    public function getAssociatedTransactionsList(): ?AssociatedTransactionsList
    {
        return $this->associatedTransactionsList;
    }

    /**
     * Set associatedTransactionsList value
     * @param AssociatedTransactionsList|null $associatedTransactionsList
     * @return GetTransactionDetailsResponse
     */
    public function setAssociatedTransactionsList(?AssociatedTransactionsList $associatedTransactionsList = null): self
    {
        $this->associatedTransactionsList = $associatedTransactionsList;

        return $this;
    }

    /**
     * Get statusHistoryList value
     * @return StatusHistoryList|null
     */
    public function getStatusHistoryList(): ?StatusHistoryList
    {
        return $this->statusHistoryList;
    }

    /**
     * Set statusHistoryList value
     * @param StatusHistoryList|null $statusHistoryList
     * @return GetTransactionDetailsResponse
     */
    public function setStatusHistoryList(?StatusHistoryList $statusHistoryList = null): self
    {
        $this->statusHistoryList = $statusHistoryList;

        return $this;
    }

    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }

    /**
     * Set media value
     * @param string|null $media
     * @return GetTransactionDetailsResponse
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;

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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
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
     * @return GetTransactionDetailsResponse
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
