<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disablePaymentRecordResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the disablePaymentRecord method
 * @subpackage Structs
 */
class DisablePaymentRecordResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * Constructor method for disablePaymentRecordResponse
     * @param Result|null $result
     * @uses DisablePaymentRecordResponse::setResult()
     */
    public function __construct(?Result $result = null)
    {
        $this
            ->setResult($result);
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
     * @return DisablePaymentRecordResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
}
