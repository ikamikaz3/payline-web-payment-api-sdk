<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refundAuthorizationList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of authorization to refund
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RefundAuthorizationList extends AbstractStructBase
{
    /**
     * The refund
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var \StructType\Refund[]
     */
    protected array $refund;
    /**
     * Constructor method for refundAuthorizationList
     * @uses RefundAuthorizationList::setRefund()
     * @param \StructType\Refund[] $refund
     */
    public function __construct(array $refund)
    {
        $this
            ->setRefund($refund);
    }
    /**
     * Get refund value
     * @return \StructType\Refund[]
     */
    public function getRefund(): array
    {
        return $this->refund;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRefund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefund method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundForArrayConstraintFromSetRefund(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundAuthorizationListRefundItem) {
            // validation for constraint: itemType
            if (!$refundAuthorizationListRefundItem instanceof \StructType\Refund) {
                $invalidValues[] = is_object($refundAuthorizationListRefundItem) ? get_class($refundAuthorizationListRefundItem) : sprintf('%s(%s)', gettype($refundAuthorizationListRefundItem), var_export($refundAuthorizationListRefundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refund property can only contain items of type \StructType\Refund, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refund value
     * @throws InvalidArgumentException
     * @param \StructType\Refund[] $refund
     * @return \StructType\RefundAuthorizationList
     */
    public function setRefund(array $refund): self
    {
        // validation for constraint: array
        if ('' !== ($refundArrayErrorMessage = self::validateRefundForArrayConstraintFromSetRefund($refund))) {
            throw new InvalidArgumentException($refundArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($refund) && count($refund) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($refund)), __LINE__);
        }
        $this->refund = $refund;
        
        return $this;
    }
    /**
     * Add item to refund value
     * @throws InvalidArgumentException
     * @param \StructType\Refund $item
     * @return \StructType\RefundAuthorizationList
     */
    public function addToRefund(\StructType\Refund $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Refund) {
            throw new InvalidArgumentException(sprintf('The refund property can only contain items of type \StructType\Refund, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (is_array($this->refund) && count($this->refund) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->refund)), __LINE__);
        }
        $this->refund[] = $item;
        
        return $this;
    }
}
