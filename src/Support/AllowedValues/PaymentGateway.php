<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class PaymentGateway
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class PaymentGateway extends BaseAllowedValues
{
    /**
     * @var string
     */
    const ADYEN = '$adyen';

    /**
     * @var string
     */
    const AFFIRM = '$affirm';

    /**
     * @var string
     */
    const ALIPAY = '$alipay';

    /**
     * @var string
     */
    const ALTAPAY = '$altapay';

    /**
     * @var string
     */
    const AMAZON_PAYMENTS = '$amazon_payments';

    /**
     * @var string
     */
    const ANDROID_PAY = '$android_pay';

    /**
     * @var string
     */
    const APPLE_PAY = '$apple_pay';

    /**
     * @var string
     */
    const ASTROPAY = '$astropay';

    /**
     * @var string
     */
    const AUTHORIZENET = '$authorizenet';

    /**
     * @var string
     */
    const AVANGATE = '$avangate';

    /**
     * @var string
     */
    const BALANCED = '$balanced';

    /**
     * @var string
     */
    const BANWIRE = '$banwire';

    /**
     * @var string
     */
    const BARCLAYS = '$barclays';

    /**
     * @var string
     */
    const BEANSTREAM = '$beanstream';

    /**
     * @var string
     */
    const BITGO = '$bitgo';

    /**
     * @var string
     */
    const BITPAY = '$bitpay';

    /**
     * @var string
     */
    const BLOCKCHAIN = '$blockchain';

    /**
     * @var string
     */
    const BLUEPAY = '$bluepay';

    /**
     * @var string
     */
    const BLUESNAP = '$bluesnap';

    /**
     * @var string
     */
    const BRAINTREE = '$braintree';

    /**
     * @var string
     */
    const BREAD = '$bread';

    /**
     * @var string
     */
    const BUCKAROO = '$buckaroo';

    /**
     * @var string
     */
    const CARDCONNECT = '$cardconnect';

    /**
     * @var string
     */
    const CCAVENUE = '$ccavenue';

    /**
     * @var string
     */
    const CHAIN_COMMERCE = '$chain_commerce';

    /**
     * @var string
     */
    const CHASE_PAYMENTECH = '$chase_paymentech';

    /**
     * @var string
     */
    const CHECKOUTCOM = '$checkoutcom';

    /**
     * @var string
     */
    const CIELO = '$cielo';

    /**
     * @var string
     */
    const CLEARSETTLE = '$clearsettle';

    /**
     * @var string
     */
    const CLEARCOMMERCE = '$clearcommerce';

    /**
     * @var string
     */
    const CLOUDPAYMENTS = '$cloudpayments';

    /**
     * @var string
     */
    const COFINOGA = '$cofinoga';

    /**
     * @var string
     */
    const COINBASE = '$coinbase';

    /**
     * @var string
     */
    const COLLECTOR = '$collector';

    /**
     * @var string
     */
    const COMPROPAGO = '$compropago';

    /**
     * @var string
     */
    const CONEKTA = '$conekta';

    /**
     * @var string
     */
    const CUENTADIGITAL = '$cuentadigital';

    /**
     * @var string
     */
    const CULQI = '$culqi';

    /**
     * @var string
     */
    const CYBERSOURCE = '$cybersource';

    /**
     * @var string
     */
    const DATACASH = '$datacash';

    /**
     * @var string
     */
    const DEBITWAY = '$debitway';

    /**
     * @var string
     */
    const DEMOCRACY_ENGINE = '$democracy_engine';

    /**
     * @var string
     */
    const DIBS = '$dibs';

    /**
     * @var string
     */
    const DIGITAL_RIVER = '$digital_river';

    /**
     * @var string
     */
    const DOTPAY = '$dotpay';

    /**
     * @var string
     */
    const DRAGONPAY = '$dragonpay';

    /**
     * @var string
     */
    const ECOPAYZ = '$ecopayz';

    /**
     * @var string
     */
    const EDGIL_PAYWAY = '$edgil_payway';

    /**
     * @var string
     */
    const ELAVON = '$elavon';

    /**
     * @var string
     */
    const EMPCORP = '$empcorp';

    /**
     * @var string
     */
    const EPAYEU = '$epayeu';

    /**
     * @var string
     */
    const EPROCESSING_NETWORK = '$eprocessing_network';

    /**
     * @var string
     */
    const EUTELLER = '$euteller';

    /**
     * @var string
     */
    const EWAY = '$eway';

    /**
     * @var string
     */
    const E_XACT = '$e_xact';

    /**
     * @var string
     */
    const FIRST_ATLANTIC_COMMERCE = '$first_atlantic_commerce';

    /**
     * @var string
     */
    const FIRST_DATA = '$first_data';

    /**
     * @var string
     */
    const G2APAY = '$g2apay';

    /**
     * @var string
     */
    const GIROPAY = '$giropay';

    /**
     * @var string
     */
    const GLOBALCOLLECT = '$globalcollect';

    /**
     * @var string
     */
    const GLOBAL_PAYMENTS = '$global_payments';

    /**
     * @var string
     */
    const GLOBAL_PAYWAYS = '$global_payways';

    /**
     * @var string
     */
    const GMOPG = '$gmopg';

    /**
     * @var string
     */
    const GOCARDLESS = '$gocardless';

    /**
     * @var string
     */
    const HDFC_FSSNET = '$hdfc_fssnet';

    /**
     * @var string
     */
    const HIPAY = '$hipay';

    /**
     * @var string
     */
    const IDEAL = '$ideal';

    /**
     * @var string
     */
    const INGENICO = '$ingenico';

    /**
     * @var string
     */
    const INTERAC = '$interac';

    /**
     * @var string
     */
    const INTERNETSECURE = '$internetsecure';

    /**
     * @var string
     */
    const INTUIT_QUICKBOOKS_PAYMENTS = '$intuit_quickbooks_payments';

    /**
     * @var string
     */
    const ISIGNTHIS = '$isignthis';

    /**
     * @var string
     */
    const IUGU = '$iugu';

    /**
     * @var string
     */
    const JABONG = '$jabong';

    /**
     * @var string
     */
    const KLARNA = '$klarna';

    /**
     * @var string
     */
    const KUSHKI = '$kushki';

    /**
     * @var string
     */
    const LEMONWAY = '$lemonway';

    /**
     * @var string
     */
    const LIMELIGHT = '$limelight';

    /**
     * @var string
     */
    const LOGON = '$logon';

    /**
     * @var string
     */
    const MASTERCARD_PAYMENT_GATEWAY = '$mastercard_payment_gateway';

    /**
     * @var string
     */
    const MASTERPASS = '$masterpass';

    /**
     * @var string
     */
    const MAXIPAGO = '$maxipago';

    /**
     * @var string
     */
    const MAXPAY = '$maxpay';

    /**
     * @var string
     */
    const MEIKOPAY = '$meikopay';

    /**
     * @var string
     */
    const MERCADOPAGO = '$mercadopago';

    /**
     * @var string
     */
    const MERCHANT_ESOLUTIONS = '$merchant_esolutions';

    /**
     * @var string
     */
    const MIRJEH = '$mirjeh';

    /**
     * @var string
     */
    const MOIP = '$moip';

    /**
     * @var string
     */
    const MOLLIE = '$mollie';

    /**
     * @var string
     */
    const MONERIS_SOLUTIONS = '$moneris_solutions';

    /**
     * @var string
     */
    const MONEYGRAM = '$moneygram';

    /**
     * @var string
     */
    const MPESA = '$mpesa';

    /**
     * @var string
     */
    const MULTIBANCO = '$multibanco';

    /**
     * @var string
     */
    const NETBILLING = '$netbilling';

    /**
     * @var string
     */
    const NETELLER = '$neteller';

    /**
     * @var string
     */
    const NMI = '$nmi';

    /**
     * @var string
     */
    const OGONE = '$ogone';

    /**
     * @var string
     */
    const OKPAY = '$okpay';

    /**
     * @var string
     */
    const OMISE = '$omise';

    /**
     * @var string
     */
    const OPENPAYMX = '$openpaymx';

    /**
     * @var string
     */
    const OPTIMAL_PAYMENTS = '$optimal_payments';

    /**
     * @var string
     */
    const PAGAR_ME = '$pagar_me';

    /**
     * @var string
     */
    const PAGOFACIL = '$pagofacil';

    /**
     * @var string
     */
    const PAGSEGURO = '$pagseguro';

    /**
     * @var string
     */
    const PAXUM = '$paxum';

    /**
     * @var string
     */
    const PAYEER = '$payeer';

    /**
     * @var string
     */
    const PAYFAST = '$payfast';

    /**
     * @var string
     */
    const PAYFLOW = '$payflow';

    /**
     * @var string
     */
    const PAYGATE = '$paygate';

    /**
     * @var string
     */
    const PAYLIKE = '$paylike';

    /**
     * @var string
     */
    const PAYMENTWALL = '$paymentwall';

    /**
     * @var string
     */
    const PAYMENT_EXPRESS = '$payment_express';

    /**
     * @var string
     */
    const PAYMILL = '$paymill';

    /**
     * @var string
     */
    const PAYONE = '$payone';

    /**
     * @var string
     */
    const PAYONEER = '$payoneer';

    /**
     * @var string
     */
    const PAYPAL = '$paypal';

    /**
     * @var string
     */
    const PAYPAL_EXPRESS = '$paypal_express';

    /**
     * @var string
     */
    const PAYSAFECARD = '$paysafecard';

    /**
     * @var string
     */
    const PAYSERA = '$paysera';

    /**
     * @var string
     */
    const PAYSIMPLE = '$paysimple';

    /**
     * @var string
     */
    const PAYSTATION = '$paystation';

    /**
     * @var string
     */
    const PAYTRACE = '$paytrace';

    /**
     * @var string
     */
    const PAYTRAIL = '$paytrail';

    /**
     * @var string
     */
    const PAYTURE = '$payture';

    /**
     * @var string
     */
    const PAYU = '$payu';

    /**
     * @var string
     */
    const PAYULATAM = '$payulatam';

    /**
     * @var string
     */
    const PAYVECTOR = '$payvector';

    /**
     * @var string
     */
    const PAYZA = '$payza';

    /**
     * @var string
     */
    const PEACH_PAYMENTS = '$peach_payments';

    /**
     * @var string
     */
    const PERFECT_MONEY = '$perfect_money';

    /**
     * @var string
     */
    const PINPAYMENTS = '$pinpayments';

    /**
     * @var string
     */
    const PIVOTAL_PAYMENTS = '$pivotal_payments';

    /**
     * @var string
     */
    const PLANET_PAYMENT = '$planet_payment';

    /**
     * @var string
     */
    const POLI = '$poli';

    /**
     * @var string
     */
    const PRINCETON_PAYMENT_SOLUTIONS = '$princeton_payment_solutions';

    /**
     * @var string
     */
    const PROCESSING = '$processing';

    /**
     * @var string
     */
    const PRZELEWY24 = '$przelewy24';

    /**
     * @var string
     */
    const PSIGATE = '$psigate';

    /**
     * @var string
     */
    const PULSE = '$pulse';

    /**
     * @var string
     */
    const QIWI = '$qiwi';

    /**
     * @var string
     */
    const QUICKPAY = '$quickpay';

    /**
     * @var string
     */
    const RABERIL = '$raberil';

    /**
     * @var string
     */
    const RAKUTEN_CHECKOUT = '$rakuten_checkout';

    /**
     * @var string
     */
    const RATEPAY = '$ratepay';

    /**
     * @var string
     */
    const RBKMONEY = '$rbkmoney';

    /**
     * @var string
     */
    const REDE = '$rede';

    /**
     * @var string
     */
    const REDPAGOS = '$redpagos';

    /**
     * @var string
     */
    const REDSYS = '$redsys';

    /**
     * @var string
     */
    const REWARDSPAY = '$rewardspay';

    /**
     * @var string
     */
    const RIETUMU = '$rietumu';

    /**
     * @var string
     */
    const ROCKETGATE = '$rocketgate';

    /**
     * @var string
     */
    const SAFECHARGE = '$safecharge';

    /**
     * @var string
     */
    const SAFETYPAY = '$safetypay';

    /**
     * @var string
     */
    const SAGEPAY = '$sagepay';

    /**
     * @var string
     */
    const SAMSUNG_PAY = '$samsung_pay';

    /**
     * @var string
     */
    const SECURIONPAY = '$securionpay';

    /**
     * @var string
     */
    const SECUREPAY = '$securepay';

    /**
     * @var string
     */
    const SERMEPA = '$sermepa';

    /**
     * @var string
     */
    const SHOPIFY_PAYMENTS = '$shopify_payments';

    /**
     * @var string
     */
    const SIMPLIFY_COMMERCE = '$simplify_commerce';

    /**
     * @var string
     */
    const SKRILL = '$skrill';

    /**
     * @var string
     */
    const SMART2PAY = '$smart2pay';

    /**
     * @var string
     */
    const SMARTCOIN = '$smartcoin';

    /**
     * @var string
     */
    const SOFORT = '$sofort';

    /**
     * @var string
     */
    const SPLASH_PAYMENTS = '$splash_payments';

    /**
     * @var string
     */
    const SPS_DECIDIR = '$sps_decidir';

    /**
     * @var string
     */
    const SQUARE = '$square';

    /**
     * @var string
     */
    const STONE = '$stone';

    /**
     * @var string
     */
    const STRIPE = '$stripe';

    /**
     * @var string
     */
    const SWEDBANK = '$swedbank';

    /**
     * @var string
     */
    const SYNAPSEPAY = '$synapsepay';

    /**
     * @var string
     */
    const TELERECARGAS = '$telerecargas';

    /**
     * @var string
     */
    const TNSPAY = '$tnspay';

    /**
     * @var string
     */
    const TOWAH = '$towah';

    /**
     * @var string
     */
    const TPAGA = '$tpaga';

    /**
     * @var string
     */
    const TRANSACT_PRO = '$transact_pro';

    /**
     * @var string
     */
    const TRANSFIRST = '$transfirst';

    /**
     * @var string
     */
    const TRUSTCOMMERCE = '$trustcommerce';

    /**
     * @var string
     */
    const TRUSTLY = '$trustly';

    /**
     * @var string
     */
    const TWOC2P = '$twoc2p';

    /**
     * @var string
     */
    const TWOCHECKOUT = '$twocheckout';

    /**
     * @var string
     */
    const UNIONPAY = '$unionpay';

    /**
     * @var string
     */
    const USA_EPAY = '$usa_epay';

    /**
     * @var string
     */
    const VANTIV = '$vantiv';

    /**
     * @var string
     */
    const VENMO = '$venmo';

    /**
     * @var string
     */
    const VERITRANS = '$veritrans';

    /**
     * @var string
     */
    const VERSAPAY = '$versapay';

    /**
     * @var string
     */
    const VESTA = '$vesta';

    /**
     * @var string
     */
    const VINDICIA = '$vindicia';

    /**
     * @var string
     */
    const VIRTUAL_CARD_SERVICES = '$virtual_card_services';

    /**
     * @var string
     */
    const VISA = '$visa';

    /**
     * @var string
     */
    const VME = '$vme';

    /**
     * @var string
     */
    const VPOS = '$vpos';

    /**
     * @var string
     */
    const WEBMONEY = '$webmoney';

    /**
     * @var string
     */
    const WEBPAY_ONECLICK = '$webpay_oneclick';

    /**
     * @var string
     */
    const WEPAY = '$wepay';

    /**
     * @var string
     */
    const WESTERN_UNION = '$western_union';

    /**
     * @var string
     */
    const WIRECARD = '$wirecard';

    /**
     * @var string
     */
    const WORLDPAY = '$worldpay';

    /**
     * @var string
     */
    const WORLDSPAN = '$worldspan';

    /**
     * @var string
     */
    const XIPAY = '$xipay';

    /**
     * @var string
     */
    const YANDEX_MONEY = '$yandex_money';

    /**
     * @var string
     */
    const ZIPMONEY = '$zipmoney';

    /**
     * @var string
     */
    const ZOOZ_PAYMENTSOS = '$zooz_paymentsos';
}
