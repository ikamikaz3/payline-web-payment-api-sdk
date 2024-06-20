<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for balance StructType
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Balance extends AbstractStructBase
{
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $amount = null;

    /**
     * The currency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;

    /**
     * Constructor method for balance
     * @param string|null $amount
     * @param string|null $currency
     * @uses Balance::setAmount()
     * @uses Balance::setCurrency()
     */
    public function __construct(?string $amount = null, ?string $currency = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrency($currency);
    }

    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Set amount value
     * @param string|null $amount
     * @return Balance
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set currency value
     * @param string|null $currency
     * @return Balance
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;

        return $this;
    }
}
