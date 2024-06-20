<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the updateWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateWalletRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The wallet
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Wallet|null
     */
    protected ?\StructType\Wallet $wallet = null;
    /**
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
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
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ContractNumberWalletList|null
     */
    protected ?\StructType\ContractNumberWalletList $contractNumberWalletList = null;
    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionID = null;
    /**
     * Constructor method for updateWalletRequest
     * @uses UpdateWalletRequest::setVersion()
     * @uses UpdateWalletRequest::setContractNumber()
     * @uses UpdateWalletRequest::setWallet()
     * @uses UpdateWalletRequest::setCardInd()
     * @uses UpdateWalletRequest::setBuyer()
     * @uses UpdateWalletRequest::setOwner()
     * @uses UpdateWalletRequest::setPrivateDataList()
     * @uses UpdateWalletRequest::setAuthentication3DSecure()
     * @uses UpdateWalletRequest::setMedia()
     * @uses UpdateWalletRequest::setContractNumberWalletList()
     * @uses UpdateWalletRequest::setTransactionID()
     * @param string $version
     * @param string $contractNumber
     * @param \StructType\Wallet $wallet
     * @param string $cardInd
     * @param \StructType\Buyer $buyer
     * @param \StructType\Owner $owner
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $media
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @param string $transactionID
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?\StructType\Wallet $wallet = null, ?string $cardInd = null, ?\StructType\Buyer $buyer = null, ?\StructType\Owner $owner = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $media = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null, ?string $transactionID = null)
    {
        $this
            ->setVersion($version)
            ->setContractNumber($contractNumber)
            ->setWallet($wallet)
            ->setCardInd($cardInd)
            ->setBuyer($buyer)
            ->setOwner($owner)
            ->setPrivateDataList($privateDataList)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setMedia($media)
            ->setContractNumberWalletList($contractNumberWalletList)
            ->setTransactionID($transactionID);
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
     * @param string $version
     * @return \StructType\UpdateWalletRequest
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
     * @param string $contractNumber
     * @return \StructType\UpdateWalletRequest
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
     * @return \StructType\UpdateWalletRequest
     */
    public function setWallet(?\StructType\Wallet $wallet = null): self
    {
        $this->wallet = $wallet;

        return $this;
    }
    /**
     * Get cardInd value
     * @return string|null
     */
    public function getCardInd(): ?string
    {
        return $this->cardInd;
    }
    /**
     * Set cardInd value
     * @param string $cardInd
     * @return \StructType\UpdateWalletRequest
     */
    public function setCardInd(?string $cardInd = null): self
    {
        // validation for constraint: string
        if (!is_null($cardInd) && !is_string($cardInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardInd, true), gettype($cardInd)), __LINE__);
        }
        $this->cardInd = $cardInd;

        return $this;
    }
    /**
     * Get buyer value
     * @return \StructType\Buyer|null
     */
    public function getBuyer(): ?\StructType\Buyer
    {
        return $this->buyer;
    }
    /**
     * Set buyer value
     * @param \StructType\Buyer $buyer
     * @return \StructType\UpdateWalletRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return \StructType\UpdateWalletRequest
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
     * @return \StructType\UpdateWalletRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
    /**
     * Get authentication3DSecure value
     * @return \StructType\Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?\StructType\Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }
    /**
     * Set authentication3DSecure value
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @return \StructType\UpdateWalletRequest
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
    {
        $this->authentication3DSecure = $authentication3DSecure;

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
     * @return \StructType\UpdateWalletRequest
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
     * Get contractNumberWalletList value
     * @return \StructType\ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?\StructType\ContractNumberWalletList
    {
        return $this->contractNumberWalletList;
    }
    /**
     * Set contractNumberWalletList value
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @return \StructType\UpdateWalletRequest
     */
    public function setContractNumberWalletList(?\StructType\ContractNumberWalletList $contractNumberWalletList = null): self
    {
        $this->contractNumberWalletList = $contractNumberWalletList;

        return $this;
    }
    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->transactionID;
    }
    /**
     * Set transactionID value
     * @param string $transactionID
     * @return \StructType\UpdateWalletRequest
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;

        return $this;
    }
}
