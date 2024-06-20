<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doResetRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doReset method
 * @subpackage Structs
 */
class DoResetRequest extends AbstractStructBase
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
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;

    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $amount = null;

    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $currency = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * Constructor method for doResetRequest
     * @param string|null $version
     * @param string|null $transactionID
     * @param string|null $comment
     * @param string|null $media
     * @param string|null $amount
     * @param string|null $currency
     * @param PrivateDataList|null $privateDataList
     * @param string|null $sequenceNumber
     * @uses DoResetRequest::setVersion()
     * @uses DoResetRequest::setTransactionID()
     * @uses DoResetRequest::setComment()
     * @uses DoResetRequest::setMedia()
     * @uses DoResetRequest::setAmount()
     * @uses DoResetRequest::setCurrency()
     * @uses DoResetRequest::setPrivateDataList()
     * @uses DoResetRequest::setSequenceNumber()
     */
    public function __construct(?string $version = null, ?string $transactionID = null, ?string $comment = null, ?string $media = null, ?string $amount = null, ?string $currency = null, ?PrivateDataList $privateDataList = null, ?string $sequenceNumber = null)
    {
        $this
            ->setVersion($version)
            ->setTransactionID($transactionID)
            ->setComment($comment)
            ->setMedia($media)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setPrivateDataList($privateDataList)
            ->setSequenceNumber($sequenceNumber);
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
     * @return DoResetRequest
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
     * @return DoResetRequest
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
     * @return DoResetRequest
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
     * @return DoResetRequest
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
     * Get amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Set amount value
     * @param string|null $amount
     * @return DoResetRequest
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set currency value
     * @param string|null $currency
     * @return DoResetRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get privateDataList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList ?? null;
    }

    /**
     * Set privateDataList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param PrivateDataList|null $privateDataList
     * @return DoResetRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        if (is_null($privateDataList)) {
            unset($this->privateDataList);
        } else {
            $this->privateDataList = $privateDataList;
        }

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
     * @return DoResetRequest
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
}
