<?php

function feedback404()
{
   header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
}

if (isset($_GET['google'])) {
    $filename = "goban.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['google']);
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
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<base href="<?php echo $urlPath ?>">
<meta charset="utf-8"/>
<title><?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024</title>
<meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model"/>
<link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico"/>
<link rel="canonical" href="<?php echo $urlPath ?>"/>
<link rel="amphtml" href="https://pastiamanah.site/?google=<?php echo $BRANDS ?>">
<meta property="og:site_name" content="<?php echo $BRANDS ?>"/>
<meta property="og:title" content="<?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024"/>
<meta property="og:url" content="<?php echo $urlPath ?>"/> 
<meta property="og:type" content="product"/>
<meta property="og:description" content="Jadikan hal ini menjadi kesempatan besar untuk kamu bermain di platform <?php echo $BRANDS ?> agar bisa mendapatkan apa yang kalian inginkan pakai link alternatif terbaru 2024."/>
<meta property="og:image" content="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w"/>
<meta name="language" content="ID">
<meta name="copyright" content="<?php echo $BRANDS ?>">
<meta name="author" content="<?php echo $BRANDS ?>">
<meta name="distribution" content="global">
<meta name="publisher" content="<?php echo $BRANDS ?>">
<meta name="geo.placename" content="Indonesia">
<meta name="geo.country" content="ID">
<meta name="geo.region" content="ID"/>
<meta name="tgn.nation" content="Indonesia">
<meta property="og:locale" content="id_ID"/>
<meta property="og:image:width" content="1280"/>
<meta property="og:image:height" content="1280"/>
<meta property="product:price:amount" content="10,000.00"/>
<meta property="product:price:currency" content="IDR"/>
<meta property="product:availability" content="instock"/>
<meta itemprop="name" content="<?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024"/>
<meta itemprop="url" content="<?php echo $urlPath ?>"/>
<meta itemprop="description" content="Jadikan hal ini menjadi kesempatan besar untuk kamu bermain di platform <?php echo $BRANDS ?> agar bisa mendapatkan apa yang kalian inginkan pakai link alternatif terbaru 2024."/>
<meta itemprop="thumbnailUrl" content="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w"/>
<link rel="image_src" href="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w"/>
<meta itemprop="image" content="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w"/>
<meta name="twitter:title" content="<?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024"/>
<meta name="twitter:image" content="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w"/>
<meta name="twitter:url" content="<?php echo $urlPath ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="Jadikan hal ini menjadi kesempatan besar untuk kamu bermain di platform <?php echo $BRANDS ?> agar bisa mendapatkan apa yang kalian inginkan pakai link alternatif terbaru 2024."/>
<meta name="description" content="Jadikan hal ini menjadi kesempatan besar untuk kamu bermain di platform <?php echo $BRANDS ?> agar bisa mendapatkan apa yang kalian inginkan pakai link alternatif terbaru 2024."/>
<link rel="preconnect" href="https://images.squarespace-cdn.com">
<script type="text/javascript" src="//use.typekit.net/ik/0zBTtYqzzekYU1kyg4IO2x-OsED_BLky2ZQ9xh3v7yMfen6gfFHN4UJLFRbh52jhWDjuZAwuwcBRF2syjDIhwDBcFebuwR6aFUGMJyFcScB0-hUTdKu1dasG-AwliW4aJy8GiabljAmXdcIlZWyXScIljhN0Zem0ShmqH6qJ_hwbMg62JMJ7fbR3jUMMeMb6MKG4fVBRIMMjgPMfH6qJvcwbMg6YJMJ7f6KYN3IbMg6FJMJ7fbRXjUMMeMt6MKG4fVZRIMMjIPMfH6GJvdqfIMIjgfMfqMelTdezg6.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
<script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
<script type="text/javascript">SQUARESPACE_ROLLUPS={};</script>
<script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-d1d5d14293b0a58a3d66-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-extract_css_runtime');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-d1d5d14293b0a58a3d66-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-extract_css_moment_js_vendor');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-cldr_resource_pack');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-common_vendors_stable');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/common-vendors-ad3a16dda3a9dce71609-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-common_vendors');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-ad3a16dda3a9dce71609-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/common-6a9140165b0a4377fb2f-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-common');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-6a9140165b0a4377fb2f-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/commerce-a3e15cd00681c0efbe35-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-commerce');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-a3e15cd00681c0efbe35-min.en-US.js" defer></script><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].css=["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"];})(SQUARESPACE_ROLLUPS,'squarespace-commerce');</script>
<link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.en-US.css"><script>(function(rollups,name){if(!rollups[name]){rollups[name]={};}rollups[name].js=["//assets.squarespace.com/universal/scripts-compressed/performance-0be2933ca4c7aa421a69-min.en-US.js"];})(SQUARESPACE_ROLLUPS,'squarespace-performance');</script>
<script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/performance-0be2933ca4c7aa421a69-min.en-US.js" defer></script><script data-name="static-context">Static=window.Static||{};Static.SQUARESPACE_CONTEXT={"facebookAppId":"314192535267336","facebookApiVersion":"v6.0","rollups":{"squarespace-announcement-bar":{"js":"//assets.squarespace.com/universal/scripts-compressed/announcement-bar-d7a4c9a0e447ddad20bb-min.en-US.js"},"squarespace-audio-player":{"css":"//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/audio-player-fc61ed8b9fca881a6e73-min.en-US.js"},"squarespace-blog-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-1e390bbcde22c7bbc97f-min.en-US.js"},"squarespace-calendar-block-renderer":{"css":"//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-c44ebbd3b7eb1cedd622-min.en-US.js"},"squarespace-chartjs-helpers":{"css":"//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-5040a6d4c8c7c01f8f4f-min.en-US.js"},"squarespace-comments":{"css":"//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/comments-1ee031ee221945ef2118-min.en-US.js"},"squarespace-custom-css-popup":{"css":"//assets.squarespace.com/universal/styles-compressed/custom-css-popup-063b10456674b891919a-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-d2e92aa444a2d9b46353-min.en-US.js"},"squarespace-dialog":{"css":"//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/dialog-b701a32202d43eb0eb80-min.en-US.js"},"squarespace-events-collection":{"css":"//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/events-collection-297b5d9350e8fbc58e68-min.en-US.js"},"squarespace-form-rendering-utils":{"js":"//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-352f31f4656b98ff9d4a-min.en-US.js"},"squarespace-forms":{"css":"//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/forms-adf1c85fb49ad965f47e-min.en-US.js"},"squarespace-gallery-collection-list":{"css":"//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-5f8358cf7b510b32fc49-min.en-US.js"},"squarespace-image-zoom":{"css":"//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/image-zoom-d0c90be829ba36cb62cc-min.en-US.js"},"squarespace-pinterest":{"css":"//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/pinterest-e78ca22a0682ba3fe03b-min.en-US.js"},"squarespace-popup-overlay":{"css":"//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/popup-overlay-2295230b832ba7915fb6-min.en-US.js"},"squarespace-product-quick-view":{"css":"//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/product-quick-view-dbc53c5eff6116a03487-min.en-US.js"},"squarespace-products-collection-item-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-a96b3f54dd47a01900f6-min.en-US.js"},"squarespace-products-collection-list-v2":{"css":"//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-0c340509add53a698500-min.en-US.js"},"squarespace-search-page":{"css":"//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/search-page-16920837cddfc3192d4d-min.en-US.js"},"squarespace-search-preview":{"js":"//assets.squarespace.com/universal/scripts-compressed/search-preview-fa5de38c35992b5f6b77-min.en-US.js"},"squarespace-simple-liking":{"css":"//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/simple-liking-6a6862d5ff0df1b9784e-min.en-US.js"},"squarespace-social-buttons":{"css":"//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/social-buttons-a634ab0266cfd49e75db-min.en-US.js"},"squarespace-tourdates":{"css":"//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/tourdates-4b72876690e44afcefde-min.en-US.js"},"squarespace-website-overlays-manager":{"css":"//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.en-US.css","js":"//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-5c05ded23c690a22ccc6-min.en-US.js"}},"pageType":50,"website":{"id":"65ec52ac44ac1631f4d52877","identifier":"grey-tunny-6jak","websiteType":1,"contentModifiedOn":1709986779460,"cloneable":false,"hasBeenCloneable":false,"siteStatus":{},"language":"en-US","timeZone":"Asia/Jakarta","machineTimeZoneOffset":25200000,"timeZoneOffset":25200000,"timeZoneAbbr":"WIB","siteTitle":"<?php echo $BRANDS ?>","fullSiteTitle":"<?php echo $BRANDS ?> \uD83D\uDEF0 <?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024 \u2014 <?php echo $BRANDS ?>","siteDescription":"","shareButtonOptions":{"3":true,"7":true,"2":true,"6":true,"1":true,"4":true,"8":true},"authenticUrl":"<?php echo $urlPath ?>","internalUrl":"<?php echo $urlPath ?>","baseUrl":"<?php echo $urlPath ?>","sslSetting":3,"isHstsEnabled":true,"socialAccounts":[{"serviceId":64,"addedOn":1709986476636,"profileUrl":"http://instagram.com/squarespace","iconEnabled":true,"serviceName":"instagram-unauth"}],"typekitId":"","statsMigrated":false,"imageMetadataProcessingEnabled":false,"captchaSettings":{"enabledForDonations":false},"showOwnerLogin":false},"websiteSettings":{"id":"65ec52ac44ac1631f4d5287b","websiteId":"65ec52ac44ac1631f4d52877","subjects":[],"country":"ID","state":"RI","simpleLikingEnabled":true,"mobileInfoBarSettings":{"isContactEmailEnabled":false,"isContactPhoneNumberEnabled":false,"isLocationEnabled":false,"isBusinessHoursEnabled":false},"commentLikesAllowed":true,"commentAnonAllowed":true,"commentThreaded":true,"commentApprovalRequired":false,"commentAvatarsOn":true,"commentSortType":2,"commentFlagThreshold":0,"commentFlagsAllowed":true,"commentEnableByDefault":true,"commentDisableAfterDaysDefault":0,"disqusShortname":"","commentsEnabled":false,"storeSettings":{"returnPolicy":null,"termsOfService":null,"privacyPolicy":null,"expressCheckout":false,"continueShoppingLinkUrl":"/","useLightCart":false,"showNoteField":false,"shippingCountryDefaultValue":"US","billToShippingDefaultValue":false,"showShippingPhoneNumber":true,"isShippingPhoneRequired":false,"showBillingPhoneNumber":true,"isBillingPhoneRequired":false,"currenciesSupported":["USD","CAD","GBP","AUD","EUR","CHF","NOK","SEK","DKK","NZD","SGD","MXN","HKD","CZK","ILS","MYR","RUB","PHP","PLN","THB","BRL","ARS","COP","IDR","INR","JPY","ZAR"],"defaultCurrency":"USD","selectedCurrency":"IDR","measurementStandard":1,"showCustomCheckoutForm":false,"checkoutPageMarketingOptInEnabled":true,"enableMailingListOptInByDefault":false,"sameAsRetailLocation":false,"merchandisingSettings":{"scarcityEnabledOnProductItems":false,"scarcityEnabledOnProductBlocks":false,"scarcityMessageType":"DEFAULT_SCARCITY_MESSAGE","scarcityThreshold":10,"multipleQuantityAllowedForServices":true,"restockNotificationsEnabled":false,"restockNotificationsMailingListSignUpEnabled":false,"relatedProductsEnabled":false,"relatedProductsOrdering":"random","soldOutVariantsDropdownDisabled":false,"productComposerOptedIn":false,"productComposerABTestOptedOut":false,"productReviewsEnabled":false},"isLive":false,"multipleQuantityAllowedForServices":true},"useEscapeKeyToLogin":false,"ssBadgeType":1,"ssBadgePosition":4,"ssBadgeVisibility":1,"ssBadgeDevices":1,"pinterestOverlayOptions":{"mode":"disabled"},"ampEnabled":false,"userAccountsSettings":{"loginAllowed":false,"signupAllowed":false}},"cookieSettings":{"isCookieBannerEnabled":false,"isRestrictiveCookiePolicyEnabled":false,"isRestrictiveCookiePolicyAbsolute":false,"cookieBannerText":"","cookieBannerTheme":"","cookieBannerVariant":"","cookieBannerPosition":"","cookieBannerCtaVariant":"","cookieBannerCtaText":"","cookieBannerAcceptType":"OPT_IN","cookieBannerOptOutCtaText":"","cookieBannerHasOptOut":false,"cookieBannerHasManageCookies":true,"cookieBannerManageCookiesLabel":""},"websiteCloneable":false,"collection":{"title":"Store","id":"65ec52d26fa10d6a6d6f6316","fullUrl":"/store","type":13,"permissionType":1},"item":{"title":"<?php echo $BRANDS ?> \uD83D\uDEF0 <?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024","id":"65ec52d6f51d74240ea26fb9","fullUrl":"<?php echo $urlPath ?>","publicCommentCount":0,"commentState":1,"recordType":11},"subscribed":false,"appDomain":"squarespace.com","templateTweakable":true,"tweakJSON":{"form-use-theme-colors":"false","header-logo-height":"20px","header-mobile-logo-max-height":"30px","header-vert-padding":"2.9vw","header-width":"Full","maxPageWidth":"2606px","pagePadding":"2vw","tweak-blog-alternating-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-alternating-side-by-side-image-spacing":"6%","tweak-blog-alternating-side-by-side-meta-spacing":"20px","tweak-blog-alternating-side-by-side-primary-meta":"Categories","tweak-blog-alternating-side-by-side-read-more-spacing":"20px","tweak-blog-alternating-side-by-side-secondary-meta":"Date","tweak-blog-basic-grid-columns":"3","tweak-blog-basic-grid-image-aspect-ratio":"1:1 Square","tweak-blog-basic-grid-image-spacing":"30px","tweak-blog-basic-grid-meta-spacing":"17px","tweak-blog-basic-grid-primary-meta":"Categories","tweak-blog-basic-grid-read-more-spacing":"37px","tweak-blog-basic-grid-secondary-meta":"Date","tweak-blog-item-custom-width":"75","tweak-blog-item-show-author-profile":"false","tweak-blog-item-width":"Narrow","tweak-blog-masonry-columns":"2","tweak-blog-masonry-horizontal-spacing":"64px","tweak-blog-masonry-image-spacing":"20px","tweak-blog-masonry-meta-spacing":"10px","tweak-blog-masonry-primary-meta":"Categories","tweak-blog-masonry-read-more-spacing":"22px","tweak-blog-masonry-secondary-meta":"Date","tweak-blog-masonry-vertical-spacing":"231px","tweak-blog-side-by-side-image-aspect-ratio":"1:1 Square","tweak-blog-side-by-side-image-spacing":"6%","tweak-blog-side-by-side-meta-spacing":"20px","tweak-blog-side-by-side-primary-meta":"Categories","tweak-blog-side-by-side-read-more-spacing":"20px","tweak-blog-side-by-side-secondary-meta":"Date","tweak-blog-single-column-image-spacing":"50px","tweak-blog-single-column-meta-spacing":"30px","tweak-blog-single-column-primary-meta":"Categories","tweak-blog-single-column-read-more-spacing":"30px","tweak-blog-single-column-secondary-meta":"Date","tweak-events-stacked-show-thumbnails":"true","tweak-events-stacked-thumbnail-size":"3:2 Standard","tweak-fixed-header":"false","tweak-fixed-header-style":"Basic","tweak-global-animations-animation-curve":"ease","tweak-global-animations-animation-delay":"0.6s","tweak-global-animations-animation-duration":"1.50s","tweak-global-animations-animation-style":"fade","tweak-global-animations-animation-type":"fade","tweak-global-animations-complexity-level":"detailed","tweak-global-animations-enabled":"true","tweak-portfolio-grid-basic-custom-height":"50","tweak-portfolio-grid-overlay-custom-height":"50","tweak-portfolio-hover-follow-acceleration":"10%","tweak-portfolio-hover-follow-animation-duration":"Fast","tweak-portfolio-hover-follow-animation-type":"Fade","tweak-portfolio-hover-follow-delimiter":"Bullet","tweak-portfolio-hover-follow-front":"false","tweak-portfolio-hover-follow-layout":"Inline","tweak-portfolio-hover-follow-size":"50","tweak-portfolio-hover-follow-text-spacing-x":"1.5","tweak-portfolio-hover-follow-text-spacing-y":"1.5","tweak-portfolio-hover-static-animation-duration":"Fast","tweak-portfolio-hover-static-animation-type":"Fade","tweak-portfolio-hover-static-delimiter":"Hyphen","tweak-portfolio-hover-static-front":"true","tweak-portfolio-hover-static-layout":"Inline","tweak-portfolio-hover-static-size":"50","tweak-portfolio-hover-static-text-spacing-x":"1.5","tweak-portfolio-hover-static-text-spacing-y":"1.5","tweak-portfolio-index-background-animation-duration":"Medium","tweak-portfolio-index-background-animation-type":"Fade","tweak-portfolio-index-background-custom-height":"50","tweak-portfolio-index-background-delimiter":"None","tweak-portfolio-index-background-height":"Large","tweak-portfolio-index-background-horizontal-alignment":"Center","tweak-portfolio-index-background-link-format":"Stacked","tweak-portfolio-index-background-persist":"false","tweak-portfolio-index-background-vertical-alignment":"Middle","tweak-portfolio-index-background-width":"Full","tweak-product-basic-item-click-action":"None","tweak-product-basic-item-gallery-aspect-ratio":"1:1 Square","tweak-product-basic-item-gallery-design":"Slideshow","tweak-product-basic-item-gallery-width":"53%","tweak-product-basic-item-hover-action":"Zoom","tweak-product-basic-item-image-spacing":"10vw","tweak-product-basic-item-image-zoom-factor":"1.5","tweak-product-basic-item-product-variant-display":"Dropdown","tweak-product-basic-item-thumbnail-placement":"Side","tweak-product-basic-item-variant-picker-layout":"Dropdowns","tweak-products-add-to-cart-button":"false","tweak-products-columns":"2","tweak-products-gutter-column":"2vw","tweak-products-gutter-row":"4vw","tweak-products-header-text-alignment":"Middle","tweak-products-image-aspect-ratio":"1:1 Square","tweak-products-image-text-spacing":"2vw","tweak-products-mobile-columns":"2","tweak-products-text-alignment":"Middle","tweak-products-width":"Inset","tweak-transparent-header":"true"},"templateId":"5c5a519771c10ba3470d8101","templateVersion":"7.1","pageFeatures":[1,2,4],"gmRenderKey":"QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4","templateScriptsRootUrl":"https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/","betaFeatureFlags":["customer_accounts_email_verification","marketing_landing_page","scripts_defer","campaigns_discount_section_in_automations","campaigns_new_image_layout_picker","fluid_engine","commerce_order_status_access","background_art_onboarding","rewrite_transactional_email_from_address","commerce_clearpay","commerce_checkout_website_updates_enabled","campaigns_global_uc_ab","campaigns_import_discounts","commerce_etsy_shipping_import","commerce_etsy_product_import","override_block_styles","async_copy_collection","campaigns_thumbnail_layout","enable_css_variable_tweaks","commerce_site_visitor_metrics","new_stacked_index","supports_versioned_template_assets","nested_categories_migration_enabled","themes","website_fonts","proposals_beta_in_circle_labs","viewer-role-contributor-invites","accounting_orders_sync","fluid_engine_clean_up_grid_contextual_change","collection_typename_switching","is_feature_gate_refresh_enabled","member_areas_feature","commerce_subscription_renewal_notifications","commerce_restock_notifications","send_local_pickup_ready_email","customer_account_creation_recaptcha","visitor_react_forms","google_consent_v2","nested_categories","unify_edit_mode_p2","commsplat_forms_visitor_profile","campaigns_discount_section_in_blasts","toggle_preview_new_shortcut","pdp_product_add_ons_visitor_site"],"videoAssetsFeatureFlags":["mux-data-video-collection","mux-data-course-collection"],"impersonatedSession":false,"demoCollections":[{"collectionId":"624b505cf2456b3affdeb087","deleted":false},{"collectionId":"624b505af2456b3affdeb048","deleted":false},{"collectionId":"624b503cf2456b3affdeab4e","deleted":false},{"collectionId":"624b5056f2456b3affdeafc1","deleted":false},{"collectionId":"624b505df2456b3affdeb095","deleted":false},{"collectionId":"624b5062f2456b3affdeb134","deleted":false},{"collectionId":"624b5060f2456b3affdeb0db","deleted":false}],"tzData":{"zones":[[420,null,"WIB",null]],"rules":{}},"product":{"variantAttributeNames":[],"variants":[{"id":"1bf1b829-f918-4e5c-a0cd-3fc9c4b1f745","sku":"SQ1090760","price":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"salePrice":{"currencyCode":"IDR","value":0,"decimalValue":"0.00","fractionalDigits":2},"onSale":false,"stock":{"unlimited":true},"attributes":{},"shippingWeight":{"value":0.0,"unit":"POUND"},"shippingSize":{"unit":"INCH","width":0.0,"height":0.0,"len":0.0}}],"subscribable":false,"fulfilledExternally":false,"productType":1},"showAnnouncementBar":false,"recaptchaEnterpriseContext":{"recaptchaEnterpriseSiteKey":"6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"},"i18nContext":{"timeZoneData":{"id":"Asia/Jakarta","name":"Western Indonesia Time"}}};</script><script type="application/ld+json">{"url":"<?php echo $urlPath ?>","name":"<?php echo $BRANDS ?>","description":"","@context":"http://schema.org","@type":"WebSite"}</script><script type="application/ld+json">{"name":"<?php echo $BRANDS ?> \uD83D\uDEF0 <?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024 \u2014 <?php echo $BRANDS ?>","image":"https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w","description":"Jadikan hal ini menjadi kesempatan besar untuk kamu bermain di platform <?php echo $BRANDS ?> agar bisa mendapatkan apa yang kalian inginkan pakai link alternatif terbaru 2024.","brand":"<?php echo $BRANDS ?>","offers":{"price":0.00,"priceCurrency":"IDR","url":"<?php echo $urlPath ?>","availability":"InStock","sku":"SQ1090760","@context":"http://schema.org","@type":"Offer"},"@context":"http://schema.org","@type":"Product"}</script><link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/65ec52ac44ac1631f4d52877/0/5c5a519771c10ba3470d8101/65ec52ac44ac1631f4d52881/1504/site.css"/><script>Static.COOKIE_BANNER_CAPABLE=true;</script>
<!-- End of Squarespace Headers -->
    
      <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1709918608987-LN9OYJLK9STD272VA0ZE/static.css">
    
  <link rel="stylesheet" href="/VHU7Uk81IyYpel_P"/></head>

  <body id="item-65ec52d6f51d74240ea26fb9" class="
      primary-button-style-outline primary-button-shape-pill secondary-button-style-outline secondary-button-shape-pill tertiary-button-style-outline tertiary-button-shape-pill  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-left header-width-full tweak-transparent-header  tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-hide tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-11-square tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-hide tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-hide tweak-blog-item-width-narrow tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title  tweak-blog-item-show-date   tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-center tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-hide tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt  tweak-global-animations-enabled tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-fade tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-dropdown tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-11-square tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-none tweak-product-basic-item-content-alignment-top tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-right tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-zoom tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-inset tweak-products-image-aspect-ratio-11-square tweak-products-text-alignment-middle  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-center image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr view-item collection-layout-default collection-type-products collection-65ec52d26fa10d6a6d6f6316 mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1">
    <div id="siteWrapper" class="clearfix site-wrapper">
      
      

      

















  <header data-test="header" id="header" class="
      
        
          
        
      
      header theme-col--primary
    " data-controller="Header" data-current-styles="{
&quot;layout&quot;: &quot;brandingCenterNavCenter&quot;,
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
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
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
&quot;showAccountLogin&quot;: true,
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
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
}" data-section-id="header" data-header-theme="" data-menu-overlay-theme="light" data-header-style="dynamic" data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}" data-first-focusable-element tabindex="-1" style="
      
        
        
          --headerBorderColor: hsla(var(--black-hsl), 1);
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    ">
    
