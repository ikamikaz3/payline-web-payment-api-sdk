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
#[\AllowDynamicProperties]
class Functions extends AbstractStructBase
{
    /**
     * The function
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\VirtualTerminalFunction[]
     */
    protected ?array $function = null;
    /**
     * Constructor method for functions
     * @uses Functions::setFunction()
     * @param \StructType\VirtualTerminalFunction[] $function
     */
    public function __construct(?array $function = null)
    {
        $this
            ->setFunction($function);
    }
    /**
     * Get function value
     * @return \StructType\VirtualTerminalFunction[]
     */
    public function getFunction(): ?array
    {
        return $this->function;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFunction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFunction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
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
            if (!$functionsFunctionItem instanceof \StructType\VirtualTerminalFunction) {
                $invalidValues[] = is_object($functionsFunctionItem) ? get_class($functionsFunctionItem) : sprintf('%s(%s)', gettype($functionsFunctionItem), var_export($functionsFunctionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The function property can only contain items of type \StructType\VirtualTerminalFunction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set function value
     * @throws InvalidArgumentException
     * @param \StructType\VirtualTerminalFunction[] $function
     * @return \StructType\Functions
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
     * @throws InvalidArgumentException
     * @param \StructType\VirtualTerminalFunction $item
     * @return \StructType\Functions
     */
    public function addToFunction(\StructType\VirtualTerminalFunction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VirtualTerminalFunction) {
            throw new InvalidArgumentException(sprintf('The function property can only contain items of type \StructType\VirtualTerminalFunction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->function[] = $item;
        
        return $this;
    }
}
