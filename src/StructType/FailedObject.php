<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for failedObject StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains failedObject
 * @subpackage Structs
 */
class FailedObject extends AbstractStructBase
{
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $transactionID = null;

    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * Constructor method for failedObject
     * @param string|null $transactionID
     * @param Result|null $result
     * @uses FailedObject::setTransactionID()
     * @uses FailedObject::setResult()
     */
    public function __construct(?string $transactionID = null, ?Result $result = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setResult($result);
    }

    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }

    /**
     * Set transactionID value
     * @param string|null $transactionID
     * @return FailedObject
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;

        return $this;
    }

    /**
     * Get result value
     * @return Result|null
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param Result|null $result
     * @return FailedObject
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
}
