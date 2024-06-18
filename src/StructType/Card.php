<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for card StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the card
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Card extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The paymentData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: false
     * @var \StructType\PaymentData|null
     */
    protected ?\StructType\PaymentData $paymentData = null;
    /**
     * The encryptionKeyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $encryptionKeyId = null;
    /**
     * The encryptedData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $encryptedData = null;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $number = null;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $expirationDate = null;
    /**
     * The cvx
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cvx = null;
    /**
     * The ownerBirthdayDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ownerBirthdayDate = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The cardPresent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardPresent = null;
    /**
     * The cardholder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cardholder = null;
    /**
     * The token
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * The par
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $par = null;
    /**
     * The tokenRequestorCryptogram
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $tokenRequestorCryptogram = null;
    /**
     * The tokenRequestorId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $tokenRequestorId = null;
    /**
     * The last4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $last4 = null;
    /**
     * The panType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $panType = null;
    /**
     * Constructor method for card
     * @uses Card::setType()
     * @uses Card::setPaymentData()
     * @uses Card::setEncryptionKeyId()
     * @uses Card::setEncryptedData()
     * @uses Card::setNumber()
     * @uses Card::setExpirationDate()
     * @uses Card::setCvx()
     * @uses Card::setOwnerBirthdayDate()
     * @uses Card::setPassword()
     * @uses Card::setCardPresent()
     * @uses Card::setCardholder()
     * @uses Card::setToken()
     * @uses Card::setPar()
     * @uses Card::setTokenRequestorCryptogram()
     * @uses Card::setTokenRequestorId()
     * @uses Card::setLast4()
     * @uses Card::setPanType()
     * @param string $type
     * @param \StructType\PaymentData $paymentData
     * @param string $encryptionKeyId
     * @param string $encryptedData
     * @param string $number
     * @param string $expirationDate
     * @param string $cvx
     * @param string $ownerBirthdayDate
     * @param string $password
     * @param string $cardPresent
     * @param string $cardholder
     * @param string $token
     * @param string $par
     * @param string $tokenRequestorCryptogram
     * @param string $tokenRequestorId
     * @param string $last4
     * @param string $panType
     */
    public function __construct(?string $type = null, ?\StructType\PaymentData $paymentData = null, ?string $encryptionKeyId = null, ?string $encryptedData = null, ?string $number = null, ?string $expirationDate = null, ?string $cvx = null, ?string $ownerBirthdayDate = null, ?string $password = null, ?string $cardPresent = null, ?string $cardholder = null, ?string $token = null, ?string $par = null, ?string $tokenRequestorCryptogram = null, ?string $tokenRequestorId = null, ?string $last4 = null, ?string $panType = null)
    {
        $this
            ->setType($type)
            ->setPaymentData($paymentData)
            ->setEncryptionKeyId($encryptionKeyId)
            ->setEncryptedData($encryptedData)
            ->setNumber($number)
            ->setExpirationDate($expirationDate)
            ->setCvx($cvx)
            ->setOwnerBirthdayDate($ownerBirthdayDate)
            ->setPassword($password)
            ->setCardPresent($cardPresent)
            ->setCardholder($cardholder)
            ->setToken($token)
            ->setPar($par)
            ->setTokenRequestorCryptogram($tokenRequestorCryptogram)
            ->setTokenRequestorId($tokenRequestorId)
            ->setLast4($last4)
            ->setPanType($panType);
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
     * @param string $type
     * @return \StructType\Card
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
     * Get paymentData value
     * @return \StructType\PaymentData|null
     */
    public function getPaymentData(): ?\StructType\PaymentData
    {
        return $this->paymentData;
    }
    /**
     * Set paymentData value
     * @param \StructType\PaymentData $paymentData
     * @return \StructType\Card
     */
    public function setPaymentData(?\StructType\PaymentData $paymentData = null): self
    {
        $this->paymentData = $paymentData;
        
        return $this;
    }
    /**
     * Get encryptionKeyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEncryptionKeyId(): ?string
    {
        return $this->encryptionKeyId ?? null;
    }
    /**
     * Set encryptionKeyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $encryptionKeyId
     * @return \StructType\Card
     */
    public function setEncryptionKeyId(?string $encryptionKeyId = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptionKeyId) && !is_string($encryptionKeyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptionKeyId, true), gettype($encryptionKeyId)), __LINE__);
        }
        if (is_null($encryptionKeyId) || (is_array($encryptionKeyId) && empty($encryptionKeyId))) {
            unset($this->encryptionKeyId);
        } else {
            $this->encryptionKeyId = $encryptionKeyId;
        }
        
        return $this;
    }
    /**
     * Get encryptedData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEncryptedData(): ?string
    {
        return $this->encryptedData ?? null;
    }
    /**
     * Set encryptedData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $encryptedData
     * @return \StructType\Card
     */
    public function setEncryptedData(?string $encryptedData = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptedData) && !is_string($encryptedData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptedData, true), gettype($encryptedData)), __LINE__);
        }
        if (is_null($encryptedData) || (is_array($encryptedData) && empty($encryptedData))) {
            unset($this->encryptedData);
        } else {
            $this->encryptedData = $encryptedData;
        }
        
        return $this;
    }
    /**
     * Get number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number ?? null;
    }
    /**
     * Set number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \StructType\Card
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->number);
        } else {
            $this->number = $number;
        }
        
        return $this;
    }
    /**
     * Get expirationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate ?? null;
    }
    /**
     * Set expirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDate
     * @return \StructType\Card
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        if (is_null($expirationDate) || (is_array($expirationDate) && empty($expirationDate))) {
            unset($this->expirationDate);
        } else {
            $this->expirationDate = $expirationDate;
        }
        
        return $this;
    }
    /**
     * Get cvx value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCvx(): ?string
    {
        return $this->cvx ?? null;
    }
    /**
     * Set cvx value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cvx
     * @return \StructType\Card
     */
    public function setCvx(?string $cvx = null): self
    {
        // validation for constraint: string
        if (!is_null($cvx) && !is_string($cvx)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvx, true), gettype($cvx)), __LINE__);
        }
        if (is_null($cvx) || (is_array($cvx) && empty($cvx))) {
            unset($this->cvx);
        } else {
            $this->cvx = $cvx;
        }
        
        return $this;
    }
    /**
     * Get ownerBirthdayDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOwnerBirthdayDate(): ?string
    {
        return $this->ownerBirthdayDate ?? null;
    }
    /**
     * Set ownerBirthdayDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ownerBirthdayDate
     * @return \StructType\Card
     */
    public function setOwnerBirthdayDate(?string $ownerBirthdayDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerBirthdayDate) && !is_string($ownerBirthdayDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerBirthdayDate, true), gettype($ownerBirthdayDate)), __LINE__);
        }
        if (is_null($ownerBirthdayDate) || (is_array($ownerBirthdayDate) && empty($ownerBirthdayDate))) {
            unset($this->ownerBirthdayDate);
        } else {
            $this->ownerBirthdayDate = $ownerBirthdayDate;
        }
        
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password ?? null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \StructType\Card
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        
        return $this;
    }
    /**
     * Get cardPresent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardPresent(): ?string
    {
        return $this->cardPresent ?? null;
    }
    /**
     * Set cardPresent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardPresent
     * @return \StructType\Card
     */
    public function setCardPresent(?string $cardPresent = null): self
    {
        // validation for constraint: string
        if (!is_null($cardPresent) && !is_string($cardPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardPresent, true), gettype($cardPresent)), __LINE__);
        }
        if (is_null($cardPresent) || (is_array($cardPresent) && empty($cardPresent))) {
            unset($this->cardPresent);
        } else {
            $this->cardPresent = $cardPresent;
        }
        
        return $this;
    }
    /**
     * Get cardholder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardholder(): ?string
    {
        return $this->cardholder ?? null;
    }
    /**
     * Set cardholder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardholder
     * @return \StructType\Card
     */
    public function setCardholder(?string $cardholder = null): self
    {
        // validation for constraint: string
        if (!is_null($cardholder) && !is_string($cardholder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardholder, true), gettype($cardholder)), __LINE__);
        }
        if (is_null($cardholder) || (is_array($cardholder) && empty($cardholder))) {
            unset($this->cardholder);
        } else {
            $this->cardholder = $cardholder;
        }
        
        return $this;
    }
    /**
     * Get token value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token ?? null;
    }
    /**
     * Set token value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $token
     * @return \StructType\Card
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        if (is_null($token) || (is_array($token) && empty($token))) {
            unset($this->token);
        } else {
            $this->token = $token;
        }
        
        return $this;
    }
    /**
     * Get par value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPar(): ?string
    {
        return $this->par ?? null;
    }
    /**
     * Set par value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $par
     * @return \StructType\Card
     */
    public function setPar(?string $par = null): self
    {
        // validation for constraint: string
        if (!is_null($par) && !is_string($par)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($par, true), gettype($par)), __LINE__);
        }
        if (is_null($par) || (is_array($par) && empty($par))) {
            unset($this->par);
        } else {
            $this->par = $par;
        }
        
        return $this;
    }
    /**
     * Get tokenRequestorCryptogram value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTokenRequestorCryptogram(): ?string
    {
        return $this->tokenRequestorCryptogram ?? null;
    }
    /**
     * Set tokenRequestorCryptogram value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tokenRequestorCryptogram
     * @return \StructType\Card
     */
    public function setTokenRequestorCryptogram(?string $tokenRequestorCryptogram = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenRequestorCryptogram) && !is_string($tokenRequestorCryptogram)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenRequestorCryptogram, true), gettype($tokenRequestorCryptogram)), __LINE__);
        }
        if (is_null($tokenRequestorCryptogram) || (is_array($tokenRequestorCryptogram) && empty($tokenRequestorCryptogram))) {
            unset($this->tokenRequestorCryptogram);
        } else {
            $this->tokenRequestorCryptogram = $tokenRequestorCryptogram;
        }
        
        return $this;
    }
    /**
     * Get tokenRequestorId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTokenRequestorId(): ?string
    {
        return $this->tokenRequestorId ?? null;
    }
    /**
     * Set tokenRequestorId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tokenRequestorId
     * @return \StructType\Card
     */
    public function setTokenRequestorId(?string $tokenRequestorId = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenRequestorId) && !is_string($tokenRequestorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenRequestorId, true), gettype($tokenRequestorId)), __LINE__);
        }
        if (is_null($tokenRequestorId) || (is_array($tokenRequestorId) && empty($tokenRequestorId))) {
            unset($this->tokenRequestorId);
        } else {
            $this->tokenRequestorId = $tokenRequestorId;
        }
        
        return $this;
    }
    /**
     * Get last4 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLast4(): ?string
    {
        return $this->last4 ?? null;
    }
    /**
     * Set last4 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $last4
     * @return \StructType\Card
     */
    public function setLast4(?string $last4 = null): self
    {
        // validation for constraint: string
        if (!is_null($last4) && !is_string($last4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last4, true), gettype($last4)), __LINE__);
        }
        if (is_null($last4) || (is_array($last4) && empty($last4))) {
            unset($this->last4);
        } else {
            $this->last4 = $last4;
        }
        
        return $this;
    }
    /**
     * Get panType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPanType(): ?string
    {
        return $this->panType ?? null;
    }
    /**
     * Set panType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $panType
     * @return \StructType\Card
     */
    public function setPanType(?string $panType = null): self
    {
        // validation for constraint: string
        if (!is_null($panType) && !is_string($panType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($panType, true), gettype($panType)), __LINE__);
        }
        if (is_null($panType) || (is_array($panType) && empty($panType))) {
            unset($this->panType);
        } else {
            $this->panType = $panType;
        }
        
        return $this;
    }
}
