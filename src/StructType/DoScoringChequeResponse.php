<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doScoringChequeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doScoringCheque method
 * @subpackage Structs
 */
class DoScoringChequeResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The scoringCheque
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var ScoringCheque|null
     */
    protected ?ScoringCheque $scoringCheque = null;

    /**
     * Constructor method for doScoringChequeResponse
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param ScoringCheque|null $scoringCheque
     * @uses DoScoringChequeResponse::setResult()
     * @uses DoScoringChequeResponse::setTransaction()
     * @uses DoScoringChequeResponse::setScoringCheque()
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?ScoringCheque $scoringCheque = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setScoringCheque($scoringCheque);
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
     * @return DoScoringChequeResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get transaction value
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    /**
     * Set transaction value
     * @param Transaction|null $transaction
     * @return DoScoringChequeResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get scoringCheque value
     * @return ScoringCheque|null
     */
    public function getScoringCheque(): ?ScoringCheque
    {
        return $this->scoringCheque;
    }

    /**
     * Set scoringCheque value
     * @param ScoringCheque|null $scoringCheque
     * @return DoScoringChequeResponse
     */
    public function setScoringCheque(?ScoringCheque $scoringCheque = null): self
    {
        $this->scoringCheque = $scoringCheque;

        return $this;
    }
}
