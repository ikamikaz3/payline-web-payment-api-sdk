<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listPointOfSell StructType
 * @subpackage Structs
 */
class ListPointOfSell extends AbstractStructBase
{
    /**
     * The pointOfSell
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var PointOfSell[]
     */
    protected ?array $pointOfSell = null;

    /**
     * Constructor method for listPointOfSell
     * @param PointOfSell[] $pointOfSell
     * @uses ListPointOfSell::setPointOfSell()
     */
    public function __construct(?array $pointOfSell = null)
    {
        $this
            ->setPointOfSell($pointOfSell);
    }

    /**
     * Get pointOfSell value
     * @return array|null
     */
    public function getPointOfSell(): ?array
    {
        return $this->pointOfSell;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPointOfSell method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPointOfSell method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePointOfSellForArrayConstraintFromSetPointOfSell(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listPointOfSellPointOfSellItem) {
            // validation for constraint: itemType
            if (!$listPointOfSellPointOfSellItem instanceof PointOfSell) {
                $invalidValues[] = is_object($listPointOfSellPointOfSellItem) ? get_class($listPointOfSellPointOfSellItem) : sprintf('%s(%s)', gettype($listPointOfSellPointOfSellItem), var_export($listPointOfSellPointOfSellItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pointOfSell property can only contain items of type PointOfSell, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set pointOfSell value
     * @param PointOfSell[] $pointOfSell
     * @return ListPointOfSell
     * @throws InvalidArgumentException
     */
    public function setPointOfSell(?array $pointOfSell = null): self
    {
        // validation for constraint: array
        if ('' !== ($pointOfSellArrayErrorMessage = self::validatePointOfSellForArrayConstraintFromSetPointOfSell($pointOfSell))) {
            throw new InvalidArgumentException($pointOfSellArrayErrorMessage, __LINE__);
        }
        $this->pointOfSell = $pointOfSell;

        return $this;
    }

    /**
     * Add item to pointOfSell value
     * @param PointOfSell $item
     * @return ListPointOfSell
     * @throws InvalidArgumentException
     */
    public function addToPointOfSell(PointOfSell $item): self
    {
        // validation for constraint: itemType
        $this->pointOfSell[] = $item;

        return $this;
    }
}
