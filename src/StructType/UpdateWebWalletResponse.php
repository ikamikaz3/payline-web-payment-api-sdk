<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateWebWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the updateWebWallet method
 * @subpackage Structs
 */
class UpdateWebWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

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
     * Constructor method for updateWebWalletResponse
     * @param Result|null $result
     * @param string|null $token
     * @param string|null $redirectURL
     * @uses UpdateWebWalletResponse::setResult()
     * @uses UpdateWebWalletResponse::setToken()
     * @uses UpdateWebWalletResponse::setRedirectURL()
     */
    public function __construct(?Result $result = null, ?string $token = null, ?string $redirectURL = null)
    {
        $this
            ->setResult($result)
            ->setToken($token)
            ->setRedirectURL($redirectURL);
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
     * @return UpdateWebWalletResponse
     */
    public function setResult(?Result $result = null): self
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
     * @param string|null $token
     * @return UpdateWebWalletResponse
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
     * @param string|null $redirectURL
     * @return UpdateWebWalletResponse
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
