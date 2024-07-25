<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
}

if (isset($_GET['page'])) {
    $filename = "goban.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['page']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
            $SMALLBRAND = $target_string;
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $SMALLBRANDS = $SMALLBRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?>

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>

<?php echo $SMALLBRAND ?>

* SAMA GANTI REDIRECT LOGIN/REGISTER

*/

?>



<!doctype html>
    <html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US"  >
      <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- This is Squarespace. --><!-- GodZilla -->
    <base href="<?php echo $urlPath ?>">
    <meta charset="utf-8" />
    <title><?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024</title>
    <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dkm7pfvyz/image/upload/v1718633528/images_xkwxh6.jpg"/>
    <link rel="canonical" href="<?php echo $urlPath ?>"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="language" content="ID">
    <meta name="copyright" content="<?php echo $BRANDS ?>">
    <meta name="author" content="<?php echo $BRANDS ?>">
    <meta name="distribution" content="global">
    <meta name="publisher" content="<?php echo $BRANDS ?>">
    <meta name="geo.placename" content="DKI Jakarta">
    <meta name="geo.country" content="ID">
    <meta name="geo.region" content="ID" />
    <meta name="tgn.nation" content="Indonesia">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="<?php echo $BRANDS ?>"/>
    <meta property="og:title" content="<?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024"/>
    <meta property="og:url" content="<?php echo $urlPath ?>"/>
    <meta property="og:type" content="product"/>
    <meta property="og:description" content="Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024."/>
    <meta property="og:image" content="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg?format=1500w"/>
    <meta property="og:image:width" content="564"/>
    <meta property="og:image:height" content="713"/>
    <meta property="product:price:amount" content="5000.00"/>
    <meta property="product:price:currency" content="IDR"/>
    <meta property="product:availability" content="instock"/>
    <meta property="product:original_price:amount" content="550000.00"/>
    <meta property="product:original_price:currency" content="IDR"/>
    <meta property="product:sale_price:amount" content="5000.00"/>
    <meta property="product:sale_price:currency" content="IDR"/>
    <meta itemprop="name" content="<?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024"/>
    <meta itemprop="url" content="<?php echo $urlPath ?>"/>
    <link rel="amphtml" href="https://dompetsemua.co/page/?google=<?php echo $BRANDS ?>">
    <meta itemprop="description" content="Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024."/>
    <meta itemprop="thumbnailUrl" content="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg?format=1500w"/>
    <link rel="image_src" href="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg?format=1500w" />
    <meta itemprop="image" content="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg?format=1500w"/>
    <meta name="twitter:title" content="<?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024"/>
    <meta name="twitter:image" content="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg?format=1500w"/>
    <meta name="twitter:url" content="<?php echo $urlPath ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024."/>
    <meta name="description" content="Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024." />
    <link rel="preconnect" href="https://images.squarespace-cdn.com">
    <script type="text/javascript" src="//use.typekit.net/ik/Ptr3xYKrolF7y7mgZrcog6mHM-TE-n0Gtjxvdb27ojtfe1jJXnX1IyvhF2jtFRZLFRjtFhFyjQJX5QIhFhJ35emRwDIhFDSke6MKBcBnie8hOAikdas8ShClZWyXZAoqZAb7f6KiX6IbMg6IJMJ7f6KyX6IbMg6YJMJ7f6KpX6IbMg65JMJ7f6KKX6IbMg6sJMHbM--A1_be.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,400;0,700;1,400;1,700">
    <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
    <script type="text/javascript">SQUARESPACE_ROLLUPS = {};</script>
    <script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-12a3a2b9ab94a0ca3bac-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-12a3a2b9ab94a0ca3bac-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-15305921bb94c505cd92-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-15305921bb94c505cd92-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-0f51b06fac4ba1f7c845-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-0f51b06fac4ba1f7c845-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-2b1043d839f845cc7c4f-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-2b1043d839f845cc7c4f-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-739b9b9bd0f9ea18ade2-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-common');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-739b9b9bd0f9ea18ade2-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-3015e45d100391861b47-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-3015e45d100391861b47-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');</script>
    <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/user-account-core-9641f3bcf1fcd264d925-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/user-account-core-9641f3bcf1fcd264d925-min.en-US.js" defer ></script><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"]; })(SQUARESPACE_ROLLUPS, 'squarespace-user_account_core');</script>
    <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/user-account-core-e84acd73aa5ee3fcd4ad-min.en-US.css"><script>(function(rollups, name) { if (!rollups[name]) { rollups[name] = {}; } rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/performance-fa84e5928d85cf629ccc-min.en-US.js"]; })(SQUARESPACE_ROLLUPS, 'squarespace-performance');</script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/performance-fa84e5928d85cf629ccc-min.en-US.js" defer ></script><script data-name="static-context">Static = window.Static || {}; Static.SQUARESPACE_CONTEXT = {"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-ef358f3cb975180adb1c-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-b604ad43470705266074-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-b6bb6edaa6a7af4e12f9-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-03e6a3b9507fdaa51547-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-aa09c0412f472aab4fa1-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-100cada2cff34e79a652-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-035babf3d1a50de4f08e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-103386015c3b09bdb54d-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-91de0d6963ca96ab46a9-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-c95a9fa94c90a9867003-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-bdf9de3ed91ffd72c9bf-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-d591b0fdbfb8eaad5470-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-c293a8c043fc214e8675-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-dc6469eba74ebe7253ef-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-22914d651e1dc7538623-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-e55dfeefcb93054ea9c0-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-caac047c72def440a70a-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-6b929ca2db9b59e84af0-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-a81534e7f900ef288681-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-fecaf747726852bafec9-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-8fa36b38439cb7f7fae9-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-5babebc17dabe8b314c7-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-49479f72be6f5e9f28e6-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-97eec19858b6e6cbfa38-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-f796c9fae1c8d5876af2-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-73a1acbd5cd926ffa7fb-min.en-US.js"}},"pageType":50,"website":{"id":"6687caa249167b08ec316772","identifier":"GodZilla","websiteType":1,"contentModifiedOn":1720175638788,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{},"language":"en-US","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"<?php echo $BRANDS ?>","fullSiteTitle":"<?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024","siteDescription":"","logoImageId":"6687cbde75b5bc0bbb2c26d0","shareButtonOptions":{"4":true,"1":true,"2":true,"6":true,"7":true,"8":true,"3":true},"logoImageUrl":"//images.squarespace-cdn.com/content/v1/6687caa249167b08ec316772/63097489-bf66-4ba6-9e2b-4e600ba0126a/slot+gacor+hari+ini.png","authenticUrl":"<?php echo $urlPath ?>","internalUrl":"<?php echo $urlPath ?>","baseUrl":"<?php echo $urlPath ?>","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1720175266455,"profileUrl":"https://www.instagram.com/squarespace/","iconEnabled":true,"serviceName":"instagram-unauth"},{"serviceId":85,"addedOn":1720175266460,"profileUrl":"https://x.com/squarespace","iconEnabled":true,"serviceName":"x-formerly-twitter-unauth"},{"serviceId":60,"addedOn":1720175266468,"profileUrl":"https://www.facebook.com/squarespace/","iconEnabled":true,"serviceName":"facebook-unauth"}],"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":false},"websiteSettings":{"id":"6687caa249167b08ec316775","websiteId":"6687caa249167b08ec316772","subjects":[],"country":"ID","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":null,"termsOfService":null,"privacyPolicy":null,"expressCheckout":false,"continueShoppingLinkUrl":"<?php echo $urlPath ?>","useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"minimumOrderSubtotalEnabled":false,"minimumOrderSubtotal":{"currency":"IDR","value":"0.00"},"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":true,"signupAllowed":true}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":"","cookieBannerSavedPreferencesText":"","cookieBannerSavedPreferencesLayout":"PILL"},"websiteCloneable":false,"collection":{"title":"<?php echo $BRANDS ?>","id":"6687cb54cbd5e240531b8c4a","fullUrl":"<?php echo $urlPath ?>","type":13,"permissionType":1},"item":{"title":"<?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024","id":"6687cb57d3d8b7626fc89a7b","fullUrl":"<?php echo $urlPath ?>","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"true","header-logo-height":"100px","header-mobile-logo-max-height":"50px","header-vert-padding":"2vw","header-width":"Full","maxPageWidth":"1400px","pagePadding":"4vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"3","tweak-blog-basic-grid-image-aspect-ratio":"3:2 Standard","tweak-blog-basic-grid-image-spacing":"35px","tweak-blog-basic-grid-meta-spacing":"25px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"20px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"50","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Medium","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"30px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"20px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"20px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"30px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"15px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.1s","tweak-global-animations-animation-duration":"0.1s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"none","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"false","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"3:4 Three-Four (Vertical)","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"50%","tweak-product-basic-item-hover-action":"None","tweak-product-basic-item-image-spacing":"2vw","tweak-product-basic-item-image-zoom-factor":"2","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"5vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"1.5vw","tweak-products-mobile-columns":"1","tweak-products-text-alignment":"Left","tweak-products-width":"Full","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["pdp_subs_otp_buttons","new_stacked_index","nested_categories_migration_enabled","campaigns_new_image_layout_picker","pdp_description_add_to_cart_tweaks","background_art_onboarding","member_areas_feature","fluid_engine","visitor_react_forms","send_local_pickup_ready_email","campaigns_import_discounts","unify_edit_mode_p2","customer_accounts_email_verification","hideable_header_footer_for_courses","override_block_styles","pdp_subs_otp_visitor_site","fluid_engine_clean_up_grid_contextual_change","i18n_beta_website_locales","themes","toggle_preview_new_shortcut","crm_product_contacts_use_mfe","enable_css_variable_tweaks","commerce_etsy_product_import","hideable_header_footer_for_memberareas","commerce_subscription_renewal_notifications","commsplat_forms_visitor_profile","scripts_defer","crm_redesign_phase_1","donations_refresh_in_circle_labs","collection_typename_switching","pages_panel_v3_search_bar","commerce_paywall_renewal_notifications","marketing_landing_page","commerce_clearpay","commerce_order_status_access","campaigns_global_uc_ab","commerce_etsy_shipping_import","commerce_site_visitor_metrics","hideable_header_footer_for_videos","supports_versioned_template_assets","is_feature_gate_refresh_enabled","hideable_header_footer","nested_categories","campaigns_discount_section_in_automations","hide_header_footer_beta","campaigns_discount_section_in_blasts","customer_account_creation_recaptcha","emit_donation_events_to_census","accounting_orders_sync","campaigns_thumbnail_layout"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"impersonatedSession":false,"demoCollections":[{"collectionId":"6581fd2e9a7c875e912e097f","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0b3f","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0b9d","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0c06","deleted":true},{"collectionId":"6581fd2f9a7c875e912e0c17","deleted":true},{"collectionId":"6583607550ab220f893cb072","deleted":true},{"collectionId":"6584646636a22e1f5b865b5f","deleted":true}],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"product":{"variantAttributeNames":[],"variants":[{"id":"d95324a1-dcb0-495f-a980-bb2c32292292","sku":"SQ7665873","price":{"currencyCode":"IDR","value":55000000,"decimalValue":"550000.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":500000,"decimalValue":"5000.00","fractionalDigits":2},"onSale":true,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western Indonesia Time"}},"env":"PRODUCTION"};</script><script type="application/ld+json">{"url":"<?php echo $urlPath ?>","name":"<?php echo $BRANDS ?>","description":"","image":"//images.squarespace-cdn.com/content/v1/6687caa249167b08ec316772/63097489-bf66-4ba6-9e2b-4e600ba0126a/slot+gacor+hari+ini.png","@context":"http://schema.org","@type":"WebSite"}</script><script type="application/ld+json">{"name":"<?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024","image":"https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg?format=1500w","description":"Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024.","brand":"<?php echo $BRANDS ?>","offers":{"price":5000.00,"priceCurrency":"IDR","url":"<?php echo $urlPath ?>","availability":"InStock","sku":"SQ7665873","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/6687caa249167b08ec316772/4/5c5a519771c10ba3470d8101/6687caa249167b08ec31677a/1538/site.css"/><script>Static.COOKIE_BANNER_CAPABLE = true;</script>
    <!-- End of Squarespace Headers -->
        
          <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1718130742063-ZB0N0KP2JGXANVM5KICL/static.css">
          <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "SoftwareApplication",
              "name": "<?php echo $BRANDS ?>",
              "operatingSystem": "ANDROID",
              "applicationCategory": "GameApplication",
              "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "ratingCount": "1907461"
              },
              "offers": {
                "@type": "Offer",
                "price": "5000.00",
                "priceCurrency": "IDR"
              }
            }
            </script>    
      </head>

      <body
        id="item-6687cb57d3d8b7626fc89a7b"
        class="
          primary-button-style-solid primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-underline form-use-theme-colors form-field-style-outline form-field-shape-pill form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-outline form-field-checkbox-color-inverted form-field-checkbox-shape-rounded form-field-checkbox-layout-fit form-field-radio-type-icon form-field-radio-fill-outline form-field-radio-color-inverted form-field-radio-shape-rounded form-field-radio-layout-fit form-field-survey-fill-outline form-field-survey-color-inverted form-field-survey-shape-rounded form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-inset tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-center tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-full tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-full tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-full tweak-blog-single-column-text-alignment-left tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-large tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-product-subscription-display-radio tweak-product-basic-item-product-subscription-border-shape-square tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-34-three-four-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-description-position-below-price tweak-product-basic-item-description-position-mobile-below-add-to-cart-button tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-product-basic-item-add-to-cart-standalone tweak-product-basic-item-add-to-cart-mobile-standalone tweak-products-width-full tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-left  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-bottom tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-6687cb54cbd5e240531b8c4a collection-layout-default collection-type-products mobile-style-available sqs-seven-one
          
            show-pdp-subs-otp
          
          
            pdp_subs_otp_buttons_enabled
          
          
            show-tweak-description-position show-tweak-add-to-cart-button
          
          
            
              
              
            
          
        "
        tabindex="-1"
      >
        <div
          id="siteWrapper"
          class="clearfix site-wrapper"
        >
          
          

          

















      <header
        data-test="header"
        id="header"
        
        class="
          
            
              black-bold
            
          
          header theme-col--primary
        "
        data-section-theme="black-bold"
        data-controller="Header"
        data-current-styles="{
    &quot;layout&quot;: &quot;brandingCenter&quot;,
    &quot;action&quot;: {
    &quot;buttonText&quot;: &quot;Get Started&quot;,
    &quot;newWindow&quot;: false
    },
    &quot;showSocial&quot;: true,
    &quot;socialOptions&quot;: {
    &quot;socialBorderShape&quot;: &quot;none&quot;,
    &quot;socialBorderStyle&quot;: &quot;outline&quot;,
    &quot;socialBorderThickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 1.0
    }
    },
    &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
    &quot;cartStyle&quot;: &quot;cart&quot;,
    &quot;cartText&quot;: &quot;Cart&quot;,
    &quot;showEmptyCartState&quot;: true,
    &quot;cartOptions&quot;: {
    &quot;iconType&quot;: &quot;solid-7&quot;,
    &quot;cartBorderShape&quot;: &quot;none&quot;,
    &quot;cartBorderStyle&quot;: &quot;outline&quot;,
    &quot;cartBorderThickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 1.0
    }
    },
    &quot;showButton&quot;: false,
    &quot;showCart&quot;: true,
    &quot;showAccountLogin&quot;: false,
    &quot;headerStyle&quot;: &quot;dynamic&quot;,
    &quot;languagePicker&quot;: {
    &quot;enabled&quot;: false,
    &quot;iconEnabled&quot;: false,
    &quot;iconType&quot;: &quot;globe&quot;,
    &quot;flagShape&quot;: &quot;shiny&quot;,
    &quot;languageFlags&quot;: [ ]
    },
    &quot;mobileOptions&quot;: {
    &quot;layout&quot;: &quot;logoLeftNavRight&quot;,
    &quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
    &quot;menuIconOptions&quot;: {
    &quot;style&quot;: &quot;doubleLineHamburger&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 1.0
    }
    }
    },
    &quot;dynamicOptions&quot;: {
    &quot;border&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    }
    },
    &quot;solidOptions&quot;: {
    &quot;headerOpacity&quot;: {
    &quot;unit&quot;: &quot;%&quot;,
    &quot;value&quot;: 100.0
    },
    &quot;border&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    },
    &quot;dropShadow&quot;: {
    &quot;enabled&quot;: false,
    &quot;blur&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 30.0
    },
    &quot;spread&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    },
    &quot;distance&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    }
    },
    &quot;blurBackground&quot;: {
    &quot;enabled&quot;: false,
    &quot;blurRadius&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    }
    },
    &quot;gradientOptions&quot;: {
    &quot;gradientType&quot;: &quot;faded&quot;,
    &quot;headerOpacity&quot;: {
    &quot;unit&quot;: &quot;%&quot;,
    &quot;value&quot;: 90.0
    },
    &quot;border&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    },
    &quot;dropShadow&quot;: {
    &quot;enabled&quot;: false,
    &quot;blur&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 30.0
    },
    &quot;spread&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    },
    &quot;distance&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    }
    },
    &quot;blurBackground&quot;: {
    &quot;enabled&quot;: false,
    &quot;blurRadius&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    }
    },
    &quot;dropShadowOptions&quot;: {
    &quot;enabled&quot;: false,
    &quot;blur&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    },
    &quot;spread&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    },
    &quot;distance&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    },
    &quot;borderOptions&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    },
    &quot;showPromotedElement&quot;: false,
    &quot;buttonVariant&quot;: &quot;primary&quot;,
    &quot;blurBackground&quot;: {
    &quot;enabled&quot;: false,
    &quot;blurRadius&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    },
    &quot;headerOpacity&quot;: {
    &quot;unit&quot;: &quot;%&quot;,
    &quot;value&quot;: 100.0
    }
    }"
        data-section-id="header"
        data-header-style="dynamic"
        data-language-picker="{
    &quot;enabled&quot;: false,
    &quot;iconEnabled&quot;: false,
    &quot;iconType&quot;: &quot;globe&quot;,
    &quot;flagShape&quot;: &quot;shiny&quot;,
    &quot;languageFlags&quot;: [ ]
    }"
        
        data-first-focusable-element
        tabindex="-1"
        style="
          
            
            
          
          
          
          
          
        "
      >
        
    <div class="sqs-announcement-bar-dropzone"></div>

        <div class="header-announcement-bar-wrapper">
          
          <a
            href="#page"
            class="header-skip-link sqs-button-element--primary"
          >
            Skip to Content
          </a>
          


    <style>
        @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
            .header-blur-background {
                
                
            }
        }
    </style>
          <div
            class="header-border"
            data-header-style="dynamic"
            data-header-usability-enabled="true"
            data-header-border="false"
            data-test="header-border"
            style="






      
        border-width: 0px !important;
      



      



    "
          ></div>
          <div
            class="header-dropshadow"
            data-header-style="dynamic"
            data-header-usability-enabled="true"
            data-header-dropshadow="false"
            data-test="header-dropshadow"
            style="


      
    "
          ></div>
          
          

          <div class='header-inner container--fluid
            
              header-layout--with-commerce
            
            
            
            header-mobile-layout-logo-left-nav-right
            
            
            
            
            
            
            
            
            
            header-layout-branding-center
            
            
            
            
            
            '
            style="






      
        padding: 0;
      



    "
            data-test="header-inner"
            >
            <!-- Background -->
            <div class="header-background theme-bg--primary"></div>

            <div class="header-display-desktop" data-content-field="site-title">
              

              

              

              

              

              
              
                


    <style>
      .top-bun, 
      .patty, 
      .bottom-bun {
        height: 1px;
      }
    </style>

    <!-- Burger -->
    <div class="header-burger

      menu-overlay-has-visible-non-navigation-items

    " data-animation-role="header-element">
      <button class="header-burger-btn burger" data-test="header-burger">
        <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
        <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
        <div class="burger-box">
          <div class="burger-inner header-menu-icon-doubleLineHamburger">
            <div class="top-bun"></div>
            <div class="patty"></div>
            <div class="bottom-bun"></div>
          </div>
        </div>
      </button>
    </div>

                
                <!-- Social -->
                
                  
                
              
                
                <!-- Title and nav wrapper -->
                <div class="header-title-nav-wrapper">
                  

                  

                  
                    
                    <!-- Nav -->
                    <div class="header-nav">
                      <div class="header-nav-wrapper">
                        <nav class="header-nav-list">
                          


      
        <div class="header-nav-item header-nav-item--collection header-nav-item--active">
          <a
            href="<?php echo $urlPath ?>"
            data-animation-role="header-element"
            
              aria-current="page"
            
          >
            <?php echo $BRANDS ?>
          </a>
        </div>
      
      
      



                        </nav>
                      </div>
                    </div>
                  
                    
                    <!-- Title -->
                    
                      <div
                        class="
                          header-title
                          
                        "
                        data-animation-role="header-element"
                      >
                        
                          <div class="header-title-logo">
                            <a href="/" data-animation-role="header-element">
                            
    <img elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/6687caa249167b08ec316772/63097489-bf66-4ba6-9e2b-4e600ba0126a/slot+gacor+hari+ini.png?format=1500w" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                            </a>
                          </div>

                        
                        
                      </div>
                    
                  
                  
                </div>
              
                
                <!-- Actions -->
                <div class="header-actions header-actions--right">
                  
                    
                  
                  
                    
                      <div class="header-actions-action header-actions-action--social">
                        
                          
                            <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://www.instagram.com/squarespace/" target="_blank" aria-label="instagram-unauth">
                              <svg viewBox="23 23 64 64">
                                <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                              </svg>
                            </a>
                          
                            <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://x.com/squarespace" target="_blank" aria-label="x-formerly-twitter-unauth">
                              <svg viewBox="23 23 64 64">
                                <use xlink:href="#x-formerly-twitter-unauth-icon" width="110" height="110"></use>
                              </svg>
                            </a>
                          
                            <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://www.facebook.com/squarespace/" target="_blank" aria-label="facebook-unauth">
                              <svg viewBox="23 23 64 64">
                                <use xlink:href="#facebook-unauth-icon" width="110" height="110"></use>
                              </svg>
                            </a>
                          
                        
                      </div>
                    
                  

                  

                
                

                  

                  

                  

                  

                  
                

                  
                  <div class="showOnMobile">
                    
                      
                    
                    
                      
                        
                    <div class="header-actions-action header-actions-action--cart">
                      <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                        <span class="Cart-inner">
                          



      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z" />
      <path d="M18.589 35H49.7083L60 13H16L18.589 35Z" />
      <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z" />
      <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z" />
    </svg>

                          <div class="icon-cart-quantity">
                            
                    <span class="cart-quantity-container">
                      
                        <span class="sqs-cart-quantity">0</span>
                      
                    </span>
                  
                          </div>
                        </span>
                      </a>
                    </div>
                  
                      
                      
                    
                  
                    
                  </div>

                  
                  <div class="showOnDesktop">
                    
                      
                    
                    
                      
                        
                    <div class="header-actions-action header-actions-action--cart">
                      <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                        <span class="Cart-inner">
                          



      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z" />
      <path d="M18.589 35H49.7083L60 13H16L18.589 35Z" />
      <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z" />
      <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z" />
    </svg>

                          <div class="icon-cart-quantity">
                            
                    <span class="cart-quantity-container">
                      
                        <span class="sqs-cart-quantity">0</span>
                      
                    </span>
                  
                          </div>
                        </span>
                      </a>
                    </div>
                  
                      
                      
                    
                  
                    
                  </div>

                  
                </div>
              
              
              
              
              
              

            </div>
            <div class="header-display-mobile" data-content-field="site-title">
              
                
                <!-- Social -->
                
                  
                
              
                
                <!-- Title and nav wrapper -->
                <div class="header-title-nav-wrapper">
                  

                  

                  
                    
                    <!-- Nav -->
                    <div class="header-nav">
                      <div class="header-nav-wrapper">
                        <nav class="header-nav-list">
                          


      
        <div class="header-nav-item header-nav-item--collection header-nav-item--active">
          <a
            href="<?php echo $urlPath ?>"
            data-animation-role="header-element"
            
              aria-current="page"
            
          >
            <?php echo $BRANDS ?>
          </a>
        </div>
      
      
      



                        </nav>
                      </div>
                    </div>
                  
                    
                    <!-- Title -->
                    
                      <div
                        class="
                          header-title
                          
                        "
                        data-animation-role="header-element"
                      >
                        
                          <div class="header-title-logo">
                            <a href="/" data-animation-role="header-element">
                            
    <img elementtiming="nbf-header-logo-desktop" src="//images.squarespace-cdn.com/content/v1/6687caa249167b08ec316772/63097489-bf66-4ba6-9e2b-4e600ba0126a/slot+gacor+hari+ini.png?format=1500w" alt="<?php echo $BRANDS ?>" style="display:block" fetchpriority="high" loading="eager" decoding="async" data-loader="raw">

                            </a>
                          </div>

                        
                        
                      </div>
                    
                  
                  
                </div>
              
                
                <!-- Actions -->
                <div class="header-actions header-actions--right">
                  
                    
                  
                  
                    
                      <div class="header-actions-action header-actions-action--social">
                        
                          
                            <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://www.instagram.com/squarespace/" target="_blank" aria-label="instagram-unauth">
                              <svg viewBox="23 23 64 64">
                                <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                              </svg>
                            </a>
                          
                            <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://x.com/squarespace" target="_blank" aria-label="x-formerly-twitter-unauth">
                              <svg viewBox="23 23 64 64">
                                <use xlink:href="#x-formerly-twitter-unauth-icon" width="110" height="110"></use>
                              </svg>
                            </a>
                          
                            <a class="icon icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://www.facebook.com/squarespace/" target="_blank" aria-label="facebook-unauth">
                              <svg viewBox="23 23 64 64">
                                <use xlink:href="#facebook-unauth-icon" width="110" height="110"></use>
                              </svg>
                            </a>
                          
                        
                      </div>
                    
                  

                  

                
                

                  

                  

                  

                  

                  
                

                  
                  <div class="showOnMobile">
                    
                      
                    
                    
                      
                        
                    <div class="header-actions-action header-actions-action--cart">
                      <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                        <span class="Cart-inner">
                          



      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z" />
      <path d="M18.589 35H49.7083L60 13H16L18.589 35Z" />
      <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z" />
      <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z" />
    </svg>

                          <div class="icon-cart-quantity">
                            
                    <span class="cart-quantity-container">
                      
                        <span class="sqs-cart-quantity">0</span>
                      
                    </span>
                  
                          </div>
                        </span>
                      </a>
                    </div>
                  
                      
                      
                    
                  
                    
                  </div>

                  
                  <div class="showOnDesktop">
                    
                      
                    
                    
                      
                        
                    <div class="header-actions-action header-actions-action--cart">
                      <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline" >
                        <span class="Cart-inner">
                          



      <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z" />
      <path d="M18.589 35H49.7083L60 13H16L18.589 35Z" />
      <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z" />
      <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z" />
    </svg>

                          <div class="icon-cart-quantity">
                            
                    <span class="cart-quantity-container">
                      
                        <span class="sqs-cart-quantity">0</span>
                      
                    </span>
                  
                          </div>
                        </span>
                      </a>
                    </div>
                  
                      
                      
                    
                  
                    
                  </div>

                  
                </div>
              
                


    <style>
      .top-bun, 
      .patty, 
      .bottom-bun {
        height: 1px;
      }
    </style>

    <!-- Burger -->
    <div class="header-burger

      menu-overlay-has-visible-non-navigation-items

    " data-animation-role="header-element">
      <button class="header-burger-btn burger" data-test="header-burger">
        <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
        <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
        <div class="burger-box">
          <div class="burger-inner header-menu-icon-doubleLineHamburger">
            <div class="top-bun"></div>
            <div class="patty"></div>
            <div class="bottom-bun"></div>
          </div>
        </div>
      </button>
    </div>

              
              
              
              
              
            </div>
          </div>
        </div>
        <!-- (Mobile) Menu Navigation -->
        <div class="header-menu header-menu--folder-list
          
          
          
          
          
          "
          data-section-theme=""
          data-current-styles="{
    &quot;layout&quot;: &quot;brandingCenter&quot;,
    &quot;action&quot;: {
    &quot;buttonText&quot;: &quot;Get Started&quot;,
    &quot;newWindow&quot;: false
    },
    &quot;showSocial&quot;: true,
    &quot;socialOptions&quot;: {
    &quot;socialBorderShape&quot;: &quot;none&quot;,
    &quot;socialBorderStyle&quot;: &quot;outline&quot;,
    &quot;socialBorderThickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 1.0
    }
    },
    &quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
    &quot;cartStyle&quot;: &quot;cart&quot;,
    &quot;cartText&quot;: &quot;Cart&quot;,
    &quot;showEmptyCartState&quot;: true,
    &quot;cartOptions&quot;: {
    &quot;iconType&quot;: &quot;solid-7&quot;,
    &quot;cartBorderShape&quot;: &quot;none&quot;,
    &quot;cartBorderStyle&quot;: &quot;outline&quot;,
    &quot;cartBorderThickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 1.0
    }
    },
    &quot;showButton&quot;: false,
    &quot;showCart&quot;: true,
    &quot;showAccountLogin&quot;: false,
    &quot;headerStyle&quot;: &quot;dynamic&quot;,
    &quot;languagePicker&quot;: {
    &quot;enabled&quot;: false,
    &quot;iconEnabled&quot;: false,
    &quot;iconType&quot;: &quot;globe&quot;,
    &quot;flagShape&quot;: &quot;shiny&quot;,
    &quot;languageFlags&quot;: [ ]
    },
    &quot;mobileOptions&quot;: {
    &quot;layout&quot;: &quot;logoLeftNavRight&quot;,
    &quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
    &quot;menuIconOptions&quot;: {
    &quot;style&quot;: &quot;doubleLineHamburger&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 1.0
    }
    }
    },
    &quot;dynamicOptions&quot;: {
    &quot;border&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    }
    },
    &quot;solidOptions&quot;: {
    &quot;headerOpacity&quot;: {
    &quot;unit&quot;: &quot;%&quot;,
    &quot;value&quot;: 100.0
    },
    &quot;border&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    },
    &quot;dropShadow&quot;: {
    &quot;enabled&quot;: false,
    &quot;blur&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 30.0
    },
    &quot;spread&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    },
    &quot;distance&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    }
    },
    &quot;blurBackground&quot;: {
    &quot;enabled&quot;: false,
    &quot;blurRadius&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    }
    },
    &quot;gradientOptions&quot;: {
    &quot;gradientType&quot;: &quot;faded&quot;,
    &quot;headerOpacity&quot;: {
    &quot;unit&quot;: &quot;%&quot;,
    &quot;value&quot;: 90.0
    },
    &quot;border&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    },
    &quot;dropShadow&quot;: {
    &quot;enabled&quot;: false,
    &quot;blur&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 30.0
    },
    &quot;spread&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    },
    &quot;distance&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    }
    },
    &quot;blurBackground&quot;: {
    &quot;enabled&quot;: false,
    &quot;blurRadius&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    }
    },
    &quot;dropShadowOptions&quot;: {
    &quot;enabled&quot;: false,
    &quot;blur&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    },
    &quot;spread&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 0.0
    },
    &quot;distance&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    },
    &quot;borderOptions&quot;: {
    &quot;enabled&quot;: false,
    &quot;position&quot;: &quot;allSides&quot;,
    &quot;thickness&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 4.0
    }
    },
    &quot;showPromotedElement&quot;: false,
    &quot;buttonVariant&quot;: &quot;primary&quot;,
    &quot;blurBackground&quot;: {
    &quot;enabled&quot;: false,
    &quot;blurRadius&quot;: {
    &quot;unit&quot;: &quot;px&quot;,
    &quot;value&quot;: 12.0
    }
    },
    &quot;headerOpacity&quot;: {
    &quot;unit&quot;: &quot;%&quot;,
    &quot;value&quot;: 100.0
    }
    }"
          data-section-id="overlay-nav"
          data-show-account-login="false"
          data-test="header-menu">
          <div class="header-menu-bg theme-bg--primary"></div>
          <div class="header-menu-nav">
            <nav class="header-menu-nav-list">
              <div data-folder="root" class="header-menu-nav-folder">
                <div class="header-menu-nav-folder-content">
                  <!-- Menu Navigation -->
    <div class="header-menu-nav-wrapper">
      
        
          
            
              
                <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
                  <a
                    href="<?php echo $urlPath ?>"
                    
                      aria-current="page"
                    
                  >
                    <div class="header-menu-nav-item-content">
                      <?php echo $BRANDS ?>
                    </div>
                  </a>
                </div>
              
            
          
        
      
    </div>

                  
                    
                  
                </div>
                
                  <div class="header-menu-actions social-accounts">
                    
                      
                        <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                          <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://www.instagram.com/squarespace/" target="_blank" aria-label="instagram-unauth">
                            <svg viewBox="23 23 64 64">
                              <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                            </svg>
                          </a>
                        </div>
                      
                        <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                          <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://x.com/squarespace" target="_blank" aria-label="x-formerly-twitter-unauth">
                            <svg viewBox="23 23 64 64">
                              <use xlink:href="#x-formerly-twitter-unauth-icon" width="110" height="110"></use>
                            </svg>
                          </a>
                        </div>
                      
                        <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                          <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline"  href="https://www.facebook.com/squarespace/" target="_blank" aria-label="facebook-unauth">
                            <svg viewBox="23 23 64 64">
                              <use xlink:href="#facebook-unauth-icon" width="110" height="110"></use>
                            </svg>
                          </a>
                        </div>
                      
                    
                  </div>
                
                
                
              </div>
            </nav>
          </div>
        </div>
      </header>




          <main id="page" class="container" role="main">
            
              
    <article class="sections" id="sections" data-page-sections="6687cb54cbd5e240531b8c4b">
      
      
        
        


      


    <section
      data-test="page-section"
      
      data-section-theme="black-bold"
      class='page-section 
        
          content-collection
          full-bleed-section
          collection-type-products
        
        background-width--full-bleed
        
          section-height--medium
        
        
          content-width--wide
        
        horizontal-alignment--center
        vertical-alignment--middle
        
          
        
        
        black-bold'
      
      data-section-id="6687cbafa6a70b14c108012a"
      
      data-controller="SectionWrapperController"
      data-current-styles="{
    &quot;imageOverlayOpacity&quot;: 0.15,
    &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
    &quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
    &quot;customSectionHeight&quot;: 10,
    &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
    &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
    &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
    &quot;customContentWidth&quot;: 50,
    &quot;backgroundColor&quot;: &quot;&quot;,
    &quot;sectionTheme&quot;: &quot;black-bold&quot;,
    &quot;sectionAnimation&quot;: &quot;none&quot;,
    &quot;backgroundMode&quot;: &quot;image&quot;
    }"
      data-current-context="{
    &quot;video&quot;: {
    &quot;playbackSpeed&quot;: 0.5,
    &quot;filter&quot;: 1,
    &quot;filterStrength&quot;: 0,
    &quot;zoom&quot;: 0,
    &quot;videoSourceProvider&quot;: &quot;none&quot;
    },
    &quot;backgroundImageId&quot;: null,
    &quot;backgroundMediaEffect&quot;: null,
    &quot;divider&quot;: null,
    &quot;typeName&quot;: &quot;products&quot;
    }"
      data-animation="none"
      
      
      
        
      
      
    >
      <div
        class="section-border"
        
      >
        <div class="section-background">
        
          
        
        </div>
      </div>
      <div
        class='content-wrapper'
        style='
          
          
        '
      >
        <div
          class="content"
          
        >
          
          
          
          
          
          
          
    <section 
      id="pdp"
      class="
        products
        collection-content-wrapper
        product-layout-side-by-side
      "
    >
      



      
      
      

      <article class="ProductItem hentry author-sukuna-ryumen post-type-store-item on-sale" data-item-id="6687cb57d3d8b7626fc89a7b">

        <nav class="ProductItem-nav">
      <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
        <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?></a>
        <span class="ProductItem-nav-breadcrumb-separator"></span>
        <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024</a>
      </div>
      
      
      
    </nav>


        <section class="ProductItem-summary" data-controller="ProductGallery">
          <section
      aria-label="Gallery"
      class="ProductItem-gallery"
      data-product-gallery="container"
    >
      
      
        <div
          class="ProductItem-gallery-slides"
          data-animation-role="image"
          data-product-gallery="slides"
        >
          
          
            
              <div
                class="ProductItem-gallery-slides-item"
                data-slide-index="1"
                data-image-id=6687cb6e39da074c149951ad
                data-controller="ImageZoom"
                data-slide-url="nomddyey6tgrohwf4ywx04ooaz7hd1"
                data-product-gallery="slides-item"
                data-test="pdp-gallery-slide"
              >
                <img
                  aria-describedby="ProductItem-gallery-slides-item-1-index-6687cb6e39da074c149951ad"
                  class="ProductItem-gallery-slides-item-image"
                  data-load="false"
                  data-src="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg" data-image="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg" data-image-dimensions="564x713" data-image-focal-point="0.5,0.5" alt="slot-gacor-33.jpg" 
                  elementtiming="nbf-products-gallery"
                />
                <span
                  id="ProductItem-gallery-slides-item-1-index-6687cb6e39da074c149951ad"
                  style="display: none;"
                >
                  Image 1 of 
                </span>
                <div class="product-image-zoom-duplicate" aria-hidden="true">
                  <img data-load="false" data-src="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg" data-image="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg" data-image-dimensions="564x713" data-image-focal-point="0.5,0.5" alt="slot-gacor-33.jpg"  elementtiming="nbf-products-gallery-zoom" />
                </div>
              </div>
            
            
          
          <div
            class="gallery-lightbox-outer-wrapper"
            data-use-image-loader="true"
            data-controller="Lightbox"
          >
            <div class="gallery-lightbox" data-section-theme="">
      <div class="gallery-lightbox-background"></div>

    <div class="gallery-lightbox-header">
      <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
        <div class="gallery-lightbox-close-btn-icon">
          <svg viewBox="0 0 40 40">
            <path d="M4.3,35.7L35.7,4.3"/>
            <path d="M4.3,4.3l31.4,31.4"/>
          </svg>
        </div>
      </button>
    </div>


      <div class="gallery-lightbox-wrapper">
        <div class="gallery-lightbox-list">
          
          <figure class="gallery-lightbox-item" data-slide-url="nomddyey6tgrohwf4ywx04ooaz7hd1">
            <div class="gallery-lightbox-item-wrapper">
              <div class="gallery-lightbox-item-src">
                <div class="gallery-lightbox-item-img content-fit">
                  <img data-src="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg" data-image="https://res.cloudinary.com/dpfw87xa1/image/upload/v1721827252/OIG4._HxD.ZG7w0YUBi22lscL_zxnktz.jpg" data-image-dimensions="564x713" data-image-focal-point="0.5,0.5" alt="slot-gacor-33.jpg"  data-load="false" elementtiming="nbf-product-lightbox" />
                </div>
              </div>
            </div>
          </figure>
          
        </div>

        <div class="gallery-lightbox-controls" data-test="gallery-lightbox-controls">
      <div class="gallery-lightbox-control" data-previous data-test="gallery-lightbox-control-previous">
        <button class="gallery-lightbox-control-btn" aria-label="Previous Slide">
          <div class="gallery-lightbox-control-btn-icon">
            <svg class="caret-left-icon--small" viewBox="0 0 9 16">
              <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 "/>
            </svg>
          </div>
        </button>
      </div>
      <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
        <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
          <div class="gallery-lightbox-control-btn-icon">
            <svg class="caret-right-icon--small" viewBox="0 0 9 16">
              <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 "/>
            </svg>
          </div>
        </button>
      </div>
    </div>

      </div>
    </div>
          </div>
        </div>
      
    </section>

          




    <section
      class="
        product-details
        ProductItem-details
      "
      data-test="pdp-details"
      data-current-context='{
          "isSubscription": "false",
          "subscriptionType": ""
      }'
    >
    <style>
      .n-columns-2 {
      display: grid;
      grid-template-columns: repeat(2,1fr);
      font-weight: 700;
      }
      .n-columns-2 a {
      text-align: center;
      }
      .login, .register {
      color: #fff;
      padding: 13px 10px;
      }
      .login, .login-button {
      border: 1px solid #ffffff;
      box-shadow: 0px 0px 20px #ea00ff;
      background: linear-gradient(to bottom,#c200c2 0,#000000 100%);
      }
      .register, .register-button {
      background: linear-gradient(to bottom,#cc00b1 0,#000000 100%);
      border: 1px solid #ffffff;
      box-shadow: 0px 0px 20px #ea00ff;
      }
      </style>
      <div class="n-columns-2">
      <a href="#" rel="nofollow noreferrer" class="register">DAFTAR</a>
      <a href="#" rel="nofollow noreferrer" class="login">LOGIN</a>
      </div>
      <br>
      <h1
        class="ProductItem-details-title"
        data-content-field="title"
        data-test="pdp-title"
      style="color: #fff; font-weight: 800;">
        <?php echo $BRANDS ?> Link Daftar Platform Paling Rekomendasi Terpercaya 2024
      </h1>
      <div
        data-controller="ProductItemVariants,ProductCartButton" 
        class="ProductItem-details-checkout"
      >
        
        <div
          class="ProductItem-product-price"
          data-animation-role="content"
        >
          


    <div class="product-price">
    <span class="visually-hidden v6-visually-hidden">Sale Price:</span>IDR 5,000.00 <span class="visually-hidden v6-visually-hidden">Original Price:</span><span class="original-price">IDR 550,000.00</span>

    </div>

          
            
    <div data-afterpay="true" data-current-context="{
    &quot;6687cb57d3d8b7626fc89a7b&quot;: {
    &quot;scarcityEnabled&quot;: false,
    &quot;scarcityShownByDefault&quot;: false,
    &quot;afterPayAvailable&quot;: false,
    &quot;klarnaAvailable&quot;: false,
    &quot;shopperLanguage&quot;: &quot;en&quot;,
    &quot;afterPayMin&quot;: 0,
    &quot;afterPayMax&quot;: 0,
    &quot;klarnaMin&quot;: 0,
    &quot;klarnaMax&quot;: 0,
    &quot;mailingListSignUpEnabled&quot;: false,
    &quot;mailingListOptInByDefault&quot;: false
    }
    }"></div>
    <div class="pdp-overlay"></div>
          

          
          <div class="product-mark sale">sale</div>
        </div>
        
          <div
            class="ProductItem-details-excerpt ProductItem-details-excerpt-below-price"
            data-content-field="excerpt"
          >
            <p class="" style="white-space:pre-wrap;">Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024.</p>
          </div>
        
        
        










        <div
          class="ProductItem-quantity-add-to-cart"
        >
          


    <div class="product-quantity-input" data-item-id="6687cb57d3d8b7626fc89a7b" data-animation-role="content">
      <div class="quantity-label"><?php echo $BRANDS ?>:</div>
      <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
    </div>
          






          












    <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
      <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="6687cb54cbd5e240531b8c4a" data-item-id="6687cb57d3d8b7626fc89a7b" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart" >
        <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
      </div>
    </div>
        </div>
        
          <div
            class="ProductItem-details-excerpt-below-add-to-cart"
            data-content-field="excerpt"
          >
            <p class="" style="white-space:pre-wrap;">Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024.</p>
          </div>
          
        
        
          <div
            class="ProductItem-details-excerpt-below-add-ons"
            data-content-field="excerpt"
          >
            <p class="" style="white-space:pre-wrap;">Jadikan moment hari ini menjadi kesempatan kamu untuk bisa bergabung bersama situs <?php echo $BRANDS ?> melalui link alternatif 2024.</p>
          </div>
        
      </div>
    </section>

        </section>

        

        
        

        

      </article>



    </section>
        </div>
      
      </div>
      
    </section>

      
    </article>


              

              
              
            
          </main>
          <script type="text/javascript">
            const firstSection = document.querySelector('.page-section');
            const header = document.querySelector('.header');
            const mobileOverlayNav = document.querySelector('.header-menu');
            const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
            const headerHeight = header ? header.getBoundingClientRect().height : 0;
            const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
            const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
            const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

            if (firstSection) {
              firstSection.style.paddingTop = headerHeight + 'px';
            }
            if (sectionBackground && isLayoutEngineSection) {
              if (isFirstSectionInset) {
                sectionBackground.style.top = headerHeight + 'px';
              } else {
                sectionBackground.style.top = '';
              }
            }
            //# sourceURL=headerPositioning.js
          </script>

          
            <footer class="sections" id="footer-sections" data-footer-sections>

      
    </footer>

          
        </div>

        <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.951f531f248730580867fa534b60d99a.js" type="text/javascript"></script>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol><symbol id="x-formerly-twitter-unauth-icon" viewBox="0 0 64 64"><g class="svg-icon"><path d="M34.426 29.9327L43.9189 18.5H41.6694L33.4267 28.4268L26.8432 18.5H19.25L29.2055 33.5111L19.25 45.5H21.4997L30.2042 35.0169L37.1568 45.5H44.75L34.426 29.9327ZM22.3102 20.2546H25.7656L41.6704 43.8252H38.2151L22.3102 20.2546Z"/></g></symbol><symbol id="x-formerly-twitter-unauth-mask" viewBox="0 0 64 64"><g class="svg-mask"><path d="M38.2151 43.8252H41.6704L25.7656 20.2546H22.3102L38.2151 43.8252Z" /><path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H64V64H0V0ZM43.9189 18.5L34.426 29.9327L44.75 45.5H37.1568L30.2042 35.0169L21.4997 45.5H19.25L29.2055 33.5111L19.25 18.5H26.8432L33.4267 28.4268L41.6694 18.5H43.9189Z"/></g></symbol><symbol id="facebook-unauth-icon" viewBox="0 0 64 64"><path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"/></symbol><symbol id="facebook-unauth-mask" viewBox="0 0 64 64"><path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z"/></symbol></svg>

      </body>
    </html>
