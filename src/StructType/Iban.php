<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for iban StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains IBAN information
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Iban extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $CountryCode = null;

    /**
     * The checkKey
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $checkKey = null;

    /**
     * The BBAN
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $BBAN = null;

    /**
     * The BIC
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $BIC = null;

    /**
     * Constructor method for iban
     * @param string|null $countryCode
     * @param string|null $checkKey
     * @param string|null $bBAN
     * @param string|null $bIC
     * @uses Iban::setCountryCode()
     * @uses Iban::setCheckKey()
     * @uses Iban::setBBAN()
     * @uses Iban::setBIC()
     */
    public function __construct(?string $countryCode = null, ?string $checkKey = null, ?string $bBAN = null, ?string $bIC = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setCheckKey($checkKey)
            ->setBBAN($bBAN)
            ->setBIC($bIC);
    }

    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }

    /**
     * Set CountryCode value
     * @param string|null $countryCode
     * @return Iban
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;

        return $this;
    }

    /**
     * Get checkKey value
     * @return string|null
     */
    public function getCheckKey(): ?string
    {
        return $this->checkKey;
    }

    /**
     * Set checkKey value
     * @param string|null $checkKey
     * @return Iban
     */
    public function setCheckKey(?string $checkKey = null): self
    {
        // validation for constraint: string
        if (!is_null($checkKey) && !is_string($checkKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkKey, true), gettype($checkKey)), __LINE__);
        }
        $this->checkKey = $checkKey;

        return $this;
    }

    /**
     * Get BBAN value
     * @return string|null
     */
    public function getBBAN(): ?string
    {
        return $this->BBAN;
    }

    /**
     * Set BBAN value
     * @param string|null $bBAN
     * @return Iban
     */
    public function setBBAN(?string $bBAN = null): self
    {
        // validation for constraint: string
        if (!is_null($bBAN) && !is_string($bBAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bBAN, true), gettype($bBAN)), __LINE__);
        }
        $this->BBAN = $bBAN;

        return $this;
    }

    /**
     * Get BIC value
     * @return string|null
     */
    public function getBIC(): ?string
    {
        return $this->BIC;
    }

    /**
     * Set BIC value
     * @param string|null $bIC
     * @return Iban
     */
    public function setBIC(?string $bIC = null): self
    {
        // validation for constraint: string
        if (!is_null($bIC) && !is_string($bIC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bIC, true), gettype($bIC)), __LINE__);
        }
        $this->BIC = $bIC;

        return $this;
    }
}
