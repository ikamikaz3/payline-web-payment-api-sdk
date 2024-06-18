<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creditor StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the creditor
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Creditor extends AbstractStructBase
{
    /**
     * The bic
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $bic = null;
    /**
     * The iban
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for creditor
     * @uses Creditor::setBic()
     * @uses Creditor::setIban()
     * @uses Creditor::setName()
     * @param string $bic
     * @param string $iban
     * @param string $name
     */
    public function __construct(?string $bic = null, ?string $iban = null, ?string $name = null)
    {
        $this
            ->setBic($bic)
            ->setIban($iban)
            ->setName($name);
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \StructType\Creditor
     */
    public function setBic(?string $bic = null): self
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic, true), gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \StructType\Creditor
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\Creditor
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}
