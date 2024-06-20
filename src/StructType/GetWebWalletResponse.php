<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getWebWallet method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetWebWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The extendedCard
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * The wallet
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Wallet|null
     */
    protected ?Wallet $wallet = null;

    /**
     * The owner
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Owner|null
     */
    protected ?Owner $owner = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;

    /**
     * The numberOfAttempt
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $numberOfAttempt = null;

    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var ContractNumberWalletList|null
     */
    protected ?ContractNumberWalletList $contractNumberWalletList = null;

    /**
     * Constructor method for getWebWalletResponse
     * @param Result|null $result
     * @param ExtendedCardType|null $extendedCard
     * @param Wallet|null $wallet
     * @param Owner|null $owner
     * @param PrivateDataList|null $privateDataList
     * @param string|null $media
     * @param string|null $numberOfAttempt
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @uses GetWebWalletResponse::setResult()
     * @uses GetWebWalletResponse::setExtendedCard()
     * @uses GetWebWalletResponse::setWallet()
     * @uses GetWebWalletResponse::setOwner()
     * @uses GetWebWalletResponse::setPrivateDataList()
     * @uses GetWebWalletResponse::setMedia()
     * @uses GetWebWalletResponse::setNumberOfAttempt()
     * @uses GetWebWalletResponse::setContractNumberWalletList()
     */
    public function __construct(?Result $result = null, ?ExtendedCardType $extendedCard = null, ?Wallet $wallet = null, ?Owner $owner = null, ?PrivateDataList $privateDataList = null, ?string $media = null, ?string $numberOfAttempt = null, ?ContractNumberWalletList $contractNumberWalletList = null)
    {
        $this
            ->setResult($result)
            ->setExtendedCard($extendedCard)
            ->setWallet($wallet)
            ->setOwner($owner)
            ->setPrivateDataList($privateDataList)
            ->setMedia($media)
            ->setNumberOfAttempt($numberOfAttempt)
            ->setContractNumberWalletList($contractNumberWalletList);
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
     * @return GetWebWalletResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get extendedCard value
     * @return ExtendedCardType|null
     */
    public function getExtendedCard(): ?ExtendedCardType
    {
        return $this->extendedCard;
    }

    /**
     * Set extendedCard value
     * @param ExtendedCardType|null $extendedCard
     * @return GetWebWalletResponse
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

        return $this;
    }

    /**
     * Get wallet value
     * @return Wallet|null
     */
    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    /**
     * Set wallet value
     * @param Wallet|null $wallet
     * @return GetWebWalletResponse
     */
    public function setWallet(?Wallet $wallet = null): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * Get owner value
     * @return Owner|null
     */
    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    /**
     * Set owner value
     * @param Owner|null $owner
     * @return GetWebWalletResponse
     */
    public function setOwner(?Owner $owner = null): self
    {
        $this->owner = $owner;

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
     * @return GetWebWalletResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }

    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }

    /**
     * Set media value
     * @param string|null $media
     * @return GetWebWalletResponse
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;

        return $this;
    }

    /**
     * Get numberOfAttempt value
     * @return string|null
     */
    public function getNumberOfAttempt(): ?string
    {
        return $this->numberOfAttempt;
    }

    /**
     * Set numberOfAttempt value
     * @param string|null $numberOfAttempt
     * @return GetWebWalletResponse
     */
    public function setNumberOfAttempt(?string $numberOfAttempt = null): self
    {
        // validation for constraint: string
        if (!is_null($numberOfAttempt) && !is_string($numberOfAttempt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberOfAttempt, true), gettype($numberOfAttempt)), __LINE__);
        }
        $this->numberOfAttempt = $numberOfAttempt;

        return $this;
    }

    /**
     * Get contractNumberWalletList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?ContractNumberWalletList
    {
        return $this->contractNumberWalletList ?? null;
    }

    /**
     * Set contractNumberWalletList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @return GetWebWalletResponse
     */
    public function setContractNumberWalletList(?ContractNumberWalletList $contractNumberWalletList = null): self
    {
        if (is_null($contractNumberWalletList)) {
            unset($this->contractNumberWalletList);
        } else {
            $this->contractNumberWalletList = $contractNumberWalletList;
        }

        return $this;
    }
}
