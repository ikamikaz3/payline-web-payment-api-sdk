<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doRefundResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doRefund method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DoRefundResponse extends AbstractStructBase
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
     * The miscData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var MiscData|null
     */
    protected ?MiscData $miscData = null;

    /**
     * Constructor method for doRefundResponse
     * @param Result|null $result
     * @param Transaction|null $transaction
     * @param MiscData|null $miscData
     * @uses DoRefundResponse::setResult()
     * @uses DoRefundResponse::setTransaction()
     * @uses DoRefundResponse::setMiscData()
     */
    public function __construct(?Result $result = null, ?Transaction $transaction = null, ?MiscData $miscData = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setMiscData($miscData);
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
     * @return DoRefundResponse
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
     * @return DoRefundResponse
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get miscData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return MiscData|null
     */
    public function getMiscData(): ?MiscData
    {
        return $this->miscData ?? null;
    }

    /**
     * Set miscData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param MiscData|null $miscData
     * @return DoRefundResponse
     */
    public function setMiscData(?MiscData $miscData = null): self
    {
        if (is_null($miscData)) {
            unset($this->miscData);
        } else {
            $this->miscData = $miscData;
        }

        return $this;
    }
}
