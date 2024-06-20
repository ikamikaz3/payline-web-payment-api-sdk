<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cards StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for a wallet
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Cards extends AbstractStructBase
{
    /**
     * The walletId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $walletId = null;

    /**
     * The card
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Card|null
     */
    protected ?Card $card = null;

    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastName = null;

    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstName = null;

    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $email = null;

    /**
     * The shippingAddress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var Address|null
     */
    protected ?Address $shippingAddress = null;

    /**
     * The cardInd
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardInd = null;

    /**
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * The isDisabled
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $isDisabled = null;

    /**
     * The disableDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $disableDate = null;

    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var ExtendedCardType|null
     */
    protected ?ExtendedCardType $extendedCard = null;

    /**
     * The default
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $default = null;

    /**
     * Constructor method for cards
     * @param string|null $walletId
     * @param Card|null $card
     * @param string|null $lastName
     * @param string|null $firstName
     * @param string|null $email
     * @param Address|null $shippingAddress
     * @param string|null $cardInd
     * @param string|null $comment
     * @param string|null $isDisabled
     * @param string|null $disableDate
     * @param ExtendedCardType|null $extendedCard
     * @param string|null $default
     * @uses Cards::setWalletId()
     * @uses Cards::setCard()
     * @uses Cards::setLastName()
     * @uses Cards::setFirstName()
     * @uses Cards::setEmail()
     * @uses Cards::setShippingAddress()
     * @uses Cards::setCardInd()
     * @uses Cards::setComment()
     * @uses Cards::setIsDisabled()
     * @uses Cards::setDisableDate()
     * @uses Cards::setExtendedCard()
     * @uses Cards::setDefault()
     */
    public function __construct(?string $walletId = null, ?Card $card = null, ?string $lastName = null, ?string $firstName = null, ?string $email = null, ?Address $shippingAddress = null, ?string $cardInd = null, ?string $comment = null, ?string $isDisabled = null, ?string $disableDate = null, ?ExtendedCardType $extendedCard = null, ?string $default = null)
    {
        $this
            ->setWalletId($walletId)
            ->setCard($card)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setEmail($email)
            ->setShippingAddress($shippingAddress)
            ->setCardInd($cardInd)
            ->setComment($comment)
            ->setIsDisabled($isDisabled)
            ->setDisableDate($disableDate)
            ->setExtendedCard($extendedCard)
            ->setDefault($default);
    }

    /**
     * Get walletId value
     * @return string|null
     */
    public function getWalletId(): ?string
    {
        return $this->walletId;
    }

    /**
     * Set walletId value
     * @param string|null $walletId
     * @return Cards
     */
    public function setWalletId(?string $walletId = null): self
    {
        // validation for constraint: string
        if (!is_null($walletId) && !is_string($walletId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walletId, true), gettype($walletId)), __LINE__);
        }
        $this->walletId = $walletId;

        return $this;
    }

    /**
     * Get card value
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * Set card value
     * @param Card|null $card
     * @return Cards
     */
    public function setCard(?Card $card = null): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Set lastName value
     * @param string|null $lastName
     * @return Cards
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set firstName value
     * @param string|null $firstName
     * @return Cards
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email value
     * @param string|null $email
     * @return Cards
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get shippingAddress value
     * @return Address|null
     */
    public function getShippingAddress(): ?Address
    {
        return $this->shippingAddress;
    }

    /**
     * Set shippingAddress value
     * @param Address|null $shippingAddress
     * @return Cards
     */
    public function setShippingAddress(?Address $shippingAddress = null): self
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get cardInd value
     * @return string|null
     */
    public function getCardInd(): ?string
    {
        return $this->cardInd;
    }

    /**
     * Set cardInd value
     * @param string|null $cardInd
     * @return Cards
     */
    public function setCardInd(?string $cardInd = null): self
    {
        // validation for constraint: string
        if (!is_null($cardInd) && !is_string($cardInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardInd, true), gettype($cardInd)), __LINE__);
        }
        $this->cardInd = $cardInd;

        return $this;
    }

    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Set comment value
     * @param string|null $comment
     * @return Cards
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get isDisabled value
     * @return string|null
     */
    public function getIsDisabled(): ?string
    {
        return $this->isDisabled;
    }

    /**
     * Set isDisabled value
     * @param string|null $isDisabled
     * @return Cards
     */
    public function setIsDisabled(?string $isDisabled = null): self
    {
        // validation for constraint: string
        if (!is_null($isDisabled) && !is_string($isDisabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isDisabled, true), gettype($isDisabled)), __LINE__);
        }
        $this->isDisabled = $isDisabled;

        return $this;
    }

    /**
     * Get disableDate value
     * @return string|null
     */
    public function getDisableDate(): ?string
    {
        return $this->disableDate;
    }

    /**
     * Set disableDate value
     * @param string|null $disableDate
     * @return Cards
     */
    public function setDisableDate(?string $disableDate = null): self
    {
        // validation for constraint: string
        if (!is_null($disableDate) && !is_string($disableDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disableDate, true), gettype($disableDate)), __LINE__);
        }
        $this->disableDate = $disableDate;

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
     * @return Cards
     */
    public function setExtendedCard(?ExtendedCardType $extendedCard = null): self
    {
        $this->extendedCard = $extendedCard;

        return $this;
    }

    /**
     * Get default value
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * Set default value
     * @param string|null $default
     * @return Cards
     */
    public function setDefault(?string $default = null): self
    {
        // validation for constraint: string
        if (!is_null($default) && !is_string($default)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        $this->default = $default;

        return $this;
    }
}
