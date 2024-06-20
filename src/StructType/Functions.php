<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for functions StructType
 * Meta information extracted from the WSDL
 * - documentation: list of functions
 * @subpackage Structs
 */
class Functions extends AbstractStructBase
{
    /**
     * The function
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var VirtualTerminalFunction[]
     */
    protected ?array $function = null;

    /**
     * Constructor method for functions
     * @param VirtualTerminalFunction[] $function
     * @uses Functions::setFunction()
     */
    public function __construct(?array $function = null)
    {
        $this
            ->setFunction($function);
    }

    /**
     * Get function value
     * @return array|null
     */
    public function getFunction(): ?array
    {
        return $this->function;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFunction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFunction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFunctionForArrayConstraintFromSetFunction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $functionsFunctionItem) {
            // validation for constraint: itemType
            if (!$functionsFunctionItem instanceof VirtualTerminalFunction) {
                $invalidValues[] = is_object($functionsFunctionItem) ? get_class($functionsFunctionItem) : sprintf('%s(%s)', gettype($functionsFunctionItem), var_export($functionsFunctionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The function property can only contain items of type VirtualTerminalFunction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set function value
     * @param VirtualTerminalFunction[] $function
     * @return Functions
     * @throws InvalidArgumentException
     */
    public function setFunction(?array $function = null): self
    {
        // validation for constraint: array
        if ('' !== ($functionArrayErrorMessage = self::validateFunctionForArrayConstraintFromSetFunction($function))) {
            throw new InvalidArgumentException($functionArrayErrorMessage, __LINE__);
        }
        $this->function = $function;

        return $this;
    }

    /**
     * Add item to function value
     * @param VirtualTerminalFunction $item
     * @return Functions
     * @throws InvalidArgumentException
     */
    public function addToFunction(VirtualTerminalFunction $item): self
    {
        // validation for constraint: itemType
        $this->function[] = $item;

        return $this;
    }
}
