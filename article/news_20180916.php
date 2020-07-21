<?php   
    include_once('./database/dbconnect.php');
    // $sql = mysqli_query($db, "SELECT * FROM table_company_news");
    // $result = $db->query($sql)
$page=0;
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;


    // echo isset($_GET['page']) ? $_GET['page'] : 1;
   
    function getNewsCount() {
        global $bDebug;
        

		$sQuery = "SELECT * FROM table_company_news";
		$objConnection = new Connection();
		$objConnection->setQuery($sQuery);
		$aList = $objConnection->executeListQuery();
		// if($bDebug) $this->printR($aList);
		
		return $aList;
    }
    $getNews='';
// $_PHP_SELF ="";
  

    $allnews= getNewsCount();
  

    $item="";
    $itemb="";
    $count =0;
    $classname1="";
    $classname2="";
    $start_from=0;

 $total_records  =count($allnews);
//  echo $total_records;

    // pagination
    $limit = 7;  
    // $page=0;
    // if (isset($_GET["page"])) {
    //     $page  = $_GET["page"]; 
    //    // echo $page;
    //     } 
    //     else{ 
    //     $page=1;

    //     }; 
    $page= 2;
    $start_from = ($page-1) * $limit;

      

    $total_pages = ceil($total_records / $limit);
    $pagNews=getNews($start_from,$limit);
    //pagination ends
    $itemc ="";
    function getNews($start,$limit) {
        global $bDebug;
        

		$sQuery = "SELECT * FROM table_company_news ORDER BY id  ASC LIMIT $start, $limit";
		$objConnection = new Connection();
		$objConnection->setQuery($sQuery);
		$aList = $objConnection->executeListQuery();
		// if($bDebug) $this->printR($aList);
		
		return $aList;
    }
    foreach ($pagNews as $list){
     
      //  $url=   urlencode('newsdetail.php?title='+$list->article_title+'&articlebody='+$list->body+'&article_date='+$list->article_date+'&feature_image='+$list->featured_image);


            if($list->classtype == "a"){
                 
                    $item .= " 
                 

            
                    <div class='col-xs-12 col-sm-12 col-md-5' style= '    height: fit-content;
                    '>
                    <a class='article-block' href='/article/multibank-fast-n-furious-trading-contest-announcement'>
                        <div class='news-con-det-l'>
                            <img src='/multibankfx".$list->post_image."'
                                alt='Winners Announced for the MultiBank Fast &amp; Furious Trading Contest'>
                            <p class='news-con-h4 news-con-blue article-big-title'>".$list->article_title."</p>
                            <p class='news-con-date news-con-date-m'>".$list->article_date."</p>
                            <p class='news-con-main'>The top 3 winners of MultiBank’s latest demo trading contest are out! The MultiBank
                                Fast &amp; Furious Trading Contest was a month-long demo trading contest that allowed traders around the
                                world to show off their trading skills on our demo MT4 platform. </p>
                        </div>
                    </a></div>";
                    
            }


           else if ($list->classtype == "b"){
               $classname1 ="col-xs-12 col-sm-12 col-md-7";
               $classname2="";
           
               
            
            $itemb.= " 
            
     
                   <li>

                    <a class='article-block' href='/article/multibank-fast-n-furious-trading-contest'>
                        <div class='news-con-det-rbox clearfix news-con-det-marnone'>
                            <img src='/multibankfx".$list->post_image."' 
                                alt='MultiBank Fast &amp; Furious Trading Contest Starts Jan 6, 2020! '>
                            <div class='news-con-det-rbox-r'>
                                <p class='news-con-h4 news-con-blue article-big-title'>'".$list->article_title."'
                                    </p>
                                <p class='news-con-date'>'".$list->article_date."'</p>
                            </div>
                        </div>
                    </a>
            
                </li>
             

 
                "
            ;
           }
           else if($list->classtype == "c"){
            $itemc.= " 
        
            <a class='article-block' href='/article/multibank-attends-macau-grand-prix-2019'>
                <div class='news-con-det-sec news-con-det-marnone'>
                    <img data-cfsrc='/public_files/blog/thumbnails/macau_gp_2019_thumbnail.jpg'
                        alt='MultiBank Group Attends Macau Grand Prix 2019'
                        src='/multibankfx".$list->post_image."'
                    <p class='news-con-h4 news-con-blue article-big-title'>".$list->article_title."</p>
                    <p class='news-con-date news-con-date-m'>".$list->article_date."</p>
                    <p class='news-con-main'>In partnership with BMW M Motorsport, MultiBank Group took part in the 2019 Macau
                        Grand Prix in support of BMW Team Schnitzer and returning champion Augusto Farfus in the grand finale of
                        FIA GT World Cup.</p>
                </div>
            </a>
            
            "
            ;
           }
      
    }



 
    
?>


<!DOCTYPE html>
<html lang='en'>

<?php include_from_root('website_template/head.php');?>
<body>
    <?php include_from_root('website_template/header_and_menu.php');?>

    <style>

.news-con-det-sec{
    margin-right: 2%;
    width:30.5%;
}
.news-con-blue {
    margin-top: 0px;
}
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
        .ul-company-news{
            width: 107%;
        }
        .ul-company-news > li{
          
          margin-bottom: 5%;
        }
        
    </style>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="main-container">
        <div class="news-content">
            <h1 class="mex-h1 news-martop">Company News</h1>
            <p class="text-center mex-sub-content">Keep up to date with MultiBank’s latest news</p>
            <div class="row" style="width: 97%; margin: 0 auto;">
                <div class="col-12 col-lg-9 mex-m-b-50">
                    <div class="news-con-det clearfix ">
                        <div class="row">
                            <?php echo $item ;?>
                            <div class="col-xs-12 col-sm-12 col-md-6">

                            <ul class="ul-company-news">
                                <?php echo $itemb; ?>
                             </ul>
                                         
                             </div>
                             
                           
                      </div>

                      <div class='news-con-det clearfix'>
                        <?php echo $itemc; ?>
                    
                     </div>
                </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="border-form mex-p-h-15 mb-4 mex-m-t-40 bg-white">
                    <form action="/form/contactus?" name="contact_us_form" class="multibank-form row mx-0 w-100 new" method="post" enctype="" id="contact_us_form" target="" autocomplete="on" novalidate="novalidate">
<input type="hidden" name="t_date" value="MjAyMC0wNy0yMCAyMDowMTo1NA==">
<input type="hidden" name="token" value="$2y$10$N3UxWqFB46hkTCyNjU8S3.qVQbitfaTszSPi7Cq7JZEj3F2ZQbA..">
<input type="hidden" name="source" value="[2020-07-10 17:57:26] https://www.multibankfx.com/thank-you?src=callback_individual<br/><br/>[2020-07-20 19:05:44] https://ae.multibankfx.com/about/milestones<br/><br/>[2020-07-20 19:06:04] https://ae.multibankfx.com/article/milestone-multibank-group-establishes-new-branch-in-turkey<br/><br/>[2020-07-20 19:12:34] https://ae.multibankfx.com/<br/><br/>[2020-07-20 20:01:54] https://ae.multibankfx.com/<br/><br/> <br/><br/> posted From: ae.multibankfx.com/about/company-news?web=true">
<div class="bg-000 text-center mex-m-x-n15 w-110">
<label for="" class="mex-h3 text-white py-2 mb-0">
CONTACT US FOR INQUIRIES</label>
<input type="hidden" data-message="" data-extra-message="" data-regex="" class=" form-control" name="label_title" placeholder="" value="">
</div><div class="mex-form-item col-6 p-1 cb-partnership font-16 text-center">

<div class="form-check form-check-inline"><input data-message="Account Type is Required." data-extra-message="Account type Invalid." class="   " name="account_type" type="radio" required="" value="1" checked="">
<label class="mb-0 ml-1" for="">INDIVIDUAL</label>
</div></div><div class="mex-form-item col-6 p-1 cb-partnership font-16 text-center">

