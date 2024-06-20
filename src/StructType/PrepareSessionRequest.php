<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepareSessionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the prepareSession method
 * @subpackage Structs
 */
class PrepareSessionRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;

    /**
     * The orderRef
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $orderRef = null;

    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $miscData = null;

    /**
     * Constructor method for prepareSessionRequest
     * @param string|null $version
     * @param string|null $contractNumber
     * @param string|null $orderRef
     * @param string|null $miscData
     * @uses PrepareSessionRequest::setVersion()
     * @uses PrepareSessionRequest::setContractNumber()
     * @uses PrepareSessionRequest::setOrderRef()
     * @uses PrepareSessionRequest::setMiscData()
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?string $orderRef = null, ?string $miscData = null)
    {
        $this
            ->setVersion($version)
            ->setContractNumber($contractNumber)
            ->setOrderRef($orderRef)
            ->setMiscData($miscData);
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
     * @param string|null $version
     * @return PrepareSessionRequest
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
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    /**
     * Set contractNumber value
     * @param string|null $contractNumber
     * @return PrepareSessionRequest
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

    /**
     * Get orderRef value
     * @return string|null
     */
    public function getOrderRef(): ?string
    {
        return $this->orderRef;
    }

    /**
     * Set orderRef value
     * @param string|null $orderRef
     * @return PrepareSessionRequest
     */
    public function setOrderRef(?string $orderRef = null): self
    {
        // validation for constraint: string
        if (!is_null($orderRef) && !is_string($orderRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderRef, true), gettype($orderRef)), __LINE__);
        }
        $this->orderRef = $orderRef;

        return $this;
    }

    /**
     * Get miscData value
     * @return string|null
     */
    public function getMiscData(): ?string
    {
        return $this->miscData;
    }

    /**
     * Set miscData value
     * @param string|null $miscData
     * @return PrepareSessionRequest
     */
    public function setMiscData(?string $miscData = null): self
    {
        // validation for constraint: string
        if (!is_null($miscData) && !is_string($miscData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscData, true), gettype($miscData)), __LINE__);
        }
        $this->miscData = $miscData;

        return $this;
    }
}
