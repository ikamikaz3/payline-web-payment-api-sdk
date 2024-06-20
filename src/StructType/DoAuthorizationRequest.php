<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doAuthorizationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doAuthorization method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoAuthorizationRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The bankAccountData
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\BankAccountData|null
     */
    protected ?\StructType\BankAccountData $bankAccountData = null;
    /**
     * The card
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $card = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The transient
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transient = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Owner|null
     */
    protected ?\StructType\Owner $owner = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SubMerchant|null
     */
    protected ?\StructType\SubMerchant $subMerchant = null;
    /**
     * The asynchronousRetryTimeout
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $asynchronousRetryTimeout = null;
    /**
     * The linkedTransactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkedTransactionId = null;
    /**
     * The threeDSInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ThreeDSInfo|null
     */
    protected ?\StructType\ThreeDSInfo $threeDSInfo = null;
    /**
     * The travelFileNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $travelFileNumber = null;
    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Recurring|null
     */
    protected ?\StructType\Recurring $recurring = null;
    /**
     * Constructor method for doAuthorizationRequest
     * @uses DoAuthorizationRequest::setVersion()
     * @uses DoAuthorizationRequest::setPayment()
     * @uses DoAuthorizationRequest::setBankAccountData()
     * @uses DoAuthorizationRequest::setCard()
     * @uses DoAuthorizationRequest::setOrder()
     * @uses DoAuthorizationRequest::setTransient()
     * @uses DoAuthorizationRequest::setBuyer()
     * @uses DoAuthorizationRequest::setOwner()
     * @uses DoAuthorizationRequest::setPrivateDataList()
     * @uses DoAuthorizationRequest::setAuthentication3DSecure()
     * @uses DoAuthorizationRequest::setMedia()
     * @uses DoAuthorizationRequest::setSubMerchant()
     * @uses DoAuthorizationRequest::setAsynchronousRetryTimeout()
     * @uses DoAuthorizationRequest::setLinkedTransactionId()
     * @uses DoAuthorizationRequest::setThreeDSInfo()
     * @uses DoAuthorizationRequest::setTravelFileNumber()
     * @uses DoAuthorizationRequest::setRecurring()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param \StructType\BankAccountData $bankAccountData
     * @param \StructType\Card $card
     * @param \StructType\Order $order
     * @param string $transient
     * @param \StructType\Buyer $buyer
     * @param \StructType\Owner $owner
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $media
     * @param \StructType\SubMerchant $subMerchant
     * @param string $asynchronousRetryTimeout
     * @param string $linkedTransactionId
     * @param \StructType\ThreeDSInfo $threeDSInfo
     * @param string $travelFileNumber
     * @param \StructType\Recurring $recurring
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?\StructType\BankAccountData $bankAccountData = null, ?\StructType\Card $card = null, ?\StructType\Order $order = null, ?string $transient = null, ?\StructType\Buyer $buyer = null, ?\StructType\Owner $owner = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $media = null, ?\StructType\SubMerchant $subMerchant = null, ?string $asynchronousRetryTimeout = null, ?string $linkedTransactionId = null, ?\StructType\ThreeDSInfo $threeDSInfo = null, ?string $travelFileNumber = null, ?\StructType\Recurring $recurring = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setBankAccountData($bankAccountData)
            ->setCard($card)
            ->setOrder($order)
            ->setTransient($transient)
            ->setBuyer($buyer)
            ->setOwner($owner)
            ->setPrivateDataList($privateDataList)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setMedia($media)
            ->setSubMerchant($subMerchant)
            ->setAsynchronousRetryTimeout($asynchronousRetryTimeout)
            ->setLinkedTransactionId($linkedTransactionId)
            ->setThreeDSInfo($threeDSInfo)
            ->setTravelFileNumber($travelFileNumber)
            ->setRecurring($recurring);
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
     * @return \StructType\DoAuthorizationRequest
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setBankAccountData(?\StructType\BankAccountData $bankAccountData = null): self
    {
        $this->bankAccountData = $bankAccountData;
        
        return $this;
    }
    /**
     * Get card value
     * @return \StructType\Card|null
     */
    public function getCard(): ?\StructType\Card
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param \StructType\Card $card
     * @return \StructType\DoAuthorizationRequest
     */
    public function setCard(?\StructType\Card $card = null): self
    {
        $this->card = $card;
        
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
        return $this;
    }
    /**
     * Get transient value
     * @return string|null
     */
    public function getTransient(): ?string
    {
        return $this->transient;
    }
    /**
     * Set transient value
     * @param string $transient
     * @return \StructType\DoAuthorizationRequest
     */
    public function setTransient(?string $transient = null): self
    {
        // validation for constraint: string
        if (!is_null($transient) && !is_string($transient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transient, true), gettype($transient)), __LINE__);
        }
        $this->transient = $transient;
        
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;
        
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setOwner(?\StructType\Owner $owner = null): self
    {
        $this->owner = $owner;
        
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get authentication3DSecure value
     * @return \StructType\Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?\StructType\Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }
    /**
     * Set authentication3DSecure value
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @return \StructType\DoAuthorizationRequest
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
    {
        $this->authentication3DSecure = $authentication3DSecure;
        
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
     * @return \StructType\DoAuthorizationRequest
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;
        
        return $this;
    }
    /**
     * Get asynchronousRetryTimeout value
     * @return string|null
     */
    public function getAsynchronousRetryTimeout(): ?string
    {
        return $this->asynchronousRetryTimeout;
    }
    /**
     * Set asynchronousRetryTimeout value
     * @param string $asynchronousRetryTimeout
     * @return \StructType\DoAuthorizationRequest
     */
    public function setAsynchronousRetryTimeout(?string $asynchronousRetryTimeout = null): self
    {
        // validation for constraint: string
        if (!is_null($asynchronousRetryTimeout) && !is_string($asynchronousRetryTimeout)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asynchronousRetryTimeout, true), gettype($asynchronousRetryTimeout)), __LINE__);
        }
        $this->asynchronousRetryTimeout = $asynchronousRetryTimeout;
        
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
     * @return \StructType\DoAuthorizationRequest
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
     * @return \StructType\DoAuthorizationRequest
     */
    public function setThreeDSInfo(?\StructType\ThreeDSInfo $threeDSInfo = null): self
    {
        $this->threeDSInfo = $threeDSInfo;
        
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
     * @return \StructType\DoAuthorizationRequest
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
    /**
     * Get recurring value
     * @return \StructType\Recurring|null
     */
    public function getRecurring(): ?\StructType\Recurring
    {
        return $this->recurring;
    }
    /**
     * Set recurring value
     * @param \StructType\Recurring $recurring
     * @return \StructType\DoAuthorizationRequest
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;
        
        return $this;
    }
}
