<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doWebPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doWebPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoWebPaymentResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The redirectURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $redirectURL = null;
    /**
     * The stepCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $stepCode = null;
    /**
     * The reqCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $reqCode = null;
    /**
     * The method
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $method = null;
    /**
     * Constructor method for doWebPaymentResponse
     * @uses DoWebPaymentResponse::setResult()
     * @uses DoWebPaymentResponse::setToken()
     * @uses DoWebPaymentResponse::setRedirectURL()
     * @uses DoWebPaymentResponse::setStepCode()
     * @uses DoWebPaymentResponse::setReqCode()
     * @uses DoWebPaymentResponse::setMethod()
     * @param \StructType\Result $result
     * @param string $token
     * @param string $redirectURL
     * @param string $stepCode
     * @param string $reqCode
     * @param string $method
     */
    public function __construct(?\StructType\Result $result = null, ?string $token = null, ?string $redirectURL = null, ?string $stepCode = null, ?string $reqCode = null, ?string $method = null)
    {
        $this
            ->setResult($result)
            ->setToken($token)
            ->setRedirectURL($redirectURL)
            ->setStepCode($stepCode)
            ->setReqCode($reqCode)
            ->setMethod($method);
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
     * @return \StructType\DoWebPaymentResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \StructType\DoWebPaymentResponse
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;

        return $this;
    }
    /**
     * Get redirectURL value
     * @return string|null
     */
    public function getRedirectURL(): ?string
    {
        return $this->redirectURL;
    }
    /**
     * Set redirectURL value
     * @param string $redirectURL
     * @return \StructType\DoWebPaymentResponse
     */
    public function setRedirectURL(?string $redirectURL = null): self
    {
        // validation for constraint: string
        if (!is_null($redirectURL) && !is_string($redirectURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirectURL, true), gettype($redirectURL)), __LINE__);
        }
        $this->redirectURL = $redirectURL;

        return $this;
    }
    /**
     * Get stepCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStepCode(): ?string
    {
        return $this->stepCode ?? null;
    }
    /**
     * Set stepCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stepCode
     * @return \StructType\DoWebPaymentResponse
     */
    public function setStepCode(?string $stepCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stepCode) && !is_string($stepCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stepCode, true), gettype($stepCode)), __LINE__);
        }
        if (is_null($stepCode) || (is_array($stepCode) && empty($stepCode))) {
            unset($this->stepCode);
        } else {
            $this->stepCode = $stepCode;
        }

        return $this;
    }
    /**
     * Get reqCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReqCode(): ?string
    {
        return $this->reqCode ?? null;
    }
    /**
     * Set reqCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reqCode
     * @return \StructType\DoWebPaymentResponse
     */
    public function setReqCode(?string $reqCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reqCode) && !is_string($reqCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reqCode, true), gettype($reqCode)), __LINE__);
        }
        if (is_null($reqCode) || (is_array($reqCode) && empty($reqCode))) {
            unset($this->reqCode);
        } else {
            $this->reqCode = $reqCode;
        }

        return $this;
    }
    /**
     * Get method value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method ?? null;
    }
    /**
     * Set method value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $method
     * @return \StructType\DoWebPaymentResponse
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        if (is_null($method) || (is_array($method) && empty($method))) {
            unset($this->method);
        } else {
            $this->method = $method;
        }

        return $this;
    }
}
