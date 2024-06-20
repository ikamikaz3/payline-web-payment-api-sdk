<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transactionList StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the list of selected card
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class TransactionList extends AbstractStructBase
{
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 0
     * @var Transaction[]
     */
    protected ?array $transaction = null;

    /**
     * Constructor method for transactionList
     * @param Transaction[] $transaction
     * @uses TransactionList::setTransaction()
     */
    public function __construct(?array $transaction = null)
    {
        $this
            ->setTransaction($transaction);
    }

    /**
     * Get transaction value
     * @return array|null
     */
    public function getTransaction(): ?array
    {
        return $this->transaction;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintFromSetTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $transactionListTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionListTransactionItem instanceof Transaction) {
                $invalidValues[] = is_object($transactionListTransactionItem) ? get_class($transactionListTransactionItem) : sprintf('%s(%s)', gettype($transactionListTransactionItem), var_export($transactionListTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The transaction property can only contain items of type Transaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set transaction value
     * @param Transaction[] $transaction
     * @return TransactionList
     * @throws InvalidArgumentException
     */
    public function setTransaction(?array $transaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintFromSetTransaction($transaction))) {
            throw new InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($transaction) && count($transaction) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($transaction)), __LINE__);
        }
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Add item to transaction value
     * @param Transaction $item
     * @return TransactionList
     * @throws InvalidArgumentException
     */
    public function addToTransaction(Transaction $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(5000)
        if (is_array($this->transaction) && count($this->transaction) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->transaction)), __LINE__);
        }
        $this->transaction[] = $item;

        return $this;
    }
}
