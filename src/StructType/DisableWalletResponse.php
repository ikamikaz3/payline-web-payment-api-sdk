<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disableWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the disableWallet method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class DisableWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The walletIdList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var WalletIdList|null
     */
    protected ?WalletIdList $walletIdList = null;

    /**
     * Constructor method for disableWalletResponse
     * @param Result|null $result
     * @param WalletIdList|null $walletIdList
     * @uses DisableWalletResponse::setResult()
     * @uses DisableWalletResponse::setWalletIdList()
     */
    public function __construct(?Result $result = null, ?WalletIdList $walletIdList = null)
    {
        $this
            ->setResult($result)
            ->setWalletIdList($walletIdList);
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
     * @return DisableWalletResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

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
     * @return DisableWalletResponse
     */
    public function setWalletIdList(?WalletIdList $walletIdList = null): self
    {
        $this->walletIdList = $walletIdList;

        return $this;
    }
}
