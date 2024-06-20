<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for result StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the process
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Result extends AbstractStructBase
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
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $shortMessage = null;

    /**
     * The longMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $longMessage = null;

    /**
     * The partnerCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $partnerCode = null;

    /**
     * The partnerCodeLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $partnerCodeLabel = null;

    /**
     * Constructor method for result
     * @param string|null $code
     * @param string|null $shortMessage
     * @param string|null $longMessage
     * @param string|null $partnerCode
     * @param string|null $partnerCodeLabel
     * @uses Result::setCode()
     * @uses Result::setShortMessage()
     * @uses Result::setLongMessage()
     * @uses Result::setPartnerCode()
     * @uses Result::setPartnerCodeLabel()
     */
    public function __construct(?string $code = null, ?string $shortMessage = null, ?string $longMessage = null, ?string $partnerCode = null, ?string $partnerCodeLabel = null)
    {
        $this
            ->setCode($code)
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setPartnerCode($partnerCode)
            ->setPartnerCodeLabel($partnerCodeLabel);
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
     * @return Result
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShortMessage(): ?string
    {
        return $this->shortMessage ?? null;
    }

    /**
     * Set shortMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $shortMessage
     * @return Result
     */
    public function setShortMessage(?string $shortMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortMessage, true), gettype($shortMessage)), __LINE__);
        }
        if (is_null($shortMessage)) {
            unset($this->shortMessage);
        } else {
            $this->shortMessage = $shortMessage;
        }

        return $this;
    }

    /**
     * Get longMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLongMessage(): ?string
    {
        return $this->longMessage ?? null;
    }

    /**
     * Set longMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $longMessage
     * @return Result
     */
    public function setLongMessage(?string $longMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longMessage, true), gettype($longMessage)), __LINE__);
        }
        if (is_null($longMessage)) {
            unset($this->longMessage);
        } else {
            $this->longMessage = $longMessage;
        }

        return $this;
    }

    /**
     * Get partnerCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerCode(): ?string
    {
        return $this->partnerCode ?? null;
    }

    /**
     * Set partnerCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $partnerCode
     * @return Result
     */
    public function setPartnerCode(?string $partnerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerCode) && !is_string($partnerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCode, true), gettype($partnerCode)), __LINE__);
        }
        if (is_null($partnerCode)) {
            unset($this->partnerCode);
        } else {
            $this->partnerCode = $partnerCode;
        }

        return $this;
    }

    /**
     * Get partnerCodeLabel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerCodeLabel(): ?string
    {
        return $this->partnerCodeLabel ?? null;
    }

    /**
     * Set partnerCodeLabel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $partnerCodeLabel
     * @return Result
     */
    public function setPartnerCodeLabel(?string $partnerCodeLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerCodeLabel) && !is_string($partnerCodeLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCodeLabel, true), gettype($partnerCodeLabel)), __LINE__);
        }
        if (is_null($partnerCodeLabel)) {
            unset($this->partnerCodeLabel);
        } else {
            $this->partnerCodeLabel = $partnerCodeLabel;
        }

        return $this;
    }
}
