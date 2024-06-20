<?php

declare(strict_types=1);

namespace Motherbrain\PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authentication3DSecure StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains element for a 3DSecure transaction
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Authentication3DSecure extends AbstractStructBase
{
    /**
     * The md
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $md = null;
    /**
     * The pares
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $pares = null;
    /**
     * The xid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $xid = null;
    /**
     * The eci
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $eci = null;
    /**
     * The cavv
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cavv = null;
    /**
     * The cavvAlgorithm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $cavvAlgorithm = null;
    /**
     * The vadsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $vadsResult = null;
    /**
     * The typeSecurisation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $typeSecurisation = null;
    /**
     * The PaResStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PaResStatus = null;
    /**
     * The VeResStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VeResStatus = null;
    /**
     * The resultContainer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $resultContainer = null;
    /**
     * The authenticationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $authenticationResult = null;
    /**
     * Constructor method for authentication3DSecure
     * @uses Authentication3DSecure::setMd()
     * @uses Authentication3DSecure::setPares()
     * @uses Authentication3DSecure::setXid()
     * @uses Authentication3DSecure::setEci()
     * @uses Authentication3DSecure::setCavv()
     * @uses Authentication3DSecure::setCavvAlgorithm()
     * @uses Authentication3DSecure::setVadsResult()
     * @uses Authentication3DSecure::setTypeSecurisation()
     * @uses Authentication3DSecure::setPaResStatus()
     * @uses Authentication3DSecure::setVeResStatus()
     * @uses Authentication3DSecure::setResultContainer()
     * @uses Authentication3DSecure::setAuthenticationResult()
     * @param string $md
     * @param string $pares
     * @param string $xid
     * @param string $eci
     * @param string $cavv
     * @param string $cavvAlgorithm
     * @param string $vadsResult
     * @param string $typeSecurisation
     * @param string $paResStatus
     * @param string $veResStatus
     * @param string $resultContainer
     * @param string $authenticationResult
     */
    public function __construct(?string $md = null, ?string $pares = null, ?string $xid = null, ?string $eci = null, ?string $cavv = null, ?string $cavvAlgorithm = null, ?string $vadsResult = null, ?string $typeSecurisation = null, ?string $paResStatus = null, ?string $veResStatus = null, ?string $resultContainer = null, ?string $authenticationResult = null)
    {
        $this
            ->setMd($md)
            ->setPares($pares)
            ->setXid($xid)
            ->setEci($eci)
            ->setCavv($cavv)
            ->setCavvAlgorithm($cavvAlgorithm)
            ->setVadsResult($vadsResult)
            ->setTypeSecurisation($typeSecurisation)
            ->setPaResStatus($paResStatus)
            ->setVeResStatus($veResStatus)
            ->setResultContainer($resultContainer)
            ->setAuthenticationResult($authenticationResult);
    }
    /**
     * Get md value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMd(): ?string
    {
        return $this->md ?? null;
    }
    /**
     * Set md value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $md
     * @return \StructType\Authentication3DSecure
     */
    public function setMd(?string $md = null): self
    {
        // validation for constraint: string
        if (!is_null($md) && !is_string($md)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($md, true), gettype($md)), __LINE__);
        }
        if (is_null($md) || (is_array($md) && empty($md))) {
            unset($this->md);
        } else {
            $this->md = $md;
        }
        
        return $this;
    }
    /**
     * Get pares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPares(): ?string
    {
        return $this->pares ?? null;
    }
    /**
     * Set pares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pares
     * @return \StructType\Authentication3DSecure
     */
    public function setPares(?string $pares = null): self
    {
        // validation for constraint: string
        if (!is_null($pares) && !is_string($pares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pares, true), gettype($pares)), __LINE__);
        }
        if (is_null($pares) || (is_array($pares) && empty($pares))) {
            unset($this->pares);
        } else {
            $this->pares = $pares;
        }
        
        return $this;
    }
    /**
     * Get xid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getXid(): ?string
    {
        return $this->xid ?? null;
    }
    /**
     * Set xid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $xid
     * @return \StructType\Authentication3DSecure
     */
    public function setXid(?string $xid = null): self
    {
        // validation for constraint: string
        if (!is_null($xid) && !is_string($xid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xid, true), gettype($xid)), __LINE__);
        }
        if (is_null($xid) || (is_array($xid) && empty($xid))) {
            unset($this->xid);
        } else {
            $this->xid = $xid;
        }
        
        return $this;
    }
    /**
     * Get eci value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEci(): ?string
    {
        return $this->eci ?? null;
    }
    /**
     * Set eci value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eci
     * @return \StructType\Authentication3DSecure
     */
    public function setEci(?string $eci = null): self
    {
        // validation for constraint: string
        if (!is_null($eci) && !is_string($eci)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eci, true), gettype($eci)), __LINE__);
        }
        if (is_null($eci) || (is_array($eci) && empty($eci))) {
            unset($this->eci);
        } else {
            $this->eci = $eci;
        }
        
        return $this;
    }
    /**
     * Get cavv value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCavv(): ?string
    {
        return $this->cavv ?? null;
    }
    /**
     * Set cavv value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cavv
     * @return \StructType\Authentication3DSecure
     */
    public function setCavv(?string $cavv = null): self
    {
        // validation for constraint: string
        if (!is_null($cavv) && !is_string($cavv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cavv, true), gettype($cavv)), __LINE__);
        }
        if (is_null($cavv) || (is_array($cavv) && empty($cavv))) {
            unset($this->cavv);
        } else {
            $this->cavv = $cavv;
        }
        
        return $this;
    }
    /**
     * Get cavvAlgorithm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCavvAlgorithm(): ?string
    {
        return $this->cavvAlgorithm ?? null;
    }
    /**
     * Set cavvAlgorithm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cavvAlgorithm
     * @return \StructType\Authentication3DSecure
     */
    public function setCavvAlgorithm(?string $cavvAlgorithm = null): self
    {
        // validation for constraint: string
        if (!is_null($cavvAlgorithm) && !is_string($cavvAlgorithm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cavvAlgorithm, true), gettype($cavvAlgorithm)), __LINE__);
        }
        if (is_null($cavvAlgorithm) || (is_array($cavvAlgorithm) && empty($cavvAlgorithm))) {
            unset($this->cavvAlgorithm);
        } else {
            $this->cavvAlgorithm = $cavvAlgorithm;
        }
        
        return $this;
    }
    /**
     * Get vadsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVadsResult(): ?string
    {
        return $this->vadsResult ?? null;
    }
    /**
     * Set vadsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vadsResult
     * @return \StructType\Authentication3DSecure
     */
    public function setVadsResult(?string $vadsResult = null): self
    {
        // validation for constraint: string
        if (!is_null($vadsResult) && !is_string($vadsResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vadsResult, true), gettype($vadsResult)), __LINE__);
        }
        if (is_null($vadsResult) || (is_array($vadsResult) && empty($vadsResult))) {
            unset($this->vadsResult);
        } else {
            $this->vadsResult = $vadsResult;
        }
        
        return $this;
    }
    /**
     * Get typeSecurisation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeSecurisation(): ?string
    {
        return $this->typeSecurisation ?? null;
    }
    /**
     * Set typeSecurisation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeSecurisation
     * @return \StructType\Authentication3DSecure
     */
    public function setTypeSecurisation(?string $typeSecurisation = null): self
    {
        // validation for constraint: string
        if (!is_null($typeSecurisation) && !is_string($typeSecurisation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeSecurisation, true), gettype($typeSecurisation)), __LINE__);
        }
        if (is_null($typeSecurisation) || (is_array($typeSecurisation) && empty($typeSecurisation))) {
            unset($this->typeSecurisation);
        } else {
            $this->typeSecurisation = $typeSecurisation;
        }
        
        return $this;
    }
    /**
     * Get PaResStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPaResStatus(): ?string
    {
        return $this->PaResStatus ?? null;
    }
    /**
     * Set PaResStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paResStatus
     * @return \StructType\Authentication3DSecure
     */
    public function setPaResStatus(?string $paResStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($paResStatus) && !is_string($paResStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paResStatus, true), gettype($paResStatus)), __LINE__);
        }
        if (is_null($paResStatus) || (is_array($paResStatus) && empty($paResStatus))) {
            unset($this->PaResStatus);
        } else {
            $this->PaResStatus = $paResStatus;
        }
        
        return $this;
    }
    /**
     * Get VeResStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVeResStatus(): ?string
    {
        return $this->VeResStatus ?? null;
    }
    /**
     * Set VeResStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $veResStatus
     * @return \StructType\Authentication3DSecure
     */
    public function setVeResStatus(?string $veResStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($veResStatus) && !is_string($veResStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($veResStatus, true), gettype($veResStatus)), __LINE__);
        }
        if (is_null($veResStatus) || (is_array($veResStatus) && empty($veResStatus))) {
            unset($this->VeResStatus);
        } else {
            $this->VeResStatus = $veResStatus;
        }
        
        return $this;
    }
    /**
     * Get resultContainer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResultContainer(): ?string
    {
        return $this->resultContainer ?? null;
    }
    /**
     * Set resultContainer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $resultContainer
     * @return \StructType\Authentication3DSecure
     */
    public function setResultContainer(?string $resultContainer = null): self
    {
        // validation for constraint: string
        if (!is_null($resultContainer) && !is_string($resultContainer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultContainer, true), gettype($resultContainer)), __LINE__);
        }
        if (is_null($resultContainer) || (is_array($resultContainer) && empty($resultContainer))) {
            unset($this->resultContainer);
        } else {
            $this->resultContainer = $resultContainer;
        }
        
        return $this;
    }
    /**
     * Get authenticationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthenticationResult(): ?string
    {
        return $this->authenticationResult ?? null;
    }
    /**
     * Set authenticationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authenticationResult
     * @return \StructType\Authentication3DSecure
     */
    public function setAuthenticationResult(?string $authenticationResult = null): self
    {
        // validation for constraint: string
        if (!is_null($authenticationResult) && !is_string($authenticationResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authenticationResult, true), gettype($authenticationResult)), __LINE__);
        }
        if (is_null($authenticationResult) || (is_array($authenticationResult) && empty($authenticationResult))) {
            unset($this->authenticationResult);
        } else {
            $this->authenticationResult = $authenticationResult;
        }
        
        return $this;
    }
}
