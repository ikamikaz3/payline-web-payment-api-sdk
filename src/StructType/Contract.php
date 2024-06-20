<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use PaylineWebPayment\EnumType\SettlementType;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for contract StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains all information about contract
 * @subpackage Structs
 */
class Contract extends AbstractStructBase
{
    /**
     * The settlementType
     * Meta information extracted from the WSDL
     * - default: Manual
     * @var string|null
     */
    protected ?string $settlementType = null;

    /**
     * The logoEnable
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var bool|null
     */
    protected ?bool $logoEnable = null;

    /**
     * The smallLogoMime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $smallLogoMime = null;

    /**
     * The smallLogo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $smallLogo = null;

    /**
     * The normalLogoMime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $normalLogoMime = null;

    /**
     * The normalLogo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $normalLogo = null;

    /**
     * The contribution
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var Contribution|null
     */
    protected ?Contribution $contribution = null;

    /**
     * The enrolment3DS
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $enrolment3DS = null;

    /**
     * The cardType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardType = null;

    /**
     * The label
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $label = null;

    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $contractNumber = null;

    /**
     * The currency
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $currency = null;

    /**
     * The maxAmountPerTransaction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int|null
     */
    protected ?int $maxAmountPerTransaction = null;

    /**
     * The technicalData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var TechnicalData|null
     */
    protected ?TechnicalData $technicalData = null;

    /**
     * The bankAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var BankAccount|null
     */
    protected ?BankAccount $bankAccount = null;

    /**
     * The acquirerInterlocutor
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Interlocutor|null
     */
    protected ?Interlocutor $acquirerInterlocutor = null;

    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;

