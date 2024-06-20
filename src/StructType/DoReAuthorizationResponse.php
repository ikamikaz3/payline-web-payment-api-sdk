<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doReAuthorizationResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doReAuthorization method
 * @subpackage Structs
 */
class DoReAuthorizationResponse extends AbstractStructBase
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
     * The card
     * @var CardOut|null
     */
    protected ?CardOut $card = null;

    /**
     * The extendedCard
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * Constructor method for doReAuthorizationResponse
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @uses DoReAuthorizationResponse::setResult()
     * @uses DoReAuthorizationResponse::setTransaction()
     * @uses DoReAuthorizationResponse::setCard()
     * @uses DoReAuthorizationResponse::setExtendedCard()
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setCard($card)
            ->setExtendedCard($extendedCard);
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
     * @return DoReAuthorizationResponse
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
     * @return DoReAuthorizationResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get card value
     * @return CardOut|null
     */
    public function getCard(): ?CardOut
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param CardOut|null $card
     * @return DoReAuthorizationResponse
     */
    public function setCard(?CardOut $card = null): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get extendedCard value
     * @return ExtendedCardType|null
     */
    public function getExtendedCard(): ?ExtendedCardType
    {
        return $this->extendedCard;
    }

    /**
     * Set extendedCard value
     * @param ExtendedCardType|null $extendedCard
     * @return DoReAuthorizationResponse
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

        return $this;
    }
}