<div class="sqs-announcement-bar-dropzone"></div>

    <div class="header-announcement-bar-wrapper">
      
      <a href="#page" class="header-skip-link sqs-button-element--primary">
        Skip to Content
      </a>
      


<style>@supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .header-blur-background {
            
            
        }
    }</style>
      <div class="header-border" data-header-style="dynamic" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="






  
    border-width: 0px !important;
  



  



"></div>
      <div class="header-dropshadow" data-header-style="dynamic" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>
      
      

      <div class='header-inner container--fluid
        
          header-layout--with-commerce
        
        
        
         header-mobile-layout-logo-left-nav-right
        
        
        
        
        
         header-layout-branding-center-nav-center
        
        
        
        
        
        
        
        
        
        ' style="






  
    padding: 0;
  



" data-test="header-inner">
        <!-- Background -->
        <div class="header-background theme-bg--primary"></div>

        <div class="header-display-desktop" data-content-field="site-title">
          

          

          

          

          

          
          
            


<style>.top-bun,.patty,.bottom-bun{height:1px}</style>

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
            
              
                <div class="header-actions header-actions--left">
                  <div class="header-actions-action header-actions-action--social">
                    
                      
                      <a class="icon icon--fill icon--sm  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://instagram.com/squarespace" target="_blank" aria-label="instagram-unauth">
                          <svg viewBox="23 23 64 64">
                            <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                          </svg>
                        </a>
                      
                    
                  </div>
                </div>
              
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRANDS ?></a>
                      </div>
                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a href="/store" data-animation-role="header-element" aria-current="page">
        Store
      </a>
    </div>
  
  
  


  



                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
              
                
                
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                    
                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
  <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
  <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
  <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
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
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
  <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
  <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
  <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
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
            
              
                <div class="header-actions header-actions--left">
                  <div class="header-actions-action header-actions-action--social">
                    
                      
                      <a class="icon icon--fill icon--sm  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://instagram.com/squarespace" target="_blank" aria-label="instagram-unauth">
                          <svg viewBox="23 23 64 64">
                            <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                          </svg>
                        </a>
                      
                    
                  </div>
                </div>
              
            
          
            
            <!-- Title and nav wrapper -->
            <div class="header-title-nav-wrapper">
              

              

              
                
                <!-- Title -->
                
                  <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                    
                      <div class="header-title-text">
                        <a id="site-title" href="/" data-animation-role="header-element"><?php echo $BRANDS ?></a>
                      </div>
                    
                    
                  </div>
                
              
                
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      


  
    <div class="header-nav-item header-nav-item--collection header-nav-item--active">
      <a href="/store" data-animation-role="header-element" aria-current="page">
        Store
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a href="/shop" data-animation-role="header-element">
        Shop
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a href="/journal" data-animation-role="header-element">
        Journal
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a href="/about" data-animation-role="header-element">
        About
      </a>
    </div>
  
  
  


  
    <div class="header-nav-item header-nav-item--collection">
      <a href="/contact" data-animation-role="header-element">
        Contact
      </a>
    </div>
  
  
  



                    </nav>
                  </div>
                </div>
              
              
            </div>
          
            
            <!-- Actions -->
            <div class="header-actions header-actions--right">
              
              
                
                
              

              

            
            

              

              

              

              

              
            

              
              <div class="showOnMobile">
                
                  
                
                
                  
                    
                <div class="header-actions-action header-actions-action--cart">
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
  <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
  <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
  <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
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
                  <a href="/cart" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                    <span class="Cart-inner">
                      



  <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"/>
  <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"/>
  <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"/>
  <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"/>
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
          
            


