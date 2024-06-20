<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doBankTransferResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doBankTransfer method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoBankTransferResponse extends AbstractStructBase
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
     * - nillable: false
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * Constructor method for doBankTransferResponse
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param PrivateDataList|null $privateDataList
     * @uses DoBankTransferResponse::setResult()
     * @uses DoBankTransferResponse::setTransaction()
     * @uses DoBankTransferResponse::setPrivateDataList()
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?PrivateDataList $privateDataList = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setPrivateDataList($privateDataList);
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
     * @return DoBankTransferResponse
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
     * @return DoBankTransferResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get privateDataList value
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return DoBankTransferResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
