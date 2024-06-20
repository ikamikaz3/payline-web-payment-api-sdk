<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerTrans StructType
 * @subpackage Structs
 */
class CustomerTrans extends AbstractStructBase
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
     * The CardCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $CardCode;

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
     * Constructor method for CustomerTrans
     * @param string $isLCLFAlerted
     * @param string $externalTransactionId
     * @param string $referenceOrder
     * @param string $cardCode
     * @param string $transactionDate
     * @param string $amount
     * @param string $status
     * @param string $posLabel
     * @uses CustomerTrans::setIsLCLFAlerted()
     * @uses CustomerTrans::setExternalTransactionId()
     * @uses CustomerTrans::setReferenceOrder()
     * @uses CustomerTrans::setCardCode()
     * @uses CustomerTrans::setTransactionDate()
     * @uses CustomerTrans::setAmount()
     * @uses CustomerTrans::setStatus()
     * @uses CustomerTrans::setPosLabel()
     */
    public function __construct(string $isLCLFAlerted, string $externalTransactionId, string $referenceOrder, string $cardCode, string $transactionDate, string $amount, string $status, string $posLabel)
    {
        $this
            ->setIsLCLFAlerted($isLCLFAlerted)
            ->setExternalTransactionId($externalTransactionId)
            ->setReferenceOrder($referenceOrder)
            ->setCardCode($cardCode)
            ->setTransactionDate($transactionDate)
            ->setAmount($amount)
            ->setStatus($status)
            ->setPosLabel($posLabel);
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
     * @return CustomerTrans
     */
    public function setIsLCLFAlerted(string $isLCLFAlerted): self
    {
        // validation for constraint: string
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
     * @return CustomerTrans
     */
    public function setExternalTransactionId(string $externalTransactionId): self
    {
        // validation for constraint: string
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
     * @return CustomerTrans
     */
    public function setReferenceOrder(string $referenceOrder): self
    {
        // validation for constraint: string
        $this->ReferenceOrder = $referenceOrder;

        return $this;
    }

    /**
     * Get CardCode value
     * @return string
     */
    public function getCardCode(): string
    {
        return $this->CardCode;
    }

    /**
     * Set CardCode value
     * @param string $cardCode
     * @return CustomerTrans
     */
    public function setCardCode(string $cardCode): self
    {
        // validation for constraint: string
        $this->CardCode = $cardCode;

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
     * @return CustomerTrans
     */
    public function setTransactionDate(string $transactionDate): self
    {
        // validation for constraint: string
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
     * @return CustomerTrans
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
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
     * @return CustomerTrans
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
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
     * @return CustomerTrans
     */
    public function setPosLabel(string $posLabel): self
    {
        // validation for constraint: string
        $this->PosLabel = $posLabel;

        return $this;
    }
}
