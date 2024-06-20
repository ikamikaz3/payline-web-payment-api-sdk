<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentAdditional StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the paymentAdditional
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class PaymentAdditional extends AbstractStructBase
{
    /**
     * The transaction
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Transaction|null
     */
    protected ?Transaction $transaction = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The authorization
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Authorization|null
     */
    protected ?Authorization $authorization = null;

    /**
     * The authentication3DSecure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Authentication3DSecure|null
     */
    protected ?Authentication3DSecure $authentication3DSecure = null;

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
     * Constructor method for paymentAdditional
     * @param Transaction|null $transaction
     * @param Payment|null $payment
     * @param Authorization|null $authorization
     * @param Authentication3DSecure|null $authentication3DSecure
     * @param CardOut|null $card
     * @param ExtendedCardType|null $extendedCard
     * @uses PaymentAdditional::setTransaction()
     * @uses PaymentAdditional::setPayment()
     * @uses PaymentAdditional::setAuthorization()
     * @uses PaymentAdditional::setAuthentication3DSecure()
     * @uses PaymentAdditional::setCard()
     * @uses PaymentAdditional::setExtendedCard()
     */
    public function __construct(?Transaction $transaction = null, ?Payment $payment = null, ?Authorization $authorization = null, ?Authentication3DSecure $authentication3DSecure = null, ?CardOut $card = null, ?ExtendedCardType $extendedCard = null)
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
     * @return Transaction|null
     */
    public function getTransaction(): ?Transaction
    {
        return $this->transaction;
    }

    /**
     * Set transaction value
     * @param Transaction|null $transaction
     * @return PaymentAdditional
     */
    public function setTransaction(?Transaction $transaction = null): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get payment value
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    /**
     * Set payment value
     * @param Payment|null $payment
     * @return PaymentAdditional
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get authorization value
     * @return Authorization|null
     */
    public function getAuthorization(): ?Authorization
    {
        return $this->authorization;
    }

    /**
     * Set authorization value
     * @param Authorization|null $authorization
     * @return PaymentAdditional
     */
    public function setAuthorization(?Authorization $authorization = null): self
    {
        $this->authorization = $authorization;

        return $this;
    }

    /**
     * Get authentication3DSecure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Authentication3DSecure|null
     */
    public function getAuthentication3DSecure(): ?Authentication3DSecure
    {
        return $this->authentication3DSecure ?? null;
    }

    /**
     * Set authentication3DSecure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Authentication3DSecure|null $authentication3DSecure
     * @return PaymentAdditional
     */
    public function setAuthentication3DSecure(?Authentication3DSecure $authentication3DSecure = null): self
    {
        if (is_null($authentication3DSecure)) {
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
     * @return PaymentAdditional
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
     * @return PaymentAdditional
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
