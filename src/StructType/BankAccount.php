<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bankAccount StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains bankAccount information
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\Iban|null
     */
    protected ?\StructType\Iban $iban = null;
    /**
     * The rib
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Rib|null
     */
    protected ?\StructType\Rib $rib = null;
    /**
     * Constructor method for bankAccount
     * @uses BankAccount::setBankCode()
     * @uses BankAccount::setBankNumber()
     * @uses BankAccount::setIban()
     * @uses BankAccount::setRib()
     * @param string $bankCode
     * @param string $bankNumber
     * @param \StructType\Iban $iban
     * @param \StructType\Rib $rib
     */
    public function __construct(?string $bankCode = null, ?string $bankNumber = null, ?\StructType\Iban $iban = null, ?\StructType\Rib $rib = null)
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
     * @param string $bankCode
     * @return \StructType\BankAccount
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
     * @param string $bankNumber
     * @return \StructType\BankAccount
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
     * @return \StructType\Iban|null
     */
    public function getIban(): ?\StructType\Iban
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param \StructType\Iban $iban
     * @return \StructType\BankAccount
     */
    public function setIban(?\StructType\Iban $iban = null): self
    {
        $this->iban = $iban;

        return $this;
    }
    /**
     * Get rib value
     * @return \StructType\Rib|null
     */
    public function getRib(): ?\StructType\Rib
    {
        return $this->rib;
    }
    /**
     * Set rib value
     * @param \StructType\Rib $rib
     * @return \StructType\BankAccount
     */
    public function setRib(?\StructType\Rib $rib = null): self
    {
        $this->rib = $rib;

        return $this;
    }
}
