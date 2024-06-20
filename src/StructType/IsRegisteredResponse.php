<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isRegisteredResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the isRegistered method
 * @subpackage Structs
 */
class IsRegisteredResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The token
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $token = null;

    /**
     * The data
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $data = null;

    /**
     * Constructor method for isRegisteredResponse
     * @param Result|null $result
     * @param string|null $token
     * @param string|null $data
     * @uses IsRegisteredResponse::setResult()
     * @uses IsRegisteredResponse::setToken()
     * @uses IsRegisteredResponse::setData()
     */
    public function __construct(?Result $result = null, ?string $token = null, ?string $data = null)
    {
        $this
            ->setResult($result)
            ->setToken($token)
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
     * @return IsRegisteredResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

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
     * @param string|null $token
     * @return IsRegisteredResponse
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
     * @return IsRegisteredResponse
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
