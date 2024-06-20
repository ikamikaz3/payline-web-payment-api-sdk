<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMeansTrans StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentMeansTrans extends AbstractStructBase
{
    /**
     * The IsLCLFAlerted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $IsLCLFAlerted;
    /**
     * The ExternalTransactionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $ExternalTransactionId;
    /**
     * The ReferenceOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $ReferenceOrder;
    /**
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $TransactionDate;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $Amount;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $Status;
    /**
     * The PosLabel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $PosLabel;
    /**
     * The CustomerData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerData = null;
    /**
     * Constructor method for PaymentMeansTrans
     * @uses PaymentMeansTrans::setIsLCLFAlerted()
     * @uses PaymentMeansTrans::setExternalTransactionId()
     * @uses PaymentMeansTrans::setReferenceOrder()
     * @uses PaymentMeansTrans::setTransactionDate()
     * @uses PaymentMeansTrans::setAmount()
     * @uses PaymentMeansTrans::setStatus()
     * @uses PaymentMeansTrans::setPosLabel()
     * @uses PaymentMeansTrans::setCustomerData()
     * @param string $isLCLFAlerted
     * @param string $externalTransactionId
     * @param string $referenceOrder
     * @param string $transactionDate
     * @param string $amount
     * @param string $status
     * @param string $posLabel
     * @param string $customerData
     */
    public function __construct(string $isLCLFAlerted, string $externalTransactionId, string $referenceOrder, string $transactionDate, string $amount, string $status, string $posLabel, ?string $customerData = null)
    {
        $this
            ->setIsLCLFAlerted($isLCLFAlerted)
            ->setExternalTransactionId($externalTransactionId)
            ->setReferenceOrder($referenceOrder)
            ->setTransactionDate($transactionDate)
            ->setAmount($amount)
            ->setStatus($status)
            ->setPosLabel($posLabel)
            ->setCustomerData($customerData);
    }
    /**
     * Get IsLCLFAlerted value
     * @return string
     */
    public function getIsLCLFAlerted(): string
    {
        return $this->IsLCLFAlerted;
    }
    /**
     * Set IsLCLFAlerted value
     * @param string $isLCLFAlerted
     * @return \StructType\PaymentMeansTrans
     */
    public function setIsLCLFAlerted(string $isLCLFAlerted): self
    {
        // validation for constraint: string
        if (!is_null($isLCLFAlerted) && !is_string($isLCLFAlerted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isLCLFAlerted, true), gettype($isLCLFAlerted)), __LINE__);
        }
        $this->IsLCLFAlerted = $isLCLFAlerted;

        return $this;
    }
    /**
     * Get ExternalTransactionId value
     * @return string
     */
    public function getExternalTransactionId(): string
    {
        return $this->ExternalTransactionId;
    }
    /**
     * Set ExternalTransactionId value
     * @param string $externalTransactionId
     * @return \StructType\PaymentMeansTrans
     */
    public function setExternalTransactionId(string $externalTransactionId): self
    {
        // validation for constraint: string
        if (!is_null($externalTransactionId) && !is_string($externalTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTransactionId, true), gettype($externalTransactionId)), __LINE__);
        }
        $this->ExternalTransactionId = $externalTransactionId;

        return $this;
    }
    /**
     * Get ReferenceOrder value
     * @return string
     */
    public function getReferenceOrder(): string
    {
        return $this->ReferenceOrder;
    }
    /**
     * Set ReferenceOrder value
     * @param string $referenceOrder
     * @return \StructType\PaymentMeansTrans
     */
    public function setReferenceOrder(string $referenceOrder): self
    {
        // validation for constraint: string
        if (!is_null($referenceOrder) && !is_string($referenceOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceOrder, true), gettype($referenceOrder)), __LINE__);
        }
        $this->ReferenceOrder = $referenceOrder;

        return $this;
    }
    /**
     * Get TransactionDate value
     * @return string
     */
    public function getTransactionDate(): string
    {
        return $this->TransactionDate;
    }
    /**
     * Set TransactionDate value
     * @param string $transactionDate
     * @return \StructType\PaymentMeansTrans
     */
    public function setTransactionDate(string $transactionDate): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;

        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \StructType\PaymentMeansTrans
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;

        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\PaymentMeansTrans
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;

        return $this;
    }
    /**
     * Get PosLabel value
     * @return string
     */
    public function getPosLabel(): string
    {
        return $this->PosLabel;
    }
    /**
     * Set PosLabel value
     * @param string $posLabel
     * @return \StructType\PaymentMeansTrans
     */
    public function setPosLabel(string $posLabel): self
    {
        // validation for constraint: string
        if (!is_null($posLabel) && !is_string($posLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posLabel, true), gettype($posLabel)), __LINE__);
        }
        $this->PosLabel = $posLabel;

        return $this;
    }
    /**
     * Get CustomerData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerData(): ?string
    {
        return $this->CustomerData ?? null;
    }
    /**
     * Set CustomerData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerData
     * @return \StructType\PaymentMeansTrans
     */
    public function setCustomerData(?string $customerData = null): self
    {
        // validation for constraint: string
        if (!is_null($customerData) && !is_string($customerData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerData, true), gettype($customerData)), __LINE__);
        }
        if (is_null($customerData) || (is_array($customerData) && empty($customerData))) {
            unset($this->CustomerData);
        } else {
            $this->CustomerData = $customerData;
        }

        return $this;
    }
}
