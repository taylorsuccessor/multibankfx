<!DOCTYPE html>
<html lang='en'>

<?php include_from_root('website_template/head.php'); ?>
<body>
    <?php include_from_root('website_template/header_and_menu.php'); ?>
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
    <div class="main-container">
        <section class="flex-center page-top-banner"><img alt="ABOUT US" class="mex-img-cover" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/about_top_banner.jpg" />
            <div class="container text-center mex-p-t-30 mex-p-b-30">
                <div class="row justify-content-center">
                    <div class="col-xl-10 padding-20 page-top-banner-video-bg">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12 mb-sm-32">
                                <h1 class="mex-h1 text-fff mex-m-b-15"><?php translate('ABOUT US'); ?></h1>
                                <div class="mex-content text-fff text-justify"><?php translate('MultiBank was established in California, USA in 2005. Since its launch MultiBank has evolved into one of the largest online financial derivatives providers worldwide, with a current paid up capital of over US $322 million.'); ?></div>
                            </div>
                            <div class="col-lg-5 col-sm-12 page-top-banner-video">
                                <video class="full-width html5_video_play" controls>
                                    <source src="public_files/video/20190121_Launched_Violin_English.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mex-m-b-30">
                        <section class="mex-card-cover box-animate"><a href="about/why-multibank-group.html"><img alt="Why MultiBank" class="card-img mex-img-cover" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/about_why_multibank.png" /> </a>
                            <div class="card-content text-left">
                                <div class="font-34 mex-clamp-1 mex-m-b-5 font-type-cap uppercase text-fff"><?php translate('Why MultiBank'); ?></div>
                                <div class="mex-content  mb0 col-md-6 p0 col-xs-12 text-overflow-3"><?php translate("Learn more about MultiBank's award-winning platforms and comprehensive partnership programs"); ?></div>
                            </div>
                            <a href="about/why-multibank-group.html"> </a>
                        </section>
                    </div>
                    <div class="col-md-6 col-xl-4 mex-m-b-30">
                        <section class="mex-card-cover box-animate"><a href="mfx/v1/about/regulations.html"><img alt="Regulations" class="card-img mex-img-cover" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/about_regulations.png" /> </a>
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff"><?php translate('Regulations'); ?></div>
                                <div class="mex-content mb0 text-overflow-3"><?php translate('Companies regulated by top financial bodies worldwide including ASIC, BaFin, FMA, CNMV, FSC, and CIMA'); ?></div>
                            </div>
                            <a href="mfx/v1/about/regulations.html"> </a>
                        </section>
                    </div>
                    <div class="col-md-6 col-xl-4 mex-m-b-30">
                        <section class="mex-card-cover box-animate"><a href="about/global-presence.html"><img alt="Global Presence" class="card-img mex-img-cover" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/about_global_presence.png" /> </a>
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff"><?php translate('Global Presence'); ?></div>
                                <div class="mex-content mb0 text-overflow-3"><?php translate('We maintain over 20 offices worldwide to cater to our international client base'); ?></div>
                            </div>
                            <a href="about/global-presence.html"> </a>
                        </section>
                    </div>
                    <div class="col-md-6 col-xl-4 mex-m-b-30">
                        <section class="mex-card-cover box-animate"><a href="about/security-of-funds.html"><img alt="Security of Funds" class="card-img mex-img-cover" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/about_security_of_funds.png" /> </a>
                            <div class="card-content text-left">
                                <div class="font-34  mex-m-b-5 font-type-cap uppercase text-fff"><?php translate('Security of Funds'); ?></div>
                                <div class="mex-content  mb0 text-overflow-3"><?php translate('Clients can enjoy the highest level of funds security through MultiBank'); ?></div>
                            </div>
                            <a href="about/security-of-funds.html"> </a>
                        </section>
                    </div>
                    <div class="col-md-6 col-xl-4 mex-m-b-30">
                        <section class="mex-card-cover box-animate"><a href="about/management.html"><img alt="Management" class="card-img mex-img-cover" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/management/about_management.png" /> </a>
                            <div class="card-content text-left">
                                <div class="font-34 mex-m-b-5 font-type-cap uppercase text-fff"><?php translate('Management'); ?></div>
                                <div class="mex-content mb0 text-overflow-3"><?php translate('Meet our experienced and dedicated Management Team'); ?></div>
                            </div>
                            <a href="about/management.html"> </a>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-page-awards table-background_1 d-none d-md-block" id="about-page-awards" style="background-image: url(/multibankfx/public_files/images/about_us/home_awards_bg.png)">
            <div class="container index-awards">
                <div class="row">
                    <div class="col-md-12 text-center mex-m-b-30">
                        <h2 class="mex-h1 text-fff text-center"><?php translate('Awards'); ?></h2>
                        <div class="mex-content mex-content col-md-10 font-24 mx-auto">
                            <p class=" lead text-fff mb15 text-center font-24 "><?php translate('Find out more about our awards and recognitions
                        as industry leader'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">

                        <div class="swiper-container" id="swiper-container-awards2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/Best_Forex_CFD_Broker_JFEX_Award.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex and CFD Broker 2019'); ?></span>
                                        <span class="mex-content "><?php translate('16th Jordan Forex Expo & Awards'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-wins-financial-services-provider-asia-award-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/Financial_Services_Provider_of_the_Year_Asia_2019.jpg" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Financial Services Provider of the Year (Asia) 2019'); ?></span>
                                        <span class="mex-content "><?php translate('Global Brands Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-chosen-best-FX-CFD-broker-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_fx_broker_euas_2019.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best FX & CFD Broker (Europe & Asia) 2019'); ?></span>
                                        <span class="mex-content "><?php translate('International Investor'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-wins-ecn-broker-best-forex-platform-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/ecn_broker_eu_2019.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('ECN Broker of the Year (Europe) 2019'); ?></span>
                                        <span class="mex-content "><?php translate('International Business Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-wins-ecn-broker-best-forex-platform-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_mena_2019.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Platform MENA 2019'); ?></span>
                                        <span class="mex-content "><?php translate('International Business Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-named-best-financial-derivatives-broker-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/2019best_financial_derivatives_broker_europe.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Financial Derivatives Broker 2019'); ?></span>
                                        <span class="mex-content "><?php translate('Global Banking & Finance Review'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-selected-best-forex-broker-forex-expo-dubai-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_broker_2019.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Broker 2019'); ?></span>
                                        <span class="mex-content "><?php translate('The Forex Expo Dubai'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/milestones_multibank-chairman-naser-taher-awarded-ceo-of-the-year-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/2019CEO_of_the_year_financial_services_asia_europe.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('CEO of the Year (Financial Services) (Asia & Europe) 2019'); ?></span>
                                        <span class="mex-content "><?php translate('Le Fonti Awards (International Alternative Investment Review)'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="article/multibank-honored-best-ecn-broker-asia-2019.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_ecn_broker_asia_2019.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best ECN Broker of the Year (Asia) 2019'); ?></span>
                                        <span class="mex-content "><?php translate('Finance Derivative'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_education_provider_2019.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Education Provider 2019'); ?></span>
                                        <span class="mex-content "><?php translate('FX Daily Info'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_platform_2018.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Trading Platform (Hong Kong) 2018'); ?></span>
                                        <span class="mex-content "><?php translate('International Finance Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_ecn_broker_2018.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best ECN Broker Europe 2018'); ?></span>
                                        <span class="mex-content "><?php translate('International Business Magazine'); ?></span>
                                    </a>+
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_ecn_platform_2018.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex ECN Platform (Europe & Asia)'); ?></span>
                                        <span class="mex-content "><?php translate('Capital Finance International'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/most_admired_2017.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('30 Most Admired Companies of 2017'); ?></span>
                                        <span class="mex-content "><?php translate('Insights Success Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/broker_of_the_year_2017.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Financial Derivatives Broker of the Year (Asia & Europe) 2017'); ?></span>
                                        <span class="mex-content "><?php translate('International Alternative Investment Review'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/ceo_of_the_year_2017.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('CEO of the Year-- Financial Services (Asia & Europe) 2017'); ?></span>
                                        <span class="mex-content "><?php translate('International Alternative Investment Review'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_platform_2016.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Exchange Platform (Hong Kong) 2016'); ?></span>
                                        <span class="mex-content "><?php translate('Global Brands Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_ceo_2016.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Financial Services CEO (Hong Kong) 2016'); ?></span>
                                        <span class="mex-content "><?php translate('Global Brands Magazine'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_china_2016.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Platform 2016'); ?></span>
                                        <span class="mex-content "><?php translate('China Forex Expo'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_execution_broker_2016.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Execution Broker 2016'); ?></span>
                                        <span class="mex-content "><?php translate('China Forex Expo'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_broker_2015.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Broker 2015'); ?></span>
                                        <span class="mex-content "><?php translate('IFeng'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_platform_2015.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Trading Platform (Asia & Europe) 2015'); ?></span>
                                        <span class="mex-content "><?php translate('Capital Finance International'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/multibankfx/public_files/images/about_us/awards/best_forex_broker_europe_2015.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Broker Europe 2015'); ?></span>
                                        <span class="mex-content "><?php translate('International Alternative Investment Review'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_platform_2014.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Institutional FX Platform 2014'); ?></span>
                                        <span class="mex-content "><?php translate('7th Saudi Money Expo'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/top_provider_2014.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Top FX Liquidity Provider 2014'); ?></span>
                                        <span class="mex-content "><?php translate('6th Saudi Money Expo'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/most_secure_broker_2014.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Most Secure Broker 2014'); ?></span>
                                        <span class="mex-content "><?php translate('KG Forex World Conference'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_ecn_broker_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best ECN Forex Broker Asia 2013'); ?> <br> <?php translate('Best ECN Forex Broker Europe 2013'); ?></span>
                                        <span class="mex-content "><?php translate('Global Banking & FinanceReview'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_company_leadership_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Company for Leadership 2013'); ?></span>
                                        <span class="mex-content "><?php translate('International Alternative Investment Review'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/most_secure_broker_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Most Secure Forex Broker 2013'); ?></span>
                                        <span class="mex-content "><?php translate('Shanghai Financial Investment Management Association'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_broker_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Broker 2013'); ?></span>
                                        <span class="mex-content "><?php translate('Shanghai Financial Investment Management Association'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/broker_of_the_year_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Broker of the Year 2013'); ?></span>
                                        <span class="mex-content "><?php translate('China International Online Trading Expo'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_trading_platform_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Trading Platform 2013'); ?></span>
                                        <span class="mex-content "><?php translate('CNFOL'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/most_powerful_team_2013.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Most Powerful Forex Technical Research & Development Team 2013'); ?></span>
                                        <span class="mex-content "><?php translate('CNFOL'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/2013Asia.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Most Secure Forex Broker 2013'); ?></span>
                                        <span class="mex-content "><?php translate('Asia Franchise Industry Association'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/2013Asia.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Broker 2013'); ?></span>
                                        <span class="mex-content "><?php translate('Asia Franchise Industry Association'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_trading_platform_2012.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Trading Platform 2012'); ?></span>
                                        <span class="mex-content "><?php translate('Jinrongjie'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/rtb_china_awards_2012.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('RTB China Awards 2012'); ?></span>
                                        <span class="mex-content "><?php translate('Global RTB Summit'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_forex_2012_11china.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Trading Platform 2012'); ?></span>
                                        <span class="mex-content "><?php translate('11th China International Investment & Finance Expo'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_ecn_broker_2012.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best ECN Broker (Asia) 2012'); ?></span>
                                        <span class="mex-content "><?php translate('Global Banking & Finance Review'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_forex_provider_2011.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Service Provider 2011'); ?></span>
                                        <span class="mex-content "><?php translate('Hexun'); ?></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="about/awards.html">
                                        <img class="lazyload" data-src="/public_files/images/about_us/awards/best_forex_provider_2011.png" />
                                        <span class="mex-h3 mex-m-b-5 "><?php translate('Best Forex Trading Platform 2011'); ?></span>
                                        <span class="mex-content "><?php translate('Hexun'); ?></span>
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
        <link href="public_files/static_css/awards-carousel.css" rel="stylesheet" type="text/css" />
        <section class="bg-white p0 index-platforms d-none">
            <img class="d-block d-md-none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.1;" src="public_files/images/home/home_platforms_bg.jpg" />
            <div class="container mex-p-t-80 mex-p-b-80">
                <div class="row">
                    <div class="col-xl-10 mx-auto col-lg-12 text-center mex-m-b-15 ">
                        <h3 class="mex-h1 text-1e32a3 text-center"><?php translate('Platforms'); ?></h3>
                    </div>
                    <div class=" col-xl-8 col-lg-12 row mx-0 d-none d-md-flex">
                        <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                            <div class="platforms_content mex-box-shadow">
                                <h4 class="uppercase  mb16 mb-xs-8 "><img class="lazyload" data-src="/multibankfx/public_files/images/home/home_platforms_ecn_icon.png" alt="ECN Pro Platform"><span><?php translate('ECN Pro Platform'); ?></span>
                                </h4>
                                <p class=" platforms_box_txt mex-clamp-4 mex-content"><?php translate('Enjoy raw price feed directly through our
                            ECN connection to prime brokers and access the tightest spread in the industry'); ?></p>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/ecn-pro.html"><i class="ti-bar-chart"></i><?php translate('MT4'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/ecn-pro.html"><i class="ti-mobile"></i><?php translate('Mobile'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop" style="top: 1px;
    position: relative;"></i> <?php translate('Web Trading'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                            <div class="platforms_content mex-box-shadow">
                                <h4 class="uppercase  mb16  mb-xs-8  "><img class="lazyload" data-src="/multibankfx/public_files/images/home/home_platforms_multibank_pro_icon.png" alt="MultiBank Pro Platform"><span><?php translate('MultiBank Pro Platform'); ?></span>
                                </h4>
                                <p class=" platforms_box_txt mex-clamp-4 mex-content"><?php translate('Ideal for traders looking for an ECN
                            experience with tight spreads and zero platform fees'); ?></p>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/multibank-pro.html"><i class="ti-bar-chart"></i><?php translate('MT4'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/multibank-pro.html"><i class="ti-mobile"></i><?php translate('Mobile'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop" style="top: 1px;
    position: relative;"></i> <?php translate('Web Trading'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                            <div class="platforms_content mex-box-shadow">
                                <h4 class="uppercase  mb16  mb-xs-8  "><img class="lazyload" data-src="/multibankfx/public_files/images/home/home_platforms_maximus_icon.png" alt="Maximus Platform"><span><?php translate('Maximus Platform'); ?></span>
                                </h4>
                                <p class=" platforms_box_txt mex-clamp-4 mex-content"><?php translate('Recommended for traders looking for no
                            restrictions on EA and scalping trading'); ?></p>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/maximus.html"><i class="ti-bar-chart"></i><?php translate('MT4'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/maximus.html"><i class="ti-mobile"></i><?php translate('Mobile'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop" style="top: 1px;position: relative;"></i>
                                    <?php translate('Web Trading'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-6 mex-p-l-0 p0-xs mb-3">
                            <div class="platforms_content mex-box-shadow">
                                <h4 class="uppercase  mb16  mb-xs-8  "><img class="lazyload" data-src="/multibankfx/public_files/images/home/home_platforms_mt5_platform.png" alt="MT5 Platform"><span><?php translate('MT5 Platform '); ?></span>
                                </h4>
                                <p class=" platforms_box_txt mex-clamp-4 mex-content"><?php translate('Suitable for traders looking for enhanced
                            trading functionalities such as advanced scripting tools for custom indicators and expert
                            advisors'); ?></p>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/mt5-platform.html"><i class="ti-bar-chart"></i><?php translate('MT5'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="platforms/mt5-platform.html"><i class="ti-mobile"></i><?php translate('Mobile'); ?></a>
                                <a class="btn btn-mex btn-sm mex-m-b-15" href="mql5.html"><i class="ti-desktop" style="top: 1px;position: relative;"></i>
                                    <?php translate('Web Trading'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="264a9d99fba7749106dd85a3-text/javascript" src="public_files/static_js/slick.js"></script>

        <script type="264a9d99fba7749106dd85a3-text/javascript">
            $(function() {

                $('.multiple-items').slick({
                    dots: false,
                    nextArrow: $('#next-but'),
                    prevArrow: $('#prev-but'),
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 5,
                    responsive: [{
                        breakpoint: 1025,
                        settings: {
                            dots: false,
                            nextArrow: $('#next-but'),
                            prevArrow: $('#prev-but'),
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }]
                });
            });
        </script>
        <section class="pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="mex-h2 text-1e32a3 text-center"><?php translate('Milestones'); ?></div>
                        <div class="text-center font-18"><?php translate("Learn more about MultiBank's achievements from over the years"); ?></div>
                        <hr />
                        <div class="about-milestones-content about-page-milestone-slides">
                            <div class="card card-left mb-4">
                                <a href="article/milestone-multibank-group-establishes-new-branch-in-turkey.html" target="_blank" class="row flex-column-reverse flex-md-row about-milestone-card">
                                    <div class="col-12 col-md-8 col-xl-9">
                                        <div class="card-body mex-content">
                                            <p class="card-title text-overflow-1"><?php translate('MultiBank Group Establishes New Branch in Turkey'); ?></p>
                                            <p class="card-time">2019-12-12</p>
                                            <p class="card-text text-overflow-2">
                                                <p><?php translate('MultiBank is pleased to announce yet another addition to the Group’s global offices with the establishment of a new branch in Turkey.'); ?></p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-3"><img src="public_files/blog/thumbnails/Turkey_Opening_thumbnail_en.jpg" alt="" class="card-img-top milestone-thumbnail" />
                                    </div>
                                </a></div>
                            <div class="card card-left mb-4"><a href="article/milestones_multibank-group-official-partner-bmw-m-motorsport.html" target="_blank" class="row flex-column-reverse flex-md-row about-milestone-card">
                                    <div class="col-12 col-md-8 col-xl-9">
                                        <div class="card-body mex-content">
                                            <p class="card-title text-overflow-1"><?php translate('MultiBank Group Signed as Official Partner of BMW M Motorsport'); ?></p>
                                            <p class="card-time">2019-10-23</p>
                                            <p class="card-text text-overflow-2"><?php translate('MultiBank Group has signed an agreement to become the Official Partner of BMW M Motorsport. The pact between BMW M Motorsport and MultiBank further builds on the list of milestones in the history of MultiBank Group.'); ?> </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-3"><img src="public_files/blog/thumbnails/MB_BMW_thumbnail.jpg" alt="" class="card-img-top milestone-thumbnail" />
                                    </div>
                                </a></div>
                            <div class="card card-left mb-4"><a href="article/milestones_multibank-kuwait-opened-in-middle-east.html" target="_blank" class="row flex-column-reverse flex-md-row about-milestone-card">
                                    <div class="col-12 col-md-8 col-xl-9">
                                        <div class="card-body mex-content">
                                            <p class="card-title text-overflow-1"><?php translate('MultiBank Group Kicks Off Kuwait Branch to Further Service the Middle East Market'); ?></p>
                                            <p class="card-time">2019-09-15</p>
                                            <p class="card-text text-overflow-2"><?php translate('As part of its mission to expand further into the Middle East market, MultiBank Group has announced the opening of its new branch office in Kuwait.'); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-3"><img src="public_files/blog/thumbnails/MB_Kuwait_banner_thumbnail_0.jpg" alt="" class="card-img-top milestone-thumbnail" />
                                    </div>
                                </a></div>
                            <div class="card card-left mb-4"><a href="article/milestones_interview-multibank-philippines-ceo-mark-mangulabnan.html" target="_blank" class="row flex-column-reverse flex-md-row about-milestone-card">
                                    <div class="col-12 col-md-8 col-xl-9">
                                        <div class="card-body mex-content">
                                            <p class="card-title text-overflow-1"><?php translate('Interview with MultiBank Philippines CEO Mark Mangulabnan'); ?></p>
                                            <p class="card-time">2019-09-02</p>
                                            <p class="card-text text-overflow-2"><?php translate('In September 2019, MultiBank Group opened its first branch office in the Philippines, located in the central business district of Manila.'); ?> </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-xl-3"><img src="public_files/blog/thumbnails/multibank_philippines_thumbnail.jpg" alt="" class="card-img-top milestone-thumbnail" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center mex-p-15">
                            <a href="about/milestones.html" class="btn btn-mex"><?php translate('MORE'); ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 mt-5 mt-xl-0">
                        <div class="mex-h2 text-1e32a3 text-center"><?php translate('Company News'); ?></div>
                        <div class="text-center font-18"><?php translate("Keep up to date with MultiBank's latest news"); ?></div>
                        <hr />
                        <div class="row flex-column justify-content-between">
                            <div class="col-12 col-sm-12">
                                <div class="card big-news">
                                    <a href="article/multibank-fast-n-furious-trading-contest-announcement.html" target="_blank">
                                        <img src="public_files/blog/thumbnails/2020_winners_announced_thumbnail.png" alt="" class="mex-img-cover" />
                                        <div class="card-body mex-content mex-p-v-15">
                                            <p class="card-title text-overflow-2"><?php translate('Winners Announced for the MultiBank Fast & Furious Trading Contest'); ?></p>
                                            <p class="card-time">2020-02-18</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="card card-left mb-3 mt-3">
                                    <a href="article/multibank-fast-n-furious-trading-contest.html" target="_blank" class="row mx-0">
                                        <div class="col-12 col-md-8 col-xl-6 p0">
                                            <img src="public_files/blog/thumbnails/MB_BMW_thumbnail_1.jpg" alt="" class="mex-img-cover" />
                                        </div>
                                        <div class="card-body mex-content col-12 col-md-4 col-xl-6">
                                            <p class="card-title"><?php translate('MultiBank Fast & Furious Trading Contest Starts Jan 6, 2020!'); ?> </p>
                                            <p class="card-time">2019-12-27</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12">
                                <div class="card card-left mb-3">
                                    <a href="article/multibank-philippines-hosts-investors-night-2019.html" target="_blank" class="row mx-0">
                                        <div class="col-12 col-md-8 col-xl-6 p0"><img src="public_files/blog/thumbnails/PH_Investor_Night_thumbnail.jpg" alt="" class="mex-img-cover" />
                                        </div>
                                        <div class="card-body mex-content col-12 col-md-4 col-xl-6">
                                            <p class="card-title"><?php translate('MultiBank Philippines Hosts Investors Night 2019'); ?></p>
                                            <p class="card-time">2019-12-07</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mex-p-15">
                            <a href="article/news_20180916.html" class="btn btn-mex"><?php translate('MORE'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .grapesjs-editable-field-item[data-grapesjs-field="field_component_04"][data-grapesjs-delta="0"] * {
                box-sizing: border-box;
            }

            .grapesjs-editable-field-item[data-grapesjs-field="field_component_04"][data-grapesjs-delta="0"] * {
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
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 mb-sm-16"><a href="article/hiring-now-cyprus.html"><img alt="about_career" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/about_career@2x.jpg" /></a></div>
                    <div class="col-xs-12 col-sm-6"><a href="about/sponsorship.html"><img alt="about_hsvh" data-entity-type="" data-entity-uuid="" src="public_files/images/about_us/HSVH_sponsorship_banner.png" /></a></div>
                </div>
            </div>
        </section>
        <section class="p0 choose-next-background subject-box-bg-light">
            <div class="container mex-m-b-80">
                <div class="col-md-12">
                    <div class="mex-h1 text-1e32a3 text-center uppercase mex-p-t-80 mex-p-b-40 mex-translatable" data-es="ELIGE DÓNDE IR A CONTINUACIÓN" data-de="WOHIN ALS NÄCHSTES" data-ph="" data-vn="CHỌN NƠI ĐẾN KẾ TIẾP" data-id="" data-pt="" data-ru="" data-it="SCEGLI DOVE ANDARE" data-mys="SILA PILIH UNTUK TERUSKAN" data-fr="Où allez?" data-th="เลือกว่าจะไปที่ไหน" data-ae="أختر أين تريد الذهاب"><?php translate('Choose Where to go next'); ?></div>
                    <div class="icon-next-list">
                        <ul class="bg-white target-icon">
                            <li><a href="mfx/v1/about/regulations.html"><span class="ico-ic_our_regulations">&nbsp;</span></a>
                                <div class="mex-content mex-clamp-3"><?php translate('Our Regulations'); ?></div>
                            </li>
                            <li><a href="products.html"><span class="ico-ic_our_products"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="products.html"><?php translate('Our Products'); ?></a></div>
                                <a href="products.html"> </a>
                            </li>
                            <li><a href="tools.html"><span class="ico-ic_trading_tools"></span> </a>
                                <div class="mex-content mex-clamp-3"><?php translate('Trading Tools'); ?></div>
                                <a href="tools.html"> </a>
                            </li>
                            <li><a href="about/why-multibank-group.html"><span class="ico-ic_why_multibank"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="about/why-multibank-group.html"><?php translate('Why Multibank'); ?></a></div>
                                <a href="about/why-multibank-group.html"> </a>
                            </li>
                            <li><a href="mfx/v1/about/regulations.html"><span class="ico-ic_our_regulations">&nbsp;</span> </a>
                                <div class="mex-content mex-clamp-3"><a href="mfx/v1/about/regulations.html"><?php translate('Our Regulations'); ?></a></div>
                                <a href="mfx/v1/about/regulations.html"> </a>
                            </li>
                            <li><a href="about/security-of-funds.html"><span class="ico-ic_security_of_funds"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="about/security-of-funds.html"><?php translate('Security of Funds'); ?></a></div>
                                <a href="about/security-of-funds.html"> </a>
                            </li>
                            <li><a href="account.html"><span class="ico-ic_accounts_funding"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="account.html"><?php translate('Accounts & Funding '); ?></a></div>
                                <a href="account.html"> </a>
                            </li>
                            <li><a href="account/bonus.html"><span class="ico-ic_bonus_programs"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="account/bonus.html"><?php translate('Bonus Programs'); ?></a></div>
                                <a href="account/bonus.html"> </a>
                            </li>
                            <li><a href="investor-relations.html"><span class="ico-ic_partnership_programs"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="investor-relations.html"><?php translate('Partnership Programs'); ?></a></div>
                                <a href="investor-relations.html"> </a>
                            </li>
                            <li><a href="partnership/introducing-brokers.html#introducing-brokers-form"><span class="ico-ic_become_an_ib"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="partnership/introducing-brokers.html#introducing-brokers-form"><?php translate('Become an IB'); ?></a></div>
                                <a href="partnership/introducing-brokers.html#introducing-brokers-form"> </a>
                            </li>
                            <li><a href="about/milestones.html"><span class="ico-ic_our_milestones"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="about/milestones.html"><?php translate('Our Milestones'); ?></a></div>
                                <a href="about/milestones.html"> </a>
                            </li>
                            <li><a href="index.html#" onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-264a9d99fba7749106dd85a3-=""><span class="ico-ic_live_chat_support"></span> </a>
                                <div class="mex-content mex-clamp-3"><a href="index.html#" onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-264a9d99fba7749106dd85a3-=""><?php translate('Live Chat Support'); ?></a></div>
                                <a href="index.html#" onclick="if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-264a9d99fba7749106dd85a3-=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_from_root('website_template/page_footer.php'); ?>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+12139924748">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#2a49596a475f465e43484b44414c5204494547">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-264a9d99fba7749106dd85a3-="">
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
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OTowOA==' />
                    <input type='hidden' name='token' value='$2y$10$dBBwxVugD8fCwE3iLlQVLedxfPU3AuhivciURKOUFPq5z.h5Q0mIu' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:04] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:05] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:07] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:08] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/about?web=true' />
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
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-264a9d99fba7749106dd85a3-="">SEND</button>
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
    <script type="264a9d99fba7749106dd85a3-text/javascript">
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
    <script src="public_files/static_js/lang_data/en.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script src="public_files/static_js/jquery.dataTables.min.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script src="public_files/static_js/lazysizes.min.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script src="public_files/static_js/jquery.validate.min.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script src="public_files/static_js/intlTelInput.min.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script src="public_files/static_js/app.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script type="264a9d99fba7749106dd85a3-text/javascript" async>
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
    <script type="264a9d99fba7749106dd85a3-text/javascript">
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
    <script type="264a9d99fba7749106dd85a3-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="264a9d99fba7749106dd85a3-text/javascript">
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
    <script src="/multibankfx/public_files/static_js/swiper-4.3.5.min.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/app_home.js" type="264a9d99fba7749106dd85a3-text/javascript"></script>

    <script type="264a9d99fba7749106dd85a3-text/javascript">
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

        #swiper-container-1 .swiper-slide .min1 {
            height: 800px;
        }

        @media (max-width: 1440px) and (min-width: 992px) {
            #swiper-container-1 .swiper-slide .min1 {
                height: 710px;
            }
        }

        @media (max-width: 1280px) and (min-width: 992px) {
            #swiper-container-1 .swiper-slide .min1 {
                height: 650px;
            }
        }
    </style>

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="264a9d99fba7749106dd85a3-|49" defer=""></script>
    <script type="785e4eb336bec21b04c19cf7-text/javascript">
        $(document).ready(function() {
            debugger
            var index_swiper = new Swiper('#swiper-container-1', {
                navigation: {
                    nextEl: '#swiper-container-1 .swiper-button-next',
                    prevEl: '#swiper-container-lp .swiper-button-prev',
                },
                pagination: {
                    clickable: true,
                    el: '#swiper-container-1 .swiper-pagination',
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
        });
    </script>
</body>

</html>