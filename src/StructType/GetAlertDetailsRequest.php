<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAlertDetailsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAlertDetailsRequest extends AbstractStructBase
{
    /**
     * The AlertId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $AlertId;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $TransactionId;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $version;
    /**
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $TransactionDate;
    /**
     * Constructor method for getAlertDetailsRequest
     * @uses GetAlertDetailsRequest::setAlertId()
     * @uses GetAlertDetailsRequest::setTransactionId()
     * @uses GetAlertDetailsRequest::setVersion()
     * @uses GetAlertDetailsRequest::setTransactionDate()
     * @param string $alertId
     * @param string $transactionId
     * @param string $version
     * @param string $transactionDate
     */
    public function __construct(string $alertId, string $transactionId, ?string $version, ?string $transactionDate)
    {
        $this
            ->setAlertId($alertId)
            ->setTransactionId($transactionId)
            ->setVersion($version)
            ->setTransactionDate($transactionDate);
    }
    /**
     * Get AlertId value
     * @return string
     */
    public function getAlertId(): string
    {
        return $this->AlertId;
    }
    /**
     * Set AlertId value
     * @param string $alertId
     * @return \StructType\GetAlertDetailsRequest
     */
    public function setAlertId(string $alertId): self
    {
        // validation for constraint: string
        if (!is_null($alertId) && !is_string($alertId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alertId, true), gettype($alertId)), __LINE__);
        }
        $this->AlertId = $alertId;
        
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \StructType\GetAlertDetailsRequest
     */
    public function setTransactionId(string $transactionId): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get version value
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\GetAlertDetailsRequest
     */
    public function setVersion(?string $version): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get TransactionDate value
     * @return string
     */
    public function getTransactionDate(): string
    {
        return $this->TransactionDate;
    }
    /**
     * Set TransactionDate value
     * @param string $transactionDate
     * @return \StructType\GetAlertDetailsRequest
     */
    public function setTransactionDate(?string $transactionDate): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;
        
        return $this;
    }
}
