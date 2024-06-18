<?php

declare(strict_types=1);

namespace ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ManageWebWalletRequest $parameters
     * @return \StructType\ManageWebWalletResponse|bool
     */
    public function manageWebWallet(\StructType\ManageWebWalletRequest $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ManageWebWalletResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
