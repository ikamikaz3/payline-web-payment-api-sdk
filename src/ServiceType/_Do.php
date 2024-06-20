<?php

declare(strict_types=1);

namespace PaylineWebPayment\ServiceType;

use PaylineWebPayment\StructType\DoWebPaymentRequest;
use PaylineWebPayment\StructType\DoWebPaymentResponse;
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
     * @param DoWebPaymentRequest $parameters
     * @return DoWebPaymentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function doWebPayment(DoWebPaymentRequest $parameters): bool|DoWebPaymentResponse
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
     * @return DoWebPaymentResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult(): DoWebPaymentResponse
    {
        return parent::getResult();
    }
}
