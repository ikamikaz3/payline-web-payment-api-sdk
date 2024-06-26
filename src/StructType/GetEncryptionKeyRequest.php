<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEncryptionKeyRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the getEncryptionKeyRequest method
 * @subpackage Structs
 */
class GetEncryptionKeyRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * The merchantKeyName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $merchantKeyName = null;

    /**
     * Constructor method for getEncryptionKeyRequest
     * @param string|null $version
     * @param string|null $merchantKeyName
     * @uses GetEncryptionKeyRequest::setVersion()
     * @uses GetEncryptionKeyRequest::setMerchantKeyName()
     */
    public function __construct(?string $version = null, ?string $merchantKeyName = null)
    {
        $this
            ->setVersion($version)
            ->setMerchantKeyName($merchantKeyName);
    }

    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set version value
     * @param string|null $version
     * @return GetEncryptionKeyRequest
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;

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
     * @return GetEncryptionKeyRequest
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
}
