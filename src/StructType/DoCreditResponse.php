<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doCreditResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doCredit method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoCreditResponse extends AbstractStructBase
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
     * The card
     * @var \StructType\CardOut|null
     */
    protected ?\StructType\CardOut $card = null;
    /**
     * The extendedCard
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
    /**
     * Constructor method for doCreditResponse
     * @uses DoCreditResponse::setResult()
     * @uses DoCreditResponse::setTransaction()
     * @uses DoCreditResponse::setCard()
     * @uses DoCreditResponse::setExtendedCard()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\CardOut $card
     * @param \StructType\ExtendedCardType $extendedCard
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\CardOut $card = null, ?\StructType\ExtendedCardType $extendedCard = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setCard($card)
            ->setExtendedCard($extendedCard);
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
     * @return \StructType\DoCreditResponse
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
     * @return \StructType\DoCreditResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get card value
     * @return \StructType\CardOut|null
     */
    public function getCard(): ?\StructType\CardOut
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param \StructType\CardOut $card
     * @return \StructType\DoCreditResponse
     */
    public function setCard(?\StructType\CardOut $card = null): self
    {
        $this->card = $card;
        
        return $this;
    }
    /**
     * Get extendedCard value
     * @return \StructType\ExtendedCardType|null
     */
    public function getExtendedCard(): ?\StructType\ExtendedCardType
    {
        return $this->extendedCard;
    }
    /**
     * Set extendedCard value
     * @param \StructType\ExtendedCardType $extendedCard
     * @return \StructType\DoCreditResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
        return $this;
    }
}
