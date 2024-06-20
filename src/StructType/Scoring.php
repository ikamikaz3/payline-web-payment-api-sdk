<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for scoring StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the scoring
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Scoring extends AbstractStructBase
{
    /**
     * The partnerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $partnerId = null;

    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderId = null;

    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $value = null;

    /**
     * The response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $response = null;

    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $errorMessage = null;

    /**
     * Constructor method for scoring
     * @param string|null $partnerId
     * @param string|null $orderId
     * @param string|null $value
     * @param string|null $response
     * @param string|null $errorMessage
     * @uses Scoring::setPartnerId()
     * @uses Scoring::setOrderId()
     * @uses Scoring::setValue()
     * @uses Scoring::setResponse()
     * @uses Scoring::setErrorMessage()
     */
    public function __construct(?string $partnerId = null, ?string $orderId = null, ?string $value = null, ?string $response = null, ?string $errorMessage = null)
    {
        $this
            ->setPartnerId($partnerId)
            ->setOrderId($orderId)
            ->setValue($value)
            ->setResponse($response)
            ->setErrorMessage($errorMessage);
    }

    /**
     * Get partnerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerId(): ?string
    {
        return $this->partnerId ?? null;
    }

    /**
     * Set partnerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $partnerId
     * @return Scoring
     */
    public function setPartnerId(?string $partnerId = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerId) && !is_string($partnerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerId, true), gettype($partnerId)), __LINE__);
        }
        if (is_null($partnerId)) {
            unset($this->partnerId);
        } else {
            $this->partnerId = $partnerId;
        }

        return $this;
    }

    /**
     * Get orderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId ?? null;
    }

    /**
     * Set orderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $orderId
     * @return Scoring
     */
    public function setOrderId(?string $orderId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        if (is_null($orderId)) {
            unset($this->orderId);
        } else {
            $this->orderId = $orderId;
        }

        return $this;
    }

    /**
     * Get value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value ?? null;
    }

    /**
     * Set value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $value
     * @return Scoring
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value)) {
            unset($this->value);
        } else {
            $this->value = $value;
        }

        return $this;
    }

    /**
     * Get response value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponse(): ?string
    {
        return $this->response ?? null;
    }

    /**
     * Set response value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $response
     * @return Scoring
     */
    public function setResponse(?string $response = null): self
    {
        // validation for constraint: string
        if (!is_null($response) && !is_string($response)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($response, true), gettype($response)), __LINE__);
        }
        if (is_null($response)) {
            unset($this->response);
        } else {
            $this->response = $response;
        }

        return $this;
    }

    /**
     * Get errorMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage ?? null;
    }

    /**
     * Set errorMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $errorMessage
     * @return Scoring
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        if (is_null($errorMessage)) {
            unset($this->errorMessage);
        } else {
            $this->errorMessage = $errorMessage;
        }

        return $this;
    }
}
