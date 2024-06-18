<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for order StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the order
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Order extends AbstractStructBase
{
    /**
     * The ref
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $ref = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $amount = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The origin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $origin = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The taxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $taxes = null;
    /**
     * The details
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Details|null
     */
    protected ?\StructType\Details $details = null;
    /**
     * The deliveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $deliveryTime = null;
    /**
     * The deliveryMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $deliveryMode = null;
    /**
     * The deliveryExpectedDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $deliveryExpectedDate = null;
    /**
     * The deliveryExpectedDelay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $deliveryExpectedDelay = null;
    /**
     * The deliveryCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $deliveryCharge = null;
    /**
     * The discountAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $discountAmount = null;
    /**
     * The otaPackageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $otaPackageType = null;
    /**
     * The otaDestinationCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $otaDestinationCountry = null;
    /**
     * The bookingReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $bookingReference = null;
    /**
     * The orderDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderDetail = null;
    /**
     * The orderExtended
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderExtended = null;
    /**
     * The orderOTA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderOTA = null;
    /**
     * Constructor method for order
     * @uses Order::setRef()
     * @uses Order::setAmount()
     * @uses Order::setCurrency()
     * @uses Order::setDate()
     * @uses Order::setOrigin()
     * @uses Order::setCountry()
     * @uses Order::setTaxes()
     * @uses Order::setDetails()
     * @uses Order::setDeliveryTime()
     * @uses Order::setDeliveryMode()
     * @uses Order::setDeliveryExpectedDate()
     * @uses Order::setDeliveryExpectedDelay()
     * @uses Order::setDeliveryCharge()
     * @uses Order::setDiscountAmount()
     * @uses Order::setOtaPackageType()
     * @uses Order::setOtaDestinationCountry()
     * @uses Order::setBookingReference()
     * @uses Order::setOrderDetail()
     * @uses Order::setOrderExtended()
     * @uses Order::setOrderOTA()
     * @param string $ref
     * @param string $amount
     * @param string $currency
     * @param string $date
     * @param string $origin
     * @param string $country
     * @param string $taxes
     * @param \StructType\Details $details
     * @param string $deliveryTime
     * @param string $deliveryMode
     * @param string $deliveryExpectedDate
     * @param string $deliveryExpectedDelay
     * @param string $deliveryCharge
     * @param string $discountAmount
     * @param string $otaPackageType
     * @param string $otaDestinationCountry
     * @param string $bookingReference
     * @param string $orderDetail
     * @param string $orderExtended
     * @param string $orderOTA
     */
    public function __construct(?string $ref = null, ?string $amount = null, ?string $currency = null, ?string $date = null, ?string $origin = null, ?string $country = null, ?string $taxes = null, ?\StructType\Details $details = null, ?string $deliveryTime = null, ?string $deliveryMode = null, ?string $deliveryExpectedDate = null, ?string $deliveryExpectedDelay = null, ?string $deliveryCharge = null, ?string $discountAmount = null, ?string $otaPackageType = null, ?string $otaDestinationCountry = null, ?string $bookingReference = null, ?string $orderDetail = null, ?string $orderExtended = null, ?string $orderOTA = null)
    {
        $this
            ->setRef($ref)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setDate($date)
            ->setOrigin($origin)
            ->setCountry($country)
            ->setTaxes($taxes)
            ->setDetails($details)
            ->setDeliveryTime($deliveryTime)
            ->setDeliveryMode($deliveryMode)
            ->setDeliveryExpectedDate($deliveryExpectedDate)
            ->setDeliveryExpectedDelay($deliveryExpectedDelay)
            ->setDeliveryCharge($deliveryCharge)
            ->setDiscountAmount($discountAmount)
            ->setOtaPackageType($otaPackageType)
            ->setOtaDestinationCountry($otaDestinationCountry)
            ->setBookingReference($bookingReference)
            ->setOrderDetail($orderDetail)
            ->setOrderExtended($orderExtended)
            ->setOrderOTA($orderOTA);
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \StructType\Order
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        
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
     * @return \StructType\Order
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
     * @param string $currency
     * @return \StructType\Order
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \StructType\Order
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
        return $this;
    }
    /**
     * Get origin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin ?? null;
    }
    /**
     * Set origin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $origin
     * @return \StructType\Order
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        if (is_null($origin) || (is_array($origin) && empty($origin))) {
            unset($this->origin);
        } else {
            $this->origin = $origin;
        }
        
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country ?? null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \StructType\Order
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        
        return $this;
    }
    /**
     * Get taxes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->taxes ?? null;
    }
    /**
     * Set taxes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $taxes
     * @return \StructType\Order
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
        if (is_null($taxes) || (is_array($taxes) && empty($taxes))) {
            unset($this->taxes);
        } else {
            $this->taxes = $taxes;
        }
        
        return $this;
    }
    /**
     * Get details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Details|null
     */
    public function getDetails(): ?\StructType\Details
    {
        return $this->details ?? null;
    }
    /**
     * Set details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Details $details
     * @return \StructType\Order
     */
    public function setDetails(?\StructType\Details $details = null): self
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->details);
        } else {
            $this->details = $details;
        }
        
        return $this;
    }
    /**
     * Get deliveryTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryTime(): ?string
    {
        return $this->deliveryTime ?? null;
    }
    /**
     * Set deliveryTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryTime
     * @return \StructType\Order
     */
    public function setDeliveryTime(?string $deliveryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTime) && !is_string($deliveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTime, true), gettype($deliveryTime)), __LINE__);
        }
        if (is_null($deliveryTime) || (is_array($deliveryTime) && empty($deliveryTime))) {
            unset($this->deliveryTime);
        } else {
            $this->deliveryTime = $deliveryTime;
        }
        
        return $this;
    }
    /**
     * Get deliveryMode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryMode(): ?string
    {
        return $this->deliveryMode ?? null;
    }
    /**
     * Set deliveryMode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryMode
     * @return \StructType\Order
     */
    public function setDeliveryMode(?string $deliveryMode = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryMode) && !is_string($deliveryMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMode, true), gettype($deliveryMode)), __LINE__);
        }
        if (is_null($deliveryMode) || (is_array($deliveryMode) && empty($deliveryMode))) {
            unset($this->deliveryMode);
        } else {
            $this->deliveryMode = $deliveryMode;
        }
        
        return $this;
    }
    /**
     * Get deliveryExpectedDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryExpectedDate(): ?string
    {
        return $this->deliveryExpectedDate ?? null;
    }
    /**
     * Set deliveryExpectedDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryExpectedDate
     * @return \StructType\Order
     */
    public function setDeliveryExpectedDate(?string $deliveryExpectedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryExpectedDate) && !is_string($deliveryExpectedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryExpectedDate, true), gettype($deliveryExpectedDate)), __LINE__);
        }
        if (is_null($deliveryExpectedDate) || (is_array($deliveryExpectedDate) && empty($deliveryExpectedDate))) {
            unset($this->deliveryExpectedDate);
        } else {
            $this->deliveryExpectedDate = $deliveryExpectedDate;
        }
        
        return $this;
    }
    /**
     * Get deliveryExpectedDelay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryExpectedDelay(): ?string
    {
        return $this->deliveryExpectedDelay ?? null;
    }
    /**
     * Set deliveryExpectedDelay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryExpectedDelay
     * @return \StructType\Order
     */
    public function setDeliveryExpectedDelay(?string $deliveryExpectedDelay = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryExpectedDelay) && !is_string($deliveryExpectedDelay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryExpectedDelay, true), gettype($deliveryExpectedDelay)), __LINE__);
        }
        if (is_null($deliveryExpectedDelay) || (is_array($deliveryExpectedDelay) && empty($deliveryExpectedDelay))) {
            unset($this->deliveryExpectedDelay);
        } else {
            $this->deliveryExpectedDelay = $deliveryExpectedDelay;
        }
        
        return $this;
    }
    /**
     * Get deliveryCharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryCharge(): ?string
    {
        return $this->deliveryCharge ?? null;
    }
    /**
     * Set deliveryCharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryCharge
     * @return \StructType\Order
     */
    public function setDeliveryCharge(?string $deliveryCharge = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryCharge) && !is_string($deliveryCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryCharge, true), gettype($deliveryCharge)), __LINE__);
        }
        if (is_null($deliveryCharge) || (is_array($deliveryCharge) && empty($deliveryCharge))) {
            unset($this->deliveryCharge);
        } else {
            $this->deliveryCharge = $deliveryCharge;
        }
        
        return $this;
    }
    /**
     * Get discountAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount ?? null;
    }
    /**
     * Set discountAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $discountAmount
     * @return \StructType\Order
     */
    public function setDiscountAmount(?string $discountAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($discountAmount) && !is_string($discountAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountAmount, true), gettype($discountAmount)), __LINE__);
        }
        if (is_null($discountAmount) || (is_array($discountAmount) && empty($discountAmount))) {
            unset($this->discountAmount);
        } else {
            $this->discountAmount = $discountAmount;
        }
        
        return $this;
    }
    /**
     * Get otaPackageType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtaPackageType(): ?string
    {
        return $this->otaPackageType ?? null;
    }
    /**
     * Set otaPackageType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otaPackageType
     * @return \StructType\Order
     */
    public function setOtaPackageType(?string $otaPackageType = null): self
    {
        // validation for constraint: string
        if (!is_null($otaPackageType) && !is_string($otaPackageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otaPackageType, true), gettype($otaPackageType)), __LINE__);
        }
        if (is_null($otaPackageType) || (is_array($otaPackageType) && empty($otaPackageType))) {
            unset($this->otaPackageType);
        } else {
            $this->otaPackageType = $otaPackageType;
        }
        
        return $this;
    }
    /**
     * Get otaDestinationCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtaDestinationCountry(): ?string
    {
        return $this->otaDestinationCountry ?? null;
    }
    /**
     * Set otaDestinationCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otaDestinationCountry
     * @return \StructType\Order
     */
    public function setOtaDestinationCountry(?string $otaDestinationCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($otaDestinationCountry) && !is_string($otaDestinationCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otaDestinationCountry, true), gettype($otaDestinationCountry)), __LINE__);
        }
        if (is_null($otaDestinationCountry) || (is_array($otaDestinationCountry) && empty($otaDestinationCountry))) {
            unset($this->otaDestinationCountry);
        } else {
            $this->otaDestinationCountry = $otaDestinationCountry;
        }
        
        return $this;
    }
    /**
     * Get bookingReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBookingReference(): ?string
    {
        return $this->bookingReference ?? null;
    }
    /**
     * Set bookingReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bookingReference
     * @return \StructType\Order
     */
    public function setBookingReference(?string $bookingReference = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingReference) && !is_string($bookingReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingReference, true), gettype($bookingReference)), __LINE__);
        }
        if (is_null($bookingReference) || (is_array($bookingReference) && empty($bookingReference))) {
            unset($this->bookingReference);
        } else {
            $this->bookingReference = $bookingReference;
        }
        
        return $this;
    }
    /**
     * Get orderDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderDetail(): ?string
    {
        return $this->orderDetail ?? null;
    }
    /**
     * Set orderDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderDetail
     * @return \StructType\Order
     */
    public function setOrderDetail(?string $orderDetail = null): self
    {
        // validation for constraint: string
        if (!is_null($orderDetail) && !is_string($orderDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDetail, true), gettype($orderDetail)), __LINE__);
        }
        if (is_null($orderDetail) || (is_array($orderDetail) && empty($orderDetail))) {
            unset($this->orderDetail);
        } else {
            $this->orderDetail = $orderDetail;
        }
        
        return $this;
    }
    /**
     * Get orderExtended value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderExtended(): ?string
    {
        return $this->orderExtended ?? null;
    }
    /**
     * Set orderExtended value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderExtended
     * @return \StructType\Order
     */
    public function setOrderExtended(?string $orderExtended = null): self
    {
        // validation for constraint: string
        if (!is_null($orderExtended) && !is_string($orderExtended)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderExtended, true), gettype($orderExtended)), __LINE__);
        }
        if (is_null($orderExtended) || (is_array($orderExtended) && empty($orderExtended))) {
            unset($this->orderExtended);
        } else {
            $this->orderExtended = $orderExtended;
        }
        
        return $this;
    }
    /**
     * Get orderOTA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderOTA(): ?string
    {
        return $this->orderOTA ?? null;
    }
    /**
     * Set orderOTA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderOTA
     * @return \StructType\Order
     */
    public function setOrderOTA(?string $orderOTA = null): self
    {
        // validation for constraint: string
        if (!is_null($orderOTA) && !is_string($orderOTA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderOTA, true), gettype($orderOTA)), __LINE__);
        }
        if (is_null($orderOTA) || (is_array($orderOTA) && empty($orderOTA))) {
            unset($this->orderOTA);
        } else {
            $this->orderOTA = $orderOTA;
        }
        
        return $this;
    }
}
