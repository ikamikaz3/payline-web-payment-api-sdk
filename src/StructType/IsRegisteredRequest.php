<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isRegisteredRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the isRegistered method
 * @subpackage Structs
 */
class IsRegisteredRequest extends AbstractStructBase
{
    /**
     * The version
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string|null
     */
    protected ?string $version = null;

    /**
     * The payment
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Payment|null
     */
    protected ?Payment $payment = null;

    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var Order|null
     */
    protected ?Order $order = null;

    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var PrivateDataList|null
     */
    protected ?PrivateDataList $privateDataList = null;

    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Buyer|null
     */
    protected ?Buyer $buyer = null;

    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;

    /**
     * Constructor method for isRegisteredRequest
     * @param string|null $version
     * @param Payment|null $payment
     * @param Order|null $order
     * @param PrivateDataList|null $privateDataList
     * @param Buyer|null $buyer
     * @param string|null $miscData
     * @uses IsRegisteredRequest::setVersion()
     * @uses IsRegisteredRequest::setPayment()
     * @uses IsRegisteredRequest::setOrder()
     * @uses IsRegisteredRequest::setPrivateDataList()
     * @uses IsRegisteredRequest::setBuyer()
     * @uses IsRegisteredRequest::setMiscData()
     */
    public function __construct(?string $version = null, ?Payment $payment = null, ?Order $order = null, ?PrivateDataList $privateDataList = null, ?Buyer $buyer = null, ?string $miscData = null)
    {
        $this
            ->setVersion($version)
            ->setPayment($payment)
            ->setOrder($order)
            ->setPrivateDataList($privateDataList)
            ->setBuyer($buyer)
            ->setMiscData($miscData);
    }

    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set version value
     * @param string|null $version
     * @return IsRegisteredRequest
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;

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
     * @return IsRegisteredRequest
     */
    public function setPayment(?Payment $payment = null): self
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get order value
     * @return Order|null
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * Set order value
     * @param Order|null $order
     * @return IsRegisteredRequest
     */
    public function setOrder(?Order $order = null): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get privateDataList value
     * @return PrivateDataList|null
     */
    public function getPrivateDataList(): ?PrivateDataList
    {
        return $this->privateDataList;
    }

    /**
     * Set privateDataList value
     * @param PrivateDataList|null $privateDataList
     * @return IsRegisteredRequest
     */
    public function setPrivateDataList(?PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;

        return $this;
    }

    /**
     * Get buyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Buyer|null
     */
    public function getBuyer(): ?Buyer
    {
        return $this->buyer ?? null;
    }

    /**
     * Set buyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Buyer|null $buyer
     * @return IsRegisteredRequest
     */
    public function setBuyer(?Buyer $buyer = null): self
    {
        if (is_null($buyer)) {
            unset($this->buyer);
        } else {
            $this->buyer = $buyer;
        }

        return $this;
    }

    /**
     * Get miscData value
     * @return string|null
     */
    public function getMiscData(): ?string
    {
        return $this->miscData;
    }

    /**
     * Set miscData value
     * @param string|null $miscData
     * @return IsRegisteredRequest
     */
    public function setMiscData(?string $miscData = null): self
    {
        // validation for constraint: string
        if (!is_null($miscData) && !is_string($miscData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscData, true), gettype($miscData)), __LINE__);
        }
        $this->miscData = $miscData;

        return $this;
    }
}