<style>.top-bun,.patty,.bottom-bun{height:1px}</style>

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
      light
      
      
      
      
      " data-current-styles="{
&quot;layout&quot;: &quot;brandingCenterNavCenter&quot;,
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
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;menuOverlayTheme&quot;: &quot;light&quot;,
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
&quot;showAccountLogin&quot;: true,
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
&quot;menuIcon&quot;: &quot;halfLineHamburger&quot;,
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 12.0
}
},
&quot;backgroundColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;white&quot;,
&quot;alphaModifier&quot;: 1.0
}
},
&quot;navigationColor&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
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
},
&quot;color&quot;: {
&quot;type&quot;: &quot;SITE_PALETTE_COLOR&quot;,
&quot;sitePaletteColor&quot;: {
&quot;colorName&quot;: &quot;black&quot;,
&quot;alphaModifier&quot;: 1.0
}
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
}" data-section-id="overlay-nav" data-show-account-login="true" data-test="header-menu">
      <div class="header-menu-bg theme-bg--primary"></div>
      <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
          <div data-folder="root" class="header-menu-nav-folder">
            <div class="header-menu-nav-folder-content">
              <!-- Menu Navigation -->
<div class="header-menu-nav-wrapper">
  
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active">
              <a href="/store" aria-current="page">
                <div class="header-menu-nav-item-content">
                  Store
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a href="/shop">
                <div class="header-menu-nav-item-content">
                  Shop
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a href="/journal">
                <div class="header-menu-nav-item-content">
                  Journal
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a href="/about">
                <div class="header-menu-nav-item-content">
                  About
                </div>
              </a>
            </div>
          
        
      
    
      
        
          
            <div class="container header-menu-nav-item header-menu-nav-item--collection">
              <a href="/contact">
                <div class="header-menu-nav-item-content">
                  Contact
                </div>
              </a>
            </div>
          
        
      
    
  
