<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMerchantSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the response from the getMerchantSettings method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class GetMerchantSettingsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The listPointOfSell
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var ListPointOfSell|null
     */
    protected ?ListPointOfSell $listPointOfSell = null;

    /**
     * Constructor method for getMerchantSettingsResponse
     * @param Result|null $result
     * @param ListPointOfSell|null $listPointOfSell
     * @uses GetMerchantSettingsResponse::setResult()
     * @uses GetMerchantSettingsResponse::setListPointOfSell()
     */
    public function __construct(?Result $result = null, ?ListPointOfSell $listPointOfSell = null)
    {
        $this
            ->setResult($result)
            ->setListPointOfSell($listPointOfSell);
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
     * @return GetMerchantSettingsResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get listPointOfSell value
     * @return ListPointOfSell|null
     */
    public function getListPointOfSell(): ?ListPointOfSell
    {
        return $this->listPointOfSell;
    }

    /**
     * Set listPointOfSell value
     * @param ListPointOfSell|null $listPointOfSell
     * @return GetMerchantSettingsResponse
     */
    public function setListPointOfSell(?ListPointOfSell $listPointOfSell = null): self
    {
        $this->listPointOfSell = $listPointOfSell;

        return $this;
    }
}
