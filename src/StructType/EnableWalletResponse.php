<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for enableWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the enableWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EnableWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * Constructor method for enableWalletResponse
     * @uses EnableWalletResponse::setResult()
     * @param \StructType\Result $result
     */
    public function __construct(?\StructType\Result $result = null)
    {
        $this
            ->setResult($result);
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
     * @return \StructType\EnableWalletResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
}