<?php

declare(strict_types=1);

namespace ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateWebWalletRequest $parameters
     * @return \StructType\CreateWebWalletResponse|bool
     */
    public function createWebWallet(\StructType\CreateWebWalletRequest $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CreateWebWalletResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
