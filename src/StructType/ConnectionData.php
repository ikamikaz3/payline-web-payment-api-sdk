<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for connectionData StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the merchant connection parameters
 * @subpackage Structs
 */
class ConnectionData extends AbstractStructBase
{
    /**
     * The merchantId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $merchantId = null;

    /**
     * The userId
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $userId = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $password = null;

    /**
     * The secretQuestion
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $secretQuestion = null;

    /**
     * The secretAnswer
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $secretAnswer = null;

    /**
     * Constructor method for connectionData
     * @param string|null $merchantId
     * @param string|null $userId
     * @param string|null $password
     * @param string|null $secretQuestion
     * @param string|null $secretAnswer
     * @uses ConnectionData::setMerchantId()
     * @uses ConnectionData::setUserId()
     * @uses ConnectionData::setPassword()
     * @uses ConnectionData::setSecretQuestion()
     * @uses ConnectionData::setSecretAnswer()
     */
    public function __construct(?string $merchantId = null, ?string $userId = null, ?string $password = null, ?string $secretQuestion = null, ?string $secretAnswer = null)
    {
        $this
            ->setMerchantId($merchantId)
            ->setUserId($userId)
            ->setPassword($password)
            ->setSecretQuestion($secretQuestion)
            ->setSecretAnswer($secretAnswer);
    }

    /**
     * Get merchantId value
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * Set merchantId value
     * @param string|null $merchantId
     * @return ConnectionData
     */
    public function setMerchantId(?string $merchantId = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantId) && !is_string($merchantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantId, true), gettype($merchantId)), __LINE__);
        }
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Set userId value
     * @param string|null $userId
     * @return ConnectionData
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value
     * @param string|null $password
     * @return ConnectionData
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;

        return $this;
    }

    /**
     * Get secretQuestion value
     * @return string|null
     */
    public function getSecretQuestion(): ?string
    {
        return $this->secretQuestion;
    }

    /**
     * Set secretQuestion value
     * @param string|null $secretQuestion
     * @return ConnectionData
     */
    public function setSecretQuestion(?string $secretQuestion = null): self
    {
        // validation for constraint: string
        if (!is_null($secretQuestion) && !is_string($secretQuestion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secretQuestion, true), gettype($secretQuestion)), __LINE__);
        }
        $this->secretQuestion = $secretQuestion;

        return $this;
    }

    /**
     * Get secretAnswer value
     * @return string|null
     */
    public function getSecretAnswer(): ?string
    {
        return $this->secretAnswer;
    }

    /**
     * Set secretAnswer value
     * @param string|null $secretAnswer
     * @return ConnectionData
     */
    public function setSecretAnswer(?string $secretAnswer = null): self
    {
        // validation for constraint: string
        if (!is_null($secretAnswer) && !is_string($secretAnswer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secretAnswer, true), gettype($secretAnswer)), __LINE__);
        }
        $this->secretAnswer = $secretAnswer;

        return $this;
    }
}
