<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Marketplace | {{ $product->name }}</title>
    <link rel="canonical" href="https://agricola.axiomthemes.com" />
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//use.typekit.net' />
    <link rel="shortcut icon" href="fav.png" />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://agricola.axiomthemes.com/organic-farm/" />
    <meta property="og:title" content="Organic Farm" />
    <meta property="og:description" content="			
Cultivating Agriculture that Works for the Future We’re a Unique and Traditional Organic Farm Go to the Shop 
Cultivating Agriculture that Works for the Future 
										Get the Fresh Product 
										Go to the Shop 
										Contact Info 
			Our BenefitsOrganic Farm		
			Natural FarmingConsectetur adipiscing elit, sed do eiusmod tempo.Quality ProductsConsectetur adipiscing elit, sed do" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "{{ asset('theme/js/wp-emoji-release.min.js') }}"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link property="stylesheet" rel='stylesheet' id='trx_addons-icons-css' href='{{ asset("public/theme/css/plugins/trx_addons/css/font-icons/css/trx_addons_icons.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_icons-css' href='{{ asset("public/theme/css/plugins/trx_demo/css/font-icons/css/trx_demo_icons.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_icons_animation-css' href='{{ asset("public/theme/css/plugins/trx_demo/css/font-icons/css/animation.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-font-halyard-display-css' href='{{ asset("public/theme/css/xog3vbp.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-font-google_fonts-css' href='https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&#038;subset=latin,latin-ext&#038;display=swap' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-fontello-css' href='{{ asset("public/theme/css/css-fontello.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='sbi_styles-css' href='{{ asset("public/theme/css/plugins/instagram-feed/css/sbi-styles.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='wp-block-library-css' href='{{ asset("public/theme/css/block-library-style.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='wc-blocks-vendors-style-css' href='{{ asset("public/theme/css/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='wc-blocks-style-css' href='{{ asset("public/theme/css/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css")}}' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--bg-color: #FAF7F0;
            --wp--preset--color--bd-color: #DDDAD3;
            --wp--preset--color--text-dark: #0A1108;
            --wp--preset--color--text-light: #9D9890;
            --wp--preset--color--text-link: #F2C200;
            --wp--preset--color--text-hover: #DCB000;
            --wp--preset--color--text-link-2: #92BB53;
            --wp--preset--color--text-hover-2: #80AB3E;
            --wp--preset--color--text-link-3: #7198BA;
            --wp--preset--color--text-hover-3: #4F769D;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link property="stylesheet" rel='stylesheet' id='advanced-popups-css' href='{{ asset("public/theme/css/plugins/advanced-popups/public/css/advanced-popups-public.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='powertip-css' href='{{ asset("public/theme/css/plugins/devvn-image-hotspot/frontend/css/jquery.powertip.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='maps-points-css' href='{{ asset("public/theme/css/plugins/devvn-image-hotspot/frontend/css/maps_points.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='magnific-popup-css' href='{{ asset("public/theme/css/plugins/trx_addons/js/magnific/magnific-popup.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_panels-css' href='{{ asset("public/theme/css/plugins/trx_demo/css/trx_demo_panels.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='woocommerce-layout-css' href='{{ asset("public/theme/css/plugins/woocommerce/assets/css/woocommerce-layout.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='woocommerce-smallscreen-css' href='{{ asset("public/theme/css/plugins/woocommerce/assets/css/woocommerce-smallscreen.css")}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link property="stylesheet" rel='stylesheet' id='woocommerce-general-css' href='{{ asset("public/theme/css/plugins/woocommerce/assets/css/woocommerce.css")}}' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link property="stylesheet" rel='preload' as='font' type='font/woff2' id='tinvwl-webfont-font-css' href='{{ asset("public/theme/css/plugins/ti-woocommerce-wishlist/assets/fonts/tinvwl-webfont.woff")}}' media='all' />
    <link property="stylesheet" rel='stylesheet' id='tinvwl-webfont-css' href='{{ asset("public/theme/css/plugins/ti-woocommerce-wishlist/assets/css/webfont.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='tinvwl-css' href='{{ asset("public/theme/css/plugins/ti-woocommerce-wishlist/assets/css/public.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='elementor-icons-css' href='{{ asset("public/theme/css/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='elementor-frontend-legacy-css' href='{{ asset("public/theme/css/plugins/elementor/assets/css/frontend-legacy.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='elementor-frontend-css' href='{{ asset("public/theme/css/plugins/elementor/assets/css/frontend.min.css")}}' type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-kit-15 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-color-61c01e98: #4054B2;
            --e-global-color-69bf31ed: #23A455;
            --e-global-color-7a1ccbe5: #000;
            --e-global-color-13ed1179: #FFF;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1320px;
        }

        .e-container {
            --container-max-width: 1320px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 0px;
        }

        .elementor-element {
            --widgets-spacing: 0px;
        }

            {}

        .sc_layouts_title_caption {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-container {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-container {
                --container-max-width: 767px;
            }
        }

        .elementor-18091 .elementor-element.elementor-element-9b805c6 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-9b805c6 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-5c65692 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-5c65692 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-bc-flex-widget .elementor-18091 .elementor-element.elementor-element-1c27b8fa.elementor-column .elementor-column-wrap {
            align-items: flex-end;
        }

        .elementor-18091 .elementor-element.elementor-element-1c27b8fa.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: flex-end;
            align-items: flex-end;
        }

        .elementor-18091 .elementor-element.elementor-element-1c27b8fa {
            z-index: 2;
        }

        .elementor-18091 .elementor-element.elementor-element-6589da6c:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-6589da6c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FAF7F0;
        }

        .elementor-18091 .elementor-element.elementor-element-6589da6c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20% 15% 20% 15%;
        }

        .elementor-18091 .elementor-element.elementor-element-6589da6c>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-49853e13 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-49853e13 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-7106b83d {
            --spacer-size: 25px;
        }

        .elementor-18091 .elementor-element.elementor-element-140acb31 {
            --spacer-size: 20px;
        }

        .elementor-18091 .elementor-element.elementor-element-22b035a1 {
            font-size: 16px;
        }

        .elementor-18091 .elementor-element.elementor-element-12ccc613>.elementor-widget-container {
            margin: 0px -80px 0px -80px;
        }

        .elementor-18091 .elementor-element.elementor-element-12ccc613 {
            z-index: 1;
        }

        .elementor-18091 .elementor-element.elementor-element-18fddf78 {
            --spacer-size: 20px;
        }

        .elementor-18091 .elementor-element.elementor-element-5d65ae0d.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: flex-end;
        }

        .elementor-18091 .elementor-element.elementor-element-5d65ae0d {
            z-index: 2;
        }

        .elementor-18091 .elementor-element.elementor-element-7444ef4e {
            --spacer-size: 100px;
        }

        .elementor-18091 .elementor-element.elementor-element-35fdf84f:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-35fdf84f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F2C200;
        }

        .elementor-18091 .elementor-element.elementor-element-35fdf84f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 23% 14% 23% 14%;
        }

        .elementor-18091 .elementor-element.elementor-element-35fdf84f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-1afa4bb6 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-1afa4bb6 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-a0e0342 {
            --spacer-size: 25px;
        }

        .elementor-18091 .elementor-element.elementor-element-21ef2b84 {
            color: rgba(255, 255, 255, 0.84);
        }

        .elementor-18091 .elementor-element.elementor-element-2e389742 {
            --spacer-size: 25px;
        }

        .elementor-18091 .elementor-element.elementor-element-7b2d769:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-7b2d769>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("images/background-6-copyright.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-18091 .elementor-element.elementor-element-7b2d769>.elementor-background-overlay {
            background-color: #000000;
            opacity: 0.2;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-7b2d769 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-7d4cabe .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-7d4cabe .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-980b36f .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-980b36f .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-66f6adb .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-66f6adb .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-66f6adb>.elementor-widget-container {
            margin: 0px 0px -55px 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-13814fd:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-13814fd>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FAF7F0;
        }

        .elementor-18091 .elementor-element.elementor-element-13814fd {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-13814fd>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-1e9fbafa:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-1e9fbafa>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FAF7F0;
        }

        .elementor-18091 .elementor-element.elementor-element-1e9fbafa {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-1e9fbafa>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-18091 .elementor-element.elementor-element-c5518a3.elementor-column .elementor-column-wrap {
            align-items: space-between;
        }

        .elementor-18091 .elementor-element.elementor-element-c5518a3.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: space-between;
            align-items: space-between;
        }

        .elementor-18091 .elementor-element.elementor-element-3cdebc21 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-3cdebc21 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-76b86d6a {
            --spacer-size: 70px;
        }

        .elementor-18091 .elementor-element.elementor-element-1f3dffa {
            width: 278px;
            max-width: 278px;
            bottom: 280px;
        }

        body:not(.rtl) .elementor-18091 .elementor-element.elementor-element-1f3dffa {
            right: -150px;
        }

        body.rtl .elementor-18091 .elementor-element.elementor-element-1f3dffa {
            left: -150px;
        }

        .elementor-bc-flex-widget .elementor-18091 .elementor-element.elementor-element-4bcd1abf.elementor-column .elementor-column-wrap {
            align-items: space-between;
        }

        .elementor-18091 .elementor-element.elementor-element-4bcd1abf.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: space-between;
            align-items: space-between;
        }

        .elementor-18091 .elementor-element.elementor-element-72969a65 {
            --spacer-size: 33px;
        }

        .elementor-18091 .elementor-element.elementor-element-6fc90aca {
            --spacer-size: 33px;
        }

        .elementor-18091 .elementor-element.elementor-element-5687e564>.elementor-widget-container {
            margin: 0px 0px 5px 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-7a2ab565 {
            --spacer-size: 25px;
        }

        .elementor-18091 .elementor-element.elementor-element-b904057:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-b904057>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FAF7F0;
        }

        .elementor-18091 .elementor-element.elementor-element-b904057 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-b904057>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-75100509:not(.elementor-motion-effects-element-type-background),
        .elementor-18091 .elementor-element.elementor-element-75100509>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F3F0E9;
            background-image: url("images/decoration-background-copyright.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: auto;
        }

        .elementor-18091 .elementor-element.elementor-element-75100509 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-75100509>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-7d8688b1 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-7d8688b1 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-dca38a9 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-dca38a9>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18091 .elementor-element.elementor-element-b2feb38 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-b2feb38 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-d8dbcfa>.elementor-widget-container {
            margin: 5px 0px 0px 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-f3fc0f3 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18091 .elementor-element.elementor-element-f3fc0f3 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        @media(min-width:768px) {
            .elementor-18091 .elementor-element.elementor-element-1c27b8fa {
                width: 31.318%;
            }

            .elementor-18091 .elementor-element.elementor-element-5e95e5f {
                width: 37.287%;
            }

            .elementor-18091 .elementor-element.elementor-element-5d65ae0d {
                width: 31.337%;
            }

            .elementor-18091 .elementor-element.elementor-element-a0099e7 {
                width: 64.961%;
            }

            .elementor-18091 .elementor-element.elementor-element-f560aa5 {
                width: 34.963%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-18091 .elementor-element.elementor-element-1c27b8fa {
                width: 33%;
            }

            .elementor-18091 .elementor-element.elementor-element-5e95e5f {
                width: 34%;
            }

            .elementor-18091 .elementor-element.elementor-element-5d65ae0d {
                width: 33%;
            }

            .elementor-18091 .elementor-element.elementor-element-a0099e7 {
                width: 75%;
            }

            .elementor-18091 .elementor-element.elementor-element-f560aa5 {
                width: 25%;
            }
        }

        @media(max-width:1024px) {
            .elementor-18091 .elementor-element.elementor-element-6589da6c {
                padding: 14% 12% 14% 12%;
            }

            .elementor-18091 .elementor-element.elementor-element-7106b83d {
                --spacer-size: 15px;
            }

            .elementor-18091 .elementor-element.elementor-element-140acb31 {
                --spacer-size: 15px;
            }

            .elementor-18091 .elementor-element.elementor-element-22b035a1 {
                font-size: 15px;
            }

            .elementor-18091 .elementor-element.elementor-element-35fdf84f {
                padding: 14% 12% 14% 12%;
            }

            .elementor-18091 .elementor-element.elementor-element-a0e0342 {
                --spacer-size: 15px;
            }

            .elementor-18091 .elementor-element.elementor-element-2e389742 {
                --spacer-size: 15px;
            }

            .elementor-18091 .elementor-element.elementor-element-66f6adb>.elementor-widget-container {
                margin: 0px 0px -35px 0px;
            }

            .elementor-18091 .elementor-element.elementor-element-76b86d6a {
                --spacer-size: 60px;
            }

            .elementor-18091 .elementor-element.elementor-element-1f3dffa {
                width: 200px;
                max-width: 200px;
            }

            body:not(.rtl) .elementor-18091 .elementor-element.elementor-element-1f3dffa {
                right: -130px;
            }

            body.rtl .elementor-18091 .elementor-element.elementor-element-1f3dffa {
                left: -130px;
            }

            .elementor-18091 .elementor-element.elementor-element-72969a65 {
                --spacer-size: 30px;
            }

            .elementor-18091 .elementor-element.elementor-element-6fc90aca {
                --spacer-size: 30px;
            }
        }

        @media(max-width:767px) {
            .elementor-18091 .elementor-element.elementor-element-6589da6c {
                padding: 20px 20px 20px 20px;
            }

            .elementor-18091 .elementor-element.elementor-element-12ccc613>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-18091 .elementor-element.elementor-element-35fdf84f {
                padding: 20px 20px 20px 20px;
            }

            .elementor-18091 .elementor-element.elementor-element-66f6adb>.elementor-widget-container {
                margin: 0px 0px -25px 0px;
            }

            .elementor-18091 .elementor-element.elementor-element-76b86d6a {
                --spacer-size: 30px;
            }

            .elementor-18091 .elementor-element.elementor-element-1f3dffa {
                width: 140px;
                max-width: 140px;
                bottom: 220px;
            }

            body:not(.rtl) .elementor-18091 .elementor-element.elementor-element-1f3dffa {
                right: -10px;
            }

            body.rtl .elementor-18091 .elementor-element.elementor-element-1f3dffa {
                left: -10px;
            }

            .elementor-18091 .elementor-element.elementor-element-4bcd1abf>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18091 .elementor-element.elementor-element-72969a65 {
                --spacer-size: 20px;
            }

            .elementor-18091 .elementor-element.elementor-element-6fc90aca {
                --spacer-size: 20px;
            }

            .elementor-18091 .elementor-element.elementor-element-6195b927>.elementor-element-populated.elementor-column-wrap {
                padding: 0px 10px 0px 10px;
            }

            .elementor-18091 .elementor-element.elementor-element-6195b927>.elementor-element-populated.elementor-widget-wrap {
                padding: 0px 10px 0px 10px;
            }
        }
    </style>
    <link property="stylesheet" rel='stylesheet' id='trx_addons-css' href='{{ asset("public/theme/css/plugins/trx_addons/css/__styles.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-widget_custom_links-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/widgets/custom_links/custom_links.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_content-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/shortcodes/content/content.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_content-responsive-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/shortcodes/content/content.responsive.css")}}' type='text/css' media='(max-width:1439px)' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-animations-css' href='{{ asset("public/theme/css/plugins/trx_addons/css/trx_addons.animations.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-woocommerce-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/api/woocommerce/woocommerce.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-mouse-helper-css' href='{{ asset("public/theme/css/plugins/trx_addons/addons/mouse-helper/mouse-helper.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-cpt_testimonials-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/cpt/testimonials/testimonials.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_blogger-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/shortcodes/blogger/blogger.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_icons-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/shortcodes/icons/icons.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='wpgdprc-front-css-css' href='{{ asset("public/theme/css/plugins/wp-gdpr-compliance/Assets/css/front.css")}}' type='text/css' media='all' />
    <style id='wpgdprc-front-css-inline-css' type='text/css'>
        :root {
            --wp-gdpr--bar--background-color: #000000;
            --wp-gdpr--bar--color: #ffffff;
            --wp-gdpr--button--background-color: #000000;
            --wp-gdpr--button--background-color--darken: #000000;
            --wp-gdpr--button--color: #ffffff;
        }
    </style>
    <style id="elementor-post-18667">
        .elementor-18667 .elementor-element.elementor-element-b216e35>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18667 .elementor-element.elementor-element-b216e35 {
            padding: 20px 60px 20px 60px;
        }

        .elementor-18667 .elementor-element.elementor-element-b73b3a5 .logo_image {
            max-height: 53px;
        }

        .elementor-18667 .elementor-element.elementor-element-b73b3a5>.elementor-widget-container {
            margin: -5px 35px 0px 0px;
        }

        .elementor-18667 .elementor-element.elementor-element-03deb09>.elementor-widget-container {
            margin: -3px 0px 0px 8px;
        }

        .elementor-18667 .elementor-element.elementor-element-1a3aff4>.elementor-widget-container {
            margin: 0px 0px 0px 10px;
        }

        .elementor-18667 .elementor-element.elementor-element-94a1f60>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18667 .elementor-element.elementor-element-94a1f60 {
            padding: 17px 30px 17px 30px;
        }

        .elementor-18667 .elementor-element.elementor-element-9be2b21 .logo_image {
            max-height: 53px;
        }

        .elementor-18667 .elementor-element.elementor-element-9be2b21>.elementor-widget-container {
            margin: -5px 0px 0px 0px;
        }

        .elementor-18667 .elementor-element.elementor-element-5b9aee4>.elementor-widget-container {
            margin: -2px 0px 0px 3px;
        }

        .elementor-18667 .elementor-element.elementor-element-9827fb7>.elementor-widget-container {
            margin: 0px 0px 0px 5px;
        }

        @media(max-width:767px) {
            .elementor-18667 .elementor-element.elementor-element-94a1f60 {
                padding: 14px 20px 14px 20px;
            }

            .elementor-18667 .elementor-element.elementor-element-3bc3dc3 {
                width: 50%;
            }

            .elementor-18667 .elementor-element.elementor-element-9be2b21 .logo_image {
                max-height: 45px;
            }

            .elementor-18667 .elementor-element.elementor-element-fb8f3be {
                width: 50%;
            }

            .elementor-18667 .elementor-element.elementor-element-5b9aee4>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-18667 .elementor-element.elementor-element-d34f77d {
                width: 70.971%;
            }

            .elementor-18667 .elementor-element.elementor-element-8bb245e {
                width: 28.996%;
            }
        }
    </style>
    <style id="elementor-post-18721">
        .elementor-18721 .elementor-element.elementor-element-3eeccb12:not(.elementor-motion-effects-element-type-background),
        .elementor-18721 .elementor-element.elementor-element-3eeccb12>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #11170F;
        }

        .elementor-18721 .elementor-element.elementor-element-3eeccb12 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18721 .elementor-element.elementor-element-3eeccb12>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18721 .elementor-element.elementor-element-62311765 {
            --spacer-size: 50px;
        }

        .elementor-18721 .elementor-element.elementor-element-6f399fac:not(.elementor-motion-effects-element-type-background),
        .elementor-18721 .elementor-element.elementor-element-6f399fac>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #11170F;
        }

        .elementor-18721 .elementor-element.elementor-element-6f399fac {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-6f399fac>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18721 .elementor-element.elementor-element-60bdbfdb .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-60bdbfdb .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-ecaf94 {
            --spacer-size: 6px;
        }

        .elementor-18721 .elementor-element.elementor-element-63726f0f>.elementor-widget-container {
            padding: 0% 10% 0% 0%;
        }

        .elementor-18721 .elementor-element.elementor-element-4790c85d .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-4790c85d .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-31d034b3 {
            --spacer-size: 6px;
        }

        .elementor-18721 .elementor-element.elementor-element-59ea2916 {
            --spacer-size: 6px;
        }

        .elementor-18721 .elementor-element.elementor-element-29ae1af {
            --spacer-size: 18px;
        }

        .elementor-18721 .elementor-element.elementor-element-60a37f29 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-60a37f29 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-746673c2 {
            --spacer-size: 6px;
        }

        .elementor-18721 .elementor-element.elementor-element-682dcec3 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-682dcec3 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-682dcec3>.elementor-widget-container {
            padding: 0px 0px 2px 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-606426a8 .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-606426a8 .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-6b3c2377:not(.elementor-motion-effects-element-type-background),
        .elementor-18721 .elementor-element.elementor-element-6b3c2377>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #11170F;
        }

        .elementor-18721 .elementor-element.elementor-element-6b3c2377 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }

        .elementor-18721 .elementor-element.elementor-element-6b3c2377>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18721 .elementor-element.elementor-element-6c49f957 {
            --spacer-size: 20px;
        }

        .elementor-18721 .elementor-element.elementor-element-3033d4c3 {
            --divider-border-style: solid;
            --divider-color: #282F27;
            --divider-border-width: 1px;
        }

        .elementor-18721 .elementor-element.elementor-element-3033d4c3 .elementor-divider-separator {
            width: 100%;
        }

        .elementor-18721 .elementor-element.elementor-element-3033d4c3 .elementor-divider {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .elementor-18721 .elementor-element.elementor-element-77577327 {
            --spacer-size: 10px;
        }

        .elementor-18721 .elementor-element.elementor-element-6d24adb3 {
            color: #96999F;
            font-size: 16px;
            line-height: 1.2em;
        }

        .elementor-18721 .elementor-element.elementor-element-7cc001c5 {
            --spacer-size: 10px;
        }

        .elementor-18721 .elementor-element.elementor-element-715c49ac {
            --spacer-size: 10px;
        }

        @media(max-width:1024px) {
            .elementor-18721 .elementor-element.elementor-element-63726f0f>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-18721 .elementor-element.elementor-element-7bcd4832 {
                width: 33.939%;
            }

            .elementor-18721 .elementor-element.elementor-element-1a8893ce {
                width: 24.848%;
            }

            .elementor-18721 .elementor-element.elementor-element-21a26976 {
                width: 22.121%;
            }

            .elementor-18721 .elementor-element.elementor-element-3c45ea6f {
                width: 19.059%;
            }
        }

        @media(max-width:767px) {
            .elementor-18721 .elementor-element.elementor-element-63726f0f {
                font-size: 15px;
            }

            .elementor-18721 .elementor-element.elementor-element-1a8893ce>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18721 .elementor-element.elementor-element-79f2fcea {
                font-size: 15px;
            }

            .elementor-18721 .elementor-element.elementor-element-1efd37c4 {
                font-size: 15px;
            }

            .elementor-18721 .elementor-element.elementor-element-21a26976 {
                width: 50%;
            }

            .elementor-18721 .elementor-element.elementor-element-21a26976>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18721 .elementor-element.elementor-element-3c45ea6f {
                width: 50%;
            }

            .elementor-18721 .elementor-element.elementor-element-3c45ea6f>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18721 .elementor-element.elementor-element-6d24adb3 {
                font-size: 15px;
            }
        }
    </style>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        @media (max-width:1023px) and (min-width:769px) {
            .sldr-title {
                font-size: 50px !important;
                line-height: 50px !important
            }
        }

        @media (max-width:1136px) and (min-width:778px) {
            .sldr-hide {
                display: none !important
            }
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows {
            cursor: pointer;
            background: transparent;
            width: 60px;
            height: 60px;
            position: absolute;
            display: block;
            z-index: 1000;
            transition: .3s ease
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.rs-touchhover {
            background: transparent
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows:before {
            font-family: 'fontello';
            font-size: 48px;
            color: #ffffff;
            display: block;
            line-height: 60px;
            text-align: center;
            transition: .3s ease
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-leftarrow:before {
            content: '\EA23'
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-rightarrow:before {
            content: '\EA24'
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-leftarrow.rs-touchhover:before {
            transform: translateX(-8px)
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-rightarrow.rs-touchhover:before {
            transform: translateX(8px)
        }

        @media (max-width:1440px) {
            #rev_slider_4_1_wrapper .arrows_simple.tparrows:before {
                font-size: 42px
            }
        }

        #rev_slider_4_1_wrapper .bullets_dots_fill .tp-bullet {
            width: 8px;
            height: 8px;
            position: absolute;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            cursor: pointer;
            box-sizing: content-box;
            transition: .3s ease
        }

        #rev_slider_4_1_wrapper .bullets_dots_fill .tp-bullet.rs-touchhover,
        #rev_slider_4_1_wrapper .bullets_dots_fill .tp-bullet.selected {
            background: #f2c200;
            box-shadow: 0px 0px 0px 5px transparent
        }
    </style>
    <style type="text/css">
        .trx_demo_inline_229443735 {
            color: #ffffff !important;
            border-color: #f2c200 !important;
            background-color: #f2c200 !important;
        }

        .trx_demo_inline_1571945291:hover {
            color: #ffffff !important;
            border-color: #dcb000 !important;
            background-color: #dcb000 !important;
        }

        .trx_demo_panel_button.sc_button {
            justify-content: center;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400%7CDM+Sans:400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">
    <link property="stylesheet" rel='stylesheet' id='agricola-style-css' href='{{ asset("public/theme/css/agricola-style.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='mediaelement-css' href='{{ asset("public/theme/js/mediaelement-mediaelementplayer-legacy.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='wp-mediaelement-css' href='{{ asset("public/theme/js/mediaelement-wp-mediaelement.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-skin-default-css' href='{{ asset("public/theme/css/css-style.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-plugins-css' href='{{ asset("public/theme/css/css-__plugins.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-woocommerce-css' href='{{ asset("public/theme/css/woocommerce-woocommerce.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='agricola-custom-css' href='{{ asset("public/theme/css/css-__custom.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='e-animations-css' href='{{ asset("public/theme/css/plugins/elementor/assets/lib/animations/animations.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset("public/theme/css/plugins/revslider/public/assets/css/rs6.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-responsive-css' href='{{ asset("public/theme/css/plugins/trx_addons/css/__responsive.css")}}' type='text/css' media='(max-width:1439px)' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-woocommerce-responsive-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/api/woocommerce/woocommerce.responsive.css")}}' type='text/css' media='(max-width:767px)' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-mouse-helper-responsive-css' href='{{ asset("public/theme/css/plugins/trx_addons/addons/mouse-helper/mouse-helper.responsive.css")}}' type='text/css' media='(max-width:1279px)' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_blogger-responsive-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/shortcodes/blogger/blogger.responsive.css")}}' type='text/css' media='(max-width:1279px)' />
    <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_icons-responsive-css' href='{{ asset("public/theme/css/plugins/trx_addons/components/shortcodes/icons/icons.responsive.css")}}' type='text/css' media='(max-width:1279px)' />
    <link property="stylesheet" rel='stylesheet' id='agricola-responsive-css' href='{{ asset("public/theme/css/css-__responsive.css")}}' type='text/css' media='(max-width:1679px)' />
    <link property="stylesheet" rel='stylesheet' id='agricola-woocommerce-responsive-css' href='{{ asset("public/theme/css/woocommerce-woocommerce-responsive.css")}}' type='text/css' media='(max-width:1679px)' />
    <link property="stylesheet" rel='stylesheet' id='agricola-trx-addons-extra-styles-css' href='{{ asset("public/theme/css/default-extra-styles.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='swiper-css' href='{{ asset("public/theme/css/plugins/trx_addons/js/swiper/swiper.min.css")}}' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.3.1' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset("public/theme/js/jquery-jquery.min.js")}}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/js/jquery-jquery-migrate.min.js")}}' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="https://agricola.axiomthemes.com/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://agricola.axiomthemes.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.3.1" />
    <meta name="generator" content="WooCommerce 6.9.3" />
    <link rel='shortlink' href='https://agricola.axiomthemes.com/?p=18091' />
    <link rel="preload" href="{{ asset('theme/css/plugins/advanced-popups/fonts/advanced-popups-icons.woff')}}" as="font" type="font/woff" crossorigin>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Powered by Slider Revolution 6.5.31 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="favicons/fav.png">

    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style id="elementor-post-18654">
        .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18654 .elementor-element.elementor-element-b275fda:not(.elementor-motion-effects-element-type-background),
        .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-18654 .elementor-element.elementor-element-b275fda {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20px 60px 20px 60px;
        }

        .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18654 .elementor-element.elementor-element-f112344 .logo_image {
            max-height: 63px;
        }

        .elementor-18654 .elementor-element.elementor-element-f112344>.elementor-widget-container {
            margin: -5px 35px 0px 0px;
        }

        .elementor-18654 .elementor-element.elementor-element-3fb9c4d>.elementor-widget-container {
            margin: -3px 0px 0px 8px;
        }

        .elementor-18654 .elementor-element.elementor-element-d662b41>.elementor-widget-container {
            margin: 0px 0px 0px 10px;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67:not(.elementor-motion-effects-element-type-background),
        .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 17px 30px 17px 30px;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18654 .elementor-element.elementor-element-703d5de .logo_image {
            max-height: 53px;
        }

        .elementor-18654 .elementor-element.elementor-element-703d5de>.elementor-widget-container {
            margin: -5px 0px 0px 0px;
        }

        .elementor-18654 .elementor-element.elementor-element-f59f78f>.elementor-widget-container {
            margin: -2px 0px 0px 3px;
        }

        .elementor-18654 .elementor-element.elementor-element-feaea9d>.elementor-widget-container {
            margin: 0px 0px 0px 5px;
        }

        @media(max-width:767px) {
            .elementor-18654 .elementor-element.elementor-element-97bba67 {
                padding: 14px 20px 14px 20px;
            }

            .elementor-18654 .elementor-element.elementor-element-20ea2c9 {
                width: 50%;
            }

            .elementor-18654 .elementor-element.elementor-element-703d5de .logo_image {
                max-height: 45px;
            }

            .elementor-18654 .elementor-element.elementor-element-89c39a1 {
                width: 50%;
            }

            .elementor-18654 .elementor-element.elementor-element-f59f78f>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-18654 .elementor-element.elementor-element-772feca {
                width: 70.971%;
            }

            .elementor-18654 .elementor-element.elementor-element-3e4e340 {
                width: 30.962%;
            }
        }
    </style>
    <style id="elementor-post-18733">
        .elementor-18733 .elementor-element.elementor-element-41b371d9:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-41b371d9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-41b371d9 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-41b371d9>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-387ce355 {
            --spacer-size: 50px;
        }

        .elementor-18733 .elementor-element.elementor-element-4f75f04 {
            --spacer-size: 10px;
        }

        .elementor-18733 .elementor-element.elementor-element-7acdfc8b:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-7acdfc8b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-7acdfc8b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -10px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-7acdfc8b>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
            padding: 0% 28% 0% 0%;
        }

        .elementor-18733 .elementor-element.elementor-element-3cd6553d .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3cd6553d .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-1cafe0e8 {
            --spacer-size: 6px;
        }

        .elementor-18733 .elementor-element.elementor-element-5f23599f {
            --spacer-size: 10px;
        }

        .elementor-18733 .elementor-element.elementor-element-bd0b05b .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-bd0b05b .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3255073d .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3255073d .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-26b9af5c {
            --spacer-size: 6px;
        }

        .elementor-18733 .elementor-element.elementor-element-254c2c69 {
            --spacer-size: 4px;
        }

        .elementor-18733 .elementor-element.elementor-element-3049b76f:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-3049b76f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-3049b76f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3049b76f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-c27e11 {
            --spacer-size: 5px;
        }

        .elementor-18733 .elementor-element.elementor-element-447840c2 {
            --spacer-size: 50px;
        }

        .elementor-18733 .elementor-element.elementor-element-6b710157 {
            --divider-border-style: solid;
            --divider-color: #282F27;
            --divider-border-width: 1px;
        }

        .elementor-18733 .elementor-element.elementor-element-6b710157 .elementor-divider-separator {
            width: 100%;
        }

        .elementor-18733 .elementor-element.elementor-element-6b710157 .elementor-divider {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 13px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-2651d8ba {
            color: #96999F;
            font-size: 16px;
            line-height: 1.2em;
        }

        @media(max-width:1024px) {
            .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
                padding: 0% 5% 0% 0%;
            }
        }

        @media(min-width:768px) {
            .elementor-18733 .elementor-element.elementor-element-23b1fd56 {
                width: 52.424%;
            }

            .elementor-18733 .elementor-element.elementor-element-39921ff6 {
                width: 24.242%;
            }

            .elementor-18733 .elementor-element.elementor-element-47075a87 {
                width: 22.974%;
            }

            .elementor-18733 .elementor-element.elementor-element-e3ec0fc {
                width: 61.97%;
            }

            .elementor-18733 .elementor-element.elementor-element-3a27fc28 {
                width: 37.992%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-18733 .elementor-element.elementor-element-23b1fd56 {
                width: 34%;
            }

            .elementor-18733 .elementor-element.elementor-element-39921ff6 {
                width: 33%;
            }

            .elementor-18733 .elementor-element.elementor-element-47075a87 {
                width: 33%;
            }

            .elementor-18733 .elementor-element.elementor-element-e3ec0fc {
                width: 52%;
            }

            .elementor-18733 .elementor-element.elementor-element-3a27fc28 {
                width: 48%;
            }
        }

        @media(max-width:767px) {
            .elementor-18733 .elementor-element.elementor-element-7acdfc8b {
                margin-top: -5px;
                margin-bottom: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
                padding: 0% 0% 0% 0%;
            }

            .elementor-18733 .elementor-element.elementor-element-39921ff6>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-eb34645 {
                font-size: 15px;
            }

            .elementor-18733 .elementor-element.elementor-element-5f23599f {
                --spacer-size: 5px;
            }

            .elementor-18733 .elementor-element.elementor-element-47075a87>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-44de9cee {
                font-size: 15px;
            }

            .elementor-18733 .elementor-element.elementor-element-103f48b8 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-3a27fc28>.elementor-element-populated {
                margin: -2px 0px 21px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-2651d8ba {
                font-size: 15px;
            }
        }

        .header_position_over:not(.trx_addons_page_scrolled) .top_panel .sc_layouts_row[class*="scheme_"],
        .header_position_over .top_panel .sc_layouts_row[class*="scheme_"]:not(.sc_layouts_row_fixed_on) {
            background-color: white;
        }
    </style>
    <style type="text/css" id="trx_addons-inline-styles-inline-css">
        .trx_addons_inline_508441557 img.logo_image {
            max-height: 53px;
        }

        .trx_addons_inline_263015073 img.logo_image {
            max-height: 53px;
        }
    </style>
</head>
<body
    class="product-template-default single single-product postid-18187 wp-custom-logo theme-agricola woocommerce woocommerce-page woocommerce-no-js tinvwl-theme-style skin_default scheme_default blog_mode_shop body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content trx_addons_present header_type_custom header_style_header-custom-21986 header_position_default menu_side_none no_layout fixed_blocks_sticky single_product_gallery_thumbs_left elementor-default elementor-kit-15">


    <div class="body_wrap">


        <div class="page_wrap">


            <a class="agricola_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="1">Skip to
                content</a>
            <a class="agricola_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="1">Skip to
                footer</a>

            @include('components.header')


            <div class="page_content_wrap">
                <div class="content_wrap">


                    <div class="content">
                        <a id="content_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>

                        <article class="post_item_single post_type_product">
                            <nav class="woocommerce-breadcrumb"><span class="woocommerce-breadcrumb-item"><a
                                        href="index.php">Home</a></span><span
                                    class="woocommerce-breadcrumb-delimiter"></span><span
                                    class="woocommerce-breadcrumb-item"><a href="#">Marketplace</a></span><span
                                    class="woocommerce-breadcrumb-delimiter"></span><span
                                    class="woocommerce-breadcrumb-item">Cauliflower</span></nav>

                            <div class="woocommerce-notices-wrapper"></div>
                            <div id="product-18187"
                                class="product type-product post-18187 status-publish first instock product_cat-organic product_tag-crop product_tag-farm product_tag-food product_tag-healthy has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                
                                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images woocommerce-product-gallery--with-thumbs"
                                    data-columns="4" style="transition: opacity .25s ease-in-out;">
                                    <figure class="woocommerce-product-gallery__wrapper">
                                         <div data-thumb="{{asset("public/storage/" . $product->image)}}"
                                            data-thumb-alt="" class="woocommerce-product-gallery__image"><a
                                                href="{{asset("public/storage/" . $product->image)}}"><img
                                                    width="600" height="660"
                                                    src="{{asset("public/storage/" . $product->image)}}"
                                                    class="wp-post-image" alt="" decoding="async"
                                                    title="product-image29-copyright" data-caption=""
                                                    data-src="{{asset("public/storage/" . $product->image)}}"
                                                    data-large_image="{{asset("public/storage/" . $product->image)}}"
                                                    data-large_image_width="1200" data-large_image_height="1320"
                                                    loading="lazy"
                                                    srcset="{{asset("public/storage/" . $product->image)}} 1200w"
                                                    sizes="(max-width: 600px) 100vw, 600px"></a>
                                        </div>
                                        @forelse($product->photos as $photo)
                                            <div data-thumb="{{asset("public/storage/" . $photo->path)}}" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                                <a href="{{asset("public/storage/" . $photo->path)}}">
                                                    <img width="600" height="660"
                                                        src="{{asset("public/storage/" . $photo->path)}}" class=""
                                                        alt="" decoding="async" title="{{$photo->created_at->toFormattedDateString()}}"
                                                        data-caption=""
                                                        data-src="{{asset("public/storage/" . $photo->path)}}"
                                                        data-large_image="{{asset("public/storage/" . $photo->path)}}"
                                                        data-large_image_width="1200" data-large_image_height="1320"
                                                        loading="lazy"
                                                        srcset="{{asset("public/storage/" . $photo->path)}} 1200w"
                                                        sizes="(max-width: 600px) 100vw, 600px">
                                                </a>
                                            </div>
                                        @empty
                                        @endforelse
                                        {{--
                                        <div data-thumb="{{asset("public/storage/" . $product->image)}}"
                                            data-thumb-alt="" class="woocommerce-product-gallery__image"><a
                                                href="{{asset("public/storage/" . $product->image)}}"><img
                                                    width="600" height="660"
                                                    src="{{asset("public/storage/" . $product->image)}}" 
                                                    class=""
                                                    alt="" decoding="async" title="{{$product->name}}"
                                                    data-caption=""
                                                    data-src="{{asset("public/storage/" . $product->image)}}"
                                                    data-large_image="{{asset("public/storage/" . $product->image)}}"
                                                    data-large_image_width="1200" data-large_image_height="1320"
                                                    loading="lazy"
                                                    srcset="{{asset("public/storage/" . $product->image)}} 1200w"
                                                    sizes="(max-width: 600px) 100vw, 600px"></a>
                                        </div> --}}
                                    </figure>
                                </div>

                                <div class="summary entry-summary">
                                    <h1 class="product_title entry-title">{{ $product->name }}</h1>
                                    <p class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">K</span>{{ $product->price }}</bdi></span>
                                    </p>
                                    <div class="woocommerce-product-details__short-description">
                                        <p>
                                            {{ $product->description }}
                                        </p>
                                    </div>

                                    @if(($product->shelf_qty + $product->warehouse_qty) > 0)
                                    <form class="cart" action="{{ route('store.buy') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="quantity">
                                            <label class="screen-reader-text" for="quantity_64faab22c360b">{{ $product->name }} quantity</label>
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="number" id="quantity_64faab22c360b" class="input-text qty text"
                                                step="1" min="1" max="15" name="qty" value="1" title="Qty" size="4"
                                                placeholder="1" inputmode="numeric" autocomplete="off">
                                        </div>

                                        <button type="submit" value="18187" data-quantity="1" data-product-name="{{ $product->name }}" data-product-price="{{$product->price}}" data-product_id="{{ $product->id }}" data-product_sku="{{ $product->sku }}"
                                            class="add_to_cart_button button alt">Buy now</button>

                                        {{-- <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart"
                                            data-tinvwl_product_id="18187">
                                            <div class="tinv-wishlist-clear"></div><a role="button" tabindex="0"
                                                aria-label="Add to Wishlist"
                                                class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode"
                                                data-tinv-wl-list="[]" data-tinv-wl-product="18187"
                                                data-tinv-wl-productvariation="0" data-tinv-wl-productvariations="[0]"
                                                data-tinv-wl-producttype="simple" data-tinv-wl-action="add"
                                                href="cauliflower.html"><span class="tinvwl_add_to_wishlist-text">Add to
                                                    Wishlist</span></a>
                                            <div class="tinv-wishlist-clear"></div>
                                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                                        </div> --}}
                                    </form>
                                    @else
                                    <p class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">Product is</span>
                                                Out of Stock
                                            </bdi>
                                        </span>
                                    </p>
                                    @endif

                                    <div class="product_meta">



                                        <span class="sku_wrapper">Remaining: <span class="sku">{{ $product->shelf_qty + $product->warehouse_qty  }}</span></span>
                                        <span class="sku_wrapper">SKU: <span class="sku">{{ $product->sku }}</span></span>


                                        <span class="posted_in">
                                            @if ($product->categories !== null)
                                            Category: 
                                                @forelse($product->categories as $cat)
                                                <a href="#" rel="tag">{{$cat->name}}</a>
                                                @empty
                                                @endforelse
                                            @endif
                                        </span>
                                        <span class="tagged_as">
                                            @if ($product->tags !== null)
                                            Tags: 
                                                @forelse($product->tags as $tag)
                                                <a href="#" rel="tag">{{$tag->name}}</a>
                                                @empty
                                                @endforelse
                                            @endif
                                        </span>
                                        <span class="product_id">Product ID: <span>{{ $product->id }}</span></span>
                                    </div>
                                </div>
                                <div class="woocommerce-tabs wc-tabs-wrapper">
                                    <ul class="tabs wc-tabs" role="tablist">
                                        <li class="description_tab" id="tab-title-description" role="tab"
                                            aria-controls="tab-description">
                                            <a href="#tab-description">
                                                Description </a>
                                        </li>
                                        <li class="reviews_tab" id="tab-title-reviews" role="tab"
                                            aria-controls="tab-reviews">
                                            <a href="#tab-reviews">
                                                Reviews (0) </a>
                                        </li>
                                    </ul>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                        id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

                                        <h2>Description</h2>

                                        <p>
                                            {{ $product->description ?? 'No Description on this item' }}
                                        </p>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
                                        id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">
                                                    Reviews </h2>

                                                <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                            </div>

                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <span id="reply-title" class="comment-reply-title">Be the first
                                                            to review &ldquo;{{ $product->name }}&rdquo; <small><a rel="nofollow"
                                                                    id="cancel-comment-reply-link"
                                                                    href="/product/cauliflower/#respond"
                                                                    style="display:none;">Cancel
                                                                    reply</a></small></span>
                                                        <form
                                                            action="https://agricola.axiomthemes.com/wp-comments-post.php"
                                                            method="post" id="commentform" class="comment-form"
                                                            novalidate>
                                                            <p class="comment-notes"><span id="email-notes">Your email
                                                                    address will not be published.</span> <span
                                                                    class="required-field-message">Required fields are
                                                                    marked <span class="required">*</span></span></p>
                                                            <p class="comment-form-author"><label
                                                                    for="author">Name&nbsp;<span
                                                                        class="required">*</span></label><input
                                                                    id="author" name="author" type="text" value=""
                                                                    size="30" required></p>
                                                            <p class="comment-form-email"><label
                                                                    for="email">Email&nbsp;<span
                                                                        class="required">*</span></label><input
                                                                    id="email" name="email" type="email" value=""
                                                                    size="30" required></p>
                                                            <p class="comment-form-cookies-consent"><input
                                                                    id="wp-comment-cookies-consent"
                                                                    name="wp-comment-cookies-consent" type="checkbox"
                                                                    value="yes"> <label
                                                                    for="wp-comment-cookies-consent">Save my name,
                                                                    email, and website in this browser for the next time
                                                                    I comment.</label></p>
                                                            <div class="comment-form-rating"><label for="rating">Your
                                                                    rating&nbsp;<span
                                                                        class="required">*</span></label><select
                                                                    name="rating" id="rating" required>
                                                                    <option value="">Rate&hellip;</option>
                                                                    <option value="5">Perfect</option>
                                                                    <option value="4">Good</option>
                                                                    <option value="3">Average</option>
                                                                    <option value="2">Not that bad</option>
                                                                    <option value="1">Very poor</option>
                                                                </select></div>
                                                            <p class="comment-form-comment"><label for="comment">Your
                                                                    review&nbsp;<span
                                                                        class="required">*</span></label><textarea
                                                                    id="comment" name="comment" cols="45" rows="8"
                                                                    required></textarea></p>
                                                            <p class="wpgdprc-checkbox comment-form-wpgdprc">
                                                                <input type="checkbox" name="wpgdprc" id="wpgdprc"
                                                                    value="1">
                                                                <label for="wpgdprc">
                                                                    I agree that my submitted data is being <a
                                                                        href="#">collected and
                                                                        stored</a>.
                                                                    <abbr class="wpgdprc-required"
                                                                        title="You need to accept this checkbox.">*</abbr>
                                                                </label>
                                                            </p>
                                                            <p class="form-submit"><input name="submit" type="submit"
                                                                    id="submit" class="submit" value="Submit"> <input
                                                                    type="hidden" name="comment_post_ID" value="18187"
                                                                    id="comment_post_ID">
                                                                <input type="hidden" name="comment_parent"
                                                                    id="comment_parent" value="0">
                                                            </p>
                                                        </form>
                                                    </div><!-- #respond -->
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                    </div>

                                </div>


                                {{-- <section class="related products">

                                    <h2>Related products</h2>

                                    <ul class="products columns-3">


                                        <li
                                            class="product type-product post-18152 status-publish first instock product_cat-tractors product_tag-crop product_tag-farm product_tag-food product_tag-healthy has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="post_item post_layout_thumbs">
                                                <div class="post_featured hover_shop">
                                                    <a href="synthetic-rubber.html">
                                                        <img width="430" height="430"
                                                            src="images/07-product-image18-copyright-430x430.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" decoding="async" loading="lazy"
                                                            srcset="https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image18-copyright-430x430.jpg 430w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image18-copyright-150x150.jpg 150w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image18-copyright-120x120.jpg 120w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image18-copyright-300x300.jpg 300w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image18-copyright-370x370.jpg 370w"
                                                            sizes="(max-width: 600px) 100vw, 430px"> </a>
                                                    <div class="mask"></div>
                                                    <div class="icons">
                                                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper"
                                                            data-tinvwl_product_id="18152">
                                                            <div class="tinv-wishlist-clear"></div><a role="button"
                                                                tabindex="0" aria-label="Add to Wishlist"
                                                                class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop"
                                                                data-tinv-wl-list="[]" data-tinv-wl-product="18152"
                                                                data-tinv-wl-productvariation="0"
                                                                data-tinv-wl-productvariations="[0]"
                                                                data-tinv-wl-producttype="simple"
                                                                data-tinv-wl-action="add" href="cauliflower.html"><span
                                                                    class="tinvwl_add_to_wishlist-text">Add to
                                                                    Wishlist</span></a>
                                                            <div class="tinv-wishlist-clear"></div>
                                                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                                                        </div>
                                                        <a rel="nofollow" href="?add-to-cart=18152.html"
                                                            aria-hidden="true" data-quantity="1" data-product_id="18152"
                                                            data-product_sku="853905"
                                                            class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock ajax_add_to_cart"><span
                                                                class="icon-anim"></span></a> <a
                                                            href="synthetic-rubber.html" aria-hidden="true"
                                                            class="shop_link">
                                                            <span class="icon-anim"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post_data">
                                                    <div class="post_data_inner">
                                                        <div class="post_header entry-header">
                                                            <h2 class="woocommerce-loop-product__title"><a
                                                                    href="synthetic-rubber.html">Synthetic Rubber</a>
                                                            </h2>
                                                        </div>

                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">K</span>1,250.00</bdi></span></span>
                                                        <a href="?add-to-cart=18152.html" data-quantity="1"
                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                            data-product_id="18152" data-product_sku="853905"
                                                            aria-label="Add &ldquo;Synthetic Rubber&rdquo; to your cart"
                                                            rel="nofollow">Buy now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                        <li
                                            class="product type-product post-18081 status-publish instock product_cat-dairy product_tag-farm product_tag-food product_tag-healthy has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="post_item post_layout_thumbs">
                                                <div class="post_featured hover_shop">
                                                    <a href="mozarella-cheese.html">
                                                        <img width="430" height="430"
                                                            src="images/07-product-image12-copyright-430x430.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" decoding="async" loading="lazy"
                                                            srcset="https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image12-copyright-430x430.jpg 430w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image12-copyright-150x150.jpg 150w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image12-copyright-120x120.jpg 120w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image12-copyright-300x300.jpg 300w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image12-copyright-370x370.jpg 370w"
                                                            sizes="(max-width: 600px) 100vw, 430px"> </a>
                                                    <div class="mask"></div>
                                                    <div class="icons">
                                                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper"
                                                            data-tinvwl_product_id="18081">
                                                            <div class="tinv-wishlist-clear"></div><a role="button"
                                                                tabindex="0" aria-label="Add to Wishlist"
                                                                class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop"
                                                                data-tinv-wl-list="[]" data-tinv-wl-product="18081"
                                                                data-tinv-wl-productvariation="0"
                                                                data-tinv-wl-productvariations="[0]"
                                                                data-tinv-wl-producttype="simple"
                                                                data-tinv-wl-action="add" href="cauliflower.html"><span
                                                                    class="tinvwl_add_to_wishlist-text">Add to
                                                                    Wishlist</span></a>
                                                            <div class="tinv-wishlist-clear"></div>
                                                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                                                        </div>
                                                        <a rel="nofollow" href="?add-to-cart=18081.html"
                                                            aria-hidden="true" data-quantity="1" data-product_id="18081"
                                                            data-product_sku="236031"
                                                            class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock ajax_add_to_cart"><span
                                                                class="icon-anim"></span></a> <a
                                                            href="mozarella-cheese.html" aria-hidden="true"
                                                            class="shop_link">
                                                            <span class="icon-anim"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post_data">
                                                    <div class="post_data_inner">
                                                        <div class="post_header entry-header">
                                                            <h2 class="woocommerce-loop-product__title"><a
                                                                    href="mozarella-cheese.html">Mozarella Cheese</a>
                                                            </h2>
                                                        </div>

                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">K</span>50.00</bdi></span></span>
                                                        <div class="star-rating" role="img"
                                                            aria-label="Rated 5.00 out of 5"><span
                                                                style="width:100%">Rated <strong
                                                                    class="rating">5.00</strong> out of 5</span></div><a
                                                            href="?add-to-cart=18081.html" data-quantity="1"
                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                            data-product_id="18081" data-product_sku="236031"
                                                            aria-label="Add &ldquo;Mozarella Cheese&rdquo; to your cart"
                                                            rel="nofollow">Buy now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                        <li
                                            class="product type-product post-18147 status-publish last instock product_cat-tractors product_tag-crop product_tag-farm product_tag-food product_tag-healthy has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="post_item post_layout_thumbs">
                                                <div class="post_featured hover_shop">
                                                    <a href="riding-lawn-mower.html">
                                                        <img width="430" height="430"
                                                            src="images/07-product-image19-copyright-430x430.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" decoding="async" loading="lazy"
                                                            srcset="https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image19-copyright-430x430.jpg 430w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image19-copyright-150x150.jpg 150w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image19-copyright-120x120.jpg 120w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image19-copyright-300x300.jpg 300w, https://agricola.axiomthemes.com/wp-content/uploads/2022/07/product-image19-copyright-370x370.jpg 370w"
                                                            sizes="(max-width: 600px) 100vw, 430px"> </a>
                                                    <div class="mask"></div>
                                                    <div class="icons">
                                                        <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper"
                                                            data-tinvwl_product_id="18147">
                                                            <div class="tinv-wishlist-clear"></div><a role="button"
                                                                tabindex="0" aria-label="Add to Wishlist"
                                                                class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop"
                                                                data-tinv-wl-list="[]" data-tinv-wl-product="18147"
                                                                data-tinv-wl-productvariation="0"
                                                                data-tinv-wl-productvariations="[0]"
                                                                data-tinv-wl-producttype="simple"
                                                                data-tinv-wl-action="add" href="cauliflower.html"><span
                                                                    class="tinvwl_add_to_wishlist-text">Add to
                                                                    Wishlist</span></a>
                                                            <div class="tinv-wishlist-clear"></div>
                                                            <div class="tinvwl-tooltip">Add to Wishlist</div>
                                                        </div>
                                                        <a rel="nofollow" href="?add-to-cart=18147.html"
                                                            aria-hidden="true" data-quantity="1" data-product_id="18147"
                                                            data-product_sku="853904"
                                                            class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock ajax_add_to_cart"><span
                                                                class="icon-anim"></span></a> <a
                                                            href="riding-lawn-mower.html" aria-hidden="true"
                                                            class="shop_link">
                                                            <span class="icon-anim"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post_data">
                                                    <div class="post_data_inner">
                                                        <div class="post_header entry-header">
                                                            <h2 class="woocommerce-loop-product__title"><a
                                                                    href="riding-lawn-mower.html">Riding Lawn Mower</a>
                                                            </h2>
                                                        </div>

                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">K</span>14,600.00</bdi></span></span>
                                                        <a href="?add-to-cart=18147.html" data-quantity="1"
                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                            data-product_id="18147" data-product_sku="853904"
                                                            aria-label="Add &ldquo;Riding Lawn Mower&rdquo; to your cart"
                                                            rel="nofollow">Buy now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>

                                </section> --}}
                            </div>



                        </article>


                    </div>
                </div>
            </div>
            @include('components/footer')


        </div>


    </div>



    {{-- Only for this page --}}
    
    <script data-cfasync="false" src="js/cloudflare-static-email-decode.min.js"></script>
    <script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = false;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default"
        title="Scroll to top"></a><!-- Instagram Feed JS -->
    <script type="text/javascript">
    var sbiajaxurl = "https://agricola.axiomthemes.com/wp-admin/admin-ajax.php";
    </script>
    <div
        class="trx_addons_mouse_helper trx_addons_mouse_helper_base trx_addons_mouse_helper_style_default trx_addons_mouse_helper_smooth">
    </div>
    <script type="application/ld+json">
    {
        "@context": "https:\/\/schema.org\/",
        "@graph": [{
            "@context": "https:\/\/schema.org\/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "name": "Home",
                    "@id": "https:\/\/agricola.axiomthemes.com"
                }
            }, {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "name": "Organic",
                    "@id": "https:\/\/agricola.axiomthemes.com\/product-category\/organic\/"
                }
            }, {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "name": "Cauliflower",
                    "@id": "https:\/\/agricola.axiomthemes.com\/product\/cauliflower\/"
                }
            }]
        }, {
            "@context": "https:\/\/schema.org\/",
            "@type": "Product",
            "@id": "https:\/\/agricola.axiomthemes.com\/product\/cauliflower\/#product",
            "name": "Cauliflower",
            "url": "https:\/\/agricola.axiomthemes.com\/product\/cauliflower\/",
            "description": "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur adipiscing dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.",
            "image": "https:\/\/agricola.axiomthemes.com\/wp-content\/uploads\/2022\/07\/product-image29-copyright.jpg",
            "sku": "5678",
            "offers": [{
                "@type": "Offer",
                "price": "61.00",
                "priceValidUntil": "2024-12-31",
                "priceSpecification": {
                    "price": "61.00",
                    "priceCurrency": "USD",
                    "valueAddedTaxIncluded": "false"
                },
                "priceCurrency": "USD",
                "availability": "http:\/\/schema.org\/InStock",
                "url": "https:\/\/agricola.axiomthemes.com\/product\/cauliflower\/",
                "seller": {
                    "@type": "Organization",
                    "name": "Agricola",
                    "url": "https:\/\/agricola.axiomthemes.com"
                }
            }]
        }]
    }
    </script>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
    </script>








    <script type="text/javascript" defer src="js/js-advanced-popups-public.js" id="advanced-popups-js"></script>



    <script type="text/javascript" defer src="js/js-jquery.powertip.min.js" id="powertip-js"></script>
    <script type="text/javascript" defer src="js/js-maps_points.js" id="maps-points-js"></script>


    <script type="text/javascript" defer src="js/magnific-jquery.magnific-popup.min.js" id="magnific-popup-js"></script>
    <script type="text/javascript" id="trx_demo_panels-js-extra">
    /* <![CDATA[ */
    var TRX_DEMO_STORAGE = {
        "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "97f69681de",
        "site_url": "https:\/\/agricola.axiomthemes.com",
        "user_logged_in": "0",
        "msg_ajax_error": "Invalid server response! Try again later.",
        "tabs_delay": "3000"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/js-trx_demo_panels.js" id="trx_demo_panels-js"></script>
    <script type="text/javascript" defer src="js/jquery-blockui-jquery.blockUI.min.js" id="jquery-blockui-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/agricola.axiomthemes.com\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/frontend-add-to-cart.min.js" id="wc-add-to-cart-js"></script>
    <script type="text/javascript" defer src="js/zoom-jquery.zoom.min.js" id="zoom-js"></script>
    <script type="text/javascript" defer src="js/flexslider-jquery.flexslider.min.js" id="flexslider-js"></script>
    <script type="text/javascript" defer src="js/photoswipe-photoswipe.min.js" id="photoswipe-js"></script>
    <script type="text/javascript" defer src="js/photoswipe-photoswipe-ui-default.min.js" id="photoswipe-ui-default-js">
    </script>
    <script type="text/javascript" id="wc-single-product-js-extra">
    /* <![CDATA[ */
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes",
        "flexslider": {
            "rtl": false,
            "animation": "slide",
            "smoothHeight": true,
            "directionNav": false,
            "controlNav": "thumbnails",
            "slideshow": false,
            "animationSpeed": 500,
            "animationLoop": false,
            "allowOneSlide": false
        },
        "zoom_enabled": "1",
        "zoom_options": [],
        "photoswipe_enabled": "1",
        "photoswipe_options": {
            "shareEl": false,
            "closeOnScroll": false,
            "history": false,
            "hideAnimationDuration": 0,
            "showAnimationDuration": 0
        },
        "flexslider_enabled": "1"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/frontend-single-product.min.js" id="wc-single-product-js"></script>
    <script type="text/javascript" src="js/js-cookie-js.cookie.min.js" id="js-cookie-js"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/frontend-woocommerce.min.js" id="woocommerce-js"></script>
    <script type="text/javascript" id="wc-cart-fragments-js-extra">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_6ea3582e541197a8a202a7f75c2eab9b",
        "fragment_name": "wc_fragments_6ea3582e541197a8a202a7f75c2eab9b",
        "request_timeout": "5000"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/frontend-cart-fragments.min.js" id="wc-cart-fragments-js"></script>
    <script type="text/javascript" id="tinvwl-js-extra">
    /* <![CDATA[ */
    var tinvwl_add_to_wishlist = {
        "text_create": "Create New",
        "text_already_in": "{product_name} already in Wishlist",
        "simple_flow": "",
        "hide_zero_counter": "",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your wishlist.",
        "tinvwl_break_submit": "No items or actions are selected.",
        "tinvwl_clipboard": "Copied!",
        "allow_parent_variable": "",
        "block_ajax_wishlists_data": "",
        "update_wishlists_data": "",
        "hash_key": "ti_wishlist_data_6ea3582e541197a8a202a7f75c2eab9b",
        "nonce": "a89df4b8af",
        "rest_root": "https:\/\/agricola.axiomthemes.com\/wp-json\/",
        "plugin_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
        "wc_ajax_url": "\/?wc-ajax=tinvwl",
        "stats": "",
        "popup_timer": "6000"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/js-public.min.js" id="tinvwl-js"></script>
    <script type="text/javascript" id="trx_addons-js-extra">
    /* <![CDATA[ */
    var TRX_ADDONS_STORAGE = {
        "admin_mode": "",
        "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "97f69681de",
        "site_url": "https:\/\/agricola.axiomthemes.com",
        "post_id": "18187",
        "vc_edit_mode": "",
        "is_preview": "",
        "is_preview_gb": "",
        "is_preview_elm": "",
        "popup_engine": "magnific",
        "scroll_progress": "hide",
        "hide_fixed_rows": "0",
        "smooth_scroll": "",
        "animate_inner_links": "1",
        "disable_animation_on_mobile": "",
        "add_target_blank": "0",
        "menu_collapse": "1",
        "menu_collapse_icon": "trx_addons_icon-ellipsis-vert",
        "menu_stretch": "1",
        "resize_tag_video": "",
        "resize_tag_iframe": "1",
        "user_logged_in": "",
        "theme_slug": "agricola",
        "theme_bg_color": "#FAF7F0",
        "theme_accent_color": "#F2C200",
        "page_wrap_class": ".page_wrap",
        "columns_wrap_class": "trx_addons_columns_wrap",
        "columns_in_single_row_class": "columns_in_single_row",
        "column_class_template": "trx_addons_column-$1_$2",
        "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\\-]+(\\.[a-zA-Z0-9_\\-]+)*\\.[a-zA-Z0-9]{2,12}$",
        "mobile_breakpoint_fixedrows_off": "768",
        "mobile_breakpoint_fixedcolumns_off": "768",
        "mobile_breakpoint_stacksections_off": "768",
        "mobile_breakpoint_scroll_lag_off": "768",
        "mobile_breakpoint_fullheight_off": "1025",
        "mobile_breakpoint_mousehelper_off": "1025",
        "msg_caption_yes": "Yes",
        "msg_caption_no": "No",
        "msg_caption_ok": "OK",
        "msg_caption_apply": "Apply",
        "msg_caption_cancel": "Cancel",
        "msg_caption_attention": "Attention!",
        "msg_caption_warning": "Warning!",
        "msg_ajax_error": "Invalid server answer!",
        "msg_magnific_loading": "Loading image",
        "msg_magnific_error": "Error loading image",
        "msg_magnific_close": "Close (Esc)",
        "msg_error_like": "Error saving your like! Please, try again later.",
        "msg_field_name_empty": "The name can't be empty",
        "msg_field_email_empty": "Too short (or empty) email address",
        "msg_field_email_not_valid": "Invalid email address",
        "msg_field_text_empty": "The message text can't be empty",
        "msg_search_error": "Search error! Try again later.",
        "msg_send_complete": "Send message complete!",
        "msg_send_error": "Transmit failed!",
        "msg_validation_error": "Error data validation!",
        "msg_name_empty": "The name can't be empty",
        "msg_name_long": "Too long name",
        "msg_email_empty": "Too short (or empty) email address",
        "msg_email_long": "E-mail address is too long",
        "msg_email_not_valid": "E-mail address is invalid",
        "msg_text_empty": "The message text can't be empty",
        "msg_copied": "Copied!",
        "ajax_views": "",
        "menu_cache": [".menu_mobile_inner nav > ul"],
        "login_via_ajax": "1",
        "double_opt_in_registration": "1",
        "msg_login_empty": "The Login field can't be empty",
        "msg_login_long": "The Login field is too long",
        "msg_password_empty": "The password can't be empty and shorter then 4 characters",
        "msg_password_long": "The password is too long",
        "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
        "msg_login_error": "Login failed!",
        "msg_not_agree": "Please, read and check 'Terms and Conditions'",
        "msg_password_not_equal": "The passwords in both fields are not equal",
        "msg_registration_success": "Thank you for registering. Please confirm registration by clicking on the link in the letter sent to the specified email.",
        "msg_registration_error": "Registration failed!",
        "shapes_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/themes\/agricola\/skins\/default\/trx_addons\/css\/shapes\/",
        "mouse_helper_in_swiper_slider": "1",
        "elementor_stretched_section_container": ".page_wrap",
        "pagebuilder_preview_mode": "",
        "elementor_animate_items": ".elementor-heading-title,.sc_item_subtitle,.sc_item_title,.sc_item_descr,.sc_item_posts_container + .sc_item_button,.sc_item_button.sc_title_button,nav > ul > li",
        "elementor_breakpoints": {
            "mobile": 767,
            "tablet": 1024,
            "desktop": 999999
        },
        "add_to_links_url": [{
            "mask": "elementor.com\/",
            "link": "https:\/\/be.elementor.com\/visit\/?bta=2496&nci=5383&brand=elementor&utm_campaign=theme"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "\/\/account.sliderrevolution.com\/portal",
            "link": "https:\/\/themepunch.pxf.io\/4ekEVG"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "\/\/account.sliderrevolution.com\/portal\/pricing",
            "link": "https:\/\/themepunch.pxf.io\/KeRz5z"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/premium-slider-revolution",
            "link": "https:\/\/themepunch.pxf.io\/9W1nyy"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "\/\/support.sliderrevolution.com",
            "link": "https:\/\/themepunch.pxf.io\/P0LbGq"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/help-center",
            "link": "https:\/\/themepunch.pxf.io\/doXGdy"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/manual",
            "link": "https:\/\/themepunch.pxf.io\/ZdkK3q"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/get-on-board-the-slider-revolution-dashboard",
            "link": "https:\/\/themepunch.pxf.io\/QOqb1z"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/expand-possibilities-with-addons",
            "link": "https:\/\/themepunch.pxf.io\/6baEN3"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/examples",
            "link": "https:\/\/themepunch.pxf.io\/rnvXdB"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/pro-level-design-with-slider-revolution",
            "link": "https:\/\/themepunch.pxf.io\/jWEmda"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/plugin-privacy-policy",
            "link": "https:\/\/themepunch.pxf.io\/gbzGE0"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/faq\/why-was-my-slider-revolution-license-deactivated",
            "link": "https:\/\/themepunch.pxf.io\/RyxbVy"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/faq\/updating-make-sure-clear-caches",
            "link": "https:\/\/themepunch.pxf.io\/Yg5Nzq"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/faq\/where-to-find-purchase-code",
            "link": "https:\/\/themepunch.pxf.io\/x9xZdO"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/documentation\/changelog",
            "link": "https:\/\/themepunch.pxf.io\/EanyNn"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com\/documentation\/system-requirements\/",
            "link": "https:\/\/themepunch.pxf.io\/LPv2kO"
        }, {
            "page": ["admin.php?page=revslider", "plugins.php"],
            "mask": "sliderrevolution.com",
            "link": "https:\/\/themepunch.pxf.io\/DVEORn"
        }],
        "animate_to_mc4wp_form_submitted": "1",
        "msg_no_products_found": "No products found! Please, change query parameters and try again.",
        "audio_effects_allowed": "0",
        "bg_colors_selector": "body:not(.body_style_boxed) .page_content_wrap,body.body_style_boxed .page_wrap",
        "mouse_helper": "1",
        "mouse_helper_delay": "8",
        "mouse_helper_centered": "0",
        "msg_mouse_helper_anchor": "Scroll to",
        "ai_helper_sc_igenerator_openai_sizes": [],
        "msg_ai_helper_download": "Download",
        "msg_ai_helper_download_error": "Error",
        "msg_ai_helper_download_expired": "The generated image cache timed out. The download link is no longer valid.<br>But you can still download the image by right-clicking on it and selecting \"Save Image As...\"",
        "portfolio_use_gallery": "",
        "scroll_to_anchor": "0",
        "update_location_from_anchor": "0",
        "msg_sc_googlemap_not_avail": "Googlemap service is not available",
        "msg_sc_googlemap_geocoder_error": "Error while geocode address",
        "sc_icons_animation_speed": "50",
        "msg_sc_osmap_not_avail": "OpenStreetMap service is not available",
        "msg_sc_osmap_geocoder_error": "Error while geocoding address",
        "osmap_tiler": "vector",
        "osmap_tiler_styles": {
            "basic": {
                "title": "Basic",
                "slug": "basic",
                "url": "https:\/\/api.maptiler.com\/maps\/{style}\/style.json?key=C1rALu26mR1iTxEBrqQj",
                "maxzoom": "18",
                "token": ""
            }
        },
        "osmap_attribution": "Map data \u00a9 <a href=\"https:\/\/www.openstreetmap.org\/\">OpenStreetMap<\/a> contributors",
        "slider_round_lengths": "1"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/js-__scripts.js" id="trx_addons-js"></script>
    <script type="text/javascript" defer src="js/woocommerce-woocommerce.js" id="trx_addons-woocommerce-js"></script>
    <script type="text/javascript" defer src="js/mouse-helper-mouse-helper.js" id="trx_addons-mouse-helper-js"></script>
    <script type="text/javascript" defer src="js/menu-superfish.min.js" id="superfish-js"></script>
    <script type="text/javascript" defer src="js/swiper-swiper.min.js" id="swiper-js"></script>
    <script type="text/javascript" src="js/tweenmax-tweenmax.min.js" id="tweenmax-js"></script>
    <script type="text/javascript" id="wpgdprc-front-js-js-extra">
    /* <![CDATA[ */
    var wpgdprcFront = {
        "ajaxUrl": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
        "ajaxNonce": "608822731e",
        "ajaxArg": "security",
        "pluginPrefix": "wpgdprc",
        "blogId": "1",
        "isMultiSite": "",
        "locale": "en_US",
        "showSignUpModal": "1",
        "showFormModal": "",
        "cookieName": "wpgdprc-consent",
        "consentVersion": "",
        "path": "\/",
        "prefix": "wpgdprc"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/js-front.min.js" id="wpgdprc-front-js-js"></script>
    <script type="text/javascript" id="agricola-init-js-extra">
    /* <![CDATA[ */
    var AGRICOLA_STORAGE = {
        "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "97f69681de",
        "site_url": "https:\/\/agricola.axiomthemes.com",
        "theme_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/themes\/agricola\/",
        "site_scheme": "scheme_default",
        "user_logged_in": "",
        "mobile_layout_width": "768",
        "mobile_device": "",
        "mobile_breakpoint_underpanels_off": "768",
        "mobile_breakpoint_fullheight_off": "1025",
        "menu_side_stretch": "",
        "menu_side_icons": "1",
        "background_video": "",
        "use_mediaelements": "1",
        "resize_tag_video": "",
        "resize_tag_iframe": "1",
        "open_full_post": "",
        "which_block_load": "article",
        "admin_mode": "",
        "msg_ajax_error": "Invalid server answer!",
        "msg_i_agree_error": "Please accept the terms of our Privacy Policy.",
        "toggle_title": "Filter by ",
        "msg_copied": "Copied!",
        "alter_link_color": "#F2C200",
        "mc4wp_msg_email_min": "Email address is too short (or empty)",
        "mc4wp_msg_email_max": "Too long email address",
        "button_hover": "default"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/js-__scripts.js" id="agricola-init-js"></script>
    <script type="text/javascript" defer src="js/js-comment-reply.min.js" id="comment-reply-js"></script>
    <script id="mediaelement-core-js-before" type="text/javascript">
    var mejsL10n = {
        "language": "en",
        "strings": {
            "mejs.download-file": "Download File",
            "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
            "mejs.fullscreen": "Fullscreen",
            "mejs.play": "Play",
            "mejs.pause": "Pause",
            "mejs.time-slider": "Time Slider",
            "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
            "mejs.live-broadcast": "Live Broadcast",
            "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "mejs.unmute": "Unmute",
            "mejs.mute": "Mute",
            "mejs.volume-slider": "Volume Slider",
            "mejs.video-player": "Video Player",
            "mejs.audio-player": "Audio Player",
            "mejs.captions-subtitles": "Captions\/Subtitles",
            "mejs.captions-chapters": "Chapters",
            "mejs.none": "None",
            "mejs.afrikaans": "Afrikaans",
            "mejs.albanian": "Albanian",
            "mejs.arabic": "Arabic",
            "mejs.belarusian": "Belarusian",
            "mejs.bulgarian": "Bulgarian",
            "mejs.catalan": "Catalan",
            "mejs.chinese": "Chinese",
            "mejs.chinese-simplified": "Chinese (Simplified)",
            "mejs.chinese-traditional": "Chinese (Traditional)",
            "mejs.croatian": "Croatian",
            "mejs.czech": "Czech",
            "mejs.danish": "Danish",
            "mejs.dutch": "Dutch",
            "mejs.english": "English",
            "mejs.estonian": "Estonian",
            "mejs.filipino": "Filipino",
            "mejs.finnish": "Finnish",
            "mejs.french": "French",
            "mejs.galician": "Galician",
            "mejs.german": "German",
            "mejs.greek": "Greek",
            "mejs.haitian-creole": "Haitian Creole",
            "mejs.hebrew": "Hebrew",
            "mejs.hindi": "Hindi",
            "mejs.hungarian": "Hungarian",
            "mejs.icelandic": "Icelandic",
            "mejs.indonesian": "Indonesian",
            "mejs.irish": "Irish",
            "mejs.italian": "Italian",
            "mejs.japanese": "Japanese",
            "mejs.korean": "Korean",
            "mejs.latvian": "Latvian",
            "mejs.lithuanian": "Lithuanian",
            "mejs.macedonian": "Macedonian",
            "mejs.malay": "Malay",
            "mejs.maltese": "Maltese",
            "mejs.norwegian": "Norwegian",
            "mejs.persian": "Persian",
            "mejs.polish": "Polish",
            "mejs.portuguese": "Portuguese",
            "mejs.romanian": "Romanian",
            "mejs.russian": "Russian",
            "mejs.serbian": "Serbian",
            "mejs.slovak": "Slovak",
            "mejs.slovenian": "Slovenian",
            "mejs.spanish": "Spanish",
            "mejs.swahili": "Swahili",
            "mejs.swedish": "Swedish",
            "mejs.tagalog": "Tagalog",
            "mejs.thai": "Thai",
            "mejs.turkish": "Turkish",
            "mejs.ukrainian": "Ukrainian",
            "mejs.vietnamese": "Vietnamese",
            "mejs.welsh": "Welsh",
            "mejs.yiddish": "Yiddish"
        }
    };
    </script>
    <script type="text/javascript" defer src="js/mediaelement-mediaelement-and-player.min.js" id="mediaelement-core-js">
    </script>
    <script type="text/javascript" defer src="js/mediaelement-mediaelement-migrate.min.js" id="mediaelement-migrate-js">
    </script>
    <script type="text/javascript" id="mediaelement-js-extra">
    /* <![CDATA[ */
    var _wpmejsSettings = {
        "pluginPath": "\/wp-includes\/js\/mediaelement\/",
        "classPrefix": "mejs-",
        "stretching": "responsive",
        "audioShortcodeLibrary": "mediaelement",
        "videoShortcodeLibrary": "mediaelement"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" defer src="js/mediaelement-wp-mediaelement.min.js" id="wp-mediaelement-js"></script>
    <script type="text/javascript" defer src="js/default-skin.js" id="agricola-skin-default-js"></script>
    <script type="text/javascript" defer src="js/woocommerce-woocommerce.js" id="agricola-woocommerce-js"></script>
    <script type="text/javascript" src="js/js-webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="js/js-frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="js/waypoints-waypoints.min.js" id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="js/ui-core.min.js" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="js/share-link-share-link.min.js" id="share-link-js"></script>
    <script type="text/javascript" src="js/dialog-dialog.min.js" id="elementor-dialog-js"></script>
    <script id="elementor-frontend-js-before" type="text/javascript">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.7.7",
        "is_static": false,
        "experimentalFeatures": {
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/agricola.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "stretched_section_container": ".page_wrap",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 18187,
            "title": "Cauliflower%20%E2%80%93%20Agricola",
            "excerpt": "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur adipiscing dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.",
            "featuredImage": "https:\/\/agricola.axiomthemes.com\/wp-content\/uploads\/2022\/07\/product-image29-copyright-931x1024.jpg"
        }
    };
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.7.7",
        "is_static": false,
        "experimentalFeatures": {
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/agricola.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "stretched_section_container": ".page_wrap",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 18187,
            "title": "Cauliflower%20%E2%80%93%20Agricola",
            "excerpt": "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur adipiscing dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.",
            "featuredImage": "https:\/\/agricola.axiomthemes.com\/wp-content\/uploads\/2022\/07\/product-image29-copyright-931x1024.jpg"
        }
    };
    </script>
    <script type="text/javascript" src="js/js-frontend.min.js" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="js/js-preloaded-modules.min.js" id="preloaded-modules-js"></script>
   <!-- Add this script tag to your HTML file to include jQuery from Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Define a JavaScript variable to indicate if the user is authenticated
        // var isAuthenticated = true;
        var isAuthenticated = @json(auth()->check());
        var current_user = @json(auth()->user());
        @verbatim
            var loginRoute = "{{ route('login') }}"; // Define the login route URL using double quotes    
        @endverbatim
        </script>
    @include('components.auth.auto-auth')
    <script src="{{ asset('public/scripts/authenticate.js') }}"></script>
    <script src="{{ asset('public/scripts/routes.js') }}"></script>
    <script src="{{ asset('public/scripts/checkout.js') }}"></script>
    <script src="{{ asset('public/scripts/realtime-cart.js') }}"></script>
    <script src="{{ asset('public/scripts/main.js') }}"></script>

</body>

</html>