<div class="form-check form-check-inline"><input data-message="Account Type is Required." data-extra-message="Account Type Invalid." class="   " name="account_type" type="radio" required="" value="2">
<label class="mb-0 ml-1" for="">PARTNERSHIP</label>
</div></div><div class="mex-form-item col-12 p-1">
<label for="" class="d-none">
Full Name<sup class="sup-size">*</sup></label>
<input type="text" data-message="Full Name is Required." data-extra-message="Full Name Invalid." data-regex="" class="form-control mb-0" name="name" placeholder="Full Name" required="" value="">
</div><div class="mex-form-item col-12 p-1">
<label for="" class="d-none">
Email<sup class="sup-size">*</sup></label>
<input type="email" data-message="Email is Required." data-extra-message="Email is Invalid." data-regex="" class="form-control mb-0" name="email" placeholder="Email" required="" value="">
</div><div class="mex-form-item col-12 p-1">
<label for="" class="d-none">
Confirm Email<sup class="sup-size">*</sup></label>
<input type="email" data-message="Confirm Email is Required." data-extra-message="Email Mismatched." data-regex="" class="form-control mb-0" name="confirm_email" placeholder="Confirm Email" required="" value="">
</div><div class="d-none">
<label for="" class="d-none">
Country<sup class="sup-size">*</sup></label>
<select data-message="Confirm Email is Required." data-extra-message="Email Mismatched." class="selection-country form-control &nbsp;mb-0 select_with_country select_with_country" name="country_name" required="">
            <option value="" selected="selected">Select Country</option>
            <option data-country_iso_code="AF" data-name="AF" value="AF">AFGHANISTAN</option>
            <option data-country_iso_code="AL" data-name="AL" value="AL">ALBANIA</option>
            <option data-country_iso_code="DZ" data-name="DZ" value="DZ">ALGERIA</option>
            <option data-country_iso_code="AS" data-name="AS" value="AS">AMERICAN SAMOA</option>
            <option data-country_iso_code="AD" data-name="AD" value="AD">ANDORRA</option>
            <option data-country_iso_code="AO" data-name="AO" value="AO">ANGOLA</option>
            <option data-country_iso_code="AI" data-name="AI" value="AI">ANGUILLA</option>
            <option data-country_iso_code="AQ" data-name="AQ" value="AQ">ANTARCTICA</option>
            <option data-country_iso_code="AG" data-name="AG" value="AG">ANTIGUA AND BARBUDA</option>
            <option data-country_iso_code="AR" data-name="AR" value="AR">ARGENTINA</option>
            <option data-country_iso_code="AM" data-name="AM" value="AM">ARMENIA</option>
            <option data-country_iso_code="AW" data-name="AW" value="AW">ARUBA</option>
            <option data-country_iso_code="AU" data-name="AU" value="AU">AUSTRALIA</option>
            <option data-country_iso_code="AT" data-name="AT" value="AT">AUSTRIA</option>
            <option data-country_iso_code="AZ" data-name="AZ" value="AZ">AZERBAIJAN</option>
            <option data-country_iso_code="BS" data-name="BS" value="BS">BAHAMAS</option>
            <option data-country_iso_code="BH" data-name="BH" value="BH">BAHRAIN</option>
            <option data-country_iso_code="BD" data-name="BD" value="BD">BANGLADESH</option>
            <option data-country_iso_code="BB" data-name="BB" value="BB">BARBADOS</option>
            <option data-country_iso_code="BY" data-name="BY" value="BY">BELARUS</option>
            <option data-country_iso_code="BE" data-name="BE" value="BE">BELGIUM</option>
            <option data-country_iso_code="BZ" data-name="BZ" value="BZ">BELIZE</option>
            <option data-country_iso_code="BJ" data-name="BJ" value="BJ">BENIN</option>
            <option data-country_iso_code="BM" data-name="BM" value="BM">BERMUDA</option>
            <option data-country_iso_code="BT" data-name="BT" value="BT">BHUTAN</option>
            <option data-country_iso_code="BO" data-name="BO" value="BO">BOLIVIA</option>
            <option data-country_iso_code="BA" data-name="BA" value="BA">BOSNIA AND HERZEGOVINA</option>
            <option data-country_iso_code="BW" data-name="BW" value="BW">BOTSWANA</option>
            <option data-country_iso_code="BV" data-name="BV" value="BV">BOUVET ISLAND</option>
            <option data-country_iso_code="BR" data-name="BR" value="BR">BRAZIL</option>
            <option data-country_iso_code="IO" data-name="IO" value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
            <option data-country_iso_code="BN" data-name="BN" value="BN">BRUNEI DARUSSALAM</option>
            <option data-country_iso_code="BG" data-name="BG" value="BG">BULGARIA</option>
            <option data-country_iso_code="BF" data-name="BF" value="BF">BURKINA FASO</option>
            <option data-country_iso_code="BI" data-name="BI" value="BI">BURUNDI</option>
            <option data-country_iso_code="KH" data-name="KH" value="KH">CAMBODIA</option>
            <option data-country_iso_code="CM" data-name="CM" value="CM">CAMEROON</option>
            <option data-country_iso_code="CA" data-name="CA" value="CA">CANADA</option>
            <option data-country_iso_code="CV" data-name="CV" value="CV">CAPE VERDE</option>
            <option data-country_iso_code="KY" data-name="KY" value="KY">CAYMAN ISLANDS</option>
            <option data-country_iso_code="CF" data-name="CF" value="CF">CENTRAL AFRICAN REPUBLIC</option>
            <option data-country_iso_code="TD" data-name="TD" value="TD">CHAD</option>
            <option data-country_iso_code="CL" data-name="CL" value="CL">CHILE</option>
            <option data-country_iso_code="CN" data-name="CN" value="CN">CHINA</option>
            <option data-country_iso_code="CX" data-name="CX" value="CX">CHRISTMAS ISLAND</option>
            <option data-country_iso_code="CC" data-name="CC" value="CC">COCOS (KEELING) ISLANDS</option>
            <option data-country_iso_code="CO" data-name="CO" value="CO">COLOMBIA</option>
            <option data-country_iso_code="KM" data-name="KM" value="KM">COMOROS</option>
            <option data-country_iso_code="CG" data-name="CG" value="CG">CONGO</option>
            <option data-country_iso_code="CD" data-name="CD" value="CD">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
            <option data-country_iso_code="CK" data-name="CK" value="CK">COOK ISLANDS</option>
            <option data-country_iso_code="CR" data-name="CR" value="CR">COSTA RICA</option>
            <option data-country_iso_code="CI" data-name="CI" value="CI">COTE D'IVOIRE</option>
            <option data-country_iso_code="HR" data-name="HR" value="HR">CROATIA</option>
            <option data-country_iso_code="CU" data-name="CU" value="CU">CUBA</option>
            <option data-country_iso_code="CY" data-name="CY" value="CY">CYPRUS</option>
            <option data-country_iso_code="CZ" data-name="CZ" value="CZ">CZECH REPUBLIC</option>
            <option data-country_iso_code="DK" data-name="DK" value="DK">DENMARK</option>
            <option data-country_iso_code="DJ" data-name="DJ" value="DJ">DJIBOUTI</option>
            <option data-country_iso_code="DM" data-name="DM" value="DM">DOMINICA</option>
            <option data-country_iso_code="DO" data-name="DO" value="DO">DOMINICAN REPUBLIC</option>
            <option data-country_iso_code="EC" data-name="EC" value="EC">ECUADOR</option>
            <option data-country_iso_code="EG" data-name="EG" value="EG">EGYPT</option>
            <option data-country_iso_code="SV" data-name="SV" value="SV">EL SALVADOR</option>
            <option data-country_iso_code="GQ" data-name="GQ" value="GQ">EQUATORIAL GUINEA</option>
            <option data-country_iso_code="ER" data-name="ER" value="ER">ERITREA</option>
            <option data-country_iso_code="EE" data-name="EE" value="EE">ESTONIA</option>
            <option data-country_iso_code="ET" data-name="ET" value="ET">ETHIOPIA</option>
            <option data-country_iso_code="FK" data-name="FK" value="FK">FALKLAND ISLANDS (MALVINAS)</option>
            <option data-country_iso_code="FO" data-name="FO" value="FO">FAROE ISLANDS</option>
            <option data-country_iso_code="FJ" data-name="FJ" value="FJ">FIJI</option>
            <option data-country_iso_code="FI" data-name="FI" value="FI">FINLAND</option>
            <option data-country_iso_code="FR" data-name="FR" value="FR">FRANCE</option>
            <option data-country_iso_code="GF" data-name="GF" value="GF">FRENCH GUIANA</option>
            <option data-country_iso_code="PF" data-name="PF" value="PF">FRENCH POLYNESIA</option>
            <option data-country_iso_code="TF" data-name="TF" value="TF">FRENCH SOUTHERN TERRITORIES</option>
            <option data-country_iso_code="GA" data-name="GA" value="GA">GABON</option>
            <option data-country_iso_code="GM" data-name="GM" value="GM">GAMBIA</option>
            <option data-country_iso_code="GE" data-name="GE" value="GE">GEORGIA</option>
            <option data-country_iso_code="DE" data-name="DE" value="DE">GERMANY</option>
            <option data-country_iso_code="GH" data-name="GH" value="GH">GHANA</option>
            <option data-country_iso_code="GI" data-name="GI" value="GI">GIBRALTAR</option>
            <option data-country_iso_code="GR" data-name="GR" value="GR">GREECE</option>
            <option data-country_iso_code="GL" data-name="GL" value="GL">GREENLAND</option>
            <option data-country_iso_code="GD" data-name="GD" value="GD">GRENADA</option>
            <option data-country_iso_code="GP" data-name="GP" value="GP">GUADELOUPE</option>
            <option data-country_iso_code="GU" data-name="GU" value="GU">GUAM</option>
            <option data-country_iso_code="GT" data-name="GT" value="GT">GUATEMALA</option>
            <option data-country_iso_code="GN" data-name="GN" value="GN">GUINEA</option>
            <option data-country_iso_code="GW" data-name="GW" value="GW">GUINEA-BISSAU</option>
            <option data-country_iso_code="GY" data-name="GY" value="GY">GUYANA</option>
            <option data-country_iso_code="HT" data-name="HT" value="HT">HAITI</option>
            <option data-country_iso_code="HM" data-name="HM" value="HM">HEARD ISLAND AND MCDONALD ISLANDS</option>
            <option data-country_iso_code="VA" data-name="VA" value="VA">HOLY SEE (VATICAN CITY STATE)</option>
            <option data-country_iso_code="HN" data-name="HN" value="HN">HONDURAS</option>
            <option data-country_iso_code="HK" data-name="HK" value="HK">HONG KONG</option>
            <option data-country_iso_code="HU" data-name="HU" value="HU">HUNGARY</option>
            <option data-country_iso_code="IS" data-name="IS" value="IS">ICELAND</option>
            <option data-country_iso_code="IN" data-name="IN" value="IN">INDIA</option>
            <option data-country_iso_code="ID" data-name="ID" value="ID">INDONESIA</option>
            <option data-country_iso_code="IR" data-name="IR" value="IR">IRAN, ISLAMIC REPUBLIC OF</option>
            <option data-country_iso_code="IQ" data-name="IQ" value="IQ">IRAQ</option>
            <option data-country_iso_code="IE" data-name="IE" value="IE">IRELAND</option>
            <option data-country_iso_code="IL" data-name="IL" value="IL">ISRAEL</option>
            <option data-country_iso_code="IT" data-name="IT" value="IT">ITALY</option>
            <option data-country_iso_code="JM" data-name="JM" value="JM">JAMAICA</option>
            <option data-country_iso_code="JP" data-name="JP" value="JP">JAPAN</option>
            <option data-country_iso_code="JO" data-name="JO" value="JO">JORDAN</option>
            <option data-country_iso_code="KZ" data-name="KZ" value="KZ">KAZAKHSTAN</option>
            <option data-country_iso_code="KE" data-name="KE" value="KE">KENYA</option>
            <option data-country_iso_code="KI" data-name="KI" value="KI">KIRIBATI</option>
            <option data-country_iso_code="KP" data-name="KP" value="KP">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
            <option data-country_iso_code="KR" data-name="KR" value="KR">KOREA, REPUBLIC OF</option>
            <option data-country_iso_code="KW" data-name="KW" value="KW">KUWAIT</option>
            <option data-country_iso_code="KG" data-name="KG" value="KG">KYRGYZSTAN</option>
            <option data-country_iso_code="LA" data-name="LA" value="LA">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
            <option data-country_iso_code="LV" data-name="LV" value="LV">LATVIA</option>
            <option data-country_iso_code="LB" data-name="LB" value="LB">LEBANON</option>
            <option data-country_iso_code="LS" data-name="LS" value="LS">LESOTHO</option>
            <option data-country_iso_code="LR" data-name="LR" value="LR">LIBERIA</option>
            <option data-country_iso_code="LY" data-name="LY" value="LY">LIBYAN ARAB JAMAHIRIYA</option>
            <option data-country_iso_code="LI" data-name="LI" value="LI">LIECHTENSTEIN</option>
            <option data-country_iso_code="LT" data-name="LT" value="LT">LITHUANIA</option>
            <option data-country_iso_code="LU" data-name="LU" value="LU">LUXEMBOURG</option>
            <option data-country_iso_code="MO" data-name="MO" value="MO">MACAO</option>
            <option data-country_iso_code="MK" data-name="MK" value="MK">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
            <option data-country_iso_code="MG" data-name="MG" value="MG">MADAGASCAR</option>
            <option data-country_iso_code="MW" data-name="MW" value="MW">MALAWI</option>
            <option data-country_iso_code="MY" data-name="MY" value="MY">MALAYSIA</option>
            <option data-country_iso_code="MV" data-name="MV" value="MV">MALDIVES</option>
            <option data-country_iso_code="ML" data-name="ML" value="ML">MALI</option>
            <option data-country_iso_code="MT" data-name="MT" value="MT">MALTA</option>
            <option data-country_iso_code="MH" data-name="MH" value="MH">MARSHALL ISLANDS</option>
            <option data-country_iso_code="MQ" data-name="MQ" value="MQ">MARTINIQUE</option>
            <option data-country_iso_code="MR" data-name="MR" value="MR">MAURITANIA</option>
            <option data-country_iso_code="MU" data-name="MU" value="MU">MAURITIUS</option>
            <option data-country_iso_code="YT" data-name="YT" value="YT">MAYOTTE</option>
            <option data-country_iso_code="MX" data-name="MX" value="MX">MEXICO</option>
            <option data-country_iso_code="FM" data-name="FM" value="FM">MICRONESIA, FEDERATED STATES OF</option>
            <option data-country_iso_code="MD" data-name="MD" value="MD">MOLDOVA, REPUBLIC OF</option>
            <option data-country_iso_code="MC" data-name="MC" value="MC">MONACO</option>
            <option data-country_iso_code="MN" data-name="MN" value="MN">MONGOLIA</option>
            <option data-country_iso_code="ME" data-name="ME" value="ME">MONTENEGRO</option>
            <option data-country_iso_code="MS" data-name="MS" value="MS">MONTSERRAT</option>
            <option data-country_iso_code="MA" data-name="MA" value="MA">MOROCCO</option>
            <option data-country_iso_code="MZ" data-name="MZ" value="MZ">MOZAMBIQUE</option>
            <option data-country_iso_code="MM" data-name="MM" value="MM">MYANMAR</option>
            <option data-country_iso_code="NA" data-name="NA" value="NA">NAMIBIA</option>
            <option data-country_iso_code="NR" data-name="NR" value="NR">NAURU</option>
            <option data-country_iso_code="NP" data-name="NP" value="NP">NEPAL</option>
            <option data-country_iso_code="NL" data-name="NL" value="NL">NETHERLANDS</option>
            <option data-country_iso_code="AN" data-name="AN" value="AN">NETHERLANDS ANTILLES</option>
            <option data-country_iso_code="NC" data-name="NC" value="NC">NEW CALEDONIA</option>
            <option data-country_iso_code="NZ" data-name="NZ" value="NZ">NEW ZEALAND</option>
            <option data-country_iso_code="NI" data-name="NI" value="NI">NICARAGUA</option>
            <option data-country_iso_code="NE" data-name="NE" value="NE">NIGER</option>
            <option data-country_iso_code="NG" data-name="NG" value="NG">NIGERIA</option>
            <option data-country_iso_code="NU" data-name="NU" value="NU">NIUE</option>
            <option data-country_iso_code="NF" data-name="NF" value="NF">NORFOLK ISLAND</option>
            <option data-country_iso_code="MP" data-name="MP" value="MP">NORTHERN MARIANA ISLANDS</option>
            <option data-country_iso_code="NO" data-name="NO" value="NO">NORWAY</option>
            <option data-country_iso_code="OM" data-name="OM" value="OM">OMAN</option>
            <option data-country_iso_code="PK" data-name="PK" value="PK">PAKISTAN</option>
            <option data-country_iso_code="PW" data-name="PW" value="PW">PALAU</option>
            <option data-country_iso_code="PS" data-name="PS" value="PS">PALESTINE, STATE OF</option>
            <option data-country_iso_code="PA" data-name="PA" value="PA">PANAMA</option>
            <option data-country_iso_code="PG" data-name="PG" value="PG">PAPUA NEW GUINEA</option>
            <option data-country_iso_code="PY" data-name="PY" value="PY">PARAGUAY</option>
            <option data-country_iso_code="PE" data-name="PE" value="PE">PERU</option>
            <option data-country_iso_code="PH" data-name="PH" value="PH">PHILIPPINES</option>
            <option data-country_iso_code="PN" data-name="PN" value="PN">PITCAIRN</option>
            <option data-country_iso_code="PL" data-name="PL" value="PL">POLAND</option>
            <option data-country_iso_code="PT" data-name="PT" value="PT">PORTUGAL</option>
            <option data-country_iso_code="PR" data-name="PR" value="PR">PUERTO RICO</option>
            <option data-country_iso_code="QA" data-name="QA" value="QA">QATAR</option>
            <option data-country_iso_code="RE" data-name="RE" value="RE">REUNION</option>
            <option data-country_iso_code="RO" data-name="RO" value="RO">ROMANIA</option>
            <option data-country_iso_code="RU" data-name="RU" value="RU">RUSSIAN FEDERATION</option>
            <option data-country_iso_code="RW" data-name="RW" value="RW">RWANDA</option>
            <option data-country_iso_code="SH" data-name="SH" value="SH">SAINT HELENA</option>
            <option data-country_iso_code="KN" data-name="KN" value="KN">SAINT KITTS AND NEVIS</option>
            <option data-country_iso_code="LC" data-name="LC" value="LC">SAINT LUCIA</option>
            <option data-country_iso_code="PM" data-name="PM" value="PM">SAINT PIERRE AND MIQUELON</option>
            <option data-country_iso_code="VC" data-name="VC" value="VC">SAINT VINCENT AND THE GRENADINES</option>
            <option data-country_iso_code="WS" data-name="WS" value="WS">SAMOA</option>
            <option data-country_iso_code="SM" data-name="SM" value="SM">SAN MARINO</option>
            <option data-country_iso_code="ST" data-name="ST" value="ST">SAO TOME AND PRINCIPE</option>
            <option data-country_iso_code="SA" data-name="SA" value="SA">SAUDI ARABIA</option>
            <option data-country_iso_code="SN" data-name="SN" value="SN">SENEGAL</option>
            <option data-country_iso_code="RS" data-name="RS" value="RS">SERBIA</option>
            <option data-country_iso_code="SC" data-name="SC" value="SC">SEYCHELLES</option>
            <option data-country_iso_code="SL" data-name="SL" value="SL">SIERRA LEONE</option>
            <option data-country_iso_code="SG" data-name="SG" value="SG">SINGAPORE</option>
            <option data-country_iso_code="SK" data-name="SK" value="SK">SLOVAKIA</option>
            <option data-country_iso_code="SI" data-name="SI" value="SI">SLOVENIA</option>
            <option data-country_iso_code="SB" data-name="SB" value="SB">SOLOMON ISLANDS</option>
            <option data-country_iso_code="SO" data-name="SO" value="SO">SOMALIA</option>
            <option data-country_iso_code="ZA" data-name="ZA" value="ZA">SOUTH AFRICA</option>
            <option data-country_iso_code="GS" data-name="GS" value="GS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
            <option data-country_iso_code="ES" data-name="ES" value="ES">SPAIN</option>
            <option data-country_iso_code="LK" data-name="LK" value="LK">SRI LANKA</option>
            <option data-country_iso_code="SD" data-name="SD" value="SD">SUDAN</option>
            <option data-country_iso_code="SR" data-name="SR" value="SR">SURINAME</option>
            <option data-country_iso_code="SJ" data-name="SJ" value="SJ">SVALBARD AND JAN MAYEN</option>
            <option data-country_iso_code="SZ" data-name="SZ" value="SZ">SWAZILAND</option>
            <option data-country_iso_code="SE" data-name="SE" value="SE">SWEDEN</option>
            <option data-country_iso_code="CH" data-name="CH" value="CH">SWITZERLAND</option>
            <option data-country_iso_code="SY" data-name="SY" value="SY">SYRIAN ARAB REPUBLIC</option>
            <option data-country_iso_code="TW" data-name="TW" value="TW">TAIWAN, PROVINCE OF CHINA</option>
            <option data-country_iso_code="TJ" data-name="TJ" value="TJ">TAJIKISTAN</option>
            <option data-country_iso_code="TZ" data-name="TZ" value="TZ">TANZANIA, UNITED REPUBLIC OF</option>
            <option data-country_iso_code="TH" data-name="TH" value="TH">THAILAND</option>
            <option data-country_iso_code="TL" data-name="TL" value="TL">TIMOR-LESTE</option>
            <option data-country_iso_code="TG" data-name="TG" value="TG">TOGO</option>
            <option data-country_iso_code="TK" data-name="TK" value="TK">TOKELAU</option>
            <option data-country_iso_code="TO" data-name="TO" value="TO">TONGA</option>
            <option data-country_iso_code="TT" data-name="TT" value="TT">TRINIDAD AND TOBAGO</option>
            <option data-country_iso_code="TN" data-name="TN" value="TN">TUNISIA</option>
            <option data-country_iso_code="TR" data-name="TR" value="TR">TURKEY</option>
            <option data-country_iso_code="TM" data-name="TM" value="TM">TURKMENISTAN</option>
            <option data-country_iso_code="TC" data-name="TC" value="TC">TURKS AND CAICOS ISLANDS</option>
            <option data-country_iso_code="TV" data-name="TV" value="TV">TUVALU</option>
            <option data-country_iso_code="UG" data-name="UG" value="UG">UGANDA</option>
            <option data-country_iso_code="UA" data-name="UA" value="UA">UKRAINE</option>
            <option data-country_iso_code="AE" data-name="AE" value="AE">UNITED ARAB EMIRATES</option>
            <option data-country_iso_code="GB" data-name="GB" value="GB">UNITED KINGDOM</option>
            <option data-country_iso_code="US" data-name="US" value="US">UNITED STATES</option>
            <option data-country_iso_code="UM" data-name="UM" value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
            <option data-country_iso_code="UY" data-name="UY" value="UY">URUGUAY</option>
            <option data-country_iso_code="UZ" data-name="UZ" value="UZ">UZBEKISTAN</option>
            <option data-country_iso_code="VU" data-name="VU" value="VU">VANUATU</option>
            <option data-country_iso_code="VE" data-name="VE" value="VE">VENEZUELA</option>
            <option data-country_iso_code="VN" data-name="VN" value="VN">VIET NAM</option>
            <option data-country_iso_code="VG" data-name="VG" value="VG">VIRGIN ISLANDS, BRITISH</option>
            <option data-country_iso_code="VI" data-name="VI" value="VI">VIRGIN ISLANDS, U.S.</option>
            <option data-country_iso_code="WF" data-name="WF" value="WF">WALLIS AND FUTUNA</option>
            <option data-country_iso_code="EH" data-name="EH" value="EH">WESTERN SAHARA</option>
            <option data-country_iso_code="YE" data-name="YE" value="YE">YEMEN</option>
            <option data-country_iso_code="ZM" data-name="ZM" value="ZM">ZAMBIA</option>
            <option data-country_iso_code="ZW" data-name="ZW" value="ZW">ZIMBABWE</option>
