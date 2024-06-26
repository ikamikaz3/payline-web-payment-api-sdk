<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statusHistoryList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of statusHistory
 * @subpackage Structs
 */
class StatusHistoryList extends AbstractStructBase
{
    /**
     * The statusHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var StatusHistory[]
     */
    protected ?array $statusHistory = null;

    /**
     * Constructor method for statusHistoryList
     * @param StatusHistory[] $statusHistory
     * @uses StatusHistoryList::setStatusHistory()
     */
    public function __construct(?array $statusHistory = null)
    {
        $this
            ->setStatusHistory($statusHistory);
    }

    /**
     * Get statusHistory value
     * @return array|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setStatusHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusHistoryForArrayConstraintFromSetStatusHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $statusHistoryListStatusHistoryItem) {
            // validation for constraint: itemType
            if (!$statusHistoryListStatusHistoryItem instanceof StatusHistory) {
                $invalidValues[] = is_object($statusHistoryListStatusHistoryItem) ? get_class($statusHistoryListStatusHistoryItem) : sprintf('%s(%s)', gettype($statusHistoryListStatusHistoryItem), var_export($statusHistoryListStatusHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The statusHistory property can only contain items of type StatusHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set statusHistory value
     * @param StatusHistory[] $statusHistory
     * @return StatusHistoryList
     * @throws InvalidArgumentException
     */
    public function setStatusHistory(?array $statusHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($statusHistoryArrayErrorMessage = self::validateStatusHistoryForArrayConstraintFromSetStatusHistory($statusHistory))) {
            throw new InvalidArgumentException($statusHistoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($statusHistory) && count($statusHistory) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($statusHistory)), __LINE__);
        }
        $this->statusHistory = $statusHistory;

        return $this;
    }

    /**
     * Add item to statusHistory value
     * @param StatusHistory $item
     * @return StatusHistoryList
     * @throws InvalidArgumentException
     */
    public function addToStatusHistory(StatusHistory $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(100)
        if (is_array($this->statusHistory) && count($this->statusHistory) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->statusHistory)), __LINE__);
        }
        $this->statusHistory[] = $item;

        return $this;
    }
}
