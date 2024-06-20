<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for functionParameter StructType
 * Meta information extracted from the WSDL
 * - documentation: Value of parameter
 * @subpackage Structs
 */
class FunctionParameter extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;

    /**
     * Constructor method for functionParameter
     * @param string|null $id
     * @uses FunctionParameter::setId()
     */
    public function __construct(?string $id = null)
    {
        $this
            ->setId($id);
    }

    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Set id value
     * @param string|null $id
     * @return FunctionParameter
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }
}
