<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for virtualTerminal StructType
 * Meta information extracted from the WSDL
 * - documentation: virtualTerminal
 * @subpackage Structs
 */
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
     * @var Functions|null
     */
    protected ?Functions $functions = null;

    /**
     * Constructor method for virtualTerminal
     * @param string|null $label
     * @param int|null $inactivityDelay
     * @param string|null $logo
     * @param Functions|null $functions
     * @uses VirtualTerminal::setLabel()
     * @uses VirtualTerminal::setInactivityDelay()
     * @uses VirtualTerminal::setLogo()
     * @uses VirtualTerminal::setFunctions()
     */
    public function __construct(?string $label = null, ?int $inactivityDelay = 10, ?string $logo = null, ?Functions $functions = null)
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
     * @param string|null $label
     * @return VirtualTerminal
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
     * @param int|null $inactivityDelay
     * @return VirtualTerminal
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
     * @param string|null $logo
     * @return VirtualTerminal
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
     * @return Functions|null
     */
    public function getFunctions(): ?Functions
    {
        return $this->functions;
    }

    /**
     * Set functions value
     * @param Functions|null $functions
     * @return VirtualTerminal
     */
    public function setFunctions(?Functions $functions = null): self
    {
        $this->functions = $functions;

        return $this;
    }
}
