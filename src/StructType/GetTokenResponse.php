<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTokenResponse StructType
 * @subpackage Structs
 */
#[AllowDynamicProperties]
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
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * Constructor method for getTokenResponse
     * @param string $token
     * @param string $maskedCardNumber
     * @param string $expirationDate
     * @param string $virtualCard
     * @param string $cardType
     * @param string $cardProduct
     * @param string $acceptanceNetwork
     * @param string $bank
     * @param Result|null $result
     * @uses GetTokenResponse::setToken()
     * @uses GetTokenResponse::setMaskedCardNumber()
     * @uses GetTokenResponse::setExpirationDate()
     * @uses GetTokenResponse::setVirtualCard()
     * @uses GetTokenResponse::setCardType()
     * @uses GetTokenResponse::setCardProduct()
     * @uses GetTokenResponse::setAcceptanceNetwork()
     * @uses GetTokenResponse::setBank()
     * @uses GetTokenResponse::setResult()
     */
    public function __construct(string $token, string $maskedCardNumber, string $expirationDate, string $virtualCard, string $cardType, string $cardProduct, string $acceptanceNetwork, string $bank, ?Result $result = null)
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
     * @return GetTokenResponse
     */
    public function setToken(string $token): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setMaskedCardNumber(string $maskedCardNumber): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setExpirationDate(string $expirationDate): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setVirtualCard(string $virtualCard): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setCardType(string $cardType): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setCardProduct(string $cardProduct): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setAcceptanceNetwork(string $acceptanceNetwork): self
    {
        // validation for constraint: string
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
     * @return GetTokenResponse
     */
    public function setBank(string $bank): self
    {
        // validation for constraint: string
        $this->bank = $bank;

        return $this;
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
     * @return GetTokenResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
}
