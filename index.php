<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
}

if (isset($_GET['produk'])) {
    $filename = "goban.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['produk']);
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
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="id-ID" data-authenticated-account>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="">
    <meta charset="utf-8" />
    <title><?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik</title>
    <meta http-equiv="Accept-CH" content="Sec-CH-UA-Platform-Version, Sec-CH-UA-Model" />
    <link rel="icon" type="image/x-icon" href="https://assets.squarespace.com/universal/default-favicon.ico" />
    <link rel="canonical" href="<?php echo $urlPath ?>" />
    <link rel="amphtml" href="https://bromowali.store/?login=<?php echo $BRANDS ?>" />
    <meta property="og:site_name" content="<?php echo $BRANDS ?>" />
    <meta property="og:title" content="<?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik" />
    <meta property="og:url" content="<?php echo $urlPath ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:description" content="<?php echo $BRANDS ?> tempat terbaik untuk anda mendapatkan peluang slot server luar negeri terbaik dan paling seru alternatif login link terbaik 2024." />
    <meta property="og:image" content="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg?format=1500w" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="product:price:amount" content="25000.00" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />
    <meta itemprop="name" content="<?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik" />
    <meta itemprop="url" content="<?php echo $urlPath ?>" />
    <meta itemprop="description" content="<?php echo $BRANDS ?> tempat terbaik untuk anda mendapatkan peluang slot server luar negeri terbaik dan paling seru alternatif login link terbaik 2024." />
    <meta itemprop="thumbnailUrl" content="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg?format=1500w" />
    <link rel="image_src" href="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg?format=1500w" />
    <meta itemprop="image" content="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg?format=1500w" />
    <meta name="twitter:title" content="<?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik" />
    <meta name="twitter:image" content="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg?format=1500w" />
    <meta name="twitter:url" content="<?php echo $urlPath ?>" />
    <meta name="twitter:card" content="summary" />

    <meta name="twitter:description" content="<?php echo $BRANDS ?> tempat terbaik untuk anda mendapatkan peluang slot server luar negeri terbaik dan paling seru alternatif login link terbaik 2024." />
    <meta name="description" content="<?php echo $BRANDS ?> tempat terbaik untuk anda mendapatkan peluang slot server luar negeri terbaik dan paling seru alternatif login link terbaik 2024." />
    <link rel="preconnect" href="https://images.squarespace-cdn.com">
    <script type="text/javascript" src="//use.typekit.net/ik/3lMzDaKDLS2ryiXqBeO6ewaj4jRsChLnT2uQ9aB2ucGfecGJXnX1IyvhF2jtFRZLFRmcjQStjRItZRwhFcbDFcJaFDq3jQice6MKfcBRiAuTdKu3Scv7f6Rwk3IbMg6BJMJ7f6RBk3IbMg6YJMJ7f6RFk3IbMg6VJMJ7f6Rek3IbMg6sJMHbMdVUE-ve.js"></script>
    <script type="text/javascript">
      try {
        Typekit.load();
      } catch (e) {}
    </script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300">
    <script type="text/javascript" crossorigin="anonymous" defer="defer" nomodule="nomodule" src="//assets.squarespace.com/@sqs/polyfiller/1.6/legacy.js"></script>
    <script type="text/javascript" crossorigin="anonymous" defer="defer" src="//assets.squarespace.com/@sqs/polyfiller/1.6/modern.js"></script>
    <script type="text/javascript">
      SQUARESPACE_ROLLUPS = {};
    </script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-b32116f2b591adea986c-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_runtime');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-runtime-b32116f2b591adea986c-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-extract_css_moment_js_vendor');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/extract-css-moment-js-vendor-6f117db4eb7fd4392375-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-cldr_resource_pack');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/cldr-resource-pack-1edcdb1d4b6b94ec8c7e-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors_stable');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-stable-3598b219a3c023c1915a-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-vendors-7a98df8511da483159d9-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common_vendors');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-vendors-7a98df8511da483159d9-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/common-56c775f69220522a7feb-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-common');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/common-56c775f69220522a7feb-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].js = ["//assets.squarespace.com/universal/scripts-compressed/commerce-cbf6a66bc277648f441e-min.id-ID.js"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <script crossorigin="anonymous" src="//assets.squarespace.com/universal/scripts-compressed/commerce-cbf6a66bc277648f441e-min.id-ID.js" defer></script>
    <script>
      (function(rollups, name) {
        if (!rollups[name]) {
          rollups[name] = {};
        }
        rollups[name].css = ["//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.id-ID.css"];
      })(SQUARESPACE_ROLLUPS, 'squarespace-commerce');
    </script>
    <link rel="stylesheet" type="text/css" href="//assets.squarespace.com/universal/styles-compressed/commerce-2af06f7948db5477d8f5-min.id-ID.css">
    <script data-name="static-context">
      Static = window.Static || {};
      Static.SQUARESPACE_CONTEXT = {
        "facebookAppId": "314192535267336",
        "facebookApiVersion": "v6.0",
        "rollups": {
          "squarespace-announcement-bar": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/announcement-bar-96acc1ac039e65e24957-min.id-ID.js"
          },
          "squarespace-audio-player": {
            "css": "//assets.squarespace.com/universal/styles-compressed/audio-player-9fb16b1675c0ff315dae-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/audio-player-52e7797854645a8049b0-min.id-ID.js"
          },
          "squarespace-blog-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/blog-collection-list-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/blog-collection-list-1e390bbcde22c7bbc97f-min.id-ID.js"
          },
          "squarespace-calendar-block-renderer": {
            "css": "//assets.squarespace.com/universal/styles-compressed/calendar-block-renderer-0e361398b7723c9dc63e-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/calendar-block-renderer-b7f7ef044f34ab60f440-min.id-ID.js"
          },
          "squarespace-chartjs-helpers": {
            "css": "//assets.squarespace.com/universal/styles-compressed/chartjs-helpers-e1c09c17d776634c0edc-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/chartjs-helpers-183bb56124237b096402-min.id-ID.js"
          },
          "squarespace-comments": {
            "css": "//assets.squarespace.com/universal/styles-compressed/comments-24b74a0326eae0cd5049-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/comments-57aaa7e0d8bb4318a484-min.id-ID.js"
          },
          "squarespace-custom-css-popup": {
            "css": "//assets.squarespace.com/universal/styles-compressed/custom-css-popup-601245570c1476430172-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/custom-css-popup-1e2a7f3b9e0953b06cd0-min.id-ID.js"
          },
          "squarespace-dialog": {
            "css": "//assets.squarespace.com/universal/styles-compressed/dialog-081be79078914b908a1a-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/dialog-ab8cc7379304a43c4380-min.id-ID.js"
          },
          "squarespace-events-collection": {
            "css": "//assets.squarespace.com/universal/styles-compressed/events-collection-0e361398b7723c9dc63e-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/events-collection-5e7e2c69c45256595707-min.id-ID.js"
          },
          "squarespace-form-rendering-utils": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/form-rendering-utils-6a6ba6d60e07fa60491b-min.id-ID.js"
          },
          "squarespace-forms": {
            "css": "//assets.squarespace.com/universal/styles-compressed/forms-8d93ba2c12ff0765b64c-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/forms-d654c3315c889be0f1a5-min.id-ID.js"
          },
          "squarespace-gallery-collection-list": {
            "css": "//assets.squarespace.com/universal/styles-compressed/gallery-collection-list-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/gallery-collection-list-5f8358cf7b510b32fc49-min.id-ID.js"
          },
          "squarespace-image-zoom": {
            "css": "//assets.squarespace.com/universal/styles-compressed/image-zoom-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/image-zoom-d0c90be829ba36cb62cc-min.id-ID.js"
          },
          "squarespace-pinterest": {
            "css": "//assets.squarespace.com/universal/styles-compressed/pinterest-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/pinterest-a6dbcb964bd882c42ef0-min.id-ID.js"
          },
          "squarespace-popup-overlay": {
            "css": "//assets.squarespace.com/universal/styles-compressed/popup-overlay-b2bf7df4402e207cd72c-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/popup-overlay-44ecaf2976050e48f8c4-min.id-ID.js"
          },
          "squarespace-product-quick-view": {
            "css": "//assets.squarespace.com/universal/styles-compressed/product-quick-view-4aec27f1bd826750e9db-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/product-quick-view-0c717058757f94ff05cd-min.id-ID.js"
          },
          "squarespace-products-collection-item-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-item-v2-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-item-v2-a96b3f54dd47a01900f6-min.id-ID.js"
          },
          "squarespace-products-collection-list-v2": {
            "css": "//assets.squarespace.com/universal/styles-compressed/products-collection-list-v2-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/products-collection-list-v2-0c340509add53a698500-min.id-ID.js"
          },
          "squarespace-search-page": {
            "css": "//assets.squarespace.com/universal/styles-compressed/search-page-dcc0462e30efbd6dc562-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-page-03ccda685ca48569888b-min.id-ID.js"
          },
          "squarespace-search-preview": {
            "js": "//assets.squarespace.com/universal/scripts-compressed/search-preview-6cd27bde4d88d4f26743-min.id-ID.js"
          },
          "squarespace-simple-liking": {
            "css": "//assets.squarespace.com/universal/styles-compressed/simple-liking-a9eb87c1b73b199ce387-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/simple-liking-6a6862d5ff0df1b9784e-min.id-ID.js"
          },
          "squarespace-social-buttons": {
            "css": "//assets.squarespace.com/universal/styles-compressed/social-buttons-98ee3a678d356d849b76-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/social-buttons-4e176f98e042b90d7db4-min.id-ID.js"
          },
          "squarespace-tourdates": {
            "css": "//assets.squarespace.com/universal/styles-compressed/tourdates-0106e2d3707028a62a85-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/tourdates-463b5b9532edddc3565e-min.id-ID.js"
          },
          "squarespace-website-overlays-manager": {
            "css": "//assets.squarespace.com/universal/styles-compressed/website-overlays-manager-6dfb472f441e39d78b13-min.id-ID.css",
            "js": "//assets.squarespace.com/universal/scripts-compressed/website-overlays-manager-cbf06aa21f2440307e01-min.id-ID.js"
          }
        },
        "pageType": 50,
        "website": {
          "id": "65fa78b18f366d36b7790a7f",
          "identifier": "lms.unhi.ac.id",
          "websiteType": 1,
          "contentModifiedOn": 1710938810353,
          "cloneable": false,
          "hasBeenCloneable": false,
          "siteStatus": {
            "value": 3,
            "expiration": 1712123313723
          },
          "language": "id-ID",
          "timeZone": "Asia/Jakarta",
          "machineTimeZoneOffset": 25200000,
          "timeZoneOffset": 25200000,
          "timeZoneAbbr": "WIB",
          "siteTitle": "<?php echo $BRANDS ?> MAXWIN",
          "fullSiteTitle": "<?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik",
          "siteDescription": {
            "html": "",
            "raw": false
          },
          "shareButtonOptions": {
            "8": true,
            "3": true,
            "7": true,
            "2": true,
            "4": true,
            "1": true,
            "6": true
          },
          "authenticUrl": "<?php echo $urlPath ?>",
          "internalUrl": "<?php echo $urlPath ?>",
          "baseUrl": "<?php echo $urlPath ?>",
          "sslSetting": 3,
          "isHstsEnabled": true,
          "createdOn": 1710913713723,
          "templateId": "5c5a519771c10ba3470d8101",
          "installationId": "65fa78b18f366d36b7790a88",
          "templateWebsiteId": "624b503d84c2ba7dc187a92a",
          "hasPassword": false,
          "typekitId": "",
          "statsMigrated": false,
          "imageMetadataProcessingEnabled": false,
          "revalidateBefore": 1710938532235,
          "captchaSettings": {
            "enabledForDonations": false
          },
          "showOwnerLogin": true
        },
        "websiteSettings": {
          "id": "65fa78b18f366d36b7790a83",
          "websiteId": "65fa78b18f366d36b7790a7f",
          "subjects": [],
          "country": "ID",
          "state": "JK",
          "simpleLikingEnabled": true,
          "mobileInfoBarSettings": {
            "isContactEmailEnabled": false,
            "isContactPhoneNumberEnabled": false,
            "isLocationEnabled": false,
            "isBusinessHoursEnabled": false
          },
          "commentLikesAllowed": true,
          "commentAnonAllowed": true,
          "commentThreaded": true,
          "commentApprovalRequired": false,
          "commentAvatarsOn": true,
          "commentSortType": 2,
          "commentFlagThreshold": 0,
          "commentFlagsAllowed": true,
          "commentEnableByDefault": true,
          "commentDisableAfterDaysDefault": 0,
          "disqusShortname": "",
          "commentsEnabled": false,
          "storeSettings": {
            "returnPolicy": {
              "raw": false
            },
            "termsOfService": {
              "raw": false
            },
            "privacyPolicy": {
              "raw": false
            },
            "storeMailingList": {
              "connected": false,
              "list": "",
              "useSingleOptIn": false
            },
            "expressCheckout": false,
            "continueShoppingLinkUrl": "<?php echo $urlPath ?>",
            "testModeOn": true,
            "useLightCart": false,
            "showNoteField": false,
            "shippingCountryDefaultValue": "US",
            "billToShippingDefaultValue": false,
            "showShippingPhoneNumber": true,
            "isShippingPhoneRequired": false,
            "showBillingPhoneNumber": true,
            "isBillingPhoneRequired": false,
            "currenciesSupported": ["USD", "CAD", "GBP", "AUD", "EUR", "CHF", "NOK", "SEK", "DKK", "NZD", "SGD", "MXN", "HKD", "CZK", "ILS", "MYR", "RUB", "PHP", "PLN", "THB", "BRL", "ARS", "COP", "IDR", "INR", "JPY", "ZAR"],
            "defaultCurrency": "USD",
            "selectedCurrency": "IDR",
            "measurementStandard": 1,
            "showCustomCheckoutForm": false,
            "checkoutPageMarketingOptInEnabled": true,
            "enableMailingListOptInByDefault": false,
            "isApplePayEnabled": false,
            "isPaymentRequestEnabled": true,
            "sameAsRetailLocation": false,
            "merchandisingSettings": {
              "scarcityEnabledOnProductItems": false,
              "scarcityEnabledOnProductBlocks": false,
              "scarcityMessageType": "DEFAULT_SCARCITY_MESSAGE",
              "scarcityThreshold": 10,
              "merchantLowStockAlertThreshold": 5,
              "multipleQuantityAllowedForServices": true,
              "restockNotificationsEnabled": false,
              "restockNotificationsMailingListSignUpEnabled": false,
              "relatedProductsEnabled": false,
              "relatedProductsOrdering": "random",
              "soldOutVariantsDropdownDisabled": false,
              "productComposerOptedIn": false,
              "productComposerABTestOptedOut": false,
              "productReviewsEnabled": false
            },
            "minimumOrderSubtotalEnabled": false,
            "minimumOrderSubtotal": {
              "currency": "IDR",
              "value": "0.00"
            },
            "instagramShoppingLinkDestination": 1,
            "storeMigratedToProductCollections2_0": false,
            "isLive": false,
            "multipleQuantityAllowedForServices": true
          },
          "useEscapeKeyToLogin": false,
          "ssBadgeType": 1,
          "ssBadgePosition": 4,
          "ssBadgeVisibility": 1,
          "ssBadgeDevices": 1,
          "pinterestOverlayOptions": {
            "mode": "disabled"
          },
          "ampEnabled": false,
          "userAccountsSettings": {
            "loginAllowed": false,
            "signupAllowed": false
          }
        },
        "cookieSettings": {
          "isCookieBannerEnabled": false,
          "isRestrictiveCookiePolicyEnabled": false,
          "isRestrictiveCookiePolicyAbsolute": false,
          "cookieBannerText": "",
          "cookieBannerTheme": "",
          "cookieBannerVariant": "",
          "cookieBannerPosition": "",
          "cookieBannerCtaVariant": "",
          "cookieBannerCtaText": "",
          "cookieBannerAcceptType": "OPT_IN",
          "cookieBannerOptOutCtaText": "",
          "cookieBannerHasOptOut": false,
          "cookieBannerHasManageCookies": true,
          "cookieBannerManageCookiesLabel": ""
        },
        "websiteCloneable": false,
        "collection": {
          "title": "<?php echo $BRANDS ?> ⚡️",
          "id": "65fa78e11a55e93ddaba649e",
          "fullUrl": "<?php echo $urlPath ?>",
          "type": 13,
          "permissionType": 1
        },
        "item": {
          "title": "<?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik",
          "id": "65fa78e11a55e93ddaba64cb",
          "fullUrl": "<?php echo $urlPath ?>",
          "publicCommentCount": 0,
          "commentState": 1,
          "recordType": 11
        },
        "subscribed": false,
        "appDomain": "squarespace.com",
        "templateTweakable": true,
        "tweakJSON": {
          "form-use-theme-colors": "false",
          "header-logo-height": "20px",
          "header-mobile-logo-max-height": "30px",
          "header-vert-padding": "4vw",
          "header-width": "Full",
          "maxPageWidth": "1200px",
          "pagePadding": "4vw",
          "tweak-blog-alternating-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-alternating-side-by-side-image-spacing": "6%",
          "tweak-blog-alternating-side-by-side-meta-spacing": "20px",
          "tweak-blog-alternating-side-by-side-primary-meta": "Categories",
          "tweak-blog-alternating-side-by-side-read-more-spacing": "20px",
          "tweak-blog-alternating-side-by-side-secondary-meta": "Date",
          "tweak-blog-basic-grid-columns": "2",
          "tweak-blog-basic-grid-image-aspect-ratio": "3:2 Standard",
          "tweak-blog-basic-grid-image-spacing": "50px",
          "tweak-blog-basic-grid-meta-spacing": "37px",
          "tweak-blog-basic-grid-primary-meta": "Categories",
          "tweak-blog-basic-grid-read-more-spacing": "37px",
          "tweak-blog-basic-grid-secondary-meta": "Date",
          "tweak-blog-item-custom-width": "75",
          "tweak-blog-item-show-author-profile": "true",
          "tweak-blog-item-width": "Medium",
          "tweak-blog-masonry-columns": "2",
          "tweak-blog-masonry-horizontal-spacing": "30px",
          "tweak-blog-masonry-image-spacing": "20px",
          "tweak-blog-masonry-meta-spacing": "20px",
          "tweak-blog-masonry-primary-meta": "Categories",
          "tweak-blog-masonry-read-more-spacing": "20px",
          "tweak-blog-masonry-secondary-meta": "Date",
          "tweak-blog-masonry-vertical-spacing": "30px",
          "tweak-blog-side-by-side-image-aspect-ratio": "1:1 Square",
          "tweak-blog-side-by-side-image-spacing": "6%",
          "tweak-blog-side-by-side-meta-spacing": "20px",
          "tweak-blog-side-by-side-primary-meta": "Categories",
          "tweak-blog-side-by-side-read-more-spacing": "20px",
          "tweak-blog-side-by-side-secondary-meta": "Date",
          "tweak-blog-single-column-image-spacing": "50px",
          "tweak-blog-single-column-meta-spacing": "30px",
          "tweak-blog-single-column-primary-meta": "Categories",
          "tweak-blog-single-column-read-more-spacing": "30px",
          "tweak-blog-single-column-secondary-meta": "Date",
          "tweak-events-stacked-show-thumbnails": "true",
          "tweak-events-stacked-thumbnail-size": "3:2 Standard",
          "tweak-fixed-header": "false",
          "tweak-fixed-header-style": "Basic",
          "tweak-global-animations-animation-curve": "ease",
          "tweak-global-animations-animation-delay": "0.1s",
          "tweak-global-animations-animation-duration": "0.1s",
          "tweak-global-animations-animation-style": "fade",
          "tweak-global-animations-animation-type": "none",
          "tweak-global-animations-complexity-level": "detailed",
          "tweak-global-animations-enabled": "false",
          "tweak-portfolio-grid-basic-custom-height": "50",
          "tweak-portfolio-grid-overlay-custom-height": "50",
          "tweak-portfolio-hover-follow-acceleration": "10%",
          "tweak-portfolio-hover-follow-animation-duration": "Fast",
          "tweak-portfolio-hover-follow-animation-type": "Fade",
          "tweak-portfolio-hover-follow-delimiter": "Bullet",
          "tweak-portfolio-hover-follow-front": "false",
          "tweak-portfolio-hover-follow-layout": "Inline",
          "tweak-portfolio-hover-follow-size": "50",
          "tweak-portfolio-hover-follow-text-spacing-x": "1.5",
          "tweak-portfolio-hover-follow-text-spacing-y": "1.5",
          "tweak-portfolio-hover-static-animation-duration": "Fast",
          "tweak-portfolio-hover-static-animation-type": "Fade",
          "tweak-portfolio-hover-static-delimiter": "Hyphen",
          "tweak-portfolio-hover-static-front": "true",
          "tweak-portfolio-hover-static-layout": "Inline",
          "tweak-portfolio-hover-static-size": "50",
          "tweak-portfolio-hover-static-text-spacing-x": "1.5",
          "tweak-portfolio-hover-static-text-spacing-y": "1.5",
          "tweak-portfolio-index-background-animation-duration": "Medium",
          "tweak-portfolio-index-background-animation-type": "Fade",
          "tweak-portfolio-index-background-custom-height": "50",
          "tweak-portfolio-index-background-delimiter": "None",
          "tweak-portfolio-index-background-height": "Large",
          "tweak-portfolio-index-background-horizontal-alignment": "Center",
          "tweak-portfolio-index-background-link-format": "Stacked",
          "tweak-portfolio-index-background-persist": "false",
          "tweak-portfolio-index-background-vertical-alignment": "Middle",
          "tweak-portfolio-index-background-width": "Full",
          "tweak-product-basic-item-click-action": "None",
          "tweak-product-basic-item-gallery-aspect-ratio": "3:4 Three-Four (Vertical)",
          "tweak-product-basic-item-gallery-design": "Slideshow",
          "tweak-product-basic-item-gallery-width": "55%",
          "tweak-product-basic-item-hover-action": "None",
          "tweak-product-basic-item-image-spacing": "5vw",
          "tweak-product-basic-item-image-zoom-factor": "1.75",
          "tweak-product-basic-item-product-variant-display": "Button",
          "tweak-product-basic-item-thumbnail-placement": "Side",
          "tweak-product-basic-item-variant-picker-layout": "Dropdowns",
          "tweak-products-add-to-cart-button": "false",
          "tweak-products-columns": "4",
          "tweak-products-gutter-column": "2vw",
          "tweak-products-gutter-row": "4vw",
          "tweak-products-header-text-alignment": "Middle",
          "tweak-products-image-aspect-ratio": "3:4 Three-Four (Vertical)",
          "tweak-products-image-text-spacing": "1.5vw",
          "tweak-products-mobile-columns": "2",
          "tweak-products-text-alignment": "Left",
          "tweak-products-width": "Full",
          "tweak-transparent-header": "false"
        },
        "templateId": "5c5a519771c10ba3470d8101",
        "templateVersion": "7.1",
        "pageFeatures": [1, 2, 4],
        "gmRenderKey": "QUl6YVN5Q0JUUk9xNkx1dkZfSUUxcjQ2LVQ0QWVUU1YtMGQ3bXk4",
        "templateScriptsRootUrl": "https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/",
        "betaFeatureFlags": ["rewrite_transactional_email_from_address", "visitor_react_forms", "enable_css_variable_tweaks", "header_usability_improvements", "fluid_engine_new_multiselect_actions", "sticky_scroll", "blog_monetization", "campaigns_import_discounts", "commerce_etsy_product_import", "content_ai_brand_identity", "fluid_engine_clean_up_grid_contextual_change", "commerce_order_status_access", "website_fonts", "campaigns_discount_section_in_blasts", "campaigns_thumbnail_layout", "link_editor_redesign", "is_feature_gate_refresh_enabled", "scripts_defer", "override_block_styles", "nested_categories_migration_enabled", "commerce_subscription_renewal_notifications", "member_areas_feature", "fluid_engine", "send_local_pickup_ready_email", "pdp_product_add_ons_visitor_site", "template_translation_english_fallbacks", "commerce_site_visitor_metrics", "commerce_clearpay", "commerce_checkout_website_updates_enabled", "show_mobile_column_in_plp_editor", "shape_block", "commerce_restock_notifications", "fluid_engine_default_mobile_order", "campaigns_discount_section_in_automations", "unify_edit_mode_p1_70", "commerce_etsy_shipping_import", "themes", "toggle_preview_new_shortcut", "website_form_improvements", "seven_one_migration_updated_kb_links", "background_art_onboarding", "campaigns_new_image_layout_picker", "container_styles_improvements", "rte_text_highlights", "commsplat_forms_visitor_profile", "supports_versioned_template_assets", "marketing_landing_page", "summary_block_video_collections", "google_consent_v2", "digital_products_auto_monetization", "unify_edit_mode_p2", "invoicing-on-personal-plans", "accounting_orders_sync", "nested_categories", "commerce_paywall_renewal_notifications", "rte_text_justify_align", "unify_edit_mode_p1", "customer_account_creation_recaptcha", "collection_typename_switching", "proposals_beta_in_circle_labs", "customer_accounts_email_verification", "react_pages_panel", "viewer-role-contributor-invites", "campaigns_global_uc_ab", "new_stacked_index"],
        "videoAssetsFeatureFlags": ["mux-data-video-collection", "mux-data-course-collection"],
        "authenticatedAccount": {
          "id": "65ed372db95f4f40a5cb33ce",
          "tutorialsCompleted": {
            "has-seen-fluid-engine-mobile-changes-notification": true
          },
          "notificationsRead": {},
          "lastLoginOn": 1710752301606,
          "displayName": "MONGKEY BUSSINESS",
          "firstName": "MONGKEY",
          "lastName": "BUSSINESS",
          "eligibleForMarketingDiscount": false,
          "avatarUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65ed372db95f4f40a5cb33ce/aedbd020-8a71-4233-9cde-9bd6fcaf8d3c/thirdPartyMemberAvatar-65ed372db95f4f40a5cb33ce-bb007302-ea6d-467a-bf30-e2dcd86df55d?format=300w",
          "bio": "",
          "roles": {},
          "email": "mongkeybussiness@gmail.com",
          "createdOn": 1710044973301,
          "marketingId": "ee9445c8-7413-4395-b092-89396b61c433",
          "avatarAssetUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65ed372db95f4f40a5cb33ce/aedbd020-8a71-4233-9cde-9bd6fcaf8d3c/thirdPartyMemberAvatar-65ed372db95f4f40a5cb33ce-bb007302-ea6d-467a-bf30-e2dcd86df55d?format=300w",
          "pseudonymAccount": false,
          "preferredLocale": "id-ID"
        },
        "authenticatedAccountWebsiteSettings": {
          "id": "65fa78b5a3f189309797ed32"
        },
        "permissions": {
          "permissions": {
            "1": true
          }
        },
        "websiteRoles": {
          "1": true
        },
        "accessPermissions": [1229, 1310, 1311, 1911, 1417, 2066, 1212, 1223, 11, 1228, 1216, 1513, 0, 1230, 1516, 1414, 1512, 1421, 1219, 1224, 1411, 1220, 14, 1930, 1810, 13, 1419, 1511, 1610, 1418, 1920, 1211, 1420, 1910, 1214, 1112, 18, 1701, 1931, 1932, 1422, 1412, 1221, 12, 15, 1415, 1612, 1, 1218, 1611, 1912, 1233, 1217, 1517, 1514, 1111, 1213, 1210, 1410, 1413, 1110, 1423, 1234, 1225, 1416, 1515, 1510, 1226, 1700, 1215, 1921],
        "memberAccountNames": {
          "65ed372db95f4f40a5cb33ce": {
            "avatarUrl": "https://images.squarespace-cdn.com/content/v2/namespaces/memberAccountAvatars/libraries/65ed372db95f4f40a5cb33ce/aedbd020-8a71-4233-9cde-9bd6fcaf8d3c/thirdPartyMemberAvatar-65ed372db95f4f40a5cb33ce-bb007302-ea6d-467a-bf30-e2dcd86df55d?format=300w",
            "bio": "",
            "displayName": "MONGKEY BUSSINESS"
          }
        },
        "impersonatedSession": false,
        "demoCollections": [{
          "collectionId": "624b504384c2ba7dc187aaa8",
          "deleted": true
        }, {
          "collectionId": "624b505684c2ba7dc187adbe",
          "deleted": true
        }, {
          "collectionId": "624b505984c2ba7dc187ae39",
          "deleted": true
        }, {
          "collectionId": "624b505a84c2ba7dc187ae52",
          "deleted": true
        }],
        "connectedAccounts": [],
        "tzData": {
          "zones": [
            [420, null, "WIB", null]
          ],
          "rules": {}
        },
        "product": {
          "variantAttributeNames": [],
          "variants": [{
            "id": "e2282371-91bd-45ce-9926-26c33ba3908b",
            "sku": "SLOTGACORMAXWINBOSKU",
            "price": {
              "currencyCode": "IDR",
              "value": 2500000,
              "decimalValue": "25000.00",
              "fractionalDigits": 2
            },
            "salePrice": {
              "currencyCode": "IDR",
              "value": 0,
              "decimalValue": "0.00",
              "fractionalDigits": 2
            },
            "onSale": false,
            "stock": {
              "unlimited": false,
              "quantity": 1
            },
            "attributes": {},
            "shippingWeight": {
              "value": 0.0,
              "unit": "POUND"
            },
            "shippingSize": {
              "unit": "INCH",
              "width": 0.0,
              "height": 0.0,
              "len": 0.0
            }
          }],
          "subscribable": false,
          "fulfilledExternally": false,
          "productType": 1
        },
        "showAnnouncementBar": false,
        "recaptchaEnterpriseContext": {
          "recaptchaEnterpriseSiteKey": "6LdDFQwjAAAAAPigEvvPgEVbb7QBm-TkVJdDTlAv"
        },
        "i18nContext": {
          "timeZoneData": {
            "id": "Asia/Jakarta",
            "name": "Western Indonesia Time"
          }
        }
      };
    </script>
    <script type="application/ld+json">
      {
        "url": "<?php echo $urlPath ?>",
        "name": "<?php echo $BRANDS ?>",
        "description": "",
        "@context": "http://schema.org",
        "@type": "WebSite"
      }
    </script>
    <script type="application/ld+json">
      {
        "name": "<?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik",
        "image": "https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg?format=1500w",
        "description": "<?php echo $BRANDS ?> tempat terbaik untuk anda mendapatkan peluang slot server luar negeri terbaik dan paling seru alternatif login link terbaik 2024.",
        "brand": "<?php echo $BRANDS ?>",
        "offers": {
          "price": 25000.00,
          "priceCurrency": "IDR",
          "url": "<?php echo $urlPath ?>",
          "availability": "InStock",
          "sku": "SLOTGACORMAXWINBOSKU",
          "@context": "http://schema.org",
          "@type": "Offer"
        },
        "@context": "http://schema.org",
        "@type": "Product"
      }
    </script>
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/versioned-site-css/65fa78b18f366d36b7790a7f/0/5c5a519771c10ba3470d8101/65fa78b18f366d36b7790a88/1505/site.css" />
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
    <script>
      Static.COOKIE_BANNER_CAPABLE = true;
    </script>
    <!-- End of Squarespace Headers -->
    <link rel="stylesheet" type="text/css" href="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/versioned-assets/1709918608987-LN9OYJLK9STD272VA0ZE/static.css">
  </head>
  <body id="item-65fa78e11a55e93ddaba64cb" class="
      primary-button-style-solid primary-button-shape-square secondary-button-style-outline secondary-button-shape-square tertiary-button-style-solid tertiary-button-shape-square  form-field-style-solid form-field-shape-square form-field-border-all form-field-checkbox-type-icon form-field-checkbox-fill-solid form-field-checkbox-color-inverted form-field-checkbox-shape-square form-field-checkbox-layout-stack form-field-radio-type-icon form-field-radio-fill-solid form-field-radio-color-normal form-field-radio-shape-pill form-field-radio-layout-stack form-field-survey-fill-solid form-field-survey-color-normal form-field-survey-shape-pill form-field-hover-focus-outline form-submit-button-style-label header-overlay-alignment-center header-width-full   tweak-fixed-header-style-basic tweak-blog-alternating-side-by-side-width-full tweak-blog-alternating-side-by-side-image-aspect-ratio-11-square tweak-blog-alternating-side-by-side-text-alignment-left tweak-blog-alternating-side-by-side-read-more-style-show tweak-blog-alternating-side-by-side-image-text-alignment-middle tweak-blog-alternating-side-by-side-delimiter-bullet tweak-blog-alternating-side-by-side-meta-position-top tweak-blog-alternating-side-by-side-primary-meta-categories tweak-blog-alternating-side-by-side-secondary-meta-date tweak-blog-alternating-side-by-side-excerpt-show tweak-blog-basic-grid-width-full tweak-blog-basic-grid-image-aspect-ratio-32-standard tweak-blog-basic-grid-text-alignment-left tweak-blog-basic-grid-delimiter-bullet tweak-blog-basic-grid-image-placement-above tweak-blog-basic-grid-read-more-style-show tweak-blog-basic-grid-primary-meta-categories tweak-blog-basic-grid-secondary-meta-date tweak-blog-basic-grid-excerpt-show tweak-blog-item-width-medium tweak-blog-item-text-alignment-left tweak-blog-item-meta-position-above-title tweak-blog-item-show-categories tweak-blog-item-show-date tweak-blog-item-show-author-name tweak-blog-item-show-author-profile tweak-blog-item-delimiter-bullet tweak-blog-masonry-width-inset tweak-blog-masonry-text-alignment-left tweak-blog-masonry-primary-meta-categories tweak-blog-masonry-secondary-meta-date tweak-blog-masonry-meta-position-top tweak-blog-masonry-read-more-style-show tweak-blog-masonry-delimiter-space tweak-blog-masonry-image-placement-above tweak-blog-masonry-excerpt-show tweak-blog-side-by-side-width-inset tweak-blog-side-by-side-image-placement-left tweak-blog-side-by-side-image-aspect-ratio-11-square tweak-blog-side-by-side-primary-meta-categories tweak-blog-side-by-side-secondary-meta-date tweak-blog-side-by-side-meta-position-top tweak-blog-side-by-side-text-alignment-left tweak-blog-side-by-side-image-text-alignment-middle tweak-blog-side-by-side-read-more-style-show tweak-blog-side-by-side-delimiter-bullet tweak-blog-side-by-side-excerpt-show tweak-blog-single-column-width-inset tweak-blog-single-column-text-alignment-center tweak-blog-single-column-image-placement-above tweak-blog-single-column-delimiter-bullet tweak-blog-single-column-read-more-style-show tweak-blog-single-column-primary-meta-categories tweak-blog-single-column-secondary-meta-date tweak-blog-single-column-meta-position-top tweak-blog-single-column-content-full-post tweak-events-stacked-width-full tweak-events-stacked-height-large  tweak-events-stacked-show-thumbnails tweak-events-stacked-thumbnail-size-32-standard tweak-events-stacked-date-style-with-text tweak-events-stacked-show-time tweak-events-stacked-show-location  tweak-events-stacked-show-excerpt   tweak-global-animations-complexity-level-detailed tweak-global-animations-animation-style-fade tweak-global-animations-animation-type-none tweak-global-animations-animation-curve-ease tweak-portfolio-grid-basic-width-full tweak-portfolio-grid-basic-height-small tweak-portfolio-grid-basic-image-aspect-ratio-11-square tweak-portfolio-grid-basic-text-alignment-left tweak-portfolio-grid-basic-hover-effect-fade tweak-portfolio-grid-overlay-width-full tweak-portfolio-grid-overlay-height-large tweak-portfolio-grid-overlay-image-aspect-ratio-11-square tweak-portfolio-grid-overlay-text-placement-center tweak-portfolio-grid-overlay-show-text-after-hover tweak-portfolio-index-background-link-format-stacked tweak-portfolio-index-background-width-full tweak-portfolio-index-background-height-large  tweak-portfolio-index-background-vertical-alignment-middle tweak-portfolio-index-background-horizontal-alignment-center tweak-portfolio-index-background-delimiter-none tweak-portfolio-index-background-animation-type-fade tweak-portfolio-index-background-animation-duration-medium tweak-portfolio-hover-follow-layout-inline  tweak-portfolio-hover-follow-delimiter-bullet tweak-portfolio-hover-follow-animation-type-fade tweak-portfolio-hover-follow-animation-duration-fast tweak-portfolio-hover-static-layout-inline tweak-portfolio-hover-static-front tweak-portfolio-hover-static-delimiter-hyphen tweak-portfolio-hover-static-animation-type-fade tweak-portfolio-hover-static-animation-duration-fast tweak-product-basic-item-product-variant-display-button tweak-product-basic-item-width-full tweak-product-basic-item-gallery-aspect-ratio-34-three-four-vertical tweak-product-basic-item-text-alignment-left tweak-product-basic-item-navigation-breadcrumbs tweak-product-basic-item-content-alignment-center tweak-product-basic-item-gallery-design-slideshow tweak-product-basic-item-gallery-placement-left tweak-product-basic-item-thumbnail-placement-side tweak-product-basic-item-click-action-none tweak-product-basic-item-hover-action-none tweak-product-basic-item-variant-picker-layout-dropdowns tweak-products-width-full tweak-products-image-aspect-ratio-34-three-four-vertical tweak-products-text-alignment-left  tweak-products-price-show tweak-products-nested-category-type-top  tweak-products-header-text-alignment-middle tweak-products-breadcrumbs image-block-poster-text-alignment-left image-block-card-content-position-center image-block-card-text-alignment-left image-block-overlap-content-position-center image-block-overlap-text-alignment-left image-block-collage-content-position-center image-block-collage-text-alignment-left image-block-stack-text-alignment-left hide-opentable-icons opentable-style-dark tweak-product-quick-view-button-style-floating tweak-product-quick-view-button-position-center tweak-product-quick-view-lightbox-excerpt-display-truncate tweak-product-quick-view-lightbox-show-arrows tweak-product-quick-view-lightbox-show-close-button tweak-product-quick-view-lightbox-controls-weight-light native-currency-code-idr collection-65fa78e11a55e93ddaba649e view-item collection-layout-default collection-type-products mobile-style-available sqs-seven-one
      
        show-pdp-product-add-ons
      
      
        
          
          
        
      
    " data-description="plp-mobile-editor-column" tabindex="-1">
    <div id="siteWrapper" class="clearfix site-wrapper">
      <div id="floatingCart" class="floating-cart hidden">
        <a href="/cart" class="icon icon--stroke icon--fill icon--cart sqs-custom-cart">
          <span class="Cart-inner">
            <svg class="icon icon--cart" viewBox="0 0 31 24">
              <g class="svg-icon cart-icon--odd">
                <circle fill="none" stroke-miterlimit="10" cx="22.5" cy="21.5" r="1" />
                <circle fill="none" stroke-miterlimit="10" cx="9.5" cy="21.5" r="1" />
                <path fill="none" stroke-miterlimit="10" d="M0,1.5h5c0.6,0,1.1,0.4,1.1,1l1.7,13
      c0.1,0.5,0.6,1,1.1,1h15c0.5,0,1.2-0.4,1.4-0.9l3.3-8.1c0.2-0.5-0.1-0.9-0.6-0.9H12" />
              </g>
            </svg>
            <div class="legacy-cart icon-cart-quantity">
              <span class="sqs-cart-quantity">0</span>
            </div>
          </span>
        </a>
      </div>
      <header data-test="header" id="header" class="
      
        light
      
      header theme-col--primary
    " data-controller="Header" data-current-styles="{
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
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;theme&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoCenterNavLeft&quot;,
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
&quot;position&quot;: &quot;bottom&quot;,
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
}" data-section-id="header" data-header-theme="light" data-menu-overlay-theme="" data-header-style="theme" data-language-picker="{
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
}" data-first-focusable-element tabindex="-1" style="
      
        
        
      
      
        --solidHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --solidHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
      
        --gradientHeaderBackgroundColor: hsla(var(--white-hsl), 1);
      
      
        --gradientHeaderNavigationColor: hsla(var(--black-hsl), 1);
      
    ">
        <div class="sqs-announcement-bar-dropzone"></div>
        <div class="header-announcement-bar-wrapper">
          <a href="#page" class="header-skip-link sqs-button-element--primary"> Skip to Content </a>
          <style>
            @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
              .header-blur-background {}
            }
          </style>
          <div class="header-border" data-header-style="theme" data-header-usability-enabled="true" data-header-border="false" data-test="header-border" style="








  



