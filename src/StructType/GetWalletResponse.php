<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getWallet method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

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
     * The isDisabled
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isDisabled = null;

    /**
     * The disableDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $disableDate = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var ContractNumberWalletList|null
     */
    protected ?ContractNumberWalletList $contractNumberWalletList = null;

    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;

    /**
     * Constructor method for getWalletResponse
     * @param Result|null $result
     * @param Wallet|null $wallet
     * @param Owner|null $owner
     * @param string|null $isDisabled
     * @param string|null $disableDate
     * @param PrivateDataList|null $privateDataList
     * @param ExtendedCardType|null $extendedCard
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @param string|null $media
     * @uses GetWalletResponse::setResult()
     * @uses GetWalletResponse::setWallet()
     * @uses GetWalletResponse::setOwner()
     * @uses GetWalletResponse::setIsDisabled()
     * @uses GetWalletResponse::setDisableDate()
     * @uses GetWalletResponse::setPrivateDataList()
     * @uses GetWalletResponse::setExtendedCard()
     * @uses GetWalletResponse::setContractNumberWalletList()
     * @uses GetWalletResponse::setMedia()
     */
    public function __construct(?Result $result = null, ?Wallet $wallet = null, ?Owner $owner = null, ?string $isDisabled = null, ?string $disableDate = null, ?PrivateDataList $privateDataList = null, ?ExtendedCardType $extendedCard = null, ?ContractNumberWalletList $contractNumberWalletList = null, ?string $media = null)
    {
        $this
            ->setResult($result)
            ->setWallet($wallet)
            ->setOwner($owner)
            ->setIsDisabled($isDisabled)
            ->setDisableDate($disableDate)
            ->setPrivateDataList($privateDataList)
            ->setExtendedCard($extendedCard)
            ->setContractNumberWalletList($contractNumberWalletList)
            ->setMedia($media);
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
     * @return GetWalletResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

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
     * @return GetWalletResponse
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
     * @return GetWalletResponse
     */
    public function setOwner(?Owner $owner = null): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get isDisabled value
     * @return string|null
     */
    public function getIsDisabled(): ?string
    {
        return $this->isDisabled;
    }

    /**
     * Set isDisabled value
     * @param string|null $isDisabled
     * @return GetWalletResponse
     */
    public function setIsDisabled(?string $isDisabled = null): self
    {
        // validation for constraint: string
        if (!is_null($isDisabled) && !is_string($isDisabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isDisabled, true), gettype($isDisabled)), __LINE__);
        }
        $this->isDisabled = $isDisabled;

        return $this;
    }

    /**
     * Get disableDate value
     * @return string|null
     */
    public function getDisableDate(): ?string
    {
        return $this->disableDate;
    }

    /**
     * Set disableDate value
     * @param string|null $disableDate
     * @return GetWalletResponse
     */
    public function setDisableDate(?string $disableDate = null): self
    {
        // validation for constraint: string
        if (!is_null($disableDate) && !is_string($disableDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disableDate, true), gettype($disableDate)), __LINE__);
        }
        $this->disableDate = $disableDate;

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
     * @return GetWalletResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

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
     * @return GetWalletResponse
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

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
     * @return GetWalletResponse
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
     * @return GetWalletResponse
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
}
