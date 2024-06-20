<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doCaptureResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doCapture method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoCaptureResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The reAuthorization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $reAuthorization = null;

    /**
     * Constructor method for doCaptureResponse
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param string|null $reAuthorization
     * @uses DoCaptureResponse::setResult()
     * @uses DoCaptureResponse::setTransaction()
     * @uses DoCaptureResponse::setReAuthorization()
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?string $reAuthorization = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setReAuthorization($reAuthorization);
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
     * @return DoCaptureResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get transaction value
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    /**
     * Set transaction value
     * @param Transaction|null $transaction
     * @return DoCaptureResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get reAuthorization value
     * @return string|null
     */
    public function getReAuthorization(): ?string
    {
        return $this->reAuthorization;
    }

    /**
     * Set reAuthorization value
     * @param string|null $reAuthorization
     * @return DoCaptureResponse
     */
    public function setReAuthorization(?string $reAuthorization = null): self
    {
        // validation for constraint: string
        if (!is_null($reAuthorization) && !is_string($reAuthorization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reAuthorization, true), gettype($reAuthorization)), __LINE__);
        }
        $this->reAuthorization = $reAuthorization;

        return $this;
    }
}
