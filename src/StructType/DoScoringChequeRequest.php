<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doScoringChequeRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doScoringCheque method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The cheque
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Cheque|null
     */
    protected ?\StructType\Cheque $cheque = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * Constructor method for doScoringChequeRequest
     * @uses DoScoringChequeRequest::setVersion()
     * @uses DoScoringChequeRequest::setPayment()
     * @uses DoScoringChequeRequest::setCheque()
     * @uses DoScoringChequeRequest::setOrder()
     * @uses DoScoringChequeRequest::setPrivateDataList()
     * @uses DoScoringChequeRequest::setMedia()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param \StructType\Cheque $cheque
     * @param \StructType\Order $order
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $media
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?\StructType\Cheque $cheque = null, ?\StructType\Order $order = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $media = null)
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
     * @param string $version
     * @return \StructType\DoScoringChequeRequest
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
     * @return \StructType\DoScoringChequeRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get cheque value
     * @return \StructType\Cheque|null
     */
    public function getCheque(): ?\StructType\Cheque
    {
        return $this->cheque;
    }
    /**
     * Set cheque value
     * @param \StructType\Cheque $cheque
     * @return \StructType\DoScoringChequeRequest
     */
    public function setCheque(?\StructType\Cheque $cheque = null): self
    {
        $this->cheque = $cheque;
        
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
     * @return \StructType\DoScoringChequeRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
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
     * @return \StructType\DoScoringChequeRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
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
     * @param string $media
     * @return \StructType\DoScoringChequeRequest
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
