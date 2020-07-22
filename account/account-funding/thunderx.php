<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Thunder X Pay Deposit Form | MultiBank Fx</title>
    <meta name='description' content="">
    <meta property='og:title' content="Thunder X Pay Deposit Form | MultiBank Fx">
    <meta property='og:description' content="">
    <link rel='canonical' href="thunderx.php">
    <link rel="alternate" href="https://es.multibankfx.com/account/account-funding/thunderx" hreflang="es-ES"/>
    <link rel="alternate" href="https://ru.multibankfx.com/account/account-funding/thunderx" hreflang="ru-RU"/>
    <link rel="alternate" href="https://ae.multibankfx.com/account/account-funding/thunderx" hreflang="en-ae"/>
    <link rel="alternate" href="https://vn.multibankfx.com/account/account-funding/thunderx" hreflang="vi-VN"/>
    <link rel="alternate" href="https://id.multibankfx.com/account/account-funding/thunderx" hreflang="id-ID"/>
    <link rel="alternate" href="https://mys.multibankfx.com/account/account-funding/thunderx" hreflang="ms-MY"/>
    <link rel="alternate" href="https://ph.multibankfx.com/account/account-funding/thunderx" hreflang="tl-PH"/>
    <link rel="alternate" href="https://th.multibankfx.com/account/account-funding/thunderx" hreflang="th-TH"/>
    <link rel="alternate" href="https://fr.multibankfx.com/account/account-funding/thunderx" hreflang="fr-FR"/>
    <link rel="alternate" href="thunderx.php" hreflang="x-default"/>
    <link rel="stylesheet" href="public_files/static_css/bootstrap.min.css">
    <link rel="stylesheet" href="public_files/static_css/payment_gateway/form_validate.css">
    <script type="e83e302eb96528c22dc1dc70-text/javascript"
            src='../../public_files/static_js/jquery-3.3.1.min.js'></script>
