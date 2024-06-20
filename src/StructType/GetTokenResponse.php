<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTokenResponse extends AbstractStructBase
{
    /**
     * The token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $token;
    /**
     * The maskedCardNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $maskedCardNumber;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $expirationDate;
    /**
     * The virtualCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $virtualCard;
    /**
     * The cardType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $cardType;
    /**
     * The cardProduct
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $cardProduct;
    /**
     * The acceptanceNetwork
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $acceptanceNetwork;
    /**
     * The bank
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $bank;
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * Constructor method for getTokenResponse
     * @uses GetTokenResponse::setToken()
     * @uses GetTokenResponse::setMaskedCardNumber()
     * @uses GetTokenResponse::setExpirationDate()
     * @uses GetTokenResponse::setVirtualCard()
     * @uses GetTokenResponse::setCardType()
     * @uses GetTokenResponse::setCardProduct()
     * @uses GetTokenResponse::setAcceptanceNetwork()
     * @uses GetTokenResponse::setBank()
     * @uses GetTokenResponse::setResult()
     * @param string $token
     * @param string $maskedCardNumber
     * @param string $expirationDate
     * @param string $virtualCard
     * @param string $cardType
     * @param string $cardProduct
     * @param string $acceptanceNetwork
     * @param string $bank
     * @param \StructType\Result $result
     */
    public function __construct(string $token, string $maskedCardNumber, string $expirationDate, string $virtualCard, string $cardType, string $cardProduct, string $acceptanceNetwork, string $bank, ?\StructType\Result $result = null)
    {
        $this
            ->setToken($token)
            ->setMaskedCardNumber($maskedCardNumber)
            ->setExpirationDate($expirationDate)
            ->setVirtualCard($virtualCard)
            ->setCardType($cardType)
            ->setCardProduct($cardProduct)
            ->setAcceptanceNetwork($acceptanceNetwork)
            ->setBank($bank)
            ->setResult($result);
    }
    /**
     * Get token value
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \StructType\GetTokenResponse
     */
    public function setToken(string $token): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;

        return $this;
    }
    /**
     * Get maskedCardNumber value
     * @return string
     */
    public function getMaskedCardNumber(): string
    {
        return $this->maskedCardNumber;
    }
    /**
     * Set maskedCardNumber value
     * @param string $maskedCardNumber
     * @return \StructType\GetTokenResponse
     */
    public function setMaskedCardNumber(string $maskedCardNumber): self
    {
        // validation for constraint: string
        if (!is_null($maskedCardNumber) && !is_string($maskedCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maskedCardNumber, true), gettype($maskedCardNumber)), __LINE__);
        }
        $this->maskedCardNumber = $maskedCardNumber;

        return $this;
    }
    /**
     * Get expirationDate value
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \StructType\GetTokenResponse
     */
    public function setExpirationDate(string $expirationDate): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;

        return $this;
    }
    /**
     * Get virtualCard value
     * @return string
     */
    public function getVirtualCard(): string
    {
        return $this->virtualCard;
    }
    /**
     * Set virtualCard value
     * @param string $virtualCard
     * @return \StructType\GetTokenResponse
     */
    public function setVirtualCard(string $virtualCard): self
    {
        // validation for constraint: string
        if (!is_null($virtualCard) && !is_string($virtualCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($virtualCard, true), gettype($virtualCard)), __LINE__);
        }
        $this->virtualCard = $virtualCard;

        return $this;
    }
    /**
     * Get cardType value
     * @return string
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \StructType\GetTokenResponse
     */
    public function setCardType(string $cardType): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;

        return $this;
    }
    /**
     * Get cardProduct value
     * @return string
     */
    public function getCardProduct(): string
    {
        return $this->cardProduct;
    }
    /**
     * Set cardProduct value
     * @param string $cardProduct
     * @return \StructType\GetTokenResponse
     */
    public function setCardProduct(string $cardProduct): self
    {
        // validation for constraint: string
        if (!is_null($cardProduct) && !is_string($cardProduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardProduct, true), gettype($cardProduct)), __LINE__);
        }
        $this->cardProduct = $cardProduct;

        return $this;
    }
    /**
     * Get acceptanceNetwork value
     * @return string
     */
    public function getAcceptanceNetwork(): string
    {
        return $this->acceptanceNetwork;
    }
    /**
     * Set acceptanceNetwork value
     * @param string $acceptanceNetwork
     * @return \StructType\GetTokenResponse
     */
    public function setAcceptanceNetwork(string $acceptanceNetwork): self
    {
        // validation for constraint: string
        if (!is_null($acceptanceNetwork) && !is_string($acceptanceNetwork)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acceptanceNetwork, true), gettype($acceptanceNetwork)), __LINE__);
        }
        $this->acceptanceNetwork = $acceptanceNetwork;

        return $this;
    }
    /**
     * Get bank value
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }
    /**
     * Set bank value
     * @param string $bank
     * @return \StructType\GetTokenResponse
     */
    public function setBank(string $bank): self
    {
        // validation for constraint: string
        if (!is_null($bank) && !is_string($bank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank, true), gettype($bank)), __LINE__);
        }
        $this->bank = $bank;

        return $this;
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
     * @return \StructType\GetTokenResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
}
