<?php

declare(strict_types=1);

namespace PaylineWebPayment\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for function EnumType
 * Meta information extracted from the WSDL
 * - documentation: Please refer to Payline documentation
 * @subpackage Enumerations
 */
class _function extends AbstractStructEnumBase
{
    /**
     * Constant for value 'simplePayment'
     * @return string 'simplePayment'
     */
    const VALUE_SIMPLE_PAYMENT = 'simplePayment';
    /**
     * Constant for value 'walletCreation'
     * @return string 'walletCreation'
     */
    const VALUE_WALLET_CREATION = 'walletCreation';
    /**
     * Constant for value 'nXPayment'
     * @return string 'nXPayment'
     */
    const VALUE_N_XPAYMENT = 'nXPayment';

    /**
     * Return allowed values
     * @return string[]
     * @uses self::VALUE_WALLET_CREATION
     * @uses self::VALUE_N_XPAYMENT
     * @uses self::VALUE_SIMPLE_PAYMENT
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SIMPLE_PAYMENT,
            self::VALUE_WALLET_CREATION,
            self::VALUE_N_XPAYMENT,
        ];
    }
}
