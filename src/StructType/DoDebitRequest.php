<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doDebitRequest StructType
 * @subpackage Structs
 */
#[AllowDynamicProperties]
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
     * @var Payment|null
     */
    protected ?Payment $payment = null;

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
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Authorization|null
     */
    protected ?Authorization $authorization = null;

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
     * Constructor method for doDebitRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param Card|null $card
     * @param Order|null $order
     * @param Authorization|null $authorization
     * @param Buyer|null $buyer
     * @param Owner|null $owner
     * @param PrivateDataList|null $privateDataList
     * @param string|null $miscData
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param string|null $media
     * @param SubMerchant|null $subMerchant
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
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?Card $card = null, ?Order $order = null, ?Authorization $authorization = null, ?Buyer $buyer = null, ?Owner $owner = null, ?PrivateDataList $privateDataList = null, ?string $miscData = null, ?Authentication3DSecure $authentication3DSecure = null, ?string $media = null, ?SubMerchant $subMerchant = null)
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
     * @param string|null $version
     * @return DoDebitRequest
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
     * @return DoDebitRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

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
     * @return DoDebitRequest
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
     * @return DoDebitRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get authorization value
     * @return Authorization|null
     */
    public function getAuthorization(): ?Authorization
    {
        return $this->authorization;
    }

    /**
     * Set authorization value
     * @param Authorization|null $authorization
     * @return DoDebitRequest
     */
    public function setAuthorization(?Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

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
     * @return DoDebitRequest
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
     * @return DoDebitRequest
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
     * @return DoDebitRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
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
     * @param string|null $miscData
     * @return DoDebitRequest
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
     * @return Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }

    /**
     * Set authentication3DSecure value
     * @param Authentication3DSecure|null $authentication3DSecure
     * @return DoDebitRequest
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
     * @return DoDebitRequest
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
     * @return DoDebitRequest
     */
    public function setSubMerchant(?SubMerchant $subMerchant = null): self
    {
        $this->subMerchant = $subMerchant;

        return $this;
    }
}