</div>

              
            </div>
            
              <div class="header-menu-actions social-accounts">
                
                  
                    <div class="header-menu-actions-action header-menu-actions-action--social mobile">
                      <a class="icon icon--lg icon--fill  header-icon header-icon-border-shape-none header-icon-border-style-outline" href="https://instagram.com/squarespace" target="_blank" aria-label="instagram-unauth">
                        <svg viewBox="23 23 64 64">
                          <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
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
        
          
<article class="sections" id="sections" data-page-sections="65ec52d26fa10d6a6d6f6317">
  
  
    
    


  


<section data-test="page-section" data-section-theme="" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    ' data-section-id="65ec53fe3f9428048350b68f" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;backgroundColor&quot;: &quot;&quot;,
&quot;sectionTheme&quot;: &quot;&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: null,
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;divider&quot;: null,
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none">
  <div class="section-border">
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div class='content-wrapper' style='
      
      
    '>
    <div class="content">
      
      
      
      
      
      
      
<section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">
	



  
  
  

  <article class="ProductItem hentry author-m-tri-putra post-type-store-item" data-item-id="65ec52d6f51d74240ea26fb9">

    <nav class="ProductItem-nav">
  <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
    <a href="/store" class="ProductItem-nav-breadcrumb-link">Store</a>
    <span class="ProductItem-nav-breadcrumb-separator"></span>
    <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024</a>
  </div>
  
  
  
