<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wallet StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for a wallet
 * @subpackage Structs
 */
class Wallet extends AbstractStructBase
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
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $lastName = null;

    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $firstName = null;

    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $email = null;

    /**
     * The shippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Address|null
     */
    protected ?Address $shippingAddress = null;

    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * The default
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $default = null;

    /**
     * The cardStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardStatus = null;

    /**
     * The cardBrand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardBrand = null;

    /**
     * Constructor method for wallet
     * @param string|null $walletId
     * @param Card|null $card
     * @param string|null $lastName
     * @param string|null $firstName
     * @param string|null $email
     * @param Address|null $shippingAddress
     * @param string|null $comment
     * @param string|null $default
     * @param string|null $cardStatus
     * @param string|null $cardBrand
     * @uses Wallet::setWalletId()
     * @uses Wallet::setCard()
     * @uses Wallet::setLastName()
     * @uses Wallet::setFirstName()
     * @uses Wallet::setEmail()
     * @uses Wallet::setShippingAddress()
     * @uses Wallet::setComment()
     * @uses Wallet::setDefault()
     * @uses Wallet::setCardStatus()
     * @uses Wallet::setCardBrand()
     */
    public function __construct(?string $walletId = null, ?Card $card = null, ?string $lastName = null, ?string $firstName = null, ?string $email = null, ?Address $shippingAddress = null, ?string $comment = null, ?string $default = null, ?string $cardStatus = null, ?string $cardBrand = null)
    {
        $this
            ->setWalletId($walletId)
            ->setCard($card)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setEmail($email)
            ->setShippingAddress($shippingAddress)
            ->setComment($comment)
            ->setDefault($default)
            ->setCardStatus($cardStatus)
            ->setCardBrand($cardBrand);
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
     * @return Wallet
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
     * @return Wallet
     */
    public function setCard(?Card $card = null): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get lastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName ?? null;
    }

    /**
     * Set lastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $lastName
     * @return Wallet
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName)) {
            unset($this->lastName);
        } else {
            $this->lastName = $lastName;
        }

        return $this;
    }

    /**
     * Get firstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName ?? null;
    }

    /**
     * Set firstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $firstName
     * @return Wallet
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName)) {
            unset($this->firstName);
        } else {
            $this->firstName = $firstName;
        }

        return $this;
    }

    /**
     * Get email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email ?? null;
    }

    /**
     * Set email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $email
     * @return Wallet
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email)) {
            unset($this->email);
        } else {
            $this->email = $email;
        }

        return $this;
    }

    /**
     * Get shippingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Address|null
     */
    public function getShippingAddress(): ?Address
    {
        return $this->shippingAddress ?? null;
    }

    /**
     * Set shippingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Address|null $shippingAddress
     * @return Wallet
     */
    public function setShippingAddress(?Address $shippingAddress = null): self
    {
        if (is_null($shippingAddress)) {
            unset($this->shippingAddress);
        } else {
            $this->shippingAddress = $shippingAddress;
        }

        return $this;
    }

    /**
     * Get comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment ?? null;
    }

    /**
     * Set comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $comment
     * @return Wallet
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment)) {
            unset($this->comment);
        } else {
            $this->comment = $comment;
        }

        return $this;
    }

    /**
     * Get default value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default ?? null;
    }

    /**
     * Set default value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $default
     * @return Wallet
     */
    public function setDefault(?string $default = null): self
    {
        // validation for constraint: string
        if (!is_null($default) && !is_string($default)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        if (is_null($default)) {
            unset($this->default);
        } else {
            $this->default = $default;
        }

        return $this;
    }

    /**
     * Get cardStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardStatus(): ?string
    {
        return $this->cardStatus ?? null;
    }

    /**
     * Set cardStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $cardStatus
     * @return Wallet
     */
    public function setCardStatus(?string $cardStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($cardStatus) && !is_string($cardStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardStatus, true), gettype($cardStatus)), __LINE__);
        }
        if (is_null($cardStatus)) {
            unset($this->cardStatus);
        } else {
            $this->cardStatus = $cardStatus;
        }

        return $this;
    }

    /**
     * Get cardBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardBrand(): ?string
    {
        return $this->cardBrand ?? null;
    }

    /**
     * Set cardBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $cardBrand
     * @return Wallet
     */
    public function setCardBrand(?string $cardBrand = null): self
    {
        // validation for constraint: string
        if (!is_null($cardBrand) && !is_string($cardBrand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardBrand, true), gettype($cardBrand)), __LINE__);
        }
        if (is_null($cardBrand)) {
            unset($this->cardBrand);
        } else {
            $this->cardBrand = $cardBrand;
        }

        return $this;
    }
}
