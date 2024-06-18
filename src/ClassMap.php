<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'doWebPaymentRequest' => '\\StructType\\DoWebPaymentRequest',
            'doWebPaymentResponse' => '\\StructType\\DoWebPaymentResponse',
            'getWebPaymentDetailsRequest' => '\\StructType\\GetWebPaymentDetailsRequest',
            'getWebPaymentDetailsResponse' => '\\StructType\\GetWebPaymentDetailsResponse',
            'doAuthorizationRequest' => '\\StructType\\DoAuthorizationRequest',
            'doAuthorizationResponse' => '\\StructType\\DoAuthorizationResponse',
            'doCaptureRequest' => '\\StructType\\DoCaptureRequest',
            'doCaptureResponse' => '\\StructType\\DoCaptureResponse',
            'doDebitRequest' => '\\StructType\\DoDebitRequest',
            'doDebitResponse' => '\\StructType\\DoDebitResponse',
            'doRefundRequest' => '\\StructType\\DoRefundRequest',
            'doRefundResponse' => '\\StructType\\DoRefundResponse',
            'doResetRequest' => '\\StructType\\DoResetRequest',
            'doResetResponse' => '\\StructType\\DoResetResponse',
            'doCreditRequest' => '\\StructType\\DoCreditRequest',
            'doCreditResponse' => '\\StructType\\DoCreditResponse',
            'createWalletRequest' => '\\StructType\\CreateWalletRequest',
            'createWalletResponse' => '\\StructType\\CreateWalletResponse',
            'updateWalletRequest' => '\\StructType\\UpdateWalletRequest',
            'updateWalletResponse' => '\\StructType\\UpdateWalletResponse',
            'getWalletRequest' => '\\StructType\\GetWalletRequest',
            'getWalletResponse' => '\\StructType\\GetWalletResponse',
            'getCardsRequest' => '\\StructType\\GetCardsRequest',
            'getCardsResponse' => '\\StructType\\GetCardsResponse',
            'disableWalletRequest' => '\\StructType\\DisableWalletRequest',
            'disableWalletResponse' => '\\StructType\\DisableWalletResponse',
            'enableWalletRequest' => '\\StructType\\EnableWalletRequest',
            'enableWalletResponse' => '\\StructType\\EnableWalletResponse',
            'doImmediateWalletPaymentRequest' => '\\StructType\\DoImmediateWalletPaymentRequest',
            'doImmediateWalletPaymentResponse' => '\\StructType\\DoImmediateWalletPaymentResponse',
            'doScheduledWalletPaymentRequest' => '\\StructType\\DoScheduledWalletPaymentRequest',
            'doScheduledWalletPaymentResponse' => '\\StructType\\DoScheduledWalletPaymentResponse',
            'doRecurrentWalletPaymentRequest' => '\\StructType\\DoRecurrentWalletPaymentRequest',
            'doRecurrentWalletPaymentResponse' => '\\StructType\\DoRecurrentWalletPaymentResponse',
            'getPaymentRecordRequest' => '\\StructType\\GetPaymentRecordRequest',
            'getPaymentRecordResponse' => '\\StructType\\GetPaymentRecordResponse',
            'disablePaymentRecordRequest' => '\\StructType\\DisablePaymentRecordRequest',
            'disablePaymentRecordResponse' => '\\StructType\\DisablePaymentRecordResponse',
            'manageWebWalletRequest' => '\\StructType\\ManageWebWalletRequest',
            'manageWebWalletResponse' => '\\StructType\\ManageWebWalletResponse',
            'createWebWalletRequest' => '\\StructType\\CreateWebWalletRequest',
            'createWebWalletResponse' => '\\StructType\\CreateWebWalletResponse',
            'updateWebWalletRequest' => '\\StructType\\UpdateWebWalletRequest',
            'updateWebWalletResponse' => '\\StructType\\UpdateWebWalletResponse',
            'getWebWalletRequest' => '\\StructType\\GetWebWalletRequest',
            'getWebWalletResponse' => '\\StructType\\GetWebWalletResponse',
            'doAuthorizationRedirectRequest' => '\\StructType\\DoAuthorizationRedirectRequest',
            'doAuthorizationRedirectResponse' => '\\StructType\\DoAuthorizationRedirectResponse',
            'getTransactionDetailsRequest' => '\\StructType\\GetTransactionDetailsRequest',
            'getTransactionDetailsResponse' => '\\StructType\\GetTransactionDetailsResponse',
            'transactionsSearchRequest' => '\\StructType\\TransactionsSearchRequest',
            'transactionsSearchResponse' => '\\StructType\\TransactionsSearchResponse',
            'verifyEnrollmentRequest' => '\\StructType\\VerifyEnrollmentRequest',
            'verifyEnrollmentResponse' => '\\StructType\\VerifyEnrollmentResponse',
            'verifyAuthenticationRequest' => '\\StructType\\VerifyAuthenticationRequest',
            'verifyAuthenticationResponse' => '\\StructType\\VerifyAuthenticationResponse',
            'doScoringChequeRequest' => '\\StructType\\DoScoringChequeRequest',
            'doScoringChequeResponse' => '\\StructType\\DoScoringChequeResponse',
            'getEncryptionKeyRequest' => '\\StructType\\GetEncryptionKeyRequest',
            'getEncryptionKeyResponse' => '\\StructType\\GetEncryptionKeyResponse',
            'doReAuthorizationRequest' => '\\StructType\\DoReAuthorizationRequest',
            'doReAuthorizationResponse' => '\\StructType\\DoReAuthorizationResponse',
            'getMerchantSettingsRequest' => '\\StructType\\GetMerchantSettingsRequest',
            'getMerchantSettingsResponse' => '\\StructType\\GetMerchantSettingsResponse',
            'listPointOfSell' => '\\StructType\\ListPointOfSell',
            'getBalanceRequest' => '\\StructType\\GetBalanceRequest',
            'getBalanceResponse' => '\\StructType\\GetBalanceResponse',
            'balance' => '\\StructType\\Balance',
            'getAlertDetailsRequest' => '\\StructType\\GetAlertDetailsRequest',
            'getAlertDetailsResponse' => '\\StructType\\GetAlertDetailsResponse',
            'getTokenRequest' => '\\StructType\\GetTokenRequest',
            'getTokenResponse' => '\\StructType\\GetTokenResponse',
            'unBlockRequest' => '\\StructType\\UnBlockRequest',
            'unBlockResponse' => '\\StructType\\UnBlockResponse',
            'updatePaymentRecordRequest' => '\\StructType\\UpdatePaymentRecordRequest',
            'updatePaymentRecordResponse' => '\\StructType\\UpdatePaymentRecordResponse',
            'getBillingRecordRequest' => '\\StructType\\GetBillingRecordRequest',
            'getBillingRecordResponse' => '\\StructType\\GetBillingRecordResponse',
            'updateBillingRecordRequest' => '\\StructType\\UpdateBillingRecordRequest',
            'updateBillingRecordResponse' => '\\StructType\\UpdateBillingRecordResponse',
            'doBankTransferRequest' => '\\StructType\\DoBankTransferRequest',
            'doBankTransferResponse' => '\\StructType\\DoBankTransferResponse',
            'isRegisteredRequest' => '\\StructType\\IsRegisteredRequest',
            'isRegisteredResponse' => '\\StructType\\IsRegisteredResponse',
            'prepareSessionRequest' => '\\StructType\\PrepareSessionRequest',
            'prepareSessionResponse' => '\\StructType\\PrepareSessionResponse',
            'result' => '\\StructType\\Result',
            'cardOut' => '\\StructType\\CardOut',
            'extendedCardType' => '\\StructType\\ExtendedCardType',
            'order' => '\\StructType\\Order',
            'key' => '\\StructType\\Key',
            'details' => '\\StructType\\Details',
            'orderDetail' => '\\StructType\\OrderDetail',
            'privateData' => '\\StructType\\PrivateData',
            'miscDataPair' => '\\StructType\\MiscDataPair',
            'transaction' => '\\StructType\\Transaction',
            'scoring' => '\\StructType\\Scoring',
            'fraudResultDetails' => '\\StructType\\FraudResultDetails',
            'payment' => '\\StructType\\Payment',
            'authorization' => '\\StructType\\Authorization',
            'paymentData' => '\\StructType\\PaymentData',
            'card' => '\\StructType\\Card',
            'buyer' => '\\StructType\\Buyer',
            'owner' => '\\StructType\\Owner',
            'address' => '\\StructType\\Address',
            'addressOwner' => '\\StructType\\AddressOwner',
            'capture' => '\\StructType\\Capture',
            'refund' => '\\StructType\\Refund',
            'selectedContractList' => '\\StructType\\SelectedContractList',
            'privateDataList' => '\\StructType\\PrivateDataList',
            'miscData' => '\\StructType\\MiscData',
            'avs' => '\\StructType\\Avs',
            'contractNumberWalletList' => '\\StructType\\ContractNumberWalletList',
            'cardsList' => '\\StructType\\CardsList',
            'captureAuthorizationList' => '\\StructType\\CaptureAuthorizationList',
            'refundAuthorizationList' => '\\StructType\\RefundAuthorizationList',
            'resetAuthorizationList' => '\\StructType\\ResetAuthorizationList',
            'failedListObject' => '\\StructType\\FailedListObject',
            'failedObject' => '\\StructType\\FailedObject',
            'recurring' => '\\StructType\\Recurring',
            'recurringForUpdate' => '\\StructType\\RecurringForUpdate',
            'billingRecord' => '\\StructType\\BillingRecord',
            'billingRecordList' => '\\StructType\\BillingRecordList',
            'billingRecordForUpdate' => '\\StructType\\BillingRecordForUpdate',
            'wallet' => '\\StructType\\Wallet',
            'cards' => '\\StructType\\Cards',
            'walletIdList' => '\\StructType\\WalletIdList',
            'transactionList' => '\\StructType\\TransactionList',
            'authentication3DSecure' => '\\StructType\\Authentication3DSecure',
            'connectionData' => '\\StructType\\ConnectionData',
            'scoringCheque' => '\\StructType\\ScoringCheque',
            'addressInterlocutor' => '\\StructType\\AddressInterlocutor',
            'interlocutor' => '\\StructType\\Interlocutor',
            'option' => '\\StructType\\Option',
            'iban' => '\\StructType\\Iban',
            'rib' => '\\StructType\\Rib',
            'bankAccount' => '\\StructType\\BankAccount',
            'bankAccountData' => '\\StructType\\BankAccountData',
            'technicalData' => '\\StructType\\TechnicalData',
            'contract' => '\\StructType\\Contract',
            'customPaymentPageCode' => '\\StructType\\CustomPaymentPageCode',
            'ticketSend' => '\\StructType\\TicketSend',
            'pointOfSell' => '\\StructType\\PointOfSell',
            'contracts' => '\\StructType\\Contracts',
            'customPaymentPageCodeList' => '\\StructType\\CustomPaymentPageCodeList',
            'virtualTerminal' => '\\StructType\\VirtualTerminal',
            'functions' => '\\StructType\\Functions',
            'virtualTerminalFunction' => '\\StructType\\VirtualTerminalFunction',
            'functionParameter' => '\\StructType\\FunctionParameter',
            'cheque' => '\\StructType\\Cheque',
            'contribution' => '\\StructType\\Contribution',
            'associatedTransactions' => '\\StructType\\AssociatedTransactions',
            'associatedTransactionsList' => '\\StructType\\AssociatedTransactionsList',
            'statusHistory' => '\\StructType\\StatusHistory',
            'statusHistoryList' => '\\StructType\\StatusHistoryList',
            'paymentAdditional' => '\\StructType\\PaymentAdditional',
            'paymentAdditionalList' => '\\StructType\\PaymentAdditionalList',
            'CustomerTransHist' => '\\StructType\\CustomerTransHist',
            'CustomerTrans' => '\\StructType\\CustomerTrans',
            'PaymentMeansTransHist' => '\\StructType\\PaymentMeansTransHist',
            'PaymentMeansTrans' => '\\StructType\\PaymentMeansTrans',
            'AlertsTransHist' => '\\StructType\\AlertsTransHist',
            'AlertsTrans' => '\\StructType\\AlertsTrans',
            'creditor' => '\\StructType\\Creditor',
            'subMerchant' => '\\StructType\\SubMerchant',
            'media' => '\\StructType\\Media',
            'routingRule' => '\\StructType\\RoutingRule',
            'threeDSInfo' => '\\StructType\\ThreeDSInfo',
            'browser' => '\\StructType\\Browser',
            'sdk' => '\\StructType\\Sdk',
            'merchantAuthentication' => '\\StructType\\MerchantAuthentication',
            'sdkChallenge' => '\\StructType\\SdkChallenge',
            'reattempt' => '\\StructType\\Reattempt',
        ];
    }
}