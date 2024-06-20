<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for avs StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the result of the address verification service
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Avs extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $result = null;

    /**
     * The resultFromAcquirer
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $resultFromAcquirer = null;

    /**
     * Constructor method for avs
     * @param string|null $result
     * @param string|null $resultFromAcquirer
     * @uses Avs::setResult()
     * @uses Avs::setResultFromAcquirer()
     */
    public function __construct(?string $result = null, ?string $resultFromAcquirer = null)
    {
        $this
            ->setResult($result)
            ->setResultFromAcquirer($resultFromAcquirer);
    }

    /**
     * Get result value
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param string|null $result
     * @return Avs
     */
    public function setResult(?string $result = null): self
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;

        return $this;
    }

    /**
     * Get resultFromAcquirer value
     * @return string|null
     */
    public function getResultFromAcquirer(): ?string
    {
        return $this->resultFromAcquirer;
    }

    /**
     * Set resultFromAcquirer value
     * @param string|null $resultFromAcquirer
     * @return Avs
     */
    public function setResultFromAcquirer(?string $resultFromAcquirer = null): self
    {
        // validation for constraint: string
        if (!is_null($resultFromAcquirer) && !is_string($resultFromAcquirer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultFromAcquirer, true), gettype($resultFromAcquirer)), __LINE__);
        }
        $this->resultFromAcquirer = $resultFromAcquirer;

        return $this;
    }
}
