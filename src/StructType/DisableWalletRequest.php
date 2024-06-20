<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disableWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the disableWallet method
 * @subpackage Structs
 */
class DisableWalletRequest extends AbstractStructBase
{
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;

    /**
     * The walletIdList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var WalletIdList|null
     */
    protected ?WalletIdList $walletIdList = null;

    /**
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;

    /**
     * Constructor method for disableWalletRequest
     * @param string|null $contractNumber
     * @param WalletIdList|null $walletIdList
     * @param string|null $cardInd
     * @uses DisableWalletRequest::setContractNumber()
     * @uses DisableWalletRequest::setWalletIdList()
     * @uses DisableWalletRequest::setCardInd()
     */
    public function __construct(?string $contractNumber = null, ?WalletIdList $walletIdList = null, ?string $cardInd = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setWalletIdList($walletIdList)
            ->setCardInd($cardInd);
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
     * @return DisableWalletRequest
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
     * Get walletIdList value
     * @return WalletIdList|null
     */
    public function getWalletIdList(): ?WalletIdList
    {
        return $this->walletIdList;
    }

    /**
     * Set walletIdList value
     * @param WalletIdList|null $walletIdList
     * @return DisableWalletRequest
     */
    public function setWalletIdList(?WalletIdList $walletIdList = null): self
    {
        $this->walletIdList = $walletIdList;

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
     * @param string|null $cardInd
     * @return DisableWalletRequest
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
}
