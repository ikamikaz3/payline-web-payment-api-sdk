<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customPaymentPageCode StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains all information about customPaymentPageCode
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomPaymentPageCode extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for customPaymentPageCode
     * @uses CustomPaymentPageCode::setCode()
     * @uses CustomPaymentPageCode::setLabel()
     * @uses CustomPaymentPageCode::setType()
     * @param string $code
     * @param string $label
     * @param string $type
     */
    public function __construct(?string $code = null, ?string $label = null, ?string $type = null)
    {
        $this
            ->setCode($code)
            ->setLabel($label)
            ->setType($type);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \StructType\CustomPaymentPageCode
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \StructType\CustomPaymentPageCode
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\CustomPaymentPageCode
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
