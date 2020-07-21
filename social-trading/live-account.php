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

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <section class="flex-center page-top-banner">
        <img src="public_files/images/accounts_funding/live_account_top_banner.jpg" alt="Islamic Account" class="mex-img-cover" />
        <div class="container">
            <div class="row">
                <div class="col-10 col-xl-6 col-sm-10" ">
<h1 class=" mex-h1 text-left">
                    Live Account
                    </h1>
                    <div class="mex-content">
                        <p class="mex-m-t-30">MultiBank offer customers direct access to banks and exchanges through its advanced trading platforms</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .grapesjs-editable-field-item[data-grapesjs-field="field_component_01"][data-grapesjs-delta="0"] * {
            box-sizing: border-box;
        }

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
    <section class="table-background plants">
        <div class="container">
            <div class="row mex-m-b-40">
                <div class="mex-h1 text-center text-1e32a3 mx-auto">
                    Open a Live account
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto shadow-box bg-white">
                    <form action="https://www.multibankfx.com/form/liveaccount?" name='live_account_st_form' class='multibank-form  row-offset-5 row padding-20 justify-content-end std-la-form' method='post' enctype='multipart/form-data' id='live_account_st_form' target='' autocomplete='on'>
                        <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMzowNTowMA==' />
                        <input type='hidden' name='token' value='$2y$10$jl8UygDyRj0nNUOYXbEheuTXDSiAYsBEwYJ1qK3rqVAxNGcPtk4TO' />
                        <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 03:03:02] https://www.multibankfx.com/article/visit-multibank-ifx-cyprus-2019<br/><br/>[2020-06-27 03:03:33] https://www.multibankfx.com/article/milestones_20181011<br/><br/>[2020-06-27 03:03:34] https://www.multibankfx.com/article/milestones_20181011<br/><br/>[2020-06-27 03:05:00] https://www.multibankfx.com/social-trading/faq<br/><br/> <br/><br/> posted From: www.multibankfx.com/social-trading/live-account?web=true' />
                        <div class='form-group col-12 px-0 border-bottom border-secondary px-1'>
                            <label for='' class='mex-h3 text-left mex-m-t-15 mex-m-b-15'>
                                ACCOUNT INFORMATION</label>
                            <input type='hidden' data-message='Label Account Info is Required.' data-extra-message="" data-regex='' class=' form-control' name='label_account_info' placeholder='' value='' />
                        </div>
                        <div class='mex-form-item col-12 px-1 py-1'>
                            <label for='la_select_company' class='d-block'>
                                Select Regulator</label>
                            <select class='d-block' data-message='Company is required.' data-extra-message="" data-regex='' id='la_select_company' name='company' required readonly>
                                <option value='6' selected='selected' class=''>MultiBank FX BVI (Authorised and Regulated by “FSC” license No. SIBA/L/14/1068 )</option>
                            </select></div>
                        <div class='mex-form-item col-12 col-lg-6 px-1 py-1'>
                            <label for='' class='d-block'>
                                Select Platform</label>
                            <select class='d-block' data-message='Platform Type is Required.' data-extra-message="" data-regex='' name='platform_type' required readonly>
                                <option value='7' selected='selected' class=''>Maximus</option>
                            </select></div>
                        <div class='mex-form-item col-12 col-lg-6 px-1 py-1'>
                            <label for='' class='d-block'>
                                Select Leverage</label>
                            <select class='d-block' data-message='Leverage Field is required.' data-extra-message="" data-regex='' name='leverage' required readonly>
                                <option value='1' selected='selected' class=''>1:100</option>
                            </select></div>
                        <div class='mex-form-item col-12 col-lg-6 px-1 py-1'>
                            <label for='la_select_client_type' class='d-block'>
                                Select Client Type</label>
                            <select class='d-block' data-message='' data-extra-message="" data-regex='' id='la_select_client_type' name='client_type' required>
                                <option value='' class=' '>Please Select Client Type</option>
                                <option value='2' selected='selected' class=''>Individual Client</option>
                            </select></div>
                        <div class='lei-input-container invisible col-12 col-lg-6 mex-form-item px-1 py-1'>
                            <label for='' class='d-block'>
                                Legal Entity Identifier</label>
                            <input type="text" data-message="This field is required." data-extra-message="" data-regex="" class="d-block" name="lei_code" $field_id_code placeholder="" value="" />
                        </div>
                        <div class='d-none mex-form-item col-12 col-lg-6 mb-5 pt-1 la-container-has_tin'>
                            <label for='' class='d-block'>
                                Do you have a TIN number?</label>
                            <div class='form-check form-check-inline'><input data-message='This field is required.' data-extra-message="" class='   ' name='has_tin' type='radio' value='1' />
                                <label class='  ' for=''>Yes</label>
                            </div>
                            <div class='form-check form-check-inline'><input data-message='This field is required.' data-extra-message="" class='   ' name='has_tin' type='radio' value='0' />
                                <label class='  ' for=''>No</label>
                            </div>
                        </div>
                        <div class='mex-form-item col-6 p-1 d-none la-container-tin_number'>
                            <label for='' class='d-block'>
                                TIN Number</label>
                            <input type="text" data-message="This field is required." data-extra-message="" data-regex="null" class="d-block" name="tin_number" $field_id_code placeholder="" value="" />
                        </div>
                        <div class='col-6'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' ' name='' placeholder='' value='' />
                        </div>
                        <div class='form-group col-12 px-0 border-bottom border-secondary px-1'>
                            <label for='' class='mex-h3 text-left mex-m-t-15 mex-m-b-15'>
                                CLIENT INFORMATION</label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' mex-form-item d-block' name='label_client_info' placeholder='' value='' />
                        </div>
                        <div class='mex-form-item col-12 p-1 la-container-name'>
                            <label for='' class='d-block la-label-name'>
                                Full Name</label>
                            <input type="text" data-message="Full Name is Required." data-extra-message="Full Name is incorrect." data-regex="" class="d-block" name="name" $field_id_code placeholder="" required value="" />
                        </div>
                        <div class='mex-form-item col-6 p-1 d-none la-container-name-2'>
                            <label for='' class='d-block'>
                                Name of 2nd Individual</label>
                            <input type="text" data-message="" data-extra-message="" data-regex="" class="d-block la-field-name-2" name="name2" $field_id_code placeholder="" value="" />
                        </div>
                        <div class='mex-form-item col-12 col-lg-6 px-1 py-1'>
                            <label for='' class='d-block'>
                                Email</label>
                            <input type='email' data-message='Email is Required.' data-extra-message="" data-regex='' class='d-block' name='email' placeholder='' required value='' />
                        </div>
                        <div class='mex-form-item col-12 col-lg-6 p-1'>
                            <label for='' class='d-block'>
                                Confirm Email</label>
                            <input type='email' data-message='Confirm Email is Required.' data-extra-message="Email Mismatched." data-regex='' class='d-block' name='confirm_email' placeholder='' required value='' />
                        </div>
                        <div class='mex-form-item col-12 col-lg-6 p-1'>
                            <label for='' class='d-block'>
                                Country</label>
                            <select data-message='Country is Required.' data-extra-message="" class='selection-country d-block select_with_country' name='country' required>
                                <option value='' selected='selected'>Select Country</option>
                                <option data-country_iso_code="AF" data-name='AF' value='+93'>AFGHANISTAN(+93)</option>
                                <option data-country_iso_code="AL" data-name='AL' value='+355'>ALBANIA(+355)</option>
                                <option data-country_iso_code="DZ" data-name='DZ' value='+213'>ALGERIA(+213)</option>
                                <option data-country_iso_code="AS" data-name='AS' value='+1684'>AMERICAN SAMOA(+1684)</option>
                                <option data-country_iso_code="AD" data-name='AD' value='+376'>ANDORRA(+376)</option>
                                <option data-country_iso_code="AO" data-name='AO' value='+244'>ANGOLA(+244)</option>
                                <option data-country_iso_code="AI" data-name='AI' value='+1264'>ANGUILLA(+1264)</option>
                                <option data-country_iso_code="AQ" data-name='AQ' value='+0'>ANTARCTICA(+0)</option>
                                <option data-country_iso_code="AG" data-name='AG' value='+1268'>ANTIGUA AND BARBUDA(+1268)</option>
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
                                <option data-country_iso_code="BA" data-name='BA' value='+387'>BOSNIA AND HERZEGOVINA(+387)</option>
                                <option data-country_iso_code="BW" data-name='BW' value='+267'>BOTSWANA(+267)</option>
                                <option data-country_iso_code="BV" data-name='BV' value='+0'>BOUVET ISLAND(+0)</option>
                                <option data-country_iso_code="BR" data-name='BR' value='+55'>BRAZIL(+55)</option>
                                <option data-country_iso_code="IO" data-name='IO' value='+246'>BRITISH INDIAN OCEAN TERRITORY(+246)</option>
                                <option data-country_iso_code="BN" data-name='BN' value='+673'>BRUNEI DARUSSALAM(+673)</option>
                                <option data-country_iso_code="BG" data-name='BG' value='+359'>BULGARIA(+359)</option>
                                <option data-country_iso_code="BF" data-name='BF' value='+226'>BURKINA FASO(+226)</option>
                                <option data-country_iso_code="BI" data-name='BI' value='+257'>BURUNDI(+257)</option>
                                <option data-country_iso_code="KH" data-name='KH' value='+855'>CAMBODIA(+855)</option>
                                <option data-country_iso_code="CM" data-name='CM' value='+237'>CAMEROON(+237)</option>
                                <option data-country_iso_code="CA" data-name='CA' value='+1'>CANADA(+1)</option>
                                <option data-country_iso_code="CV" data-name='CV' value='+238'>CAPE VERDE(+238)</option>
                                <option data-country_iso_code="KY" data-name='KY' value='+1345'>CAYMAN ISLANDS(+1345)</option>
                                <option data-country_iso_code="CF" data-name='CF' value='+236'>CENTRAL AFRICAN REPUBLIC(+236)</option>
                                <option data-country_iso_code="TD" data-name='TD' value='+235'>CHAD(+235)</option>
                                <option data-country_iso_code="CL" data-name='CL' value='+56'>CHILE(+56)</option>
                                <option data-country_iso_code="CN" data-name='CN' value='+86'>CHINA(+86)</option>
                                <option data-country_iso_code="CX" data-name='CX' value='+61'>CHRISTMAS ISLAND(+61)</option>
                                <option data-country_iso_code="CC" data-name='CC' value='+672'>COCOS (KEELING) ISLANDS(+672)</option>
                                <option data-country_iso_code="CO" data-name='CO' value='+57'>COLOMBIA(+57)</option>
                                <option data-country_iso_code="KM" data-name='KM' value='+269'>COMOROS(+269)</option>
                                <option data-country_iso_code="CG" data-name='CG' value='+242'>CONGO(+242)</option>
                                <option data-country_iso_code="CD" data-name='CD' value='+242'>CONGO, THE DEMOCRATIC REPUBLIC OF THE(+242)</option>
                                <option data-country_iso_code="CK" data-name='CK' value='+682'>COOK ISLANDS(+682)</option>
                                <option data-country_iso_code="CR" data-name='CR' value='+506'>COSTA RICA(+506)</option>
                                <option data-country_iso_code="CI" data-name='CI' value='+225'>COTE D'IVOIRE(+225)</option>
                                <option data-country_iso_code="HR" data-name='HR' value='+385'>CROATIA(+385)</option>
                                <option data-country_iso_code="CU" data-name='CU' value='+53'>CUBA(+53)</option>
                                <option data-country_iso_code="CY" data-name='CY' value='+357'>CYPRUS(+357)</option>
                                <option data-country_iso_code="CZ" data-name='CZ' value='+420'>CZECH REPUBLIC(+420)</option>
                                <option data-country_iso_code="DK" data-name='DK' value='+45'>DENMARK(+45)</option>
                                <option data-country_iso_code="DJ" data-name='DJ' value='+253'>DJIBOUTI(+253)</option>
                                <option data-country_iso_code="DM" data-name='DM' value='+1767'>DOMINICA(+1767)</option>
                                <option data-country_iso_code="DO" data-name='DO' value='+1809'>DOMINICAN REPUBLIC(+1809)</option>
                                <option data-country_iso_code="EC" data-name='EC' value='+593'>ECUADOR(+593)</option>
                                <option data-country_iso_code="EG" data-name='EG' value='+20'>EGYPT(+20)</option>
                                <option data-country_iso_code="SV" data-name='SV' value='+503'>EL SALVADOR(+503)</option>
                                <option data-country_iso_code="GQ" data-name='GQ' value='+240'>EQUATORIAL GUINEA(+240)</option>
                                <option data-country_iso_code="ER" data-name='ER' value='+291'>ERITREA(+291)</option>
                                <option data-country_iso_code="EE" data-name='EE' value='+372'>ESTONIA(+372)</option>
                                <option data-country_iso_code="ET" data-name='ET' value='+251'>ETHIOPIA(+251)</option>
                                <option data-country_iso_code="FK" data-name='FK' value='+500'>FALKLAND ISLANDS (MALVINAS)(+500)</option>
                                <option data-country_iso_code="FO" data-name='FO' value='+298'>FAROE ISLANDS(+298)</option>
                                <option data-country_iso_code="FJ" data-name='FJ' value='+679'>FIJI(+679)</option>
                                <option data-country_iso_code="FI" data-name='FI' value='+358'>FINLAND(+358)</option>
                                <option data-country_iso_code="FR" data-name='FR' value='+33'>FRANCE(+33)</option>
                                <option data-country_iso_code="GF" data-name='GF' value='+594'>FRENCH GUIANA(+594)</option>
                                <option data-country_iso_code="PF" data-name='PF' value='+689'>FRENCH POLYNESIA(+689)</option>
                                <option data-country_iso_code="TF" data-name='TF' value='+0'>FRENCH SOUTHERN TERRITORIES(+0)</option>
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
                                <option data-country_iso_code="GW" data-name='GW' value='+245'>GUINEA-BISSAU(+245)</option>
                                <option data-country_iso_code="GY" data-name='GY' value='+592'>GUYANA(+592)</option>
                                <option data-country_iso_code="HT" data-name='HT' value='+509'>HAITI(+509)</option>
                                <option data-country_iso_code="HM" data-name='HM' value='+0'>HEARD ISLAND AND MCDONALD ISLANDS(+0)</option>
                                <option data-country_iso_code="VA" data-name='VA' value='+39'>HOLY SEE (VATICAN CITY STATE)(+39)</option>
                                <option data-country_iso_code="HN" data-name='HN' value='+504'>HONDURAS(+504)</option>
                                <option data-country_iso_code="HK" data-name='HK' value='+852'>HONG KONG(+852)</option>
                                <option data-country_iso_code="HU" data-name='HU' value='+36'>HUNGARY(+36)</option>
                                <option data-country_iso_code="IS" data-name='IS' value='+354'>ICELAND(+354)</option>
                                <option data-country_iso_code="IN" data-name='IN' value='+91'>INDIA(+91)</option>
                                <option data-country_iso_code="ID" data-name='ID' value='+62'>INDONESIA(+62)</option>
                                <option data-country_iso_code="IR" data-name='IR' value='+98'>IRAN, ISLAMIC REPUBLIC OF(+98)</option>
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
                                <option data-country_iso_code="KP" data-name='KP' value='+850'>KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF(+850)</option>
                                <option data-country_iso_code="KR" data-name='KR' value='+82'>KOREA, REPUBLIC OF(+82)</option>
                                <option data-country_iso_code="KW" data-name='KW' value='+965'>KUWAIT(+965)</option>
                                <option data-country_iso_code="KG" data-name='KG' value='+996'>KYRGYZSTAN(+996)</option>
                                <option data-country_iso_code="LA" data-name='LA' value='+856'>LAO PEOPLE'S DEMOCRATIC REPUBLIC(+856)</option>
                                <option data-country_iso_code="LV" data-name='LV' value='+371'>LATVIA(+371)</option>
                                <option data-country_iso_code="LB" data-name='LB' value='+961'>LEBANON(+961)</option>
                                <option data-country_iso_code="LS" data-name='LS' value='+266'>LESOTHO(+266)</option>
                                <option data-country_iso_code="LR" data-name='LR' value='+231'>LIBERIA(+231)</option>
                                <option data-country_iso_code="LY" data-name='LY' value='+218'>LIBYAN ARAB JAMAHIRIYA(+218)</option>
                                <option data-country_iso_code="LI" data-name='LI' value='+423'>LIECHTENSTEIN(+423)</option>
                                <option data-country_iso_code="LT" data-name='LT' value='+370'>LITHUANIA(+370)</option>
                                <option data-country_iso_code="LU" data-name='LU' value='+352'>LUXEMBOURG(+352)</option>
                                <option data-country_iso_code="MO" data-name='MO' value='+853'>MACAO(+853)</option>
                                <option data-country_iso_code="MK" data-name='MK' value='+389'>MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF(+389)</option>
                                <option data-country_iso_code="MG" data-name='MG' value='+261'>MADAGASCAR(+261)</option>
                                <option data-country_iso_code="MW" data-name='MW' value='+265'>MALAWI(+265)</option>
                                <option data-country_iso_code="MY" data-name='MY' value='+60'>MALAYSIA(+60)</option>
                                <option data-country_iso_code="MV" data-name='MV' value='+960'>MALDIVES(+960)</option>
                                <option data-country_iso_code="ML" data-name='ML' value='+223'>MALI(+223)</option>
                                <option data-country_iso_code="MT" data-name='MT' value='+356'>MALTA(+356)</option>
                                <option data-country_iso_code="MH" data-name='MH' value='+692'>MARSHALL ISLANDS(+692)</option>
                                <option data-country_iso_code="MQ" data-name='MQ' value='+596'>MARTINIQUE(+596)</option>
                                <option data-country_iso_code="MR" data-name='MR' value='+222'>MAURITANIA(+222)</option>
                                <option data-country_iso_code="MU" data-name='MU' value='+230'>MAURITIUS(+230)</option>
                                <option data-country_iso_code="YT" data-name='YT' value='+269'>MAYOTTE(+269)</option>
                                <option data-country_iso_code="MX" data-name='MX' value='+52'>MEXICO(+52)</option>
                                <option data-country_iso_code="FM" data-name='FM' value='+691'>MICRONESIA, FEDERATED STATES OF(+691)</option>
                                <option data-country_iso_code="MD" data-name='MD' value='+373'>MOLDOVA, REPUBLIC OF(+373)</option>
                                <option data-country_iso_code="MC" data-name='MC' value='+377'>MONACO(+377)</option>
                                <option data-country_iso_code="MN" data-name='MN' value='+976'>MONGOLIA(+976)</option>
                                <option data-country_iso_code="ME" data-name='ME' value='+499'>MONTENEGRO(+499)</option>
                                <option data-country_iso_code="MS" data-name='MS' value='+1664'>MONTSERRAT(+1664)</option>
                                <option data-country_iso_code="MA" data-name='MA' value='+212'>MOROCCO(+212)</option>
                                <option data-country_iso_code="MZ" data-name='MZ' value='+258'>MOZAMBIQUE(+258)</option>
                                <option data-country_iso_code="MM" data-name='MM' value='+95'>MYANMAR(+95)</option>
                                <option data-country_iso_code="NA" data-name='NA' value='+264'>NAMIBIA(+264)</option>
                                <option data-country_iso_code="NR" data-name='NR' value='+674'>NAURU(+674)</option>
                                <option data-country_iso_code="NP" data-name='NP' value='+977'>NEPAL(+977)</option>
                                <option data-country_iso_code="NL" data-name='NL' value='+31'>NETHERLANDS(+31)</option>
                                <option data-country_iso_code="AN" data-name='AN' value='+599'>NETHERLANDS ANTILLES(+599)</option>
                                <option data-country_iso_code="NC" data-name='NC' value='+687'>NEW CALEDONIA(+687)</option>
                                <option data-country_iso_code="NZ" data-name='NZ' value='+64'>NEW ZEALAND(+64)</option>
                                <option data-country_iso_code="NI" data-name='NI' value='+505'>NICARAGUA(+505)</option>
                                <option data-country_iso_code="NE" data-name='NE' value='+227'>NIGER(+227)</option>
                                <option data-country_iso_code="NG" data-name='NG' value='+234'>NIGERIA(+234)</option>
                                <option data-country_iso_code="NU" data-name='NU' value='+683'>NIUE(+683)</option>
                                <option data-country_iso_code="NF" data-name='NF' value='+672'>NORFOLK ISLAND(+672)</option>
                                <option data-country_iso_code="MP" data-name='MP' value='+1670'>NORTHERN MARIANA ISLANDS(+1670)</option>
                                <option data-country_iso_code="NO" data-name='NO' value='+47'>NORWAY(+47)</option>
                                <option data-country_iso_code="OM" data-name='OM' value='+968'>OMAN(+968)</option>
                                <option data-country_iso_code="PK" data-name='PK' value='+92'>PAKISTAN(+92)</option>
                                <option data-country_iso_code="PW" data-name='PW' value='+680'>PALAU(+680)</option>
                                <option data-country_iso_code="PS" data-name='PS' value='+970'>PALESTINE, STATE OF(+970)</option>
                                <option data-country_iso_code="PA" data-name='PA' value='+507'>PANAMA(+507)</option>
                                <option data-country_iso_code="PG" data-name='PG' value='+675'>PAPUA NEW GUINEA(+675)</option>
                                <option data-country_iso_code="PY" data-name='PY' value='+595'>PARAGUAY(+595)</option>
                                <option data-country_iso_code="PE" data-name='PE' value='+51'>PERU(+51)</option>
                                <option data-country_iso_code="PH" data-name='PH' value='+63'>PHILIPPINES(+63)</option>
                                <option data-country_iso_code="PN" data-name='PN' value='+0'>PITCAIRN(+0)</option>
                                <option data-country_iso_code="PL" data-name='PL' value='+48'>POLAND(+48)</option>
                                <option data-country_iso_code="PT" data-name='PT' value='+351'>PORTUGAL(+351)</option>
                                <option data-country_iso_code="PR" data-name='PR' value='+1787'>PUERTO RICO(+1787)</option>
                                <option data-country_iso_code="QA" data-name='QA' value='+974'>QATAR(+974)</option>
                                <option data-country_iso_code="RE" data-name='RE' value='+262'>REUNION(+262)</option>
                                <option data-country_iso_code="RO" data-name='RO' value='+40'>ROMANIA(+40)</option>
                                <option data-country_iso_code="RU" data-name='RU' value='+70'>RUSSIAN FEDERATION(+70)</option>
                                <option data-country_iso_code="RW" data-name='RW' value='+250'>RWANDA(+250)</option>
                                <option data-country_iso_code="SH" data-name='SH' value='+290'>SAINT HELENA(+290)</option>
                                <option data-country_iso_code="KN" data-name='KN' value='+1869'>SAINT KITTS AND NEVIS(+1869)</option>
                                <option data-country_iso_code="LC" data-name='LC' value='+1758'>SAINT LUCIA(+1758)</option>
                                <option data-country_iso_code="PM" data-name='PM' value='+508'>SAINT PIERRE AND MIQUELON(+508)</option>
                                <option data-country_iso_code="VC" data-name='VC' value='+1784'>SAINT VINCENT AND THE GRENADINES(+1784)</option>
                                <option data-country_iso_code="WS" data-name='WS' value='+684'>SAMOA(+684)</option>
                                <option data-country_iso_code="SM" data-name='SM' value='+378'>SAN MARINO(+378)</option>
                                <option data-country_iso_code="ST" data-name='ST' value='+239'>SAO TOME AND PRINCIPE(+239)</option>
                                <option data-country_iso_code="SA" data-name='SA' value='+966'>SAUDI ARABIA(+966)</option>
                                <option data-country_iso_code="SN" data-name='SN' value='+221'>SENEGAL(+221)</option>
                                <option data-country_iso_code="RS" data-name='RS' value='+381'>SERBIA(+381)</option>
                                <option data-country_iso_code="SC" data-name='SC' value='+248'>SEYCHELLES(+248)</option>
                                <option data-country_iso_code="SL" data-name='SL' value='+232'>SIERRA LEONE(+232)</option>
                                <option data-country_iso_code="SG" data-name='SG' value='+65'>SINGAPORE(+65)</option>
                                <option data-country_iso_code="SK" data-name='SK' value='+421'>SLOVAKIA(+421)</option>
                                <option data-country_iso_code="SI" data-name='SI' value='+386'>SLOVENIA(+386)</option>
                                <option data-country_iso_code="SB" data-name='SB' value='+677'>SOLOMON ISLANDS(+677)</option>
                                <option data-country_iso_code="SO" data-name='SO' value='+252'>SOMALIA(+252)</option>
                                <option data-country_iso_code="ZA" data-name='ZA' value='+27'>SOUTH AFRICA(+27)</option>
                                <option data-country_iso_code="GS" data-name='GS' value='+0'>SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS(+0)</option>
                                <option data-country_iso_code="ES" data-name='ES' value='+34'>SPAIN(+34)</option>
                                <option data-country_iso_code="LK" data-name='LK' value='+94'>SRI LANKA(+94)</option>
                                <option data-country_iso_code="SD" data-name='SD' value='+249'>SUDAN(+249)</option>
                                <option data-country_iso_code="SR" data-name='SR' value='+597'>SURINAME(+597)</option>
                                <option data-country_iso_code="SJ" data-name='SJ' value='+47'>SVALBARD AND JAN MAYEN(+47)</option>
                                <option data-country_iso_code="SZ" data-name='SZ' value='+268'>SWAZILAND(+268)</option>
                                <option data-country_iso_code="SE" data-name='SE' value='+46'>SWEDEN(+46)</option>
                                <option data-country_iso_code="CH" data-name='CH' value='+41'>SWITZERLAND(+41)</option>
                                <option data-country_iso_code="SY" data-name='SY' value='+963'>SYRIAN ARAB REPUBLIC(+963)</option>
                                <option data-country_iso_code="TW" data-name='TW' value='+886'>TAIWAN, PROVINCE OF CHINA(+886)</option>
                                <option data-country_iso_code="TJ" data-name='TJ' value='+992'>TAJIKISTAN(+992)</option>
                                <option data-country_iso_code="TZ" data-name='TZ' value='+255'>TANZANIA, UNITED REPUBLIC OF(+255)</option>
                                <option data-country_iso_code="TH" data-name='TH' value='+66'>THAILAND(+66)</option>
                                <option data-country_iso_code="TL" data-name='TL' value='+670'>TIMOR-LESTE(+670)</option>
                                <option data-country_iso_code="TG" data-name='TG' value='+228'>TOGO(+228)</option>
                                <option data-country_iso_code="TK" data-name='TK' value='+690'>TOKELAU(+690)</option>
                                <option data-country_iso_code="TO" data-name='TO' value='+676'>TONGA(+676)</option>
                                <option data-country_iso_code="TT" data-name='TT' value='+1868'>TRINIDAD AND TOBAGO(+1868)</option>
                                <option data-country_iso_code="TN" data-name='TN' value='+216'>TUNISIA(+216)</option>
                                <option data-country_iso_code="TR" data-name='TR' value='+90'>TURKEY(+90)</option>
                                <option data-country_iso_code="TM" data-name='TM' value='+7370'>TURKMENISTAN(+7370)</option>
                                <option data-country_iso_code="TC" data-name='TC' value='+1649'>TURKS AND CAICOS ISLANDS(+1649)</option>
                                <option data-country_iso_code="TV" data-name='TV' value='+688'>TUVALU(+688)</option>
                                <option data-country_iso_code="UG" data-name='UG' value='+256'>UGANDA(+256)</option>
                                <option data-country_iso_code="UA" data-name='UA' value='+380'>UKRAINE(+380)</option>
                                <option data-country_iso_code="AE" data-name='AE' value='+971'>UNITED ARAB EMIRATES(+971)</option>
                                <option data-country_iso_code="GB" data-name='GB' value='+44'>UNITED KINGDOM(+44)</option>
                                <option data-country_iso_code="US" data-name='US' value='+1'>UNITED STATES(+1)</option>
                                <option data-country_iso_code="UM" data-name='UM' value='+1'>UNITED STATES MINOR OUTLYING ISLANDS(+1)</option>
                                <option data-country_iso_code="UY" data-name='UY' value='+598'>URUGUAY(+598)</option>
                                <option data-country_iso_code="UZ" data-name='UZ' value='+998'>UZBEKISTAN(+998)</option>
                                <option data-country_iso_code="VU" data-name='VU' value='+678'>VANUATU(+678)</option>
                                <option data-country_iso_code="VE" data-name='VE' value='+58'>VENEZUELA(+58)</option>
                                <option data-country_iso_code="VN" data-name='VN' value='+84'>VIET NAM(+84)</option>
                                <option data-country_iso_code="VG" data-name='VG' value='+1284'>VIRGIN ISLANDS, BRITISH(+1284)</option>
                                <option data-country_iso_code="VI" data-name='VI' value='+1340'>VIRGIN ISLANDS, U.S.(+1340)</option>
                                <option data-country_iso_code="WF" data-name='WF' value='+681'>WALLIS AND FUTUNA(+681)</option>
                                <option data-country_iso_code="EH" data-name='EH' value='+212'>WESTERN SAHARA(+212)</option>
                                <option data-country_iso_code="YE" data-name='YE' value='+967'>YEMEN(+967)</option>
                                <option data-country_iso_code="ZM" data-name='ZM' value='+260'>ZAMBIA(+260)</option>
                                <option data-country_iso_code="ZW" data-name='ZW' value='+263'>ZIMBABWE(+263)</option>
                            </select><input type="hidden" name="country_name" value="" /></div>
                        <div class='mex-form-item col-12 col-lg-6 p-1'>
                            <label for='' class='d-block'>
                                Mobile Number</label>
                            <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.' data-extra-message="Phone Number is Invalid." data-regex='[0-9]{5,15}' class='input_with_phone d-block' name='phone_display' placeholder='' required value='' />
                            <input type='hidden' name='phone' />
                        </div>
                        <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                            <input type='number' name='phone_sms_verif_code' class='sms_verif_code regCon oth_sp' placeholder='SMS Code' required='required' number='true' autocomplete='off' list='autocompleteOff' />
                        </div>
                        <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                            <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset ' id='button-send-callme_form' type='button' title='Send Code'>Send Code</button>
                        </div>
                        <div class='form-group col-12 px-0 border-bottom border-secondary px-1'>
                            <label for='' class='mex-h3 text-left mex-m-t-15 mex-m-b-15'>
                                DOCUMENT UPLOAD</label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' mex-form-item d-block' name='label_document_upload' placeholder='' value='' />
                        </div>
                        <div class='file-upload-container col-12 col-lg-12 p-1 d-flex flex-column'>
                            <label for='' class='d-block'>
                                Upload Document (Passport, National ID, or Proof of Residence)</label>
                            <input type='file' data-message='Supporting document required.' data-extra-message="" data-regex='' class='invisible h-00' name='file_id_front' required value='' />
                            <div class='row mx-0'><span class='file-info col-8 mex-translatable' data-en='Select File'>Select File..</span><button type='button' class='col-4 browse-btn mex-translatable' data-en='Select File'>Select File</button></div>
                        </div>
                        <div class='col-6'>
                            <label for='' class=''>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' ' name='1' placeholder='' value='' />
                        </div>
                        <div class='form-group col-12 px-0 border-bottom border-secondary px-1'>
                            <label for='' class='mex-h3 text-left mex-m-t-15 mex-m-b-15'>
                            </label>
                            <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' mex-form-item d-block' name='label_submit' placeholder='' value='' />
                        </div><button type='submit' class='btn btn-mex mx-auto' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-e199841aa42d37ce99459c17-="">SUBMIT</button>
                    </form>
                    <div class="px-1 " style="padding:15px 0px;">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label label-1 " for="terms_conditions">By submitting this form, you agree to accept the <a href="terms-conditions.php" target="_blank" class="text-22A0C4" style="padding:0 !important;">Terms &amp; Conditions</a>, <a href="privacy-policy.php" target="_blank" class="text-22A0C4" style="padding:0 !important;">Privacy Policy</a>, and <a href="cookie-policy.php" target="_blank" class="text-22A0C4" style="padding:0 !important;">Cookie Policy</a>.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="e199841aa42d37ce99459c17-text/javascript">
        $(function() {
            if (getCookie("form-lp-name") != "") {
                $('#live_account_form input[name=name]').val(getCookie("form-lp-name"));
            }
            deleteCookie("form-lp-name");

            if (getCookie("form-lp-email") != "") {
                $('#live_account_form input[name=email]').val(getCookie("form-lp-email"));
            }
            deleteCookie("form-lp-email");

            if (getCookie("form-lp-country") != "") {
                $('#live_account_form select[name=country]').val(getCookie("form-lp-country"));
            }
            deleteCookie("form-lp-country");

            if (getCookie("form-lp-phone") != "") {
                $('#live_account_form input[name=phone]').val(getCookie("form-lp-phone"));
            }
            deleteCookie("form-lp-phone");
        });

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function deleteCookie(cname) {
            document.cookie = cname + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
    </script>
    <?php include_from_root('website_template/page_footer.php'); ?>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+12139924748">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#731000331e061f071a11121d18150b5d101c1e">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-e199841aa42d37ce99459c17-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/chat.png" width="50" /> </span>
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
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMzowNTowMA==' />
                    <input type='hidden' name='token' value='$2y$10$D/QXqRn9uB6ItRiM9yVwq.C647oMsjhpTVAFnviluRj/Y7K8NBVOe' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 03:03:02] https://www.multibankfx.com/article/visit-multibank-ifx-cyprus-2019<br/><br/>[2020-06-27 03:03:33] https://www.multibankfx.com/article/milestones_20181011<br/><br/>[2020-06-27 03:03:34] https://www.multibankfx.com/article/milestones_20181011<br/><br/>[2020-06-27 03:05:00] https://www.multibankfx.com/social-trading/faq<br/><br/> <br/><br/> posted From: www.multibankfx.com/social-trading/live-account?web=true' />
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
                            <option data-country_iso_code="IO" data-name='IO' value='IO'>BRITISH INDIAN OCEAN TERRITORY</option>
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
                            <option data-country_iso_code="CD" data-name='CD' value='CD'>CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
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
                            <option data-country_iso_code="FK" data-name='FK' value='FK'>FALKLAND ISLANDS (MALVINAS)</option>
                            <option data-country_iso_code="FO" data-name='FO' value='FO'>FAROE ISLANDS</option>
                            <option data-country_iso_code="FJ" data-name='FJ' value='FJ'>FIJI</option>
                            <option data-country_iso_code="FI" data-name='FI' value='FI'>FINLAND</option>
                            <option data-country_iso_code="FR" data-name='FR' value='FR'>FRANCE</option>
                            <option data-country_iso_code="GF" data-name='GF' value='GF'>FRENCH GUIANA</option>
                            <option data-country_iso_code="PF" data-name='PF' value='PF'>FRENCH POLYNESIA</option>
                            <option data-country_iso_code="TF" data-name='TF' value='TF'>FRENCH SOUTHERN TERRITORIES</option>
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
                            <option data-country_iso_code="HM" data-name='HM' value='HM'>HEARD ISLAND AND MCDONALD ISLANDS</option>
                            <option data-country_iso_code="VA" data-name='VA' value='VA'>HOLY SEE (VATICAN CITY STATE)</option>
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
                            <option data-country_iso_code="KP" data-name='KP' value='KP'>KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                            <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF</option>
                            <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                            <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                            <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                            <option data-country_iso_code="LV" data-name='LV' value='LV'>LATVIA</option>
                            <option data-country_iso_code="LB" data-name='LB' value='LB'>LEBANON</option>
                            <option data-country_iso_code="LS" data-name='LS' value='LS'>LESOTHO</option>
                            <option data-country_iso_code="LR" data-name='LR' value='LR'>LIBERIA</option>
                            <option data-country_iso_code="LY" data-name='LY' value='LY'>LIBYAN ARAB JAMAHIRIYA</option>
                            <option data-country_iso_code="LI" data-name='LI' value='LI'>LIECHTENSTEIN</option>
                            <option data-country_iso_code="LT" data-name='LT' value='LT'>LITHUANIA</option>
                            <option data-country_iso_code="LU" data-name='LU' value='LU'>LUXEMBOURG</option>
                            <option data-country_iso_code="MO" data-name='MO' value='MO'>MACAO</option>
                            <option data-country_iso_code="MK" data-name='MK' value='MK'>MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
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
                            <option data-country_iso_code="FM" data-name='FM' value='FM'>MICRONESIA, FEDERATED STATES OF</option>
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
                            <option data-country_iso_code="VC" data-name='VC' value='VC'>SAINT VINCENT AND THE GRENADINES</option>
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
                            <option data-country_iso_code="GS" data-name='GS' value='GS'>SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
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
                            <option data-country_iso_code="TZ" data-name='TZ' value='TZ'>TANZANIA, UNITED REPUBLIC OF</option>
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
                            <option data-country_iso_code="UM" data-name='UM' value='UM'>UNITED STATES MINOR OUTLYING ISLANDS</option>
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
                        <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset ' id='button-send-callme_form' type='button' title='Send Code'>Send Code</button>
                    </div>
                    <div class='mex-form-item col-12 mb-3 p-1'>
                        <label for='order_message' class='d-block'>
                        </label>
                        <textarea data-message='Message is Required.' data-extra-message="Message is Invalid." data-regex='' class=' form-control w-100 ta-message' name='message' id='order_message' placeholder=''>Hello, I am interested in learning more about MultiBank products and services. Could you please contact me</textarea>
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-e199841aa42d37ce99459c17-="">SEND</button>
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
    <script type="e199841aa42d37ce99459c17-text/javascript">
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
    <script src="public_files/static_js/lang_data/en.js" type="e199841aa42d37ce99459c17-text/javascript"></script>
    <script src="public_files/static_js/jquery.dataTables.min.js" type="e199841aa42d37ce99459c17-text/javascript"></script>
    <script src="public_files/static_js/lazysizes.min.js" type="e199841aa42d37ce99459c17-text/javascript"></script>
    <script src="public_files/static_js/jquery.validate.min.js" type="e199841aa42d37ce99459c17-text/javascript"></script>
    <script src="public_files/static_js/intlTelInput.min.js" type="e199841aa42d37ce99459c17-text/javascript"></script>
    <script src="public_files/static_js/app.js" type="e199841aa42d37ce99459c17-text/javascript"></script>
    <script type="e199841aa42d37ce99459c17-text/javascript" async>
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
    <script type="e199841aa42d37ce99459c17-text/javascript">
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
    <script type="e199841aa42d37ce99459c17-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="e199841aa42d37ce99459c17-text/javascript">
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
    <script type="e199841aa42d37ce99459c17-text/javascript">
        $(function() {
            $('.st-slide-header').click(function() {
                $(this).next().slideToggle("slow");
            });
        });
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="e199841aa42d37ce99459c17-|49" defer=""></script>
</body>

</html>