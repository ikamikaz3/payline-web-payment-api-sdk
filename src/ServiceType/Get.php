<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getWebPaymentDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWebPaymentDetailsRequest $parameters
     * @return \StructType\GetWebPaymentDetailsResponse|bool
     */
    public function getWebPaymentDetails(\StructType\GetWebPaymentDetailsRequest $parameters)
    {
        try {
            $this->setResult($resultGetWebPaymentDetails = $this->getSoapClient()->__soapCall('getWebPaymentDetails', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetWebPaymentDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWebWallet
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWebWalletRequest $parameters
     * @return \StructType\GetWebWalletResponse|bool
     */
    public function getWebWallet(\StructType\GetWebWalletRequest $parameters)
    {
        try {
            $this->setResult($resultGetWebWallet = $this->getSoapClient()->__soapCall('getWebWallet', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetWebWallet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetWebPaymentDetailsResponse|\StructType\GetWebWalletResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
