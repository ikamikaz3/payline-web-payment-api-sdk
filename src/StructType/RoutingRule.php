<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for routingRule StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about a routingRule associated with a Payment Facilitator
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoutingRule extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The sourceContractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $sourceContractNumber = null;
    /**
     * The targetContractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $targetContractNumber = null;
    /**
     * Constructor method for routingRule
     * @uses RoutingRule::setId()
     * @uses RoutingRule::setSourceContractNumber()
     * @uses RoutingRule::setTargetContractNumber()
     * @param string $id
     * @param string $sourceContractNumber
     * @param string $targetContractNumber
     */
    public function __construct(?string $id = null, ?string $sourceContractNumber = null, ?string $targetContractNumber = null)
    {
        $this
            ->setId($id)
            ->setSourceContractNumber($sourceContractNumber)
            ->setTargetContractNumber($targetContractNumber);
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \StructType\RoutingRule
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }

        return $this;
    }
    /**
     * Get sourceContractNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSourceContractNumber(): ?string
    {
        return $this->sourceContractNumber ?? null;
    }
    /**
     * Set sourceContractNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sourceContractNumber
     * @return \StructType\RoutingRule
     */
    public function setSourceContractNumber(?string $sourceContractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceContractNumber) && !is_string($sourceContractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceContractNumber, true), gettype($sourceContractNumber)), __LINE__);
        }
        if (is_null($sourceContractNumber) || (is_array($sourceContractNumber) && empty($sourceContractNumber))) {
            unset($this->sourceContractNumber);
        } else {
            $this->sourceContractNumber = $sourceContractNumber;
        }

        return $this;
    }
    /**
     * Get targetContractNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTargetContractNumber(): ?string
    {
        return $this->targetContractNumber ?? null;
    }
    /**
     * Set targetContractNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $targetContractNumber
     * @return \StructType\RoutingRule
     */
    public function setTargetContractNumber(?string $targetContractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($targetContractNumber) && !is_string($targetContractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetContractNumber, true), gettype($targetContractNumber)), __LINE__);
        }
        if (is_null($targetContractNumber) || (is_array($targetContractNumber) && empty($targetContractNumber))) {
            unset($this->targetContractNumber);
        } else {
            $this->targetContractNumber = $targetContractNumber;
        }

        return $this;
    }
}
