<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Do ServiceType
 * @subpackage Services
 */
class _Do extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named doWebPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DoWebPaymentRequest $parameters
     * @return \StructType\DoWebPaymentResponse|bool
     */
    public function doWebPayment(\StructType\DoWebPaymentRequest $parameters)
    {
        try {
            $this->setResult($resultDoWebPayment = $this->getSoapClient()->__soapCall('doWebPayment', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDoWebPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DoWebPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
