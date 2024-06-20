<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the createWallet method
 * @subpackage Structs
 */
class CreateWalletRequest extends AbstractStructBase
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
     * @var Wallet|null
     */
    protected ?Wallet $wallet = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

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
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

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
     * @var ContractNumberWalletList|null
     */
    protected ?ContractNumberWalletList $contractNumberWalletList = null;

    /**
     * The transactionID
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transactionID = null;

    /**
     * Constructor method for createWalletRequest
     * @param string|null $version
     * @param string|null $contractNumber
     * @param Wallet|null $wallet
     * @param Buyer|null $buyer
     * @param Owner|null $owner
     * @param PrivateDataList|null $privateDataList
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param string|null $media
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @param string|null $transactionID
     * @uses CreateWalletRequest::setVersion()
     * @uses CreateWalletRequest::setContractNumber()
     * @uses CreateWalletRequest::setWallet()
     * @uses CreateWalletRequest::setBuyer()
     * @uses CreateWalletRequest::setOwner()
     * @uses CreateWalletRequest::setPrivateDataList()
     * @uses CreateWalletRequest::setAuthentication3DSecure()
     * @uses CreateWalletRequest::setMedia()
     * @uses CreateWalletRequest::setContractNumberWalletList()
     * @uses CreateWalletRequest::setTransactionID()
     */
    public function __construct(?string $version = null, ?string $contractNumber = null, ?Wallet $wallet = null, ?Buyer $buyer = null, ?Owner $owner = null, ?PrivateDataList $privateDataList = null, ?Authentication3DSecure $authentication3DSecure = null, ?string $media = null, ?ContractNumberWalletList $contractNumberWalletList = null, ?string $transactionID = null)
    {
        $this
            ->setVersion($version)
            ->setContractNumber($contractNumber)
            ->setWallet($wallet)
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
     * @param string|null $version
     * @return CreateWalletRequest
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
     * @param string|null $contractNumber
     * @return CreateWalletRequest
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
     * @return Wallet|null
     */
    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    /**
     * Set wallet value
     * @param Wallet|null $wallet
     * @return CreateWalletRequest
     */
    public function setWallet(?Wallet $wallet = null): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * Get buyer value
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    /**
     * Set buyer value
     * @param Buyer|null $buyer
     * @return CreateWalletRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
    {
        $this->buyer = $buyer;

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
     * @return CreateWalletRequest
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
     * @return CreateWalletRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }

    /**
     * Get authentication3DSecure value
     * @return Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?Authentication3DSecure
    {
        return $this->authentication3DSecure;
    }

    /**
     * Set authentication3DSecure value
     * @param Authentication3DSecure|null $authentication3DSecure
     * @return CreateWalletRequest
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
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
     * @param string|null $media
     * @return CreateWalletRequest
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
     * @return ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?ContractNumberWalletList
    {
        return $this->contractNumberWalletList;
    }

    /**
     * Set contractNumberWalletList value
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @return CreateWalletRequest
     */
    public function setContractNumberWalletList(?ContractNumberWalletList $contractNumberWalletList = null): self
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
     * @param string|null $transactionID
     * @return CreateWalletRequest
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
