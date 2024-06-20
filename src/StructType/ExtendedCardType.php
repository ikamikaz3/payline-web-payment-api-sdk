<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for extendedCardType StructType
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class ExtendedCardType extends AbstractStructBase
{
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $country = null;

    /**
     * The isCvd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $isCvd = null;

    /**
     * The bank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $bank = null;

    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;

    /**
     * The network
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $network = null;

    /**
     * The product
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $product = null;

    /**
     * Constructor method for extendedCardType
     * @param string|null $country
     * @param string|null $isCvd
     * @param string|null $bank
     * @param string|null $type
     * @param string|null $network
     * @param string|null $product
     * @uses ExtendedCardType::setCountry()
     * @uses ExtendedCardType::setIsCvd()
     * @uses ExtendedCardType::setBank()
     * @uses ExtendedCardType::setType()
     * @uses ExtendedCardType::setNetwork()
     * @uses ExtendedCardType::setProduct()
     */
    public function __construct(?string $country = null, ?string $isCvd = null, ?string $bank = null, ?string $type = null, ?string $network = null, ?string $product = null)
    {
        $this
            ->setCountry($country)
            ->setIsCvd($isCvd)
            ->setBank($bank)
            ->setType($type)
            ->setNetwork($network)
            ->setProduct($product);
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
     * @param string|null $country
     * @return ExtendedCardType
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        if (is_null($country)) {
            unset($this->country);
        } else {
            $this->country = $country;
        }

        return $this;
    }

    /**
     * Get isCvd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIsCvd(): ?string
    {
        return $this->isCvd ?? null;
    }

    /**
     * Set isCvd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $isCvd
     * @return ExtendedCardType
     */
    public function setIsCvd(?string $isCvd = null): self
    {
        // validation for constraint: string
        if (!is_null($isCvd) && !is_string($isCvd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isCvd, true), gettype($isCvd)), __LINE__);
        }
        if (is_null($isCvd)) {
            unset($this->isCvd);
        } else {
            $this->isCvd = $isCvd;
        }

        return $this;
    }

    /**
     * Get bank value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank ?? null;
    }

    /**
     * Set bank value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $bank
     * @return ExtendedCardType
     */
    public function setBank(?string $bank = null): self
    {
        // validation for constraint: string
        if (!is_null($bank) && !is_string($bank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank, true), gettype($bank)), __LINE__);
        }
        if (is_null($bank)) {
            unset($this->bank);
        } else {
            $this->bank = $bank;
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
     * @param string|null $type
     * @return ExtendedCardType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        if (is_null($type)) {
            unset($this->type);
        } else {
            $this->type = $type;
        }

        return $this;
    }

    /**
     * Get network value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNetwork(): ?string
    {
        return $this->network ?? null;
    }

    /**
     * Set network value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $network
     * @return ExtendedCardType
     */
    public function setNetwork(?string $network = null): self
    {
        // validation for constraint: string
        if (!is_null($network) && !is_string($network)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($network, true), gettype($network)), __LINE__);
        }
        if (is_null($network)) {
            unset($this->network);
        } else {
            $this->network = $network;
        }

        return $this;
    }

    /**
     * Get product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProduct(): ?string
    {
        return $this->product ?? null;
    }

    /**
     * Set product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $product
     * @return ExtendedCardType
     */
    public function setProduct(?string $product = null): self
    {
        // validation for constraint: string
        if (!is_null($product) && !is_string($product)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product, true), gettype($product)), __LINE__);
        }
        if (is_null($product)) {
            unset($this->product);
        } else {
            $this->product = $product;
        }

        return $this;
    }
}
