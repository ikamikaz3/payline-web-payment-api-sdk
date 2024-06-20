<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doImmediateWalletPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doImmediateWalletPayment method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoImmediateWalletPaymentResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The linkedTransactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkedTransactionId = null;
    /**
     * Constructor method for doImmediateWalletPaymentResponse
     * @uses DoImmediateWalletPaymentResponse::setResult()
     * @uses DoImmediateWalletPaymentResponse::setTransaction()
     * @uses DoImmediateWalletPaymentResponse::setAuthorization()
     * @uses DoImmediateWalletPaymentResponse::setAuthentication3DSecure()
     * @uses DoImmediateWalletPaymentResponse::setLinkedTransactionId()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\Authorization $authorization
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $linkedTransactionId
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\Authorization $authorization = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $linkedTransactionId = null)
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\DoImmediateWalletPaymentResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
    /**
     * Get transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction(): ?\StructType\Transaction
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\DoImmediateWalletPaymentResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }
    /**
     * Get authorization value
     * @return \StructType\Authorization|null
     */
    public function getAuthorization(): ?\StructType\Authorization
    {
        return $this->authorization;
    }
    /**
     * Set authorization value
     * @param \StructType\Authorization $authorization
     * @return \StructType\DoImmediateWalletPaymentResponse
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

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
     * @return \StructType\DoImmediateWalletPaymentResponse
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
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
     * @param string $linkedTransactionId
     * @return \StructType\DoImmediateWalletPaymentResponse
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
