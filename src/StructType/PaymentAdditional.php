<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentAdditional StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the paymentAdditional
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentAdditional extends AbstractStructBase
{
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Transaction|null
     */
    protected ?\StructType\Transaction $transaction = null;
    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Authorization|null
     */
    protected ?\StructType\Authorization $authorization = null;
    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Authentication3DSecure|null
     */
    protected ?\StructType\Authentication3DSecure $authentication3DSecure = null;
    /**
     * The card
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CardOut|null
     */
    protected ?\StructType\CardOut $card = null;
    /**
     * The extendedCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ExtendedCardType|null
     */
    protected ?\StructType\ExtendedCardType $extendedCard = null;
    /**
     * Constructor method for paymentAdditional
     * @uses PaymentAdditional::setTransaction()
     * @uses PaymentAdditional::setPayment()
     * @uses PaymentAdditional::setAuthorization()
     * @uses PaymentAdditional::setAuthentication3DSecure()
     * @uses PaymentAdditional::setCard()
     * @uses PaymentAdditional::setExtendedCard()
     * @param \StructType\Transaction $transaction
     * @param \StructType\Payment $payment
     * @param \StructType\Authorization $authorization
     * @param \StructType\Authentication3DSecure $authentication3DSecure
     * @param \StructType\CardOut $card
     * @param \StructType\ExtendedCardType $extendedCard
     */
    public function __construct(?\StructType\Transaction $transaction = null, ?\StructType\Payment $payment = null, ?\StructType\Authorization $authorization = null, ?\StructType\Authentication3DSecure $authentication3DSecure = null, ?\StructType\CardOut $card = null, ?\StructType\ExtendedCardType $extendedCard = null)
    {
        $this
            ->setTransaction($transaction)
            ->setPayment($payment)
            ->setAuthorization($authorization)
            ->setAuthentication3DSecure($authentication3DSecure)
            ->setCard($card)
            ->setExtendedCard($extendedCard);
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
     * @return \StructType\PaymentAdditional
     */
    public function setTransaction(?\StructType\Transaction $transaction = null): self
    {
        $this->transaction = $transaction;
        
        return $this;
    }
    /**
     * Get payment value
     * @return \StructType\Payment|null
     */
    public function getPayment(): ?\StructType\Payment
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \StructType\Payment $payment
     * @return \StructType\PaymentAdditional
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
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
     * @return \StructType\PaymentAdditional
     */
    public function setAuthorization(?\StructType\Authorization $authorization = null): self
    {
        $this->authorization = $authorization;
        
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
     * @return \StructType\PaymentAdditional
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
     * Get card value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CardOut|null
     */
    public function getCard(): ?\StructType\CardOut
    {
        return $this->card ?? null;
    }
    /**
     * Set card value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CardOut $card
     * @return \StructType\PaymentAdditional
     */
    public function setCard(?\StructType\CardOut $card = null): self
    {
        if (is_null($card) || (is_array($card) && empty($card))) {
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
     * @return \StructType\ExtendedCardType|null
     */
    public function getExtendedCard(): ?\StructType\ExtendedCardType
    {
        return $this->extendedCard ?? null;
    }
    /**
     * Set extendedCard value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ExtendedCardType $extendedCard
     * @return \StructType\PaymentAdditional
     */
    public function setExtendedCard(?\StructType\ExtendedCardType $extendedCard = null): self
    {
        if (is_null($extendedCard) || (is_array($extendedCard) && empty($extendedCard))) {
            unset($this->extendedCard);
        } else {
            $this->extendedCard = $extendedCard;
        }
        
        return $this;
    }
}
