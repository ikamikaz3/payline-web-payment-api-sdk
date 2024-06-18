<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTransactionDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the response for the getTransactionDetails method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTransactionDetailsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The card
     * @var \StructType\CardOut|null
     */
    protected ?\StructType\CardOut $card = null;
    /**
     * The extendedCard
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
    /**
     * The customerMedia
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Media|null
     */
    protected ?\StructType\Media $customerMedia = null;
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
     * @var \StructType\PointOfSell|null
     */
    protected ?\StructType\PointOfSell $pointOfSell = null;
    /**
     * The routingRule
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\RoutingRule|null
     */
    protected ?\StructType\RoutingRule $routingRule = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The associatedTransactionsList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\AssociatedTransactionsList|null
     */
    protected ?\StructType\AssociatedTransactionsList $associatedTransactionsList = null;
    /**
     * The statusHistoryList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\StatusHistoryList|null
     */
    protected ?\StructType\StatusHistoryList $statusHistoryList = null;
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
     * @var \StructType\PaymentAdditionalList|null
     */
    protected ?\StructType\PaymentAdditionalList $paymentAdditionalList = null;
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
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
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
     * @param \StructType\Result $result
     * @param \StructType\CardOut $card
     * @param \StructType\ExtendedCardType $extendedCard
     * @param \StructType\Media $customerMedia
     * @param string $contractNumber
     * @param \StructType\PointOfSell $pointOfSell
     * @param \StructType\RoutingRule $routingRule
     * @param \StructType\Transaction $transaction
     * @param \StructType\Payment $payment
     * @param \StructType\Authorization $authorization
     * @param \StructType\Order $order
     * @param \StructType\Buyer $buyer
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\AssociatedTransactionsList $associatedTransactionsList
     * @param \StructType\StatusHistoryList $statusHistoryList
     * @param string $media
     * @param \StructType\PaymentAdditionalList $paymentAdditionalList
     * @param \StructType\BankAccountData $bankAccountData
     * @param \StructType\SubMerchant $subMerchant
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $linkedTransactionId
     * @param string $travelFileNumber
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\CardOut $card = null, ?\StructType\ExtendedCardType $extendedCard = null, ?\StructType\Media $customerMedia = null, ?string $contractNumber = null, ?\StructType\PointOfSell $pointOfSell = null, ?\StructType\RoutingRule $routingRule = null, ?\StructType\Transaction $transaction = null, ?\StructType\Payment $payment = null, ?\StructType\Authorization $authorization = null, ?\StructType\Order $order = null, ?\StructType\Buyer $buyer = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\AssociatedTransactionsList $associatedTransactionsList = null, ?\StructType\StatusHistoryList $statusHistoryList = null, ?string $media = null, ?\StructType\PaymentAdditionalList $paymentAdditionalList = null, ?\StructType\BankAccountData $bankAccountData = null, ?\StructType\SubMerchant $subMerchant = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $linkedTransactionId = null, ?string $travelFileNumber = null)
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
        return $this;
    }
    /**
     * Get customerMedia value
     * @return \StructType\Media|null
     */
    public function getCustomerMedia(): ?\StructType\Media
    {
        return $this->customerMedia;
    }
    /**
     * Set customerMedia value
     * @param \StructType\Media $customerMedia
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setCustomerMedia(?\StructType\Media $customerMedia = null): self
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
     * @param string $contractNumber
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\PointOfSell|null
     */
    public function getPointOfSell(): ?\StructType\PointOfSell
    {
        return $this->pointOfSell;
    }
    /**
     * Set pointOfSell value
     * @param \StructType\PointOfSell $pointOfSell
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setPointOfSell(?\StructType\PointOfSell $pointOfSell = null): self
    {
        $this->pointOfSell = $pointOfSell;
        
        return $this;
    }
    /**
     * Get routingRule value
     * @return \StructType\RoutingRule|null
     */
    public function getRoutingRule(): ?\StructType\RoutingRule
    {
        return $this->routingRule;
    }
    /**
     * Set routingRule value
     * @param \StructType\RoutingRule $routingRule
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setRoutingRule(?\StructType\RoutingRule $routingRule = null): self
    {
        $this->routingRule = $routingRule;
        
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        $this->authorization = $authorization;
        
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
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
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
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;
        
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
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get associatedTransactionsList value
     * @return \StructType\AssociatedTransactionsList|null
     */
    public function getAssociatedTransactionsList(): ?\StructType\AssociatedTransactionsList
    {
        return $this->associatedTransactionsList;
    }
    /**
     * Set associatedTransactionsList value
     * @param \StructType\AssociatedTransactionsList $associatedTransactionsList
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setAssociatedTransactionsList(?\StructType\AssociatedTransactionsList $associatedTransactionsList = null): self
    {
        $this->associatedTransactionsList = $associatedTransactionsList;
        
        return $this;
    }
    /**
     * Get statusHistoryList value
     * @return \StructType\StatusHistoryList|null
     */
    public function getStatusHistoryList(): ?\StructType\StatusHistoryList
    {
        return $this->statusHistoryList;
    }
    /**
     * Set statusHistoryList value
     * @param \StructType\StatusHistoryList $statusHistoryList
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setStatusHistoryList(?\StructType\StatusHistoryList $statusHistoryList = null): self
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
     * @param string $media
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;
        
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
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
     * @return \StructType\GetTransactionDetailsResponse
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