</head>
<body>
<section class="full-size-box">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-7 mx-auto p-0 md-card elevation-1">
                <div class="top-logo card-title">
                    <a class="logo">
                        <img src="public_files/images/payment_gateway/logo-txp-black.png" alt="MultiBank Group"
                             style="height: 100px; margin-top: 5px; margin-left: 5px;">
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">
                        </div>
                    </div>
                    <form action="https://www.multibankfx.com/web/pay/payThunderx?" name='thunderxpay_payment_form'
                          class='multibank-form row' method='post' enctype='' id='thunderxpay_payment_form' target=''
                          autocomplete='off'>
                        <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo1NzowMw=='/>
                        <input type='hidden' name='token'
                               value='$2y$10$SPR64YGz.rvy5YBMMFc6c.kNEwBxRd2QCIwcer/ItHtJb0MJ87EM6'/>
                        <input type='hidden' name='source'
                               value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:56:57] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:59] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:57:01] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:57:03] https://www.multibankfx.com/account/account-funding<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/account-funding/thunderx?web=true'/>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='account_login' class='d-block mb-0'>
                                MT4 Account</label>
                            <input type="text" data-message="MT4 Account  is Required."
                                   data-extra-message="MT4 Account Invalid." data-regex="3{2,3}+\d{6}###66+\d{6}"
                                   class="" name="account_login" $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='space' placeholder='' value=''/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Amount (USD)</label>
                            <input type="text" data-message="Amount in USD is Required."
                                   data-extra-message="Amount in USD is invalid." data-regex="" class="" name="amount"
                                   $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                To be charged in</label>
                            <select class='' data-message='Please select a currency.' data-extra-message=""
                                    data-regex='' name='currency' required>
                                <option value='' selected='selected' class=''>Please select</option>
                                <option value='KHR' class=' '>KHR</option>
                                <option value='LAK' class=' '>LAK</option>
                                <option value='MMK' class=' '>MMK</option>
                                <option value='THB' class=' '>THB</option>
                            </select></div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Bank Account Number</label>
                            <input type="text" data-message="Bank Account Number is Required." data-extra-message=""
                                   data-regex="" class="" name="bank_account_number" $field_id_code placeholder=""
                                   required value=""/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Bank Name</label>
                            <select class='' data-message='Bank Name is required.' data-extra-message="" data-regex=''
                                    name='bank_code' required>
                                <option value='' selected='selected' class=''>Please select bank</option>
                                <option value='SC' class=' '>Standard Chartered (Thai)</option>
                                <option value='GSB' class=' '>Government Savings Bank</option>
                                <option value='TMB' class=' '>TMB Bank</option>
                                <option value='UOB' class=' '>United Overseas Bank (Thai)</option>
                                <option value='CIMB' class=' '>CIMB Thai Bank</option>
                                <option value='CITI' class=' '>Citibank</option>
                                <option value='TBANK' class=' '>Thanachart Bank</option>
                                <option value='KBANK' class=' '>Kasikornbank</option>
                                <option value='SCB' class=' '>Siam Commercial Bank</option>
                                <option value='BBL' class=' '>Bangkok Bank</option>
                                <option value='BAY' class=' '>Bank of Ayudhya (Krungsri)</option>
                                <option value='ABA' class=' '>ABA Bank (Cambodia)</option>
                                <option value='FNB' class=' '>FNB (South Africa)</option>
                                <option value='KBZ' class=' '>Kanbawza Bank (Myanmar)</option>
                                <option value='KTB' class=' '>Krungthai Bank</option>
                                <option value='BCEL' class=' '>BCEL</option>
                            </select></div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Name</label>
                            <input type="text" data-message="Name is Required." data-extra-message="Name is invalid."
                                   data-regex="" class="" name="name" $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Phone</label>
                            <input type='phone' data-ip_country_code='IN' data-message='Phone is required.'
                                   data-extra-message="Phone is invalid." data-regex='' class='' name='phone'
                                   placeholder='' required value=''/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Email</label>
                            <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid."
                                   data-regex='' class='' name='email' placeholder='' required value=''/>
                        </div>
                        <div class='col-12 col-md-6 name-group input-group'>
                            <label for='' class='d-block mb-0'>
                                Confirm Email</label>
                            <input type='email' data-message='Confirm Email is Required.'
                                   data-extra-message="Emails Mismatched." data-regex='' class='' name='confirm_email'
                                   placeholder='' required value=''/>
                        </div>
                        <button type='submit' class='btn-submit thunderx-btn-submit d-block mt-2'
                                onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                data-cf-modified-e83e302eb96528c22dc1dc70-="">Deposit
                        </button>
                    </form>
                </div>
                <div class="row pl-4 pr-4 pb-2">
                    <h5 class="business-disclaimer business-disclaimer-text font-weight-bold" style="width: 100%;">
                        Transaction Minimum & Maximum Limits</h5>
                    <div class="col-md-3 mb-1 business-disclaimer-text">
                        <b>LAK</b><br/>
                        Min: 200,000<br/>
                        Max: 150,000,000
                    </div>
                    <div class="col-md-3 mb-1 business-disclaimer-text">
                        <b>MMK</b><br/>
                        Min: 50,000<br/>
                        Max: 20,000,000
                    </div>
                    <div class="col-md-3 mb-1 business-disclaimer-text">
                        <b>THB</b><br/>
                        Min: 500<br/>
                        Max: 500,000
                    </div>
                    <div class="col-md-3 mb-1 business-disclaimer-text">
                        <b>KHR</b><br/>
                        Min: 100,000<br/>
                        Max: 60,000,000
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="e83e302eb96528c22dc1dc70-text/javascript"
        src="public_files/static_js/jquery.validate.min.js"></script>
<script type="e83e302eb96528c22dc1dc70-text/javascript"
        src='../../public_files/static_js/payment_gateway/form_validate.js%3Fv=20051901'></script>
<style>
    body {
        background: #343a40;
    }

    .errors {
        color: #f05927;
        font-weight: bold;
    }

    .thunderx-btn-submit {
        background-color: #000000 !important;
        border-color: #000000 !important;
    }

    .business-disclaimer {
        width: 100%;
        margin-top: 10px;
        border-top: #343a40 solid 1px;
    }

    .md-card {
        background: #FFF;
    }

    /*
    .card-title {
    background: #343a40;
    }
    */

    .business-disclaimer-text {
        font-size: 11px;
    }

</style>
<script type="e83e302eb96528c22dc1dc70-text/javascript">
    $(function() {
        var an = urlParams;
        if(typeof(an['account_number' ]) != 'undefined') {
            $('#account_login').val(an['account_number']); 
        }
        $('#thunderxpay_payment_form').validateForm();
    });

</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="e83e302eb96528c22dc1dc70-|49" defer=""></script>
</body>
</html>