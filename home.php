<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include_from_root('website_template/head.php');?>
</head>
<body>


<?php include_from_root('website_template/header_and_menu.php');?>


<style>
    .nav-menu-hamburger, .nav-menu-mymex {
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
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div class="swiper-container" id="swiper-container-lp">
    <div class="swiper-wrapper">

        <div class="swiper-slide home-page" style="overflow: hidden;">
            <a href="about/why-multibank-group.html">
                <div class="min1 d-none d-lg-block"
                     style="background-image:url('public_files/images/home/en_cityscape_1920x800.jpg');">
                </div>
                <div class="min2 d-block d-lg-none"
                     style="background-image:url('public_files/images/home/en_cityscape_750x600.jpg');">
                    <img src="public_files/images/home/main_banner_mobile.gif"/>
                </div>
            </a>
        </div>
        <div class="swiper-slide home-page" style="overflow: hidden;">
            <a href="products/shares.html">
                <div class="min1 d-none d-lg-block"
                     style="background-image:url('public_files/images/home/en_shares-1920x800.jpg');">
                </div>
                <div class="min2 d-block d-lg-none"
                     style="background-image:url('public_files/images/home/en_shares-750x600.jpg');">
                    <img src="public_files/images/home/main_banner_mobile.gif"/>
                </div>
            </a>
        </div>

    </div>
    <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets"></div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>
<div class="container">
    <div class="row">
        <div class="home-banner-form d-none d-md-block">
            <div class="mex-p-h-15">
                <form action="https://www.multibankfx.com/form/contactus?" name='contact_us_form'
                      class='multibank-form row mx-0 w-100 new' method='post' enctype='' id='contact_us_form' target=''
                      autocomplete='on'>
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0ODo1Nw=='/>
                    <input type='hidden' name='token'
                           value='$2y$10$G/b8BZYaowR1otfc9WItS.MmdqmS03m1hHvn32dscHiIzPLLd..e6'/>
                    <input type='hidden' name='source' value=' <br/><br/> posted From: www.multibankfx.com/?web=true'/>
                    <div class='bg-000 text-center mex-m-x-n15 w-110'>
                        <label for='' class='mex-h3 text-white py-2 mb-0'>
                            CONTACT US FOR INQUIRIES</label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' form-control'
                               name='label_title' placeholder='' value=''/>
                    </div>
                    <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                        <label for='' class='m-0'>
                        </label>
                        <div class='form-check form-check-inline'><input data-message='Account Type is Required.'
                                                                         data-extra-message="Account type Invalid."
                                                                         class='   ' name='account_type' type='radio'
                                                                         required value='1' checked/>
                            <label class='  ' for=''>INDIVIDUAL</label>
                        </div>
                    </div>
                    <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                        <label for='' class='m-0'>
                        </label>
                        <div class='form-check form-check-inline'><input data-message='Account Type is Required.'
                                                                         data-extra-message="Account Type Invalid."
                                                                         class='   ' name='account_type' type='radio'
                                                                         required value='2'/>
                            <label class='  ' for=''>PARTNERSHIP</label>
                        </div>
                    </div>
                    <div class='mex-form-item col-12 p-1'>
                        <label for='' class='d-none'>
                            Full Name</label>
                        <input type="text" data-message="Full Name is Required." data-extra-message="Full Name Invalid."
                               data-regex="" class="form-control mb-0" name="name" $field_id_code
                               placeholder="Full Name" required value=""/>
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
                            Confirm Email</label>
                        <input type='email' data-message='Confirm Email is Required.'
                               data-extra-message="Email Mismatched." data-regex='' class='form-control mb-0'
                               name='confirm_email' placeholder='Confirm Email' required value=''/>
                    </div>
                    <div class='d-none'>
                        <label for='' class='d-none'>
                            Country</label>
                        <select data-message='Country is Required.' data-extra-message="Country Name Invalid"
                                class='selection-country form-control  mb-0 select_with_country select_with_country'
                                name='country_name' required>
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
                            <option data-country_iso_code="IO" data-name='IO' value='IO'>BRITISH INDIAN OCEAN
                                TERRITORY
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
                            <option data-country_iso_code="CF" data-name='CF' value='CF'>CENTRAL AFRICAN REPUBLIC
                            </option>
                            <option data-country_iso_code="TD" data-name='TD' value='TD'>CHAD</option>
                            <option data-country_iso_code="CL" data-name='CL' value='CL'>CHILE</option>
                            <option data-country_iso_code="CN" data-name='CN' value='CN'>CHINA</option>
                            <option data-country_iso_code="CX" data-name='CX' value='CX'>CHRISTMAS ISLAND</option>
                            <option data-country_iso_code="CC" data-name='CC' value='CC'>COCOS (KEELING) ISLANDS
                            </option>
                            <option data-country_iso_code="CO" data-name='CO' value='CO'>COLOMBIA</option>
                            <option data-country_iso_code="KM" data-name='KM' value='KM'>COMOROS</option>
                            <option data-country_iso_code="CG" data-name='CG' value='CG'>CONGO</option>
                            <option data-country_iso_code="CD" data-name='CD' value='CD'>CONGO, THE DEMOCRATIC REPUBLIC
                                OF THE
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
                            <option data-country_iso_code="HM" data-name='HM' value='HM'>HEARD ISLAND AND MCDONALD
                                ISLANDS
                            </option>
                            <option data-country_iso_code="VA" data-name='VA' value='VA'>HOLY SEE (VATICAN CITY STATE)
                            </option>
                            <option data-country_iso_code="HN" data-name='HN' value='HN'>HONDURAS</option>
                            <option data-country_iso_code="HK" data-name='HK' value='HK'>HONG KONG</option>
                            <option data-country_iso_code="HU" data-name='HU' value='HU'>HUNGARY</option>
                            <option data-country_iso_code="IS" data-name='IS' value='IS'>ICELAND</option>
                            <option data-country_iso_code="IN" data-name='IN' value='IN'>INDIA</option>
                            <option data-country_iso_code="ID" data-name='ID' value='ID'>INDONESIA</option>
                            <option data-country_iso_code="IR" data-name='IR' value='IR'>IRAN, ISLAMIC REPUBLIC OF
                            </option>
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
                            <option data-country_iso_code="KP" data-name='KP' value='KP'>KOREA, DEMOCRATIC PEOPLE'S
                                REPUBLIC OF
                            </option>
                            <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF</option>
                            <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                            <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                            <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S DEMOCRATIC
                                REPUBLIC
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
                            <option data-country_iso_code="FM" data-name='FM' value='FM'>MICRONESIA, FEDERATED STATES
                                OF
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
                            <option data-country_iso_code="MP" data-name='MP' value='MP'>NORTHERN MARIANA ISLANDS
                            </option>
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
                            <option data-country_iso_code="PM" data-name='PM' value='PM'>SAINT PIERRE AND MIQUELON
                            </option>
                            <option data-country_iso_code="VC" data-name='VC' value='VC'>SAINT VINCENT AND THE
                                GRENADINES
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
                            <option data-country_iso_code="TW" data-name='TW' value='TW'>TAIWAN, PROVINCE OF CHINA
                            </option>
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
                            <option data-country_iso_code="TC" data-name='TC' value='TC'>TURKS AND CAICOS ISLANDS
                            </option>
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
                            <option data-country_iso_code="VG" data-name='VG' value='VG'>VIRGIN ISLANDS, BRITISH
                            </option>
                            <option data-country_iso_code="VI" data-name='VI' value='VI'>VIRGIN ISLANDS, U.S.</option>
                            <option data-country_iso_code="WF" data-name='WF' value='WF'>WALLIS AND FUTUNA</option>
                            <option data-country_iso_code="EH" data-name='EH' value='EH'>WESTERN SAHARA</option>
                            <option data-country_iso_code="YE" data-name='YE' value='YE'>YEMEN</option>
                            <option data-country_iso_code="ZM" data-name='ZM' value='ZM'>ZAMBIA</option>
                            <option data-country_iso_code="ZW" data-name='ZW' value='ZW'>ZIMBABWE</option>
                        </select><input type="hidden" name="country_code" value=""/></div>
                    <div class='mex-form-item col-12 p-1'>
                        <label for='' class='d-none'>
                            Phone</label>
                        <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.'
                               data-extra-message="Phone Number Invalid" data-regex=''
                               class='input_with_phone form-control mb-0 input_with_phone' name='phone_display'
                               placeholder='' required value=''/>
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
                    <button type='submit' class='btn-contact mx-1 mt-2 mb-0'
                            onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                            data-cf-modified-785e4eb336bec21b04c19cf7-="">SUBMIT
                    </button>
                </form>
                <hr class="mx-1 my-2 bg-dark">
                <div class="px-1 contact-form-button-container">
                    <a href="account/live-account.html"
                       class="d-flex btn btn-mex-red mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                        <span>&#xe91d;</span>
                        <div class="btn-vr"></div>
                        OPEN LIVE ACCOUNT</a>
                    <a href="demo_competition.html"
                       class="d-flex btn btn-mex-blue mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                        <span>&#xe918;</span>
                        <div class="btn-vr"></div>
                        OPEN DEMO ACCOUNT</a>
                    <a href="partnership/introducing-brokers.html#introducing-brokers-form"
                       class="d-flex btn btn-mex-gray mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                        <span>&#xe920;</span>
                        <div class="btn-vr"></div>
                        IB REGISTRATION</a>
                    <a href="account/account-funding.html"
                       class="d-flex btn btn-mex mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                        <span>&#xe921;</span>
                        <div class="btn-vr"></div>
                        FUND YOUR ACCOUNT</a>
                    <div class="px-1 font-10" style="padding:0px;">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label label-1 " for="terms_conditions">By submitting this form, you
                                agree to accept the <a href="terms-conditions.html" target="_blank" class="text-22A0C4"
                                                       style="padding:0 !important;">Terms &amp; Conditions</a>, <a
                                        href="privacy-policy.html" target="_blank" class="text-22A0C4"
                                        style="padding:0 !important;">Privacy Policy</a>, and <a
                                        href="cookie-policy.html" target="_blank" class="text-22A0C4"
                                        style="padding:0 !important;">Cookie Policy</a>.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bmw {
        background-position: left !important;
    }

    @media (max-width: 1440px) and (min-width: 992px) {
        .bmw {
            width: 1500px !important;
        }

    }

    @media (max-width: 1280px) and (min-width: 992px) {
        .bmw {
            width: 1280px !important;
        }

    }

    @media (max-width: 1100px) and (min-width: 992px) {
        .bmw {
            width: 1200px !important;
        }

    }

    @media (max-width: 1024px) and (min-width: 992px) {
        .bmw {
            width: 1100px !important;
        }

    }


    .bmw-furious {
        background-position: left !important;
    }

    @media (max-width: 1440px) and (min-width: 992px) {
        .bmw-furious {
            width: 1440px !important;
        }

    }

    @media (max-width: 1407px) and (min-width: 992px) {
        .bmw-furious {
            width: 1407px !important;
        }
    }

    @media (max-width: 1280px) and (min-width: 992px) {
        .bmw-furious {
            width: 1280px !important;
        }

    }

    @media (max-width: 1250px) and (min-width: 992px) {
        .bmw-furious {
            width: 1250px !important;
        }

    }

    @media (max-width: 1150px) and (min-width: 992px) {
        .bmw-furious {
            width: 1150px !important;
        }

    }


    @media (max-width: 1024px) and (min-width: 992px) {
        .bmw-furious {
            width: 1100px !important;
        }

    }


</style>
<section class="bg-gray p0">
    <div class="container d-block d-md-none">
        <div class="row">
            <div class="col-12">
                <h3 class="mex-h1 text-1e32a3 mex-m-t-50 mex-m-b-40 text-center">Our Products</h3>
            </div>
        </div>
    </div>
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-md-12 ">
                <h3 class="mex-h1 text-1e32a3 mex-m-t-50 mex-m-b-40 text-center">Choose Your Product</h3>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="products/forex.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover" src="public_files/images/home/home_product_forex.jpg"
                                 alt="Forex">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Forex
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Trade forex on the largest market in the world
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="products/metals.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover" alt="Metals"
                                 src="public_files/images/home/home_product_metals.jpg">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Metals
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Trade gold and silver on the tightest spreads
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="products/shares.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover lazyloaded" alt="Shares"
                                 src="public_files/images/home/home_product_shares.jpg">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Shares
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Trade shares of top performing companies from around the world
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="products/indices.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover" alt="Indices"
                                 src="public_files/images/home/home_product_indices.jpg">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Indices
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Trade global stock indices such as US Wall Street 30, NASDAQ, and German DAX
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="products/commodities.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover lazyloaded" alt="Commodities"
                                 src="public_files/images/home/home_product_commodities.jpg">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Commodities
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Trade commodity CFDs such as natural gas, crude oil and copper
                            </div>
                        </div>
                    </a>
                </section>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="partnership/white-label.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover lazyloaded" alt="white label"
                                 src="public_files/images/home/home_product_white_label.jpg">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                White Label
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                MultiBank Group offers a full white label technology package for institutional customer
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="partnership/prime-of-primes.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover lazyloaded" alt="Prime of Primes"
                                 src="public_files/images/home/home_product_prime.jpg">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Prime of Primes
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Complete A to Z White Label solution for MultiBank’s institutional partners
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mex-m-b-30">
                <section class="mex-block-card-v mex-qtr box-animate">
                    <a href="social-trading.html">
                        <div class="card-img-box">
                            <img class="card-img mex-img-cover"
                                 src="public_files/images/home/home_product_social_trading.jpg"
                                 alt="Social Trading Platform">
                        </div>
                        <div class="card-content bg-white">
                            <div class="mex-h3 text-overflow-1 mex-m-b-15">
                                Social Trading Platform
                            </div>
                            <div class="mex-content text-overflow-2 mb0">
                                Join thousands of investors and earn money by following our successful traders! No
                                knowledge or experience required
                            </div>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>
    <div class="col-12 py-5 mb-5 d-block d-md-none"
         style="background-image: url(public_files/images/home/bg_our_product.jpg)">
        <div class="d-flex mex-h3 text-1e32a3">
            <ul class="mr-2" style="list-style: disc;">
                <li>Forex</li>
                <li>Metals</li>
                <li>Shares</li>
                <li>Indices</li>
            </ul>
            <ul style="list-style: disc;">
                <li>Commodities</li>

                <li>Prime of Primes</li>
                <li>Social Trading Platform</li>
            </ul>
        </div>
        <a class="btn btn-mex text-fff" style="margin-left: 20px; padding: 10px 20px;" href="products.html">Learn
            More</a>
    </div>
</section>
<section class="p0 mex-block-full d-none d-md-block">
    <div class="mex-h1 text-1e32a3 text-center uppercase mex-m-t-50 mex-m-b-30">Trade with confidence</div>
    <div class="container trade-confidence-container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="row trade-with-confidence-card">
                    <img class="mex-img-cover col-12 px-0 lazyload"
                         data-src="/public_files/images/home/home_trade_start_trading.png " alt="Start Trading">
                    <div class="col-12 both-content mx-lg-4 my-lg-5">
                        <div class="col-lg-8 col-12 px-3 px-3 p-lg-0">
                            <div class="mex-h2 mex-m-b-10">Start Trading</div>
                            <div class="mex-content mex-m-b-15">
                                MultiBank offers a range of award-winning MT4 platforms for you to trade on.
                            </div>
                            <div class="mex-content mex-m-b-15">
                                <strong>Open an account &amp; start trading today!</strong>
                            </div>
                            <a href="account/live-account.html"
                               class="btn btn-mex-red mex-m-r-15 mex-m-b-15 col-md-6 col-xs-12"><i
                                    class="fa fa-user mex-m-r-5" aria-hidden="true"></i>Live Account</a>
                            <a href="demo_competition.html"
                               class="btn btn-mex-blue mex-m-r-15 mex-m-b-15 col-md-6 col-xs-12"><i
                                    class="fa fa-desktop mex-m-r-5" aria-hidden="true"></i>Demo Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="row trade-with-confidence-card">
                    <img class="mex-img-cover col-12 px-0 lazyload" style="z-index: -1;"
                         data-src="/public_files/images/home/home_trade_fund_account.jpg" alt="Fund Your Account">
                    <div class="col-12 both-content mx-lg-4 my-lg-5 px-3 px-3 p-lg-0">
                        <div class="mex-h2 mex-m-b-15 text-fff">Fund Your Account</div>
                        <div class="row">
                            <div class="mex-content mex-m-b-15 text-fff col-md-8 col-12 text-md-left">
                                Choose from a selection of instant, simple and secure payment options for deposits and
                                withdrawals.
                            </div>
                        </div>
                        <a href="account/account-funding.html" class="btn btn-mex mex-m-r-15 mex-m-b-15"
                           style="margin-top: 38px;">Deposit Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white p0 index-platforms d-flex d-md-none">
    <img class="d-block d-md-none"
         style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.1;"
         src="public_files/images/home/home_platforms_bg.jpg"/>
    <div class="container mex-p-t-80 mex-p-b-80">
        <div class="row">
            <div class="col-xl-10 mx-auto col-lg-12 text-center mex-m-b-15 ">
                <h3 class="mex-h1 text-1e32a3 text-center">Platforms</h3>
            </div>
            <div class="col-xl-8 col-lg-12 row mx-0 d-flex d-md-none">
                <div class="col-4 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16"
                     style="line-height: 20px;">
                    <img class="lazyload mb-platform-icon mb-2"
                         data-src="/public_files/images/home/home_platforms_ecn_icon.png" alt="ECN Pro Platform">
                    ECN Pro<br/>Platform
                </div>
                <div class="col-4 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16"
                     style="line-height: 20px;">
                    <img class="lazyload mb-platform-icon mb-2"
                         data-src="/public_files/images/home/home_platforms_multibank_pro_icon.png"
                         alt="MultiBank Pro Platform">
                    MultiBank Pro<br/>Platform
                </div>
                <div class="col-4 d-flex align-items-center flex-column text-center text-uppercase mex-h3 font-16"
                     style="line-height: 20px;">
                    <img class="lazyload mb-platform-icon mb-2"
                         data-src="/public_files/images/home/home_platforms_maximus_icon.png" alt="Maximus Platform">
                    Maximus<br/>Platform
                </div>
                <div class="col-12 d-flex justify-content-center my-4">
                    <a href="platforms.html" class="btn btn-mex text-white">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p0 bg-white d-none d-md-block">
    <div class="col-md-12">
        <h3 class="mex-h1 text-1e32a3 text-center mex-m-t-50 mex-m-b-none">Bonuses </h3>
        <p class="lead text-222 mex-m-b-30 text-center">Find out more about our latest bonus and promotions for
            Introducing Brokers & individual clients alike!</p>
    </div>
    <div class="swiper-container" id="swiper-container-2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="account/bonus.html">
                    <div class="min1 d-none d-lg-block">
                        <img class="lazyload" data-src="/public_files/images/home/home_bonus_extra.jpg" alt="image"/>
                    </div>
                    <div class="min2 d-block d-lg-none">
                        <img class="lazyload" data-src="/public_files/images/home/home_bonus_extra_mb.jpg" alt="image"/>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="account/bonus%3Fdefault_bonus=refer_bonus.html">
                    <div class="min1 d-none d-lg-block">
                        <img class="lazyload" data-src="/public_files/images/home/home_bonus_400.jpg" alt="image"/>
                    </div>
                    <div class="min2 d-block d-lg-none">
                        <img class="lazyload" data-src="/public_files/images/home/home_bonus_400_mb.jpg" alt="image"/>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="account/bonus-ib.html">
                    <div class="min1 d-none d-lg-block">
                        <img class="lazyload" data-src="/public_files/images/home/home_bonus_5000.jpg" alt="image"/>
                    </div>
                    <div class="min2 d-block d-lg-none">
                        <img class="lazyload" data-src="/public_files/images/home/home_bonus_5000_mb.jpg" alt="image"/>
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets"></div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</section>
<section class="bg-gray mex-p-t-none d-none d-md-block">
    <div class="container">
        <h1 class="mex-h1 text-1e32a3 text-center mex-m-t-50 mex-m-b-30">About MultiBank Group</h1>
        <div class="row">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <section class="mex-block-card bg-white shadow-box-animate">
                    <div class="card-img-box hover-img-zoom">
                        <img class="home-about-multibank card-img mex-img-cover lazyload"
                             data-src="/public_files/images/home/home_about_advantage.png" alt="OUR ADVANTAGES">
                    </div>
                    <div class="card-content-box">
                        <div class=" card-content bg-white text-center">
                            <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                OUR ADVANTAGES
                            </div>
                            <div class="mex-content text-overflow-2 text-overflow-3-xs">
                                Learn more about MultiBank’s award-winning platforms and comprehensive partnership
                                programs
                            </div>
                            <a href="about/why-multibank-group.html"
                               class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN MORE</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-6">
                <section class="mex-block-card bg-white shadow-box-animate">
                    <div class="card-img-box hover-img-zoom">
                        <img class="home-about-multibank card-img mex-img-cover lazyload"
                             data-src="/public_files/images/home/home_about_regulations.png" alt="REGULATIONS">
                    </div>
                    <div class="card-content-box">
                        <div class=" card-content bg-white text-center">
                            <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                REGULATIONS
                            </div>
                            <div class="mex-content text-overflow-2 text-overflow-3-xs">
                                MultiBank comprises a number of companies which are regulated by top financial bodies
                                worldwide including ASIC, BaFin, FMA, CNMV, FSC, and CIMA
                            </div>
                            <a href="mfx/v1/about/regulations.html"
                               class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN MORE</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="pt64 pb16 table-background global-presence lazyload d-none d-md-block" id="home_global_presence"
         style="background-image: url(public_files/images/about_us/global_presence/home_global_presence_bg.jpg)">
    <div class="mex-content">
        <h2 class="mex-h1 text-fff text-center">Global Presence</h2>
    </div>
    <div class="swiper-container" id="swiper-container-global-presence">
        <div class="swiper-wrapper mex-m-b-100">
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_cayman_islands.jpg"
                                                   alt="Cayman Islands"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Cayman Islands
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MultiBank Wealth Management
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: CIMA<br/>Registration Number: HS-320499<br/>Phone: + 1 345 769 1891
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide ">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_hong_kong.jpg"
                                                   alt="Hong Kong"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Hong Kong
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Fintech
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Company Number: 2205192
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_australia.jpg"
                                                   alt="Australia"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Australia
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Exchange
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: ASIC<br/>
                            ACN (Company Number): 155 084 058<br/>
                            AFSL (License Number): 416279<br/>
                            Phone: +61 291954000<br/>
                        </div>
                    </div>
                </section>
            </div>

            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_germany.jpg"
                                                   alt="Germany"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Germany
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Asset Management
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: BaFin<br/>
                            HRB (License Number): 73406<br/>
                            Phone: +49 69257377474
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_austria.jpg"
                                                   alt="Austria"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Austria
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Asset Management (Austria)
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: FMA
                            <br/>License Number: 491129z
                            <br/>Phone: +43 720775835<br/>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_spain.jpg"
                                                   alt="Spain"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Spain
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Spain
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: CNMV<br/>
                            License Number: 120<br/>
                            Offices in: Barcelona & Marbella<br/>
                            Phone: + 34 931220671
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_usa.jpg"
                                                   alt="USA"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            USA
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Multibank Forex Exchange
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Company Number: 3918038<br/>Phone: +1 213 992 4748
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_mexico.jpg"
                                                   alt="Mexico"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Mexico
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MultiBank LATAM
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registered as: Mex Capital Markets SA de CV<br/>
                            Registration Number: 825403<br/>
                            Phone: +52 558 880 8058
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_china.jpg"
                                                   alt="China"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            China
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Group
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Toll Free Hotline: 400 120 8619
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_vietnam.jpg"
                                                   alt="UAE"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Vietnam
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Multibank Vietnam
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registration Number: 0315953856<br/>
                            Phone: +84 28 77 77 65 65
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_philippines.jpg"
                                                   alt="UAE"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Philippines
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MultiBank Philippines
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registered as: MBFX Business Consultancy<br/>
                            Company Number: 1123633<br/>

                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_malaysia.jpg"
                                                   alt="UAE"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Malaysia
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MultiBank Malaysia
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registered as: MBG Business Consultancy Sdn. Bhd<br/>
                            Company Number: 201901042318<br/>
                            Phone: +60 32 201 0966
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_uae2.jpg"
                                                   alt="UAE"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            UAE
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MultiBank MENA
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registered as: Multibank FX International Corporation- Dubai Branch <br/>
                            License Number: 825403<br/>
                            Phone: +971 4875 1311
                        </div>
                    </div>
                </section>
            </div>

            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_kuwai.jpg"
                                                   alt="British Virgin Islands"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Kuwait
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MultiBank Kuwait
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registered as: Multibank International Company<br/>
                            License Number: 2019/27087<br/>
                            Phone: +971 4875 1311
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_cyprus.jpg"
                                                   alt="British Virgin Islands"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Cyprus
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Prime
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Company Number: 2713393<br/>Phone: +357 25262058
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_turkey.jpg"
                                                   alt="British Virgin Islands"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Turkey
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MEX Financial Technologies
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Registered as: MEX Yazilim Teknoloji ve Danismanlik Limited Sti<br/>
                            Company Number: 210352-5
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_british_virgin_islands.jpg"
                                                   alt="British Virgin Islands"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            British Virgin Islands
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            Multibank FX International
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: FSC<br/>License Number: SIBA/L/14/1068
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <section class="mex-block-card-v mex-third">
                    <div class="card-img-box"><img class="card-img mex-img-cover"
                                                   src="public_files/images/about_us/global_presence/global_presence_british_virgin_islands_mbg.jpg"
                                                   alt="British Virgin Islands MBG"/></div>
                    <div class="card-content bg-white text-center">
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            British Virgin Islands
                        </div>
                        <div class="mex-h3 mex-clamp-1 mex-m-b-15">
                            MBG
                        </div>
                        <div class="mex-content mex-clamp-2 mb0">
                            Regulation: FSC
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</section>
<section class="bg-gray d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <section class="mex-block-card bg-white shadow-box-animate">
                    <div class="card-img-box">
                        <img class="card-img mex-img-cover lazyload"
                             data-src="/public_files/images/home/home_security_of_funds_banner.jpg"
                             alt="SECURITY OF FUNDS">
                    </div>
                    <div class="card-content-box">
                        <div class=" card-content bg-white text-center">
                            <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                SECURITY OF FUNDS
                            </div>
                            <div class="mex-content text-overflow-2">
                                Clients enjoy the highest level of funds security through MultiBank
                            </div>
                            <a href="about/security-of-funds.html" class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN
                                MORE</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <section class="mex-block-card bg-white shadow-box-animate">
                    <div class="card-img-box">
                        <img class="card-img mex-img-cover lazyload"
                             data-src="/public_files/images/home/home_milestones_banner.png" alt="MILESTONES">
                    </div>
                    <div class="card-content-box">
                        <div class=" card-content bg-white text-center">
                            <div class="mex-h2 uppercase mex-m-b-20 text-overflow-1">
                                MILESTONES
                            </div>
                            <div class="mex-content text-overflow-2">
                                Learn more about MultiBank’s achievements from over the years
                            </div>
                            <a href="about/milestones.html" class="btn btn-mex mex-m-r-15 mex-m-b-15 mex-m-t-15">LEARN
                                MORE</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="about-page-awards table-background_1 d-none d-md-block" id="about-page-awards"
         style="background-image: url(public_files/images/about_us/home_awards_bg.png)">
    <div class="container index-awards">
        <div class="row">
            <div class="col-md-12 text-center mex-m-b-30">
                <h2 class="mex-h1 text-fff text-center">Awards</h2>
                <div class="mex-content mex-content col-md-10 font-24 mx-auto">
                    <p class=" lead text-fff mb15 text-center font-24 ">Find out more about our awards and recognitions
                        as industry leader</p>
                </div>
            </div>
            <div class="col-md-12 text-center">

                <div class="swiper-container" id="swiper-container-awards">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/Best_Forex_CFD_Broker_JFEX_Award.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex and CFD Broker 2019</span>
                                <span class="mex-content ">16th Jordan Forex Expo & Awards</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-wins-financial-services-provider-asia-award-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/Financial_Services_Provider_of_the_Year_Asia_2019.jpg"/>
                                <span class="mex-h3 mex-m-b-5 ">Financial Services Provider of the Year (Asia) 2019</span>
                                <span class="mex-content ">Global Brands Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-chosen-best-FX-CFD-broker-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_fx_broker_euas_2019.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best FX & CFD Broker (Europe & Asia) 2019</span>
                                <span class="mex-content ">International Investor</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-wins-ecn-broker-best-forex-platform-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/ecn_broker_eu_2019.png"/>
                                <span class="mex-h3 mex-m-b-5 ">ECN Broker of the Year (Europe) 2019</span>
                                <span class="mex-content ">International Business Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-wins-ecn-broker-best-forex-platform-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_mena_2019.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Platform MENA 2019</span>
                                <span class="mex-content ">International Business Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-named-best-financial-derivatives-broker-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/2019best_financial_derivatives_broker_europe.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Financial Derivatives Broker 2019</span>
                                <span class="mex-content ">Global Banking & Finance Review</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-selected-best-forex-broker-forex-expo-dubai-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_broker_2019.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2019</span>
                                <span class="mex-content ">The Forex Expo Dubai</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/milestones_multibank-chairman-naser-taher-awarded-ceo-of-the-year-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/2019CEO_of_the_year_financial_services_asia_europe.png"/>
                                <span class="mex-h3 mex-m-b-5 ">CEO of the Year (Financial Services) (Asia & Europe) 2019</span>
                                <span class="mex-content ">Le Fonti Awards (International Alternative Investment Review)</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="article/multibank-honored-best-ecn-broker-asia-2019.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_ecn_broker_asia_2019.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best ECN Broker of the Year (Asia) 2019</span>
                                <span class="mex-content ">Finance Derivative</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_education_provider_2019.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Education Provider 2019</span>
                                <span class="mex-content ">FX Daily Info</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_platform_2018.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform (Hong Kong) 2018</span>
                                <span class="mex-content ">International Finance Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_ecn_broker_2018.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best ECN Broker Europe 2018</span>
                                <span class="mex-content ">International Business Magazine</span>
                            </a>+
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_ecn_platform_2018.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex ECN Platform (Europe & Asia)</span>
                                <span class="mex-content ">Capital Finance International</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/most_admired_2017.png"/>
                                <span class="mex-h3 mex-m-b-5 ">30 Most Admired Companies of 2017</span>
                                <span class="mex-content ">Insights Success Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/broker_of_the_year_2017.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Financial Derivatives Broker of the Year (Asia & Europe) 2017</span>
                                <span class="mex-content ">International Alternative Investment Review</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/ceo_of_the_year_2017.png"/>
                                <span class="mex-h3 mex-m-b-5 ">CEO of the Year-- Financial Services (Asia & Europe) 2017</span>
                                <span class="mex-content ">International Alternative Investment Review</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_platform_2016.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Exchange Platform (Hong Kong) 2016</span>
                                <span class="mex-content ">Global Brands Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_ceo_2016.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Financial Services CEO (Hong Kong) 2016</span>
                                <span class="mex-content ">Global Brands Magazine</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_china_2016.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Platform 2016</span>
                                <span class="mex-content ">China Forex Expo</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_execution_broker_2016.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Execution Broker 2016</span>
                                <span class="mex-content ">China Forex Expo</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_broker_2015.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2015</span>
                                <span class="mex-content ">IFeng</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_platform_2015.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform (Asia & Europe) 2015</span>
                                <span class="mex-content ">Capital Finance International</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_broker_europe_2015.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Broker Europe 2015</span>
                                <span class="mex-content ">International Alternative Investment Review</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_platform_2014.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Institutional FX Platform 2014</span>
                                <span class="mex-content ">7th Saudi Money Expo</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/top_provider_2014.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Top FX Liquidity Provider 2014</span>
                                <span class="mex-content ">6th Saudi Money Expo</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/most_secure_broker_2014.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Most Secure Broker 2014</span>
                                <span class="mex-content ">KG Forex World Conference</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_ecn_broker_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best ECN Forex Broker Asia 2013<br> Best ECN Forex Broker Europe 2013</span>
                                <span class="mex-content ">Global Banking & FinanceReview</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_company_leadership_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Company for Leadership 2013</span>
                                <span class="mex-content ">International Alternative Investment Review</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/most_secure_broker_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Most Secure Forex Broker 2013</span>
                                <span class="mex-content ">Shanghai Financial Investment Management Association</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_broker_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2013</span>
                                <span class="mex-content ">Shanghai Financial Investment Management Association</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/broker_of_the_year_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Broker of the Year 2013</span>
                                <span class="mex-content ">China International Online Trading Expo</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_trading_platform_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2013</span>
                                <span class="mex-content ">CNFOL</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/most_powerful_team_2013.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Most Powerful Forex Technical Research & Development Team 2013</span>
                                <span class="mex-content ">CNFOL</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload" data-src="/public_files/images/about_us/awards/2013Asia.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Most Secure Forex Broker 2013</span>
                                <span class="mex-content ">Asia Franchise Industry Association</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload" data-src="/public_files/images/about_us/awards/2013Asia.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Broker 2013</span>
                                <span class="mex-content ">Asia Franchise Industry Association</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_trading_platform_2012.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2012</span>
                                <span class="mex-content ">Jinrongjie</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/rtb_china_awards_2012.png"/>
                                <span class="mex-h3 mex-m-b-5 ">RTB China Awards 2012</span>
                                <span class="mex-content ">Global RTB Summit</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_2012_11china.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2012</span>
                                <span class="mex-content ">11th China International Investment & Finance Expo</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_ecn_broker_2012.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best ECN Broker (Asia) 2012</span>
                                <span class="mex-content ">Global Banking & Finance Review</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_provider_2011.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Service Provider 2011</span>
                                <span class="mex-content ">Hexun</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="about/awards.html">
                                <img class="lazyload"
                                     data-src="/public_files/images/about_us/awards/best_forex_provider_2011.png"/>
                                <span class="mex-h3 mex-m-b-5 ">Best Forex Trading Platform 2011</span>
                                <span class="mex-content ">Hexun</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>

        </div>
    </div>
</section>
<section class="bg-white p0 index-platforms d-none d-md-flex">
    <img class="d-block d-md-none"
         style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.1;"
         src="public_files/images/home/home_platforms_bg.jpg"/>
    <div class="container mex-p-t-80 mex-p-b-80">
        <div class="row">
            <div class="col-xl-10 mx-auto col-lg-12 text-center mex-m-b-15 ">
                <h3 class="mex-h1 text-1e32a3 text-center">Platforms</h3>
            </div>
            <div class=" col-xl-8 col-lg-12 row mx-0 d-none d-md-flex">
                <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                    <div class="platforms_content mex-box-shadow">
                        <h4 class="uppercase  mb16 mb-xs-8 "><img class="lazyload"
                                                                  data-src="/public_files/images/home/home_platforms_ecn_icon.png"
                                                                  alt="ECN Pro Platform"><span>ECN Pro Platform</span>
                        </h4>
                        <p class=" platforms_box_txt mex-clamp-4 mex-content">Enjoy raw price feed directly through our
                            ECN connection to prime brokers and access the tightest spread in the industry</p>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/ecn-pro.html"><i
                                class="ti-bar-chart"></i>MT4</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/ecn-pro.html"><i class="ti-mobile"></i>Mobile</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop" style="top: 1px;
    position: relative;"></i> Web Trading</a>
                    </div>
                </div>
                <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                    <div class="platforms_content mex-box-shadow">
                        <h4 class="uppercase  mb16  mb-xs-8  "><img class="lazyload"
                                                                    data-src="/public_files/images/home/home_platforms_multibank_pro_icon.png"
                                                                    alt="MultiBank Pro Platform"><span>MultiBank Pro Platform</span>
                        </h4>
                        <p class=" platforms_box_txt mex-clamp-4 mex-content">Ideal for traders looking for an ECN
                            experience with tight spreads and zero platform fees</p>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/multibank-pro.html"><i
                                class="ti-bar-chart"></i>MT4</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/multibank-pro.html"><i
                                class="ti-mobile"></i>Mobile</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop" style="top: 1px;
    position: relative;"></i> Web Trading</a>
                    </div>
                </div>
                <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                    <div class="platforms_content mex-box-shadow">
                        <h4 class="uppercase  mb16  mb-xs-8  "><img class="lazyload"
                                                                    data-src="/public_files/images/home/home_platforms_maximus_icon.png"
                                                                    alt="Maximus Platform"><span>Maximus Platform</span>
                        </h4>
                        <p class=" platforms_box_txt mex-clamp-4 mex-content">Recommended for traders looking for no
                            restrictions on EA and scalping trading</p>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/maximus.html"><i
                                class="ti-bar-chart"></i>MT4</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/maximus.html"><i class="ti-mobile"></i>Mobile</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop"
                                                                                     style="top: 1px;position: relative;"></i>
                            Web Trading</a>
                    </div>
                </div>
                <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                    <div class="platforms_content mex-box-shadow">
                        <h4 class="uppercase  mb16  mb-xs-8  "><img class="lazyload"
                                                                    data-src="/public_files/images/home/home_platforms_mt5_platform.png"
                                                                    alt="MT5 Platform"><span>MT5 Platform</span>
                        </h4>
                        <p class=" platforms_box_txt mex-clamp-4 mex-content">Suitable for traders looking for enhanced
                            trading functionalities such as advanced scripting tools for custom indicators and expert
                            advisors</p>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/mt5-platform.html"><i
                                class="ti-bar-chart"></i>MT5</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/mt5-platform.html"><i
                                class="ti-mobile"></i>Mobile</a>
                        <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop"
                                                                                     style="top: 1px;position: relative;"></i>
                            Web Trading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p0 mex-block-full d-flex d-md-none flex-column">
    <div class="mex-h1 text-1e32a3 text-center uppercase mex-m-t-50 mex-m-b-30">Trade with confidence</div>
    <div class="container trade-confidence-container">
        <div class="row">
            <div class="col-12 d-flex mb-3">
                <div class="row trade-with-confidence-card d-flex px-0" style="margin: 0 .5rem!important;">
                    <div class="col-9 py-2">
                        <div class="mex-h3">Start Trading</div>
                        <div class="font-weight-bold font-16 mex-m-b-15" style="line-height: 1;">MultiBank offers a
                            range of award-winning MT4 platforms for you to trade on.
                        </div>
                        <div class="row">
                            <div class="col-6 pl-3 pr-1">
                                <a href="account/live-account.html" class="btn btn-mex-red mex-m-b-15 "
                                   style="min-width: initial; display: block;     padding: 13px 10px;">Live Account</a>
                            </div>
                            <div class="col-6 pl-1 pr-3">
                                <a href="demo_competition.html" class="btn btn-mex-blue mex-m-b-15"
                                   style="min-width: initial; display: block;     padding: 13px 10px;">Demo Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <img style="object-position: 94% 0;" class="mex-img-cover px-0 lazyload w-100 h-auto"
                             data-src="/public_files/images/home/home_trade_start_trading.png " alt="Start Trading">
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex d-md-none">
                <div class="row trade-with-confidence-card d-flex px-0" style="margin: 0 .5rem!important;">
                    <div class="col-3 px-0">
                        <img class="mex-img-cover lazyload" style="z-index: -1; object-position: 85%;"
                             data-src="/public_files/images/home/home_trade_fund_account.jpg" alt="Fund Your Account">
                    </div>
                    <div class="col-9 py-2">
                        <div class="mex-h3">Fund Your Account</div>
                        <div class="font-weight-bold font-16 mex-m-b-15" style="line-height: 1;">
                            Choose from a selection of instant, simple and secure payment options for deposits and ...
                        </div>
                        <a class="btn btn-mex text-fff" style="padding: 10px 20px;" href="account/account-funding.html">Deposit
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray p0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="mex-h1 mex-m-t-50 mex-m-b-30 text-1e32a3 text-center">  <?php translate('Partnership'); ?></h3>
            </div>
            <div class="col-12 col-md-12 col-xl-8 mex-m-b-30 d-none d-md-block">
                <section class="mex-card-cover box-animate">
                    <a href="partnership/introducing-brokers.html">
                        <img class="card-img mex-img-cover lazyload" alt="Introducing Brokers"
                             data-src="/public_files/images/partnership/home_partnership_introducing_broker@2x.png">
                        <div class="card-content text-left">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff">
                                <?php translate('Introducing Brokers'); ?>
                            </div>
                            <div class="mex-content mb0 text-overflow-3 col-lg-6 p0 col-12">Join MultiBank’s network of
                                over 30,000 Introducing Brokers and enjoy the highest levels of personalized customer
                                care.
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                <section class="mex-card-cover box-animate">
                    <a href="partnership/franchise-program.html">
                        <img class="card-img mex-img-cover lazyload" alt="Franchise Program"
                             data-src="/public_files/images/partnership/home_partnership_franchise_program@2x.png">
                        <div class="card-content text-left">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                Franchise Program
                            </div>
                            <div class="mex-content mb0 text-overflow-3">
                                Open offices under the MultiBank name and obtain exclusivity of our products and
                                services in the region
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                <section class="mex-card-cover box-animate">
                    <a href="partnership/white-label.html">
                        <img class="card-img mex-img-cover lazyload" alt="White Label"
                             data-src="/public_files/images/partnership/home_partnership_white_label@2x.png">
                        <div class="card-content text-left">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                White Label
                            </div>
                            <div class="mex-content mb0 text-overflow-3">
                                Become MultiBank’s White Label Partner and have your own proprietary trading system,
                                branded in your corporate name
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                <section class="mex-card-cover box-animate">
                    <a href="partnership/prime-of-primes.html">
                        <img class="card-img mex-img-cover lazyload" alt="Prime of Primes"
                             data-src="/public_files/images/partnership/home_partnership_prime_of_primes@2x.png">
                        <div class="card-content text-left">
                            <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff">
                                Prime of Primes
                            </div>
                            <div class="mex-content mb0 text-overflow-3">
                                Complete A to Z prime technology solution for MultiBank’s institutional partners
                            </div>
                        </div>
                    </a>
                </section>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mex-m-b-30 d-none d-md-block">
                <section class="mex-card-cover box-animate">
                    <a href="partnership/cpa-affiliate-program.html">
                        <img class="card-img mex-img-cover lazyload" alt="CPA Affiliate Program"
                             data-src="/public_files/images/partnership/partnership_cpa_affiliate_program_newx.png">
                        <div class="card-content text-left">
                            <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff">
                                CPA Affiliate Program
                            </div>
                            <div class="mex-content mb0 text-overflow-3">
                                MultiBank’s CPA Affiliate Program allows digital marketers to earn commission for every
                                active trader they introduce
                            </div>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>
    <div class="col-12 py-5 d-block d-md-none"
         style="background-image: url(public_files/images/partnership/home_partnership_introducing_broker@2x.png); background-size: cover;">
        <div class="d-flex mex-h3 text-1e32a3">
            <ul class="mr-2" style="list-style: disc;">
                <li>Introducing Brokers</li>
                <li>Franchise Program</li>
                <li>White Label</li>
                <li>Prime of Primes</li>
                <li>CPA Affiliate Program</li>
            </ul>
        </div>
        <a class="btn btn-mex text-fff" style="margin-left: 20px; padding: 10px 20px;" href="investor-relations.html">Learn
            More</a>
    </div>
</section>
<section class="table-background plants d-none d-md-flex">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto">
                <section class="mex-company-news">
                    <div class="mex-h2 mex-bold text-center uppercase">
                        Company News
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="mex-new-content-box" id="home_company_news_container"
                                style="min-height: 535px; overflow-y: hidden; height: 440px;">
                                <div class="swiper-wrapper">
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2020-02-18</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-fast-n-furious-trading-contest-announcement.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">Winners Announced for the
                                            MultiBank Fast & Furious Trading Contest</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/2020_winners_announced_thumbnail.png"
                                                                            alt="Winners Announced for the MultiBank Fast & Furious Trading Contest">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-12-27</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-fast-n-furious-trading-contest.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Fast & Furious
                                            Trading Contest Starts Jan 6, 2020! </a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/MB_BMW_thumbnail_1.jpg"
                                                                            alt="MultiBank Fast & Furious Trading Contest Starts Jan 6, 2020! ">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-12-07</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-philippines-hosts-investors-night-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Philippines Hosts
                                            Investors Night 2019</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/PH_Investor_Night_thumbnail.jpg"
                                                                            alt="MultiBank Philippines Hosts Investors Night 2019">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-11-17</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-malaysia-hosted-successful-trading-seminar-in-kuala-lumpur.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Malaysia Hosted
                                            Successful Trading Seminar in Kuala Lumpur</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/malaysia_seminar_thumbnail_en.jpg"
                                                                            alt="MultiBank Malaysia Hosted Successful Trading Seminar in Kuala Lumpur">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-11-17</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-attends-macau-grand-prix-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Group Attends
                                            Macau Grand Prix 2019</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/macau_gp_2019_thumbnail.jpg"
                                                                            alt="MultiBank Group Attends Macau Grand Prix 2019">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-11-04</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-fx-championship-2019-winners-announced.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank FX Championship
                                            2019 Winners Announced!</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/1104_demo_competition_thumbnail.jpg"
                                                                            alt="MultiBank FX Championship 2019 Winners Announced!">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-10-02</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-attends-forex-expo-dubai-wins-best-forex-broker.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Attends the Forex
                                            Expo Dubai and Takes Home “Best Forex Broker” Award</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/dubai_expo_thumbnail.jpg"
                                                                            alt="MultiBank Attends the Forex Expo Dubai and Takes Home “Best Forex Broker” Award">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-09-18</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-mena-diamond-sponsor-jordan-expo.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">Diamond Sponsor MultiBank
                                            MENA Attends Jordan Expo 2019</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/jordan_expo_2019_thumbnail.jpg"
                                                                            alt="Diamond Sponsor MultiBank MENA Attends Jordan Expo 2019">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-09-14</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-wins-financial-services-provider-asia-award-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Group Wins
                                            “Financial Services Provider of the Year (Asia) 2019” Award from Global
                                            Brands Magazine</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/Financial_Services_Provider_of_the_Year_2019_thumbnail.jpg"
                                                                            alt="MultiBank Group Wins “Financial Services Provider of the Year (Asia) 2019” Award from Global Brands Magazine">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-08-13</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-fx-championship-2019-starting-soon.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank FX Championship
                                            Starting Soon! USD 12,000 CASH Giveaway to Top 3 Demo Contest Winners</a>
                                        </div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/championship_small_en.jpg"
                                                                            alt="MultiBank FX Championship Starting Soon">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-08-01</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-latam-regional-headquarter-launched-mexico.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank LATAM Launches in
                                            Mexico</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/LATAM_thumbnail_en.jpg"
                                                                            alt="MultiBank LATAM Launches in Mexico">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-07-26</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/hiring-forex-sales-managers-for-dubai.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank’s Dubai Office Now
                                            Hiring Forex Sales Managers. Join Us Today!</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/hiring-now-cyprus-banner_v2_26July_1.jpg"
                                                                            alt="MultiBank’s Dubai Office Now Hiring Forex Sales Managers. Join Us Today!">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-07-04</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/artur-filipowicz-joins-multibank-head-institutional-sales.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">FX Veteran Artur Filipowicz
                                            Joins MultiBank as Head of Institutional Sales</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/news_20190704_t.jpg"
                                                                            alt="FX Veteran Artur Filipowicz Joins MultiBank as Head of Institutional Sales">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-06-08</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-elite-sponsor-forex-day-madrid-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Elite Sponsor at
                                            Forex Day Madrid 2019</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/the_forex_day_thumbnail.jpg"
                                                                            alt="MultiBank Elite Sponsor at Forex Day Madrid 2019">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-05-27</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-chosen-best-FX-CFD-broker-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Chosen as Best FX
                                            & CFD Broker (Europe & Asia) 2019 by International Investor Magazine</a>
                                        </div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/news_best_fx_cfd_broker_europe_asia_2019_thumbnail.jpg"
                                                                            alt="MultiBank Chosen as Best FX & CFD Broker (Europe & Asia) 2019 by International Investor Magazine">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-05-22</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-makes-appearance-ifx-cyprus-expo.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Makes an
                                            Appearance at the iFX Cyprus Expo</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/ifx-cyprus_thumb_v2.jpg"
                                                                            alt="MultiBank Makes an Appearance at the iFX Cyprus Expo">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-05-17</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-adds-uber-shares-cfd-offerings.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Adds Uber to Its
                                            Shares CFD Offerings</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/adds_uber_465x265.jpg"
                                                                            alt="MultiBank Adds Uber to Its Shares CFD Offerings">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-05-15</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/visit-multibank-ifx-cyprus-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">Visit Us at Booth 52 at iFX
                                            Expo 2019 in Cyprus</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/news_ifxexpo_s_0.jpg"
                                                                            alt="Visit Us at Booth 52 at iFX Expo 2019 in Cyprus">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-05-03</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/hiring-now-cyprus.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">MultiBank Group Is Now
                                            Hiring Senior Account Managers. Join us Today!</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/hiring-now-cyprus-thumbnail.jpg"
                                                                            alt="MultiBank Group Is Now Hiring Senior Account Managers. Join us Today!">
                                        </div>
                                    </li>
                                    <li class="row mx-0 mex-new-content swiper-slide">
                                        <div class="mex-h3 col-1 pl-4 text-left">2019-04-30</div>
                                        <div class="mex-new-desc mex-content col-8"><a
                                                href="article/multibank-honored-best-ecn-broker-asia-2019.html"
                                                class="text-222 mex-clamp-4 text-left pl-3">Finance Derivative Honors
                                            MultiBank Group as “Best ECN Broker of the Year (Asia) 2019”</a></div>
                                        <div class="mex-new-img col-3"><img class="mex-img-cover lazyload"
                                                                            data-src="/public_files/blog/thumbnails/news_best_ecn_broker_of_the_year_asia_2019_thumbnail_0.jpg"
                                                                            alt="Finance Derivative Honors MultiBank Group as “Best ECN Broker of the Year (Asia) 2019”">
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text-center mex-p-15 index_sup_a col-12">
                <a href="article/news_20180916.html" class="btn btn-mex ">MORE</a>
            </div>
        </div>
    </div>
</section>





<?php include_from_root('website_template/page_footer.php');?>




<div class="slidebar">
    <a class="get-a-all-btn call-btn" href="tel:+12139924748">
        <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid=""
                               src="public_files/images/home/sidebar_icon/phone.png" width="50"/> </span>
    </a>
    <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
        <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid=""
                                src="public_files/images/home/sidebar_icon/whatsapp.png" width="50"/> </span>
    </a>
    <a class="email-us-tg demo-account-btn email-btn"
       href="cdn-cgi/l/email-protection.html#177464577a627b637e7576797c716f3974787a">
        <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid=""
                                src="public_files/images/home/sidebar_icon/email.png" width="50"/> </span>
    </a>
    <a class="ib-registration-btn chat-btn"
       onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;"
       data-cf-modified-785e4eb336bec21b04c19cf7-="">
        <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid=""
                                src="public_files/images/home/sidebar_icon/chat.png" width="50"/> </span>
    </a>
</div>
<style type="text/css">.slidebar a span.btn {
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
            <form action="https://www.multibankfx.com/form/contactus?" name='email_us_form'
                  class='multibank-form row mx-0 w-100 new' method='post' enctype='' id='email_us_form' target=''
                  autocomplete='on'>
                <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0ODo1Nw=='/>
                <input type='hidden' name='token' value='$2y$10$g1E4rrOQLcd.w/6ehfvr/u0fxrVbk/22eGhxn8nHsbzpHXVm4wY4C'/>
                <input type='hidden' name='source' value=' <br/><br/> posted From: www.multibankfx.com/?web=true'/>
                <div class='col-12 p-0'>
                    <label for='' class='mex-h3'>
                        EMAIL US</label>
                    <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none'
                           name='label_title' placeholder='' value=''/>
                </div>
                <div class='d-none'>
                    <label for='' class='m-0 d-none'>
                    </label>
                    <div class='form-check form-check-inline'><input data-message='Account Type is Required.'
                                                                     data-extra-message="Account type Invalid."
                                                                     class='   ' name='account_type' type='radio'
                                                                     required value='1' checked/>
                        <label class='  ' for=''>INDIVIDUAL</label>
                    </div>
                </div>
                <div class='mex-form-item col-6 p-1 pb-3'>
                    <label for='' class='d-none'>
                        Full Name</label>
                    <input type="text" data-message="Full Name is Required." data-extra-message="Full Name Invalid."
                           data-regex="" class="form-control mb-0" name="name" $field_id_code placeholder="Full Name"
                           required value=""/>
                </div>
                <div class='mex-form-item col-6 p-1 pb-3'>
                    <label for='' class='d-none'>
                        البريد الإلكتروني</label>
                    <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid."
                           data-regex='' class='form-control mb-0' name='email' placeholder='Email' required value=''/>
                </div>
                <div class='mex-form-item col-12 p-1 d-none'>
                    <label for='' class='d-none'>
                    </label>
                    <select data-message='Confirm Email is Required.' data-extra-message="Email Mismatched."
                            class='selection-country form-control  mb-0 select_with_country select_with_country'
                            name='country_name' required>
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
                    </select><input type="hidden" name="country_code" value=""/></div>
                <div class='d-none'>
                    <label for='' class='d-none'>
                    </label>
                    <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none'
                           name='form_key' placeholder='' value='email_us_form'/>
                </div>
                <div class='mex-form-item col-12 p-1 pb-3'>
                    <label for='' class='d-none'>
                        Phone</label>
                    <input type='phone' data-ip_country_code='IN' data-message='Phone Number is required.'
                           data-extra-message="Phone Number Invalid" data-regex=''
                           class='input_with_phone form-control mb-0 input_with_phone' name='phone_display'
                           placeholder='' required value=''/>
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
                <div class='mex-form-item col-12 mb-3 p-1'>
                    <label for='order_message' class='d-block'>
                    </label>
                    <textarea data-message='Message is Required.' data-extra-message="Message is Invalid." data-regex=''
                              class=' form-control w-100 ta-message' name='message' id='order_message' placeholder=''>Hello, I am interested in learning more about MultiBank products and services. Could you please contact me</textarea>
                </div>
                <button type='submit' class='btn btn-mex ml-auto btn-submit'
                        onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                        data-cf-modified-785e4eb336bec21b04c19cf7-="">SEND
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
<script type="785e4eb336bec21b04c19cf7-text/javascript">
    $(function(){
        $('.email-us-tg').click(function(e){
            e.preventDefault();
            $('.modal-box__email-us').addClass('show');
        });
        $('.modal-box__email-us .btn-modal-close').click(function(e){
            e.preventDefault();
            $('.modal-box__email-us').removeClass('show');
        });
    })

</script>
<script src="public_files/static_js/lang_data/en.js" type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script src="public_files/static_js/jquery.dataTables.min.js" type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script src="public_files/static_js/lazysizes.min.js" type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script src="public_files/static_js/jquery.validate.min.js" type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script src="public_files/static_js/intlTelInput.min.js%3Fversion=20191128"
        type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script src="public_files/static_js/app.js%3Fversion=20200612" type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script type="785e4eb336bec21b04c19cf7-text/javascript" async>
    url = new URL(window.location.href);
    if (!url.searchParams.get('is_iframe')) {
        window.__lc = window.__lc || {};
        window.__lc.license = 3413162;
        window.__lc.chat_between_groups = false;
        window.__lc.group = 2;


    (function () {
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
<script type="785e4eb336bec21b04c19cf7-text/javascript">
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


    var test_lang =getUrlVars()['test_lang'];
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
<script type="785e4eb336bec21b04c19cf7-text/javascript">
$(function() {
        $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
});

</script>
<script type="785e4eb336bec21b04c19cf7-text/javascript">
$(function(){
var iframe_ibnum =getUrlVars()['ibNum'];
var is_iframe = getUrlVars()['is_iframe'];
console.log(typeof is_iframe);
console.log(typeof iframe_ibnum);
if(typeof iframe_ibnum === 'string' && typeof is_iframe === 'string'){
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
<script src="public_files/static_js/swiper-4.3.5.min.js" type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<script src="public_files/static_js/app_home.js%3Fversion=20191025-7"
        type="785e4eb336bec21b04c19cf7-text/javascript"></script>
<style>

    .home-banner-form .btn-contact {
        line-height: 1.1;
    }

    .home-banner-form .btn-partner {
        padding: 5px 0;
        line-height: 1 !important;
    }

    .home-banner-form .mex-h3 {
        line-height: 20px;
    }

    .form-check-label {
        line-height: 1.2;
    }

    .swiper-slide .min1 {
        height: 745px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    @media (min-width: 1441px) and (max-width: 1920px) {
        .home-banner-form {
            top: 220px;
            left: 50%;
            margin-left: 260px;
        }

        .container {
            position: static;
            width: auto;
        }
    }

    @media (min-width: 1281px) and (max-width: 1440px) {
        .swiper-slide .min1 {
            width: 1680px;
            height: 760px;
        }

        .home-banner-form {
            top: 180px;
            margin-left: 230px;
        }

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
    }

    @media (min-width: 1201px) and (max-width: 1280px) {
        .home-banner-form {
            top: 190px !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1200px) {
        .swiper-slide .min1 {
            width: 1440px;
            height: 760px;
        }

        .home-banner-form {
            top: 170px !important;
            margin-left: 205px;
            width: 27%;
        }

        .bg-000 {
            width: 115%;
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

        .home-banner-form .mex-form-item input, .mex-form-item select {
            height: 33px;
        }

        .home-banner-form .contact-form-button-container a {
            padding: 5px 10px !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1200px) {
        .home-banner-form {
            top: 150px;
        }
    }

    @media (max-width: 992px) {
        .swiper-slide .min2 {
            background-repeat: no-repeat;
            background-size: contain;
        }

        .swiper-slide .min2 img {
            width: 100%;
            max-width: 100%;
        }

        .home-banner-form {
            margin-top: 15px;
        }
    }

    @media (max-width: 1920px) and (min-width: 1400px) {
        .container .home-banner-form {
            top: 272px;
            margin-left: 388px;
        }
    }
</style>
<script type="785e4eb336bec21b04c19cf7-text/javascript">
$(document).ready(function () {
    var index_swiper = new Swiper('#swiper-container-lp', {
        navigation: {
            nextEl: '#swiper-container-lp .swiper-button-next',
            prevEl: '#swiper-container-lp .swiper-button-prev',
        },
        pagination: {
            clickable: true,
            el: '#swiper-container-lp .swiper-pagination',
        },
        loop: true,
        autoplay: {
            delay: 5000
        },
        updateOnImagesReady: true,
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplayDisableOnInteraction: false
    });
})

</script>
<style>

    .home-banner-form .btn-contact {
        line-height: 1.1;
    }

    .home-banner-form .btn-partner {
        padding: 5px 0;
        line-height: 1 !important;
    }

    .form-check-label {
        line-height: 1.2;
    }

    .swiper-slide .min1 {
        height: 745px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    @media (min-width: 992px) and (max-width: 1920px) {
        .home-banner-form {
            top: 260px;
            left: 50%;
            margin-left: 260px;
        }

        .container {
            position: static;
            width: auto;
        }
    }

    @media (min-width: 992px) and (max-width: 1440px) {
        .swiper-slide .min1 {
            width: 1680px;
            height: 700px;
        }

        .home-banner-form {
            top: 245px;
            margin-left: 230px;
        }

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
    }

    @media (min-width: 992px) and (max-width: 1280px) {
        .swiper-slide .min1 {
            width: 1440px;
            height: 600px;
        }

        .home-banner-form {
            top: 210px;
            margin-left: 205px;
            width: 27%;
        }

        .bg-000 {
            width: 115%;
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

        .home-banner-form .mex-form-item input, .mex-form-item select {
            height: 33px;
        }

        .home-banner-form .contact-form-button-container a {
            padding: 5px 10px !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1024px) {
        .home-banner-form {
            top: 205px;
        }
    }

    @media (max-width: 992px) {
        .swiper-slide .min2 {
            background-repeat: no-repeat;
            background-size: contain;
        }

        .swiper-slide .min2 img {
            width: 100%;
            max-width: 100%;
        }

        .home-banner-form {
            margin-top: 15px;
        }
    }

    #swiper-container-lp .swiper-slide .min1 {
        height: 800px;
    }

    @media (max-width: 1440px) and (min-width: 992px) {
        #swiper-container-lp .swiper-slide .min1 {
            height: 710px;
        }
    }

    @media (max-width: 1280px) and (min-width: 992px) {
        #swiper-container-lp .swiper-slide .min1 {
            height: 650px;
        }
    }
</style>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="785e4eb336bec21b04c19cf7-|49" defer=""></script>



</body>
</html>