"></div>
          <div class="header-dropshadow" data-header-style="theme" data-header-usability-enabled="true" data-header-dropshadow="false" data-test="header-dropshadow" style="


  
"></div>
          <div class='header-inner container--fluid
        
        
        
        
        
        
        
         header-mobile-layout-logo-center-nav-left
        
        
        
        
        
         header-layout-branding-center
        
        
        
        
        
        ' style="








" data-test="header-inner">
            <!-- Background -->
            <div class="header-background theme-bg--primary"></div>
            <div class="header-display-desktop" data-content-field="site-title">
              <!-- Social -->
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                    </nav>
                  </div>
                </div>
                <!-- Title -->
                <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                  <div class="header-title-text">
                    <a id="site-title" href="<?php echo $urlPath ?>" data-animation-role="header-element"><?php echo $BRANDS ?> MAXWIN</a>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="header-actions-action header-actions-action--social"></div>
                <div class="showOnMobile"></div>
                <div class="showOnDesktop"></div>
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
            <div class="header-display-mobile" data-content-field="site-title">
              <!-- Social -->
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
              <!-- Title and nav wrapper -->
              <div class="header-title-nav-wrapper">
                <!-- Nav -->
                <div class="header-nav">
                  <div class="header-nav-wrapper">
                    <nav class="header-nav-list">
                      <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
                        <a href="<?php echo $urlPath ?>" data-animation-role="header-element" aria-current="page"> <?php echo $BRANDS ?> ⚡️ </a>
                      </div>
                    </nav>
                  </div>
                </div>
                <!-- Title -->
                <div class="
                      header-title
                      
                    " data-animation-role="header-element">
                  <div class="header-title-text">
                    <a id="site-title" href="<?php echo $urlPath ?>" data-animation-role="header-element"><?php echo $BRANDS ?> MAXWIN</a>
                  </div>
                </div>
              </div>
              <!-- Actions -->
              <div class="header-actions header-actions--right">
                <div class="header-actions-action header-actions-action--social"></div>
                <div class="showOnMobile"></div>
                <div class="showOnDesktop"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- (Mobile) Menu Navigation -->
        <div class="header-menu header-menu--folder-list
      
      
      
      
      
      " data-current-styles="{
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
&quot;sectionTheme&quot;: &quot;light&quot;,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;theme&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoCenterNavLeft&quot;,
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
&quot;position&quot;: &quot;bottom&quot;,
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
}" data-section-id="overlay-nav" data-show-account-login="true" data-test="header-menu">
          <div class="header-menu-bg theme-bg--primary"></div>
          <div class="header-menu-nav">
            <nav class="header-menu-nav-list">
              <div data-folder="root" class="header-menu-nav-folder">
                <div class="header-menu-nav-folder-content">
                  <!-- Menu Navigation -->
                  <div class="header-menu-nav-wrapper">
                    <div class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active header-menu-nav-item--homepage">
                      <a href="<?php echo $urlPath ?>" aria-current="page">
                        <div class="header-menu-nav-item-content"> <?php echo $BRANDS ?> ⚡️ </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="header-menu-actions social-accounts"></div>
              </div>
            </nav>
          </div>
        </div>
      </header>
      <main id="page" class="container" role="main">
        <article class="sections" id="sections" data-page-sections="65fa78e11a55e93ddaba6524">
          <section data-test="page-section" data-section-theme="light" class='page-section 
    
      content-collection
      full-bleed-section
      collection-type-products
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light' data-section-id="65fa78e11a55e93ddaba6526" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
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
}" data-animation="none">
            <div class="section-border">
              <div class="section-background"></div>
            </div>
            <div class='content-wrapper' style='
      
      
    '>
              <div class="content">
                <section id="pdp" class="
    products
    collection-content-wrapper
    product-layout-side-by-side
  ">
                  <article class="ProductItem hentry author-mongkey-bussiness post-type-store-item" data-item-id="65fa78e11a55e93ddaba64cb">
                    <nav class="ProductItem-nav">
                      <div class="ProductItem-nav-breadcrumb" data-animation-role="content">
                        <a href="<?php echo $urlPath ?>" class="ProductItem-nav-breadcrumb-link"><?php echo $BRANDS ?> ⚡️</a>
                        <span class="ProductItem-nav-breadcrumb-separator"></span>
                      </div>
                    </nav>
                    <section class="ProductItem-summary" data-controller="ProductGallery">
                      <section aria-label="Gallery" class="ProductItem-gallery" data-product-gallery="container">
                        <div class="ProductItem-gallery-slides" data-animation-role="image" data-product-gallery="slides">
                          <div class="ProductItem-gallery-slides-item" data-slide-index="1" data-image-id=65fada4917882b6f100242e9 data-controller="ImageZoom" data-slide-url="5l9mfg6e5wnri4e3notwfx43ui2ldw" data-product-gallery="slides-item" data-test="pdp-gallery-slide">
                            <img aria-describedby="ProductItem-gallery-slides-item-1-index-65fada4917882b6f100242e9" class="ProductItem-gallery-slides-item-image" data-load="false" data-src="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg" data-image="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg" data-image-dimensions="512x512" data-image-focal-point="0.5,0.5" alt="slot-gacor-maxwin.png" elementtiming="nbf-products-gallery" />
                            <span id="ProductItem-gallery-slides-item-1-index-65fada4917882b6f100242e9" style="display: none;"> Image 1 of </span>
                            <div class="product-image-zoom-duplicate" aria-hidden="true">
                              <img data-load="false" data-src="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg" data-image="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg" data-image-dimensions="512x512" data-image-focal-point="0.5,0.5" alt="slot-gacor-maxwin.png" elementtiming="nbf-products-gallery-zoom" />
                            </div>
                          </div>
                          <div class="gallery-lightbox-outer-wrapper" data-use-image-loader="true" data-controller="Lightbox">
                            <div class="gallery-lightbox ">
                              <div class="gallery-lightbox-background"></div>
                              <div class="gallery-lightbox-header">
                                <button class="gallery-lightbox-close-btn" aria-label="Close" data-close data-test="gallery-lightbox-close">
                                  <div class="gallery-lightbox-close-btn-icon">
                                    <svg viewBox="0 0 40 40">
                                      <path d="M4.3,35.7L35.7,4.3" />
                                      <path d="M4.3,4.3l31.4,31.4" />
                                    </svg>
                                  </div>
                                </button>
                              </div>
                              <div class="gallery-lightbox-wrapper">
                                <div class="gallery-lightbox-list">
                                  <figure class="gallery-lightbox-item" data-slide-url="5l9mfg6e5wnri4e3notwfx43ui2ldw">
                                    <div class="gallery-lightbox-item-wrapper">
                                      <div class="gallery-lightbox-item-src">
                                        <div class="gallery-lightbox-item-img content-fit">
                                          <img data-src="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg" data-image="https://res.cloudinary.com/ditqgd65a/image/upload/v1713360329/slot1_ldl9p6.jpg" data-image-dimensions="512x512" data-image-focal-point="0.5,0.5" alt="slot-gacor-maxwin.png" data-load="false" elementtiming="nbf-product-lightbox" />
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
                                          <polyline fill="none" stroke-miterlimit="10" points="7.3,14.7 2.5,8 7.3,1.2 " />
                                        </svg>
                                      </div>
                                    </button>
                                  </div>
                                  <div class="gallery-lightbox-control" data-next data-test="gallery-lightbox-control-next">
                                    <button class="gallery-lightbox-control-btn" aria-label="Next Slide">
                                      <div class="gallery-lightbox-control-btn-icon">
                                        <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                          <polyline fill="none" stroke-miterlimit="10" points="1.6,1.2 6.5,7.9 1.6,14.7 " />
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
                        <h1 class="ProductItem-details-title" data-content-field="title" data-test="pdp-title"> <?php echo $BRANDS ?> ⚡️ Link Alternatif Game Online Login Terbaru Dan Terbaik </h1>
                        <div data-controller="ProductItemVariants,ProductCartButton" class="ProductItem-details-checkout">
                          <div class="ProductItem-product-price" data-animation-role="content">
                            <div class="product-price"> IDR 25,000.00 </div>
                            <div data-afterpay="true" data-current-context="{
