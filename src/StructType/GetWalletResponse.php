<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The wallet
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Wallet|null
     */
    protected ?\StructType\Wallet $wallet = null;
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Owner|null
     */
    protected ?\StructType\Owner $owner = null;
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
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ContractNumberWalletList|null
     */
    protected ?\StructType\ContractNumberWalletList $contractNumberWalletList = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * Constructor method for getWalletResponse
     * @uses GetWalletResponse::setResult()
     * @uses GetWalletResponse::setWallet()
     * @uses GetWalletResponse::setOwner()
     * @uses GetWalletResponse::setIsDisabled()
     * @uses GetWalletResponse::setDisableDate()
     * @uses GetWalletResponse::setPrivateDataList()
     * @uses GetWalletResponse::setExtendedCard()
     * @uses GetWalletResponse::setContractNumberWalletList()
     * @uses GetWalletResponse::setMedia()
     * @param \StructType\Result $result
     * @param \StructType\Wallet $wallet
     * @param \StructType\Owner $owner
     * @param string $isDisabled
     * @param string $disableDate
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\ExtendedCardType $extendedCard
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @param string $media
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Wallet $wallet = null, ?\StructType\Owner $owner = null, ?string $isDisabled = null, ?string $disableDate = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\ExtendedCardType $extendedCard = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null, ?string $media = null)
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\GetWalletResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get wallet value
     * @return \StructType\Wallet|null
     */
    public function getWallet(): ?\StructType\Wallet
    {
        return $this->wallet;
    }
    /**
     * Set wallet value
     * @param \StructType\Wallet $wallet
     * @return \StructType\GetWalletResponse
     */
    public function setWallet(?\StructType\Wallet $wallet = null): self
    {
        $this->wallet = $wallet;
        
        return $this;
    }
    /**
     * Get owner value
     * @return \StructType\Owner|null
     */
    public function getOwner(): ?\StructType\Owner
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param \StructType\Owner $owner
     * @return \StructType\GetWalletResponse
     */
    public function setOwner(?\StructType\Owner $owner = null): self
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
     * @param string $isDisabled
     * @return \StructType\GetWalletResponse
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
     * @param string $disableDate
     * @return \StructType\GetWalletResponse
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
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList;
    }
    /**
     * Set privateDataList value
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\GetWalletResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get extendedCard value
     * @return \StructType\ExtendedCardType|null
     */
    public function getExtendedCard(): ?\StructType\ExtendedCardType
    {
        return $this->extendedCard;
    }
    /**
     * Set extendedCard value
     * @param \StructType\ExtendedCardType $extendedCard
     * @return \StructType\GetWalletResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
        return $this;
    }
    /**
     * Get contractNumberWalletList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?\StructType\ContractNumberWalletList
    {
        return $this->contractNumberWalletList ?? null;
    }
    /**
     * Set contractNumberWalletList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @return \StructType\GetWalletResponse
     */
    public function setContractNumberWalletList(?\StructType\ContractNumberWalletList $contractNumberWalletList = null): self
    {
        if (is_null($contractNumberWalletList) || (is_array($contractNumberWalletList) && empty($contractNumberWalletList))) {
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
     * @param string $media
     * @return \StructType\GetWalletResponse
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
