<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyAuthenticationResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doAuthentication method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyAuthenticationResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
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
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
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
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * Constructor method for verifyAuthenticationResponse
     * @uses VerifyAuthenticationResponse::setResult()
     * @uses VerifyAuthenticationResponse::setTransient()
     * @uses VerifyAuthenticationResponse::setAuthentication3DSecure()
     * @uses VerifyAuthenticationResponse::setMpiResult()
     * @uses VerifyAuthenticationResponse::setPrivateDataList()
     * @param \StructType\Result $result
     * @param string $transient
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $mpiResult
     * @param \StructType\PrivateDataList $privateDataList
     */
    public function __construct(?\StructType\Result $result = null, ?string $transient = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $mpiResult = null, ?\StructType\PrivateDataList $privateDataList = null)
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\VerifyAuthenticationResponse
     */
    public function setResult(?\StructType\Result $result = null): self
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
     * @param string $transient
     * @return \StructType\VerifyAuthenticationResponse
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
     * @return \StructType\Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?\StructType\Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }
    /**
     * Set authentication3DSecure value
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @return \StructType\VerifyAuthenticationResponse
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
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
     * @param string $mpiResult
     * @return \StructType\VerifyAuthenticationResponse
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
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList;
    }
    /**
     * Set privateDataList value
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\VerifyAuthenticationResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
}
