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
class TransactionsSearchResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The transactionList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var TransactionList|null
     */
    protected ?TransactionList $transactionList = null;

    /**
     * Constructor method for transactionsSearchResponse
     * @param Result|null $result
     * @param TransactionList|null $transactionList
     * @uses TransactionsSearchResponse::setResult()
     * @uses TransactionsSearchResponse::setTransactionList()
     */
    public function __construct(?Result $result = null, ?TransactionList $transactionList = null)
    {
        $this
            ->setResult($result)
            ->setTransactionList($transactionList);
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
     * @return TransactionsSearchResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get transactionList value
     * @return TransactionList|null
     */
    public function getTransactionList(): ?TransactionList
    {
        return $this->transactionList;
    }

    /**
     * Set transactionList value
     * @param TransactionList|null $transactionList
     * @return TransactionsSearchResponse
     */
    public function setTransactionList(?TransactionList $transactionList = null): self
    {
        $this->transactionList = $transactionList;

        return $this;
    }
}
