<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createWalletResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the createWallet method
 * @subpackage Structs
 */
class CreateWalletResponse extends AbstractStructBase
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
     * The fraudResultDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var FraudResultDetails|null
     */
    protected ?FraudResultDetails $fraudResultDetails = null;

    /**
     * Constructor method for createWalletResponse
     * @param Result|null $result
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @param ContractNumberWalletList|null $contractNumberWalletList
     * @param FraudResultDetails|null $fraudResultDetails
     * @uses CreateWalletResponse::setResult()
     * @uses CreateWalletResponse::setCard()
     * @uses CreateWalletResponse::setExtendedCard()
     * @uses CreateWalletResponse::setContractNumberWalletList()
     * @uses CreateWalletResponse::setFraudResultDetails()
     */
    public function __construct(?Result $result = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null, ?ContractNumberWalletList $contractNumberWalletList = null, ?FraudResultDetails $fraudResultDetails = null)
    {
        $this
            ->setResult($result)
            ->setCard($card)
            ->setExtendedCard($extendedCard)
            ->setContractNumberWalletList($contractNumberWalletList)
            ->setFraudResultDetails($fraudResultDetails);
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
     * @return CreateWalletResponse
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
     * @return CreateWalletResponse
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
     * @return CreateWalletResponse
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
     * @return CreateWalletResponse
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

    /**
     * Get fraudResultDetails value
     * @return FraudResultDetails|null
     */
    public function getFraudResultDetails(): ?FraudResultDetails
    {
        return $this->fraudResultDetails;
    }

    /**
     * Set fraudResultDetails value
     * @param FraudResultDetails|null $fraudResultDetails
     * @return CreateWalletResponse
     */
    public function setFraudResultDetails(?FraudResultDetails $fraudResultDetails = null): self
    {
        $this->fraudResultDetails = $fraudResultDetails;

        return $this;
    }
}
