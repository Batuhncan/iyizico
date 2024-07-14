<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>
<body>
    <div>
        {{ $paymentInput }}
    </div>

    <script type="text/javascript">
        var iyziInit = {
            currency: "TRY",
            token: "4d107f3c-b9b0-43cd-ab36-523337c5b0f8",
            price: 50.00,
            pwiPrice: 50.00,
            locale: "tr",
            baseUrl: "https://sandbox-api.iyzipay.com",
            merchantGatewayBaseUrl: "https://sandbox-merchantgw.iyzipay.com",
            registerCardEnabled: true,
            bkmEnabled: true,
            bankTransferEnabled: false,
            bankTransferTimeLimit: { value: 5, type: "day" },
            bankTransferRedirectUrl: "https://www.merchant.com/callback",
            bankTransferCustomUIProps: {},
            campaignEnabled: false,
            campaignMarketingUiDisplay: null,
            paymentSourceName: "",
            plusInstallmentResponseList: null,
            payWithIyzicoSingleTab: false,
            payWithIyzicoSingleTabV2: false,
            payWithIyzicoOneTab: false,
            newDesignEnabled: false,
            mixPaymentEnabled: true,
            creditCardEnabled: true,
            bankTransferAccounts: [],
            userCards: [],
            fundEnabled: true,
            memberCheckoutOtpData: {},
            force3Ds: false,
            isSandbox: true,
            storeNewCardEnabled: true,
            paymentWithNewCardEnabled: true,
            enabledApmTypes: ["SOFORT", "IDEAL", "QIWI", "GIROPAY"],
            payWithIyzicoUsed: false,
            payWithIyzicoEnabled: true,
            payWithIyzicoCustomUI: {},
            buyerName: "Sezer",
            buyerSurname: "Esim",
            merchantInfo: "",
            merchantName: "Sandbox Merchant Name - 3397967",
            cancelUrl: "",
            buyerProtectionEnabled: false,
            hide3DS: false,
            gsmNumber: "+905380000000",
            email: "email@email.com",
            checkConsumerDetail: {},
            subscriptionPaymentEnabled: false,
            ucsEnabled: false,
            fingerprintEnabled: false,
            payWithIyzicoFirstTab: false,
            creditEnabled: false,
            payWithIyzicoLead: false,
            goBackUrl: "",
            metadata: {},
            createTag: function () {
                var iyziJSTag = document.createElement('script');
                iyziJSTag.setAttribute('src', 'https://sandbox-static.iyzipay.com/checkoutform/v2/bundle.js?v=1720911608749');
                document.head.appendChild(iyziJSTag);
            }
        };
        iyziInit.createTag();
    </script>
</body>
</html>
