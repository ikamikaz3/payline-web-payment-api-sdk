<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reattempt StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about Reattempt.
 * @subpackage Structs
 */
class Reattempt extends AbstractStructBase
{
    /**
     * The indicator
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $indicator = null;

    /**
     * The frozenPeriod
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $frozenPeriod = null;

    /**
     * The allowedDuration
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $allowedDuration = null;

    /**
     * The maxAllowed
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $maxAllowed = null;

    /**
     * Constructor method for reattempt
     * @param string|null $indicator
     * @param string|null $frozenPeriod
     * @param string|null $allowedDuration
     * @param string|null $maxAllowed
     * @uses Reattempt::setIndicator()
     * @uses Reattempt::setFrozenPeriod()
     * @uses Reattempt::setAllowedDuration()
     * @uses Reattempt::setMaxAllowed()
     */
    public function __construct(?string $indicator = null, ?string $frozenPeriod = null, ?string $allowedDuration = null, ?string $maxAllowed = null)
    {
        $this
            ->setIndicator($indicator)
            ->setFrozenPeriod($frozenPeriod)
            ->setAllowedDuration($allowedDuration)
            ->setMaxAllowed($maxAllowed);
    }

    /**
     * Get indicator value
     * @return string|null
     */
    public function getIndicator(): ?string
    {
        return $this->indicator;
    }

    /**
     * Set indicator value
     * @param string|null $indicator
     * @return Reattempt
     */
    public function setIndicator(?string $indicator = null): self
    {
        // validation for constraint: string
        if (!is_null($indicator) && !is_string($indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indicator, true), gettype($indicator)), __LINE__);
        }
        $this->indicator = $indicator;

        return $this;
    }

    /**
     * Get frozenPeriod value
     * @return string|null
     */
    public function getFrozenPeriod(): ?string
    {
        return $this->frozenPeriod;
    }

    /**
     * Set frozenPeriod value
     * @param string|null $frozenPeriod
     * @return Reattempt
     */
    public function setFrozenPeriod(?string $frozenPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($frozenPeriod) && !is_string($frozenPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frozenPeriod, true), gettype($frozenPeriod)), __LINE__);
        }
        $this->frozenPeriod = $frozenPeriod;

        return $this;
    }

    /**
     * Get allowedDuration value
     * @return string|null
     */
    public function getAllowedDuration(): ?string
    {
        return $this->allowedDuration;
    }

    /**
     * Set allowedDuration value
     * @param string|null $allowedDuration
     * @return Reattempt
     */
    public function setAllowedDuration(?string $allowedDuration = null): self
    {
        // validation for constraint: string
        if (!is_null($allowedDuration) && !is_string($allowedDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowedDuration, true), gettype($allowedDuration)), __LINE__);
        }
        $this->allowedDuration = $allowedDuration;

        return $this;
    }

    /**
     * Get maxAllowed value
     * @return string|null
     */
    public function getMaxAllowed(): ?string
    {
        return $this->maxAllowed;
    }

    /**
     * Set maxAllowed value
     * @param string|null $maxAllowed
     * @return Reattempt
     */
    public function setMaxAllowed(?string $maxAllowed = null): self
    {
        // validation for constraint: string
        if (!is_null($maxAllowed) && !is_string($maxAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxAllowed, true), gettype($maxAllowed)), __LINE__);
        }
        $this->maxAllowed = $maxAllowed;

        return $this;
    }
}
