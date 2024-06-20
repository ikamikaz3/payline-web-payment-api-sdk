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
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The bankAccountData
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var BankAccountData|null
     */
    protected ?BankAccountData $bankAccountData = null;

    /**
     * The card
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Card|null
     */
    protected ?Card $card = null;

    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Order|null
     */
    protected ?Order $order = null;

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
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

    /**
     * The owner
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Owner|null
     */
    protected ?Owner $owner = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

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
     * @var SubMerchant|null
     */
    protected ?SubMerchant $subMerchant = null;

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
     * @var ThreeDSInfo|null
     */
    protected ?ThreeDSInfo $threeDSInfo = null;

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
     * @var Recurring|null
     */
    protected ?Recurring $recurring = null;

    /**
     * Constructor method for doAuthorizationRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param BankAccountData|null $bankAccountData
     * @param Card|null $card
     * @param Order|null $order
     * @param string|null $transient
     * @param Buyer|null $buyer
     * @param Owner|null $owner
     * @param PrivateDataList|null $privateDataList
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param string|null $media
     * @param SubMerchant|null $subMerchant
     * @param string|null $asynchronousRetryTimeout
     * @param string|null $linkedTransactionId
     * @param ThreeDSInfo|null $threeDSInfo
     * @param string|null $travelFileNumber
     * @param Recurring|null $recurring
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
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?BankAccountData $bankAccountData = null, ?Card $card = null, ?Order $order = null, ?string $transient = null, ?Buyer $buyer = null, ?Owner $owner = null, ?PrivateDataList $privateDataList = null, ?Authentication3DSecure $authentication3DSecure = null, ?string $media = null, ?SubMerchant $subMerchant = null, ?string $asynchronousRetryTimeout = null, ?string $linkedTransactionId = null, ?ThreeDSInfo $threeDSInfo = null, ?string $travelFileNumber = null, ?Recurring $recurring = null)
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
     * @param string|null $version
     * @return DoAuthorizationRequest
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
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    /**
     * Set payment value
     * @param Payment|null $payment
     * @return DoAuthorizationRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

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
     * @return DoAuthorizationRequest
     */
    public function setBankAccountData(?BankAccountData $bankAccountData = null): self
    {
        $this->bankAccountData = $bankAccountData;

        return $this;
    }

    /**
     * Get card value
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param Card|null $card
     * @return DoAuthorizationRequest
     */
    public function setCard(?Card $card = null): self
    {
        $this->card = $card;

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
     * @return DoAuthorizationRequest
     */
    public function setOrder(?Order $order = null): self
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
     * @param string|null $transient
     * @return DoAuthorizationRequest
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
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    /**
     * Set buyer value
     * @param Buyer|null $buyer
     * @return DoAuthorizationRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return DoAuthorizationRequest
     */
    public function setOwner(?Owner $owner = null): self
    {
        $this->owner = $owner;

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
     * @return DoAuthorizationRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }

    /**
     * Get authentication3DSecure value
     * @return Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }

    /**
     * Set authentication3DSecure value
     * @param Authentication3DSecure|null $authentication3DSecure
     * @return DoAuthorizationRequest
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
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
     * @param string|null $media
     * @return DoAuthorizationRequest
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
     * @return SubMerchant|null
     */
    public function getSubMerchant(): ?SubMerchant
    {
        return $this->subMerchant;
    }

    /**
     * Set subMerchant value
     * @param SubMerchant|null $subMerchant
     * @return DoAuthorizationRequest
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
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
     * @param string|null $asynchronousRetryTimeout
     * @return DoAuthorizationRequest
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
     * @param string|null $linkedTransactionId
     * @return DoAuthorizationRequest
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
     * @return ThreeDSInfo|null
     */
    public function getThreeDSInfo(): ?ThreeDSInfo
    {
        return $this->threeDSInfo;
    }

    /**
     * Set threeDSInfo value
     * @param ThreeDSInfo|null $threeDSInfo
     * @return DoAuthorizationRequest
     */
    public function setThreeDSInfo(?ThreeDSInfo $threeDSInfo = null): self
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
     * @param string|null $travelFileNumber
     * @return DoAuthorizationRequest
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

    /**
     * Get recurring value
     * @return Recurring|null
     */
    public function getRecurring(): ?Recurring
    {
        return $this->recurring;
    }

    /**
     * Set recurring value
     * @param Recurring|null $recurring
     * @return DoAuthorizationRequest
     */
    public function setRecurring(?Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

        return $this;
    }
}
