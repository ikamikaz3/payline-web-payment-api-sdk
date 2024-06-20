<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contractNumberWalletList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of contract number of a wallet
 * @subpackage Structs
 */
class ContractNumberWalletList extends AbstractStructBase
{
    /**
     * The contractNumberWallet
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $contractNumberWallet = null;

    /**
     * Constructor method for contractNumberWalletList
     * @param string[] $contractNumberWallet
     * @uses ContractNumberWalletList::setContractNumberWallet()
     */
    public function __construct(?array $contractNumberWallet = null)
    {
        $this
            ->setContractNumberWallet($contractNumberWallet);
    }

    /**
     * Get contractNumberWallet value
     * @return array|null
     */
    public function getContractNumberWallet(): ?array
    {
        return $this->contractNumberWallet;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setContractNumberWallet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContractNumberWallet method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContractNumberWalletForArrayConstraintFromSetContractNumberWallet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contractNumberWalletListContractNumberWalletItem) {
            // validation for constraint: itemType
            if (!is_string($contractNumberWalletListContractNumberWalletItem)) {
                $invalidValues[] = is_object($contractNumberWalletListContractNumberWalletItem) ? get_class($contractNumberWalletListContractNumberWalletItem) : sprintf('%s(%s)', gettype($contractNumberWalletListContractNumberWalletItem), var_export($contractNumberWalletListContractNumberWalletItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The contractNumberWallet property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set contractNumberWallet value
     * @param string[] $contractNumberWallet
     * @return ContractNumberWalletList
     * @throws InvalidArgumentException
     */
    public function setContractNumberWallet(?array $contractNumberWallet = null): self
    {
        // validation for constraint: array
        if ('' !== ($contractNumberWalletArrayErrorMessage = self::validateContractNumberWalletForArrayConstraintFromSetContractNumberWallet($contractNumberWallet))) {
            throw new InvalidArgumentException($contractNumberWalletArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($contractNumberWallet) && count($contractNumberWallet) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($contractNumberWallet)), __LINE__);
        }
        $this->contractNumberWallet = $contractNumberWallet;

        return $this;
    }

    /**
     * Add item to contractNumberWallet value
     * @param string $item
     * @return ContractNumberWalletList
     * @throws InvalidArgumentException
     */
    public function addToContractNumberWallet(string $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(99)
        if (is_array($this->contractNumberWallet) && count($this->contractNumberWallet) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->contractNumberWallet)), __LINE__);
        }
        $this->contractNumberWallet[] = $item;

        return $this;
    }
}
