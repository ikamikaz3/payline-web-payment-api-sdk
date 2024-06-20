<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for payment StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the payment
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Payment extends AbstractStructBase
{
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The action
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $mode = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $amount = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The differedActionDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $differedActionDate = null;
    /**
     * The method
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $method = null;
    /**
     * The softDescriptor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $softDescriptor = null;
    /**
     * The cardBrand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardBrand = null;
    /**
     * The registrationToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $registrationToken = null;
    /**
     * The cumulatedAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cumulatedAmount = null;
    /**
     * Constructor method for payment
     * @uses Payment::setCurrency()
     * @uses Payment::setAction()
     * @uses Payment::setMode()
     * @uses Payment::setAmount()
     * @uses Payment::setContractNumber()
     * @uses Payment::setDifferedActionDate()
     * @uses Payment::setMethod()
     * @uses Payment::setSoftDescriptor()
     * @uses Payment::setCardBrand()
     * @uses Payment::setRegistrationToken()
     * @uses Payment::setCumulatedAmount()
     * @param string $currency
     * @param string $action
     * @param string $mode
     * @param string $amount
     * @param string $contractNumber
     * @param string $differedActionDate
     * @param string $method
     * @param string $softDescriptor
     * @param string $cardBrand
     * @param string $registrationToken
     * @param string $cumulatedAmount
     */
    public function __construct(?string $currency = null, ?string $action = null, ?string $mode = null, ?string $amount = null, ?string $contractNumber = null, ?string $differedActionDate = null, ?string $method = null, ?string $softDescriptor = null, ?string $cardBrand = null, ?string $registrationToken = null, ?string $cumulatedAmount = null)
    {
        $this
            ->setCurrency($currency)
            ->setAction($action)
            ->setMode($mode)
            ->setAmount($amount)
            ->setContractNumber($contractNumber)
            ->setDifferedActionDate($differedActionDate)
            ->setMethod($method)
            ->setSoftDescriptor($softDescriptor)
            ->setCardBrand($cardBrand)
            ->setRegistrationToken($registrationToken)
            ->setCumulatedAmount($cumulatedAmount);
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
     * @param string $currency
     * @return \StructType\Payment
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
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \StructType\Payment
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \StructType\Payment
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        
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
     * @param string $amount
     * @return \StructType\Payment
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
     * Get contractNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber ?? null;
    }
    /**
     * Set contractNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contractNumber
     * @return \StructType\Payment
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        if (is_null($contractNumber) || (is_array($contractNumber) && empty($contractNumber))) {
            unset($this->contractNumber);
        } else {
            $this->contractNumber = $contractNumber;
        }
        
        return $this;
    }
    /**
     * Get differedActionDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDifferedActionDate(): ?string
    {
        return $this->differedActionDate ?? null;
    }
    /**
     * Set differedActionDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $differedActionDate
     * @return \StructType\Payment
     */
    public function setDifferedActionDate(?string $differedActionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($differedActionDate) && !is_string($differedActionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($differedActionDate, true), gettype($differedActionDate)), __LINE__);
        }
        if (is_null($differedActionDate) || (is_array($differedActionDate) && empty($differedActionDate))) {
            unset($this->differedActionDate);
        } else {
            $this->differedActionDate = $differedActionDate;
        }
        
        return $this;
    }
    /**
     * Get method value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method ?? null;
    }
    /**
     * Set method value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $method
     * @return \StructType\Payment
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        if (is_null($method) || (is_array($method) && empty($method))) {
            unset($this->method);
        } else {
            $this->method = $method;
        }
        
        return $this;
    }
    /**
     * Get softDescriptor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSoftDescriptor(): ?string
    {
        return $this->softDescriptor ?? null;
    }
    /**
     * Set softDescriptor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $softDescriptor
     * @return \StructType\Payment
     */
    public function setSoftDescriptor(?string $softDescriptor = null): self
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softDescriptor, true), gettype($softDescriptor)), __LINE__);
        }
        if (is_null($softDescriptor) || (is_array($softDescriptor) && empty($softDescriptor))) {
            unset($this->softDescriptor);
        } else {
            $this->softDescriptor = $softDescriptor;
        }
        
        return $this;
    }
    /**
     * Get cardBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardBrand(): ?string
    {
        return $this->cardBrand ?? null;
    }
    /**
     * Set cardBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardBrand
     * @return \StructType\Payment
     */
    public function setCardBrand(?string $cardBrand = null): self
    {
        // validation for constraint: string
        if (!is_null($cardBrand) && !is_string($cardBrand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardBrand, true), gettype($cardBrand)), __LINE__);
        }
        if (is_null($cardBrand) || (is_array($cardBrand) && empty($cardBrand))) {
            unset($this->cardBrand);
        } else {
            $this->cardBrand = $cardBrand;
        }
        
        return $this;
    }
    /**
     * Get registrationToken value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationToken(): ?string
    {
        return $this->registrationToken ?? null;
    }
    /**
     * Set registrationToken value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationToken
     * @return \StructType\Payment
     */
    public function setRegistrationToken(?string $registrationToken = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationToken) && !is_string($registrationToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationToken, true), gettype($registrationToken)), __LINE__);
        }
        if (is_null($registrationToken) || (is_array($registrationToken) && empty($registrationToken))) {
            unset($this->registrationToken);
        } else {
            $this->registrationToken = $registrationToken;
        }
        
        return $this;
    }
    /**
     * Get cumulatedAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCumulatedAmount(): ?string
    {
        return $this->cumulatedAmount ?? null;
    }
    /**
     * Set cumulatedAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cumulatedAmount
     * @return \StructType\Payment
     */
    public function setCumulatedAmount(?string $cumulatedAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($cumulatedAmount) && !is_string($cumulatedAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cumulatedAmount, true), gettype($cumulatedAmount)), __LINE__);
        }
        if (is_null($cumulatedAmount) || (is_array($cumulatedAmount) && empty($cumulatedAmount))) {
            unset($this->cumulatedAmount);
        } else {
            $this->cumulatedAmount = $cumulatedAmount;
        }
        
        return $this;
    }
}
