<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for associatedTransactionsList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of associatedTransactions
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AssociatedTransactionsList extends AbstractStructBase
{
    /**
     * The associatedTransactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var AssociatedTransactions[]
     */
    protected ?array $associatedTransactions = null;

    /**
     * Constructor method for associatedTransactionsList
     * @param AssociatedTransactions[] $associatedTransactions
     * @uses AssociatedTransactionsList::setAssociatedTransactions()
     */
    public function __construct(?array $associatedTransactions = null)
    {
        $this
            ->setAssociatedTransactions($associatedTransactions);
    }

    /**
     * Get associatedTransactions value
     * @return array|null
     */
    public function getAssociatedTransactions(): ?array
    {
        return $this->associatedTransactions;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAssociatedTransactions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssociatedTransactions method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssociatedTransactionsForArrayConstraintFromSetAssociatedTransactions(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $associatedTransactionsListAssociatedTransactionsItem) {
            // validation for constraint: itemType
            if (!$associatedTransactionsListAssociatedTransactionsItem instanceof AssociatedTransactions) {
                $invalidValues[] = is_object($associatedTransactionsListAssociatedTransactionsItem) ? get_class($associatedTransactionsListAssociatedTransactionsItem) : sprintf('%s(%s)', gettype($associatedTransactionsListAssociatedTransactionsItem), var_export($associatedTransactionsListAssociatedTransactionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The associatedTransactions property can only contain items of type AssociatedTransactions, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set associatedTransactions value
     * @param AssociatedTransactions[] $associatedTransactions
     * @return AssociatedTransactionsList
     * @throws InvalidArgumentException
     */
    public function setAssociatedTransactions(?array $associatedTransactions = null): self
    {
        // validation for constraint: array
        if ('' !== ($associatedTransactionsArrayErrorMessage = self::validateAssociatedTransactionsForArrayConstraintFromSetAssociatedTransactions($associatedTransactions))) {
            throw new InvalidArgumentException($associatedTransactionsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($associatedTransactions) && count($associatedTransactions) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($associatedTransactions)), __LINE__);
        }
        $this->associatedTransactions = $associatedTransactions;

        return $this;
    }

    /**
     * Add item to associatedTransactions value
     * @param AssociatedTransactions $item
     * @return AssociatedTransactionsList
     * @throws InvalidArgumentException
     */
    public function addToAssociatedTransactions(AssociatedTransactions $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(100)
        if (is_array($this->associatedTransactions) && count($this->associatedTransactions) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->associatedTransactions)), __LINE__);
        }
        $this->associatedTransactions[] = $item;

        return $this;
    }
}
