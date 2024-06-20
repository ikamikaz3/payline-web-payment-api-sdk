<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doRefundRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doRefund method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoRefundRequest extends AbstractStructBase
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
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;

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
     * The details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Details|null
     */
    protected ?Details $details = null;

    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;

    /**
     * Constructor method for doRefundRequest
     * @param string|null $version
     * @param string|null $transactionID
     * @param Payment|null $payment
     * @param string|null $comment
     * @param PrivateDataList|null $privateDataList
     * @param string|null $sequenceNumber
     * @param string|null $media
     * @param Details|null $details
     * @param string|null $miscData
     * @uses DoRefundRequest::setVersion()
     * @uses DoRefundRequest::setTransactionID()
     * @uses DoRefundRequest::setPayment()
     * @uses DoRefundRequest::setComment()
     * @uses DoRefundRequest::setPrivateDataList()
     * @uses DoRefundRequest::setSequenceNumber()
     * @uses DoRefundRequest::setMedia()
     * @uses DoRefundRequest::setDetails()
     * @uses DoRefundRequest::setMiscData()
     */
    public function __construct(?string $version = null, ?string $transactionID = null, ?Payment $payment = null, ?string $comment = null, ?PrivateDataList $privateDataList = null, ?string $sequenceNumber = null, ?string $media = null, ?Details $details = null, ?string $miscData = null)
    {
        $this
            ->setVersion($version)
            ->setTransactionID($transactionID)
            ->setPayment($payment)
            ->setComment($comment)
            ->setPrivateDataList($privateDataList)
            ->setSequenceNumber($sequenceNumber)
            ->setMedia($media)
            ->setDetails($details)
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
     * @return DoRefundRequest
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
     * @return DoRefundRequest
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
     * @return DoRefundRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Set comment value
     * @param string|null $comment
     * @return DoRefundRequest
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;

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
     * @return DoRefundRequest
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
     * @return DoRefundRequest
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
     * @return DoRefundRequest
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
     * Get details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Details|null
     */
    public function getDetails(): ?Details
    {
        return $this->details ?? null;
    }

    /**
     * Set details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Details|null $details
     * @return DoRefundRequest
     */
    public function setDetails(?Details $details = null): self
    {
        if (is_null($details)) {
            unset($this->details);
        } else {
            $this->details = $details;
        }

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
     * @return DoRefundRequest
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
