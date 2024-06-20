<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWebWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getWebWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWebWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The extendedCard
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
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
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
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
     * @var \StructType\ContractNumberWalletList|null
     */
    protected ?\StructType\ContractNumberWalletList $contractNumberWalletList = null;
    /**
     * Constructor method for getWebWalletResponse
     * @uses GetWebWalletResponse::setResult()
     * @uses GetWebWalletResponse::setExtendedCard()
     * @uses GetWebWalletResponse::setWallet()
     * @uses GetWebWalletResponse::setOwner()
     * @uses GetWebWalletResponse::setPrivateDataList()
     * @uses GetWebWalletResponse::setMedia()
     * @uses GetWebWalletResponse::setNumberOfAttempt()
     * @uses GetWebWalletResponse::setContractNumberWalletList()
     * @param \StructType\Result $result
     * @param \StructType\ExtendedCardType $extendedCard
     * @param \StructType\Wallet $wallet
     * @param \StructType\Owner $owner
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $media
     * @param string $numberOfAttempt
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\ExtendedCardType $extendedCard = null, ?\StructType\Wallet $wallet = null, ?\StructType\Owner $owner = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $media = null, ?string $numberOfAttempt = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null)
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\GetWebWalletResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
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
     * @return \StructType\GetWebWalletResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
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
     * @return \StructType\GetWebWalletResponse
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
     * @return \StructType\GetWebWalletResponse
     */
    public function setOwner(?\StructType\Owner $owner = null): self
    {
        $this->owner = $owner;
        
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
     * @return \StructType\GetWebWalletResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
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
     * @param string $media
     * @return \StructType\GetWebWalletResponse
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
     * @param string $numberOfAttempt
     * @return \StructType\GetWebWalletResponse
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
     * @return \StructType\GetWebWalletResponse
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
}
