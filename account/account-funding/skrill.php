<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Skrill Payment</title>
    <meta name='description' content="Deposit funds into your trading account using Skill">
    <meta property='og:title' content="Skrill Payment">
    <meta property='og:description' content="Deposit funds into your trading account using Skill">
    <link rel='canonical' href="skrill.php">
    <link rel="alternate" href="https://es.multibankfx.com/account/account-funding/skrill" hreflang="es-ES"/>
    <link rel="alternate" href="https://ru.multibankfx.com/account/account-funding/skrill" hreflang="ru-RU"/>
    <link rel="alternate" href="https://ae.multibankfx.com/account/account-funding/skrill" hreflang="en-ae"/>
    <link rel="alternate" href="https://vn.multibankfx.com/account/account-funding/skrill" hreflang="vi-VN"/>
    <link rel="alternate" href="https://id.multibankfx.com/account/account-funding/skrill" hreflang="id-ID"/>
    <link rel="alternate" href="https://mys.multibankfx.com/account/account-funding/skrill" hreflang="ms-MY"/>
    <link rel="alternate" href="https://ph.multibankfx.com/account/account-funding/skrill" hreflang="tl-PH"/>
    <link rel="alternate" href="https://th.multibankfx.com/account/account-funding/skrill" hreflang="th-TH"/>
    <link rel="alternate" href="https://fr.multibankfx.com/account/account-funding/skrill" hreflang="fr-FR"/>
    <link rel="alternate" href="skrill.php" hreflang="x-default"/>
    <link rel="stylesheet" type="text/css" href="public_files/static_css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public_files/static_css/payment_gateway/form_validate.css">
    <script type="cb8c8ef391586875fbd71653-text/javascript"
            src="public_files/static_js/jquery-3.3.1.min.js"></script>
    <style>
        .sup-size {
            color: #FF0000;
        }

        .full-size-box, .btn-submit {
            background: rgb(134, 32, 98);
            background: linear-gradient(135deg, rgba(134, 32, 98, 1) 0%, rgba(91, 35, 84, 1) 100%);
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
    </style>
</head>
<body>
<section class="full-size-box">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-7 mx-auto md-card elevation-1">
                <div class="top-logo card-title">
                    <a class="logo">
                        <img src="public_files/images/payment_gateway/skrill_logo.svg" alt="MultiBank Group"
                             width="220px">
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                        </div>
                    </div>
                    <form action="https://www.multibankfx.com/web/pay/paySkrillMultibank?" name='skrill_payment_form'
                          class='multibank-form row' method='post' enctype='' id='skrill_payment_form' target=''
                          autocomplete='on'>
                        <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo1Njo1Nw=='/>
                        <input type='hidden' name='token'
                               value='$2y$10$hTBRaVXAWVfSCSLXKuYcqOFGFjBUx2d4mHPD19ji2GsBJnG3zSGv6'/>
                        <input type='hidden' name='source'
                               value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:56:53] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:54] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:55] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:57] https://www.multibankfx.com/account/account-funding<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/account-funding/skrill?web=true'/>
                        <div class='col-12 col-lg-6 input-group'>
                            <label for='' class=''>
                                Trading Account Number</label>
                            <input type="text" data-message="Trading Account Number is Required."
                                   data-extra-message="Account Login is Invalid."
                                   data-regex="(^3{2})\d{6}###(^6{2})\d{6}" class="" name="account_login" $field_id_code
                                   placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Email Address</label>
                            <input type='email' data-message='Email is Required.' data-extra-message="" data-regex=''
                                   class='' name='email' placeholder='' required value=''/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                First Name</label>
                            <input type="text" data-message="First Name is Required." data-extra-message=""
                                   data-regex="" class="" name="firstname" $field_id_code placeholder="" required
                                   value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Last Name</label>
                            <input type="text" data-message="Last Name is Required." data-extra-message="" data-regex=""
                                   class="" name="lastname" $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Currency</label>
                            <select class='' data-message='' data-extra-message="" data-regex='' name='currency'
                                    required>
                                <option value='USD' selected='selected' class=''>USD</option>
                                <option value='EUR' class=' '>EUR</option>
                                <option value='GBP' class=' '>GBP</option>
                            </select></div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Deposit Amount</label>
                            <input type="text" data-message="Amount is Required."
                                   data-extra-message="Amount is Invalid." data-regex="" class="" name="amount"
                                   $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='col-12 col-md-6 input-group'>
                            <label for='' class=''>
                                Phone Number</label>
                            <input type="text" data-message="Email is Required." data-extra-message="" data-regex=""
                                   class="" name="phone" $field_id_code placeholder="" required value=""/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='recipient_description' placeholder='' required value='MultiBank FX'/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='detail1_description' placeholder='' value=''/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='logo_url' placeholder='' required
                                   value='https://www.multibankfx.com/public_files/images/common/icons/logo_en.png'/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='payment_methods' placeholder='' required value='pCC'/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='dynamic_descriptor' placeholder='' required value='MultiBank FX'/>
                        </div>
                        <div class='col-12 col-lg-6 input-group d-none d-lg-block'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='spacing' placeholder='' value=''/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='confirmation_note' placeholder='' required
                                   value='Thanks for funding your account.'/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='status_url' placeholder='' required value='mailto:backoffice@multibankfx.com'/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='status_url2' placeholder='' required
                                   value='mailto:Cy.operations@multibankfx.com'/>
                        </div>
                        <div class='d-none'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='language' placeholder='' required value='EN'/>
                        </div>
                        <button type='submit' class='btn-submit'
                                onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                data-cf-modified-cb8c8ef391586875fbd71653-="">Deposit Funds
                        </button>
                    </form>
                    <div class="disclaimer">* Any Funds above £ 1000 (or equivalent in other currencies), the system
                        will take the client to a different page and ask clients to agree for FSCS policy and register
                        an e-mail, please with the FSCS policy and click for next stage.
                    </div>
                    <div class="business-disclaimer">
                        <div class="label">This business is suitable for</div>
                        <div class="logo-group">
                            <img src="public_files/images/payment_gateway/business/dci_logo.png"/>
                            <img src="public_files/images/payment_gateway/business/mastercard_logo.png"/>
                            <img src="public_files/images/payment_gateway/business/amex_logo.png"/>
                            <img src="public_files/images/payment_gateway/business/visa_logo.jpg"/>
                            <img src="public_files/images/payment_gateway/business/jcb_logo.gif"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="cb8c8ef391586875fbd71653-text/javascript"
        src="public_files/static_js/jquery.validate.min.js"></script>
<script type="cb8c8ef391586875fbd71653-text/javascript"
        src="public_files/static_js/payment_gateway/form_validate.js"></script>
<script type="cb8c8ef391586875fbd71653-text/javascript">
    $(function() {
        $('#skrill_payment_form').validateForm();

    });


</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="cb8c8ef391586875fbd71653-|49" defer=""></script>
</body>
</html>