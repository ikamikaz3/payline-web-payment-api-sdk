<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doImmediateWalletPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doImmediateWalletPayment method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoImmediateWalletPaymentResponse extends AbstractStructBase
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
     * - nillable: true
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authorization|null
     */
    protected ?Authorization $authorization = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

    /**
     * The linkedTransactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkedTransactionId = null;

    /**
     * Constructor method for doImmediateWalletPaymentResponse
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param Authorization|null $authorization
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param string|null $linkedTransactionId
     * @uses DoImmediateWalletPaymentResponse::setResult()
     * @uses DoImmediateWalletPaymentResponse::setTransaction()
     * @uses DoImmediateWalletPaymentResponse::setAuthorization()
     * @uses DoImmediateWalletPaymentResponse::setAuthentication3DSecure()
     * @uses DoImmediateWalletPaymentResponse::setLinkedTransactionId()
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?Authorization $authorization = null, ?Authentication3DSecure $authentication3DSecure = null, ?string $linkedTransactionId = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setAuthorization($authorization)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setLinkedTransactionId($linkedTransactionId);
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
     * @return DoImmediateWalletPaymentResponse
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
     * @return DoImmediateWalletPaymentResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get authorization value
     * @return Authorization|null
     */
    public function getAuthorization(): ?Authorization
    {
        return $this->authorization;
    }

    /**
     * Set authorization value
     * @param Authorization|null $authorization
     * @return DoImmediateWalletPaymentResponse
     */
    public function setAuthorization(?Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

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
     * @return DoImmediateWalletPaymentResponse
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
    {
        $this->authentication3DSecure = $authentication3DSecure;

        return $this;
    }

    /**
     * Get linkedTransactionId value
     * @return string|null
     */
    public function getLinkedTransactionId(): ?string
    {
        return $this->linkedTransactionId;
    }

    /**
     * Set linkedTransactionId value
     * @param string|null $linkedTransactionId
     * @return DoImmediateWalletPaymentResponse
     */
    public function setLinkedTransactionId(?string $linkedTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedTransactionId) && !is_string($linkedTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedTransactionId, true), gettype($linkedTransactionId)), __LINE__);
        }
        $this->linkedTransactionId = $linkedTransactionId;

        return $this;
    }
}
