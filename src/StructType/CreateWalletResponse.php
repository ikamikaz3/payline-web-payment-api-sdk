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
#[\AllowDynamicProperties]
class CreateWalletResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The card
     * @var \StructType\CardOut|null
     */
    protected ?\StructType\CardOut $card = null;
    /**
     * The extendedCard
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
    /**
     * The contractNumberWalletList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ContractNumberWalletList|null
     */
    protected ?\StructType\ContractNumberWalletList $contractNumberWalletList = null;
    /**
     * The fraudResultDetails
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\FraudResultDetails|null
     */
    protected ?\StructType\FraudResultDetails $fraudResultDetails = null;
    /**
     * Constructor method for createWalletResponse
     * @uses CreateWalletResponse::setResult()
     * @uses CreateWalletResponse::setCard()
     * @uses CreateWalletResponse::setExtendedCard()
     * @uses CreateWalletResponse::setContractNumberWalletList()
     * @uses CreateWalletResponse::setFraudResultDetails()
     * @param \StructType\Result $result
     * @param \StructType\CardOut $card
     * @param \StructType\ExtendedCardType $extendedCard
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @param \StructType\FraudResultDetails $fraudResultDetails
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\CardOut $card = null, ?\StructType\ExtendedCardType $extendedCard = null, ?\StructType\ContractNumberWalletList $contractNumberWalletList = null, ?\StructType\FraudResultDetails $fraudResultDetails = null)
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
     * @return \StructType\Result|null
     */
    public function getResult(): ?\StructType\Result
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \StructType\Result $result
     * @return \StructType\CreateWalletResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get card value
     * @return \StructType\CardOut|null
     */
    public function getCard(): ?\StructType\CardOut
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param \StructType\CardOut $card
     * @return \StructType\CreateWalletResponse
     */
    public function setCard(?\StructType\CardOut $card = null): self
    {
        $this->card = $card;
        
        return $this;
    }
    /**
     * Get extendedCard value
     * @return \StructType\ExtendedCardType|null
     */
    public function getExtendedCard(): ?\StructType\ExtendedCardType
    {
        return $this->extendedCard;
    }
    /**
     * Set extendedCard value
     * @param \StructType\ExtendedCardType $extendedCard
     * @return \StructType\CreateWalletResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
        return $this;
    }
    /**
     * Get contractNumberWalletList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ContractNumberWalletList|null
     */
    public function getContractNumberWalletList(): ?\StructType\ContractNumberWalletList
    {
        return $this->contractNumberWalletList ?? null;
    }
    /**
     * Set contractNumberWalletList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ContractNumberWalletList $contractNumberWalletList
     * @return \StructType\CreateWalletResponse
     */
    public function setContractNumberWalletList(?\StructType\ContractNumberWalletList $contractNumberWalletList = null): self
    {
        if (is_null($contractNumberWalletList) || (is_array($contractNumberWalletList) && empty($contractNumberWalletList))) {
            unset($this->contractNumberWalletList);
        } else {
            $this->contractNumberWalletList = $contractNumberWalletList;
        }
        
        return $this;
    }
    /**
     * Get fraudResultDetails value
     * @return \StructType\FraudResultDetails|null
     */
    public function getFraudResultDetails(): ?\StructType\FraudResultDetails
    {
        return $this->fraudResultDetails;
    }
    /**
     * Set fraudResultDetails value
     * @param \StructType\FraudResultDetails $fraudResultDetails
     * @return \StructType\CreateWalletResponse
     */
    public function setFraudResultDetails(?\StructType\FraudResultDetails $fraudResultDetails = null): self
    {
        $this->fraudResultDetails = $fraudResultDetails;
        
        return $this;
    }
}
