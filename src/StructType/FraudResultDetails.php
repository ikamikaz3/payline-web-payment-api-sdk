<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fraudResultDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the fraud result details
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class FraudResultDetails extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $code = null;

    /**
     * The shortMessage
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $shortMessage = null;

    /**
     * The longMessage
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $longMessage = null;

    /**
     * Constructor method for fraudResultDetails
     * @param string|null $code
     * @param string|null $shortMessage
     * @param string|null $longMessage
     * @uses FraudResultDetails::setCode()
     * @uses FraudResultDetails::setShortMessage()
     * @uses FraudResultDetails::setLongMessage()
     */
    public function __construct(?string $code = null, ?string $shortMessage = null, ?string $longMessage = null)
    {
        $this
            ->setCode($code)
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage);
    }

    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Set code value
     * @param string|null $code
     * @return FraudResultDetails
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;

        return $this;
    }

    /**
     * Get shortMessage value
     * @return string|null
     */
    public function getShortMessage(): ?string
    {
        return $this->shortMessage;
    }

    /**
     * Set shortMessage value
     * @param string|null $shortMessage
     * @return FraudResultDetails
     */
    public function setShortMessage(?string $shortMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortMessage, true), gettype($shortMessage)), __LINE__);
        }
        $this->shortMessage = $shortMessage;

        return $this;
    }

    /**
     * Get longMessage value
     * @return string|null
     */
    public function getLongMessage(): ?string
    {
        return $this->longMessage;
    }

    /**
     * Set longMessage value
     * @param string|null $longMessage
     * @return FraudResultDetails
     */
    public function setLongMessage(?string $longMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longMessage, true), gettype($longMessage)), __LINE__);
        }
        $this->longMessage = $longMessage;

        return $this;
    }
}
