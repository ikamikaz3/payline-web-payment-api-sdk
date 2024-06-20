<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transactionsSearchResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the response for the transactionsSearch method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransactionsSearchResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The transactionList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\TransactionList|null
     */
    protected ?\StructType\TransactionList $transactionList = null;
    /**
     * Constructor method for transactionsSearchResponse
     * @uses TransactionsSearchResponse::setResult()
     * @uses TransactionsSearchResponse::setTransactionList()
     * @param \StructType\Result $result
     * @param \StructType\TransactionList $transactionList
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\TransactionList $transactionList = null)
    {
        $this
            ->setResult($result)
            ->setTransactionList($transactionList);
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
     * @return \StructType\TransactionsSearchResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
    /**
     * Get transactionList value
     * @return \StructType\TransactionList|null
     */
    public function getTransactionList(): ?\StructType\TransactionList
    {
        return $this->transactionList;
    }
    /**
     * Set transactionList value
     * @param \StructType\TransactionList $transactionList
     * @return \StructType\TransactionsSearchResponse
     */
    public function setTransactionList(?\StructType\TransactionList $transactionList = null): self
    {
        $this->transactionList = $transactionList;

        return $this;
    }
}
