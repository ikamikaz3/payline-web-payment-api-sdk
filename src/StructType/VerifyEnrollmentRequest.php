<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyEnrollmentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the verifyEnrollment method
 * @subpackage Structs
 */
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
     * @var Card|null
     */
    protected ?Card $card = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Payment|null
     */
    protected ?Payment $payment = null;

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
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var SubMerchant|null
     */
    protected ?SubMerchant $subMerchant = null;

    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Recurring|null
     */
    protected ?Recurring $recurring = null;

    /**
     * The threeDSInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var ThreeDSInfo|null
     */
    protected ?ThreeDSInfo $threeDSInfo = null;

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
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * Constructor method for verifyEnrollmentRequest
     * @param string|null $version
     * @param Card|null $card
     * @param Payment|null $payment
     * @param string|null $orderRef
     * @param string|null $transient
     * @param string|null $mdFieldValue
     * @param string|null $userAgent
     * @param string|null $walletId
     * @param string|null $walletCardInd
     * @param string|null $generateVirtualCvx
     * @param string|null $merchantName
     * @param string|null $merchantURL
     * @param string|null $merchantCountryCode
     * @param string|null $returnURL
     * @param Order|null $order
     * @param Buyer|null $buyer
     * @param SubMerchant|null $subMerchant
     * @param Recurring|null $recurring
     * @param ThreeDSInfo|null $threeDSInfo
     * @param string|null $merchantScore
     * @param PrivateDataList|null $privateDataList
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
     */
    public function __construct(?string $version = null, ?Card $card = null, ?Payment $payment = null, ?string $orderRef = null, ?string $transient = null, ?string $mdFieldValue = null, ?string $userAgent = null, ?string $walletId = null, ?string $walletCardInd = null, ?string $generateVirtualCvx = null, ?string $merchantName = null, ?string $merchantURL = null, ?string $merchantCountryCode = null, ?string $returnURL = null, ?Order $order = null, ?Buyer $buyer = null, ?SubMerchant $subMerchant = null, ?Recurring $recurring = null, ?ThreeDSInfo $threeDSInfo = null, ?string $merchantScore = null, ?PrivateDataList $privateDataList = null)
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
     * @param string|null $version
     * @return VerifyEnrollmentRequest
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
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param Card|null $card
     * @return VerifyEnrollmentRequest
     */
    public function setCard(?Card $card = null): self
    {
        $this->card = $card;

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
     * @return VerifyEnrollmentRequest
     */
    public function setPayment(?Payment $payment = null): self
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
     * @param string|null $orderRef
     * @return VerifyEnrollmentRequest
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
     * @param string|null $transient
     * @return VerifyEnrollmentRequest
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
     * @param string|null $mdFieldValue
     * @return VerifyEnrollmentRequest
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
     * @param string|null $userAgent
     * @return VerifyEnrollmentRequest
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
     * @param string|null $walletId
     * @return VerifyEnrollmentRequest
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
     * @param string|null $walletCardInd
     * @return VerifyEnrollmentRequest
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
     * @param string|null $generateVirtualCvx
     * @return VerifyEnrollmentRequest
     */
    public function setGenerateVirtualCvx(?string $generateVirtualCvx = null): self
    {
        // validation for constraint: string
        if (!is_null($generateVirtualCvx) && !is_string($generateVirtualCvx)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($generateVirtualCvx, true), gettype($generateVirtualCvx)), __LINE__);
        }
        if (is_null($generateVirtualCvx)) {
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
     * @param string|null $merchantName
     * @return VerifyEnrollmentRequest
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
     * @param string|null $merchantURL
     * @return VerifyEnrollmentRequest
     */
    public function setMerchantURL(?string $merchantURL = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantURL) && !is_string($merchantURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantURL, true), gettype($merchantURL)), __LINE__);
        }
        if (is_null($merchantURL)) {
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
     * @param string|null $merchantCountryCode
     * @return VerifyEnrollmentRequest
     */
    public function setMerchantCountryCode(?string $merchantCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantCountryCode) && !is_string($merchantCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantCountryCode, true), gettype($merchantCountryCode)), __LINE__);
        }
        if (is_null($merchantCountryCode)) {
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
     * @param string|null $returnURL
     * @return VerifyEnrollmentRequest
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
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * Set order value
     * @param Order|null $order
     * @return VerifyEnrollmentRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get buyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer ?? null;
    }

    /**
     * Set buyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Buyer|null $buyer
     * @return VerifyEnrollmentRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
    {
        if (is_null($buyer)) {
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
     * @return SubMerchant|null
     */
    public function getSubMerchant(): ?SubMerchant
    {
        return $this->subMerchant ?? null;
    }

    /**
     * Set subMerchant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param SubMerchant|null $subMerchant
     * @return VerifyEnrollmentRequest
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
    {
        if (is_null($subMerchant)) {
            unset($this->subMerchant);
        } else {
            $this->subMerchant = $subMerchant;
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
     * @return VerifyEnrollmentRequest
     */
    public function setRecurring(?Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

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
     * @return VerifyEnrollmentRequest
     */
    public function setThreeDSInfo(?ThreeDSInfo $threeDSInfo = null): self
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
     * @param string|null $merchantScore
     * @return VerifyEnrollmentRequest
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
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return VerifyEnrollmentRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
