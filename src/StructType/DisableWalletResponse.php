<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disableWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the disableWallet method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DisableWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The walletIdList
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\WalletIdList|null
     */
    protected ?\StructType\WalletIdList $walletIdList = null;
    /**
     * Constructor method for disableWalletResponse
     * @uses DisableWalletResponse::setResult()
     * @uses DisableWalletResponse::setWalletIdList()
     * @param \StructType\Result $result
     * @param \StructType\WalletIdList $walletIdList
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\WalletIdList $walletIdList = null)
    {
        $this
            ->setResult($result)
            ->setWalletIdList($walletIdList);
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
     * @return \StructType\DisableWalletResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
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
     * @return \StructType\DisableWalletResponse
     */
    public function setWalletIdList(?\StructType\WalletIdList $walletIdList = null): self
    {
        $this->walletIdList = $walletIdList;
        
        return $this;
    }
}
