<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAlertDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAlertDetailsResponse extends AbstractStructBase
{
    /**
     * The AlertId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $AlertId;
    /**
     * The TransactionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $TransactionStatus;
    /**
     * The MerchantLabel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $MerchantLabel;
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
     * The TransactionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $TransactionId;
    /**
     * The SecurityLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $SecurityLevel;
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
     * The TransactionAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $TransactionAmount;
    /**
     * The TransactionCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $TransactionCurrency;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $PaymentType;
    /**
     * The PaymentData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $PaymentData;
    /**
     * The ReferenceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $ReferenceData;
    /**
     * The CustomerTransHist
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \StructType\CustomerTransHist
     */
    protected \StructType\CustomerTransHist $CustomerTransHist;
    /**
     * The PaymentMeansTransHist
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \StructType\PaymentMeansTransHist
     */
    protected \StructType\PaymentMeansTransHist $PaymentMeansTransHist;
    /**
     * The AlertsTransHist
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var \StructType\AlertsTransHist
     */
    protected \StructType\AlertsTransHist $AlertsTransHist;
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The ExplanationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExplanationCode = null;
    /**
     * The ExplanationLabel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExplanationLabel = null;
    /**
     * The HolderName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $HolderName = null;
    /**
     * The CustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CustomerId = null;
    /**
     * The BuyerFirstName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BuyerFirstName = null;
    /**
     * The BuyerLastName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BuyerLastName = null;
    /**
     * Constructor method for getAlertDetailsResponse
     * @uses GetAlertDetailsResponse::setAlertId()
     * @uses GetAlertDetailsResponse::setTransactionStatus()
     * @uses GetAlertDetailsResponse::setMerchantLabel()
     * @uses GetAlertDetailsResponse::setPosLabel()
     * @uses GetAlertDetailsResponse::setTransactionId()
     * @uses GetAlertDetailsResponse::setSecurityLevel()
     * @uses GetAlertDetailsResponse::setTransactionDate()
     * @uses GetAlertDetailsResponse::setTransactionAmount()
     * @uses GetAlertDetailsResponse::setTransactionCurrency()
     * @uses GetAlertDetailsResponse::setPaymentType()
     * @uses GetAlertDetailsResponse::setPaymentData()
     * @uses GetAlertDetailsResponse::setReferenceData()
     * @uses GetAlertDetailsResponse::setCustomerTransHist()
     * @uses GetAlertDetailsResponse::setPaymentMeansTransHist()
     * @uses GetAlertDetailsResponse::setAlertsTransHist()
     * @uses GetAlertDetailsResponse::setResult()
     * @uses GetAlertDetailsResponse::setExplanationCode()
     * @uses GetAlertDetailsResponse::setExplanationLabel()
     * @uses GetAlertDetailsResponse::setHolderName()
     * @uses GetAlertDetailsResponse::setCustomerId()
     * @uses GetAlertDetailsResponse::setBuyerFirstName()
     * @uses GetAlertDetailsResponse::setBuyerLastName()
     * @param string $alertId
     * @param string $transactionStatus
     * @param string $merchantLabel
     * @param string $posLabel
     * @param string $transactionId
     * @param string $securityLevel
     * @param string $transactionDate
     * @param string $transactionAmount
     * @param string $transactionCurrency
     * @param string $paymentType
     * @param string $paymentData
     * @param string $referenceData
     * @param \StructType\CustomerTransHist $customerTransHist
     * @param \StructType\PaymentMeansTransHist $paymentMeansTransHist
     * @param \StructType\AlertsTransHist $alertsTransHist
     * @param \StructType\Result $result
     * @param string $explanationCode
     * @param string $explanationLabel
     * @param string $holderName
     * @param string $customerId
     * @param string $buyerFirstName
     * @param string $buyerLastName
     */
    public function __construct(string $alertId, string $transactionStatus, string $merchantLabel, string $posLabel, string $transactionId, string $securityLevel, string $transactionDate, string $transactionAmount, string $transactionCurrency, string $paymentType, string $paymentData, string $referenceData, \StructType\CustomerTransHist $customerTransHist, \StructType\PaymentMeansTransHist $paymentMeansTransHist, \StructType\AlertsTransHist $alertsTransHist, ?\StructType\Result $result = null, ?string $explanationCode = null, ?string $explanationLabel = null, ?string $holderName = null, ?string $customerId = null, ?string $buyerFirstName = null, ?string $buyerLastName = null)
    {
        $this
            ->setAlertId($alertId)
            ->setTransactionStatus($transactionStatus)
            ->setMerchantLabel($merchantLabel)
            ->setPosLabel($posLabel)
            ->setTransactionId($transactionId)
            ->setSecurityLevel($securityLevel)
            ->setTransactionDate($transactionDate)
            ->setTransactionAmount($transactionAmount)
            ->setTransactionCurrency($transactionCurrency)
            ->setPaymentType($paymentType)
            ->setPaymentData($paymentData)
            ->setReferenceData($referenceData)
            ->setCustomerTransHist($customerTransHist)
            ->setPaymentMeansTransHist($paymentMeansTransHist)
            ->setAlertsTransHist($alertsTransHist)
            ->setResult($result)
            ->setExplanationCode($explanationCode)
            ->setExplanationLabel($explanationLabel)
            ->setHolderName($holderName)
            ->setCustomerId($customerId)
            ->setBuyerFirstName($buyerFirstName)
            ->setBuyerLastName($buyerLastName);
    }
    /**
     * Get AlertId value
     * @return string
     */
    public function getAlertId(): string
    {
        return $this->AlertId;
    }
    /**
     * Set AlertId value
     * @param string $alertId
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setAlertId(string $alertId): self
    {
        // validation for constraint: string
        if (!is_null($alertId) && !is_string($alertId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alertId, true), gettype($alertId)), __LINE__);
        }
        $this->AlertId = $alertId;
        
        return $this;
    }
    /**
     * Get TransactionStatus value
     * @return string
     */
    public function getTransactionStatus(): string
    {
        return $this->TransactionStatus;
    }
    /**
     * Set TransactionStatus value
     * @param string $transactionStatus
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setTransactionStatus(string $transactionStatus): self
    {
        // validation for constraint: string
        if (!is_null($transactionStatus) && !is_string($transactionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionStatus, true), gettype($transactionStatus)), __LINE__);
        }
        $this->TransactionStatus = $transactionStatus;
        
        return $this;
    }
    /**
     * Get MerchantLabel value
     * @return string
     */
    public function getMerchantLabel(): string
    {
        return $this->MerchantLabel;
    }
    /**
     * Set MerchantLabel value
     * @param string $merchantLabel
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setMerchantLabel(string $merchantLabel): self
    {
        // validation for constraint: string
        if (!is_null($merchantLabel) && !is_string($merchantLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantLabel, true), gettype($merchantLabel)), __LINE__);
        }
        $this->MerchantLabel = $merchantLabel;
        
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
     * @return \StructType\GetAlertDetailsResponse
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
     * Get TransactionId value
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setTransactionId(string $transactionId): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get SecurityLevel value
     * @return string
     */
    public function getSecurityLevel(): string
    {
        return $this->SecurityLevel;
    }
    /**
     * Set SecurityLevel value
     * @param string $securityLevel
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setSecurityLevel(string $securityLevel): self
    {
        // validation for constraint: string
        if (!is_null($securityLevel) && !is_string($securityLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityLevel, true), gettype($securityLevel)), __LINE__);
        }
        $this->SecurityLevel = $securityLevel;
        
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
     * @return \StructType\GetAlertDetailsResponse
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
     * Get TransactionAmount value
     * @return string
     */
    public function getTransactionAmount(): string
    {
        return $this->TransactionAmount;
    }
    /**
     * Set TransactionAmount value
     * @param string $transactionAmount
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setTransactionAmount(string $transactionAmount): self
    {
        // validation for constraint: string
        if (!is_null($transactionAmount) && !is_string($transactionAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionAmount, true), gettype($transactionAmount)), __LINE__);
        }
        $this->TransactionAmount = $transactionAmount;
        
        return $this;
    }
    /**
     * Get TransactionCurrency value
     * @return string
     */
    public function getTransactionCurrency(): string
    {
        return $this->TransactionCurrency;
    }
    /**
     * Set TransactionCurrency value
     * @param string $transactionCurrency
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setTransactionCurrency(string $transactionCurrency): self
    {
        // validation for constraint: string
        if (!is_null($transactionCurrency) && !is_string($transactionCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCurrency, true), gettype($transactionCurrency)), __LINE__);
        }
        $this->TransactionCurrency = $transactionCurrency;
        
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string
     */
    public function getPaymentType(): string
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param string $paymentType
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setPaymentType(string $paymentType): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->PaymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get PaymentData value
     * @return string
     */
    public function getPaymentData(): string
    {
        return $this->PaymentData;
    }
    /**
     * Set PaymentData value
     * @param string $paymentData
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setPaymentData(string $paymentData): self
    {
        // validation for constraint: string
        if (!is_null($paymentData) && !is_string($paymentData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentData, true), gettype($paymentData)), __LINE__);
        }
        $this->PaymentData = $paymentData;
        
        return $this;
    }
    /**
     * Get ReferenceData value
     * @return string
     */
    public function getReferenceData(): string
    {
        return $this->ReferenceData;
    }
    /**
     * Set ReferenceData value
     * @param string $referenceData
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setReferenceData(string $referenceData): self
    {
        // validation for constraint: string
        if (!is_null($referenceData) && !is_string($referenceData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceData, true), gettype($referenceData)), __LINE__);
        }
        $this->ReferenceData = $referenceData;
        
        return $this;
    }
    /**
     * Get CustomerTransHist value
     * @return \StructType\CustomerTransHist
     */
    public function getCustomerTransHist(): \StructType\CustomerTransHist
    {
        return $this->CustomerTransHist;
    }
    /**
     * Set CustomerTransHist value
     * @param \StructType\CustomerTransHist $customerTransHist
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setCustomerTransHist(\StructType\CustomerTransHist $customerTransHist): self
    {
        $this->CustomerTransHist = $customerTransHist;
        
        return $this;
    }
    /**
     * Get PaymentMeansTransHist value
     * @return \StructType\PaymentMeansTransHist
     */
    public function getPaymentMeansTransHist(): \StructType\PaymentMeansTransHist
    {
        return $this->PaymentMeansTransHist;
    }
    /**
     * Set PaymentMeansTransHist value
     * @param \StructType\PaymentMeansTransHist $paymentMeansTransHist
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setPaymentMeansTransHist(\StructType\PaymentMeansTransHist $paymentMeansTransHist): self
    {
        $this->PaymentMeansTransHist = $paymentMeansTransHist;
        
        return $this;
    }
    /**
     * Get AlertsTransHist value
     * @return \StructType\AlertsTransHist
     */
    public function getAlertsTransHist(): \StructType\AlertsTransHist
    {
        return $this->AlertsTransHist;
    }
    /**
     * Set AlertsTransHist value
     * @param \StructType\AlertsTransHist $alertsTransHist
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setAlertsTransHist(\StructType\AlertsTransHist $alertsTransHist): self
    {
        $this->AlertsTransHist = $alertsTransHist;
        
        return $this;
    }
    /**
     * Get result value
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get ExplanationCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExplanationCode(): ?string
    {
        return $this->ExplanationCode ?? null;
    }
    /**
     * Set ExplanationCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $explanationCode
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setExplanationCode(?string $explanationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($explanationCode) && !is_string($explanationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanationCode, true), gettype($explanationCode)), __LINE__);
        }
        if (is_null($explanationCode) || (is_array($explanationCode) && empty($explanationCode))) {
            unset($this->ExplanationCode);
        } else {
            $this->ExplanationCode = $explanationCode;
        }
        
        return $this;
    }
    /**
     * Get ExplanationLabel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExplanationLabel(): ?string
    {
        return $this->ExplanationLabel ?? null;
    }
    /**
     * Set ExplanationLabel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $explanationLabel
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setExplanationLabel(?string $explanationLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($explanationLabel) && !is_string($explanationLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanationLabel, true), gettype($explanationLabel)), __LINE__);
        }
        if (is_null($explanationLabel) || (is_array($explanationLabel) && empty($explanationLabel))) {
            unset($this->ExplanationLabel);
        } else {
            $this->ExplanationLabel = $explanationLabel;
        }
        
        return $this;
    }
    /**
     * Get HolderName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHolderName(): ?string
    {
        return $this->HolderName ?? null;
    }
    /**
     * Set HolderName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $holderName
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setHolderName(?string $holderName = null): self
    {
        // validation for constraint: string
        if (!is_null($holderName) && !is_string($holderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holderName, true), gettype($holderName)), __LINE__);
        }
        if (is_null($holderName) || (is_array($holderName) && empty($holderName))) {
            unset($this->HolderName);
        } else {
            $this->HolderName = $holderName;
        }
        
        return $this;
    }
    /**
     * Get CustomerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->CustomerId ?? null;
    }
    /**
     * Set CustomerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $customerId
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId) || (is_array($customerId) && empty($customerId))) {
            unset($this->CustomerId);
        } else {
            $this->CustomerId = $customerId;
        }
        
        return $this;
    }
    /**
     * Get BuyerFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBuyerFirstName(): ?string
    {
        return $this->BuyerFirstName ?? null;
    }
    /**
     * Set BuyerFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $buyerFirstName
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setBuyerFirstName(?string $buyerFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerFirstName) && !is_string($buyerFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerFirstName, true), gettype($buyerFirstName)), __LINE__);
        }
        if (is_null($buyerFirstName) || (is_array($buyerFirstName) && empty($buyerFirstName))) {
            unset($this->BuyerFirstName);
        } else {
            $this->BuyerFirstName = $buyerFirstName;
        }
        
        return $this;
    }
    /**
     * Get BuyerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBuyerLastName(): ?string
    {
        return $this->BuyerLastName ?? null;
    }
    /**
     * Set BuyerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $buyerLastName
     * @return \StructType\GetAlertDetailsResponse
     */
    public function setBuyerLastName(?string $buyerLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerLastName) && !is_string($buyerLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerLastName, true), gettype($buyerLastName)), __LINE__);
        }
        if (is_null($buyerLastName) || (is_array($buyerLastName) && empty($buyerLastName))) {
            unset($this->BuyerLastName);
        } else {
            $this->BuyerLastName = $buyerLastName;
        }
        
        return $this;
    }
}
