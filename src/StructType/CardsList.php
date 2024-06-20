<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cardsList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of cards
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CardsList extends AbstractStructBase
{
    /**
     * The cards
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \StructType\Cards[]
     */
    protected ?array $cards = null;
    /**
     * Constructor method for cardsList
     * @uses CardsList::setCards()
     * @param \StructType\Cards[] $cards
     */
    public function __construct(?array $cards = null)
    {
        $this
            ->setCards($cards);
    }
    /**
     * Get cards value
     * @return \StructType\Cards[]
     */
    public function getCards(): ?array
    {
        return $this->cards;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCards method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCards method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCardsForArrayConstraintFromSetCards(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cardsListCardsItem) {
            // validation for constraint: itemType
            if (!$cardsListCardsItem instanceof \StructType\Cards) {
                $invalidValues[] = is_object($cardsListCardsItem) ? get_class($cardsListCardsItem) : sprintf('%s(%s)', gettype($cardsListCardsItem), var_export($cardsListCardsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cards property can only contain items of type \StructType\Cards, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cards value
     * @throws InvalidArgumentException
     * @param \StructType\Cards[] $cards
     * @return \StructType\CardsList
     */
    public function setCards(?array $cards = null): self
    {
        // validation for constraint: array
        if ('' !== ($cardsArrayErrorMessage = self::validateCardsForArrayConstraintFromSetCards($cards))) {
            throw new InvalidArgumentException($cardsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($cards) && count($cards) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($cards)), __LINE__);
        }
        $this->cards = $cards;
        
        return $this;
    }
    /**
     * Add item to cards value
     * @throws InvalidArgumentException
     * @param \StructType\Cards $item
     * @return \StructType\CardsList
     */
    public function addToCards(\StructType\Cards $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Cards) {
            throw new InvalidArgumentException(sprintf('The cards property can only contain items of type \StructType\Cards, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->cards) && count($this->cards) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->cards)), __LINE__);
        }
        $this->cards[] = $item;
        
        return $this;
    }
}
