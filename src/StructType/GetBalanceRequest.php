<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBalanceRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the getBalance method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBalanceRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The cardID
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $cardID = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * Constructor method for getBalanceRequest
     * @uses GetBalanceRequest::setVersion()
     * @uses GetBalanceRequest::setCardID()
     * @uses GetBalanceRequest::setContractNumber()
     * @param string $version
     * @param string $cardID
     * @param string $contractNumber
     */
    public function __construct(?string $version = null, ?string $cardID = null, ?string $contractNumber = null)
    {
        $this
            ->setVersion($version)
            ->setCardID($cardID)
            ->setContractNumber($contractNumber);
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\GetBalanceRequest
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get cardID value
     * @return string|null
     */
    public function getCardID(): ?string
    {
        return $this->cardID;
    }
    /**
     * Set cardID value
     * @param string $cardID
     * @return \StructType\GetBalanceRequest
     */
    public function setCardID(?string $cardID = null): self
    {
        // validation for constraint: string
        if (!is_null($cardID) && !is_string($cardID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardID, true), gettype($cardID)), __LINE__);
        }
        $this->cardID = $cardID;
        
        return $this;
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \StructType\GetBalanceRequest
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        
        return $this;
    }
}
