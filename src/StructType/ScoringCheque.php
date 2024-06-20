<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for scoringCheque StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the scoring cheque parameters
 * @subpackage Structs
 */
class ScoringCheque extends AbstractStructBase
{
    /**
     * The chequeNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $chequeNumber = null;

    /**
     * The additionalDataResponse
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $additionalDataResponse = null;

    /**
     * The terminalId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $terminalId = null;

    /**
     * The additionalPrivateData
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $additionalPrivateData = null;

    /**
     * Constructor method for scoringCheque
     * @param string|null $chequeNumber
     * @param string|null $additionalDataResponse
     * @param string|null $terminalId
     * @param string|null $additionalPrivateData
     * @uses ScoringCheque::setChequeNumber()
     * @uses ScoringCheque::setAdditionalDataResponse()
     * @uses ScoringCheque::setTerminalId()
     * @uses ScoringCheque::setAdditionalPrivateData()
     */
    public function __construct(?string $chequeNumber = null, ?string $additionalDataResponse = null, ?string $terminalId = null, ?string $additionalPrivateData = null)
    {
        $this
            ->setChequeNumber($chequeNumber)
            ->setAdditionalDataResponse($additionalDataResponse)
            ->setTerminalId($terminalId)
            ->setAdditionalPrivateData($additionalPrivateData);
    }

    /**
     * Get chequeNumber value
     * @return string|null
     */
    public function getChequeNumber(): ?string
    {
        return $this->chequeNumber;
    }

    /**
     * Set chequeNumber value
     * @param string|null $chequeNumber
     * @return ScoringCheque
     */
    public function setChequeNumber(?string $chequeNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($chequeNumber) && !is_string($chequeNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chequeNumber, true), gettype($chequeNumber)), __LINE__);
        }
        $this->chequeNumber = $chequeNumber;

        return $this;
    }

    /**
     * Get additionalDataResponse value
     * @return string|null
     */
    public function getAdditionalDataResponse(): ?string
    {
        return $this->additionalDataResponse;
    }

    /**
     * Set additionalDataResponse value
     * @param string|null $additionalDataResponse
     * @return ScoringCheque
     */
    public function setAdditionalDataResponse(?string $additionalDataResponse = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalDataResponse) && !is_string($additionalDataResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalDataResponse, true), gettype($additionalDataResponse)), __LINE__);
        }
        $this->additionalDataResponse = $additionalDataResponse;

        return $this;
    }

    /**
     * Get terminalId value
     * @return string|null
     */
    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }

    /**
     * Set terminalId value
     * @param string|null $terminalId
     * @return ScoringCheque
     */
    public function setTerminalId(?string $terminalId = null): self
    {
        // validation for constraint: string
        if (!is_null($terminalId) && !is_string($terminalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminalId, true), gettype($terminalId)), __LINE__);
        }
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * Get additionalPrivateData value
     * @return string|null
     */
    public function getAdditionalPrivateData(): ?string
    {
        return $this->additionalPrivateData;
    }

    /**
     * Set additionalPrivateData value
     * @param string|null $additionalPrivateData
     * @return ScoringCheque
     */
    public function setAdditionalPrivateData(?string $additionalPrivateData = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalPrivateData) && !is_string($additionalPrivateData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalPrivateData, true), gettype($additionalPrivateData)), __LINE__);
        }
        $this->additionalPrivateData = $additionalPrivateData;

        return $this;
    }
}
