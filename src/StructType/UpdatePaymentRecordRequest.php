<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePaymentRecordRequest StructType
 * @subpackage Structs
 */
class UpdatePaymentRecordRequest extends AbstractStructBase
{
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;

    /**
     * The paymentRecordId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $paymentRecordId = null;

    /**
     * The recurring
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var RecurringForUpdate|null
     */
    protected ?RecurringForUpdate $recurring = null;

    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * Constructor method for updatePaymentRecordRequest
     * @param string|null $contractNumber
     * @param string|null $paymentRecordId
     * @param RecurringForUpdate|null $recurring
     * @param string|null $version
     * @uses UpdatePaymentRecordRequest::setContractNumber()
     * @uses UpdatePaymentRecordRequest::setPaymentRecordId()
     * @uses UpdatePaymentRecordRequest::setRecurring()
     * @uses UpdatePaymentRecordRequest::setVersion()
     */
    public function __construct(?string $contractNumber = null, ?string $paymentRecordId = null, ?RecurringForUpdate $recurring = null, ?string $version = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPaymentRecordId($paymentRecordId)
            ->setRecurring($recurring)
            ->setVersion($version);
    }

    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    /**
     * Set contractNumber value
     * @param string|null $contractNumber
     * @return UpdatePaymentRecordRequest
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Get paymentRecordId value
     * @return string|null
     */
    public function getPaymentRecordId(): ?string
    {
        return $this->paymentRecordId;
    }

    /**
     * Set paymentRecordId value
     * @param string|null $paymentRecordId
     * @return UpdatePaymentRecordRequest
     */
    public function setPaymentRecordId(?string $paymentRecordId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentRecordId) && !is_string($paymentRecordId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRecordId, true), gettype($paymentRecordId)), __LINE__);
        }
        $this->paymentRecordId = $paymentRecordId;

        return $this;
    }

    /**
     * Get recurring value
     * @return RecurringForUpdate|null
     */
    public function getRecurring(): ?RecurringForUpdate
    {
        return $this->recurring;
    }

    /**
     * Set recurring value
     * @param RecurringForUpdate|null $recurring
     * @return UpdatePaymentRecordRequest
     */
    public function setRecurring(?RecurringForUpdate $recurring = null): self
    {
        $this->recurring = $recurring;

        return $this;
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
     * @param string|null $version
     * @return UpdatePaymentRecordRequest
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
}
