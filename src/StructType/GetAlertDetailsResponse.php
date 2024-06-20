<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAlertDetailsResponse StructType
 * @subpackage Structs
 */
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
     * @var CustomerTransHist
     */
    protected CustomerTransHist $CustomerTransHist;

    /**
     * The PaymentMeansTransHist
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var PaymentMeansTransHist
     */
    protected PaymentMeansTransHist $PaymentMeansTransHist;

    /**
     * The AlertsTransHist
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var AlertsTransHist
     */
    protected AlertsTransHist $AlertsTransHist;

    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

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
     * @param CustomerTransHist $customerTransHist
     * @param PaymentMeansTransHist $paymentMeansTransHist
     * @param AlertsTransHist $alertsTransHist
     * @param Result|null $result
     * @param string|null $explanationCode
     * @param string|null $explanationLabel
     * @param string|null $holderName
     * @param string|null $customerId
     * @param string|null $buyerFirstName
     * @param string|null $buyerLastName
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
     */
    public function __construct(string $alertId, string $transactionStatus, string $merchantLabel, string $posLabel, string $transactionId, string $securityLevel, string $transactionDate, string $transactionAmount, string $transactionCurrency, string $paymentType, string $paymentData, string $referenceData, CustomerTransHist $customerTransHist, PaymentMeansTransHist $paymentMeansTransHist, AlertsTransHist $alertsTransHist, ?Result $result = null, ?string $explanationCode = null, ?string $explanationLabel = null, ?string $holderName = null, ?string $customerId = null, ?string $buyerFirstName = null, ?string $buyerLastName = null)
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
     * @return GetAlertDetailsResponse
     */
    public function setAlertId(string $alertId): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setTransactionStatus(string $transactionStatus): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setMerchantLabel(string $merchantLabel): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setPosLabel(string $posLabel): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setTransactionId(string $transactionId): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setSecurityLevel(string $securityLevel): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setTransactionDate(string $transactionDate): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setTransactionAmount(string $transactionAmount): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setTransactionCurrency(string $transactionCurrency): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setPaymentType(string $paymentType): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setPaymentData(string $paymentData): self
    {
        // validation for constraint: string
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
     * @return GetAlertDetailsResponse
     */
    public function setReferenceData(string $referenceData): self
    {
        // validation for constraint: string
        $this->ReferenceData = $referenceData;

        return $this;
    }

    /**
     * Get CustomerTransHist value
     * @return CustomerTransHist
     */
    public function getCustomerTransHist(): CustomerTransHist
    {
        return $this->CustomerTransHist;
    }

    /**
     * Set CustomerTransHist value
     * @param CustomerTransHist $customerTransHist
     * @return GetAlertDetailsResponse
     */
    public function setCustomerTransHist(CustomerTransHist $customerTransHist): self
    {
        $this->CustomerTransHist = $customerTransHist;

        return $this;
    }

    /**
     * Get PaymentMeansTransHist value
     * @return PaymentMeansTransHist
     */
    public function getPaymentMeansTransHist(): PaymentMeansTransHist
    {
        return $this->PaymentMeansTransHist;
    }

    /**
     * Set PaymentMeansTransHist value
     * @param PaymentMeansTransHist $paymentMeansTransHist
     * @return GetAlertDetailsResponse
     */
    public function setPaymentMeansTransHist(PaymentMeansTransHist $paymentMeansTransHist): self
    {
        $this->PaymentMeansTransHist = $paymentMeansTransHist;

        return $this;
    }

    /**
     * Get AlertsTransHist value
     * @return AlertsTransHist
     */
    public function getAlertsTransHist(): AlertsTransHist
    {
        return $this->AlertsTransHist;
    }

    /**
     * Set AlertsTransHist value
     * @param AlertsTransHist $alertsTransHist
     * @return GetAlertDetailsResponse
     */
    public function setAlertsTransHist(AlertsTransHist $alertsTransHist): self
    {
        $this->AlertsTransHist = $alertsTransHist;

        return $this;
    }

    /**
     * Get result value
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return GetAlertDetailsResponse
     */
    public function setResult(?Result $result = null): self
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
     * @param string|null $explanationCode
     * @return GetAlertDetailsResponse
     */
    public function setExplanationCode(?string $explanationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($explanationCode) && !is_string($explanationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanationCode, true), gettype($explanationCode)), __LINE__);
        }
        if (is_null($explanationCode)) {
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
     * @param string|null $explanationLabel
     * @return GetAlertDetailsResponse
     */
    public function setExplanationLabel(?string $explanationLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($explanationLabel) && !is_string($explanationLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanationLabel, true), gettype($explanationLabel)), __LINE__);
        }
        if (is_null($explanationLabel)) {
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
     * @param string|null $holderName
     * @return GetAlertDetailsResponse
     */
    public function setHolderName(?string $holderName = null): self
    {
        // validation for constraint: string
        if (!is_null($holderName) && !is_string($holderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holderName, true), gettype($holderName)), __LINE__);
        }
        if (is_null($holderName)) {
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
     * @param string|null $customerId
     * @return GetAlertDetailsResponse
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId)) {
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
     * @param string|null $buyerFirstName
     * @return GetAlertDetailsResponse
     */
    public function setBuyerFirstName(?string $buyerFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerFirstName) && !is_string($buyerFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerFirstName, true), gettype($buyerFirstName)), __LINE__);
        }
        if (is_null($buyerFirstName)) {
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
     * @param string|null $buyerLastName
     * @return GetAlertDetailsResponse
     */
    public function setBuyerLastName(?string $buyerLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerLastName) && !is_string($buyerLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerLastName, true), gettype($buyerLastName)), __LINE__);
        }
        if (is_null($buyerLastName)) {
            unset($this->BuyerLastName);
        } else {
            $this->BuyerLastName = $buyerLastName;
        }

        return $this;
    }
}
