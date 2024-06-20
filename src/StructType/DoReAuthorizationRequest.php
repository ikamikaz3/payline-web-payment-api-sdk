<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doReAuthorizationRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doReAuthorization method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoReAuthorizationRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $transactionID = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
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
     * Constructor method for doReAuthorizationRequest
     * @uses DoReAuthorizationRequest::setVersion()
     * @uses DoReAuthorizationRequest::setTransactionID()
     * @uses DoReAuthorizationRequest::setPayment()
     * @uses DoReAuthorizationRequest::setOrder()
     * @uses DoReAuthorizationRequest::setPrivateDataList()
     * @uses DoReAuthorizationRequest::setMedia()
     * @param string $version
     * @param string $transactionID
     * @param \StructType\Payment $payment
     * @param \StructType\Order $order
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $media
     */
    public function __construct(?string $version = null, ?string $transactionID = null, ?\StructType\Payment $payment = null, ?\StructType\Order $order = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $media = null)
    {
        $this
            ->setVersion($version)
            ->setTransactionID($transactionID)
            ->setPayment($payment)
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
     * @return \StructType\DoReAuthorizationRequest
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
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }
    /**
     * Set transactionID value
     * @param string $transactionID
     * @return \StructType\DoReAuthorizationRequest
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;

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
     * @return \StructType\DoReAuthorizationRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;

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
     * @return \StructType\DoReAuthorizationRequest
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
     * @return \StructType\DoReAuthorizationRequest
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
     * @return \StructType\DoReAuthorizationRequest
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
