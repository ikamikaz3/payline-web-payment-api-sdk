<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for walletIdList StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the list of selected card
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WalletIdList extends AbstractStructBase
{
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - minOccurs: 1
     * @var string[]
     */
    protected array $walletId;
    /**
     * Constructor method for walletIdList
     * @uses WalletIdList::setWalletId()
     * @param string[] $walletId
     */
    public function __construct(array $walletId)
    {
        $this
            ->setWalletId($walletId);
    }
    /**
     * Get walletId value
     * @return string[]
     */
    public function getWalletId(): array
    {
        return $this->walletId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setWalletId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWalletId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWalletIdForArrayConstraintFromSetWalletId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $walletIdListWalletIdItem) {
            // validation for constraint: itemType
            if (!is_string($walletIdListWalletIdItem)) {
                $invalidValues[] = is_object($walletIdListWalletIdItem) ? get_class($walletIdListWalletIdItem) : sprintf('%s(%s)', gettype($walletIdListWalletIdItem), var_export($walletIdListWalletIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The walletId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set walletId value
     * @throws InvalidArgumentException
     * @param string[] $walletId
     * @return \StructType\WalletIdList
     */
    public function setWalletId(array $walletId): self
    {
        // validation for constraint: array
        if ('' !== ($walletIdArrayErrorMessage = self::validateWalletIdForArrayConstraintFromSetWalletId($walletId))) {
            throw new InvalidArgumentException($walletIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($walletId) && count($walletId) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($walletId)), __LINE__);
        }
        $this->walletId = $walletId;
        
        return $this;
    }
    /**
     * Add item to walletId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\WalletIdList
     */
    public function addToWalletId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The walletId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->walletId) && count($this->walletId) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->walletId)), __LINE__);
        }
        $this->walletId[] = $item;
        
        return $this;
    }
}
