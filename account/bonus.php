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
        <style>
            .lp-head {
                text-align: center;
                font-size: 2rem;
                line-height: 1.2;
            }

            #lp_campaign_07_16_v2 .cb-partnership input:checked {
                background-image: url(../public_files/images/common/icons/cb_checked.png);
            }

            #lp_campaign_07_16_v2 .cb-partnership input {
                background-image: url(../public_files/images/common/icons/cb_unchecked.png)
            }

            #lp_campaign_07_16_v2 .cb-partnership input {
                background-size: contain;
                width: 20px;
                height: 20px;
                background-repeat: no-repeat;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                cursor: pointer;
            }

            .black {
                color: #000 !important;
            }
        </style>
        <section class="flex-center page-top-banner"><img src="/multibankfx/public_files/images/accounts_funding/bonus_top_banner.jpg" alt="bonuses banner" class="mex-img-cover" />
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h1 class="mex-h1 text-left"> <?php translate('BONUSES'); ?> </h1>
                        <div class="mex-content mex-m-b-30">
                            <p class="mex-m-t-15"><?php translate('Check out MultiBank’s exclusive bonuses,
                                promotions and offers!'); ?><br /><?php translate('Choose from our latest bonuses, whether you’re an Introducing Broker
                                or an individual client'); ?></p>
                        </div>
                        <div class="mex-m-t-15"><a href="bonus.php" class="btn btn-mex mex-m-r-15 mex-m-b-10"><?php translate('Individual Clients'); ?></a> <a href="bonus-ib.php" class="btn btn-mex-gray mex-m-r-15 mex-m-b-10"><?php translate('Introducing Broker'); ?></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="container">
        <div class="row">
            <div class="home-banner-form" style="background: none;">
                <div class="mex-p-h-15" style="background-color: rgba(255, 255, 255, 0.75); padding-bottom: 15px;">
                    <form action="https://www.multibankfx.com/form/demoaccount?" name='lp_campaign_07_16_v2'
                          class='multibank-form row mx-0 w-100' method='post' enctype='' id='lp_campaign_07_16_v2'
                          target='' autocomplete='on'>
                        <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OTozNQ=='/>
                        <input type='hidden' name='token'
                               value='$2y$10$kzBPWz8h4uL8hLmMq61s/uOIWhFQaEs9zjX3sE4fGltInDO0mh0Oi'/>
                        <input type='hidden' name='source'
                               value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:32] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:33] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:34] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:35] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/bonus?web=true'/>
                        <div class='bg-000 text-center mex-m-x-n15 w-110'>
                            <label for='' class='mex-h3 text-white py-2 mb-0 lp-head'>
                                START TRADING WITH MULTIBANK GROUP</label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex=''
                                   class=' form-control' name='label_title' placeholder='' value=''/>
                        </div>
                        <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                            <label for='' class='d-none'>
                            </label>
                            <div class='form-check form-check-inline'><input data-message='Account Type is Required.'
                                                                             data-extra-message="Account type Invalid."
                                                                             class=' acc_1  ' name='account_type'
                                                                             type='radio' required value='1' checked/>
                                <label class=' mb-0 ml-1 black ' for=''> INDIVIDUAL</label>
                            </div>
                        </div>
                        <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                            <label for='' class='d-none'>
                            </label>
                            <div class='form-check form-check-inline'><input data-message='Account Type is Required.'
                                                                             data-extra-message="Account Type Invalid."
                                                                             class=' acc_1  ' name='account_type'
                                                                             type='radio' required value='2'/>
                                <label class=' mb-0 ml-1 black ' for=''> PARTNERSHIP</label>
                            </div>
                        </div>
                        <div class='mex-form-item col-12 p-1'>
                            <label for='' class='d-none'>
                                Full Name</label>
                            <input type="text" data-message="Full Name is Required."
                                   data-extra-message="Full Name is Invalid." data-regex="" class="form-control mb-0"
                                   name="name" $field_id_code placeholder="Full Name" required value=""/>
                        </div>
                        <div class='mex-form-item col-12 p-1'>
                            <label for='' class='d-none'>
                                Email</label>
                            <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid."
                                   data-regex='' class='form-control mb-0' name='email' placeholder='Email' required
                                   value=''/>
                        </div>
                        <div class='mex-form-item col-12 p-1'>
                            <label for='' class='d-none'>
                            </label>
                            <input type='email' data-message='Confirm Email is Required.'
                                   data-extra-message="Email Mismatched." data-regex='' class='islamic_account_form'
                                   name='confirm_email' placeholder='Confirm Email' required value=''/>
                        </div>
                        <div class='mex-form-item col-12 p-1'>
                            <label for='' class='d-none'>
                                Country</label>
                            <select data-message='Country Code Required.' data-extra-message="Country Code Invalid"
                                    class='selection-country form-control  mb-0 select_with_country select_with_country'
                                    name='country_code' required>
                                <option value='' selected='selected'>Select Country</option>
                                <option data-country_iso_code="AF" data-name='AF' value='+93'>AFGHANISTAN(+93)</option>
                                <option data-country_iso_code="AL" data-name='AL' value='+355'>ALBANIA(+355)</option>
                                <option data-country_iso_code="DZ" data-name='DZ' value='+213'>ALGERIA(+213)</option>
                                <option data-country_iso_code="AS" data-name='AS' value='+1684'>AMERICAN SAMOA(+1684)
                                </option>
                                <option data-country_iso_code="AD" data-name='AD' value='+376'>ANDORRA(+376)</option>
                                <option data-country_iso_code="AO" data-name='AO' value='+244'>ANGOLA(+244)</option>
                                <option data-country_iso_code="AI" data-name='AI' value='+1264'>ANGUILLA(+1264)</option>
                                <option data-country_iso_code="AQ" data-name='AQ' value='+0'>ANTARCTICA(+0)</option>
                                <option data-country_iso_code="AG" data-name='AG' value='+1268'>ANTIGUA AND
                                    BARBUDA(+1268)
                                </option>
                                <option data-country_iso_code="AR" data-name='AR' value='+54'>ARGENTINA(+54)</option>
                                <option data-country_iso_code="AM" data-name='AM' value='+374'>ARMENIA(+374)</option>
                                <option data-country_iso_code="AW" data-name='AW' value='+297'>ARUBA(+297)</option>
                                <option data-country_iso_code="AU" data-name='AU' value='+61'>AUSTRALIA(+61)</option>
                                <option data-country_iso_code="AT" data-name='AT' value='+43'>AUSTRIA(+43)</option>
                                <option data-country_iso_code="AZ" data-name='AZ' value='+994'>AZERBAIJAN(+994)</option>
                                <option data-country_iso_code="BS" data-name='BS' value='+1242'>BAHAMAS(+1242)</option>
                                <option data-country_iso_code="BH" data-name='BH' value='+973'>BAHRAIN(+973)</option>
                                <option data-country_iso_code="BD" data-name='BD' value='+880'>BANGLADESH(+880)</option>
                                <option data-country_iso_code="BB" data-name='BB' value='+1246'>BARBADOS(+1246)</option>
                                <option data-country_iso_code="BY" data-name='BY' value='+375'>BELARUS(+375)</option>
                                <option data-country_iso_code="BE" data-name='BE' value='+32'>BELGIUM(+32)</option>
                                <option data-country_iso_code="BZ" data-name='BZ' value='+501'>BELIZE(+501)</option>
                                <option data-country_iso_code="BJ" data-name='BJ' value='+229'>BENIN(+229)</option>
                                <option data-country_iso_code="BM" data-name='BM' value='+1441'>BERMUDA(+1441)</option>
                                <option data-country_iso_code="BT" data-name='BT' value='+975'>BHUTAN(+975)</option>
                                <option data-country_iso_code="BO" data-name='BO' value='+591'>BOLIVIA(+591)</option>
                                <option data-country_iso_code="BA" data-name='BA' value='+387'>BOSNIA AND
                                    HERZEGOVINA(+387)
                                </option>
                                <option data-country_iso_code="BW" data-name='BW' value='+267'>BOTSWANA(+267)</option>
                                <option data-country_iso_code="BV" data-name='BV' value='+0'>BOUVET ISLAND(+0)</option>
                                <option data-country_iso_code="BR" data-name='BR' value='+55'>BRAZIL(+55)</option>
                                <option data-country_iso_code="IO" data-name='IO' value='+246'>BRITISH INDIAN OCEAN
                                    TERRITORY(+246)
                                </option>
                                <option data-country_iso_code="BN" data-name='BN' value='+673'>BRUNEI DARUSSALAM(+673)
                                </option>
                                <option data-country_iso_code="BG" data-name='BG' value='+359'>BULGARIA(+359)</option>
                                <option data-country_iso_code="BF" data-name='BF' value='+226'>BURKINA FASO(+226)
                                </option>
                                <option data-country_iso_code="BI" data-name='BI' value='+257'>BURUNDI(+257)</option>
                                <option data-country_iso_code="KH" data-name='KH' value='+855'>CAMBODIA(+855)</option>
                                <option data-country_iso_code="CM" data-name='CM' value='+237'>CAMEROON(+237)</option>
                                <option data-country_iso_code="CA" data-name='CA' value='+1'>CANADA(+1)</option>
                                <option data-country_iso_code="CV" data-name='CV' value='+238'>CAPE VERDE(+238)</option>
                                <option data-country_iso_code="KY" data-name='KY' value='+1345'>CAYMAN ISLANDS(+1345)
                                </option>
                                <option data-country_iso_code="CF" data-name='CF' value='+236'>CENTRAL AFRICAN
                                    REPUBLIC(+236)
                                </option>
                                <option data-country_iso_code="TD" data-name='TD' value='+235'>CHAD(+235)</option>
                                <option data-country_iso_code="CL" data-name='CL' value='+56'>CHILE(+56)</option>
                                <option data-country_iso_code="CN" data-name='CN' value='+86'>CHINA(+86)</option>
                                <option data-country_iso_code="CX" data-name='CX' value='+61'>CHRISTMAS ISLAND(+61)
                                </option>
                                <option data-country_iso_code="CC" data-name='CC' value='+672'>COCOS (KEELING)
                                    ISLANDS(+672)
                                </option>
                                <option data-country_iso_code="CO" data-name='CO' value='+57'>COLOMBIA(+57)</option>
                                <option data-country_iso_code="KM" data-name='KM' value='+269'>COMOROS(+269)</option>
                                <option data-country_iso_code="CG" data-name='CG' value='+242'>CONGO(+242)</option>
                                <option data-country_iso_code="CD" data-name='CD' value='+242'>CONGO, THE DEMOCRATIC
                                    REPUBLIC OF THE(+242)
                                </option>
                                <option data-country_iso_code="CK" data-name='CK' value='+682'>COOK ISLANDS(+682)
                                </option>
                                <option data-country_iso_code="CR" data-name='CR' value='+506'>COSTA RICA(+506)</option>
                                <option data-country_iso_code="CI" data-name='CI' value='+225'>COTE D'IVOIRE(+225)
                                </option>
                                <option data-country_iso_code="HR" data-name='HR' value='+385'>CROATIA(+385)</option>
                                <option data-country_iso_code="CU" data-name='CU' value='+53'>CUBA(+53)</option>
                                <option data-country_iso_code="CY" data-name='CY' value='+357'>CYPRUS(+357)</option>
                                <option data-country_iso_code="CZ" data-name='CZ' value='+420'>CZECH REPUBLIC(+420)
                                </option>
                                <option data-country_iso_code="DK" data-name='DK' value='+45'>DENMARK(+45)</option>
                                <option data-country_iso_code="DJ" data-name='DJ' value='+253'>DJIBOUTI(+253)</option>
                                <option data-country_iso_code="DM" data-name='DM' value='+1767'>DOMINICA(+1767)</option>
                                <option data-country_iso_code="DO" data-name='DO' value='+1809'>DOMINICAN
                                    REPUBLIC(+1809)
                                </option>
                                <option data-country_iso_code="EC" data-name='EC' value='+593'>ECUADOR(+593)</option>
                                <option data-country_iso_code="EG" data-name='EG' value='+20'>EGYPT(+20)</option>
                                <option data-country_iso_code="SV" data-name='SV' value='+503'>EL SALVADOR(+503)
                                </option>
                                <option data-country_iso_code="GQ" data-name='GQ' value='+240'>EQUATORIAL GUINEA(+240)
                                </option>
                                <option data-country_iso_code="ER" data-name='ER' value='+291'>ERITREA(+291)</option>
                                <option data-country_iso_code="EE" data-name='EE' value='+372'>ESTONIA(+372)</option>
                                <option data-country_iso_code="ET" data-name='ET' value='+251'>ETHIOPIA(+251)</option>
                                <option data-country_iso_code="FK" data-name='FK' value='+500'>FALKLAND ISLANDS
                                    (MALVINAS)(+500)
                                </option>
                                <option data-country_iso_code="FO" data-name='FO' value='+298'>FAROE ISLANDS(+298)
                                </option>
                                <option data-country_iso_code="FJ" data-name='FJ' value='+679'>FIJI(+679)</option>
                                <option data-country_iso_code="FI" data-name='FI' value='+358'>FINLAND(+358)</option>
                                <option data-country_iso_code="FR" data-name='FR' value='+33'>FRANCE(+33)</option>
                                <option data-country_iso_code="GF" data-name='GF' value='+594'>FRENCH GUIANA(+594)
                                </option>
                                <option data-country_iso_code="PF" data-name='PF' value='+689'>FRENCH POLYNESIA(+689)
                                </option>
                                <option data-country_iso_code="TF" data-name='TF' value='+0'>FRENCH SOUTHERN
                                    TERRITORIES(+0)
                                </option>
                                <option data-country_iso_code="GA" data-name='GA' value='+241'>GABON(+241)</option>
                                <option data-country_iso_code="GM" data-name='GM' value='+220'>GAMBIA(+220)</option>
                                <option data-country_iso_code="GE" data-name='GE' value='+995'>GEORGIA(+995)</option>
                                <option data-country_iso_code="DE" data-name='DE' value='+49'>GERMANY(+49)</option>
                                <option data-country_iso_code="GH" data-name='GH' value='+233'>GHANA(+233)</option>
                                <option data-country_iso_code="GI" data-name='GI' value='+350'>GIBRALTAR(+350)</option>
                                <option data-country_iso_code="GR" data-name='GR' value='+30'>GREECE(+30)</option>
                                <option data-country_iso_code="GL" data-name='GL' value='+299'>GREENLAND(+299)</option>
                                <option data-country_iso_code="GD" data-name='GD' value='+1473'>GRENADA(+1473)</option>
                                <option data-country_iso_code="GP" data-name='GP' value='+590'>GUADELOUPE(+590)</option>
                                <option data-country_iso_code="GU" data-name='GU' value='+1671'>GUAM(+1671)</option>
                                <option data-country_iso_code="GT" data-name='GT' value='+502'>GUATEMALA(+502)</option>
                                <option data-country_iso_code="GN" data-name='GN' value='+224'>GUINEA(+224)</option>
                                <option data-country_iso_code="GW" data-name='GW' value='+245'>GUINEA-BISSAU(+245)
                                </option>
                                <option data-country_iso_code="GY" data-name='GY' value='+592'>GUYANA(+592)</option>
                                <option data-country_iso_code="HT" data-name='HT' value='+509'>HAITI(+509)</option>
                                <option data-country_iso_code="HM" data-name='HM' value='+0'>HEARD ISLAND AND MCDONALD
                                    ISLANDS(+0)
                                </option>
                                <option data-country_iso_code="VA" data-name='VA' value='+39'>HOLY SEE (VATICAN CITY
                                    STATE)(+39)
                                </option>
                                <option data-country_iso_code="HN" data-name='HN' value='+504'>HONDURAS(+504)</option>
                                <option data-country_iso_code="HK" data-name='HK' value='+852'>HONG KONG(+852)</option>
                                <option data-country_iso_code="HU" data-name='HU' value='+36'>HUNGARY(+36)</option>
                                <option data-country_iso_code="IS" data-name='IS' value='+354'>ICELAND(+354)</option>
                                <option data-country_iso_code="IN" data-name='IN' value='+91'>INDIA(+91)</option>
                                <option data-country_iso_code="ID" data-name='ID' value='+62'>INDONESIA(+62)</option>
                                <option data-country_iso_code="IR" data-name='IR' value='+98'>IRAN, ISLAMIC REPUBLIC
                                    OF(+98)
                                </option>
                                <option data-country_iso_code="IQ" data-name='IQ' value='+964'>IRAQ(+964)</option>
                                <option data-country_iso_code="IE" data-name='IE' value='+353'>IRELAND(+353)</option>
                                <option data-country_iso_code="IL" data-name='IL' value='+972'>ISRAEL(+972)</option>
                                <option data-country_iso_code="IT" data-name='IT' value='+39'>ITALY(+39)</option>
                                <option data-country_iso_code="JM" data-name='JM' value='+1876'>JAMAICA(+1876)</option>
                                <option data-country_iso_code="JP" data-name='JP' value='+81'>JAPAN(+81)</option>
                                <option data-country_iso_code="JO" data-name='JO' value='+962'>JORDAN(+962)</option>
                                <option data-country_iso_code="KZ" data-name='KZ' value='+7'>KAZAKHSTAN(+7)</option>
                                <option data-country_iso_code="KE" data-name='KE' value='+254'>KENYA(+254)</option>
                                <option data-country_iso_code="KI" data-name='KI' value='+686'>KIRIBATI(+686)</option>
                                <option data-country_iso_code="KP" data-name='KP' value='+850'>KOREA, DEMOCRATIC
                                    PEOPLE'S REPUBLIC OF(+850)
                                </option>
                                <option data-country_iso_code="KR" data-name='KR' value='+82'>KOREA, REPUBLIC OF(+82)
                                </option>
                                <option data-country_iso_code="KW" data-name='KW' value='+965'>KUWAIT(+965)</option>
                                <option data-country_iso_code="KG" data-name='KG' value='+996'>KYRGYZSTAN(+996)</option>
                                <option data-country_iso_code="LA" data-name='LA' value='+856'>LAO PEOPLE'S DEMOCRATIC
                                    REPUBLIC(+856)
                                </option>
                                <option data-country_iso_code="LV" data-name='LV' value='+371'>LATVIA(+371)</option>
                                <option data-country_iso_code="LB" data-name='LB' value='+961'>LEBANON(+961)</option>
                                <option data-country_iso_code="LS" data-name='LS' value='+266'>LESOTHO(+266)</option>
                                <option data-country_iso_code="LR" data-name='LR' value='+231'>LIBERIA(+231)</option>
                                <option data-country_iso_code="LY" data-name='LY' value='+218'>LIBYAN ARAB
                                    JAMAHIRIYA(+218)
                                </option>
                                <option data-country_iso_code="LI" data-name='LI' value='+423'>LIECHTENSTEIN(+423)
                                </option>
                                <option data-country_iso_code="LT" data-name='LT' value='+370'>LITHUANIA(+370)</option>
                                <option data-country_iso_code="LU" data-name='LU' value='+352'>LUXEMBOURG(+352)</option>
                                <option data-country_iso_code="MO" data-name='MO' value='+853'>MACAO(+853)</option>
                                <option data-country_iso_code="MK" data-name='MK' value='+389'>MACEDONIA, THE FORMER
                                    YUGOSLAV REPUBLIC OF(+389)
                                </option>
                                <option data-country_iso_code="MG" data-name='MG' value='+261'>MADAGASCAR(+261)</option>
                                <option data-country_iso_code="MW" data-name='MW' value='+265'>MALAWI(+265)</option>
                                <option data-country_iso_code="MY" data-name='MY' value='+60'>MALAYSIA(+60)</option>
                                <option data-country_iso_code="MV" data-name='MV' value='+960'>MALDIVES(+960)</option>
                                <option data-country_iso_code="ML" data-name='ML' value='+223'>MALI(+223)</option>
                                <option data-country_iso_code="MT" data-name='MT' value='+356'>MALTA(+356)</option>
                                <option data-country_iso_code="MH" data-name='MH' value='+692'>MARSHALL ISLANDS(+692)
                                </option>
                                <option data-country_iso_code="MQ" data-name='MQ' value='+596'>MARTINIQUE(+596)</option>
                                <option data-country_iso_code="MR" data-name='MR' value='+222'>MAURITANIA(+222)</option>
                                <option data-country_iso_code="MU" data-name='MU' value='+230'>MAURITIUS(+230)</option>
                                <option data-country_iso_code="YT" data-name='YT' value='+269'>MAYOTTE(+269)</option>
                                <option data-country_iso_code="MX" data-name='MX' value='+52'>MEXICO(+52)</option>
                                <option data-country_iso_code="FM" data-name='FM' value='+691'>MICRONESIA, FEDERATED
                                    STATES OF(+691)
                                </option>
                                <option data-country_iso_code="MD" data-name='MD' value='+373'>MOLDOVA, REPUBLIC
                                    OF(+373)
                                </option>
                                <option data-country_iso_code="MC" data-name='MC' value='+377'>MONACO(+377)</option>
                                <option data-country_iso_code="MN" data-name='MN' value='+976'>MONGOLIA(+976)</option>
                                <option data-country_iso_code="ME" data-name='ME' value='+499'>MONTENEGRO(+499)</option>
                                <option data-country_iso_code="MS" data-name='MS' value='+1664'>MONTSERRAT(+1664)
                                </option>
                                <option data-country_iso_code="MA" data-name='MA' value='+212'>MOROCCO(+212)</option>
                                <option data-country_iso_code="MZ" data-name='MZ' value='+258'>MOZAMBIQUE(+258)</option>
                                <option data-country_iso_code="MM" data-name='MM' value='+95'>MYANMAR(+95)</option>
                                <option data-country_iso_code="NA" data-name='NA' value='+264'>NAMIBIA(+264)</option>
                                <option data-country_iso_code="NR" data-name='NR' value='+674'>NAURU(+674)</option>
                                <option data-country_iso_code="NP" data-name='NP' value='+977'>NEPAL(+977)</option>
                                <option data-country_iso_code="NL" data-name='NL' value='+31'>NETHERLANDS(+31)</option>
                                <option data-country_iso_code="AN" data-name='AN' value='+599'>NETHERLANDS
                                    ANTILLES(+599)
                                </option>
                                <option data-country_iso_code="NC" data-name='NC' value='+687'>NEW CALEDONIA(+687)
                                </option>
                                <option data-country_iso_code="NZ" data-name='NZ' value='+64'>NEW ZEALAND(+64)</option>
                                <option data-country_iso_code="NI" data-name='NI' value='+505'>NICARAGUA(+505)</option>
                                <option data-country_iso_code="NE" data-name='NE' value='+227'>NIGER(+227)</option>
                                <option data-country_iso_code="NG" data-name='NG' value='+234'>NIGERIA(+234)</option>
                                <option data-country_iso_code="NU" data-name='NU' value='+683'>NIUE(+683)</option>
                                <option data-country_iso_code="NF" data-name='NF' value='+672'>NORFOLK ISLAND(+672)
                                </option>
                                <option data-country_iso_code="MP" data-name='MP' value='+1670'>NORTHERN MARIANA
                                    ISLANDS(+1670)
                                </option>
                                <option data-country_iso_code="NO" data-name='NO' value='+47'>NORWAY(+47)</option>
                                <option data-country_iso_code="OM" data-name='OM' value='+968'>OMAN(+968)</option>
                                <option data-country_iso_code="PK" data-name='PK' value='+92'>PAKISTAN(+92)</option>
                                <option data-country_iso_code="PW" data-name='PW' value='+680'>PALAU(+680)</option>
                                <option data-country_iso_code="PS" data-name='PS' value='+970'>PALESTINE, STATE
                                    OF(+970)
                                </option>
                                <option data-country_iso_code="PA" data-name='PA' value='+507'>PANAMA(+507)</option>
                                <option data-country_iso_code="PG" data-name='PG' value='+675'>PAPUA NEW GUINEA(+675)
                                </option>
                                <option data-country_iso_code="PY" data-name='PY' value='+595'>PARAGUAY(+595)</option>
                                <option data-country_iso_code="PE" data-name='PE' value='+51'>PERU(+51)</option>
                                <option data-country_iso_code="PH" data-name='PH' value='+63'>PHILIPPINES(+63)</option>
                                <option data-country_iso_code="PN" data-name='PN' value='+0'>PITCAIRN(+0)</option>
                                <option data-country_iso_code="PL" data-name='PL' value='+48'>POLAND(+48)</option>
                                <option data-country_iso_code="PT" data-name='PT' value='+351'>PORTUGAL(+351)</option>
                                <option data-country_iso_code="PR" data-name='PR' value='+1787'>PUERTO RICO(+1787)
                                </option>
                                <option data-country_iso_code="QA" data-name='QA' value='+974'>QATAR(+974)</option>
                                <option data-country_iso_code="RE" data-name='RE' value='+262'>REUNION(+262)</option>
                                <option data-country_iso_code="RO" data-name='RO' value='+40'>ROMANIA(+40)</option>
                                <option data-country_iso_code="RU" data-name='RU' value='+70'>RUSSIAN FEDERATION(+70)
                                </option>
                                <option data-country_iso_code="RW" data-name='RW' value='+250'>RWANDA(+250)</option>
                                <option data-country_iso_code="SH" data-name='SH' value='+290'>SAINT HELENA(+290)
                                </option>
                                <option data-country_iso_code="KN" data-name='KN' value='+1869'>SAINT KITTS AND
                                    NEVIS(+1869)
                                </option>
                                <option data-country_iso_code="LC" data-name='LC' value='+1758'>SAINT LUCIA(+1758)
                                </option>
                                <option data-country_iso_code="PM" data-name='PM' value='+508'>SAINT PIERRE AND
                                    MIQUELON(+508)
                                </option>
                                <option data-country_iso_code="VC" data-name='VC' value='+1784'>SAINT VINCENT AND THE
                                    GRENADINES(+1784)
                                </option>
                                <option data-country_iso_code="WS" data-name='WS' value='+684'>SAMOA(+684)</option>
                                <option data-country_iso_code="SM" data-name='SM' value='+378'>SAN MARINO(+378)</option>
                                <option data-country_iso_code="ST" data-name='ST' value='+239'>SAO TOME AND
                                    PRINCIPE(+239)
                                </option>
                                <option data-country_iso_code="SA" data-name='SA' value='+966'>SAUDI ARABIA(+966)
                                </option>
                                <option data-country_iso_code="SN" data-name='SN' value='+221'>SENEGAL(+221)</option>
                                <option data-country_iso_code="RS" data-name='RS' value='+381'>SERBIA(+381)</option>
                                <option data-country_iso_code="SC" data-name='SC' value='+248'>SEYCHELLES(+248)</option>
                                <option data-country_iso_code="SL" data-name='SL' value='+232'>SIERRA LEONE(+232)
                                </option>
                                <option data-country_iso_code="SG" data-name='SG' value='+65'>SINGAPORE(+65)</option>
                                <option data-country_iso_code="SK" data-name='SK' value='+421'>SLOVAKIA(+421)</option>
                                <option data-country_iso_code="SI" data-name='SI' value='+386'>SLOVENIA(+386)</option>
                                <option data-country_iso_code="SB" data-name='SB' value='+677'>SOLOMON ISLANDS(+677)
                                </option>
                                <option data-country_iso_code="SO" data-name='SO' value='+252'>SOMALIA(+252)</option>
                                <option data-country_iso_code="ZA" data-name='ZA' value='+27'>SOUTH AFRICA(+27)</option>
                                <option data-country_iso_code="GS" data-name='GS' value='+0'>SOUTH GEORGIA AND THE SOUTH
                                    SANDWICH ISLANDS(+0)
                                </option>
                                <option data-country_iso_code="ES" data-name='ES' value='+34'>SPAIN(+34)</option>
                                <option data-country_iso_code="LK" data-name='LK' value='+94'>SRI LANKA(+94)</option>
                                <option data-country_iso_code="SD" data-name='SD' value='+249'>SUDAN(+249)</option>
                                <option data-country_iso_code="SR" data-name='SR' value='+597'>SURINAME(+597)</option>
                                <option data-country_iso_code="SJ" data-name='SJ' value='+47'>SVALBARD AND JAN
                                    MAYEN(+47)
                                </option>
                                <option data-country_iso_code="SZ" data-name='SZ' value='+268'>SWAZILAND(+268)</option>
                                <option data-country_iso_code="SE" data-name='SE' value='+46'>SWEDEN(+46)</option>
                                <option data-country_iso_code="CH" data-name='CH' value='+41'>SWITZERLAND(+41)</option>
                                <option data-country_iso_code="SY" data-name='SY' value='+963'>SYRIAN ARAB
                                    REPUBLIC(+963)
                                </option>
                                <option data-country_iso_code="TW" data-name='TW' value='+886'>TAIWAN, PROVINCE OF
                                    CHINA(+886)
                                </option>
                                <option data-country_iso_code="TJ" data-name='TJ' value='+992'>TAJIKISTAN(+992)</option>
                                <option data-country_iso_code="TZ" data-name='TZ' value='+255'>TANZANIA, UNITED REPUBLIC
                                    OF(+255)
                                </option>
                                <option data-country_iso_code="TH" data-name='TH' value='+66'>THAILAND(+66)</option>
                                <option data-country_iso_code="TL" data-name='TL' value='+670'>TIMOR-LESTE(+670)
                                </option>
                                <option data-country_iso_code="TG" data-name='TG' value='+228'>TOGO(+228)</option>
                                <option data-country_iso_code="TK" data-name='TK' value='+690'>TOKELAU(+690)</option>
                                <option data-country_iso_code="TO" data-name='TO' value='+676'>TONGA(+676)</option>
                                <option data-country_iso_code="TT" data-name='TT' value='+1868'>TRINIDAD AND
                                    TOBAGO(+1868)
                                </option>
                                <option data-country_iso_code="TN" data-name='TN' value='+216'>TUNISIA(+216)</option>
                                <option data-country_iso_code="TR" data-name='TR' value='+90'>TURKEY(+90)</option>
                                <option data-country_iso_code="TM" data-name='TM' value='+7370'>TURKMENISTAN(+7370)
                                </option>
                                <option data-country_iso_code="TC" data-name='TC' value='+1649'>TURKS AND CAICOS
                                    ISLANDS(+1649)
                                </option>
                                <option data-country_iso_code="TV" data-name='TV' value='+688'>TUVALU(+688)</option>
                                <option data-country_iso_code="UG" data-name='UG' value='+256'>UGANDA(+256)</option>
                                <option data-country_iso_code="UA" data-name='UA' value='+380'>UKRAINE(+380)</option>
                                <option data-country_iso_code="AE" data-name='AE' value='+971'>UNITED ARAB
                                    EMIRATES(+971)
                                </option>
                                <option data-country_iso_code="GB" data-name='GB' value='+44'>UNITED KINGDOM(+44)
                                </option>
                                <option data-country_iso_code="US" data-name='US' value='+1'>UNITED STATES(+1)</option>
                                <option data-country_iso_code="UM" data-name='UM' value='+1'>UNITED STATES MINOR
                                    OUTLYING ISLANDS(+1)
                                </option>
                                <option data-country_iso_code="UY" data-name='UY' value='+598'>URUGUAY(+598)</option>
                                <option data-country_iso_code="UZ" data-name='UZ' value='+998'>UZBEKISTAN(+998)</option>
                                <option data-country_iso_code="VU" data-name='VU' value='+678'>VANUATU(+678)</option>
                                <option data-country_iso_code="VE" data-name='VE' value='+58'>VENEZUELA(+58)</option>
                                <option data-country_iso_code="VN" data-name='VN' value='+84'>VIET NAM(+84)</option>
                                <option data-country_iso_code="VG" data-name='VG' value='+1284'>VIRGIN ISLANDS,
                                    BRITISH(+1284)
                                </option>
                                <option data-country_iso_code="VI" data-name='VI' value='+1340'>VIRGIN ISLANDS,
                                    U.S.(+1340)
                                </option>
                                <option data-country_iso_code="WF" data-name='WF' value='+681'>WALLIS AND FUTUNA(+681)
                                </option>
                                <option data-country_iso_code="EH" data-name='EH' value='+212'>WESTERN SAHARA(+212)
                                </option>
                                <option data-country_iso_code="YE" data-name='YE' value='+967'>YEMEN(+967)</option>
                                <option data-country_iso_code="ZM" data-name='ZM' value='+260'>ZAMBIA(+260)</option>
                                <option data-country_iso_code="ZW" data-name='ZW' value='+263'>ZIMBABWE(+263)</option>
                            </select><input type="hidden" name="country_name" value=""/></div>
                        <div class='mex-form-item col-12 p-1'>
                            <label for='' class='d-none'>
                                Phone</label>
                            <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.'
                                   data-extra-message="Phone Number Invalid" data-regex='[0-9]{5,15}'
                                   class='input_with_phone form-control mb-0 input_with_phone' name='phone_display'
                                   placeholder='Phone Number' required value=''/>
                            <input type='hidden' name='phone'/>
                        </div>
                        <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                            <input type='number' name='phone_sms_verif_code' class='sms_verif_code regCon oth_sp'
                                   placeholder='SMS Code' required='required' number='true' autocomplete='off'
                                   list='autocompleteOff'/>
                        </div>
                        <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                            <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset '
                                    id='button-send-callme_form' type='button' title='Send Code'>Send Code
                            </button>
                        </div>
                        <div class='px-1 font-10'>
                            <label for='terms_conditions' class=' contact-agreement'>
                            </label>
                            <div class='form-check form-check-inline'>
                                <input data-message='Please click check box above to continue.' data-extra-message=""
                                       class='form-check-input ' name='privacy' type='checkbox' id='terms_conditions'
                                       required value='1' checked/>
                                <label class='form-check-label label-1 ' for='terms_conditions'>I accept the <a
                                        href="/multibankfx/terms-conditions.php" target="_blank" class="text-22A0C4">Terms &
                                    Conditions</a>, <a href="/multibankfx/privacy-policy.php" target="_blank"
                                                       class="text-22A0C4">Privacy Policy</a>, and <a
                                        href="/multibankfx/cookie-policy.php" target="_blank" class="text-22A0C4">Cookie
                                    Policy</a>.</label>
                            </div>
                        </div>
                        <div class=''>
                            <label for='' class='d-none'>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' '
                                   name='form_key' placeholder='' required value='lp_campaign_07_16_v2'/>
                        </div>
                        <button type='submit' class='btn-contact mx-1 mt-2 mb-0'
                                onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                data-cf-modified-ca783208542e411d19700e4f-="">OPEN DEMO ACCOUNT
                        </button>
                    </form>


                </div>
            </div>
        </div>
    </div> -->
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
        </style>
        <section>
            <div class="container w-xs-100">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div id="bonus_container" class="bounes-clients-tab">

                            <ul class="mex-tabs new-tab-heigher bonus-page mb-0 px-0">
                                <li class="tab-title bonus-page-tab d-none" data-tab="100_bonus">
                                    <a>
                                        <span class="tab-img-cover d-none d-xl-block"><img src="/multibankfx/public_files/images/accounts_funding/tab_100_bonus.jpg"></span>
                                        100% BONUS
                                    </a>
                                </li>
                                <li class="tab-title bonus-page-tab d-none" data-tab="20_bonus">
                                    <a>
                                        <span class="tab-img-cover d-none d-xl-block"><img src="/multibankfx/public_files/images/accounts_funding/20bonus_box_652x600_new.jpg"></span>
                                        25% BONUS
                                    </a>
                                </li>
                                <li class="tab-title bonus-page-tab active" data-tab="imperial_bonus">
                                    <a>
                                        <span class="tab-img-cover d-none d-xl-block"><img src="/multibankfx/public_files/images/accounts_funding/tab_imperial_bonus.jpg"></span>
                                        <?php translate('IMPERIAL BONUS'); ?>
                                    </a>
                                </li>
                                <li class="tab-title bonus-page-tab" data-tab="refer_bonus">
                                    <a>
                                        <span class="tab-img-cover d-none d-xl-block"><img src="/multibankfx/public_files/images/accounts_funding/tab_refer_friend_bonus.jpg"></span>
                                        <?php translate('REFER A FRIEND BONUS'); ?>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content have-box-shadow col-12 mex-content">
                                <div class="tab-pane  bonus-page-pane" id="100_bonus">
                                    <h2 class="mex-h1 text-1e32a3 mex-m-t-15 uppercase text-left">100% BONUS</h2>
                                    <p class="mex-m-b-20">Earn up to $20,000 on double bonus when you deposit and meet the
                                        basic trading requirements below.</p>
                                    <h4>Terms &amp; Conditions</h4>
                                    <ul class="mex-list-conditions mex-m-t-15">
                                        <li>1. The 100% Bonus is only available on the Maximus Platform</li>
                                        <li>2. This bonus is available to new clients only</li>
                                        <li>3. This bonus is non-losable and non-withdrawable. The account will be stopped
                                            out once the equity equals to the amount of the bonus received.
                                        </li>
                                        <li>4. The maximum bonus amount per customer is $20,000</li>
                                        <li>5. The minimum initial deposit amount is $200. For further deposits (top ups)
                                            there is no minimum amount required. I.e. clients will get 100% Bonus on any
                                            additional deposits.
                                        </li>
                                        <li>6. In the event withdrawals are made, the bonus will be reversed at a rate
                                            proportional to the withdrawal amount divided by the initial deposit
                                        </li>
                                        <li>7. This bonus is only available for trading on forex pairs and gold only</li>
                                        <li>8. This bonus cannot be used in combination with any other bonuses</li>
                                        <li>9. Manipulation of the system by arbitrage trading is strictly prohibited</li>
                                        <li>10. MultiBank Group reserves the right to correct the trading calculation in the
                                            event of any suspected abuse or manipulation of this bonus policy and promotion
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane bonus-page-pane" id="20_bonus">
                                    <h2 class="mex-h1 text-1e32a3 mex-m-t-15 uppercase text-left">25% BONUS</h2>
                                    <p class="mex-m-b-20">Any client that opens a trading account and deposits a minimum of
                                        $1,000 can claim our exclusive 25% Bonus when they meet the terms and conditions
                                        listed below. </h4>
                                        <h4>Terms &amp; Conditions</h4>
                                        <ul class="mex-list-conditions mex-m-t-15">
                                            <li>1. The minimum deposit required for the 25% Bonus is $1,000</li>
                                            <li>2. The maximum bonus amount per customer is $25,000</li>
                                            <li>3. This losable bonus can be withdrawn at a rate of $250 for every 50 lots round
                                                trip traded
                                            </li>
                                            <li>4. If the customer chooses to withdraw funds from their trading account, then
                                                any bonus amount which was not converted into cash will be deducted from their
                                                account. However, if the customer chooses to withdraw only the profits generated
                                                from trading, then any bonus amount which has not been converted into cash will
                                                not be deducted from their account
                                            </li>
                                            <li>5. This bonus cannot be used in combination with any other bonuses</li>
                                            <li>6. MultiBank Group reserves the right to correct the trading calculation in the
                                                event of any suspected abuse or manipulation of this bonus policy and promotion
                                            </li>
                                        </ul>
                                </div>
                                <div class="tab-pane bonus-page-pane active" id="imperial_bonus">
                                    <h2 class="mex-h1 text-1e32a3 mex-m-t-15 uppercase text-left"><?php translate('IMPERIAL BONUS'); ?></h2>
                                    <p class="mex-m-b-20"><?php translate('New clients can earn up to $5,000 on their first-time
                                        deposits!'); ?></p>
                                    <div class="col-xs-12 mex-m-b-30">
                                        <div class="table-responsive mex-xs-p-none">
                                            <table class="table table-striped mex-table mex-has-type text-center">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"><?php translate('Deposit Amount'); ?></th>
                                                        <th class="text-center"><?php translate('Imperial Bonus'); ?></th>
                                                        <th class="text-center"><?php translate('Lots RT Target'); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>$50,000+</td>
                                                        <td>$5,000</td>
                                                        <td>&nbsp;1,520</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$40,000-$49,999</td>
                                                        <td>$3,500</td>
                                                        <td>1,130</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$30,000-$39,999</td>
                                                        <td>$2,250</td>
                                                        <td>770</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$20,000-$29,999</td>
                                                        <td>$1,250</td>
                                                        <td>440</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$10,000-$19,999</td>
                                                        <td>$500</td>
                                                        <td>190</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$5,000-$9,999</td>
                                                        <td>$250</td>
                                                        <td>130</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$2,000-$4,999</td>
                                                        <td>$125</td>
                                                        <td>95</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$1,000-$1,999</td>
                                                        <td>$75</td>
                                                        <td>75</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$200-$999</td>
                                                        <td>$40</td>
                                                        <td>40</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <h4><?php translate('Terms & Conditions'); ?></h4>
                                    <ul class="mex-list-conditions mex-m-t-15">
                                        <li>1. <?php translate('The Imperial Bonus is losable and available to be used within 3 months of
                                            account opening'); ?>
                                        </li>
                                        <li>2. <?php translate('This bonus is applicable to initial first-time deposits and not to further
                                            additional deposits (top ups)'); ?>
                                        </li>
                                        <li>3. <?php translate('This bonus is withdrawable once the lots round-trip target is reached (please
                                            see below ‘Lots RT Target’ table)'); ?>
                                        </li>
                                        <li>4. <?php translate('This bonus is non-rebate generating'); ?></li>
                                        <li>5. <?php translate('This bonus is available across all trading platforms and trading companies of
                                            MultiBank Group'); ?>
                                        </li>
                                        <li>6. <?php translate('This bonus shall be automatically deducted in case withdrawals are made
                                            before the lots round-trip target is reached'); ?>
                                        </li>
                                        <li>7. <?php translate('Manipulation of the system by arbitrage trading is strictly prohibited'); ?></li>
                                        <li>8. <?php translate('MultiBank Group reserves the right to correct the trading calculation in the
                                            event of any suspected abuse or manipulation of this bonus policy and promotion'); ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane bonus-page-pane" id="refer_bonus">
                                    <h2 class="mex-h1 text-1e32a3 mex-m-t-15 uppercase text-left"><?php translate('REFER A FRIEND BONUS'); ?></h2>
                                    <p class="mex-m-b-20"><?php translate('Spread the word about MultiBank Group and earn money for you and
                                        every friend that you introduce to us!'); ?></p>
                                    <h4><?php translate('Earn money by introducing a friend.'); ?></h4>
                                    <div class="col-xs-12 mex-m-b-30">
                                        <div class="table-responsive mex-xs-p-none">
                                            <table class="table table-striped mex-table mex-has-type text-center">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"><?php translate('Friend’s'); ?> <br><?php translate('Initial Deposit'); ?></th>
                                                        <th class="text-center"><?php translate('Your Bonus'); ?></th>
                                                        <th class="text-center"><?php translate('Friend’s Bonus'); ?></th>
                                                        <th class="text-center"><?php translate('Lots RT Target'); ?> <br><?php translate('to be reached by friend'); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>$1,000 - $2,000</td>
                                                        <td>$100</td>
                                                        <td>$100</td>
                                                        <td>25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$2,000 - $5,000</td>
                                                        <td>$200</td>
                                                        <td>$200</td>
                                                        <td>50</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$5,000 - $10,000</td>
                                                        <td>$300</td>
                                                        <td>$300</td>
                                                        <td>75</td>
                                                    </tr>
                                                    <tr>
                                                        <td>$10,000+</td>
                                                        <td>$400</td>
                                                        <td>$400</td>
                                                        <td>100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <h4><?php translate('Terms & Conditions'); ?></h4>
                                    <ul class="mex-list-conditions mex-m-t-15">
                                        <li><?php translate('1. Lots RT Target must be reached by friend within 3 months of friend’s initial
                                            deposit to qualify for this Refer a Friend Bonus'); ?>
                                        </li>
                                        <li><?php translate('2. Once the above conditions have been met, the bonus amounts will be credited
                                            to you and your friend’s MultiBank trading accounts within 5-7 business days
                                            respectively'); ?>
                                        </li>
                                        <li><?php translate('3. The referred friend must be a first-time new clients with MultiBank Group and
                                            cannot be an existing client'); ?>
                                        </li>
                                        <li><?php translate('4. The minimum initial deposit amount by friend must be $1,000'); ?></li>
                                        <li><?php translate('5. Each person can qualify for up to 8 Refer a Friend Bonus each calendar year');?>
                                        </li>
                                        <li><?php translate('6. This bonus is non-rebate generating'); ?></li>
                                        <li><?php translate('7. This bonus shall be automatically deducted in case withdrawals are made
                                            before the lots round-trip target is reached'); ?>
                                        </li>
                                        <li><?php translate('8. Manipulation of the system by arbitrage trading is strictly prohibited'); ?></li>
                                        <li><?php translate('9. MultiBank Group reserves the right to correct the trading calculation in the
                                            event of any suspected abuse or manipulation of this bonus policy and promotion'); ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .home-banner-form .form-container {
                background-color: rgba(255, 255, 255, 0.75);
                padding-bottom: 15px;
            }

            .home-banner-form .call-now-container {
                background-color: rgba(220, 220, 220, 0.75);
            }

            .home-banner-form .call-now-container label {
                margin: 5px 0x;
                line-height: 28px;
                font-size: 25px;
            }

            .home-banner-form .bg-000 label {
                line-height: 1;
                font-size: 1.8rem;
            }


            .home-banner-form {
                top: 155px;
                right: 180px;
            }

            .home-banner-form .bg-000 label {
                font-size: 1.4rem !important;
            }

            .home-banner-form .contact-form-button-container h3 {
                font-size: 1.4rem !important;
            }

            .home-banner-form .contact-form-button-container .my-1 {
                font-size: 1.4rem;
                margin-top: -0.1rem !important;
                margin-bottom: 0.05rem !important;
            }

            .page-top-banner {
                min-height: 500px;
            }

            .home-banner-form .form-check-label {
                line-height: 1rem;
            }


            @media (min-width: 1281px) and (max-width: 1600px) {
                .home-banner-form .p-1 {
                    padding: 0.15rem 0.25rem !important;
                }

                .home-banner-form .cb-partnership {
                    padding: 0.25rem 0.25rem 0 0.25rem !important;
                }

                .home-banner-form label {
                    line-height: 12px;
                }

                .home-banner-form .bg-dark {
                    margin: 0.25rem !important;
                }

                .home-banner-form .btn-contact {
                    margin-top: 0.25rem !important;
                }

                .page-top-banner {
                    min-height: 460px;
                }

                .home-banner-form {
                    right: 80px;
                }
            }


            @media (min-width: 992px) and (max-width: 1280px) {
                .page-top-banner {
                    min-height: 420px;
                }

                .home-banner-form {
                    top: 180px;
                    right: 30px;
                }

                .home-banner-form .p-1 {
                    padding: 0.10rem 0.25rem !important;
                }

                .home-banner-form .my-2 {
                    margin: 0.20rem 0.25rem !important;
                }

                .home-banner-form .cb-partnership {
                    padding: 0.25rem 0.25rem 0 0.25rem !important;
                }

                .home-banner-form label {
                    line-height: 12px;
                }

                .home-banner-form .bg-dark {
                    margin: 0.15rem 0.25rem !important;
                }

                .home-banner-form .btn-contact {
                    margin-top: 0.15rem !important;
                    padding: 2px 0 !important;
                }

                .home-banner-form .contact-form-button-container a {
                    margin-bottom: 3px !important;
                    padding: 0 auto !important;
                }

                .home-banner-form .form-check {
                    margin: -10px auto -4px !important;
                }

                .home-banner-form .mex-form-item input,
                .mex-form-item select {
                    height: 33px;
                }
            }

            @media (max-width: 1160px) {
                .home-banner-form {
                    top: 150px;
                    right: 25px;
                }
            }

            @media (max-width: 992px) {
                .hidden-xs {
                    display: none;
                }

                .home-banner-form {
                    margin-top: 15px !important;
                    ;
                }

                .btn.btn-mex,
                .btn.btn-mex-red,
                .btn.btn-mex-blue,
                .btn.btn-mex-green,
                .btn.btn-mex-gray,
                .btn.btn-mex-outline,
                .btn-mex-black {
                    padding: 13px 12px;
                }
            }

            @media (max-width: 767px) {
                .partnership .mex-card-cover {
                    height: 300px;
                }
            }
        </style>
        <script data-cfasync="false" src="/multibankfx/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="ca783208542e411d19700e4f-text/javascript">
            function switchToIndividual() {
                $form = $('#lp_campaign_07_16_v2');
                $form.attr('action', '/form/demoaccount');
                $form.find('.btn-contact').text('OPEN DEMO ACCOUNT');
            }

            function switchToPartnership() {
                $form = $('#lp_campaign_07_16_v2');
                $form.attr('action', '/form/contactus');
                $form.find('.btn-contact').text('BECOME PARTNER');
            }

            $(function() {
                $('#lp_campaign_07_16_v2').on('change', ".acc_1", function() {
                    if ($(this).val() == '2') {
                        switchToPartnership();
                    } else {
                        switchToIndividual();
                    }
                });


                $('.gototop-individual').click(function() {
                    $('#lp_campaign_07_16_v2 input[name="account_type"][value="1"]').prop("checked", true);
                    switchToIndividual();
                    $('html, body').animate({
                        scrollTop: $("#lp_campaign_07_16_v2").offset().top
                    }, 1000);
                });


                $('.gototop-partnership').click(function() {
                    $('#lp_campaign_07_16_v2 input[name="account_type"][value="2"]').prop("checked", true);
                    switchToPartnership();
                    $('html, body').animate({
                        scrollTop: $("#lp_campaign_07_16_v2").offset().top
                    }, 1000);
                });

                var defaultBonus = getUrlVars()['default_bonus'];
                if (typeof defaultBonus !== 'undefined' && defaultBonus !== '') {
                    $('.tab-title').removeClass('active');
                    $('.tab-pane').removeClass('active');
                    $('.tab-title').each(function() {
                        if ($(this).data('tab') == defaultBonus) {
                            $(this).addClass('active');
                        }
                    });

                    $('#' + defaultBonus).addClass('active');
                }
            });
        </script>
        <blockquote>
            <p>&nbsp;</p>
        </blockquote>
        <?php include_from_root('website_template/choose_where_to.php');?>
    </div>
    <script type="ca783208542e411d19700e4f-text/javascript">
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
        <div class="cc-country-selector--overlay" onclick="if (!window.__cfRLUnblockHandlers) return false; closeCountrySelectionDialog()" data-cf-modified-ca783208542e411d19700e4f-=""></div>
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
                    <button type="button" class="cc-country-selector--submit--btn" onclick="if (!window.__cfRLUnblockHandlers) return false; redirectCreditCard()" data-cf-modified-ca783208542e411d19700e4f-="">Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script type="ca783208542e411d19700e4f-text/javascript">
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
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="/multibankfx/cdn-cgi/l/email-protection.html#462535062b332a322f2427282d203e6825292b">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-ca783208542e411d19700e4f-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/chat.png" width="50" /> </span>
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
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OTozNQ==' />
                    <input type='hidden' name='token' value='$2y$10$Pv0RQFgjKyNyQXfsp9d5geBS5vouYP8RAte0AfDcymhwBteSPE7Fu' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:32] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:33] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:34] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:35] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/account/bonus?web=true' />
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
                    <button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-ca783208542e411d19700e4f-="">SEND
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
    <script data-cfasync="false" src="/multibankfx/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="ca783208542e411d19700e4f-text/javascript">
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
    <script src="/multibankfx/public_files/static_js/lang_data/en.js" type="ca783208542e411d19700e4f-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/jquery.dataTables.min.js" type="ca783208542e411d19700e4f-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/lazysizes.min.js" type="ca783208542e411d19700e4f-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/jquery.validate.min.js" type="ca783208542e411d19700e4f-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/intlTelInput.min.js" type="ca783208542e411d19700e4f-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/app.js" type="ca783208542e411d19700e4f-text/javascript"></script>
    <script type="ca783208542e411d19700e4f-text/javascript" async>
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
    <script type="ca783208542e411d19700e4f-text/javascript">
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
    <script type="ca783208542e411d19700e4f-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="ca783208542e411d19700e4f-text/javascript">
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
    <script type="ca783208542e411d19700e4f-text/javascript">
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
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="ca783208542e411d19700e4f-|49" defer=""></script>
</body>

</html>