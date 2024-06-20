<?php

declare(strict_types=1);

namespace PaylineWebPayment\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for settlementType EnumType
 * @subpackage Enumerations
 */
class SettlementType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Now'
     * @return string 'Now'
     */
    const VALUE_NOW = 'Now';
    /**
     * Constant for value '1Day'
     * @return string '1Day'
     */
    const VALUE_1_DAY = '1Day';
    /**
     * Constant for value '2Day'
     * @return string '2Day'
     */
    const VALUE_2_DAY = '2Day';
    /**
     * Constant for value '3Day'
     * @return string '3Day'
     */
    const VALUE_3_DAY = '3Day';
    /**
     * Constant for value '4Day'
     * @return string '4Day'
     */
    const VALUE_4_DAY = '4Day';
    /**
     * Constant for value '5Day'
     * @return string '5Day'
     */
    const VALUE_5_DAY = '5Day';
    /**
     * Constant for value '6Day'
     * @return string '6Day'
     */
    const VALUE_6_DAY = '6Day';
    /**
     * Constant for value '7Day'
     * @return string '7Day'
     */
    const VALUE_7_DAY = '7Day';

    /**
     * Return allowed values
     * @return string[]
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_NOW
     * @uses self::VALUE_1_DAY
     * @uses self::VALUE_2_DAY
     * @uses self::VALUE_3_DAY
     * @uses self::VALUE_4_DAY
     * @uses self::VALUE_5_DAY
     * @uses self::VALUE_6_DAY
     * @uses self::VALUE_7_DAY
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MANUAL,
            self::VALUE_NOW,
            self::VALUE_1_DAY,
            self::VALUE_2_DAY,
            self::VALUE_3_DAY,
            self::VALUE_4_DAY,
            self::VALUE_5_DAY,
            self::VALUE_6_DAY,
            self::VALUE_7_DAY,
        ];
    }
}
