<?php

declare(strict_types=1);

namespace PaylineWebPayment\ServiceType;

use PaylineWebPayment\StructType\CreateWebWalletRequest;
use PaylineWebPayment\StructType\CreateWebWalletResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createWebWallet
     * @param CreateWebWalletRequest $parameters
     * @return CreateWebWalletResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createWebWallet(CreateWebWalletRequest $parameters): bool|CreateWebWalletResponse
    {
        try {
            $this->setResult($resultCreateWebWallet = $this->getSoapClient()->__soapCall('createWebWallet', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateWebWallet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return CreateWebWalletResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult(): CreateWebWalletResponse
    {
        return parent::getResult();
    }
}
