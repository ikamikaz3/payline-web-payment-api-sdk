<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cardOut StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CardOut extends AbstractStructBase
{
    /**
     * The number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $expirationDate = null;
    /**
     * The cardholder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardholder = null;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The panType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $panType = null;
    /**
     * Constructor method for cardOut
     * @uses CardOut::setNumber()
     * @uses CardOut::setType()
     * @uses CardOut::setExpirationDate()
     * @uses CardOut::setCardholder()
     * @uses CardOut::setToken()
     * @uses CardOut::setPanType()
     * @param string $number
     * @param string $type
     * @param string $expirationDate
     * @param string $cardholder
     * @param string $token
     * @param string $panType
     */
    public function __construct(?string $number = null, ?string $type = null, ?string $expirationDate = null, ?string $cardholder = null, ?string $token = null, ?string $panType = null)
    {
        $this
            ->setNumber($number)
            ->setType($type)
            ->setExpirationDate($expirationDate)
            ->setCardholder($cardholder)
            ->setToken($token)
            ->setPanType($panType);
    }
    /**
     * Get number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number ?? null;
    }
    /**
     * Set number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \StructType\CardOut
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->number);
        } else {
            $this->number = $number;
        }
        
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \StructType\CardOut
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        
        return $this;
    }
    /**
     * Get expirationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate ?? null;
    }
    /**
     * Set expirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDate
     * @return \StructType\CardOut
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        if (is_null($expirationDate) || (is_array($expirationDate) && empty($expirationDate))) {
            unset($this->expirationDate);
        } else {
            $this->expirationDate = $expirationDate;
        }
        
        return $this;
    }
    /**
     * Get cardholder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardholder(): ?string
    {
        return $this->cardholder ?? null;
    }
    /**
     * Set cardholder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardholder
     * @return \StructType\CardOut
     */
    public function setCardholder(?string $cardholder = null): self
    {
        // validation for constraint: string
        if (!is_null($cardholder) && !is_string($cardholder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardholder, true), gettype($cardholder)), __LINE__);
        }
        if (is_null($cardholder) || (is_array($cardholder) && empty($cardholder))) {
            unset($this->cardholder);
        } else {
            $this->cardholder = $cardholder;
        }
        
        return $this;
    }
    /**
     * Get token value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token ?? null;
    }
    /**
     * Set token value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $token
     * @return \StructType\CardOut
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        if (is_null($token) || (is_array($token) && empty($token))) {
            unset($this->token);
        } else {
            $this->token = $token;
        }
        
        return $this;
    }
    /**
     * Get panType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPanType(): ?string
    {
        return $this->panType ?? null;
    }
    /**
     * Set panType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $panType
     * @return \StructType\CardOut
     */
    public function setPanType(?string $panType = null): self
    {
        // validation for constraint: string
        if (!is_null($panType) && !is_string($panType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($panType, true), gettype($panType)), __LINE__);
        }
        if (is_null($panType) || (is_array($panType) && empty($panType))) {
            unset($this->panType);
        } else {
            $this->panType = $panType;
        }
        
        return $this;
    }
}
