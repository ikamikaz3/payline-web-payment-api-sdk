<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use PaylineWebPayment\EnumType\_function;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for virtualTerminalFunction StructType
 * Meta information extracted from the WSDL
 * - documentation: functions availbe in virtual terminal
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class VirtualTerminalFunction extends AbstractStructBase
{
    /**
     * The function
     * @var string|null
     */
    protected ?string $function = null;

    /**
     * The label
     * @var string|null
     */
    protected ?string $label = null;

    /**
     * The functionParameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var FunctionParameter[]
     */
    protected ?array $functionParameter = null;

    /**
     * Constructor method for virtualTerminalFunction
     * @param string|null $function
     * @param string|null $label
     * @param FunctionParameter[] $functionParameter
     * @uses VirtualTerminalFunction::setFunction()
     * @uses VirtualTerminalFunction::setLabel()
     * @uses VirtualTerminalFunction::setFunctionParameter()
     */
    public function __construct(?string $function = null, ?string $label = null, ?array $functionParameter = null)
    {
        $this
            ->setFunction($function)
            ->setLabel($label)
            ->setFunctionParameter($functionParameter);
    }

    /**
     * Get function value
     * @return string|null
     */
    public function getFunction(): ?string
    {
        return $this->function;
    }

    /**
     * Set function value
     * @param string|null $function
     * @return VirtualTerminalFunction
     * @uses _function::valueIsValid()
     * @uses _function::getValidValues()
     */
    public function setFunction(?string $function = null): self
    {
        // validation for constraint: enumeration
        if (!_function::valueIsValid($function)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\_function', is_array($function) ? implode(', ', $function) : var_export($function, true), implode(', ', \EnumType\_function::getValidValues())), __LINE__);
        }
        $this->function = $function;

        return $this;
    }

    /**
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Set label value
     * @param string|null $label
     * @return VirtualTerminalFunction
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;

        return $this;
    }

    /**
     * Get functionParameter value
     * @return array|null
     */
    public function getFunctionParameter(): ?array
    {
        return $this->functionParameter;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setFunctionParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFunctionParameter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFunctionParameterForArrayConstraintFromSetFunctionParameter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $virtualTerminalFunctionFunctionParameterItem) {
            // validation for constraint: itemType
            if (!$virtualTerminalFunctionFunctionParameterItem instanceof FunctionParameter) {
                $invalidValues[] = is_object($virtualTerminalFunctionFunctionParameterItem) ? get_class($virtualTerminalFunctionFunctionParameterItem) : sprintf('%s(%s)', gettype($virtualTerminalFunctionFunctionParameterItem), var_export($virtualTerminalFunctionFunctionParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The functionParameter property can only contain items of type FunctionParameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set functionParameter value
     * @param FunctionParameter[] $functionParameter
     * @return VirtualTerminalFunction
     * @throws InvalidArgumentException
     */
    public function setFunctionParameter(?array $functionParameter = null): self
    {
        // validation for constraint: array
        if ('' !== ($functionParameterArrayErrorMessage = self::validateFunctionParameterForArrayConstraintFromSetFunctionParameter($functionParameter))) {
            throw new InvalidArgumentException($functionParameterArrayErrorMessage, __LINE__);
        }
        $this->functionParameter = $functionParameter;

        return $this;
    }

    /**
     * Add item to functionParameter value
     * @param FunctionParameter $item
     * @return VirtualTerminalFunction
     * @throws InvalidArgumentException
     */
    public function addToFunctionParameter(FunctionParameter $item): self
    {
        // validation for constraint: itemType
        $this->functionParameter[] = $item;

        return $this;
    }
}
