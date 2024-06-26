<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for media StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the customer media
 * @subpackage Structs
 */
class Media extends AbstractStructBase
{
    /**
     * The label
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $label;

    /**
     * The operatingSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $operatingSystem;

    /**
     * The browser
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $browser;

    /**
     * The userAgent
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $userAgent;

    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: false
     * - required: true
     * @var string|null
     */
    protected ?string $id = null;

    /**
     * Constructor method for media
     * @param string $label
     * @param string $operatingSystem
     * @param string $browser
     * @param string $userAgent
     * @param string|null $id
     * @uses Media::setLabel()
     * @uses Media::setOperatingSystem()
     * @uses Media::setBrowser()
     * @uses Media::setUserAgent()
     * @uses Media::setId()
     */
    public function __construct(string $label, string $operatingSystem, string $browser, string $userAgent, ?string $id = null)
    {
        $this
            ->setLabel($label)
            ->setOperatingSystem($operatingSystem)
            ->setBrowser($browser)
            ->setUserAgent($userAgent)
            ->setId($id);
    }

    /**
     * Get label value
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set label value
     * @param string $label
     * @return Media
     */
    public function setLabel(string $label): self
    {
        // validation for constraint: string
        $this->label = $label;

        return $this;
    }

    /**
     * Get operatingSystem value
     * @return string
     */
    public function getOperatingSystem(): string
    {
        return $this->operatingSystem;
    }

    /**
     * Set operatingSystem value
     * @param string $operatingSystem
     * @return Media
     */
    public function setOperatingSystem(string $operatingSystem): self
    {
        // validation for constraint: string
        $this->operatingSystem = $operatingSystem;

        return $this;
    }

    /**
     * Get browser value
     * @return string
     */
    public function getBrowser(): string
    {
        return $this->browser;
    }

    /**
     * Set browser value
     * @param string $browser
     * @return Media
     */
    public function setBrowser(string $browser): self
    {
        // validation for constraint: string
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get userAgent value
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * Set userAgent value
     * @param string $userAgent
     * @return Media
     */
    public function setUserAgent(string $userAgent): self
    {
        // validation for constraint: string
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Set id value
     * @param string|null $id
     * @return Media
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }
}