    /**
     * Constructor method for contract
     * @param string|null $settlementType
     * @param bool $logoEnable
     * @param string|null $smallLogoMime
     * @param string|null $smallLogo
     * @param string|null $normalLogoMime
     * @param string|null $normalLogo
     * @param Contribution|null $contribution
     * @param string|null $enrolment3DS
     * @param string|null $cardType
     * @param string|null $label
     * @param string|null $contractNumber
     * @param string|null $currency
     * @param int|null $maxAmountPerTransaction
     * @param TechnicalData|null $technicalData
     * @param BankAccount|null $bankAccount
     * @param Interlocutor|null $acquirerInterlocutor
     * @param string|null $description
     * @uses Contract::setSettlementType()
     * @uses Contract::setLogoEnable()
     * @uses Contract::setSmallLogoMime()
     * @uses Contract::setSmallLogo()
     * @uses Contract::setNormalLogoMime()
     * @uses Contract::setNormalLogo()
     * @uses Contract::setContribution()
     * @uses Contract::setEnrolment3DS()
     * @uses Contract::setCardType()
     * @uses Contract::setLabel()
     * @uses Contract::setContractNumber()
     * @uses Contract::setCurrency()
     * @uses Contract::setMaxAmountPerTransaction()
     * @uses Contract::setTechnicalData()
     * @uses Contract::setBankAccount()
     * @uses Contract::setAcquirerInterlocutor()
     * @uses Contract::setDescription()
     */
    public function __construct(?string $settlementType = null, ?bool $logoEnable = null, ?string $smallLogoMime = null, ?string $smallLogo = null, ?string $normalLogoMime = null, ?string $normalLogo = null, ?Contribution $contribution = null, ?string $enrolment3DS = null, ?string $cardType = null, ?string $label = null, ?string $contractNumber = null, ?string $currency = null, ?int $maxAmountPerTransaction = null, ?TechnicalData $technicalData = null, ?BankAccount $bankAccount = null, ?Interlocutor $acquirerInterlocutor = null, ?string $description = null)
    {
        $this
            ->setSettlementType($settlementType)
            ->setLogoEnable($logoEnable)
            ->setSmallLogoMime($smallLogoMime)
            ->setSmallLogo($smallLogo)
            ->setNormalLogoMime($normalLogoMime)
            ->setNormalLogo($normalLogo)
            ->setContribution($contribution)
            ->setEnrolment3DS($enrolment3DS)
            ->setCardType($cardType)
            ->setLabel($label)
            ->setContractNumber($contractNumber)
            ->setCurrency($currency)
            ->setMaxAmountPerTransaction($maxAmountPerTransaction)
            ->setTechnicalData($technicalData)
            ->setBankAccount($bankAccount)
            ->setAcquirerInterlocutor($acquirerInterlocutor)
            ->setDescription($description);
    }

    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }

    /**
     * Set settlementType value
     * @param string|null $settlementType
     * @return Contract
     * @uses \EnumType\SettlementType::valueIsValid()
     * @uses \EnumType\SettlementType::getValidValues()
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: enumeration
        if (!SettlementType::valueIsValid($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SettlementType', is_array($settlementType) ? implode(', ', $settlementType) : var_export($settlementType, true), implode(', ', SettlementType::getValidValues())), __LINE__);
        }
        $this->settlementType = $settlementType;

        return $this;
    }

    /**
     * Get logoEnable value
     * @return bool|null
     */
    public function getLogoEnable(): ?bool
    {
        return $this->logoEnable;
    }

    /**
     * Set logoEnable value
     * @param bool $logoEnable
     * @return Contract
     */
    public function setLogoEnable(?bool $logoEnable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($logoEnable) && !is_bool($logoEnable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($logoEnable, true), gettype($logoEnable)), __LINE__);
        }
        $this->logoEnable = $logoEnable;

        return $this;
    }

    /**
     * Get smallLogoMime value
     * @return string|null
     */
    public function getSmallLogoMime(): ?string
    {
        return $this->smallLogoMime;
    }

    /**
     * Set smallLogoMime value
     * @param string|null $smallLogoMime
     * @return Contract
     */
    public function setSmallLogoMime(?string $smallLogoMime = null): self
    {
        // validation for constraint: string
        if (!is_null($smallLogoMime) && !is_string($smallLogoMime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smallLogoMime, true), gettype($smallLogoMime)), __LINE__);
        }
        $this->smallLogoMime = $smallLogoMime;

        return $this;
    }

    /**
     * Get smallLogo value
     * @return string|null
     */
    public function getSmallLogo(): ?string
    {
        return $this->smallLogo;
    }

    /**
     * Set smallLogo value
     * @param string|null $smallLogo
     * @return Contract
     */
    public function setSmallLogo(?string $smallLogo = null): self
    {
        // validation for constraint: string
        if (!is_null($smallLogo) && !is_string($smallLogo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smallLogo, true), gettype($smallLogo)), __LINE__);
        }
        $this->smallLogo = $smallLogo;

        return $this;
    }

    /**
     * Get normalLogoMime value
     * @return string|null
     */
    public function getNormalLogoMime(): ?string
    {
        return $this->normalLogoMime;
    }

    /**
     * Set normalLogoMime value
     * @param string|null $normalLogoMime
     * @return Contract
     */
    public function setNormalLogoMime(?string $normalLogoMime = null): self
    {
        // validation for constraint: string
        if (!is_null($normalLogoMime) && !is_string($normalLogoMime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($normalLogoMime, true), gettype($normalLogoMime)), __LINE__);
        }
        $this->normalLogoMime = $normalLogoMime;

        return $this;
    }

    /**
     * Get normalLogo value
     * @return string|null
     */
    public function getNormalLogo(): ?string
    {
        return $this->normalLogo;
    }

    /**
     * Set normalLogo value
     * @param string|null $normalLogo
     * @return Contract
     */
    public function setNormalLogo(?string $normalLogo = null): self
    {
        // validation for constraint: string
        if (!is_null($normalLogo) && !is_string($normalLogo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($normalLogo, true), gettype($normalLogo)), __LINE__);
        }
        $this->normalLogo = $normalLogo;

        return $this;
    }

    /**
     * Get contribution value
     * @return Contribution|null
     */
    public function getContribution(): ?Contribution
    {
        return $this->contribution;
    }

    /**
     * Set contribution value
     * @param Contribution|null $contribution
     * @return Contract
     */
    public function setContribution(?Contribution $contribution = null): self
    {
        $this->contribution = $contribution;

        return $this;
    }

    /**
     * Get enrolment3DS value
     * @return string|null
     */
    public function getEnrolment3DS(): ?string
    {
        return $this->enrolment3DS;
    }

    /**
     * Set enrolment3DS value
     * @param string|null $enrolment3DS
     * @return Contract
     */
    public function setEnrolment3DS(?string $enrolment3DS = null): self
    {
        // validation for constraint: string
        if (!is_null($enrolment3DS) && !is_string($enrolment3DS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enrolment3DS, true), gettype($enrolment3DS)), __LINE__);
        }
        $this->enrolment3DS = $enrolment3DS;

        return $this;
    }

    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Set cardType value
     * @param string|null $cardType
     * @return Contract
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * Get label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label ?? null;
    }

    /**
     * Set label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $label
     * @return Contract
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        if (is_null($label)) {
            unset($this->label);
        } else {
            $this->label = $label;
        }

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
     * @param string|null $contractNumber
     * @return Contract
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
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Set currency value
     * @param string|null $currency
     * @return Contract
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get maxAmountPerTransaction value
     * @return int|null
     */
    public function getMaxAmountPerTransaction(): ?int
    {
        return $this->maxAmountPerTransaction;
    }

    /**
     * Set maxAmountPerTransaction value
     * @param int|null $maxAmountPerTransaction
     * @return Contract
     */
    public function setMaxAmountPerTransaction(?int $maxAmountPerTransaction = null): self
    {
        // validation for constraint: int
        $this->maxAmountPerTransaction = $maxAmountPerTransaction;

        return $this;
    }

    /**
     * Get technicalData value
     * @return TechnicalData|null
     */
    public function getTechnicalData(): ?TechnicalData
    {
        return $this->technicalData;
    }

    /**
     * Set technicalData value
     * @param TechnicalData|null $technicalData
     * @return Contract
     */
    public function setTechnicalData(?TechnicalData $technicalData = null): self
    {
        $this->technicalData = $technicalData;

        return $this;
    }

    /**
     * Get bankAccount value
     * @return BankAccount|null
     */
    public function getBankAccount(): ?BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * Set bankAccount value
     * @param BankAccount|null $bankAccount
     * @return Contract
     */
    public function setBankAccount(?BankAccount $bankAccount = null): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Get acquirerInterlocutor value
     * @return Interlocutor|null
     */
    public function getAcquirerInterlocutor(): ?Interlocutor
    {
        return $this->acquirerInterlocutor;
    }

    /**
     * Set acquirerInterlocutor value
     * @param Interlocutor|null $acquirerInterlocutor
     * @return Contract
     */
    public function setAcquirerInterlocutor(?Interlocutor $acquirerInterlocutor = null): self
    {
        $this->acquirerInterlocutor = $acquirerInterlocutor;

        return $this;
    }

    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description value
     * @param string|null $description
     * @return Contract
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;

        return $this;
    }
}
