<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wallet StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for a wallet
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\Card|null
     */
    protected ?\StructType\Card $card = null;
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
     * @var \StructType\Address|null
     */
    protected ?\StructType\Address $shippingAddress = null;
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
     * @param string $walletId
     * @param \StructType\Card $card
     * @param string $lastName
     * @param string $firstName
     * @param string $email
     * @param \StructType\Address $shippingAddress
     * @param string $comment
     * @param string $default
     * @param string $cardStatus
     * @param string $cardBrand
     */
    public function __construct(?string $walletId = null, ?\StructType\Card $card = null, ?string $lastName = null, ?string $firstName = null, ?string $email = null, ?\StructType\Address $shippingAddress = null, ?string $comment = null, ?string $default = null, ?string $cardStatus = null, ?string $cardBrand = null)
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
     * @param string $walletId
     * @return \StructType\Wallet
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
     * @return \StructType\Card|null
     */
    public function getCard(): ?\StructType\Card
    {
        return $this->card;
    }
    /**
     * Set card value
     * @param \StructType\Card $card
     * @return \StructType\Wallet
     */
    public function setCard(?\StructType\Card $card = null): self
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
     * @param string $lastName
     * @return \StructType\Wallet
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
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
     * @param string $firstName
     * @return \StructType\Wallet
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
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
     * @param string $email
     * @return \StructType\Wallet
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
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
     * @return \StructType\Address|null
     */
    public function getShippingAddress(): ?\StructType\Address
    {
        return $this->shippingAddress ?? null;
    }
    /**
     * Set shippingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Address $shippingAddress
     * @return \StructType\Wallet
     */
    public function setShippingAddress(?\StructType\Address $shippingAddress = null): self
    {
        if (is_null($shippingAddress) || (is_array($shippingAddress) && empty($shippingAddress))) {
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
     * @param string $comment
     * @return \StructType\Wallet
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
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
     * @param string $default
     * @return \StructType\Wallet
     */
    public function setDefault(?string $default = null): self
    {
        // validation for constraint: string
        if (!is_null($default) && !is_string($default)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        if (is_null($default) || (is_array($default) && empty($default))) {
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
     * @param string $cardStatus
     * @return \StructType\Wallet
     */
    public function setCardStatus(?string $cardStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($cardStatus) && !is_string($cardStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardStatus, true), gettype($cardStatus)), __LINE__);
        }
        if (is_null($cardStatus) || (is_array($cardStatus) && empty($cardStatus))) {
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
     * @param string $cardBrand
     * @return \StructType\Wallet
     */
    public function setCardBrand(?string $cardBrand = null): self
    {
        // validation for constraint: string
        if (!is_null($cardBrand) && !is_string($cardBrand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardBrand, true), gettype($cardBrand)), __LINE__);
        }
        if (is_null($cardBrand) || (is_array($cardBrand) && empty($cardBrand))) {
            unset($this->cardBrand);
        } else {
            $this->cardBrand = $cardBrand;
        }
        
        return $this;
    }
}
