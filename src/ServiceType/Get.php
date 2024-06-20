<?php

declare(strict_types=1);

namespace PaylineWebPayment\ServiceType;

use PaylineWebPayment\StructType\GetWebPaymentDetailsRequest;
use PaylineWebPayment\StructType\GetWebPaymentDetailsResponse;
use PaylineWebPayment\StructType\GetWebWalletRequest;
use PaylineWebPayment\StructType\GetWebWalletResponse;
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
     * @param GetWebPaymentDetailsRequest $parameters
     * @return GetWebPaymentDetailsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getWebPaymentDetails(GetWebPaymentDetailsRequest $parameters): bool|GetWebPaymentDetailsResponse
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
     * @param GetWebWalletRequest $parameters
     * @return GetWebWalletResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getWebWallet(GetWebWalletRequest $parameters): GetWebWalletResponse|bool
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
     * @return GetWebPaymentDetailsResponse|GetWebWalletResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult(): GetWebPaymentDetailsResponse|GetWebWalletResponse
    {
        return parent::getResult();
    }
}
