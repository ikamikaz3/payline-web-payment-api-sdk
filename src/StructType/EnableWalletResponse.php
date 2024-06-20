<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for enableWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the enableWallet method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class EnableWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * Constructor method for enableWalletResponse
     * @param Result|null $result
     * @uses EnableWalletResponse::setResult()
     */
    public function __construct(?Result $result = null)
    {
        $this
            ->setResult($result);
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
     * @return EnableWalletResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
}
