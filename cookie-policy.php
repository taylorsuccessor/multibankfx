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
    <section class="table-background other-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1 class="mex-h1 text-1e32a3 mex-m-b-40 text-center"><?php translate('Cookie Policy'); ?></h1>
                    <div class="mex-content mex-m-b-30">
                        <p class="mex-m-b-30"><?php translate('MultiBank Group is committed to protecting your privacy. As such, we are here to share with you all relevant information on how to manage your cookies.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mex-h3 mex-m-b-15"><?php translate('What are cookies?'); ?></div>
                    <div class="mex-content mex-m-b-30">
                        <p class="mex-m-b-30"><?php translate('Cookies are small data files. When you visit a website, the website sends the cookie to your computer. Your computer stores it in a file located inside your web browser.
                        Cookies do not transfer viruses or malware to your computer. Because the data in a cookie does not change when it travels back and forth, it has no way to affect how your computer runs, but they act more like logs (i.e. they record user activity and remember stateful information) and they get updated every time you visit a website.<br>
                            We may obtain information about you by accessing cookies, sent by our website. Different types of cookies keep track of different activities. For example, session cookies are used only when a person is actively navigating a website. Once you leave the website, the session cookie disappears. For a more detailed list of cookies we use, please read the relevant section below.'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mex-h3 mex-m-b-15"><?php translate('What types of cookies we use'); ?></div>
                    <div class="mex-content mex-m-b-30">
                        <p class="mex-m-b-30"><strong><?php translate('Functional cookies -'); ?> </strong><?php translate('These cookies are essential for the running of our website. Without these cookies our websites would not function properly. These are saved temporarily as login information and expire once the browser is closed.'); ?></p>
                        <p class="mex-m-b-30"><strong><?php translate('Analytical cookies -'); ?> </strong><?php translate('The information provided by analytical cookies allows us to analyze patterns of visitor behavior and we use that information to enhance the overall experience or identify areas of the website which may require maintenance. The information is anonymous (i.e. it cannot be used to identify you and does not contain personal information such as your name and email address) and it is only used for statistical purposes. Behavioral cookies are similar to analytical and remember that you have visited a website and use that information to provide you with content which is tailored to your interests.'); ?></p>
                        <p class="mex-m-b-30"><strong><?php translate('Third Party cookies -'); ?> </strong><?php translate('These cookies are used by third parties and mostly by social media websites like Google+, Facebook or YouTube. Third Party cookies allow us to offer you easy ways to share our content throughout your social media and also present you with the videos we post on YouTube. You can disable the use of these cookies through your browser’s privacy settings but please do note that this will also disable all the functions described above.'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mex-h3 mex-m-b-15"><?php translate('Full list of cookies we use'); ?></div>
                    <div class="mex-content mex-m-b-30">
                        <div class="table-responsive table-content table-incomplete">
                            <table class="table table-striped mex-table mex-has-type table-easy">
                                <thead>
                                    <tr>
                                        <th class="uppercase th-width-25">Title</th>
                                        <th class="uppercase th-width-25">Type of Cookie</th>
                                        <th class="uppercase th-width-25">Purpose</th>
                                        <th class="uppercase th-width-25">Duration</th>
                                    </tr>
                                </thead>
                                <tbody class="table-tbody">
                                    <tr>
                                        <td>
                                            <p>_lc.visitor_ld.g3413162_2.group2</p>
                                            <p>lc_window_State.group3</p>
                                            <p>_lc-visitor_id3413162</p>
                                            <p>lc_window_state.group2</p>
                                            <p>autoinvite_callback.group2</p>
                                            <p>lc_sso3413162</p>
                                            <p>autoinvite_callback.group3</p>
                                            <p>_lc.visitor_id.g3413162.group3</p>
                                        </td>
                                        <td>Strictly necessary</td>
                                        <td>These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in or filling in forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>_ga</p>
                                            <p>_gid</p>
                                        </td>
                                        <td>Strictly necessary</td>
                                        <td>These cookies are necessary for the website to function and cannot be switched off in our systems. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in or filling in forms. You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>_hjClosedSurveyInvites</td>
                                        <td>Analytical/Performance</td>
                                        <td>Hotjar cookie. This cookie is set once a visitor interacts with a Survey invitation modal popup. It is used to ensure that the same invite does not re-appear if it has already been shown.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>_hjDonePolls</td>
                                        <td>Analytical/Performance</td>
                                        <td>Hotjar cookie. This cookie is set once a visitor completes a poll using the Feedback Poll widget. It is used to ensure that the same poll does not re-appear if it has already been filled in.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>_hjMinimizedPolls</td>
                                        <td>Analytical/Performance</td>
                                        <td>Hotjar cookie. This cookie is set once a visitor minimizes a Feedback Poll widget. It is used to ensure that the widget stays minimizes when the visitor navigates through your site.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>_hjDoneTestersWidgets</td>
                                        <td>Analytical/Performance</td>
                                        <td>Hotjar cookie. This cookie is set once a visitor submits their information in the Recruit User Testers widget. It is used to ensure that the same form does not re-appear if it has already been filled in.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>_hjMinimizedTestersWidgets</td>
                                        <td>Analytical/Performance</td>
                                        <td>Hotjar cookie. This cookie is set once a visitor minimizes a Recruit User Testers widget. It is used to ensure that the widget stays minimizes when the visitor navigates through your site. .</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>_hjIncludedInSample</td>
                                        <td>Analytical/Performance</td>
                                        <td>Hotjar cookie. This session cookie is set to let Hotjar know whether that visitor is included in the sample which is used to generate funnels.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>__lc.visitor_id.(id_of_the_visitor)</td>
                                        <td>Strictly necessary</td>
                                        <td>ID of the visitor</td>
                                        <td>32 months</td>
                                    </tr>
                                    <tr>
                                        <td>__lc_vv - LiveChat version -</td>
                                        <td>Strictly necessary</td>
                                        <td>Used during chatting session</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>__livechat</td>
                                        <td>Analytical/Performance</td>
                                        <td>responsible for many things required for LiveChat to work properly, for example - last operator</td>
                                        <td>3 years</td>
                                    </tr>
                                    <tr>
                                        <td>__livechat_lastvisit</td>
                                        <td>Analytical/Performance</td>
                                        <td>timestamp of last</td>
                                        <td>3 years</td>
                                    </tr>
                                    <tr>
                                        <td>__livechat_chat -</td>
                                        <td>Analytical/Performance</td>
                                        <td>id of the ongoing chat .</td>
                                        <td>32 months</td>
                                    </tr>
                                    <tr>
                                        <td>chat_running</td>
                                        <td>Analytical/Performance</td>
                                        <td>used to check if chat is pending</td>
                                        <td>1 day</td>
                                    </tr>
                                    <tr>
                                        <td>hide_eye_catcher</td>
                                        <td>Strictly necessary</td>
                                        <td>it is connected to LiveChat eye catcher - during chatting session</td>
                                        <td>on browser close</td>
                                    </tr>
                                    <tr>
                                        <td>c.(license_id).secret_id</td>
                                        <td>Strictly necessary</td>
                                        <td>it is used by communication protocol</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>secret_token_(license_id)</td>
                                        <td>Functionality</td>
                                        <td>it is used by communication protocol</td>
                                        <td>24 hour</td>
                                    </tr>
                                    <tr>
                                        <td>lc_invitation_opened</td>
                                        <td>Analytical/Performance</td>
                                        <td>keeps state of the LiveChat greeting</td>
                                        <td>session</td>
                                    </tr>
                                    <tr>
                                        <td>lc_sso(license_id)</td>
                                        <td>Strictly necessary</td>
                                        <td>it is used by communication protocol</td>
                                        <td>3 years</td>
                                    </tr>
                                    <tr>
                                        <td>lc_window_state</td>
                                        <td>Strictly necessary</td>
                                        <td>it tells if window is minimised or not - during chatting session main_window_timestamp, main_window_timestamp_0 - used to track app state between different tabs</td>
                                        <td>session</td>
                                    </tr>
                                    <tr>
                                        <td>message_text</td>
                                        <td>Analytical/Performance</td>
                                        <td>contains text typed by visitor before message is sent.</td>
                                        <td>session</td>
                                    </tr>
                                    <tr>
                                        <td>recent_window</td>
                                        <td>Analytical/Performance</td>
                                        <td>used to track app state between different tabs</td>
                                        <td>session</td>
                                    </tr>
                                    <tr>
                                        <td>autoinvite_callback</td>
                                        <td>Analytical/Performance</td>
                                        <td>this cookie is used for proper handling JS Api and callback on_message</td>
                                        <td>during chatting session</td>
                                    </tr>
                                    <tr>
                                        <td>Notification[status ping]</td>
                                        <td>Analytical/Performance</td>
                                        <td>timestamp of the last ping, information about agent availability and state of the visitor</td>
                                        <td>session</td>
                                    </tr>
                                    <tr>
                                        <td>_gid</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to determine if the user has declined to be redirected to their appropriate entity.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>_gat</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to throttle request rate. If Google Analytics is deployed via Google Tag Manager, this cookie will be named _dc_gtm_(property-id).</td>
                                        <td>1 minute</td>
                                    </tr>
                                    <tr>
                                        <td>_ga</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to distinguish users.</td>
                                        <td>2 years</td>
                                    </tr>
                                    <tr>
                                        <td>_gid</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to distinguish users.</td>
                                        <td>24 hours</td>
                                    </tr>
                                    <tr>
                                        <td>bcookie,<br>
                                            bscookie</td>
                                        <td>Analytical/Performance</td>
                                        <td>Share buttons and ad tags</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>LIDC</td>
                                        <td>Analytical/Performance</td>
                                        <td>Share buttons and ad tags</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>BizoID</td>
                                        <td>Analytical/Performance</td>
                                        <td>LinkedIn insights and ads tags</td>
                                        <td>6 months</td>
                                    </tr>
                                    <tr>
                                        <td>BizoData</td>
                                        <td>Analytical/Performance</td>
                                        <td>LinkedIn insights and ads tags</td>
                                        <td>6 months</td>
                                    </tr>
                                    <tr>
                                        <td>.AspNet.ApplicationCookie</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to maintain status for website application.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>.ASPXAUTH</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to maintain status for website application.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>__utma</td>
                                        <td>Analytical/Performance</td>
                                        <td>This is one of the four main cookies set by the Google Analytics service which enables website owners to track visitor behaviour and measure site performance. This cookie distinguishes between users and sessions. It is used to calculate new and returning visitor statistics.</td>
                                        <td>2 years</td>
                                    </tr>
                                    <tr>
                                        <td>__utmz</td>
                                        <td>Analytical/Performance</td>
                                        <td>Stores the traffic source or campaign that explains how the user reached the site.</td>
                                        <td>18 months</td>
                                    </tr>
                                    <tr>
                                        <td>ASP.NET_SessionId</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to maintain status for website application.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>BTag</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to identify the partner who referred a client to us.</td>
                                        <td>30 days</td>
                                    </tr>
                                    <tr>
                                        <td>ForexNetworkPool_15-sitecore_SCD_pool_443</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to link user to specific network pool.</td>
                                        <td>24 hours</td>
                                    </tr>
                                    <tr>
                                        <td>cookieAlert</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to remember that a user clicked on the cookie banner.</td>
                                        <td>20 years</td>
                                    </tr>
                                    <tr>
                                        <td>consentCookieAlert</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to determine if consent was given from cookie banner and deploy marketing cookies to show relevant services on third party websites.</td>
                                        <td>20 years</td>
                                    </tr>
                                    <tr>
                                        <td>forex_en-uk#lang</td>
                                        <td>Strictly necessary</td>
                                        <td>Used to pre-set the user’s language</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>optimizelyBuckets</td>
                                        <td>Analytical/Performance</td>
                                        <td>Records the Optimizely variation that the visitor has seen for each experiment. This allows us to deliver a consistent experience on successive page loads.</td>
                                        <td>10 years</td>
                                    </tr>
                                    <tr>
                                        <td>optimizelyEndUserId</td>
                                        <td>Analytical/Performance</td>
                                        <td>Cookie set by the Optimizely website optimisation plaftform. This cookie is a unique user identifier.</td>
                                        <td>10 years</td>
                                    </tr>
                                    <tr>
                                        <td>optimizelyPendingLogEvents</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used as a cache for a visitor's actions between tracking calls.</td>
                                        <td>15 seconds</td>
                                    </tr>
                                    <tr>
                                        <td>optimizelySegments</td>
                                        <td>Analytical/Performance</td>
                                        <td>Persists the visitor's segments: browser, campaign, mobile, source type.</td>
                                        <td>10 years</td>
                                    </tr>
                                    <tr>
                                        <td>SC_ANALYTICS_GLOBAL_COOKIE</td>
                                        <td>Strictly necessary</td>
                                        <td>To identify repeat visits from a single user.</td>
                                        <td>10 years</td>
                                    </tr>
                                    <tr>
                                        <td>SC_ANALYTICS_SESSION_COOKIE</td>
                                        <td>Strictly necessary</td>
                                        <td>To identify a sequence of HTTP requests from a single user.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>sspt</td>
                                        <td>Functionality</td>
                                        <td>Used to display the user’s credentials on the confirmation page.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>tracking</td>
                                        <td>Analytical/Performance</td>
                                        <td>Identifies the marketing campaign the user clicked on and search engine if applicable.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>wsEntityLang</td>
                                        <td>Strictly necessary</td>
                                        <td>To prevent the user from being asked again, we store the value of their preferred language.</td>
                                        <td>10 years</td>
                                    </tr>
                                    <tr>
                                        <td>wsEntity</td>
                                        <td>Strictly necessary</td>
                                        <td>To prevent the user from being asked again, we store their preferred entity.</td>
                                        <td>10 years</td>
                                    </tr>
                                    <tr>
                                        <td>existing</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to identify if this is an existing client.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>isAppUser</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to identify if a user came from the mobile app to the application form.</td>
                                        <td>18 months</td>
                                    </tr>
                                    <tr>
                                        <td>myaccount</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to identify if this is a live client.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>_gat</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to throttle request rate.</td>
                                        <td>1 minute</td>
                                    </tr>
                                    <tr>
                                        <td>geoAdvise</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to determine if the user has declined to be redirected to their appropriate entity.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>__utmv</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to store visitor-level custom variable data.</td>
                                        <td>2 years</td>
                                    </tr>
                                    <tr>
                                        <td>_ga</td>
                                        <td>Analytical/Performance</td>
                                        <td>This cookie is used to distinguish unique users by assigning a randomly generated number as a client identifier. It is included in each page request in a site and used to calculate visitor, session and campaign data for the sites analytics reports.</td>
                                        <td>3 years</td>
                                    </tr>
                                    <tr>
                                        <td>_gid</td>
                                        <td>Analytical/Performance</td>
                                        <td>This cookie is used to distinguish unique users by assigning a randomly generated number as a client identifier. It is included in each page request in a site and used to calculate visitor, session and campaign data for the sites analytics reports.</td>
                                        <td>24 hours</td>
                                    </tr>
                                    <tr>
                                        <td>ADRUM_BT<br>
                                            1.ADRUM_BTa,<br>
                                            2.ADRUM_BTg,<br>
                                            3.ADRUM_BT[1-5],<br>
                                            4.ADRUM_BTs,<br>
                                            5.ADRUM_BTh</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to correlate end-user experience with the health of the backend app.</td>
                                        <td>30 seconds</td>
                                    </tr>
                                    <tr>
                                        <td>ADRUM</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to correlate end-user experience with the health of the backend app.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>formisimo-session-ids</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to recognise a user’s session.</td>
                                        <td>20 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>formisimo</td>
                                        <td>Analytical/Performance</td>
                                        <td>Used to recognise a user between pages.</td>
                                        <td>6 days</td>
                                    </tr>
                                    <tr>
                                        <td>__RequestVerificationToken</td>
                                        <td>Functionality</td>
                                        <td>This is an anti-forgery token to prevent CSRF attacks. It guarantees that the poster of the form is the one who originally got the form.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>usif</td>
                                        <td>Functionality</td>
                                        <td>Used to brand the generic login page appropriately based on previous visit, or SSO link.</td>
                                        <td>1 day</td>
                                    </tr>
                                    <tr>
                                        <td>adv</td>
                                        <td>Analytical/Performance</td>
                                        <td>The unique ID of the advertising campaign the user clicked on.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>LPSID-XXXXXX</td>
                                        <td>Functionality</td>
                                        <td>Used to distinguish user sessions.</td>
                                        <td>Session</td>
                                    </tr>
                                    <tr>
                                        <td>LPVID</td>
                                        <td>Functionality</td>
                                        <td>Identifies a browser as long as cookie is not deleted.</td>
                                        <td>28 months</td>
                                    </tr>
                                    <tr>
                                        <td>_4c_</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to populate aggregate survey information, and tie client to survey if they have an application ID.</td>
                                        <td>3 years</td>
                                    </tr>
                                    <tr>
                                        <td>_ceg.s</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to track visitor sessions.</td>
                                        <td>3 months</td>
                                    </tr>
                                    <tr>
                                        <td>_ceg.u</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to track visitors on the site.</td>
                                        <td>3 months</td>
                                    </tr>
                                    <tr>
                                        <td>_gac_UA-84589865-9</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Stores campaign information in order to provide AdWords with a more reliable way to measure the interactions customers have with our business.</td>
                                        <td>30 days</td>
                                    </tr>
                                    <tr>
                                        <td>_gcl_aw</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to store the Adwords Campaign ID.</td>
                                        <td>3 months</td>
                                    </tr>
                                    <tr>
                                        <td>_gcl_dc</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to store the DoubleClick Campaign ID.</td>
                                        <td>3 months</td>
                                    </tr>
                                    <tr>
                                        <td>_uetsid</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Session ID, which is unique per domain and is used to improve the accuracy of conversion tracking.</td>
                                        <td>30 minutes</td>
                                    </tr>
                                    <tr>
                                        <td>appid</td>
                                        <td>Targeting/Advertising</td>
                                        <td>This cookie is used to uniquely identify conversions for advertisers.</td>
                                        <td>18 months</td>
                                    </tr>
                                    <tr>
                                        <td>qval</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to identify first conversion with us.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>type</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to personalize website content based on the account type.</td>
                                        <td>1 year</td>
                                    </tr>
                                    <tr>
                                        <td>user-personalization</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used for segmentation and personalise content in Sitecore.</td>
                                        <td>1 day</td>
                                    </tr>
                                    <tr>
                                        <td>DSID</td>
                                        <td>Targeting/Advertising</td>
                                        <td>This cookie is used to link user activity when a user logs in to a Google account from multiple devices. This is a third party cookie owned by Doubleclick.net.</td>
                                        <td>1 hour</td>
                                    </tr>
                                    <tr>
                                        <td>IDE</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to personalise advertisements shown to users based on previous visits to the website. This is a third party cookie owned by Doubleclick.net.</td>
                                        <td>2 years</td>
                                    </tr>
                                    <tr>
                                        <td>ANON_ID</td>
                                        <td>Targeting/Advertising</td>
                                        <td>Used to identify a unique user for tracking. This is a third party cookie owned by TribalFusion.com.</td>
                                        <td>3 months</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mex-h3 mex-m-b-15"><?php translate('Manage Cookies'); ?></div>
                    <div class="mex-content mex-m-b-30">
                        <p class="mex-m-b-30"><?php translate('You can delete cookies any time you want by using the settings in your web browser. You can also choose to disable cookies from your web browser, but this would mean that our website and other websites may not function properly if you do this, and as a result you may not be able to sign in. Further information on deleting or controlling cookies can be found at'); ?> <a href="https://ico.org.uk/your-data-matters/online/cookies/" class="text-1e32a3"><?php translate('https://ico.org.uk/your-data-matters/online/cookies/'); ?></a> .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mex-h3 mex-m-b-15"><?php translate('Additional Information'); ?></div>
                    <div class="mex-content mex-m-b-30">
                        <p class="mex-m-b-30"><?php translate('We are committed to keeping your personal information safe. For more information on how we handle your data, please read our'); ?> <a href="privacy-policy.php" class="text-1e32a3"><?php translate('Privacy Policy'); ?></a>.<?php translate('If you have further questions please do not hesitate to'); ?><a href="contact.php" class="text-1e32a3"> <?php translate('Contact us'); ?></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_from_root('website_template/page_footer.php'); ?>
    <div class="slidebar">
        <a class="get-a-all-btn call-btn" href="tel:+12139924748">
            <span class="btn"><img alt="phone" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/phone.png" width="50" /> </span>
        </a>
        <a class="live-account-btn whatsapp-btn" href="https://api.whatsapp.com/send?phone=85222438107" target="_blank">
            <span class="btn"> <img alt="Whatsapp" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/whatsapp.png" width="50" /> </span>
        </a>
        <a class="email-us-tg demo-account-btn email-btn" href="cdn-cgi/l/email-protection.html#137060537e667f677a71727d78756b3d707c7e">
            <span class="btn"> <img alt="email" data-entity-type="" data-entity-uuid="" src="/multibankfx/public_files/images/home/sidebar_icon/email.png" width="50" /> </span>
        </a>
        <a class="ib-registration-btn chat-btn" onclick="if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; LC_API.open_chat_window();return false;" data-cf-modified-84f1c3b2d177128e10b61b91-="">
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
                    <input type='hidden' name='t_date' value='MjAyMC0wNi0yNyAwMjo0OTo1NA==' />
                    <input type='hidden' name='token' value='$2y$10$vzcJ3NjknXBO1YbJykod2.De96QLAV08a7KPG7Ksn2RrLUrdoL20u' />
                    <input type='hidden' name='source' value='[2020-06-27 02:49:03] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:48] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:52] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:53] https://www.multibankfx.com/<br/><br/>[2020-06-27 02:49:54] https://www.multibankfx.com/<br/><br/> <br/><br/> posted From: www.multibankfx.com/cookie-policy?web=true' />
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
                    </div><button type='submit' class='btn btn-mex ml-auto btn-submit' onsubmit="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-84f1c3b2d177128e10b61b91-="">SEND</button>
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
    <script type="84f1c3b2d177128e10b61b91-text/javascript">
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
    <script src="/multibankfx/public_files/static_js/lang_data/en.js" type="84f1c3b2d177128e10b61b91-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/jquery.dataTables.min.js" type="84f1c3b2d177128e10b61b91-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/lazysizes.min.js" type="84f1c3b2d177128e10b61b91-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/jquery.validate.min.js" type="84f1c3b2d177128e10b61b91-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/intlTelInput.min.js" type="84f1c3b2d177128e10b61b91-text/javascript"></script>
    <script src="/multibankfx/public_files/static_js/app.js" type="84f1c3b2d177128e10b61b91-text/javascript"></script>
    <script type="84f1c3b2d177128e10b61b91-text/javascript" async>
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
    <script type="84f1c3b2d177128e10b61b91-text/javascript">
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
    <script type="84f1c3b2d177128e10b61b91-text/javascript">
        $(function() {
            $('form:not("#demo_competition_form_2019_08_13") .sms_verif_code').val('215121');
        });
    </script>
    <script type="84f1c3b2d177128e10b61b91-text/javascript">
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
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="84f1c3b2d177128e10b61b91-|49" defer=""></script>
</body>

</html>