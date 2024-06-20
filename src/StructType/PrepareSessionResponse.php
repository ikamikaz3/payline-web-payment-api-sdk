<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepareSessionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the prepareSession method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PrepareSessionResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The data
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $data = null;

    /**
     * Constructor method for prepareSessionResponse
     * @param Result|null $result
     * @param string|null $data
     * @uses PrepareSessionResponse::setResult()
     * @uses PrepareSessionResponse::setData()
     */
    public function __construct(?Result $result = null, ?string $data = null)
    {
        $this
            ->setResult($result)
            ->setData($data);
    }

    /**
     * Get result value
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return PrepareSessionResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Set data value
     * @param string|null $data
     * @return PrepareSessionResponse
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;

        return $this;
    }
}
