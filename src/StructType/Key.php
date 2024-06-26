<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for key StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the encryptionKey
 * @subpackage Structs
 */
class Key extends AbstractStructBase
{
    /**
     * The keyId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var int|null
     */
    protected ?int $keyId = null;

    /**
     * The modulus
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $modulus = null;

    /**
     * The merchantKeyName
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $merchantKeyName = null;

    /**
     * The publicExponent
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $publicExponent = null;

    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $expirationDate = null;

    /**
     * The cipher
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cipher = null;

    /**
     * The algo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $algo = null;

    /**
     * The size
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $size = null;

    /**
     * Constructor method for key
     * @param int|null $keyId
     * @param string|null $modulus
     * @param string|null $merchantKeyName
     * @param string|null $publicExponent
     * @param string|null $expirationDate
     * @param string|null $cipher
     * @param string|null $algo
     * @param int|null $size
     * @uses Key::setKeyId()
     * @uses Key::setModulus()
     * @uses Key::setMerchantKeyName()
     * @uses Key::setPublicExponent()
     * @uses Key::setExpirationDate()
     * @uses Key::setCipher()
     * @uses Key::setAlgo()
     * @uses Key::setSize()
     */
    public function __construct(?int $keyId = null, ?string $modulus = null, ?string $merchantKeyName = null, ?string $publicExponent = null, ?string $expirationDate = null, ?string $cipher = null, ?string $algo = null, ?int $size = null)
    {
        $this
            ->setKeyId($keyId)
            ->setModulus($modulus)
            ->setMerchantKeyName($merchantKeyName)
            ->setPublicExponent($publicExponent)
            ->setExpirationDate($expirationDate)
            ->setCipher($cipher)
            ->setAlgo($algo)
            ->setSize($size);
    }

    /**
     * Get keyId value
     * @return int|null
     */
    public function getKeyId(): ?int
    {
        return $this->keyId;
    }

    /**
     * Set keyId value
     * @param int|null $keyId
     * @return Key
     */
    public function setKeyId(?int $keyId = null): self
    {
        // validation for constraint: int
        $this->keyId = $keyId;

        return $this;
    }

    /**
     * Get modulus value
     * @return string|null
     */
    public function getModulus(): ?string
    {
        return $this->modulus;
    }

    /**
     * Set modulus value
     * @param string|null $modulus
     * @return Key
     */
    public function setModulus(?string $modulus = null): self
    {
        // validation for constraint: string
        if (!is_null($modulus) && !is_string($modulus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modulus, true), gettype($modulus)), __LINE__);
        }
        $this->modulus = $modulus;

        return $this;
    }

    /**
     * Get merchantKeyName value
     * @return string|null
     */
    public function getMerchantKeyName(): ?string
    {
        return $this->merchantKeyName;
    }

    /**
     * Set merchantKeyName value
     * @param string|null $merchantKeyName
     * @return Key
     */
    public function setMerchantKeyName(?string $merchantKeyName = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantKeyName) && !is_string($merchantKeyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantKeyName, true), gettype($merchantKeyName)), __LINE__);
        }
        $this->merchantKeyName = $merchantKeyName;

        return $this;
    }

    /**
     * Get publicExponent value
     * @return string|null
     */
    public function getPublicExponent(): ?string
    {
        return $this->publicExponent;
    }

    /**
     * Set publicExponent value
     * @param string|null $publicExponent
     * @return Key
     */
    public function setPublicExponent(?string $publicExponent = null): self
    {
        // validation for constraint: string
        if (!is_null($publicExponent) && !is_string($publicExponent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publicExponent, true), gettype($publicExponent)), __LINE__);
        }
        $this->publicExponent = $publicExponent;

        return $this;
    }

    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * Set expirationDate value
     * @param string|null $expirationDate
     * @return Key
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get cipher value
     * @return string|null
     */
    public function getCipher(): ?string
    {
        return $this->cipher;
    }

    /**
     * Set cipher value
     * @param string|null $cipher
     * @return Key
     */
    public function setCipher(?string $cipher = null): self
    {
        // validation for constraint: string
        if (!is_null($cipher) && !is_string($cipher)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cipher, true), gettype($cipher)), __LINE__);
        }
        $this->cipher = $cipher;

        return $this;
    }

    /**
     * Get algo value
     * @return string|null
     */
    public function getAlgo(): ?string
    {
        return $this->algo;
    }

    /**
     * Set algo value
     * @param string|null $algo
     * @return Key
     */
    public function setAlgo(?string $algo = null): self
    {
        // validation for constraint: string
        if (!is_null($algo) && !is_string($algo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($algo, true), gettype($algo)), __LINE__);
        }
        $this->algo = $algo;

        return $this;
    }

    /**
     * Get size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * Set size value
     * @param int|null $size
     * @return Key
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        $this->size = $size;

        return $this;
    }
}
