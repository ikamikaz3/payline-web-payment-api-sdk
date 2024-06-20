<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cheque StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the cheque
 * @subpackage Structs
 */
class Cheque extends AbstractStructBase
{
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $number = null;

    /**
     * Constructor method for cheque
     * @param string|null $number
     * @uses Cheque::setNumber()
     */
    public function __construct(?string $number = null)
    {
        $this
            ->setNumber($number);
    }

    /**
     * Get number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Set number value
     * @param string|null $number
     * @return Cheque
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;

        return $this;
    }
}
