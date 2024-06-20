<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doBankTransferRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the doBankTransfer method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The creditor
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Creditor|null
     */
    protected ?\StructType\Creditor $creditor = null;
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
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * Constructor method for doBankTransferRequest
     * @uses DoBankTransferRequest::setVersion()
     * @uses DoBankTransferRequest::setPayment()
     * @uses DoBankTransferRequest::setCreditor()
     * @uses DoBankTransferRequest::setOrderID()
     * @uses DoBankTransferRequest::setComment()
     * @uses DoBankTransferRequest::setTransactionID()
     * @uses DoBankTransferRequest::setPrivateDataList()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param \StructType\Creditor $creditor
     * @param string $orderID
     * @param string $comment
     * @param string $transactionID
     * @param \StructType\PrivateDataList $privateDataList
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?\StructType\Creditor $creditor = null, ?string $orderID = null, ?string $comment = null, ?string $transactionID = null, ?\StructType\PrivateDataList $privateDataList = null)
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
     * @param string $version
     * @return \StructType\DoBankTransferRequest
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
     * @return \StructType\DoBankTransferRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get creditor value
     * @return \StructType\Creditor|null
     */
    public function getCreditor(): ?\StructType\Creditor
    {
        return $this->creditor;
    }
    /**
     * Set creditor value
     * @param \StructType\Creditor $creditor
     * @return \StructType\DoBankTransferRequest
     */
    public function setCreditor(?\StructType\Creditor $creditor = null): self
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
     * @param string $orderID
     * @return \StructType\DoBankTransferRequest
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
     * @param string $comment
     * @return \StructType\DoBankTransferRequest
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
     * @param string $transactionID
     * @return \StructType\DoBankTransferRequest
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
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList;
    }
    /**
     * Set privateDataList value
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\DoBankTransferRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
}
