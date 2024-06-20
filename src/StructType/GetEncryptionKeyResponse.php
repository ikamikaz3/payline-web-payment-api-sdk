<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEncryptionKeyResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getEncryptionKeyResponse method
 * @subpackage Structs
 */
class GetEncryptionKeyResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The key
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Key|null
     */
    protected ?Key $key = null;

    /**
     * Constructor method for getEncryptionKeyResponse
     * @param Result|null $result
     * @param Key|null $key
     * @uses GetEncryptionKeyResponse::setResult()
     * @uses GetEncryptionKeyResponse::setKey()
     */
    public function __construct(?Result $result = null, ?Key $key = null)
    {
        $this
            ->setResult($result)
            ->setKey($key);
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
     * @return GetEncryptionKeyResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get key value
     * @return Key|null
     */
    public function getKey(): ?Key
    {
        return $this->key;
    }

    /**
     * Set key value
     * @param Key|null $key
     * @return GetEncryptionKeyResponse
     */
    public function setKey(?Key $key = null): self
    {
        $this->key = $key;

        return $this;
    }
}