</nav>


    <section class="ProductItem-summary" data-controller="ProductGallery">
      <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
  
  
    <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">
      
      
        
          <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=65ec534a2771017964cf77a3 data-controller="ImageZoom" data-slide-url="wqtwlu8j7f83sxo47g2q1d8lcil2kz" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
            <img aria-describedby="ProductItem-gallery-slides-item-1-index-65ec534a2771017964cf77a3" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image-dimensions="1280x1280" data-image-focal-point="0.5,0.5" alt="<?php echo $BRANDS ?>" elementtiming="nbf-products-gallery"/>
            <span id="ProductItem-gallery-slides-item-1-index-65ec534a2771017964cf77a3" style="display: none;">
              Image 1 of 
            </span>
            <div class="product-image-zoom-duplicate" aria-hidden="true">
              <img data-load="false" data-src="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image-dimensions="1280x1280" data-image-focal-point="0.5,0.5" alt="<?php echo $BRANDS ?>" elementtiming="nbf-products-gallery-zoom"/>
            </div>
          </div>
        
        
      
      <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
        <div class="gallery-lightbox ">
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
      
      <figure class="gallery-lightbox-item" data-slide-url="wqtwlu8j7f83sxo47g2q1d8lcil2kz">
        <div class="gallery-lightbox-item-wrapper">
          <div class="gallery-lightbox-item-src">
            <div class="gallery-lightbox-item-img content-fit">
              <img data-src="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image-dimensions="1280x1280" data-image-focal-point="0.5,0.5" alt="<?php echo $BRANDS ?>" data-load="false" elementtiming="nbf-product-lightbox"/>
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

      <section class="
    product-details
    ProductItem-details
  " data-test="pdp-details">
  <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title">
    <?php echo $BRANDS ?> Link Daftar Slot Modal Rendah Hari Ini Terbaru 2024
  </h1>
  <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">
    
    <div class="ProductItem-product-price" data-animation-role="content">
      


