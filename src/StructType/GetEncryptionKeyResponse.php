<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEncryptionKeyResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getEncryptionKeyResponse method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEncryptionKeyResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The key
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Key|null
     */
    protected ?\StructType\Key $key = null;
    /**
     * Constructor method for getEncryptionKeyResponse
     * @uses GetEncryptionKeyResponse::setResult()
     * @uses GetEncryptionKeyResponse::setKey()
     * @param \StructType\Result $result
     * @param \StructType\Key $key
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Key $key = null)
    {
        $this
            ->setResult($result)
            ->setKey($key);
    }
    /**
     * Get result value
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\GetEncryptionKeyResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get key value
     * @return \StructType\Key|null
     */
    public function getKey(): ?\StructType\Key
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param \StructType\Key $key
     * @return \StructType\GetEncryptionKeyResponse
     */
    public function setKey(?\StructType\Key $key = null): self
    {
        $this->key = $key;
        
        return $this;
    }
}
