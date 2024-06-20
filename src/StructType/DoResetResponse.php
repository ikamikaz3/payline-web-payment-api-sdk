<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doResetResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doReset method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoResetResponse extends AbstractStructBase
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
     * Constructor method for doResetResponse
     * @uses DoResetResponse::setResult()
     * @uses DoResetResponse::setTransaction()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction);
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
     * @return \StructType\DoResetResponse
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
     * @return \StructType\DoResetResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }
}
