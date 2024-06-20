<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pointOfSell StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains all information about point of sell
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PointOfSell extends AbstractStructBase
{
    /**
     * The contracts
     * @var \StructType\Contracts|null
     */
    protected ?\StructType\Contracts $contracts = null;
    /**
     * The customPaymentPageCodeList
     * @var \StructType\CustomPaymentPageCodeList|null
     */
    protected ?\StructType\CustomPaymentPageCodeList $customPaymentPageCodeList = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The siret
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $siret = null;
    /**
     * The codeMcc
     * Meta information extracted from the WSDL
     * - documentation: Merchant Category Code
     * - base: xsd:string
     * - length: 4
     * - nillable: true
     * @var string|null
     */
    protected ?string $codeMcc = null;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $label = null;
    /**
     * The webmasterEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $webmasterEmail = null;
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The webstoreURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $webstoreURL = null;
    /**
     * The notificationURL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $notificationURL = null;
    /**
     * The privateLifeURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $privateLifeURL = null;
    /**
     * The saleCondURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $saleCondURL = null;
    /**
     * The buyerMustAcceptSaleCond
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $buyerMustAcceptSaleCond = null;
    /**
     * The endOfPaymentRedirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $endOfPaymentRedirection = null;
    /**
     * The ticketSend
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\TicketSend|null
     */
    protected ?\StructType\TicketSend $ticketSend = null;
    /**
     * The virtualTerminal
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\VirtualTerminal|null
     */
    protected ?\StructType\VirtualTerminal $virtualTerminal = null;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $reference = null;
    /**
     * Constructor method for pointOfSell
     * @uses PointOfSell::setContracts()
     * @uses PointOfSell::setCustomPaymentPageCodeList()
     * @uses PointOfSell::setId()
     * @uses PointOfSell::setSiret()
     * @uses PointOfSell::setCodeMcc()
     * @uses PointOfSell::setLabel()
     * @uses PointOfSell::setWebmasterEmail()
     * @uses PointOfSell::setComments()
     * @uses PointOfSell::setWebstoreURL()
     * @uses PointOfSell::setNotificationURL()
     * @uses PointOfSell::setPrivateLifeURL()
     * @uses PointOfSell::setSaleCondURL()
     * @uses PointOfSell::setBuyerMustAcceptSaleCond()
     * @uses PointOfSell::setEndOfPaymentRedirection()
     * @uses PointOfSell::setTicketSend()
     * @uses PointOfSell::setVirtualTerminal()
     * @uses PointOfSell::setReference()
     * @param \StructType\Contracts $contracts
     * @param \StructType\CustomPaymentPageCodeList $customPaymentPageCodeList
     * @param string $id
     * @param string $siret
     * @param string $codeMcc
     * @param string $label
     * @param string $webmasterEmail
     * @param string $comments
     * @param string $webstoreURL
     * @param string $notificationURL
     * @param string $privateLifeURL
     * @param string $saleCondURL
     * @param bool $buyerMustAcceptSaleCond
     * @param bool $endOfPaymentRedirection
     * @param \StructType\TicketSend $ticketSend
     * @param \StructType\VirtualTerminal $virtualTerminal
     * @param string $reference
     */
    public function __construct(?\StructType\Contracts $contracts = null, ?\StructType\CustomPaymentPageCodeList $customPaymentPageCodeList = null, ?string $id = null, ?string $siret = null, ?string $codeMcc = null, ?string $label = null, ?string $webmasterEmail = null, ?string $comments = null, ?string $webstoreURL = null, ?string $notificationURL = null, ?string $privateLifeURL = null, ?string $saleCondURL = null, ?bool $buyerMustAcceptSaleCond = null, ?bool $endOfPaymentRedirection = null, ?\StructType\TicketSend $ticketSend = null, ?\StructType\VirtualTerminal $virtualTerminal = null, ?string $reference = null)
    {
        $this
            ->setContracts($contracts)
            ->setCustomPaymentPageCodeList($customPaymentPageCodeList)
            ->setId($id)
            ->setSiret($siret)
            ->setCodeMcc($codeMcc)
            ->setLabel($label)
            ->setWebmasterEmail($webmasterEmail)
            ->setComments($comments)
            ->setWebstoreURL($webstoreURL)
            ->setNotificationURL($notificationURL)
            ->setPrivateLifeURL($privateLifeURL)
            ->setSaleCondURL($saleCondURL)
            ->setBuyerMustAcceptSaleCond($buyerMustAcceptSaleCond)
            ->setEndOfPaymentRedirection($endOfPaymentRedirection)
            ->setTicketSend($ticketSend)
            ->setVirtualTerminal($virtualTerminal)
            ->setReference($reference);
    }
    /**
     * Get contracts value
     * @return \StructType\Contracts|null
     */
    public function getContracts(): ?\StructType\Contracts
    {
        return $this->contracts;
    }
    /**
     * Set contracts value
     * @param \StructType\Contracts $contracts
     * @return \StructType\PointOfSell
     */
    public function setContracts(?\StructType\Contracts $contracts = null): self
    {
        $this->contracts = $contracts;
        
        return $this;
    }
    /**
     * Get customPaymentPageCodeList value
     * @return \StructType\CustomPaymentPageCodeList|null
     */
    public function getCustomPaymentPageCodeList(): ?\StructType\CustomPaymentPageCodeList
    {
        return $this->customPaymentPageCodeList;
    }
    /**
     * Set customPaymentPageCodeList value
     * @param \StructType\CustomPaymentPageCodeList $customPaymentPageCodeList
     * @return \StructType\PointOfSell
     */
    public function setCustomPaymentPageCodeList(?\StructType\CustomPaymentPageCodeList $customPaymentPageCodeList = null): self
    {
        $this->customPaymentPageCodeList = $customPaymentPageCodeList;
        
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \StructType\PointOfSell
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * Get siret value
     * @return string|null
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }
    /**
     * Set siret value
     * @param string $siret
     * @return \StructType\PointOfSell
     */
    public function setSiret(?string $siret = null): self
    {
        // validation for constraint: string
        if (!is_null($siret) && !is_string($siret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siret, true), gettype($siret)), __LINE__);
        }
        $this->siret = $siret;
        
        return $this;
    }
    /**
     * Get codeMcc value
     * @return string|null
     */
    public function getCodeMcc(): ?string
    {
        return $this->codeMcc;
    }
    /**
     * Set codeMcc value
     * @param string $codeMcc
     * @return \StructType\PointOfSell
     */
    public function setCodeMcc(?string $codeMcc = null): self
    {
        // validation for constraint: string
        if (!is_null($codeMcc) && !is_string($codeMcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeMcc, true), gettype($codeMcc)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($codeMcc) && mb_strlen((string) $codeMcc) !== 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen((string) $codeMcc)), __LINE__);
        }
        $this->codeMcc = $codeMcc;
        
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \StructType\PointOfSell
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        
        return $this;
    }
    /**
     * Get webmasterEmail value
     * @return string|null
     */
    public function getWebmasterEmail(): ?string
    {
        return $this->webmasterEmail;
    }
    /**
     * Set webmasterEmail value
     * @param string $webmasterEmail
     * @return \StructType\PointOfSell
     */
    public function setWebmasterEmail(?string $webmasterEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($webmasterEmail) && !is_string($webmasterEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webmasterEmail, true), gettype($webmasterEmail)), __LINE__);
        }
        $this->webmasterEmail = $webmasterEmail;
        
        return $this;
    }
    /**
     * Get comments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments ?? null;
    }
    /**
     * Set comments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comments
     * @return \StructType\PointOfSell
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        if (is_null($comments) || (is_array($comments) && empty($comments))) {
            unset($this->comments);
        } else {
            $this->comments = $comments;
        }
        
        return $this;
    }
    /**
     * Get webstoreURL value
     * @return string|null
     */
    public function getWebstoreURL(): ?string
    {
        return $this->webstoreURL;
    }
    /**
     * Set webstoreURL value
     * @param string $webstoreURL
     * @return \StructType\PointOfSell
     */
    public function setWebstoreURL(?string $webstoreURL = null): self
    {
        // validation for constraint: string
        if (!is_null($webstoreURL) && !is_string($webstoreURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webstoreURL, true), gettype($webstoreURL)), __LINE__);
        }
        $this->webstoreURL = $webstoreURL;
        
        return $this;
    }
    /**
     * Get notificationURL value
     * @return string|null
     */
    public function getNotificationURL(): ?string
    {
        return $this->notificationURL;
    }
    /**
     * Set notificationURL value
     * @param string $notificationURL
     * @return \StructType\PointOfSell
     */
    public function setNotificationURL(?string $notificationURL = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationURL) && !is_string($notificationURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationURL, true), gettype($notificationURL)), __LINE__);
        }
        $this->notificationURL = $notificationURL;
        
        return $this;
    }
    /**
     * Get privateLifeURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrivateLifeURL(): ?string
    {
        return $this->privateLifeURL ?? null;
    }
    /**
     * Set privateLifeURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $privateLifeURL
     * @return \StructType\PointOfSell
     */
    public function setPrivateLifeURL(?string $privateLifeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($privateLifeURL) && !is_string($privateLifeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privateLifeURL, true), gettype($privateLifeURL)), __LINE__);
        }
        if (is_null($privateLifeURL) || (is_array($privateLifeURL) && empty($privateLifeURL))) {
            unset($this->privateLifeURL);
        } else {
            $this->privateLifeURL = $privateLifeURL;
        }
        
        return $this;
    }
    /**
     * Get saleCondURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSaleCondURL(): ?string
    {
        return $this->saleCondURL ?? null;
    }
    /**
     * Set saleCondURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $saleCondURL
     * @return \StructType\PointOfSell
     */
    public function setSaleCondURL(?string $saleCondURL = null): self
    {
        // validation for constraint: string
        if (!is_null($saleCondURL) && !is_string($saleCondURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleCondURL, true), gettype($saleCondURL)), __LINE__);
        }
        if (is_null($saleCondURL) || (is_array($saleCondURL) && empty($saleCondURL))) {
            unset($this->saleCondURL);
        } else {
            $this->saleCondURL = $saleCondURL;
        }
        
        return $this;
    }
    /**
     * Get buyerMustAcceptSaleCond value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getBuyerMustAcceptSaleCond(): ?bool
    {
        return $this->buyerMustAcceptSaleCond ?? null;
    }
    /**
     * Set buyerMustAcceptSaleCond value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $buyerMustAcceptSaleCond
     * @return \StructType\PointOfSell
     */
    public function setBuyerMustAcceptSaleCond(?bool $buyerMustAcceptSaleCond = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyerMustAcceptSaleCond) && !is_bool($buyerMustAcceptSaleCond)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyerMustAcceptSaleCond, true), gettype($buyerMustAcceptSaleCond)), __LINE__);
        }
        if (is_null($buyerMustAcceptSaleCond) || (is_array($buyerMustAcceptSaleCond) && empty($buyerMustAcceptSaleCond))) {
            unset($this->buyerMustAcceptSaleCond);
        } else {
            $this->buyerMustAcceptSaleCond = $buyerMustAcceptSaleCond;
        }
        
        return $this;
    }
    /**
     * Get endOfPaymentRedirection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getEndOfPaymentRedirection(): ?bool
    {
        return $this->endOfPaymentRedirection ?? null;
    }
    /**
     * Set endOfPaymentRedirection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $endOfPaymentRedirection
     * @return \StructType\PointOfSell
     */
    public function setEndOfPaymentRedirection(?bool $endOfPaymentRedirection = null): self
    {
        // validation for constraint: boolean
        if (!is_null($endOfPaymentRedirection) && !is_bool($endOfPaymentRedirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($endOfPaymentRedirection, true), gettype($endOfPaymentRedirection)), __LINE__);
        }
        if (is_null($endOfPaymentRedirection) || (is_array($endOfPaymentRedirection) && empty($endOfPaymentRedirection))) {
            unset($this->endOfPaymentRedirection);
        } else {
            $this->endOfPaymentRedirection = $endOfPaymentRedirection;
        }
        
        return $this;
    }
    /**
     * Get ticketSend value
     * @return \StructType\TicketSend|null
     */
    public function getTicketSend(): ?\StructType\TicketSend
    {
        return $this->ticketSend;
    }
    /**
     * Set ticketSend value
     * @param \StructType\TicketSend $ticketSend
     * @return \StructType\PointOfSell
     */
    public function setTicketSend(?\StructType\TicketSend $ticketSend = null): self
    {
        $this->ticketSend = $ticketSend;
        
        return $this;
    }
    /**
     * Get virtualTerminal value
     * @return \StructType\VirtualTerminal|null
     */
    public function getVirtualTerminal(): ?\StructType\VirtualTerminal
    {
        return $this->virtualTerminal;
    }
    /**
     * Set virtualTerminal value
     * @param \StructType\VirtualTerminal $virtualTerminal
     * @return \StructType\PointOfSell
     */
    public function setVirtualTerminal(?\StructType\VirtualTerminal $virtualTerminal = null): self
    {
        $this->virtualTerminal = $virtualTerminal;
        
        return $this;
    }
    /**
     * Get reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference ?? null;
    }
    /**
     * Set reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reference
     * @return \StructType\PointOfSell
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        if (is_null($reference) || (is_array($reference) && empty($reference))) {
            unset($this->reference);
        } else {
            $this->reference = $reference;
        }
        
        return $this;
    }
}
