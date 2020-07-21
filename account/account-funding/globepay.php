<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Globe Pay Payment Gateway | MultiBank Fx</title>
    <meta name='description' content=".errors{color:rgba(176,18,18,1);}">
    <meta property='og:title' content="Globe Pay Payment Gateway | MultiBank Fx">
    <meta property='og:description' content=".errors{color:rgba(176,18,18,1);}">
    <link rel='canonical' href="globepay.php">
    <link rel="alternate" href="https://es.multibankfx.com/account/account-funding/globepay" hreflang="es-ES"/>
    <link rel="alternate" href="https://ru.multibankfx.com/account/account-funding/globepay" hreflang="ru-RU"/>
    <link rel="alternate" href="https://ae.multibankfx.com/account/account-funding/globepay" hreflang="en-ae"/>
    <link rel="alternate" href="https://vn.multibankfx.com/account/account-funding/globepay" hreflang="vi-VN"/>
    <link rel="alternate" href="https://id.multibankfx.com/account/account-funding/globepay" hreflang="id-ID"/>
    <link rel="alternate" href="https://mys.multibankfx.com/account/account-funding/globepay" hreflang="ms-MY"/>
    <link rel="alternate" href="https://ph.multibankfx.com/account/account-funding/globepay" hreflang="tl-PH"/>
    <link rel="alternate" href="https://th.multibankfx.com/account/account-funding/globepay" hreflang="th-TH"/>
    <link rel="alternate" href="https://fr.multibankfx.com/account/account-funding/globepay" hreflang="fr-FR"/>
    <link rel="alternate" href="globepay.php" hreflang="x-default"/>
    <link rel="stylesheet" type="text/css" href="multibankfx/public_files/static_css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="/multibankfx/public_files/static_css/payment_gateway/form_validate.css%3Fver=1.css">
    <link rel="stylesheet" type="text/css" href="/multibankfx/public_files/static_css/font-awesome.min.css">
    <script type="3ced363c953c594035e8568c-text/javascript"
            src="/multibankfx/public_files/static_js/jquery-3.3.1.min.js"></script>
    <script type="3ced363c953c594035e8568c-text/javascript"
            src="/multibankfx/public_files/static_js/jquery.ba-throttle-debounce.js"></script>
    <style>
        .top-logo {
            display: flex;
            justify-content: space-between;
        }

        .sup-size {
            color: #FF0000;
        }

        .full-size-box, .btn-submit {
            background: rgb(110, 196, 228);
            background: linear-gradient(135deg, rgb(110, 196, 228) 0%, rgb(93, 173, 220) 100%);
        }

        .md-card {
            background-color: #FFF;
        }

        .card-title {
            padding: 20px;
            margin-bottom: 0;
        }

        .card-body {
            padding-top: 0;
        }

        .disclaimer {
            margin: 20px 0;
            font-size: 11px;
            color: #000;
        }

        .business-disclaimer {
            padding-top: 10px;

            border-top: 1px solid #808080;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .business-disclaimer .label {
            font-size: 11px;
            color: #000;
            margin-right: 20px;
        }

        .logo-group {

            display: flex;
            align-items: center;
        }

        .logo-group img {
            height: 40px;
            margin-left: 5px;
        }

        @media screen and (max-width: 991px) {
            .business-disclaimer {
                flex-direction: column;
                align-items: flex-start;
            }

            .business-disclaimer .label {
                margin-bottom: 10px;
            }

            .business-disclaimer .logo-group img {
                margin-left: 0;
                margin-right: 5px;
            }
        }

        /** Custom CSS For FXBIT **/
        .perfect-money-btn-submit {
            background: red !important;
            border: 2px solid red !important;
        }

        #payment_form_container {
            display: none;
        }

        #payment_qr_container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            display: none;
        }

        #payment_qr_code {
            width: 250px;
            height: 250px;

        }

        #payment_address {
            border: 1px solid #ccc;
            padding: 6px 10px;
            border-radius: 5px;
        }

        #btn_copy_address {
            background: #150305;
            border: 1px solid transparent;
            border-radius: 5px;
            padding: 6px 10px;
            color: #fefefe;

        }

        /** JS Timer CSS ***/
        .timer {
            display: flex;

            justify-content: space-between;
            font-size: 32px;

        }

        #timer {
            color: black;
            display: flex;
            justify-content: center;
        }

        #minutes {

            padding: 0px 05px;
            background: #fefefe;
            color: #db2827;
            /* box-shadow:0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);*/

        }

        #seconds {
            padding: 0px 5px;
            background: #fefefe;
            color: #db2827;
            /* box-shadow:0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);*/
        }

        #space {
            padding: 0px 5px;
        }

        .exchanged-amount-notification {
            position: absolute;
            top: 100%;
            right: 5%;
        }

        .business-disclaimer {
            padding-top: 10px;
            border-top: 1px solid #808080;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .billing-info {
            height: auto;
            margin-top: 12px;
            line-height: 25px;

        }

    </style>
