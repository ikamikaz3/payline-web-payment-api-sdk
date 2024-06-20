<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketSend StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information e-ticket
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TicketSend extends AbstractStructBase
{
    /**
     * The toBuyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $toBuyer = null;
    /**
     * The toMerchant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $toMerchant = null;
    /**
     * Constructor method for ticketSend
     * @uses TicketSend::setToBuyer()
     * @uses TicketSend::setToMerchant()
     * @param bool $toBuyer
     * @param bool $toMerchant
     */
    public function __construct(?bool $toBuyer = null, ?bool $toMerchant = null)
    {
        $this
            ->setToBuyer($toBuyer)
            ->setToMerchant($toMerchant);
    }
    /**
     * Get toBuyer value
     * @return bool|null
     */
    public function getToBuyer(): ?bool
    {
        return $this->toBuyer;
    }
    /**
     * Set toBuyer value
     * @param bool $toBuyer
     * @return \StructType\TicketSend
     */
    public function setToBuyer(?bool $toBuyer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($toBuyer) && !is_bool($toBuyer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toBuyer, true), gettype($toBuyer)), __LINE__);
        }
        $this->toBuyer = $toBuyer;

        return $this;
    }
    /**
     * Get toMerchant value
     * @return bool|null
     */
    public function getToMerchant(): ?bool
    {
        return $this->toMerchant;
    }
    /**
     * Set toMerchant value
     * @param bool $toMerchant
     * @return \StructType\TicketSend
     */
    public function setToMerchant(?bool $toMerchant = null): self
    {
        // validation for constraint: boolean
        if (!is_null($toMerchant) && !is_bool($toMerchant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toMerchant, true), gettype($toMerchant)), __LINE__);
        }
        $this->toMerchant = $toMerchant;

        return $this;
    }
}
