<!DOCTYPE html>
<html lang='en'>

<?php include_from_root('website_template/head.php');?>
<body>
    <?php include_from_root('website_template/header_and_menu.php');?>
    <style>
        .nav-menu-hamburger,
        .nav-menu-mymex {
            width: 35px;
            height: 35px;

            display: flex;
            justify-content: center;
            align-items: center;

            margin: 5px 10px 5px 5px;

            background-color: #000333;
            border-radius: 6px;
        }

        .nav-menu-hamburger .ti-menu {
            transform: translateY(-1px);
        }

        .nav-menu-mymex {
            margin: 5px;
        }

        .nav-menu-mymex img {
            width: 25px;
            height: auto;
        }

        @media screen and (max-width: 1199px) {
            .header-bottom-left-container {
                line-height: inital !important;

                display: flex;
                align-items: center;
            }

            .header-boottom-logo {
                height: auto;
            }

            .header-bottom-left-container a {
                display: flex;
                align-items: center;
            }

            .header-bottom-left-container .header-logo {
                height: 30px;
                padding-left: 15px;
            }
        }
    </style>

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div class="main-container">
        <section class="flex-center page-top-banner"><img src="/public_files/images/accounts_funding/account_withdrawal_top_banner.jpg" alt="Withdrawals banner" class="mex-img-cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <h1 class="mex-h1 text-left"><?php translate('WITHDRAWALS'); ?> </h1>
                        <div class="mex-content mex-m-b-30"><?php translate('MultiBank provides you with easy and instant access to your
                            money.'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p0 table-background plants">
            <div class="container">
                <div class="row withdrawals-tabs mex-m-t-80 mex-m-b-80">
                    <div class="col-12">
                        <ul class="tablist col-12 d-inline-block" role="tablist">
                            <li class="tab-title active font-type-cap" role="presentation">
                                <a href="withdrawals.html#withdrawals" class="font-24" aria-controls="withdrawals" role="tab" data-toggle="tab"><?php translate('WITHDRAWAL OPTIONS'); ?></a>
                            </li>
                            <li class="tab-title font-type-cap" role="presentation">
                                <a href="account-funding.php" class="font-24"><?php translate('DEPOSIT OPTIONS'); ?></a>
                            </li>
                        </ul>
                        <div class="mex-h2 text-center text-1e32a3 mex-m-b-20" style="margin:20px 0 !important"><?php translate('CHOOSE YOUR REGULATOR'); ?>
                        </div>
                        <div class="tab-content withdraw-tab">
                            <div role="tabpanel" class="tab-pane active" id="withdrawals">
                                <div class="col-12">
                                    <div class="mex-h2 text-fff withdraw-header mb-1"><?php translate('MEX EXCHANGE (ASIC)'); ?></div>
                                    <div class="st-slide-content">
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table table-striped mex-table mex-has-type text-center table-easy">
                                                    <thead>
                                                        <tr>
                                                            <th class=" text-center"><?php translate('Withdrawal Methods'); ?></th>
                                                            <th class=" text-center"><?php translate('Base Currencies'); ?></th>
                                                            <th class=" text-center"><?php translate('Withdrawal'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-tbody">
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/bank_wire.jpg" alt="Bank Wire"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_bank_transfer.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?> </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/card.jpg" alt="Master and Viese"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_bank_transfer.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/skrill.jpg" alt="Skrill"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal__gateway_skrill.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/paytrust.jpg">
                                                            </td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_paytrust.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/neteller.jpg" alt="Netrller"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_neteller_pay.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/Perfect&#32;Money1.png" alt="Perfect Money"></td>
                                                            <td>USD,EUR</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal__gateway_perfect_money.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mex-h2 text-fff withdraw-header mb-1"> <?php translate('MULTIBANK FX (FSC)'); ?></div>
                                    <div class="st-slide-content">
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table table-striped mex-table mex-has-type text-center table-easy">
                                                    <thead>
                                                        <tr>
                                                            <th class=" text-center"><?php translate('Withdrawal Methods'); ?></th>
                                                            <th class=" text-center"><?php translate('Base Currencies'); ?></th>
                                                            <th class=" text-center"><?php translate('Withdrawal'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-tbody">
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/bank_wire.jpg" data-toggle="modal" data-target="#modal_funds_deposit_multibank_fx_ltd" alt="Bank Wire"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_bank_transfer.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/skrill.jpg" alt="Skrill"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal__gateway_skrill.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/neteller.jpg" alt="Netrller"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_neteller_pay.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/card.jpg" alt="Master and Viese"></td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal__gateway_mastercard.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/paytrust.jpg">
                                                            </td>
                                                            <td>USD, GBP, EUR, JPY, CHF, AUD, NZD, CAD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_paytrust.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/Perfect&#32;Money1.png" alt="Perfect Money"></td>
                                                            <td>USD,EUR</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal__gateway_perfect_money.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/payment_gateway/fxbit_logo.png" alt="FXBit"></td>
                                                            <td>BTC, ETH, USDT</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_fxbit.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/payment_gateway/globepay_logo.png" alt="GlobePay"></td>
                                                            <td>USD</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal_gateway_globepay.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="/public_files/images/accounts_funding/payment_icons/thunderx.png%3Ft=1">
                                                            </td>
                                                            <td>KHR, LAK, MMK, THB</td>
                                                            <td>
                                                                <a href="open-forex-account/withdrawal__gateway_thunderxpay.php" target="_blank"><?php translate('REQUEST A WITHDRAWAL'); ?></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><?php translate('*subject to terms and conditions of MultiBank Group'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mex-m-t-50 ">
                    <div class="col-12  bg-white mex-p-30 clear-float">
                        <div class="mex-h2 text-center text-1e32a3 mex-m-b-40">
                        <?php translate('SUBMIT A WITHDRAWAL REQUEST'); ?>
                        </div>
                        <div class="mex-content text-left arabic-text-right">
                            <p><strong><?php translate('Withdraw via MyMultiBank:'); ?></strong> <?php translate('To withdraw funds from your account simply submit
                                your withdrawal request online using the MyMultiBank account area.'); ?></p>
                            <p><strong><?php translate('Withdraw via Email:'); ?></strong> <?php translate('Alternatively, please send us an email to'); ?> <a class="text-1e32a3" href="cdn-cgi/l/email-protection.html#394e504d515d4b584e79544c554d505b5857525f41175a5654"><span class="__cf_email__" data-cfemail="3d4a544955594f5c4a7d50485149545f5c53565b45135e5250">[email&#160;protected]</span></a>
                            <?php translate('from the email address associated with your account and our Customer Support Department will
                                assist you with your withdrawal request.'); ?> </p>
                        </div>
                    </div>
                </div>
                <div class="row mex-m-t-50 text-center">
                    <div class="col-12  clear-float">
                        <div class="mex-h2 text-center text-1e32a3 mex-m-b-20">
                        <?php translate('FUND WITHDRAWAL FORM'); ?>
                        </div>
                        <div class="mex-content text-center mex-m-b-40">
                        <?php translate('Choose your company:'); ?>
                        </div>
                    </div>
                    <div class="col-12  bg-white mex-p-t-30 mex-p-b-30 clear-float  mex-m-b-30 withdrawal-download">
                        <div class="row">

                            <div class="col-lg-6 col-md-12 mb-sm-24 text-center p0">
                                <div class="mex-h3 mex-m-b-15">
                                    MEX EXCHANGE
                                </div>
                                <a href="/public_files/images/documents/pdf/withdrawal-forms/MEX_Exchange_Fund_Withdrawal_Form.pdf" class="btn btn-mex" target="_blank"><?php translate('DOWNLOAD'); ?></a>
                            </div>
                            <div class="col-lg-6 col-d-12 mb-sm-24 text-center p0">
                                <div class="mex-h3 mex-m-b-15">
                                    MultiBank FX International
                                </div>
                                <a href="/public_files/images/documents/pdf/withdrawal-forms/Multibak_FX_Fund_Withdrawal_Request.pdf" class="btn btn-mex" target="_blank"><?php translate('DOWNLOAD'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .grapesjs-editable-field-item[data-grapesjs-field="field_component_01"][data-grapesjs-delta="0"] * {
                box-sizing: border-box;
            }

            div.div {
                padding-top: 5px;
                padding-right: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                min-height: 25px;
            }

            .withdraw-tab {
                margin: 25px 0 0 0;
            }

            .withdraw-header {
                font-size: 24px;
                line-height: 1.2;
                padding: 10px 48px 10px 10px;
            }

            .withdraw-header::after {
                font-size: 24px;
            }

            .withdraw-header {
                position: relative;
                background-color: #1e32a3;
                cursor: pointer;
                padding: 21px 30px;
                font-size: 25px;
                margin: 0 0 27px 0 !important;
            }

            .withdraw-header::after {
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
                font-size: 30px;
                content: "\e64b";
                font-family: 'themify';
                speak: none;
                font-style: normal;
                font-weight: 400;
                font-variant: normal;
                text-transform: none;
                transition-duration: 0.3s;
            }

            .withdraw-header.active:after {
                transform: translateY(-50%) rotate(180deg);
            }

            .st-slide-content {
                display: none;
                margin-bottom: 40px;
            }

            .mex-table thead {
                background: #000;
            }

            @media only screen and (max-width: 640px) {
                .withdraw-header {
                    padding: 15px 13px;
                    font-size: 17px;
                }

                .withdraw-header::after {
                    font-size: 15px;
                }

                .withdraw-tab .table>thead>tr>th {
                    font-size: 14px;
                }
            }
        </style>
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="159ad7768bd13813ab411a2b-text/javascript">
            $(function() {
                $('.withdraw-header').click(function() {
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).next().slideUp("slow");
                    } else {
                        $('.withdraw-header.active').each(function() {
                            $(this).next().slideUp("slow");
                            $(this).removeClass('active');
                        });

                        $(this).addClass('active');
                        $(this).next().slideDown("slow");
                    }

                });
            });
        </script>
        <?php include_from_root('website_template/choose_where_to.php');?>
    </div>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        $(function() {
            //icons we need
            var icons = [
                'ic_why_multibank',
                'ic_security_of_funds',
                'ic_our_regulations',
                'ic_our_products',
                'ic_become_an_ib',
                'ic_live_chat_support',
                'ic_bonus_programs',
                'ic_trading_tools',
                'ic_compare_our_trading_platforms',
                'ic_download_mt4',
                'ic_partnership_programs',
                'ic_mymultibank_account_panel'
            ];
            //inject them
            whereToGoItem.injectIcons('.target-icon', icons);
        });
    </script>
    <div class="cc-country-selector">
        <div class="cc-country-selector--overlay" onclick="if (!window.__cfRLUnblockHandlers) return false; closeCountrySelectionDialog()" data-cf-modified-159ad7768bd13813ab411a2b-=""></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 mx-auto cc-country-selector--box">
                    <div class="mex-h2 mex-m-b-10 text-center">Select Your Card Issuer Country</div>
                    <select class="cc-country-selector--select">
                        <option value="">Select Country</option>
                        <option value="AF" selected="selected">AFGHANISTAN</option>
                        <option value="AL">ALBANIA</option>
                        <option value="DZ">ALGERIA</option>
                        <option value="AS">AMERICAN SAMOA</option>
                        <option value="AD">ANDORRA</option>
                        <option value="AO">ANGOLA</option>
                        <option value="AI">ANGUILLA</option>
                        <option value="AQ">ANTARCTICA</option>
                        <option value="AG">ANTIGUA AND BARBUDA</option>
                        <option value="AR">ARGENTINA</option>
                        <option value="AM">ARMENIA</option>
                        <option value="AW">ARUBA</option>
                        <option value="AU">AUSTRALIA</option>
                        <option value="AT">AUSTRIA</option>
                        <option value="AZ">AZERBAIJAN</option>
                        <option value="BS">BAHAMAS</option>
                        <option value="BH">BAHRAIN</option>
                        <option value="BD">BANGLADESH</option>
                        <option value="BB">BARBADOS</option>
                        <option value="BY">BELARUS</option>
                        <option value="BE">BELGIUM</option>
                        <option value="BZ">BELIZE</option>
                        <option value="BJ">BENIN</option>
                        <option value="BM">BERMUDA</option>
                        <option value="BT">BHUTAN</option>
                        <option value="BO">BOLIVIA</option>
                        <option value="BA">BOSNIA AND HERZEGOVINA</option>
                        <option value="BW">BOTSWANA</option>
                        <option value="BV">BOUVET ISLAND</option>
                        <option value="BR">BRAZIL</option>
                        <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
                        <option value="BN">BRUNEI DARUSSALAM</option>
                        <option value="BG">BULGARIA</option>
                        <option value="BF">BURKINA FASO</option>
                        <option value="BI">BURUNDI</option>
                        <option value="KH">CAMBODIA</option>
                        <option value="CM">CAMEROON</option>
                        <option value="CA">CANADA</option>
                        <option value="CV">CAPE VERDE</option>
                        <option value="KY">CAYMAN ISLANDS</option>
                        <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
                        <option value="TD">CHAD</option>
                        <option value="CL">CHILE</option>
                        <option value="CN">CHINA</option>
                        <option value="CX">CHRISTMAS ISLAND</option>
                        <option value="CC">COCOS (KEELING) ISLANDS</option>
                        <option value="CO">COLOMBIA</option>
                        <option value="KM">COMOROS</option>
                        <option value="CG">CONGO</option>
                        <option value="CD">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                        <option value="CK">COOK ISLANDS</option>
                        <option value="CR">COSTA RICA</option>
                        <option value="CI">COTE D'IVOIRE</option>
                        <option value="HR">CROATIA</option>
                        <option value="CU">CUBA</option>
                        <option value="CY">CYPRUS</option>
                        <option value="CZ">CZECH REPUBLIC</option>
                        <option value="DK">DENMARK</option>
                        <option value="DJ">DJIBOUTI</option>
                        <option value="DM">DOMINICA</option>
                        <option value="DO">DOMINICAN REPUBLIC</option>
                        <option value="EC">ECUADOR</option>
                        <option value="EG">EGYPT</option>
                        <option value="SV">EL SALVADOR</option>
                        <option value="GQ">EQUATORIAL GUINEA</option>
                        <option value="ER">ERITREA</option>
                        <option value="EE">ESTONIA</option>
                        <option value="ET">ETHIOPIA</option>
                        <option value="FK">FALKLAND ISLANDS (MALVINAS)</option>
                        <option value="FO">FAROE ISLANDS</option>
                        <option value="FJ">FIJI</option>
                        <option value="FI">FINLAND</option>
                        <option value="FR">FRANCE</option>
                        <option value="GF">FRENCH GUIANA</option>
                        <option value="PF">FRENCH POLYNESIA</option>
                        <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
                        <option value="GA">GABON</option>
                        <option value="GM">GAMBIA</option>
                        <option value="GE">GEORGIA</option>
                        <option value="DE">GERMANY</option>
                        <option value="GH">GHANA</option>
                        <option value="GI">GIBRALTAR</option>
                        <option value="GR">GREECE</option>
                        <option value="GL">GREENLAND</option>
                        <option value="GD">GRENADA</option>
                        <option value="GP">GUADELOUPE</option>
                        <option value="GU">GUAM</option>
                        <option value="GT">GUATEMALA</option>
                        <option value="GN">GUINEA</option>
                        <option value="GW">GUINEA-BISSAU</option>
                        <option value="GY">GUYANA</option>
                        <option value="HT">HAITI</option>
                        <option value="HM">HEARD ISLAND AND MCDONALD ISLANDS</option>
                        <option value="VA">HOLY SEE (VATICAN CITY STATE)</option>
                        <option value="HN">HONDURAS</option>
                        <option value="HK">HONG KONG</option>
                        <option value="HU">HUNGARY</option>
                        <option value="IS">ICELAND</option>
                        <option value="IN">INDIA</option>
                        <option value="ID">INDONESIA</option>
                        <option value="IR">IRAN, ISLAMIC REPUBLIC OF</option>
                        <option value="IQ">IRAQ</option>
                        <option value="IE">IRELAND</option>
                        <option value="IL">ISRAEL</option>
                        <option value="IT">ITALY</option>
                        <option value="JM">JAMAICA</option>
                        <option value="JP">JAPAN</option>
                        <option value="JO">JORDAN</option>
                        <option value="KZ">KAZAKHSTAN</option>
                        <option value="KE">KENYA</option>
                        <option value="KI">KIRIBATI</option>
                        <option value="KP">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                        <option value="KR">KOREA, REPUBLIC OF</option>
                        <option value="KW">KUWAIT</option>
                        <option value="KG">KYRGYZSTAN</option>
                        <option value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                        <option value="LV">LATVIA</option>
                        <option value="LB">LEBANON</option>
                        <option value="LS">LESOTHO</option>
                        <option value="LR">LIBERIA</option>
                        <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
                        <option value="LI">LIECHTENSTEIN</option>
                        <option value="LT">LITHUANIA</option>
                        <option value="LU">LUXEMBOURG</option>
                        <option value="MO">MACAO</option>
                        <option value="MK">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                        <option value="MG">MADAGASCAR</option>
                        <option value="MW">MALAWI</option>
                        <option value="MY">MALAYSIA</option>
                        <option value="MV">MALDIVES</option>
                        <option value="ML">MALI</option>
                        <option value="MT">MALTA</option>
                        <option value="MH">MARSHALL ISLANDS</option>
                        <option value="MQ">MARTINIQUE</option>
                        <option value="MR">MAURITANIA</option>
                        <option value="MU">MAURITIUS</option>
                        <option value="YT">MAYOTTE</option>
                        <option value="MX">MEXICO</option>
                        <option value="FM">MICRONESIA, FEDERATED STATES OF</option>
                        <option value="MD">MOLDOVA, REPUBLIC OF</option>
                        <option value="MC">MONACO</option>
                        <option value="MN">MONGOLIA</option>
                        <option value="ME">MONTENEGRO</option>
                        <option value="MS">MONTSERRAT</option>
                        <option value="MA">MOROCCO</option>
                        <option value="MZ">MOZAMBIQUE</option>
                        <option value="MM">MYANMAR</option>
                        <option value="NA">NAMIBIA</option>
                        <option value="NR">NAURU</option>
                        <option value="NP">NEPAL</option>
                        <option value="NL">NETHERLANDS</option>
                        <option value="AN">NETHERLANDS ANTILLES</option>
                        <option value="NC">NEW CALEDONIA</option>
                        <option value="NZ">NEW ZEALAND</option>
                        <option value="NI">NICARAGUA</option>
                        <option value="NE">NIGER</option>
                        <option value="NG">NIGERIA</option>
                        <option value="NU">NIUE</option>
                        <option value="NF">NORFOLK ISLAND</option>
                        <option value="MP">NORTHERN MARIANA ISLANDS</option>
                        <option value="NO">NORWAY</option>
                        <option value="OM">OMAN</option>
                        <option value="PK">PAKISTAN</option>
                        <option value="PW">PALAU</option>
                        <option value="PS">PALESTINE, STATE OF</option>
                        <option value="PA">PANAMA</option>
                        <option value="PG">PAPUA NEW GUINEA</option>
                        <option value="PY">PARAGUAY</option>
                        <option value="PE">PERU</option>
                        <option value="PH">PHILIPPINES</option>
                        <option value="PN">PITCAIRN</option>
                        <option value="PL">POLAND</option>
                        <option value="PT">PORTUGAL</option>
                        <option value="PR">PUERTO RICO</option>
                        <option value="QA">QATAR</option>
                        <option value="RE">REUNION</option>
                        <option value="RO">ROMANIA</option>
                        <option value="RU">RUSSIAN FEDERATION</option>
                        <option value="RW">RWANDA</option>
                        <option value="SH">SAINT HELENA</option>
                        <option value="KN">SAINT KITTS AND NEVIS</option>
                        <option value="LC">SAINT LUCIA</option>
                        <option value="PM">SAINT PIERRE AND MIQUELON</option>
                        <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
                        <option value="WS">SAMOA</option>
                        <option value="SM">SAN MARINO</option>
                        <option value="ST">SAO TOME AND PRINCIPE</option>
                        <option value="SA">SAUDI ARABIA</option>
                        <option value="SN">SENEGAL</option>
                        <option value="RS">SERBIA</option>
                        <option value="SC">SEYCHELLES</option>
                        <option value="SL">SIERRA LEONE</option>
                        <option value="SG">SINGAPORE</option>
                        <option value="SK">SLOVAKIA</option>
                        <option value="SI">SLOVENIA</option>
                        <option value="SB">SOLOMON ISLANDS</option>
                        <option value="SO">SOMALIA</option>
                        <option value="ZA">SOUTH AFRICA</option>
                        <option value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                        <option value="ES">SPAIN</option>
                        <option value="LK">SRI LANKA</option>
                        <option value="SD">SUDAN</option>
                        <option value="SR">SURINAME</option>
                        <option value="SJ">SVALBARD AND JAN MAYEN</option>
                        <option value="SZ">SWAZILAND</option>
                        <option value="SE">SWEDEN</option>
                        <option value="CH">SWITZERLAND</option>
                        <option value="SY">SYRIAN ARAB REPUBLIC</option>
                        <option value="TW">TAIWAN, PROVINCE OF CHINA</option>
                        <option value="TJ">TAJIKISTAN</option>
                        <option value="TZ">TANZANIA, UNITED REPUBLIC OF</option>
                        <option value="TH">THAILAND</option>
                        <option value="TL">TIMOR-LESTE</option>
                        <option value="TG">TOGO</option>
                        <option value="TK">TOKELAU</option>
                        <option value="TO">TONGA</option>
                        <option value="TT">TRINIDAD AND TOBAGO</option>
                        <option value="TN">TUNISIA</option>
                        <option value="TR">TURKEY</option>
                        <option value="TM">TURKMENISTAN</option>
                        <option value="TC">TURKS AND CAICOS ISLANDS</option>
                        <option value="TV">TUVALU</option>
                        <option value="UG">UGANDA</option>
                        <option value="UA">UKRAINE</option>
                        <option value="AE">UNITED ARAB EMIRATES</option>
                        <option value="GB">UNITED KINGDOM</option>
                        <option value="US">UNITED STATES</option>
                        <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                        <option value="UY">URUGUAY</option>
                        <option value="UZ">UZBEKISTAN</option>
                        <option value="VU">VANUATU</option>
                        <option value="VE">VENEZUELA</option>
                        <option value="VN">VIET NAM</option>
                        <option value="VG">VIRGIN ISLANDS, BRITISH</option>
                        <option value="VI">VIRGIN ISLANDS, U.S.</option>
                        <option value="WF">WALLIS AND FUTUNA</option>
                        <option value="EH">WESTERN SAHARA</option>
                        <option value="YE">YEMEN</option>
                        <option value="ZM">ZAMBIA</option>
                        <option value="ZW">ZIMBABWE</option>
                    </select>
                    <button type="button" class="cc-country-selector--submit--btn" onclick="if (!window.__cfRLUnblockHandlers) return false; redirectCreditCard()" data-cf-modified-159ad7768bd13813ab411a2b-="">Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        const allowedCardCountries = [
            'AU', 'AT', 'BE', 'CN', 'HR', 'CY',
            'CZ', 'DK', 'EE', 'FI', 'FR', 'DE',
            'GR', 'HU', 'IT', 'LV', 'LT', 'LU',
            'MT', 'NL', 'PL', 'PT', 'RO', 'SK',
            'SI', 'ES', 'SE', 'GB', 'VU',
            'BR', 'CO', 'JP', 'MY', 'TH', 'AE', 'VN'
        ];

        function openCountrySelectionDialog() {
            $('.cc-country-selector').css('display', 'flex');
        }

        function closeCountrySelectionDialog() {
            $('.cc-country-selector').css('display', 'none');
        }

        function redirectCreditCard() {
            const country = $('.cc-country-selector--select').val();
            if (allowedCardCountries.includes(country)) {
                window.location.href = "/account/account-funding/inpendium";
            } else {
                window.location.href = "/account/account-funding/wcard";
            }
        }
    </script>
    <style>
        .cc-country-selector {
            width: 100%;
            height: 100%;

            position: fixed;
            top: 0;
            left: 0;

            display: none;
            justify-content: center;
            align-items: center;


            z-index: 99999;
        }

        .cc-country-selector--overlay {
            width: 100%;
            height: 100%;

            position: absolute;
            top: 0;
            left: 0;

            background-color: rgba(0, 0, 0, 0.4);
        }

        .cc-country-selector--box {
            padding: 40px 0;
            background-color: #FFF;
        }

        .cc-country-selector--title {
            font-size: 26px;
        }

        .cc-country-selector--select {
            width: 250px;
            display: block;
            margin: 30px auto;
        }

        .cc-country-selector--submit--btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 0px auto;
            text-transform: uppercase;
            height: 45px;
            background: #1e32a3;
            padding-left: 15px;
            padding-right: 15px;
            color: #FFF;
            line-height: 16px;
        }
    </style>
  <?php include_from_root('website_template/page_footer.php');?>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+12139924748">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#fa9989ba978f968e93989b94919c82d4999597">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-159ad7768bd13813ab411a2b-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/public_files/images/home/sidebar_icon/chat.png" width="50" /> </span>
        </a>
    </div>
    <style type="text/css">
        .slidebar a span.btn {
            padding: 0;
            background: none !important;
            margin: 0 0 3px 0;
        }

        @media screen and (max-width: 640px) {
            .slidebar {
                display: inline-block;
                background: #fff;
                top: inherit;
                bottom: 0;
                width: 100%;
                right: 0;
                padding: 10px 0 5px 0;
                text-align: center;
            }

            .slidebar a {
                display: inline-block;
            }

            .slidebar a span.btn {
                display: inline-block;
                margin: 0 15px;
            }

        }
    </style>
    <style>
        .top-mb-ic {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            padding: 5px;
        }

        .top-mb-ic.red {
            background-color: #CE0B0B;
        }

        .top-mb-ic.blue {
            background-color: #178ECC;
        }

        .top-mb-ic.black {
            background-color: #333;
        }

        .top-mb-ic.dark-blue {
            background-color: #000032;
        }

        .font-16 {
            font-size: 16px !important;
        }

        .font-14 {
            font-size: 14px !important;
        }

        .footer-contact-ic {
            width: 30%;
            height: auto;
        }

        .top-mb-ic img {
            width: 100%;
            height: auto;
        }

        .mb-header-btn:hover .top-mb-text {
            color: #e2a840 !important;
        }

        @media (max-width: 767px) {
            section.contact-us {
                padding: 40px 0 0 0 !important;
            }
        }

        @media (max-width: 400px) {
            .footer-mb-social-media {
                font-size: 20px !important;
            }

            .hide-400 {
                display: none !important;
            }
        }
    </style>
    <div class="modal-box__email-us">
        <div class="container row">
            <div class="col-12 col-md-7 mx-auto bg-white p-4">
                <span class="btn-modal-close fa fa-times"></span>
                <form action="https://www.multibankfx.com/form/contactus?" name='email_us_form' class='multibank-form row mx-0 w-100 new' method='post' enctype='' id='email_us_form' target='' autocomplete='on'>
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OTozNA==' />
                    <input type='hidden' name='token' value='$2y$10$I3wWrsYVC1ZswFhQjNMRg.6JyNF9WznCBsn3oDl.ePJ/MfPUR4D7S' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:31] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:32] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:33] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:34] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/withdrawals?web=true' />
                    <div class='col-12 p-0'>
                        <label for='' class='mex-h3'>
                            EMAIL US</label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none' name='label_title' placeholder='' value='' />
                    </div>
                    <div class='d-none'>
                        <label for='' class='m-0 d-none'>
                        </label>
                        <div class='form-check form-check-inline'><input data-message='Account Type is Required.' data-extra-message="Account type Invalid." class='   ' name='account_type' type='radio' required value='1' checked />
                            <label class='  ' for=''>INDIVIDUAL</label>
                        </div>
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Full Name</label>
                        <input type="text" data-message="Full Name is Required." data-extra-message="Full Name Invalid." data-regex="" class="form-control mb-0" name="name" $field_id_code placeholder="Full Name" required value="" />
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            البريد الإلكتروني</label>
                        <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid." data-regex='' class='form-control mb-0' name='email' placeholder='Email' required value='' />
                    </div>
                    <div class='mex-form-item col-12 p-1 d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <select data-message='Confirm Email is Required.' data-extra-message="Email Mismatched." class='selection-country form-control  mb-0 select_with_country select_with_country' name='country_name' required>
                            <option value='' selected='selected'>Select Country</option>
                            <option data-country_iso_code="AF" data-name='AF' value='AF'>AFGHANISTAN</option>
                            <option data-country_iso_code="AL" data-name='AL' value='AL'>ALBANIA</option>
                            <option data-country_iso_code="DZ" data-name='DZ' value='DZ'>ALGERIA</option>
                            <option data-country_iso_code="AS" data-name='AS' value='AS'>AMERICAN SAMOA</option>
                            <option data-country_iso_code="AD" data-name='AD' value='AD'>ANDORRA</option>
                            <option data-country_iso_code="AO" data-name='AO' value='AO'>ANGOLA</option>
                            <option data-country_iso_code="AI" data-name='AI' value='AI'>ANGUILLA</option>
                            <option data-country_iso_code="AQ" data-name='AQ' value='AQ'>ANTARCTICA</option>
                            <option data-country_iso_code="AG" data-name='AG' value='AG'>ANTIGUA AND BARBUDA</option>
                            <option data-country_iso_code="AR" data-name='AR' value='AR'>ARGENTINA</option>
                            <option data-country_iso_code="AM" data-name='AM' value='AM'>ARMENIA</option>
                            <option data-country_iso_code="AW" data-name='AW' value='AW'>ARUBA</option>
                            <option data-country_iso_code="AU" data-name='AU' value='AU'>AUSTRALIA</option>
                            <option data-country_iso_code="AT" data-name='AT' value='AT'>AUSTRIA</option>
                            <option data-country_iso_code="AZ" data-name='AZ' value='AZ'>AZERBAIJAN</option>
                            <option data-country_iso_code="BS" data-name='BS' value='BS'>BAHAMAS</option>
                            <option data-country_iso_code="BH" data-name='BH' value='BH'>BAHRAIN</option>
                            <option data-country_iso_code="BD" data-name='BD' value='BD'>BANGLADESH</option>
                            <option data-country_iso_code="BB" data-name='BB' value='BB'>BARBADOS</option>
                            <option data-country_iso_code="BY" data-name='BY' value='BY'>BELARUS</option>
                            <option data-country_iso_code="BE" data-name='BE' value='BE'>BELGIUM</option>
                            <option data-country_iso_code="BZ" data-name='BZ' value='BZ'>BELIZE</option>
                            <option data-country_iso_code="BJ" data-name='BJ' value='BJ'>BENIN</option>
                            <option data-country_iso_code="BM" data-name='BM' value='BM'>BERMUDA</option>
                            <option data-country_iso_code="BT" data-name='BT' value='BT'>BHUTAN</option>
                            <option data-country_iso_code="BO" data-name='BO' value='BO'>BOLIVIA</option>
                            <option data-country_iso_code="BA" data-name='BA' value='BA'>BOSNIA AND HERZEGOVINA</option>
                            <option data-country_iso_code="BW" data-name='BW' value='BW'>BOTSWANA</option>
                            <option data-country_iso_code="BV" data-name='BV' value='BV'>BOUVET ISLAND</option>
                            <option data-country_iso_code="BR" data-name='BR' value='BR'>BRAZIL</option>
                            <option data-country_iso_code="IO" data-name='IO' value='IO'>BRITISH INDIAN OCEAN TERRITORY
                            </option>
                            <option data-country_iso_code="BN" data-name='BN' value='BN'>BRUNEI DARUSSALAM</option>
                            <option data-country_iso_code="BG" data-name='BG' value='BG'>BULGARIA</option>
                            <option data-country_iso_code="BF" data-name='BF' value='BF'>BURKINA FASO</option>
                            <option data-country_iso_code="BI" data-name='BI' value='BI'>BURUNDI</option>
                            <option data-country_iso_code="KH" data-name='KH' value='KH'>CAMBODIA</option>
                            <option data-country_iso_code="CM" data-name='CM' value='CM'>CAMEROON</option>
                            <option data-country_iso_code="CA" data-name='CA' value='CA'>CANADA</option>
                            <option data-country_iso_code="CV" data-name='CV' value='CV'>CAPE VERDE</option>
                            <option data-country_iso_code="KY" data-name='KY' value='KY'>CAYMAN ISLANDS</option>
                            <option data-country_iso_code="CF" data-name='CF' value='CF'>CENTRAL AFRICAN REPUBLIC</option>
                            <option data-country_iso_code="TD" data-name='TD' value='TD'>CHAD</option>
                            <option data-country_iso_code="CL" data-name='CL' value='CL'>CHILE</option>
                            <option data-country_iso_code="CN" data-name='CN' value='CN'>CHINA</option>
                            <option data-country_iso_code="CX" data-name='CX' value='CX'>CHRISTMAS ISLAND</option>
                            <option data-country_iso_code="CC" data-name='CC' value='CC'>COCOS (KEELING) ISLANDS</option>
                            <option data-country_iso_code="CO" data-name='CO' value='CO'>COLOMBIA</option>
                            <option data-country_iso_code="KM" data-name='KM' value='KM'>COMOROS</option>
                            <option data-country_iso_code="CG" data-name='CG' value='CG'>CONGO</option>
                            <option data-country_iso_code="CD" data-name='CD' value='CD'>CONGO, THE DEMOCRATIC REPUBLIC OF
                                THE
                            </option>
                            <option data-country_iso_code="CK" data-name='CK' value='CK'>COOK ISLANDS</option>
                            <option data-country_iso_code="CR" data-name='CR' value='CR'>COSTA RICA</option>
                            <option data-country_iso_code="CI" data-name='CI' value='CI'>COTE D'IVOIRE</option>
                            <option data-country_iso_code="HR" data-name='HR' value='HR'>CROATIA</option>
                            <option data-country_iso_code="CU" data-name='CU' value='CU'>CUBA</option>
                            <option data-country_iso_code="CY" data-name='CY' value='CY'>CYPRUS</option>
                            <option data-country_iso_code="CZ" data-name='CZ' value='CZ'>CZECH REPUBLIC</option>
                            <option data-country_iso_code="DK" data-name='DK' value='DK'>DENMARK</option>
                            <option data-country_iso_code="DJ" data-name='DJ' value='DJ'>DJIBOUTI</option>
                            <option data-country_iso_code="DM" data-name='DM' value='DM'>DOMINICA</option>
                            <option data-country_iso_code="DO" data-name='DO' value='DO'>DOMINICAN REPUBLIC</option>
                            <option data-country_iso_code="EC" data-name='EC' value='EC'>ECUADOR</option>
                            <option data-country_iso_code="EG" data-name='EG' value='EG'>EGYPT</option>
                            <option data-country_iso_code="SV" data-name='SV' value='SV'>EL SALVADOR</option>
                            <option data-country_iso_code="GQ" data-name='GQ' value='GQ'>EQUATORIAL GUINEA</option>
                            <option data-country_iso_code="ER" data-name='ER' value='ER'>ERITREA</option>
                            <option data-country_iso_code="EE" data-name='EE' value='EE'>ESTONIA</option>
                            <option data-country_iso_code="ET" data-name='ET' value='ET'>ETHIOPIA</option>
                            <option data-country_iso_code="FK" data-name='FK' value='FK'>FALKLAND ISLANDS (MALVINAS)
                            </option>
                            <option data-country_iso_code="FO" data-name='FO' value='FO'>FAROE ISLANDS</option>
                            <option data-country_iso_code="FJ" data-name='FJ' value='FJ'>FIJI</option>
                            <option data-country_iso_code="FI" data-name='FI' value='FI'>FINLAND</option>
                            <option data-country_iso_code="FR" data-name='FR' value='FR'>FRANCE</option>
                            <option data-country_iso_code="GF" data-name='GF' value='GF'>FRENCH GUIANA</option>
                            <option data-country_iso_code="PF" data-name='PF' value='PF'>FRENCH POLYNESIA</option>
                            <option data-country_iso_code="TF" data-name='TF' value='TF'>FRENCH SOUTHERN TERRITORIES
                            </option>
                            <option data-country_iso_code="GA" data-name='GA' value='GA'>GABON</option>
                            <option data-country_iso_code="GM" data-name='GM' value='GM'>GAMBIA</option>
                            <option data-country_iso_code="GE" data-name='GE' value='GE'>GEORGIA</option>
                            <option data-country_iso_code="DE" data-name='DE' value='DE'>GERMANY</option>
                            <option data-country_iso_code="GH" data-name='GH' value='GH'>GHANA</option>
                            <option data-country_iso_code="GI" data-name='GI' value='GI'>GIBRALTAR</option>
                            <option data-country_iso_code="GR" data-name='GR' value='GR'>GREECE</option>
                            <option data-country_iso_code="GL" data-name='GL' value='GL'>GREENLAND</option>
                            <option data-country_iso_code="GD" data-name='GD' value='GD'>GRENADA</option>
                            <option data-country_iso_code="GP" data-name='GP' value='GP'>GUADELOUPE</option>
                            <option data-country_iso_code="GU" data-name='GU' value='GU'>GUAM</option>
                            <option data-country_iso_code="GT" data-name='GT' value='GT'>GUATEMALA</option>
                            <option data-country_iso_code="GN" data-name='GN' value='GN'>GUINEA</option>
                            <option data-country_iso_code="GW" data-name='GW' value='GW'>GUINEA-BISSAU</option>
                            <option data-country_iso_code="GY" data-name='GY' value='GY'>GUYANA</option>
                            <option data-country_iso_code="HT" data-name='HT' value='HT'>HAITI</option>
                            <option data-country_iso_code="HM" data-name='HM' value='HM'>HEARD ISLAND AND MCDONALD ISLANDS
                            </option>
                            <option data-country_iso_code="VA" data-name='VA' value='VA'>HOLY SEE (VATICAN CITY STATE)
                            </option>
                            <option data-country_iso_code="HN" data-name='HN' value='HN'>HONDURAS</option>
                            <option data-country_iso_code="HK" data-name='HK' value='HK'>HONG KONG</option>
                            <option data-country_iso_code="HU" data-name='HU' value='HU'>HUNGARY</option>
                            <option data-country_iso_code="IS" data-name='IS' value='IS'>ICELAND</option>
                            <option data-country_iso_code="IN" data-name='IN' value='IN'>INDIA</option>
                            <option data-country_iso_code="ID" data-name='ID' value='ID'>INDONESIA</option>
                            <option data-country_iso_code="IR" data-name='IR' value='IR'>IRAN, ISLAMIC REPUBLIC OF</option>
                            <option data-country_iso_code="IQ" data-name='IQ' value='IQ'>IRAQ</option>
                            <option data-country_iso_code="IE" data-name='IE' value='IE'>IRELAND</option>
                            <option data-country_iso_code="IL" data-name='IL' value='IL'>ISRAEL</option>
                            <option data-country_iso_code="IT" data-name='IT' value='IT'>ITALY</option>
                            <option data-country_iso_code="JM" data-name='JM' value='JM'>JAMAICA</option>
                            <option data-country_iso_code="JP" data-name='JP' value='JP'>JAPAN</option>
                            <option data-country_iso_code="JO" data-name='JO' value='JO'>JORDAN</option>
                            <option data-country_iso_code="KZ" data-name='KZ' value='KZ'>KAZAKHSTAN</option>
                            <option data-country_iso_code="KE" data-name='KE' value='KE'>KENYA</option>
                            <option data-country_iso_code="KI" data-name='KI' value='KI'>KIRIBATI</option>
                            <option data-country_iso_code="KP" data-name='KP' value='KP'>KOREA, DEMOCRATIC PEOPLE'S REPUBLIC
                                OF
                            </option>
                            <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF</option>
                            <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                            <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                            <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S DEMOCRATIC REPUBLIC
                            </option>
                            <option data-country_iso_code="LV" data-name='LV' value='LV'>LATVIA</option>
                            <option data-country_iso_code="LB" data-name='LB' value='LB'>LEBANON</option>
                            <option data-country_iso_code="LS" data-name='LS' value='LS'>LESOTHO</option>
                            <option data-country_iso_code="LR" data-name='LR' value='LR'>LIBERIA</option>
                            <option data-country_iso_code="LY" data-name='LY' value='LY'>LIBYAN ARAB JAMAHIRIYA</option>
                            <option data-country_iso_code="LI" data-name='LI' value='LI'>LIECHTENSTEIN</option>
                            <option data-country_iso_code="LT" data-name='LT' value='LT'>LITHUANIA</option>
                            <option data-country_iso_code="LU" data-name='LU' value='LU'>LUXEMBOURG</option>
                            <option data-country_iso_code="MO" data-name='MO' value='MO'>MACAO</option>
                            <option data-country_iso_code="MK" data-name='MK' value='MK'>MACEDONIA, THE FORMER YUGOSLAV
                                REPUBLIC OF
                            </option>
                            <option data-country_iso_code="MG" data-name='MG' value='MG'>MADAGASCAR</option>
                            <option data-country_iso_code="MW" data-name='MW' value='MW'>MALAWI</option>
                            <option data-country_iso_code="MY" data-name='MY' value='MY'>MALAYSIA</option>
                            <option data-country_iso_code="MV" data-name='MV' value='MV'>MALDIVES</option>
                            <option data-country_iso_code="ML" data-name='ML' value='ML'>MALI</option>
                            <option data-country_iso_code="MT" data-name='MT' value='MT'>MALTA</option>
                            <option data-country_iso_code="MH" data-name='MH' value='MH'>MARSHALL ISLANDS</option>
                            <option data-country_iso_code="MQ" data-name='MQ' value='MQ'>MARTINIQUE</option>
                            <option data-country_iso_code="MR" data-name='MR' value='MR'>MAURITANIA</option>
                            <option data-country_iso_code="MU" data-name='MU' value='MU'>MAURITIUS</option>
                            <option data-country_iso_code="YT" data-name='YT' value='YT'>MAYOTTE</option>
                            <option data-country_iso_code="MX" data-name='MX' value='MX'>MEXICO</option>
                            <option data-country_iso_code="FM" data-name='FM' value='FM'>MICRONESIA, FEDERATED STATES OF
                            </option>
                            <option data-country_iso_code="MD" data-name='MD' value='MD'>MOLDOVA, REPUBLIC OF</option>
                            <option data-country_iso_code="MC" data-name='MC' value='MC'>MONACO</option>
                            <option data-country_iso_code="MN" data-name='MN' value='MN'>MONGOLIA</option>
                            <option data-country_iso_code="ME" data-name='ME' value='ME'>MONTENEGRO</option>
                            <option data-country_iso_code="MS" data-name='MS' value='MS'>MONTSERRAT</option>
                            <option data-country_iso_code="MA" data-name='MA' value='MA'>MOROCCO</option>
                            <option data-country_iso_code="MZ" data-name='MZ' value='MZ'>MOZAMBIQUE</option>
                            <option data-country_iso_code="MM" data-name='MM' value='MM'>MYANMAR</option>
                            <option data-country_iso_code="NA" data-name='NA' value='NA'>NAMIBIA</option>
                            <option data-country_iso_code="NR" data-name='NR' value='NR'>NAURU</option>
                            <option data-country_iso_code="NP" data-name='NP' value='NP'>NEPAL</option>
                            <option data-country_iso_code="NL" data-name='NL' value='NL'>NETHERLANDS</option>
                            <option data-country_iso_code="AN" data-name='AN' value='AN'>NETHERLANDS ANTILLES</option>
                            <option data-country_iso_code="NC" data-name='NC' value='NC'>NEW CALEDONIA</option>
                            <option data-country_iso_code="NZ" data-name='NZ' value='NZ'>NEW ZEALAND</option>
                            <option data-country_iso_code="NI" data-name='NI' value='NI'>NICARAGUA</option>
                            <option data-country_iso_code="NE" data-name='NE' value='NE'>NIGER</option>
                            <option data-country_iso_code="NG" data-name='NG' value='NG'>NIGERIA</option>
                            <option data-country_iso_code="NU" data-name='NU' value='NU'>NIUE</option>
                            <option data-country_iso_code="NF" data-name='NF' value='NF'>NORFOLK ISLAND</option>
                            <option data-country_iso_code="MP" data-name='MP' value='MP'>NORTHERN MARIANA ISLANDS</option>
                            <option data-country_iso_code="NO" data-name='NO' value='NO'>NORWAY</option>
                            <option data-country_iso_code="OM" data-name='OM' value='OM'>OMAN</option>
                            <option data-country_iso_code="PK" data-name='PK' value='PK'>PAKISTAN</option>
                            <option data-country_iso_code="PW" data-name='PW' value='PW'>PALAU</option>
                            <option data-country_iso_code="PS" data-name='PS' value='PS'>PALESTINE, STATE OF</option>
                            <option data-country_iso_code="PA" data-name='PA' value='PA'>PANAMA</option>
                            <option data-country_iso_code="PG" data-name='PG' value='PG'>PAPUA NEW GUINEA</option>
                            <option data-country_iso_code="PY" data-name='PY' value='PY'>PARAGUAY</option>
                            <option data-country_iso_code="PE" data-name='PE' value='PE'>PERU</option>
                            <option data-country_iso_code="PH" data-name='PH' value='PH'>PHILIPPINES</option>
                            <option data-country_iso_code="PN" data-name='PN' value='PN'>PITCAIRN</option>
                            <option data-country_iso_code="PL" data-name='PL' value='PL'>POLAND</option>
                            <option data-country_iso_code="PT" data-name='PT' value='PT'>PORTUGAL</option>
                            <option data-country_iso_code="PR" data-name='PR' value='PR'>PUERTO RICO</option>
                            <option data-country_iso_code="QA" data-name='QA' value='QA'>QATAR</option>
                            <option data-country_iso_code="RE" data-name='RE' value='RE'>REUNION</option>
                            <option data-country_iso_code="RO" data-name='RO' value='RO'>ROMANIA</option>
                            <option data-country_iso_code="RU" data-name='RU' value='RU'>RUSSIAN FEDERATION</option>
                            <option data-country_iso_code="RW" data-name='RW' value='RW'>RWANDA</option>
                            <option data-country_iso_code="SH" data-name='SH' value='SH'>SAINT HELENA</option>
                            <option data-country_iso_code="KN" data-name='KN' value='KN'>SAINT KITTS AND NEVIS</option>
                            <option data-country_iso_code="LC" data-name='LC' value='LC'>SAINT LUCIA</option>
                            <option data-country_iso_code="PM" data-name='PM' value='PM'>SAINT PIERRE AND MIQUELON</option>
                            <option data-country_iso_code="VC" data-name='VC' value='VC'>SAINT VINCENT AND THE GRENADINES
                            </option>
                            <option data-country_iso_code="WS" data-name='WS' value='WS'>SAMOA</option>
                            <option data-country_iso_code="SM" data-name='SM' value='SM'>SAN MARINO</option>
                            <option data-country_iso_code="ST" data-name='ST' value='ST'>SAO TOME AND PRINCIPE</option>
                            <option data-country_iso_code="SA" data-name='SA' value='SA'>SAUDI ARABIA</option>
                            <option data-country_iso_code="SN" data-name='SN' value='SN'>SENEGAL</option>
                            <option data-country_iso_code="RS" data-name='RS' value='RS'>SERBIA</option>
                            <option data-country_iso_code="SC" data-name='SC' value='SC'>SEYCHELLES</option>
                            <option data-country_iso_code="SL" data-name='SL' value='SL'>SIERRA LEONE</option>
                            <option data-country_iso_code="SG" data-name='SG' value='SG'>SINGAPORE</option>
                            <option data-country_iso_code="SK" data-name='SK' value='SK'>SLOVAKIA</option>
                            <option data-country_iso_code="SI" data-name='SI' value='SI'>SLOVENIA</option>
                            <option data-country_iso_code="SB" data-name='SB' value='SB'>SOLOMON ISLANDS</option>
                            <option data-country_iso_code="SO" data-name='SO' value='SO'>SOMALIA</option>
                            <option data-country_iso_code="ZA" data-name='ZA' value='ZA'>SOUTH AFRICA</option>
                            <option data-country_iso_code="GS" data-name='GS' value='GS'>SOUTH GEORGIA AND THE SOUTH
                                SANDWICH ISLANDS
                            </option>
                            <option data-country_iso_code="ES" data-name='ES' value='ES'>SPAIN</option>
                            <option data-country_iso_code="LK" data-name='LK' value='LK'>SRI LANKA</option>
                            <option data-country_iso_code="SD" data-name='SD' value='SD'>SUDAN</option>
                            <option data-country_iso_code="SR" data-name='SR' value='SR'>SURINAME</option>
                            <option data-country_iso_code="SJ" data-name='SJ' value='SJ'>SVALBARD AND JAN MAYEN</option>
                            <option data-country_iso_code="SZ" data-name='SZ' value='SZ'>SWAZILAND</option>
                            <option data-country_iso_code="SE" data-name='SE' value='SE'>SWEDEN</option>
                            <option data-country_iso_code="CH" data-name='CH' value='CH'>SWITZERLAND</option>
                            <option data-country_iso_code="SY" data-name='SY' value='SY'>SYRIAN ARAB REPUBLIC</option>
                            <option data-country_iso_code="TW" data-name='TW' value='TW'>TAIWAN, PROVINCE OF CHINA</option>
                            <option data-country_iso_code="TJ" data-name='TJ' value='TJ'>TAJIKISTAN</option>
                            <option data-country_iso_code="TZ" data-name='TZ' value='TZ'>TANZANIA, UNITED REPUBLIC OF
                            </option>
                            <option data-country_iso_code="TH" data-name='TH' value='TH'>THAILAND</option>
                            <option data-country_iso_code="TL" data-name='TL' value='TL'>TIMOR-LESTE</option>
                            <option data-country_iso_code="TG" data-name='TG' value='TG'>TOGO</option>
                            <option data-country_iso_code="TK" data-name='TK' value='TK'>TOKELAU</option>
                            <option data-country_iso_code="TO" data-name='TO' value='TO'>TONGA</option>
                            <option data-country_iso_code="TT" data-name='TT' value='TT'>TRINIDAD AND TOBAGO</option>
                            <option data-country_iso_code="TN" data-name='TN' value='TN'>TUNISIA</option>
                            <option data-country_iso_code="TR" data-name='TR' value='TR'>TURKEY</option>
                            <option data-country_iso_code="TM" data-name='TM' value='TM'>TURKMENISTAN</option>
                            <option data-country_iso_code="TC" data-name='TC' value='TC'>TURKS AND CAICOS ISLANDS</option>
                            <option data-country_iso_code="TV" data-name='TV' value='TV'>TUVALU</option>
                            <option data-country_iso_code="UG" data-name='UG' value='UG'>UGANDA</option>
                            <option data-country_iso_code="UA" data-name='UA' value='UA'>UKRAINE</option>
                            <option data-country_iso_code="AE" data-name='AE' value='AE'>UNITED ARAB EMIRATES</option>
                            <option data-country_iso_code="GB" data-name='GB' value='GB'>UNITED KINGDOM</option>
                            <option data-country_iso_code="US" data-name='US' value='US'>UNITED STATES</option>
                            <option data-country_iso_code="UM" data-name='UM' value='UM'>UNITED STATES MINOR OUTLYING
                                ISLANDS
                            </option>
                            <option data-country_iso_code="UY" data-name='UY' value='UY'>URUGUAY</option>
                            <option data-country_iso_code="UZ" data-name='UZ' value='UZ'>UZBEKISTAN</option>
                            <option data-country_iso_code="VU" data-name='VU' value='VU'>VANUATU</option>
                            <option data-country_iso_code="VE" data-name='VE' value='VE'>VENEZUELA</option>
                            <option data-country_iso_code="VN" data-name='VN' value='VN'>VIET NAM</option>
                            <option data-country_iso_code="VG" data-name='VG' value='VG'>VIRGIN ISLANDS, BRITISH</option>
                            <option data-country_iso_code="VI" data-name='VI' value='VI'>VIRGIN ISLANDS, U.S.</option>
                            <option data-country_iso_code="WF" data-name='WF' value='WF'>WALLIS AND FUTUNA</option>
                            <option data-country_iso_code="EH" data-name='EH' value='EH'>WESTERN SAHARA</option>
                            <option data-country_iso_code="YE" data-name='YE' value='YE'>YEMEN</option>
                            <option data-country_iso_code="ZM" data-name='ZM' value='ZM'>ZAMBIA</option>
                            <option data-country_iso_code="ZW" data-name='ZW' value='ZW'>ZIMBABWE</option>
                        </select><input type="hidden" name="country_code" value="" /></div>
                    <div class='d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none' name='form_key' placeholder='' value='email_us_form' />
                    </div>
                    <div class='mex-form-item col-12 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Phone</label>
                        <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.' data-extra-message="Phone Number Invalid" data-regex='' class='input_with_phone form-control mb-0 input_with_phone' name='phone_display' placeholder='' required value='' />
                        <input type='hidden' name='phone' />
                    </div>
                    <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                        <input type='number' name='phone_sms_verif_code' class='sms_verif_code regCon oth_sp' placeholder='SMS Code' required='required' number='true' autocomplete='off' list='autocompleteOff' />
                    </div>
                    <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                        <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset ' id='button-send-callme_form' type='button' title='Send Code'>Send Code
                        </button>
                    </div>
                    <div class='mex-form-item col-12 mb-3 p-1'>
                        <label for='order_message' class='d-block'>
                        </label>
                        <textarea data-message='Message is Required.' data-extra-message="Message is Invalid." data-regex='' class=' form-control w-100 ta-message' name='message' id='order_message' placeholder=''>Hello, I am interested in learning more about MultiBank products and services. Could you please contact me</textarea>
                    </div>
                    <button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-159ad7768bd13813ab411a2b-="">SEND
                    </button>
                </form>
            </div>
        </div>
    </div>
    <style>
        .modal-box__email-us {
            width: 100%;
            height: 100vh;

            position: fixed;
            top: 0;
            left: 0;

            display: none;
            justify-content: center;
            align-items: center;

            z-index: 99999;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-box__email-us.show {
            display: flex;
        }

        .modal-box__email-us .btn-modal-close {
            font-size: 20px;

            position: absolute;
            top: 10px;
            right: 10px;

            color: rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }

        #email_us_form .form-control {
            height: 45px;
            background: #FFF;
        }

        #email_us_form .btn-submit {
            background-color: #0390D7;
            border-color: #0390D7;
            min-width: 100px;
        }

        #email_us_form .form-control.ta-message {
            height: 130px;
            border-radius: 0;
        }
    </style>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        $(function() {
            $('.email-us-tg').click(function(e) {
                e.preventDefault();
                $('.modal-box__email-us').addClass('show');
            });
            $('.modal-box__email-us .btn-modal-close').click(function(e) {
                e.preventDefault();
                $('.modal-box__email-us').removeClass('show');
            });
        })
    </script>
    <script src="/public_files/static_js/lang_data/en.js" type="159ad7768bd13813ab411a2b-text/javascript"></script>
    <script src="/public_files/static_js/jquery.dataTables.min.js" type="159ad7768bd13813ab411a2b-text/javascript"></script>
    <script src="/public_files/static_js/lazysizes.min.js" type="159ad7768bd13813ab411a2b-text/javascript"></script>
    <script src="/public_files/static_js/jquery.validate.min.js" type="159ad7768bd13813ab411a2b-text/javascript"></script>
    <script src="/public_files/static_js/intlTelInput.min.js" type="159ad7768bd13813ab411a2b-text/javascript"></script>
    <script src="/public_files/static_js/app.js" type="159ad7768bd13813ab411a2b-text/javascript"></script>
    <script type="159ad7768bd13813ab411a2b-text/javascript" async>
        url = new URL(window.location.href);
        if (!url.searchParams.get('is_iframe')) {
            window.__lc = window.__lc || {};
            window.__lc.license = 3413162;
            window.__lc.chat_between_groups = false;
            window.__lc.group = 2;


            (function() {
                var lc = document.createElement('script');
                lc.type = 'text/javascript';
                lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(lc, s);
                window.LC_API = window.LC_API || {};
                if (window.innerWidth < 640) {
                    LC_API.on_before_load = function() {
                        LC_API.hide_chat_window();
                    }
                    LC_API.on_chat_window_minimized = function() {
                        setTimeout(function() {
                            LC_API.hide_chat_window();
                        }, 200);
                    }
                }
            })();
        }
    </script>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        $(function() {
            $('.mex-translatable').each(function() {
                var url_parts = location.hostname.split('.');
                if (url_parts.length == 3) {
                    var subdomain = url_parts.shift();

                    if (subdomain == 'ae' && document.documentElement.lang == 'aen') {
                        subdomain = 'aen';
                    }
                    if ($(this).data(subdomain) && (typeof $(this).data(subdomain) !== 'undefined')) {



                        var translation = $(this).data(subdomain);
                        $(this).html(translation);
                    }
                }
            });


            var test_lang = getUrlVars()['test_lang'];
            if (typeof test_lang !== 'undefined') {
                $('a').each(function() {
                    var old_url = $(this).attr("href");
                    if (typeof old_url !== 'undefined') {
                        var newUrl = old_url + '?test_lang=' + test_lang;
                        $(this).attr("href", newUrl);
                    }
                });
            }
        });
    </script>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        $(function() {
            var iframe_ibnum = getUrlVars()['ibNum'];
            var is_iframe = getUrlVars()['is_iframe'];
            console.log(typeof is_iframe);
            console.log(typeof iframe_ibnum);
            if (typeof iframe_ibnum === 'string' && typeof is_iframe === 'string') {
                $('a').each(function() {
                    var querystring = 'ibNum=888104724';
                    var href = $(this).attr('href');
                    if (href) {
                        href += (href.match(/\?/) ? '&' : '?') + querystring;
                        $(this).attr('href', href);
                    }
                });
            }
        });
    </script>
    <script type="159ad7768bd13813ab411a2b-text/javascript">
        $(function() {
            var params = getUrlVars();
            if (typeof params.ibName === 'undefined') {
                return;
            }
            if (params.ibName !== '333116990' && params.ibName !== '333118303') {
                return;
            }
            $('#live_account_form select[name=leverage]').val(5);
            $('.regulator-group, .leverage-group, .account-type-group').css('display', 'none');
        });
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="159ad7768bd13813ab411a2b-|49" defer=""></script>
</body>

</html>