<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resetAuthorizationList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of authorization to reset
 * @subpackage Structs
 */
class ResetAuthorizationList extends AbstractStructBase
{
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var string[]
     */
    protected array $transactionID;

    /**
     * Constructor method for resetAuthorizationList
     * @param string[] $transactionID
     * @uses ResetAuthorizationList::setTransactionID()
     */
    public function __construct(array $transactionID)
    {
        $this
            ->setTransactionID($transactionID);
    }

    /**
     * Get transactionID value
     * @return string[]
     */
    public function getTransactionID(): array
    {
        return $this->transactionID;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTransactionID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransactionID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionIDForArrayConstraintFromSetTransactionID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resetAuthorizationListTransactionIDItem) {
            // validation for constraint: itemType
            if (!is_string($resetAuthorizationListTransactionIDItem)) {
                $invalidValues[] = is_object($resetAuthorizationListTransactionIDItem) ? get_class($resetAuthorizationListTransactionIDItem) : sprintf('%s(%s)', gettype($resetAuthorizationListTransactionIDItem), var_export($resetAuthorizationListTransactionIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The transactionID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set transactionID value
     * @param string[] $transactionID
     * @return ResetAuthorizationList
     * @throws InvalidArgumentException
     */
    public function setTransactionID(array $transactionID): self
    {
        // validation for constraint: array
        if ('' !== ($transactionIDArrayErrorMessage = self::validateTransactionIDForArrayConstraintFromSetTransactionID($transactionID))) {
            throw new InvalidArgumentException($transactionIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (count($transactionID) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;

        return $this;
    }

    /**
     * Add item to transactionID value
     * @param string $item
     * @return ResetAuthorizationList
     * @throws InvalidArgumentException
     */
    public function addToTransactionID(string $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(5000)
        if (count($this->transactionID) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->transactionID)), __LINE__);
        }
        $this->transactionID[] = $item;

        return $this;
    }
}
