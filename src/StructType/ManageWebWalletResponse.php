<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for manageWebWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the manageWebWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ManageWebWalletResponse extends AbstractStructBase
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
     * - nillable: false
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The redirectURL
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $redirectURL = null;
    /**
     * Constructor method for manageWebWalletResponse
     * @uses ManageWebWalletResponse::setResult()
     * @uses ManageWebWalletResponse::setToken()
     * @uses ManageWebWalletResponse::setRedirectURL()
     * @param \StructType\Result $result
     * @param string $token
     * @param string $redirectURL
     */
    public function __construct(?\StructType\Result $result = null, ?string $token = null, ?string $redirectURL = null)
    {
        $this
            ->setResult($result)
            ->setToken($token)
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
     * @return \StructType\ManageWebWalletResponse
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
     * @return \StructType\ManageWebWalletResponse
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
     * @return \StructType\ManageWebWalletResponse
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
