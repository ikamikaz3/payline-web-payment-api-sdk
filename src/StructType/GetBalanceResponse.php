<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBalanceResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getBalance method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBalanceResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The balance
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Balance|null
     */
    protected ?\StructType\Balance $balance = null;
    /**
     * The crdproduct
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $crdproduct = null;
    /**
     * The crdprogram
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $crdprogram = null;
    /**
     * The crddesign
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $crddesign = null;
    /**
     * Constructor method for getBalanceResponse
     * @uses GetBalanceResponse::setResult()
     * @uses GetBalanceResponse::setBalance()
     * @uses GetBalanceResponse::setCrdproduct()
     * @uses GetBalanceResponse::setCrdprogram()
     * @uses GetBalanceResponse::setCrddesign()
     * @param \StructType\Result $result
     * @param \StructType\Balance $balance
     * @param string $crdproduct
     * @param string $crdprogram
     * @param string $crddesign
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Balance $balance = null, ?string $crdproduct = null, ?string $crdprogram = null, ?string $crddesign = null)
    {
        $this
            ->setResult($result)
            ->setBalance($balance)
            ->setCrdproduct($crdproduct)
            ->setCrdprogram($crdprogram)
            ->setCrddesign($crddesign);
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
     * @return \StructType\GetBalanceResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
    /**
     * Get balance value
     * @return \StructType\Balance|null
     */
    public function getBalance(): ?\StructType\Balance
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param \StructType\Balance $balance
     * @return \StructType\GetBalanceResponse
     */
    public function setBalance(?\StructType\Balance $balance = null): self
    {
        $this->balance = $balance;

        return $this;
    }
    /**
     * Get crdproduct value
     * @return string|null
     */
    public function getCrdproduct(): ?string
    {
        return $this->crdproduct;
    }
    /**
     * Set crdproduct value
     * @param string $crdproduct
     * @return \StructType\GetBalanceResponse
     */
    public function setCrdproduct(?string $crdproduct = null): self
    {
        // validation for constraint: string
        if (!is_null($crdproduct) && !is_string($crdproduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crdproduct, true), gettype($crdproduct)), __LINE__);
        }
        $this->crdproduct = $crdproduct;

        return $this;
    }
    /**
     * Get crdprogram value
     * @return string|null
     */
    public function getCrdprogram(): ?string
    {
        return $this->crdprogram;
    }
    /**
     * Set crdprogram value
     * @param string $crdprogram
     * @return \StructType\GetBalanceResponse
     */
    public function setCrdprogram(?string $crdprogram = null): self
    {
        // validation for constraint: string
        if (!is_null($crdprogram) && !is_string($crdprogram)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crdprogram, true), gettype($crdprogram)), __LINE__);
        }
        $this->crdprogram = $crdprogram;

        return $this;
    }
    /**
     * Get crddesign value
     * @return string|null
     */
    public function getCrddesign(): ?string
    {
        return $this->crddesign;
    }
    /**
     * Set crddesign value
     * @param string $crddesign
     * @return \StructType\GetBalanceResponse
     */
    public function setCrddesign(?string $crddesign = null): self
    {
        // validation for constraint: string
        if (!is_null($crddesign) && !is_string($crddesign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crddesign, true), gettype($crddesign)), __LINE__);
        }
        $this->crddesign = $crddesign;

        return $this;
    }
}
