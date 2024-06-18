<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doAuthorizationRedirectResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doAuthorizationRedirect method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoAuthorizationRedirectResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The redirectURL
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $redirectURL = null;
    /**
     * Constructor method for doAuthorizationRedirectResponse
     * @uses DoAuthorizationRedirectResponse::setResult()
     * @uses DoAuthorizationRedirectResponse::setRedirectURL()
     * @param \StructType\Result $result
     * @param string $redirectURL
     */
    public function __construct(?\StructType\Result $result = null, ?string $redirectURL = null)
    {
        $this
            ->setResult($result)
            ->setRedirectURL($redirectURL);
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
     * @return \StructType\DoAuthorizationRedirectResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
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
     * @return \StructType\DoAuthorizationRedirectResponse
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
}
