<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disableWalletRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the disableWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\WalletIdList|null
     */
    protected ?\StructType\WalletIdList $walletIdList = null;
    /**
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;
    /**
     * Constructor method for disableWalletRequest
     * @uses DisableWalletRequest::setContractNumber()
     * @uses DisableWalletRequest::setWalletIdList()
     * @uses DisableWalletRequest::setCardInd()
     * @param string $contractNumber
     * @param \StructType\WalletIdList $walletIdList
     * @param string $cardInd
     */
    public function __construct(?string $contractNumber = null, ?\StructType\WalletIdList $walletIdList = null, ?string $cardInd = null)
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
     * @param string $contractNumber
     * @return \StructType\DisableWalletRequest
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
     * @return \StructType\WalletIdList|null
     */
    public function getWalletIdList(): ?\StructType\WalletIdList
    {
        return $this->walletIdList;
    }
    /**
     * Set walletIdList value
     * @param \StructType\WalletIdList $walletIdList
     * @return \StructType\DisableWalletRequest
     */
    public function setWalletIdList(?\StructType\WalletIdList $walletIdList = null): self
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
     * @param string $cardInd
     * @return \StructType\DisableWalletRequest
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