</head>
<body>
<style>
    .errors {
        color: rgba(176, 18, 18, 1);
    }
</style>
<section class="full-size-box">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-7 mx-auto md-card elevation-1">
                <div class="top-logo card-title">
                    <a class="logo">
                        <img src="/multibankfx/public_files/images/payment_gateway/globepay_logo" alt="MultiBank Group"
                             width="220px">
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 m-3">
                        </div>
                    </div>
                    <form action="https://www.multibankfx.com/web/pay/payGlobePay?" name='globe_pay_payment_form'
                          class='multibank-form row' method='post' enctype='' id='globe_pay_payment_form' target=''
                          autocomplete='off'>
                        <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo1NzowMQ=='/>
                        <input type='hidden' name='token'
                               value='$2y$10$LIn0Rj3ohzUjOevl1.ddIe7k78cPwHuhnzfhtgu5Xd1.TObV8ANPm'/>
                        <input type='hidden' name='source'
                               value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:56:56] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:57] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:59] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:57:01] https://www.multibankfx.com/account/account-funding<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/account-funding/globepay?web=true'/>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                MT4 Account</label>
                            <input type="text" data-message="Mt4 Account Number is Required."
                                   data-extra-message="MT4 Account Invalid" data-regex="33+\d{6}###66+\d{6}" class=""
                                   name="account_login" $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Full Name</label>
                            <input type="text" data-message="Full Name is Required."
                                   data-extra-message="Full Name Invalid." data-regex="" class="" name="firstname"
                                   $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Amount (USD)</label>
                            <input type="text" data-message="Amount is Required."
                                   data-extra-message="Amount is Invalid." data-regex="" class="" name="amount"
                                   $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Payment Currency</label>
                            <select class='' data-message='Currency is Required.'
                                    data-extra-message="Currency is Invalid." data-regex='' name='currency' required>
                                <option value='USD' selected='selected' class=''>USD</option>
                            </select></div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Phone</label>
                            <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.'
                                   data-extra-message="Phone Number Invalid." data-regex='' class='' name='phone'
                                   placeholder='' required value=''/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Email</label>
                            <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid."
                                   data-regex='' class='' name='email' placeholder='' required value=''/>
                        </div>
                        <div class=''>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='spacing' placeholder='' value=''/>
                        </div>
                        <button type='submit' class='btn-submit'
                                onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                data-cf-modified-3ced363c953c594035e8568c-="">Deposit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="3ced363c953c594035e8568c-text/javascript">
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

$(function(){
    let amount = getUrlVars()['amount'];
    let intregex = RegExp('^[0-9.]{1,8}$');
    if(!!amount && intregex.test(amount)){
        $('input[name="amount"]').val(amount);
    }
});



</script>
<script type="3ced363c953c594035e8568c-text/javascript"
        src="/multibankfx/public_files/static_js/jquery.validate.min.js"></script>
<script type="3ced363c953c594035e8568c-text/javascript"
        src="/multibankfx/public_files/static_js/payment_gateway/form_validate.js"></script>
<script type="3ced363c953c594035e8568c-text/javascript">
    $(function() {
        $('#globe_pay_payment_form').validateForm();

    });


</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="3ced363c953c594035e8568c-|49" defer=""></script>
</body>
</html>