<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for technicalData StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains technical data used to define acquirer service
 * @subpackage Structs
 */
class TechnicalData extends AbstractStructBase
{
    /**
     * The terminalNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $terminalNumber = null;

    /**
     * The GTInstance
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $GTInstance = null;

    /**
     * The paymentProfil
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $paymentProfil = null;

    /**
     * Constructor method for technicalData
     * @param string|null $terminalNumber
     * @param string|null $gTInstance
     * @param string|null $paymentProfil
     * @uses TechnicalData::setTerminalNumber()
     * @uses TechnicalData::setGTInstance()
     * @uses TechnicalData::setPaymentProfil()
     */
    public function __construct(?string $terminalNumber = null, ?string $gTInstance = null, ?string $paymentProfil = null)
    {
        $this
            ->setTerminalNumber($terminalNumber)
            ->setGTInstance($gTInstance)
            ->setPaymentProfil($paymentProfil);
    }

    /**
     * Get terminalNumber value
     * @return string|null
     */
    public function getTerminalNumber(): ?string
    {
        return $this->terminalNumber;
    }

    /**
     * Set terminalNumber value
     * @param string|null $terminalNumber
     * @return TechnicalData
     */
    public function setTerminalNumber(?string $terminalNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($terminalNumber) && !is_string($terminalNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminalNumber, true), gettype($terminalNumber)), __LINE__);
        }
        $this->terminalNumber = $terminalNumber;

        return $this;
    }

    /**
     * Get GTInstance value
     * @return string|null
     */
    public function getGTInstance(): ?string
    {
        return $this->GTInstance;
    }

    /**
     * Set GTInstance value
     * @param string|null $gTInstance
     * @return TechnicalData
     */
    public function setGTInstance(?string $gTInstance = null): self
    {
        // validation for constraint: string
        if (!is_null($gTInstance) && !is_string($gTInstance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gTInstance, true), gettype($gTInstance)), __LINE__);
        }
        $this->GTInstance = $gTInstance;

        return $this;
    }

    /**
     * Get paymentProfil value
     * @return string|null
     */
    public function getPaymentProfil(): ?string
    {
        return $this->paymentProfil;
    }

    /**
     * Set paymentProfil value
     * @param string|null $paymentProfil
     * @return TechnicalData
     */
    public function setPaymentProfil(?string $paymentProfil = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProfil) && !is_string($paymentProfil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProfil, true), gettype($paymentProfil)), __LINE__);
        }
        $this->paymentProfil = $paymentProfil;

        return $this;
    }
}
