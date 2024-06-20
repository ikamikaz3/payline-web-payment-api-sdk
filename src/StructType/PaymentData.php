<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentData StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the paymentData
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentData extends AbstractStructBase
{
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: false
     * @var string|null
     */
    protected ?string $transactionID = null;
    /**
     * The network
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: false
     * @var string|null
     */
    protected ?string $network = null;
    /**
     * The tokenData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: false
     * @var string|null
     */
    protected ?string $tokenData = null;
    /**
     * Constructor method for paymentData
     * @uses PaymentData::setTransactionID()
     * @uses PaymentData::setNetwork()
     * @uses PaymentData::setTokenData()
     * @param string $transactionID
     * @param string $network
     * @param string $tokenData
     */
    public function __construct(?string $transactionID = null, ?string $network = null, ?string $tokenData = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setNetwork($network)
            ->setTokenData($tokenData);
    }
    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }
    /**
     * Set transactionID value
     * @param string $transactionID
     * @return \StructType\PaymentData
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;

        return $this;
    }
    /**
     * Get network value
     * @return string|null
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }
    /**
     * Set network value
     * @param string $network
     * @return \StructType\PaymentData
     */
    public function setNetwork(?string $network = null): self
    {
        // validation for constraint: string
        if (!is_null($network) && !is_string($network)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($network, true), gettype($network)), __LINE__);
        }
        $this->network = $network;

        return $this;
    }
    /**
     * Get tokenData value
     * @return string|null
     */
    public function getTokenData(): ?string
    {
        return $this->tokenData;
    }
    /**
     * Set tokenData value
     * @param string $tokenData
     * @return \StructType\PaymentData
     */
    public function setTokenData(?string $tokenData = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenData) && !is_string($tokenData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenData, true), gettype($tokenData)), __LINE__);
        }
        $this->tokenData = $tokenData;

        return $this;
    }
}
