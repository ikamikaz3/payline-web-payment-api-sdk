<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isRegisteredRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This element is the request for the isRegistered method
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
     * @var \StructType\Payment|null
     */
    protected ?\StructType\Payment $payment = null;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var \StructType\Order|null
     */
    protected ?\StructType\Order $order = null;
    /**
     * The privateDataList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\PrivateDataList|null
     */
    protected ?\StructType\PrivateDataList $privateDataList = null;
    /**
     * The buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Buyer|null
     */
    protected ?\StructType\Buyer $buyer = null;
    /**
     * The miscData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $miscData = null;
    /**
     * Constructor method for isRegisteredRequest
     * @uses IsRegisteredRequest::setVersion()
     * @uses IsRegisteredRequest::setPayment()
     * @uses IsRegisteredRequest::setOrder()
     * @uses IsRegisteredRequest::setPrivateDataList()
     * @uses IsRegisteredRequest::setBuyer()
     * @uses IsRegisteredRequest::setMiscData()
     * @param string $version
     * @param \StructType\Payment $payment
     * @param \StructType\Order $order
     * @param \StructType\PrivateDataList $privateDataList
     * @param \StructType\Buyer $buyer
     * @param string $miscData
     */
    public function __construct(?string $version = null, ?\StructType\Payment $payment = null, ?\StructType\Order $order = null, ?\StructType\PrivateDataList $privateDataList = null, ?\StructType\Buyer $buyer = null, ?string $miscData = null)
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
     * @param string $version
     * @return \StructType\IsRegisteredRequest
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
     * @return \StructType\Payment|null
     */
    public function getPayment(): ?\StructType\Payment
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param \StructType\Payment $payment
     * @return \StructType\IsRegisteredRequest
     */
    public function setPayment(?\StructType\Payment $payment = null): self
    {
        $this->payment = $payment;
        
        return $this;
    }
    /**
     * Get order value
     * @return \StructType\Order|null
     */
    public function getOrder(): ?\StructType\Order
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param \StructType\Order $order
     * @return \StructType\IsRegisteredRequest
     */
    public function setOrder(?\StructType\Order $order = null): self
    {
        $this->order = $order;
        
        return $this;
    }
    /**
     * Get privateDataList value
     * @return \StructType\PrivateDataList|null
     */
    public function getPrivateDataList(): ?\StructType\PrivateDataList
    {
        return $this->privateDataList;
    }
    /**
     * Set privateDataList value
     * @param \StructType\PrivateDataList $privateDataList
     * @return \StructType\IsRegisteredRequest
     */
    public function setPrivateDataList(?\StructType\PrivateDataList $privateDataList = null): self
    {
        $this->privateDataList = $privateDataList;
        
        return $this;
    }
    /**
     * Get buyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Buyer|null
     */
    public function getBuyer(): ?\StructType\Buyer
    {
        return $this->buyer ?? null;
    }
    /**
     * Set buyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Buyer $buyer
     * @return \StructType\IsRegisteredRequest
     */
    public function setBuyer(?\StructType\Buyer $buyer = null): self
    {
        if (is_null($buyer) || (is_array($buyer) && empty($buyer))) {
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
     * @param string $miscData
     * @return \StructType\IsRegisteredRequest
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
