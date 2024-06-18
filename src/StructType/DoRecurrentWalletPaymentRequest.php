<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doRecurrentWalletPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doRecurrentWalletPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoRecurrentWalletPaymentRequest extends AbstractStructBase
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
     * The orderRef
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $orderRef = null;
    /**
     * The orderDate
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $orderDate = null;
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
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Recurring|null
     */
    protected ?\StructType\Recurring $recurring = null;
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
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
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
     * Constructor method for doRecurrentWalletPaymentRequest
     * @uses DoRecurrentWalletPaymentRequest::setVersion()
     * @uses DoRecurrentWalletPaymentRequest::setPayment()
     * @uses DoRecurrentWalletPaymentRequest::setOrderRef()
     * @uses DoRecurrentWalletPaymentRequest::setOrderDate()
     * @uses DoRecurrentWalletPaymentRequest::setScheduledDate()
     * @uses DoRecurrentWalletPaymentRequest::setWalletId()
     * @uses DoRecurrentWalletPaymentRequest::setRecurring()
     * @uses DoRecurrentWalletPaymentRequest::setCardInd()
     * @uses DoRecurrentWalletPaymentRequest::setCvx()
     * @uses DoRecurrentWalletPaymentRequest::setPrivateDataList()
     * @uses DoRecurrentWalletPaymentRequest::setOrder()
     * @uses DoRecurrentWalletPaymentRequest::setMedia()
     * @uses DoRecurrentWalletPaymentRequest::setAuthentication3DSecure()
     * @uses DoRecurrentWalletPaymentRequest::setLinkedTransactionId()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param string $orderRef
     * @param string $orderDate
     * @param string $scheduledDate
     * @param string $walletId
     * @param \StructType\Recurring $recurring
     * @param string $cardInd
     * @param string $cvx
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\Order $order
     * @param string $media
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $linkedTransactionId
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?string $orderRef = null, ?string $orderDate = null, ?string $scheduledDate = null, ?string $walletId = null, ?\StructType\Recurring $recurring = null, ?string $cardInd = null, ?string $cvx = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\Order $order = null, ?string $media = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $linkedTransactionId = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setOrderRef($orderRef)
            ->setOrderDate($orderDate)
            ->setScheduledDate($scheduledDate)
            ->setWalletId($walletId)
            ->setRecurring($recurring)
            ->setCardInd($cardInd)
            ->setCvx($cvx)
            ->setPrivateDataList($privateDataList)
            ->setOrder($order)
            ->setMedia($media)
            ->setAuthentication3DSecure($authentication3DSecure)
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
     * @param string $version
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @param string $orderDate
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * Get scheduledDate value
     * @return string|null
     */
    public function getScheduledDate(): ?string
    {
        return $this->scheduledDate;
    }
    /**
     * Set scheduledDate value
     * @param string $scheduledDate
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @param string $walletId
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;
        
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
     * @param string $cardInd
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @param string $cvx
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
     * @return \StructType\DoRecurrentWalletPaymentRequest
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
