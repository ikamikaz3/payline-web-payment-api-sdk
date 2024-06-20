<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doAuthorizationResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the reponse from the doAuthorization method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoAuthorizationResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Result|null
     */
    protected ?\StructType\Result $result = null;
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
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
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The transient
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $transient = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The linkedTransactionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $linkedTransactionId = null;
    /**
     * The travelFileNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $travelFileNumber = null;
    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The resultContainer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $resultContainer = null;
    /**
     * Constructor method for doAuthorizationResponse
     * @uses DoAuthorizationResponse::setResult()
     * @uses DoAuthorizationResponse::setTransaction()
     * @uses DoAuthorizationResponse::setAuthorization()
     * @uses DoAuthorizationResponse::setCard()
     * @uses DoAuthorizationResponse::setExtendedCard()
     * @uses DoAuthorizationResponse::setContractNumber()
     * @uses DoAuthorizationResponse::setTransient()
     * @uses DoAuthorizationResponse::setPrivateDataList()
     * @uses DoAuthorizationResponse::setLinkedTransactionId()
     * @uses DoAuthorizationResponse::setTravelFileNumber()
     * @uses DoAuthorizationResponse::setAuthentication3DSecure()
     * @uses DoAuthorizationResponse::setResultContainer()
     * @param \StructType\Result $result
     * @param \StructType\Transaction $transaction
     * @param \StructType\Authorization $authorization
     * @param \StructType\CardOut $card
     * @param \StructType\ExtendedCardType $extendedCard
     * @param string $contractNumber
     * @param string $transient
     * @param \StructType\PrivateDataList $privateDataList
     * @param string $linkedTransactionId
     * @param string $travelFileNumber
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param string $resultContainer
     */
    public function __construct(?\StructType\Result $result = null, ?\StructType\Transaction $transaction = null, ?\StructType\Authorization $authorization = null, ?\StructType\CardOut $card = null, ?\StructType\ExtendedCardType $extendedCard = null, ?string $contractNumber = null, ?string $transient = null, ?\StructType\PrivateDataList $privateDataList = null, ?string $linkedTransactionId = null, ?string $travelFileNumber = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?string $resultContainer = null)
    {
        $this
            ->setResult($result)
            ->setTransaction($transaction)
            ->setAuthorization($authorization)
            ->setCard($card)
            ->setExtendedCard($extendedCard)
            ->setContractNumber($contractNumber)
            ->setTransient($transient)
            ->setPrivateDataList($privateDataList)
            ->setLinkedTransactionId($linkedTransactionId)
            ->setTravelFileNumber($travelFileNumber)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setResultContainer($resultContainer);
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
     * @return \StructType\DoAuthorizationResponse
     */
    public function setResult(?\StructType\Result $result = null): self
    {
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction(): ?\StructType\Transaction
    {
        return $this->transaction;
    }
    /**
     * Set transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\DoAuthorizationResponse
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get authorization value
     * @return \StructType\Authorization|null
     */
    public function getAuthorization(): ?\StructType\Authorization
    {
        return $this->authorization;
    }
    /**
     * Set authorization value
     * @param \StructType\Authorization $authorization
     * @return \StructType\DoAuthorizationResponse
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        $this->authorization = $authorization;
        
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
     * @return \StructType\DoAuthorizationResponse
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
     * @return \StructType\DoAuthorizationResponse
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;
        
        return $this;
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \StructType\DoAuthorizationResponse
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        
        return $this;
    }
    /**
     * Get transient value
     * @return string|null
     */
    public function getTransient(): ?string
    {
        return $this->transient;
    }
    /**
     * Set transient value
     * @param string $transient
     * @return \StructType\DoAuthorizationResponse
     */
    public function setTransient(?string $transient = null): self
    {
        // validation for constraint: string
        if (!is_null($transient) && !is_string($transient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transient, true), gettype($transient)), __LINE__);
        }
        $this->transient = $transient;
        
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
     * @return \StructType\DoAuthorizationResponse
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get linkedTransactionId value
     * @return string|null
     */
    public function getLinkedTransactionId(): ?string
    {
        return $this->linkedTransactionId;
    }
    /**
     * Set linkedTransactionId value
     * @param string $linkedTransactionId
     * @return \StructType\DoAuthorizationResponse
     */
    public function setLinkedTransactionId(?string $linkedTransactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedTransactionId) && !is_string($linkedTransactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedTransactionId, true), gettype($linkedTransactionId)), __LINE__);
        }
        $this->linkedTransactionId = $linkedTransactionId;
        
        return $this;
    }
    /**
     * Get travelFileNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTravelFileNumber(): ?string
    {
        return $this->travelFileNumber ?? null;
    }
    /**
     * Set travelFileNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $travelFileNumber
     * @return \StructType\DoAuthorizationResponse
     */
    public function setTravelFileNumber(?string $travelFileNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFileNumber) && !is_string($travelFileNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFileNumber, true), gettype($travelFileNumber)), __LINE__);
        }
        if (is_null($travelFileNumber) || (is_array($travelFileNumber) && empty($travelFileNumber))) {
            unset($this->travelFileNumber);
        } else {
            $this->travelFileNumber = $travelFileNumber;
        }
        
        return $this;
    }
    /**
     * Get authentication3DSecure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?\StructType\Authentication3DSecure
    {
        return $this->authentication3DSecure ?? null;
    }
    /**
     * Set authentication3DSecure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @return \StructType\DoAuthorizationResponse
     */
    public function setAuthentication3DSecure(?\StructType\Authentication3DSecure $authentication3DSecure = null): self
    {
        if (is_null($authentication3DSecure) || (is_array($authentication3DSecure) && empty($authentication3DSecure))) {
            unset($this->authentication3DSecure);
        } else {
            $this->authentication3DSecure = $authentication3DSecure;
        }
        
        return $this;
    }
    /**
     * Get resultContainer value
     * @return string|null
     */
    public function getResultContainer(): ?string
    {
        return $this->resultContainer;
    }
    /**
     * Set resultContainer value
     * @param string $resultContainer
     * @return \StructType\DoAuthorizationResponse
     */
    public function setResultContainer(?string $resultContainer = null): self
    {
        // validation for constraint: string
        if (!is_null($resultContainer) && !is_string($resultContainer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultContainer, true), gettype($resultContainer)), __LINE__);
        }
        $this->resultContainer = $resultContainer;
        
        return $this;
    }
}