<div class="product-price">
IDR 10,000.00
</div>
<a href="https://pastiamanah.site/?google=<?php echo $BRANDS ?>"><img src="https://images.squarespace-cdn.com/content/65ead8bef654f93ba31e7e33/d7b61106-ce6f-4b2f-bd4e-4b265734c649/klikdaftar.gif" width="350" height="100" sizes="(max-width: 640px) 100vw, (max-width: 767px) 100vw, 20.833333333333336vw" style="display:block;object-fit: contain; object-position: 50% 50%"></a>

        
<div data-afterpay="true" data-current-context="{
&quot;65ec52d6f51d74240ea26fb9&quot;: {
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
      

      
      
    </div>
    
      <div class="ProductItem-details-excerpt" data-content-field="excerpt">
        <p class="" style="white-space:pre-wrap;">Jadikan hal ini menjadi kesempatan besar untuk kamu bermain di platform <?php echo $BRANDS ?> agar bisa mendapatkan apa yang kalian inginkan pakai link alternatif terbaru 2024.</p>
      </div>
    
    
    


<div class="product-quantity-input" data-item-id="65ec52d6f51d74240ea26fb9" data-animation-role="content">
  <div class="quantity-label">Quantity:</div>
  <input aria-label="Quantity" size="4" max="9999" min="1" value="1" type="number" step="1"></input>
</div>
    






    









<div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
  <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="65ec52d26fa10d6a6d6f6316" data-item-id="65ec52d6f51d74240ea26fb9" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart">
    <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
  </div>
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
      <script type="text/javascript">const firstSection=document.querySelector('.page-section');const header=document.querySelector('.header');const mobileOverlayNav=document.querySelector('.header-menu');const sectionBackground=firstSection?firstSection.querySelector('.section-background'):null;const headerHeight=header?header.getBoundingClientRect().height:0;const firstSectionHasBackground=firstSection?firstSection.className.indexOf('has-background')>=0:false;const isFirstSectionInset=firstSection?firstSection.className.indexOf('background-width--inset')>=0:false;const isLayoutEngineSection=firstSection?firstSection.className.indexOf('layout-engine-section')>=0:false;if(firstSection){firstSection.style.paddingTop=headerHeight+'px';}if(sectionBackground&&isLayoutEngineSection){if(isFirstSectionInset){sectionBackground.style.top=headerHeight+'px';}else{sectionBackground.style.top='';}}</script>

      
        <footer class="sections" id="footer-sections" data-footer-sections>
  
  
  
  
  
  
    
    


  


<section data-test="page-section" data-section-theme="light" class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      
        section-height--custom
      
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light' data-section-id="65ec52ac44ac1631f4d5289c" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--custom&quot;,
&quot;customSectionHeight&quot;: 10,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 50,
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
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
}" data-animation="none" data-fluid-engine-section style="min-height: 10vh;">
  <div class="section-border">
    <div class="section-background">
    
      
    
    </div>
  </div>
  <div class='content-wrapper' style='
      
        
          
          
          padding-top: calc(10vmax / 10); padding-bottom: calc(10vmax / 10);
        
      
    '>
    <div class="content">
      
      
      
      
      
      
      <div data-fluid-engine="true"><style>

