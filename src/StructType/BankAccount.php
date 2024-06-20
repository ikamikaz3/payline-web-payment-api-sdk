<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankAccount StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains bankAccount information
 * @subpackage Structs
 */
class BankAccount extends AbstractStructBase
{
    /**
     * The bankCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $bankCode = null;

    /**
     * The bankNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $bankNumber = null;

    /**
     * The iban
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Iban|null
     */
    protected ?Iban $iban = null;

    /**
     * The rib
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Rib|null
     */
    protected ?Rib $rib = null;

    /**
     * Constructor method for bankAccount
     * @param string|null $bankCode
     * @param string|null $bankNumber
     * @param Iban|null $iban
     * @param Rib|null $rib
     * @uses BankAccount::setBankCode()
     * @uses BankAccount::setBankNumber()
     * @uses BankAccount::setIban()
     * @uses BankAccount::setRib()
     */
    public function __construct(?string $bankCode = null, ?string $bankNumber = null, ?Iban $iban = null, ?Rib $rib = null)
    {
        $this
            ->setBankCode($bankCode)
            ->setBankNumber($bankNumber)
            ->setIban($iban)
            ->setRib($rib);
    }

    /**
     * Get bankCode value
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * Set bankCode value
     * @param string|null $bankCode
     * @return BankAccount
     */
    public function setBankCode(?string $bankCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCode) && !is_string($bankCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCode, true), gettype($bankCode)), __LINE__);
        }
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get bankNumber value
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }

    /**
     * Set bankNumber value
     * @param string|null $bankNumber
     * @return BankAccount
     */
    public function setBankNumber(?string $bankNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNumber) && !is_string($bankNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNumber, true), gettype($bankNumber)), __LINE__);
        }
        $this->bankNumber = $bankNumber;

        return $this;
    }

    /**
     * Get iban value
     * @return Iban|null
     */
    public function getIban(): ?Iban
    {
        return $this->iban;
    }

    /**
     * Set iban value
     * @param Iban|null $iban
     * @return BankAccount
     */
    public function setIban(?Iban $iban = null): self
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get rib value
     * @return Rib|null
     */
    public function getRib(): ?Rib
    {
        return $this->rib;
    }

    /**
     * Set rib value
     * @param Rib|null $rib
     * @return BankAccount
     */
    public function setRib(?Rib $rib = null): self
    {
        $this->rib = $rib;

        return $this;
    }
}
