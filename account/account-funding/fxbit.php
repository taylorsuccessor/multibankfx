<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>FXBit Payment Gateway | MultiBank Fx</title>
    <meta name='description' content=".errors{color:rgba(176,18,18,1);}">
    <meta property='og:title' content="FXBit Payment Gateway | MultiBank Fx">
    <meta property='og:description' content=".errors{color:rgba(176,18,18,1);}">
    <link rel='canonical' href="fxbit.php">
    <link rel="alternate" href="https://es.multibankfx.com/account/account-funding/fxbit" hreflang="es-ES"/>
    <link rel="alternate" href="https://ru.multibankfx.com/account/account-funding/fxbit" hreflang="ru-RU"/>
    <link rel="alternate" href="https://ae.multibankfx.com/account/account-funding/fxbit" hreflang="en-ae"/>
    <link rel="alternate" href="https://vn.multibankfx.com/account/account-funding/fxbit" hreflang="vi-VN"/>
    <link rel="alternate" href="https://id.multibankfx.com/account/account-funding/fxbit" hreflang="id-ID"/>
    <link rel="alternate" href="https://mys.multibankfx.com/account/account-funding/fxbit" hreflang="ms-MY"/>
    <link rel="alternate" href="https://ph.multibankfx.com/account/account-funding/fxbit" hreflang="tl-PH"/>
    <link rel="alternate" href="https://th.multibankfx.com/account/account-funding/fxbit" hreflang="th-TH"/>
    <link rel="alternate" href="https://fr.multibankfx.com/account/account-funding/fxbit" hreflang="fr-FR"/>
    <link rel="alternate" href="fxbit.php" hreflang="x-default"/>
    <link rel="stylesheet" type="text/css" href="/multibankfx/public_files/static_css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="/multibankfx/public_files/static_css/payment_gateway/form_validate.css">
    <link rel="stylesheet" type="text/css" href="/multibankfx/public_files/static_css/font-awesome.min.css">
    <script type="62d2d0d9881871a18debc942-text/javascript"
            src="/multibankfx/public_files/static_js/jquery.ba-throttle-debounce.js"></script>
    <script type="62d2d0d9881871a18debc942-text/javascript"
            src="/multibankfx/public_files/static_js/jquery-3.3.1.min.js"></script>
    <style>
        .top-logo {
            display: flex;
            justify-content: space-between;
        }

        .sup-size {
            color: #FF0000;
        }

        .full-size-box, .btn-submit {
            background: rgba(176, 18, 18, 1);
            background: linear-gradient(135deg, rgba(176, 18, 18, 1) 0%, rgba(137, 0, 0, 1) 100%);
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
                        <img src="/multibankfx/public_files/images/payment_gateway/fxbit_logo" alt="MultiBank Group"
                             width="220px">
                    </a>
                    <div class="timer" style="float:right;display:none;">
                        <div></div>
                        <div id="timer">
                            <div id="minutes"></div>
                            <div id="space">:</div>
                            <div id="seconds"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="payment_form_container" id="payment_form_container">
                        <div class="row">
                            <div class="col-12 m-3">
                            </div>
                        </div>
                        <form action="https://www.multibankfx.com/web/pay/payFXBit?" name='fx_bit_payment_form'
                              class='multibank-form row mx-0' method='post' enctype='' id='fx_bit_payment_form'
                              target='' autocomplete='on'>
                            <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo1Njo1OQ=='/>
                            <input type='hidden' name='token'
                                   value='$2y$10$K2IaZe7W3P3Htl59LzkFo..xUzBNubwsslzesuO1cMaPZ0gZ9Yyjy'/>
                            <input type='hidden' name='source'
                                   value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:56:55] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:56] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:56:57] https://www.multibankfx.com/account/account-funding<br/><br/>[2020-06-27 02:57:00] https://www.multibankfx.com/account/account-funding<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/account-funding/fxbit?web=true'/>
                            <div class='col-12 col-md-6 input-group'>
                                <label for='' class=''>
                                    Trading Account Number</label>
                                <input type="text" data-message="Trading Account Number is Required."
                                       data-extra-message="Trading Account Number Invalid."
                                       data-regex="8{2,3}+\d{6}###4{2,3}+\d{6}###86+\d{6}###33+\d{6}###6{2,3}+\d{6}"
                                       class="" name="account_login" $field_id_code placeholder="" required value=""/>
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
                                    Email</label>
                                <input type='email' data-message='Email is Required.'
                                       data-extra-message="Email is Invalid." data-regex='' class='' name='email'
                                       placeholder='' required value=''/>
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
                                        data-extra-message="Currency is Invalid." data-regex='' name='currency'
                                        required>
                                    <option value='BTC' selected='selected' class=''>BTC</option>
                                    <option value='ETH' class=' '>ETH</option>
                                    <option value='USDT' class=' '>USDT</option>
                                    <option value='USDT_ERC20' class=' '>USDT ERC20</option>
                                </select></div>
                            <div class='col-12 col-md-6 input-group exchanged-amount-group disabled'>
                                <label for='' class=''>
                                    Amount (BTC)</label>
                                <input type="text" data-message="" data-extra-message="" data-regex=""
                                       class="h2p-currency" name="exchanged_amount" $field_id_code placeholder=""
                                       disabled value=""/>
                            </div>
                            <button type='submit' class='btn-submit fxbit-btn-submit'
                                    onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                    data-cf-modified-62d2d0d9881871a18debc942-="">Deposit
                            </button>
                        </form>
                        <div>
                            <ol class="mt-4" style="line-height: 1.5; font-size: 0.85rem; padding-left: 15px;">
                                <li>Make sure you deposit the same amount and currency to match your order.</li>
                                <li>Redeposit using the same order id should not be allowed. One order Id can only
                                    deposit once.
                                </li>
                                <li>After deposit to the address above, an entire network node confirmation is required.
                                    Payment will be received after 3 network confirmations; Coin Withdrawal is permitted
                                    after 6 network confirmations.
                                </li>
                                <li>Any deposit smaller than the permitted minimum amount will not be credited and is
                                    irrecoverable.
                                </li>
                                <li>Deposit address will not be frequently changed, please make sure you copy the
                                    address assigned to your deposit
                                </li>
                                <li>Ensure the security of your computer and browser to avoid information tampering or
                                    leak.
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="payment_qr_container" id="payment_qr_container">
                        <div class="billing-info">
                            <div><strong>Billing Currency: </strong><span class="bill-currency"></span></div>
                            <div><strong>Billing Price: </strong><span class="bill-price"></span></div>
                        </div>
                        <div>
                            <img id="payment_qr_code"/>
                            <div style="margin-top: 10px;">
                                <input id="payment_address" readonly/>
                                <button id="btn_copy_address"><i class="fa fa-clipboard" alt="Copy to clipboard"></i>
                                </button>
                            </div>
                        </div>
                        <div class="notes">
                            <ol class="mt-4" style="line-height: 1.5; font-size: 0.85rem; padding-left: 25px;">
                                <li>Please complete payment within remaining time shown above, otherwise create a new
                                    deposit request by filling the deposit form again and follow same procedure.
                                </li>
                                <li>Please keep a copy/screenshot of the transfer for possible further verification.
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="business-disclaimer">
                        <img src="/multibankfx/public_files/images/payment_gateway/bitcoin.png"
                             style="width: 100px;height: auto;float: right; ">
                        <img src="/multibankfx/public_files/images/payment_gateway/business/etherium.png"
                             style="width: 100px;height: auto;float: right;padding-left:10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="62d2d0d9881871a18debc942-text/javascript">
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
var currentCurrency = 'BTC';
var exchangeRate = {
    BTC: null,
    ETH: null,
    USDT: null,
    USDT_ERC20:null,
};

