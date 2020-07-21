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
    <style>
    .social-trading-banner > img, .st-section > img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .st-banner-btn-container {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .st-banner-text-container > div {
        padding-left: 55%;
        padding-bottom: 10%;
    }

    .st-top-title {
        display: block;
        width: 70%;
        height: auto;
        margin-bottom: 30px;
    }

    .st-top-subtitle {
        width: 70%;
        height: auto;
    }

    .st-banner-text-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;

        height: 100%;

        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .st_benefit_icon {
        position: absolute;
        top: -60px;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 120px;

        padding: 20px;
        background-color: #FFF;
        border-radius: 50%;
    }

    .st_benefit_card img {
        width: 100%;
        height: 100%;
    }

    .st_benefit_card.benefit {
        box-shadow: 5px 5px 3px rgba(0,0,0,0.12), 0 0px 2px rgba(0,0,0,0.24);
    }

    .st_benefit_card.invest {
        padding: 0;
    }

    .st_benefit_card.invest img {
        width: 100%;
        height: auto;
    }

    .fi_copy_trade {
        height: 100%;
        background-color: #fff;
    }

    .st_benefit_card.benefit, .fi_copy_trade {
        box-shadow: 5px 5px 3px rgba(0,0,0,0.12), 0 0 2px rgba(0,0,0,0.24);
    }

    .st_benefit_container {
    }

    .fi_copy_trade_card {
        padding: 30px 15px 15px 15px;
        background-color: #FFF;
    }

    .st_benefit_card {
        padding: 60px 15px 15px 15px;
        background-color: #FFF;
        height: 100%;
    }

    .st-la-btn {
        background-color: #ce0b0b;
        border: none;
        color: #fff;
        border-radius: 50px !important;
    }

    .st-la-btn:hover {
        background-color: #ce0b0b;
        border: none;
        color: #fff;
    }

    .st-shadow-box {
        box-shadow: 0 0 5px 2px rgba(0,0,0,0.4);
    }

    .btn-st-blue, .btn-st-green, .btn-st-red, .btn-st-005190,.btn-st-006AD0, .btn-st-1ba6df {
        padding: 20px 20px;
        margin-right: 10px;
        margin-left: 10px;
        margin-bottom: 20px;
        text-transform: uppercase;
        min-width: 150px;
        line-height: 14px;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 0;
        text-align: center;
    }

    .btn-st-blue {
        background: #2643AF;
        color: #fff;
        border: 2px solid #2643AF;
    }

    .btn-st-green {
         background: #1dba2f;
         color: #fff;
         border: 2px solid #1dba2f;
    }

    .btn-st-red {
        background: #ce0b0b;
        color: #fff;
        border: 2px solid #1dba2f;
    }

    .btn-st-blue.transparent {
        background: rgba(38,67,175, 0.6);
        border: none;
    }

    .btn-st-green.transparent {
        background: rgba(29,186,47, 0.6);
        border: none;
    }

    .btn-st-red.transparent {
        background: rgba(206,11,11, 0.6);
        border: none;
    }

    .btn-st-005190 {
        background: #005190;
        color: #fff;
        border: 2px solid #005190;
    }
    
    .btn-st-005190:hover {
        background: #007fbf;
        color: #fff;
        border: 2px solid #007fbf;
    }
    

    .btn-st-006AD0 {
        background: #006AD0;
        color: #fff;
        border: 2px solid #006AD0;
    }
    
    .btn-st-006AD0:hover {
        background: #0690ef;
        color: #fff;
        border: 2px solid #0690ef;
    }
    

    .btn-st-1ba6df {
        background: #1BA6DF;
        color: #fff;
        border: 2px solid #1BA6DF;
    }
    
    .btn-st-1ba6df:hover{
        background: #0A7DA5;
        color: #fff;
        border: 2px solid #0A7DA5;
    }    
    

    .btn-st-green:hover, .btn-st-blue:hover {
        color: #fff;
    }

    .btn-st-px-60 {
        padding-left: 60px !important;
        padding-right: 60px !important;
    }

    .text-005190 {
        color: #005190;
    }

    .text-1ba6df {
        color: #1BA6DF;
    }

    .mex-list-icon-check li:before {
        background: #1dba2f !important;
    }

    .st-h2 {
        font-size: 32px !important;
        line-height: 48px !important;
    }

    .mex-list-icon-check.st-list li {
        font-size: 16px !important;
    }

    .st-benefit-portrait-img {
        height: 600px;
        width: 100%;
        object-fit: cover;
    }

    .st-h4 {
        font-weight: 400;
        font-size: 16px;
    }

    .st-h2 {
        font-size: 36px !important;
        line-height: 44px !important;
    }

    .st-benefit-landscape-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .st-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .st-col-xs-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .st-grow-wealth-list li{
        margin-bottom: 10px;
    }

    .fa-ul {
        margin-left: 30px !important;
    }

    .st-table-element {
        background-color: #F3F4F6;
    }

    .st-table-element:hover {
        background-color: #07AA50;
        color: #fff;
    }

    .st-table-text {
        font-weight: 400;
    }

    .st-slide-header {
        position: relative;
        background-color: #006ACE;
        cursor: pointer;
    }

    .st-slide-header::after {
            position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    font-size: 40px;
    content: "\e64b";
    font-family: 'themify';
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    transition-duration: 0.3s;

    }

    .st-slide-content {
        background-color: #F7F7F7;
        display: none;
    }

    .st-nav-content {
        border: 1px solid #01518F
    }

    .st-nav.nav-tabs {
        border-bottom: none;
        margin-bottom: 1px;
    }

    .st-nav.nav-tabs .nav-link {
        border-radius: 0 !important;
        border-color: transparent !important;
        background-color: #EAE9E7;
        color: #575757;
    }

    .st-nav.nav-tabs .nav-link.active {
        background-color: #045493;
        color: #ffff;
    }

    .st-nav-panel {
        display: none;
    }

    .st-nav-panel.active {
         display: block;
    }

   
    @media (max-width: 1199px) {
        .st-mb-xl-100 {
            margin-bottom: 100px !important;
        }

        .st-benefit-bg {
            height: 100% !important;
            object-fit: cover;
        }
    }

    
</style>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNJQJTN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <section class="page-top-banner p-0">
        <div class="banner_overlay"></div>
        <img class="mex-img-cover" src="public_files/images/social_trading/social_trading_t_banner.jpg" alt="Trade Forex" />
        <div class="st-banner-text-container">
            <div>
                <div class="slider-title">
                    <h2>BOOST<br /><span class="silder-title-bold">YOUR PROFITS</span><br /><span class="silder-title-uptext">WITH</span> <span class="silder-title-bold">SOCIAL
                            TRADING</span></h2>
                </div>
                <div class="slider-desc">INVEST SMARTER- COPY THE TRADES OF CONSISTENTLY PROFITABLE TRADERS OR SCALE
                    YOUR INCOME BY EARNING FEES FROM INVESTORS WHO COPY YOUR ACCOUNT</div>
                <div class="slider-icons">
                    <div class="slider-icon"><a href="social-trading/trader.php"><img src="public_files/images/social_trading/icon_investor.png"><br />TRADER >></a></div>
                    <div class="slider-icon"><a href="social-trading/investor.php"><img src="public_files/images/social_trading/icon_signal_provider.png"><br />INVESTOR >></a>
                    </div>
                    <div class="slider-icon"><a href="social-trading/faq.php"><img src="public_files/images/social_trading/icon_faq.png"><br />FAQ >></a></div>
                    <div class="slider-icon"><a href="social-trading/leaderboard.php"><img src="public_files/images/social_trading/icon_leader_board.png"><br />LEADERBOARD >></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-banner-btn-container">
            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                <a href="https://invest.multibankfx.com" class="btn-st-blue btn-banner transparent">Join As Signal
                    Provider</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                <a href="http://invest.multibankfx.com" class="btn-st-green btn-banner transparent text-fff">Join As
                    Investor</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                <a href="social-trading/leaderboard.php" class="btn-st-red btn-banner transparent text-fff">Leaderboard</a>
            </div>
        </div>
    </section>
    <section class="flex-center">
        <img class="mex-img-cover" src="public_files/images/platforms/download_center/download_center_mobile_trader_banner.jpg" alt=" MEX Mobile Trader">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 ">
                    <div class="col-sm-12 ">
                        <div class="mex-h2 text-005190 mex-m-b-20 text-left">
                            Download MT4 Trading App
                        </div>
                        <div class="row ">
                            <a class="col-5 d-block" href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4"><img class="w-100" src="public_files/images/platforms/download_center/download_center_mobile_google_play.png" alt="Get it on Google Play"></a>
                            <a class="col-5 d-block" href="https://itunes.apple.com/us/app/metatrader-4/id496212596"><img class="w-100" src="public_files/images/platforms/download_center/download_center_mobile_app_store.png" alt="Doenload in the App Store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="st-section">
        <img src="public_files/images/social_trading/st_earn_money_bg.jpg" alt="" />
        <div class="container">
            <div class="mex-h2 text-005190 mex-m-b-20 text-center">
                How to Earn Money through Social Trading as a Trader
            </div>
            <div class="mex-m-b-50 row">
                <div class="mex-m-b-20 col-4">
                    <img src="public_files/images/social_trading/st_earn_money_step1.png" alt="" class="col-3-step" />
                    <div class="text-left text-005190 mex-h3 mex-m-t-20">Open A Master Account</div>
                    <div class="">Become a Signal Provider</div>
                </div>
                <div class="mex-m-b-20 col-4">
                    <img src="public_files/images/social_trading/st_earn_money_step2.png" alt="" class="col-3-step" />
                    <div class="text-left text-005190 mex-h3 mex-m-t-20">Performance Ranking</div>
                    <div class="">Share your successful trading performance with the public</div>
                </div>
                <div class="mex-m-b-20 col-4">
                    <img src="public_files/images/social_trading/st_earn_money_step3.png" alt="" class="col-3-step" />
                    <div class="text-left text-005190 mex-h3 mex-m-t-20">Gain Subscribers</div>
                    <div class="">Get Investors to copy your trades. The more Investors subscribing to your Master
                        Account, the more you earn!</div>
                </div>
            </div>

        </div>
    </section>
    <section class="st-section">
        <img style="height: 50%;" class="mex-img-cover st-benefit-bg" src="public_files/images/social_trading/st_benefit_bg.jpg" alt="Social Trading">
        <div class="container text-center">
            <div class="mex-h2 text-fff text-center">
                Benefits of MultiBank Social Trading
            </div>
            <div class="row mex-m-t-120 mex-m-b-10">
                <div class="col-12 col-sm-6 col-xl-3 st_benefit_container st-mb-xl-100">
                    <div class="st_benefit_card benefit">
                        <div class="st_benefit_icon"><img src="public_files/images/social_trading/st_benefit_icon1.png" alt="Professional" /></div>
                        <p class="text-left text-005190 mex-h3">Professional</p>
                        <p class="text-left">Professional global brokerage operating No Dealing Desk (NDD) execution on
                            aggregated executable prices, offering the lowest spreads in the industry</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 st_benefit_container st-mb-xl-100">
                    <div class="st_benefit_card benefit">
                        <div class="st_benefit_icon"><img src="public_files/images/social_trading/st_benefit_icon2.png" alt="Fast" /></div>
                        <p class="text-left text-005190 mex-h3">Fast</p>
                        <p class="text-left">Simple and copy function to copy transactions within a few milliseconds. We
                            have a complete network of servers spread across the major interbank liquidity centers such
                            as OneZero and Equinix</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 st_benefit_container st-mb-xl-100">
                    <div class="st_benefit_card benefit">
                        <div class="st_benefit_icon"><img src="public_files/images/social_trading/st_benefit_icon3.png" alt="Profitable" /></div>
                        <p class="text-left text-005190 mex-h3">Profitable</p>
                        <p class="text-left">We offer the best conditions to money managers and our 320,000 customers,
                            who can invest with ease in successful strategies and make significant profits</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 st_benefit_container st-mb-xl-100">
                    <div class="st_benefit_card benefit">
                        <div class="st_benefit_icon"><img src="public_files/images/social_trading/st_benefit_icon4.png" alt="Automatic" /></div>
                        <p class="text-left text-005190 mex-h3">Automatic</p>
                        <p class="text-left">When Investors subscribe to a Master Account, the investment amount will be
                            automatically calculated in proportion to equity invested</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center btn-container">
                <a href="social-trading/trader.php" class="btn-single btn-st-1ba6df text-fff ">Become A Signal
                    Provider</a>
                <a href="social-trading/investor.php" class="btn-single btn-st-006AD0 text-fff">Become An Investor</a>
            </div>
        </div>
    </section>
    <section style="background-color: #041E35">
        <div class="container">
            <div class="row mex-m-x-80">
                <div class="col-12 col-lg-6">
                    <img style="width: 90%; height: auto; margin-bottom: 50px;" src="public_files/images/social_trading/st_grow_wealth_pad.png" />
                </div>
                <div class="col-12 col-lg-6">
                    <p class="text-fff">Become a Signal Provider & Expand Your Income Stream</p>
                    <p class="text-fff mex-h2 st-h2">Increase Your Profits with No Extra Effort</p>
                    <p class="text-fff st-h4">Social trading provides successful Signal Providers with a unique
                        opportunity to trade as they normally do, while increasing earnings by receiving Payouts from
                        Investors who subscribe to their accounts.</p>
                    <ul class="text-1ba6df st-grow-wealth-list fa-ul">
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Share your trading strategies
                            with Investors</li>
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Earn a portion of profits from
                            Investor who copy your successful trades</li>
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Over 320,000 potential
                            Investors</li>
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Maximize your profits with no
                            additional effort</li>
                    </ul>
                    <div class="row mx-0"><a href="social-trading/trader.php" class="btn-st-1ba6df ml-0 text-fff">Become A Signal Provider</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="st-section" style="background-color: #EBEBEB;">
        <div class="container text-center">
            <div class="mex-h2 text-005190 text-center mex-m-b-10">
                Invest Smarter
            </div>
            <div class="mex-m-b-20">
                Follow the Success of Consistently Profitable Traders
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3 st_benefit_container mex-m-b-40">
                    <div class="st_benefit_card invest">
                        <img src="public_files/images/social_trading/st_invest1.jpg" />
                        <p class="text-left mex-p-15">It's easy, just browse our Leaderboard and look for successful
                            Signal Providers to copy.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 st_benefit_container mex-m-b-40">
                    <div class="st_benefit_card invest">
                        <img src="public_files/images/social_trading/st_invest2.jpg" />
                        <p class="text-left mex-p-15">Create your own investment portolio based on a range of Signal
                            Providers you'd like to copy.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 st_benefit_container mex-m-b-40">
                    <div class="st_benefit_card invest">
                        <img src="public_files/images/social_trading/st_invest3.jpg" />
                        <p class="text-left mex-p-15">Simply subscribe to the Master Accounts of Signal Providers you're
                            interested in following, and you will automatically start copying their new positions in
                            your trading account</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 st_benefit_container mex-m-b-40">
                    <div class="st_benefit_card invest">
                        <img src="public_files/images/social_trading/st_invest4.jpg" />
                        <p class="text-left mex-p-10 mex-p-15">Through your account panel, unsubscribe from any Master
                            Account with a simply click, and establish risk protection levels and access many more
                            features</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="social-trading/investor.php" class="btn-st-006AD0 text-fff">BECOME AN INVESTOR</a>
            </div>
        </div>
    </section>
    <section style="background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-8">
                    <p class="text-005190 mex-h2 st-h2">Improve Your Trading Knowledge Through Social Trading</p>
                    <p class="st-h4">Signal Providers already have a proven track record of stellar trading performance.
                        Copy their trades and leave the professional trading decisions to them.</p>
                    <ul class="text-005190 st-grow-wealth-list fa-ul">
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Copy profitable trade from the
                            best performing traders in the industry</li>
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Automatically copy signals from
                            the most profitable accounts</li>
                        <li><span class="fa-li"><i class="fa fa-check-circle"></i></span>Learn how Signal Providers
                            trade with success</li>
                    </ul>
                    <div class="row mx-0"><a href="social-trading/investor.php" class="btn-st-006AD0 text-fff ml-0">Become An Investor</a></div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4 text-right">
                    <img class="w-100" src="public_files/images/social_trading/st_improve_pc.png" />
                </div>
            </div>
        </div>
    </section>
    <section class="st-section">
        <img style="object-fit: cover;" src="public_files/images/social_trading/st_earn_money_bg.jpg" alt="" />
        <div class="container text-center">
            <div class="mex-h2 mex-m-b-20 text-005190">Still Have Questions About MultiBank Social Trading?</div>
            <div class="">Check out our <a href="social-trading/faq.php" class="text-005190">FAQ</a> or <a class="text-005190">Request</a> a Call Back Now!</div>
        </div>
    </section>
    <style>
        .btn-banner {
            width: 100%;
            display: block;
            margin: 0 auto 5%;
        }

        .slider-title h2 {
            color: #fff;
            font-size: 36px;
            font-style: "Oswald", Helvetica, Arial, sans-serif;
            letter-spacing: .011em;
            line-height: 47px;
        }

        .slider-title .silder-title-bold {
            font-size: 56px;
            font-weight: bold;
        }

        .slider-title .silder-title-uptext {
            display: inline-block;
            vertical-align: top;
            line-height: 30px;
            padding-left: 38px;
        }

        .slider-desc {
            color: #fff;
            font-size: 16px;
            display: block;
            max-width: 480px;
        }

        .slider-icons {
            margin: 10px 0 0 -15px;
        }

        .slider-icons a {
            color: #fff;
            font-size: 18px;
            letter-spacing: -1px;
        }

        .slider-icons .slider-icon {
            display: inline-block;
            text-align: center;
            width: 120px;
        }

        .mex-img-cover {
            min-height: 380px
        }

        .col-3-step {
            width: 100%;
            height: auto;
            max-width: 420px;
        }

        .btn-container {
            margin-top: 40px;
        }

        .btn-container .btn-single {
            min-width: 300px;
        }

        @media only screen and (max-width: 1200px) {
            .slider-title h2 {
                font-size: 24px;
                line-height: 35px;
            }

            .slider-title .silder-title-bold {
                font-size: 44px;
            }

            .slider-desc {
                font-size: 14px;
                max-width: 390px;
                line-height: 22px;
            }

            .slider-icons img {
                max-width: 66px;
                height: auto;
            }

            .slider-icons a {
                font-size: 16px;
            }

            .slider-icons .slider-icon {
                width: 105px;
            }

            .btn-banner {
                font-size: 16px;
                padding: 15px 15px;
            }

            .btn-container {
                margin-top: -40px;
            }
        }

        @media only screen and (max-width: 1024px) {
            .btn-banner {
                font-size: 14px;
                padding: 10px 10px;
            }

            .slider-icons img {
                max-width: 55px;
            }

            .slider-icons a {
                font-size: 14px;
            }

            .slider-icons .slider-icon {
                width: 95px;
            }
        }

        @media only screen and (max-width: 860px) {
            .slider-title h2 {
                font-size: 18px;
                line-height: 29px;
                margin-left: -20px;
            }

            .slider-title .silder-title-bold {
                font-size: 38px;
            }

            .slider-desc {
                font-size: 12px;
                max-width: 340px;
                margin-left: -20px;
                line-height: 18px;
            }

            .btn-banner {
                font-size: 12px;
                padding: 8px 8px;
            }

            .slider-icons {
                margin-left: -30px;
            }

            .slider-icons img {
                max-width: 45px;
            }

            .slider-icons a {
                font-size: 13px;
            }

            .slider-icons .slider-icon {
                width: 86px;
            }

        }

        @media only screen and (max-width: 768px) {
            .slider-title h2 {
                font-size: 15px;
                line-height: 26px;
                margin-left: -60px;
            }

            .slider-title .silder-title-bold {
                font-size: 35px;
            }

            .slider-icons {
                margin-left: -70px;
            }

            .slider-desc {
                margin-left: -60px;
                max-width: 400px;
            }
        }

        @media only screen and (max-width: 680px) {
            .slider-title h2 {
                margin-left: -80px;
            }

            .slider-desc {
                margin-left: -80px;
            }

            .slider-icons {
                margin-left: -90px;
            }

            .slider-icons img {
                max-width: 40px;
            }

            .slider-icons a {
                font-size: 12px;
            }

            .slider-icons .slider-icon {
                width: 80px;
            }
        }

        @media only screen and (max-width: 576px) {
            .slider-title h2 {
                margin-left: -240px;
                margin-top: -40px;
            }

            .slider-icons {
                margin-left: -250px;
            }

            .slider-desc {
                margin-left: -240px;
                max-width: 460px;
            }

            .btn-banner {
                margin: 0 0 5px 0;
                width: 100%;
            }

            .banner_overlay {
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                background-color: rgba(0, 0, 0, 0.6);
            }

        }
    </style>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript">
        /*$(function() {
    $('.nav-link').click(function() {
        $('.nav-link.active').removeClass('active');
        $(this).addClass('active');
        
        $('.st-nav-panel.active').removeClass('active');
        $('#st_nav_panel_' + $(this).data('index')).addClass('active');
    });
})*/
    </script>
    <?php include_from_root('website_template/page_footer.php'); ?>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+12139924748">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#e08393a08d958c948982818e8b8698ce838f8d">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-bdaa9b02232eaa47ac948bf3-="">
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
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OToyOQ==' />
                    <input type='hidden' name='token' value='$2y$10$A0W2Y38.KYFi.mabW/RahO2eK2r/XQBm/f1p/h0BcoxXJvZAp4.Xa' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:27] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:28] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:29] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:30] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/social-trading?web=true' />
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
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-bdaa9b02232eaa47ac948bf3-="">SEND</button>
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
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript">
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
    <script src="public_files/static_js/lang_data/en.js" type="bdaa9b02232eaa47ac948bf3-text/javascript"></script>
    <script src="public_files/static_js/jquery.dataTables.min.js" type="bdaa9b02232eaa47ac948bf3-text/javascript"></script>
    <script src="public_files/static_js/lazysizes.min.js" type="bdaa9b02232eaa47ac948bf3-text/javascript"></script>
    <script src="public_files/static_js/jquery.validate.min.js" type="bdaa9b02232eaa47ac948bf3-text/javascript"></script>
    <script src="public_files/static_js/intlTelInput.min.js" type="bdaa9b02232eaa47ac948bf3-text/javascript"></script>
    <script src="public_files/static_js/app.js" type="bdaa9b02232eaa47ac948bf3-text/javascript"></script>
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript" async>
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
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript">
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
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript">
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
    <script type="bdaa9b02232eaa47ac948bf3-text/javascript">
        $(function() {
            $('.st-slide-header').click(function() {
                $(this).next().slideToggle("slow");
            });
        });
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bdaa9b02232eaa47ac948bf3-|49" defer=""></script>
</body>

</html>