<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doImmediateWalletPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doImmediateWalletPayment method
 * @subpackage Structs
 */
class DoImmediateWalletPaymentRequest extends AbstractStructBase
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
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $walletId = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

    /**
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;

    /**
     * The cvx
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cvx = null;

    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Recurring|null
     */
    protected ?Recurring $recurring = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var SubMerchant|null
     */
    protected ?SubMerchant $subMerchant = null;

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
     * Constructor method for doImmediateWalletPaymentRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param Order|null $order
     * @param string|null $walletId
     * @param Buyer|null $buyer
     * @param string|null $cardInd
     * @param string|null $cvx
     * @param Recurring|null $recurring
     * @param PrivateDataList|null $privateDataList
     * @param string|null $media
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param SubMerchant|null $subMerchant
     * @param string|null $linkedTransactionId
     * @param ThreeDSInfo|null $threeDSInfo
     * @param string|null $travelFileNumber
     * @uses DoImmediateWalletPaymentRequest::setVersion()
     * @uses DoImmediateWalletPaymentRequest::setPayment()
     * @uses DoImmediateWalletPaymentRequest::setOrder()
     * @uses DoImmediateWalletPaymentRequest::setWalletId()
     * @uses DoImmediateWalletPaymentRequest::setBuyer()
     * @uses DoImmediateWalletPaymentRequest::setCardInd()
     * @uses DoImmediateWalletPaymentRequest::setCvx()
     * @uses DoImmediateWalletPaymentRequest::setRecurring()
     * @uses DoImmediateWalletPaymentRequest::setPrivateDataList()
     * @uses DoImmediateWalletPaymentRequest::setMedia()
     * @uses DoImmediateWalletPaymentRequest::setAuthentication3DSecure()
     * @uses DoImmediateWalletPaymentRequest::setSubMerchant()
     * @uses DoImmediateWalletPaymentRequest::setLinkedTransactionId()
     * @uses DoImmediateWalletPaymentRequest::setThreeDSInfo()
     * @uses DoImmediateWalletPaymentRequest::setTravelFileNumber()
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?Order $order = null, ?string $walletId = null, ?Buyer $buyer = null, ?string $cardInd = null, ?string $cvx = null, ?Recurring $recurring = null, ?PrivateDataList $privateDataList = null, ?string $media = null, ?Authentication3DSecure $authentication3DSecure = null, ?SubMerchant $subMerchant = null, ?string $linkedTransactionId = null, ?ThreeDSInfo $threeDSInfo = null, ?string $travelFileNumber = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setOrder($order)
            ->setWalletId($walletId)
            ->setBuyer($buyer)
            ->setCardInd($cardInd)
            ->setCvx($cvx)
            ->setRecurring($recurring)
            ->setPrivateDataList($privateDataList)
            ->setMedia($media)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setSubMerchant($subMerchant)
            ->setLinkedTransactionId($linkedTransactionId)
            ->setThreeDSInfo($threeDSInfo)
            ->setTravelFileNumber($travelFileNumber);
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
     * @return DoImmediateWalletPaymentRequest
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
     * @return DoImmediateWalletPaymentRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

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
     * @return DoImmediateWalletPaymentRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

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
     * @return DoImmediateWalletPaymentRequest
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
     * @return DoImmediateWalletPaymentRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return DoImmediateWalletPaymentRequest
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
     * Get cvx value
     * @return string|null
     */
    public function getCvx(): ?string
    {
        return $this->cvx;
    }

    /**
     * Set cvx value
     * @param string|null $cvx
     * @return DoImmediateWalletPaymentRequest
     */
    public function setCvx(?string $cvx = null): self
    {
        // validation for constraint: string
        if (!is_null($cvx) && !is_string($cvx)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvx, true), gettype($cvx)), __LINE__);
        }
        $this->cvx = $cvx;

        return $this;
    }

    /**
     * Get recurring value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Recurring|null
     */
    public function getRecurring(): ?Recurring
    {
        return $this->recurring ?? null;
    }

    /**
     * Set recurring value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Recurring|null $recurring
     * @return DoImmediateWalletPaymentRequest
     */
    public function setRecurring(?Recurring $recurring = null): self
    {
        if (is_null($recurring)) {
            unset($this->recurring);
        } else {
            $this->recurring = $recurring;
        }

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
     * @return DoImmediateWalletPaymentRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

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
     * @return DoImmediateWalletPaymentRequest
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
     * @return DoImmediateWalletPaymentRequest
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
    {
        $this->authentication3DSecure = $authentication3DSecure;

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
     * @return DoImmediateWalletPaymentRequest
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

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
     * @return DoImmediateWalletPaymentRequest
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
     * @return DoImmediateWalletPaymentRequest
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
     * @return DoImmediateWalletPaymentRequest
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