</select><input type="hidden" name="country_code" value="+971"></div><div class="mex-form-item col-12 p-1">
<label for="" class="d-none">
Phone<sup class="sup-size">*</sup></label>
<div class="iti iti--allow-dropdown"><div class="iti__flag-container"><div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United Arab Emirates (‫الإمارات العربية المتحدة‬‎): +971"><div class="iti__flag iti__ae"></div><div class="iti__arrow"></div></div><ul class="iti__country-list iti__hide" id="country-listbox" aria-expanded="false" role="listbox" aria-activedescendant="iti-item-ae"><li class="iti__country iti__standard" tabindex="-1" id="iti-item-af" role="option" data-dial-code="93" data-country-code="af"><div class="iti__flag-box"><div class="iti__flag iti__af"></div></div><span class="iti__country-name">Afghanistan (‫افغانستان‬‎)</span><span class="iti__dial-code">+93</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-al" role="option" data-dial-code="355" data-country-code="al"><div class="iti__flag-box"><div class="iti__flag iti__al"></div></div><span class="iti__country-name">Albania (Shqipëri)</span><span class="iti__dial-code">+355</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-dz" role="option" data-dial-code="213" data-country-code="dz"><div class="iti__flag-box"><div class="iti__flag iti__dz"></div></div><span class="iti__country-name">Algeria (‫الجزائر‬‎)</span><span class="iti__dial-code">+213</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-as" role="option" data-dial-code="1" data-country-code="as"><div class="iti__flag-box"><div class="iti__flag iti__as"></div></div><span class="iti__country-name">American Samoa</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ad" role="option" data-dial-code="376" data-country-code="ad"><div class="iti__flag-box"><div class="iti__flag iti__ad"></div></div><span class="iti__country-name">Andorra</span><span class="iti__dial-code">+376</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ao" role="option" data-dial-code="244" data-country-code="ao"><div class="iti__flag-box"><div class="iti__flag iti__ao"></div></div><span class="iti__country-name">Angola</span><span class="iti__dial-code">+244</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ai" role="option" data-dial-code="1" data-country-code="ai"><div class="iti__flag-box"><div class="iti__flag iti__ai"></div></div><span class="iti__country-name">Anguilla</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ag" role="option" data-dial-code="1" data-country-code="ag"><div class="iti__flag-box"><div class="iti__flag iti__ag"></div></div><span class="iti__country-name">Antigua and Barbuda</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ar" role="option" data-dial-code="54" data-country-code="ar"><div class="iti__flag-box"><div class="iti__flag iti__ar"></div></div><span class="iti__country-name">Argentina</span><span class="iti__dial-code">+54</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-am" role="option" data-dial-code="374" data-country-code="am"><div class="iti__flag-box"><div class="iti__flag iti__am"></div></div><span class="iti__country-name">Armenia (Հայաստան)</span><span class="iti__dial-code">+374</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-aw" role="option" data-dial-code="297" data-country-code="aw"><div class="iti__flag-box"><div class="iti__flag iti__aw"></div></div><span class="iti__country-name">Aruba</span><span class="iti__dial-code">+297</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-au" role="option" data-dial-code="61" data-country-code="au"><div class="iti__flag-box"><div class="iti__flag iti__au"></div></div><span class="iti__country-name">Australia</span><span class="iti__dial-code">+61</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-at" role="option" data-dial-code="43" data-country-code="at"><div class="iti__flag-box"><div class="iti__flag iti__at"></div></div><span class="iti__country-name">Austria (Österreich)</span><span class="iti__dial-code">+43</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-az" role="option" data-dial-code="994" data-country-code="az"><div class="iti__flag-box"><div class="iti__flag iti__az"></div></div><span class="iti__country-name">Azerbaijan (Azərbaycan)</span><span class="iti__dial-code">+994</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bs" role="option" data-dial-code="1" data-country-code="bs"><div class="iti__flag-box"><div class="iti__flag iti__bs"></div></div><span class="iti__country-name">Bahamas</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bh" role="option" data-dial-code="973" data-country-code="bh"><div class="iti__flag-box"><div class="iti__flag iti__bh"></div></div><span class="iti__country-name">Bahrain (‫البحرين‬‎)</span><span class="iti__dial-code">+973</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bd" role="option" data-dial-code="880" data-country-code="bd"><div class="iti__flag-box"><div class="iti__flag iti__bd"></div></div><span class="iti__country-name">Bangladesh (বাংলাদেশ)</span><span class="iti__dial-code">+880</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bb" role="option" data-dial-code="1" data-country-code="bb"><div class="iti__flag-box"><div class="iti__flag iti__bb"></div></div><span class="iti__country-name">Barbados</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-by" role="option" data-dial-code="375" data-country-code="by"><div class="iti__flag-box"><div class="iti__flag iti__by"></div></div><span class="iti__country-name">Belarus (Беларусь)</span><span class="iti__dial-code">+375</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-be" role="option" data-dial-code="32" data-country-code="be"><div class="iti__flag-box"><div class="iti__flag iti__be"></div></div><span class="iti__country-name">Belgium (België)</span><span class="iti__dial-code">+32</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bz" role="option" data-dial-code="501" data-country-code="bz"><div class="iti__flag-box"><div class="iti__flag iti__bz"></div></div><span class="iti__country-name">Belize</span><span class="iti__dial-code">+501</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bj" role="option" data-dial-code="229" data-country-code="bj"><div class="iti__flag-box"><div class="iti__flag iti__bj"></div></div><span class="iti__country-name">Benin (Bénin)</span><span class="iti__dial-code">+229</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bm" role="option" data-dial-code="1" data-country-code="bm"><div class="iti__flag-box"><div class="iti__flag iti__bm"></div></div><span class="iti__country-name">Bermuda</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bt" role="option" data-dial-code="975" data-country-code="bt"><div class="iti__flag-box"><div class="iti__flag iti__bt"></div></div><span class="iti__country-name">Bhutan (འབྲུག)</span><span class="iti__dial-code">+975</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bo" role="option" data-dial-code="591" data-country-code="bo"><div class="iti__flag-box"><div class="iti__flag iti__bo"></div></div><span class="iti__country-name">Bolivia</span><span class="iti__dial-code">+591</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ba" role="option" data-dial-code="387" data-country-code="ba"><div class="iti__flag-box"><div class="iti__flag iti__ba"></div></div><span class="iti__country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="iti__dial-code">+387</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bw" role="option" data-dial-code="267" data-country-code="bw"><div class="iti__flag-box"><div class="iti__flag iti__bw"></div></div><span class="iti__country-name">Botswana</span><span class="iti__dial-code">+267</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-br" role="option" data-dial-code="55" data-country-code="br"><div class="iti__flag-box"><div class="iti__flag iti__br"></div></div><span class="iti__country-name">Brazil (Brasil)</span><span class="iti__dial-code">+55</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-io" role="option" data-dial-code="246" data-country-code="io"><div class="iti__flag-box"><div class="iti__flag iti__io"></div></div><span class="iti__country-name">British Indian Ocean Territory</span><span class="iti__dial-code">+246</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-vg" role="option" data-dial-code="1" data-country-code="vg"><div class="iti__flag-box"><div class="iti__flag iti__vg"></div></div><span class="iti__country-name">British Virgin Islands</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bn" role="option" data-dial-code="673" data-country-code="bn"><div class="iti__flag-box"><div class="iti__flag iti__bn"></div></div><span class="iti__country-name">Brunei</span><span class="iti__dial-code">+673</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bg" role="option" data-dial-code="359" data-country-code="bg"><div class="iti__flag-box"><div class="iti__flag iti__bg"></div></div><span class="iti__country-name">Bulgaria (България)</span><span class="iti__dial-code">+359</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bf" role="option" data-dial-code="226" data-country-code="bf"><div class="iti__flag-box"><div class="iti__flag iti__bf"></div></div><span class="iti__country-name">Burkina Faso</span><span class="iti__dial-code">+226</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bi" role="option" data-dial-code="257" data-country-code="bi"><div class="iti__flag-box"><div class="iti__flag iti__bi"></div></div><span class="iti__country-name">Burundi (Uburundi)</span><span class="iti__dial-code">+257</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kh" role="option" data-dial-code="855" data-country-code="kh"><div class="iti__flag-box"><div class="iti__flag iti__kh"></div></div><span class="iti__country-name">Cambodia (កម្ពុជា)</span><span class="iti__dial-code">+855</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cm" role="option" data-dial-code="237" data-country-code="cm"><div class="iti__flag-box"><div class="iti__flag iti__cm"></div></div><span class="iti__country-name">Cameroon (Cameroun)</span><span class="iti__dial-code">+237</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ca" role="option" data-dial-code="1" data-country-code="ca"><div class="iti__flag-box"><div class="iti__flag iti__ca"></div></div><span class="iti__country-name">Canada</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cv" role="option" data-dial-code="238" data-country-code="cv"><div class="iti__flag-box"><div class="iti__flag iti__cv"></div></div><span class="iti__country-name">Cape Verde (Kabu Verdi)</span><span class="iti__dial-code">+238</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bq" role="option" data-dial-code="599" data-country-code="bq"><div class="iti__flag-box"><div class="iti__flag iti__bq"></div></div><span class="iti__country-name">Caribbean Netherlands</span><span class="iti__dial-code">+599</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ky" role="option" data-dial-code="1" data-country-code="ky"><div class="iti__flag-box"><div class="iti__flag iti__ky"></div></div><span class="iti__country-name">Cayman Islands</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cf" role="option" data-dial-code="236" data-country-code="cf"><div class="iti__flag-box"><div class="iti__flag iti__cf"></div></div><span class="iti__country-name">Central African Republic (République centrafricaine)</span><span class="iti__dial-code">+236</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-td" role="option" data-dial-code="235" data-country-code="td"><div class="iti__flag-box"><div class="iti__flag iti__td"></div></div><span class="iti__country-name">Chad (Tchad)</span><span class="iti__dial-code">+235</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cl" role="option" data-dial-code="56" data-country-code="cl"><div class="iti__flag-box"><div class="iti__flag iti__cl"></div></div><span class="iti__country-name">Chile</span><span class="iti__dial-code">+56</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cn" role="option" data-dial-code="86" data-country-code="cn"><div class="iti__flag-box"><div class="iti__flag iti__cn"></div></div><span class="iti__country-name">China (中国)</span><span class="iti__dial-code">+86</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cx" role="option" data-dial-code="61" data-country-code="cx"><div class="iti__flag-box"><div class="iti__flag iti__cx"></div></div><span class="iti__country-name">Christmas Island</span><span class="iti__dial-code">+61</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cc" role="option" data-dial-code="61" data-country-code="cc"><div class="iti__flag-box"><div class="iti__flag iti__cc"></div></div><span class="iti__country-name">Cocos (Keeling) Islands</span><span class="iti__dial-code">+61</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-co" role="option" data-dial-code="57" data-country-code="co"><div class="iti__flag-box"><div class="iti__flag iti__co"></div></div><span class="iti__country-name">Colombia</span><span class="iti__dial-code">+57</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-km" role="option" data-dial-code="269" data-country-code="km"><div class="iti__flag-box"><div class="iti__flag iti__km"></div></div><span class="iti__country-name">Comoros (‫جزر القمر‬‎)</span><span class="iti__dial-code">+269</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cd" role="option" data-dial-code="243" data-country-code="cd"><div class="iti__flag-box"><div class="iti__flag iti__cd"></div></div><span class="iti__country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="iti__dial-code">+243</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cg" role="option" data-dial-code="242" data-country-code="cg"><div class="iti__flag-box"><div class="iti__flag iti__cg"></div></div><span class="iti__country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="iti__dial-code">+242</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ck" role="option" data-dial-code="682" data-country-code="ck"><div class="iti__flag-box"><div class="iti__flag iti__ck"></div></div><span class="iti__country-name">Cook Islands</span><span class="iti__dial-code">+682</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cr" role="option" data-dial-code="506" data-country-code="cr"><div class="iti__flag-box"><div class="iti__flag iti__cr"></div></div><span class="iti__country-name">Costa Rica</span><span class="iti__dial-code">+506</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ci" role="option" data-dial-code="225" data-country-code="ci"><div class="iti__flag-box"><div class="iti__flag iti__ci"></div></div><span class="iti__country-name">Côte d’Ivoire</span><span class="iti__dial-code">+225</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-hr" role="option" data-dial-code="385" data-country-code="hr"><div class="iti__flag-box"><div class="iti__flag iti__hr"></div></div><span class="iti__country-name">Croatia (Hrvatska)</span><span class="iti__dial-code">+385</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cu" role="option" data-dial-code="53" data-country-code="cu"><div class="iti__flag-box"><div class="iti__flag iti__cu"></div></div><span class="iti__country-name">Cuba</span><span class="iti__dial-code">+53</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cw" role="option" data-dial-code="599" data-country-code="cw"><div class="iti__flag-box"><div class="iti__flag iti__cw"></div></div><span class="iti__country-name">Curaçao</span><span class="iti__dial-code">+599</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cy" role="option" data-dial-code="357" data-country-code="cy"><div class="iti__flag-box"><div class="iti__flag iti__cy"></div></div><span class="iti__country-name">Cyprus (Κύπρος)</span><span class="iti__dial-code">+357</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-cz" role="option" data-dial-code="420" data-country-code="cz"><div class="iti__flag-box"><div class="iti__flag iti__cz"></div></div><span class="iti__country-name">Czech Republic (Česká republika)</span><span class="iti__dial-code">+420</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-dk" role="option" data-dial-code="45" data-country-code="dk"><div class="iti__flag-box"><div class="iti__flag iti__dk"></div></div><span class="iti__country-name">Denmark (Danmark)</span><span class="iti__dial-code">+45</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-dj" role="option" data-dial-code="253" data-country-code="dj"><div class="iti__flag-box"><div class="iti__flag iti__dj"></div></div><span class="iti__country-name">Djibouti</span><span class="iti__dial-code">+253</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-dm" role="option" data-dial-code="1" data-country-code="dm"><div class="iti__flag-box"><div class="iti__flag iti__dm"></div></div><span class="iti__country-name">Dominica</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-do" role="option" data-dial-code="1" data-country-code="do"><div class="iti__flag-box"><div class="iti__flag iti__do"></div></div><span class="iti__country-name">Dominican Republic (República Dominicana)</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ec" role="option" data-dial-code="593" data-country-code="ec"><div class="iti__flag-box"><div class="iti__flag iti__ec"></div></div><span class="iti__country-name">Ecuador</span><span class="iti__dial-code">+593</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-eg" role="option" data-dial-code="20" data-country-code="eg"><div class="iti__flag-box"><div class="iti__flag iti__eg"></div></div><span class="iti__country-name">Egypt (‫مصر‬‎)</span><span class="iti__dial-code">+20</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sv" role="option" data-dial-code="503" data-country-code="sv"><div class="iti__flag-box"><div class="iti__flag iti__sv"></div></div><span class="iti__country-name">El Salvador</span><span class="iti__dial-code">+503</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gq" role="option" data-dial-code="240" data-country-code="gq"><div class="iti__flag-box"><div class="iti__flag iti__gq"></div></div><span class="iti__country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="iti__dial-code">+240</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-er" role="option" data-dial-code="291" data-country-code="er"><div class="iti__flag-box"><div class="iti__flag iti__er"></div></div><span class="iti__country-name">Eritrea</span><span class="iti__dial-code">+291</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ee" role="option" data-dial-code="372" data-country-code="ee"><div class="iti__flag-box"><div class="iti__flag iti__ee"></div></div><span class="iti__country-name">Estonia (Eesti)</span><span class="iti__dial-code">+372</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-et" role="option" data-dial-code="251" data-country-code="et"><div class="iti__flag-box"><div class="iti__flag iti__et"></div></div><span class="iti__country-name">Ethiopia</span><span class="iti__dial-code">+251</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-fk" role="option" data-dial-code="500" data-country-code="fk"><div class="iti__flag-box"><div class="iti__flag iti__fk"></div></div><span class="iti__country-name">Falkland Islands (Islas Malvinas)</span><span class="iti__dial-code">+500</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-fo" role="option" data-dial-code="298" data-country-code="fo"><div class="iti__flag-box"><div class="iti__flag iti__fo"></div></div><span class="iti__country-name">Faroe Islands (Føroyar)</span><span class="iti__dial-code">+298</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-fj" role="option" data-dial-code="679" data-country-code="fj"><div class="iti__flag-box"><div class="iti__flag iti__fj"></div></div><span class="iti__country-name">Fiji</span><span class="iti__dial-code">+679</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-fi" role="option" data-dial-code="358" data-country-code="fi"><div class="iti__flag-box"><div class="iti__flag iti__fi"></div></div><span class="iti__country-name">Finland (Suomi)</span><span class="iti__dial-code">+358</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-fr" role="option" data-dial-code="33" data-country-code="fr"><div class="iti__flag-box"><div class="iti__flag iti__fr"></div></div><span class="iti__country-name">France</span><span class="iti__dial-code">+33</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gf" role="option" data-dial-code="594" data-country-code="gf"><div class="iti__flag-box"><div class="iti__flag iti__gf"></div></div><span class="iti__country-name">French Guiana (Guyane française)</span><span class="iti__dial-code">+594</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pf" role="option" data-dial-code="689" data-country-code="pf"><div class="iti__flag-box"><div class="iti__flag iti__pf"></div></div><span class="iti__country-name">French Polynesia (Polynésie française)</span><span class="iti__dial-code">+689</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ga" role="option" data-dial-code="241" data-country-code="ga"><div class="iti__flag-box"><div class="iti__flag iti__ga"></div></div><span class="iti__country-name">Gabon</span><span class="iti__dial-code">+241</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gm" role="option" data-dial-code="220" data-country-code="gm"><div class="iti__flag-box"><div class="iti__flag iti__gm"></div></div><span class="iti__country-name">Gambia</span><span class="iti__dial-code">+220</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ge" role="option" data-dial-code="995" data-country-code="ge"><div class="iti__flag-box"><div class="iti__flag iti__ge"></div></div><span class="iti__country-name">Georgia (საქართველო)</span><span class="iti__dial-code">+995</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-de" role="option" data-dial-code="49" data-country-code="de"><div class="iti__flag-box"><div class="iti__flag iti__de"></div></div><span class="iti__country-name">Germany (Deutschland)</span><span class="iti__dial-code">+49</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gh" role="option" data-dial-code="233" data-country-code="gh"><div class="iti__flag-box"><div class="iti__flag iti__gh"></div></div><span class="iti__country-name">Ghana (Gaana)</span><span class="iti__dial-code">+233</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gi" role="option" data-dial-code="350" data-country-code="gi"><div class="iti__flag-box"><div class="iti__flag iti__gi"></div></div><span class="iti__country-name">Gibraltar</span><span class="iti__dial-code">+350</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gr" role="option" data-dial-code="30" data-country-code="gr"><div class="iti__flag-box"><div class="iti__flag iti__gr"></div></div><span class="iti__country-name">Greece (Ελλάδα)</span><span class="iti__dial-code">+30</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gl" role="option" data-dial-code="299" data-country-code="gl"><div class="iti__flag-box"><div class="iti__flag iti__gl"></div></div><span class="iti__country-name">Greenland (Kalaallit Nunaat)</span><span class="iti__dial-code">+299</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gd" role="option" data-dial-code="1" data-country-code="gd"><div class="iti__flag-box"><div class="iti__flag iti__gd"></div></div><span class="iti__country-name">Grenada</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gp" role="option" data-dial-code="590" data-country-code="gp"><div class="iti__flag-box"><div class="iti__flag iti__gp"></div></div><span class="iti__country-name">Guadeloupe</span><span class="iti__dial-code">+590</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gu" role="option" data-dial-code="1" data-country-code="gu"><div class="iti__flag-box"><div class="iti__flag iti__gu"></div></div><span class="iti__country-name">Guam</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gt" role="option" data-dial-code="502" data-country-code="gt"><div class="iti__flag-box"><div class="iti__flag iti__gt"></div></div><span class="iti__country-name">Guatemala</span><span class="iti__dial-code">+502</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gg" role="option" data-dial-code="44" data-country-code="gg"><div class="iti__flag-box"><div class="iti__flag iti__gg"></div></div><span class="iti__country-name">Guernsey</span><span class="iti__dial-code">+44</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gn" role="option" data-dial-code="224" data-country-code="gn"><div class="iti__flag-box"><div class="iti__flag iti__gn"></div></div><span class="iti__country-name">Guinea (Guinée)</span><span class="iti__dial-code">+224</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gw" role="option" data-dial-code="245" data-country-code="gw"><div class="iti__flag-box"><div class="iti__flag iti__gw"></div></div><span class="iti__country-name">Guinea-Bissau (Guiné Bissau)</span><span class="iti__dial-code">+245</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gy" role="option" data-dial-code="592" data-country-code="gy"><div class="iti__flag-box"><div class="iti__flag iti__gy"></div></div><span class="iti__country-name">Guyana</span><span class="iti__dial-code">+592</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ht" role="option" data-dial-code="509" data-country-code="ht"><div class="iti__flag-box"><div class="iti__flag iti__ht"></div></div><span class="iti__country-name">Haiti</span><span class="iti__dial-code">+509</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-hn" role="option" data-dial-code="504" data-country-code="hn"><div class="iti__flag-box"><div class="iti__flag iti__hn"></div></div><span class="iti__country-name">Honduras</span><span class="iti__dial-code">+504</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-hk" role="option" data-dial-code="852" data-country-code="hk"><div class="iti__flag-box"><div class="iti__flag iti__hk"></div></div><span class="iti__country-name">Hong Kong (香港)</span><span class="iti__dial-code">+852</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-hu" role="option" data-dial-code="36" data-country-code="hu"><div class="iti__flag-box"><div class="iti__flag iti__hu"></div></div><span class="iti__country-name">Hungary (Magyarország)</span><span class="iti__dial-code">+36</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-is" role="option" data-dial-code="354" data-country-code="is"><div class="iti__flag-box"><div class="iti__flag iti__is"></div></div><span class="iti__country-name">Iceland (Ísland)</span><span class="iti__dial-code">+354</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-in" role="option" data-dial-code="91" data-country-code="in"><div class="iti__flag-box"><div class="iti__flag iti__in"></div></div><span class="iti__country-name">India (भारत)</span><span class="iti__dial-code">+91</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-id" role="option" data-dial-code="62" data-country-code="id"><div class="iti__flag-box"><div class="iti__flag iti__id"></div></div><span class="iti__country-name">Indonesia</span><span class="iti__dial-code">+62</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ir" role="option" data-dial-code="98" data-country-code="ir"><div class="iti__flag-box"><div class="iti__flag iti__ir"></div></div><span class="iti__country-name">Iran (‫ایران‬‎)</span><span class="iti__dial-code">+98</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-iq" role="option" data-dial-code="964" data-country-code="iq"><div class="iti__flag-box"><div class="iti__flag iti__iq"></div></div><span class="iti__country-name">Iraq (‫العراق‬‎)</span><span class="iti__dial-code">+964</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ie" role="option" data-dial-code="353" data-country-code="ie"><div class="iti__flag-box"><div class="iti__flag iti__ie"></div></div><span class="iti__country-name">Ireland</span><span class="iti__dial-code">+353</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-im" role="option" data-dial-code="44" data-country-code="im"><div class="iti__flag-box"><div class="iti__flag iti__im"></div></div><span class="iti__country-name">Isle of Man</span><span class="iti__dial-code">+44</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-il" role="option" data-dial-code="972" data-country-code="il"><div class="iti__flag-box"><div class="iti__flag iti__il"></div></div><span class="iti__country-name">Israel (‫ישראל‬‎)</span><span class="iti__dial-code">+972</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-it" role="option" data-dial-code="39" data-country-code="it"><div class="iti__flag-box"><div class="iti__flag iti__it"></div></div><span class="iti__country-name">Italy (Italia)</span><span class="iti__dial-code">+39</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-jm" role="option" data-dial-code="1" data-country-code="jm"><div class="iti__flag-box"><div class="iti__flag iti__jm"></div></div><span class="iti__country-name">Jamaica</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-jp" role="option" data-dial-code="81" data-country-code="jp"><div class="iti__flag-box"><div class="iti__flag iti__jp"></div></div><span class="iti__country-name">Japan (日本)</span><span class="iti__dial-code">+81</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-je" role="option" data-dial-code="44" data-country-code="je"><div class="iti__flag-box"><div class="iti__flag iti__je"></div></div><span class="iti__country-name">Jersey</span><span class="iti__dial-code">+44</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-jo" role="option" data-dial-code="962" data-country-code="jo"><div class="iti__flag-box"><div class="iti__flag iti__jo"></div></div><span class="iti__country-name">Jordan (‫الأردن‬‎)</span><span class="iti__dial-code">+962</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kz" role="option" data-dial-code="7" data-country-code="kz"><div class="iti__flag-box"><div class="iti__flag iti__kz"></div></div><span class="iti__country-name">Kazakhstan (Казахстан)</span><span class="iti__dial-code">+7</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ke" role="option" data-dial-code="254" data-country-code="ke"><div class="iti__flag-box"><div class="iti__flag iti__ke"></div></div><span class="iti__country-name">Kenya</span><span class="iti__dial-code">+254</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ki" role="option" data-dial-code="686" data-country-code="ki"><div class="iti__flag-box"><div class="iti__flag iti__ki"></div></div><span class="iti__country-name">Kiribati</span><span class="iti__dial-code">+686</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-xk" role="option" data-dial-code="383" data-country-code="xk"><div class="iti__flag-box"><div class="iti__flag iti__xk"></div></div><span class="iti__country-name">Kosovo</span><span class="iti__dial-code">+383</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kw" role="option" data-dial-code="965" data-country-code="kw"><div class="iti__flag-box"><div class="iti__flag iti__kw"></div></div><span class="iti__country-name">Kuwait (‫الكويت‬‎)</span><span class="iti__dial-code">+965</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kg" role="option" data-dial-code="996" data-country-code="kg"><div class="iti__flag-box"><div class="iti__flag iti__kg"></div></div><span class="iti__country-name">Kyrgyzstan (Кыргызстан)</span><span class="iti__dial-code">+996</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-la" role="option" data-dial-code="856" data-country-code="la"><div class="iti__flag-box"><div class="iti__flag iti__la"></div></div><span class="iti__country-name">Laos (ລາວ)</span><span class="iti__dial-code">+856</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lv" role="option" data-dial-code="371" data-country-code="lv"><div class="iti__flag-box"><div class="iti__flag iti__lv"></div></div><span class="iti__country-name">Latvia (Latvija)</span><span class="iti__dial-code">+371</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lb" role="option" data-dial-code="961" data-country-code="lb"><div class="iti__flag-box"><div class="iti__flag iti__lb"></div></div><span class="iti__country-name">Lebanon (‫لبنان‬‎)</span><span class="iti__dial-code">+961</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ls" role="option" data-dial-code="266" data-country-code="ls"><div class="iti__flag-box"><div class="iti__flag iti__ls"></div></div><span class="iti__country-name">Lesotho</span><span class="iti__dial-code">+266</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lr" role="option" data-dial-code="231" data-country-code="lr"><div class="iti__flag-box"><div class="iti__flag iti__lr"></div></div><span class="iti__country-name">Liberia</span><span class="iti__dial-code">+231</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ly" role="option" data-dial-code="218" data-country-code="ly"><div class="iti__flag-box"><div class="iti__flag iti__ly"></div></div><span class="iti__country-name">Libya (‫ليبيا‬‎)</span><span class="iti__dial-code">+218</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-li" role="option" data-dial-code="423" data-country-code="li"><div class="iti__flag-box"><div class="iti__flag iti__li"></div></div><span class="iti__country-name">Liechtenstein</span><span class="iti__dial-code">+423</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lt" role="option" data-dial-code="370" data-country-code="lt"><div class="iti__flag-box"><div class="iti__flag iti__lt"></div></div><span class="iti__country-name">Lithuania (Lietuva)</span><span class="iti__dial-code">+370</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lu" role="option" data-dial-code="352" data-country-code="lu"><div class="iti__flag-box"><div class="iti__flag iti__lu"></div></div><span class="iti__country-name">Luxembourg</span><span class="iti__dial-code">+352</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mo" role="option" data-dial-code="853" data-country-code="mo"><div class="iti__flag-box"><div class="iti__flag iti__mo"></div></div><span class="iti__country-name">Macau (澳門)</span><span class="iti__dial-code">+853</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mk" role="option" data-dial-code="389" data-country-code="mk"><div class="iti__flag-box"><div class="iti__flag iti__mk"></div></div><span class="iti__country-name">Macedonia (FYROM) (Македонија)</span><span class="iti__dial-code">+389</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mg" role="option" data-dial-code="261" data-country-code="mg"><div class="iti__flag-box"><div class="iti__flag iti__mg"></div></div><span class="iti__country-name">Madagascar (Madagasikara)</span><span class="iti__dial-code">+261</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mw" role="option" data-dial-code="265" data-country-code="mw"><div class="iti__flag-box"><div class="iti__flag iti__mw"></div></div><span class="iti__country-name">Malawi</span><span class="iti__dial-code">+265</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-my" role="option" data-dial-code="60" data-country-code="my"><div class="iti__flag-box"><div class="iti__flag iti__my"></div></div><span class="iti__country-name">Malaysia</span><span class="iti__dial-code">+60</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mv" role="option" data-dial-code="960" data-country-code="mv"><div class="iti__flag-box"><div class="iti__flag iti__mv"></div></div><span class="iti__country-name">Maldives</span><span class="iti__dial-code">+960</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ml" role="option" data-dial-code="223" data-country-code="ml"><div class="iti__flag-box"><div class="iti__flag iti__ml"></div></div><span class="iti__country-name">Mali</span><span class="iti__dial-code">+223</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mt" role="option" data-dial-code="356" data-country-code="mt"><div class="iti__flag-box"><div class="iti__flag iti__mt"></div></div><span class="iti__country-name">Malta</span><span class="iti__dial-code">+356</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mh" role="option" data-dial-code="692" data-country-code="mh"><div class="iti__flag-box"><div class="iti__flag iti__mh"></div></div><span class="iti__country-name">Marshall Islands</span><span class="iti__dial-code">+692</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mq" role="option" data-dial-code="596" data-country-code="mq"><div class="iti__flag-box"><div class="iti__flag iti__mq"></div></div><span class="iti__country-name">Martinique</span><span class="iti__dial-code">+596</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mr" role="option" data-dial-code="222" data-country-code="mr"><div class="iti__flag-box"><div class="iti__flag iti__mr"></div></div><span class="iti__country-name">Mauritania (‫موريتانيا‬‎)</span><span class="iti__dial-code">+222</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mu" role="option" data-dial-code="230" data-country-code="mu"><div class="iti__flag-box"><div class="iti__flag iti__mu"></div></div><span class="iti__country-name">Mauritius (Moris)</span><span class="iti__dial-code">+230</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-yt" role="option" data-dial-code="262" data-country-code="yt"><div class="iti__flag-box"><div class="iti__flag iti__yt"></div></div><span class="iti__country-name">Mayotte</span><span class="iti__dial-code">+262</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mx" role="option" data-dial-code="52" data-country-code="mx"><div class="iti__flag-box"><div class="iti__flag iti__mx"></div></div><span class="iti__country-name">Mexico (México)</span><span class="iti__dial-code">+52</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-fm" role="option" data-dial-code="691" data-country-code="fm"><div class="iti__flag-box"><div class="iti__flag iti__fm"></div></div><span class="iti__country-name">Micronesia</span><span class="iti__dial-code">+691</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-md" role="option" data-dial-code="373" data-country-code="md"><div class="iti__flag-box"><div class="iti__flag iti__md"></div></div><span class="iti__country-name">Moldova (Republica Moldova)</span><span class="iti__dial-code">+373</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mc" role="option" data-dial-code="377" data-country-code="mc"><div class="iti__flag-box"><div class="iti__flag iti__mc"></div></div><span class="iti__country-name">Monaco</span><span class="iti__dial-code">+377</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mn" role="option" data-dial-code="976" data-country-code="mn"><div class="iti__flag-box"><div class="iti__flag iti__mn"></div></div><span class="iti__country-name">Mongolia (Монгол)</span><span class="iti__dial-code">+976</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-me" role="option" data-dial-code="382" data-country-code="me"><div class="iti__flag-box"><div class="iti__flag iti__me"></div></div><span class="iti__country-name">Montenegro (Crna Gora)</span><span class="iti__dial-code">+382</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ms" role="option" data-dial-code="1" data-country-code="ms"><div class="iti__flag-box"><div class="iti__flag iti__ms"></div></div><span class="iti__country-name">Montserrat</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ma" role="option" data-dial-code="212" data-country-code="ma"><div class="iti__flag-box"><div class="iti__flag iti__ma"></div></div><span class="iti__country-name">Morocco (‫المغرب‬‎)</span><span class="iti__dial-code">+212</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mz" role="option" data-dial-code="258" data-country-code="mz"><div class="iti__flag-box"><div class="iti__flag iti__mz"></div></div><span class="iti__country-name">Mozambique (Moçambique)</span><span class="iti__dial-code">+258</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mm" role="option" data-dial-code="95" data-country-code="mm"><div class="iti__flag-box"><div class="iti__flag iti__mm"></div></div><span class="iti__country-name">Myanmar (Burma) (မြန်မာ)</span><span class="iti__dial-code">+95</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-na" role="option" data-dial-code="264" data-country-code="na"><div class="iti__flag-box"><div class="iti__flag iti__na"></div></div><span class="iti__country-name">Namibia (Namibië)</span><span class="iti__dial-code">+264</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-nr" role="option" data-dial-code="674" data-country-code="nr"><div class="iti__flag-box"><div class="iti__flag iti__nr"></div></div><span class="iti__country-name">Nauru</span><span class="iti__dial-code">+674</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-np" role="option" data-dial-code="977" data-country-code="np"><div class="iti__flag-box"><div class="iti__flag iti__np"></div></div><span class="iti__country-name">Nepal (नेपाल)</span><span class="iti__dial-code">+977</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-nl" role="option" data-dial-code="31" data-country-code="nl"><div class="iti__flag-box"><div class="iti__flag iti__nl"></div></div><span class="iti__country-name">Netherlands (Nederland)</span><span class="iti__dial-code">+31</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-nc" role="option" data-dial-code="687" data-country-code="nc"><div class="iti__flag-box"><div class="iti__flag iti__nc"></div></div><span class="iti__country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="iti__dial-code">+687</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-nz" role="option" data-dial-code="64" data-country-code="nz"><div class="iti__flag-box"><div class="iti__flag iti__nz"></div></div><span class="iti__country-name">New Zealand</span><span class="iti__dial-code">+64</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ni" role="option" data-dial-code="505" data-country-code="ni"><div class="iti__flag-box"><div class="iti__flag iti__ni"></div></div><span class="iti__country-name">Nicaragua</span><span class="iti__dial-code">+505</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ne" role="option" data-dial-code="227" data-country-code="ne"><div class="iti__flag-box"><div class="iti__flag iti__ne"></div></div><span class="iti__country-name">Niger (Nijar)</span><span class="iti__dial-code">+227</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ng" role="option" data-dial-code="234" data-country-code="ng"><div class="iti__flag-box"><div class="iti__flag iti__ng"></div></div><span class="iti__country-name">Nigeria</span><span class="iti__dial-code">+234</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-nu" role="option" data-dial-code="683" data-country-code="nu"><div class="iti__flag-box"><div class="iti__flag iti__nu"></div></div><span class="iti__country-name">Niue</span><span class="iti__dial-code">+683</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-nf" role="option" data-dial-code="672" data-country-code="nf"><div class="iti__flag-box"><div class="iti__flag iti__nf"></div></div><span class="iti__country-name">Norfolk Island</span><span class="iti__dial-code">+672</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kp" role="option" data-dial-code="850" data-country-code="kp"><div class="iti__flag-box"><div class="iti__flag iti__kp"></div></div><span class="iti__country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="iti__dial-code">+850</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mp" role="option" data-dial-code="1" data-country-code="mp"><div class="iti__flag-box"><div class="iti__flag iti__mp"></div></div><span class="iti__country-name">Northern Mariana Islands</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-no" role="option" data-dial-code="47" data-country-code="no"><div class="iti__flag-box"><div class="iti__flag iti__no"></div></div><span class="iti__country-name">Norway (Norge)</span><span class="iti__dial-code">+47</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-om" role="option" data-dial-code="968" data-country-code="om"><div class="iti__flag-box"><div class="iti__flag iti__om"></div></div><span class="iti__country-name">Oman (‫عُمان‬‎)</span><span class="iti__dial-code">+968</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pk" role="option" data-dial-code="92" data-country-code="pk"><div class="iti__flag-box"><div class="iti__flag iti__pk"></div></div><span class="iti__country-name">Pakistan (‫پاکستان‬‎)</span><span class="iti__dial-code">+92</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pw" role="option" data-dial-code="680" data-country-code="pw"><div class="iti__flag-box"><div class="iti__flag iti__pw"></div></div><span class="iti__country-name">Palau</span><span class="iti__dial-code">+680</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ps" role="option" data-dial-code="970" data-country-code="ps"><div class="iti__flag-box"><div class="iti__flag iti__ps"></div></div><span class="iti__country-name">Palestine (‫فلسطين‬‎)</span><span class="iti__dial-code">+970</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pa" role="option" data-dial-code="507" data-country-code="pa"><div class="iti__flag-box"><div class="iti__flag iti__pa"></div></div><span class="iti__country-name">Panama (Panamá)</span><span class="iti__dial-code">+507</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pg" role="option" data-dial-code="675" data-country-code="pg"><div class="iti__flag-box"><div class="iti__flag iti__pg"></div></div><span class="iti__country-name">Papua New Guinea</span><span class="iti__dial-code">+675</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-py" role="option" data-dial-code="595" data-country-code="py"><div class="iti__flag-box"><div class="iti__flag iti__py"></div></div><span class="iti__country-name">Paraguay</span><span class="iti__dial-code">+595</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pe" role="option" data-dial-code="51" data-country-code="pe"><div class="iti__flag-box"><div class="iti__flag iti__pe"></div></div><span class="iti__country-name">Peru (Perú)</span><span class="iti__dial-code">+51</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ph" role="option" data-dial-code="63" data-country-code="ph"><div class="iti__flag-box"><div class="iti__flag iti__ph"></div></div><span class="iti__country-name">Philippines</span><span class="iti__dial-code">+63</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pl" role="option" data-dial-code="48" data-country-code="pl"><div class="iti__flag-box"><div class="iti__flag iti__pl"></div></div><span class="iti__country-name">Poland (Polska)</span><span class="iti__dial-code">+48</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pt" role="option" data-dial-code="351" data-country-code="pt"><div class="iti__flag-box"><div class="iti__flag iti__pt"></div></div><span class="iti__country-name">Portugal</span><span class="iti__dial-code">+351</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pr" role="option" data-dial-code="1" data-country-code="pr"><div class="iti__flag-box"><div class="iti__flag iti__pr"></div></div><span class="iti__country-name">Puerto Rico</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-qa" role="option" data-dial-code="974" data-country-code="qa"><div class="iti__flag-box"><div class="iti__flag iti__qa"></div></div><span class="iti__country-name">Qatar (‫قطر‬‎)</span><span class="iti__dial-code">+974</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-re" role="option" data-dial-code="262" data-country-code="re"><div class="iti__flag-box"><div class="iti__flag iti__re"></div></div><span class="iti__country-name">Réunion (La Réunion)</span><span class="iti__dial-code">+262</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ro" role="option" data-dial-code="40" data-country-code="ro"><div class="iti__flag-box"><div class="iti__flag iti__ro"></div></div><span class="iti__country-name">Romania (România)</span><span class="iti__dial-code">+40</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ru" role="option" data-dial-code="7" data-country-code="ru"><div class="iti__flag-box"><div class="iti__flag iti__ru"></div></div><span class="iti__country-name">Russia (Россия)</span><span class="iti__dial-code">+7</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-rw" role="option" data-dial-code="250" data-country-code="rw"><div class="iti__flag-box"><div class="iti__flag iti__rw"></div></div><span class="iti__country-name">Rwanda</span><span class="iti__dial-code">+250</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-bl" role="option" data-dial-code="590" data-country-code="bl"><div class="iti__flag-box"><div class="iti__flag iti__bl"></div></div><span class="iti__country-name">Saint Barthélemy</span><span class="iti__dial-code">+590</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sh" role="option" data-dial-code="290" data-country-code="sh"><div class="iti__flag-box"><div class="iti__flag iti__sh"></div></div><span class="iti__country-name">Saint Helena</span><span class="iti__dial-code">+290</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kn" role="option" data-dial-code="1" data-country-code="kn"><div class="iti__flag-box"><div class="iti__flag iti__kn"></div></div><span class="iti__country-name">Saint Kitts and Nevis</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lc" role="option" data-dial-code="1" data-country-code="lc"><div class="iti__flag-box"><div class="iti__flag iti__lc"></div></div><span class="iti__country-name">Saint Lucia</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-mf" role="option" data-dial-code="590" data-country-code="mf"><div class="iti__flag-box"><div class="iti__flag iti__mf"></div></div><span class="iti__country-name">Saint Martin (Saint-Martin (partie française))</span><span class="iti__dial-code">+590</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-pm" role="option" data-dial-code="508" data-country-code="pm"><div class="iti__flag-box"><div class="iti__flag iti__pm"></div></div><span class="iti__country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="iti__dial-code">+508</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-vc" role="option" data-dial-code="1" data-country-code="vc"><div class="iti__flag-box"><div class="iti__flag iti__vc"></div></div><span class="iti__country-name">Saint Vincent and the Grenadines</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ws" role="option" data-dial-code="685" data-country-code="ws"><div class="iti__flag-box"><div class="iti__flag iti__ws"></div></div><span class="iti__country-name">Samoa</span><span class="iti__dial-code">+685</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sm" role="option" data-dial-code="378" data-country-code="sm"><div class="iti__flag-box"><div class="iti__flag iti__sm"></div></div><span class="iti__country-name">San Marino</span><span class="iti__dial-code">+378</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-st" role="option" data-dial-code="239" data-country-code="st"><div class="iti__flag-box"><div class="iti__flag iti__st"></div></div><span class="iti__country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="iti__dial-code">+239</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sa" role="option" data-dial-code="966" data-country-code="sa"><div class="iti__flag-box"><div class="iti__flag iti__sa"></div></div><span class="iti__country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span><span class="iti__dial-code">+966</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sn" role="option" data-dial-code="221" data-country-code="sn"><div class="iti__flag-box"><div class="iti__flag iti__sn"></div></div><span class="iti__country-name">Senegal (Sénégal)</span><span class="iti__dial-code">+221</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-rs" role="option" data-dial-code="381" data-country-code="rs"><div class="iti__flag-box"><div class="iti__flag iti__rs"></div></div><span class="iti__country-name">Serbia (Србија)</span><span class="iti__dial-code">+381</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sc" role="option" data-dial-code="248" data-country-code="sc"><div class="iti__flag-box"><div class="iti__flag iti__sc"></div></div><span class="iti__country-name">Seychelles</span><span class="iti__dial-code">+248</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sl" role="option" data-dial-code="232" data-country-code="sl"><div class="iti__flag-box"><div class="iti__flag iti__sl"></div></div><span class="iti__country-name">Sierra Leone</span><span class="iti__dial-code">+232</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sg" role="option" data-dial-code="65" data-country-code="sg"><div class="iti__flag-box"><div class="iti__flag iti__sg"></div></div><span class="iti__country-name">Singapore</span><span class="iti__dial-code">+65</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sx" role="option" data-dial-code="1" data-country-code="sx"><div class="iti__flag-box"><div class="iti__flag iti__sx"></div></div><span class="iti__country-name">Sint Maarten</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sk" role="option" data-dial-code="421" data-country-code="sk"><div class="iti__flag-box"><div class="iti__flag iti__sk"></div></div><span class="iti__country-name">Slovakia (Slovensko)</span><span class="iti__dial-code">+421</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-si" role="option" data-dial-code="386" data-country-code="si"><div class="iti__flag-box"><div class="iti__flag iti__si"></div></div><span class="iti__country-name">Slovenia (Slovenija)</span><span class="iti__dial-code">+386</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sb" role="option" data-dial-code="677" data-country-code="sb"><div class="iti__flag-box"><div class="iti__flag iti__sb"></div></div><span class="iti__country-name">Solomon Islands</span><span class="iti__dial-code">+677</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-so" role="option" data-dial-code="252" data-country-code="so"><div class="iti__flag-box"><div class="iti__flag iti__so"></div></div><span class="iti__country-name">Somalia (Soomaaliya)</span><span class="iti__dial-code">+252</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-za" role="option" data-dial-code="27" data-country-code="za"><div class="iti__flag-box"><div class="iti__flag iti__za"></div></div><span class="iti__country-name">South Africa</span><span class="iti__dial-code">+27</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-kr" role="option" data-dial-code="82" data-country-code="kr"><div class="iti__flag-box"><div class="iti__flag iti__kr"></div></div><span class="iti__country-name">South Korea (대한민국)</span><span class="iti__dial-code">+82</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ss" role="option" data-dial-code="211" data-country-code="ss"><div class="iti__flag-box"><div class="iti__flag iti__ss"></div></div><span class="iti__country-name">South Sudan (‫جنوب السودان‬‎)</span><span class="iti__dial-code">+211</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-es" role="option" data-dial-code="34" data-country-code="es"><div class="iti__flag-box"><div class="iti__flag iti__es"></div></div><span class="iti__country-name">Spain (España)</span><span class="iti__dial-code">+34</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-lk" role="option" data-dial-code="94" data-country-code="lk"><div class="iti__flag-box"><div class="iti__flag iti__lk"></div></div><span class="iti__country-name">Sri Lanka (ශ්‍රී ලංකාව)</span><span class="iti__dial-code">+94</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sd" role="option" data-dial-code="249" data-country-code="sd"><div class="iti__flag-box"><div class="iti__flag iti__sd"></div></div><span class="iti__country-name">Sudan (‫السودان‬‎)</span><span class="iti__dial-code">+249</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sr" role="option" data-dial-code="597" data-country-code="sr"><div class="iti__flag-box"><div class="iti__flag iti__sr"></div></div><span class="iti__country-name">Suriname</span><span class="iti__dial-code">+597</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sj" role="option" data-dial-code="47" data-country-code="sj"><div class="iti__flag-box"><div class="iti__flag iti__sj"></div></div><span class="iti__country-name">Svalbard and Jan Mayen</span><span class="iti__dial-code">+47</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sz" role="option" data-dial-code="268" data-country-code="sz"><div class="iti__flag-box"><div class="iti__flag iti__sz"></div></div><span class="iti__country-name">Swaziland</span><span class="iti__dial-code">+268</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-se" role="option" data-dial-code="46" data-country-code="se"><div class="iti__flag-box"><div class="iti__flag iti__se"></div></div><span class="iti__country-name">Sweden (Sverige)</span><span class="iti__dial-code">+46</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ch" role="option" data-dial-code="41" data-country-code="ch"><div class="iti__flag-box"><div class="iti__flag iti__ch"></div></div><span class="iti__country-name">Switzerland (Schweiz)</span><span class="iti__dial-code">+41</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-sy" role="option" data-dial-code="963" data-country-code="sy"><div class="iti__flag-box"><div class="iti__flag iti__sy"></div></div><span class="iti__country-name">Syria (‫سوريا‬‎)</span><span class="iti__dial-code">+963</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tw" role="option" data-dial-code="886" data-country-code="tw"><div class="iti__flag-box"><div class="iti__flag iti__tw"></div></div><span class="iti__country-name">Taiwan (台灣)</span><span class="iti__dial-code">+886</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tj" role="option" data-dial-code="992" data-country-code="tj"><div class="iti__flag-box"><div class="iti__flag iti__tj"></div></div><span class="iti__country-name">Tajikistan</span><span class="iti__dial-code">+992</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tz" role="option" data-dial-code="255" data-country-code="tz"><div class="iti__flag-box"><div class="iti__flag iti__tz"></div></div><span class="iti__country-name">Tanzania</span><span class="iti__dial-code">+255</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-th" role="option" data-dial-code="66" data-country-code="th"><div class="iti__flag-box"><div class="iti__flag iti__th"></div></div><span class="iti__country-name">Thailand (ไทย)</span><span class="iti__dial-code">+66</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tl" role="option" data-dial-code="670" data-country-code="tl"><div class="iti__flag-box"><div class="iti__flag iti__tl"></div></div><span class="iti__country-name">Timor-Leste</span><span class="iti__dial-code">+670</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tg" role="option" data-dial-code="228" data-country-code="tg"><div class="iti__flag-box"><div class="iti__flag iti__tg"></div></div><span class="iti__country-name">Togo</span><span class="iti__dial-code">+228</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tk" role="option" data-dial-code="690" data-country-code="tk"><div class="iti__flag-box"><div class="iti__flag iti__tk"></div></div><span class="iti__country-name">Tokelau</span><span class="iti__dial-code">+690</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-to" role="option" data-dial-code="676" data-country-code="to"><div class="iti__flag-box"><div class="iti__flag iti__to"></div></div><span class="iti__country-name">Tonga</span><span class="iti__dial-code">+676</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tt" role="option" data-dial-code="1" data-country-code="tt"><div class="iti__flag-box"><div class="iti__flag iti__tt"></div></div><span class="iti__country-name">Trinidad and Tobago</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tn" role="option" data-dial-code="216" data-country-code="tn"><div class="iti__flag-box"><div class="iti__flag iti__tn"></div></div><span class="iti__country-name">Tunisia (‫تونس‬‎)</span><span class="iti__dial-code">+216</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tr" role="option" data-dial-code="90" data-country-code="tr"><div class="iti__flag-box"><div class="iti__flag iti__tr"></div></div><span class="iti__country-name">Turkey (Türkiye)</span><span class="iti__dial-code">+90</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tm" role="option" data-dial-code="993" data-country-code="tm"><div class="iti__flag-box"><div class="iti__flag iti__tm"></div></div><span class="iti__country-name">Turkmenistan</span><span class="iti__dial-code">+993</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tc" role="option" data-dial-code="1" data-country-code="tc"><div class="iti__flag-box"><div class="iti__flag iti__tc"></div></div><span class="iti__country-name">Turks and Caicos Islands</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-tv" role="option" data-dial-code="688" data-country-code="tv"><div class="iti__flag-box"><div class="iti__flag iti__tv"></div></div><span class="iti__country-name">Tuvalu</span><span class="iti__dial-code">+688</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-vi" role="option" data-dial-code="1" data-country-code="vi"><div class="iti__flag-box"><div class="iti__flag iti__vi"></div></div><span class="iti__country-name">U.S. Virgin Islands</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ug" role="option" data-dial-code="256" data-country-code="ug"><div class="iti__flag-box"><div class="iti__flag iti__ug"></div></div><span class="iti__country-name">Uganda</span><span class="iti__dial-code">+256</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ua" role="option" data-dial-code="380" data-country-code="ua"><div class="iti__flag-box"><div class="iti__flag iti__ua"></div></div><span class="iti__country-name">Ukraine (Україна)</span><span class="iti__dial-code">+380</span></li><li class="iti__country iti__standard iti__active" tabindex="-1" id="iti-item-ae" role="option" data-dial-code="971" data-country-code="ae" aria-selected="true"><div class="iti__flag-box"><div class="iti__flag iti__ae"></div></div><span class="iti__country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span><span class="iti__dial-code">+971</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-gb" role="option" data-dial-code="44" data-country-code="gb"><div class="iti__flag-box"><div class="iti__flag iti__gb"></div></div><span class="iti__country-name">United Kingdom</span><span class="iti__dial-code">+44</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-us" role="option" data-dial-code="1" data-country-code="us"><div class="iti__flag-box"><div class="iti__flag iti__us"></div></div><span class="iti__country-name">United States</span><span class="iti__dial-code">+1</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-uy" role="option" data-dial-code="598" data-country-code="uy"><div class="iti__flag-box"><div class="iti__flag iti__uy"></div></div><span class="iti__country-name">Uruguay</span><span class="iti__dial-code">+598</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-uz" role="option" data-dial-code="998" data-country-code="uz"><div class="iti__flag-box"><div class="iti__flag iti__uz"></div></div><span class="iti__country-name">Uzbekistan (Oʻzbekiston)</span><span class="iti__dial-code">+998</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-vu" role="option" data-dial-code="678" data-country-code="vu"><div class="iti__flag-box"><div class="iti__flag iti__vu"></div></div><span class="iti__country-name">Vanuatu</span><span class="iti__dial-code">+678</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-va" role="option" data-dial-code="39" data-country-code="va"><div class="iti__flag-box"><div class="iti__flag iti__va"></div></div><span class="iti__country-name">Vatican City (Città del Vaticano)</span><span class="iti__dial-code">+39</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ve" role="option" data-dial-code="58" data-country-code="ve"><div class="iti__flag-box"><div class="iti__flag iti__ve"></div></div><span class="iti__country-name">Venezuela</span><span class="iti__dial-code">+58</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-vn" role="option" data-dial-code="84" data-country-code="vn"><div class="iti__flag-box"><div class="iti__flag iti__vn"></div></div><span class="iti__country-name">Vietnam (Việt Nam)</span><span class="iti__dial-code">+84</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-wf" role="option" data-dial-code="681" data-country-code="wf"><div class="iti__flag-box"><div class="iti__flag iti__wf"></div></div><span class="iti__country-name">Wallis and Futuna (Wallis-et-Futuna)</span><span class="iti__dial-code">+681</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-eh" role="option" data-dial-code="212" data-country-code="eh"><div class="iti__flag-box"><div class="iti__flag iti__eh"></div></div><span class="iti__country-name">Western Sahara (‫الصحراء الغربية‬‎)</span><span class="iti__dial-code">+212</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ye" role="option" data-dial-code="967" data-country-code="ye"><div class="iti__flag-box"><div class="iti__flag iti__ye"></div></div><span class="iti__country-name">Yemen (‫اليمن‬‎)</span><span class="iti__dial-code">+967</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-zm" role="option" data-dial-code="260" data-country-code="zm"><div class="iti__flag-box"><div class="iti__flag iti__zm"></div></div><span class="iti__country-name">Zambia</span><span class="iti__dial-code">+260</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-zw" role="option" data-dial-code="263" data-country-code="zw"><div class="iti__flag-box"><div class="iti__flag iti__zw"></div></div><span class="iti__country-name">Zimbabwe</span><span class="iti__dial-code">+263</span></li><li class="iti__country iti__standard" tabindex="-1" id="iti-item-ax" role="option" data-dial-code="358" data-country-code="ax"><div class="iti__flag-box"><div class="iti__flag iti__ax"></div></div><span class="iti__country-name">Åland Islands</span><span class="iti__dial-code">+358</span></li></ul></div><input type="phone" data-ip_country_code="AE" data-message="Phone Number is required." data-extra-message="Phone Number Invalid" data-regex="" class="input_with_phone form-control mb-0 input_with_phone" name="phone_display" placeholder="+971 50 123 4567" required="" value="" autocomplete="off" data-intl-tel-input-id="0"></div>
<input type="hidden" name="phone">
</div><div class="mex-form-item col-6 col-md-6 p-1 sms-code-container">
<input type="number" name="phone_sms_verif_code" class="sms_verif_code regCon oth_sp" placeholder="SMS Code" required="required" number="true" autocomplete="off" list="autocompleteOff">
</div>
<div class="mex-form-item col-6 col-md-6 p-1 send-code-container">
<button class="btn btn-mex w-100 h-40p send-verification-code-btn min-w-unset " id="button-send-callme_form" type="button" title="Send Code">Send Code</button>
</div><button type="submit" class="btn-contact mx-1 mt-2 mb-0" onsubmit="if (!window.__cfRLUnblockHandlers) return false; ">SUBMIT</button>
</form>
                        <hr class="mx-1">
                        <div class="px-1 contact-form-button-container">
                            <a href="/multibankfx/account/live-account.php" class="d-flex btn btn-mex-red mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe91d;</span>
                                <div class="btn-vr"></div>
                                <?php translate('OPEN LIVE ACCOUNT'); ?>
                            </a>
                            <a href="/multibankfx/demo_competition.php" class="d-flex btn btn-mex-blue mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe918;</span>
                                <div class="btn-vr"></div>
                                <?php translate('OPEN DEMO ACCOUNT'); ?>
                            </a>
                            <a href="/multibankfx/partnership/introducing-brokers.html#introducing-brokers-form" class="d-flex btn btn-mex-gray mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe920;</span>
                                <div class="btn-vr"></div>
                                <?php translate('IB REGISTRATION'); ?>
                            </a>
                            <a href="/multibankfx/account/account-funding.php" class="d-flex btn btn-mex mex-m-b-5 col-md-12 col-xs-12 align-items-center">
                                <span>&#xe921;</span>
                                <div class="btn-vr"></div>
                                <?php translate('FUND YOUR ACCOUNT'); ?>
                            </a>
                            <div class="px-1 font-10" style="padding:0px;">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label label-1 " for="terms_conditions"><?php translate('By submitting this
                                        form, you agree to accept the'); ?> <a href="/multibankfx/terms-conditions.php" target="_blank" class="text-22A0C4" style="padding:0 !important;"><?php translate('Terms & Conditions'); ?></a>, <a href="/multibankfx/privacy-policy.php" target="_blank" class="text-22A0C4" style="padding:0 !important;"><?php translate('Privacy Policy'); ?></a>, <?php translate('and'); ?> <a href="/multibankfx/cookie-policy.php" target="_blank" class="text-22A0C4" style="padding:0 !important;"><?php translate('Cookie Policy'); ?></a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-9 col-lg-offset-1 mex-m-b-50 text-center">
                <nav aria-label="Page navigation example">

                <?php     $pagLink = "<ul class='pagination justify-content-center'>";  
                                for ($i=1; $i<=$total_pages; $i++) {
                                            $pagLink .= "<li class='page-item'><a class='page-link' href='http://localhost/multibankfx/article/?page=".$i."'>".$i."</a></li>";	
                                }
                                echo $pagLink . "</ul>";   ?>
                    <!-- <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="/multibankfx/about/company-news%3Fpaged=0.php" tabindex="-1">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="/multibankfx/about/company-news%3Fpaged=1.php">1</a></li>
                        <li class="page-item "><a class="page-link" href="/multibankfx/about/company-news%3Fpaged=2.php">2</a>
                        </li>
                        <li class="page-item "><a class="page-link" href="/multibankfx/about/company-news%3Fpaged=3.php">3</a>
                        </li>
                        <li class="page-item "><a class="page-link" href="/multibankfx/about/company-news%3Fpaged=2.php">Next</a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <script data-cfasync="false" src="/multibankfx/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
            const numNewsPage = 7;
        </script>
        <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
            $(function() {
                var icons = [
                    'ic_why_multibank',
                    'ic_our_regulations',
                    'ic_security_of_funds',
                    'ic_our_milestones',
                    'ic_our_products',
                    'ic_live_chat_support',
                    'ic_compare_our_trading_platforms',
                    'ic_download_mt4',
                    'ic_bonus_programs_for_ibs',
                    'ic_Bonus_Programs_for_Individual_Clients',
                    'ic_trading_tools',
                    'ic_partnership_programs'
                ];
                whereToGoItem.injectIcons('.target-icon', icons);
            });
        </script>
        <section class="p0 choose-next-background subject-box-bg-light">
            <div class="container mex-m-b-80">
                <div class="col-md-12">
                    <div class="mex-h1 text-1e32a3 text-center uppercase mex-p-t-80 mex-p-b-40 mex-translatable" data-es="ELIGE DÓNDE IR A CONTINUACIÓN" data-de="WOHIN ALS NÄCHSTES" data-ph="" data-vn="CHỌN NƠI ĐẾN KẾ TIẾP" data-id="" data-pt="" data-ru="" data-it="SCEGLI DOVE ANDARE" data-mys="SILA PILIH UNTUK TERUSKAN" data-fr="Où allez?" data-th="เลือกว่าจะไปที่ไหน" data-ae="أختر أين تريد الذهاب"><?php translate('Choose Where to go next'); ?></div>
                    <div class="icon-next-list">
                        <ul class="bg-white target-icon">
                            <li><a href="/multibankfx/mfx/v1/about/regulations.php"><span class="ico-ic_our_regulations">&nbsp;</span></a>
                                <div class="mex-content mex-clamp-3"><?php translate('Our Regulations'); ?></div>
                            </li>
                            <li><a href="/multibankfx/products.php"><span class="ico-ic_our_products"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/products.php"><?php translate('Our Products'); ?></a></div>
                                <a href="/multibankfx/products.php"> </a>
                            </li>
                            <li><a href="/multibankfx/tools.php"><span class="ico-ic_trading_tools"></span> </a>
                                <div class="mex-content mex-clamp-3"><?php translate('Trading Tools'); ?></div>
                                <a href="/multibankfx/tools.php"> </a>
                            </li>
                            <li><a href="/multibankfx/about/why-multibank-group.php"><span class="ico-ic_why_multibank"></span>
                                </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/about/why-multibank-group.php"><?php translate('Why Multibank'); ?></a></div>
                                <a href="/multibankfx/about/why-multibank-group.php"> </a>
                            </li>
                            <li><a href="/multibankfx/mfx/v1/about/regulations.php"><span class="ico-ic_our_regulations">&nbsp;</span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/mfx/v1/about/regulations.php"><?php translate('Our Regulations'); ?></a></div>
                                <a href="/multibankfx/mfx/v1/about/regulations.php"> </a>
                            </li>
                            <li><a href="/multibankfx/about/security-of-funds.php"><span class="ico-ic_security_of_funds"></span>
                                </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/about/security-of-funds.php"><?php translate('Security of Funds'); ?></a></div>
                                <a href="/multibankfx/about/security-of-funds.php"> </a>
                            </li>
                            <li><a href="/multibankfx/account.php"><span class="ico-ic_accounts_funding"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/account.php"><?php translate('Accounts and Funding'); ?></a>
                                </div>
                                <a href="/multibankfx/account.php"> </a>
                            </li>
                            <li><a href="/multibankfx/account/bonus.php"><span class="ico-ic_bonus_programs"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/account/bonus.php"><?php translate('Bonus Programs'); ?></a>
                                </div>
                                <a href="/multibankfx/account/bonus.php"> </a>
                            </li>
                            <li><a href="/multibankfx/investor-relations.php"><span class="ico-ic_partnership_programs"></span>
                                </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/investor-relations.php"><?php translate('Partnership Programs'); ?></a></div>
                                <a href="/multibankfx/investor-relations.php"> </a>
                            </li>
                            <li><a href="/multibankfx/partnership/introducing-brokers.html#introducing-brokers-form"><span class="ico-ic_become_an_ib"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/partnership/introducing-brokers.html#introducing-brokers-form"><?php translate('Become an IB'); ?></a></div>
                                <a href="/multibankfx/partnership/introducing-brokers.html#introducing-brokers-form"> </a>
                            </li>
                            <li><a href="/multibankfx/about/milestones.php"><span class="ico-ic_our_milestones"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/about/milestones.php"><?php translate('Our Milestones'); ?></a></div>
                                <a href="/multibankfx/about/milestones.php"> </a>
                            </li>
                            <li><a href="/multibankfx/index.html#" onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-25a4ed03b2a18f3d06b293bb-=""><span class="ico-ic_live_chat_support"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="/multibankfx/index.html#" onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-25a4ed03b2a18f3d06b293bb-=""><?php translate('Live Chat Support'); ?></a></div>
                                <a href="/multibankfx/index.html#" onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-25a4ed03b2a18f3d06b293bb-=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_from_root('website_template/page_footer.php');?>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+12139924748">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="/multibankfx/cdn-cgi/l/email-protection.html#a7c4d4e7cad2cbd3cec5c6c9ccc1df89c4c8ca">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-25a4ed03b2a18f3d06b293bb-="">
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
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMzowMjo0Ng==' />
                    <input type='hidden' name='token' value='$2y$10$ZF97prHYJv3Vocz.SnZcwur9b6RyNDL93ax1npAT5zlEU4U9dXkm2' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 03:02:32] https://www.multibankfx.com/article/multibank-mena-diamond-sponsor-jordan-expo<br/><br/>[2020-06-27 03:02:35] https://www.multibankfx.com/article/multibank-fx-championship-2019-starting-soon<br/><br/>[2020-06-27 03:02:44] https://www.multibankfx.com/article/hiring-forex-sales-managers-for-dubai<br/><br/>[2020-06-27 03:02:47] https://www.multibankfx.com/article/hiring-forex-sales-managers-for-dubai<br/><br/> <br/><br/> posted From: www.multibankfx.com/about/company-news?web=true' />
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
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-25a4ed03b2a18f3d06b293bb-="">SEND</button>
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
    <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
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
    <script src="/multibankfx/public_files/static_js/lang_data/en.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/jquery.dataTables.min.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/lazysizes.min.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/jquery.validate.min.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/intlTelInput.min.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/app.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script type="25a4ed03b2a18f3d06b293bb-text/javascript" async>
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
    <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
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
    <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
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
    <script src="/multibankfx/public_files/static_js/swiper-4.3.5.min.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/app_home.js" type="25a4ed03b2a18f3d06b293bb-text/javascript"></script>
    <script type="25a4ed03b2a18f3d06b293bb-text/javascript">
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
    <style>
        .ensure-fund-security-wrapper {
            width: 100%;


            display: grid;
            grid-template-columns: 33.333% 33.333% 33.333%;
            grid-template-rows: 1fr 1fr;
            grid-template-areas:
                "s1 s2 s3"
                "s1 s4 s5";
            grid-gap: 15px 15px;
            justify-items: stretch;
            align-items: stretch;
        }

        .ensure-fund-security:first-child .card-img {
            width: auto;
        }

        .ensure-fund-security .card-img-box {
            height: 100% !important;
        }

        @media (max-width: 1199px) {
            .ensure-fund-security-wrapper {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 40% 30% 30%;
                grid-template-areas:
                    "s1 s1"
                    "s2 s3"
                    "s4 s5";
            }

            .ensure-fund-security:first-child .card-img {
                width: 100%;
            }
        }
    </style>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="25a4ed03b2a18f3d06b293bb-|49" defer=""></script>
</body>

</html>