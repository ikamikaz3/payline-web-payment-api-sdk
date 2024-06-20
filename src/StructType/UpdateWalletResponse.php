<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the updateWallet method
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class UpdateWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Result|null
     */
    protected ?Result $result = null;

    /**
     * The card
     * @var CardOut|null
     */
    protected ?CardOut $card = null;

    /**
     * The extendedCard
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var ContractNumberWalletList|null
     */
    protected ?ContractNumberWalletList $contractNumberWalletList = null;

    /**
     * Constructor method for updateWalletResponse
     * @param Result|null $result
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @uses UpdateWalletResponse::setResult()
     * @uses UpdateWalletResponse::setCard()
     * @uses UpdateWalletResponse::setExtendedCard()
     * @uses UpdateWalletResponse::setContractNumberWalletList()
     */
    public function __construct(?Result $result = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null, ?ContractNumberWalletList $contractNumberWalletList = null)
    {
        $this
            ->setResult($result)
            ->setCard($card)
            ->setExtendedCard($extendedCard)
            ->setContractNumberWalletList($contractNumberWalletList);
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
     * @return UpdateWalletResponse
     */
    public function setResult(?Result $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get card value
     * @return CardOut|null
     */
    public function getCard(): ?CardOut
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param CardOut|null $card
     * @return UpdateWalletResponse
     */
    public function setCard(?CardOut $card = null): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get extendedCard value
     * @return ExtendedCardType|null
     */
    public function getExtendedCard(): ?ExtendedCardType
    {
        return $this->extendedCard;
    }

    /**
     * Set extendedCard value
     * @param ExtendedCardType|null $extendedCard
     * @return UpdateWalletResponse
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

        return $this;
    }

    /**
     * Get contractNumberWalletList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?ContractNumberWalletList
    {
        return $this->contractNumberWalletList ?? null;
    }

    /**
     * Set contractNumberWalletList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @return UpdateWalletResponse
     */
    public function setContractNumberWalletList(?ContractNumberWalletList $contractNumberWalletList = null): self
    {
        if (is_null($contractNumberWalletList)) {
            unset($this->contractNumberWalletList);
        } else {
            $this->contractNumberWalletList = $contractNumberWalletList;
        }

        return $this;
    }
}
