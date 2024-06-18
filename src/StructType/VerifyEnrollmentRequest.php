<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyEnrollmentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the verifyEnrollment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyEnrollmentRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The card
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $card = null;
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
     * The transient
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transient = null;
    /**
     * The mdFieldValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mdFieldValue = null;
    /**
     * The userAgent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $userAgent = null;
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletId = null;
    /**
     * The walletCardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $walletCardInd = null;
    /**
     * The generateVirtualCvx
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $generateVirtualCvx = null;
    /**
     * The merchantName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantName = null;
    /**
     * The merchantURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantURL = null;
    /**
     * The merchantCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantCountryCode = null;
    /**
     * The returnURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $returnURL = null;
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
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SubMerchant|null
     */
    protected ?\StructType\SubMerchant $subMerchant = null;
    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Recurring|null
     */
    protected ?\StructType\Recurring $recurring = null;
    /**
     * The threeDSInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ThreeDSInfo|null
     */
    protected ?\StructType\ThreeDSInfo $threeDSInfo = null;
    /**
     * The merchantScore
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantScore = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * Constructor method for verifyEnrollmentRequest
     * @uses VerifyEnrollmentRequest::setVersion()
     * @uses VerifyEnrollmentRequest::setCard()
     * @uses VerifyEnrollmentRequest::setPayment()
     * @uses VerifyEnrollmentRequest::setOrderRef()
     * @uses VerifyEnrollmentRequest::setTransient()
     * @uses VerifyEnrollmentRequest::setMdFieldValue()
     * @uses VerifyEnrollmentRequest::setUserAgent()
     * @uses VerifyEnrollmentRequest::setWalletId()
     * @uses VerifyEnrollmentRequest::setWalletCardInd()
     * @uses VerifyEnrollmentRequest::setGenerateVirtualCvx()
     * @uses VerifyEnrollmentRequest::setMerchantName()
     * @uses VerifyEnrollmentRequest::setMerchantURL()
     * @uses VerifyEnrollmentRequest::setMerchantCountryCode()
     * @uses VerifyEnrollmentRequest::setReturnURL()
     * @uses VerifyEnrollmentRequest::setOrder()
     * @uses VerifyEnrollmentRequest::setBuyer()
     * @uses VerifyEnrollmentRequest::setSubMerchant()
     * @uses VerifyEnrollmentRequest::setRecurring()
     * @uses VerifyEnrollmentRequest::setThreeDSInfo()
     * @uses VerifyEnrollmentRequest::setMerchantScore()
     * @uses VerifyEnrollmentRequest::setPrivateDataList()
     * @param string $version
     * @param \StructType\Card $card
     * @param \StructType\Payment $payment
     * @param string $orderRef
     * @param string $transient
     * @param string $mdFieldValue
     * @param string $userAgent
     * @param string $walletId
     * @param string $walletCardInd
     * @param string $generateVirtualCvx
     * @param string $merchantName
     * @param string $merchantURL
     * @param string $merchantCountryCode
     * @param string $returnURL
     * @param \StructType\Order $order
     * @param \StructType\Buyer $buyer
     * @param \StructType\SubMerchant $subMerchant
     * @param \StructType\Recurring $recurring
     * @param \StructType\ThreeDSInfo $threeDSInfo
     * @param string $merchantScore
     * @param \StructType\PrivateDataList $privateDataList
     */
    public function __construct(?string $version = null, ?\StructType\Card $card = null, ?\StructType\Payment $payment = null, ?string $orderRef = null, ?string $transient = null, ?string $mdFieldValue = null, ?string $userAgent = null, ?string $walletId = null, ?string $walletCardInd = null, ?string $generateVirtualCvx = null, ?string $merchantName = null, ?string $merchantURL = null, ?string $merchantCountryCode = null, ?string $returnURL = null, ?\StructType\Order $order = null, ?\StructType\Buyer $buyer = null, ?\StructType\SubMerchant $subMerchant = null, ?\StructType\Recurring $recurring = null, ?\StructType\ThreeDSInfo $threeDSInfo = null, ?string $merchantScore = null, ?\StructType\PrivateDataList $privateDataList = null)
    {
        $this
            ->setVersion($version)
            ->setCard($card)
            ->setPayment($payment)
            ->setOrderRef($orderRef)
            ->setTransient($transient)
            ->setMdFieldValue($mdFieldValue)
            ->setUserAgent($userAgent)
            ->setWalletId($walletId)
            ->setWalletCardInd($walletCardInd)
            ->setGenerateVirtualCvx($generateVirtualCvx)
            ->setMerchantName($merchantName)
            ->setMerchantURL($merchantURL)
            ->setMerchantCountryCode($merchantCountryCode)
            ->setReturnURL($returnURL)
            ->setOrder($order)
            ->setBuyer($buyer)
            ->setSubMerchant($subMerchant)
            ->setRecurring($recurring)
            ->setThreeDSInfo($threeDSInfo)
            ->setMerchantScore($merchantScore)
            ->setPrivateDataList($privateDataList);
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
     * @return \StructType\VerifyEnrollmentRequest
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
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setCard(?\StructType\Card $card = null): self
    {
        $this->card = $card;
        
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
     * @return \StructType\VerifyEnrollmentRequest
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
     * @return \StructType\VerifyEnrollmentRequest
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
     * @return \StructType\VerifyEnrollmentRequest
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
     * Get mdFieldValue value
     * @return string|null
     */
    public function getMdFieldValue(): ?string
    {
        return $this->mdFieldValue;
    }
    /**
     * Set mdFieldValue value
     * @param string $mdFieldValue
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setMdFieldValue(?string $mdFieldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($mdFieldValue) && !is_string($mdFieldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdFieldValue, true), gettype($mdFieldValue)), __LINE__);
        }
        $this->mdFieldValue = $mdFieldValue;
        
        return $this;
    }
    /**
     * Get userAgent value
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }
    /**
     * Set userAgent value
     * @param string $userAgent
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setUserAgent(?string $userAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($userAgent) && !is_string($userAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userAgent, true), gettype($userAgent)), __LINE__);
        }
        $this->userAgent = $userAgent;
        
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
     * @return \StructType\VerifyEnrollmentRequest
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
     * Get walletCardInd value
     * @return string|null
     */
    public function getWalletCardInd(): ?string
    {
        return $this->walletCardInd;
    }
    /**
     * Set walletCardInd value
     * @param string $walletCardInd
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setWalletCardInd(?string $walletCardInd = null): self
    {
        // validation for constraint: string
        if (!is_null($walletCardInd) && !is_string($walletCardInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletCardInd, true), gettype($walletCardInd)), __LINE__);
        }
        $this->walletCardInd = $walletCardInd;
        
        return $this;
    }
    /**
     * Get generateVirtualCvx value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGenerateVirtualCvx(): ?string
    {
        return $this->generateVirtualCvx ?? null;
    }
    /**
     * Set generateVirtualCvx value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $generateVirtualCvx
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setGenerateVirtualCvx(?string $generateVirtualCvx = null): self
    {
        // validation for constraint: string
        if (!is_null($generateVirtualCvx) && !is_string($generateVirtualCvx)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($generateVirtualCvx, true), gettype($generateVirtualCvx)), __LINE__);
        }
        if (is_null($generateVirtualCvx) || (is_array($generateVirtualCvx) && empty($generateVirtualCvx))) {
            unset($this->generateVirtualCvx);
        } else {
            $this->generateVirtualCvx = $generateVirtualCvx;
        }
        
        return $this;
    }
    /**
     * Get merchantName value
     * @return string|null
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }
    /**
     * Set merchantName value
     * @param string $merchantName
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setMerchantName(?string $merchantName = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantName) && !is_string($merchantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantName, true), gettype($merchantName)), __LINE__);
        }
        $this->merchantName = $merchantName;
        
        return $this;
    }
    /**
     * Get merchantURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMerchantURL(): ?string
    {
        return $this->merchantURL ?? null;
    }
    /**
     * Set merchantURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $merchantURL
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setMerchantURL(?string $merchantURL = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantURL) && !is_string($merchantURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantURL, true), gettype($merchantURL)), __LINE__);
        }
        if (is_null($merchantURL) || (is_array($merchantURL) && empty($merchantURL))) {
            unset($this->merchantURL);
        } else {
            $this->merchantURL = $merchantURL;
        }
        
        return $this;
    }
    /**
     * Get merchantCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMerchantCountryCode(): ?string
    {
        return $this->merchantCountryCode ?? null;
    }
    /**
     * Set merchantCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $merchantCountryCode
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setMerchantCountryCode(?string $merchantCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantCountryCode) && !is_string($merchantCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantCountryCode, true), gettype($merchantCountryCode)), __LINE__);
        }
        if (is_null($merchantCountryCode) || (is_array($merchantCountryCode) && empty($merchantCountryCode))) {
            unset($this->merchantCountryCode);
        } else {
            $this->merchantCountryCode = $merchantCountryCode;
        }
        
        return $this;
    }
    /**
     * Get returnURL value
     * @return string|null
     */
    public function getReturnURL(): ?string
    {
        return $this->returnURL;
    }
    /**
     * Set returnURL value
     * @param string $returnURL
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setReturnURL(?string $returnURL = null): self
    {
        // validation for constraint: string
        if (!is_null($returnURL) && !is_string($returnURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnURL, true), gettype($returnURL)), __LINE__);
        }
        $this->returnURL = $returnURL;
        
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
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
        return $this;
    }
    /**
     * Get buyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Buyer|null
     */
    public function getBuyer(): ?\StructType\Buyer
    {
        return $this->buyer ?? null;
    }
    /**
     * Set buyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Buyer $buyer
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        if (is_null($buyer) || (is_array($buyer) && empty($buyer))) {
            unset($this->buyer);
        } else {
            $this->buyer = $buyer;
        }
        
        return $this;
    }
    /**
     * Get subMerchant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SubMerchant|null
     */
    public function getSubMerchant(): ?\StructType\SubMerchant
    {
        return $this->subMerchant ?? null;
    }
    /**
     * Set subMerchant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SubMerchant $subMerchant
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        if (is_null($subMerchant) || (is_array($subMerchant) && empty($subMerchant))) {
            unset($this->subMerchant);
        } else {
            $this->subMerchant = $subMerchant;
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
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;
        
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
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setThreeDSInfo(?\StructType\ThreeDSInfo $threeDSInfo = null): self
    {
        $this->threeDSInfo = $threeDSInfo;
        
        return $this;
    }
    /**
     * Get merchantScore value
     * @return string|null
     */
    public function getMerchantScore(): ?string
    {
        return $this->merchantScore;
    }
    /**
     * Set merchantScore value
     * @param string $merchantScore
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setMerchantScore(?string $merchantScore = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantScore) && !is_string($merchantScore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantScore, true), gettype($merchantScore)), __LINE__);
        }
        $this->merchantScore = $merchantScore;
        
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
     * @return \StructType\VerifyEnrollmentRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
}
