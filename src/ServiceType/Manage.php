<?php

declare(strict_types=1);

namespace PaylineWebPayment\ServiceType;

use PaylineWebPayment\StructType\ManageWebWalletRequest;
use PaylineWebPayment\StructType\ManageWebWalletResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Manage ServiceType
 * @subpackage Services
 */
class Manage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named manageWebWallet
     * @param ManageWebWalletRequest $parameters
     * @return ManageWebWalletResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function manageWebWallet(ManageWebWalletRequest $parameters): ManageWebWalletResponse|bool
    {
        try {
            $this->setResult($resultManageWebWallet = $this->getSoapClient()->__soapCall('manageWebWallet', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultManageWebWallet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return ManageWebWalletResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult(): ManageWebWalletResponse
    {
        return parent::getResult();
    }
}
