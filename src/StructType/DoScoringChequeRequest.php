<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doScoringChequeRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doScoringCheque method
 * @subpackage Structs
 */
class DoScoringChequeRequest extends AbstractStructBase
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
     * The cheque
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Cheque|null
     */
    protected ?Cheque $cheque = null;

    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Order|null
     */
    protected ?Order $order = null;

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
     * Constructor method for doScoringChequeRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param Cheque|null $cheque
     * @param Order|null $order
     * @param PrivateDataList|null $privateDataList
     * @param string|null $media
     * @uses DoScoringChequeRequest::setVersion()
     * @uses DoScoringChequeRequest::setPayment()
     * @uses DoScoringChequeRequest::setCheque()
     * @uses DoScoringChequeRequest::setOrder()
     * @uses DoScoringChequeRequest::setPrivateDataList()
     * @uses DoScoringChequeRequest::setMedia()
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?Cheque $cheque = null, ?Order $order = null, ?PrivateDataList $privateDataList = null, ?string $media = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setCheque($cheque)
            ->setOrder($order)
            ->setPrivateDataList($privateDataList)
            ->setMedia($media);
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
     * @return DoScoringChequeRequest
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
     * @return DoScoringChequeRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get cheque value
     * @return Cheque|null
     */
    public function getCheque(): ?Cheque
    {
        return $this->cheque;
    }

    /**
     * Set cheque value
     * @param Cheque|null $cheque
     * @return DoScoringChequeRequest
     */
    public function setCheque(?Cheque $cheque = null): self
    {
        $this->cheque = $cheque;

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
     * @return DoScoringChequeRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

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
     * @return DoScoringChequeRequest
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
     * @return DoScoringChequeRequest
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
}
