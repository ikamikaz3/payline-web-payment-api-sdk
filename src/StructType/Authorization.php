<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authorization StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the authorization
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Authorization extends AbstractStructBase
{
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The authorizedAmount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $authorizedAmount = null;
    /**
     * The authorizedCurrency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $authorizedCurrency = null;
    /**
     * The reattempt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Reattempt|null
     */
    protected ?\StructType\Reattempt $reattempt = null;
    /**
     * Constructor method for authorization
     * @uses Authorization::setNumber()
     * @uses Authorization::setDate()
     * @uses Authorization::setAuthorizedAmount()
     * @uses Authorization::setAuthorizedCurrency()
     * @uses Authorization::setReattempt()
     * @param string $number
     * @param string $date
     * @param string $authorizedAmount
     * @param string $authorizedCurrency
     * @param \StructType\Reattempt $reattempt
     */
    public function __construct(?string $number = null, ?string $date = null, ?string $authorizedAmount = null, ?string $authorizedCurrency = null, ?\StructType\Reattempt $reattempt = null)
    {
        $this
            ->setNumber($number)
            ->setDate($date)
            ->setAuthorizedAmount($authorizedAmount)
            ->setAuthorizedCurrency($authorizedCurrency)
            ->setReattempt($reattempt);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \StructType\Authorization
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        
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
     * @return \StructType\Authorization
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
     * Get authorizedAmount value
     * @return string|null
     */
    public function getAuthorizedAmount(): ?string
    {
        return $this->authorizedAmount;
    }
    /**
     * Set authorizedAmount value
     * @param string $authorizedAmount
     * @return \StructType\Authorization
     */
    public function setAuthorizedAmount(?string $authorizedAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizedAmount) && !is_string($authorizedAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizedAmount, true), gettype($authorizedAmount)), __LINE__);
        }
        $this->authorizedAmount = $authorizedAmount;
        
        return $this;
    }
    /**
     * Get authorizedCurrency value
     * @return string|null
     */
    public function getAuthorizedCurrency(): ?string
    {
        return $this->authorizedCurrency;
    }
    /**
     * Set authorizedCurrency value
     * @param string $authorizedCurrency
     * @return \StructType\Authorization
     */
    public function setAuthorizedCurrency(?string $authorizedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizedCurrency) && !is_string($authorizedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizedCurrency, true), gettype($authorizedCurrency)), __LINE__);
        }
        $this->authorizedCurrency = $authorizedCurrency;
        
        return $this;
    }
    /**
     * Get reattempt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Reattempt|null
     */
    public function getReattempt(): ?\StructType\Reattempt
    {
        return $this->reattempt ?? null;
    }
    /**
     * Set reattempt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Reattempt $reattempt
     * @return \StructType\Authorization
     */
    public function setReattempt(?\StructType\Reattempt $reattempt = null): self
    {
        if (is_null($reattempt) || (is_array($reattempt) && empty($reattempt))) {
            unset($this->reattempt);
        } else {
            $this->reattempt = $reattempt;
        }
        
        return $this;
    }
}
