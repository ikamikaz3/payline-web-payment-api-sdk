<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCardsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the getCards method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCardsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The cardsList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CardsList|null
     */
    protected ?\StructType\CardsList $cardsList = null;
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
     * Constructor method for getCardsResponse
     * @uses GetCardsResponse::setResult()
     * @uses GetCardsResponse::setCardsList()
     * @uses GetCardsResponse::setOwner()
     * @uses GetCardsResponse::setPrivateDataList()
     * @param \StructType\Result $result
     * @param \StructType\CardsList $cardsList
     * @param \StructType\Owner $owner
     * @param \StructType\PrivateDataList $privateDataList
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\CardsList $cardsList = null, ?\StructType\Owner $owner = null, ?\StructType\PrivateDataList $privateDataList = null)
    {
        $this
            ->setResult($result)
            ->setCardsList($cardsList)
            ->setOwner($owner)
            ->setPrivateDataList($privateDataList);
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
     * @return \StructType\GetCardsResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }
    /**
     * Get cardsList value
     * @return \StructType\CardsList|null
     */
    public function getCardsList(): ?\StructType\CardsList
    {
        return $this->cardsList;
    }
    /**
     * Set cardsList value
     * @param \StructType\CardsList $cardsList
     * @return \StructType\GetCardsResponse
     */
    public function setCardsList(?\StructType\CardsList $cardsList = null): self
    {
        $this->cardsList = $cardsList;

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
     * @return \StructType\GetCardsResponse
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
     * @return \StructType\GetCardsResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