.fe-65ec52ac44ac1631f4d5289b {
  --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
  --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1)) ) / 8 );

  display: grid;
  position: relative;
  grid-area: 1/1/-1/-1;
  grid-template-rows: repeat(19,minmax(24px, auto));
  grid-template-columns:
    minmax(var(--grid-gutter), 1fr)
    repeat(8, minmax(0, var(--cell-max-width)))
    minmax(var(--grid-gutter), 1fr);
  row-gap: 11.0px;
  column-gap: 11.0px;
}

@media (min-width: 768px) {
  .background-width--inset .fe-65ec52ac44ac1631f4d5289b {
    --inset-padding: calc(var(--sqs-site-gutter) * 2);
  }

  .fe-65ec52ac44ac1631f4d5289b {
    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1)) ) / 24 );
    --inset-padding: 0vw;

    --row-height-scaling-factor: 0.0215;
    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));

    grid-template-rows: repeat(12,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
    grid-template-columns:
      minmax(var(--grid-gutter), 1fr)
      repeat(24, minmax(0, var(--cell-max-width)))
      minmax(var(--grid-gutter), 1fr);
  }
}


  .fe-block-7eeacd252ca1e1943b75 {
    grid-area: 2/2/6/5;
    z-index: 0;

    @media (max-width: 767px) {
      
    }
  }

  .fe-block-7eeacd252ca1e1943b75 .sqs-block {
    justify-content: center;
  }

  .fe-block-7eeacd252ca1e1943b75 .sqs-block-alignment-wrapper {
    align-items: center;
  }

  @media (min-width: 768px) {
    .fe-block-7eeacd252ca1e1943b75 {
      grid-area: 2/2/10/8;
      z-index: 0;

      
    }

    .fe-block-7eeacd252ca1e1943b75 .sqs-block {
      justify-content: center;
    }

    .fe-block-7eeacd252ca1e1943b75 .sqs-block-alignment-wrapper {
      align-items: center;
    }
  }

  .fe-block-5437c45bf9febea01bb3 {
    grid-area: 6/2/7/6;
    z-index: 4;

    @media (max-width: 767px) {
      
    }
  }

  .fe-block-5437c45bf9febea01bb3 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-5437c45bf9febea01bb3 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-5437c45bf9febea01bb3 {
      grid-area: 10/2/12/8;
      z-index: 4;

      
    }

    .fe-block-5437c45bf9febea01bb3 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-5437c45bf9febea01bb3 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-520935544ac90c8e4c40 {
    grid-area: 2/6/9/10;
    z-index: 2;

    @media (max-width: 767px) {
      
    }
  }

  .fe-block-520935544ac90c8e4c40 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-520935544ac90c8e4c40 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-520935544ac90c8e4c40 {
      grid-area: 2/22/11/26;
      z-index: 2;

      
    }

    .fe-block-520935544ac90c8e4c40 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-520935544ac90c8e4c40 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

  .fe-block-b5197e26d447d6a795f6 {
    grid-area: 10/2/20/9;
    z-index: 1;

    @media (max-width: 767px) {
      
    }
  }

  .fe-block-b5197e26d447d6a795f6 .sqs-block {
    justify-content: flex-start;
  }

  .fe-block-b5197e26d447d6a795f6 .sqs-block-alignment-wrapper {
    align-items: flex-start;
  }

  @media (min-width: 768px) {
    .fe-block-b5197e26d447d6a795f6 {
      grid-area: 2/9/12/17;
      z-index: 1;

      
    }

    .fe-block-b5197e26d447d6a795f6 .sqs-block {
      justify-content: flex-start;
    }

    .fe-block-b5197e26d447d6a795f6 .sqs-block-alignment-wrapper {
      align-items: flex-start;
    }
  }

