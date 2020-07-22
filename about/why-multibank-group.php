<!DOCTYPE html>
<html lang='en'>
    <?php include "../helper/header_include.php";
     include_from_root('website_template/head.php');?>
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
<div class="main-container">
    <div class="banner-with-bg baout-banner-with-bg position-relative"><img alt="Why MultiBank" class="banner-bg"
                                                                            data-entity-type="" data-entity-uuid=""
                                                                            src="/public_files/images/about_us/why_multibank_top_banner.jpg"/>
        <div class="container align-all">
            <div class="row justify-content-center">
                <div class="col-md-12  col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                    <h1 class="mex-h1 text-fff mex-m-b-15 text-center"><?php translate('Why MultiBank'); ?></h1>
                    <div class="mex-content text-fff text-mex-h1 text-center"><?php translate('MultiBank was established in California,
                        USA in 2005. Since its launch, MultiBank has evolved into one of the largest online financial
                        derivatives providers worldwide, with a current paid up capital of over US $322 million.'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="flex-center why-multibank-banner ">
        <div class="container text-center mex-m-l-15 mex-m-r-15">
            <div class="row mex-m-t-80 why-multibank-banner-card justify-content-center ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mex-m-b-10 mex-p-l-5 mex-p-r-5">
                    <div class="shadow-box-smooth ">
                        <div class="card-img-box"><img alt="Why MultiBank" class="card-img mex-img-cover"
                                                       data-entity-type="" data-entity-uuid=""
                                                       src="/public_files/images/about_us/why_multibank_image1.png"/>
                        </div>
                        <div class="card-content bg-white  mex-p-30">
                            <div class="mex-content mb0 text-left"><?php translate('MultiBank maintains over 20 offices worldwide,
                                including MEX Fintech (Hong Kong), MEX Exchange (Australia), MEX Asset Management
                                (Germany), MEX Asset Management (Austria), MEX Spain, MultiBank Forex Exchange (USA),
                                MultiBank LATAM (Mexico), MEX Group (China), MultiBank Vietnam, MultiBank Philippines,
                                MultiBank Malaysia, MultiBank MENA (UAE), MEX Clearing (UAE), MultiBank Kuwait, MEX
                                Prime (Cyprus), MEX Financial Technologies (Turkey), MultiBank FX International (BVI),
                                MBG (BVI) and MEX Wealth Management (Cayman Islands).'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12   col-lg-7 mex-m-b-10  mex-p-l-10 ">
                    <div class="row mex-m-b-10">
                        <div class="col-md-6 col-sm-12 mex-p-l-5 mex-p-r-5">
                            <section class="mex-block-card-v mex-third">
                                <div class="card-img-box"><img
                                        alt="We service an extensive client-base of over 320,000 customers from across 90 countries worldwide."
                                        class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                        src="/public_files/images/about_us/why_multibank_image2.png"/></div>
                                <div class="card-content bg-white ">
                                    <div class="mex-content text-overflow-3 mb0 text-left"><?php translate('We service an extensive
                                        client-base of over 320,000 customers from across 90 countries worldwide.'); ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-6 col-sm-12 mex-p-l-5 mex-p-r-5">
                            <section class="mex-block-card-v mex-third">
                                <div class="card-img-box"><img
                                        alt="In 2018, our average daily turnover exceeded UD$ 7 billion per day."
                                        class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                        src="/public_files/images/about_us/why_multibank_image3.png"/></div>
                                <div class="card-content bg-white ">
                                    <div class="mex-content text-overflow-3 mb0 text-left"><?php translate('In 2018, our average daily
                                        turnover exceeded US$ 4.6 billion per day.'); ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mex-p-l-5 mex-p-r-5">
                            <section class="mex-block-card-v mex-third">
                                <div class="card-img-box"><img
                                        alt="MultiBank is heavily regulated worldwide by ASIC in Australia, BaFin in Germany, FMA in Austria, CNMV in Spain, RAK in the UAE, the Tianjin Financial Government in China, FSC in the BVI, CIMA in the Caymans and others."
                                        class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                        src="/public_files/images/about_us/why_multibank_image4.png"/></div>
                                <div class="card-content bg-white ">
                                    <div class="mex-content mb0 text-left"><?php translate('MultiBank comprises a number of companies
                                        which are heavily regulated worldwide by ASIC in Australia, BaFin in Germany,
                                        FMA in Austria and CNMV in Spain, FSC in the British Virgin Islands, CIMA in the
                                        Cayman Islands.'); ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p0 choose-next-background avant-pad about-our-advantages mex-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="container">
                        <h2 class="mex-h1 text-fff text-center uppercase mex-p-b-40"><?php translate('OUR ADVANTAGES'); ?></h2>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12 book-content avant-pad-contianer">
                    <div class="container">
                        <div class="book-content-inner">
                            <div class="col-md-12">
                                <ul class="mex-list-conditions">
                                    <li><span class="mex-h1 li_left">01</span><span class="li_right"><?php translate('40+ awards, including “Best FX & CFD Broker (Europe & Asia) 2019” '); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">02</span><span class="li_right"><?php translate('Tightest spread in the industry with the most stable trading platforms'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">03</span><span class="li_right"><?php translate('Pure ECN processing with direct access to over 20 Interbank trading prices'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">04</span><span class="li_right"><?php translate('World class tailored financial services for Introducing Brokers including, but not limited to, 24/5 support and the development of customized account opening applications and trading back offices'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">05</span><span class="li_right"><?php translate('Two way 5 figure raw interbank price feeds with Instant sub-second trade capture/execution'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">06</span><span class="li_right"><?php translate('No price slippage on displayed prices when deals are being executed'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">07</span><span class="li_right"><?php translate('Complete transparency of market with only the best bid/offers being displayed'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">08</span><span class="li_right"><?php translate('Risk Management, Decision Support Tools, Dynamic position tracker, Point-and-choose position closeout and Back-office suite with strategic design and user-friendliness for the convenience of our valued clients and partners'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">09</span><span class="li_right"><?php translate('Award-winning MT4 & MT5 Platforms recognized for excellence in technology and liquidity'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">10</span><span class="li_right"><?php translate('Negative balance protection'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">11</span><span class="li_right"><?php translate('No trading restrictions on EA'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">12</span><span class="li_right"><?php translate('Up to 500:1 leverage'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">13</span><span class="li_right"><?php translate('No requotes'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">14</span><span class="li_right"><?php translate('No rejections'); ?></span></li>
                                    <li><span class="mex-h1 li_left">15</span><span class="li_right"><?php translate('Free MAM, PAMM, VPS, API'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">16</span><span class="li_right"><?php translate('Client funds security'); ?></span>
                                    </li>
                                    <!-- <li><span class="mex-h1 li_left">17</span><span class="li_right"><?php translate('Paid up capital of over $322 million'); ?></span>
                                    </li>
                                    <li><span class="mex-h1 li_left">18</span><span class="li_right"><?php translate('Fully segregated client bank accounts'); ?></span>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-management">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 mb30 mb-sm-16">
                    <section class="mex-card-cover"><img alt="Introducing Brokers" class="card-img mex-img-cover"
                                                         data-entity-type="" data-entity-uuid=""
                                                         src="/public_files/images/partnership/home_partnership_introducing_broker@2x.png"/>
                        <div class="card-content text-left">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase"><?php translate('Introducing Brokers '); ?></div>
                            <div class="hide-mex-content">
                                <ul class="wm-partnership-mb">
                                    <li><?php translate('Unbeatable IB conditions offering the maximum commission and rebate returns on
                                        transactions'); ?>
                                    </li>
                                    <li><?php translate('Customized demo and live account opening applications'); ?></li>
                                    <li><?php translate('Full set of marketing materials including brochures, calendars, educational
                                        materials and account opening documents'); ?>
                                    </li>
                                    <li><?php translate('Year-round promotions, activities and bonuses including lucrative cash and
                                        physical prizes'); ?>
                                    </li>
                                    <li><?php translate('Each Introducing Broker will be assigned an experienced IB manager to provide a
                                        personal approach to the partnership experience'); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb30 mb-sm-16">
                    <section class="mex-card-cover"><img alt="Franchise Program" class="card-img mex-img-cover"
                                                         data-entity-type="" data-entity-uuid=""
                                                         src="/public_files/images/partnership/home_partnership_franchise_program@2x.png"/>
                        <div class="card-content text-left">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase"><?php translate('Franchise Program'); ?></div>
                            <div class="hide-mex-content">
                                <ul class="wm-partnership-mb">
                                    <li><?php translate('Exclusive representation of MultiBank in your local region'); ?></li>
                                    <li><?php translate('PL and expenses sharing agreements'); ?></li>
                                    <li><?php translate('Full access to all trading data and Back Office'); ?></li>
                                    <li><?php translate('Full marketing and technical support'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-16">
                    <section class="mex-card-cover"><img alt="White Label" class="card-img mex-img-cover"
                                                         data-entity-type="" data-entity-uuid=""
                                                         src="/public_files/images/partnership/home_partnership_white_label@2x.png"/>
                        <div class="card-content text-left">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase"><?php translate('White Label'); ?></div>
                            <div class="hide-mex-content">
                                <ul class="wm-partnership-mb">
                                    <li><?php translate('Full API integration and supplying liquidity'); ?></li>
                                    <li><?php translate('Personalized Front Office and Back Office systems (MyMultiBank)'); ?></li>
                                    <li><?php translate('Specialized tools for client administration, risk management and
                                        real-time/end-of-day reporting'); ?>
                                    </li>
                                    <li><?php translate('Reliable hosting and system administration support'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 mb-sm-16">
                    <section class="mex-card-cover"><img alt="Prime Broker Services" class="card-img mex-img-cover"
                                                         data-entity-type="" data-entity-uuid=""
                                                         src="/public_files/images/partnership/home_partnership_prime_of_primes.jpg"/>
                        <div class="card-content text-left">
                            <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase"><?php translate('Prime Broker Services'); ?>
                            </div>
                            <div class="hide-mex-content">
                                <ul class="wm-partnership-mb">
                                    <li><?php translate('Agency execution'); ?></li>
                                    <li><?php translate('Full technology support'); ?></li>
                                    <li><?php translate('Low latency, co-located connectivity to bank and non-bank fees'); ?></li>
                                    <li><?php translate('Deep liquidity to access the market from a wide range of banks, liquidity
                                        providers and ECNs'); ?>
                                    </li>
                                    <li><?php translate('Connectivity infrastructures'); ?></li>
                                    <li><?php translate('Full account management functionality, along with real-time position keeping'); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section class="table-background customer_service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mex-h1 text-1e32a3 text-center uppercase mex-p-b-40"><?php translate('first class customer service'); ?></h2>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="24 hour professional first class customer service in 10+ languages"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_first_class_customer_service.png"/>
                        </div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('24 hour professional first class customer
                                service in 10+ languages'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="IT and operational support including service desk and on-boarding"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_it_support.png"/></div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('IT and operational support including service
                                desk, on-boarding and configuration and cash management'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img alt=" Regulatory and corporate support"
                                                       class="card-img mex-img-cover" data-entity-type=""
                                                       data-entity-uuid=""
                                                       src="/public_files/images/about_us/why_multibank_corporate_support.png"/>
                        </div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('Regulatory and corporate support'); ?></div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="Sales and market support including educational materials, videos, tutorials and seminars"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_market_support.png"/></div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('Sales and market support including educational
                                materials, videos, tutorials and seminars'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 mb-s-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="24/5 support from Technical Department and IT Trading specialists"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_technical_support.png"/></div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('24/5 support from Technical Department and IT
                                Trading specialists'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 mb-s-30  mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="Around the clock, quick account opening and funding available"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_quick_account_opening.png"/></div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('Around the clock, quick account opening and
                                funding available'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3  mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="24 hours up-to-date online financial news in multiple languages"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_financial_news.png"/></div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('24 hours up-to-date online financial news in
                                multiple languages'); ?>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3  mex-m-b-30">
                    <section class="mex-block-card-v mex-qtr">
                        <div class="card-img-box"><img
                                alt="Various funding methods including: credit card, wire transfer, Neteller, Skrill and more"
                                class="card-img mex-img-cover" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/about_us/why_multibank_funding_methods.png"/></div>
                        <div class="card-content bg-white ">
                            <div class="mex-content text-overflow-3 mb0"><?php translate('Various funding methods including: credit card,
                                wire transfer, Neteller, Skrill, etc'); ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="aca9042ca4fa5ec4ab63856a-text/javascript">
$(function() {
var icons = [
'ic_our_regulations',
'ic_security_of_funds',
'ic_our_milestones',
'ic_our_products',
'ic_Call_Our_24_7_Hotline',
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
    <style>
        .wm-partnership-mb {
            list-style-type: disc;
        }

        .wm-partnership-mb li {
            margin-left: -20px;

        }

        .about-management .mex-card-cover:hover .card-content {
            background-color: rgba(0, 0, 0, 0.8) !important;

        }
    </style>
 <?php include_from_root('website_template/choose_where_to.php');?>
</div>
<?php include_from_root('website_template/page_footer.php');?>
<div class="slidebar">
    <a class="get-a-all-btn call-btn" href="tel:+12139924748">
        <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid=""
                               src="/public_files/images/home/sidebar_icon/phone.png" width="50"/> </span>
    </a>
    <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
        <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/home/sidebar_icon/whatsapp.png" width="50"/> </span>
    </a>
    <a class="email-us-tg demo-account-btn email-btn"
       href="cdn-cgi/l/email-protection.html#a4c7d7e4c9d1c8d0cdc6c5cacfc2dc8ac7cbc9">
        <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/home/sidebar_icon/email.png" width="50"/> </span>
    </a>
    <a class="ib-registration-btn chat-btn"
       onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;"
       data-cf-modified-aca9042ca4fa5ec4ab63856a-="">
        <span class="btn"> <img alt="Chat" data-entity-type="" data-entity-uuid=""
                                src="/public_files/images/home/sidebar_icon/chat.png" width="50"/> </span>
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
                <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OTowOQ=='/>
                <input type='hidden' name='token' value='$2y$10$c/0Ut9L4btXDxvIKaDvG.OfZcie/Zq2YQCV0coYbAHa6flXUPLb4K'/>
                <input type='hidden' name='source'
                       value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:05] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:07] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:08] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:09] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/about/why-multibank-group?web=true'/>
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
                        data-cf-modified-aca9042ca4fa5ec4ab63856a-="">SEND
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
<script type="aca9042ca4fa5ec4ab63856a-text/javascript">
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
<script src="/public_files/static_js/lang_data/en.js" type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script src="/public_files/static_js/jquery.dataTables.min.js"
        type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script src="/public_files/static_js/lazysizes.min.js" type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script src="/public_files/static_js/jquery.validate.min.js" type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script src="/public_files/static_js/intlTelInput.min.js"
        type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script src="/public_files/static_js/app.js"
        type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script type="aca9042ca4fa5ec4ab63856a-text/javascript" async>
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
<script type="aca9042ca4fa5ec4ab63856a-text/javascript">
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
<script type="aca9042ca4fa5ec4ab63856a-text/javascript">
$(function() {
        $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
});

</script>
<script type="aca9042ca4fa5ec4ab63856a-text/javascript">
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
<script src="/public_files/static_js/swiper-4.3.5.min.js" type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script src="/public_files/static_js/app_home.js" type="aca9042ca4fa5ec4ab63856a-text/javascript"></script>
<script type="aca9042ca4fa5ec4ab63856a-text/javascript">
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
        grid-template-areas: "s1 s2 s3" "s1 s4 s5";
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
            grid-template-areas: "s1 s1" "s2 s3" "s4 s5";
        }

        .ensure-fund-security:first-child .card-img {
            width: 100%;
        }
    }

</style>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="aca9042ca4fa5ec4ab63856a-|49" defer=""></script>
</body>
</html>