<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doCaptureRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doCapture method
 * @subpackage Structs
 */
class DoCaptureRequest extends AbstractStructBase
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
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The sequenceNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $sequenceNumber = null;

    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;

    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;

    /**
     * Constructor method for doCaptureRequest
     * @param string|null $version
     * @param string|null $transactionID
     * @param Payment|null $payment
     * @param PrivateDataList|null $privateDataList
     * @param string|null $sequenceNumber
     * @param string|null $media
     * @param string|null $miscData
     * @uses DoCaptureRequest::setVersion()
     * @uses DoCaptureRequest::setTransactionID()
     * @uses DoCaptureRequest::setPayment()
     * @uses DoCaptureRequest::setPrivateDataList()
     * @uses DoCaptureRequest::setSequenceNumber()
     * @uses DoCaptureRequest::setMedia()
     * @uses DoCaptureRequest::setMiscData()
     */
    public function __construct(?string $version = null, ?string $transactionID = null, ?Payment $payment = null, ?PrivateDataList $privateDataList = null, ?string $sequenceNumber = null, ?string $media = null, ?string $miscData = null)
    {
        $this
            ->setVersion($version)
            ->setTransactionID($transactionID)
            ->setPayment($payment)
            ->setPrivateDataList($privateDataList)
            ->setSequenceNumber($sequenceNumber)
            ->setMedia($media)
            ->setMiscData($miscData);
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
     * @return DoCaptureRequest
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
     * @param string|null $transactionID
     * @return DoCaptureRequest
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
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    /**
     * Set payment value
     * @param Payment|null $payment
     * @return DoCaptureRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

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
     * @return DoCaptureRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }

    /**
     * Get sequenceNumber value
     * @return string|null
     */
    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }

    /**
     * Set sequenceNumber value
     * @param string|null $sequenceNumber
     * @return DoCaptureRequest
     */
    public function setSequenceNumber(?string $sequenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceNumber) && !is_string($sequenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;

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
     * @return DoCaptureRequest
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
     * @return DoCaptureRequest
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
}
