<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doDebitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoDebitRequest extends AbstractStructBase
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
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
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
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;
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
     * Constructor method for doDebitRequest
     * @uses DoDebitRequest::setVersion()
     * @uses DoDebitRequest::setPayment()
     * @uses DoDebitRequest::setCard()
     * @uses DoDebitRequest::setOrder()
     * @uses DoDebitRequest::setAuthorization()
     * @uses DoDebitRequest::setBuyer()
     * @uses DoDebitRequest::setOwner()
     * @uses DoDebitRequest::setPrivateDataList()
     * @uses DoDebitRequest::setMiscData()
     * @uses DoDebitRequest::setAuthentication3DSecure()
     * @uses DoDebitRequest::setMedia()
     * @uses DoDebitRequest::setSubMerchant()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param \StructType\Card $card
     * @param \StructType\Order $order
     * @param \StructType\Authorization $authorization
     * @param \StructType\Buyer $buyer
     * @param \StructType\Owner $owner
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $miscData
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $media
     * @param \StructType\SubMerchant $subMerchant
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?\StructType\Card $card = null, ?\StructType\Order $order = null, ?\StructType\Authorization $authorization = null, ?\StructType\Buyer $buyer = null, ?\StructType\Owner $owner = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $miscData = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $media = null, ?\StructType\SubMerchant $subMerchant = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setCard($card)
            ->setOrder($order)
            ->setAuthorization($authorization)
            ->setBuyer($buyer)
            ->setOwner($owner)
            ->setPrivateDataList($privateDataList)
            ->setMiscData($miscData)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setMedia($media)
            ->setSubMerchant($subMerchant);
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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;

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
     * @return \StructType\DoDebitRequest
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
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
     * @return \StructType\DoDebitRequest
     */
    public function setSubMerchant(?\StructType\SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

        return $this;
    }
}
