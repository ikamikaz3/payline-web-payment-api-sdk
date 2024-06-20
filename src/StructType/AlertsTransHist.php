<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlertsTransHist StructType
 * Meta information extracted from the WSDL
 * - documentation: An array of AlertsTrans
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class AlertsTransHist extends AbstractStructBase
{
    /**
     * The AlertsTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var AlertsTrans[]
     */
    protected ?array $AlertsTrans = null;

    /**
     * Constructor method for AlertsTransHist
     * @param AlertsTrans[] $alertsTrans
     * @uses AlertsTransHist::setAlertsTrans()
     */
    public function __construct(?array $alertsTrans = null)
    {
        $this
            ->setAlertsTrans($alertsTrans);
    }

    /**
     * Get AlertsTrans value
     * @return array|null
     */
    public function getAlertsTrans(): ?array
    {
        return $this->AlertsTrans;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setAlertsTrans method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlertsTrans method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array|null $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertsTransForArrayConstraintFromSetAlertsTrans(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $alertsTransHistAlertsTransItem) {
            // validation for constraint: itemType
            if (!$alertsTransHistAlertsTransItem instanceof AlertsTrans) {
                $invalidValues[] = is_object($alertsTransHistAlertsTransItem) ? get_class($alertsTransHistAlertsTransItem) : sprintf('%s(%s)', gettype($alertsTransHistAlertsTransItem), var_export($alertsTransHistAlertsTransItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlertsTrans property can only contain items of type AlertsTrans, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set AlertsTrans value
     * @param AlertsTrans[] $alertsTrans
     * @return AlertsTransHist
     * @throws InvalidArgumentException
     */
    public function setAlertsTrans(?array $alertsTrans = null): self
    {
        // validation for constraint: array
        if ('' !== ($alertsTransArrayErrorMessage = self::validateAlertsTransForArrayConstraintFromSetAlertsTrans($alertsTrans))) {
            throw new InvalidArgumentException($alertsTransArrayErrorMessage, __LINE__);
        }
        $this->AlertsTrans = $alertsTrans;

        return $this;
    }

    /**
     * Add item to AlertsTrans value
     * @param AlertsTrans $item
     * @return AlertsTransHist
     * @throws InvalidArgumentException
     */
    public function addToAlertsTrans(AlertsTrans $item): self
    {
        // validation for constraint: itemType
        $this->AlertsTrans[] = $item;

        return $this;
    }
}
