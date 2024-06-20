<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for option StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of subscribed options
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Option extends AbstractStructBase
{
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The subscribed
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $subscribed = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for option
     * @uses Option::setId()
     * @uses Option::setSubscribed()
     * @uses Option::setEndDate()
     * @param string $id
     * @param bool $subscribed
     * @param string $endDate
     */
    public function __construct(?string $id = null, ?bool $subscribed = null, ?string $endDate = null)
    {
        $this
            ->setId($id)
            ->setSubscribed($subscribed)
            ->setEndDate($endDate);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\Option
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }
    /**
     * Get subscribed value
     * @return bool|null
     */
    public function getSubscribed(): ?bool
    {
        return $this->subscribed;
    }
    /**
     * Set subscribed value
     * @param bool $subscribed
     * @return \StructType\Option
     */
    public function setSubscribed(?bool $subscribed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribed) && !is_bool($subscribed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribed, true), gettype($subscribed)), __LINE__);
        }
        $this->subscribed = $subscribed;

        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\Option
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;

        return $this;
    }
}
