<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for miscDataPair StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains map data formatted as key/value
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class MiscDataPair extends AbstractStructBase
{
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;

    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $value = null;

    /**
     * Constructor method for miscDataPair
     * @param string|null $key
     * @param string|null $value
     * @uses MiscDataPair::setKey()
     * @uses MiscDataPair::setValue()
     */
    public function __construct(?string $key = null, ?string $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }

    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Set key value
     * @param string|null $key
     * @return MiscDataPair
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;

        return $this;
    }

    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value value
     * @param string|null $value
     * @return MiscDataPair
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }
}
