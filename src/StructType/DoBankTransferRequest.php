<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doBankTransferRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doBankTransfer method
 * @subpackage Structs
 */
class DoBankTransferRequest extends AbstractStructBase
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
     * The creditor
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Creditor|null
     */
    protected ?Creditor $creditor = null;

    /**
     * The orderID
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $orderID = null;

    /**
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionID = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * Constructor method for doBankTransferRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param Creditor|null $creditor
     * @param string|null $orderID
     * @param string|null $comment
     * @param string|null $transactionID
     * @param PrivateDataList|null $privateDataList
     * @uses DoBankTransferRequest::setVersion()
     * @uses DoBankTransferRequest::setPayment()
     * @uses DoBankTransferRequest::setCreditor()
     * @uses DoBankTransferRequest::setOrderID()
     * @uses DoBankTransferRequest::setComment()
     * @uses DoBankTransferRequest::setTransactionID()
     * @uses DoBankTransferRequest::setPrivateDataList()
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?Creditor $creditor = null, ?string $orderID = null, ?string $comment = null, ?string $transactionID = null, ?PrivateDataList $privateDataList = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setCreditor($creditor)
            ->setOrderID($orderID)
            ->setComment($comment)
            ->setTransactionID($transactionID)
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
     * @return DoBankTransferRequest
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
     * @return DoBankTransferRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get creditor value
     * @return Creditor|null
     */
    public function getCreditor(): ?Creditor
    {
        return $this->creditor;
    }

    /**
     * Set creditor value
     * @param Creditor|null $creditor
     * @return DoBankTransferRequest
     */
    public function setCreditor(?Creditor $creditor = null): self
    {
        $this->creditor = $creditor;

        return $this;
    }

    /**
     * Get orderID value
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->orderID;
    }

    /**
     * Set orderID value
     * @param string|null $orderID
     * @return DoBankTransferRequest
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->orderID = $orderID;

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
     * @return DoBankTransferRequest
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
     * @return DoBankTransferRequest
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
     * @return DoBankTransferRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
