<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refundAuthorizationList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of authorization to refund
 * @subpackage Structs
 */
class RefundAuthorizationList extends AbstractStructBase
{
    /**
     * The refund
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var Refund[]
     */
    protected array $refund;

    /**
     * Constructor method for refundAuthorizationList
     * @param Refund[] $refund
     * @uses RefundAuthorizationList::setRefund()
     */
    public function __construct(array $refund)
    {
        $this
            ->setRefund($refund);
    }

    /**
     * Get refund value
     * @return Refund[]
     */
    public function getRefund(): array
    {
        return $this->refund;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setRefund method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefund method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
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
            if (!$refundAuthorizationListRefundItem instanceof Refund) {
                $invalidValues[] = is_object($refundAuthorizationListRefundItem) ? get_class($refundAuthorizationListRefundItem) : sprintf('%s(%s)', gettype($refundAuthorizationListRefundItem), var_export($refundAuthorizationListRefundItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refund property can only contain items of type Refund, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set refund value
     * @param Refund[] $refund
     * @return RefundAuthorizationList
     * @throws InvalidArgumentException
     */
    public function setRefund(array $refund): self
    {
        // validation for constraint: array
        if ('' !== ($refundArrayErrorMessage = self::validateRefundForArrayConstraintFromSetRefund($refund))) {
            throw new InvalidArgumentException($refundArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (count($refund) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($refund)), __LINE__);
        }
        $this->refund = $refund;

        return $this;
    }

    /**
     * Add item to refund value
     * @param Refund $item
     * @return RefundAuthorizationList
     * @throws InvalidArgumentException
     */
    public function addToRefund(Refund $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(5000)
        if (count($this->refund) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->refund)), __LINE__);
        }
        $this->refund[] = $item;

        return $this;
    }
}
