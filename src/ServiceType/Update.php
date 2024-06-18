<?php

declare(strict_types=1);

namespace ServiceType;

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
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateWebWalletRequest $parameters
     * @return \StructType\UpdateWebWalletResponse|bool
     */
    public function updateWebWallet(\StructType\UpdateWebWalletRequest $parameters)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\UpdateWebWalletResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
