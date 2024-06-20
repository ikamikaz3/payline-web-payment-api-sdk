<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMerchantSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the response from the getMerchantSettings method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMerchantSettingsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The listPointOfSell
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\ListPointOfSell|null
     */
    protected ?\StructType\ListPointOfSell $listPointOfSell = null;
    /**
     * Constructor method for getMerchantSettingsResponse
     * @uses GetMerchantSettingsResponse::setResult()
     * @uses GetMerchantSettingsResponse::setListPointOfSell()
     * @param \StructType\Result $result
     * @param \StructType\ListPointOfSell $listPointOfSell
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\ListPointOfSell $listPointOfSell = null)
    {
        $this
            ->setResult($result)
            ->setListPointOfSell($listPointOfSell);
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
     * @return \StructType\GetMerchantSettingsResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
    /**
     * Get listPointOfSell value
     * @return \StructType\ListPointOfSell|null
     */
    public function getListPointOfSell(): ?\StructType\ListPointOfSell
    {
        return $this->listPointOfSell;
    }
    /**
     * Set listPointOfSell value
     * @param \StructType\ListPointOfSell $listPointOfSell
     * @return \StructType\GetMerchantSettingsResponse
     */
    public function setListPointOfSell(?\StructType\ListPointOfSell $listPointOfSell = null): self
    {
        $this->listPointOfSell = $listPointOfSell;

        return $this;
    }
}
