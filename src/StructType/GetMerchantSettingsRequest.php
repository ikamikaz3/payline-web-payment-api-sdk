<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMerchantSettingsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the getMerchantSettings method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetMerchantSettingsRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * Constructor method for getMerchantSettingsRequest
     * @param string|null $version
     * @uses GetMerchantSettingsRequest::setVersion()
     */
    public function __construct(?string $version = null)
    {
        $this
            ->setVersion($version);
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
     * @return GetMerchantSettingsRequest
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
}
