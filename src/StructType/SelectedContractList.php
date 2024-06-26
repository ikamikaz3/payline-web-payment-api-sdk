<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for selectedContractList StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the list of selected card
 * @subpackage Structs
 */
class SelectedContractList extends AbstractStructBase
{
    /**
     * The selectedContract
     * Meta information extracted from the WSDL
     * - maxOccurs: 25
     * - minOccurs: 1
     * @var string[]
     */
    protected array $selectedContract;

    /**
     * Constructor method for selectedContractList
     * @param string[] $selectedContract
     * @uses SelectedContractList::setSelectedContract()
     */
    public function __construct(array $selectedContract)
    {
        $this
            ->setSelectedContract($selectedContract);
    }

    /**
     * Get selectedContract value
     * @return string[]
     */
    public function getSelectedContract(): array
    {
        return $this->selectedContract;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSelectedContract method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSelectedContract method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSelectedContractForArrayConstraintFromSetSelectedContract(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $selectedContractListSelectedContractItem) {
            // validation for constraint: itemType
            if (!is_string($selectedContractListSelectedContractItem)) {
                $invalidValues[] = is_object($selectedContractListSelectedContractItem) ? get_class($selectedContractListSelectedContractItem) : sprintf('%s(%s)', gettype($selectedContractListSelectedContractItem), var_export($selectedContractListSelectedContractItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The selectedContract property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set selectedContract value
     * @param string[] $selectedContract
     * @return SelectedContractList
     * @throws InvalidArgumentException
     */
    public function setSelectedContract(array $selectedContract): self
    {
        // validation for constraint: array
        if ('' !== ($selectedContractArrayErrorMessage = self::validateSelectedContractForArrayConstraintFromSetSelectedContract($selectedContract))) {
            throw new InvalidArgumentException($selectedContractArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(25)
        if (count($selectedContract) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 25', count($selectedContract)), __LINE__);
        }
        $this->selectedContract = $selectedContract;

        return $this;
    }

    /**
     * Add item to selectedContract value
     * @param string $item
     * @return SelectedContractList
     * @throws InvalidArgumentException
     */
    public function addToSelectedContract(string $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(25)
        if (count($this->selectedContract) >= 25) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 25', count($this->selectedContract)), __LINE__);
        }
        $this->selectedContract[] = $item;

        return $this;
    }
}
