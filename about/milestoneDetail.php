<?php
     $title = isset($_GET['title']) ? $_GET['title'] : "";
     $article_body = isset($_GET['articlebody']) ? $_GET['articlebody'] : "";
     $article_date = isset($_GET['article_date']) ? $_GET['article_date'] : "";
     $feature_image =isset($_GET['feature_image']) ? $_GET['feature_image'] : "";

?>


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

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMX9SQ5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <section>
        <div class="container article-page">
            <div class="row news-container mx-auto">
                <div class="col-12 col-lg-8">
                    <div class="article-container">
                        <article>
                            <header>
                                <h1 class="article-title">
                                    <span lang="EN-US"><?php echo $title ?></span>
                                </h1>
                                <div class="article-date"><?php echo $article_date ?>  | Milestones</div>
                            </header>
                        </article>
                        <img src='/multibankfx".$list->post_image."'  class="article-img" />
                          
                        <!-- aricle body  -->

                        <?php echo  $article_body ?>
                        <!-- aricle body ends -->
                    </div>
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

                        .article-container {
                            width: 628px;
                            margin-top: 0px;
                            margin-right: auto;
                            margin-bottom: 0px;
                            margin-left: auto;
                        }

                        .article-title {
                            font-size: 30px;
                            color: rgb(30, 50, 163);
                            text-align: center;
                        }

                        .article-date {
                            color: rgba(0, 0, 0, 0.7);
                            text-align: center;
                        }

                        .article-body {
                            margin-top: 20px;
                        }

                        .article-paragraph {
                            margin-bottom: 10px;
                        }

                        .article-img {
                            width: 100%;
                        }

                        .c6023 {
                            letter-spacing: 0.011em;
                        }
                    </style>
                </div>
                <div class="col-12 col-lg-4 article-right-container">
                    <div class="border-form mex-p-h-15 mb-4">
                        <form action="/form/contactus?" name='contact_us_form' class='multibank-form row mx-0 w-100 new'
                            method='post' enctype='' id='contact_us_form' target='' autocomplete='on'>
                            <input type='hidden' name='t_date' value='MjAyMC0wNy0yMCAxOTowNjowMw==' />
                            <input type='hidden' name='token'
                                value='$2y$10$uD1ZGYUeftkG2SmCkWpQ4.8UigZyuApDpaG1YoXnx60BfvHNvKaVC' />
                            <input type='hidden' name='source'
                                value='[2020-07-10 17:57:26] https://www.multibankfx.com/thank-you?src=callback_individual<br/><br/>[2020-07-20 18:31:46] https://ae.multibankfx.com/<br/><br/>[2020-07-20 19:01:40] https://ae.multibankfx.com/<br/><br/>[2020-07-20 19:05:44] https://ae.multibankfx.com/about/milestones<br/><br/> <br/><br/> posted From: ae.multibankfx.com/article/milestone-multibank-group-establishes-new-branch-in-turkey?web=true' />
                            <div class='bg-000 text-center mex-m-x-n15 w-110'>
                                <label for='' class='mex-h3 text-white py-2 mb-0'>
                                    CONTACT US FOR INQUIRIES</label>
                                <input type='hidden' data-message='' data-extra-message="" data-regex=''
                                    class=' form-control' name='label_title' placeholder='' value='' />
                            </div>
                            <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                                <label for='' class='m-0'>
                                </label>
                                <div class='form-check form-check-inline'><input
                                        data-message='Account Type is Required.'
                                        data-extra-message="Account type Invalid." class='   ' name='account_type'
                                        type='radio' required value='1' checked />
                                    <label class='  ' for=''>INDIVIDUAL</label>
                                </div>
                            </div>
                            <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                                <label for='' class='m-0'>
                                </label>
                                <div class='form-check form-check-inline'><input
                                        data-message='Account Type is Required.'
                                        data-extra-message="Account Type Invalid." class='   ' name='account_type'
                                        type='radio' required value='2' />
                                    <label class='  ' for=''>PARTNERSHIP</label>
                                </div>
                            </div>
                            <div class='mex-form-item col-12 p-1'>
                                <label for='' class='d-none'>
                                    Full Name</label>
                                <input type='text' data-message='Full Name is Required.'
                                    data-extra-message="Full Name Invalid." data-regex='' class=' form-control mb-0'
                                    name='name' placeholder='Full Name' required value='' />
                            </div>
                            <div class='mex-form-item col-12 p-1'>
                                <label for='' class='d-none'>
                                    Email</label>
                                <input type='email' data-message='Email is Required.'
                                    data-extra-message="Email is Invalid." data-regex='' class='form-control mb-0'
                                    name='email' placeholder='Email' required value='' />
                            </div>
                            <div class='mex-form-item col-12 p-1'>
                                <label for='' class='d-none'>
                                    Confirm Email</label>
                                <input type='email' data-message='Confirm Email is Required.'
                                    data-extra-message="Email Mismatched." data-regex='' class='form-control mb-0'
                                    name='confirm_email' placeholder='Confirm Email' required value='' />
                            </div>
                            <div class='d-none'>
                                <label for='' class='d-none'>
                                    Country</label>
                                <select data-message='Confirm Email is Required.' data-extra-message="Email Mismatched."
                                    class='selection-country form-control  mb-0 select_with_country select_with_country'
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
                                    <option data-country_iso_code="AG" data-name='AG' value='AG'>ANTIGUA AND BARBUDA
                                    </option>
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
                                    <option data-country_iso_code="BA" data-name='BA' value='BA'>BOSNIA AND HERZEGOVINA
                                    </option>
                                    <option data-country_iso_code="BW" data-name='BW' value='BW'>BOTSWANA</option>
                                    <option data-country_iso_code="BV" data-name='BV' value='BV'>BOUVET ISLAND</option>
                                    <option data-country_iso_code="BR" data-name='BR' value='BR'>BRAZIL</option>
                                    <option data-country_iso_code="IO" data-name='IO' value='IO'>BRITISH INDIAN OCEAN
                                        TERRITORY</option>
                                    <option data-country_iso_code="BN" data-name='BN' value='BN'>BRUNEI DARUSSALAM
                                    </option>
                                    <option data-country_iso_code="BG" data-name='BG' value='BG'>BULGARIA</option>
                                    <option data-country_iso_code="BF" data-name='BF' value='BF'>BURKINA FASO</option>
                                    <option data-country_iso_code="BI" data-name='BI' value='BI'>BURUNDI</option>
                                    <option data-country_iso_code="KH" data-name='KH' value='KH'>CAMBODIA</option>
                                    <option data-country_iso_code="CM" data-name='CM' value='CM'>CAMEROON</option>
                                    <option data-country_iso_code="CA" data-name='CA' value='CA'>CANADA</option>
                                    <option data-country_iso_code="CV" data-name='CV' value='CV'>CAPE VERDE</option>
                                    <option data-country_iso_code="KY" data-name='KY' value='KY'>CAYMAN ISLANDS</option>
                                    <option data-country_iso_code="CF" data-name='CF' value='CF'>CENTRAL AFRICAN
                                        REPUBLIC</option>
                                    <option data-country_iso_code="TD" data-name='TD' value='TD'>CHAD</option>
                                    <option data-country_iso_code="CL" data-name='CL' value='CL'>CHILE</option>
                                    <option data-country_iso_code="CN" data-name='CN' value='CN'>CHINA</option>
                                    <option data-country_iso_code="CX" data-name='CX' value='CX'>CHRISTMAS ISLAND
                                    </option>
                                    <option data-country_iso_code="CC" data-name='CC' value='CC'>COCOS (KEELING) ISLANDS
                                    </option>
                                    <option data-country_iso_code="CO" data-name='CO' value='CO'>COLOMBIA</option>
                                    <option data-country_iso_code="KM" data-name='KM' value='KM'>COMOROS</option>
                                    <option data-country_iso_code="CG" data-name='CG' value='CG'>CONGO</option>
                                    <option data-country_iso_code="CD" data-name='CD' value='CD'>CONGO, THE DEMOCRATIC
                                        REPUBLIC OF THE</option>
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
                                    <option data-country_iso_code="DO" data-name='DO' value='DO'>DOMINICAN REPUBLIC
                                    </option>
                                    <option data-country_iso_code="EC" data-name='EC' value='EC'>ECUADOR</option>
                                    <option data-country_iso_code="EG" data-name='EG' value='EG'>EGYPT</option>
                                    <option data-country_iso_code="SV" data-name='SV' value='SV'>EL SALVADOR</option>
                                    <option data-country_iso_code="GQ" data-name='GQ' value='GQ'>EQUATORIAL GUINEA
                                    </option>
                                    <option data-country_iso_code="ER" data-name='ER' value='ER'>ERITREA</option>
                                    <option data-country_iso_code="EE" data-name='EE' value='EE'>ESTONIA</option>
                                    <option data-country_iso_code="ET" data-name='ET' value='ET'>ETHIOPIA</option>
                                    <option data-country_iso_code="FK" data-name='FK' value='FK'>FALKLAND ISLANDS
                                        (MALVINAS)</option>
                                    <option data-country_iso_code="FO" data-name='FO' value='FO'>FAROE ISLANDS</option>
                                    <option data-country_iso_code="FJ" data-name='FJ' value='FJ'>FIJI</option>
                                    <option data-country_iso_code="FI" data-name='FI' value='FI'>FINLAND</option>
                                    <option data-country_iso_code="FR" data-name='FR' value='FR'>FRANCE</option>
                                    <option data-country_iso_code="GF" data-name='GF' value='GF'>FRENCH GUIANA</option>
                                    <option data-country_iso_code="PF" data-name='PF' value='PF'>FRENCH POLYNESIA
                                    </option>
                                    <option data-country_iso_code="TF" data-name='TF' value='TF'>FRENCH SOUTHERN
                                        TERRITORIES</option>
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
                                    <option data-country_iso_code="HM" data-name='HM' value='HM'>HEARD ISLAND AND
                                        MCDONALD ISLANDS</option>
                                    <option data-country_iso_code="VA" data-name='VA' value='VA'>HOLY SEE (VATICAN CITY
                                        STATE)</option>
                                    <option data-country_iso_code="HN" data-name='HN' value='HN'>HONDURAS</option>
                                    <option data-country_iso_code="HK" data-name='HK' value='HK'>HONG KONG</option>
                                    <option data-country_iso_code="HU" data-name='HU' value='HU'>HUNGARY</option>
                                    <option data-country_iso_code="IS" data-name='IS' value='IS'>ICELAND</option>
                                    <option data-country_iso_code="IN" data-name='IN' value='IN'>INDIA</option>
                                    <option data-country_iso_code="ID" data-name='ID' value='ID'>INDONESIA</option>
                                    <option data-country_iso_code="IR" data-name='IR' value='IR'>IRAN, ISLAMIC REPUBLIC
                                        OF</option>
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
                                    <option data-country_iso_code="KP" data-name='KP' value='KP'>KOREA, DEMOCRATIC
                                        PEOPLE'S REPUBLIC OF</option>
                                    <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF
                                    </option>
                                    <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                                    <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                                    <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S DEMOCRATIC
                                        REPUBLIC</option>
                                    <option data-country_iso_code="LV" data-name='LV' value='LV'>LATVIA</option>
                                    <option data-country_iso_code="LB" data-name='LB' value='LB'>LEBANON</option>
                                    <option data-country_iso_code="LS" data-name='LS' value='LS'>LESOTHO</option>
                                    <option data-country_iso_code="LR" data-name='LR' value='LR'>LIBERIA</option>
                                    <option data-country_iso_code="LY" data-name='LY' value='LY'>LIBYAN ARAB JAMAHIRIYA
                                    </option>
                                    <option data-country_iso_code="LI" data-name='LI' value='LI'>LIECHTENSTEIN</option>
                                    <option data-country_iso_code="LT" data-name='LT' value='LT'>LITHUANIA</option>
                                    <option data-country_iso_code="LU" data-name='LU' value='LU'>LUXEMBOURG</option>
                                    <option data-country_iso_code="MO" data-name='MO' value='MO'>MACAO</option>
                                    <option data-country_iso_code="MK" data-name='MK' value='MK'>MACEDONIA, THE FORMER
                                        YUGOSLAV REPUBLIC OF</option>
                                    <option data-country_iso_code="MG" data-name='MG' value='MG'>MADAGASCAR</option>
                                    <option data-country_iso_code="MW" data-name='MW' value='MW'>MALAWI</option>
                                    <option data-country_iso_code="MY" data-name='MY' value='MY'>MALAYSIA</option>
                                    <option data-country_iso_code="MV" data-name='MV' value='MV'>MALDIVES</option>
                                    <option data-country_iso_code="ML" data-name='ML' value='ML'>MALI</option>
                                    <option data-country_iso_code="MT" data-name='MT' value='MT'>MALTA</option>
                                    <option data-country_iso_code="MH" data-name='MH' value='MH'>MARSHALL ISLANDS
                                    </option>
                                    <option data-country_iso_code="MQ" data-name='MQ' value='MQ'>MARTINIQUE</option>
                                    <option data-country_iso_code="MR" data-name='MR' value='MR'>MAURITANIA</option>
                                    <option data-country_iso_code="MU" data-name='MU' value='MU'>MAURITIUS</option>
                                    <option data-country_iso_code="YT" data-name='YT' value='YT'>MAYOTTE</option>
                                    <option data-country_iso_code="MX" data-name='MX' value='MX'>MEXICO</option>
                                    <option data-country_iso_code="FM" data-name='FM' value='FM'>MICRONESIA, FEDERATED
                                        STATES OF</option>
                                    <option data-country_iso_code="MD" data-name='MD' value='MD'>MOLDOVA, REPUBLIC OF
                                    </option>
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
                                    <option data-country_iso_code="AN" data-name='AN' value='AN'>NETHERLANDS ANTILLES
                                    </option>
                                    <option data-country_iso_code="NC" data-name='NC' value='NC'>NEW CALEDONIA</option>
                                    <option data-country_iso_code="NZ" data-name='NZ' value='NZ'>NEW ZEALAND</option>
                                    <option data-country_iso_code="NI" data-name='NI' value='NI'>NICARAGUA</option>
                                    <option data-country_iso_code="NE" data-name='NE' value='NE'>NIGER</option>
                                    <option data-country_iso_code="NG" data-name='NG' value='NG'>NIGERIA</option>
                                    <option data-country_iso_code="NU" data-name='NU' value='NU'>NIUE</option>
                                    <option data-country_iso_code="NF" data-name='NF' value='NF'>NORFOLK ISLAND</option>
                                    <option data-country_iso_code="MP" data-name='MP' value='MP'>NORTHERN MARIANA
                                        ISLANDS</option>
                                    <option data-country_iso_code="NO" data-name='NO' value='NO'>NORWAY</option>
                                    <option data-country_iso_code="OM" data-name='OM' value='OM'>OMAN</option>
                                    <option data-country_iso_code="PK" data-name='PK' value='PK'>PAKISTAN</option>
                                    <option data-country_iso_code="PW" data-name='PW' value='PW'>PALAU</option>
                                    <option data-country_iso_code="PS" data-name='PS' value='PS'>PALESTINE, STATE OF
                                    </option>
                                    <option data-country_iso_code="PA" data-name='PA' value='PA'>PANAMA</option>
                                    <option data-country_iso_code="PG" data-name='PG' value='PG'>PAPUA NEW GUINEA
                                    </option>
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
                                    <option data-country_iso_code="RU" data-name='RU' value='RU'>RUSSIAN FEDERATION
                                    </option>
                                    <option data-country_iso_code="RW" data-name='RW' value='RW'>RWANDA</option>
                                    <option data-country_iso_code="SH" data-name='SH' value='SH'>SAINT HELENA</option>
                                    <option data-country_iso_code="KN" data-name='KN' value='KN'>SAINT KITTS AND NEVIS
                                    </option>
                                    <option data-country_iso_code="LC" data-name='LC' value='LC'>SAINT LUCIA</option>
                                    <option data-country_iso_code="PM" data-name='PM' value='PM'>SAINT PIERRE AND
                                        MIQUELON</option>
                                    <option data-country_iso_code="VC" data-name='VC' value='VC'>SAINT VINCENT AND THE
                                        GRENADINES</option>
                                    <option data-country_iso_code="WS" data-name='WS' value='WS'>SAMOA</option>
                                    <option data-country_iso_code="SM" data-name='SM' value='SM'>SAN MARINO</option>
                                    <option data-country_iso_code="ST" data-name='ST' value='ST'>SAO TOME AND PRINCIPE
                                    </option>
                                    <option data-country_iso_code="SA" data-name='SA' value='SA'>SAUDI ARABIA</option>
                                    <option data-country_iso_code="SN" data-name='SN' value='SN'>SENEGAL</option>
                                    <option data-country_iso_code="RS" data-name='RS' value='RS'>SERBIA</option>
                                    <option data-country_iso_code="SC" data-name='SC' value='SC'>SEYCHELLES</option>
                                    <option data-country_iso_code="SL" data-name='SL' value='SL'>SIERRA LEONE</option>
                                    <option data-country_iso_code="SG" data-name='SG' value='SG'>SINGAPORE</option>
                                    <option data-country_iso_code="SK" data-name='SK' value='SK'>SLOVAKIA</option>
                                    <option data-country_iso_code="SI" data-name='SI' value='SI'>SLOVENIA</option>
                                    <option data-country_iso_code="SB" data-name='SB' value='SB'>SOLOMON ISLANDS
                                    </option>
                                    <option data-country_iso_code="SO" data-name='SO' value='SO'>SOMALIA</option>
                                    <option data-country_iso_code="ZA" data-name='ZA' value='ZA'>SOUTH AFRICA</option>
                                    <option data-country_iso_code="GS" data-name='GS' value='GS'>SOUTH GEORGIA AND THE
                                        SOUTH SANDWICH ISLANDS</option>
                                    <option data-country_iso_code="ES" data-name='ES' value='ES'>SPAIN</option>
                                    <option data-country_iso_code="LK" data-name='LK' value='LK'>SRI LANKA</option>
                                    <option data-country_iso_code="SD" data-name='SD' value='SD'>SUDAN</option>
                                    <option data-country_iso_code="SR" data-name='SR' value='SR'>SURINAME</option>
                                    <option data-country_iso_code="SJ" data-name='SJ' value='SJ'>SVALBARD AND JAN MAYEN
                                    </option>
                                    <option data-country_iso_code="SZ" data-name='SZ' value='SZ'>SWAZILAND</option>
                                    <option data-country_iso_code="SE" data-name='SE' value='SE'>SWEDEN</option>
                                    <option data-country_iso_code="CH" data-name='CH' value='CH'>SWITZERLAND</option>
                                    <option data-country_iso_code="SY" data-name='SY' value='SY'>SYRIAN ARAB REPUBLIC
                                    </option>
                                    <option data-country_iso_code="TW" data-name='TW' value='TW'>TAIWAN, PROVINCE OF
                                        CHINA</option>
                                    <option data-country_iso_code="TJ" data-name='TJ' value='TJ'>TAJIKISTAN</option>
                                    <option data-country_iso_code="TZ" data-name='TZ' value='TZ'>TANZANIA, UNITED
                                        REPUBLIC OF</option>
                                    <option data-country_iso_code="TH" data-name='TH' value='TH'>THAILAND</option>
                                    <option data-country_iso_code="TL" data-name='TL' value='TL'>TIMOR-LESTE</option>
                                    <option data-country_iso_code="TG" data-name='TG' value='TG'>TOGO</option>
                                    <option data-country_iso_code="TK" data-name='TK' value='TK'>TOKELAU</option>
                                    <option data-country_iso_code="TO" data-name='TO' value='TO'>TONGA</option>
                                    <option data-country_iso_code="TT" data-name='TT' value='TT'>TRINIDAD AND TOBAGO
                                    </option>
                                    <option data-country_iso_code="TN" data-name='TN' value='TN'>TUNISIA</option>
                                    <option data-country_iso_code="TR" data-name='TR' value='TR'>TURKEY</option>
                                    <option data-country_iso_code="TM" data-name='TM' value='TM'>TURKMENISTAN</option>
                                    <option data-country_iso_code="TC" data-name='TC' value='TC'>TURKS AND CAICOS
                                        ISLANDS</option>
                                    <option data-country_iso_code="TV" data-name='TV' value='TV'>TUVALU</option>
                                    <option data-country_iso_code="UG" data-name='UG' value='UG'>UGANDA</option>
                                    <option data-country_iso_code="UA" data-name='UA' value='UA'>UKRAINE</option>
                                    <option data-country_iso_code="AE" data-name='AE' value='AE'>UNITED ARAB EMIRATES
                                    </option>
                                    <option data-country_iso_code="GB" data-name='GB' value='GB'>UNITED KINGDOM</option>
                                    <option data-country_iso_code="US" data-name='US' value='US'>UNITED STATES</option>
                                    <option data-country_iso_code="UM" data-name='UM' value='UM'>UNITED STATES MINOR
                                        OUTLYING ISLANDS</option>
                                    <option data-country_iso_code="UY" data-name='UY' value='UY'>URUGUAY</option>
                                    <option data-country_iso_code="UZ" data-name='UZ' value='UZ'>UZBEKISTAN</option>
                                    <option data-country_iso_code="VU" data-name='VU' value='VU'>VANUATU</option>
                                    <option data-country_iso_code="VE" data-name='VE' value='VE'>VENEZUELA</option>
                                    <option data-country_iso_code="VN" data-name='VN' value='VN'>VIET NAM</option>
                                    <option data-country_iso_code="VG" data-name='VG' value='VG'>VIRGIN ISLANDS, BRITISH
                                    </option>
                                    <option data-country_iso_code="VI" data-name='VI' value='VI'>VIRGIN ISLANDS, U.S.
                                    </option>
                                    <option data-country_iso_code="WF" data-name='WF' value='WF'>WALLIS AND FUTUNA
                                    </option>
                                    <option data-country_iso_code="EH" data-name='EH' value='EH'>WESTERN SAHARA</option>
                                    <option data-country_iso_code="YE" data-name='YE' value='YE'>YEMEN</option>
                                    <option data-country_iso_code="ZM" data-name='ZM' value='ZM'>ZAMBIA</option>
                                    <option data-country_iso_code="ZW" data-name='ZW' value='ZW'>ZIMBABWE</option>
                                </select><input type="hidden" name="country_code" value="" /></div>
                            <div class='mex-form-item col-12 p-1'>
                                <label for='' class='d-none'>
                                    Phone</label>
                                <input type='phone' data-ip_country_code='AE' data-message='Phone Number is required.'
                                    data-extra-message="Phone Number Invalid" data-regex=''
                                    class='input_with_phone form-control mb-0 input_with_phone' name='phone_display'
                                    placeholder='' required value='' />
                                <input type='hidden' name='phone' />
                            </div>
                            <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                                <input type='number' name='phone_sms_verif_code' class='sms_verif_code regCon oth_sp'
                                    placeholder='SMS Code' required='required' number='true' autocomplete='off'
                                    list='autocompleteOff' />
                            </div>
                            <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                                <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset '
                                    id='button-send-callme_form' type='button' title='Send Code'>Send Code</button>
                            </div><button type='submit' class='btn-contact mx-1 mt-2 mb-0'
                                onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                data-cf-modified-ca3d5dfb88638f75dc7cc600-="">SUBMIT</button>
                        </form>
                        <hr class="mx-1 my-2 bg-dark">
                        <div class="px-1 contact-form-button-container">
                            <a style="padding: 5px 10px !important;" href="/account/live-account"
                                class="d-flex btn btn-mex-red mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe91d;</span>
                                <div class="btn-vr"></div>
                                <div class="mex-translatable" data-es="abre una cuenta real"
                                    data-fr="OUVRIR UN COMPTE RÉEL" data-ae="افتح حساب حقيقي" data-ms="Buka Akaun Live"
                                    data-th="เปิดบัญชี">OPEN LIVE ACCOUNT</div>
                            </a>
                            <a style="padding: 5px 10px !important;" href="/account/demo-account"
                                class="d-flex btn btn-mex-blue mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe918;</span>
                                <div class="btn-vr"></div>
                                <div class="mex-translatable" data-es="Abre una cuenta de prueba"
                                    data-fr="OUVRIR UN COMPTE DÉMO" data-ms="Buka Akaun Demo" data-th="เปิดบัญชีทดลอง"
                                    data-ae="افتح حساب تجريبي">OPEN DEMO ACCOUNT</div>
                            </a>
                            <a style="padding: 5px 10px !important;"
                                href="/partnership/introducing-brokers#introducing-brokers-form"
                                class="d-flex btn btn-mex-gray mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe920;</span>
                                <div class="btn-vr"></div>
                                <div class="mex-translatable" data-es="Resgistro de IB" data-fr='ENREGISTREMENT "IB"'
                                    data-ms="Pendaftaran IB" data-th="การลงทะเบียน IB" data-ae="تسجيل وسيط معرف">IB
                                    REGISTRATION</div>
                            </a>
                            <a style="padding: 5px 10px !important;" href="/account/account-funding"
                                class="d-flex btn btn-mex mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe921;</span>
                                <div class="btn-vr"></div>
                                <div class="mex-translatable" data-es="financia tu cuenta"
                                    data-fr="CRÉDITEZ VOTRE COMPTE" data-ms="Dana Akaun Anda"
                                    data-th="เติมเงินในบัญชีขอ" data-ae="تمويل حسابك">FUND YOUR ACCOUNT</div>
                            </a>
                            <div class="px-1 font-10" style="padding:0px;">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label label-1 mex-translatable" for="terms_conditions"
                                        data-ms='Saya menerima <a href="https://www.multibankfx.com/terms-conditions" target="_blank" class="text-22A0C4" style="padding:0 !important;">Terma & Syarat</a>, <a href="https://www.multibankfx.com/privacy-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;">Dasar Privasi</a>, dan <a href="https://www.multibankfx.com/cookie-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;"> Dasar Cookie.</a>.'
                                        data-fr='En soumettant ce formulaire, vous acceptez  <a href="https://www.multibankfx.com/terms-conditions" target="_blank" class="text-22A0C4" style="padding:0 !important;">les Termes et conditions</a>, <a href="https://www.multibankfx.com/privacy-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;">la Politique de confidentialité</a>, et <a href="https://www.multibankfx.com/cookie-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;"> la Politique sur les cookies.</a>.'
                                        data-ae='أوافق على <a href="https://www.multibankfx.com/terms-conditions" target="_blank" class="text-22A0C4" style="padding:0 !important;">الشروط والأحكام </a>, <a href="https://www.multibankfx.com/privacy-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;">وسياسة الخصوصية </a>, <a href="https://www.multibankfx.com/cookie-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;">وسياسة ملفات تعريف الارتباط</a>.'
                                        data-th='เมื่อส่งแบบฟอร์มนี้ถือว่าคุณยอมรับ
    <a href="https://www.multibankfx.com/terms-conditions" target="_blank" class="text-22A0C4" style="padding:0 !important;">ข้อกำหนดและเงื่อนไข </a>,
    <a href="https://www.multibankfx.com/privacy-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;">นโยบายความเป็นส่วนตัว</a>
    , <a href="https://www.multibankfx.com/cookie-policy" target="_blank" class="text-22A0C4" style="padding:0 !important;">และนโยบายคุกกี้</a>.'>By
                                        submitting this form, you agree to accept the <a
                                            href="https://www.multibankfx.com/terms-conditions" target="_blank"
                                            class="text-22A0C4" style="padding:0 !important;">Terms &amp;
                                            Conditions</a>, <a href="https://www.multibankfx.com/privacy-policy"
                                            target="_blank" class="text-22A0C4" style="padding:0 !important;">Privacy
                                            Policy</a>, and <a href="https://www.multibankfx.com/cookie-policy"
                                            target="_blank" class="text-22A0C4" style="padding:0 !important;">Cookie
                                            Policy</a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mex-h5 text-1e32a3 text-center c859">
                        <div class="h3 text-left c870">Other News</div>
                        <hr class="c881" />
                        <div class="row side-news-frame mx-0 mb-3">
                            <a href="/article/news_20180209" class="thumbnail-frame col-6 px-0">
                                <img src="/public_files/blog/thumbnails/news_20180209_a.jpg"
                                    class="side-news-thumbnail" />
                            </a>
                            <div class="side-news-text col-6 px-0 text-left">
                                <a href="/article/news_20180209" class="text-left article-thumbnail-text c933">MultiBank
                                    Group – Connecting the World Financial Markets
                                </a>
                                <div class="text-left article-thumbnail-text">2018-02-09
                                </div>
                            </div>
                        </div>
                        <div class="row side-news-frame mx-0 mb-3">
                            <a href="/article/multibank-attends-macau-grand-prix-2019"
                                class="thumbnail-frame col-6 px-0">
                                <img src="/public_files/blog/thumbnails/macau_gp_2019_thumbnail.jpg"
                                    class="side-news-thumbnail" />
                            </a>
                            <div class="side-news-text col-6 px-0 text-left">
                                <a href="/article/multibank-attends-macau-grand-prix-2019"
                                    class="text-left article-thumbnail-text c1001">
                                    MultiBank Group Attends Macau Grand Prix 2019
                                </a>
                                <div class="text-left article-thumbnail-text">
                                    2019-11-17
                                </div>
                            </div>
                        </div>
                        <div class="row side-news-frame mx-0 mb-3">
                            <a href="/article/multibank-chosen-best-FX-CFD-broker-2019"
                                class="thumbnail-frame col-6 px-0">
                                <img src="/public_files/blog/thumbnails/news_best_fx_cfd_broker_europe_asia_2019_thumbnail.jpg"
                                    class="side-news-thumbnail" />
                            </a>
                            <div class="side-news-text col-6 px-0 text-left">
                                <a href="/article/multibank-chosen-best-FX-CFD-broker-2019"
                                    class="text-left article-thumbnail-text c1066">
                                    MultiBank Chosen as Best FX & CFD Broker (Europe & Asia) 2019 by International
                                    Investor Magazine
                                </a>
                                <div class="text-left article-thumbnail-text">
                                    2019-05-27
                                </div>
                            </div>
                        </div>
                        <div class="row side-news-frame mx-0 mb-3">
                            <a href="/article/news_20180118" class="thumbnail-frame col-6 px-0">
                                <img src="/public_files/blog/thumbnails/news_20180118_a.jpg"
                                    class="side-news-thumbnail" />
                            </a>
                            <div class="side-news-text col-6 px-0 text-left">
                                <a href="/article/news_20180118" class="text-left article-thumbnail-text c1131">
                                    MultiBank Adds Hang Seng 50 (HK50) to Its Index CFD Offerings
                                </a>
                                <div class="text-left article-thumbnail-text">
                                    2018-01-18
                                </div>
                            </div>
                        </div>
                        <div class="row side-news-frame mx-0 mb-3">
                            <a href="/article/multibank-elite-sponsor-forex-day-madrid-2019"
                                class="thumbnail-frame col-6 px-0">
                                <img src="/public_files/blog/thumbnails/the_forex_day_thumbnail.jpg"
                                    class="side-news-thumbnail" />
                            </a>
                            <div class="side-news-text col-6 px-0 text-left">
                                <a href="/article/multibank-elite-sponsor-forex-day-madrid-2019"
                                    class="text-left article-thumbnail-text c1196">
                                    MultiBank Elite Sponsor at Forex Day Madrid 2019
                                </a>
                                <div class="text-left article-thumbnail-text">
                                    2019-06-08
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .grapesjs-editable-field-item[data-grapesjs-field="field_layout"][data-grapesjs-delta="0"] * {
            box-sizing: border-box;
        }

        div.div {
            padding-top: 5px;
            padding-right: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
            min-height: 25px;
        }

        .c933 {
            margin: 0;
            font-weight: 500 !important;
        }

        .c1001 {
            margin: 0;
            font-weight: 500 !important;
        }

        .c1066 {
            margin: 0;
            font-weight: 500 !important;
        }

        .c1131 {
            margin: 0;
            font-weight: 500 !important;
        }

        .c1196 {
            margin: 0;
            font-weight: 500 !important;
        }

        .c870 {
            font-family: "Oswald", Helvetica, Arial, sans-serif !important;
            text-transform: uppercase;
        }

        .c881 {
            color: inherit;
            margin-bottom: 1vmax;
        }

        .c859 {
            color: #000000;
        }
    </style>
    <section class="bg-gray contact-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 pb32">
                    <h3 class="mex-h1 text-1e32a3 text-center mex-m-b-5">contact us</h3>
                </div>
                <div class="col-lg-12 row ">
                    <div class="border-line col-md-6 col-lg-4 col-sm-12 col-xs-12 hidden-md">
                        <div class="mex-h3  mex-p-v-15 ">Phone Numbers Worldwide</div>
                        <ul class="contact-country">
                            <li><a href="tel:+8000178167?call"><img alt="UAE" class="country-icon" data-entity-type=""
                                        data-entity-uuid="" src="/public_files/images/common/country/uae_big.png" />
                                    <span> <strong>UAE:</strong> +971 4 875 1311</span> </a></li>
                        </ul>
                        <a class="btn btn-mex " href="/contact">Find your Country here</a>
                    </div>
                    <div class="border-line col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <ul class="contact-social-media d-none d-md-block">
                            <li>
                                <div class="mex-h3  mex-p-v-15 ">Follow us on</div>
                                <a href="https://www.facebook.com/MultiBankAR" target="_blank">
                                    <img alt="" src="/public_files/images/common/en_foote_btn_01.png"
                                        style="width:20px; height:auto" />
                                </a>
                                <a href=" https://twitter.com/MultiBankME" target="_blank">
                                    <img alt="" src="/public_files/images/common/en_foote_btn_02.png"
                                        style="width:20px; height:auto" />
                                </a>
                                <a href="https://www.youtube.com/channel/UCVBax9zFh3YZna6Qyw6sjDQ" target="_blank">
                                    <img alt="" src="/public_files/images/common/en_foote_btn_03.png"
                                        style="width:20px; height:auto" />
                                </a>
                                <a href="https://www.linkedin.com/company/multibankme " target="_blank">
                                    <img alt="" src="/public_files/images/common/en_foote_btn_04.png"
                                        style="width:20px; height:auto" />
                                </a>
                                <a href="https://www.instagram.com/multibankme/" target="_blank">
                                    <img alt="instagram" src="/public_files/images/common/en_foote_btn_05.png"
                                        style="width:20px; height:auto" />
                                </a>
                            </li>
                            <li class="ForIts">
                                <div class="mex-h3  mex-p-v-15  mex-m-t-10">Email Us</div>
                                <div class="contact-email"><a class="text-000033"
                                        href="/cdn-cgi/l/email-protection#2a43444c45474f6a475f465e43484b44414c5204494547"><span
                                            class="__cf_email__"
                                            data-cfemail="f891969e97959db8958d948c919a9996939e80d69b9795">[email&#160;protected]</span></a>
                                </div>
                            </li>
                            <li class="ForIts">
                                <div class="mex-h3 mex-m-t-20 ">Live Chat</div>
                                <a href="#"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;"
                                    data-cf-modified-ca3d5dfb88638f75dc7cc600-=""><img alt="chat"
                                        class="home_contact_us_chat_now" data-entity-type="" data-entity-uuid=""
                                        src="/public_files/images/common/footer_btn_chat_now.png" />
                                </a>
                            </li>
                        </ul>
                        <div class="d-flex d-md-none row py-4 row-eq-height">
                            <div class="col-4 text-center mx-auto">
                                <div class="mex-h3 mb-2 footer-mb-social-media">EMAIL US</div>
                                <a href="/cdn-cgi/l/email-protection#8ae3e4ece5e7efcae7ffe6fee3e8ebe4e1ecf2a4e9e5e7">
                                    <img class="footer-contact-ic"
                                        src="/public_files/images/common/icon_contact_mail.png">
                                </a>
                            </div>
                            <div class="col-4 text-center mx-auto">
                                <div class="mex-h3 mb-2 footer-mb-social-media">LIVE CHAT</div>
                                <a href="#"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;"
                                    data-cf-modified-ca3d5dfb88638f75dc7cc600-="">
                                    <img class="footer-contact-ic"
                                        src="/public_files/images/common/icon_contact_wechat.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 d-none d-md-block">
                        <div class="mex-h3  mex-p-v-15 text-sm-center text-md-left">GET A CALL BACK</div>
                        <div style="width: 100%;">
                            <form action="/form/callback?" name='call_back_footer_form'
                                class='multibank-form row mx-0 w-100 new' method='post' enctype=''
                                id='call_back_footer_form' target='' autocomplete='on'>
                                <input type='hidden' name='t_date' value='MjAyMC0wNy0yMCAxOTowNjowMw==' />
                                <input type='hidden' name='token'
                                    value='$2y$10$1ZYbbbynESFdybzz/VAGGuUL8SbKypBIUQqTOLX8/UIX2x2ROpI5C' />
                                <input type='hidden' name='source'
                                    value='[2020-07-10 17:57:26] https://www.multibankfx.com/thank-you?src=callback_individual<br/><br/>[2020-07-20 18:31:46] https://ae.multibankfx.com/<br/><br/>[2020-07-20 19:01:40] https://ae.multibankfx.com/<br/><br/>[2020-07-20 19:05:44] https://ae.multibankfx.com/about/milestones<br/><br/> <br/><br/> posted From: ae.multibankfx.com/article/milestone-multibank-group-establishes-new-branch-in-turkey?web=true' />
                                <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                                    <label for='' class='m-0'>
                                    </label>
                                    <div class='form-check form-check-inline'><input
                                            data-message='Account Type is Required.'
                                            data-extra-message="Full Name Invalid." class='   ' name='account_type'
                                            type='radio' required value='1' checked />
                                        <label class='  ' for=''>INDIVIDUAL</label>
                                    </div>
                                </div>
                                <div class='mex-form-item col-6 p-1 cb-partnership font-16 text-center'>
                                    <label for='' class='m-0'>
                                    </label>
                                    <div class='form-check form-check-inline'><input data-message=''
                                            data-extra-message="Full Name Invalid." class='   ' name='account_type'
                                            type='radio' required value='2' />
                                        <label class='  ' for=''>PARTNERSHIP</label>
                                    </div>
                                </div>
                                <div class='mex-form-item col-12 p-1'>
                                    <label for='' class='d-none'>
                                    </label>
                                    <input type='text' data-message='Name is Required.'
                                        data-extra-message="Full Name Invalid." data-regex='' class=' form-control mb-0'
                                        name='name' placeholder='Full Name' required value='' />
                                </div>
                                <div class='mex-form-item col-12 p-1'>
                                    <label for='' class='d-none'>
                                    </label>
                                    <input type='email' data-message='Email is Required.'
                                        data-extra-message="Email is Invalid." data-regex='' class='form-control mb-0'
                                        name='email' placeholder='Email' required value='' />
                                </div>
                                <div class='mex-form-item col-12 p-1'>
                                    <label for='' class='d-none'>
                                    </label>
                                    <input type='email' data-message='Confirm Email is Required.'
                                        data-extra-message="Email Mismatched." data-regex='' class='form-control mb-0'
                                        name='confirm_email' placeholder='Confirm Email' required value='' />
                                </div>
                                <div class='d-none'>
                                    <label for='' class='d-none'>
                                    </label>
                                    <select data-message='Country Name is Required.'
                                        data-extra-message="Country Name Invalid"
                                        class='selection-country form-control  mb-0 select_with_country select_with_country'
                                        name='country_name' required>
                                        <option value='' selected='selected'>Select Country</option>
                                        <option data-country_iso_code="AF" data-name='AF' value='AF'>AFGHANISTAN
                                        </option>
                                        <option data-country_iso_code="AL" data-name='AL' value='AL'>ALBANIA</option>
                                        <option data-country_iso_code="DZ" data-name='DZ' value='DZ'>ALGERIA</option>
                                        <option data-country_iso_code="AS" data-name='AS' value='AS'>AMERICAN SAMOA
                                        </option>
                                        <option data-country_iso_code="AD" data-name='AD' value='AD'>ANDORRA</option>
                                        <option data-country_iso_code="AO" data-name='AO' value='AO'>ANGOLA</option>
                                        <option data-country_iso_code="AI" data-name='AI' value='AI'>ANGUILLA</option>
                                        <option data-country_iso_code="AQ" data-name='AQ' value='AQ'>ANTARCTICA</option>
                                        <option data-country_iso_code="AG" data-name='AG' value='AG'>ANTIGUA AND BARBUDA
                                        </option>
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
                                        <option data-country_iso_code="BA" data-name='BA' value='BA'>BOSNIA AND
                                            HERZEGOVINA</option>
                                        <option data-country_iso_code="BW" data-name='BW' value='BW'>BOTSWANA</option>
                                        <option data-country_iso_code="BV" data-name='BV' value='BV'>BOUVET ISLAND
                                        </option>
                                        <option data-country_iso_code="BR" data-name='BR' value='BR'>BRAZIL</option>
                                        <option data-country_iso_code="IO" data-name='IO' value='IO'>BRITISH INDIAN
                                            OCEAN TERRITORY</option>
                                        <option data-country_iso_code="BN" data-name='BN' value='BN'>BRUNEI DARUSSALAM
                                        </option>
                                        <option data-country_iso_code="BG" data-name='BG' value='BG'>BULGARIA</option>
                                        <option data-country_iso_code="BF" data-name='BF' value='BF'>BURKINA FASO
                                        </option>
                                        <option data-country_iso_code="BI" data-name='BI' value='BI'>BURUNDI</option>
                                        <option data-country_iso_code="KH" data-name='KH' value='KH'>CAMBODIA</option>
                                        <option data-country_iso_code="CM" data-name='CM' value='CM'>CAMEROON</option>
                                        <option data-country_iso_code="CA" data-name='CA' value='CA'>CANADA</option>
                                        <option data-country_iso_code="CV" data-name='CV' value='CV'>CAPE VERDE</option>
                                        <option data-country_iso_code="KY" data-name='KY' value='KY'>CAYMAN ISLANDS
                                        </option>
                                        <option data-country_iso_code="CF" data-name='CF' value='CF'>CENTRAL AFRICAN
                                            REPUBLIC</option>
                                        <option data-country_iso_code="TD" data-name='TD' value='TD'>CHAD</option>
                                        <option data-country_iso_code="CL" data-name='CL' value='CL'>CHILE</option>
                                        <option data-country_iso_code="CN" data-name='CN' value='CN'>CHINA</option>
                                        <option data-country_iso_code="CX" data-name='CX' value='CX'>CHRISTMAS ISLAND
                                        </option>
                                        <option data-country_iso_code="CC" data-name='CC' value='CC'>COCOS (KEELING)
                                            ISLANDS</option>
                                        <option data-country_iso_code="CO" data-name='CO' value='CO'>COLOMBIA</option>
                                        <option data-country_iso_code="KM" data-name='KM' value='KM'>COMOROS</option>
                                        <option data-country_iso_code="CG" data-name='CG' value='CG'>CONGO</option>
                                        <option data-country_iso_code="CD" data-name='CD' value='CD'>CONGO, THE
                                            DEMOCRATIC REPUBLIC OF THE</option>
                                        <option data-country_iso_code="CK" data-name='CK' value='CK'>COOK ISLANDS
                                        </option>
                                        <option data-country_iso_code="CR" data-name='CR' value='CR'>COSTA RICA</option>
                                        <option data-country_iso_code="CI" data-name='CI' value='CI'>COTE D'IVOIRE
                                        </option>
                                        <option data-country_iso_code="HR" data-name='HR' value='HR'>CROATIA</option>
                                        <option data-country_iso_code="CU" data-name='CU' value='CU'>CUBA</option>
                                        <option data-country_iso_code="CY" data-name='CY' value='CY'>CYPRUS</option>
                                        <option data-country_iso_code="CZ" data-name='CZ' value='CZ'>CZECH REPUBLIC
                                        </option>
                                        <option data-country_iso_code="DK" data-name='DK' value='DK'>DENMARK</option>
                                        <option data-country_iso_code="DJ" data-name='DJ' value='DJ'>DJIBOUTI</option>
                                        <option data-country_iso_code="DM" data-name='DM' value='DM'>DOMINICA</option>
                                        <option data-country_iso_code="DO" data-name='DO' value='DO'>DOMINICAN REPUBLIC
                                        </option>
                                        <option data-country_iso_code="EC" data-name='EC' value='EC'>ECUADOR</option>
                                        <option data-country_iso_code="EG" data-name='EG' value='EG'>EGYPT</option>
                                        <option data-country_iso_code="SV" data-name='SV' value='SV'>EL SALVADOR
                                        </option>
                                        <option data-country_iso_code="GQ" data-name='GQ' value='GQ'>EQUATORIAL GUINEA
                                        </option>
                                        <option data-country_iso_code="ER" data-name='ER' value='ER'>ERITREA</option>
                                        <option data-country_iso_code="EE" data-name='EE' value='EE'>ESTONIA</option>
                                        <option data-country_iso_code="ET" data-name='ET' value='ET'>ETHIOPIA</option>
                                        <option data-country_iso_code="FK" data-name='FK' value='FK'>FALKLAND ISLANDS
                                            (MALVINAS)</option>
                                        <option data-country_iso_code="FO" data-name='FO' value='FO'>FAROE ISLANDS
                                        </option>
                                        <option data-country_iso_code="FJ" data-name='FJ' value='FJ'>FIJI</option>
                                        <option data-country_iso_code="FI" data-name='FI' value='FI'>FINLAND</option>
                                        <option data-country_iso_code="FR" data-name='FR' value='FR'>FRANCE</option>
                                        <option data-country_iso_code="GF" data-name='GF' value='GF'>FRENCH GUIANA
                                        </option>
                                        <option data-country_iso_code="PF" data-name='PF' value='PF'>FRENCH POLYNESIA
                                        </option>
                                        <option data-country_iso_code="TF" data-name='TF' value='TF'>FRENCH SOUTHERN
                                            TERRITORIES</option>
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
                                        <option data-country_iso_code="GW" data-name='GW' value='GW'>GUINEA-BISSAU
                                        </option>
                                        <option data-country_iso_code="GY" data-name='GY' value='GY'>GUYANA</option>
                                        <option data-country_iso_code="HT" data-name='HT' value='HT'>HAITI</option>
                                        <option data-country_iso_code="HM" data-name='HM' value='HM'>HEARD ISLAND AND
                                            MCDONALD ISLANDS</option>
                                        <option data-country_iso_code="VA" data-name='VA' value='VA'>HOLY SEE (VATICAN
                                            CITY STATE)</option>
                                        <option data-country_iso_code="HN" data-name='HN' value='HN'>HONDURAS</option>
                                        <option data-country_iso_code="HK" data-name='HK' value='HK'>HONG KONG</option>
                                        <option data-country_iso_code="HU" data-name='HU' value='HU'>HUNGARY</option>
                                        <option data-country_iso_code="IS" data-name='IS' value='IS'>ICELAND</option>
                                        <option data-country_iso_code="IN" data-name='IN' value='IN'>INDIA</option>
                                        <option data-country_iso_code="ID" data-name='ID' value='ID'>INDONESIA</option>
                                        <option data-country_iso_code="IR" data-name='IR' value='IR'>IRAN, ISLAMIC
                                            REPUBLIC OF</option>
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
                                        <option data-country_iso_code="KP" data-name='KP' value='KP'>KOREA, DEMOCRATIC
                                            PEOPLE'S REPUBLIC OF</option>
                                        <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF
                                        </option>
                                        <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                                        <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                                        <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S
                                            DEMOCRATIC REPUBLIC</option>
                                        <option data-country_iso_code="LV" data-name='LV' value='LV'>LATVIA</option>
                                        <option data-country_iso_code="LB" data-name='LB' value='LB'>LEBANON</option>
                                        <option data-country_iso_code="LS" data-name='LS' value='LS'>LESOTHO</option>
                                        <option data-country_iso_code="LR" data-name='LR' value='LR'>LIBERIA</option>
                                        <option data-country_iso_code="LY" data-name='LY' value='LY'>LIBYAN ARAB
                                            JAMAHIRIYA</option>
                                        <option data-country_iso_code="LI" data-name='LI' value='LI'>LIECHTENSTEIN
                                        </option>
                                        <option data-country_iso_code="LT" data-name='LT' value='LT'>LITHUANIA</option>
                                        <option data-country_iso_code="LU" data-name='LU' value='LU'>LUXEMBOURG</option>
                                        <option data-country_iso_code="MO" data-name='MO' value='MO'>MACAO</option>
                                        <option data-country_iso_code="MK" data-name='MK' value='MK'>MACEDONIA, THE
                                            FORMER YUGOSLAV REPUBLIC OF</option>
                                        <option data-country_iso_code="MG" data-name='MG' value='MG'>MADAGASCAR</option>
                                        <option data-country_iso_code="MW" data-name='MW' value='MW'>MALAWI</option>
                                        <option data-country_iso_code="MY" data-name='MY' value='MY'>MALAYSIA</option>
                                        <option data-country_iso_code="MV" data-name='MV' value='MV'>MALDIVES</option>
                                        <option data-country_iso_code="ML" data-name='ML' value='ML'>MALI</option>
                                        <option data-country_iso_code="MT" data-name='MT' value='MT'>MALTA</option>
                                        <option data-country_iso_code="MH" data-name='MH' value='MH'>MARSHALL ISLANDS
                                        </option>
                                        <option data-country_iso_code="MQ" data-name='MQ' value='MQ'>MARTINIQUE</option>
                                        <option data-country_iso_code="MR" data-name='MR' value='MR'>MAURITANIA</option>
                                        <option data-country_iso_code="MU" data-name='MU' value='MU'>MAURITIUS</option>
                                        <option data-country_iso_code="YT" data-name='YT' value='YT'>MAYOTTE</option>
                                        <option data-country_iso_code="MX" data-name='MX' value='MX'>MEXICO</option>
                                        <option data-country_iso_code="FM" data-name='FM' value='FM'>MICRONESIA,
                                            FEDERATED STATES OF</option>
                                        <option data-country_iso_code="MD" data-name='MD' value='MD'>MOLDOVA, REPUBLIC
                                            OF</option>
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
                                        <option data-country_iso_code="NL" data-name='NL' value='NL'>NETHERLANDS
                                        </option>
                                        <option data-country_iso_code="AN" data-name='AN' value='AN'>NETHERLANDS
                                            ANTILLES</option>
                                        <option data-country_iso_code="NC" data-name='NC' value='NC'>NEW CALEDONIA
                                        </option>
                                        <option data-country_iso_code="NZ" data-name='NZ' value='NZ'>NEW ZEALAND
                                        </option>
                                        <option data-country_iso_code="NI" data-name='NI' value='NI'>NICARAGUA</option>
                                        <option data-country_iso_code="NE" data-name='NE' value='NE'>NIGER</option>
                                        <option data-country_iso_code="NG" data-name='NG' value='NG'>NIGERIA</option>
                                        <option data-country_iso_code="NU" data-name='NU' value='NU'>NIUE</option>
                                        <option data-country_iso_code="NF" data-name='NF' value='NF'>NORFOLK ISLAND
                                        </option>
                                        <option data-country_iso_code="MP" data-name='MP' value='MP'>NORTHERN MARIANA
                                            ISLANDS</option>
                                        <option data-country_iso_code="NO" data-name='NO' value='NO'>NORWAY</option>
                                        <option data-country_iso_code="OM" data-name='OM' value='OM'>OMAN</option>
                                        <option data-country_iso_code="PK" data-name='PK' value='PK'>PAKISTAN</option>
                                        <option data-country_iso_code="PW" data-name='PW' value='PW'>PALAU</option>
                                        <option data-country_iso_code="PS" data-name='PS' value='PS'>PALESTINE, STATE OF
                                        </option>
                                        <option data-country_iso_code="PA" data-name='PA' value='PA'>PANAMA</option>
                                        <option data-country_iso_code="PG" data-name='PG' value='PG'>PAPUA NEW GUINEA
                                        </option>
                                        <option data-country_iso_code="PY" data-name='PY' value='PY'>PARAGUAY</option>
                                        <option data-country_iso_code="PE" data-name='PE' value='PE'>PERU</option>
                                        <option data-country_iso_code="PH" data-name='PH' value='PH'>PHILIPPINES
                                        </option>
                                        <option data-country_iso_code="PN" data-name='PN' value='PN'>PITCAIRN</option>
                                        <option data-country_iso_code="PL" data-name='PL' value='PL'>POLAND</option>
                                        <option data-country_iso_code="PT" data-name='PT' value='PT'>PORTUGAL</option>
                                        <option data-country_iso_code="PR" data-name='PR' value='PR'>PUERTO RICO
                                        </option>
                                        <option data-country_iso_code="QA" data-name='QA' value='QA'>QATAR</option>
                                        <option data-country_iso_code="RE" data-name='RE' value='RE'>REUNION</option>
                                        <option data-country_iso_code="RO" data-name='RO' value='RO'>ROMANIA</option>
                                        <option data-country_iso_code="RU" data-name='RU' value='RU'>RUSSIAN FEDERATION
                                        </option>
                                        <option data-country_iso_code="RW" data-name='RW' value='RW'>RWANDA</option>
                                        <option data-country_iso_code="SH" data-name='SH' value='SH'>SAINT HELENA
                                        </option>
                                        <option data-country_iso_code="KN" data-name='KN' value='KN'>SAINT KITTS AND
                                            NEVIS</option>
                                        <option data-country_iso_code="LC" data-name='LC' value='LC'>SAINT LUCIA
                                        </option>
                                        <option data-country_iso_code="PM" data-name='PM' value='PM'>SAINT PIERRE AND
                                            MIQUELON</option>
                                        <option data-country_iso_code="VC" data-name='VC' value='VC'>SAINT VINCENT AND
                                            THE GRENADINES</option>
                                        <option data-country_iso_code="WS" data-name='WS' value='WS'>SAMOA</option>
                                        <option data-country_iso_code="SM" data-name='SM' value='SM'>SAN MARINO</option>
                                        <option data-country_iso_code="ST" data-name='ST' value='ST'>SAO TOME AND
                                            PRINCIPE</option>
                                        <option data-country_iso_code="SA" data-name='SA' value='SA'>SAUDI ARABIA
                                        </option>
                                        <option data-country_iso_code="SN" data-name='SN' value='SN'>SENEGAL</option>
                                        <option data-country_iso_code="RS" data-name='RS' value='RS'>SERBIA</option>
                                        <option data-country_iso_code="SC" data-name='SC' value='SC'>SEYCHELLES</option>
                                        <option data-country_iso_code="SL" data-name='SL' value='SL'>SIERRA LEONE
                                        </option>
                                        <option data-country_iso_code="SG" data-name='SG' value='SG'>SINGAPORE</option>
                                        <option data-country_iso_code="SK" data-name='SK' value='SK'>SLOVAKIA</option>
                                        <option data-country_iso_code="SI" data-name='SI' value='SI'>SLOVENIA</option>
                                        <option data-country_iso_code="SB" data-name='SB' value='SB'>SOLOMON ISLANDS
                                        </option>
                                        <option data-country_iso_code="SO" data-name='SO' value='SO'>SOMALIA</option>
                                        <option data-country_iso_code="ZA" data-name='ZA' value='ZA'>SOUTH AFRICA
                                        </option>
                                        <option data-country_iso_code="GS" data-name='GS' value='GS'>SOUTH GEORGIA AND
                                            THE SOUTH SANDWICH ISLANDS</option>
                                        <option data-country_iso_code="ES" data-name='ES' value='ES'>SPAIN</option>
                                        <option data-country_iso_code="LK" data-name='LK' value='LK'>SRI LANKA</option>
                                        <option data-country_iso_code="SD" data-name='SD' value='SD'>SUDAN</option>
                                        <option data-country_iso_code="SR" data-name='SR' value='SR'>SURINAME</option>
                                        <option data-country_iso_code="SJ" data-name='SJ' value='SJ'>SVALBARD AND JAN
                                            MAYEN</option>
                                        <option data-country_iso_code="SZ" data-name='SZ' value='SZ'>SWAZILAND</option>
                                        <option data-country_iso_code="SE" data-name='SE' value='SE'>SWEDEN</option>
                                        <option data-country_iso_code="CH" data-name='CH' value='CH'>SWITZERLAND
                                        </option>
                                        <option data-country_iso_code="SY" data-name='SY' value='SY'>SYRIAN ARAB
                                            REPUBLIC</option>
                                        <option data-country_iso_code="TW" data-name='TW' value='TW'>TAIWAN, PROVINCE OF
                                            CHINA</option>
                                        <option data-country_iso_code="TJ" data-name='TJ' value='TJ'>TAJIKISTAN</option>
                                        <option data-country_iso_code="TZ" data-name='TZ' value='TZ'>TANZANIA, UNITED
                                            REPUBLIC OF</option>
                                        <option data-country_iso_code="TH" data-name='TH' value='TH'>THAILAND</option>
                                        <option data-country_iso_code="TL" data-name='TL' value='TL'>TIMOR-LESTE
                                        </option>
                                        <option data-country_iso_code="TG" data-name='TG' value='TG'>TOGO</option>
                                        <option data-country_iso_code="TK" data-name='TK' value='TK'>TOKELAU</option>
                                        <option data-country_iso_code="TO" data-name='TO' value='TO'>TONGA</option>
                                        <option data-country_iso_code="TT" data-name='TT' value='TT'>TRINIDAD AND TOBAGO
                                        </option>
                                        <option data-country_iso_code="TN" data-name='TN' value='TN'>TUNISIA</option>
                                        <option data-country_iso_code="TR" data-name='TR' value='TR'>TURKEY</option>
                                        <option data-country_iso_code="TM" data-name='TM' value='TM'>TURKMENISTAN
                                        </option>
                                        <option data-country_iso_code="TC" data-name='TC' value='TC'>TURKS AND CAICOS
                                            ISLANDS</option>
                                        <option data-country_iso_code="TV" data-name='TV' value='TV'>TUVALU</option>
                                        <option data-country_iso_code="UG" data-name='UG' value='UG'>UGANDA</option>
                                        <option data-country_iso_code="UA" data-name='UA' value='UA'>UKRAINE</option>
                                        <option data-country_iso_code="AE" data-name='AE' value='AE'>UNITED ARAB
                                            EMIRATES</option>
                                        <option data-country_iso_code="GB" data-name='GB' value='GB'>UNITED KINGDOM
                                        </option>
                                        <option data-country_iso_code="US" data-name='US' value='US'>UNITED STATES
                                        </option>
                                        <option data-country_iso_code="UM" data-name='UM' value='UM'>UNITED STATES MINOR
                                            OUTLYING ISLANDS</option>
                                        <option data-country_iso_code="UY" data-name='UY' value='UY'>URUGUAY</option>
                                        <option data-country_iso_code="UZ" data-name='UZ' value='UZ'>UZBEKISTAN</option>
                                        <option data-country_iso_code="VU" data-name='VU' value='VU'>VANUATU</option>
                                        <option data-country_iso_code="VE" data-name='VE' value='VE'>VENEZUELA</option>
                                        <option data-country_iso_code="VN" data-name='VN' value='VN'>VIET NAM</option>
                                        <option data-country_iso_code="VG" data-name='VG' value='VG'>VIRGIN ISLANDS,
                                            BRITISH</option>
                                        <option data-country_iso_code="VI" data-name='VI' value='VI'>VIRGIN ISLANDS,
                                            U.S.</option>
                                        <option data-country_iso_code="WF" data-name='WF' value='WF'>WALLIS AND FUTUNA
                                        </option>
                                        <option data-country_iso_code="EH" data-name='EH' value='EH'>WESTERN SAHARA
                                        </option>
                                        <option data-country_iso_code="YE" data-name='YE' value='YE'>YEMEN</option>
                                        <option data-country_iso_code="ZM" data-name='ZM' value='ZM'>ZAMBIA</option>
                                        <option data-country_iso_code="ZW" data-name='ZW' value='ZW'>ZIMBABWE</option>
                                    </select><input type="hidden" name="country_code" value="" /></div>
                                <div class='mex-form-item col-12 p-1'>
                                    <label for='' class='d-none'>
                                    </label>
                                    <input type='phone' data-ip_country_code='AE'
                                        data-message='Phone Number is required.'
                                        data-extra-message="Phone Number Invalid" data-regex=''
                                        class='input_with_phone form-control mb-0 input_with_phone' name='phone_display'
                                        placeholder='' required value='' />
                                    <input type='hidden' name='phone' />
                                </div>
                                <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                                    <input type='number' name='phone_sms_verif_code'
                                        class='sms_verif_code regCon oth_sp' placeholder='SMS Code' required='required'
                                        number='true' autocomplete='off' list='autocompleteOff' />
                                </div>
                                <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                                    <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset '
                                        id='button-send-callme_form' type='button' title='Send Code'>Send Code</button>
                                </div><button type='submit' class='btn btn-mex mx-auto'
                                    onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                                    data-cf-modified-ca3d5dfb88638f75dc7cc600-="">CALL ME</button>
                            </form>
                            <div class="px-1 font-10" style="padding:0px;">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label label-1 " for="terms_conditions">By submitting this
                                        form,
                                        you agree to accept the <a href="https://www.multibankfx.com/terms-conditions"
                                            target="_blank" class="text-22A0C4" style="padding:0 !important;">Terms
                                            &amp; Conditions</a>,
                                        <a href="https://www.multibankfx.com/privacy-policy" target="_blank"
                                            class="text-22A0C4" style="padding:0 !important;">Privacy Policy</a>, and <a
                                            href="https://www.multibankfx.com/cookie-policy" target="_blank"
                                            class="text-22A0C4" style="padding:0 !important;">Cookie Policy</a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-lg-12 footer">
                <div class="row justify-content-between"
                    style="padding-bottom: 25px; border-bottom: 1px solid #808080;">
                    <div class="col-xs-12 col-sm-12 col-md-8 footer_other_left align-self-center"><a class="footer_logo"
                            href="/" target="_parent"><img alt="logo" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/common/logo_black_360.png" width="200" /></a> <a
                            href="https://my.multibankfx.com/en/traders/login" target="_blank">MyMultibank</a><a
                            href="/contact" target="_parent">Contact Us</a><a href="#"
                            onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;"
                            data-cf-modified-ca3d5dfb88638f75dc7cc600-="">Support</a>
                        <a href="/about/career" target="_parent">Career</a></div>
                    <div class="footer_btn col-xs-12  col-sm-12 col-md-4 align-self-center">
                        <a href="https://www.facebook.com/MultiBankAR" target="_blank">
                            <img alt="facebook" height="30" src="/public_files/images/common/en_foote_btn_01.png"
                                width="30" />
                        </a>
                        <a href="https://twitter.com/MultiBankME" target="_blank">
                            <img alt="twitter" height="30" src="/public_files/images/common/en_foote_btn_02.png"
                                width="30" />
                        </a>
                        <a href="https://www.youtube.com/channel/UCVBax9zFh3YZna6Qyw6sjDQ" target="_blank">
                            <img alt="youtube" height="30" src="/public_files/images/common/en_foote_btn_03.png"
                                width="30" />
                        </a>
                        <a href="https://www.linkedin.com/company/multibankme" target="_blank">
                            <img alt="linkedin" height="30" src="/public_files/images/common/en_foote_btn_04.png"
                                width="30" />
                        </a>
                        <a href="https://www.instagram.com/multibankme/" target="_blank">
                            <img alt="instagram" height="30" src="/public_files/images/common/en_foote_btn_05.png"
                                width="30" />
                        </a>
                    </div>
                </div>
                <div class="footer_map_content d-none d-md-block" style="margin-top: 0; border-top: none">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/about"><strong>About us</strong></a> <a href="/about/why-multibank-group"
                                        target="_parent">Why Multibank</a> <a href="/about/global-presence"
                                        target="_parent">Global Presence</a> <a href="/about/regulations"
                                        target="_parent">Regulations</a> <a href="/about/security-of-funds"
                                        target="_parent">Security of Funds</a> <a href="/about/milestones"
                                        target="_parent">Milestones</a> <a href="/about/management"
                                        target="_parent">Management</a>
                                    <a href="/about/awards" target="_parent">Awards</a> <a href="/about/sponsorship"
                                        target="_parent">Sponsorship</a>
                                    <a href="/about/company-news" target="_parent">Company News</a> <a
                                        href="/about/career" target="_parent">Career</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/products"><strong>Products</strong></a> <a href="/products/forex"
                                        target="_parent">Forex</a> <a href="/products/metals"
                                        target="_parent">Metals</a> <a href="/products/shares"
                                        target="_parent">Shares</a>
                                    <a href="/products/indices" target="_parent">Indices</a> <a
                                        href="/products/commodities" target="_parent">Commodities</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li>
                                    <a href="/platforms"><strong>Platforms</strong></a>
                                    <a href="/platforms/compare-platforms" target="_parent">Compare Platforms</a>
                                    <a href="/platforms/multibank-pro" target="_parent">MultiBank Pro </a>
                                    <a href="/platforms/maximus" target="_parent">Maximus</a>
                                    <a href="/platforms/mt5-platform">MT5 Platform</a>
                                    <a href="/platforms/download-center" target="_parent">Download Center </a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/account"><strong>Accounts &amp; Funding</strong></a> <a
                                        href="/account/live-account" target="_parent">Live Account </a> <a
                                        href="/account/demo-account" target="_parent">Demo Account </a> <a
                                        href="/account/islamic-account" target="_parent">Islamic Account </a> <a
                                        href="/account/account-funding" target="_parent">Account Funding </a> <a
                                        href="/account/withdrawals" target="_parent">Withdrawals</a> <a
                                        href="/account/account-forms" target="_parent">Account Forms </a> <a
                                        href="/account/bonus" target="_parent">Bonuses</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/tools"><strong>Tools</strong></a> <a href="/tools/trading-tools"
                                        target="_parent">Trading Tools </a> <a href="/tools/trading-conditions"
                                        target="_parent">Trading Conditions </a> <a href="/tools/holiday-hours-notices"
                                        target="_parent">Trading Hours &amp; Holiday
                                        Notice </a> <a href="/cfd-expiration-dates" target="_parent">CFD Expiration
                                        Dates</a> <a href="/scalping-policy" target="_parent">Scalping Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="footer_map">
                                <li><a href="/partnership"><strong>Partnership</strong></a> <a
                                        href="/partnership/introducing-brokers" target="_parent">Introducing
                                        Brokers </a> <a href="/partnership/franchise-program" target="_parent">Franchise
                                        Program </a> <a href="/partnership/white-label" target="_parent">White Label
                                    </a> <a href="/partnership/prime-of-primes" target="_parent">Prime of Primes</a> <a
                                        href="/partnership/cpa-affiliate-program" target="_parent">CPA Affiliate
                                        Program</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer_pa">
                    <div class="container">
                        <div class="row">
                            <img class="w-100 h-auto d-block d-lg-none"
                                src="/public_files/images/common/icons/payment_partners-201906.jpg">
                            <div class="footer-icon-list d-none d-lg-block">
                                <img class="footer-icon" alt="nab"
                                    src="/public_files/images/common/icons/logo_footer_nab.png"
                                    style="width: auto; height: 30px;">
                                <img class="footer-icon" alt="neteller"
                                    src="/public_files/images/common/icons/logo_footer_neteller.png"
                                    style="width: auto; height: 20px;">
                                <img class="footer-icon" alt="skrill"
                                    src="/public_files/images/common/icons/logo_footer_skrill.png"
                                    style="width: auto; height: 25px;">
                                <img class="footer-icon" alt="swift"
                                    src="/public_files/images/common/icons/logo_footer_swift.png"
                                    style="width: auto; height: 25px;">
                                <img class="footer-icon" alt="visa"
                                    src="/public_files/images/common/icons/logo_footer_visa.png"
                                    style="width: auto; height: 25px;">
                                <img class="footer-icon" alt="mastercard"
                                    src="/public_files/images/common/icons/logo_footer_mastercard.png"
                                    style="width: auto; height: 25px;">
                            </div>
                        </div>
                    </div>
                    <p><a href="/privacy-policy" target="_parent">Privacy Policy </a> | <a href="/cookie-policy"
                            target="_parent"> Cookie
                            Policy</a> | <a href="/terms-conditions" target="_parent">Terms &amp; Conditions </a> | <a
                            href="/website-disclaimer" target="_parent"> Website Disclaimer </a> | <a
                            href="/risk-warning" target="_parent"> Risk
                            Warning</a></p>
                    <p>Copyright © : 2005-2020 MEX Group Worldwide Limited. All rights reserved. MultiBank Exchange is
                        the
                        trading name of MultiBank Forex Exchange Corporation incorporated in California, USA with
                        Company
                        No. 3918038. MultibankFX is the trading name of Multibank FX International Corporation (BVI)
                        Company
                        No. 1377324. High Risk Investment Warning: Trading foreign exchange and/or contracts for
                        differences
                        on margin carries a high level of risk, and may not be suitable for all investors. The
                        possibility
                        exists that you could sustain a loss in excess of your deposited funds. Please refer to specific
                        risk warning for each regulated entity during the account opening process.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+97148751312">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid=""
                    src="/public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=971526507398"
            target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid=""
                    src="/public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn"
            href="/cdn-cgi/l/email-protection#fa9989ba978f968e93989b94919c82d4999597">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid=""
                    src="/public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn"
            onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;"
            data-cf-modified-ca3d5dfb88638f75dc7cc600-="">
            <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid=""
                    src="/public_files/images/home/sidebar_icon/chat.png" width="50" /> </span>
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
                <form action="/form/contactus?" name='email_us_form' class='multibank-form row mx-0 w-100 new'
                    method='post' enctype='' id='email_us_form' target='' autocomplete='on'>
                    <input type='hidden' name='t_date' value='MjAyMC0wNy0yMCAxOTowNjowMw==' />
                    <input type='hidden' name='token'
                        value='$2y$10$C7gQBTaXj75HXmet571DvOSTpEVoARMo7OQDgy.0ImM7QNd0cnXLu' />
                    <input type='hidden' name='source'
                        value='[2020-07-10 17:57:26] https://www.multibankfx.com/thank-you?src=callback_individual<br/><br/>[2020-07-20 18:31:46] https://ae.multibankfx.com/<br/><br/>[2020-07-20 19:01:40] https://ae.multibankfx.com/<br/><br/>[2020-07-20 19:05:44] https://ae.multibankfx.com/about/milestones<br/><br/> <br/><br/> posted From: ae.multibankfx.com/article/milestone-multibank-group-establishes-new-branch-in-turkey?web=true' />
                    <div class='col-12 p-0'>
                        <label for='' class='mex-h3'>
                            Email US</label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none'
                            name='label_title' placeholder='' value='' />
                    </div>
                    <div class='d-none'>
                        <label for='' class='m-0 d-none'>
                        </label>
                        <div class='form-check form-check-inline'><input data-message='Account Type is Required.'
                                data-extra-message="Account type Invalid." class='   ' name='account_type' type='radio'
                                required value='1' checked />
                            <label class='  ' for=''>INDIVIDUAL</label>
                        </div>
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Full Name</label>
                        <input type='text' data-message='Full Name is Required.' data-extra-message="Full Name Invalid."
                            data-regex='' class=' form-control mb-0' name='name' placeholder='Full Name' required
                            value='' />
                    </div>
                    <div class='mex-form-item col-6 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Email</label>
                        <input type='email' data-message='Email is Required.' data-extra-message="Email is Invalid."
                            data-regex='' class='form-control mb-0' name='email' placeholder='Email' required
                            value='' />
                    </div>
                    <div class='mex-form-item col-12 p-1 d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <select data-message='Confirm Email is Required.' data-extra-message="Email Mismatched."
                            class='selection-country form-control  mb-0 select_with_country select_with_country'
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
                                OF THE</option>
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
                                ISLANDS</option>
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
                                REPUBLIC OF</option>
                            <option data-country_iso_code="KR" data-name='KR' value='KR'>KOREA, REPUBLIC OF</option>
                            <option data-country_iso_code="KW" data-name='KW' value='KW'>KUWAIT</option>
                            <option data-country_iso_code="KG" data-name='KG' value='KG'>KYRGYZSTAN</option>
                            <option data-country_iso_code="LA" data-name='LA' value='LA'>LAO PEOPLE'S DEMOCRATIC
                                REPUBLIC</option>
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
                                REPUBLIC OF</option>
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
                                GRENADINES</option>
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
                                SANDWICH ISLANDS</option>
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
                                ISLANDS</option>
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
                        </select><input type="hidden" name="country_code" value="" /></div>
                    <div class='d-none'>
                        <label for='' class='d-none'>
                        </label>
                        <input type='hidden' data-message='' data-extra-message="" data-regex='' class=' d-none'
                            name='form_key' placeholder='' value='email_us_form' />
                    </div>
                    <div class='mex-form-item col-12 p-1 pb-3'>
                        <label for='' class='d-none'>
                            Phone</label>
                        <input type='phone' data-ip_country_code='AE' data-message='Phone Number is required.'
                            data-extra-message="Phone Number Invalid" data-regex=''
                            class='input_with_phone form-control mb-0 input_with_phone' name='phone_display'
                            placeholder='' required value='' />
                        <input type='hidden' name='phone' />
                    </div>
                    <div class='mex-form-item col-6 col-md-6 p-1 sms-code-container'>
                        <input type='number' name='phone_sms_verif_code' class='sms_verif_code regCon oth_sp'
                            placeholder='SMS Code' required='required' number='true' autocomplete='off'
                            list='autocompleteOff' />
                    </div>
                    <div class='mex-form-item col-6 col-md-6 p-1 send-code-container'>
                        <button class='btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset '
                            id='button-send-callme_form' type='button' title='Send Code'>Send Code</button>
                    </div>
                    <div class='mex-form-item col-12 mb-3 p-1'>
                        <label for='order_message' class='d-block'>
                        </label>
                        <textarea data-message='Message is Required.' data-extra-message="Message is Invalid."
                            data-regex='' class=' form-control w-100 ta-message' name='message' id='order_message'
                            placeholder=''>Hello, I am interested in learning more about MultiBank products and services. Could you please contact me</textarea>
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit'
                        onsubmit="if (!window.__cfRLUnblockHandlers) return false; "
                        data-cf-modified-ca3d5dfb88638f75dc7cc600-="">SEND</button>
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
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="ca3d5dfb88638f75dc7cc600-text/javascript">
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
    <script src="/public_files/static_js/lang_data/aen.js" type="ca3d5dfb88638f75dc7cc600-text/javascript"></script>
    <script src="/public_files/static_js/jquery.dataTables.min.js"
        type="ca3d5dfb88638f75dc7cc600-text/javascript"></script>
    <script src="/public_files/static_js/lazysizes.min.js" type="ca3d5dfb88638f75dc7cc600-text/javascript"></script>
    <script src="/public_files/static_js/jquery.validate.min.js"
        type="ca3d5dfb88638f75dc7cc600-text/javascript"></script>
    <script src="/public_files/static_js/intlTelInput.min.js?version=20191128"
        type="ca3d5dfb88638f75dc7cc600-text/javascript"></script>
    <script src="/public_files/static_js/app.js?version=20200720"
        type="ca3d5dfb88638f75dc7cc600-text/javascript"></script>
    <script type="ca3d5dfb88638f75dc7cc600-text/javascript" async>
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
    <script type="ca3d5dfb88638f75dc7cc600-text/javascript">
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
    <script type="ca3d5dfb88638f75dc7cc600-text/javascript">
$(function() {
        $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
});
</script>
    <script type="ca3d5dfb88638f75dc7cc600-text/javascript">
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
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="ca3d5dfb88638f75dc7cc600-|49" defer=""></script>
</body>

</html>