<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTransactionDetailsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the getTransactionDetails method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTransactionDetailsRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The orderRef
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderRef = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The transactionHistory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionHistory = null;
    /**
     * The archiveSearch
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $archiveSearch = null;
    /**
     * Constructor method for getTransactionDetailsRequest
     * @uses GetTransactionDetailsRequest::setVersion()
     * @uses GetTransactionDetailsRequest::setTransactionId()
     * @uses GetTransactionDetailsRequest::setOrderRef()
     * @uses GetTransactionDetailsRequest::setStartDate()
     * @uses GetTransactionDetailsRequest::setEndDate()
     * @uses GetTransactionDetailsRequest::setTransactionHistory()
     * @uses GetTransactionDetailsRequest::setArchiveSearch()
     * @param string $version
     * @param string $transactionId
     * @param string $orderRef
     * @param string $startDate
     * @param string $endDate
     * @param string $transactionHistory
     * @param string $archiveSearch
     */
    public function __construct(?string $version = null, ?string $transactionId = null, ?string $orderRef = null, ?string $startDate = null, ?string $endDate = null, ?string $transactionHistory = null, ?string $archiveSearch = null)
    {
        $this
            ->setVersion($version)
            ->setTransactionId($transactionId)
            ->setOrderRef($orderRef)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setTransactionHistory($transactionHistory)
            ->setArchiveSearch($archiveSearch);
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get orderRef value
     * @return string|null
     */
    public function getOrderRef(): ?string
    {
        return $this->orderRef;
    }
    /**
     * Set orderRef value
     * @param string $orderRef
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setOrderRef(?string $orderRef = null): self
    {
        // validation for constraint: string
        if (!is_null($orderRef) && !is_string($orderRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderRef, true), gettype($orderRef)), __LINE__);
        }
        $this->orderRef = $orderRef;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get transactionHistory value
     * @return string|null
     */
    public function getTransactionHistory(): ?string
    {
        return $this->transactionHistory;
    }
    /**
     * Set transactionHistory value
     * @param string $transactionHistory
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setTransactionHistory(?string $transactionHistory = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionHistory) && !is_string($transactionHistory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionHistory, true), gettype($transactionHistory)), __LINE__);
        }
        $this->transactionHistory = $transactionHistory;
        
        return $this;
    }
    /**
     * Get archiveSearch value
     * @return string|null
     */
    public function getArchiveSearch(): ?string
    {
        return $this->archiveSearch;
    }
    /**
     * Set archiveSearch value
     * @param string $archiveSearch
     * @return \StructType\GetTransactionDetailsRequest
     */
    public function setArchiveSearch(?string $archiveSearch = null): self
    {
        // validation for constraint: string
        if (!is_null($archiveSearch) && !is_string($archiveSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($archiveSearch, true), gettype($archiveSearch)), __LINE__);
        }
        $this->archiveSearch = $archiveSearch;
        
        return $this;
    }
}
