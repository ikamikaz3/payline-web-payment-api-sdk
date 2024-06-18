<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doCaptureResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doCapture method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoCaptureResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The reAuthorization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $reAuthorization = null;
    /**
     * Constructor method for doCaptureResponse
     * @uses DoCaptureResponse::setResult()
     * @uses DoCaptureResponse::setTransaction()
     * @uses DoCaptureResponse::setReAuthorization()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param string $reAuthorization
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?string $reAuthorization = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setReAuthorization($reAuthorization);
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
     * @return \StructType\DoCaptureResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction(): ?\StructType\Transaction
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\DoCaptureResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get reAuthorization value
     * @return string|null
     */
    public function getReAuthorization(): ?string
    {
        return $this->reAuthorization;
    }
    /**
     * Set reAuthorization value
     * @param string $reAuthorization
     * @return \StructType\DoCaptureResponse
     */
    public function setReAuthorization(?string $reAuthorization = null): self
    {
        // validation for constraint: string
        if (!is_null($reAuthorization) && !is_string($reAuthorization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reAuthorization, true), gettype($reAuthorization)), __LINE__);
        }
        $this->reAuthorization = $reAuthorization;
        
        return $this;
    }
}
