<?php

declare(strict_types=1);

namespace PaylineWebPayment\ServiceType;

use PaylineWebPayment\StructType\UpdateWebWalletRequest;
use PaylineWebPayment\StructType\UpdateWebWalletResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateWebWallet
     * @param UpdateWebWalletRequest $parameters
     * @return UpdateWebWalletResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function updateWebWallet(UpdateWebWalletRequest $parameters): UpdateWebWalletResponse|bool
    {
        try {
            $this->setResult($resultUpdateWebWallet = $this->getSoapClient()->__soapCall('updateWebWallet', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateWebWallet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return UpdateWebWalletResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult(): UpdateWebWalletResponse
    {
        return parent::getResult();
    }
}