// var url_string = window.location.href;
// var url = getUrlVars();
var publicAddress = getUrlVars()["pa"];
var billedPrice = getUrlVars()['amount'];
var billedCurrency = getUrlVars()['currency'];

if (publicAddress != null && billedPrice != null && billedCurrency != null) {
    var walletType = '';
    if (billedCurrency == 'BTC') {
        walletType = 'bitcoin';
    } else if (billedCurrency == 'ETH') {
        walletType = 'ethereum';
    } else if (billedCurrency == 'USDT' || billedCurrency == 'USDT_ERC20') {
        walletType = 'tether';
    }
    $('.bill-currency').text(billedCurrency);
    $('.bill-price').text(billedPrice);
    $('#payment_qr_code').attr('src', 'https://chart.apis.google.com/chart?cht=qr&chs=250x250&chl=' + publicAddress);
    $('#payment_address').val(publicAddress);
    $('#btn_copy_address').on('click', function() {
        var copyText = document.getElementById("payment_address");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    })
    $('#payment_qr_container').css('display', 'flex');
    $('.timer').show();
    triggerCountdown();
} else {
    $('#payment_form_container').css('display', 'block');
}
console.log(publicAddress);

$(function() {
    $('.name-group').append('<div class="col-12 text-right px-0" style="font-size: 12px;">*As per bank account/ID</div>');
    $('.exchanged-amount-group').append('<div class="col-12 text-right px-0 exchanged-amount-notification" style="font-size: 12px;">*BTC amount is for reference only</div>');

    $('select[name="currency"]').on('change', function() {
        currentCurrency = this.value;
        $('input[name="exchanged_amount"]').val(($('input[name="amount"]').val() / exchangeRate[currentCurrency]).toFixed(8));
        $('.exchanged-amount-notification').text('*' + currentCurrency + ' amount is for reference only')
        $('.exchanged-amount-group label').text('Amount (' + currentCurrency + ')')
    });

    $('input[name="amount"]').on('input', $.debounce(250, function(event) {
        if (exchangeRate[currentCurrency] != null) {
            $('input[name="exchanged_amount"]').val(parseFloat(event.target.value / exchangeRate[currentCurrency]).toFixed(8));
        }
    }));

    getRate();
});

