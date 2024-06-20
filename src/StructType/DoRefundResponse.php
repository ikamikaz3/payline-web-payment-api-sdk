<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doRefundResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doRefund method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoRefundResponse extends AbstractStructBase
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
     * - nillable: false
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MiscData|null
     */
    protected ?\StructType\MiscData $miscData = null;
    /**
     * Constructor method for doRefundResponse
     * @uses DoRefundResponse::setResult()
     * @uses DoRefundResponse::setTransaction()
     * @uses DoRefundResponse::setMiscData()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\MiscData $miscData
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\MiscData $miscData = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setMiscData($miscData);
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
     * @return \StructType\DoRefundResponse
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
     * @return \StructType\DoRefundResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }
    /**
     * Get miscData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MiscData|null
     */
    public function getMiscData(): ?\StructType\MiscData
    {
        return $this->miscData ?? null;
    }
    /**
     * Set miscData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MiscData $miscData
     * @return \StructType\DoRefundResponse
     */
    public function setMiscData(?\StructType\MiscData $miscData = null): self
    {
        if (is_null($miscData) || (is_array($miscData) && empty($miscData))) {
            unset($this->miscData);
        } else {
            $this->miscData = $miscData;
        }

        return $this;
    }
}