&quot;65fa78e11a55e93ddaba64cb&quot;: {
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
                            <pre>
																											<code>DESCRIPTION</code>
																										</pre>
                            <p class="" style="white-space:pre-wrap;"><?php echo $BRANDS ?> tempat terbaik untuk anda mendapatkan peluang slot server luar negeri terbaik dan paling seru alternatif login link terbaik 2024 </p>
                          </div>
                          <div class="sqs-add-to-cart-button-wrapper" data-animation-role="button">
                            <div class="sqs-add-to-cart-button sqs-suppress-edit-mode sqs-editable-button sqs-button-element--primary " role="button" tabindex="0" data-dynamic-strings data-collection-id="65fa78e11a55e93ddaba649e" data-item-id="65fa78e11a55e93ddaba64cb" data-product-type="1" data-use-custom-label="false" data-original-label="Add To Cart">
                              <div class="sqs-add-to-cart-button-inner">Add To Cart</div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </section>
                    <section class="ProductItem-additional">
                      <div class="sqs-layout sqs-grid-12 columns-12" data-layout-label="Post Body" data-type="item" id="item-65fa78e11a55e93ddaba64cb">
                        <div class="row sqs-row">
                          <div class="col sqs-col-12 span-12">
                            <div class="sqs-block html-block sqs-block-html" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-2d0ac444b720d658ded0">
                              <div class="sqs-block-content">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
        <section data-test="page-section" data-section-theme="light" class='page-section 
    
      full-bleed-section
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--small
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    light' data-section-id="65fa78b28f366d36b7790a9b" data-controller="SectionWrapperController" data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--small&quot;,
&quot;customSectionHeight&quot;: 25,
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
&quot;backgroundMediaEffect&quot;: {
&quot;type&quot;: &quot;none&quot;
},
&quot;divider&quot;: {
&quot;enabled&quot;: false
},
&quot;typeName&quot;: &quot;products&quot;
}" data-animation="none" data-fluid-engine-section>
          <div class="section-border">
            <div class="section-background"></div>
          </div>
          <div class='content-wrapper' style='
      
        
      
    '>
            <div class="content">
              <div data-fluid-engine="true">
                <style>
                  .fe-65fa78b28f366d36b7790a9a {
                    --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 11.0px);
                    --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (8 - 1))) / 8);
                    display: grid;
                    position: relative;
                    grid-area: 1/1/-1/-1;
                    grid-template-rows: repeat(2, minmax(24px, auto));
                    grid-template-columns:
                      minmax(var(--grid-gutter), 1fr) repeat(8, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                    row-gap: 11.0px;
                    column-gap: 11.0px;
                  }

                  @media (min-width: 768px) {
                    .background-width--inset .fe-65fa78b28f366d36b7790a9a {
                      --inset-padding: calc(var(--sqs-site-gutter) * 2);
                    }

                    .fe-65fa78b28f366d36b7790a9a {
                      --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 11.0px);
                      --cell-max-width: calc((var(--sqs-site-max-width, 1500px) - (11.0px * (24 - 1))) / 24);
                      --inset-padding: 0vw;
                      --row-height-scaling-factor: 0.0215;
                      --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding)));
                      grid-template-rows: repeat(2, minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
                      grid-template-columns:
                        minmax(var(--grid-gutter), 1fr) repeat(24, minmax(0, var(--cell-max-width))) minmax(var(--grid-gutter), 1fr);
                    }
                  }

                  .fe-block-f645d2db5ee846f6c0b3 {
                    grid-area: 1/2/3/10;
                    z-index: 2;

                    @media (max-width: 767px) {}
                  }

                  .fe-block-f645d2db5ee846f6c0b3 .sqs-block {
                    justify-content: flex-start;
                  }

                  .fe-block-f645d2db5ee846f6c0b3 .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                  }

                  @media (min-width: 768px) {
                    .fe-block-f645d2db5ee846f6c0b3 {
                      grid-area: 1/2/3/26;
                      z-index: 2;
                    }

                    .fe-block-f645d2db5ee846f6c0b3 .sqs-block {
                      justify-content: flex-start;
                    }

                    .fe-block-f645d2db5ee846f6c0b3 .sqs-block-alignment-wrapper {
                      align-items: flex-start;
                    }
                  }
                </style>
                <div class="fluid-engine fe-65fa78b28f366d36b7790a9a">
                  <div class="fe-block fe-block-f645d2db5ee846f6c0b3">
                    <div class="sqs-block html-block sqs-block-html" data-blend-mode="NORMAL" data-block-type="2" data-border-radii="&#123;&quot;topLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;topRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomLeft&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;,&quot;bottomRight&quot;:&#123;&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0&#125;&#125;" id="block-f645d2db5ee846f6c0b3">
                      <div class="sqs-block-content">
                        <div class="sqs-html-content">
                          <p style="text-align:center;white-space:pre-wrap;" class="">Oleh <a href="#" target="_blank">SLOT&nbsp;<?php echo $BRANDS ?></a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </footer>
    </div>
    <script defer="defer" src="https://static1.squarespace.com/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.ce29d1eeb360947abe611f2b65628374.js" type="text/javascript"></script>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
      <symbol id="instagram-icon" viewBox="0 0 64 64">
        <path d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z" />
      </symbol>
      <symbol id="instagram-mask" viewBox="0 0 64 64">
        <path d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z" />
      </symbol>
      <symbol id="twitter-icon" viewBox="0 0 64 64">
        <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z" />
      </symbol>
      <symbol id="twitter-mask" viewBox="0 0 64 64">
        <path d="M0,0v64h64V0H0z M44.7,25.5c0,0.3,0,0.6,0,0.8C44.7,35,38.1,45,26.1,45c-3.7,0-7.2-1.1-10.1-2.9 c0.5,0.1,1,0.1,1.6,0.1c3.1,0,5.9-1,8.2-2.8c-2.9-0.1-5.3-2-6.1-4.6c0.4,0.1,0.8,0.1,1.2,0.1c0.6,0,1.2-0.1,1.7-0.2 c-3-0.6-5.3-3.3-5.3-6.4c0,0,0-0.1,0-0.1c0.9,0.5,1.9,0.8,3,0.8c-1.8-1.2-2.9-3.2-2.9-5.5c0-1.2,0.3-2.3,0.9-3.3 c3.2,4,8.1,6.6,13.5,6.9c-0.1-0.5-0.2-1-0.2-1.5c0-3.6,2.9-6.6,6.6-6.6c1.9,0,3.6,0.8,4.8,2.1c1.5-0.3,2.9-0.8,4.2-1.6 c-0.5,1.5-1.5,2.8-2.9,3.6c1.3-0.2,2.6-0.5,3.8-1C47.1,23.4,46,24.5,44.7,25.5z" />
      </symbol>
      <symbol id="facebook-icon" viewBox="0 0 64 64">
        <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" />
      </symbol>
      <symbol id="facebook-mask" viewBox="0 0 64 64">
        <path d="M0,0v64h64V0H0z M39.6,22l-2.8,0c-2.2,0-2.6,1.1-2.6,2.6V28h5.3l-0.7,5.3h-4.6V47h-5.5V33.3H24V28h4.6V24 c0-4.6,2.8-7,6.9-7c2,0,3.6,0.1,4.1,0.2V22z" />
      </symbol>
    </svg>
  </body>
</html>
