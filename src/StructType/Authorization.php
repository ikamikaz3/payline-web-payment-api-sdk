<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authorization StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the authorization
 * @subpackage Structs
 */
#[AllowDynamicProperties]
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
     * @var Reattempt|null
     */
    protected ?Reattempt $reattempt = null;

    /**
     * Constructor method for authorization
     * @param string|null $number
     * @param string|null $date
     * @param string|null $authorizedAmount
     * @param string|null $authorizedCurrency
     * @param Reattempt|null $reattempt
     * @uses Authorization::setNumber()
     * @uses Authorization::setDate()
     * @uses Authorization::setAuthorizedAmount()
     * @uses Authorization::setAuthorizedCurrency()
     * @uses Authorization::setReattempt()
     */
    public function __construct(?string $number = null, ?string $date = null, ?string $authorizedAmount = null, ?string $authorizedCurrency = null, ?Reattempt $reattempt = null)
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
     * @param string|null $number
     * @return Authorization
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
     * @param string|null $date
     * @return Authorization
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
     * @param string|null $authorizedAmount
     * @return Authorization
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
     * @param string|null $authorizedCurrency
     * @return Authorization
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
     * @return Reattempt|null
     */
    public function getReattempt(): ?Reattempt
    {
        return $this->reattempt ?? null;
    }

    /**
     * Set reattempt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Reattempt|null $reattempt
     * @return Authorization
     */
    public function setReattempt(?Reattempt $reattempt = null): self
    {
        if (is_null($reattempt)) {
            unset($this->reattempt);
        } else {
            $this->reattempt = $reattempt;
        }

        return $this;
    }
}
