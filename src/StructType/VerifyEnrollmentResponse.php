<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyEnrollmentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the verifyEnrollment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VerifyEnrollmentResponse extends AbstractStructBase
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
     * The actionUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $actionUrl = null;
    /**
     * The actionMethod
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $actionMethod = null;
    /**
     * The pareqFieldName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $pareqFieldName = null;
    /**
     * The pareqFieldValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $pareqFieldValue = null;
    /**
     * The termUrlName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $termUrlName = null;
    /**
     * The termUrlValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $termUrlValue = null;
    /**
     * The mdFieldName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mdFieldName = null;
    /**
     * The mdFieldValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mdFieldValue = null;
    /**
     * The mpiResult
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $mpiResult = null;
    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The virtualCvx
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $virtualCvx = null;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The sdkChallenge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SdkChallenge|null
     */
    protected ?\StructType\SdkChallenge $sdkChallenge = null;
    /**
     * Constructor method for verifyEnrollmentResponse
     * @uses VerifyEnrollmentResponse::setResult()
     * @uses VerifyEnrollmentResponse::setTransient()
     * @uses VerifyEnrollmentResponse::setActionUrl()
     * @uses VerifyEnrollmentResponse::setActionMethod()
     * @uses VerifyEnrollmentResponse::setPareqFieldName()
     * @uses VerifyEnrollmentResponse::setPareqFieldValue()
     * @uses VerifyEnrollmentResponse::setTermUrlName()
     * @uses VerifyEnrollmentResponse::setTermUrlValue()
     * @uses VerifyEnrollmentResponse::setMdFieldName()
     * @uses VerifyEnrollmentResponse::setMdFieldValue()
     * @uses VerifyEnrollmentResponse::setMpiResult()
     * @uses VerifyEnrollmentResponse::setAuthentication3DSecure()
     * @uses VerifyEnrollmentResponse::setVirtualCvx()
     * @uses VerifyEnrollmentResponse::setToken()
     * @uses VerifyEnrollmentResponse::setPrivateDataList()
     * @uses VerifyEnrollmentResponse::setSdkChallenge()
     * @param \StructType\Result $result
     * @param string $transient
     * @param string $actionUrl
     * @param string $actionMethod
     * @param string $pareqFieldName
     * @param string $pareqFieldValue
     * @param string $termUrlName
     * @param string $termUrlValue
     * @param string $mdFieldName
     * @param string $mdFieldValue
     * @param string $mpiResult
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $virtualCvx
     * @param string $token
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\SdkChallenge $sdkChallenge
     */
    public function __construct(?\StructType\Result $result = null, ?string $transient = null, ?string $actionUrl = null, ?string $actionMethod = null, ?string $pareqFieldName = null, ?string $pareqFieldValue = null, ?string $termUrlName = null, ?string $termUrlValue = null, ?string $mdFieldName = null, ?string $mdFieldValue = null, ?string $mpiResult = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $virtualCvx = null, ?string $token = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\SdkChallenge $sdkChallenge = null)
    {
        $this
            ->setResult($result)
            ->setTransient($transient)
            ->setActionUrl($actionUrl)
            ->setActionMethod($actionMethod)
            ->setPareqFieldName($pareqFieldName)
            ->setPareqFieldValue($pareqFieldValue)
            ->setTermUrlName($termUrlName)
            ->setTermUrlValue($termUrlValue)
            ->setMdFieldName($mdFieldName)
            ->setMdFieldValue($mdFieldValue)
            ->setMpiResult($mpiResult)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setVirtualCvx($virtualCvx)
            ->setToken($token)
            ->setPrivateDataList($privateDataList)
            ->setSdkChallenge($sdkChallenge);
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
     * @return \StructType\VerifyEnrollmentResponse
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
     * @return \StructType\VerifyEnrollmentResponse
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
     * Get actionUrl value
     * @return string|null
     */
    public function getActionUrl(): ?string
    {
        return $this->actionUrl;
    }
    /**
     * Set actionUrl value
     * @param string $actionUrl
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setActionUrl(?string $actionUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($actionUrl) && !is_string($actionUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionUrl, true), gettype($actionUrl)), __LINE__);
        }
        $this->actionUrl = $actionUrl;
        
        return $this;
    }
    /**
     * Get actionMethod value
     * @return string|null
     */
    public function getActionMethod(): ?string
    {
        return $this->actionMethod;
    }
    /**
     * Set actionMethod value
     * @param string $actionMethod
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setActionMethod(?string $actionMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($actionMethod) && !is_string($actionMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionMethod, true), gettype($actionMethod)), __LINE__);
        }
        $this->actionMethod = $actionMethod;
        
        return $this;
    }
    /**
     * Get pareqFieldName value
     * @return string|null
     */
    public function getPareqFieldName(): ?string
    {
        return $this->pareqFieldName;
    }
    /**
     * Set pareqFieldName value
     * @param string $pareqFieldName
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setPareqFieldName(?string $pareqFieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($pareqFieldName) && !is_string($pareqFieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pareqFieldName, true), gettype($pareqFieldName)), __LINE__);
        }
        $this->pareqFieldName = $pareqFieldName;
        
        return $this;
    }
    /**
     * Get pareqFieldValue value
     * @return string|null
     */
    public function getPareqFieldValue(): ?string
    {
        return $this->pareqFieldValue;
    }
    /**
     * Set pareqFieldValue value
     * @param string $pareqFieldValue
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setPareqFieldValue(?string $pareqFieldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($pareqFieldValue) && !is_string($pareqFieldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pareqFieldValue, true), gettype($pareqFieldValue)), __LINE__);
        }
        $this->pareqFieldValue = $pareqFieldValue;
        
        return $this;
    }
    /**
     * Get termUrlName value
     * @return string|null
     */
    public function getTermUrlName(): ?string
    {
        return $this->termUrlName;
    }
    /**
     * Set termUrlName value
     * @param string $termUrlName
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setTermUrlName(?string $termUrlName = null): self
    {
        // validation for constraint: string
        if (!is_null($termUrlName) && !is_string($termUrlName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termUrlName, true), gettype($termUrlName)), __LINE__);
        }
        $this->termUrlName = $termUrlName;
        
        return $this;
    }
    /**
     * Get termUrlValue value
     * @return string|null
     */
    public function getTermUrlValue(): ?string
    {
        return $this->termUrlValue;
    }
    /**
     * Set termUrlValue value
     * @param string $termUrlValue
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setTermUrlValue(?string $termUrlValue = null): self
    {
        // validation for constraint: string
        if (!is_null($termUrlValue) && !is_string($termUrlValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termUrlValue, true), gettype($termUrlValue)), __LINE__);
        }
        $this->termUrlValue = $termUrlValue;
        
        return $this;
    }
    /**
     * Get mdFieldName value
     * @return string|null
     */
    public function getMdFieldName(): ?string
    {
        return $this->mdFieldName;
    }
    /**
     * Set mdFieldName value
     * @param string $mdFieldName
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setMdFieldName(?string $mdFieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($mdFieldName) && !is_string($mdFieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdFieldName, true), gettype($mdFieldName)), __LINE__);
        }
        $this->mdFieldName = $mdFieldName;
        
        return $this;
    }
    /**
     * Get mdFieldValue value
     * @return string|null
     */
    public function getMdFieldValue(): ?string
    {
        return $this->mdFieldValue;
    }
    /**
     * Set mdFieldValue value
     * @param string $mdFieldValue
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setMdFieldValue(?string $mdFieldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($mdFieldValue) && !is_string($mdFieldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdFieldValue, true), gettype($mdFieldValue)), __LINE__);
        }
        $this->mdFieldValue = $mdFieldValue;
        
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
     * @return \StructType\VerifyEnrollmentResponse
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
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
    {
        $this->authentication3DSecure = $authentication3DSecure;
        
        return $this;
    }
    /**
     * Get virtualCvx value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVirtualCvx(): ?string
    {
        return $this->virtualCvx ?? null;
    }
    /**
     * Set virtualCvx value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $virtualCvx
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setVirtualCvx(?string $virtualCvx = null): self
    {
        // validation for constraint: string
        if (!is_null($virtualCvx) && !is_string($virtualCvx)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($virtualCvx, true), gettype($virtualCvx)), __LINE__);
        }
        if (is_null($virtualCvx) || (is_array($virtualCvx) && empty($virtualCvx))) {
            unset($this->virtualCvx);
        } else {
            $this->virtualCvx = $virtualCvx;
        }
        
        return $this;
    }
    /**
     * Get token value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token ?? null;
    }
    /**
     * Set token value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $token
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        if (is_null($token) || (is_array($token) && empty($token))) {
            unset($this->token);
        } else {
            $this->token = $token;
        }
        
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
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get sdkChallenge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SdkChallenge|null
     */
    public function getSdkChallenge(): ?\StructType\SdkChallenge
    {
        return $this->sdkChallenge ?? null;
    }
    /**
     * Set sdkChallenge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SdkChallenge $sdkChallenge
     * @return \StructType\VerifyEnrollmentResponse
     */
    public function setSdkChallenge(?\StructType\SdkChallenge $sdkChallenge = null): self
    {
        if (is_null($sdkChallenge) || (is_array($sdkChallenge) && empty($sdkChallenge))) {
            unset($this->sdkChallenge);
        } else {
            $this->sdkChallenge = $sdkChallenge;
        }
        
        return $this;
    }
}
