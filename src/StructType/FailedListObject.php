<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for failedListObject StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of mass element failed
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FailedListObject extends AbstractStructBase
{
    /**
     * The failedObject
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var Transaction[]
     */
    protected array $failedObject;

    /**
     * Constructor method for failedListObject
     * @param Transaction[] $failedObject
     * @uses FailedListObject::setFailedObject()
     */
    public function __construct(array $failedObject)
    {
        $this
            ->setFailedObject($failedObject);
    }

    /**
     * Get failedObject value
     * @return Transaction[]
     */
    public function getFailedObject(): array
    {
        return $this->failedObject;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFailedObject method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFailedObject method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFailedObjectForArrayConstraintFromSetFailedObject(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $failedListObjectFailedObjectItem) {
            // validation for constraint: itemType
            if (!$failedListObjectFailedObjectItem instanceof Transaction) {
                $invalidValues[] = is_object($failedListObjectFailedObjectItem) ? get_class($failedListObjectFailedObjectItem) : sprintf('%s(%s)', gettype($failedListObjectFailedObjectItem), var_export($failedListObjectFailedObjectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The failedObject property can only contain items of type Transaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set failedObject value
     * @param Transaction[] $failedObject
     * @return FailedListObject
     * @throws InvalidArgumentException
     */
    public function setFailedObject(array $failedObject): self
    {
        // validation for constraint: array
        if ('' !== ($failedObjectArrayErrorMessage = self::validateFailedObjectForArrayConstraintFromSetFailedObject($failedObject))) {
            throw new InvalidArgumentException($failedObjectArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (count($failedObject) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($failedObject)), __LINE__);
        }
        $this->failedObject = $failedObject;

        return $this;
    }

    /**
     * Add item to failedObject value
     * @param Transaction $item
     * @return FailedListObject
     * @throws InvalidArgumentException
     */
    public function addToFailedObject(Transaction $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(5000)
        if (count($this->failedObject) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->failedObject)), __LINE__);
        }
        $this->failedObject[] = $item;

        return $this;
    }
}
