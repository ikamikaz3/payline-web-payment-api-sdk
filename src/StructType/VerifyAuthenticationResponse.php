<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyAuthenticationResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doAuthentication method
 * @subpackage Structs
 */
class VerifyAuthenticationResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The transient
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transient = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

    /**
     * The mpiResult
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mpiResult = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * Constructor method for verifyAuthenticationResponse
     * @param Result|null $result
     * @param string|null $transient
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param string|null $mpiResult
     * @param PrivateDataList|null $privateDataList
     * @uses VerifyAuthenticationResponse::setResult()
     * @uses VerifyAuthenticationResponse::setTransient()
     * @uses VerifyAuthenticationResponse::setAuthentication3DSecure()
     * @uses VerifyAuthenticationResponse::setMpiResult()
     * @uses VerifyAuthenticationResponse::setPrivateDataList()
     */
    public function __construct(?Result $result = null, ?string $transient = null, ?Authentication3DSecure $authentication3DSecure = null, ?string $mpiResult = null, ?PrivateDataList $privateDataList = null)
    {
        $this
            ->setResult($result)
            ->setTransient($transient)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setMpiResult($mpiResult)
            ->setPrivateDataList($privateDataList);
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
     * @return VerifyAuthenticationResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get transient value
     * @return string|null
     */
    public function getTransient(): ?string
    {
        return $this->transient;
    }

    /**
     * Set transient value
     * @param string|null $transient
     * @return VerifyAuthenticationResponse
     */
    public function setTransient(?string $transient = null): self
    {
        // validation for constraint: string
        if (!is_null($transient) && !is_string($transient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transient, true), gettype($transient)), __LINE__);
        }
        $this->transient = $transient;

        return $this;
    }

    /**
     * Get authentication3DSecure value
     * @return Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }

    /**
     * Set authentication3DSecure value
     * @param Authentication3DSecure|null $authentication3DSecure
     * @return VerifyAuthenticationResponse
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
    {
        $this->authentication3DSecure = $authentication3DSecure;

        return $this;
    }

    /**
     * Get mpiResult value
     * @return string|null
     */
    public function getMpiResult(): ?string
    {
        return $this->mpiResult;
    }

    /**
     * Set mpiResult value
     * @param string|null $mpiResult
     * @return VerifyAuthenticationResponse
     */
    public function setMpiResult(?string $mpiResult = null): self
    {
        // validation for constraint: string
        if (!is_null($mpiResult) && !is_string($mpiResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mpiResult, true), gettype($mpiResult)), __LINE__);
        }
        $this->mpiResult = $mpiResult;

        return $this;
    }

    /**
     * Get privateDataList value
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return VerifyAuthenticationResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
