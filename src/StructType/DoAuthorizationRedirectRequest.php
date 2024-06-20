<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doAuthorizationRedirectRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doAuthorizationRedirect method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoAuthorizationRedirectRequest extends AbstractStructBase
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
     * The card
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $card = null;
    /**
     * The returnURL
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $returnURL = null;
    /**
     * The cancelURL
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $cancelURL = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The notificationURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $notificationURL = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The languageCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $languageCode = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * The securityMode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $securityMode = null;
    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Recurring|null
     */
    protected ?\StructType\Recurring $recurring = null;
    /**
     * The merchantName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantName = null;
    /**
     * The subMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\SubMerchant|null
     */
    protected ?\StructType\SubMerchant $subMerchant = null;
    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;
    /**
     * The asynchronousRetryTimeout
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $asynchronousRetryTimeout = null;
    /**
     * Constructor method for doAuthorizationRedirectRequest
     * @uses DoAuthorizationRedirectRequest::setVersion()
     * @uses DoAuthorizationRedirectRequest::setPayment()
     * @uses DoAuthorizationRedirectRequest::setCard()
     * @uses DoAuthorizationRedirectRequest::setReturnURL()
     * @uses DoAuthorizationRedirectRequest::setCancelURL()
     * @uses DoAuthorizationRedirectRequest::setOrder()
     * @uses DoAuthorizationRedirectRequest::setNotificationURL()
     * @uses DoAuthorizationRedirectRequest::setPrivateDataList()
     * @uses DoAuthorizationRedirectRequest::setLanguageCode()
     * @uses DoAuthorizationRedirectRequest::setBuyer()
     * @uses DoAuthorizationRedirectRequest::setOwner()
     * @uses DoAuthorizationRedirectRequest::setSecurityMode()
     * @uses DoAuthorizationRedirectRequest::setRecurring()
     * @uses DoAuthorizationRedirectRequest::setMerchantName()
     * @uses DoAuthorizationRedirectRequest::setSubMerchant()
     * @uses DoAuthorizationRedirectRequest::setMiscData()
     * @uses DoAuthorizationRedirectRequest::setAsynchronousRetryTimeout()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param \StructType\Card $card
     * @param string $returnURL
     * @param string $cancelURL
     * @param \StructType\Order $order
     * @param string $notificationURL
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $languageCode
     * @param \StructType\Buyer $buyer
     * @param \StructType\Owner $owner
     * @param string $securityMode
     * @param \StructType\Recurring $recurring
     * @param string $merchantName
     * @param \StructType\SubMerchant $subMerchant
     * @param string $miscData
     * @param string $asynchronousRetryTimeout
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?\StructType\Card $card = null, ?string $returnURL = null, ?string $cancelURL = null, ?\StructType\Order $order = null, ?string $notificationURL = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $languageCode = null, ?\StructType\Buyer $buyer = null, ?\StructType\Owner $owner = null, ?string $securityMode = null, ?\StructType\Recurring $recurring = null, ?string $merchantName = null, ?\StructType\SubMerchant $subMerchant = null, ?string $miscData = null, ?string $asynchronousRetryTimeout = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setCard($card)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setOrder($order)
            ->setNotificationURL($notificationURL)
            ->setPrivateDataList($privateDataList)
            ->setLanguageCode($languageCode)
            ->setBuyer($buyer)
            ->setOwner($owner)
            ->setSecurityMode($securityMode)
            ->setRecurring($recurring)
            ->setMerchantName($merchantName)
            ->setSubMerchant($subMerchant)
            ->setMiscData($miscData)
            ->setAsynchronousRetryTimeout($asynchronousRetryTimeout);
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
     * @return \StructType\DoAuthorizationRedirectRequest
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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;

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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setCard(?\StructType\Card $card = null): self
    {
        $this->card = $card;

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
     * @return \StructType\DoAuthorizationRedirectRequest
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
     * Get cancelURL value
     * @return string|null
     */
    public function getCancelURL(): ?string
    {
        return $this->cancelURL;
    }
    /**
     * Set cancelURL value
     * @param string $cancelURL
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setCancelURL(?string $cancelURL = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelURL) && !is_string($cancelURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelURL, true), gettype($cancelURL)), __LINE__);
        }
        $this->cancelURL = $cancelURL;

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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }
    /**
     * Get notificationURL value
     * @return string|null
     */
    public function getNotificationURL(): ?string
    {
        return $this->notificationURL;
    }
    /**
     * Set notificationURL value
     * @param string $notificationURL
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setNotificationURL(?string $notificationURL = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationURL) && !is_string($notificationURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationURL, true), gettype($notificationURL)), __LINE__);
        }
        $this->notificationURL = $notificationURL;

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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
    /**
     * Get languageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
    /**
     * Set languageCode value
     * @param string $languageCode
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->languageCode = $languageCode;

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
     * @return \StructType\DoAuthorizationRedirectRequest
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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setOwner(?\StructType\Owner $owner = null): self
    {
        $this->owner = $owner;

        return $this;
    }
    /**
     * Get securityMode value
     * @return string|null
     */
    public function getSecurityMode(): ?string
    {
        return $this->securityMode;
    }
    /**
     * Set securityMode value
     * @param string $securityMode
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setSecurityMode(?string $securityMode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityMode) && !is_string($securityMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityMode, true), gettype($securityMode)), __LINE__);
        }
        $this->securityMode = $securityMode;

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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setRecurring(?\StructType\Recurring $recurring = null): self
    {
        $this->recurring = $recurring;

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
     * @return \StructType\DoAuthorizationRedirectRequest
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
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

        return $this;
    }
    /**
     * Get miscData value
     * @return string|null
     */
    public function getMiscData(): ?string
    {
        return $this->miscData;
    }
    /**
     * Set miscData value
     * @param string $miscData
     * @return \StructType\DoAuthorizationRedirectRequest
     */
    public function setMiscData(?string $miscData = null): self
    {
        // validation for constraint: string
        if (!is_null($miscData) && !is_string($miscData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscData, true), gettype($miscData)), __LINE__);
        }
        $this->miscData = $miscData;

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
     * @return \StructType\DoAuthorizationRedirectRequest
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
}
