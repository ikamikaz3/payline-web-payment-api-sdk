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
class GetCardsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The cardsList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var CardsList|null
     */
    protected ?CardsList $cardsList = null;

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
     * Constructor method for getCardsResponse
     * @param Result|null $result
     * @param CardsList|null $cardsList
     * @param Owner|null $owner
     * @param PrivateDataList|null $privateDataList
     * @uses GetCardsResponse::setResult()
     * @uses GetCardsResponse::setCardsList()
     * @uses GetCardsResponse::setOwner()
     * @uses GetCardsResponse::setPrivateDataList()
     */
    public function __construct(?Result $result = null, ?CardsList $cardsList = null, ?Owner $owner = null, ?PrivateDataList $privateDataList = null)
    {
        $this
            ->setResult($result)
            ->setCardsList($cardsList)
            ->setOwner($owner)
            ->setPrivateDataList($privateDataList);
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
     * @return GetCardsResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get cardsList value
     * @return CardsList|null
     */
    public function getCardsList(): ?CardsList
    {
        return $this->cardsList;
    }

    /**
     * Set cardsList value
     * @param CardsList|null $cardsList
     * @return GetCardsResponse
     */
    public function setCardsList(?CardsList $cardsList = null): self
    {
        $this->cardsList = $cardsList;

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
     * @return GetCardsResponse
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
     * @return GetCardsResponse
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }
}