function getRate() {
    $.ajax({
        type: "GET",
        url: "/api/getFXBitExchangeRate?from=USD&to[]=BTC&to[]=ETH&to[]=USDT",
        success: function(data) {
            var response = JSON.parse(data)['response'];
            if (response['status'] == 200) {
                exchangeRate = response['rates'];
                exchangeRate['USDT_ERC20'] = exchangeRate['USDT'];

                if ($('input[name="amount"]').val() !== '') {
                    $('input[name="exchanged_amount"]').val(parseFloat($('input[name="amount"]').val() / exchangeRate[currency]).toFixed(8));
                }
            } else {
                $('input[name="exchanged_amount"]').val('Not Available');
            }
        }
    })
}

$(function(){
    let amount = getUrlVars()['amount'];
    let intregex = RegExp('^[0-9.]{1,8}$');
    if(!!amount && intregex.test(amount)){
        $('input[name="amount"]').val(amount);
    }
});

/** JS Timer **/
function triggerCountdown(){
    // Add 10 Minutes as End Time
    var timer_status = true;
    var endTime = new Date();
    endTime.setMinutes(endTime.getMinutes() + 10);
    if(window.Worker){
        var myworker = new Worker('/public_files/static_js/payment_gateway/timer_worker.js');
        myworker.postMessage({ "endtime": endTime  });
        myworker.addEventListener('message',function(e){
            let workermsg =  e.data;
            // If true remove QR Code from Display
            if(!workermsg){
                timer_status = false;
                let replacehtml = "<span> Payment Service timeout. Please try again.</span> <span ><a class='text-white' href='fxbit.html'> Fxbit Deposit</a></span>";
                $('#payment_qr_container').html(replacehtml);
            }
        });
        
function makeTimer(endTime) {
	endTime = (Date.parse(endTime) / 1000);
	var now = new Date();
	now = (Date.parse(now) / 1000);
	var timeLeft = endTime - now;
	var days = Math.floor(timeLeft / 86400); 
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
	if (hours < "10") { hours = "0" + hours; }
	if (minutes < "10") { minutes = "0" + minutes; }
	if (seconds < "10") { seconds = "0" + seconds; }
    // $("#minutes").html(minutes + "<span>Minutes</span>");
    // $("#seconds").html(seconds + "<span>Seconds</span>");
	$("#minutes").html(minutes + "");
	$("#seconds").html(seconds + "");

}
    setInterval(function() {   if(timer_status){ makeTimer(endTime); } }, 1000);
    }
    
};


</script>
<script type="62d2d0d9881871a18debc942-text/javascript"
        src="/multibankfx/public_files/static_js/jquery.validate.min.js"></script>
<script type="62d2d0d9881871a18debc942-text/javascript"
        src="/multibankfx/public_files/static_js/payment_gateway/form_validate.js"></script>
<script type="62d2d0d9881871a18debc942-text/javascript">
    $(function() {
        $('#fx_bit_payment_form').validateForm();

    });


</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="62d2d0d9881871a18debc942-|49" defer=""></script>
</body>
</html>