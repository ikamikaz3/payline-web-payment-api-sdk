<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doScoringChequeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doScoringCheque method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoScoringChequeResponse extends AbstractStructBase
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
     * The scoringCheque
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\ScoringCheque|null
     */
    protected ?\StructType\ScoringCheque $scoringCheque = null;
    /**
     * Constructor method for doScoringChequeResponse
     * @uses DoScoringChequeResponse::setResult()
     * @uses DoScoringChequeResponse::setTransaction()
     * @uses DoScoringChequeResponse::setScoringCheque()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\ScoringCheque $scoringCheque
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\ScoringCheque $scoringCheque = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setScoringCheque($scoringCheque);
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
     * @return \StructType\DoScoringChequeResponse
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
     * @return \StructType\DoScoringChequeResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get scoringCheque value
     * @return \StructType\ScoringCheque|null
     */
    public function getScoringCheque(): ?\StructType\ScoringCheque
    {
        return $this->scoringCheque;
    }
    /**
     * Set scoringCheque value
     * @param \StructType\ScoringCheque $scoringCheque
     * @return \StructType\DoScoringChequeResponse
     */
    public function setScoringCheque(?\StructType\ScoringCheque $scoringCheque = null): self
    {
        $this->scoringCheque = $scoringCheque;
        
        return $this;
    }
}
