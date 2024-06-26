<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contracts StructType
 * Meta information extracted from the WSDL
 * - documentation: list of contract
 * @subpackage Structs
 */
class Contracts extends AbstractStructBase
{
    /**
     * The contract
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var Contract[]
     */
    protected ?array $contract = null;

    /**
     * Constructor method for contracts
     * @param Contract[] $contract
     * @uses Contracts::setContract()
     */
    public function __construct(?array $contract = null)
    {
        $this
            ->setContract($contract);
    }

    /**
     * Get contract value
     * @return array|null
     */
    public function getContract(): ?array
    {
        return $this->contract;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setContract method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContract method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContractForArrayConstraintFromSetContract(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contractsContractItem) {
            // validation for constraint: itemType
            if (!$contractsContractItem instanceof Contract) {
                $invalidValues[] = is_object($contractsContractItem) ? get_class($contractsContractItem) : sprintf('%s(%s)', gettype($contractsContractItem), var_export($contractsContractItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The contract property can only contain items of type Contract, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set contract value
     * @param Contract[] $contract
     * @return Contracts
     * @throws InvalidArgumentException
     */
    public function setContract(?array $contract = null): self
    {
        // validation for constraint: array
        if ('' !== ($contractArrayErrorMessage = self::validateContractForArrayConstraintFromSetContract($contract))) {
            throw new InvalidArgumentException($contractArrayErrorMessage, __LINE__);
        }
        $this->contract = $contract;

        return $this;
    }

    /**
     * Add item to contract value
     * @param Contract $item
     * @return Contracts
     * @throws InvalidArgumentException
     */
    public function addToContract(Contract $item): self
    {
        // validation for constraint: itemType
        $this->contract[] = $item;

        return $this;
    }
}
