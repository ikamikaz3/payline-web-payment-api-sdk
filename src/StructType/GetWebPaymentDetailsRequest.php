<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebPaymentDetailsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getWebPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWebPaymentDetailsRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * Constructor method for getWebPaymentDetailsRequest
     * @uses GetWebPaymentDetailsRequest::setVersion()
     * @uses GetWebPaymentDetailsRequest::setToken()
     * @param string $version
     * @param string $token
     */
    public function __construct(?string $version = null, ?string $token = null)
    {
        $this
            ->setVersion($version)
            ->setToken($token);
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
     * @param string $version
     * @return \StructType\GetWebPaymentDetailsRequest
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
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \StructType\GetWebPaymentDetailsRequest
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
}
