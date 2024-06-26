<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transaction StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the transaction
 * @subpackage Structs
 */
class Transaction extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $id = null;

    /**
     * The date
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $date = null;

    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: false
     * @var string|null
     */
    protected ?string $type = null;

    /**
     * The isDuplicated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $isDuplicated = null;

    /**
     * The isPossibleFraud
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isPossibleFraud = null;

    /**
     * The fraudResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $fraudResult = null;

    /**
     * The fraudResultDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var FraudResultDetails|null
     */
    protected ?FraudResultDetails $fraudResultDetails = null;

    /**
     * The explanation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $explanation = null;

    /**
     * The threeDSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $threeDSecure = null;

    /**
     * The softDescriptor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $softDescriptor = null;

    /**
     * The score
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $score = null;

    /**
     * The scoring
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Scoring|null
     */
    protected ?Scoring $scoring = null;

    /**
     * The externalWalletType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $externalWalletType = null;

    /**
     * The externalWalletContractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $externalWalletContractNumber = null;

    /**
     * The partnerAdditionalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $partnerAdditionalData = null;

    /**
     * The avs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Avs|null
     */
    protected ?Avs $avs = null;

    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $customerId = null;

    /**
     * The orderReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $orderReference = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The pointOfSell
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var PointOfSell|null
     */
    protected ?PointOfSell $pointOfSell = null;

    /**
     * The card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var CardOut|null
     */
    protected ?CardOut $card = null;

    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * Constructor method for transaction
     * @param string|null $id
     * @param string|null $date
     * @param string|null $type
     * @param string|null $isDuplicated
     * @param string|null $isPossibleFraud
     * @param string|null $fraudResult
     * @param FraudResultDetails|null $fraudResultDetails
     * @param string|null $explanation
     * @param string|null $threeDSecure
     * @param string|null $softDescriptor
     * @param string|null $score
     * @param Scoring|null $scoring
     * @param string|null $externalWalletType
     * @param string|null $externalWalletContractNumber
     * @param string|null $partnerAdditionalData
     * @param Avs|null $avs
     * @param string|null $customerId
     * @param string|null $orderReference
     * @param Payment|null $payment
     * @param PointOfSell|null $pointOfSell
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @uses Transaction::setId()
     * @uses Transaction::setDate()
     * @uses Transaction::setType()
     * @uses Transaction::setIsDuplicated()
     * @uses Transaction::setIsPossibleFraud()
     * @uses Transaction::setFraudResult()
     * @uses Transaction::setFraudResultDetails()
     * @uses Transaction::setExplanation()
     * @uses Transaction::setThreeDSecure()
     * @uses Transaction::setSoftDescriptor()
     * @uses Transaction::setScore()
     * @uses Transaction::setScoring()
     * @uses Transaction::setExternalWalletType()
     * @uses Transaction::setExternalWalletContractNumber()
     * @uses Transaction::setPartnerAdditionalData()
     * @uses Transaction::setAvs()
     * @uses Transaction::setCustomerId()
     * @uses Transaction::setOrderReference()
     * @uses Transaction::setPayment()
     * @uses Transaction::setPointOfSell()
     * @uses Transaction::setCard()
     * @uses Transaction::setExtendedCard()
     */
    public function __construct(?string $id = null, ?string $date = null, ?string $type = null, ?string $isDuplicated = null, ?string $isPossibleFraud = null, ?string $fraudResult = null, ?FraudResultDetails $fraudResultDetails = null, ?string $explanation = null, ?string $threeDSecure = null, ?string $softDescriptor = null, ?string $score = null, ?Scoring $scoring = null, ?string $externalWalletType = null, ?string $externalWalletContractNumber = null, ?string $partnerAdditionalData = null, ?Avs $avs = null, ?string $customerId = null, ?string $orderReference = null, ?Payment $payment = null, ?PointOfSell $pointOfSell = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null)
    {
        $this
            ->setId($id)
            ->setDate($date)
            ->setType($type)
            ->setIsDuplicated($isDuplicated)
            ->setIsPossibleFraud($isPossibleFraud)
            ->setFraudResult($fraudResult)
            ->setFraudResultDetails($fraudResultDetails)
            ->setExplanation($explanation)
            ->setThreeDSecure($threeDSecure)
            ->setSoftDescriptor($softDescriptor)
            ->setScore($score)
            ->setScoring($scoring)
            ->setExternalWalletType($externalWalletType)
            ->setExternalWalletContractNumber($externalWalletContractNumber)
            ->setPartnerAdditionalData($partnerAdditionalData)
            ->setAvs($avs)
            ->setCustomerId($customerId)
            ->setOrderReference($orderReference)
            ->setPayment($payment)
            ->setPointOfSell($pointOfSell)
            ->setCard($card)
            ->setExtendedCard($extendedCard);
    }

    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Set id value
     * @param string|null $id
     * @return Transaction
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }

    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Set date value
     * @param string|null $date
     * @return Transaction
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;

        return $this;
    }

    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type value
     * @param string|null $type
     * @return Transaction
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get isDuplicated value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIsDuplicated(): ?string
    {
        return $this->isDuplicated ?? null;
    }

    /**
     * Set isDuplicated value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $isDuplicated
     * @return Transaction
     */
    public function setIsDuplicated(?string $isDuplicated = null): self
    {
        // validation for constraint: string
        if (!is_null($isDuplicated) && !is_string($isDuplicated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isDuplicated, true), gettype($isDuplicated)), __LINE__);
        }
        if (is_null($isDuplicated)) {
            unset($this->isDuplicated);
        } else {
            $this->isDuplicated = $isDuplicated;
        }

        return $this;
    }

    /**
     * Get isPossibleFraud value
     * @return string|null
     */
    public function getIsPossibleFraud(): ?string
    {
        return $this->isPossibleFraud;
    }

    /**
     * Set isPossibleFraud value
     * @param string|null $isPossibleFraud
     * @return Transaction
     */
    public function setIsPossibleFraud(?string $isPossibleFraud = null): self
    {
        // validation for constraint: string
        if (!is_null($isPossibleFraud) && !is_string($isPossibleFraud)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isPossibleFraud, true), gettype($isPossibleFraud)), __LINE__);
        }
        $this->isPossibleFraud = $isPossibleFraud;

        return $this;
    }

    /**
     * Get fraudResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFraudResult(): ?string
    {
        return $this->fraudResult ?? null;
    }

    /**
     * Set fraudResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $fraudResult
     * @return Transaction
     */
    public function setFraudResult(?string $fraudResult = null): self
    {
        // validation for constraint: string
        if (!is_null($fraudResult) && !is_string($fraudResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fraudResult, true), gettype($fraudResult)), __LINE__);
        }
        if (is_null($fraudResult)) {
            unset($this->fraudResult);
        } else {
            $this->fraudResult = $fraudResult;
        }

        return $this;
    }

    /**
     * Get fraudResultDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return FraudResultDetails|null
     */
    public function getFraudResultDetails(): ?FraudResultDetails
    {
        return $this->fraudResultDetails ?? null;
    }

    /**
     * Set fraudResultDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param FraudResultDetails|null $fraudResultDetails
     * @return Transaction
     */
    public function setFraudResultDetails(?FraudResultDetails $fraudResultDetails = null): self
    {
        if (is_null($fraudResultDetails)) {
            unset($this->fraudResultDetails);
        } else {
            $this->fraudResultDetails = $fraudResultDetails;
        }

        return $this;
    }

    /**
     * Get explanation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation ?? null;
    }

    /**
     * Set explanation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $explanation
     * @return Transaction
     */
    public function setExplanation(?string $explanation = null): self
    {
        // validation for constraint: string
        if (!is_null($explanation) && !is_string($explanation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanation, true), gettype($explanation)), __LINE__);
        }
        if (is_null($explanation)) {
            unset($this->explanation);
        } else {
            $this->explanation = $explanation;
        }

        return $this;
    }

    /**
     * Get threeDSecure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThreeDSecure(): ?string
    {
        return $this->threeDSecure ?? null;
    }

    /**
     * Set threeDSecure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $threeDSecure
     * @return Transaction
     */
    public function setThreeDSecure(?string $threeDSecure = null): self
    {
        // validation for constraint: string
        if (!is_null($threeDSecure) && !is_string($threeDSecure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($threeDSecure, true), gettype($threeDSecure)), __LINE__);
        }
        if (is_null($threeDSecure)) {
            unset($this->threeDSecure);
        } else {
            $this->threeDSecure = $threeDSecure;
        }

        return $this;
    }

    /**
     * Get softDescriptor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSoftDescriptor(): ?string
    {
        return $this->softDescriptor ?? null;
    }

    /**
     * Set softDescriptor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $softDescriptor
     * @return Transaction
     */
    public function setSoftDescriptor(?string $softDescriptor = null): self
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softDescriptor, true), gettype($softDescriptor)), __LINE__);
        }
        if (is_null($softDescriptor)) {
            unset($this->softDescriptor);
        } else {
            $this->softDescriptor = $softDescriptor;
        }

        return $this;
    }

    /**
     * Get score value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScore(): ?string
    {
        return $this->score ?? null;
    }

    /**
     * Set score value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $score
     * @return Transaction
     */
    public function setScore(?string $score = null): self
    {
        // validation for constraint: string
        if (!is_null($score) && !is_string($score)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        if (is_null($score)) {
            unset($this->score);
        } else {
            $this->score = $score;
        }

        return $this;
    }

    /**
     * Get scoring value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Scoring|null
     */
    public function getScoring(): ?Scoring
    {
        return $this->scoring ?? null;
    }

    /**
     * Set scoring value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Scoring|null $scoring
     * @return Transaction
     */
    public function setScoring(?Scoring $scoring = null): self
    {
        if (is_null($scoring)) {
            unset($this->scoring);
        } else {
            $this->scoring = $scoring;
        }

        return $this;
    }

    /**
     * Get externalWalletType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalWalletType(): ?string
    {
        return $this->externalWalletType ?? null;
    }

    /**
     * Set externalWalletType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $externalWalletType
     * @return Transaction
     */
    public function setExternalWalletType(?string $externalWalletType = null): self
    {
        // validation for constraint: string
        if (!is_null($externalWalletType) && !is_string($externalWalletType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalWalletType, true), gettype($externalWalletType)), __LINE__);
        }
        if (is_null($externalWalletType)) {
            unset($this->externalWalletType);
        } else {
            $this->externalWalletType = $externalWalletType;
        }

        return $this;
    }

    /**
     * Get externalWalletContractNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExternalWalletContractNumber(): ?string
    {
        return $this->externalWalletContractNumber ?? null;
    }

    /**
     * Set externalWalletContractNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $externalWalletContractNumber
     * @return Transaction
     */
    public function setExternalWalletContractNumber(?string $externalWalletContractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($externalWalletContractNumber) && !is_string($externalWalletContractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalWalletContractNumber, true), gettype($externalWalletContractNumber)), __LINE__);
        }
        if (is_null($externalWalletContractNumber)) {
            unset($this->externalWalletContractNumber);
        } else {
            $this->externalWalletContractNumber = $externalWalletContractNumber;
        }

        return $this;
    }

    /**
     * Get partnerAdditionalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPartnerAdditionalData(): ?string
    {
        return $this->partnerAdditionalData ?? null;
    }

    /**
     * Set partnerAdditionalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $partnerAdditionalData
     * @return Transaction
     */
    public function setPartnerAdditionalData(?string $partnerAdditionalData = null): self
    {
        // validation for constraint: string
        if (!is_null($partnerAdditionalData) && !is_string($partnerAdditionalData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerAdditionalData, true), gettype($partnerAdditionalData)), __LINE__);
        }
        if (is_null($partnerAdditionalData)) {
            unset($this->partnerAdditionalData);
        } else {
            $this->partnerAdditionalData = $partnerAdditionalData;
        }

        return $this;
    }

    /**
     * Get avs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Avs|null
     */
    public function getAvs(): ?Avs
    {
        return $this->avs ?? null;
    }

    /**
     * Set avs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Avs|null $avs
     * @return Transaction
     */
    public function setAvs(?Avs $avs = null): self
    {
        if (is_null($avs)) {
            unset($this->avs);
        } else {
            $this->avs = $avs;
        }

        return $this;
    }

    /**
     * Get customerId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * Set customerId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $customerId
     * @return Transaction
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        if (is_null($customerId)) {
            unset($this->customerId);
        } else {
            $this->customerId = $customerId;
        }

        return $this;
    }

    /**
     * Get orderReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderReference(): ?string
    {
        return $this->orderReference ?? null;
    }

    /**
     * Set orderReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $orderReference
     * @return Transaction
     */
    public function setOrderReference(?string $orderReference = null): self
    {
        // validation for constraint: string
        if (!is_null($orderReference) && !is_string($orderReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderReference, true), gettype($orderReference)), __LINE__);
        }
        if (is_null($orderReference)) {
            unset($this->orderReference);
        } else {
            $this->orderReference = $orderReference;
        }

        return $this;
    }

    /**
     * Get payment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment ?? null;
    }

    /**
     * Set payment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Payment|null $payment
     * @return Transaction
     */
    public function setPayment(?Payment $payment = null): self
    {
        if (is_null($payment)) {
            unset($this->payment);
        } else {
            $this->payment = $payment;
        }

        return $this;
    }

    /**
     * Get pointOfSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return PointOfSell|null
     */
    public function getPointOfSell(): ?PointOfSell
    {
        return $this->pointOfSell ?? null;
    }

    /**
     * Set pointOfSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param PointOfSell|null $pointOfSell
     * @return Transaction
     */
    public function setPointOfSell(?PointOfSell $pointOfSell = null): self
    {
        if (is_null($pointOfSell)) {
            unset($this->pointOfSell);
        } else {
            $this->pointOfSell = $pointOfSell;
        }

        return $this;
    }

    /**
     * Get card value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return CardOut|null
     */
    public function getCard(): ?CardOut
    {
        return $this->card ?? null;
    }

    /**
     * Set card value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param CardOut|null $card
     * @return Transaction
     */
    public function setCard(?CardOut $card = null): self
    {
        if (is_null($card)) {
            unset($this->card);
        } else {
            $this->card = $card;
        }

        return $this;
    }

    /**
     * Get extendedCard value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return ExtendedCardType|null
     */
    public function getExtendedCard(): ?ExtendedCardType
    {
        return $this->extendedCard ?? null;
    }

    /**
     * Set extendedCard value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param ExtendedCardType|null $extendedCard
     * @return Transaction
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        if (is_null($extendedCard)) {
            unset($this->extendedCard);
        } else {
            $this->extendedCard = $extendedCard;
        }

        return $this;
    }
}
