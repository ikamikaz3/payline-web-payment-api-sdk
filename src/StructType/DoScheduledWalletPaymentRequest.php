<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doScheduledWalletPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doScheduledWalletPayment method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoScheduledWalletPaymentRequest extends AbstractStructBase
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
     * The scheduledDate
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $scheduledDate = null;

    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $walletId = null;

    /**
     * The orderRef
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderRef = null;

    /**
     * The orderDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderDate = null;

    /**
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;

    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Recurring|null
     */
    protected ?Recurring $recurring = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

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
     * Constructor method for doScheduledWalletPaymentRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param string|null $scheduledDate
     * @param string|null $walletId
     * @param string|null $orderRef
     * @param string|null $orderDate
     * @param string|null $cardInd
     * @param Order|null $order
     * @param Recurring|null $recurring
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param PrivateDataList|null $privateDataList
     * @param string|null $media
     * @param SubMerchant|null $subMerchant
     * @param string|null $linkedTransactionId
     * @uses DoScheduledWalletPaymentRequest::setVersion()
     * @uses DoScheduledWalletPaymentRequest::setPayment()
     * @uses DoScheduledWalletPaymentRequest::setScheduledDate()
     * @uses DoScheduledWalletPaymentRequest::setWalletId()
     * @uses DoScheduledWalletPaymentRequest::setOrderRef()
     * @uses DoScheduledWalletPaymentRequest::setOrderDate()
     * @uses DoScheduledWalletPaymentRequest::setCardInd()
     * @uses DoScheduledWalletPaymentRequest::setOrder()
     * @uses DoScheduledWalletPaymentRequest::setRecurring()
     * @uses DoScheduledWalletPaymentRequest::setAuthentication3DSecure()
     * @uses DoScheduledWalletPaymentRequest::setPrivateDataList()
     * @uses DoScheduledWalletPaymentRequest::setMedia()
     * @uses DoScheduledWalletPaymentRequest::setSubMerchant()
     * @uses DoScheduledWalletPaymentRequest::setLinkedTransactionId()
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?string $scheduledDate = null, ?string $walletId = null, ?string $orderRef = null, ?string $orderDate = null, ?string $cardInd = null, ?Order $order = null, ?Recurring $recurring = null, ?Authentication3DSecure $authentication3DSecure = null, ?PrivateDataList $privateDataList = null, ?string $media = null, ?SubMerchant $subMerchant = null, ?string $linkedTransactionId = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setScheduledDate($scheduledDate)
            ->setWalletId($walletId)
            ->setOrderRef($orderRef)
            ->setOrderDate($orderDate)
            ->setCardInd($cardInd)
            ->setOrder($order)
            ->setRecurring($recurring)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setPrivateDataList($privateDataList)
            ->setMedia($media)
            ->setSubMerchant($subMerchant)
            ->setLinkedTransactionId($linkedTransactionId);
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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get scheduledDate value
     * @return string|null
     */
    public function getScheduledDate(): ?string
    {
        return $this->scheduledDate;
    }

    /**
     * Set scheduledDate value
     * @param string|null $scheduledDate
     * @return DoScheduledWalletPaymentRequest
     */
    public function setScheduledDate(?string $scheduledDate = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduledDate) && !is_string($scheduledDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledDate, true), gettype($scheduledDate)), __LINE__);
        }
        $this->scheduledDate = $scheduledDate;

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
     * @return DoScheduledWalletPaymentRequest
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
     * Get orderRef value
     * @return string|null
     */
    public function getOrderRef(): ?string
    {
        return $this->orderRef;
    }

    /**
     * Set orderRef value
     * @param string|null $orderRef
     * @return DoScheduledWalletPaymentRequest
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
     * Get orderDate value
     * @return string|null
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    /**
     * Set orderDate value
     * @param string|null $orderDate
     * @return DoScheduledWalletPaymentRequest
     */
    public function setOrderDate(?string $orderDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDate) && !is_string($orderDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDate, true), gettype($orderDate)), __LINE__);
        }
        $this->orderDate = $orderDate;

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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
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
     * @return DoScheduledWalletPaymentRequest
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
}
