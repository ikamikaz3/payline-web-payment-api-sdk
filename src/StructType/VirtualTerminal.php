<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for virtualTerminal StructType
 * Meta information extracted from the WSDL
 * - documentation: virtualTerminal
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirtualTerminal extends AbstractStructBase
{
    /**
     * The label
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * The inactivityDelay
     * Meta information extracted from the WSDL
     * - documentation: http session timeout delay
     * - default: 10
     * @var int|null
     */
    protected ?int $inactivityDelay = null;
    /**
     * The logo
     * Meta information extracted from the WSDL
     * - documentation: path to logo
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $logo = null;
    /**
     * The functions
     * @var \StructType\Functions|null
     */
    protected ?\StructType\Functions $functions = null;
    /**
     * Constructor method for virtualTerminal
     * @uses VirtualTerminal::setLabel()
     * @uses VirtualTerminal::setInactivityDelay()
     * @uses VirtualTerminal::setLogo()
     * @uses VirtualTerminal::setFunctions()
     * @param string $label
     * @param int $inactivityDelay
     * @param string $logo
     * @param \StructType\Functions $functions
     */
    public function __construct(?string $label = null, ?int $inactivityDelay = 10, ?string $logo = null, ?\StructType\Functions $functions = null)
    {
        $this
            ->setLabel($label)
            ->setInactivityDelay($inactivityDelay)
            ->setLogo($logo)
            ->setFunctions($functions);
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
     * @return \StructType\VirtualTerminal
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
     * Get inactivityDelay value
     * @return int|null
     */
    public function getInactivityDelay(): ?int
    {
        return $this->inactivityDelay;
    }
    /**
     * Set inactivityDelay value
     * @param int $inactivityDelay
     * @return \StructType\VirtualTerminal
     */
    public function setInactivityDelay(?int $inactivityDelay = 10): self
    {
        // validation for constraint: int
        if (!is_null($inactivityDelay) && !(is_int($inactivityDelay) || ctype_digit($inactivityDelay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($inactivityDelay, true), gettype($inactivityDelay)), __LINE__);
        }
        $this->inactivityDelay = $inactivityDelay;
        
        return $this;
    }
    /**
     * Get logo value
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }
    /**
     * Set logo value
     * @param string $logo
     * @return \StructType\VirtualTerminal
     */
    public function setLogo(?string $logo = null): self
    {
        // validation for constraint: string
        if (!is_null($logo) && !is_string($logo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logo, true), gettype($logo)), __LINE__);
        }
        $this->logo = $logo;
        
        return $this;
    }
    /**
     * Get functions value
     * @return \StructType\Functions|null
     */
    public function getFunctions(): ?\StructType\Functions
    {
        return $this->functions;
    }
    /**
     * Set functions value
     * @param \StructType\Functions $functions
     * @return \StructType\VirtualTerminal
     */
    public function setFunctions(?\StructType\Functions $functions = null): self
    {
        $this->functions = $functions;
        
        return $this;
    }
}
