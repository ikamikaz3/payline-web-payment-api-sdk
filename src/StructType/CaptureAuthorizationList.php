<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for captureAuthorizationList StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of authorization to capture
 * @subpackage Structs
 */
class CaptureAuthorizationList extends AbstractStructBase
{
    /**
     * The capture
     * Meta information extracted from the WSDL
     * - maxOccurs: 5000
     * - minOccurs: 1
     * @var Capture[]
     */
    protected array $capture;

    /**
     * Constructor method for captureAuthorizationList
     * @param Capture[] $capture
     * @uses CaptureAuthorizationList::setCapture()
     */
    public function __construct(array $capture)
    {
        $this
            ->setCapture($capture);
    }

    /**
     * Get capture value
     * @return Capture[]
     */
    public function getCapture(): array
    {
        return $this->capture;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCapture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCapture method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCaptureForArrayConstraintFromSetCapture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $captureAuthorizationListCaptureItem) {
            // validation for constraint: itemType
            if (!$captureAuthorizationListCaptureItem instanceof Capture) {
                $invalidValues[] = is_object($captureAuthorizationListCaptureItem) ? get_class($captureAuthorizationListCaptureItem) : sprintf('%s(%s)', gettype($captureAuthorizationListCaptureItem), var_export($captureAuthorizationListCaptureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The capture property can only contain items of type Capture, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set capture value
     * @param Capture[] $capture
     * @return CaptureAuthorizationList
     * @throws InvalidArgumentException
     */
    public function setCapture(array $capture): self
    {
        // validation for constraint: array
        if ('' !== ($captureArrayErrorMessage = self::validateCaptureForArrayConstraintFromSetCapture($capture))) {
            throw new InvalidArgumentException($captureArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5000)
        if (count($capture) > 5000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5000', count($capture)), __LINE__);
        }
        $this->capture = $capture;

        return $this;
    }

    /**
     * Add item to capture value
     * @param Capture $item
     * @return CaptureAuthorizationList
     * @throws InvalidArgumentException
     */
    public function addToCapture(Capture $item): self
    {
        // validation for constraint: itemType
        // validation for constraint: maxOccurs(5000)
        if (count($this->capture) >= 5000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5000', count($this->capture)), __LINE__);
        }
        $this->capture[] = $item;

        return $this;
    }
}
