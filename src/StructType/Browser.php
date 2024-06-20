<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for browser StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about Browser.
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class Browser extends AbstractStructBase
{
    /**
     * The acceptHeader
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $acceptHeader = null;

    /**
     * The javaEnabled
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $javaEnabled = null;

    /**
     * The javascriptEnabled
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $javascriptEnabled = null;

    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $language = null;

    /**
     * The colorDepth
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $colorDepth = null;

    /**
     * The screenHeight
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $screenHeight = null;

    /**
     * The screenWidth
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $screenWidth = null;

    /**
     * The timeZoneOffset
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $timeZoneOffset = null;

    /**
     * The userAgent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $userAgent = null;

    /**
     * Constructor method for browser
     * @param string|null $acceptHeader
     * @param string|null $javaEnabled
     * @param string|null $javascriptEnabled
     * @param string|null $language
     * @param string|null $colorDepth
     * @param string|null $screenHeight
     * @param string|null $screenWidth
     * @param string|null $timeZoneOffset
     * @param string|null $userAgent
     * @uses Browser::setAcceptHeader()
     * @uses Browser::setJavaEnabled()
     * @uses Browser::setJavascriptEnabled()
     * @uses Browser::setLanguage()
     * @uses Browser::setColorDepth()
     * @uses Browser::setScreenHeight()
     * @uses Browser::setScreenWidth()
     * @uses Browser::setTimeZoneOffset()
     * @uses Browser::setUserAgent()
     */
    public function __construct(?string $acceptHeader = null, ?string $javaEnabled = null, ?string $javascriptEnabled = null, ?string $language = null, ?string $colorDepth = null, ?string $screenHeight = null, ?string $screenWidth = null, ?string $timeZoneOffset = null, ?string $userAgent = null)
    {
        $this
            ->setAcceptHeader($acceptHeader)
            ->setJavaEnabled($javaEnabled)
            ->setJavascriptEnabled($javascriptEnabled)
            ->setLanguage($language)
            ->setColorDepth($colorDepth)
            ->setScreenHeight($screenHeight)
            ->setScreenWidth($screenWidth)
            ->setTimeZoneOffset($timeZoneOffset)
            ->setUserAgent($userAgent);
    }

    /**
     * Get acceptHeader value
     * @return string|null
     */
    public function getAcceptHeader(): ?string
    {
        return $this->acceptHeader;
    }

    /**
     * Set acceptHeader value
     * @param string|null $acceptHeader
     * @return Browser
     */
    public function setAcceptHeader(?string $acceptHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($acceptHeader) && !is_string($acceptHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acceptHeader, true), gettype($acceptHeader)), __LINE__);
        }
        $this->acceptHeader = $acceptHeader;

        return $this;
    }

    /**
     * Get javaEnabled value
     * @return string|null
     */
    public function getJavaEnabled(): ?string
    {
        return $this->javaEnabled;
    }

    /**
     * Set javaEnabled value
     * @param string|null $javaEnabled
     * @return Browser
     */
    public function setJavaEnabled(?string $javaEnabled = null): self
    {
        // validation for constraint: string
        if (!is_null($javaEnabled) && !is_string($javaEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($javaEnabled, true), gettype($javaEnabled)), __LINE__);
        }
        $this->javaEnabled = $javaEnabled;

        return $this;
    }

    /**
     * Get javascriptEnabled value
     * @return string|null
     */
    public function getJavascriptEnabled(): ?string
    {
        return $this->javascriptEnabled;
    }

    /**
     * Set javascriptEnabled value
     * @param string|null $javascriptEnabled
     * @return Browser
     */
    public function setJavascriptEnabled(?string $javascriptEnabled = null): self
    {
        // validation for constraint: string
        if (!is_null($javascriptEnabled) && !is_string($javascriptEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($javascriptEnabled, true), gettype($javascriptEnabled)), __LINE__);
        }
        $this->javascriptEnabled = $javascriptEnabled;

        return $this;
    }

    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value
     * @param string|null $language
     * @return Browser
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }

    /**
     * Get colorDepth value
     * @return string|null
     */
    public function getColorDepth(): ?string
    {
        return $this->colorDepth;
    }

    /**
     * Set colorDepth value
     * @param string|null $colorDepth
     * @return Browser
     */
    public function setColorDepth(?string $colorDepth = null): self
    {
        // validation for constraint: string
        if (!is_null($colorDepth) && !is_string($colorDepth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorDepth, true), gettype($colorDepth)), __LINE__);
        }
        $this->colorDepth = $colorDepth;

        return $this;
    }

    /**
     * Get screenHeight value
     * @return string|null
     */
    public function getScreenHeight(): ?string
    {
        return $this->screenHeight;
    }

    /**
     * Set screenHeight value
     * @param string|null $screenHeight
     * @return Browser
     */
    public function setScreenHeight(?string $screenHeight = null): self
    {
        // validation for constraint: string
        if (!is_null($screenHeight) && !is_string($screenHeight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenHeight, true), gettype($screenHeight)), __LINE__);
        }
        $this->screenHeight = $screenHeight;

        return $this;
    }

    /**
     * Get screenWidth value
     * @return string|null
     */
    public function getScreenWidth(): ?string
    {
        return $this->screenWidth;
    }

    /**
     * Set screenWidth value
     * @param string|null $screenWidth
     * @return Browser
     */
    public function setScreenWidth(?string $screenWidth = null): self
    {
        // validation for constraint: string
        if (!is_null($screenWidth) && !is_string($screenWidth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenWidth, true), gettype($screenWidth)), __LINE__);
        }
        $this->screenWidth = $screenWidth;

        return $this;
    }

    /**
     * Get timeZoneOffset value
     * @return string|null
     */
    public function getTimeZoneOffset(): ?string
    {
        return $this->timeZoneOffset;
    }

    /**
     * Set timeZoneOffset value
     * @param string|null $timeZoneOffset
     * @return Browser
     */
    public function setTimeZoneOffset(?string $timeZoneOffset = null): self
    {
        // validation for constraint: string
        if (!is_null($timeZoneOffset) && !is_string($timeZoneOffset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZoneOffset, true), gettype($timeZoneOffset)), __LINE__);
        }
        $this->timeZoneOffset = $timeZoneOffset;

        return $this;
    }

    /**
     * Get userAgent value
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * Set userAgent value
     * @param string|null $userAgent
     * @return Browser
     */
    public function setUserAgent(?string $userAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($userAgent) && !is_string($userAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userAgent, true), gettype($userAgent)), __LINE__);
        }
        $this->userAgent = $userAgent;

        return $this;
    }
}
