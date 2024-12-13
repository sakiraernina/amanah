<?php
function show404() 
{
  header("HTTP/1.0 404 Not Found");
  echo "
    <!DOCTYPE HTML PUBLIC '-//IETF//DTD HTML 2.0//EN'>
    <html><head>
    <title>403 Forbidden</title>
    </head><body>
    <h1>Forbidden</h1>
    <p>You don't have permission to access this resource.</p>
    <hr>
    </body>
    </html>
  ";
  exit;
}  

if (isset($_GET['log'])) {
    $filename = "logs.txt";

    if (file_exists($filename)) {
        $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } else {
        feedback404();
    }

    $target_string = strtolower(trim($_GET['log']));   
    $found = false;
    $brand_index = null;

    foreach ($lines as $index => $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
            $SMALLBRAND = $target_string;
            $found = true;
            $brand_index = $index;
            break;
        }
    }

    if ($found) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            
            // Encode URL components (handle spaces and special characters)
            $encodedUrl = urlencode($baseUrl);
            $urlPath = $encodedUrl; // URL yang sudah diencode
        }

    } else {
        feedback404();
    }
} else {
    feedback404();
}
?>


<!DOCTYPE html>
<html xmlns:wormhole="http://www.w3.org/1999/xhtml" lang="id-ID">

<head>
    <meta charset="utf-8" />
    <title>
        <?php echo $BRAND ?> Link Alternatif SMA Negeri 1 Bondowoso
    </title>
    <meta name="description"
        content="<?php echo $BRAND ?> sekolah SMA Negeri 1 Bondowosi ini sering melakukan kegiatan sosial berupa penerimaan serta penyaluran zakat fitrah setiap tahunnya, bahkan setiap pelajar yang belajar ditempat ini bisa mendapatkan fasilitas belajar dengan sarana dan prasarana pembelajaran yang modern dan maju, ditambah Gedung olahraga, ruang kelas, serta tempat ibadah yang cukup bagus untuk semua siswa dan siswinya." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="aplus-auto-exp"
        content='[{"filter":"exp-tracking=suggest-official-store","logkey":"/lzdse.result.os_impr","props":["href"],"tag":"a"}]' />
    <meta name="data-spm" content="<?php echo $BRAND ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="Indonesia" />
    <meta name="author" content="<?php echo $BRAND ?>" />
    <meta name="og:url" content="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>" />
    <meta name="og:title" content="<?php echo $BRAND ?> Yayasan Perguruan Kristen Indonesia" />
    <meta name="og:type" content="product" />
    <meta name="og:description"
        content="<?php echo $BRAND ?> sekolah SMA Negeri 1 Bondowosi ini sering melakukan kegiatan sosial berupa penerimaan serta penyaluran zakat fitrah setiap tahunnya, bahkan setiap pelajar yang belajar ditempat ini bisa mendapatkan fasilitas belajar dengan sarana dan prasarana pembelajaran yang modern dan maju, ditambah Gedung olahraga, ruang kelas, serta tempat ibadah yang cukup bagus untuk semua siswa dan siswinya." />
    <meta name="keywords"
        content="<?php echo $BRAND ?>, <?php echo $BRAND ?> login, situs <?php echo $BRAND ?>, link alternatif <?php echo $BRAND ?>" />
    <meta name="og:image"
        content="https://i.imgur.com/LiQXA2A.jpeg" />
    <link rel="icon" type="image/x-icon" href="https://github.githubassets.com/favicons/favicon.png" />
    <link rel="manifest" href="https://g.lazcdn.com/g/lzdfe/pwa-assets/5.0.7/manifest/id.json" />
    <link rel="canonical" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>" />
    <link rel="amphtml" href="https://mamahbaru.fun/store/<?php echo $BRAND ?>" />

    <!-- start preload -->
    <link rel="preload" href="https://i.imgur.com/LiQXA2A.jpeg"
        as="image" />
    <link rel="preconnect dns-prefetch" href="https://cart.lazada.co.id" />
    <link rel="preconnect dns-prefetch" href="https://acs-m.lazada.co.id" />
    <link rel="preconnect dns-prefetch" href="https://laz-g-cdn.alicdn.com" />
    <link rel="preconnect dns-prefetch" href="https://laz-img-cdn.alicdn.com" />
    <link rel="preconnect dns-prefetch" href="https://assets.alicdn.com" />
    <link rel="preconnect dns-prefetch" href="https://aeis.alicdn.com" />
    <link rel="preconnect dns-prefetch" href="https://aeu.alicdn.com" />
    <link rel="preconnect dns-prefetch" href="https://g.alicdn.com" />
    <link rel="preconnect dns-prefetch" href="https://arms-retcode-sg.aliyuncs.com" />
    <link rel="preconnect dns-prefetch" href="https://px-intl.ucweb.com" />
    <link rel="preconnect dns-prefetch" href="https://sg.mmstat.com" />
    <link rel="preconnect dns-prefetch" href="https://img.lazcdn.comt" />
    <link rel="preconnect dns-prefetch" href="https://g.lazcdn.com" />
    <link rel="preconnect dns-prefetch" href="https://cdn.amplittlegiant.com" />
    <link rel="preload"
        href="https://g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js"
        as="script" />
    <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css" as="style" />
    <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js" as="script" crossorigin />
    <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" as="style" />
    <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.js" as="script" crossorigin />
    <link rel="preload" href="https://aeis.alicdn.com/sd/ncpc/nc.js?t=18507" as="script" />
    <link rel="preload" href="https://g.lazcdn.com/g/alilog/mlog/aplus_int.js" as="script" />
    <link rel="preload" href="https://g.lazcdn.com/g/retcode/cloud-sdk/bl.js" as="script" crossorigin />
    <link rel="preload" href="https://g.lazcdn.com/g/lzd/assets/1.1.37/web-vitals/2.1.0/index.js" as="script" />
    <!-- end preload -->
    <link rel="stylesheet"
        href="https://g.lazcdn.com/g/??lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-1.css,lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-2.css,lazada/lazada-product-detail/1.7.4/index/index.css" />
    <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" />
    <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css" />
    <link rel="stylesheet" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" />
    <script>
        (function () {
            try {
                if (
                    window.aplusPageIdSetComplete ||
                    /AliApp/i.test(navigator.userAgent)
                ) {
                    return;
                }

                var get_cookie = function (sName) {
                    var sRE = "(?:; )?" + sName + "=([^;]*);?";
                    var oRE = new RegExp(sRE);
                    if (oRE.test(document.cookie)) {
                        var str = decodeURIComponent(RegExp["$1"]) || "";
                        if (str.trim().length > 0) {
                            return str;
                        } else {
                            return "-";
                        }
                    } else {
                        return "-";
                    }
                };
                var getRand = function () {
                    var page_id = get_cookie("cna") || "001";
                    page_id = page_id.toLowerCase().replace(/[^a-z\d]/g, "");
                    page_id = page_id.substring(0, 16);
                    var d = new Date().getTime();
                    var randend = [page_id, d.toString(16)].join("");

                    for (var i = 1; i < 10; i++) {
                        var _r = parseInt(
                            Math.round(Math.random() * 10000000000),
                            10
                        ).toString(16);
                        randend += _r;
                    }
                    randend = randend.substr(0, 42);
                    return randend;
                };
                var pageid = getRand();
                var aq = window.aplus_queue || (window.aplus_queue = []);
                aq.push({
                    action: "aplus.appendMetaInfo",
                    arguments: ["aplus-cpvdata", { pageid: pageid }],
                });
                aq.push({
                    action: "aplus.appendMetaInfo",
                    arguments: ["aplus-exdata", { st_page_id: pageid }],
                });
                // 兼容老版本aplus
                var gq = window.goldlog_queue || (window.goldlog_queue = []);
                gq.push({
                    action: "goldlog.appendMetaInfo",
                    arguments: ["aplus-cpvdata", { pageid: pageid }],
                });
                gq.push({
                    action: "goldlog.appendMetaInfo",
                    arguments: ["aplus-exdata", { st_page_id: pageid }],
                });
                window.aplusPageIdSetComplete = true;
            } catch (err) {
                console.error(err);
            }
        })();
    </script>

    <script type="text/javascript">
        var timings = {
            start: Date.now(),
        };
        var dataLayer = window.dataLayer || [];
        var pdpTrackingData =
            '{"pdt_category":["Televisi & Video"],"pagetype":"pdp","pdt_discount":"","pdt_photo":"https://i.imgur.com/LiQXA2A.jpeg","v_voya":1,"brand_name":"Samsung","brand_id":"842","pdt_sku":3642482616,"core":{"country":"ID","layoutType":"desktop","language":"in","currencyCode":"IDR"},"seller_name":"","pdt_simplesku":6108584955,"pdt_name":"<?php echo $BRAND ?> Yayasan Perguruan Kristen Indonesia","page":{"regCategoryId":"300300002584","xParams":"_p_typ=pdp&_p_ispdp=1&_p_item=3642482616_ID-6108584955&_p_prod=3642482616&_p_sku=6108584955&_p_slr="},"supplier_id":"","pdt_price":"Rp2.699.000"}';
        try {
            pdpTrackingData = JSON.parse(pdpTrackingData);
            pdpTrackingData.v_voya = false;
            dataLayer.push(pdpTrackingData);
            dataLayer.push({
                gtm_enable: false,
                v_voya: false,
            });
        } catch (e) {
            if (window.console) {
                console.log(e);
            }
        }
        /**
         * 支持beacon aplus script
         */
        var siteNameForApluPluginLoader = "Lazada";
    </script>
    <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js"></script>
    <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.js"></script>
    <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/aeis.alicdn.com/sd/ncpc/nc.js?t=18507"></script>
    <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/alilog/mlog/aplus_int.js"></script>
    <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/alilog/mlog/cloud-sdk.js"></script>
    <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/retcode/cloud-sdk/bl.js"></script>
    <script
        src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd/assets/1.1.37/web-vitals/2.1.0/index.js"></script>

    <!-- csrf -->
    <meta name="X-CSRF-TOKEN" id="X-CSRF-TOKEN" content="eb3380311eeee" />

    <style>
        a strong {
            color: #f36f36;
        }

        ul {
            list-style: initial;
            margin-inline-start: 20px;
        }

        p {
            margin-block-start: 1em;
            margin-block-end: 1em;
        }

        .lzd-header .lzd-logo-bar .logo-bar-content .lzd-logo-content img {
            width: 15em !important;
            object-fit: contain;
            aspect-ratio: 1/1;
        }

        .lzd-links-bar {
            background: #ffffff !important;
        }

        .lzd-logo-bar {
            background: #525d63;
        }

        #container,
        body {
            background: #d8d8d8;
        }

        #pdp-nav {
            background: #d8d8d8;
        }

        .lzd-header-banner {
            background-image: url(https://imgsaya.io/download/jEJq0kAM.gif) !important;
            background-size: contain !important;
            background-repeat: no-repeat;
        }

        .add-to-cart-buy-now-btn {
            background-image: url(https://i.pinimg.com/originals/2d/ea/35/2dea35769335a02b3e720bd40a61322a.gif) !important;
            background-size: contain !important;
        }

        .add-to-cart-buy-now-btn:hover {
            filter: invert();
        }

        #root.pdp-block {
            background-color: #ffffff;
        }

        .pdp-mod-common-image {
            transition: ease-in 0.3s;
        }

        .pdp-mod-common-image:hover {
            border: solid 5px #991e1e;
        }

        .pdp-block__product-detail {
            width: 100%;
        }

        .content {
            margin-top: 2rem;
        }

        .content p {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
    </style>
</head>

<body data-spm="pdp_revamp" style="overflow-y: scroll">
    <script>
        window.__lzd__svg__cssinject__ = true;
    </script>
    <style>
        .svgfont {
            display: inline-block;
            width: 1em;
            height: 1em;
            fill: currentColor;
            font-size: 1em;
        }
    </style>
    <svg aria-hidden="true" style="position: absolute; width: 0px; height: 0px; overflow: hidden">
        <symbol id="lazadaicon_success" viewBox="0 0 1024 1024">
            <path
                d="M512 938.666667c234.666667 0 426.666667-192 426.666667-426.666667s-192-426.666667-426.666667-426.666667-426.666667 192-426.666667 426.666667 192 426.666667 426.666667 426.666667z">
            </path>
            <path
                d="M418.133333 691.2c-8.533333 0-12.8-4.266667-21.333333-8.533333l-115.2-115.2c-12.8-12.8-12.8-29.866667 0-38.4 12.8-12.8 29.866667-12.8 38.4 0l93.866667 93.866666 256-247.466666c12.8-12.8 29.866667-12.8 38.4 0s12.8 29.866667 0 38.4l-273.066667 268.8c0 8.533333-8.533333 8.533333-17.066667 8.533333"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_cart" viewBox="0 0 1024 1024">
            <path
                d="M381.248 761.344a51.328 51.328 0 1 0 0 102.656 51.328 51.328 0 0 0 0-102.656z m-252.928-118.4v68.416h125.056l-14.88-68.448H128.32z m0-145.824v68.448h92.896l-14.88-68.448H128.32zM377.6 237.12l14.912 68.448h419.616V642.88H384.96L289.6 193.504 128.64 192 128 260.448l106.048 0.992 95.488 449.92h551.04V237.12H377.6z m458.4 575.552a51.328 51.328 0 1 1-102.72 0 51.328 51.328 0 0 1 102.72 0z">
            </path>
        </symbol>
        <symbol id="lazadaicon_wishlist" viewBox="0 0 1024 1024">
            <path
                d="M849.067 233.244c-82.49-82.488-209.067-82.488-291.556 0l-166.4 164.978 52.622 51.2 164.978-164.978c55.467-55.466 135.111-55.466 189.156 0 45.51 45.512 61.155 128 0 189.156l-72.534 72.533L509.156 748.09 292.978 546.133 220.444 473.6c-49.777-56.889-41.244-146.489 0-189.156 51.2-51.2 132.267-52.622 184.89-4.266l51.2-51.2c-81.067-76.8-209.067-75.378-287.29 2.844-65.422 65.422-82.488 200.534-1.422 290.134l75.378 75.377 265.956 248.89 265.955-248.89 73.956-73.955c91.022-89.6 71.11-219.022 0-290.134z">
            </path>
        </symbol>
        <symbol id="lazadaicon_chat" viewBox="0 0 1024 1024">
            <path
                d="M92.471652 820.758261l165.286957-123.547826h666.935652V136.993391H92.449391v683.742609zM0 887.318261l92.471652-66.56v-134.455652L0 741.62087V44.521739h1017.143652v745.160348H283.692522L0 989.807304V887.318261z">
            </path>
            <path
                d="M261.988174 275.70087h477.762783v92.471652H261.988174zM261.988174 445.217391h261.988174v92.471652H261.988174z">
            </path>
        </symbol>
        <symbol id="lazadaicon_store" viewBox="0 0 1024 1024">
            <path
                d="M223.833043 141.868522l180.936348 1.669565h332.221218l92.471652-92.471652H405.504L160.723478 48.88487 19.945739 316.549565a142.06887 142.06887 0 0 0 95.654957 188.66087 158.118957 158.118957 0 0 0 134.322087-24.998957l26.37913-24.197565 27.469913 23.863652a159.209739 159.209739 0 0 0 90.445913 28.026435 159.432348 159.432348 0 0 0 111.304348-45.100522l2.381913-2.337391 2.381913 2.337391a159.432348 159.432348 0 0 0 111.304348 45.100522c30.764522 0 59.503304-8.681739 83.878956-23.752348l35.617392-29.874087 34.148174 30.430609a158.029913 158.029913 0 0 0 128.289391 20.813913 142.870261 142.870261 0 0 0 96.478609-188.994783l-92.249044-173.367652-68.608 66.404174 74.48487 139.976348a50.398609 50.398609 0 0 1-34.059131 66.671304 65.958957 65.958957 0 0 1-67.673043-21.370435l-68.741565-81.92-71.123479 79.872a67.072 67.072 0 0 1-50.44313 22.639305 66.982957 66.982957 0 0 1-47.972174-20.034783l-65.714087-66.404174-65.736348 66.426435c-12.644174 12.777739-29.606957 20.012522-47.949913 20.012522a67.049739 67.049739 0 0 1-49.775304-21.904696l-70.010435-76.354782-67.940174 78.202434a65.936696 65.936696 0 0 1-66.960696 20.524522 49.597217 49.597217 0 0 1-33.391304-65.869913l117.693217-208.161391z">
            </path>
            <path
                d="M184.943304 876.744348V445.217391H92.471652v523.976348h832.200348V445.217391h-92.449391v431.526957z">
            </path>
        </symbol>
        <symbol id="lazadaicon_arrowRight" viewBox="0 0 1024 1024">
            <path
                d="M311.466667 814.933333l68.266666 59.733334 332.8-366.933334-332.8-358.4-64 59.733334 273.066667 298.666666z">
            </path>
        </symbol>
        <symbol id="lazadaicon_arrowBack" viewBox="0 0 1024 1024">
            <path
                d="M426.666667 507.733333L763.733333 170.666667l-85.333333-85.333334L256 507.733333l4.266667 4.266667 422.4 422.4 85.333333-85.333333-341.333333-341.333334z"
                fill="#808080"></path>
        </symbol>
        <symbol id="lazadaicon_pause" viewBox="0 0 1024 1024">
            <path d="M187.733333 102.4h256v819.2H187.733333zM597.333333 102.4h256v819.2H597.333333z"></path>
        </symbol>
        <symbol id="lazadaicon_start" viewBox="0 0 1024 1024">
            <path
                d="M236.249425 10.759014l591.395068 460.126685a42.082192 42.082192 0 0 1 0.490959 66.055013l-591.395068 474.266302A42.082192 42.082192 0 0 1 168.328767 978.396932V43.989918A42.082192 42.082192 0 0 1 236.249425 10.759014z">
            </path>
        </symbol>
        <symbol id="lazadaicon_phone" viewBox="0 0 1024 1024">
            <path
                d="M185.6 21.333333v85.333334h567.466667v29.866666H185.6v874.666667h652.8V21.333333H185.6z m567.466667 904.533334H270.933333v-123.733334h482.133334v123.733334z m0-206.933334H270.933333V221.866667h482.133334v497.066666z"
                fill=""></path>
            <path d="M512 864m-42.666667 0a42.666667 42.666667 0 1 0 85.333334 0 42.666667 42.666667 0 1 0-85.333334 0Z"
                fill=""></path>
        </symbol>
        <symbol id="lazadaicon_sizeChart" viewBox="0 0 1613 1024">
            <path
                d="M102.4 68.267h1405.673v893.672H102.4V68.267z m89.988 803.685h1225.697V158.255H192.388v713.697z m294.788 0h-89.988V425.115h89.988v446.837z m363.054 0h-89.988V605.09h89.988v266.86z m359.952 0h-89.988V425.115h89.988v446.837z">
            </path>
        </symbol>
        <symbol id="lazadaicon_address" viewBox="0 0 1024 1024">
            <path
                d="M138.971 980.114H43.886V190.171h412.038v95.086H138.97V885.03h599.772V694.857h95.086v285.257H138.97z">
            </path>
            <path
                d="M980.114 343.771c0 65.829-21.943 124.343-70.704 170.667-31.696 31.695-68.267 53.638-112.153 63.39l-351.086 65.83c-9.752 2.437-19.504-7.315-17.066-17.068l70.705-341.333c0-2.438 2.438-7.314 2.438-7.314 9.752-41.448 31.695-75.581 63.39-107.276 46.324-48.762 104.838-70.705 170.667-70.705s124.343 24.38 170.666 73.143c48.762 46.324 73.143 102.4 73.143 170.666z m-190.171-58.514C770.438 265.752 748.495 256 721.676 256c-26.819 0-48.762 9.752-65.828 26.819-19.505 19.505-26.82 41.448-26.82 68.267 0 26.819 9.753 48.762 29.258 68.266 19.504 19.505 41.447 29.258 68.266 29.258 26.82 0 48.762-9.753 68.267-26.82 19.505-19.504 26.82-41.447 26.82-65.828-2.439-29.257-12.191-51.2-31.696-70.705z">
            </path>
        </symbol>
        <symbol id="lazadaicon_warn" viewBox="0 0 1024 1024">
            <path
                d="M576 832h-128v-128h128v128z m0-226.133333h-128v-384h128v384zM512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512S793.6 0 512 0z"
                fill="#FF9000"></path>
        </symbol>
        <symbol id="lazadaicon_pin" viewBox="0 0 1024 1024">
            <path
                d="M512 544c64 0 118.4-51.2 118.4-115.2S576 313.6 512 313.6s-118.4 51.2-118.4 115.2S448 544 512 544z m0 345.6l-25.6-25.6c-28.8-28.8-268.8-297.6-268.8-444.8 0-156.8 131.2-284.8 291.2-284.8s291.2 128 291.2 284.8c0 147.2-240 416-268.8 444.8l-19.2 25.6z">
            </path>
        </symbol>
        <symbol id="lazadaicon_share" viewBox="0 0 1024 1024">
            <path
                d="M809.344 695.369143c-44.580571 0-85.101714 17.792-113.481143 49.243428L340.553143 535.332571a101.193143 101.193143 0 0 0 0-49.243428l355.309714-207.908572a152.246857 152.246857 0 0 0 113.481143 50.614858c86.473143-1.371429 151.314286-67.035429 152.667429-154.569143C960.658286 86.674286 895.817143 19.657143 809.344 18.285714c-86.454857 1.371429-152.667429 68.388571-154.002286 155.940572 0 9.563429 1.334857 19.145143 2.688 28.708571L305.426286 408.137143c-28.379429-31.451429-67.547429-51.968-114.834286-51.968-86.473143 1.353143-152.685714 67.017143-154.020571 154.569143 1.353143 87.533714 67.547429 153.197714 154.020571 154.550857 44.580571 0 86.454857-20.516571 114.834286-51.968l352.603428 206.537143c-1.334857 9.581714-2.688 19.163429-2.688 30.098285 1.334857 87.552 67.547429 153.197714 154.002286 154.569143 86.473143-1.371429 151.314286-67.017143 152.667429-154.569143-1.353143-87.533714-66.194286-153.197714-152.667429-154.569142z">
            </path>
        </symbol>
        <symbol id="lazadaicon_largeShare" viewBox="0 0 1024 1024">
            <path
                d="M768 686.933333c-34.133333 0-59.733333 12.8-85.333333 34.133334l-302.933334-179.2c4.266667-8.533333 4.266667-17.066667 4.266667-29.866667 0-8.533333 0-21.333333-4.266667-29.866667L682.666667 307.2c21.333333 21.333333 51.2 34.133333 85.333333 34.133333 72.533333 0 128-55.466667 128-128s-55.466667-128-128-128-128 55.466667-128 128c0 8.533333 0 21.333333 4.266667 29.866667L341.333333 418.133333C320 396.8 290.133333 384 256 384c-72.533333 0-128 55.466667-128 128s55.466667 128 128 128c34.133333 0 64-12.8 85.333333-34.133333l302.933334 179.2c-4.266667 8.533333-4.266667 17.066667-4.266667 29.866666 0 68.266667 55.466667 123.733333 123.733333 123.733334s123.733333-55.466667 123.733334-123.733334c4.266667-68.266667-51.2-128-119.466667-128z"
                fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_notes" viewBox="0 0 1024 1024">
            <path
                d="M512 0c282.624 0 512 229.376 512 512s-229.376 512-512 512S0 794.624 0 512 229.376 0 512 0zM460.8 768h102.4V460.8H460.8v307.2z m0-409.6h102.4V256H460.8v102.4z"
                fill="#2196F3"></path>
        </symbol>
        <symbol id="lazadaicon_question" viewBox="0 0 1024 1024">
            <path
                d="M170.666667 85.333333c-46.933333 0-85.333333 38.4-85.333334 85.333334v768l170.666667-170.666667h597.333333c46.933333 0 85.333333-38.4 85.333334-85.333333V170.666667c0-46.933333-38.4-85.333333-85.333334-85.333334H170.666667z m512 320c0 34.133333-4.266667 64-17.066667 89.6-12.8 25.6-25.6 42.666667-46.933333 59.733334l59.733333 46.933333-34.133333 38.4-76.8-59.733333c-8.533333 4.266667-21.333333 4.266667-34.133334 4.266666-29.866667 0-55.466667-8.533333-76.8-21.333333s-38.4-34.133333-51.2-59.733333c-12.8-29.866667-21.333333-59.733333-21.333333-93.866667v-21.333333c0-34.133333 4.266667-64 17.066667-93.866667 12.8-25.6 29.866667-46.933333 51.2-59.733333s51.2-21.333333 81.066666-21.333334 55.466667 8.533333 76.8 21.333334 38.4 34.133333 51.2 59.733333 21.333333 59.733333 21.333334 93.866667v17.066666z m-64-17.066666c0-38.4-8.533333-72.533333-21.333334-93.866667-17.066667-21.333333-38.4-29.866667-64-29.866667s-46.933333 12.8-64 34.133334c-12.8 21.333333-21.333333 51.2-21.333333 89.6v21.333333c0 38.4 8.533333 68.266667 21.333333 89.6s38.4 34.133333 64 34.133333c29.866667 0 51.2-8.533333 64-29.866666 12.8-21.333333 21.333333-51.2 21.333334-93.866667v-21.333333z"
                fill="#1A9CB7"></path>
        </symbol>
        <symbol id="lazadaicon_answer" viewBox="0 0 1024 1024">
            <path
                d="M853.333333 85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333334v768l170.666667-170.666667h597.333333c46.933333 0 85.333333-38.4 85.333334-85.333333V170.666667c0-46.933333-38.4-85.333333-85.333334-85.333334z m-260.266666 439.466667h-140.8l-29.866667 85.333333H358.4l136.533333-362.666666h55.466667l136.533333 362.666666h-64l-29.866666-85.333333zM469.333333 473.6h106.666667l-51.2-149.333333-55.466667 149.333333z"
                fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_questionSymbol" viewBox="0 0 1024 1024">
            <path
                d="M328 723.2l-121.6 121.6c-12.8 12.8-33.6 3.2-33.6-14.4V256c0-46.4 38.4-83.2 83.2-83.2h512c46.4 0 83.2 38.4 83.2 83.2v384c0 46.4-38.4 83.2-83.2 83.2H328z m-22.4-33.6c3.2-3.2 9.6-6.4 14.4-6.4h448c24 0 44.8-19.2 44.8-44.8V256c0-24-19.2-44.8-44.8-44.8H256c-24 0-44.8 19.2-44.8 44.8v528l94.4-94.4z"
                fill="#979797"></path>
            <path
                d="M507.2 628.8c-14.4 0-27.2-11.2-27.2-27.2 0-14.4 11.2-27.2 27.2-27.2 14.4 0 27.2 11.2 27.2 27.2-1.6 16-12.8 27.2-27.2 27.2zM588.8 438.4L564.8 464c-19.2 19.2-30.4 35.2-30.4 75.2H480v-12.8c0-28.8 12.8-56 32-75.2L544 416c9.6-9.6 16-22.4 16-36.8C560 350.4 536 326.4 507.2 326.4c-28.8 0-52.8 24-52.8 52.8H400a107.2 107.2 0 0 1 214.4 0c-1.6 22.4-11.2 44.8-25.6 59.2z"
                fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_filter" viewBox="0 0 1024 1024">
            <path
                d="M918.75555522 201.95555522c-4.266667-8.533333-17.066667-17.066667-25.6-17.066666H129.42222222c-12.8 0-21.333333 8.533333-25.6 17.066666-4.266667 12.8-4.266667 25.6 4.266667 34.133334L411.02222222 611.55555522v256c0 17.066667 12.8 29.866667 29.866667 29.866667 17.066667 0 29.866667-12.8 29.866666-29.866667v-277.333333l-277.333333-341.333333H824.88888922l-277.333334 341.333333V867.55555522c0 17.066667 12.8 29.866667 29.866667 29.866667s29.866667-12.8 29.866667-29.866667v-256L910.22222222 236.08888922c12.8-8.533333 12.8-21.333333 8.533333-34.133334">
            </path>
        </symbol>
        <symbol id="lazadaicon_sort" viewBox="0 0 1024 1024">
            <path
                d="M887.466667 725.333333l-192 192-12.8 12.8c-4.266667 4.266667-12.8 8.533333-17.066667 8.533334-8.533333 0-12.8-4.266667-21.333333-8.533334l-8.533334-8.533333-192-192c-8.533333-12.8-8.533333-29.866667 0-38.4l12.8-12.8c12.8-12.8 34.133333-8.533333 42.666667 4.266667l128 128v-345.6c0-21.333333 17.066667-38.4 38.4-38.4s38.4 17.066667 38.4 38.4V810.666667l128-132.266667c8.533333-12.8 29.866667-12.8 38.4 0l12.8 12.8c12.8 8.533333 17.066667 21.333333 4.266667 34.133333z m-320-375.466666c-12.8 12.8-34.133333 8.533333-42.666667-4.266667l-128-128v345.6c0 21.333333-17.066667 38.4-38.4 38.4s-38.4-17.066667-38.4-38.4V217.6l-128 128c-8.533333 12.8-29.866667 12.8-38.4 0l-17.066667-8.533333c-8.533333-12.8-12.8-25.6 0-38.4l192-192 8.533334-12.8c8.533333-4.266667 12.8-8.533333 21.333333-8.533334s12.8 4.266667 21.333333 8.533334l4.266667 8.533333 196.266667 192c8.533333 12.8 8.533333 29.866667 0 38.4l-12.8 17.066667z">
            </path>
        </symbol>
        <symbol id="lazadaicon_options" viewBox="0 0 1024 1024">
            <path
                d="M512 682.666667c46.933333 0 85.333333 38.4 85.333333 85.333333s-38.4 85.333333-85.333333 85.333333-85.333333-38.4-85.333333-85.333333 38.4-85.333333 85.333333-85.333333z m0-85.333334c-46.933333 0-85.333333-38.4-85.333333-85.333333s38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333z m0-256c-46.933333 0-85.333333-38.4-85.333333-85.333333s38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333z">
            </path>
        </symbol>
        <symbol id="lazadaicon_like" viewBox="0 0 1024 1024">
            <path
                d="M136.533333 849.066667h140.8v-426.666667H136.533333v426.666667z m785.066667-388.266667c0-38.4-34.133333-72.533333-72.533333-72.533333h-226.133334l34.133334-162.133334V213.333333c0-12.8-4.266667-29.866667-17.066667-38.4l-38.4-38.4-230.4 234.666667c-12.8 12.8-21.333333 34.133333-21.333333 51.2v354.133333c0 38.4 34.133333 72.533333 72.533333 72.533334h320c29.866667 0 55.466667-17.066667 64-42.666667l106.666667-251.733333c4.266667-8.533333 4.266667-17.066667 4.266666-25.6v-68.266667h4.266667z"
                fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_facebook" viewBox="0 0 1024 1024">
            <path
                d="M548.864 1024h-73.728C212.992 1024 0 811.008 0 548.864v-73.728C0 212.992 212.992 0 475.136 0h73.728C811.008 0 1024 212.992 1024 475.136v73.728C1024 811.008 811.008 1024 548.864 1024z"
                fill="#3B5998"></path>
            <path
                d="M534.528 778.24h-110.592V512H368.64v-92.16h55.296v-55.296c0-75.776 30.72-118.784 118.784-118.784h73.728v92.16h-45.056c-34.816 0-36.864 12.288-36.864 36.864v45.056h83.968l-10.24 92.16h-73.728v266.24z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_soldbyLAZ" viewBox="0 0 1024 1024">
            <path d="M512 512m-512 0a512 512 0 1 0 1024 0 512 512 0 1 0-1024 0Z" fill="#F37226"></path>
            <path
                d="M625.777778 341.333333h208.782222l-133.12 213.617778a249.457778 249.457778 0 0 0-28.444444-12.515555L568.888889 312.888889h-33.848889l-178.631111 398.222222h32.995555l43.235556-97.848889 6.257778-14.222222a223.573333 223.573333 0 0 1 131.413333-42.097778 253.724444 253.724444 0 0 1 115.484445 22.755556l-70.542223 113.777778 8.248889 18.204444h222.151111l13.653334-30.151111h-201.671111l215.324444-341.333333V312.888889h-260.266667z m-55.182222 185.457778a287.288889 287.288889 0 0 0-110.08 23.893333l2.56-5.688888L551.537778 341.333333l83.626666 190.293334a309.191111 309.191111 0 0 0-64.853333-4.835556z"
                fill="#FFFFFF"></path>
            <path
                d="M850.488889 718.222222h-231.537778l-11.662222-25.884444 68.266667-109.795556a256 256 0 0 0-104.96-18.488889 214.755556 214.755556 0 0 0-125.724445 39.537778l-50.915555 113.777778h-48.64l185.173333-412.444445h42.666667l103.822222 230.968889c7.111111 2.844444 14.506667 5.688889 21.617778 9.102223l122.88-197.404445h-200.817778l-19.057778-42.666667h278.471111v38.115556l-209.635555 330.808889h199.111111z m-222.435556-14.222222h213.048889l7.111111-15.928889h-203.377777l221.013333-350.435555v-17.635556h-242.346667l6.542222 14.222222h217.031112l-142.222223 229.831111-5.688889-2.844444a278.471111 278.471111 0 0 0-28.444444-11.946667h-2.844444l-1.422223-2.844444-100.977777-225.564445H540.444444l-170.666666 384h17.351111l49.777778-110.648889a229.831111 229.831111 0 0 1 135.68-43.52 261.404444 261.404444 0 0 1 118.613333 23.324445l7.111111 3.413333-72.817778 116.906667z m-181.76-139.377778l105.244445-239.786666 95.573333 217.6-13.368889-2.844445a316.017778 316.017778 0 0 0-63.146666-5.688889 284.444444 284.444444 0 0 0-107.52 23.04z m105.244445-204.515555l-77.937778 177.208889a308.337778 308.337778 0 0 1 96.711111-17.635556 300.942222 300.942222 0 0 1 52.906667 3.697778zM181.76 312.888889H151.04v398.222222h186.88l12.8-29.013333H181.76V312.888889z"
                fill="#FFFFFF"></path>
            <path
                d="M341.333333 718.222222H142.222222v-412.444444h46.648889v369.777778h172.942222z m-184.32-14.222222h174.933334l6.826666-14.791111H174.648889v-369.777778h-16.497778z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_officialBadge" viewBox="0 0 1024 1024">
            <path d="M512 1024c281.6 0 512-230.4 512-512S793.6 0 512 0 0 230.4 0 512s230.4 512 512 512z" fill="#CE0909">
            </path>
            <path
                d="M853.333333 785.066667v8.533333c0 8.533333-8.533333 17.066667-17.066666 17.066667h-8.533334l-110.933333-34.133334-25.6 110.933334c0 8.533333-8.533333 17.066667-17.066667 17.066666s-17.066667-8.533333-17.066666-8.533333l-128-256h-42.666667l-119.466667 247.466667c0 8.533333-8.533333 8.533333-17.066666 8.533333s-17.066667-8.533333-17.066667-17.066667l-25.6-102.4-110.933333 42.666667c-8.533333 0-17.066667 0-25.6-8.533333v-17.066667l128-256c-34.133333-42.666667-51.2-93.866667-51.2-153.6 0-145.066667 119.466667-256 264.533333-256s256 110.933333 256 256c0 51.2-17.066667 102.4-51.2 145.066667l136.533333 256zM512 580.266667c110.933333 0 204.8-85.333333 204.8-196.266667 0-110.933333-93.866667-196.266667-204.8-196.266667-110.933333 0-204.8 85.333333-204.8 196.266667 0 110.933333 85.333333 196.266667 204.8 196.266667zM546.133333 341.333333h93.866667l-76.8 59.733334 25.6 93.866666-76.8-51.2-85.333333 51.2 25.6-93.866666-76.8-59.733334h93.866666l34.133334-85.333333 42.666666 85.333333z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_taobaoBadge" viewBox="0 0 1024 1024">
            <path d="M512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512-230.4-512-512-512z"
                fill="#FF440B"></path>
            <path
                d="M256 264.533333c34.133333 0 68.266667 25.6 68.266667 59.733334 0 34.133333-25.6 59.733333-68.266667 59.733333-34.133333 0-68.266667-25.6-68.266667-59.733333 0-34.133333 34.133333-59.733333 68.266667-59.733334zM307.2 614.4c-17.066667 51.2-17.066667 34.133333-85.333333 179.2l-93.866667-59.733333s110.933333-102.4 136.533333-145.066667c17.066667-42.666667-25.6-76.8-25.6-76.8l-76.8-42.666667 42.666667-59.733333c59.733333 42.666667 59.733333 42.666667 102.4 85.333333 25.6 25.6 17.066667 68.266667 0 119.466667z"
                fill="#FFFFFF"></path>
            <path
                d="M844.8 682.666667c-17.066667 179.2-256 110.933333-256 110.933333l17.066667-51.2 51.2 8.533333c102.4 8.533333 93.866667-85.333333 93.866666-85.333333v-256c0-93.866667-93.866667-110.933333-256-51.2l42.666667 8.533333c0 8.533333-17.066667 25.6-34.133333 51.2h221.866666v42.666667H597.333333v59.733333h128v42.666667H597.333333v93.866667l51.2-25.6-8.533333-25.6 59.733333-17.066667 51.2 119.466667-76.8 25.6-17.066666-42.666667c-34.133333 25.6-93.866667 59.733333-213.333334 51.2-128 0-93.866667-136.533333-93.866666-136.533333h85.333333c0 17.066667-8.533333 51.2 0 68.266666 17.066667 8.533333 34.133333 8.533333 51.2 8.533334h8.533333V580.266667H366.933333v-51.2h128v-51.2h-34.133333c-34.133333 25.6-59.733333 51.2-59.733333 51.2l-34.133334-34.133334c25.6-25.6 51.2-68.266667 68.266667-102.4-8.533333 8.533333-25.6 17.066667-42.666667 17.066667-8.533333 17.066667-25.6 42.666667-42.666666 59.733333l-59.733334-34.133333C349.866667 375.466667 384 256 384 256l93.866667 25.6s-8.533333 17.066667-25.6 42.666667c366.933333-102.4 384 59.733333 384 59.733333s25.6 119.466667 8.533333 298.666667z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_certified" viewBox="0 0 1024 1024">
            <path
                d="M512 0c282.766222 0 512 229.233778 512 512s-229.233778 512-512 512S0 794.766222 0 512 229.233778 0 512 0z m255.914667 318.577778l-25.315556-0.455111c-0.568889 0-57.429333-1.251556-116.053333-25.514667-60.188444-24.917333-98.986667-53.475556-99.271111-53.76L511.914667 227.555556l-15.189334 11.292444c-0.369778 0.284444-39.139556 28.842667-99.271111 53.76-58.624 24.291556-115.484444 25.514667-116.024889 25.514667L256 318.577778v263.082666C256 713.671111 422.456889 853.333333 512 853.333333c89.543111 0 256-139.633778 256-271.701333l-0.085333-263.082667zM487.736889 682.666667L341.333333 565.646222l44.999111-49.692444 93.866667 74.979555L658.460444 398.222222 711.111111 441.088 487.708444 682.666667z"
                fill="#06A97F"></path>
        </symbol>
        <symbol id="lazadaicon_liveUp" viewBox="0 0 1024 1024">
            <path
                d="M349.866667 72.533333h324.266666c153.6 0 277.333333 123.733333 277.333334 277.333334v320c0 153.6-123.733333 277.333333-277.333334 277.333333H349.866667c-153.6 0-277.333333-123.733333-277.333334-277.333333V349.866667c0-153.6 123.733333-277.333333 277.333334-277.333334"
                fill="#38C0C6"></path>
            <path
                d="M755.2 422.4l-89.6-89.6c-8.533333-8.533333-17.066667-12.8-29.866667-12.8-8.533333 0-21.333333 4.266667-29.866666 12.8l-89.6 89.6c-17.066667 17.066667-17.066667 42.666667 0 55.466667 17.066667 17.066667 42.666667 17.066667 55.466666 0l21.333334-21.333334v89.6c0 64-34.133333 93.866667-85.333334 93.866667s-85.333333-34.133333-85.333333-98.133333c0-25.6-21.333333-42.666667-42.666667-42.666667-25.6 0-42.666667 17.066667-42.666666 42.666667v4.266666c0 115.2 64 174.933333 170.666666 174.933334s174.933333-59.733333 174.933334-179.2v-85.333334l21.333333 21.333334c17.066667 17.066667 42.666667 17.066667 55.466667 0 12.8-12.8 12.8-38.4-4.266667-55.466667m-379.733333-8.533333c25.6 0 51.2-21.333333 51.2-46.933334 0-25.6-21.333333-46.933333-51.2-46.933333s-51.2 17.066667-51.2 46.933333c0 25.6 25.6 46.933333 51.2 46.933334"
                fill="#FFCD05"></path>
        </symbol>
        <symbol id="lazadaicon_fulfilledbyLazada" viewBox="0 0 1024 1024">
            <path
                d="M911.829333 510.762667c0-221.866667-179.2-401.066667-401.066666-401.066667s-401.066667 179.2-401.066667 401.066667 179.2 401.066667 401.066667 401.066666 401.066667-179.2 401.066666-401.066666m-42.666666 0c0 196.266667-157.866667 354.133333-354.133334 354.133333s-358.4-157.866667-358.4-354.133333 157.866667-354.133333 354.133334-354.133334 358.4 157.866667 358.4 354.133334"
                fill="#00374C"></path>
            <path
                d="M463.829333 369.962667h196.266667v-64h-196.266667v64z m-102.4 349.866666h72.533334v-132.266666h-72.533334v132.266666z"
                fill="#F07025"></path>
            <path d="M438.229333 493.696v-187.733333h-76.8v251.733333h200.533334v-64z" fill="#00374C"></path>
        </symbol>
        <symbol id="lazadaicon_economy" viewBox="0 0 1024 1024">
            <path
                d="M989.866667 529.066667c-132.266667-256-256-273.066667-294.4-273.066667H238.933333c-12.8 0-21.333333 8.533333-21.333333 21.333333v174.933334h42.666667V298.666667h439.466666c4.266667 0 98.133333-4.266667 213.333334 170.666666h-153.6c-34.133333 0-34.133333-29.866667-34.133334-38.4V358.4c0-12.8-8.533333-21.333333-21.333333-21.333333s-21.333333 8.533333-21.333333 21.333333v72.533333c0 29.866667 21.333333 76.8 76.8 76.8h174.933333c4.266667 12.8 12.8 21.333333 21.333333 38.4V640c0 12.8-12.8 25.6-25.6 25.6h-25.6c-8.533333-42.666667-42.666667-68.266667-85.333333-68.266667s-76.8 29.866667-85.333333 68.266667h-238.933334c-8.533333-42.666667-46.933333-68.266667-85.333333-68.266667-42.666667 0-76.8 29.866667-85.333333 68.266667h-38.4c-12.8 0-25.6-12.8-25.6-25.6v-34.133333h34.133333c12.8 0 21.333333-8.533333 21.333333-21.333334s-8.533333-21.333333-21.333333-21.333333H179.2c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333334h38.4v34.133333c0 38.4 29.866667 68.266667 68.266667 68.266667h29.866666c8.533333 42.666667 42.666667 68.266667 85.333334 68.266666s76.8-29.866667 85.333333-68.266666H725.333333c8.533333 42.666667 42.666667 68.266667 85.333334 68.266666s76.8-29.866667 85.333333-68.266666h25.6c38.4 0 68.266667-29.866667 64-68.266667v-98.133333c8.533333-4.266667 8.533333-8.533333 4.266667-12.8m-174.933334 209.066666c-68.266667 0-68.266667-102.4 0-102.4s68.266667 102.4 0 102.4m-413.866666 0c-68.266667 0-68.266667-102.4 0-102.4s68.266667 102.4 0 102.4m-337.066667-251.733333c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333334h273.066667c12.8 0 21.333333-8.533333 21.333333-21.333334s-8.533333-21.333333-21.333333-21.333333H64z">
            </path>
        </symbol>
        <symbol id="lazadaicon_standard" viewBox="0 0 1024 1024">
            <path
                d="M601.6 268.8h-68.266667V196.266667h68.266667v72.533333z m332.8 529.066667V128H234.666667c-8.533333 0-12.8 4.266667-21.333334 8.533333-8.533333 8.533333-8.533333 25.6 4.266667 34.133334l230.4 200.533333-162.133333 166.4L170.666667 435.2c-8.533333-8.533333-25.6-8.533333-34.133334 4.266667-8.533333 8.533333-8.533333 25.6 4.266667 34.133333l68.266667 59.733333v273.066667H426.666667l17.066666 34.133333c0 4.266667 12.8 25.6 34.133334 34.133334 4.266667 0 8.533333 4.266667 17.066666 4.266666s17.066667-4.266667 29.866667-8.533333l12.8-4.266667c4.266667 4.266667 12.8 8.533333 17.066667 12.8 4.266667 4.266667 8.533333 4.266667 17.066666 4.266667s21.333333-4.266667 34.133334-8.533333l12.8-4.266667c4.266667 4.266667 12.8 8.533333 17.066666 12.8 4.266667 0 8.533333 4.266667 17.066667 4.266667s21.333333-4.266667 34.133333-8.533334l17.066667-12.8c4.266667 4.266667 8.533333 4.266667 17.066667 8.533334 4.266667 0 8.533333 4.266667 12.8 4.266666 8.533333 0 17.066667-4.266667 29.866666-8.533333 8.533333-4.266667 12.8-17.066667 4.266667-25.6-4.266667-8.533333-17.066667-12.8-29.866667-4.266667l-4.266666 4.266667c-4.266667 0-4.266667-4.266667-4.266667-8.533333l-51.2-106.666667c-4.266667-8.533333-17.066667-17.066667-29.866667-8.533333-8.533333 4.266667-17.066667 17.066667-8.533333 25.6l42.666667 93.866666-17.066667 8.533334c-4.266667 4.266667-8.533333 4.266667-12.8 4.266666-4.266667 0-4.266667-4.266667-8.533333-8.533333l-38.4-85.333333c-8.533333-34.133333-21.333333-38.4-29.866667-34.133334-8.533333 4.266667-17.066667 17.066667-12.8 25.6l29.866667 68.266667-12.8 8.533333c-4.266667 4.266667-12.8 4.266667-17.066667 4.266667-4.266667-4.266667-8.533333-4.266667-8.533333-8.533333l-21.333334-55.466667c-4.266667-8.533333-17.066667-17.066667-29.866666-12.8-8.533333 4.266667-17.066667 17.066667-12.8 25.6l17.066666 38.4-12.8 4.266667c-4.266667 4.266667-8.533333 4.266667-12.8 4.266666-4.266667 0-4.266667-4.266667-4.266666-4.266666l-38.4-81.066667v-4.266667l-72.533334-157.866666-29.866666 29.866666 64 145.066667H256v-179.2l17.066667 17.066667c4.266667 4.266667 8.533333 4.266667 17.066666 4.266666 4.266667 0 12.8-4.266667 17.066667-4.266666l196.266667-200.533334c8.533333-8.533333 4.266667-25.6-4.266667-34.133333L294.4 179.2h187.733333V298.666667h162.133334V179.2h243.2v584.533333h-106.666667l-68.266667-140.8 55.466667 17.066667c4.266667 0 29.866667 4.266667 55.466667-8.533333 8.533333-4.266667 25.6-21.333333 29.866666-46.933334v-4.266666c4.266667-8.533333-4.266667-17.066667-8.533333-21.333334l-196.266667-102.4h-4.266666-4.266667l-110.933333-17.066666-34.133334 29.866666 136.533334 21.333334 179.2 93.866666c-4.266667 4.266667-4.266667 12.8-8.533334 17.066667-4.266667 4.266667-17.066667 4.266667-21.333333 4.266667l-89.6-25.6-8.533333-21.333334c-4.266667-8.533333-17.066667-17.066667-29.866667-8.533333-8.533333 4.266667-17.066667 17.066667-8.533333 25.6l25.6 46.933333 68.266666 140.8 21.333334 34.133334h174.933333z">
            </path>
        </symbol>
        <symbol id="lazadaicon_expressDelivery" viewBox="0 0 1401 1024">
            <path
                d="M877.714286 0l-508.819876 203.52795-184.447205-69.962733c-12.720497-6.360248-25.440994 0-31.801242 6.360249s-12.720497 25.440994-12.720497 31.801242c0 12.720497 12.720497 19.080745 19.080745 25.440994l178.086957 63.602484v279.850932L248.049689 508.819876c-19.080745-6.360248-38.161491 0-44.521739 19.080745-6.360248 19.080745 0 38.161491 19.080746 44.521739l114.484472 44.521739v178.086957l559.701863 228.968944 496.099379-260.770186V190.807453l-515.180124-190.807453z m0 69.962733l407.0559 146.285714-146.285714 76.322982L731.428571 127.204969l146.285715-57.242236z m19.080745 349.813665L464.298137 235.329193 636.024845 165.36646l413.416149 171.726708-152.645963 82.68323z m432.496894 292.571428l-394.335403 209.888199v-445.217391l171.726708-89.043479v159.006211l69.962733-38.16149V356.173913L1335.652174 273.490683v438.857143z m-1081.242236-25.440994c19.080745 6.360248 25.440994 25.440994 19.080746 44.521739-6.360248 19.080745-25.440994 25.440994-44.521739 19.080746l-63.602485-25.440994c-19.080745-6.360248-25.440994-25.440994-19.080745-44.521739 6.360248-19.080745 25.440994-25.440994 44.521739-19.080745l63.602484 25.440993z m0-330.732919c0 12.720497-6.360248 19.080745-12.720496 25.440994-6.360248 6.360248-19.080745 6.360248-31.801243 6.360248l-178.086956-63.602484C12.720497 318.012422 0 305.291925 0 298.931677c0-12.720497 0-25.440994 12.720497-31.801242s19.080745-12.720497 31.801242-6.360249l178.086957 63.602485c19.080745 6.360248 25.440994 19.080745 25.440993 31.801242z m604.223603 120.844721v445.217391l-445.217391-178.086957V292.571429l445.217391 184.447205z">
            </path>
        </symbol>
        <symbol id="lazadaicon_shipping" viewBox="0 0 1024 1024">
            <path
                d="M576 819.2h-341.333333l8.533333-34.133333h307.2l170.666667-588.8h34.133333l-179.2 622.933333zM332.8 196.266667h341.333333l-157.866666 541.866666h-341.333334L332.8 196.266667z m516.266667-51.2H174.933333c-34.133333 0-64 29.866667-64 68.266666v102.4c0 38.4 29.866667 68.266667 64 68.266667h8.533334l12.8-51.2h-21.333334c-8.533333 0-17.066667-8.533333-17.066666-17.066667V213.333333c0-8.533333 8.533333-17.066667 17.066666-17.066666h106.666667l-170.666667 588.8h85.333334l-25.6 85.333333h443.733333L810.666667 196.266667h42.666666c8.533333 0 17.066667 8.533333 17.066667 17.066666v102.4c0 8.533333-8.533333 17.066667-17.066667 17.066667h-42.666666L797.866667 384h51.2c34.133333 0 64-29.866667 64-68.266667V213.333333c0-38.4-29.866667-68.266667-64-68.266666zM362.666667 588.8l8.533333-29.866667h-4.266667c-25.6-4.266667-46.933333-17.066667-59.733333-34.133333-4.266667-4.266667-4.266667-8.533333-4.266667-12.8l42.666667-12.8c4.266667 4.266667 17.066667 12.8 38.4 12.8h4.266667l21.333333-64h-4.266667c-25.6-4.266667-42.666667-12.8-55.466666-21.333333 0 0-4.266667 0-4.266667-4.266667 0 0 0-4.266667-4.266667-4.266667-12.8-4.266667-17.066667-21.333333-12.8-34.133333 12.8-42.666667 68.266667-59.733333 110.933334-64h4.266666l8.533334-29.866667h38.4l-8.533334 29.866667h4.266667c29.866667 4.266667 55.466667 17.066667 64 34.133333 4.266667 4.266667 4.266667 8.533333 4.266667 12.8l-38.4 12.8c-4.266667-4.266667-21.333333-12.8-42.666667-17.066666H469.333333l-21.333333 64h4.266667c34.133333 4.266667 55.466667 17.066667 59.733333 21.333333l4.266667 4.266667v4.266666c8.533333 12.8 12.8 25.6 8.533333 42.666667-12.8 38.4-68.266667 59.733333-115.2 64h-4.266667l-8.533333 25.6h-34.133333z m59.733333-221.866667c-34.133333 4.266667-51.2 17.066667-55.466667 29.866667 0 8.533333 17.066667 17.066667 42.666667 21.333333h4.266667l12.8-55.466666-4.266667 4.266666z m0 149.333334h4.266667c34.133333-4.266667 59.733333-21.333333 59.733333-34.133334 0-8.533333-21.333333-17.066667-46.933333-21.333333h-4.266667l-12.8 55.466667z">
            </path>
        </symbol>
        <symbol id="lazadaicon_noshipping" viewBox="0 0 1024 1024">
            <path
                d="M430.933333 401.066667c-25.6-4.266667-42.666667-12.8-42.666666-21.333334 4.266667-8.533333 21.333333-25.6 55.466666-29.866666h4.266667l-17.066667 51.2z m59.733334-55.466667c21.333333 0 34.133333 8.533333 42.666666 12.8l29.866667-25.6c-12.8-17.066667-29.866667-25.6-55.466667-29.866667h-4.266666l8.533333-29.866666h-42.666667l-8.533333 29.866666h-4.266667c-42.666667 4.266667-98.133333 25.6-110.933333 64-4.266667 12.8 0 29.866667 8.533333 42.666667 0 0 0 4.266667 4.266667 4.266667 0 0 4.266667 0 4.266667 4.266666 8.533333 8.533333 29.866667 12.8 55.466666 21.333334h4.266667l-8.533333 21.333333 59.733333-51.2 17.066667-64z m-170.666667 153.6c0 4.266667 4.266667 8.533333 4.266667 12.8 4.266667 4.266667 12.8 8.533333 17.066666 12.8l34.133334-29.866667c-8.533333 0-12.8-4.266667-12.8-4.266666l-42.666667 8.533333z m89.6 221.866667l-55.466667 51.2h217.6l76.8-260.266667-68.266666 59.733333-42.666667 149.333334h-128zM192 366.933333h8.533333L213.333333 315.733333h-21.333333c-8.533333 0-17.066667-4.266667-17.066667-17.066666V196.266667c0-8.533333 8.533333-17.066667 17.066667-17.066667H298.666667L149.333333 695.466667l68.266667-59.733334L349.866667 179.2h345.6L682.666667 226.133333 793.6 128H192C157.866667 128 128 157.866667 128 196.266667V298.666667c0 38.4 29.866667 68.266667 64 68.266666M891.733333 298.666667c0 8.533333-8.533333 17.066667-17.066666 17.066666h-4.266667l-46.933333 42.666667-4.266667 8.533333h55.466667c34.133333 0 64-29.866667 64-68.266666V256l-46.933334 42.666667zM597.333333 806.4H315.733333l-55.466666 51.2h375.466666l128-443.733333-68.266666 55.466666-98.133334 337.066667z m285.866667-674.133333L128 793.6l38.4 42.666667L921.6 174.933333l-38.4-42.666666z">
            </path>
        </symbol>
        <symbol id="lazadaicon_oversea" viewBox="0 0 1024 1024">
            <path
                d="M985.6 337.066667c-4.266667 12.8-12.8 29.866667-34.133333 38.4l-320 132.266666s-29.866667 8.533333-55.466667 8.533334c-21.333333 0-38.4-8.533333-51.2-17.066667L443.733333 426.666667c-4.266667-4.266667-4.266667-8.533333-4.266666-17.066667s4.266667-12.8 8.533333-17.066667c4.266667 0 17.066667-12.8 42.666667-12.8 8.533333 0 17.066667 0 29.866666 4.266667l42.666667 12.8h12.8c8.533333 0 17.066667-4.266667 29.866667-8.533333l12.8-4.266667-81.066667-68.266667c-4.266667-4.266667-8.533333-12.8-4.266667-21.333333 0-8.533333 4.266667-12.8 12.8-17.066667 4.266667 0 21.333333-8.533333 46.933334-8.533333 17.066667 0 34.133333 4.266667 55.466666 8.533333 42.666667 17.066667 106.666667 42.666667 128 42.666667l102.4-42.666667c4.266667 0 25.6-8.533333 55.466667-8.533333 21.333333 0 38.4 8.533333 51.2 21.333333l4.266667 4.266667c-12.8 0 0 21.333333-4.266667 42.666667z m-42.666667-17.066667c-4.266667-4.266667-12.8-8.533333-17.066666-8.533333-17.066667 0-34.133333 8.533333-34.133334 8.533333l-106.666666 46.933333H768c-34.133333 0-128-34.133333-140.8-46.933333-8.533333-4.266667-17.066667-8.533333-25.6-8.533333l68.266667 59.733333c4.266667 4.266667 8.533333 12.8 4.266666 21.333333 0 8.533333-4.266667 12.8-12.8 17.066667l-51.2 21.333333c-12.8 8.533333-29.866667 8.533333-42.666666 8.533334s-25.6-4.266667-25.6-4.266667l-34.133334-8.533333 46.933334 42.666666c4.266667 8.533333 17.066667 8.533333 25.6 8.533334 17.066667 0 42.666667-8.533333 42.666666-8.533334L938.666667 332.8c4.266667-4.266667 12.8-8.533333 12.8-8.533333-4.266667 0-8.533333-4.266667-8.533334-4.266667z m-268.8-68.266667c-51.2-38.4-110.933333-59.733333-179.2-59.733333-166.4 0-298.666667 136.533333-298.666666 302.933333 0 34.133333 4.266667 68.266667 17.066666 102.4 55.466667-12.8 128-38.4 234.666667-81.066666 8.533333-4.266667 21.333333 0 29.866667 12.8 4.266667 8.533333 0 21.333333-12.8 29.866666-98.133333 38.4-174.933333 64-230.4 81.066667 51.2 98.133333 149.333333 166.4 264.533333 166.4 166.4 0 298.666667-136.533333 298.666667-302.933333v-4.266667l42.666666-17.066667v21.333334c0 192-153.6 345.6-337.066666 345.6-136.533333 0-251.733333-81.066667-307.2-196.266667-29.866667 8.533333-55.466667 8.533333-76.8 8.533333-42.666667 0-55.466667-12.8-68.266667-25.6-29.866667-42.666667 25.6-102.4 34.133333-115.2 4.266667-8.533333 21.333333-8.533333 29.866667 0 8.533333 8.533333 8.533333 21.333333 0 29.866667-17.066667 21.333333-34.133333 55.466667-29.866667 59.733333 0 0 12.8 17.066667 89.6 0-8.533333-34.133333-17.066667-72.533333-17.066666-110.933333 0-192 149.333333-345.6 337.066666-345.6 110.933333 0 204.8 51.2 268.8 136.533333-17.066667-12.8-55.466667-25.6-89.6-38.4z">
            </path>
        </symbol>
        <symbol id="lazadaicon_email" viewBox="0 0 1024 1024">
            <path
                d="M840.533333 776.533333H307.2c-17.066667 0-34.133333-8.533333-42.666667-21.333333-12.8-12.8-12.8-29.866667-12.8-46.933333l72.533334-358.4c8.533333-25.6 38.4-51.2 68.266666-51.2h533.333334c17.066667 0 34.133333 8.533333 42.666666 21.333333 8.533333 12.8 12.8 29.866667 12.8 42.666667l-72.533333 358.4c-8.533333 29.866667-38.4 55.466667-68.266667 55.466666zM307.2 716.8h533.333333c4.266667 0 8.533333-4.266667 8.533334-8.533333l72.533333-354.133334H392.533333c-4.266667 0-8.533333 4.266667-12.8 8.533334l-72.533333 354.133333z">
            </path>
            <path
                d="M610.133333 610.133333c-17.066667 0-34.133333-8.533333-46.933333-21.333333l-200.533333-213.333333 42.666666-38.4 200.533334 213.333333c4.266667 4.266667 8.533333 4.266667 8.533333 0l294.4-217.6 34.133333 46.933333-294.4 217.6c-12.8 8.533333-25.6 12.8-38.4 12.8z m-465.066666-256h132.266666v55.466667H145.066667V354.133333zM42.666667 486.4h204.8v55.466667H42.666667v-55.466667z m72.533333 119.466667H213.333333v55.466666H115.2v-55.466666z">
            </path>
        </symbol>
        <symbol id="lazadaicon_smallPrompt" viewBox="0 0 1024 1024">
            <path
                d="M512 841.589844c181.27441433 0 329.589844-148.31542969 329.589844-329.589844s-148.31542969-329.589844-329.589844-329.589844-329.589844 148.31542969-329.589844 329.589844 148.31542969 329.589844 329.589844 329.589844z"
                fill="#FF9800"></path>
            <path
                d="M538.36718725 327.42968775v128.54003907c0 13.18359399 0 26.36718725-3.29589793 39.55078125 0 13.18359399-3.29589869 26.36718725-6.59179739 42.84667918h-39.55078125c-3.29589869-16.47949193-3.29589869-29.66308594-6.59179662-42.84667918 0-13.18359399-3.29589869-26.36718725-3.29589869-39.55078125v-128.54003907h59.32617188z m-62.6220698 299.92675731c0-3.29589869 0-9.8876953 3.29589792-13.18359324 3.29589869-3.29589869 3.29589869-6.59179662 6.59179738-9.88769532 3.29589869-3.29589869 6.59179662-6.59179662 9.88769532-6.59179737 3.29589869-3.29589869 9.8876953-3.29589869 13.18359324-3.29589794 3.29589869 0 9.8876953 0 13.18359399 3.29589794 3.29589869 3.29589869 6.59179662 3.29589869 9.88769535 6.59179737 3.29589869 3.29589869 6.59179662 6.59179662 6.5917966 9.88769532 3.29589869 3.29589869 3.29589869 9.8876953 3.29589869 13.18359324 0 3.29589869 0 9.8876953-3.29589869 13.183594s-3.29589869 6.59179662-6.59179663 9.88769532c-3.29589869 3.29589869-6.59179662 6.59179662-9.8876953 6.59179662-3.29589869 3.29589869-9.8876953 3.29589869-13.18359401 3.29589869-3.29589869 0-9.8876953 0-13.18359324-3.29589869-3.29589869-3.29589869-6.59179662-3.29589869-9.88769532-6.59179662-3.29589869-3.29589869-6.59179662-6.59179662-6.59179738-9.88769532s-3.29589869-9.8876953-3.29589792-13.183594z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_largePrompt" viewBox="0 0 1024 1024">
            <path
                d="M512 938.666667c234.666667 0 426.666667-192 426.666667-426.666667s-192-426.666667-426.666667-426.666667-426.666667 192-426.666667 426.666667 192 426.666667 426.666667 426.666667z"
                fill="#FF9800"></path>
            <path
                d="M546.133333 273.066667v166.4c0 17.066667 0 34.133333-4.266666 51.2 0 17.066667-4.266667 34.133333-8.533334 55.466666h-51.2c-4.266667-21.333333-4.266667-38.4-8.533333-55.466666 0-17.066667-4.266667-34.133333-4.266667-51.2v-166.4h76.8z m-81.066666 388.266666c0-4.266667 0-12.8 4.266666-17.066666 4.266667-4.266667 4.266667-8.533333 8.533334-12.8 4.266667-4.266667 8.533333-8.533333 12.8-8.533334 4.266667-4.266667 12.8-4.266667 17.066666-4.266666 4.266667 0 12.8 0 17.066667 4.266666 4.266667 4.266667 8.533333 4.266667 12.8 8.533334 4.266667 4.266667 8.533333 8.533333 8.533333 12.8 4.266667 4.266667 4.266667 12.8 4.266667 17.066666 0 4.266667 0 12.8-4.266667 17.066667s-4.266667 8.533333-8.533333 12.8c-4.266667 4.266667-8.533333 8.533333-12.8 8.533333-4.266667 4.266667-12.8 4.266667-17.066667 4.266667-4.266667 0-12.8 0-17.066666-4.266667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333-4.266667-4.266667-8.533333-8.533333-8.533334-12.8s-4.266667-12.8-4.266666-17.066667z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_gojek" viewBox="0 0 1024 1024">
            <path
                d="M799.511273 727.831273a130.094545 130.094545 0 0 0-52.922182 8.797091c-16.896-33.605818-31.418182-64.093091-28.346182-63.906909l34.071273 1.396363s4.608-42.356364 2.839273-65.675636c-1.722182-23.458909-9.867636-23.877818-9.867637-23.877818l-30.533818 9.681454c-36.026182 12.194909-41.425455 9.169455-41.425455 9.169455s0.465455-36.165818-6.376727-36.445091c-6.795636-0.279273-40.122182-8.750545-40.122182-8.750546-2.792727-5.492364-25.227636-17.408-36.910545-26.158545-13.079273-14.941091-58.647273-48.081455-91.601455-71.168a59.531636 59.531636 0 0 0 75.636364-54.784 59.624727 59.624727 0 0 0-56.785455-62.184727 59.485091 59.485091 0 0 0-61.905454 57.064727c-0.651636 14.242909 3.816727 27.508364 11.682909 38.167273a340.48 340.48 0 0 1-4.514909-3.025455c-7.912727-7.214545-17.035636 2.280727-17.035636 2.280727s-76.194909 151.831273-80.709819 161.233455c-4.514909 9.402182 13.777455 29.463273 13.777455 29.463273l-103.982546 2.327272c-17.826909 0.605091-31.278545 60.462545-31.278545 60.462546-68.887273 12.101818-109.474909 96.861091-109.474909 96.861091l17.221818 13.079272-1.256727 28.765091-31.371637-1.349818c-11.403636 11.822545-0.791273 19.176727-0.791272 19.176727l31.325091 1.396364v0.512l-0.186182 4.980364h0.139636a134.330182 134.330182 0 0 0 128.186182 134.516363 134.190545 134.190545 0 0 0 139.264-123.112727c14.475636-0.139636 80.477091-0.605091 122.833455 0 47.802182 0.698182 59.904-27.601455 59.904-27.601454l4.282181-100.072728s30.068364 1.396364 44.032-4.933818c13.870545-6.237091 34.536727-39.610182 34.536728-39.610182l33.885091 59.298909a131.397818 131.397818 0 0 0-52.64291 99.746909 131.258182 131.258182 0 0 0 125.160728 137.076364 131.118545 131.118545 0 0 0 136.424727-125.765818 131.258182 131.258182 0 0 0-125.160727-136.983273zM330.193455 776.471273c21.643636 13.963636 36.770909 37.096727 39.889454 63.767272l-40.029091-1.722181a50.455273 50.455273 0 0 0-16.756363-23.086546l16.896-38.958545z m-43.566546-13.963637c4.189091 0.139636 8.145455 0.744727 12.101818 1.536l-12.427636 41.053091-1.489455-0.093091c-20.48-0.884364-39.517091 10.705455-48.034909 29.416728l-40.029091-1.722182a88.064 88.064 0 0 1 89.879273-70.237091v0.046545z m-7.633454 176.686546a88.203636 88.203636 0 0 1-84.154182-87.365818l37.329454 1.582545c-1.256727 27.927273 20.340364 51.572364 48.221091 52.875636 27.927273 1.210182 51.386182-20.48 52.596364-48.453818l37.282909 1.629091a88.110545 88.110545 0 0 1-91.229091 79.732364z m365.847272-338.292364c-80.430545-6.283636-150.202182 27.741091-150.202182 27.741091s-2.373818 3.258182-4.794181-0.186182c-14.010182-20.014545-15.546182-35.048727-15.546182-35.048727l33.512727-78.196364c25.832727 32.768 137.774545 67.863273 137.774546 67.863273l-0.791273 17.826909h0.046545z m146.571637 344.762182a88.436364 88.436364 0 0 1-84.340364-92.299636 88.389818 88.389818 0 0 1 29.789091-62.510546l20.154182 35.188364a46.778182 46.778182 0 0 0 30.673454 79.965091 46.638545 46.638545 0 0 0 34.304-80.244364 46.685091 46.685091 0 0 0-36.072727-13.032727c-4.701091-8.890182-12.055273-22.993455-20.340364-39.005091a88.064 88.064 0 0 1 117.713455 87.226182 88.389818 88.389818 0 0 1-91.880727 84.712727z m-270.196364-18.106182v-3.630545l132.654545 0.093091 3.49091 3.723636-136.145455-0.186182zM470.109091 964.421818v-3.677091l204.660364 0.139637 4.282181 3.816727L470.109091 964.421818z m85.643636-72.750545v-5.352728h91.229091l1.070546 3.909819-92.346182 1.396363zM234.496 163.188364c-21.922909 13.451636-41.425455-23.365818-31.511273-30.161455 332.148364-224.535273 603.648-2.699636 605.463273 16.430546 1.861818 19.176727-27.136 26.065455-27.136 26.065454-266.24-208.523636-524.986182-25.832727-546.816-12.334545z m62.370909 83.549091c-16.709818 10.845091-30.301091-18.757818-22.714182-24.203637 253.300364-180.177455 460.241455-2.187636 461.730909 13.172364 1.396364 15.406545-22.062545 20.945455-22.062545 20.945454-202.938182-167.377455-400.290909-20.759273-417.000727-9.914181zM368.733091 321.629091c-11.031273 7.819636-20.852364-15.313455-15.825455-19.176727 166.865455-129.722182 303.290182-1.582545 304.221091 9.495272 0.930909 11.077818-13.684364 16.896-13.684363 16.896-133.725091-120.552727-263.726545-14.987636-274.711273-7.168V321.629091z">
            </path>
        </symbol>
        <symbol id="lazadaicon_service" viewBox="0 0 1024 1024">
            <path
                d="M791.236118 531.80270466A78.30034946 78.30034946 0 0 0 785.77330297 517.91804997a61.45666943 61.45666943 0 0 0-30.38690869-29.02120529 20.03032178 20.03032178 0 0 0-8.19422255-3.30045065l-46.32012027-7.2837541a20.03032178 20.03032178 0 0 0-22.76172928 16.38844581l-36.76019288 219.99211563a19.80270466 19.80270466 0 0 0 16.27463616 22.76173001l42.79205178 6.94232733a17.41272317 17.41272317 0 0 0 3.41425958 0h5.34900611a60.7738181 60.7738181 0 0 0 41.54015658-17.75414919 79.66605358 79.66605358 0 0 0 9.78754377-11.38086501 79.66605358 79.66605358 0 0 0 8.9908828 0.79666097 77.73130633 77.73130633 0 0 0 26.6312238-4.77996369l-5.121389 30.1592923a83.30793026 83.30793026 0 0 1-35.96353262 51.10008252c-31.75261281 23.67219847-94.11975141 46.66154558-214.52930132 36.64638469a56.90432358 56.90432358 0 0 0-44.27156411-32.20784776c-29.47643951-4.89377188-56.90432358 9.78754378-60.43239133 33.00450801s16.95748823 45.52345929 46.43392773 50.7586572A58.2700277 58.2700277 0 0 0 530.84193207 869.58677086c22.76172928 2.16236438 44.61299011 3.18664247 65.09854685 3.18664248 80.69033094 0 142.60223533-16.27463689 184.82524325-48.59629284a120.86478413 120.86478413 0 0 0 49.84818803-76.59322005l17.98176632-108.23202392 3.18664246-18.66461766a77.95892343 77.95892343 0 0 0-60.54620098-88.88455421z m20.94079094 82.28365219l-5.23519719 31.41118677a38.125897 38.125897 0 0 1-30.72833545 30.61452652l17.07129715-101.74493154a38.01208808 38.01208808 0 0 1 18.89223549 39.71921825zM723.17854652 698.87379943a20.03032178 20.03032178 0 0 1-16.04701904 6.48709312l-22.76172929-3.86949381 30.27309978-180.95575016 22.76173 3.64187668a20.3717478 20.3717478 0 0 1 13.08799443 11.380865 48.82390995 48.82390995 0 0 1 3.8694938 30.04548266l-17.64034029 105.72823352A49.05152707 49.05152707 0 0 1 723.17854652 698.87379943zM285.58429604 491.28682617A19.91651357 19.91651357 0 0 0 262.25352361 475.80885026l-45.52345929 8.99088279a20.14413068 20.14413068 0 0 0-8.08041363 3.64187669 61.34286124 61.34286124 0 0 0-29.81786626 30.15929157A88.42931928 88.42931928 0 0 0 173.2551612 573.68428727l21.73745121 104.93157327c7.85279651 37.67066206 36.6463847 64.41569478 67.2609112 64.41569405a54.05910787 54.05910787 0 0 0 6.03185818-0.56904314h0.56904314a16.72987112 16.72987112 0 0 0 4.09711163 0l42.45062575-9.44611774A19.80270466 19.80270466 0 0 0 330.5387122 709.57181237zM264.75731402 703.19852818c-11.380865 2.27617329-26.40360597-11.380865-30.72833544-32.43546488L212.17771847 565.60387292a50.30342227 50.30342227 0 0 1 2.73140751-30.15929158A20.48555673 20.48555673 0 0 1 228.11092933 523.60848211l22.76172928-4.55234584L287.74666042 698.87379943zM771.43341334 458.62374419a93.09547403 93.09547403 0 0 1 16.04701904 9.78754378c0-103.56586915-25.37932861-183.80096588-74.20323782-238.99816004C661.38045108 171.02929132 582.85248376 141.21142578 479.28661461 141.21142578S297.87563022 171.02929132 245.86507854 229.52693612C196.47212546 285.29317342 171.20660503 366.89397427 171.77564889 472.39459067a89.56740555 89.56740555 0 0 1 19.11985261-13.54322937 54.05910787 54.05910787 0 0 1 18.77842655-7.6251794l3.6418767-0.68285133c2.84521643-83.87697341 23.89981629-148.97551953 63.5052256-193.47470145a67.37471941 67.37471941 0 0 0 34.1425943 37.67066277 63.96045983 63.96045983 0 0 0 26.06218066 5.34900612 88.54312818 88.54312818 0 0 0 45.52345857-13.31561155 139.52940179 139.52940179 0 0 1 22.76173002-10.69801295 234.44581418 234.44581418 0 0 1 74.43085566-11.380865 234.21819706 234.21819706 0 0 1 74.31704676 11.38086501 144.99221681 144.99221681 0 0 1 22.76172927 10.69801294 88.54312818 88.54312818 0 0 0 45.5234593 13.31561155 63.96045983 63.96045983 0 0 0 26.06217995-5.34900612 67.37471941 67.37471941 0 0 0 34.14259501-37.67066277c39.26398328 44.15775518 60.31858315 109.37011021 63.6190338 194.0437446l6.25947528 0.91046916a56.90432358 56.90432358 0 0 1 19.00604441 6.60090131z m-139.98463673-201.78273218a23.78600738 23.78600738 0 0 1-9.21850063 1.82093833 39.4916004 39.4916004 0 0 1-11.38086429-1.93474726A217.82975197 217.82975197 0 0 0 569.53687222 237.49354157l-1.25189519-0.56904315v1.02427808-1.02427808a273.82360639 273.82360639 0 0 0-87.74646722-13.65703758H478.48995436a272.45790226 272.45790226 0 0 0-87.5188501 13.7708465l-1.59332123 0.56904314a211.57027597 211.57027597 0 0 0-40.85730452 19.1198526 40.06064427 40.06064427 0 0 1-12.06371634 2.04855545 23.78600738 23.78600738 0 0 1-9.21850063-1.82093834c-10.01516088-4.55234587-14.90893277-18.55080946-17.18510606-29.70405662C353.30044148 197.43289802 410.20476579 182.41015633 479.62804064 182.29634741S606.06944801 197.43289802 649.20292582 227.13695464c-2.84521643 11.15324717-7.6251794 25.1517115-17.75414922 29.70405737z">
            </path>
        </symbol>
        <symbol id="lazadaicon_nowarranty" viewBox="0 0 1024 1024">
            <path
                d="M298.666667 648.533333l-29.866667 34.133334C153.6 490.666667 170.666667 256 170.666667 251.733333c0-4.266667 4.266667-12.8 8.533333-17.066666 4.266667-4.266667 12.8-4.266667 17.066667-4.266667 217.6 25.6 285.866667-85.333333 285.866666-85.333333 4.266667-8.533333 12.8-12.8 21.333334-12.8s17.066667 4.266667 21.333333 8.533333c4.266667 4.266667 38.4 59.733333 140.8 81.066667l-34.133333 38.4c-68.266667-17.066667-106.666667-51.2-128-72.533334-34.133333 38.4-119.466667 102.4-285.866667 89.6-4.266667 59.733333 4.266667 226.133333 81.066667 371.2z m537.6-401.066666v4.266666c0 4.266667 34.133333 482.133333-320 631.466667h-8.533334H494.933333c-55.466667-21.333333-98.133333-51.2-136.533333-85.333333l29.866667-34.133334c34.133333 29.866667 68.266667 55.466667 115.2 76.8C763.733333 725.333333 789.333333 409.6 793.6 298.666667l42.666667-51.2zM814.933333 128l38.4 34.133333L226.133333 883.2l-38.4-34.133333L814.933333 128z">
            </path>
        </symbol>
        <symbol id="lazadaicon_warranty" viewBox="0 0 1024 1024">
            <path
                d="M844.8 234.666667c-4.266667-4.266667-12.8-4.266667-17.066667-4.266667-217.6 25.6-290.133333-85.333333-294.4-89.6-4.266667-8.533333-12.8-12.8-21.333333-12.8s-17.066667 4.266667-21.333333 12.8c0 0-72.533333 115.2-294.4 89.6-4.266667 0-12.8 0-17.066667 4.266667-4.266667 0-8.533333 8.533333-8.533333 12.8 0 4.266667-34.133333 494.933333 332.8 648.533333h21.333333C891.733333 742.4 853.333333 256 853.333333 247.466667c0-4.266667-4.266667-12.8-8.533333-12.8z m-627.2 42.666666c170.666667 12.8 260.266667-51.2 294.4-89.6 34.133333 38.4 123.733333 102.4 294.4 89.6 4.266667 93.866667-12.8 448-294.4 571.733334C230.4 725.333333 217.6 371.2 217.6 277.333333z"
                fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_0day" viewBox="0 0 1024 1024">
            <path
                d="M512 281.6c-136.533333 0-247.466667 106.666667-247.466667 238.933333 0 38.4 8.533333 76.8 29.866667 110.933334l-38.4 38.4c-25.6-42.666667-42.666667-93.866667-42.666667-149.333334 0-157.866667 132.266667-290.133333 294.4-290.133333 51.2 0 102.4 12.8 145.066667 38.4l-12.8 17.066667-38.4 12.8c-25.6-12.8-59.733333-17.066667-89.6-17.066667z m149.333333 430.933333c12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 38.4-110.933333 59.733333-179.2 59.733334-59.733333 0-110.933333-17.066667-157.866667-42.666667l34.133334-34.133333c34.133333 21.333333 76.8 29.866667 119.466666 29.866666 59.733333 0 110.933333-17.066667 153.6-51.2z m251.733334-213.333333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133333-93.866667 0-179.2-29.866667-247.466667-81.066666l34.133334-38.4c59.733333 42.666667 136.533333 64 213.333333 64 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-21.333333 25.6-21.333333zM823.466667 298.666667c-4.266667 17.066667-17.066667 29.866667-34.133334 34.133333h-4.266666l38.4-34.133333zM200.533333 725.333333l-34.133333 34.133334C115.2 695.466667 85.333333 610.133333 85.333333 520.533333c0-230.4 192-418.133333 426.666667-418.133333 59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c8.533333-12.8 21.333333-21.333333 38.4-17.066667 17.066667 0 34.133333 12.8 38.4 29.866667l4.266666 21.333333-42.666666 42.666667-8.533334-34.133334-34.133333 55.466667C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 76.8 21.333333 149.333333 64 204.8zM896 85.333333l42.666667 38.4-810.666667 810.666667-42.666667-38.4L896 85.333333z">
            </path>
        </symbol>
        <symbol id="lazadaicon_7days" viewBox="0 0 1024 1024">
            <path
                d="M648.533333 409.6v38.4l-106.666666 238.933333h-76.8l98.133333-217.6h-119.466667V409.6h204.8z m264.533334 85.333333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133334S85.333333 750.933333 85.333333 520.533333s192-418.133333 426.666667-418.133333c59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c4.266667-17.066667 21.333333-21.333333 38.4-21.333334s34.133333 12.8 38.4 29.866667l42.666666 162.133333c8.533333 21.333333-8.533333 46.933333-29.866666 55.466667l-179.2 55.466667h-8.533334c-8.533333 0-21.333333-8.533333-25.6-17.066667-8.533333-12.8 0-25.6 12.8-29.866667l174.933334-55.466666-34.133334-140.8-34.133333 59.733333C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 204.8 170.666667 366.933333 375.466667 366.933334 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-25.6 25.6-25.6z m-401.066667-213.333333c-136.533333 0-247.466667 106.666667-247.466667 243.2 0 132.266667 110.933333 243.2 247.466667 243.2 55.466667 0 106.666667-17.066667 149.333333-51.2 12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 34.133333-110.933333 55.466667-179.2 55.466667-162.133333 0-294.4-132.266667-294.4-290.133334 0-157.866667 132.266667-290.133333 294.4-290.133333 55.466667 0 110.933333 17.066667 157.866667 46.933333l-68.266667 21.333334c-25.6-12.8-59.733333-17.066667-89.6-17.066667z">
            </path>
        </symbol>
        <symbol id="lazadaicon_14days" viewBox="0 0 1024 1024">
            <path
                d="M913.066667 494.933333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133334S85.333333 750.933333 85.333333 520.533333s192-418.133333 426.666667-418.133333c59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c4.266667-17.066667 21.333333-21.333333 38.4-21.333334s34.133333 12.8 38.4 29.866667l42.666666 162.133333c8.533333 21.333333-8.533333 46.933333-29.866666 55.466667l-179.2 55.466667h-8.533334c-8.533333 0-21.333333-8.533333-25.6-17.066667-8.533333-12.8 0-25.6 12.8-29.866667l174.933334-55.466666-34.133334-140.8-34.133333 59.733333C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 204.8 170.666667 366.933333 375.466667 366.933334 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-25.6 25.6-25.6zM392.533333 469.333333V413.866667h115.2c0 17.066667-4.266667 29.866667-4.266666 46.933333v157.866667c0 17.066667 0 29.866667 4.266666 46.933333h-68.266666c0-12.8 4.266667-29.866667 4.266666-46.933333V469.333333H392.533333z m153.6 145.066667v-55.466667c12.8-12.8 12.8-12.8 29.866667-34.133333l68.266667-76.8c12.8-17.066667 21.333333-25.6 29.866666-34.133333h64c0 17.066667-4.266667 29.866667-4.266666 51.2v98.133333h8.533333c8.533333 0 21.333333 0 29.866667-4.266667v55.466667H733.866667v12.8c0 17.066667 0 25.6 4.266666 38.4h-64c0-8.533333 4.266667-21.333333 4.266667-38.4v-12.8h-132.266667z m123.733334-51.2v-34.133333-42.666667c-4.266667 8.533333-12.8 12.8-17.066667 25.6l-42.666667 51.2h59.733334zM512 281.6c-136.533333 0-247.466667 106.666667-247.466667 243.2 0 132.266667 110.933333 243.2 247.466667 243.2 55.466667 0 106.666667-17.066667 149.333333-51.2 12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 34.133333-110.933333 55.466667-179.2 55.466667-162.133333 0-294.4-132.266667-294.4-290.133334 0-157.866667 132.266667-290.133333 294.4-290.133333 55.466667 0 110.933333 17.066667 157.866667 46.933333l-68.266667 21.333334c-25.6-12.8-59.733333-17.066667-89.6-17.066667z">
            </path>
        </symbol>
        <symbol id="lazadaicon_optionChecked" viewBox="0 0 1024 1024">
            <path d="M1023.6802 0v1023.3604H0.3198L1023.6802 0z" fill="#0a5d24"></path>
            <path
                d="M652.072455 910.790756l-173.971268-173.331668 49.249219-49.249219 124.722049 124.722049 263.515303-263.515303 48.609619 49.249219-312.124922 312.124922zM0.3198 1023.3604v-63.960025L959.720175 0h63.960025v44.772017L45.091818 1024 0.3198 1023.3604z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_google" viewBox="0 0 1024 1024">
            <path
                d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
                fill="#D34836"></path>
            <path
                d="M583.68 559.104v-81.92H389.12v81.92h112.64c-16.384 49.152-63.488 81.92-116.736 81.92-51.2 0-114.688-47.104-114.688-122.88 0-69.632 49.152-122.88 114.688-122.88 30.72 0 61.44 12.288 81.92 30.72l59.392-59.392c-36.864-34.816-86.016-55.296-139.264-55.296-112.64 0-202.752 92.16-202.752 202.752s92.16 202.752 202.752 202.752c106.496 4.096 184.32-61.44 196.608-157.696zM839.68 483.328v51.2h-71.68v71.68H716.8v-71.68h-71.68v-51.2H716.8v-71.68h51.2v71.68H839.68z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_twitter" viewBox="0 0 1024 1024">
            <path
                d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
                fill="#5EAADE"></path>
            <path
                d="M784.384 346.112c-20.48 8.192-40.96 14.336-63.488 18.432 22.528-14.336 40.96-34.816 49.152-61.44-22.528 12.288-45.056 22.528-71.68 26.624-20.48-22.528-49.152-34.816-81.92-34.816-61.44 0-112.64 49.152-112.64 112.64 0 8.192 0 16.384 2.048 24.576-92.16-4.096-176.128-49.152-231.424-116.736-8.192 14.336-14.336 32.768-14.336 53.248 0 38.912 20.48 73.728 49.152 92.16-18.432 0-34.816-6.144-51.2-14.336v2.048c0 53.248 38.912 100.352 90.112 110.592-10.24 2.048-18.432 4.096-28.672 4.096-8.192 0-14.336 0-20.48-2.048 14.336 45.056 55.296 77.824 104.448 77.824-38.912 30.72-86.016 47.104-139.264 47.104-8.192 0-18.432 0-26.624-2.048 49.152 32.768 108.544 51.2 172.032 51.2 206.848 0 319.488-169.984 319.488-319.488v-14.336c20.48-14.336 38.912-34.816 55.296-55.296z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_pinterest" viewBox="0 0 1024 1024">
            <path
                d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
                fill="#CA242D"></path>
            <path
                d="M354.304 555.008c12.288 8.192 20.48 10.24 24.576-2.048 4.096-12.288 4.096-16.384 6.144-28.672 2.048-12.288 0-12.288-10.24-24.576-10.24-14.336-26.624-53.248-4.096-114.688 24.576-69.632 94.208-100.352 155.648-96.256 61.44 4.096 118.784 36.864 120.832 120.832 2.048 79.872-24.576 124.928-36.864 139.264-12.288 14.336-43.008 47.104-83.968 28.672-49.152-22.528-22.528-71.68-18.432-90.112 4.096-20.48 26.624-63.488 16.384-102.4-8.192-24.576-43.008-36.864-61.44-22.528-26.624 20.48-32.768 38.912-36.864 67.584-4.096 30.72 10.24 61.44 10.24 61.44s-32.768 131.072-38.912 165.888c-8.192 47.104-12.288 77.824-4.096 120.832 2.048 10.24 8.192 14.336 14.336 4.096 14.336-22.528 43.008-65.536 55.296-116.736 8.192-36.864 16.384-69.632 16.384-69.632s20.48 34.816 61.44 38.912c40.96 4.096 83.968-2.048 133.12-53.248 47.104-51.2 57.344-151.552 51.2-192.512-8.192-53.248-53.248-137.216-151.552-153.6-108.544-18.432-172.032 26.624-186.368 38.912-28.672 22.528-77.824 69.632-81.92 147.456-8.192 100.352 32.768 122.88 49.152 133.12z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_tumblr" viewBox="0 0 1024 1024">
            <path
                d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z"
                fill="#181818"></path>
            <path
                d="M649.216 679.936l26.624 81.92c-6.144 8.192-18.432 16.384-38.912 22.528-20.48 6.144-40.96 10.24-61.44 10.24-24.576 0-45.056-2.048-65.536-8.192-20.48-6.144-36.864-14.336-49.152-24.576L430.08 724.992c-8.192-14.336-14.336-26.624-18.432-40.96-4.096-14.336-6.144-26.624-6.144-40.96v-186.368H348.16v-73.728c16.384-6.144 30.72-14.336 45.056-24.576 12.288-10.24 22.528-20.48 30.72-30.72 8.192-10.24 14.336-22.528 20.48-34.816 6.144-12.288 10.24-24.576 12.288-34.816l6.144-30.72c0-2.048 0-2.048 2.048-2.048l2.048-2.048h83.968V368.64h114.688v86.016h-114.688v178.176c0 6.144 0 12.288 2.048 18.432 2.048 6.144 4.096 12.288 8.192 18.432 4.096 6.144 10.24 10.24 16.384 14.336s16.384 4.096 28.672 4.096c14.336 2.048 28.672-2.048 43.008-8.192z"
                fill="#FFFFFF"></path>
        </symbol>
        <symbol id="lazadaicon_next" viewBox="0 0 1024 1024">
            <path
                d="M618.66666633 516.26666699L281.60000033 853.33333299l85.333333 85.33333401L789.33333332 516.266667l-4.266667-4.266667-422.39999999-422.4-85.333333 85.333333 341.333333 341.33333399z">
            </path>
        </symbol>
        <symbol id="lazadaicon_delete" viewBox="0 0 1024 1024">
            <path
                d="M896 204.8L819.2 128 512 435.2 204.8 128 128 204.8l307.2 307.2L128 819.2 204.8 896l307.2-307.2 307.2 307.2 76.8-76.8-307.2-307.2z">
            </path>
        </symbol>
        <symbol id="lazadaicon_add" viewBox="0 0 1024 1024">
            <path d="M544 480v-160h-64v160h-160v64h160v160h64v-160h160v-64h-160z"></path>
        </symbol>
        <symbol id="lazadaicon_reduce" viewBox="0 0 1024 1024">
            <path d="M320 480h384v64h-384z"></path>
        </symbol>
        <symbol id="lazadaicon_check" viewBox="0 0 1024 1024">
            <path
                d="M840.533333 213.333333L938.666667 311.466667 362.666667 883.2 85.333333 605.866667l98.133334-98.133334 179.2 179.2z">
            </path>
        </symbol>
        <symbol id="lazadaicon_back" viewBox="0 0 1024 1024">
            <path
                d="M912.00000031 464H303.99999969l280.00000031-280.00000031L512 111.99999969 111.99999969 512l400.00000031 400.00000031 72-72-280.00000031-280.00000031H912.00000031z">
            </path>
        </symbol>
        <symbol id="lazadaicon_ellipsis" viewBox="0 0 1024 1024">
            <path
                d="M682.666667 512c0-46.933333 38.4-85.333333 85.333333-85.333333s85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333-85.333333-38.4-85.333333-85.333333z m-85.33333399 0c0 46.933333-38.4 85.333333-85.33333301 85.33333301s-85.333333-38.4-85.33333301-85.33333301 38.4-85.333333 85.33333301-85.33333301 85.333333 38.4 85.33333301 85.33333301z m-256.00000001 0c0 46.933333-38.4 85.333333-85.333333 85.333333s-85.333333-38.4-85.333333-85.333333 38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333z"
                fill="#808080"></path>
        </symbol>
        <symbol id="lazadaicon_bgCircle" viewBox="0 0 1024 1024">
            <path
                d="M512 512m-426.666667 0a426.666667 426.666667 0 1 0 853.333334 0 426.666667 426.666667 0 1 0-853.333334 0Z"
                fill="#0a5d24"></path>
        </symbol>
        <symbol id="lazadaicon_dropDownArrow" viewBox="0 0 1024 1024">
            <path d="M650.08 458.08l52.32 52.32L512 700.8l-190.4-190.4 52.32-52.32L512 596.16z" fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_btnCheck" viewBox="0 0 1024 1024">
            <path
                d="M433.694118 602.352941l-90.352942-90.352941-57.223529 57.223529 147.576471 141.552942 304.188235-337.317647-57.223529-57.22353-246.964706 286.117647zM512 60.235294c249.976471 0 451.764706 201.788235 451.764706 451.764706s-201.788235 451.764706-451.764706 451.764706S60.235294 761.976471 60.235294 512 262.023529 60.235294 512 60.235294z"
                fill="#FF330C"></path>
        </symbol>
        <symbol id="lazadaicon_addToCart" viewBox="0 0 1024 1024">
            <path
                d="M520.533333 738.133333c-34.133333 0-64 29.866667-64 64s29.866667 64 64 64 64-29.866667 64-64-25.6-64-64-64zM324.266667 213.333333v64h64l119.466666 251.733334-46.933333 76.8c-4.266667 8.533333-8.533333 21.333333-8.533333 34.133333 0 34.133333 29.866667 64 64 64h392.533333V640h-379.733333c-4.266667 0-8.533333-4.266667-8.533334-8.533333v-4.266667l29.866667-55.466667h243.2c25.6 0 46.933333-12.8 55.466667-34.133333l119.466666-213.333333c12.8-4.266667 12.8-4.266667 12.8-12.8 0-21.333333-12.8-34.133333-34.133333-34.133334H460.8L430.933333 213.333333H324.266667z m524.8 524.8c34.133333 0 64 29.866667 64 64s-29.866667 64-64 64-64-29.866667-64-64 29.866667-64 64-64z m-610.133334-256h123.733334V554.666667H238.933333v140.8H166.4V554.666667H42.666667v-72.533334h123.733333v-128h76.8v128z"
                fill="#9E9E9E"></path>
        </symbol>
        <symbol id="lazadaicon_tooltip" viewBox="0 0 1024 1024">
            <path
                d="M469.333333 725.333333h85.333334v-256h-85.333334v256z m42.666667-640C277.333333 85.333333 85.333333 277.333333 85.333333 512s192 426.666667 426.666667 426.666667 426.666667-192 426.666667-426.666667S746.666667 85.333333 512 85.333333z m0 768c-187.733333 0-341.333333-153.6-341.333333-341.333333s153.6-341.333333 341.333333-341.333333 341.333333 153.6 341.333333 341.333333-153.6 341.333333-341.333333 341.333333zM469.333333 384h85.333334V298.666667h-85.333334v85.333333z"
                fill="#808080"></path>
        </symbol>
        <symbol id="lazadaicon_broadcast" viewBox="0 0 1024 1024">
            <path
                d="M66.28571471 360.11428538v303.87428619h197.99999994L512 917.18857149V106.81142851L264.28571481 360.11428538H66.28571471zM734.85714313 512c0-91.13142842-49.57714313-167.14285687-123.84-202.59428526v405.18857052C685.27999998 679.14285687 734.85714313 603.23428535 734.85714313 512zM611.01714313 66.28571471v106.35428524c143.65714313 45.60000006 247.6457147 177.2571431 247.64571372 339.3942854 0 162.06857149-104.02285691 293.76000001-247.64571372 339.32571454V957.71428529C809.12000005 912.11428539 957.71428529 729.78285684 957.71428529 512 957.71428529 294.28571476 809.12000005 111.88571461 611.01714313 66.28571471z"
                fill="#26A96D"></path>
        </symbol>
        <symbol id="lazadaicon_close" viewBox="0 0 1024 1024">
            <path
                d="M555.424 516.608l158.4-158.4-54.336-54.304-158.4 158.4-153.856-153.856-54.304 54.304 153.888 153.856-149.344 149.344 54.304 54.304 149.344-149.344 153.856 153.856 54.304-54.304-153.856-153.856z m-43.008 472.64c-265.088 0-480-214.944-480-480 0-265.12 214.912-480 480-480 265.088 0 480 214.88 480 480 0 265.056-214.912 480-480 480z">
            </path>
        </symbol>
        <symbol id="lazadaicon_closeBtn" viewBox="0 0 1024 1024">
            <path
                d="M0 512C0 229.23 229.23 0 512 0s512 229.23 512 512-229.23 512-512 512S0 794.77 0 512z m768-204.8L716.8 256 512 460.8 307.2 256 256 307.2 460.8 512 256 716.8l51.2 51.2L512 563.2 716.8 768l51.2-51.2L563.2 512 768 307.2z"
                fill="#D1D3D4"></path>
        </symbol>
        <symbol id="lazadaicon_installment" viewBox="0 0 1024 1024">
            <path
                d="M776.7552 779.6224l-3.0464 0.4864v-41.856l3.072 0.4864c23.04 3.4816 39.04 13.568 39.0144 20.3776 0 6.8864-16.0256 16.9984-39.04 20.5056z m-32.2304-73.6l-3.0208-0.384c-25.472-3.4048-41.0624-14.336-41.1136-20.7104 0.0768-6.3744 15.7184-17.3568 41.1136-20.7616l3.0208-0.384v42.24z m88.192 26.2912a47.8976 47.8976 0 0 0-11.0592-6.9632c-10.5728-5.0944-26.4192-9.6-45.7472-13.056l-2.2016-0.4096v-47.9488l3.072 0.4608c17.92 2.7136 30.5152 9.1136 35.9168 14.7712l28.2624-10.0352c-9.1648-17.7408-33.6896-30.8224-64.896-34.4064l-2.3552-0.2816v-25.7536h-29.184v25.5744l-2.4064 0.2304c-41.728 4.224-70.8352 24.9856-70.8352 50.4576 0 12.9024 7.2192 24.6784 21.0432 34.048l1.1264 0.5888c6.6816 3.5328 21.8624 10.1376 48.8448 14.4896l2.2272 0.3584v45.9264l-3.0208-0.4096c-19.712-2.6624-34.048-9.9584-39.0144-16.2304l-29.0304 7.1424c7.424 20.1472 33.9712 35.2256 68.6592 38.7584l2.4064 0.256v26.24l29.184 0.0256v-26.4704l2.3552-0.256c40.576-4.6592 68.9152-25.3696 68.9152-50.304 0-8.6784-3.2768-16.8192-9.6256-24.1408a64.1536 64.1536 0 0 0-2.6368-2.6624z m-74.624 137.7792c-83.968 0-152.2944-68.7104-152.2944-153.1648 0-84.4544 68.352-153.1904 152.32-153.1904 84.0192 0 152.3456 68.736 152.3456 153.1904s-68.3264 153.1648-152.3712 153.1648z m0-347.6224c-106.624 0-193.3824 87.2448-193.3824 194.4576 0 107.2384 86.784 194.432 193.3824 194.432 106.6752 0 193.4336-87.1936 193.4336-194.432 0-107.2128-86.7584-194.4576-193.4336-194.4576z m-467.0976 94.4384h53.8368v-54.144h-53.8368v54.144z m0 108.0064h53.8112v-54.144h-53.8368v54.144z m0-216.064h53.8368v-54.144h-53.8368v54.144z m-107.3152 108.0576H237.568v-54.144H183.68v54.144z m0 108.0064h53.8368v-54.144H183.6544v54.144z m214.6816-216.064h53.8368v-54.144h-53.8368v54.144zM118.528 788.8128a20.5312 20.5312 0 0 1-20.1984-20.3008V389.8368h652.032v96.2304c1.8944-0.0256 3.6096-0.256 5.5296-0.256 14.6688 0 28.3648 1.408 41.5744 3.584V217.728a67.6864 67.6864 0 0 0-67.328-67.6608h-71.6288v47.36h71.6288c10.9568 0 20.224 9.3184 20.224 20.3008v124.7488H98.304V217.728c0-10.9824 9.2672-20.3008 20.224-20.3008h85.8624v60.5952a23.6032 23.6032 0 0 0 47.1552 0V197.4272h0.128v-47.36h-0.128V100.48A23.6288 23.6288 0 0 0 227.9936 76.8a23.6544 23.6544 0 0 0-23.6032 23.68v49.5872H118.528A67.6864 67.6864 0 0 0 51.2 217.728V768.512a67.6864 67.6864 0 0 0 67.328 67.6864h447.7952a236.5696 236.5696 0 0 1-19.456-47.3856H118.4768z m439.2448-530.7904a23.6032 23.6032 0 0 0 47.1296 0V100.48a23.6288 23.6288 0 0 0-23.552-23.68 23.6544 23.6544 0 0 0-23.552 23.68v49.5616h-75.648v47.3856h75.6224v60.5952z m-176.64 0c0 13.0816 10.5216 23.6544 23.552 23.6544a23.552 23.552 0 0 0 23.552-23.6544V197.4272h0.0768V150.0416h-0.1024V100.48A23.6032 23.6032 0 0 0 404.6592 76.8a23.6288 23.6288 0 0 0-23.552 23.68v49.5616h-75.5968v47.3856h75.5712v60.5952z m17.2544 466.8928h53.8368v-54.144h-53.8368v54.144z m0-108.0064h53.8368v-54.144h-53.8368v54.144z m107.3664-108.0576h53.8624v-54.144h-53.8624v54.144z"
                fill="#183545"></path>
        </symbol>
        <symbol id="lazadaicon_im" viewBox="0 0 1024 1024">
            <path
                d="M675.84 499.712c0 4.096 0 8.192-4.096 12.288 0 4.096-4.096 8.192-8.192 12.288-4.096 4.096-8.192 4.096-12.288 8.192-4.096 0-8.192 4.096-12.288 4.096H286.72l-143.36 143.36V180.224c0-4.096 0-8.192 4.096-12.288 0-4.096 4.096-8.192 8.192-12.288 0-4.096 4.096-8.192 8.192-8.192s8.192-4.096 12.288-4.096h462.848c4.096 0 8.192 0 12.288 4.096 4.096 0 8.192 4.096 12.288 8.192 4.096 4.096 4.096 8.192 8.192 12.288 0 4.096 4.096 8.192 4.096 12.288v319.488z m167.936-192.512c4.096 0 8.192 0 12.288 4.096 4.096 0 8.192 4.096 12.288 8.192 4.096 4.096 4.096 8.192 8.192 12.288 0 4.096 4.096 8.192 4.096 12.288v536.576L737.28 737.28H344.064c-4.096 0-8.192 0-12.288-4.096-4.096 0-8.192-4.096-12.288-8.192-4.096-4.096-4.096-8.192-8.192-12.288 0-4.096-4.096-8.192-4.096-12.288v-69.632h466.944V307.2h69.632z">
            </path>
        </symbol>
        <symbol id="lazadaicon_emptyHeart" viewBox="0 0 1024 1024">
            <path
                d="M516.266667 874.666667l-328.533334-324.266667c-76.8-76.8-76.8-200.533333 0-277.333333 34.133333-42.666667 85.333333-59.733333 136.533334-59.733334s102.4 21.333333 140.8 55.466667L512 320l46.933333-46.933333c38.4-42.666667 89.6-59.733333 140.8-59.733334s102.4 21.333333 140.8 55.466667c38.4 38.4 55.466667 85.333333 55.466667 136.533333s-21.333333 102.4-55.466667 136.533334l-324.266666 332.8zM324.266667 260.266667c-42.666667 0-76.8 12.8-106.666667 42.666666-55.466667 55.466667-59.733333 153.6 0 213.333334L512 810.666667l294.4-294.4c29.866667-29.866667 42.666667-64 42.666667-106.666667 0-38.4-12.8-76.8-42.666667-106.666667-55.466667-55.466667-153.6-55.466667-213.333333 0L512 384l-81.066667-81.066667c-25.6-29.866667-64-42.666667-106.666666-42.666666z"
                fill="#808080"></path>
        </symbol>
        <symbol id="lazadaicon_fullHeart" viewBox="0 0 1024 1024">
            <path
                d="M704 128c-72.533333 0-145.066667 34.133333-192 89.6-46.933333-55.466667-119.466667-89.6-192-89.6-132.266667 0-234.666667 102.4-234.666667 234.666667 0 162.133333 145.066667 294.4 362.666667 490.666666l64 55.466667 64-55.466667c217.6-200.533333 362.666667-332.8 362.666667-490.666666 0-132.266667-102.4-234.666667-234.666667-234.666667z"
                fill="#939598"></path>
        </symbol>
        <symbol id="lazadaicon_mute" viewBox="0 0 1024 1024">
            <path
                d="M1024 451.142621l-63.346759-63.329104-89.15862 89.176276-89.193931-89.158621-63.382069 63.311449 89.229241 89.193931-89.229241 89.193931 63.346758 63.329103 89.229242-89.193931 89.15862 89.193931L1024 629.530483l-89.193931-89.193931zM0 280.364138v463.271724h227.116138L647.062069 1019.003586V4.996414L227.186759 280.364138H0z m94.119724 94.119724h99.998897V649.533793H94.102069V374.466207zM552.96 844.729379l-264.686345-173.550345v-318.322758l264.686345-173.585655v665.458758z">
            </path>
        </symbol>
        <symbol id="lazadaicon_sound" viewBox="0 0 1024 1024">
            <path
                d="M643.990069 8.474483L226.674759 282.129655H0.865103v460.446897h225.739035l417.368276 273.655172V8.474483h0.017655zM94.419862 375.684414h99.36331V649.004138H94.419862V375.702069z m456.033104 467.367724l-263.09738-172.491035V354.198069l263.079724-172.526345v661.362759zM745.613241 383.735172h93.554759v257.218207h-93.554759zM930.445241 302.856828H1024v419.027862h-93.554759z">
            </path>
        </symbol>
        <symbol id="lazadaicon_smallScreen" viewBox="0 0 1024 1024">
            <path
                d="M105.6 105.6h208.384V0H0v309.141333h105.6zM918.4 705.216v213.184h-208.405333V1024H1024V705.216zM84.394667 676.394667h190.613333L18.752 932.650667l74.666667 74.666666 256.256-256.256v190.634667h105.6V570.794667H84.394667zM939.626667 347.605333h-190.634667L1005.226667 91.349333l-74.666667-74.666666-256.213333 256.256V82.325333h-105.6v370.88h370.88z">
            </path>
        </symbol>
        <symbol id="lazadaicon_largeScreen" viewBox="0 0 1024 1024">
            <path
                d="M105.621333 309.162667V105.621333h208.384V0.021333H0v309.141334zM710.4 105.621333h208.405333v203.541334h105.6V0.021333H710.4zM313.984 918.378667H105.621333v-213.184H0v318.784h313.984zM918.784 705.194667v213.184H710.4v105.6h313.962667V705.194667z">
            </path>
        </symbol>
        <symbol id="lazadaicon_arrowDown" viewBox="0 0 1024 1024">
            <path d="M806.4 341.333333l89.6 89.6-384 379.733334-384-379.733334L217.6 341.333333l294.4 294.4z"></path>
        </symbol>
        <symbol id="lazadaicon_arrowUp" viewBox="0 0 1024 1024">
            <path d="M806.4 768l89.6-89.6L512 298.666667l-384 379.733333L217.6 768l294.4-294.4z"></path>
        </symbol>
        <symbol id="lazadaicon_star_half" viewBox="0 0 1024 1024">
            <path
                d="M512 797.866667l260.266667 166.4c8.533333 4.266667 21.333333 4.266667 29.866666-8.533334 4.266667-4.266667 4.266667-8.533333 4.266667-17.066666l-68.266667-315.733334 234.666667-213.333333c8.533333-8.533333 8.533333-21.333333 0-29.866667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333l-307.2-25.6-119.466667-294.4c-4.266667-12.8-17.066667-17.066667-29.866666-12.8l-12.8 12.8-115.2 294.4-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z"
                fill="#EFF0F5"></path>
            <path
                d="M512 797.866667V51.2c0-4.266667-4.266667-8.533333-8.533333-8.533333s-8.533333 4.266667-8.533334 4.266666l-119.466666 298.666667-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z">
            </path>
        </symbol>
        <symbol id="lazadaicon_star_full" viewBox="0 0 1024 1024">
            <path
                d="M512 797.866667l260.266667 166.4c8.533333 4.266667 21.333333 4.266667 29.866666-8.533334 4.266667-4.266667 4.266667-8.533333 4.266667-17.066666l-68.266667-315.733334 234.666667-213.333333c8.533333-8.533333 8.533333-21.333333 0-29.866667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333l-307.2-25.6-119.466667-294.4c-4.266667-12.8-17.066667-17.066667-29.866666-12.8l-12.8 12.8-115.2 294.4-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z">
            </path>
        </symbol>
        <symbol id="lazadaicon_location" viewBox="0 0 1024 1024">
            <path
                d="M520.533333 264.533333c-42.666667 0-76.8 12.8-106.666666 42.666667s-42.666667 64-42.666667 106.666667 12.8 76.8 42.666667 106.666666 64 42.666667 106.666666 42.666667 76.8-12.8 106.666667-42.666667 42.666667-68.266667 42.666667-106.666666c0-42.666667-12.8-76.8-42.666667-106.666667s-68.266667-42.666667-106.666667-42.666667z m0 34.133334c34.133333 0 59.733333 8.533333 81.066667 34.133333 21.333333 21.333333 34.133333 51.2 34.133333 81.066667 0 34.133333-12.8 59.733333-34.133333 81.066666s-51.2 34.133333-81.066667 34.133334c-34.133333 0-59.733333-12.8-81.066666-34.133334s-34.133333-51.2-34.133334-81.066666c0-34.133333 12.8-59.733333 34.133334-81.066667s46.933333-34.133333 81.066666-34.133333z">
            </path>
            <path
                d="M729.6 187.733333c-59.733333-55.466667-128-85.333333-209.066667-85.333333-81.066667 0-153.6 29.866667-209.066666 85.333333-59.733333 55.466667-85.333333 128-85.333334 209.066667 0 55.466667 12.8 102.4 38.4 149.333333 0 0 4.266667 4.266667 4.266667 8.533334l230.4 358.4c8.533333 12.8 21.333333 12.8 29.866667 0l247.466666-362.666667c29.866667-46.933333 42.666667-98.133333 42.666667-153.6 0-81.066667-29.866667-153.6-89.6-209.066667z m-21.333333 21.333334c51.2 51.2 76.8 110.933333 76.8 183.466666 0 51.2-12.8 93.866667-34.133334 132.266667l-247.466666 362.666667h29.866666L298.666667 533.333333c0-4.266667-8.533333-8.533333-4.266667-8.533333-21.333333-38.4-34.133333-81.066667-34.133333-128 0-72.533333 25.6-132.266667 76.8-183.466667 51.2-51.2 110.933333-76.8 183.466666-76.8 72.533333 0 132.266667 21.333333 187.733334 72.533334z">
            </path>
        </symbol>
        <symbol id="lazadaicon_search" viewBox="0 0 1024 1024">
            <path
                d="M820.662857 785.554286L635.611429 600.502857c33.645714-43.154286 52.662857-95.817143 52.662857-151.405714 0-65.097143-25.6-126.537143-71.68-173.348572-46.811429-45.348571-108.251429-70.948571-173.348572-70.948571-65.828571 0-127.268571 25.6-173.348571 71.68-46.08 46.08-71.68 107.52-71.68 173.348571s25.6 126.537143 71.68 173.348572c46.08 46.08 107.52 71.68 173.348571 71.68 64.365714 0 124.342857-24.868571 170.422857-69.485714l183.588572 183.588571 23.405714-23.405714zM444.708571 664.868571c-57.051429 0-110.445714-21.942857-151.405714-62.902857-40.228571-40.228571-62.902857-93.622857-62.902857-150.674285 0-57.051429 21.942857-110.445714 62.902857-150.674286 40.96-40.96 94.354286-62.902857 151.405714-62.902857 57.051429 0 110.445714 21.942857 150.674286 62.902857S658.285714 394.24 658.285714 451.291429s-21.942857 110.445714-62.902857 150.674285c-40.228571 40.228571-93.622857 62.902857-150.674286 62.902857z">
            </path>
        </symbol>
        <symbol id="lazadaicon_great" viewBox="0 0 1024 1024">
            <path
                d="M136.533333 849.066667h140.8v-426.666667H136.533333v426.666667z m785.066667-388.266667c0-38.4-34.133333-72.533333-72.533333-72.533333h-226.133334l34.133334-162.133334V213.333333c0-12.8-4.266667-29.866667-17.066667-38.4l-38.4-38.4-230.4 234.666667c-12.8 12.8-21.333333 34.133333-21.333333 51.2v354.133333c0 38.4 34.133333 72.533333 72.533333 72.533334h320c29.866667 0 55.466667-17.066667 64-42.666667l106.666667-251.733333c4.266667-8.533333 4.266667-17.066667 4.266666-25.6v-68.266667h4.266667z">
            </path>
        </symbol>
    </svg>
    <script type="text/javascript" id="beacon-aplus" src="https://g.lazcdn.com/g/alilog/mlog/aplus_int.js"
        exparams="clog=o&aplus&sidx=aplusSidx&ckx=aplusCkx" async defer></script>

    <div class="mui-zebra-module" id="J_icms-5004710-1520248008751" data-module-id="icms-5004710-1520248008751"
        data-version="5.0.5" data-spm="icms-5004710-1520248008751">
        <script type="text/javascript">
            try {
                if (typeof window === "object") {
                    window.CROSSIMAGE_GRAYSCALE_RULE = {
                        "id-live-01.slatic.net": "id-test-11.slatic.net",
                        "id-live-02.slatic.net": "id-test-11.slatic.net",
                        "id-live-03.slatic.net": "id-test-11.slatic.net",
                        "id-live.slatic.net": "id-test-11.slatic.net",
                    };
                    window.crossimageConfig = {
                        quality: "q80",
                    };
                }
            } catch (error) {
                console.log("CROSSIMAGE CONFIG ERROR");
            }
        </script>
    </div>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "<?php echo $BRAND ?> Yayasan Perguruan Kristen Indonesia",
        "image": "https://i.imgur.com/LiQXA2A.jpeg",
        "description": "<?php echo $BRAND ?> sekolah SMA Negeri 1 Bondowosi ini sering melakukan kegiatan sosial berupa penerimaan serta penyaluran zakat fitrah setiap tahunnya, bahkan setiap pelajar yang belajar ditempat ini bisa mendapatkan fasilitas belajar dengan sarana dan prasarana pembelajaran yang modern dan maju, ditambah Gedung olahraga, ruang kelas, serta tempat ibadah yang cukup bagus untuk semua siswa dan siswinya.",
        "url": "https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>",
        "brand": {
          "@type": "Brand",
          "name": "<?php echo $BRAND ?>"
        },
        "offers": {
          "@type": "Offer",
          "url": "https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>",
          "price": "10000",
          "priceCurrency": "IDR",
          "priceValidUntil": "2025-12-31",
          "availability": "http://schema.org/InStock",
          "hasMerchantReturnPolicy": {
            "@type": "MerchantReturnPolicy",
            "refundType": "http://schema.org/FullRefund",
            "merchantReturnLink": "https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>",
            "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
            "merchantReturnDays": 60,
            "returnMethod": "https://schema.org/ReturnByMail",
            "returnFees": "https://schema.org/FreeReturn",
            "returnPolicyCountry": {
              "@type": "Country",
              "name": "ID"
            },
            "applicableCountry": {
              "@type": "Country",
              "name": "ID"
            }
          },
          "shippingDetails": {
            "@type": "OfferShippingDetails",
            "shippingRate": {
              "@type": "MonetaryAmount",
              "value": "2500",
              "currency": "IDR"
            },
            "shippingDestination": {
              "@type": "DefinedRegion",
              "addressCountry": {
                "@type": "Country",
                "name": "ID"
              }
            },
            "deliveryTime": {
              "@type": "ShippingDeliveryTime",
              "cutoffTime": "15:00",
              "handlingTime": {
                "@type": "QuantitativeValue",
                "value": "1-2",
                "unitCode": "DAY",
                "minValue": 1,
                "maxValue": 2
              },
              "transitTime": {
                "@type": "QuantitativeValue",
                "value": "2-3",
                "unitCode": "DAY",
                "minValue": 2,
                "maxValue": 3
              }
            }
          }
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.9",
          "reviewCount": "22222"
        },
        "review": {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "author": {
            "@type": "Person",
            "name": "Aji Suhardi"
          },
          "reviewBody": "Product di Bandar Toto Togel Hits Terbaik"
        }
      }
    </script>

    <script>
        window.__bl = {};
        (window._blReport = function (e, t) {
            window.__bl &&
                (__bl.api
                    ? __bl[e].apply(__bl, t)
                    : ((__bl.pipe = __bl.pipe || []), __bl.pipe.push([e].concat(t))));
        }),
            window.addEventListener("error", function (e) {
                _blReport("error", [e.error, e]);
            }),
            window.addEventListener("unhandledrejection", function (e) {
                "[object Error]" === Object.prototype.toString.call(e.reason) &&
                    _blReport("error", [e.reason]);
            });
    </script>
    <script>
        window.g_config = window.g_config || {};
        window.g_config.regionID = "ID";
        window.g_config.language = "id";
    </script>
    <script
        src="https://g.lazcdn.com/g/lzd/assets/1.2.13/??babel-polyfill/6.26.0/polyfill.min.js,react/16.8.0/react.production.min.js,react-dom/16.8.0/react-dom.production.min.js"></script>
    <script src="https://g.lazcdn.com/g/lzd/assets/0.0.5/next/0.19.21/next.min.js"></script>
    <link rel="stylesheet"
        href="https://g.lazcdn.com/g/lzdmod/??site-nav-pc/5.2.43/pc/index.css,site-menu-nav-pc/5.0.83/pc/index.css,site-menu-pc/5.0.51/pc/index.css" />
    <script>
        window.g_config = window.g_config || {};
        window.g_config.loadedCss = window.g_config.loadedCss || [];
        window.g_config.loadedCss = [
            "@ali/lzdmod-site-nav-pc/pc/index.css",
            "@ali/lzdmod-site-menu-nav-pc/pc/index.css",
            "@ali/lzdmod-site-menu-pc/pc/index.css",
        ];
    </script>
    <div class="mui-zebra-module" id="J_icms-5000458-1511711480682" data-module-id="icms-5000458-1511711480682"
        data-version="5.2.43" data-spm="icms-5000458-1511711480682">
        <script>
            (function () {
                try {
                    if (
                        window.aplusPageIdSetComplete ||
                        /AliApp/i.test(navigator.userAgent)
                    ) {
                        return;
                    }
                    var get_cookie = function (sName) {
                        var sRE = "(?:; )?" + sName + "=([^;]*);?";
                        var oRE = new RegExp(sRE);
                        if (oRE.test(document.cookie)) {
                            var str = decodeURIComponent(RegExp["$1"]) || "";
                            if (str.trim().length > 0) {
                                return str;
                            } else {
                                return "-";
                            }
                        } else {
                            return "-";
                        }
                    };
                    var getRand = function () {
                        var page_id = get_cookie("cna") || "001";
                        page_id = page_id.toLowerCase().replace(/[^a-z\d]/g, "");
                        page_id = page_id.substring(0, 16);
                        var d = new Date().getTime();
                        var randend = [page_id, d.toString(16)].join("");
                        for (var i = 1; i < 10; i++) {
                            var _r = parseInt(
                                Math.round(Math.random() * 10000000000),
                                10
                            ).toString(16);
                            randend += _r;
                        }
                        randend = randend.substr(0, 42);
                        return randend;
                    };
                    var pageid = getRand();
                    var aq = window.aplus_queue || (window.aplus_queue = []);
                    aq.push({
                        action: "aplus.appendMetaInfo",
                        arguments: ["aplus-cpvdata", { pageid: pageid }],
                    });
                    aq.push({
                        action: "aplus.appendMetaInfo",
                        arguments: ["aplus-exdata", { st_page_id: pageid }],
                    });
                    // 兼容老版本aplus
                    var gq = window.goldlog_queue || (window.goldlog_queue = []);
                    gq.push({
                        action: "goldlog.appendMetaInfo",
                        arguments: ["aplus-cpvdata", { pageid: pageid }],
                    });
                    gq.push({
                        action: "goldlog.appendMetaInfo",
                        arguments: ["aplus-exdata", { st_page_id: pageid }],
                    });
                    window.aplusPageIdSetComplete = true;
                } catch (err) {
                    console.error(err);
                }
            })();
        </script>
        <link rel="stylesheet" href="https://g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.11/index.css" />
        <script src="https://g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.11/index.js"></script>
        <script>
            window.g_config = window.g_config || {};
            window.g_config.voyagerVersion = "2";
            window.g_config.voyagerEnv = "product";
            window.g_config.channel = "pdp";
            window.g_config.showPcSearchboxHotWords = true;
        </script>
        <div id="J_LzdSiteNav" class="site-nav J_NavScroll" data-mod-name="@ali/lzdmod-site-nav-pc/pc/index"
            data-config="{}">
            <div class="lzd-header" data-spm="header" data-tag="links">
                <div id="topActionHeader" class="lzd-header-content-wrap J_NavScroll">
                    <div class="lzd-header-content">
                        <div class="lzd-links-bar" id="topActionLinks">
                            <div class="links-list header-content ID id">
                                <div class="top-links-item" id="topActionInternalFeedback" style="display: none">
                                    <a class="highlight" target="_blank"
                                        href="https://yida.alibaba-inc.com/alibaba/web/APP_NZEYXSPGPBMKO7Z1LCE5/inst/homepage/?spm=a2o42.home.header.d0.654346b5QeptXc#/"
                                        data-spm-click="gostr=/lzdpub.header.tbar;locaid=d0">
                                        INTERNAL FEEDBACK
                                    </a>
                                </div>
                                <div class="top-links-item" id="topActionFeedback">
                                    <a class="highlight" target="_blank" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>"
                                        data-spm-click="gostr=/lzdpub.header.tbar;locaid=dfeedback"><?php echo $BRAND ?></a>
                                </div>
                                <div class="top-links-item orange" id="topActionDownload"
                                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d1">
                                    <span>LINK <?php echo $BRAND ?></span>
                                    <div class="lzd-download-popup top-popup-wrap" id="lzdDownloadPopup">
                                        <div class="top-popup-content lzd-download-content">
                                            <div class="get-the-app-scope">
                                                <div class="get-the-app">
                                                    <div class="get-the-app-title">
                                                        Download Aplikasinya dan Belanja Sekarang!
                                                    </div>
                                                    <div class="get-the-app-promotion">
                                                        <div class="get-the-app-lazada-qr-wrap">
                                                            <img class="get-the-app-lazada-qr"
                                                                src="https://laz-img-cdn.alicdn.com/images/ims-web/TB1b43RtrvpK1RjSZFqXXcXUVXa.png"
                                                                alt="" />
                                                        </div>

                                                        <div class="promotion-text">
                                                            <a
                                                                href="https://pages.lazada.co.id/wow/i/id/IDCampaign/Download-App?hybrid=1">
                                                                <div class="get-the-app-download-text">
                                                                    <p>
                                                                        Daftar situs <?php echo $BRAND ?> pasti bayar:
                                                                    </p>
                                                                    <ul>
                                                                        <li>Banyak Bonusnya</li>
                                                                        <li>Produk Eksklusif di App</li>
                                                                        <li>
                                                                            Rekomendasi Situs Toto Togel Terbaik
                                                                        </li>
                                                                        <li><?php echo $BRAND ?> Bandar Situs toto</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <form class="get-the-app-form" id="topActionDownloadForm">
                                                        <div class="top-input-wrap get-the-app-input-wrap">
                                                            <input class="tel-text top-input"
                                                                id="topActionDownloadInput" placeholder="eg. 0123456789"
                                                                autocomplete="off" />
                                                            <button class="top-button button-submit" id="txt-submit">
                                                                <i class="icon icon-arrow-on-button"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="success-message" id="topActionDownloadSuccessMsg">
                                                        <span class="alert alert-success">Success! Please check your
                                                            phone for the
                                                            download link
                                                        </span>
                                                    </div>
                                                    <div class="error-message" id="topActionDownloadErrorMsg"></div>
                                                    <div class="app-stores">
                                                        <a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>" class="store-link">
                                                            <i class="app-apple"></i>
                                                        </a>
                                                        <a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>" class="store-link">
                                                            <i class="app-google"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-links-item" id="topActionSell">
                                    <a class="cyan" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>"
                                        data-spm-click="gostr=/lzdpub.header.tbar;locaid=d2">SITUS <?php echo $BRAND ?></a>
                                </div>
                                <div class="top-links-item" id="topActionCustomCare"
                                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d3">
                                    <span>TOTO TOGEL</span>
                                    <div class="lzd-customcare-popup top-popup-wrap">
                                        <div class="top-popup-content l-customcare-content">
                                            <ul class="care-list">
                                                <li class="care-item">
                                                    <a href="https://www.lazada.co.id/helpcenter/"
                                                        class="care-item-anchor">
                                                        <span class="care-icon help-center"> </span>
                                                        Pusat Bantuan
                                                    </a>
                                                </li>
                                                <li class="care-item">
                                                    <a href="https://www.lazada.co.id/helpcenter/payments/"
                                                        class="care-item-anchor">
                                                        <span class="care-icon order-payment"> </span>
                                                        Order &amp; Pembayaran
                                                    </a>
                                                    <a href="https://www.lazada.co.id/helpcenter/orders-payment/#answer-faq-howtocancel-ans"
                                                        class="care-item-anchor care-item-anchor-next">
                                                        Pembatalan Pesanan
                                                    </a>
                                                </li>
                                                <li class="care-item">
                                                    <a href="https://www.lazada.co.id/helpcenter/#answer-faq-delivery-ans"
                                                        class="care-item-anchor">
                                                        <span class="care-icon shipping-delivery"> </span>
                                                        Pengiriman
                                                    </a>
                                                </li>
                                                <li class="care-item">
                                                    <a href="https://www.lazada.co.id/helpcenter/returns/"
                                                        class="care-item-anchor">
                                                        <span class="care-icon returns-refunds"> </span>
                                                        Pengembalian Barang &amp; Dana
                                                    </a>
                                                </li>
                                                <li class="care-item">
                                                    <div class="care-item-anchor">
                                                        <span class="care-icon chat"></span>
                                                        <span class="care-title">Hubungi kami di</span>
                                                        <span class="--js-csc-trigger">
                                                            <a href="javascript:;"> Live Chat (24 Jam) </a>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-links-item grey" id="topActionTrack"
                                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d4">
                                    <span>BANDAR SITUS TOTO</span>
                                    <div class="lzd-track-popup top-popup-wrap" id="lzdTrackPop">
                                        <div class="top-popup-content lzd-track-content">
                                            <div id="topActionMyLastOrder"></div>
                                            <div class="track-title">LACAK PESANAN</div>
                                            <form class="track-order-form" id="topActionTrackForm">
                                                <label for="topActionTrackOrderNumber" class="top-input-label">Nomor
                                                    pesanan:</label>
                                                <div class="top-input-wrap track-order-input-wrap">
                                                    <input placeholder="eg.123456789" id="topActionTrackOrderNumber"
                                                        class="order-text top-input" />
                                                    <button type="button" class="top-button button-submit">
                                                        <i class="icon icon-arrow-on-button"></i>
                                                    </button>
                                                </div>
                                                <p class="track-order-more-text">
                                                    Untuk bantuan silakan,<a
                                                        href="https://www.lazada.co.id/helpcenter/shipping-delivery/#answer-faq-trackorder-ans"
                                                        title="Untuk bantuan silakan,">Klik disini</a>
                                                </p>
                                            </form>
                                            <div class="error-message" id="topActionTrackErrorMsg"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="top-links-item grey" id="anonLogin">
                                    <a class="grey" href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>"
                                        data-spm-click="gostr=/lzdpub.header.tbar;locaid=d5">LOGIN</a>
                                </div>
                                <div class="top-links-item grey" id="anonSignup">
                                    <a class="grey" href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>"
                                        data-spm-click="gostr=/lzdpub.header.tbar;locaid=d6">DAFTAR</a>
                                </div>
                                <div class="top-links-item top-links-item-hidden" id="topActionUserAccont"
                                    data-spm-click="gostr=/lzdpub.header.tbar;locaid=d7">
                                    <span id="myAccountTrigger" class="grey"></span>
                                    <div class="lzd-account-popup top-popup-wrap" id="lzdMyAccountPop">
                                        <div class="top-popup-content lzd-account-content">
                                            <ul class="account-list">
                                                <li class="account-item">
                                                    <a href="https://member.lazada.co.id/user/account#/"
                                                        class="account-item-anchor">
                                                        <span class="account-icon test manage-account"></span>Panel Akun
                                                    </a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="https://my.lazada.co.id/customer/order/index/"
                                                        class="account-item-anchor">
                                                        <span class="account-icon test my-orders"></span>Pesanan Saya
                                                    </a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="https://my.lazada.co.id/wishlist/index"
                                                        class="account-item-anchor">
                                                        <span class="account-icon test wishlist"></span>Wishlist dan
                                                        Toko yang Saya Ikuti
                                                    </a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="https://my.lazada.co.id/customer/myReview/my-reviews"
                                                        class="account-item-anchor">
                                                        <span class="account-icon test my-reviews"></span>Ulasan Saya
                                                    </a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="https://my.lazada.co.id/customer/returns/index?requestType=return"
                                                        class="account-item-anchor">
                                                        <span class="account-icon test returns"></span>Pengembalian
                                                        &amp; Pembatalan
                                                    </a>
                                                </li>
                                                <li class="account-item">
                                                    <a href="https://member.lazada.co.id/user/logout"
                                                        class="account-item-anchor" id="account-popup-logout">
                                                        <span class="account-icon test logout"></span>Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lzd-logo-bar">
                            <div class="logo-bar-content header-content">
                                <div class="lzd-logo-content">
                                    <a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>" data-spm="dhome"><img
                                            src="https://i.ibb.co/xgYwg8m/slot-gacor-12-30-2023.webp"
                                            alt="logo <?php echo $BRAND ?>" /></a>
                                </div>
                                <div class="lzd-nav-search" data-spm="search">
                                    <marquee behavior="" direction="">
                                          <?php echo $BRAND ?> sekolah SMA Negeri 1 Bondowosi ini sering melakukan kegiatan sosial berupa penerimaan serta penyaluran zakat fitrah setiap tahunnya, bahkan setiap pelajar yang belajar ditempat ini bisa mendapatkan fasilitas belajar dengan sarana dan prasarana pembelajaran yang modern dan maju, ditambah Gedung olahraga, ruang kelas, serta tempat ibadah yang cukup bagus untuk semua siswa dan siswinya.
                                    </marquee>
                                    <div id="button" data-spm-click="gostr=/lzdpub.header.search;locaid=d_go"></div>
                                </div>
                                <div class="lzd-nav-menu-redmart" style="display: none">
                                    <div class="mui-zebra-module" id="J_icms-5000527-1511531232618"
                                        data-module-id="icms-5000527-1511531232618" data-version="5.0.83"
                                        data-spm="icms-5000527-1511531232618">
                                        <div class="lzd-site-nav-menu lzd-site-nav-menu-active"
                                            data-mod-name="@ali/lzdmod-site-menu-nav-pc/pc/index" data-config="{}">
                                            <div class="lzd-site-menu-nav-container">
                                                <div class="lzd-site-menu-nav-category">
                                                    <a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>">
                                                        <span class="lzd-site-menu-nav-category-text">Kategori</span>
                                                    </a>
                                                    <div class="lzd-site-menu-nav-menu">
                                                        <div class="mui-zebra-module" id="J_icms-5000518-1511530513406"
                                                            data-module-id="icms-5000518-1511530513406"
                                                            data-version="5.0.51" data-spm="icms-5000518-1511530513406">
                                                            <div class="lzd-site-nav-menu-dropdown"
                                                                data-mod-name="@ali/lzdmod-site-menu-pc/pc/index"
                                                                data-config="{}">
                                                                <ul class="lzd-site-menu-root" data-spm="cate">
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No1">
                                                                        <a>
                                                                            <span>Peralatan Elektronik</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No2">
                                                                        <a>
                                                                            <span>Aksesoris Elektronik</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No3">
                                                                        <a>
                                                                            <span>Fashion &amp; Aksesoris Wanita</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No4">
                                                                        <a>
                                                                            <span>Fashion &amp; Aksesoris Pria</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No5">
                                                                        <a>
                                                                            <span>Fashion &amp; Aksesoris Anak</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No6">
                                                                        <a>
                                                                            <span>Kesehatan &amp; Kecantikan</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No7">
                                                                        <a>
                                                                            <span>Bayi &amp; Mainan</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No8">
                                                                        <a>
                                                                            <span>TV &amp; Elektronik Rumah</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No9">
                                                                        <a>
                                                                            <span>Keperluan Rumah &amp; Gaya
                                                                                Hidup</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No10">
                                                                        <a>
                                                                            <span>Kebutuhan Rumah Tangga</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No11">
                                                                        <a>
                                                                            <span>Olahraga &amp; Outdoor</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="lzd-site-menu-root-item"
                                                                        id="Level_1_Category_No12">
                                                                        <a>
                                                                            <span>Otomotif</span>
                                                                        </a>
                                                                    </li>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No1"
                                                                        data-spm="cate_1">
                                                                        <li class="sub-item-remove-arrow"
                                                                            data-cate="cate_1_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-handphone">
                                                                                <span>Handphone</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_1_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-beli-laptop/">
                                                                                <span>Laptop</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_0_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Laptop Consumer","childCategoryUrl":"https://www.lazada.co.id/jual-laptop-umum/"},{"childCategoryName":"Laptop Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-gaming/"},{"childCategoryName":"Laptop 2-in-1s","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-2-in-1/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_1_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-komputer/">
                                                                                <span>Desktop</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_0_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"PC Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-pc-gaming/"},{"childCategoryName":"Komputer Rakitan","childCategoryUrl":"https://www.lazada.co.id/beli-komputer-rakitan/"},{"childCategoryName":"All-In-One","childCategoryUrl":"https://www.lazada.co.id/beli-pc-all-in-one/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_1_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-kamera/">
                                                                                <span>Kamera</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_0_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"DSLR","childCategoryUrl":"https://www.lazada.co.id/beli-slr/"},{"childCategoryName":"Kamera Mirrorless","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-mirrorless/"},{"childCategoryName":"Kamera Pocket","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-pocket/"},{"childCategoryName":"Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-video-aksi/"},{"childCategoryName":"360 Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-360/"},{"childCategoryName":"Kamera CCTV","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-cctv/"},{"childCategoryName":"IP Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-ip/"},{"childCategoryName":"Video Camera","childCategoryUrl":"https://www.lazada.co.id/beli-camcorders/"},{"childCategoryName":"Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-instan/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_1_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-gaming-konsol/">
                                                                                <span>Game Console</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_0_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Gaming Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-permainan-konsol/"},{"childCategoryName":"Permainan Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-game-konsol/"},{"childCategoryName":"Pengontrol Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-pengontrol-game-konsol/"},{"childCategoryName":"Konsol Pelindung Penutup","childCategoryUrl":"https://www.lazada.co.id/shop-konsolpelindung-penutup/"},{"childCategoryName":"Aksesoris Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-game-konsol/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_1_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-gadget/">
                                                                                <span>Gadget</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_0_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Rokok Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-rokok-elektrik/"},{"childCategoryName":"Drone","childCategoryUrl":"https://www.lazada.co.id/jual-kamera-drone/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/beli-media-player/"},{"childCategoryName":"Walkie-Talkie","childCategoryUrl":"https://www.lazada.co.id/jual-walkie-talkie/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="sub-item-remove-arrow"
                                                                            data-cate="cate_1_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-tablet-2">
                                                                                <span>Tablet</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No2"
                                                                        data-spm="cate_2">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-aksesori-handphone">
                                                                                <span>Aksesoris Handphone</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Powerbank","childCategoryUrl":"https://www.lazada.co.id/beli-power-bank/"},{"childCategoryName":"Kabel Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-kabel-handphone/"},{"childCategoryName":"Charger Handphone","childCategoryUrl":"https://www.lazada.co.id/jual-charger-kabel/"},{"childCategoryName":"Casing Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-handphone/"},{"childCategoryName":"Pelindung Layar","childCategoryUrl":"https://www.lazada.co.id/jual-pelindung-layar/"},{"childCategoryName":"Tongsis","childCategoryUrl":"https://www.lazada.co.id/jual-tongsis/"},{"childCategoryName":"Phone Holder","childCategoryUrl":"https://www.lazada.co.id/jual-dudukan-mobil/"},{"childCategoryName":"Baterai Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-baterai-handphone/"},{"childCategoryName":"Peralatan & Suku Cadang","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-handphone/"},{"childCategoryName":"Aksesoris Handphone Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-ponsel/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-aksesori-komputer/">
                                                                                <span>Aksesoris Komputer</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mouse","childCategoryUrl":"https://www.lazada.co.id/beli-mouse/"},{"childCategoryName":"Keyboard Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard/"},{"childCategoryName":"Monitor","childCategoryUrl":"https://www.lazada.co.id/beli-monitor/"},{"childCategoryName":"Adaptor Jaringan","childCategoryUrl":"https://www.lazada.co.id/adaptor-jaringan/"},{"childCategoryName":"Audio PC","childCategoryUrl":"https://www.lazada.co.id/beli-audio-pc/"},{"childCategoryName":"Adaptor & Kabel","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-kabel/"},{"childCategoryName":"Adaptor Baterai Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-adaptor-baterai-komputer/"},{"childCategoryName":"Mousepad","childCategoryUrl":"https://www.lazada.co.id/beli-mousepad/"},{"childCategoryName":"Cooling Pads","childCategoryUrl":"https://www.lazada.co.id/beli-alas-pendingin/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-audio/">
                                                                                <span>Audio</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Headphone & Headset","childCategoryUrl":"https://www.lazada.co.id/beli-headphone-dan-headset/"},{"childCategoryName":"Speaker Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"},{"childCategoryName":"Speaker Smart","childCategoryUrl":"https://www.lazada.co.id/beli-speaker-smart/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-perangkat-pintar/">
                                                                                <span>Aksesoris Berteknologi</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-smartwatch/"},{"childCategoryName":"Aksesoris Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-tali-smartwatch/"},{"childCategoryName":"Activity Tracker","childCategoryUrl":"https://www.lazada.co.id/beli-tracker-fitness-aktivitas/"},{"childCategoryName":"Aksesoris Fitness Tracker","childCategoryUrl":"https://www.lazada.co.id/jual-strap-tracker-aktivitas/"},{"childCategoryName":"Virtual Reality","childCategoryUrl":"https://www.lazada.co.id/jual-virtual-reality/"},{"childCategoryName":"Kendali Gerakan","childCategoryUrl":"https://www.lazada.co.id/jual-kendali-gerakan/"},{"childCategoryName":"Kacamata Pintar","childCategoryUrl":"https://www.lazada.co.id/beli-smart-glasses/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-aksesoris-2/">
                                                                                <span>Aksesoris Kamera</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tripod & Monopod","childCategoryUrl":"https://www.lazada.co.id/beli-tripod-monopod/"},{"childCategoryName":"Kartu Memori","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-memori/"},{"childCategoryName":"Lensa Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-lensa-kamera/"},{"childCategoryName":"Flash","childCategoryUrl":"https://www.lazada.co.id/beli-flash/"},{"childCategoryName":"Sarung, Pelindung & Tas Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-tas-kamera/"},{"childCategoryName":"Charger Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-charger-baterai/"},{"childCategoryName":"Baterai Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-baterai/"},{"childCategoryName":"Aksesoris Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-kamera-aksi/"},{"childCategoryName":"Aksesoris Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/jual-film-kamera-instan/"},{"childCategoryName":"Perlengkapan Lighting & Studio","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-lighting-studio/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-penyimpanan-data/">
                                                                                <span>Penyimpanan Data</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Flash Drive","childCategoryUrl":"https://www.lazada.co.id/jual-flash-drives/"},{"childCategoryName":"OTG Drive","childCategoryUrl":"https://www.lazada.co.id/jual-otg-drives/"},{"childCategoryName":"Harddisk Eksternal","childCategoryUrl":"https://www.lazada.co.id/beli-harddisk-eksternal/"},{"childCategoryName":"Hard Drive Internal","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-internal/"},{"childCategoryName":"Internal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-solid-state-drive/"},{"childCategoryName":"Eksternal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-external-solid-state-drive/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-printers/">
                                                                                <span>Printer</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Printer","childCategoryUrl":"https://www.lazada.co.id/beli-printers/"},{"childCategoryName":"Tinta Printer","childCategoryUrl":"https://www.lazada.co.id/tinta-printer/"},{"childCategoryName":"Printer 3D","childCategoryUrl":"https://www.lazada.co.id/pencetak-3d/"},{"childCategoryName":"Printer POS & Thermal","childCategoryUrl":"https://www.lazada.co.id/beli-printer-stand/"},{"childCategoryName":"Mesin Faks","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-fax/"},{"childCategoryName":"Mesin Cutting Sticker","childCategoryUrl":"https://www.lazada.co.id/printer-pemotong/"},{"childCategoryName":"Memori Printer","childCategoryUrl":"https://www.lazada.co.id/modul-memori-printer/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-aksesori-handphone/">
                                                                                <span>Aksesoris Tablet</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Casing Tablet","childCategoryUrl":"https://www.lazada.co.id/jual-casing-cover-tablet/"},{"childCategoryName":"Keyboard Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard-tablet/"},{"childCategoryName":"Pen Stylus Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-pen-stylus-tablet/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_2_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-komponen-komputer/">
                                                                                <span>Komponen Komputer</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_1_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"RAM","childCategoryUrl":"https://www.lazada.co.id/beli-ram/"},{"childCategoryName":"Motherboard","childCategoryUrl":"https://www.lazada.co.id/beli-motherboard/"},{"childCategoryName":"Prosesor","childCategoryUrl":"https://www.lazada.co.id/beli-prosesor/"},{"childCategoryName":"Kartu Grafis","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-grafis/"},{"childCategoryName":"Casing Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-casing-cpu/"},{"childCategoryName":"Power Supply Unit","childCategoryUrl":"https://www.lazada.co.id/beli-power-supply-unit/"},{"childCategoryName":"Soundcard","childCategoryUrl":"https://www.lazada.co.id/soundcard/"},{"childCategoryName":"Front Panel","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-optikal/"},{"childCategoryName":"Water Cooling System","childCategoryUrl":"https://www.lazada.co.id/beli-water-cooling-system/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No3"
                                                                        data-spm="cate_3">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/pakaian-wanita/">
                                                                                <span>Pakaian Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_0">
                                          [{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-wanita/"},{"childCategoryName":"Dress","childCategoryUrl":"https://www.lazada.co.id/gaun-wanita/"},{"childCategoryName":"Atasan","childCategoryUrl":"https://www.lazada.co.id/kaos-atasan-wanita/"},{"childCategoryName":"Sweater & Cardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-wanita/"},{"childCategoryName":"Celana & Legging","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-wanita/"},{"childCategoryName":"Rok","childCategoryUrl":"https://www.lazada.co.id/rok-wanita/"},{"childCategoryName":"Jaket & Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-wanita/"},{"childCategoryName":"Kaus Kaki & Celana Ketat","childCategoryUrl":"https://www.lazada.co.id/kaos-kaki-celana-tights-wanita/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-wanita/"},{"childCategoryName":"Jumpsuit & Playsuit","childCategoryUrl":"https://www.lazada.co.id/overalls-jumpsuit-wanita/"},{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/hoodie-sweatshirt-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/baju-muslim-wanita/">
                                                                                <span>Baju Muslim</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_1">
                                          [{"childCategoryName":"Perlengkapan Shalat","childCategoryUrl":"https://www.lazada.co.id/baju-muslim-wanita/"},{"childCategoryName":"Hijab","childCategoryUrl":"https://www.lazada.co.id/hijab/"},{"childCategoryName":"Atasan Muslimah","childCategoryUrl":"https://www.lazada.co.id/atasan-muslimah-wanita/"},{"childCategoryName":"Baju Muslim & Jumpsuit","childCategoryUrl":"https://www.lazada.co.id/dress-muslimah/"},{"childCategoryName":"Bawahan Muslim","childCategoryUrl":"https://www.lazada.co.id/bawahan-muslimah/"},{"childCategoryName":"Luaran Muslim","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-kardigan-wanita-muslim/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-wanita/"},{"childCategoryName":"Baju Renang Muslim","childCategoryUrl":"https://www.lazada.co.id/jual-baju-renang-muslim-wanita/"},{"childCategoryName":"Baju Kurung","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kurung-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/lingerie-baju-tidur/">
                                                                                <span>Lingerie, Baju Tidur &amp;
                                                                                    Santai</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_2">
                                          [{"childCategoryName":"Bra","childCategoryUrl":"https://www.lazada.co.id/bra-wanita/"},{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-wanita/"},{"childCategoryName":"Shapewear","childCategoryUrl":"https://www.lazada.co.id/shapewear-baju-pembentuk-tubuh-wanita/"},{"childCategoryName":"Baju Tidur & Santai","childCategoryUrl":"https://www.lazada.co.id/bathrobe-baju-mandi-wanita/"},{"childCategoryName":"Jubah Tidur","childCategoryUrl":"https://www.lazada.co.id/jual-jubah-tidur-wanita/"},{"childCategoryName":"Set Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-set-lingerie/"},{"childCategoryName":"Kamisol & Slips","childCategoryUrl":"https://www.lazada.co.id/jual-kamisol-slips-wanita/"},{"childCategoryName":"Bodysuit","childCategoryUrl":"https://www.lazada.co.id/jual-bodysuit-wanita/"},{"childCategoryName":"Aksesori Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-lingerie-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/sepatu-wanita/">
                                                                                <span>Sepatu Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_3">
                                          [{"childCategoryName":"Sepatu Flat","childCategoryUrl":"https://www.lazada.co.id/flat-shoes/"},{"childCategoryName":"Sepatu Hak Tinggi","childCategoryUrl":"https://www.lazada.co.id/heels/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers/"},{"childCategoryName":"Wedges","childCategoryUrl":"https://www.lazada.co.id/wedges/"},{"childCategoryName":"Sepatu Boot","childCategoryUrl":"https://www.lazada.co.id/boots-wanita/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-wanita/"},{"childCategoryName":"Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-wanita/"},{"childCategoryName":"Sandal & Flip Flop","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/aksesoris-wanita/">
                                                                                <span>Aksesoris</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_4">
                                          [{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-wanita/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-wanita/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-wanita/"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-rambut/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/scarf-wanita/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-wanita/"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-women-fabricmask/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/tas-wanita/">
                                                                                <span>Tas Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_5">
                                          [{"childCategoryName":"Tas Ransel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-punggung-wanita/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-tas-wanita/"},{"childCategoryName":"Tas Pinggang Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-pinggang-wanita/"},{"childCategoryName":"Dompet Kartu Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-wanita/"},{"childCategoryName":"Clutches","childCategoryUrl":"https://www.lazada.co.id/tas-genggam-wanita/"},{"childCategoryName":"Dompet Koin & Pouch Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-wanita/"},{"childCategoryName":"Tas Selempang & Bahu Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-selempang-badan-wanita/"},{"childCategoryName":"Tas Luxury Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-mewah-wanita/"},{"childCategoryName":"Top-handle Bag","childCategoryUrl":"https://www.lazada.co.id/top-handle-bag/"},{"childCategoryName":"Tote Bag Wanita","childCategoryUrl":"https://www.lazada.co.id/tote-bag-wanita/"},{"childCategoryName":"Dompet Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perhiasan-wanita/">
                                                                                <span>Perhiasan Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_6">
                                          [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-logam-berharga/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_3_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-jam-tangan-wanita/">
                                                                                <span>Jam Tangan Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_2_7">
                                          [{"childCategoryName":"Aksesori","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Kasual Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-wanita/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-wanita/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-wanita/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-pre-owned-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-wanita/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No4"
                                                                        data-spm="cate_4">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/pakaian-pria/">
                                                                                <span>Pakaian Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_0">
                                          [{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-pria/"},{"childCategoryName":"Jaket dan Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-pria/"},{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-pria/"},{"childCategoryName":"Celana","childCategoryUrl":"https://www.lazada.co.id/celana-pendek-dan-panjang-pria/"},{"childCategoryName":"Polo Shirt","childCategoryUrl":"https://www.lazada.co.id/polo-shirt-pria/"},{"childCategoryName":"Kemeja","childCategoryUrl":"https://www.lazada.co.id/kemeja-pria/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-pria/"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/jual-kaus-kaki-pria/"},{"childCategoryName":"Jas & Blazer","childCategoryUrl":"https://www.lazada.co.id/jas-pria/"},{"childCategoryName":"Sweater dan Kardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-pria/"},{"childCategoryName":"Baju Renang","childCategoryUrl":"https://www.lazada.co.id/baju-renang-pria/"},{"childCategoryName":"T-Shirt & Kaos Dalam","childCategoryUrl":"https://www.lazada.co.id/atasan-kasual-kaos-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/baju-muslim-pria/">
                                                                                <span>Baju Muslim</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_1">
                                          [{"childCategoryName":"Jubah Muslim","childCategoryUrl":"https://www.lazada.co.id/jubah-muslim-pria/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-pria/"},{"childCategoryName":"Baju Muslimin","childCategoryUrl":"https://www.lazada.co.id/cekak-musang-pria/"},{"childCategoryName":"Kopiah","childCategoryUrl":"https://www.lazada.co.id/shop-kopiah/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/pakaian-dalam-dan-kaos-kaki-pria/">
                                                                                <span>Pakaian Dalam</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_2">
                                          [{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-pria/"},{"childCategoryName":"Pakaian Tidur","childCategoryUrl":"https://www.lazada.co.id/baju-tidur-pria/"},{"childCategoryName":"Boxer","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-boxer-pria/"},{"childCategoryName":"Thongs  & Lainnya","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-pria-thongs-lainnya/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/sepatu-pria/">
                                                                                <span>Sepatu Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_3">
                                          [{"childCategoryName":"Boots","childCategoryUrl":"https://www.lazada.co.id/boots-pria/"},{"childCategoryName":"Flip Flop & Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-pria/"},{"childCategoryName":"Sepatu Formal","childCategoryUrl":"https://www.lazada.co.id/sepatu-pantofel/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-pria/"},{"childCategoryName":"Slip-On & Loafer","childCategoryUrl":"https://www.lazada.co.id/jual-slip-on-loafer-pria/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/aksesoris-pria/">
                                                                                <span>Aksesoris</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_4">
                                          [{"childCategoryName":"Dasi","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi/"},{"childCategoryName":"Aksesoris Dasi Kupu-kupu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi-kupu-kupu/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/syal-pria/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-pria/"},{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-pria/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-pria/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-pria/"},{"childCategoryName":"Braces","childCategoryUrl":"https://www.lazada.co.id/suspender-pria/"},{"childCategoryName":"Face Mask","childCategoryUrl":"https://www.lazada.co.id/shop-masker-wajah-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/tas-pria/">
                                                                                <span>Tas Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_5">
                                          [{"childCategoryName":"Tas Ransel Pria","childCategoryUrl":"https://www.lazada.co.id/shop-ransel-pria/"},{"childCategoryName":"Tas Laptop Jinjing","childCategoryUrl":"https://www.lazada.co.id/tas-kerja-pria/"},{"childCategoryName":"Dompet Kartu Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-pria/"},{"childCategoryName":"Dompet Koin & Pouch Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-pria/"},{"childCategoryName":"Tas Selempang Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-selempang-pria/"},{"childCategoryName":"Tas Laptop Bahu & Messenger","childCategoryUrl":"https://www.lazada.co.id/tas-messenger-pria/"},{"childCategoryName":"Tote Bag Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-tote-pria/"},{"childCategoryName":"Tas Pinggang","childCategoryUrl":"https://www.lazada.co.id/beli-tas-pinggang/"},{"childCategoryName":"Dompet Pria","childCategoryUrl":"https://www.lazada.co.id/shop-dompet-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perhiasan-pria/">
                                                                                <span>Perhiasan Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_6">
                                          [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-pria-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-pria-logam-berharga/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_4_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-jam-tangan-pria/">
                                                                                <span>Jam Tangan Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_3_7">
                                          [{"childCategoryName":"Aksesoris Jam Tangan Pria","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-jam-tangan-pria/"},{"childCategoryName":"Jam Tangan Kasual Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-pria/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-pria/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-pria/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-pre-owned-pria/"},{"childCategoryName":"Jam Tangan Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-pria/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No5"
                                                                        data-spm="cate_5">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/fashion-pakaian-anak-laki-laki">
                                                                                <span>Pakaian Anak Laki-laki</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_0">
                                          [{"childCategoryName":"Topi Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/topi-anak-laki-laki"},{"childCategoryName":"Hoodie Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki"},{"childCategoryName":"Jaket & Mantel Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-laki-laki"},{"childCategoryName":"Celana Pendek Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/beli-celana-pendek-pria"},{"childCategoryName":"Pakaian Tidur Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-laki-laki"},{"childCategoryName":"Sweater & Cardigan Anak","childCategoryUrl":"https://www.lazada.co.id/sweater-cardigan-anak-laki-laki"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-pakaian-hujan-anak-laki-laki"},{"childCategoryName":"Pakaian dalam","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-dalam"},{"childCategoryName":"Celana & Jeans Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-laki-laki"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/shop-kaus-kaki"},{"childCategoryName":"Baju & Atasan Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-laki-laki"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/pakaian-anak-perempuan">
                                                                                <span>Pakaian Anak Perempuan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_1">
                                          [{"childCategoryName":"Bawahan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-perempuan"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-dress-anak-perempuan"},{"childCategoryName":"Scarf Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/scarf-sarung-tangan-anak-perempuan"},{"childCategoryName":"Aksesori Rambut Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-rambut-anak-perempuan"},{"childCategoryName":"Topi Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/topi-anak-perempuan"},{"childCategoryName":"Hoodie Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki-2"},{"childCategoryName":"Jaket & Mantel Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-perempuan"},{"childCategoryName":"Baju & Atasan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-perempuan"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-jas-hujan-anak-perempuan"},{"childCategoryName":"Pakaian Dalam Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-perempuan"},{"childCategoryName":"Jumpsuits & Overalls","childCategoryUrl":"https://www.lazada.co.id/shop-girls-jumpsuits-overalls"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-boy's-muslim-wear">
                                                                                <span>Pakaian Anak Muslim
                                                                                    Laki-Laki</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_2">
                                          [{"childCategoryName":"Kemeja Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-shirt"},{"childCategoryName":"Celana Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-pants"},{"childCategoryName":"Aksesoris Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-accessories"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-girls-muslim-wear">
                                                                                <span>Pakaian Anak Muslim
                                                                                    Perempuan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_3">
                                          [{"childCategoryName":"Hijab Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-hijabs/"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-dresses-jumpsuits/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/fashion-sepatu-anak-laki-laki">
                                                                                <span>Sepatu Anak Laki-laki</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_4">
                                          [{"childCategoryName":"Sepatu Boot Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-laki-laki"},{"childCategoryName":"Sandal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-laki-laki"},{"childCategoryName":"Sepatu Formal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-laki-laki"},{"childCategoryName":"Aksesoris Sepatu Anak Laki","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-laki-laki"},{"childCategoryName":"Slip-n Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-slip-on-anak-laki-laki"},{"childCategoryName":"Sepatu Sneaker Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneaker-anak-laki-laki"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/fashion-sepatu-anak-perempuan">
                                                                                <span>Sepatu Anak Perempuan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_5">
                                          [{"childCategoryName":"Sepatu Flat Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-balerina-anak-perempuan"},{"childCategoryName":"Sepatu Boot Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-perempuan"},{"childCategoryName":"Sandal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-perempuan"},{"childCategoryName":"Sepatu Formal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-perempuan"},{"childCategoryName":"Aksesoris Sepatu Anak","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-perempuan"},{"childCategoryName":"Sepatu Sneaker Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneakers-anak-perempuan"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-tas-anak-tl/">
                                                                                <span>Tas Anak</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_6">
                                          [{"childCategoryName":"Tas Bahu Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-bahu-anak/"},{"childCategoryName":"Ransel Troli Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-troli-anak/"},{"childCategoryName":"Ransel Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-anak/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-anak/"},{"childCategoryName":"Koper","childCategoryUrl":"https://www.lazada.co.id/koper-anak-2/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perhiasan-anak/">
                                                                                <span>Perhiasan Anak</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_7">
                                          [{"childCategoryName":"Emas Murni","childCategoryUrl":"https://www.lazada.co.id/beli-anak-emas-murni/"},{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-anak-perhiasan-fashion/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_5_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-jam-tangan-anak/">
                                                                                <span>Jam Tangan Anak</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_4_8">
                                          [{"childCategoryName":"Jam Tangan Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-laki-laki/"},{"childCategoryName":"Jam Tangan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-perempuan/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No6"
                                                                        data-spm="cate_6">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perawatan-kulit/">
                                                                                <span>Perawatan Kulit</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Serum Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-serum-perawatan-wajah"},{"childCategoryName":"Dermacare","childCategoryUrl":"https://www.lazada.co.id/beli-dermacare"},{"childCategoryName":"Pelembab Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-pelembab-wajah"},{"childCategoryName":"Pembersih Wajah","childCategoryUrl":"https://www.lazada.co.id/pembersih-wajah"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-masker-wajah"},{"childCategoryName":"Toner","childCategoryUrl":"https://www.lazada.co.id/beli-toner"},{"childCategoryName":"Tabir Surya","childCategoryUrl":"https://www.lazada.co.id/beli-tabir-surya-aftersun"},{"childCategoryName":"Set Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-set-perawatan-wajah"},{"childCategoryName":"Pelembab & Perawatan Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-lip-balm-perawatan-bibir"},{"childCategoryName":"Face Scrubs & Exfoliators","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-pengelupas-wajah"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-mata"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-makeup/">
                                                                                <span>Makeup</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makeup Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-make-up-bibir"},{"childCategoryName":"Lipstik","childCategoryUrl":"https://www.lazada.co.id/beli-lipstik"},{"childCategoryName":"Makeup Wajah","childCategoryUrl":"https://www.lazada.co.id/makeup-wajah"},{"childCategoryName":"Foundation","childCategoryUrl":"https://www.lazada.co.id/beli-foundation"},{"childCategoryName":"Makeup Mata","childCategoryUrl":"https://www.lazada.co.id/beli-mata"},{"childCategoryName":"Maskara","childCategoryUrl":"https://www.lazada.co.id/beli-maskara"},{"childCategoryName":"Aksesoris Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-makeup"},{"childCategoryName":"Set Kuas & Kuas Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-kuas-aplikator"},{"childCategoryName":"Perawatan Kuku","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kuku"},{"childCategoryName":"Set Makeup & Palet","childCategoryUrl":"https://www.lazada.co.id/shop-palet-set-makeup"},{"childCategoryName":"Pembersih Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-makeup"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perawatan-rambut/">
                                                                                <span>Perawatan Rambut</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Shampo","childCategoryUrl":"https://www.lazada.co.id/beli-sampo"},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/perawatan-intensif"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-perawatan-rambut"},{"childCategoryName":"Styling Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-styling-rambut"},{"childCategoryName":"Pewarna Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-cat-rambut"},{"childCategoryName":"Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-kondisioner"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-perawatan-rambut"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perlengkapan-mandi-tubuh/">
                                                                                <span>Perawatan Tubuh</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Losion Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-losion-krim-tubuh"},{"childCategoryName":"Sabun Cair","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Cair"},{"childCategoryName":"Scrub Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-tubuh"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/perawatan-payudara"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-Perawatan-Tubuh"},{"childCategoryName":"Perawatan Kaki","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kaki"},{"childCategoryName":"Sabun Batang","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Batang"},{"childCategoryName":"Aksesoris Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-perlengkapan-mandi-tubuh"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-alat-mandi-tubuh"},{"childCategoryName":"Penghilang Bulu","childCategoryUrl":"https://www.lazada.co.id/beli-perontok-rambut"},{"childCategoryName":"Sabun Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-tangan"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perawatan-kesehatan-pribadi/">
                                                                                <span>Perawatan Diri</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Mulut","childCategoryUrl":"https://www.lazada.co.id/perawatan-mulut"},{"childCategoryName":"Pembersih Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-wanita"},{"childCategoryName":"Keamanan Diri","childCategoryUrl":"https://www.lazada.co.id/beli-keamanan-diri"},{"childCategoryName":"Beli Deodoran","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-optik-pribadi"},{"childCategoryName":"Obat Anti Serangga","childCategoryUrl":"https://www.lazada.co.id/shop-Obat-Anti-Serangga"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-parfum/">
                                                                                <span>Parfum</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pria","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-pria"},{"childCategoryName":"Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-wanita"},{"childCategoryName":"Unisex","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-unisex"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-alat-kesehatan-kecantikan/">
                                                                                <span>Alat Kecantikan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Alat Pelangsing & Pijat","childCategoryUrl":"https://www.lazada.co.id/alat-pelangsing-dan-pemijat-elektrik"},{"childCategoryName":"Sauna Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-sauna-portabel"},{"childCategoryName":"Foot Relief","childCategoryUrl":"https://www.lazada.co.id/beli-foot-relief"},{"childCategoryName":"Alat Cukur & Trimmer","childCategoryUrl":"https://www.lazada.co.id/aksesoris-alat-cukur-dan-trimmer"},{"childCategoryName":"Alat Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-wajah"},{"childCategoryName":"Alat Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-tubuh"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-suplemen-makanan/">
                                                                                <span>Suplemen Makanan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengatur Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-pengatur-berat-badan"},{"childCategoryName":"Pembakar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-pembakar-lemak"},{"childCategoryName":"Minuman Pelangsing","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-pelangsing"},{"childCategoryName":"Suplemen Kecantikan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-kecantikan"},{"childCategoryName":"Suplemen Pemutih","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-pemutih"},{"childCategoryName":"Multivitamin","childCategoryUrl":"https://www.lazada.co.id/multivitamin/"},{"childCategoryName":"Obat Tradisional","childCategoryUrl":"https://www.lazada.co.id/beli-obat-obatan-tradisional"},{"childCategoryName":"Sistem Imun","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-imun"},{"childCategoryName":"Nutrisi Olahraga","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-olahraga"},{"childCategoryName":"Penambah Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-penambah-berat-badan"},{"childCategoryName":"Protein","childCategoryUrl":"https://www.lazada.co.id/beli-protein"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-alat-medis/">
                                                                                <span>Alat Medis</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Aksesoris Kesehatan","childCategoryUrl":"https://www.lazada.co.id/aksesoris-kesehatan"},{"childCategoryName":"Alat Tes Kesehatan","childCategoryUrl":"https://www.lazada.co.id/beli-alat-tes-kesehatan"},{"childCategoryName":"Obat-Obatan","childCategoryUrl":"https://www.lazada.co.id/shop-over-the-counter-medicine/"},{"childCategoryName":"Perban & Perlengkapan Cedera","childCategoryUrl":"https://www.lazada.co.id/perban-alat-terapi-cedera"},{"childCategoryName":"Timbangan & Alat Kadar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-alat-ukur-kadar-lemak"},{"childCategoryName":"P3K","childCategoryUrl":"https://www.lazada.co.id/beli-p3k"},{"childCategoryName":"Kursi Roda","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-roda"},{"childCategoryName":"Salep & Krim","childCategoryUrl":"https://www.lazada.co.id/shop-salep-dan-krim"},{"childCategoryName":"Alat Inhalasi & Nebulizer","childCategoryUrl":"https://www.lazada.co.id/beli-alat-inhalasi-nebulizer"},{"childCategoryName":"Alat Tes Medis","childCategoryUrl":"https://www.lazada.co.id/tes-medis"},{"childCategoryName":"Stetoskop","childCategoryUrl":"https://www.lazada.co.id/beli-stetoskop"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_10">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-perlengkapan-kesehatan-seksual/">
                                                                                <span>Sexual Wellness</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_9">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kondom","childCategoryUrl":"https://www.lazada.co.id/beli-kondom"},{"childCategoryName":"Pelumas","childCategoryUrl":"https://www.lazada.co.id/beli-pelumas"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_11">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perawatan-tubuh-kesehatan-pria/">
                                                                                <span>Perawatan Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_10">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-rambut-pria"},{"childCategoryName":"Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria"},{"childCategoryName":"Alat Cukur Pria","childCategoryUrl":"https://www.lazada.co.id/beli-alat-cukur-pria"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/perawatan-tubuh"},{"childCategoryName":"Deodoran Pria","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran-pria"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_6_12">
                                                                            <a
                                                                                href="https://www.lazada.co.id/kesehatan-manula/">
                                                                                <span>Popok Dewasa</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_5_11">
                                          [{"childCategoryName":"Popok Dewasa","childCategoryUrl":"https://www.lazada.co.id/kesehatan-manula/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No7"
                                                                        data-spm="cate_7">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-perlengkapan-bayi-balita/">
                                                                                <span>Ibu &amp; Anak</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_0">
                                          [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-popok-pispot-bb/">
                                                                                <span>Popok Sekali Pakai</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_1">
                                          [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Popok Kain & Aksesori","childCategoryUrl":"https://www.lazada.co.id/beli-popok-kain/"},{"childCategoryName":"Lap Bayi & Penyangga","childCategoryUrl":"https://www.lazada.co.id/beli-lap-bayi-penyangga/"},{"childCategoryName":"Perawatan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-popok/"},{"childCategoryName":"Krim & Salep Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-krim-salep-bayi/"},{"childCategoryName":"Tas Perlengkapan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-tas-popok-tb/"},{"childCategoryName":"Meja Ganti Popok","childCategoryUrl":"https://www.lazada.co.id/beli-meja-ganti/"},{"childCategoryName":"Cover Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-bantalan/"},{"childCategoryName":"Lapisan Penyerap & Liner Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-lapisan-penyerap-liner-popok-kain/"},{"childCategoryName":"Potty Training","childCategoryUrl":"https://www.lazada.co.id/beli-potty-training/"},{"childCategoryName":"Bangku Langkah","childCategoryUrl":"https://www.lazada.co.id/beli-bangku-langkah/"},{"childCategoryName":"Detergent Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-detergen-popok-kain/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-susu-formula/">
                                                                                <span>Makanan Bayi &amp; Balita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_2">
                                          [{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Nutrisi Khusus Anak","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-khusus-anak/"},{"childCategoryName":"Minuman","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-bayi-balita/"},{"childCategoryName":"Sereal","childCategoryUrl":"https://www.lazada.co.id/beli-sereal-bayi-balita/"},{"childCategoryName":"Cracker & Biskuit","childCategoryUrl":"https://www.lazada.co.id/beli-cracker-biskuit-bayi-balita/"},{"childCategoryName":"Makanan Ringan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ringan-bayi-balita/"},{"childCategoryName":"Makanan puree bayi","childCategoryUrl":"https://www.lazada.co.id/beli-puree-bayi/"},{"childCategoryName":"Susu Ibu Hamil","childCategoryUrl":"https://www.lazada.co.id/beli-susu-maternal/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-baju-aksesoris-anak/">
                                                                                <span>Pakaian &amp; Aksesoris</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_3">
                                          [{"childCategoryName":"(0--6 bulan) Set Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-set-pakaian-bayi/"},{"childCategoryName":"(0--6 bulan) Body Suits","childCategoryUrl":"https://www.lazada.co.id/beli-bodysuit-one-piece-bayi/"},{"childCategoryName":"(0--6 bulan) Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-pakaian-anak/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Dress Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-dress-bayi-perempuan/"},{"childCategoryName":"Sepatu Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-perempuan/"},{"childCategoryName":"Aksesoris Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-bayi-perempuan/"},{"childCategoryName":"Baju Renang Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Sepatu Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-laki-laki/"},{"childCategoryName":"Aksesoris Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-aksesori-bayi-laki-laki/"},{"childCategoryName":"Baju Renang Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-laki-laki/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-makanan-bayi/">
                                                                                <span>Perlengkapan Menyusui</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_4">
                                          [{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Botol","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi-balita/"},{"childCategoryName":"Aksesoris Dot Botol","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-botol-dot-bayi/"},{"childCategoryName":"Penghangat & Sterilizers","childCategoryUrl":"https://www.lazada.co.id/beli-penghangat-sterilizer/"},{"childCategoryName":"Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-pompa-asi/"},{"childCategoryName":"Aksesesoris Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-pompa-asi/"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-puting/"},{"childCategoryName":"Bantal Menyusui","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-kursi-bayi/"},{"childCategoryName":"Kursi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-tinggi-bayi-kursi-booster/"},{"childCategoryName":"Food Blenders","childCategoryUrl":"https://www.lazada.co.id/beli-blender-makanan-bayi/"},{"childCategoryName":"Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-makan-bayi-bb/"},{"childCategoryName":"Set Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-piring-mangkok-bayi/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perlengkapan-berkendara-bayi/">
                                                                                <span>Perlengkapan Bayi</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_5">
                                          [{"childCategoryName":"Sling Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sling-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Car Seat","childCategoryUrl":"https://www.lazada.co.id/beli-car-seat-bb/"},{"childCategoryName":"Playard","childCategoryUrl":"https://www.lazada.co.id/beli-playard/"},{"childCategoryName":"Ayunan, Jumper & Bouncer Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-ayunan-jumper-bouncer-bayi/"},{"childCategoryName":"Walker","childCategoryUrl":"https://www.lazada.co.id/beli-walker/"},{"childCategoryName":"Tempat Duduk & Trailer Sepeda","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-trailer-sepeda/"},{"childCategoryName":"Tas Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-anak/"},{"childCategoryName":"Koper Anak","childCategoryUrl":"https://www.lazada.co.id/beli-koper-anak/"},{"childCategoryName":"Tali & Harness Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tali-harness-bayi/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-perlengkapan-kamar-bayi/">
                                                                                <span>Kamar Bayi</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_6">
                                          [{"childCategoryName":"Matras Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kasur-seprai-bayi/"},{"childCategoryName":"Selimut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-bayi/"},{"childCategoryName":"Seprai Keranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-seprai-keranjang-bayi/"},{"childCategoryName":"Kelengkapan Alat Tidur Balita","childCategoryUrl":"https://www.lazada.co.id/beli-kelengkapan-alat-tidur-balita/"},{"childCategoryName":"Selimut Tebal & Bed Cover Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-tebal-bed-cover-bayi/"},{"childCategoryName":"Bantal, Pelindung & Sarung Bantal Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-pelindung-sarung-bantal-bayi/"},{"childCategoryName":"Furnitur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-bayi/"},{"childCategoryName":"Ranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-ranjang-bayi/"},{"childCategoryName":"Keranjang Bayi Cradle","childCategoryUrl":"https://www.lazada.co.id/beli-keranjang-bayi-cradle/"},{"childCategoryName":"Laci & Lemari Pakaian Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-laci-lemari-pakaian-bayi/"},{"childCategoryName":"Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-pengatur-penyimpanan/"},{"childCategoryName":"Dekorasi Kamar Anak","childCategoryUrl":"https://www.lazada.co.id/beli-dekorasi-kamar-anak/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perlengkapan-mandi-perawatan-kulit-anak/">
                                                                                <span>Perawatan Bayi</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_7">
                                          [{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-bayi/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Sabun & Pembersih Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-bayi/"},{"childCategoryName":"Perawatan Mulut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Sikat Gigi & Pasta Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Tempat Duduk & Bak Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-bak-mandi-bayi/"},{"childCategoryName":"Lap Mandi & Handuk Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-handuk-bayi/"},{"childCategoryName":"Pelindung Matahari Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-matahari-bayi/"},{"childCategoryName":"Aromaterapi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-aromaterapi-bayi/"},{"childCategoryName":"Perlengkapan Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-mandi-bayi-bb/"},{"childCategoryName":"Alas Mandi Bayi Anti Slip","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi-bayi-anti-slip/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-mainan-anak/">
                                                                                <span>Mainan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_8">
                                          [{"childCategoryName":"Action Figure & Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/jual-koleksi-mainan-action-figure/"},{"childCategoryName":"Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-koleksi-tg/"},{"childCategoryName":"Mini Figur","childCategoryUrl":"https://www.lazada.co.id/beli-mini-figure-tg/"},{"childCategoryName":"Kerajinan Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-kerajinan-tangan-kesenian-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Boneka & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-boneka-aksesori/"},{"childCategoryName":"Kostum Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dress-up/"},{"childCategoryName":"Mainan Edukasi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-pembelajaran-edukasi/"},{"childCategoryName":"Puzzle & Games","childCategoryUrl":"https://www.lazada.co.id/beli-permainan-tradisional/"},{"childCategoryName":"Hobi & Hiburan","childCategoryUrl":"https://www.lazada.co.id/Shop-Hobbies-Entertainment/"},{"childCategoryName":"Perlengkapan Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-pesta/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_10">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-remote-control-mainan-kendaraan/">
                                                                                <span>Mainan Elektronik &amp; RC</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_9">
                                          [{"childCategoryName":"Mobil Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-rc-baterai/"},{"childCategoryName":"Robot Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-rc-figure-robot/"},{"childCategoryName":"Mobil Die Cast","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-die-cast/"},{"childCategoryName":"Mainan Mobil","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-kendaraan-tg/"},{"childCategoryName":"Mainan Kereta Api & Rel","childCategoryUrl":"https://www.lazada.co.id/beli-set-mainan-kereta/"},{"childCategoryName":"Drone Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-drones-quadcopters/"},{"childCategoryName":"Helikopter","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-helikopter/"},{"childCategoryName":"Video Games & Hiburan","childCategoryUrl":"https://www.lazada.co.id/shop-hiburan-video-game/"},{"childCategoryName":"Walkie Talkies","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-walkie-talkie/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_11">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-olahraga-permainan-luar-ruangan/">
                                                                                <span>Mainan Olahraga &amp; Luar
                                                                                    Ruangan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_10">
                                          [{"childCategoryName":"Kolam Renang & Mainan Air","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-air-kolam-renang/"},{"childCategoryName":"Mainan Olahraga","childCategoryUrl":"https://www.lazada.co.id/shop-mainan-baseball-softball/"},{"childCategoryName":"Mainan Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-aktivitas-dan-olahraga-luar-ruangan/"},{"childCategoryName":"Mainan Blaster","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-blaster/"},{"childCategoryName":"Kolam Bola & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-bola-pit-aksesori/"},{"childCategoryName":"Mainan Terbang","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-terbang/"},{"childCategoryName":"Layangan & Kincir Angin","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-layang-layang/"},{"childCategoryName":"Istana Balon","childCategoryUrl":"https://www.lazada.co.id/beli-balon-loncat-istana-balon/"},{"childCategoryName":"Yoyo & Kendama","childCategoryUrl":"https://www.lazada.co.id/beli-yo-yo-kendama/"},{"childCategoryName":"Set Mainan Taman Bermain","childCategoryUrl":"https://www.lazada.co.id/beli-set-peralatan-permainan-playground/"},{"childCategoryName":"Kemah & Terowongan Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-tenda-terowongan/"},{"childCategoryName":"Mainan Rumah-rumahan","childCategoryUrl":"https://www.lazada.co.id/beli-playhouses/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_7_12">
                                                                            <a
                                                                                href="https://www.lazada.co.id/baby-toddler-toys/">
                                                                                <span>Mainan Bayi &amp; Balita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_6_11">
                                          [{"childCategoryName":"Playgym & Playmat","childCategoryUrl":"https://www.lazada.co.id/jual-mainan-gym-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Mainan Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-mandi-anak-tg/"},{"childCategoryName":"Mainan Tidur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-keranjang-bayi-perlengkapannya-tg/"},{"childCategoryName":"Mainan Balita","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-edukatif-anak-tg/"},{"childCategoryName":"Mainan Musik & Suara","childCategoryUrl":"https://www.lazada.co.id/beli-musik-suara-tg/"},{"childCategoryName":"Mainan Tarik Ulur","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dorong-tarik-tg/"},{"childCategoryName":"Mainan Shape Sorting","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-shape-sorting-tg/"},{"childCategoryName":"Indoor Climbers & Play Structures","childCategoryUrl":"https://www.lazada.co.id/beli-indoor-climbers-play-structure-tg/"},{"childCategoryName":"Rocking & Spring Ride-Ons","childCategoryUrl":"https://www.lazada.co.id/beli-rocking-spring-ride-on-tg/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No8"
                                                                        data-spm="cate_8">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-tv-audio-video-permainan-dan-gadget/">
                                                                                <span>TV &amp; Perangkat Video</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_0">
                                          [{"childCategoryName":""},{"childCategoryName":"TV LED","childCategoryUrl":"https://www.lazada.co.id/shop-televisi-digital/"},{"childCategoryName":"TV Smart","childCategoryUrl":"https://www.lazada.co.id/beli-smart-tv/"},{"childCategoryName":"Blu-Ray/DVD Player","childCategoryUrl":"https://www.lazada.co.id/beli-blu-ray-player/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/shop-media-player/"},{"childCategoryName":"Proyektor","childCategoryUrl":"https://www.lazada.co.id/beli-proyektor-3/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perlengkapan-dapur/">
                                                                                <span>Peralatan Dapur Kecil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_1">
                                          [{"childCategoryName":""},{"childCategoryName":"Rice Cooker","childCategoryUrl":"https://www.lazada.co.id/beli-rice-cooker/"},{"childCategoryName":"Blender, Mixer & Grinder","childCategoryUrl":"https://www.lazada.co.id/beli-blender-mixer-juicer/"},{"childCategoryName":"Kompor Gas","childCategoryUrl":"https://www.lazada.co.id/beli-kompor-gas/"},{"childCategoryName":"Teko Listrik","childCategoryUrl":"https://www.lazada.co.id/beli-ketel-elektrik-2/"},{"childCategoryName":"Juicer","childCategoryUrl":"https://www.lazada.co.id/beli-juicer-pengekstrak-buah/"},{"childCategoryName":"Mesin Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-kopi/"},{"childCategoryName":"Air Fryer","childCategoryUrl":"https://www.lazada.co.id/beli-air-fryers/"},{"childCategoryName":"Peralatan Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-ska-lainnya/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-perlatan-besar/">
                                                                                <span>Elektronik Rumah Besar</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_2">
                                          [{"childCategoryName":""},{"childCategoryName":"Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-cuci/"},{"childCategoryName":"Kulkas","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-es/"},{"childCategoryName":"Microwave","childCategoryUrl":"https://www.lazada.co.id/beli-microwave/"},{"childCategoryName":"Oven","childCategoryUrl":"https://www.lazada.co.id/beli-ovens/"},{"childCategoryName":"Dispenser Air Minum","childCategoryUrl":"https://www.lazada.co.id/beli-dispenser-air/"},{"childCategoryName":"AC","childCategoryUrl":"https://www.lazada.co.id/beli-ac/"},{"childCategoryName":"Pemanas Air","childCategoryUrl":"https://www.lazada.co.id/beli-pemanas-air/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-pendingin-pembersih-udara-mini/">
                                                                                <span>Penyejuk dan Pembersih
                                                                                    Udara</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_3">
                                          [{"childCategoryName":""},{"childCategoryName":"Kipas Angin","childCategoryUrl":"https://www.lazada.co.id/shop-kipas/"},{"childCategoryName":"Air Cooler","childCategoryUrl":"https://www.lazada.co.id/beli-pendingin-udara-2/"},{"childCategoryName":"Air Purifier","childCategoryUrl":"https://www.lazada.co.id/beli-penjernih-udara-2/"},{"childCategoryName":"Humidifier","childCategoryUrl":"https://www.lazada.co.id/beli-humidifier/"},{"childCategoryName":"Dehumidifier","childCategoryUrl":"https://www.lazada.co.id/beli-dehumidifier/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perawatan-lantai/">
                                                                                <span>Penghisap Debu &amp; Perawatan
                                                                                    Lantai</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_4">
                                          [{"childCategoryName":""},{"childCategoryName":"Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu/"},{"childCategoryName":"Penghisap Debu Robotik","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-robot/"},{"childCategoryName":"Penghisap Debu dengan Tongkat","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-tongkat/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-peralatan-perawatan-personal/">
                                                                                <span>Alat Perawatan Diri</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_5">
                                          [{"childCategoryName":""},{"childCategoryName":"Hair Dryer","childCategoryUrl":"https://www.lazada.co.id/beli-pengering-rambut/"},{"childCategoryName":"Alat Penata Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-styling-rambut/"},{"childCategoryName":"Shaver & Pencukur Kumis Jenggot","childCategoryUrl":"https://www.lazada.co.id/beli-shaver/"},{"childCategoryName":"Sikat Gigi Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-elektrik/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-aksesoris-elektronik-rumah-tangga/">
                                                                                <span>Aksesoris &amp; Suku Cadang</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_6">
                                          [{"childCategoryName":""},{"childCategoryName":"Suku Cadang & Aksesoris Peralatan Dapur Kecil","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-blender-dan-mixer/"},{"childCategoryName":"Suku Cadang & Aksesoris AC","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-aksesoris-ac/"},{"childCategoryName":"Suku Cadang & Aksesoris Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-mesin-cuci-dan-pengering-pakaian/"},{"childCategoryName":"Suku Cadang & Filter Pengganti","childCategoryUrl":"https://www.lazada.co.id/beli-filter-air/"},{"childCategoryName":"Suku Cadang & Filter Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/beli-suku-kadang-aksesoris-vacuum-cleaner/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-aksesoris-televisi/">
                                                                                <span>Aksesoris Televisi</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_7">
                                          [{"childCategoryName":""},{"childCategoryName":"TV Box","childCategoryUrl":"https://www.lazada.co.id/jual-tv-receiver/"},{"childCategoryName":"Antena TV","childCategoryUrl":"https://www.lazada.co.id/jual-antena-tv/"},{"childCategoryName":"Bracket Dinding TV & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jual-bracket-dinding-tv/"},{"childCategoryName":"Remote Control TV","childCategoryUrl":"https://www.lazada.co.id/jual-remote-control-tv/"},{"childCategoryName":"Kabel TV","childCategoryUrl":"https://www.lazada.co.id/jual-kabel-tv/"},{"childCategoryName":"Adaptor TV","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-tv/"},{"childCategoryName":"Kacamata 3D TV","childCategoryUrl":"https://www.lazada.co.id/jual-kacamata-3d-tv/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_8_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-home-entertainment/">
                                                                                <span>Home Entertainment</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_7_8">
                                          [{"childCategoryName":""},{"childCategoryName":"Soundbar","childCategoryUrl":"https://www.lazada.co.id/jual-soundbar/"},{"childCategoryName":"Sistem Karaoke","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-karaoke/"},{"childCategoryName":"Sistem Hi-Fi","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-hi-fi/"},{"childCategoryName":"Sound System Panggung","childCategoryUrl":"https://www.lazada.co.id/sound-system-panggung/"},{"childCategoryName":"Player Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No9"
                                                                        data-spm="cate_9">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-dekorasi-rumah/">
                                                                                <span>Dekorasi Rumah</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Stiker Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-stiker-dinding/"},{"childCategoryName":"Gorden","childCategoryUrl":"https://www.lazada.co.id/gorden-dan-kerai/"},{"childCategoryName":"Tikar & Karpet","childCategoryUrl":"https://www.lazada.co.id/beli-tikar-karpet/"},{"childCategoryName":"Hiasan Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-hiasan-dinding/"},{"childCategoryName":"Dekorasi Aksen","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-dekor/"},{"childCategoryName":"Bunga & Tanaman Artifisial","childCategoryUrl":"https://www.lazada.co.id/beli-bunga-tanaman-artifisial/"},{"childCategoryName":"Jam","childCategoryUrl":"https://www.lazada.co.id/beli-jam/"},{"childCategoryName":"Dalaman & Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/shop-dalaman-sarung-bantal/"},{"childCategoryName":"Bingkai","childCategoryUrl":"https://www.lazada.co.id/beli-bingkai/"},{"childCategoryName":"Wewangian Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-wewangian-rumah/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-furnitur/">
                                                                                <span>Furnitur</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tempat Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpanan/"},{"childCategoryName":"Lemari Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-pakaian/"},{"childCategoryName":"Kasur","childCategoryUrl":"https://www.lazada.co.id/beli-kasur/"},{"childCategoryName":"Kamar Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-kamar-tidur/"},{"childCategoryName":"Rak","childCategoryUrl":"https://www.lazada.co.id/rak/"},{"childCategoryName":"Rak TV dan Media","childCategoryUrl":"https://www.lazada.co.id/tempat-penyimpanan-media-dan-tv/"},{"childCategoryName":"Sofa","childCategoryUrl":"https://www.lazada.co.id/beli-sofa/"},{"childCategoryName":"Ruang Tamu","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-tamu/"},{"childCategoryName":"Ruang Kerja Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-kerja-rumah/"},{"childCategoryName":"Dapur & Ruang Makan","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-dapur-ruang-makan/"},{"childCategoryName":"Ruang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-bayi/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-peralatan-ranjang/">
                                                                                <span>Kelengkapan Tempat Tidur</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Seprai","childCategoryUrl":"https://www.lazada.co.id/seprei-ranjang/"},{"childCategoryName":"Seprai Set","childCategoryUrl":"https://www.lazada.co.id/perangkat-seprei/"},{"childCategoryName":"Selimut","childCategoryUrl":"https://www.lazada.co.id/selimut-dan-selimut-panjang/"},{"childCategoryName":"Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-bantal/"},{"childCategoryName":"Aksesoris Tempat Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-ranjang/"},{"childCategoryName":"Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-bantal/"},{"childCategoryName":"Selimut Tebal","childCategoryUrl":"https://www.lazada.co.id/seprei-dan-selimut-tebal/"},{"childCategoryName":"Pelindung Kasur","childCategoryUrl":"https://www.lazada.co.id/kasur-pelindung/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/penerangan/">
                                                                                <span>Penerangan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-lampu/"},{"childCategoryName":"Lampu Khusus","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-khusus/"},{"childCategoryName":"Lampu Langit-langit","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-langit-langit-hias/"},{"childCategoryName":"Penerangan Outdoor","childCategoryUrl":"https://www.lazada.co.id/beli-penerangan-outdoor/"},{"childCategoryName":"Lampu Dinding & Tempel","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-dinding-tempel/"},{"childCategoryName":"Lampu Meja","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-meja/"},{"childCategoryName":"Komponen Lampu","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-komponen/"},{"childCategoryName":"Kap Lampu","childCategoryUrl":"https://www.lazada.co.id/kap-lampu/"},{"childCategoryName":"Lampu Lantai","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-lantai/"},{"childCategoryName":"Lampu Rechargeable & Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-peralatan-mandi/">
                                                                                <span>Peralatan Mandi</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Handuk Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-handuk-mandi/"},{"childCategoryName":"Timbangan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-kamar-mandi/"},{"childCategoryName":"Wadah Penyimpanan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpan-kamar-mandi/"},{"childCategoryName":"Rak Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/jual-laci-kamar-mandi/"},{"childCategoryName":"Gantungan Handuk & Penghangat","childCategoryUrl":"https://www.lazada.co.id/gantungan-handuk-dan-penghangat/"},{"childCategoryName":"Tempat & Gantungan Shower","childCategoryUrl":"https://www.lazada.co.id/tempat-dan-gantungan-shower/"},{"childCategoryName":"Keset Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi/"},{"childCategoryName":"Jubah & Kimono Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-jubah-mandi/"},{"childCategoryName":"Tirai Shower","childCategoryUrl":"https://www.lazada.co.id/shop-tirai-mandi-aksesoris/"},{"childCategoryName":"Cermin Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-cermin-kamar-mandi/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perlengkapan-dapur-makan/">
                                                                                <span>Alat Dapur</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_5">
                                          [{"childCategoryName":"Botol minum","childCategoryUrl":"https://www.lazada.co.id/botol-minum/"},{"childCategoryName":"Tempat Penyimpanan Makanan","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-penyimpan-makanan/"},{"childCategoryName":"Alas Meja & Aksesoris Dapur","childCategoryUrl":"https://www.lazada.co.id/beli-alas-meja-aksesoris-dapur/"},{"childCategoryName":"Kopi & Teh","childCategoryUrl":"https://www.lazada.co.id/beli-kopi-dan-teh/"},{"childCategoryName":"Rak Piring & Aksesoris Wastafel","childCategoryUrl":"https://www.lazada.co.id/beli-rak-piring-aksesoris-bak/"},{"childCategoryName":"Panci & Wajan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-masak/"},{"childCategoryName":"Perangkat Minum","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-minum-gelas/"},{"childCategoryName":"Perangkat Makan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-penyajian-makanan/"},{"childCategoryName":"Perangkat Pemanggang","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-pemanggang/"},{"childCategoryName":"Perangkat Penyajian","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-penyaji/"},{"childCategoryName":"Pisau & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-pisau-dan-aksesoris/"},{"childCategoryName":"Alat Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-dapur/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-binatu-kebersihan/">
                                                                                <span>Binatu &amp; Alat
                                                                                    Kebersihan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_6">
                                          [{"childCategoryName":"Gantungan Baju","childCategoryUrl":"https://www.lazada.co.id/gantungan-baju/"},{"childCategoryName":"Keranjang Baju","childCategoryUrl":"https://www.lazada.co.id/keranjang-cucian/"},{"childCategoryName":"Jemuran Pakaian","childCategoryUrl":"https://www.lazada.co.id/rak-pengering/"},{"childCategoryName":"Alat Binatu & Setrika","childCategoryUrl":"https://www.lazada.co.id/beli-alat-binatu-setrika/"},{"childCategoryName":"Meja Setrika","childCategoryUrl":"https://www.lazada.co.id/papan-setrika/"},{"childCategoryName":"Produk Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Sapu & Alat Pel","childCategoryUrl":"https://www.lazada.co.id/beli-sapu-pel/"},{"childCategoryName":"Lap Kain Penghilang Debu","childCategoryUrl":"https://www.lazada.co.id/shop-Sapu-Sikat-Kemoceng/"},{"childCategoryName":"Sikat Pembersih","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-aksesoris-pembersih/"},{"childCategoryName":"Tempat Sampah","childCategoryUrl":"https://www.lazada.co.id/tempat-sampah/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-perawatan-rumah/">
                                                                                <span>Perkakas &amp; Perbaikan
                                                                                    Rumah</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_7">
                                          [{"childCategoryName":"Alat Penyimpanan & Rak","childCategoryUrl":"https://www.lazada.co.id/beli-garasi-penyimpanan-alat-alat/"},{"childCategoryName":"Kabel & Perlengkapan Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-elektrik/"},{"childCategoryName":"Pengecatan & Dekorasi","childCategoryUrl":"https://www.lazada.co.id/beli-pengecatan-dekorasi/"},{"childCategoryName":"Perkakas","childCategoryUrl":"https://www.lazada.co.id/beli-perkakas/"},{"childCategoryName":"Perkakas Listrik","childCategoryUrl":"https://www.lazada.co.id/jual-perkakas-listrik/"},{"childCategoryName":"Perkakas Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-genggam/"},{"childCategoryName":"Pipa Saluran Air & Kelengkapan","childCategoryUrl":"https://www.lazada.co.id/beli-ledeng/"},{"childCategoryName":"Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter"},{"childCategoryName":"Tangga & Kursi Peninggi","childCategoryUrl":"https://www.lazada.co.id/beli-tangga-kursi-peninggi/"},{"childCategoryName":"perlengkapan keamanan","childCategoryUrl":"https://www.lazada.co.id/lampu-penerangan-tempat-kerja/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/Kebun &amp; Luar Ruangan/">
                                                                                <span>Kebun &amp; Luar Ruangan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_8">
                                          [{"childCategoryName":"Peralatan Listrik Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-listrik-taman-luar-ruangan/"},{"childCategoryName":"Peralatan Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-kebun/"},{"childCategoryName":"Sistem Pengairan","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-pengairan/"},{"childCategoryName":"Bibit & Biji Bijian","childCategoryUrl":"https://www.lazada.co.id/beli-tumbuhan-biji-bijian/"},{"childCategoryName":"Pembasmi Hama","childCategoryUrl":"https://www.lazada.co.id/beli-pembasmi-rumput-liar-hama/"},{"childCategoryName":"Aksesoris Genset","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-peralatan-listrik-luar-ruangan/"},{"childCategoryName":"Genset","childCategoryUrl":"https://www.lazada.co.id/shop-generator/"},{"childCategoryName":"Pemanggang","childCategoryUrl":"https://www.lazada.co.id/pemanggang-dan-penyajian-masakan-outdoor/"},{"childCategoryName":"Alat Pembunuh Serangga","childCategoryUrl":"https://www.lazada.co.id/alat-pembunuh-serangga/"},{"childCategoryName":"Aksesoris Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-luar-ruangan/"},{"childCategoryName":"Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-taman-dan-kebun/"},{"childCategoryName":"","childCategoryUrl":""}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_10">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-alat-tulis-kerajinan/">
                                                                                <span>Alat Tulis &amp; Kerajinan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_9">
                                          [{"childCategoryName":"Peralatan Kesenian dan Kerajinan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-seni/"},{"childCategoryName":"Peralatan Mewarnai dan Copic","childCategoryUrl":"https://www.lazada.co.id/beli-alat-mewarnai-copic/"},{"childCategoryName":"Kerajinan Umum","childCategoryUrl":"https://www.lazada.co.id/beli-alat-kerajinan-umum/"},{"childCategoryName":"Pernak Pernik Hadiah dan Kado","childCategoryUrl":"https://www.lazada.co.id/beli-pernak-pernik-hadiah/"},{"childCategoryName":"Tas Belanja","childCategoryUrl":"https://www.lazada.co.id/beli-tas-belanjaan/"},{"childCategoryName":"Buku Catatan","childCategoryUrl":"https://www.lazada.co.id/buku-catatan/"},{"childCategoryName":"Kertas Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-kertas-komputer/"},{"childCategoryName":"Perlengkapan Sekolah","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-sekolah/"},{"childCategoryName":"Perlengkapan Meja Kerja","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-alat-alat-kantor/"},{"childCategoryName":"Perlengkapan Jahit","childCategoryUrl":"https://www.lazada.co.id/beli-bahan-bahan-kerajinan-tangan/"},{"childCategoryName":"Pulpen","childCategoryUrl":"https://www.lazada.co.id/beli-pulpen/"},{"childCategoryName":"Pensil","childCategoryUrl":"https://www.lazada.co.id/beli-pensil-2/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_9_11">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-media-musik-dan-buku/">
                                                                                <span>Media, Musik &amp; Buku</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_8_10">
                                          [{"childCategoryName":"Instrumen Musik","childCategoryUrl":"https://www.lazada.co.id/instrumen-musik/"},{"childCategoryName":"Buku","childCategoryUrl":"https://www.lazada.co.id/buku/"},{"childCategoryName":"Musik","childCategoryUrl":"https://www.lazada.co.id/lagu/"},{"childCategoryName":"Majalah","childCategoryUrl":"https://www.lazada.co.id/majalah/"},{"childCategoryName":"Film","childCategoryUrl":"https://www.lazada.co.id/film/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No10"
                                                                        data-spm="cate_10">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-minuman/">
                                                                                <span>Minuman</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"UHT, Susu & Susu Bubuk","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-uht-milk-milk-powder/"},{"childCategoryName":"Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-kopi/"},{"childCategoryName":"Minuman Serbuk","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-serbuk/"},{"childCategoryName":"Minuman Berenergi","childCategoryUrl":"https://www.lazada.co.id/shop-Minuman-Olahraga-Energi/"},{"childCategoryName":"Teh","childCategoryUrl":"https://www.lazada.co.id/beli-teh/"},{"childCategoryName":"Chocolate, Malt & Hot Cereals","childCategoryUrl":"https://www.lazada.co.id/coklat-panas/"},{"childCategoryName":"Air Mineral","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-air/"},{"childCategoryName":"Minuman Berkarbonasi","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-minuman-ringan/"},{"childCategoryName":"Jus","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-jus/"},{"childCategoryName":"Sirup","childCategoryUrl":"https://www.lazada.co.id/beli-sirup/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-Bahan-Utama-Pelengkap-Masakan">
                                                                                <span>Bahan &amp; Bumbu Masakan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan Instant & Siap santap","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Instan-Siap-Santap/"},{"childCategoryName":"Bahan Pembuat Kue","childCategoryUrl":"https://www.lazada.co.id/shop-Bahan-Pembuat-Kue/"},{"childCategoryName":"Beras","childCategoryUrl":"https://www.lazada.co.id/shop-Beras/"},{"childCategoryName":"Garam & Bumbu Dapur","childCategoryUrl":"https://www.lazada.co.id/shop-Bumbu-Dapur/"},{"childCategoryName":"Mie & Bihun","childCategoryUrl":"https://www.lazada.co.id/shop-Mi-Bihun/"},{"childCategoryName":"Makanan Kering","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kering/"},{"childCategoryName":"Minyak","childCategoryUrl":"https://www.lazada.co.id/shop-Minyak/"},{"childCategoryName":"Makanan Kaleng","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kaleng/"},{"childCategoryName":"Pasta","childCategoryUrl":"https://www.lazada.co.id/shop-Pasta/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-Cokelat-Camilan-Permen/">
                                                                                <span>Cokelat, Camilan &amp;
                                                                                    Permen</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Camilan","childCategoryUrl":"https://www.lazada.co.id/shop-Camilan/"},{"childCategoryName":"Cokelat","childCategoryUrl":"https://www.lazada.co.id/shop-Cokelat/"},{"childCategoryName":"Biskuit & Kerupuk","childCategoryUrl":"https://www.lazada.co.id/shop-Biskuit-Manis/"},{"childCategoryName":"Permen","childCategoryUrl":"https://www.lazada.co.id/shop-Manisan/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-makanan-sarapan">
                                                                                <span>Makanan Sarapan, Sereal &amp;
                                                                                    Selai</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Selai & Madu","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-selai-madu-spread/"},{"childCategoryName":"Oatmeal","childCategoryUrl":"https://www.lazada.co.id/beli-oatmeal/"},{"childCategoryName":"Sereal Sarapan","childCategoryUrl":"https://www.lazada.co.id/beli-sereal/"},{"childCategoryName":"Tepung Pancake & Waffle","childCategoryUrl":"https://www.lazada.co.id/beli-pancake-waffle/"},{"childCategoryName":"Bars","childCategoryUrl":"https://www.lazada.co.id/shop-bar/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/beli-makanan-minuman-hasil-segar">
                                                                                <span>Buah &amp; Sayur</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Buah Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-buah/"},{"childCategoryName":"Sayur Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-sayuran-segar/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-kebutuhan-rumah-tangga">
                                                                                <span>Kebutuhan Rumah Tangga</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengharum Ruangan","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-udara/"},{"childCategoryName":"Kebutuhan Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Pengendalian Hama","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pengendalian-hama/"},{"childCategoryName":"Sabun Pencuci Piring","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-mencuci-piring/"},{"childCategoryName":"Kebutuhan Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-cucian/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-makanan-hewan">
                                                                                <span>Makanan Hewan Peliharaan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan & Camilan Kucing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-kucing/"},{"childCategoryName":"Makanan Burung","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-burung/"},{"childCategoryName":"Makanan Ikan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ikan/"},{"childCategoryName":"Makanan & Camilan Anjing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-anjing/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-aksesoris-hewan">
                                                                                <span>Aksesoris Hewan Peliharaan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Keperluan Akuarium","childCategoryUrl":"https://www.lazada.co.id/shop-keperluan-akuarium/"},{"childCategoryName":"Kandang & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-kandang-terbuka-pintu-anjing/"},{"childCategoryName":"Peralatan Grooming","childCategoryUrl":"https://www.lazada.co.id/jual-persediaan-grooming-hewan/"},{"childCategoryName":"Rumah,Alas & Tempat tidur","childCategoryUrl":"https://www.lazada.co.id/beli-ranjang-alas-tidur-rumah-anjing/"},{"childCategoryName":"Alat Makan Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-mangkuk-makan-anjing/"},{"childCategoryName":"Tali dan Kalung Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-tali-kalung-moncong-anjing/"},{"childCategoryName":"Kebutuhan Travel Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-pengangkut-perjalanan-anjing/"},{"childCategoryName":"Mainan Hewan","childCategoryUrl":"https://www.lazada.co.id/shop-mainan/"},{"childCategoryName":"Alat Pelatihan Anjing","childCategoryUrl":"https://www.lazada.co.id/beli-alat-latih-olahraga-anjing/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_10_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-kesehatan-hewan-peliharaan">
                                                                                <span>Kesehatan Hewan Peliharaan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_9_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-kesehatan-gigi-anjing/"},{"childCategoryName":"Pembasmi Kutu Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-kutu-anjing/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No11"
                                                                        data-spm="cate_11">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/baju-olahraga-pria/">
                                                                                <span>Baju Olahraga Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_0">
                                          [{"childCategoryName":"Celana Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-pria/"},{"childCategoryName":"Kaos Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/kaos-olahraga-pria/"},{"childCategoryName":"Jaket Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-olahraga-pria/"},{"childCategoryName":"Pakaian Renang Pria","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-pria/"},{"childCategoryName":"Jersey Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-olahraga-pria/"},{"childCategoryName":"Celana Pendek Pria","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-pria/"},{"childCategoryName":"Hoodies Pria","childCategoryUrl":"https://www.lazada.co.id/hoodies-pria/"},{"childCategoryName":"Topi Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-topi-olahraga-pria/"},{"childCategoryName":"Tas Ransel Sport Pria","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-pria/"},{"childCategoryName":"Tas Serut Pria","childCategoryUrl":"https://www.lazada.co.id/tas-serut-pria/"},{"childCategoryName":"Tas Duffel Pria","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-pria/"},{"childCategoryName":"Gym Tote Pria","childCategoryUrl":"https://www.lazada.co.id/gym-tote-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/pakaian-olahraga-wanita/">
                                                                                <span>Baju Olahraga Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_1">
                                          [{"childCategoryName":"Celana Panjang Wanita","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-wanita/"},{"childCategoryName":"Kaos Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/kaos-dan-atasan-olahraga-wanita/"},{"childCategoryName":"Jaket Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-sport-wanita/"},{"childCategoryName":"Sport Bra Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sport-bra-wanita/"},{"childCategoryName":"Celana Pendek Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-wanita/"},{"childCategoryName":"Rok Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-rok-olahraga-wanita/"},{"childCategoryName":"Hoodies Wanita","childCategoryUrl":"https://www.lazada.co.id/hoodies-wanita/"},{"childCategoryName":"Pakaian Renang Wanita","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-wanita/"},{"childCategoryName":"Tas Ransel Sport Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-wanita/"},{"childCategoryName":"Tas Serut Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-serut-wanita/"},{"childCategoryName":"Tas Duffel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-wanita/"},{"childCategoryName":"Gym Tote Wanita","childCategoryUrl":"https://www.lazada.co.id/gym-tote-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-pria/">
                                                                                <span>Sepatu Olahraga Pria</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_2">
                                          [{"childCategoryName":"Sepatu Sepakbola Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Sepatu Lari Pria","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-pria/"},{"childCategoryName":"Sepatu Hiking Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-hiking-pria/"},{"childCategoryName":"Sepatu Basket Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-basket-pria/"},{"childCategoryName":"Sepatu Olahraga Air Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-olahraga-air-pria/"},{"childCategoryName":"Sepatu Badminton ria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-badminton-pria/"},{"childCategoryName":"Sepatu Training Pira","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-pria/"},{"childCategoryName":"Sepatu Skateboard Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-pria/"},{"childCategoryName":"Sepatu Sneakers Pria","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-pria/"},{"childCategoryName":"Sandal Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-pria/"},{"childCategoryName":"Sepatu Jalan Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-pria/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-wanita/">
                                                                                <span>Sepatu Olahraga Wanita</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_3">
                                          [{"childCategoryName":"Sepatu Badminton Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-badminton-wanita/"},{"childCategoryName":"Sepatu Lari Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-wanita/"},{"childCategoryName":"Sepatu Futsal Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-futsal-wanita/"},{"childCategoryName":"Sepatu Basket Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-basket-wanita/"},{"childCategoryName":"Sepatu Sepakbola Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepakbola-wanita/"},{"childCategoryName":"Sepatu Olahraga Air Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-olaraga-air-wanita/"},{"childCategoryName":"Sepatu Hiking Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-hiking-wanita/"},{"childCategoryName":"Sepatu Training Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-wanita/"},{"childCategoryName":"Septu Skateboard Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-wanita/"},{"childCategoryName":"Sepatu Sneakers Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-wanita/"},{"childCategoryName":"Sandal Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-wanita/"},{"childCategoryName":"Sepatu Jalan Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-wanita/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/camping-dan-hiking/">
                                                                                <span>Camping dan Hiking</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_4">
                                          [{"childCategoryName":"Tenda dan furniture Camping","childCategoryUrl":"https://www.lazada.co.id/tenda-dan-furniture/"},{"childCategoryName":"Perlengkapan Tidur Camping","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-tidur-camping/"},{"childCategoryName":"Tas Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tas-ransel/"},{"childCategoryName":"Tempat berteduh Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tempat-berteduh-dan-kanopi/"},{"childCategoryName":"Perabotan Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-perabotan-kemah/"},{"childCategoryName":"Alat Dapur Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-dapur-kemah/"},{"childCategoryName":"Alat penerangan Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-penerangan/"},{"childCategoryName":"Navigasi Elektroning Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-navigasi-elektronik/"},{"childCategoryName":"Tongkat Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-hiking/"},{"childCategoryName":"Pisau Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-pisau-alat-multifungsi/"},{"childCategoryName":"Peralatan Survival Camping","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-survival-dan-keamanan/"},{"childCategoryName":"Perlengkapan Panjat Tebing","childCategoryUrl":"https://www.lazada.co.id/panjat-tebing/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/jual-peralatan-memancing/">
                                                                                <span>Peralatan Memancing</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_5">
                                          [{"childCategoryName":"Tongkat Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-pancing/"},{"childCategoryName":"Alat Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/alat-gulungan-pancing/"},{"childCategoryName":"Set Tongkat dan Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/set-tongkat-dan-gulungan-pancing/"},{"childCategoryName":"Senar Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-senar-pancing/"},{"childCategoryName":"Umpan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-umpan/"},{"childCategoryName":"Peralatan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-pancing/"},{"childCategoryName":"GPS alat pencari ikan","childCategoryUrl":"https://www.lazada.co.id/jual-gps-alat-pencari-ikan/"},{"childCategoryName":"Jaring Penangkap Ikan","childCategoryUrl":"https://www.lazada.co.id/jual-jaring-penangkap-ikan/"},{"childCategoryName":"Aksesoris Memancing","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-memancing/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/olahraga-sepeda/">
                                                                                <span>Olahraga Sepeda</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_6">
                                          [{"childCategoryName":"Komponen Part Sepeda","childCategoryUrl":"https://www.lazada.co.id/komponen-dan-parts-sepeda/"},{"childCategoryName":"Aksesoris Sepeda","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepeda/"},{"childCategoryName":"Sepeda","childCategoryUrl":"https://www.lazada.co.id/sepeda/"},{"childCategoryName":"Kaos Sepeda","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kaos-sepeda/"},{"childCategoryName":"Sepatu Sepeda Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-pria/"},{"childCategoryName":"Sepatu Sepeda Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepeda-wanita/"},{"childCategoryName":"Sepatu Sepeda Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-perempuan/"},{"childCategoryName":"Sepatu Sepeda Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-laki-laki/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/olahraga-air/">
                                                                                <span>Olahraga Air</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_7">
                                          [{"childCategoryName":"Kapal","childCategoryUrl":"https://www.lazada.co.id/jual-kapal/"},{"childCategoryName":"Peralatan Menyelam","childCategoryUrl":"https://www.lazada.co.id/diving-snorkeling/"},{"childCategoryName":"Peralatan Renang","childCategoryUrl":"https://www.lazada.co.id/renang/"},{"childCategoryName":"Papan Renang","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-papan/"},{"childCategoryName":"Tubing dan Towables","childCategoryUrl":"https://www.lazada.co.id/jual-tubing-towables/"},{"childCategoryName":"Akesesoris Olahraga Air","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-olahraga-air/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/latihan-dan-fitness/">
                                                                                <span>Gym, Yoga &amp; Fitness</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_8">
                                          [{"childCategoryName":"Peralatan Pelatihan Ketangkasan","childCategoryUrl":"https://www.lazada.co.id/shop-pelatihan-kecepatan-ketangkasan/"},{"childCategoryName":"Aksesoris Gym","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris/"},{"childCategoryName":"Pilates Gym","childCategoryUrl":"https://www.lazada.co.id/pilates/"},{"childCategoryName":"Alat Latihan Angkat Beban","childCategoryUrl":"https://www.lazada.co.id/alat-latihan-angkat-beban/"},{"childCategoryName":"Yoga","childCategoryUrl":"https://www.lazada.co.id/yoga/"},{"childCategoryName":"Peralatan Kardio","childCategoryUrl":"https://www.lazada.co.id/peralatan-latihan-kardio/"},{"childCategoryName":"Perlengkapan Fitnes","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-fitness/"},{"childCategoryName":"Perlengkapan Lari","childCategoryUrl":"https://www.lazada.co.id/temporary-url-sport-catl3-1/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_10">
                                                                            <a
                                                                                href="https://www.lazada.co.id/olahraga-raket/">
                                                                                <span>Olahraga Raket</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_9">
                                          [{"childCategoryName":"Tenis Meja","childCategoryUrl":"https://www.lazada.co.id/tenis-meja/"},{"childCategoryName":"Badminton","childCategoryUrl":"https://www.lazada.co.id/bulutangkis/"},{"childCategoryName":"Tennis","childCategoryUrl":"https://www.lazada.co.id/tenis/"},{"childCategoryName":"Squash","childCategoryUrl":"https://www.lazada.co.id/squash/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_11">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-perlengkapan-olah-raga/">
                                                                                <span>Perlengkapan Olahraga</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_10">
                                          [{"childCategoryName":"Oxrashoan Tinju-Bela Mma","childCategoryUrl":"https://www.lazada.co.id/jual-tinju-bela-diri-mma/"},{"childCategoryName":"Golf Gym","childCategoryUrl":"https://www.lazada.co.id/golf/"},{"childCategoryName":"Bola Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-bola/"},{"childCategoryName":"Basket Gym","childCategoryUrl":"https://www.lazada.co.id/basket/"},{"childCategoryName":"Voli Gym","childCategoryUrl":"https://www.lazada.co.id/voli/"},{"childCategoryName":"Cricket Gym","childCategoryUrl":"https://www.lazada.co.id/cricket/"},{"childCategoryName":"Rugby Gym","childCategoryUrl":"https://www.lazada.co.id/rugby/"},{"childCategoryName":"Takraw Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-takraw/"},{"childCategoryName":"Baseball Gym","childCategoryUrl":"https://www.lazada.co.id/baseball/"},{"childCategoryName":"Perlengkapan Olahraga Senam","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-senam/"},{"childCategoryName":"Hoki Gym","childCategoryUrl":"https://www.lazada.co.id/olahraga-hoki/"},{"childCategoryName":"Peralatan Cheerleading","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-cheerleading/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_11_12">
                                                                            <a
                                                                                href="https://www.lazada.co.id/sepak-bola/">
                                                                                <span>Perlengkapan Sepak Bola</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_10_11">
                                          [{"childCategoryName":"Sepatu Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Jersey Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-pria/"},{"childCategoryName":"Jersey Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-anak-laki-laki/"},{"childCategoryName":"Sepatu Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepak-bola/"},{"childCategoryName":"Sepatu Futsal Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal/"},{"childCategoryName":"Bola","childCategoryUrl":"https://www.lazada.co.id/bola-sepak-bola/"},{"childCategoryName":"Sarung Tangan Keeper","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-kiper/"},{"childCategoryName":"Pelindung Lutut","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-tulang-kering/"},{"childCategoryName":"Peralatan Latihan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-berlatih-dan-lapangan/"},{"childCategoryName":"Tas","childCategoryUrl":"https://www.lazada.co.id/jual-tas-peralatan/"},{"childCategoryName":"Fan Merchandise Team International","childCategoryUrl":"https://www.lazada.co.id/international-football-clubs-fan-merchandise/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="lzd-site-menu-sub Level_1_Category_No12"
                                                                        data-spm="cate_12">
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_1">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-auto-parts-spares/">
                                                                                <span>Suku Cadang &amp; Peralatan
                                                                                    Mobil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_0">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Lampu, Bohlam & LED","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-led-hid/"},{"childCategoryName":"Rem","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-brake-system/"},{"childCategoryName":"Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shocks-struts-suspension/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-engine-parts/"},{"childCategoryName":"Suku Cadang Body","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-parts/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exhaust-emissions/"},{"childCategoryName":"Aki Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-batteries-accessories/"},{"childCategoryName":"Wiper & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-windshield-wipers-washers/"},{"childCategoryName":"Klakson & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-horns-accessories/"},{"childCategoryName":"Peralatan Pengapian & Kelistrikan","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-ignition-electrical/"},{"childCategoryName":"Peralatan & Suku Cadang Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trim/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_2">
                                                                            <a
                                                                                href="https://www.lazada.co.id/aksesoris-interior-mobil/">
                                                                                <span>Aksesoris Interior Mobil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_1">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Jok & Trim","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok-aksesoris-kursi/"},{"childCategoryName":"Aksesoris Stir Mobil","childCategoryUrl":"https://www.lazada.co.id/setir-mobil-dan-aksesoris/"},{"childCategoryName":"Persneling","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shift-boots-knobs/"},{"childCategoryName":"Pedal","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-pedals-pedal-accessories/"},{"childCategoryName":"Spidometer & Pengukur","childCategoryUrl":"https://www.lazada.co.id/alat-pengukur-kecepatan/"},{"childCategoryName":"Aksesoris Elektronik Interior","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-electrical-appliances/"},{"childCategoryName":"Aksesoris Interior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-consoles-organizers/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_3">
                                                                            <a
                                                                                href="https://www.lazada.co.id/aksesoris-eksterior-mobil/">
                                                                                <span>Aksesoris Exterior Mobil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_2">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Mobil","childCategoryUrl":"https://www.lazada.co.id/penutup-mobil/"},{"childCategoryName":"Stiker & Emblems","childCategoryUrl":"https://www.lazada.co.id/shop-stiker/"},{"childCategoryName":"Lis & Garnis","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-chrome-trim-accessories/"},{"childCategoryName":"Penutup Pelat Nomer","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-license-plate-covers-frames/"},{"childCategoryName":"Aksesoris Serbaguna","childCategoryUrl":"https://www.lazada.co.id/shop-manajemen-kargo/"},{"childCategoryName":"Kaca Angin, Deflektor & Talang Air","childCategoryUrl":"https://www.lazada.co.id/pelindung-dan-talang-air-mobil/"},{"childCategoryName":"Kaca & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exterior-mirrors/"},{"childCategoryName":"Spoiler, Sayap & Body Kit","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-spoilers-wings-styling-kits/"},{"childCategoryName":"Aksesoris Offroad","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-armor/"},{"childCategoryName":"Aksesoris Exterior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trailer-accessories/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_4">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-elektronik/">
                                                                                <span>Kamera Mobil, Audio &amp;
                                                                                    Video</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_3">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kamera Mobil & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-kamera-mobil/"},{"childCategoryName":"Headunit","childCategoryUrl":"https://www.lazada.co.id/shop-car-video-in-dash-navigation/"},{"childCategoryName":"Spiker","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-speakers/"},{"childCategoryName":"Subwoofer","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-subwoofers/"},{"childCategoryName":"Power, amplifier & Kapasitor Bank","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-equalizers/"},{"childCategoryName":"GPS","childCategoryUrl":"https://www.lazada.co.id/shop-motors-gps/"},{"childCategoryName":"Video, TV Aksesoris mobil","childCategoryUrl":"https://www.lazada.co.id/shop-car-video/"},{"childCategoryName":"Aksesoris Audio & Video Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-audio-video-accessories/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_5">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-perawatan-mobil/">
                                                                                <span>Perawatan &amp; Pengkilat
                                                                                    Mobil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_4">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Pengkilat & Detailing Bodi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-waxing-kits/"},{"childCategoryName":"Pelapis & Pembersih Kaca","childCategoryUrl":"https://www.lazada.co.id/glass-care/"},{"childCategoryName":"Kompon & Penghilang Baret","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-rubbing-compounds/"},{"childCategoryName":"Cat Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-paints-primers/"},{"childCategoryName":"Perawatan Ban & Velg","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-tire-wheel-care/"},{"childCategoryName":"Perawatan Interior","childCategoryUrl":"https://www.lazada.co.id/interior-care/"},{"childCategoryName":"Paket Perawatan Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-paket-perawatan-mobil/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_6">
                                                                            <a
                                                                                href="https://www.lazada.co.id/roda-dan-ban/">
                                                                                <span>Ban &amp; Velg Mobil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_5">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Velg","childCategoryUrl":"https://www.lazada.co.id/jual-roda/"},{"childCategoryName":"Ban","childCategoryUrl":"https://www.lazada.co.id/jual-ban/"},{"childCategoryName":"Aksesoris Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-roda-suku-cadang/"},{"childCategoryName":"Peralatan Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/shop-tire-parts-air-compressors-inflators/"},{"childCategoryName":"Servis & Pemasangan Velg, Ban","childCategoryUrl":"https://www.lazada.co.id/shop-paket-ban-pelek/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_7">
                                                                            <a
                                                                                href="https://www.lazada.co.id/oli-dan-pelumas/">
                                                                                <span>Oli &amp; Cairan Mobil</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_6">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-oils/"},{"childCategoryName":"Aditif & Penguat Bensin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-auto-oils-fluids-additives/"},{"childCategoryName":"Pendingin Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-antifreezes-coolants/"},{"childCategoryName":"Pembersih Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-cleaners/"},{"childCategoryName":"Oli Powersteering","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-power-steering-fluids/"},{"childCategoryName":"Cairan & Oli Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-greases-lubricants/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_8">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-motorcycle-riding-gear/">
                                                                                <span>Perlengkapan Berkendara &amp;
                                                                                    Helm</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_7">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Helm","childCategoryUrl":"https://www.lazada.co.id/helmets-automotive/"},{"childCategoryName":"Jaket & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jackets/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-gloves/"},{"childCategoryName":"Sepatu & Boot","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-footwear/"},{"childCategoryName":"Masker & Pelindung Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-face-masks/"},{"childCategoryName":"Kacamata Angin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-eyewear/"},{"childCategoryName":"Peralatan Hujan","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-hujan/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_9">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-motorcycle-parts-spares/">
                                                                                <span>Suku Cadang &amp; Peralatan
                                                                                    Motor</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_8">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam, LED & Rumah Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-penerangan/"},{"childCategoryName":"Rem & Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brakes-suspension/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/moto-knalpot-system-pembuangan/"},{"childCategoryName":"Aki Motor & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-moto-batteries-accessories/"},{"childCategoryName":"Kaca / Cermin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-mirrors/"},{"childCategoryName":"Filter Motor","childCategoryUrl":"https://www.lazada.co.id/shop-saringan-udara/"},{"childCategoryName":"Suku Cadang Bodi & Rangka","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-body-frame/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-drivetrain-transmission/"},{"childCategoryName":"Busi","childCategoryUrl":"https://www.lazada.co.id/shop-busi-motor/"},{"childCategoryName":"Suku Cadang Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-stands-accessories/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_10">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-motorcycle-exterior-accessories/">
                                                                                <span>Aksesoris &amp; Elektronik
                                                                                    Motor</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_9">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Jok","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok/"},{"childCategoryName":"Stiker & Emblem","childCategoryUrl":"https://www.lazada.co.id/shop-stiker-emblem/"},{"childCategoryName":"Pengukur","childCategoryUrl":"https://www.lazada.co.id/shop-indikator/"},{"childCategoryName":"Aksesoris Elektronik","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-electronics/"},{"childCategoryName":"Pelindung Plat Nomor","childCategoryUrl":"https://www.lazada.co.id/shop-frame-plat-nomor/"},{"childCategoryName":"Sarung Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-covers/"},{"childCategoryName":"Windshield & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-windshields-accessories/"},{"childCategoryName":"Bagasi Penyimpanan & Bantalan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-luggage-saddlebags/"},{"childCategoryName":"Aksesoris & Elektronik Motor Lainny","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-racks/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_11">
                                                                            <a
                                                                                href="https://www.lazada.co.id/shop-motorcycle-oils-fluids/">
                                                                                <span>Ban, Velg, Oli &amp; Cairan
                                                                                    Motor</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_10">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oli-mesin/"},{"childCategoryName":"Oli Rem Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brake-fluid/"},{"childCategoryName":"Oli Transmisi Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oligirboks/"},{"childCategoryName":"Pendingin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-coolant/"},{"childCategoryName":"Aditif & Penguat Bensin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pembersih/"},{"childCategoryName":"Pelumas Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pelumas-dan-gemuk/"},{"childCategoryName":"Ban & Velg Motor","childCategoryUrl":"https://www.lazada.co.id/jual-roda-ban-motor/"},{"childCategoryName":"Oli & Cairan Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-oli-shock-breaker/"}]
                                        </script>
                                                                        </li>
                                                                        <li class="lzd-site-menu-sub-item"
                                                                            data-cate="cate_12_12">
                                                                            <a
                                                                                href="https://www.lazada.co.id/mobil-motor/">
                                                                                <span>Kendaraan</span>
                                                                            </a>
                                                                            <script type="text" class="J_data_11_11">
                                          [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-mobil/"},{"childCategoryName":"Motor","childCategoryUrl":"https://www.lazada.co.id/shop-sepeda-motor-skuter/"}]
                                        </script>
                                                                        </li>
                                                                    </ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <nav class="lzd-menu-labels" data-spm="menu">
                                                    <a class="lzd-menu-labels-item"
                                                        href="//pages.lazada.co.id/wow/i/id/LandingPage/lazmall?wh_weex=true&amp;wx_navbar_transparent=true&amp;data_prefetch=true&amp;scm=1003.4.icms-zebra-5000383-2586266.OTHER_6502207795_7692459">
                                                        <span
                                                            class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                                            <img alt="TOTO TOGEL" class="lzd-site-nav-menu-iconfont-img"
                                                                src="https://imgsaya.io/download/AXDNwWVl.gif" />
                                                        </span>
                                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-LazMall">&#xe629;</i>-->
                                                        <span class="lzd-menu-labels-item-text">TOTO TOGEL</span>
                                                    </a>
                                                    <a class="lzd-menu-labels-item"
                                                        href="//pages.lazada.co.id/wow/i/id/digitalgoods/home?hybrid=1&amp;scm=1003.4.icms-zebra-5000383-2586266.OTHER_6502207798_7692459">
                                                        <span
                                                            class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                                            <img alt="Pulsa &amp;"
                                                                class="lzd-site-nav-menu-iconfont-img"
                                                                src="//laz-img-cdn.alicdn.com/images/ims-web/TB1Je4vhRr0gK0jSZFnXXbRRXXa.png" />
                                                        </span>
                                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-MobileTop1">&#xe768;</i>-->
                                                        <span class="lzd-menu-labels-item-text">Pulsa &amp;
                                                            Tagihan</span>
                                                    </a>
                                                    <a class="lzd-menu-labels-item"
                                                        href="//pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/all-promo/mcp-ush&amp;scm=1003.4.icms-zebra-5000383-2586266.OTHER_6502207802_7692459&amp;prefetch_replace=1">
                                                        <span
                                                            class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                                            <img alt="Voucher &amp;"
                                                                class="lzd-site-nav-menu-iconfont-img"
                                                                src="//laz-img-cdn.alicdn.com/images/ims-web/TB1x8lvhHj1gK0jSZFuXXcrHpXa.png" />
                                                        </span>
                                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-Vouchers">&#xe76a;</i>-->
                                                        <span class="lzd-menu-labels-item-text">Voucher &amp;
                                                            Diskon</span>
                                                    </a>
                                                    <a class="lzd-menu-labels-item"
                                                        href="https://www.lazada.co.id/blog/?scm=1003.4.icms-zebra-5000383-2586266.OTHER_6502207806_7692459">
                                                        <span
                                                            class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                                            <img alt="LazBlog" class="lzd-site-nav-menu-iconfont-img"
                                                                src="//icms-image.slatic.net/images/ims-web/9174453f-455e-4e30-87d2-bd90239e6994.png" />
                                                        </span>
                                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-Categories">&#xe765;</i>-->
                                                        <span class="lzd-menu-labels-item-text">LazBlog</span>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lzd-nav-cart">
                                    <a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>" data-spm="dcart"><span class="cart-icon"></span>
                                        <span class="cart-num" id="topActionCartNumber"></span></a>
                                </div>
                                <div class="lzd-header-banner" id="topActionLiveUpBanner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mui-zebra-module" id="J_icms-5000527-1511531232618"
                        data-module-id="icms-5000527-1511531232618" data-version="5.0.83"
                        data-spm="icms-5000527-1511531232618">
                        <div class="lzd-site-nav-menu lzd-site-nav-menu-active"
                            data-mod-name="@ali/lzdmod-site-menu-nav-pc/pc/index" data-config="{}">
                            <div class="lzd-site-menu-nav-container">
                                <div class="lzd-site-menu-nav-category">
                                    <a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>">
                                        <span class="lzd-site-menu-nav-category-text">Kategori</span>
                                    </a>
                                    <div class="lzd-site-menu-nav-menu">
                                        <div class="mui-zebra-module" id="J_icms-5000518-1511530513406"
                                            data-module-id="icms-5000518-1511530513406" data-version="5.0.51"
                                            data-spm="icms-5000518-1511530513406">
                                            <div class="lzd-site-nav-menu-dropdown"
                                                data-mod-name="@ali/lzdmod-site-menu-pc/pc/index" data-config="{}">
                                                <ul class="lzd-site-menu-root" data-spm="cate">
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No1">
                                                        <a>
                                                            <span>Peralatan Elektronik</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No2">
                                                        <a>
                                                            <span>Aksesoris Elektronik</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No3">
                                                        <a>
                                                            <span>Fashion &amp; Aksesoris Wanita</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No4">
                                                        <a>
                                                            <span>Fashion &amp; Aksesoris Pria</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No5">
                                                        <a>
                                                            <span>Fashion &amp; Aksesoris Anak</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No6">
                                                        <a>
                                                            <span>Kesehatan &amp; Kecantikan</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No7">
                                                        <a>
                                                            <span>Bayi &amp; Mainan</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No8">
                                                        <a>
                                                            <span>TV &amp; Elektronik Rumah</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No9">
                                                        <a>
                                                            <span>Keperluan Rumah &amp; Gaya Hidup</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No10">
                                                        <a>
                                                            <span>Kebutuhan Rumah Tangga</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No11">
                                                        <a>
                                                            <span>Olahraga &amp; Outdoor</span>
                                                        </a>
                                                    </li>
                                                    <li class="lzd-site-menu-root-item" id="Level_1_Category_No12">
                                                        <a>
                                                            <span>Otomotif</span>
                                                        </a>
                                                    </li>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No1"
                                                        data-spm="cate_1">
                                                        <li class="sub-item-remove-arrow" data-cate="cate_1_1">
                                                            <a href="https://www.lazada.co.id/beli-handphone">
                                                                <span>Handphone</span>
                                                            </a>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_1_2">
                                                            <a href="https://www.lazada.co.id/shop-beli-laptop/">
                                                                <span>Laptop</span>
                                                            </a>
                                                            <script type="text" class="J_data_0_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Laptop Consumer","childCategoryUrl":"https://www.lazada.co.id/jual-laptop-umum/"},{"childCategoryName":"Laptop Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-gaming/"},{"childCategoryName":"Laptop 2-in-1s","childCategoryUrl":"https://www.lazada.co.id/beli-laptop-2-in-1/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_1_3">
                                                            <a href="https://www.lazada.co.id/beli-komputer/">
                                                                <span>Desktop</span>
                                                            </a>
                                                            <script type="text" class="J_data_0_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"PC Gaming","childCategoryUrl":"https://www.lazada.co.id/beli-pc-gaming/"},{"childCategoryName":"Komputer Rakitan","childCategoryUrl":"https://www.lazada.co.id/beli-komputer-rakitan/"},{"childCategoryName":"All-In-One","childCategoryUrl":"https://www.lazada.co.id/beli-pc-all-in-one/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_1_4">
                                                            <a href="https://www.lazada.co.id/beli-kamera/">
                                                                <span>Kamera</span>
                                                            </a>
                                                            <script type="text" class="J_data_0_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"DSLR","childCategoryUrl":"https://www.lazada.co.id/beli-slr/"},{"childCategoryName":"Kamera Mirrorless","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-mirrorless/"},{"childCategoryName":"Kamera Pocket","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-pocket/"},{"childCategoryName":"Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-video-aksi/"},{"childCategoryName":"360 Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-360/"},{"childCategoryName":"Kamera CCTV","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-cctv/"},{"childCategoryName":"IP Cameras","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-ip/"},{"childCategoryName":"Video Camera","childCategoryUrl":"https://www.lazada.co.id/beli-camcorders/"},{"childCategoryName":"Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/beli-kamera-instan/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_1_5">
                                                            <a href="https://www.lazada.co.id/shop-gaming-konsol/">
                                                                <span>Game Console</span>
                                                            </a>
                                                            <script type="text" class="J_data_0_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Gaming Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-permainan-konsol/"},{"childCategoryName":"Permainan Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-game-konsol/"},{"childCategoryName":"Pengontrol Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-pengontrol-game-konsol/"},{"childCategoryName":"Konsol Pelindung Penutup","childCategoryUrl":"https://www.lazada.co.id/shop-konsolpelindung-penutup/"},{"childCategoryName":"Aksesoris Game Konsol","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-game-konsol/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_1_6">
                                                            <a href="https://www.lazada.co.id/beli-gadget/">
                                                                <span>Gadget</span>
                                                            </a>
                                                            <script type="text" class="J_data_0_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Rokok Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-rokok-elektrik/"},{"childCategoryName":"Drone","childCategoryUrl":"https://www.lazada.co.id/jual-kamera-drone/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/beli-media-player/"},{"childCategoryName":"Walkie-Talkie","childCategoryUrl":"https://www.lazada.co.id/jual-walkie-talkie/"}]
                                </script>
                                                        </li>
                                                        <li class="sub-item-remove-arrow" data-cate="cate_1_7">
                                                            <a href="https://www.lazada.co.id/beli-tablet-2">
                                                                <span>Tablet</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No2"
                                                        data-spm="cate_2">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_1">
                                                            <a href="https://www.lazada.co.id/beli-aksesori-handphone">
                                                                <span>Aksesoris Handphone</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Powerbank","childCategoryUrl":"https://www.lazada.co.id/beli-power-bank/"},{"childCategoryName":"Kabel Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-kabel-handphone/"},{"childCategoryName":"Charger Handphone","childCategoryUrl":"https://www.lazada.co.id/jual-charger-kabel/"},{"childCategoryName":"Casing Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-handphone/"},{"childCategoryName":"Pelindung Layar","childCategoryUrl":"https://www.lazada.co.id/jual-pelindung-layar/"},{"childCategoryName":"Tongsis","childCategoryUrl":"https://www.lazada.co.id/jual-tongsis/"},{"childCategoryName":"Phone Holder","childCategoryUrl":"https://www.lazada.co.id/jual-dudukan-mobil/"},{"childCategoryName":"Baterai Handphone","childCategoryUrl":"https://www.lazada.co.id/beli-baterai-handphone/"},{"childCategoryName":"Peralatan & Suku Cadang","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-handphone/"},{"childCategoryName":"Aksesoris Handphone Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-ponsel/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_2">
                                                            <a href="https://www.lazada.co.id/beli-aksesori-komputer/">
                                                                <span>Aksesoris Komputer</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mouse","childCategoryUrl":"https://www.lazada.co.id/beli-mouse/"},{"childCategoryName":"Keyboard Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard/"},{"childCategoryName":"Monitor","childCategoryUrl":"https://www.lazada.co.id/beli-monitor/"},{"childCategoryName":"Adaptor Jaringan","childCategoryUrl":"https://www.lazada.co.id/adaptor-jaringan/"},{"childCategoryName":"Audio PC","childCategoryUrl":"https://www.lazada.co.id/beli-audio-pc/"},{"childCategoryName":"Adaptor & Kabel","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-kabel/"},{"childCategoryName":"Adaptor Baterai Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-adaptor-baterai-komputer/"},{"childCategoryName":"Mousepad","childCategoryUrl":"https://www.lazada.co.id/beli-mousepad/"},{"childCategoryName":"Cooling Pads","childCategoryUrl":"https://www.lazada.co.id/beli-alas-pendingin/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_3">
                                                            <a href="https://www.lazada.co.id/shop-audio/">
                                                                <span>Audio</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Headphone & Headset","childCategoryUrl":"https://www.lazada.co.id/beli-headphone-dan-headset/"},{"childCategoryName":"Speaker Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"},{"childCategoryName":"Speaker Smart","childCategoryUrl":"https://www.lazada.co.id/beli-speaker-smart/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_4">
                                                            <a href="https://www.lazada.co.id/shop-perangkat-pintar/">
                                                                <span>Aksesoris Berteknologi</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-smartwatch/"},{"childCategoryName":"Aksesoris Smartwatch","childCategoryUrl":"https://www.lazada.co.id/shop-tali-smartwatch/"},{"childCategoryName":"Activity Tracker","childCategoryUrl":"https://www.lazada.co.id/beli-tracker-fitness-aktivitas/"},{"childCategoryName":"Aksesoris Fitness Tracker","childCategoryUrl":"https://www.lazada.co.id/jual-strap-tracker-aktivitas/"},{"childCategoryName":"Virtual Reality","childCategoryUrl":"https://www.lazada.co.id/jual-virtual-reality/"},{"childCategoryName":"Kendali Gerakan","childCategoryUrl":"https://www.lazada.co.id/jual-kendali-gerakan/"},{"childCategoryName":"Kacamata Pintar","childCategoryUrl":"https://www.lazada.co.id/beli-smart-glasses/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_5">
                                                            <a href="https://www.lazada.co.id/beli-aksesoris-2/">
                                                                <span>Aksesoris Kamera</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tripod & Monopod","childCategoryUrl":"https://www.lazada.co.id/beli-tripod-monopod/"},{"childCategoryName":"Kartu Memori","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-memori/"},{"childCategoryName":"Lensa Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-lensa-kamera/"},{"childCategoryName":"Flash","childCategoryUrl":"https://www.lazada.co.id/beli-flash/"},{"childCategoryName":"Sarung, Pelindung & Tas Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-pelindung-tas-kamera/"},{"childCategoryName":"Charger Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-charger-baterai/"},{"childCategoryName":"Baterai Kamera","childCategoryUrl":"https://www.lazada.co.id/beli-baterai/"},{"childCategoryName":"Aksesoris Kamera Aksi","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-kamera-aksi/"},{"childCategoryName":"Aksesoris Kamera Instan","childCategoryUrl":"https://www.lazada.co.id/jual-film-kamera-instan/"},{"childCategoryName":"Perlengkapan Lighting & Studio","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-lighting-studio/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_6">
                                                            <a href="https://www.lazada.co.id/shop-penyimpanan-data/">
                                                                <span>Penyimpanan Data</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Flash Drive","childCategoryUrl":"https://www.lazada.co.id/jual-flash-drives/"},{"childCategoryName":"OTG Drive","childCategoryUrl":"https://www.lazada.co.id/jual-otg-drives/"},{"childCategoryName":"Harddisk Eksternal","childCategoryUrl":"https://www.lazada.co.id/beli-harddisk-eksternal/"},{"childCategoryName":"Hard Drive Internal","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-internal/"},{"childCategoryName":"Internal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-solid-state-drive/"},{"childCategoryName":"Eksternal SSD","childCategoryUrl":"https://www.lazada.co.id/beli-external-solid-state-drive/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_7">
                                                            <a href="https://www.lazada.co.id/beli-printers/">
                                                                <span>Printer</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Printer","childCategoryUrl":"https://www.lazada.co.id/beli-printers/"},{"childCategoryName":"Tinta Printer","childCategoryUrl":"https://www.lazada.co.id/tinta-printer/"},{"childCategoryName":"Printer 3D","childCategoryUrl":"https://www.lazada.co.id/pencetak-3d/"},{"childCategoryName":"Printer POS & Thermal","childCategoryUrl":"https://www.lazada.co.id/beli-printer-stand/"},{"childCategoryName":"Mesin Faks","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-fax/"},{"childCategoryName":"Mesin Cutting Sticker","childCategoryUrl":"https://www.lazada.co.id/printer-pemotong/"},{"childCategoryName":"Memori Printer","childCategoryUrl":"https://www.lazada.co.id/modul-memori-printer/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_8">
                                                            <a href="https://www.lazada.co.id/beli-aksesori-handphone/">
                                                                <span>Aksesoris Tablet</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Casing Tablet","childCategoryUrl":"https://www.lazada.co.id/jual-casing-cover-tablet/"},{"childCategoryName":"Keyboard Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-keyboard-tablet/"},{"childCategoryName":"Pen Stylus Tablet","childCategoryUrl":"https://www.lazada.co.id/beli-pen-stylus-tablet/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_2_9">
                                                            <a href="https://www.lazada.co.id/beli-komponen-komputer/">
                                                                <span>Komponen Komputer</span>
                                                            </a>
                                                            <script type="text" class="J_data_1_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"RAM","childCategoryUrl":"https://www.lazada.co.id/beli-ram/"},{"childCategoryName":"Motherboard","childCategoryUrl":"https://www.lazada.co.id/beli-motherboard/"},{"childCategoryName":"Prosesor","childCategoryUrl":"https://www.lazada.co.id/beli-prosesor/"},{"childCategoryName":"Kartu Grafis","childCategoryUrl":"https://www.lazada.co.id/beli-kartu-grafis/"},{"childCategoryName":"Casing Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-casing-cpu/"},{"childCategoryName":"Power Supply Unit","childCategoryUrl":"https://www.lazada.co.id/beli-power-supply-unit/"},{"childCategoryName":"Soundcard","childCategoryUrl":"https://www.lazada.co.id/soundcard/"},{"childCategoryName":"Front Panel","childCategoryUrl":"https://www.lazada.co.id/beli-hard-drive-optikal/"},{"childCategoryName":"Water Cooling System","childCategoryUrl":"https://www.lazada.co.id/beli-water-cooling-system/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No3"
                                                        data-spm="cate_3">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_1">
                                                            <a href="https://www.lazada.co.id/pakaian-wanita/">
                                                                <span>Pakaian Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_0">
                                  [{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-wanita/"},{"childCategoryName":"Dress","childCategoryUrl":"https://www.lazada.co.id/gaun-wanita/"},{"childCategoryName":"Atasan","childCategoryUrl":"https://www.lazada.co.id/kaos-atasan-wanita/"},{"childCategoryName":"Sweater & Cardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-wanita/"},{"childCategoryName":"Celana & Legging","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-wanita/"},{"childCategoryName":"Rok","childCategoryUrl":"https://www.lazada.co.id/rok-wanita/"},{"childCategoryName":"Jaket & Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-wanita/"},{"childCategoryName":"Kaus Kaki & Celana Ketat","childCategoryUrl":"https://www.lazada.co.id/kaos-kaki-celana-tights-wanita/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-wanita/"},{"childCategoryName":"Jumpsuit & Playsuit","childCategoryUrl":"https://www.lazada.co.id/overalls-jumpsuit-wanita/"},{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/hoodie-sweatshirt-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_2">
                                                            <a href="https://www.lazada.co.id/baju-muslim-wanita/">
                                                                <span>Baju Muslim</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_1">
                                  [{"childCategoryName":"Perlengkapan Shalat","childCategoryUrl":"https://www.lazada.co.id/baju-muslim-wanita/"},{"childCategoryName":"Hijab","childCategoryUrl":"https://www.lazada.co.id/hijab/"},{"childCategoryName":"Atasan Muslimah","childCategoryUrl":"https://www.lazada.co.id/atasan-muslimah-wanita/"},{"childCategoryName":"Baju Muslim & Jumpsuit","childCategoryUrl":"https://www.lazada.co.id/dress-muslimah/"},{"childCategoryName":"Bawahan Muslim","childCategoryUrl":"https://www.lazada.co.id/bawahan-muslimah/"},{"childCategoryName":"Luaran Muslim","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-kardigan-wanita-muslim/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-wanita/"},{"childCategoryName":"Baju Renang Muslim","childCategoryUrl":"https://www.lazada.co.id/jual-baju-renang-muslim-wanita/"},{"childCategoryName":"Baju Kurung","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kurung-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_3">
                                                            <a href="https://www.lazada.co.id/lingerie-baju-tidur/">
                                                                <span>Lingerie, Baju Tidur &amp; Santai</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_2">
                                  [{"childCategoryName":"Bra","childCategoryUrl":"https://www.lazada.co.id/bra-wanita/"},{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-wanita/"},{"childCategoryName":"Shapewear","childCategoryUrl":"https://www.lazada.co.id/shapewear-baju-pembentuk-tubuh-wanita/"},{"childCategoryName":"Baju Tidur & Santai","childCategoryUrl":"https://www.lazada.co.id/bathrobe-baju-mandi-wanita/"},{"childCategoryName":"Jubah Tidur","childCategoryUrl":"https://www.lazada.co.id/jual-jubah-tidur-wanita/"},{"childCategoryName":"Set Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-set-lingerie/"},{"childCategoryName":"Kamisol & Slips","childCategoryUrl":"https://www.lazada.co.id/jual-kamisol-slips-wanita/"},{"childCategoryName":"Bodysuit","childCategoryUrl":"https://www.lazada.co.id/jual-bodysuit-wanita/"},{"childCategoryName":"Aksesori Lingerie","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-lingerie-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_4">
                                                            <a href="https://www.lazada.co.id/sepatu-wanita/">
                                                                <span>Sepatu Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_3">
                                  [{"childCategoryName":"Sepatu Flat","childCategoryUrl":"https://www.lazada.co.id/flat-shoes/"},{"childCategoryName":"Sepatu Hak Tinggi","childCategoryUrl":"https://www.lazada.co.id/heels/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers/"},{"childCategoryName":"Wedges","childCategoryUrl":"https://www.lazada.co.id/wedges/"},{"childCategoryName":"Sepatu Boot","childCategoryUrl":"https://www.lazada.co.id/boots-wanita/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-wanita/"},{"childCategoryName":"Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-wanita/"},{"childCategoryName":"Sandal & Flip Flop","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_5">
                                                            <a href="https://www.lazada.co.id/aksesoris-wanita/">
                                                                <span>Aksesoris</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_4">
                                  [{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-wanita/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-wanita/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-wanita/"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-rambut/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/scarf-wanita/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-wanita/"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-women-fabricmask/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_6">
                                                            <a href="https://www.lazada.co.id/tas-wanita/">
                                                                <span>Tas Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_5">
                                  [{"childCategoryName":"Tas Ransel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-punggung-wanita/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-tas-wanita/"},{"childCategoryName":"Tas Pinggang Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-pinggang-wanita/"},{"childCategoryName":"Dompet Kartu Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-wanita/"},{"childCategoryName":"Clutches","childCategoryUrl":"https://www.lazada.co.id/tas-genggam-wanita/"},{"childCategoryName":"Dompet Koin & Pouch Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-wanita/"},{"childCategoryName":"Tas Selempang & Bahu Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-selempang-badan-wanita/"},{"childCategoryName":"Tas Luxury Wanita","childCategoryUrl":"https://www.lazada.co.id/shop-tas-mewah-wanita/"},{"childCategoryName":"Top-handle Bag","childCategoryUrl":"https://www.lazada.co.id/top-handle-bag/"},{"childCategoryName":"Tote Bag Wanita","childCategoryUrl":"https://www.lazada.co.id/tote-bag-wanita/"},{"childCategoryName":"Dompet Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_7">
                                                            <a href="https://www.lazada.co.id/beli-perhiasan-wanita/">
                                                                <span>Perhiasan Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_6">
                                  [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-wanita-logam-berharga/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_3_8">
                                                            <a href="https://www.lazada.co.id/beli-jam-tangan-wanita/">
                                                                <span>Jam Tangan Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_2_7">
                                  [{"childCategoryName":"Aksesori","childCategoryUrl":"https://www.lazada.co.id/shop-aksesori-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Kasual Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-wanita/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-wanita/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-wanita/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-pre-owned-jam-tangan-wanita/"},{"childCategoryName":"Jam Tangan Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-wanita/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No4"
                                                        data-spm="cate_4">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_1">
                                                            <a href="https://www.lazada.co.id/pakaian-pria/">
                                                                <span>Pakaian Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_0">
                                  [{"childCategoryName":"Hoodie & Sweatshirt","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-pria/"},{"childCategoryName":"Jaket dan Mantel","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-mantel-pria/"},{"childCategoryName":"Jeans","childCategoryUrl":"https://www.lazada.co.id/jeans-pria/"},{"childCategoryName":"Celana","childCategoryUrl":"https://www.lazada.co.id/celana-pendek-dan-panjang-pria/"},{"childCategoryName":"Polo Shirt","childCategoryUrl":"https://www.lazada.co.id/polo-shirt-pria/"},{"childCategoryName":"Kemeja","childCategoryUrl":"https://www.lazada.co.id/kemeja-pria/"},{"childCategoryName":"Celana Pendek","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-pria/"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/jual-kaus-kaki-pria/"},{"childCategoryName":"Jas & Blazer","childCategoryUrl":"https://www.lazada.co.id/jas-pria/"},{"childCategoryName":"Sweater dan Kardigan","childCategoryUrl":"https://www.lazada.co.id/sweater-dan-cardigan-pria/"},{"childCategoryName":"Baju Renang","childCategoryUrl":"https://www.lazada.co.id/baju-renang-pria/"},{"childCategoryName":"T-Shirt & Kaos Dalam","childCategoryUrl":"https://www.lazada.co.id/atasan-kasual-kaos-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_2">
                                                            <a href="https://www.lazada.co.id/baju-muslim-pria/">
                                                                <span>Baju Muslim</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_1">
                                  [{"childCategoryName":"Jubah Muslim","childCategoryUrl":"https://www.lazada.co.id/jubah-muslim-pria/"},{"childCategoryName":"Aksesoris Muslim","childCategoryUrl":"https://www.lazada.co.id/aksesoris-muslim-pria/"},{"childCategoryName":"Baju Muslimin","childCategoryUrl":"https://www.lazada.co.id/cekak-musang-pria/"},{"childCategoryName":"Kopiah","childCategoryUrl":"https://www.lazada.co.id/shop-kopiah/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_3">
                                                            <a
                                                                href="https://www.lazada.co.id/pakaian-dalam-dan-kaos-kaki-pria/">
                                                                <span>Pakaian Dalam</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_2">
                                  [{"childCategoryName":"Celana Dalam","childCategoryUrl":"https://www.lazada.co.id/celana-dalam-pria/"},{"childCategoryName":"Pakaian Tidur","childCategoryUrl":"https://www.lazada.co.id/baju-tidur-pria/"},{"childCategoryName":"Boxer","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-boxer-pria/"},{"childCategoryName":"Thongs  & Lainnya","childCategoryUrl":"https://www.lazada.co.id/pakaian-dalam-pria-thongs-lainnya/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_4">
                                                            <a href="https://www.lazada.co.id/sepatu-pria/">
                                                                <span>Sepatu Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_3">
                                  [{"childCategoryName":"Boots","childCategoryUrl":"https://www.lazada.co.id/boots-pria/"},{"childCategoryName":"Flip Flop & Sandal","childCategoryUrl":"https://www.lazada.co.id/sandal-jepit-pria/"},{"childCategoryName":"Sepatu Formal","childCategoryUrl":"https://www.lazada.co.id/sepatu-pantofel/"},{"childCategoryName":"Aksesoris Sepatu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepatu-pria/"},{"childCategoryName":"Slip-On & Loafer","childCategoryUrl":"https://www.lazada.co.id/jual-slip-on-loafer-pria/"},{"childCategoryName":"Sneakers","childCategoryUrl":"https://www.lazada.co.id/sneakers-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_5">
                                                            <a href="https://www.lazada.co.id/aksesoris-pria/">
                                                                <span>Aksesoris</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_4">
                                  [{"childCategoryName":"Dasi","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi/"},{"childCategoryName":"Aksesoris Dasi Kupu-kupu","childCategoryUrl":"https://www.lazada.co.id/aksesoris-dasi-kupu-kupu/"},{"childCategoryName":"Scarf","childCategoryUrl":"https://www.lazada.co.id/syal-pria/"},{"childCategoryName":"Payung","childCategoryUrl":"https://www.lazada.co.id/payung-pria/"},{"childCategoryName":"Ikat Pinggang","childCategoryUrl":"https://www.lazada.co.id/ikat-pinggang-pria/"},{"childCategoryName":"Topi","childCategoryUrl":"https://www.lazada.co.id/topi-pria/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-pria/"},{"childCategoryName":"Braces","childCategoryUrl":"https://www.lazada.co.id/suspender-pria/"},{"childCategoryName":"Face Mask","childCategoryUrl":"https://www.lazada.co.id/shop-masker-wajah-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_6">
                                                            <a href="https://www.lazada.co.id/tas-pria/">
                                                                <span>Tas Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_5">
                                  [{"childCategoryName":"Tas Ransel Pria","childCategoryUrl":"https://www.lazada.co.id/shop-ransel-pria/"},{"childCategoryName":"Tas Laptop Jinjing","childCategoryUrl":"https://www.lazada.co.id/tas-kerja-pria/"},{"childCategoryName":"Dompet Kartu Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-kartu-pria/"},{"childCategoryName":"Dompet Koin & Pouch Pria","childCategoryUrl":"https://www.lazada.co.id/jual-dompet-koin-pouch-pria/"},{"childCategoryName":"Tas Selempang Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-selempang-pria/"},{"childCategoryName":"Tas Laptop Bahu & Messenger","childCategoryUrl":"https://www.lazada.co.id/tas-messenger-pria/"},{"childCategoryName":"Tote Bag Pria","childCategoryUrl":"https://www.lazada.co.id/jual-tas-tote-pria/"},{"childCategoryName":"Tas Pinggang","childCategoryUrl":"https://www.lazada.co.id/beli-tas-pinggang/"},{"childCategoryName":"Dompet Pria","childCategoryUrl":"https://www.lazada.co.id/shop-dompet-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_7">
                                                            <a href="https://www.lazada.co.id/beli-perhiasan-pria/">
                                                                <span>Perhiasan Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_6">
                                  [{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-pria-perhiasan-fashion/"},{"childCategoryName":"Logam Berharga","childCategoryUrl":"https://www.lazada.co.id/beli-pria-logam-berharga/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_4_8">
                                                            <a href="https://www.lazada.co.id/beli-jam-tangan-pria/">
                                                                <span>Jam Tangan Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_3_7">
                                  [{"childCategoryName":"Aksesoris Jam Tangan Pria","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-jam-tangan-pria/"},{"childCategoryName":"Jam Tangan Kasual Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-kasual-pria/"},{"childCategoryName":"Formal","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-formal-pria/"},{"childCategoryName":"Mewah","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-mewah-pria/"},{"childCategoryName":"Pra Dimiliki","childCategoryUrl":"https://www.lazada.co.id/shop-jam-tangan-pre-owned-pria/"},{"childCategoryName":"Jam Tangan Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-olahraga-pria/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No5"
                                                        data-spm="cate_5">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_1">
                                                            <a
                                                                href="https://www.lazada.co.id/fashion-pakaian-anak-laki-laki">
                                                                <span>Pakaian Anak Laki-laki</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_0">
                                  [{"childCategoryName":"Topi Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/topi-anak-laki-laki"},{"childCategoryName":"Hoodie Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki"},{"childCategoryName":"Jaket & Mantel Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-laki-laki"},{"childCategoryName":"Celana Pendek Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/beli-celana-pendek-pria"},{"childCategoryName":"Pakaian Tidur Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-laki-laki"},{"childCategoryName":"Sweater & Cardigan Anak","childCategoryUrl":"https://www.lazada.co.id/sweater-cardigan-anak-laki-laki"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-pakaian-hujan-anak-laki-laki"},{"childCategoryName":"Pakaian dalam","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-dalam"},{"childCategoryName":"Celana & Jeans Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-laki-laki"},{"childCategoryName":"Kaus Kaki","childCategoryUrl":"https://www.lazada.co.id/shop-kaus-kaki"},{"childCategoryName":"Baju & Atasan Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-laki-laki"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_2">
                                                            <a href="https://www.lazada.co.id/pakaian-anak-perempuan">
                                                                <span>Pakaian Anak Perempuan</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_1">
                                  [{"childCategoryName":"Bawahan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/celana-jeans-anak-perempuan"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-dress-anak-perempuan"},{"childCategoryName":"Scarf Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/scarf-sarung-tangan-anak-perempuan"},{"childCategoryName":"Aksesori Rambut Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-aksesori-rambut-anak-perempuan"},{"childCategoryName":"Topi Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/topi-anak-perempuan"},{"childCategoryName":"Hoodie Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-hoodie-anak-laki-laki-2"},{"childCategoryName":"Jaket & Mantel Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/jaket-mantel-anak-perempuan"},{"childCategoryName":"Baju & Atasan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/baju-atasan-anak-perempuan"},{"childCategoryName":"Payung & Pakaian Hujan Anak","childCategoryUrl":"https://www.lazada.co.id/payung-jas-hujan-anak-perempuan"},{"childCategoryName":"Pakaian Dalam Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/pakaian-tidur-anak-perempuan"},{"childCategoryName":"Jumpsuits & Overalls","childCategoryUrl":"https://www.lazada.co.id/shop-girls-jumpsuits-overalls"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_3">
                                                            <a href="https://www.lazada.co.id/shop-boy's-muslim-wear">
                                                                <span>Pakaian Anak Muslim Laki-Laki</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_2">
                                  [{"childCategoryName":"Kemeja Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-shirt"},{"childCategoryName":"Celana Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-pants"},{"childCategoryName":"Aksesoris Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/shop-boy's-muslimin-accessories"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_4">
                                                            <a href="https://www.lazada.co.id/shop-girls-muslim-wear">
                                                                <span>Pakaian Anak Muslim Perempuan</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_3">
                                  [{"childCategoryName":"Hijab Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-hijabs/"},{"childCategoryName":"Dress Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/shop-girls-muslim-wear-dresses-jumpsuits/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_5">
                                                            <a
                                                                href="https://www.lazada.co.id/fashion-sepatu-anak-laki-laki">
                                                                <span>Sepatu Anak Laki-laki</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_4">
                                  [{"childCategoryName":"Sepatu Boot Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-laki-laki"},{"childCategoryName":"Sandal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-laki-laki"},{"childCategoryName":"Sepatu Formal Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-laki-laki"},{"childCategoryName":"Aksesoris Sepatu Anak Laki","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-laki-laki"},{"childCategoryName":"Slip-n Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-slip-on-anak-laki-laki"},{"childCategoryName":"Sepatu Sneaker Anak Laki-laki","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneaker-anak-laki-laki"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_6">
                                                            <a
                                                                href="https://www.lazada.co.id/fashion-sepatu-anak-perempuan">
                                                                <span>Sepatu Anak Perempuan</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_5">
                                  [{"childCategoryName":"Sepatu Flat Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-balerina-anak-perempuan"},{"childCategoryName":"Sepatu Boot Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-boot-anak-perempuan"},{"childCategoryName":"Sandal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/fashion-sandal-jepit-anak-perempuan"},{"childCategoryName":"Sepatu Formal Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-lace-ups-anak-perempuan"},{"childCategoryName":"Aksesoris Sepatu Anak","childCategoryUrl":"https://www.lazada.co.id/fashion-aksesoris-sepatu-anak-perempuan"},{"childCategoryName":"Sepatu Sneaker Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/sepatu-sneakers-anak-perempuan"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_7">
                                                            <a href="https://www.lazada.co.id/beli-tas-anak-tl/">
                                                                <span>Tas Anak</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_6">
                                  [{"childCategoryName":"Tas Bahu Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-bahu-anak/"},{"childCategoryName":"Ransel Troli Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-troli-anak/"},{"childCategoryName":"Ransel Anak","childCategoryUrl":"https://www.lazada.co.id/beli-ransel-anak/"},{"childCategoryName":"Aksesoris Tas","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-anak/"},{"childCategoryName":"Koper","childCategoryUrl":"https://www.lazada.co.id/koper-anak-2/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_8">
                                                            <a href="https://www.lazada.co.id/beli-perhiasan-anak/">
                                                                <span>Perhiasan Anak</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_7">
                                  [{"childCategoryName":"Emas Murni","childCategoryUrl":"https://www.lazada.co.id/beli-anak-emas-murni/"},{"childCategoryName":"Perhiasan Fashion","childCategoryUrl":"https://www.lazada.co.id/beli-anak-perhiasan-fashion/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_5_9">
                                                            <a href="https://www.lazada.co.id/beli-jam-tangan-anak/">
                                                                <span>Jam Tangan Anak</span>
                                                            </a>
                                                            <script type="text" class="J_data_4_8">
                                  [{"childCategoryName":"Jam Tangan Anak Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-laki-laki/"},{"childCategoryName":"Jam Tangan Anak Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-jam-tangan-anak-perempuan/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No6"
                                                        data-spm="cate_6">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_1">
                                                            <a href="https://www.lazada.co.id/beli-perawatan-kulit/">
                                                                <span>Perawatan Kulit</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Serum Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-serum-perawatan-wajah"},{"childCategoryName":"Dermacare","childCategoryUrl":"https://www.lazada.co.id/beli-dermacare"},{"childCategoryName":"Pelembab Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-pelembab-wajah"},{"childCategoryName":"Pembersih Wajah","childCategoryUrl":"https://www.lazada.co.id/pembersih-wajah"},{"childCategoryName":"Masker Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-masker-wajah"},{"childCategoryName":"Toner","childCategoryUrl":"https://www.lazada.co.id/beli-toner"},{"childCategoryName":"Tabir Surya","childCategoryUrl":"https://www.lazada.co.id/beli-tabir-surya-aftersun"},{"childCategoryName":"Set Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-set-perawatan-wajah"},{"childCategoryName":"Pelembab & Perawatan Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-lip-balm-perawatan-bibir"},{"childCategoryName":"Face Scrubs & Exfoliators","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-pengelupas-wajah"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-mata"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_2">
                                                            <a href="https://www.lazada.co.id/beli-makeup/">
                                                                <span>Makeup</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makeup Bibir","childCategoryUrl":"https://www.lazada.co.id/beli-make-up-bibir"},{"childCategoryName":"Lipstik","childCategoryUrl":"https://www.lazada.co.id/beli-lipstik"},{"childCategoryName":"Makeup Wajah","childCategoryUrl":"https://www.lazada.co.id/makeup-wajah"},{"childCategoryName":"Foundation","childCategoryUrl":"https://www.lazada.co.id/beli-foundation"},{"childCategoryName":"Makeup Mata","childCategoryUrl":"https://www.lazada.co.id/beli-mata"},{"childCategoryName":"Maskara","childCategoryUrl":"https://www.lazada.co.id/beli-maskara"},{"childCategoryName":"Aksesoris Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-makeup"},{"childCategoryName":"Set Kuas & Kuas Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-kuas-aplikator"},{"childCategoryName":"Perawatan Kuku","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kuku"},{"childCategoryName":"Set Makeup & Palet","childCategoryUrl":"https://www.lazada.co.id/shop-palet-set-makeup"},{"childCategoryName":"Pembersih Makeup","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-makeup"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_3">
                                                            <a href="https://www.lazada.co.id/beli-perawatan-rambut/">
                                                                <span>Perawatan Rambut</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Shampo","childCategoryUrl":"https://www.lazada.co.id/beli-sampo"},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/perawatan-intensif"},{"childCategoryName":"Aksesoris Rambut","childCategoryUrl":"https://www.lazada.co.id/aksesoris-perawatan-rambut"},{"childCategoryName":"Styling Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-styling-rambut"},{"childCategoryName":"Pewarna Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-cat-rambut"},{"childCategoryName":"Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-kondisioner"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-perawatan-rambut"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_4">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-perlengkapan-mandi-tubuh/">
                                                                <span>Perawatan Tubuh</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Losion Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-losion-krim-tubuh"},{"childCategoryName":"Sabun Cair","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Cair"},{"childCategoryName":"Scrub Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-scrub-tubuh"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/perawatan-payudara"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-Perawatan-Tubuh"},{"childCategoryName":"Perawatan Kaki","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kaki"},{"childCategoryName":"Sabun Batang","childCategoryUrl":"https://www.lazada.co.id/shop-Sabun-Batang"},{"childCategoryName":"Aksesoris Tubuh","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-perlengkapan-mandi-tubuh"},{"childCategoryName":"Paket Hadiah","childCategoryUrl":"https://www.lazada.co.id/beli-paket-hadiah-bingkisan-alat-mandi-tubuh"},{"childCategoryName":"Penghilang Bulu","childCategoryUrl":"https://www.lazada.co.id/beli-perontok-rambut"},{"childCategoryName":"Sabun Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-tangan"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_5">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-perawatan-kesehatan-pribadi/">
                                                                <span>Perawatan Diri</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Mulut","childCategoryUrl":"https://www.lazada.co.id/perawatan-mulut"},{"childCategoryName":"Pembersih Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-pembersih-wanita"},{"childCategoryName":"Keamanan Diri","childCategoryUrl":"https://www.lazada.co.id/beli-keamanan-diri"},{"childCategoryName":"Beli Deodoran","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran"},{"childCategoryName":"Perawatan Mata","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-optik-pribadi"},{"childCategoryName":"Obat Anti Serangga","childCategoryUrl":"https://www.lazada.co.id/shop-Obat-Anti-Serangga"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_6">
                                                            <a href="https://www.lazada.co.id/beli-parfum/">
                                                                <span>Parfum</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pria","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-pria"},{"childCategoryName":"Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-wanita"},{"childCategoryName":"Unisex","childCategoryUrl":"https://www.lazada.co.id/beli-parfum-unisex"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_7">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-alat-kesehatan-kecantikan/">
                                                                <span>Alat Kecantikan</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Alat Pelangsing & Pijat","childCategoryUrl":"https://www.lazada.co.id/alat-pelangsing-dan-pemijat-elektrik"},{"childCategoryName":"Sauna Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-sauna-portabel"},{"childCategoryName":"Foot Relief","childCategoryUrl":"https://www.lazada.co.id/beli-foot-relief"},{"childCategoryName":"Alat Cukur & Trimmer","childCategoryUrl":"https://www.lazada.co.id/aksesoris-alat-cukur-dan-trimmer"},{"childCategoryName":"Alat Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-wajah"},{"childCategoryName":"Alat Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/shop-alat-perawatan-kulit-tubuh"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_8">
                                                            <a href="https://www.lazada.co.id/beli-suplemen-makanan/">
                                                                <span>Suplemen Makanan</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengatur Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-pengatur-berat-badan"},{"childCategoryName":"Pembakar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-pembakar-lemak"},{"childCategoryName":"Minuman Pelangsing","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-pelangsing"},{"childCategoryName":"Suplemen Kecantikan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-kecantikan"},{"childCategoryName":"Suplemen Pemutih","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-pemutih"},{"childCategoryName":"Multivitamin","childCategoryUrl":"https://www.lazada.co.id/multivitamin/"},{"childCategoryName":"Obat Tradisional","childCategoryUrl":"https://www.lazada.co.id/beli-obat-obatan-tradisional"},{"childCategoryName":"Sistem Imun","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-imun"},{"childCategoryName":"Nutrisi Olahraga","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-olahraga"},{"childCategoryName":"Penambah Berat Badan","childCategoryUrl":"https://www.lazada.co.id/beli-suplemen-penambah-berat-badan"},{"childCategoryName":"Protein","childCategoryUrl":"https://www.lazada.co.id/beli-protein"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_9">
                                                            <a href="https://www.lazada.co.id/beli-alat-medis/">
                                                                <span>Alat Medis</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Aksesoris Kesehatan","childCategoryUrl":"https://www.lazada.co.id/aksesoris-kesehatan"},{"childCategoryName":"Alat Tes Kesehatan","childCategoryUrl":"https://www.lazada.co.id/beli-alat-tes-kesehatan"},{"childCategoryName":"Obat-Obatan","childCategoryUrl":"https://www.lazada.co.id/shop-over-the-counter-medicine/"},{"childCategoryName":"Perban & Perlengkapan Cedera","childCategoryUrl":"https://www.lazada.co.id/perban-alat-terapi-cedera"},{"childCategoryName":"Timbangan & Alat Kadar Lemak","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-alat-ukur-kadar-lemak"},{"childCategoryName":"P3K","childCategoryUrl":"https://www.lazada.co.id/beli-p3k"},{"childCategoryName":"Kursi Roda","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-roda"},{"childCategoryName":"Salep & Krim","childCategoryUrl":"https://www.lazada.co.id/shop-salep-dan-krim"},{"childCategoryName":"Alat Inhalasi & Nebulizer","childCategoryUrl":"https://www.lazada.co.id/beli-alat-inhalasi-nebulizer"},{"childCategoryName":"Alat Tes Medis","childCategoryUrl":"https://www.lazada.co.id/tes-medis"},{"childCategoryName":"Stetoskop","childCategoryUrl":"https://www.lazada.co.id/beli-stetoskop"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_10">
                                                            <a
                                                                href="https://www.lazada.co.id/jual-perlengkapan-kesehatan-seksual/">
                                                                <span>Sexual Wellness</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_9">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kondom","childCategoryUrl":"https://www.lazada.co.id/beli-kondom"},{"childCategoryName":"Pelumas","childCategoryUrl":"https://www.lazada.co.id/beli-pelumas"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_11">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-perawatan-tubuh-kesehatan-pria/">
                                                                <span>Perawatan Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_10">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-rambut-pria"},{"childCategoryName":"Perawatan Wajah","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria"},{"childCategoryName":"Alat Cukur Pria","childCategoryUrl":"https://www.lazada.co.id/beli-alat-cukur-pria"},{"childCategoryName":"Perawatan Tubuh","childCategoryUrl":"https://www.lazada.co.id/perawatan-tubuh"},{"childCategoryName":"Deodoran Pria","childCategoryUrl":"https://www.lazada.co.id/beli-deodoran-pria"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_6_12">
                                                            <a href="https://www.lazada.co.id/kesehatan-manula/">
                                                                <span>Popok Dewasa</span>
                                                            </a>
                                                            <script type="text" class="J_data_5_11">
                                  [{"childCategoryName":"Popok Dewasa","childCategoryUrl":"https://www.lazada.co.id/kesehatan-manula/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No7"
                                                        data-spm="cate_7">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_1">
                                                            <a
                                                                href="https://www.lazada.co.id/jual-perlengkapan-bayi-balita/">
                                                                <span>Ibu &amp; Anak</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_0">
                                  [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_2">
                                                            <a href="https://www.lazada.co.id/beli-popok-pispot-bb/">
                                                                <span>Popok Sekali Pakai</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_1">
                                  [{"childCategoryName":"Popok Sekali Pakai","childCategoryUrl":"https://www.lazada.co.id/beli-popok-sekali-pakai/"},{"childCategoryName":"Popok Kain & Aksesori","childCategoryUrl":"https://www.lazada.co.id/beli-popok-kain/"},{"childCategoryName":"Lap Bayi & Penyangga","childCategoryUrl":"https://www.lazada.co.id/beli-lap-bayi-penyangga/"},{"childCategoryName":"Perawatan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-popok/"},{"childCategoryName":"Krim & Salep Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-krim-salep-bayi/"},{"childCategoryName":"Tas Perlengkapan Popok","childCategoryUrl":"https://www.lazada.co.id/beli-tas-popok-tb/"},{"childCategoryName":"Meja Ganti Popok","childCategoryUrl":"https://www.lazada.co.id/beli-meja-ganti/"},{"childCategoryName":"Cover Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-bantalan/"},{"childCategoryName":"Lapisan Penyerap & Liner Popok Kain","childCategoryUrl":"https://www.lazada.co.id/beli-lapisan-penyerap-liner-popok-kain/"},{"childCategoryName":"Potty Training","childCategoryUrl":"https://www.lazada.co.id/beli-potty-training/"},{"childCategoryName":"Bangku Langkah","childCategoryUrl":"https://www.lazada.co.id/beli-bangku-langkah/"},{"childCategoryName":"Detergent Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-detergen-popok-kain/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_3">
                                                            <a href="https://www.lazada.co.id/beli-susu-formula/">
                                                                <span>Makanan Bayi &amp; Balita</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_2">
                                  [{"childCategoryName":"Bayi (0 - 6 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-0-6-bulan/"},{"childCategoryName":"Bayi (6 - 12 bulan)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-bayi-6-12-bulan/"},{"childCategoryName":"Susu Batita (1- dibawah 3 tahun)","childCategoryUrl":"https://www.lazada.co.id/jual-susu-batita-1-3-tahun/"},{"childCategoryName":"Susu Pertumbuhan (>3Tahun)","childCategoryUrl":"https://www.lazada.co.id/beli-susu-pertumbuhan-1-3-tahun/"},{"childCategoryName":"Nutrisi Khusus Anak","childCategoryUrl":"https://www.lazada.co.id/beli-nutrisi-khusus-anak/"},{"childCategoryName":"Minuman","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-bayi-balita/"},{"childCategoryName":"Sereal","childCategoryUrl":"https://www.lazada.co.id/beli-sereal-bayi-balita/"},{"childCategoryName":"Cracker & Biskuit","childCategoryUrl":"https://www.lazada.co.id/beli-cracker-biskuit-bayi-balita/"},{"childCategoryName":"Makanan Ringan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ringan-bayi-balita/"},{"childCategoryName":"Makanan puree bayi","childCategoryUrl":"https://www.lazada.co.id/beli-puree-bayi/"},{"childCategoryName":"Susu Ibu Hamil","childCategoryUrl":"https://www.lazada.co.id/beli-susu-maternal/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_4">
                                                            <a
                                                                href="https://www.lazada.co.id/jual-baju-aksesoris-anak/">
                                                                <span>Pakaian &amp; Aksesoris</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_3">
                                  [{"childCategoryName":"(0--6 bulan) Set Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-set-pakaian-bayi/"},{"childCategoryName":"(0--6 bulan) Body Suits","childCategoryUrl":"https://www.lazada.co.id/beli-bodysuit-one-piece-bayi/"},{"childCategoryName":"(0--6 bulan) Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-pakaian-anak/"},{"childCategoryName":"Pakaian Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-perempuan/"},{"childCategoryName":"Dress Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-dress-bayi-perempuan/"},{"childCategoryName":"Sepatu Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-perempuan/"},{"childCategoryName":"Aksesoris Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-bayi-perempuan/"},{"childCategoryName":"Baju Renang Bayi Perempuan","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-perempuan/"},{"childCategoryName":"Pakaian Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-pakaian-bayi-laki-laki/"},{"childCategoryName":"Sepatu Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-bayi-laki-laki/"},{"childCategoryName":"Aksesoris Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-aksesori-bayi-laki-laki/"},{"childCategoryName":"Baju Renang Bayi Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/beli-baju-renang-bayi-laki-laki/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_5">
                                                            <a href="https://www.lazada.co.id/beli-makanan-bayi/">
                                                                <span>Perlengkapan Menyusui</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_4">
                                  [{"childCategoryName":"Botol Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi/"},{"childCategoryName":"Botol","childCategoryUrl":"https://www.lazada.co.id/beli-botol-bayi-balita/"},{"childCategoryName":"Aksesoris Dot Botol","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-botol-dot-bayi/"},{"childCategoryName":"Penghangat & Sterilizers","childCategoryUrl":"https://www.lazada.co.id/beli-penghangat-sterilizer/"},{"childCategoryName":"Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-pompa-asi/"},{"childCategoryName":"Aksesesoris Pompa Asi","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-pompa-asi/"},{"childCategoryName":"Perawatan Payudara","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-puting/"},{"childCategoryName":"Bantal Menyusui","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-kursi-bayi/"},{"childCategoryName":"Kursi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kursi-tinggi-bayi-kursi-booster/"},{"childCategoryName":"Food Blenders","childCategoryUrl":"https://www.lazada.co.id/beli-blender-makanan-bayi/"},{"childCategoryName":"Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-makan-bayi-bb/"},{"childCategoryName":"Set Peralatan Makan Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-piring-mangkok-bayi/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_6">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-perlengkapan-berkendara-bayi/">
                                                                <span>Perlengkapan Bayi</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_5">
                                  [{"childCategoryName":"Sling Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sling-bayi/"},{"childCategoryName":"Soft Carrier","childCategoryUrl":"https://www.lazada.co.id/beli-soft-carrier/"},{"childCategoryName":"Stroller","childCategoryUrl":"https://www.lazada.co.id/beli-kereta-dorong-bayi/"},{"childCategoryName":"Car Seat","childCategoryUrl":"https://www.lazada.co.id/beli-car-seat-bb/"},{"childCategoryName":"Playard","childCategoryUrl":"https://www.lazada.co.id/beli-playard/"},{"childCategoryName":"Ayunan, Jumper & Bouncer Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-ayunan-jumper-bouncer-bayi/"},{"childCategoryName":"Walker","childCategoryUrl":"https://www.lazada.co.id/beli-walker/"},{"childCategoryName":"Tempat Duduk & Trailer Sepeda","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-trailer-sepeda/"},{"childCategoryName":"Tas Anak","childCategoryUrl":"https://www.lazada.co.id/beli-tas-anak/"},{"childCategoryName":"Koper Anak","childCategoryUrl":"https://www.lazada.co.id/beli-koper-anak/"},{"childCategoryName":"Tali & Harness Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tali-harness-bayi/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_7">
                                                            <a
                                                                href="https://www.lazada.co.id/jual-perlengkapan-kamar-bayi/">
                                                                <span>Kamar Bayi</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_6">
                                  [{"childCategoryName":"Matras Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-kasur-seprai-bayi/"},{"childCategoryName":"Selimut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-bayi/"},{"childCategoryName":"Seprai Keranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-seprai-keranjang-bayi/"},{"childCategoryName":"Kelengkapan Alat Tidur Balita","childCategoryUrl":"https://www.lazada.co.id/beli-kelengkapan-alat-tidur-balita/"},{"childCategoryName":"Selimut Tebal & Bed Cover Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-selimut-tebal-bed-cover-bayi/"},{"childCategoryName":"Bantal, Pelindung & Sarung Bantal Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-bantal-pelindung-sarung-bantal-bayi/"},{"childCategoryName":"Furnitur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-bayi/"},{"childCategoryName":"Ranjang Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-ranjang-bayi/"},{"childCategoryName":"Keranjang Bayi Cradle","childCategoryUrl":"https://www.lazada.co.id/beli-keranjang-bayi-cradle/"},{"childCategoryName":"Laci & Lemari Pakaian Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-laci-lemari-pakaian-bayi/"},{"childCategoryName":"Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-pengatur-penyimpanan/"},{"childCategoryName":"Dekorasi Kamar Anak","childCategoryUrl":"https://www.lazada.co.id/beli-dekorasi-kamar-anak/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_8">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-perlengkapan-mandi-perawatan-kulit-anak/">
                                                                <span>Perawatan Bayi</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_7">
                                  [{"childCategoryName":"Perawatan Kulit Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perawatan-kulit-bayi/"},{"childCategoryName":"Sampo & Kondisioner","childCategoryUrl":"https://www.lazada.co.id/beli-sampo-kondisioner-bb/"},{"childCategoryName":"Sabun & Pembersih Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sabun-pembersih-bayi/"},{"childCategoryName":"Perawatan Mulut Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Sikat Gigi & Pasta Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-pasta-gigi-bayi/"},{"childCategoryName":"Tempat Duduk & Bak Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-duduk-bak-mandi-bayi/"},{"childCategoryName":"Lap Mandi & Handuk Bayi","childCategoryUrl":"https://www.lazada.co.id/jual-handuk-bayi/"},{"childCategoryName":"Pelindung Matahari Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-matahari-bayi/"},{"childCategoryName":"Aromaterapi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-aromaterapi-bayi/"},{"childCategoryName":"Perlengkapan Mandi Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-mandi-bayi-bb/"},{"childCategoryName":"Alas Mandi Bayi Anti Slip","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi-bayi-anti-slip/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_9">
                                                            <a href="https://www.lazada.co.id/beli-mainan-anak/">
                                                                <span>Mainan</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_8">
                                  [{"childCategoryName":"Action Figure & Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/jual-koleksi-mainan-action-figure/"},{"childCategoryName":"Mainan Koleksi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-koleksi-tg/"},{"childCategoryName":"Mini Figur","childCategoryUrl":"https://www.lazada.co.id/beli-mini-figure-tg/"},{"childCategoryName":"Kerajinan Tangan","childCategoryUrl":"https://www.lazada.co.id/beli-kerajinan-tangan-kesenian-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Boneka & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-boneka-aksesori/"},{"childCategoryName":"Kostum Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dress-up/"},{"childCategoryName":"Mainan Edukasi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-pembelajaran-edukasi/"},{"childCategoryName":"Puzzle & Games","childCategoryUrl":"https://www.lazada.co.id/beli-permainan-tradisional/"},{"childCategoryName":"Hobi & Hiburan","childCategoryUrl":"https://www.lazada.co.id/Shop-Hobbies-Entertainment/"},{"childCategoryName":"Perlengkapan Pesta","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-pesta/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_10">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-remote-control-mainan-kendaraan/">
                                                                <span>Mainan Elektronik &amp; RC</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_9">
                                  [{"childCategoryName":"Mobil Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-rc-baterai/"},{"childCategoryName":"Robot Remote Control","childCategoryUrl":"https://www.lazada.co.id/beli-rc-figure-robot/"},{"childCategoryName":"Mobil Die Cast","childCategoryUrl":"https://www.lazada.co.id/beli-kendaraan-die-cast/"},{"childCategoryName":"Mainan Mobil","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-kendaraan-tg/"},{"childCategoryName":"Mainan Kereta Api & Rel","childCategoryUrl":"https://www.lazada.co.id/beli-set-mainan-kereta/"},{"childCategoryName":"Drone Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-drones-quadcopters/"},{"childCategoryName":"Helikopter","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-helikopter/"},{"childCategoryName":"Video Games & Hiburan","childCategoryUrl":"https://www.lazada.co.id/shop-hiburan-video-game/"},{"childCategoryName":"Walkie Talkies","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-walkie-talkie/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_11">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-olahraga-permainan-luar-ruangan/">
                                                                <span>Mainan Olahraga &amp; Luar Ruangan</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_10">
                                  [{"childCategoryName":"Kolam Renang & Mainan Air","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-air-kolam-renang/"},{"childCategoryName":"Mainan Olahraga","childCategoryUrl":"https://www.lazada.co.id/shop-mainan-baseball-softball/"},{"childCategoryName":"Mainan Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-aktivitas-dan-olahraga-luar-ruangan/"},{"childCategoryName":"Mainan Blaster","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-blaster/"},{"childCategoryName":"Kolam Bola & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-bola-pit-aksesori/"},{"childCategoryName":"Mainan Terbang","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-terbang/"},{"childCategoryName":"Layangan & Kincir Angin","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-layang-layang/"},{"childCategoryName":"Istana Balon","childCategoryUrl":"https://www.lazada.co.id/beli-balon-loncat-istana-balon/"},{"childCategoryName":"Yoyo & Kendama","childCategoryUrl":"https://www.lazada.co.id/beli-yo-yo-kendama/"},{"childCategoryName":"Set Mainan Taman Bermain","childCategoryUrl":"https://www.lazada.co.id/beli-set-peralatan-permainan-playground/"},{"childCategoryName":"Kemah & Terowongan Mainan","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-tenda-terowongan/"},{"childCategoryName":"Mainan Rumah-rumahan","childCategoryUrl":"https://www.lazada.co.id/beli-playhouses/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_7_12">
                                                            <a href="https://www.lazada.co.id/baby-toddler-toys/">
                                                                <span>Mainan Bayi &amp; Balita</span>
                                                            </a>
                                                            <script type="text" class="J_data_6_11">
                                  [{"childCategoryName":"Playgym & Playmat","childCategoryUrl":"https://www.lazada.co.id/jual-mainan-gym-anak/"},{"childCategoryName":"Mainan Blok","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-balok-bangunan/"},{"childCategoryName":"Mainan Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-mandi-anak-tg/"},{"childCategoryName":"Mainan Tidur Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-keranjang-bayi-perlengkapannya-tg/"},{"childCategoryName":"Mainan Balita","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-edukatif-anak-tg/"},{"childCategoryName":"Mainan Musik & Suara","childCategoryUrl":"https://www.lazada.co.id/beli-musik-suara-tg/"},{"childCategoryName":"Mainan Tarik Ulur","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-dorong-tarik-tg/"},{"childCategoryName":"Mainan Shape Sorting","childCategoryUrl":"https://www.lazada.co.id/beli-mainan-shape-sorting-tg/"},{"childCategoryName":"Indoor Climbers & Play Structures","childCategoryUrl":"https://www.lazada.co.id/beli-indoor-climbers-play-structure-tg/"},{"childCategoryName":"Rocking & Spring Ride-Ons","childCategoryUrl":"https://www.lazada.co.id/beli-rocking-spring-ride-on-tg/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No8"
                                                        data-spm="cate_8">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_1">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-tv-audio-video-permainan-dan-gadget/">
                                                                <span>TV &amp; Perangkat Video</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_0">
                                  [{"childCategoryName":""},{"childCategoryName":"TV LED","childCategoryUrl":"https://www.lazada.co.id/shop-televisi-digital/"},{"childCategoryName":"TV Smart","childCategoryUrl":"https://www.lazada.co.id/beli-smart-tv/"},{"childCategoryName":"Blu-Ray/DVD Player","childCategoryUrl":"https://www.lazada.co.id/beli-blu-ray-player/"},{"childCategoryName":"Media Player","childCategoryUrl":"https://www.lazada.co.id/shop-media-player/"},{"childCategoryName":"Proyektor","childCategoryUrl":"https://www.lazada.co.id/beli-proyektor-3/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_2">
                                                            <a href="https://www.lazada.co.id/beli-perlengkapan-dapur/">
                                                                <span>Peralatan Dapur Kecil</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_1">
                                  [{"childCategoryName":""},{"childCategoryName":"Rice Cooker","childCategoryUrl":"https://www.lazada.co.id/beli-rice-cooker/"},{"childCategoryName":"Blender, Mixer & Grinder","childCategoryUrl":"https://www.lazada.co.id/beli-blender-mixer-juicer/"},{"childCategoryName":"Kompor Gas","childCategoryUrl":"https://www.lazada.co.id/beli-kompor-gas/"},{"childCategoryName":"Teko Listrik","childCategoryUrl":"https://www.lazada.co.id/beli-ketel-elektrik-2/"},{"childCategoryName":"Juicer","childCategoryUrl":"https://www.lazada.co.id/beli-juicer-pengekstrak-buah/"},{"childCategoryName":"Mesin Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-kopi/"},{"childCategoryName":"Air Fryer","childCategoryUrl":"https://www.lazada.co.id/beli-air-fryers/"},{"childCategoryName":"Peralatan Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-ska-lainnya/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_3">
                                                            <a href="https://www.lazada.co.id/shop-perlatan-besar/">
                                                                <span>Elektronik Rumah Besar</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_2">
                                  [{"childCategoryName":""},{"childCategoryName":"Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-mesin-cuci/"},{"childCategoryName":"Kulkas","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-es/"},{"childCategoryName":"Microwave","childCategoryUrl":"https://www.lazada.co.id/beli-microwave/"},{"childCategoryName":"Oven","childCategoryUrl":"https://www.lazada.co.id/beli-ovens/"},{"childCategoryName":"Dispenser Air Minum","childCategoryUrl":"https://www.lazada.co.id/beli-dispenser-air/"},{"childCategoryName":"AC","childCategoryUrl":"https://www.lazada.co.id/beli-ac/"},{"childCategoryName":"Pemanas Air","childCategoryUrl":"https://www.lazada.co.id/beli-pemanas-air/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_4">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-pendingin-pembersih-udara-mini/">
                                                                <span>Penyejuk dan Pembersih Udara</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_3">
                                  [{"childCategoryName":""},{"childCategoryName":"Kipas Angin","childCategoryUrl":"https://www.lazada.co.id/shop-kipas/"},{"childCategoryName":"Air Cooler","childCategoryUrl":"https://www.lazada.co.id/beli-pendingin-udara-2/"},{"childCategoryName":"Air Purifier","childCategoryUrl":"https://www.lazada.co.id/beli-penjernih-udara-2/"},{"childCategoryName":"Humidifier","childCategoryUrl":"https://www.lazada.co.id/beli-humidifier/"},{"childCategoryName":"Dehumidifier","childCategoryUrl":"https://www.lazada.co.id/beli-dehumidifier/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_5">
                                                            <a href="https://www.lazada.co.id/beli-perawatan-lantai/">
                                                                <span>Penghisap Debu &amp; Perawatan Lantai</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_4">
                                  [{"childCategoryName":""},{"childCategoryName":"Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu/"},{"childCategoryName":"Penghisap Debu Robotik","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-robot/"},{"childCategoryName":"Penghisap Debu dengan Tongkat","childCategoryUrl":"https://www.lazada.co.id/shop-penyedot-debu-tongkat/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_6">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-peralatan-perawatan-personal/">
                                                                <span>Alat Perawatan Diri</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_5">
                                  [{"childCategoryName":""},{"childCategoryName":"Hair Dryer","childCategoryUrl":"https://www.lazada.co.id/beli-pengering-rambut/"},{"childCategoryName":"Alat Penata Rambut","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-styling-rambut/"},{"childCategoryName":"Shaver & Pencukur Kumis Jenggot","childCategoryUrl":"https://www.lazada.co.id/beli-shaver/"},{"childCategoryName":"Sikat Gigi Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-sikat-gigi-elektrik/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_7">
                                                            <a
                                                                href="https://www.lazada.co.id/jual-aksesoris-elektronik-rumah-tangga/">
                                                                <span>Aksesoris &amp; Suku Cadang</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_6">
                                  [{"childCategoryName":""},{"childCategoryName":"Suku Cadang & Aksesoris Peralatan Dapur Kecil","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-blender-dan-mixer/"},{"childCategoryName":"Suku Cadang & Aksesoris AC","childCategoryUrl":"https://www.lazada.co.id/beli-suku-cadang-aksesoris-ac/"},{"childCategoryName":"Suku Cadang & Aksesoris Mesin Cuci","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-mesin-cuci-dan-pengering-pakaian/"},{"childCategoryName":"Suku Cadang & Filter Pengganti","childCategoryUrl":"https://www.lazada.co.id/beli-filter-air/"},{"childCategoryName":"Suku Cadang & Filter Penghisap Debu","childCategoryUrl":"https://www.lazada.co.id/beli-suku-kadang-aksesoris-vacuum-cleaner/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_8">
                                                            <a href="https://www.lazada.co.id/jual-aksesoris-televisi/">
                                                                <span>Aksesoris Televisi</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_7">
                                  [{"childCategoryName":""},{"childCategoryName":"TV Box","childCategoryUrl":"https://www.lazada.co.id/jual-tv-receiver/"},{"childCategoryName":"Antena TV","childCategoryUrl":"https://www.lazada.co.id/jual-antena-tv/"},{"childCategoryName":"Bracket Dinding TV & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jual-bracket-dinding-tv/"},{"childCategoryName":"Remote Control TV","childCategoryUrl":"https://www.lazada.co.id/jual-remote-control-tv/"},{"childCategoryName":"Kabel TV","childCategoryUrl":"https://www.lazada.co.id/jual-kabel-tv/"},{"childCategoryName":"Adaptor TV","childCategoryUrl":"https://www.lazada.co.id/jual-adaptor-tv/"},{"childCategoryName":"Kacamata 3D TV","childCategoryUrl":"https://www.lazada.co.id/jual-kacamata-3d-tv/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_8_9">
                                                            <a href="https://www.lazada.co.id/jual-home-entertainment/">
                                                                <span>Home Entertainment</span>
                                                            </a>
                                                            <script type="text" class="J_data_7_8">
                                  [{"childCategoryName":""},{"childCategoryName":"Soundbar","childCategoryUrl":"https://www.lazada.co.id/jual-soundbar/"},{"childCategoryName":"Sistem Karaoke","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-karaoke/"},{"childCategoryName":"Sistem Hi-Fi","childCategoryUrl":"https://www.lazada.co.id/jual-sistem-hi-fi/"},{"childCategoryName":"Sound System Panggung","childCategoryUrl":"https://www.lazada.co.id/sound-system-panggung/"},{"childCategoryName":"Player Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-audio-player/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No9"
                                                        data-spm="cate_9">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_1">
                                                            <a href="https://www.lazada.co.id/beli-dekorasi-rumah/">
                                                                <span>Dekorasi Rumah</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Stiker Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-stiker-dinding/"},{"childCategoryName":"Gorden","childCategoryUrl":"https://www.lazada.co.id/gorden-dan-kerai/"},{"childCategoryName":"Tikar & Karpet","childCategoryUrl":"https://www.lazada.co.id/beli-tikar-karpet/"},{"childCategoryName":"Hiasan Dinding","childCategoryUrl":"https://www.lazada.co.id/beli-hiasan-dinding/"},{"childCategoryName":"Dekorasi Aksen","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris-dekor/"},{"childCategoryName":"Bunga & Tanaman Artifisial","childCategoryUrl":"https://www.lazada.co.id/beli-bunga-tanaman-artifisial/"},{"childCategoryName":"Jam","childCategoryUrl":"https://www.lazada.co.id/beli-jam/"},{"childCategoryName":"Dalaman & Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/shop-dalaman-sarung-bantal/"},{"childCategoryName":"Bingkai","childCategoryUrl":"https://www.lazada.co.id/beli-bingkai/"},{"childCategoryName":"Wewangian Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-wewangian-rumah/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_2">
                                                            <a href="https://www.lazada.co.id/beli-furnitur/">
                                                                <span>Furnitur</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Tempat Penyimpanan","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpanan/"},{"childCategoryName":"Lemari Pakaian","childCategoryUrl":"https://www.lazada.co.id/beli-lemari-pakaian/"},{"childCategoryName":"Kasur","childCategoryUrl":"https://www.lazada.co.id/beli-kasur/"},{"childCategoryName":"Kamar Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-kamar-tidur/"},{"childCategoryName":"Rak","childCategoryUrl":"https://www.lazada.co.id/rak/"},{"childCategoryName":"Rak TV dan Media","childCategoryUrl":"https://www.lazada.co.id/tempat-penyimpanan-media-dan-tv/"},{"childCategoryName":"Sofa","childCategoryUrl":"https://www.lazada.co.id/beli-sofa/"},{"childCategoryName":"Ruang Tamu","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-tamu/"},{"childCategoryName":"Ruang Kerja Rumah","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-kerja-rumah/"},{"childCategoryName":"Dapur & Ruang Makan","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-dapur-ruang-makan/"},{"childCategoryName":"Ruang Bayi","childCategoryUrl":"https://www.lazada.co.id/beli-furnitur-ruang-bayi/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_3">
                                                            <a href="https://www.lazada.co.id/beli-peralatan-ranjang/">
                                                                <span>Kelengkapan Tempat Tidur</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Seprai","childCategoryUrl":"https://www.lazada.co.id/seprei-ranjang/"},{"childCategoryName":"Seprai Set","childCategoryUrl":"https://www.lazada.co.id/perangkat-seprei/"},{"childCategoryName":"Selimut","childCategoryUrl":"https://www.lazada.co.id/selimut-dan-selimut-panjang/"},{"childCategoryName":"Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-bantal/"},{"childCategoryName":"Aksesoris Tempat Tidur","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-ranjang/"},{"childCategoryName":"Sarung Bantal","childCategoryUrl":"https://www.lazada.co.id/beli-sarung-bantal/"},{"childCategoryName":"Selimut Tebal","childCategoryUrl":"https://www.lazada.co.id/seprei-dan-selimut-tebal/"},{"childCategoryName":"Pelindung Kasur","childCategoryUrl":"https://www.lazada.co.id/kasur-pelindung/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_4">
                                                            <a href="https://www.lazada.co.id/penerangan/">
                                                                <span>Penerangan</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-lampu/"},{"childCategoryName":"Lampu Khusus","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-khusus/"},{"childCategoryName":"Lampu Langit-langit","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-langit-langit-hias/"},{"childCategoryName":"Penerangan Outdoor","childCategoryUrl":"https://www.lazada.co.id/beli-penerangan-outdoor/"},{"childCategoryName":"Lampu Dinding & Tempel","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-dinding-tempel/"},{"childCategoryName":"Lampu Meja","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-meja/"},{"childCategoryName":"Komponen Lampu","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-komponen/"},{"childCategoryName":"Kap Lampu","childCategoryUrl":"https://www.lazada.co.id/kap-lampu/"},{"childCategoryName":"Lampu Lantai","childCategoryUrl":"https://www.lazada.co.id/beli-lampu-lantai/"},{"childCategoryName":"Lampu Rechargeable & Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_5">
                                                            <a href="https://www.lazada.co.id/beli-peralatan-mandi/">
                                                                <span>Peralatan Mandi</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Handuk Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-handuk-mandi/"},{"childCategoryName":"Timbangan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-timbangan-kamar-mandi/"},{"childCategoryName":"Wadah Penyimpanan Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-tempat-penyimpan-kamar-mandi/"},{"childCategoryName":"Rak Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/jual-laci-kamar-mandi/"},{"childCategoryName":"Gantungan Handuk & Penghangat","childCategoryUrl":"https://www.lazada.co.id/gantungan-handuk-dan-penghangat/"},{"childCategoryName":"Tempat & Gantungan Shower","childCategoryUrl":"https://www.lazada.co.id/tempat-dan-gantungan-shower/"},{"childCategoryName":"Keset Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-alas-mandi/"},{"childCategoryName":"Jubah & Kimono Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-jubah-mandi/"},{"childCategoryName":"Tirai Shower","childCategoryUrl":"https://www.lazada.co.id/shop-tirai-mandi-aksesoris/"},{"childCategoryName":"Cermin Kamar Mandi","childCategoryUrl":"https://www.lazada.co.id/beli-cermin-kamar-mandi/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_6">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-perlengkapan-dapur-makan/">
                                                                <span>Alat Dapur</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_5">
                                  [{"childCategoryName":"Botol minum","childCategoryUrl":"https://www.lazada.co.id/botol-minum/"},{"childCategoryName":"Tempat Penyimpanan Makanan","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-penyimpan-makanan/"},{"childCategoryName":"Alas Meja & Aksesoris Dapur","childCategoryUrl":"https://www.lazada.co.id/beli-alas-meja-aksesoris-dapur/"},{"childCategoryName":"Kopi & Teh","childCategoryUrl":"https://www.lazada.co.id/beli-kopi-dan-teh/"},{"childCategoryName":"Rak Piring & Aksesoris Wastafel","childCategoryUrl":"https://www.lazada.co.id/beli-rak-piring-aksesoris-bak/"},{"childCategoryName":"Panci & Wajan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-masak/"},{"childCategoryName":"Perangkat Minum","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-minum-gelas/"},{"childCategoryName":"Perangkat Makan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-penyajian-makanan/"},{"childCategoryName":"Perangkat Pemanggang","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-pemanggang/"},{"childCategoryName":"Perangkat Penyajian","childCategoryUrl":"https://www.lazada.co.id/beli-perangkat-penyaji/"},{"childCategoryName":"Pisau & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-pisau-dan-aksesoris/"},{"childCategoryName":"Alat Dapur Lainnya","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-dapur/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_7">
                                                            <a href="https://www.lazada.co.id/beli-binatu-kebersihan/">
                                                                <span>Binatu &amp; Alat Kebersihan</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_6">
                                  [{"childCategoryName":"Gantungan Baju","childCategoryUrl":"https://www.lazada.co.id/gantungan-baju/"},{"childCategoryName":"Keranjang Baju","childCategoryUrl":"https://www.lazada.co.id/keranjang-cucian/"},{"childCategoryName":"Jemuran Pakaian","childCategoryUrl":"https://www.lazada.co.id/rak-pengering/"},{"childCategoryName":"Alat Binatu & Setrika","childCategoryUrl":"https://www.lazada.co.id/beli-alat-binatu-setrika/"},{"childCategoryName":"Meja Setrika","childCategoryUrl":"https://www.lazada.co.id/papan-setrika/"},{"childCategoryName":"Produk Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Sapu & Alat Pel","childCategoryUrl":"https://www.lazada.co.id/beli-sapu-pel/"},{"childCategoryName":"Lap Kain Penghilang Debu","childCategoryUrl":"https://www.lazada.co.id/shop-Sapu-Sikat-Kemoceng/"},{"childCategoryName":"Sikat Pembersih","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-aksesoris-pembersih/"},{"childCategoryName":"Tempat Sampah","childCategoryUrl":"https://www.lazada.co.id/tempat-sampah/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_8">
                                                            <a href="https://www.lazada.co.id/beli-perawatan-rumah/">
                                                                <span>Perkakas &amp; Perbaikan Rumah</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_7">
                                  [{"childCategoryName":"Alat Penyimpanan & Rak","childCategoryUrl":"https://www.lazada.co.id/beli-garasi-penyimpanan-alat-alat/"},{"childCategoryName":"Kabel & Perlengkapan Elektrik","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-elektrik/"},{"childCategoryName":"Pengecatan & Dekorasi","childCategoryUrl":"https://www.lazada.co.id/beli-pengecatan-dekorasi/"},{"childCategoryName":"Perkakas","childCategoryUrl":"https://www.lazada.co.id/beli-perkakas/"},{"childCategoryName":"Perkakas Listrik","childCategoryUrl":"https://www.lazada.co.id/jual-perkakas-listrik/"},{"childCategoryName":"Perkakas Portabel","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-genggam/"},{"childCategoryName":"Pipa Saluran Air & Kelengkapan","childCategoryUrl":"https://www.lazada.co.id/beli-ledeng/"},{"childCategoryName":"Senter","childCategoryUrl":"https://www.lazada.co.id/beli-senter"},{"childCategoryName":"Tangga & Kursi Peninggi","childCategoryUrl":"https://www.lazada.co.id/beli-tangga-kursi-peninggi/"},{"childCategoryName":"perlengkapan keamanan","childCategoryUrl":"https://www.lazada.co.id/lampu-penerangan-tempat-kerja/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_9">
                                                            <a
                                                                href="https://www.lazada.co.id/Kebun &amp; Luar Ruangan/">
                                                                <span>Kebun &amp; Luar Ruangan</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_8">
                                  [{"childCategoryName":"Peralatan Listrik Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-listrik-taman-luar-ruangan/"},{"childCategoryName":"Peralatan Kebun","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-kebun/"},{"childCategoryName":"Sistem Pengairan","childCategoryUrl":"https://www.lazada.co.id/beli-sistem-pengairan/"},{"childCategoryName":"Bibit & Biji Bijian","childCategoryUrl":"https://www.lazada.co.id/beli-tumbuhan-biji-bijian/"},{"childCategoryName":"Pembasmi Hama","childCategoryUrl":"https://www.lazada.co.id/beli-pembasmi-rumput-liar-hama/"},{"childCategoryName":"Aksesoris Genset","childCategoryUrl":"https://www.lazada.co.id/beli-aksesoris-peralatan-listrik-luar-ruangan/"},{"childCategoryName":"Genset","childCategoryUrl":"https://www.lazada.co.id/shop-generator/"},{"childCategoryName":"Pemanggang","childCategoryUrl":"https://www.lazada.co.id/pemanggang-dan-penyajian-masakan-outdoor/"},{"childCategoryName":"Alat Pembunuh Serangga","childCategoryUrl":"https://www.lazada.co.id/alat-pembunuh-serangga/"},{"childCategoryName":"Aksesoris Luar Ruangan","childCategoryUrl":"https://www.lazada.co.id/beli-luar-ruangan/"},{"childCategoryName":"Taman & Kebun","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-taman-dan-kebun/"},{"childCategoryName":"","childCategoryUrl":""}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_10">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-alat-tulis-kerajinan/">
                                                                <span>Alat Tulis &amp; Kerajinan</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_9">
                                  [{"childCategoryName":"Peralatan Kesenian dan Kerajinan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-seni/"},{"childCategoryName":"Peralatan Mewarnai dan Copic","childCategoryUrl":"https://www.lazada.co.id/beli-alat-mewarnai-copic/"},{"childCategoryName":"Kerajinan Umum","childCategoryUrl":"https://www.lazada.co.id/beli-alat-kerajinan-umum/"},{"childCategoryName":"Pernak Pernik Hadiah dan Kado","childCategoryUrl":"https://www.lazada.co.id/beli-pernak-pernik-hadiah/"},{"childCategoryName":"Tas Belanja","childCategoryUrl":"https://www.lazada.co.id/beli-tas-belanjaan/"},{"childCategoryName":"Buku Catatan","childCategoryUrl":"https://www.lazada.co.id/buku-catatan/"},{"childCategoryName":"Kertas Komputer","childCategoryUrl":"https://www.lazada.co.id/beli-kertas-komputer/"},{"childCategoryName":"Perlengkapan Sekolah","childCategoryUrl":"https://www.lazada.co.id/beli-perlengkapan-sekolah/"},{"childCategoryName":"Perlengkapan Meja Kerja","childCategoryUrl":"https://www.lazada.co.id/beli-wadah-alat-alat-kantor/"},{"childCategoryName":"Perlengkapan Jahit","childCategoryUrl":"https://www.lazada.co.id/beli-bahan-bahan-kerajinan-tangan/"},{"childCategoryName":"Pulpen","childCategoryUrl":"https://www.lazada.co.id/beli-pulpen/"},{"childCategoryName":"Pensil","childCategoryUrl":"https://www.lazada.co.id/beli-pensil-2/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_9_11">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-media-musik-dan-buku/">
                                                                <span>Media, Musik &amp; Buku</span>
                                                            </a>
                                                            <script type="text" class="J_data_8_10">
                                  [{"childCategoryName":"Instrumen Musik","childCategoryUrl":"https://www.lazada.co.id/instrumen-musik/"},{"childCategoryName":"Buku","childCategoryUrl":"https://www.lazada.co.id/buku/"},{"childCategoryName":"Musik","childCategoryUrl":"https://www.lazada.co.id/lagu/"},{"childCategoryName":"Majalah","childCategoryUrl":"https://www.lazada.co.id/majalah/"},{"childCategoryName":"Film","childCategoryUrl":"https://www.lazada.co.id/film/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No10"
                                                        data-spm="cate_10">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_1">
                                                            <a href="https://www.lazada.co.id/beli-minuman/">
                                                                <span>Minuman</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"UHT, Susu & Susu Bubuk","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-uht-milk-milk-powder/"},{"childCategoryName":"Kopi","childCategoryUrl":"https://www.lazada.co.id/beli-kopi/"},{"childCategoryName":"Minuman Serbuk","childCategoryUrl":"https://www.lazada.co.id/beli-minuman-serbuk/"},{"childCategoryName":"Minuman Berenergi","childCategoryUrl":"https://www.lazada.co.id/shop-Minuman-Olahraga-Energi/"},{"childCategoryName":"Teh","childCategoryUrl":"https://www.lazada.co.id/beli-teh/"},{"childCategoryName":"Chocolate, Malt & Hot Cereals","childCategoryUrl":"https://www.lazada.co.id/coklat-panas/"},{"childCategoryName":"Air Mineral","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-air/"},{"childCategoryName":"Minuman Berkarbonasi","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-minuman-ringan/"},{"childCategoryName":"Jus","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-jus/"},{"childCategoryName":"Sirup","childCategoryUrl":"https://www.lazada.co.id/beli-sirup/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_2">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-Bahan-Utama-Pelengkap-Masakan">
                                                                <span>Bahan &amp; Bumbu Masakan</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan Instant & Siap santap","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Instan-Siap-Santap/"},{"childCategoryName":"Bahan Pembuat Kue","childCategoryUrl":"https://www.lazada.co.id/shop-Bahan-Pembuat-Kue/"},{"childCategoryName":"Beras","childCategoryUrl":"https://www.lazada.co.id/shop-Beras/"},{"childCategoryName":"Garam & Bumbu Dapur","childCategoryUrl":"https://www.lazada.co.id/shop-Bumbu-Dapur/"},{"childCategoryName":"Mie & Bihun","childCategoryUrl":"https://www.lazada.co.id/shop-Mi-Bihun/"},{"childCategoryName":"Makanan Kering","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kering/"},{"childCategoryName":"Minyak","childCategoryUrl":"https://www.lazada.co.id/shop-Minyak/"},{"childCategoryName":"Makanan Kaleng","childCategoryUrl":"https://www.lazada.co.id/shop-Makanan-Kaleng/"},{"childCategoryName":"Pasta","childCategoryUrl":"https://www.lazada.co.id/shop-Pasta/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_3">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-Cokelat-Camilan-Permen/">
                                                                <span>Cokelat, Camilan &amp; Permen</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Camilan","childCategoryUrl":"https://www.lazada.co.id/shop-Camilan/"},{"childCategoryName":"Cokelat","childCategoryUrl":"https://www.lazada.co.id/shop-Cokelat/"},{"childCategoryName":"Biskuit & Kerupuk","childCategoryUrl":"https://www.lazada.co.id/shop-Biskuit-Manis/"},{"childCategoryName":"Permen","childCategoryUrl":"https://www.lazada.co.id/shop-Manisan/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_4">
                                                            <a href="https://www.lazada.co.id/beli-makanan-sarapan">
                                                                <span>Makanan Sarapan, Sereal &amp; Selai</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Selai & Madu","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-selai-madu-spread/"},{"childCategoryName":"Oatmeal","childCategoryUrl":"https://www.lazada.co.id/beli-oatmeal/"},{"childCategoryName":"Sereal Sarapan","childCategoryUrl":"https://www.lazada.co.id/beli-sereal/"},{"childCategoryName":"Tepung Pancake & Waffle","childCategoryUrl":"https://www.lazada.co.id/beli-pancake-waffle/"},{"childCategoryName":"Bars","childCategoryUrl":"https://www.lazada.co.id/shop-bar/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_5">
                                                            <a
                                                                href="https://www.lazada.co.id/beli-makanan-minuman-hasil-segar">
                                                                <span>Buah &amp; Sayur</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Buah Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-buah/"},{"childCategoryName":"Sayur Segar","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-sayuran-segar/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_6">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-kebutuhan-rumah-tangga">
                                                                <span>Kebutuhan Rumah Tangga</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Pengharum Ruangan","childCategoryUrl":"https://www.lazada.co.id/shop-perawatan-udara/"},{"childCategoryName":"Kebutuhan Kebersihan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pembersihan/"},{"childCategoryName":"Pengendalian Hama","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-pengendalian-hama/"},{"childCategoryName":"Sabun Pencuci Piring","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-mencuci-piring/"},{"childCategoryName":"Kebutuhan Laundry","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-minuman-cucian/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_7">
                                                            <a href="https://www.lazada.co.id/shop-makanan-hewan">
                                                                <span>Makanan Hewan Peliharaan</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Makanan & Camilan Kucing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-kucing/"},{"childCategoryName":"Makanan Burung","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-burung/"},{"childCategoryName":"Makanan Ikan","childCategoryUrl":"https://www.lazada.co.id/beli-makanan-ikan/"},{"childCategoryName":"Makanan & Camilan Anjing","childCategoryUrl":"https://www.lazada.co.id/jual-makanan-anjing/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_8">
                                                            <a href="https://www.lazada.co.id/shop-aksesoris-hewan">
                                                                <span>Aksesoris Hewan Peliharaan</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Keperluan Akuarium","childCategoryUrl":"https://www.lazada.co.id/shop-keperluan-akuarium/"},{"childCategoryName":"Kandang & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/beli-kandang-terbuka-pintu-anjing/"},{"childCategoryName":"Peralatan Grooming","childCategoryUrl":"https://www.lazada.co.id/jual-persediaan-grooming-hewan/"},{"childCategoryName":"Rumah,Alas & Tempat tidur","childCategoryUrl":"https://www.lazada.co.id/beli-ranjang-alas-tidur-rumah-anjing/"},{"childCategoryName":"Alat Makan Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-mangkuk-makan-anjing/"},{"childCategoryName":"Tali dan Kalung Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-tali-kalung-moncong-anjing/"},{"childCategoryName":"Kebutuhan Travel Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-pengangkut-perjalanan-anjing/"},{"childCategoryName":"Mainan Hewan","childCategoryUrl":"https://www.lazada.co.id/shop-mainan/"},{"childCategoryName":"Alat Pelatihan Anjing","childCategoryUrl":"https://www.lazada.co.id/beli-alat-latih-olahraga-anjing/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_10_9">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-kesehatan-hewan-peliharaan">
                                                                <span>Kesehatan Hewan Peliharaan</span>
                                                            </a>
                                                            <script type="text" class="J_data_9_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Perawatan Gigi","childCategoryUrl":"https://www.lazada.co.id/beli-kesehatan-gigi-anjing/"},{"childCategoryName":"Pembasmi Kutu Hewan","childCategoryUrl":"https://www.lazada.co.id/beli-kutu-anjing/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No11"
                                                        data-spm="cate_11">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_1">
                                                            <a href="https://www.lazada.co.id/baju-olahraga-pria/">
                                                                <span>Baju Olahraga Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_0">
                                  [{"childCategoryName":"Celana Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-pria/"},{"childCategoryName":"Kaos Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/kaos-olahraga-pria/"},{"childCategoryName":"Jaket Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-olahraga-pria/"},{"childCategoryName":"Pakaian Renang Pria","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-pria/"},{"childCategoryName":"Jersey Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-olahraga-pria/"},{"childCategoryName":"Celana Pendek Pria","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-pria/"},{"childCategoryName":"Hoodies Pria","childCategoryUrl":"https://www.lazada.co.id/hoodies-pria/"},{"childCategoryName":"Topi Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-topi-olahraga-pria/"},{"childCategoryName":"Tas Ransel Sport Pria","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-pria/"},{"childCategoryName":"Tas Serut Pria","childCategoryUrl":"https://www.lazada.co.id/tas-serut-pria/"},{"childCategoryName":"Tas Duffel Pria","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-pria/"},{"childCategoryName":"Gym Tote Pria","childCategoryUrl":"https://www.lazada.co.id/gym-tote-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_2">
                                                            <a href="https://www.lazada.co.id/pakaian-olahraga-wanita/">
                                                                <span>Baju Olahraga Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_1">
                                  [{"childCategoryName":"Celana Panjang Wanita","childCategoryUrl":"https://www.lazada.co.id/celana-panjang-dan-pendek-olahraga-wanita/"},{"childCategoryName":"Kaos Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/kaos-dan-atasan-olahraga-wanita/"},{"childCategoryName":"Jaket Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jaket-dan-parka-sport-wanita/"},{"childCategoryName":"Sport Bra Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sport-bra-wanita/"},{"childCategoryName":"Celana Pendek Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-celana-pendek-olahraga-wanita/"},{"childCategoryName":"Rok Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-rok-olahraga-wanita/"},{"childCategoryName":"Hoodies Wanita","childCategoryUrl":"https://www.lazada.co.id/hoodies-wanita/"},{"childCategoryName":"Pakaian Renang Wanita","childCategoryUrl":"https://www.lazada.co.id/pakaian-renang-dan-selancar-wanita/"},{"childCategoryName":"Tas Ransel Sport Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-ransel-sport-wanita/"},{"childCategoryName":"Tas Serut Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-serut-wanita/"},{"childCategoryName":"Tas Duffel Wanita","childCategoryUrl":"https://www.lazada.co.id/tas-duffel-wanita/"},{"childCategoryName":"Gym Tote Wanita","childCategoryUrl":"https://www.lazada.co.id/gym-tote-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_3">
                                                            <a
                                                                href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-pria/">
                                                                <span>Sepatu Olahraga Pria</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_2">
                                  [{"childCategoryName":"Sepatu Sepakbola Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Sepatu Lari Pria","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-pria/"},{"childCategoryName":"Sepatu Hiking Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-hiking-pria/"},{"childCategoryName":"Sepatu Basket Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-basket-pria/"},{"childCategoryName":"Sepatu Olahraga Air Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-olahraga-air-pria/"},{"childCategoryName":"Sepatu Badminton ria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-badminton-pria/"},{"childCategoryName":"Sepatu Training Pira","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-pria/"},{"childCategoryName":"Sepatu Skateboard Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-pria/"},{"childCategoryName":"Sepatu Sneakers Pria","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-pria/"},{"childCategoryName":"Sandal Olahraga Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-pria/"},{"childCategoryName":"Sepatu Jalan Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-pria/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_4">
                                                            <a
                                                                href="https://www.lazada.co.id/sepatu-dan-pakaian-olahraga-wanita/">
                                                                <span>Sepatu Olahraga Wanita</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_3">
                                  [{"childCategoryName":"Sepatu Badminton Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-badminton-wanita/"},{"childCategoryName":"Sepatu Lari Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-lari-wanita/"},{"childCategoryName":"Sepatu Futsal Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-futsal-wanita/"},{"childCategoryName":"Sepatu Basket Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-basket-wanita/"},{"childCategoryName":"Sepatu Sepakbola Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepakbola-wanita/"},{"childCategoryName":"Sepatu Olahraga Air Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-olaraga-air-wanita/"},{"childCategoryName":"Sepatu Hiking Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-hiking-wanita/"},{"childCategoryName":"Sepatu Training Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-fitness-training-wanita/"},{"childCategoryName":"Septu Skateboard Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-skateboard-wanita/"},{"childCategoryName":"Sepatu Sneakers Wanita","childCategoryUrl":"https://www.lazada.co.id/beli-sepatu-sneakers-wanita/"},{"childCategoryName":"Sandal Olahraga Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sandal-olahraga-wanita/"},{"childCategoryName":"Sepatu Jalan Wanita","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-jalan-wanita/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_5">
                                                            <a href="https://www.lazada.co.id/camping-dan-hiking/">
                                                                <span>Camping dan Hiking</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_4">
                                  [{"childCategoryName":"Tenda dan furniture Camping","childCategoryUrl":"https://www.lazada.co.id/tenda-dan-furniture/"},{"childCategoryName":"Perlengkapan Tidur Camping","childCategoryUrl":"https://www.lazada.co.id/perlengkapan-tidur-camping/"},{"childCategoryName":"Tas Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tas-ransel/"},{"childCategoryName":"Tempat berteduh Camping","childCategoryUrl":"https://www.lazada.co.id/jual-tempat-berteduh-dan-kanopi/"},{"childCategoryName":"Perabotan Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-perabotan-kemah/"},{"childCategoryName":"Alat Dapur Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-dapur-kemah/"},{"childCategoryName":"Alat penerangan Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-penerangan/"},{"childCategoryName":"Navigasi Elektroning Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-navigasi-elektronik/"},{"childCategoryName":"Tongkat Hiking","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-hiking/"},{"childCategoryName":"Pisau Kemah","childCategoryUrl":"https://www.lazada.co.id/jual-pisau-alat-multifungsi/"},{"childCategoryName":"Peralatan Survival Camping","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-survival-dan-keamanan/"},{"childCategoryName":"Perlengkapan Panjat Tebing","childCategoryUrl":"https://www.lazada.co.id/panjat-tebing/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_6">
                                                            <a
                                                                href="https://www.lazada.co.id/jual-peralatan-memancing/">
                                                                <span>Peralatan Memancing</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_5">
                                  [{"childCategoryName":"Tongkat Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-tongkat-pancing/"},{"childCategoryName":"Alat Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/alat-gulungan-pancing/"},{"childCategoryName":"Set Tongkat dan Gulungan Pancing","childCategoryUrl":"https://www.lazada.co.id/set-tongkat-dan-gulungan-pancing/"},{"childCategoryName":"Senar Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-senar-pancing/"},{"childCategoryName":"Umpan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-umpan/"},{"childCategoryName":"Peralatan Pancing","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-pancing/"},{"childCategoryName":"GPS alat pencari ikan","childCategoryUrl":"https://www.lazada.co.id/jual-gps-alat-pencari-ikan/"},{"childCategoryName":"Jaring Penangkap Ikan","childCategoryUrl":"https://www.lazada.co.id/jual-jaring-penangkap-ikan/"},{"childCategoryName":"Aksesoris Memancing","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-memancing/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_7">
                                                            <a href="https://www.lazada.co.id/olahraga-sepeda/">
                                                                <span>Olahraga Sepeda</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_6">
                                  [{"childCategoryName":"Komponen Part Sepeda","childCategoryUrl":"https://www.lazada.co.id/komponen-dan-parts-sepeda/"},{"childCategoryName":"Aksesoris Sepeda","childCategoryUrl":"https://www.lazada.co.id/aksesoris-sepeda/"},{"childCategoryName":"Sepeda","childCategoryUrl":"https://www.lazada.co.id/sepeda/"},{"childCategoryName":"Kaos Sepeda","childCategoryUrl":"https://www.lazada.co.id/jual-baju-kaos-sepeda/"},{"childCategoryName":"Sepatu Sepeda Pria","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-pria/"},{"childCategoryName":"Sepatu Sepeda Wanita","childCategoryUrl":"https://www.lazada.co.id/sepatu-sepeda-wanita/"},{"childCategoryName":"Sepatu Sepeda Perempuan","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-perempuan/"},{"childCategoryName":"Sepatu Sepeda Laki-Laki","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepeda-anak-laki-laki/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_8">
                                                            <a href="https://www.lazada.co.id/olahraga-air/">
                                                                <span>Olahraga Air</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_7">
                                  [{"childCategoryName":"Kapal","childCategoryUrl":"https://www.lazada.co.id/jual-kapal/"},{"childCategoryName":"Peralatan Menyelam","childCategoryUrl":"https://www.lazada.co.id/diving-snorkeling/"},{"childCategoryName":"Peralatan Renang","childCategoryUrl":"https://www.lazada.co.id/renang/"},{"childCategoryName":"Papan Renang","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-papan/"},{"childCategoryName":"Tubing dan Towables","childCategoryUrl":"https://www.lazada.co.id/jual-tubing-towables/"},{"childCategoryName":"Akesesoris Olahraga Air","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-olahraga-air/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_9">
                                                            <a href="https://www.lazada.co.id/latihan-dan-fitness/">
                                                                <span>Gym, Yoga &amp; Fitness</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_8">
                                  [{"childCategoryName":"Peralatan Pelatihan Ketangkasan","childCategoryUrl":"https://www.lazada.co.id/shop-pelatihan-kecepatan-ketangkasan/"},{"childCategoryName":"Aksesoris Gym","childCategoryUrl":"https://www.lazada.co.id/shop-aksesoris/"},{"childCategoryName":"Pilates Gym","childCategoryUrl":"https://www.lazada.co.id/pilates/"},{"childCategoryName":"Alat Latihan Angkat Beban","childCategoryUrl":"https://www.lazada.co.id/alat-latihan-angkat-beban/"},{"childCategoryName":"Yoga","childCategoryUrl":"https://www.lazada.co.id/yoga/"},{"childCategoryName":"Peralatan Kardio","childCategoryUrl":"https://www.lazada.co.id/peralatan-latihan-kardio/"},{"childCategoryName":"Perlengkapan Fitnes","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-fitness/"},{"childCategoryName":"Perlengkapan Lari","childCategoryUrl":"https://www.lazada.co.id/temporary-url-sport-catl3-1/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_10">
                                                            <a href="https://www.lazada.co.id/olahraga-raket/">
                                                                <span>Olahraga Raket</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_9">
                                  [{"childCategoryName":"Tenis Meja","childCategoryUrl":"https://www.lazada.co.id/tenis-meja/"},{"childCategoryName":"Badminton","childCategoryUrl":"https://www.lazada.co.id/bulutangkis/"},{"childCategoryName":"Tennis","childCategoryUrl":"https://www.lazada.co.id/tenis/"},{"childCategoryName":"Squash","childCategoryUrl":"https://www.lazada.co.id/squash/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_11">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-perlengkapan-olah-raga/">
                                                                <span>Perlengkapan Olahraga</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_10">
                                  [{"childCategoryName":"Oxrashoan Tinju-Bela Mma","childCategoryUrl":"https://www.lazada.co.id/jual-tinju-bela-diri-mma/"},{"childCategoryName":"Golf Gym","childCategoryUrl":"https://www.lazada.co.id/golf/"},{"childCategoryName":"Bola Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-bola/"},{"childCategoryName":"Basket Gym","childCategoryUrl":"https://www.lazada.co.id/basket/"},{"childCategoryName":"Voli Gym","childCategoryUrl":"https://www.lazada.co.id/voli/"},{"childCategoryName":"Cricket Gym","childCategoryUrl":"https://www.lazada.co.id/cricket/"},{"childCategoryName":"Rugby Gym","childCategoryUrl":"https://www.lazada.co.id/rugby/"},{"childCategoryName":"Takraw Gym","childCategoryUrl":"https://www.lazada.co.id/sepak-takraw/"},{"childCategoryName":"Baseball Gym","childCategoryUrl":"https://www.lazada.co.id/baseball/"},{"childCategoryName":"Perlengkapan Olahraga Senam","childCategoryUrl":"https://www.lazada.co.id/jual-olahraga-senam/"},{"childCategoryName":"Hoki Gym","childCategoryUrl":"https://www.lazada.co.id/olahraga-hoki/"},{"childCategoryName":"Peralatan Cheerleading","childCategoryUrl":"https://www.lazada.co.id/jual-peralatan-cheerleading/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_11_12">
                                                            <a href="https://www.lazada.co.id/sepak-bola/">
                                                                <span>Perlengkapan Sepak Bola</span>
                                                            </a>
                                                            <script type="text" class="J_data_10_11">
                                  [{"childCategoryName":"Sepatu Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepakbola-pria/"},{"childCategoryName":"Sepatu Futsal","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal-pria/"},{"childCategoryName":"Jersey Sepakbola","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-pria/"},{"childCategoryName":"Jersey Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-jersey-sepak-bola-anak-laki-laki/"},{"childCategoryName":"Sepatu Sepakbola Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-sepak-bola/"},{"childCategoryName":"Sepatu Futsal Anak","childCategoryUrl":"https://www.lazada.co.id/jual-sepatu-futsal/"},{"childCategoryName":"Bola","childCategoryUrl":"https://www.lazada.co.id/bola-sepak-bola/"},{"childCategoryName":"Sarung Tangan Keeper","childCategoryUrl":"https://www.lazada.co.id/sarung-tangan-kiper/"},{"childCategoryName":"Pelindung Lutut","childCategoryUrl":"https://www.lazada.co.id/beli-pelindung-tulang-kering/"},{"childCategoryName":"Peralatan Latihan","childCategoryUrl":"https://www.lazada.co.id/beli-peralatan-berlatih-dan-lapangan/"},{"childCategoryName":"Tas","childCategoryUrl":"https://www.lazada.co.id/jual-tas-peralatan/"},{"childCategoryName":"Fan Merchandise Team International","childCategoryUrl":"https://www.lazada.co.id/international-football-clubs-fan-merchandise/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                    <ul class="lzd-site-menu-sub Level_1_Category_No12"
                                                        data-spm="cate_12">
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_1">
                                                            <a href="https://www.lazada.co.id/shop-auto-parts-spares/">
                                                                <span>Suku Cadang &amp; Peralatan Mobil</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_0">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Lampu, Bohlam & LED","childCategoryUrl":"https://www.lazada.co.id/shop-bohlam-led-hid/"},{"childCategoryName":"Rem","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-brake-system/"},{"childCategoryName":"Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shocks-struts-suspension/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-engine-parts/"},{"childCategoryName":"Suku Cadang Body","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-parts/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exhaust-emissions/"},{"childCategoryName":"Aki Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-batteries-accessories/"},{"childCategoryName":"Wiper & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-windshield-wipers-washers/"},{"childCategoryName":"Klakson & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-horns-accessories/"},{"childCategoryName":"Peralatan Pengapian & Kelistrikan","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-ignition-electrical/"},{"childCategoryName":"Peralatan & Suku Cadang Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trim/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_2">
                                                            <a
                                                                href="https://www.lazada.co.id/aksesoris-interior-mobil/">
                                                                <span>Aksesoris Interior Mobil</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_1">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Jok & Trim","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok-aksesoris-kursi/"},{"childCategoryName":"Aksesoris Stir Mobil","childCategoryUrl":"https://www.lazada.co.id/setir-mobil-dan-aksesoris/"},{"childCategoryName":"Persneling","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-shift-boots-knobs/"},{"childCategoryName":"Pedal","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-pedals-pedal-accessories/"},{"childCategoryName":"Spidometer & Pengukur","childCategoryUrl":"https://www.lazada.co.id/alat-pengukur-kecepatan/"},{"childCategoryName":"Aksesoris Elektronik Interior","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-electrical-appliances/"},{"childCategoryName":"Aksesoris Interior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-consoles-organizers/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_3">
                                                            <a
                                                                href="https://www.lazada.co.id/aksesoris-eksterior-mobil/">
                                                                <span>Aksesoris Exterior Mobil</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_2">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Mobil","childCategoryUrl":"https://www.lazada.co.id/penutup-mobil/"},{"childCategoryName":"Stiker & Emblems","childCategoryUrl":"https://www.lazada.co.id/shop-stiker/"},{"childCategoryName":"Lis & Garnis","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-chrome-trim-accessories/"},{"childCategoryName":"Penutup Pelat Nomer","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-license-plate-covers-frames/"},{"childCategoryName":"Aksesoris Serbaguna","childCategoryUrl":"https://www.lazada.co.id/shop-manajemen-kargo/"},{"childCategoryName":"Kaca Angin, Deflektor & Talang Air","childCategoryUrl":"https://www.lazada.co.id/pelindung-dan-talang-air-mobil/"},{"childCategoryName":"Kaca & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-exterior-mirrors/"},{"childCategoryName":"Spoiler, Sayap & Body Kit","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-spoilers-wings-styling-kits/"},{"childCategoryName":"Aksesoris Offroad","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-body-armor/"},{"childCategoryName":"Aksesoris Exterior Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-trailer-accessories/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_4">
                                                            <a href="https://www.lazada.co.id/shop-elektronik/">
                                                                <span>Kamera Mobil, Audio &amp; Video</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_3">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Kamera Mobil & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-kamera-mobil/"},{"childCategoryName":"Headunit","childCategoryUrl":"https://www.lazada.co.id/shop-car-video-in-dash-navigation/"},{"childCategoryName":"Spiker","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-speakers/"},{"childCategoryName":"Subwoofer","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-subwoofers/"},{"childCategoryName":"Power, amplifier & Kapasitor Bank","childCategoryUrl":"https://www.lazada.co.id/shop-car-audio-equalizers/"},{"childCategoryName":"GPS","childCategoryUrl":"https://www.lazada.co.id/shop-motors-gps/"},{"childCategoryName":"Video, TV Aksesoris mobil","childCategoryUrl":"https://www.lazada.co.id/shop-car-video/"},{"childCategoryName":"Aksesoris Audio & Video Lainya","childCategoryUrl":"https://www.lazada.co.id/shop-audio-video-accessories/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_5">
                                                            <a href="https://www.lazada.co.id/shop-perawatan-mobil/">
                                                                <span>Perawatan &amp; Pengkilat Mobil</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_4">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Penyegar & Pewangi Kendaraan","childCategoryUrl":"https://www.lazada.co.id/pengharum-mobil/"},{"childCategoryName":"Pengkilat & Detailing Bodi","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-waxing-kits/"},{"childCategoryName":"Pelapis & Pembersih Kaca","childCategoryUrl":"https://www.lazada.co.id/glass-care/"},{"childCategoryName":"Kompon & Penghilang Baret","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-polishing-rubbing-compounds/"},{"childCategoryName":"Cat Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-paints-primers/"},{"childCategoryName":"Perawatan Ban & Velg","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-tire-wheel-care/"},{"childCategoryName":"Perawatan Interior","childCategoryUrl":"https://www.lazada.co.id/interior-care/"},{"childCategoryName":"Paket Perawatan Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-paket-perawatan-mobil/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_6">
                                                            <a href="https://www.lazada.co.id/roda-dan-ban/">
                                                                <span>Ban &amp; Velg Mobil</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_5">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Velg","childCategoryUrl":"https://www.lazada.co.id/jual-roda/"},{"childCategoryName":"Ban","childCategoryUrl":"https://www.lazada.co.id/jual-ban/"},{"childCategoryName":"Aksesoris Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/jual-aksesoris-roda-suku-cadang/"},{"childCategoryName":"Peralatan Velg & Ban","childCategoryUrl":"https://www.lazada.co.id/shop-tire-parts-air-compressors-inflators/"},{"childCategoryName":"Servis & Pemasangan Velg, Ban","childCategoryUrl":"https://www.lazada.co.id/shop-paket-ban-pelek/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_7">
                                                            <a href="https://www.lazada.co.id/oli-dan-pelumas/">
                                                                <span>Oli &amp; Cairan Mobil</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_6">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-oils/"},{"childCategoryName":"Aditif & Penguat Bensin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-auto-oils-fluids-additives/"},{"childCategoryName":"Pendingin Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-antifreezes-coolants/"},{"childCategoryName":"Pembersih Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-cleaners/"},{"childCategoryName":"Oli Powersteering","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-power-steering-fluids/"},{"childCategoryName":"Cairan & Oli Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-automotive-greases-lubricants/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_8">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-motorcycle-riding-gear/">
                                                                <span>Perlengkapan Berkendara &amp; Helm</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_7">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Helm","childCategoryUrl":"https://www.lazada.co.id/helmets-automotive/"},{"childCategoryName":"Jaket & Pelindung","childCategoryUrl":"https://www.lazada.co.id/jackets/"},{"childCategoryName":"Sarung Tangan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-gloves/"},{"childCategoryName":"Sepatu & Boot","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-footwear/"},{"childCategoryName":"Masker & Pelindung Wajah","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-face-masks/"},{"childCategoryName":"Kacamata Angin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-riding-gear-eyewear/"},{"childCategoryName":"Peralatan Hujan","childCategoryUrl":"https://www.lazada.co.id/shop-pakaian-hujan/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_9">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-motorcycle-parts-spares/">
                                                                <span>Suku Cadang &amp; Peralatan Motor</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_8">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Bohlam, LED & Rumah Lampu","childCategoryUrl":"https://www.lazada.co.id/shop-penerangan/"},{"childCategoryName":"Rem & Suspensi","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brakes-suspension/"},{"childCategoryName":"Knalpot & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/moto-knalpot-system-pembuangan/"},{"childCategoryName":"Aki Motor & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-moto-batteries-accessories/"},{"childCategoryName":"Kaca / Cermin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-mirrors/"},{"childCategoryName":"Filter Motor","childCategoryUrl":"https://www.lazada.co.id/shop-saringan-udara/"},{"childCategoryName":"Suku Cadang Bodi & Rangka","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-body-frame/"},{"childCategoryName":"Suku Cadang Mesin","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-drivetrain-transmission/"},{"childCategoryName":"Busi","childCategoryUrl":"https://www.lazada.co.id/shop-busi-motor/"},{"childCategoryName":"Suku Cadang Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-stands-accessories/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_10">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-motorcycle-exterior-accessories/">
                                                                <span>Aksesoris &amp; Elektronik Motor</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_9">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Sarung Jok","childCategoryUrl":"https://www.lazada.co.id/shop-sarung-jok/"},{"childCategoryName":"Stiker & Emblem","childCategoryUrl":"https://www.lazada.co.id/shop-stiker-emblem/"},{"childCategoryName":"Pengukur","childCategoryUrl":"https://www.lazada.co.id/shop-indikator/"},{"childCategoryName":"Aksesoris Elektronik","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-electronics/"},{"childCategoryName":"Pelindung Plat Nomor","childCategoryUrl":"https://www.lazada.co.id/shop-frame-plat-nomor/"},{"childCategoryName":"Sarung Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-covers/"},{"childCategoryName":"Windshield & Aksesoris","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-windshields-accessories/"},{"childCategoryName":"Bagasi Penyimpanan & Bantalan","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-luggage-saddlebags/"},{"childCategoryName":"Aksesoris & Elektronik Motor Lainny","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-racks/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_11">
                                                            <a
                                                                href="https://www.lazada.co.id/shop-motorcycle-oils-fluids/">
                                                                <span>Ban, Velg, Oli &amp; Cairan Motor</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_10">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Oli Mesin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oli-mesin/"},{"childCategoryName":"Oli Rem Motor","childCategoryUrl":"https://www.lazada.co.id/shop-motorcycle-brake-fluid/"},{"childCategoryName":"Oli Transmisi Motor","childCategoryUrl":"https://www.lazada.co.id/shop-oligirboks/"},{"childCategoryName":"Pendingin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-coolant/"},{"childCategoryName":"Aditif & Penguat Bensin Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pembersih/"},{"childCategoryName":"Pelumas Motor","childCategoryUrl":"https://www.lazada.co.id/shop-pelumas-dan-gemuk/"},{"childCategoryName":"Ban & Velg Motor","childCategoryUrl":"https://www.lazada.co.id/jual-roda-ban-motor/"},{"childCategoryName":"Oli & Cairan Motor Lainnya","childCategoryUrl":"https://www.lazada.co.id/shop-oli-shock-breaker/"}]
                                </script>
                                                        </li>
                                                        <li class="lzd-site-menu-sub-item" data-cate="cate_12_12">
                                                            <a href="https://www.lazada.co.id/mobil-motor/">
                                                                <span>Kendaraan</span>
                                                            </a>
                                                            <script type="text" class="J_data_11_11">
                                  [{"childCategoryName":"","childCategoryUrl":""},{"childCategoryName":"Mobil","childCategoryUrl":"https://www.lazada.co.id/shop-mobil/"},{"childCategoryName":"Motor","childCategoryUrl":"https://www.lazada.co.id/shop-sepeda-motor-skuter/"}]
                                </script>
                                                        </li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="lzd-menu-labels" data-spm="menu">
                                    <a class="lzd-menu-labels-item" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>">
                                        <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                            <img alt="TOTO TOGEL" class="lzd-site-nav-menu-iconfont-img"
                                                src="https://imgsaya.io/download/AXDNwWVl.gif" />
                                        </span>
                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-LazMall">&#xe629;</i>-->
                                        <span class="lzd-menu-labels-item-text">TOTO TOGEL</span>
                                    </a>
                                    <a class="lzd-menu-labels-item" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>">
                                        <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                            <img alt="<?php echo $BRAND ?>" class="lzd-site-nav-menu-iconfont-img"
                                                src="https://imgsaya.io/download/AXDNwWVl.gif" />
                                        </span>
                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-MobileTop1">&#xe768;</i>-->
                                        <span class="lzd-menu-labels-item-text"><?php echo $BRAND ?></span>
                                    </a>
                                    <a class="lzd-menu-labels-item" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>">
                                        <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                            <img alt="BANDAR TOGEL" class="lzd-site-nav-menu-iconfont-img"
                                                src="https://imgsaya.io/download/AXDNwWVl.gif" />
                                        </span>
                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-channel-Vouchers">&#xe76a;</i>-->
                                        <span class="lzd-menu-labels-item-text">BANDAR TOGEL</span>
                                    </a>
                                    <a class="lzd-menu-labels-item" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>">
                                        <span class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon">
                                            <img alt="SITUS TOTO" class="lzd-site-nav-menu-iconfont-img"
                                                src="https://imgsaya.io/download/AXDNwWVl.gif" />
                                        </span>
                                        <!--<i class="lzd-site-nav-menu-iconfont lzd-menu-labels-item-icon lazada-ic-Categories">&#xe765;</i>-->
                                        <span class="lzd-menu-labels-item-text">SITUS TOTO</span>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function generateUUID() {
                    var d = new Date().getTime();
                    var uuid = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
                        /[xy]/g,
                        function (c) {
                            var r = (d + Math.random() * 16) % 16 | 0;
                            d = Math.floor(d / 16);
                            return (c == "x" ? r : (r & 0x7) | 0x8).toString(16);
                        }
                    );
                    return uuid;
                }
                var lzdDocCookies = {
                    getItem: function (sKey) {
                        return (
                            decodeURIComponent(
                                document.cookie.replace(
                                    new RegExp(
                                        "(?:(?:^|.*;)\\s*" +
                                        encodeURIComponent(sKey).replace(
                                            /[\-\.\+\*]/g,
                                            "\\$&"
                                        ) +
                                        "\\s*\\=\\s*([^;]*).*$)|^.*$"
                                    ),
                                    "$1"
                                )
                            ) || null
                        );
                    },
                    setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
                        if (
                            !sKey ||
                            /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)
                        ) {
                            return false;
                        }
                        var sExpires = "";
                        var exdate = new Date();
                        exdate.setDate(exdate.getDate() + vEnd);
                        sExpires = ";expires=" + exdate.toGMTString();
                        document.cookie =
                            encodeURIComponent(sKey) +
                            "=" +
                            encodeURIComponent(sValue) +
                            sExpires +
                            (sDomain ? "; domain=" + sDomain : "") +
                            (sPath ? "; path=" + sPath : "; path=/") +
                            (bSecure ? "; secure" : "");
                        return true;
                    },
                    hasItem: function (sKey) {
                        if (!sKey) {
                            return false;
                        }
                        return new RegExp(
                            "(?:^|;\\s*)" +
                            encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") +
                            "\\s*\\="
                        ).test(document.cookie);
                    },
                    removeItem: function (sKey, sPath, sDomain) {
                        if (!this.hasItem(sKey)) {
                            return false;
                        }
                        document.cookie =
                            encodeURIComponent(sKey) +
                            "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" +
                            (sDomain ? "; domain=" + sDomain : "") +
                            (sPath ? "; path=" + sPath : "; path=/");
                        return true;
                    },
                };
                var LZD_HOST_ARRAY = [
                    ".lazada.co.id",
                    ".lazada.com.my",
                    ".lazada.com.ph",
                    ".lazada.sg",
                    ".lazada.co.th",
                    ".lazada.vn",
                    ".daraz.com.bd",
                    ".daraz.lk",
                    ".shop.com.mm",
                    ".daraz.com.np",
                    ".daraz.pk",
                    ".lazada.test",
                ];
                var currentDomain = ".lazada.sg";
                var UUID = generateUUID();
                var t_uid = lzdDocCookies.getItem("t_uid");
                var anon_uid = lzdDocCookies.getItem("anon_uid");
                for (var i = 0; i < LZD_HOST_ARRAY.length; i++) {
                    if (window.location.host.indexOf(LZD_HOST_ARRAY[i]) > -1) {
                        currentDomain = LZD_HOST_ARRAY[i];
                    }
                }
                if (!lzdDocCookies.getItem("lzd_cid")) {
                    lzdDocCookies.setItem("lzd_cid", UUID, 365, null, currentDomain);
                }
                if (!lzdDocCookies.getItem("t_uid")) {
                    if (anon_uid) {
                        lzdDocCookies.setItem(
                            "t_uid",
                            anon_uid,
                            365,
                            null,
                            currentDomain
                        );
                    } else {
                        lzdDocCookies.setItem("t_uid", UUID, 365, null, currentDomain);
                    }
                }
            </script>
        </div>
    </div>
    <input type="hidden" id="header-pc-config"
        value='{"voyagerVersion":"2","voyagerEnv":"product","assetsRefactor":false,"regionID":"ID","language":"id","react":false,"needUmid":false,"channel":"pdp","customName":"default","version":{"nav":"5.2.32","search":"0.4.11","menu":"5.0.45","menuNav":"5.0.73","suffix":""},"needRetCode":true,"retCodePageName":"","hideCategory":true,"needReact":false,"thymeleaf":true,"grayFilter":{"TH":false,"SG":false,"MY":false,"ID":false,"PH":false,"VN":false},"isHomePage":false,"isMiniHeader":false,"java":true}' />
    <!-- Floating Cart UMD -->
    <script>
        window.__LIB_CART_SCENE__ = "pdp";
        window.__LIB_CART_VERSION__ = "1.0.16";
        window.__LIB_CART_ASSETS_ENV__ = "product";
    </script>
    <!-- PC Login / Signup Popup UMD -->
    <!-- online version -->
    <script>
        window.__LIB_LOGIN_SIGNUP_POPUP_VERSION__ = "0.0.4";
    </script>
    <div id="pdp-nav">
        <div>
            <div>
                <style>
                    .breadcrumb_list {
                        width: 1188px;
                        height: 48px;
                        border-bottom: 1px solid #eff0f5;
                        margin: 0 auto;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .breadcrumb_list_empty {
                        height: 0;
                        border: none;
                        overflow: hidden;
                    }

                    .breadcrumb_list .breadcrumb {
                        padding-left: 0;
                        margin-left: -4px;
                        height: 48px;
                        vertical-align: middle;
                        display: inline-block;
                        white-space: nowrap;
                    }

                    .breadcrumb_list .breadcrumb .breadcrumb_item {
                        position: relative;
                        display: table-cell;
                        vertical-align: middle;
                        font-size: 13px;
                        font-weight: 300;
                        height: 48px;
                    }

                    .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text {
                        vertical-align: middle;
                        padding: 0;
                        margin: 0;
                        line-height: 100%;
                        display: inline-block;
                        font-weight: 300;
                    }

                    .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor {
                        display: inline-block;
                        vertical-align: middle;
                        color: #1a9cb7;
                        padding: 0 4px;
                        font-size: 14px;
                        font-family: Roboto-Regular, Helvetica, Arial, sans-serif;
                        max-width: 200px;
                        white-space: nowrap;
                        line-height: 16px;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor_last {
                        color: #757575;
                        max-width: none;
                        height: 16px;
                        line-height: 16px;
                        white-space: normal;
                    }

                    .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_right_arrow {
                        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACKUExURUxpcYGBgYGBgYWFhYCAgICAgICAgIKCgv///4GBgZWVlYyMjIGBgYCAgIKCgoGBgYGBgaqqqoODg7+/v4GBgZKSko6OjoGBgYWFhYGBgYSEhIGBgZmZmYCAgIGBgYGBgYCAgICAgIGBgYCAgICAgIiIiICAgIeHh4GBgYSEhIODg4GBgYGBgYCAgPLijmAAAAAtdFJOUwCS7jCDi/E1AbYMFJrrK9ToAycEugcJtBfYG64Fp+S+vb+god0e4SLcHyPgwPJLUkAAAAB6SURBVDjLY2AYYoCdkwu/AgVdHTG8Crj5dUVE8aqQkNQVl8GrQkpDV1oYrwpVbV1ZQbwq1OV0lTnwqhAS0OXBr4KPV5cRf3AwM+myEghRNl0WihQQsoKQIwl5U0tOVwmfvKYa/qCWUsEfWYSim2CCkddVFKMs0Q5aAABM4wlSQJ87yAAAAABJRU5ErkJggg==);
                        background-repeat: no-repeat;
                        background-size: contain;
                        display: inline-block;
                        width: 16px;
                        height: 16px;
                        vertical-align: middle;
                    }
                </style>
                <style>
                    .baxia-dialog {
                        display: none !important;
                    }
                </style>
                <div data-spm="breadcrumb" id="J_breadcrumb_list" class="breadcrumb_list breadcrumb_custom_cls">
                    <ul class="breadcrumb" id="J_breadcrumb"></ul>
                </div>
                <script>
                    function htmlEncodePdp(input) {
                        var el = document.createElement("div");
                        el.innerText = input;
                        return el.innerHTML;
                    }
                    window.LZD = window.LZD || {};
                    window.LZD.updateBreadcrumb = function (list) {
                        if (!list || !list instanceof Array) {
                            return;
                        }
                        var parentNode = document.getElementById("J_breadcrumb");
                        while (parentNode.hasChildNodes()) {
                            parentNode.removeChild(parentNode.firstChild);
                        }
                        var size = list.length;
                        for (var i = 0; i < size; i++) {
                            var item = list[i];
                            item.title = htmlEncodePdp(item.title);
                            var liNode = document.createElement("li");
                            liNode.className = "breadcrumb_item";
                            if (i === size - 1) {
                                liNode.innerHTML =
                                    '<span class="breadcrumb_item_text">' +
                                    '<span class="breadcrumb_item_anchor breadcrumb_item_anchor_last">' +
                                    item.title +
                                    "</span>" +
                                    "</span>";
                            } else {
                                if (item.url) {
                                    item.url =
                                        window.location.host.indexOf("h5.lazada.") > -1
                                            ? item.url.replace("www.lazada.", "h5.lazada.")
                                            : item.url;
                                }
                                liNode.innerHTML =
                                    '<span class="breadcrumb_item_text">' +
                                    '<a title="' +
                                    item.title +
                                    '" href="' +
                                    item.url +
                                    '" class="breadcrumb_item_anchor">' +
                                    "<span>" +
                                    item.title +
                                    "</span>" +
                                    "</a>" +
                                    '<div class="breadcrumb_right_arrow"></div>' +
                                    "</span>";
                            }
                            parentNode.appendChild(liNode);
                        }
                        var breadcrumbListNode =
                            document.getElementById("J_breadcrumb_list");
                        var cls = breadcrumbListNode.className;
                        if (size === 0) {
                            if (cls.indexOf("breadcrumb_list_empty") < 0) {
                                breadcrumbListNode.className = "breadcrumb_list_empty";
                            }
                        } else {
                            breadcrumbListNode.className = "breadcrumb_list";
                        }
                    };
                </script>
            </div>
        </div>
    </div>
    <div id="container" style="visibility: visible">
        <div id="root" class="pdp-block" data-reactroot="">
            <div id="module_core" class="pdp-block module">
                <p></p>
            </div>
            <div id="block-r3bZB9J63C" class="pdp-block pdp-block_group_buy_tip">
                <div id="module_group_buy_tip" class="pdp-block module"></div>
            </div>
            <div id="block-9uUVSSMxTb" class="pdp-block pdp-block__main-information">
                <div id="block-W59OjAyxSy" class="pdp-block pdp-block__gallery">
                    <div id="module_item_gallery_1" class="pdp-block module">
                        <div class="item-gallery" data-spm="gallery">
                            <div class="gallery-preview-panel">
                                <div class="gallery-preview-panel__content">
                                    <img class="pdp-mod-common-image gallery-preview-panel__image"
                                        alt="<?php echo $BRAND ?> Yayasan Perguruan Kristen Indonesia"
                                        src="https://i.imgur.com/LiQXA2A.jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="block-n8THsmEaVS" class="pdp-block pdp-block__main-information-detail">
                    <div id="block-6QhDn4z1db" class="pdp-block">
                        <div id="block-ssuYrXSucaM" class="pdp-block pdp-block__product-detail">
                            <div id="module_flash_sale" class="pdp-block module"></div>
                            <div id="module_crazy_deal" class="pdp-block module"></div>
                            <div id="module_redmart_top_promo_banner" class="pdp-block module"></div>
                            <style>
                                .n-columns-2 {
                                    display: grid;
                                    grid-template-columns: repeat(2, 1fr);
                                    font-weight: 700;
                                    width: 350px;
                                }

                                .n-columns-2 a {
                                    text-align: center;
                                }

                                .login,
                                .register {
                                    color: #fff;
                                    padding: 13px 10px;
                                }

                                .login,
                                .login-button {
                                    border: 1px solid #ff0000;
                                    background: linear-gradient(to bottom, #eece18 0, #7a8692 100%);
                                }

                                .register,
                                .register-button {
                                    background: linear-gradient(to bottom, #ffa600 0, #624800 100%);
                                    border: 1px solid #ffbf00;
                                }
                            </style>
                            <div id="module_product_title_1" class="pdp-block module">
                                <div class="pdp-product-title">
                                    <div class="pdp-mod-product-badge-wrapper">
                                        <h1 class="pdp-mod-product-badge-title">
                                            <?php echo $BRAND ?> Yayasan Perguruan Kristen Indonesia
                                        </h1>
                                        <div class="n-columns-2">
                                            <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noreferrer"
                                                class="login">LOGIN</a>
                                            <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noreferrer"
                                                class="register">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="module_pre-order-tag" class="pdp-block module"></div>
                            <div id="block-C7wdxsrWYA0" class="pdp-block pdp-block__rating-questions-summary">
                                <div id="block-qkzkCPtx4vZ" class="pdp-block pdp-block__rating-questions">
                                    <div id="module_product_review_star_1" class="pdp-block module">
                                        <div class="pdp-review-summary">
                                            <div class="container-star pdp-review-summary__stars pdp-stars_size_s">
                                                <img class="star"
                                                    src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png" /><img
                                                    class="star"
                                                    src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png" />
                                                <img class="star"
                                                    src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png" /><img
                                                    class="star"
                                                    src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png" />
                                                <img class="star"
                                                    src="https://i.gyazo.com/7b17449b7b047a1f1a859a29ec996e97.png" />
                                            </div>
                                            <a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-review-summary__link"
                                                data-spm-anchor-id="12anj4u.pdp_revamp.0.0">11.111 Penilaian</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="block-ztlO6gvyRIv" class="pdp-block pdp-block__share">
                                    <div id="block--PRjoF98du4" class="pdp-block"
                                        style="display: inline-block; width: 24px; height: 54px">
                                        <div id="module_product_share_1" class="pdp-block module"></div>
                                    </div>
                                    <div id="block-7fC8S_Z8DDj" class="pdp-block" style="display: inline-block">
                                        <div id="module_product_wishlist_1" class="pdp-block module">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="module_product_brand_1" class="pdp-block module">
                                <div class="pdp-product-brand">
                                    <span class="pdp-product-brand__name">Merek<!-- -->:<!-- -->
                                    </span>
                                    <a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__brand-link"
                                        target="_self" href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>"><?php echo $BRAND ?></a>
                                    <div class="pdp-product-brand__divider"></div>
                                </div>
                            </div>

                            <div style="display: flex">
                                <div style="width: 50%">
                                    <div id="module_product_attrs" class="pdp-block module"></div>
                                    <div id="block-cKVxLtoIbl2" class="pdp-block module"></div>
                                    <div id="module_product_price_1" class="pdp-block module">
                                        <div class="pdp-mod-product-price">
                                            <div class="pdp-product-price" bis_skin_checked="1">
                                                <span
                                                    class="notranslate pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl"
                                                    data-spm-anchor-id="12anj4u.pdp_revamp.0.i0.241073bdUG5ius">Rp 10.000</span>
                                                <div class="origin-block" bis_skin_checked="1">
                                                    <span
                                                        class="notranslate pdp-price pdp-price_type_deleted pdp-price_color_lightgray pdp-price_size_xs">Rp 100.000</span><span
                                                        class="pdp-product-price__discount">-90%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 50%">
                                    <div id="module_redmart_product_price" class="pdp-block module"></div>
                                    <div id="module_promotion_tags" class="pdp-block module"></div>
                                    <div id="module_installment" class="pdp-block module"></div>
                                    <div id="module_quantity-input" class="pdp-block module">
                                        <div class="pdp-mod-product-info-section sku-quantity-selection"
                                            bis_skin_checked="1">
                                            <h6 class="section-title">Kuantitas</h6>
                                            <div class="section-content" bis_skin_checked="1">
                                                <div class="next-number-picker next-number-picker-inline"
                                                    bis_skin_checked="1">
                                                    <div class="next-number-picker-handler-wrap" bis_skin_checked="1">
                                                        <a unselectable="unselectable"
                                                            class="next-number-picker-handler next-number-picker-handler-up">
                                                            <span unselectable="unselectable"
                                                                class="next-number-picker-handler-up-inner"><i
                                                                    class="next-icon next-icon-add next-icon-medium"></i></span>
                                                        </a>
                                                        <a unselectable="unselectable"
                                                            class="next-number-picker-handler next-number-picker-handler-down next-number-picker-handler-down-disabled">
                                                            <span unselectable="unselectable"
                                                                class="next-number-picker-handler-down-inner"><i
                                                                    class="next-icon next-icon-minus next-icon-medium"></i></span>
                                                        </a>
                                                    </div>
                                                    <div class="next-number-picker-input-wrap" bis_skin_checked="1">
                                                        <span
                                                            class="next-input next-input-single next-input-medium next-number-picker-input">
                                                            <input min="1" max="5" step="1" autocomplete="off"
                                                                type="text" height="100%" value="1" />
                                                        </span>
                                                    </div>
                                                </div>
                                                <span class="quantity-content-default"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .content h2,
                                .content h3 {
                                    text-align: center;
                                }

                                .content p {
                                    text-align: justify;
                                }

                                .content li {
                                    font-weight: bold;
                                    list-style-type: decimal;
                                    font-size: 15px;
                                }

                                .cell2 {
                                    margin-bottom: 1em;
                                }

                                .cell2 li {
                                    font-weight: normal;
                                    font-size: 14px;
                                }

                                .content a {
                                    font-weight: bold;
                                    color: #ff0000;
                                }

                                .content a:hover {
                                    color: #d9ff00;
                                }
                            </style>
                            <div class="content">
                                <p><a href="https://cbtakm.smasabondowoso.sch.id/guru/<?php echo $SMALLBRAND?>"><strong  style="color: rgb(255, 0, 0);"><?php echo $BRAND ?></strong></a> sekolah SMA Negeri 1 Bondowosi ini sering melakukan kegiatan sosial berupa penerimaan serta penyaluran zakat fitrah setiap tahunnya, bahkan setiap pelajar yang belajar ditempat ini bisa mendapatkan fasilitas belajar dengan sarana dan prasarana pembelajaran yang modern dan maju, ditambah Gedung olahraga, ruang kelas, serta tempat ibadah yang cukup bagus untuk semua siswa dan siswinya.</p>

                            </div>
                            <div id="block-O-HF3LN4YVI" class="pdp-block pdp-block__delivery-seller">
                                <div id="module_seller_delivery" class="pdp-block module">
                                    <div data-spm="delivery_options" data-nosnippet="true"></div>
                                </div>
                                <div id="module_redmart_delivery" class="pdp-block module"></div>
                                <div id="module_seller_warranty" class="pdp-block module"></div>
                                <div id="module_guide_app" class="pdp-block module"></div>
                                <div id="module_redmart_service" class="pdp-block module"></div>
                                <div id="module_seller_info" class="pdp-block module">
                                    <div class="seller-container" data-spm="seller">
                                        <div class="seller-name">
                                            <div class="seller-name__wrapper">
                                                <div class="seller-name__title"><?php echo $BRAND ?> @ Seo Patkai - By thononalpesradio.com </div>
                                                <div class="seller-name__detail" data-spm="seller">
                                                    <a
                                                        class="pdp-link pdp-link_size_l pdp-link_theme_black seller-name__detail-name"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pdp-seller-info-pc"></div>
                                    </div>
                                </div>
                                <div id="module_redmart_seller_info" class="pdp-block module"></div>
                            </div>

                            <script>
                                // add crossorigin for error monitoring
                                var requirejs = {
                                    onNodeCreated: function (node, config, id, url) {
                                        node.setAttribute("crossorigin", "anonymous");
                                    },
                                };
                            </script>
                            <script
                                src="https://g.lazcdn.com/g/??mtb/lib-promise/3.1.3/polyfillB.js,mtb/lib-mtop/2.5.1/mtop.js,lazada-decorate/lazada-mod-lib/0.0.20/LazadaModLib.min.js"
                                charset="utf-8"></script>
                            <script
                                src="https://g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js"></script>
                            <script>
                                function pdpLog(
                                    logkey,
                                    gmkey = "CLK",
                                    args = {},
                                    chksum = ""
                                ) {
                                    if (!logkey) return;
                                    var pdpMsiteExperimentEnable =
                                        window.__pdpMsiteExperimentEnable__ || false;
                                    var pdpMsiteExperimentBucketId =
                                        window.__pdpMsiteExperimentConfig__
                                            ? window.__pdpMsiteExperimentConfig__.bucketId
                                            : "-";

                                    var query = "";
                                    if (
                                        Object.prototype.toString.call(args) === "[object Object]"
                                    ) {
                                        query = Object.keys(args)
                                            .map(function (key) {
                                                return (
                                                    encodeURIComponent(key) +
                                                    "=" +
                                                    encodeURIComponent(args[key])
                                                );
                                            })
                                            .join("&");
                                        query = "&" + query;
                                    }

                                    var gokey =
                                        "pdpMsiteExperimentEnable=" +
                                        pdpMsiteExperimentEnable +
                                        "&pdpMsiteExperimentBucketId=" +
                                        pdpMsiteExperimentBucketId +
                                        query;

                                    if (window.goldlog && window.goldlog.record) {
                                        window.goldlog.record(logkey, gmkey, gokey, chksum);
                                    } else {
                                        window.goldlog_queue = window.goldlog_queue || [];
                                        window.goldlog_queue.push({
                                            action: "goldlog.record",
                                            arguments: [logkey, gmkey, gokey],
                                        });
                                    }
                                }

                                function reportMtopData() {
                                    if (window.__wpk && window.__pdpMtopStartTime) {
                                        window.__wpk.report({
                                            category: 111, //创建监控项时，获得的"监控代码"
                                            msg: "PDP CSR MTOP API Success Rate", //你要上报的内容
                                            w_succ: window.__pdpMtopStatus || 0, // 可选，若监控项需要监控率，则设置此字段可选为0、1
                                            wl_avgv1: window.__pdpMtopEndTime
                                                ? window.__pdpMtopEndTime - window.__pdpMtopStartTime
                                                : 0, // 可选，若监控项需要监控均值，则设置次此字段，必须为数字
                                            c1: window.__regionID__,
                                        });
                                    }
                                }

                                function reportMtopData2() {
                                    if (window.__wpk && window.__pdpTriggerCSR) {
                                        window.__wpk.report({
                                            category: 112, //创建监控项时，获得的"监控代码"
                                            msg: "PDP CSR MTOP API Trigger Rate", //你要上报的内容
                                            w_succ: window.__pdpTriggerMtopStatus, // 可选，若监控项需要监控率，则设置此字段可选为0、1
                                            c1: window.__regionID__,
                                        });
                                    }
                                }

                                function reportMtopData3() {
                                    if (window.__wpk) {
                                        window.__wpk.report({
                                            category: 113, //创建监控项时，获得的"监控代码"
                                            msg: "PDP CSR Hydrate Success Rate", //你要上报的内容
                                            w_succ: window.__pdpHydrateStatus || 0, // 可选，若监控项需要监控率，则设置此字段可选为0、1
                                            c1: window.__regionID__,
                                        });
                                    }
                                }

                                function hydrate() {
                                    var modulePath =
                                        "https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js";

                                    window.__pdpHydrateStatus = 0;
                                    require([modulePath], function (app) {
                                        try {
                                            console.log("start run...");
                                            app.run(__moduleData__, function () {
                                                timings.render = Date.now();
                                                pdpLog("/lazada_bounce_rendered", "EXP", {
                                                    content: "pdp-m",
                                                });
                                                window.__pdpHydrateStatus = 1;
                                                var loading =
                                                    document.getElementById("pdp-skeleton-new");
                                                if (loading) {
                                                    loading.style.display = "none";
                                                }
                                                reportMtopData3();
                                            });
                                        } catch (e) {
                                            console.error("render error", e);
                                            reportMtopData3();
                                            if (window._blReport) {
                                                window._blReport("error", [
                                                    e,
                                                    {
                                                        file: "page.html",
                                                    },
                                                ]);
                                            }
                                            // window.location.reload();
                                        }
                                    });
                                }
                            </script>

                            <!-- start footer -->
                            <input type="hidden" id="footer-pc-config"
                                value='{"voyagerVersion":"2","voyagerEnv":"product","assetsRefactor":false,"regionID":"ID","language":"id","react":false,"needUmid":false,"channel":"pdp","customName":"default","version":{"nav":"5.2.38","search":"0.4.11","menu":"5.0.45","menuNav":"5.0.73","suffix":""},"needRetCode":true,"retCodePageName":"","hideCategory":true,"needReact":false,"thymeleaf":true,"grayFilter":{"TH":false,"SG":false,"MY":false,"ID":false,"PH":false,"VN":false},"isHomePage":false,"isMiniHeader":false,"java":true}' />
                            <link rel="stylesheet"
                                href="https://g.lazcdn.com/g/lzdmod/desktop-footer/6.1.1/??pc/index.css" />
                            <script>
                                window.g_config = window.g_config || {};
                                window.g_config.loadedCss = window.g_config.loadedCss || [];
                                window.g_config.loadedCss = [
                                    "@ali/lzdmod-desktop-footer/pc/index.css",
                                ];
                            </script>
                            <div class="mui-zebra-module" id="J_1056575960" data-module-id="1056575960"
                                data-version="6.1.1" data-spm="1056575960">
                                <script type="text/data" class="J-dynamic-data"></script>
                                <section class="desktop-footer" data-mod-name="@ali/lzdmod-desktop-footer/pc/index"
                                    data-config="{}">
                                    <div class="footer-first">
                                        <div class="lzd-footer-inner" data-spm="footer_top">
                                            <div class="lzd-footer-width-25">
                                                <h3 class="footer-title">Layanan Pelanggan</h3>
                                                <ul class="footer-list">
                                                    <li class="footer-li">
                                                        <a href="https://www.lazada.co.id/helpcenter/">Pusat Bantuan</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a href="https://www.lazada.co.id/helpcenter/payments/">Cara
                                                            Pembelian</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="https://www.lazada.co.id/helpcenter/shipping-and-delivery/">Pengiriman</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="https://www.lazada.co.id/helpcenter/products-on-lazada/#answer-faq-internationalproduct-ans">Kebijakan
                                                            Produk Internasional</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="https://www.lazada.co.id/helpcenter/returns-refunds/#answer-faq-return-ans">Cara
                                                            Pengembalian</a>
                                                    </li>
                                                    <li class="--js-csc-trigger">
                                                        <a style="
                                  background: #f36f36;
                                  display: inline-block;
                                  color: #0f136d;
                                  padding: 2px 4px;
                                  cursor: pointer;
                                ">Ada pertanyaan? Hubungi kami di live chat (24
                                                            Jam)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="lzd-footer-width-25">
                                                <h3 class="footer-title">Jelajahi Lazada</h3>
                                                <ul class="footer-list">
                                                    <li class="footer-li">
                                                        <a href="//group.lazada.com/en/about/">Tentang Lazada</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="//pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/partnership/AffiliatesID">
                                                            Afﬁliate Program
                                                        </a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a href="//www.lazada.com/work-at-lazada/">Karir</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/terms-of-use">
                                                            Syarat &amp; Ketentuan
                                                        </a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/PrivacyPolicy">
                                                            Kebijakan Privasi
                                                        </a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a href="//group.lazada.com/en/press-release/">Press &amp;
                                                            Media</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a href="https://www.lazada.co.id/marketplace/">Jual Di
                                                            Lazada</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a href="https://www.lazada.co.id/security/">Lazada Security</a>
                                                    </li>
                                                    <li class="footer-li">
                                                        <a
                                                            href="https://pages.lazada.co.id/wow/gcp/route/lazada/id/upr_1000345_lazada/channel/id/upr-router/id_upr?hybrid=1&amp;data_prefetch=true&amp;prefetch_replace=1&amp;at_iframe=1&amp;wh_pid=/lazada/channel/id/legal/ipr-policy">
                                                            Intellectual Property Protection
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="lzd-footer-width-50">
                                                <div class="lzd-footer-app-downloads">
                                                    <div
                                                        class="lzd-footer-appIcon pull-left logo icon-logo-lazada-footer">
                                                    </div>
                                                    <div class="pull-left lzd-app-download-text">
                                                        <div class="title">Go where your heart beats</div>
                                                        <div class="text">Download the App</div>
                                                    </div>
                                                    <div class="pull-left" style="width: 290px">
                                                        <a class="lzd-footer-sprit pull-left icon-appStore-footer icon-appstore-footer"
                                                            href="https://bit.ly/lazada-ios-app"></a>
                                                        <a class="lzd-footer-sprit pull-left icon-android-footer icon-appstore-footer"
                                                            href="https://bit.ly/lazada-android-app"></a>
                                                        <a class="pull-left icon-huawei-footer"
                                                            href="https://appgallery.huawei.com/#/app/C100164557"></a>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-second">
                                        <div class="lzd-footer-inner">
                                            <div class="lzd-footer-width-32">
                                                <h3 class="lzd-footer-h3">Metode Pembayaran</h3>
                                                <span class="lzd-icon-payment lzd-footer-sprit"
                                                    style="background-position: -768px -768px"></span>
                                                <span class="lzd-icon-payment lzd-footer-sprit"
                                                    style="background-position: -329px -768px"></span>
                                                <span class="lzd-icon-payment lzd-footer-sprit"
                                                    style="background-position: -209px -829px"></span>
                                            </div>
                                            <div class="lzd-footer-width-32 lzd-footer-spacing">
                                                <h3 class="lzd-footer-h3">Jasa Pengiriman</h3>
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01RNizk522j2cPtaRjc_!!6000000007155-2-tps-96-70.png"
                                                    alt="Lazada Logistics" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01Y8JAuA1pB4EhCiF0K_!!6000000005321-2-tps-96-70.png"
                                                    alt="JNE" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01qvF2hw1lWoZrnGZev_!!6000000004827-2-tps-96-70.png"
                                                    alt="Ninja Express" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01DGonqR1H5qmpBI2hf_!!6000000000707-2-tps-96-70.png"
                                                    alt="GoSend" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i2/O1CN01ENOAXK1UR05CB9iwA_!!6000000002513-2-tps-96-70.png"
                                                    alt="Sicepat" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01mFypLB1jt8eRUFBC0_!!6000000004605-2-tps-96-70.png"
                                                    alt="Grab Parcel" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN011Ya3Kg1OSw3sg81tm_!!6000000001705-2-tps-96-70.png"
                                                    alt="J &amp; T" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN019tUhkL1abQnOURPrd_!!6000000003348-2-tps-96-70.png"
                                                    alt="anter" style="height: 70px; width: 96px" />
                                                <img class="lzd-icon-delivery"
                                                    src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01uOZizA1UOFhot1z5u_!!6000000002507-2-tps-96-70.png"
                                                    alt="SAP" style="height: 70px; width: 96px" />
                                            </div>
                                            <div class="lzd-footer-width-32">
                                                <h3 class="lzd-footer-h3">Verified by</h3>
                                                <div class="pull-left">
                                                    <a href="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01bvSldX1gkULXWGauo_!!6000000004180-2-tps-1190-1683.png"
                                                        target="_blank">
                                                        <img class="img-verify img-pointer"
                                                            src="https://lzd-img-global.slatic.net/g/tps/tfs/TB1lbmoqYr1gK0jSZR0XXbP8XXa-340-200.png"
                                                            alt="ISO" style="height: 60px" />
                                                    </a>
                                                </div>
                                                <div class="pull-left">
                                                    <a href="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01dinKMe26jjo1yfe9j_!!6000000007698-0-tps-2480-3509.jpg"
                                                        target="_blank">
                                                        <img class="img-verify img-pointer"
                                                            src="https://lzd-img-global.slatic.net/g/tps/tfs/TB1jyJMv.H1gK0jSZSyXXXtlpXa-184-120.png"
                                                            alt="PCI DSS" style="height: 60px" />
                                                    </a>
                                                </div>
                                                <div class="pull-left"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-fourth">
                                        <div class="lzd-footer-inner">
                                            <div class="lzd-footer-width-50" data-spm="venture">
                                                <h3 class="lzd-footer-title">
                                                    Lazada Southeast Asia
                                                </h3>
                                                <a class="lzd-footer-sprit lzd-footer-country country-id"
                                                    href="https://www.lazada.co.id"></a>
                                                <a class="lzd-footer-sprit lzd-footer-country country-my"
                                                    href="https://www.lazada.com.my"></a>
                                                <a class="lzd-footer-sprit lzd-footer-country country-ph"
                                                    href="https://www.lazada.com.ph"></a>
                                                <a class="lzd-footer-sprit lzd-footer-country country-sg"
                                                    href="https://www.lazada.sg"></a>
                                                <a class="lzd-footer-sprit lzd-footer-country country-th"
                                                    href="https://www.lazada.co.th"></a>
                                                <a class="lzd-footer-sprit lzd-footer-country country-vn"
                                                    href="https://www.lazada.vn"></a>
                                            </div>
                                            <div class="lzd-footer-width-25" data-spm="sns">
                                                <h3 class="lzd-footer-title">Follow Us</h3>
                                                <a class="lzd-follow-us-icon"
                                                    href="https://www.facebook.com/LazadaIndonesia"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_fbk" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01Wdetn224xMIRNihao_!!6000000007457-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="fb" />
                                                </a>
                                                <a class="lzd-follow-us-icon"
                                                    href="https://www.linkedin.com/company/lazada/"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_lnk" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01D6oQr31GPG1ONK9jd_!!6000000000614-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="linkin" />
                                                </a>
                                                <a class="lzd-follow-us-icon"
                                                    href="https://www.youtube.com/@LazadaIndonesia"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_ytb" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN01zt1zOu1zsFnzoIWje_!!6000000006769-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="yt" />
                                                </a>
                                                <a class="lzd-follow-us-icon" href="https://www.pinterest.com/lazadaid/"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_pnt" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i2/O1CN01b9cK511pjsP40xyAX_!!6000000005397-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="pnt" />
                                                </a>
                                                <a class="lzd-follow-us-icon"
                                                    href="https://www.instagram.com/lazada_id/"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_ins" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN011gka8L1E0PIZlHK7e_!!6000000000289-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="ins" />
                                                </a>
                                                <a class="lzd-follow-us-icon" href="https://twitter.com/LazadaID"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_twr" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i3/O1CN01bSHOIg1O2N9lO20XK_!!6000000001647-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="tw" />
                                                </a>
                                                <a class="lzd-follow-us-icon" href="https://www.tiktok.com/@lazadaid"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_tkk" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i4/O1CN0193C9ay1QIykTmUlwk_!!6000000001954-2-tps-34-34.png"
                                                        style="width: 32px; height: 32px" alt="tiktok" />
                                                </a>
                                                <a class="lzd-follow-us-icon" href="https://www.lazada.co.id/blog/"
                                                    data-spm-click="gostr=/lzdpub.footer.sns;locaid=d_blg" style="
                              display: inline-block;
                              width: 32px;
                              height: 32px;
                            ">
                                                    <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01EShTwh1uKIMLn9AjA_!!6000000006018-0-tps-34-34.jpg"
                                                        style="width: 32px; height: 32px" alt="Lazada Blg" />
                                                </a>
                                            </div>
                                            <div class="lzd-footer-width-25">
                                                <div class="lzd-footer-copyright">© Lazada 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div id="webim-container"
                                    onclick="javascript:goldlog.record('/lazada.IM.im-msgbox','CLK','platform=desktop&amp;pagename='+ window.LZD_RETCODE_PAGENAME || 'other','GET')">
                                </div>
                                <script>
                                    // var imJsLink = 'https://g.lazcdn.com/g/lzdmod/im/5.0.103/index.js';
                                    var imCssLink =
                                        "https://g.lazcdn.com/g/lzdmod/im/5.0.103/index.css";
                                    var gConfig = window.g_config || {};
                                </script>
                                <style>
                                    .m-common-more .link-lazada-ic-Message {
                                        display: none;
                                    }
                                </style>
                            </div>
                            <script
                                src="https://g.lazcdn.com/g/??mui/feloader/5.0.0/feloader-min.js,lzdmod/site-nav-pc/5.2.38/pc/index.js,lzdmod/jquery/5.0.9/index.js,lzdmod/site-nav-pc/5.2.38/assets/links-bar/index.js,lzdmod/common-info/5.0.30/index.js,lzdmod/site-nav-pc/5.2.38/assets/reqwest/index.js,lzdmod/site-nav-pc/5.2.38/assets/common/popper/index.js,lzdmod/site-nav-pc/5.2.38/assets/cart/index.js,lzdmod/site-nav-pc/5.2.38/assets/download-app/index.js,lzdmod/site-nav-pc/5.2.38/i18n.js,lzdmod/site-nav-pc/5.2.38/assets/track-order/index.js,lzdmod/site-nav-pc/5.2.38/assets/switch-lang/index.js,lzdmod/site-nav-pc/5.2.38/assets/user-info/index.js,lzdmod/site-nav-pc/5.2.38/assets/affiliate/index.js,lzdmod/site-nav-pc/5.2.38/assets/logo-bar/index.js,lzdmod/site-nav-pc/5.2.38/assets/search-box/index.js,lzdmod/site-nav-pc/5.2.38/assets/liveup/index.js,lzdmod/site-menu-pc/5.0.45/pc/index.js,lzdmod/site-menu-nav-pc/5.0.73/pc/index.js,lzdmod/desktop-footer/6.1.1/pc/index.js,lzdmod/desktop-footer/6.1.1/pc/reqwest/index.js"></script>
                            <script>
                                (function (S) {
                                    window.g_config = window.g_config || {};
                                    S.config(window.g_config.seed);
                                    S.config("combine", true);
                                    feloader.noConflict();
                                })(feloader);
                            </script>
                            <script>
                                feloader.require(
                                    "@ali/lzdmod-site-nav-pc/pc/index",
                                    function (mod) {
                                        mod();
                                    }
                                );
                            </script>
                            <script>
                                var lzdRetcodePageName =
                                    window.LZD_RETCODE_PAGENAME || "" || location.pathname;
                                if (window.LZD_ROUTER_POSTFIX) {
                                    if (
                                        lzdRetcodePageName.indexOf(window.LZD_ROUTER_POSTFIX) ===
                                        -1
                                    ) {
                                        lzdRetcodePageName =
                                            lzdRetcodePageName + window.LZD_ROUTER_POSTFIX;
                                    }
                                }
                                var lzdRetcodePid =
                                    window.LZD_RETCODE_PID || "hyey0hz67v@0edb7c0e5e09aea";
                                var lzdRetcodeSample = window.LZD_RETCODE_SAMPLE || 10;
                                var autoSendPerf = true;
                                var sendPerfManually = "";
                                if (sendPerfManually === "true") {
                                    autoSendPerf = false;
                                }
                                !(function (c, b, d, a) {
                                    c[a] || (c[a] = {}),
                                        (c[a].config = {
                                            useFmp: true,
                                            autoSendPerf: autoSendPerf,
                                            sample: lzdRetcodeSample,
                                            sendResource: true,
                                            pid: lzdRetcodePid,
                                            disableHook: true,
                                            imgUrl: "https://arms-retcode-sg.aliyuncs.com/r.png?",
                                            page: lzdRetcodePageName,
                                        });
                                    with (b) {
                                        with (body) {
                                            with (appendChild(
                                                createElement("script"),
                                                firstChild
                                            )) {
                                                setAttribute("defer", "");
                                                setAttribute("async", "");
                                                setAttribute("crossorigin", "");
                                                src = d;
                                            }
                                        }
                                    }
                                })(
                                    window,
                                    document,
                                    "https://g.lazcdn.com/g/retcode/cloud-sdk/bl.js",
                                    "__bl"
                                );
                            </script>
                            <div th:if="${script} ne null and ${script.umid} ne null and ${script.umid} eq true"></div>
                            <script src="//aeis.alicdn.com/sd/ncpc/nc.js?t=18507" defer async></script>
                            <script>
                                (function () {
                                    try {
                                        var webVitalsScript = document.createElement("script");
                                        webVitalsScript.src =
                                            "https:https://g.lazcdn.com/g/lzd/assets/1.2.10/web-vitals/3.4.0/index.js";
                                        webVitalsScript.onload = function () {
                                            var WebVitalsDelta = {
                                                FCP: null,
                                                CLS: null,
                                                FID: null,
                                                LCP: null,
                                                INP: null,
                                            };

                                            function webVitalsCb(entry) {
                                                if (entry && entry.name && entry.delta) {
                                                    WebVitalsDelta[entry.name] = entry.delta;
                                                    if (entry.name === "INP") {
                                                        webVitalsSingleReport(entry);
                                                    } else if (window.requestIdleCallback) {
                                                        window.requestIdleCallback(function () {
                                                            webVitalsSingleReport(entry);
                                                        });
                                                    }
                                                }
                                            }

                                            function webVitalsSingleReport(entry) {
                                                if (window.__wpk && window.__wpk.report) {
                                                    var name = (entry && entry.name) || "";
                                                    var delta = (entry && entry.delta) || "";
                                                    const categories = {
                                                        FCP: 101,
                                                        CLS: 103,
                                                        FID: 104,
                                                        LCP: 102,
                                                        INP: 119,
                                                    };
                                                    window.__wpk.report({
                                                        category: categories[name],
                                                        msg: window.location.host,
                                                        wl_avgv1: delta,
                                                        bl1:
                                                            entry &&
                                                                Object.prototype.toString.call(entry) ===
                                                                "[object Object]"
                                                                ? JSON.stringify(entry)
                                                                : "",
                                                        c1: (entry && entry.rating) || "",
                                                    });
                                                }
                                            }
                                            window.webVitals.getFCP(webVitalsCb);
                                            window.webVitals.getCLS(webVitalsCb);
                                            window.webVitals.getFID(webVitalsCb);
                                            window.webVitals.getLCP(webVitalsCb);
                                            window.webVitals.getINP(webVitalsCb);
                                        };
                                        // if(document.head) document.head.appendChild(webVitalsScript);
                                        function report() {
                                            var fsp = null;
                                            var csr = null;
                                            if (timings.start && timings.render) {
                                                // for ssr
                                                if (timings.ssr) {
                                                    fsp = timings.ssr - timings.start;
                                                    csr = timings.render - timings.ssr;
                                                } else {
                                                    fsp = timings.render - timings.start;
                                                }
                                            }
                                            if (fsp && window.__wpk && window.__wpk.report) {
                                                __wpk.report({
                                                    category: 105,
                                                    msg: window.location.host,
                                                    wl_avgv1: fsp,
                                                    wl_avgv2: csr || 0,
                                                    c1: window.__hasSSR__ ? 1 : 0,
                                                });
                                            }
                                        }
                                        document.addEventListener(
                                            "DOMContentLoaded",
                                            function () {
                                                if (window.timings) {
                                                    if (window.timings.render) {
                                                        report();
                                                    } else {
                                                        setTimeout(function () {
                                                            report();
                                                        }, 3000);
                                                    }
                                                }
                                            }
                                        );
                                    } catch (err) {
                                        console.log(err && err.message);
                                    }
                                })();
                            </script>
                            <script>
                                if (window.baxiaCommon) {
                                    baxiaCommon.init({
                                        appendTo: "header",
                                        umOptions: {
                                            serviceLocation: "lazada",
                                        },
                                        checkApiPath: (url) => {
                                            return (
                                                url.indexOf("mtop.lazada.promotion.voucher.spread") >
                                                -1
                                            );
                                        },
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .fixed-footer {
            display: flex;
            justify-content: space-around;
            position: fixed;
            background: linear-gradient(to bottom, #525d63 0%, #525d63 50%, #eece18 100%);
            padding: 5px 0;
            box-shadow: 0 0 8px 4px #000;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99
        }

        .fixed-footer a {
            flex-basis: calc((100% - 15px*6)/ 5);
            text-decoration: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            max-width: 75px;
            font-size: 12px;
            font-family: Ubuntu, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .fixed-footer a:hover {
            font-weight: bold;
        }

        .fixed-footer .center {
            transform: scale(1.5) translateY(-5px);
            background: center no-repeat;
            background-size: contain;
            background-color: inherit;
            border-radius: 50%;
        }

        .fixed-footer img {
            max-width: 20px;
            margin-bottom: 0;
            max-height: 20px;
        }
    </style>
    <div class="fixed-footer">
        <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noopener" target="_blank">
            <img layout="intrinsic" height="20px" width="20px"
                src="https://imgsaya.io/download/b7xLqRHm.png" alt="PROMO <?php echo $BRAND ?>">
            Promosi
        </a>
        <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noopener" target="_blank">
            <img layout="intrinsic" height="20px" width="20px"
                src="https://imgsaya.io/download/ZHjG06fN.png" alt="LOGIN <?php echo $BRAND ?>">
            Login
        </a>
        <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noopener" target="_blank" class="tada">
            <img layout="intrinsic" height="20px" width="20px"
                src="https://imgsaya.io/download/oZiKl4eN.png" alt="DAFTAR <?php echo $BRAND ?>">
            Daftar
        </a>
        <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noopener" target="_blank">
            <img layout="intrinsic" height="20px" width="20px"
                src="https://imgsaya.io/download/iL49K1wl.webp" alt="LINK <?php echo $BRAND ?>">
            Link
        </a>
        <a href="https://kitapastiyakin.store/store/<?php echo $BRAND ?>" rel="nofollow noopener" target="_blank"
            class="js_live_chat_link live-chat-link">
            <img class="live-chat-icon" layout="intrinsic" height="20px" width="20px"
                src="https://imgsaya.io/download/Rv9PWSHi.png" alt="LIVECHAT <?php echo $BRAND ?>">
            Live Chat
        </a>
    </div>
</body>

</html>
