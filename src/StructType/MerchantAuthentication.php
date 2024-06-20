<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for merchantAuthentication StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about SDK.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MerchantAuthentication extends AbstractStructBase
{
    /**
     * The method
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $method = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * Constructor method for merchantAuthentication
     * @uses MerchantAuthentication::setMethod()
     * @uses MerchantAuthentication::setDate()
     * @param string $method
     * @param string $date
     */
    public function __construct(?string $method = null, ?string $date = null)
    {
        $this
            ->setMethod($method)
            ->setDate($date);
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \StructType\MerchantAuthentication
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        $this->method = $method;
        
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
     * @return \StructType\MerchantAuthentication
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
}