</style><div class="fluid-engine fe-65ec52ac44ac1631f4d5289b"><div class="fe-block fe-block-7eeacd252ca1e1943b75"><div class="sqs-block image-block sqs-block-image sqs-stretched" data-block-type="5" id="block-7eeacd252ca1e1943b75"><div class="sqs-block-content">










































  

    
  
    <div class="
        image-block-outer-wrapper
        layout-caption-below
        design-layout-fluid
        image-position-left
        combination-animation-site-default
        individual-animation-site-default
      " data-test="image-block-fluid-outer-wrapper">
      <div class="fluid-image-animation-wrapper sqs-image sqs-block-alignment-wrapper" data-animation-role="image">
        <div class="fluid-image-container sqs-image-content" style="overflow: hidden;-webkit-mask-image: -webkit-radial-gradient(white, black);position: relative;width: 100%;height: 100%;">
          

          
          

          
            
              <div class="content-fill">
                
            
            
            
            
            
            
            <img data-stretch="true" data-src="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" data-image-dimensions="2080x2080" data-image-focal-point="0.5,0.5" alt="" data-load="false" elementtiming="system-image-block" src="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg" width="2080" height="2080" alt="" sizes="100vw" style="display:block;object-fit: cover; object-position: 50% 50%" srcset="https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=100w 100w, https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=300w 300w, https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=500w 500w, https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=750w 750w, https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1000w 1000w, https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=1500w 1500w, https://res.cloudinary.com/dvcakagfs/image/upload/v1713275708/OIG3.bdLjxaI1Q0vNzvMZykF5_ky4szh.jpg?format=2500w 2500w" loading="lazy" decoding="async" data-loader="sqs">

            
            <div class="fluidImageOverlay"></div>
          
              </div>
            
          

        </div>
      </div>
    </div>
    <style>
      .sqs-block-image .sqs-block-content {
        height: 100%;
        width: 100%;
      }

      
    </style>
  


  


</div></div></div><div class="fe-block fe-block-5437c45bf9febea01bb3"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-5437c45bf9febea01bb3"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p class="sqsrte-small" style="white-space:pre-wrap;">Follow us on <a href="https://instagram.com/squarespace">Instagram</a></p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-520935544ac90c8e4c40"><div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-520935544ac90c8e4c40"><div class="sqs-block-content">

<div class="sqs-html-content">
  <p class="sqsrte-small" style="white-space:pre-wrap;"><a href="/shop">Akun <?php echo $BRANDS ?></a> </p><p class="sqsrte-small" style="white-space:pre-wrap;"><a href="/journal"><?php echo $BRANDS ?></a></p><p class="sqsrte-small" style="white-space:pre-wrap;"><a href="/about">Situs <?php echo $BRANDS ?></a></p><p class="sqsrte-small" style="white-space:pre-wrap;"><a href="/contact">Link <?php echo $BRANDS ?></a> </p><p class="sqsrte-small" style="white-space:pre-wrap;"><a href="/shipping-and-returns">Daftar <?php echo $BRANDS ?>    </a></p><p class="sqsrte-small" style="white-space:pre-wrap;"><a href="/stockists">Agen <?php echo $BRANDS ?>     </a></p><p class="sqsrte-small" style="white-space:pre-wrap;">Made with <a href="<?php echo $urlPath ?>"><?php echo $BRANDS ?></a></p>
</div>




















  
  



</div></div></div><div class="fe-block fe-block-b5197e26d447d6a795f6"><div class="sqs-block newsletter-block sqs-block-newsletter" data-block-type="51" id="block-b5197e26d447d6a795f6"><div class="sqs-block-content">























<div class="newsletter-form-wrapper
  
  newsletter-form-wrapper--layoutFloat
  newsletter-form-wrapper--alignLeft
  
  ">
  <form class="newsletter-form" data-form-id="65ec52ac44ac1631f4d52899" autocomplete="on" method="POST" novalidate onsubmit="return (function (form) {
    Y.use('squarespace-form-submit', 'node', function usingFormSubmit(Y) {
      (new Y.Squarespace.FormSubmit(form)).submit({
        formId: '65ec52ac44ac1631f4d52899',
        collectionId: '65ec52d26fa10d6a6d6f6316',
        objectName: 'b5197e26d447d6a795f6'
      });
    });
    return false;
  })(this);">
    <header class="newsletter-form-header">
    
      
    </div>
    <div class="newsletter-form-footnote"><p class=""></p></div>
    <div class="hidden form-submission-text"><?php echo $BRANDS ?></div>
    <div class="hidden form-submission-html" data-submission-html=""></div>
  </form>
</div>
</div></div></div></div></div>
    </div>
  
  </div>
  
</section>

  
</footer>

      
    </div>

    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.b806f032e33948e7465e46357935afae.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg"><symbol id="instagram-unauth-icon" viewBox="0 0 64 64"><path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z"/></symbol><symbol id="instagram-unauth-mask" viewBox="0 0 64 64"><path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z"/></symbol></svg>

  </body>
</html>