<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Marketplace | EcoAgro</title>
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
                "concatemoji": "{{ asset('public/theme/js/wp-emoji-release.min.js') }}"
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
    
<link property="stylesheet" rel="stylesheet" href="{{ asset('public/theme/css/prod.css')}}" type="text/css" media="all">
<link property="stylesheet" rel="stylesheet" id="trx_demo_icons_animation-css" href="{{ asset('public/theme/css/css-animation.css')}}"type="text/css" media="all">
<link property="stylesheet" rel="stylesheet" id="agricola-font-halyard-display-css"href="https://use.typekit.net/xog3vbp.css" type="text/css" media="all">
<link property="stylesheet" rel="stylesheet" id="agricola-font-google_fonts-css"href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;subset=latin,latin-ext&amp;display=swap"type="text/css" media="all">
<link property="stylesheet" rel="stylesheet" id="sbi_styles-css" href="{{ asset('public/theme/css/css-sbi-styles.min.css')}}" type="text/css"media="all">
<link property="stylesheet" rel="stylesheet" id="wc-blocks-vendors-style-css"href="{{ asset('public/theme/css/build-wc-blocks-vendors-style.css')}}" type="text/css" media="all">


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
            margin-top: -8%;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 3% 5% 6% 5%;
            line-height: 0px;
            font-size: 12px;
            background: #f2c20000; /* Transparent black, adjust the alpha (last) parameter as needed */
            opacity:0.9;
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
    <style>
li {
  list-style: none;
}
.red {
      color: #F16B6F;
}
.logo {
  position: fixed;
  background-color: #333;
  color: #eee;
  left: 0;
  top: 0;
  z-index: 1200;
  padding: 10px;
  font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
}

.bg-slideshow,
.bg-slideshow:after {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0;
}
.bg-slideshow:after {
    content: '';
    background-color: rgba(0, 0, 0, 0.3); /*Adjust the alpha value (0.5) for the level of transparency*/

    /* background: transparent url('http://watchmaker.haz.wiki/_media/tips:stripes.png') repeat top left; */
}
.bg-slideshow li .image {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
    animation: imageAnimation 18s linear infinite 0s;
}
.bg-slideshow li div {
    z-index: 1000;
    position: absolute;
    bottom: 30px;
    left: 0px;
    width: 100%;
    height: 100%;
    text-align: center;
    opacity: 0;
    color: #fff;
    animation: titleAnimation 18s linear infinite 0s;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: center;
    -ms-align-items: center;
    align-items: center;
}
.bg-slideshow li div h3 {
    font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
    font-size: 240px;
    padding: 0;
    line-height: 200px;
}
.bg-slideshow li:nth-child(1) .image {
    background-image: url('{{ asset("public/img/3.jpg") }}')
}
.bg-slideshow li:nth-child(2) .image {
    background-image: url('{{ asset("public/img/4.jpg") }}');
    animation-delay: 6s;
}
.bg-slideshow li:nth-child(3) .image {
    background-image: url('{{ asset("public/img/5.jpg") }}');
    animation-delay: 12s;
}
.bg-slideshow li:nth-child(2) div {
    animation-delay: 6s;
}
.bg-slideshow li:nth-child(3) div {
    animation-delay: 12s;
}
@keyframes imageAnimation {
    0% { opacity: 0; animation-timing-function: ease-in; }
    8% { opacity: 1; animation-timing-function: ease-out; }
    27% { opacity: 1 }
    45% { opacity: 0 }
    100% { opacity: 0 }
}
@keyframes titleAnimation {
  0% { opacity: 0; }
  8% { opacity: 1; }
  27% { opacity: 1 }
  45% { opacity: 0 }
  100% { opacity: 0 }
}
.no-cssanimations .cb-slideshow li .image{
	opacity: 1;
}
@media screen and (max-width: 1140px) {
    .bg-slideshow li div h3 { font-size: 140px }
}
@media screen and (max-width: 600px) {
    .bg-slideshow li div h3 { font-size: 80px }
}


/* Price stock table */

 .container {
	 padding: 30px 0;
}
 .table {
	 margin: 20px auto;
	 width: 957px;
}
 .table:nth-child(4) {
	 width: 240px;
}
 .table thead tr th {
	 font-size: 0.9rem;
	 line-height: 1.2;
}
 .table thead tr th.sector {
	 width: 70px !important;
	 white-space: nowrap;
	 overflow: hidden;
	 text-overflow: ellipsis;
}
 .table thead tr th.ploss {
	 min-width: 80px;
}
 .table tbody tr.active td {
	 font-weight: 700;
}
 .table tbody tr td {
	 vertical-align: middle !important;
	 line-height: 1.2;
	 font-weight: 300;
}
 .table tbody tr td:nth-first-child {
	 width: 249px;
	 white-space: nowrap;
	 overflow: hidden;
	 text-overflow: ellipsis;
}
 .table tbody tr td:nth-last-child(1) {
	 width: 140px;
}
 

/* End Pricing table */


        .slider {
            
            background: #fff;
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        .slider::before,
        .slider::after {
            background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
        }
        .slider::after {
            right: 0;
            top: 0;
            -webkit-transform: rotateZ(180deg);
            transform: rotateZ(180deg);
        }
        .slider::before {
            left: 0;
            top: 0;
        }
        .slider .slide-track {
            -webkit-animation: scroll 15s linear infinite;
            animation: scroll 15s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        .slider .slide {
            width: 100%;
        }

                /* Styles for larger screens (not mobile) */
        .mobile-view {
            display: none; /* Show the element by default */
        }
        .desk-view {
            display: block; /* Show the element by default */
        }

            /* Media query for screens with a maximum width of 767px (typical for mobile devices) */
        @media screen and (max-width: 767px) {
            /* Styles for mobile screens */
            .mobile-view {
                display: block; /* Hide the element on mobile screens */
                padding:2%;
            }
            .desk-view {
                display: none; /* Hide the element on mobile screens */
            }
        }

        
        #mbl_btn{
            margin-left: 45%; 
        }

        /* style="margin-top:28%" */
        /* Hide the element with ID "hideCategory" in mobile view */
        @media only screen and (max-width: 767px) {
            #gotoShopBtn{
                margin-top: 28%;
            }      
            #yellowBannerJoin {
                padding-bottom:16%; 
            }
            #mbl_btn{
                padding-top:3%; 
                margin-left: 0%; 
            }
        }
    </style>
</head>

<body class="page-template-default page page-id-18091 wp-custom-logo theme-agricola woocommerce-no-js tinvwl-theme-style skin_default scheme_light blog_mode_page body_style_fullscreen is_single sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-18667 header_position_over menu_side_none no_layout fixed_blocks_sticky elementor-default elementor-kit-15 elementor-page elementor-page-18091">
    <div class="body_wrap">
        <div class="page_wrap">
            <a class="agricola_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="1">Skip to
                content</a>
            <a class="agricola_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="1">Skip to
                footer</a>
            
            @include('components.header')
            
            
            <div class="page_content_wrap">
                
                <div class="content_wrap_fullscreen">
                    
                    <div class="content">
                        
                        <a id="content_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>
                        <article id="post-18091" class="post_item_single post_type_page post-18091 page type-page status-publish hentry">
                            <div class="post_content entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="18091" class="elementor elementor-18091">
                                    <div class="elementor-inner">
                                        <div class="elementor-section-wrap">
                                            
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-771869f elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="771869f" data-element_type="section">
                                                <ul class="bg-slideshow">
                                                    <li>
                                                        <span class="image">Image 01</span>
                                                        <div>
                                                            {{-- <h3><span class="red">re</span>·lax</h3> --}}
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="image">Image 02</span>
                                                        <div>
                                                            {{-- <h3>and <span class="red">go</span>..</h3> --}}
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span class="image">Image 03</span>
                                                        <div>
                                                            {{-- <h3>Get <span class="red">you</span>rself</h3> --}}
                                                        </div>
                                                    </li>
                                               </ul>
                                            </section>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-228aa24 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="228aa24" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d2cc54 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="6d2cc54" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fb7a1d6 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="fb7a1d6" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>



                                            {{-- @include('patches.products'); --}}


                                            
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-228aa24 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="228aa24" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d2cc54 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="6d2cc54" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fb7a1d6 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="fb7a1d6" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="yellowBannerJoin" style="height: 10px" data-parallax-params="{&quot;parallax&quot;:1,&quot;flow&quot;:&quot;default&quot;,&quot;crop&quot;:&quot;none&quot;,&quot;range_start&quot;:0,&quot;range_end&quot;:40,&quot;sticky_offset&quot;:0,&quot;ease&quot;:&quot;power2&quot;,&quot;duration&quot;:1,&quot;delay&quot;:0,&quot;squeeze&quot;:1,&quot;lag&quot;:0,&quot;x_start&quot;:0,&quot;x_start_unit&quot;:&quot;px&quot;,&quot;x_end&quot;:0,&quot;x_end_unit&quot;:&quot;px&quot;,&quot;y_start&quot;:0,&quot;y_start_unit&quot;:&quot;px&quot;,&quot;y_end&quot;:30,&quot;y_end_unit&quot;:&quot;px&quot;,&quot;scale_start&quot;:100,&quot;scale_end&quot;:100,&quot;rotate_start&quot;:0,&quot;rotate_end&quot;:0,&quot;opacity_start&quot;:1,&quot;opacity_end&quot;:1,&quot;crop_start&quot;:0,&quot;crop_end&quot;:100,&quot;text&quot;:&quot;block&quot;,&quot;text_separate&quot;:0,&quot;text_wrap&quot;:0,&quot;mouse&quot;:0,&quot;mouse_type&quot;:&quot;transform3d&quot;,&quot;mouse_tilt_amount&quot;:70,&quot;mouse_speed&quot;:10,&quot;mouse_z&quot;:&quot;&quot;,&quot;mouse_handler&quot;:&quot;row&quot;}" class="elementor-section elementor-inner-section elementor-element elementor-element-35fdf84f scheme_dark  elementor-section-boxed elementor-section-height-default elementor-section-height-default animation_type_block sc_fly_static" data-id="35fdf84f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:300}">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-721499a0 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="721499a0" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap" style="display: flex; gap:8px">
                                                                    <div>
                                                                        <div class="elementor-element elementor-element-1afa4bb6 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="1afa4bb6" data-element_type="widget" data-widget_type="trx_sc_title.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_title sc_title_default">
                                                                                    <h3 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                        <span class="sc_item_title_text">
                                                                                            Join the Marketplace!
                                                                                        </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a0e0342 sc_fly_static elementor-widget elementor-widget-spacer" data-id="a0e0342" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        @if (!auth()->check())
                                                                        {{-- <div class="elementor-element elementor-element-21ef2b84 sc_fly_static elementor-widget elementor-widget-text-editor" data-id="21ef2b84" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    Sign up today
                                                                                </div>
                                                                            </div>
                                                                        </div> --}}
                                                                        @endif
                                                                        <div class="elementor-element elementor-element-2e389742 sc_fly_static elementor-widget elementor-widget-spacer" data-id="2e389742" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="mbl_btn" style="display: flex; gap:4px">
                                                                        @if (auth()->check())
                                                                        <div class="elementor-element elementor-element-5a817888 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="5a817888" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_item_button sc_button_wrap">
                                                                                <a href="{{ route('shop.index') }}" class="sc_button sc_button_bordered sc_button_size_small sc_button_icon_left color_style_dark"><span class="sc_button_text"><span class="sc_button_title">
                                                                                        Continue to Shop
                                                                                        </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @else
                                                                        <div class="elementor-element elementor-element-5a817888 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="5a817888" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_item_button sc_button_wrap">
                                                                                    <a href="https://auth.ecoagrozm.com/register?source=marketplace&destination=marketplace&type=farmer" class="sc_button sc_button_bordered sc_button_size_small sc_button_icon_left color_style_dark"><span class="sc_button_text"><span class="sc_button_title">
                                                                                        Buyer account
                                                                                        </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-5a817888 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="5a817888" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_item_button sc_button_wrap">
                                                                                    <a href="https://auth.ecoagrozm.com/register?source=marketplace&destination=marketplace&type=seller" class="sc_button sc_button_bordered sc_button_size_small sc_button_icon_left color_style_dark"><span class="sc_button_text"><span class="sc_button_title">
                                                                                        Become a Seller
                                                                                        </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="elementor-element elementor-element-5a817888 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="5a817888" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_item_button sc_button_wrap">
                                                                                    <a href="https://auth.ecoagrozm.com/login?source=marketplace&destination=marketplace" class="sc_button sc_button_bordered sc_button_size_small sc_button_icon_left color_style_dark"><span class="sc_button_text"><span class="sc_button_title">
                                                                                        Login
                                                                                        </span></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </div> --}}
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section style="" class="elementor-section elementor-top-section elementor-element elementor-element-65bfb6f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="65bfb6f2" data-element_type="section">
                                                <div style="margin:2%;margin-top: 5%;">
                                                    <div class="elementor-row">
                                                        {{-- @include('components.stock-rates') --}}
                                                        {{-- <div class="elementor-col-50 elementor-top-column elementor-element elementor-element-1c27b8fa sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="1c27b8fa" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-6589da6c scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default animation_type_block sc_fly_static">
                                                                        <div class="elementor-container elementor-column-gap-no">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5e924329 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="5e924329" data-element_type="column">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-49853e13 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="49853e13" data-element_type="widget" data-widget_type="trx_sc_title.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="sc_title sc_title_default">
                                                                                                        <h3 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                                            <span class="sc_item_title_text">Open
                                                                                                                Hours</span>
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-7106b83d sc_fly_static elementor-widget elementor-widget-spacer" data-id="7106b83d" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-6038bae1 sc_fly_static elementor-widget elementor-widget-text-editor" data-id="6038bae1" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-140acb31 sc_fly_static elementor-widget elementor-widget-spacer" data-id="140acb31" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-22b035a1 sc_fly_static elementor-widget elementor-widget-text-editor" data-id="22b035a1" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                                        <ul class="trx_addons_list_dot">
                                                                                                            <li>Mon-Fri:
                                                                                                                9 AM – 6
                                                                                                                PM</li>
                                                                                                            <li>Saturday:
                                                                                                                9 AM – 4
                                                                                                                PM</li>
                                                                                                            <li>Sunday:
                                                                                                                Closed
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5e95e5f sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="5e95e5f" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-12ccc613 no-title sc_fly_static elementor-widget elementor-widget-image" data-id="12ccc613" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <img decoding="async" loading="lazy" width="945" height="855" src="{{ asset('public/img/5.jpg') }}" class="attachment-full size-full" alt="" sizes="(max-width: 945px) 100vw, 945px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-18fddf78 sc_height_medium sc_layouts_hide_on_mobile sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer" data-id="18fddf78" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5d65ae0d sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="5d65ae0d" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7444ef4e sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="7444ef4e" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                    Remove Yellow Card Here
                                                                </div>

                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </section> 

                                            
                                            <section id="gotoShopBtn" class="elementor-section elementor-top-section elementor-element elementor-element-e5d2f06 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="e5d2f06" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-89b62a9 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="89b62a9" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-6c798e9 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="6c798e9" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                    <div class="elementor-element elementor-element-981741c sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="981741c" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="sc_item_button sc_button_wrap sc_align_center">
                                                                                                <a href="{{ route('shop.index') }}" class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left">
                                                                                                    <span class="sc_button_text">
                                                                                                        <span class="sc_button_title">
                                                                                                            Go To The Shop
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-228aa24 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="228aa24" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d2cc54 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="6d2cc54" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fb7a1d6 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="fb7a1d6" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            <section style="padding-top: 2%;padding-bottom: 2%" class="elementor-section elementor-top-section elementor-element elementor-element-1e9fbafa scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="1e9fbafa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">  
                                                  <table class="table table-hover">
                                                    <thead>
                                                      <tr>
                                                        <th></th>
                                                        <th class="sector">Sector </th>
                                                        <th class="text-right">Quantity</th>
                                                        <th class="text-right">Last price K</th>
                                                        <th class="text-right">Profit Loss %</th>
                                                        <th class="text-right">Yield %</th>
                                                        <th class="text-right">Market value K</th>
                                                        <th class="text-right">Portfolio %</th>
                                                        <th class="text-right"></th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td><strong>Maize</strong> • 50 Kg</td>
                                                        <td>Seeds</td>
                                                        <td class="text-right">2,075</td>
                                                        <td class="text-right">27.81</td>
                                                        <td class="text-right">6.23 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">1.50</td>
                                                        <td class="text-right">57,726.12</td>
                                                        <td class="text-right">23.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            <button class="btn btn-default btn-sm">
                                                                <svg style="color:#23A455" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                                                  </svg>
                                                            </button>
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong>Fertilizer</strong> • Urea</td>
                                                        <td>Fertilizers</td>
                                                        <td class="text-right">1,164</td>
                                                        <td class="text-right">15.10</td>
                                                        <td class="text-right text-danger"><strong>-42.24</strong> <i class="fa fa-angle-down text-danger"></i></td>
                                                        <td class="text-right text-danger"><strong>-5.50</strong></td>
                                                        <td class="text-right">17,568.82</td>
                                                        <td class="text-right">7.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            <button class="btn btn-default btn-sm">
                                                                <svg style="color: #cf2e2e" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                                </svg>
                                                            </button>
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong>Soya Beans</strong> • 50 Kg</td>
                                                        <td>Seeds</td>
                                                        <td class="text-right">5,340</td>
                                                        <td class="text-right">5.64</td>
                                                        <td class="text-right">2.13 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">0.89</td>
                                                        <td class="text-right">30,117.98</td>
                                                        <td class="text-right">12.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            <button class="btn btn-default btn-sm">
                                                                <svg style="color: #cf2e2e" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                                                </svg>
                                                            </button>
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong>Wheat</strong> • 70 kg</td>
                                                        <td>Financials</td>
                                                        <td class="text-right">1,328</td>
                                                        <td class="text-right">24.57</td>
                                                        <td class="text-right">9.87 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">6.21</td>
                                                        <td class="text-right">32.627.31</td>
                                                        <td class="text-right">13.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            <button class="btn btn-default btn-sm">
                                                                
                                                                <svg style="color:#23A455" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                                                  </svg>
                                                            </button>
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong> Sweat Potatoes </strong> • 90 Kg</td>
                                                        <td>Food</td>
                                                        <td class="text-right">870</td>
                                                        <td class="text-right">42.87</td>
                                                        <td class="text-right">11.20 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">5.52</td>
                                                        <td class="text-right">37,321.53</td>
                                                        <td class="text-right">14.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            {{-- <button class="btn btn-default btn-sm">Buy</button> --}}
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong>Tomatoes</strong> • 90 Kg</td>
                                                        <td>Seeds</td>
                                                        <td class="text-right">622</td>
                                                        <td class="text-right">78.26</td>
                                                        <td class="text-right">22.13 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">14.12</td>
                                                        <td class="text-right">48,654.53</td>
                                                        <td class="text-right">19.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            <button class="btn btn-default btn-sm">
                                                                
                                                                <svg style="color:#23A455" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                                                    <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                                                  </svg>
                                                            </button>
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong>Mealie Meal</strong> • #1</td>
                                                        <td>Food</td>
                                                        <td class="text-right">532</td>
                                                        <td class="text-right">24.42</td>
                                                        <td class="text-right">11.14 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">4.52</td>
                                                        <td class="text-right">12,899.53</td>
                                                        <td class="text-right">5.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            {{-- <button class="btn btn-default btn-sm">Buy</button> --}}
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                      <tr>
                                                        <td><strong>Sunflower</strong> • 90 Kg</td>
                                                        <td>Seeds</td>
                                                        <td class="text-right">493</td>
                                                        <td class="text-right">42.80</td>
                                                        <td class="text-right">8.24 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">2.51</td>
                                                        <td class="text-right">21,124.53</td>
                                                        <td class="text-right">7.00</td>
                                                        <td class="text-right">
                                                          <div class="btn-group">
                                                            {{-- <button class="btn btn-default btn-sm">Buy</button> --}}
                                                            {{-- <button class="btn btn-default btn-sm">Sell</button> --}}
                                                          </div>
                                                          <button class="btn btn-default btn-sm"><i class="fa fa-caret-down"></i></button></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                  
                                                  <table class="table table-hover table-striped hide">
                                                    <thead>
                                                      <tr>
                                                        <th class="text-right">#</th>
                                                        <th>Sector</th>
                                                        <th class="text-center">ASX</th>
                                                        <th class="text-right"># Shares</th>
                                                        <th class="text-right">Share price</th>
                                                        <th class="text-right">Market value</th>
                                                        <th class="text-right">% P&L</th>
                                                        <th class="text-right">% Yield</th>
                                                        <th class="text-right">% Portfolio</th>
                                                        <th width="70"></th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td class="text-right">1</td>
                                                        <td>Mining</td>
                                                        <td class="text-center">RIO</td>
                                                        <td class="text-right">2,100</td>
                                                        <td class="text-right">2.45</td>
                                                        <td class="text-right">42,134.31</td>
                                                        <td class="text-right">123.00 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">6.21</td>
                                                        <td class="text-right"> 25.00</td>
                                                        <td class="text-right"><button class="btn btn-xs btn-success btn-block">Buy</button></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="text-right">2</td>
                                                        <td>Mining</td>
                                                        <td class="text-center">BHP</td>
                                                        <td class="text-right">250</td>
                                                        <td class="text-right">33.14</td>
                                                        <td class="text-right">4,654.53</td>
                                                        <td class="text-right">12.00 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">2.50</td>
                                                        <td class="text-right">10.00</td>
                                                        <td class="text-right"><button class="btn btn-xs btn-success btn-block">Buy</button></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="text-right">3</td>
                                                        <td>Telco</td>
                                                        <td class="text-center">TLS</td>
                                                        <td class="text-right">500</td>
                                                        <td class="text-right">452.45</td>
                                                        <td class="text-right">84,872.94</td>
                                                        <td class="text-right">6.11 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">8.75</td>
                                                        <td class="text-right">15.00</td>
                                                        <td class="text-right"><button class="btn btn-xs btn-success btn-block">Buy</button></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="text-right">4</td>
                                                        <td>Telco</td>
                                                        <td class="text-center">OPT</td>
                                                        <td class="text-right">345</td>
                                                        <td class="text-right">11.22</td>
                                                        <td class="text-right">12,872.94</td>
                                                        <td class="text-right">5.00 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">6.25</td>
                                                        <td class="text-right">5.00</td>
                                                        <td class="text-right"><button class="btn btn-xs btn-disabled btn-block">Hold</button></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="text-right">5</td>
                                                        <td>Banking</td>
                                                        <td class="text-center">CBA</td>
                                                        <td class="text-right">25</td>
                                                        <td class="text-right">555.22</td>
                                                        <td class="text-right">72,872.94</td>
                                                        <td class="text-right">3.00 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">6.25</td>
                                                        <td class="text-right">5.00</td>
                                                        <td class="text-right"><button class="btn btn-xs btn-disabled btn-block">Hold</button></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="text-right">6</td>
                                                        <td>Energy</td>
                                                        <td class="text-center">ORG</td>
                                                        <td class="text-right">100</td>
                                                        <td class="text-right">0.29</td>
                                                        <td class="text-right">1,824.14</td>
                                                        <td class="text-right">1.23 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">7.1</td>
                                                        <td class="text-right">5.00</td>
                                                        <td class="text-right"><button class="btn btn-xs btn-disabled btn-block">Hold</button></td>
                                                      </tr>
                                                      <tr class="danger">
                                                        <td class="text-right">7</td>
                                                        <td>Banking</td>
                                                        <td class="text-center">SCG</td>
                                                        <td class="text-right">125</td>
                                                        <td class="text-right">11.45</td>
                                                        <td class="text-right">1,235.35</td>
                                                        <td class="text-right">-1.10 <i class="fa fa-angle-down text-danger"></i></td>
                                                        <td class="text-right">1.10</td>
                                                        <td class="text-right">35.00</td>
                                                        <td><button class="btn btn-danger btn-xs btn-block">Sell</button></td>
                                                      </tr>
                                                      <tr class="active">
                                                        <td colspan="2"><button class="btn btn-default btn-sm">Cash <i class="fa fa-plus fa-sm"></i></button></td>
                                                        <td></td>
                                                        <td class="text-right">4,122</td>
                                                        <td class="text-right">4,122</td>
                                                        <td class="text-right">4,122</td>
                                                        <td class="text-right">3.00 <i class="fa fa-angle-up text-success"></i></td>
                                                        <td class="text-right">5.20</td>
                                                        <td class="text-right">100</td>
                                                        <td></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                  
                                                  <table class="table table-condensed table-hover table-striped hide">
                                                    <thead>
                                                      <tr>
                                                        <th>Code</th>
                                                        <th class="hide">Company</th>
                                                        <th>Date</th>
                                                        <th class="text-right">$ Amount</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>CBA</td>
                                                        <td class="hide">Commonwealth Bank</td>
                                                        <td>20.01.2016</td>
                                                        <td class="text-right">77.37</td>
                                                      </tr>
                                                      <tr>
                                                        <td>WOW</td>
                                                        <td class="hide">Woolworths</td>
                                                        <td>20.01.2016</td>
                                                        <td class="text-right">24.23</td>
                                                      </tr>
                                                      <tr>
                                                        <td>TLS</td>
                                                        <td class="hide">Telstra</td>
                                                        <td>20.01.2016</td>
                                                        <td class="text-right">5.62</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                            </section>
                                            <section style="padding-top:2%" class="elementor-section elementor-top-section elementor-element elementor-element-1e9fbafa scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="1e9fbafa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-container elementor-column-gap-extended">





                                                    
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c5518a3 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="c5518a3" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-3cdebc21 sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="3cdebc21" data-element_type="widget" data-widget_type="trx_sc_title.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="sc_title color_style_dark sc_title_default">
                                                                                <span class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Buy
                                                                                    Our Products</span>
                                                                                <h1 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                    <span class="sc_item_title_text">Currently
                                                                                        Available at Select
                                                                                        Retailers</span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-76b86d6a sc_fly_static elementor-widget elementor-widget-spacer" data-id="76b86d6a" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1e77691e no-title sc_fly_static elementor-widget elementor-widget-image" data-id="1e77691e" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <img decoding="async" loading="lazy" width="945" height="945" src="{{ asset('public/img/3.jpg') }}" class="attachment-full size-full" alt="" sizes="(max-width: 945px) 100vw, 945px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1f3dffa elementor-widget__width-initial elementor-absolute sc_fly_static elementor-widget elementor-widget-image" data-id="1f3dffa" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <a href="marketplace.php">
                                                                                    <img decoding="async" loading="lazy" width="278" height="277" src="{{ asset('public/theme/images/organic-label-copyright.png') }}" class="elementor-animation-grow-rotate attachment-full size-full" alt="" sizes="(max-width: 278px) 100vw, 278px" />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4bcd1abf sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="4bcd1abf" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-28413095 no-title sc_fly_static elementor-widget elementor-widget-image" data-id="28413095" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <img decoding="async" loading="lazy" width="945" height="945" src="{{ asset('public/img/7.jpg') }}" class="attachment-full size-full" alt="" sizes="(max-width: 945px) 100vw, 945px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-1c29f52c elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="1c29f52c" data-element_type="section">
                                                                        <div class="elementor-container elementor-column-gap-no">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-72e05331 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="72e05331" data-element_type="column">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-72969a65 sc_fly_static elementor-widget elementor-widget-spacer" data-id="72969a65" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-cdbfb89 sc_fly_static elementor-widget elementor-widget-text-editor" data-id="cdbfb89" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                                        <p>Joining a marketplace can be an exciting and transformative experience. It opens up a world of opportunities for both buyers and sellers, providing a platform to connect and engage in a thriving ecosystem of products, services, and ideas. As a seller, joining a marketplace offers a unique channel to reach a wide and diverse audience, tapping into potential customers from around the globe. </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-6fc90aca sc_fly_static elementor-widget elementor-widget-spacer" data-id="6fc90aca" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            {{-- <div class="elementor-element elementor-element-5687e564 sc_fly_static elementor-widget elementor-widget-text-editor" data-id="5687e564" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                                                        <a class="simple_text_link underline_anim" href="blog.html">Read
                                                                                                            More</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> --}}
                                                                                            <div class="elementor-element elementor-element-7a2ab565 sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer" data-id="7a2ab565" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            
                                            
                                            {{-- <section>
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div style="background-color: #000">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-89b62a9 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="89b62a9" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-6c798e9 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="6c798e9" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                    <div class="elementor-element elementor-element-981741c sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="981741c" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="sc_item_button sc_button_wrap sc_align_center">
                                                                                                <a href="{{ route('shop.index') }}" class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left">
                                                                                                    <span class="sc_button_text">
                                                                                                        <span class="sc_button_title">
                                                                                                            Go To The Shop
                                                                                                        </span>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> --}}
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-b904057 scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="b904057" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75866c7 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="75866c7" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7c48a58 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="7c48a58" data-element_type="widget" data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                    <br>
                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-89b62a9 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="89b62a9" data-element_type="column">
                                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                                        <div class="elementor-widget-wrap">
                                                                                                            <div class="elementor-element elementor-element-6c798e9 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer" data-id="6c798e9" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                    <div class="elementor-spacer">
                                                                                                                        <div class="elementor-spacer-inner">
                                                                                                                            <div class="elementor-element elementor-element-981741c sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="981741c" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <div class="sc_item_button sc_button_wrap sc_align_center">
                                                                                                                                        <a href="{{ route('shop.index') }}" class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left">
                                                                                                                                            <span class="sc_button_text">
                                                                                                                                                <span class="sc_button_title">
                                                                                                                                                    Go To The Shop
                                                                                                                                                </span>
                                                                                                                                            </span>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br><br><br>
                                            </section> 



                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </article>
                    </div>
                </div>
            </div>
            <a id="footer_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>

            @include('components.footer')
        </div>
    </div>



    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script data-cfasync="false" src="{{ asset('theme/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default" title="Scroll to top"></a><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://agricola.axiomthemes.com/wp-admin/admin-ajax.php";
    </script>
    <div class="trx_addons_mouse_helper trx_addons_mouse_helper_base trx_addons_mouse_helper_style_default trx_addons_mouse_helper_smooth">
    </div>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
 <script type="text/javascript" defer src="{{ asset('public/theme/js/js-index.js')}}" id="contact-form-7-js"></script>
 <script type="text/javascript" defer src="{{ asset('public/theme/js/js-jquery.powertip.min.js')}}" id="powertip-js"></script>
 <script type="text/javascript" defer src="{{ asset('public/theme/js/js-maps_points.js')}}" id="maps-points-js"></script>


    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/advanced-popups/public/js/advanced-popups-public.js")}}' id='advanced-popups-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/devvn-image-hotspot/frontend/js/jquery.powertip.min.js")}}' id='powertip-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/devvn-image-hotspot/frontend/js/maps_points.js")}}' id='maps-points-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/revslider/public/assets/js/rbtools.min.js")}}' async id='tp-tools-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/revslider/public/assets/js/rs6.min.js")}}' async id='revmin-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js")}}' id='magnific-popup-js'></script>
    <script type='text/javascript' id='trx_demo_panels-js-extra'>
        /* <![CDATA[ */
        var TRX_DEMO_STORAGE = {
            "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "e073edf7b1",
            "site_url": "https:\/\/agricola.axiomthemes.com",
            "user_logged_in": "0",
            "msg_ajax_error": "Invalid server response! Try again later.",
            "tabs_delay": "3000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_demo/js/trx_demo_panels.js")}}' id='trx_demo_panels-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js")}}' id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "index.html",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/agricola.axiomthemes.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js")}}' id='wc-add-to-cart-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js") }}' id='js-cookie-js'>
    </script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "index.html",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/woocommerce/assets/js/frontend/woocommerce.min.js")}}' id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "index.html",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_6ea3582e541197a8a202a7f75c2eab9b",
            "fragment_name": "wc_fragments_6ea3582e541197a8a202a7f75c2eab9b",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js")}}' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' id='tinvwl-js-extra'>
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
            "nonce": "d9b545e489",
            "rest_root": "https:\/\/agricola.axiomthemes.com\/wp-json\/",
            "plugin_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
            "wc_ajax_url": "\/?wc-ajax=tinvwl",
            "stats": "",
            "popup_timer": "6000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/ti-woocommerce-wishlist/assets/js/public.min.js")}}' id='tinvwl-js'></script>
    <script type='text/javascript' id='trx_addons-js-extra'>
        /* <![CDATA[ */
        var TRX_ADDONS_STORAGE = {
            "admin_mode": "",
            "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "e073edf7b1",
            "site_url": "https:\/\/agricola.axiomthemes.com",
            "post_id": "18091",
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
            "theme_bg_color": "#FFFFFF",
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
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "\/\/account.sliderrevolution.com\/portal",
                "link": "https:\/\/themepunch.pxf.io\/4ekEVG"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "\/\/account.sliderrevolution.com\/portal\/pricing",
                "link": "https:\/\/themepunch.pxf.io\/KeRz5z"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/premium-slider-revolution",
                "link": "https:\/\/themepunch.pxf.io\/9W1nyy"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "\/\/support.sliderrevolution.com",
                "link": "https:\/\/themepunch.pxf.io\/P0LbGq"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/help-center",
                "link": "https:\/\/themepunch.pxf.io\/doXGdy"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/manual",
                "link": "https:\/\/themepunch.pxf.io\/ZdkK3q"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/get-on-board-the-slider-revolution-dashboard",
                "link": "https:\/\/themepunch.pxf.io\/QOqb1z"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/expand-possibilities-with-addons",
                "link": "https:\/\/themepunch.pxf.io\/6baEN3"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/examples",
                "link": "https:\/\/themepunch.pxf.io\/rnvXdB"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/pro-level-design-with-slider-revolution",
                "link": "https:\/\/themepunch.pxf.io\/jWEmda"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/plugin-privacy-policy",
                "link": "https:\/\/themepunch.pxf.io\/gbzGE0"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/faq\/why-was-my-slider-revolution-license-deactivated",
                "link": "https:\/\/themepunch.pxf.io\/RyxbVy"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/faq\/updating-make-sure-clear-caches",
                "link": "https:\/\/themepunch.pxf.io\/Yg5Nzq"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/faq\/where-to-find-purchase-code",
                "link": "https:\/\/themepunch.pxf.io\/x9xZdO"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/documentation\/changelog",
                "link": "https:\/\/themepunch.pxf.io\/EanyNn"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/documentation\/system-requirements\/",
                "link": "https:\/\/themepunch.pxf.io\/LPv2kO"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
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
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_addons/js/__scripts.js")}}' id='trx_addons-js'>
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_addons/components/api/woocommerce/woocommerce.js")}}' id='trx_addons-woocommerce-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_addons/addons/mouse-helper/mouse-helper.js")}}' id='trx_addons-mouse-helper-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js")}}' id='superfish-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/trx_addons/js/swiper/swiper.min.js")}}' id='swiper-js'>
    </script><script type="text/javascript" defer src="{{ asset('public/theme/js/js-__scripts.js')}}" id="trx_addons-js"></script>
    <script type="text/javascript" defer src="{{ asset('public/theme/js/skills-chart-legacy.min.js')}}" id="chart-legacy-js"></script>
    <script type="text/javascript" defer src="{{ asset('public/theme/js/skills-skills.js')}}" id="trx_addons-sc_skills-js"></script>
    <script type="text/javascript" defer src="{{ asset('public/theme/js/menu-superfish.min.js')}}" id="superfish-js"></script>
    <script type="text/javascript" defer src="{{ asset('public/theme/js/swiper-swiper.min.js')}}" id="swiper-js"></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/trx_addons/js/tweenmax/tweenmax.min.js")}}' id='tweenmax-js'></script>
    <script type='text/javascript' id='wpgdprc-front-js-js-extra'>
        /* <![CDATA[ */
        var wpgdprcFront = {
            "ajaxUrl": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajaxNonce": "38805982a9",
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
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/css/plugins/wp-gdpr-compliance/Assets/js/front.min.js")}}' id='wpgdprc-front-js-js'></script>
    <script type='text/javascript' id='agricola-init-js-extra'>
        /* <![CDATA[ */
        var AGRICOLA_STORAGE = {
            "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "e073edf7b1",
            "site_url": "https:\/\/agricola.axiomthemes.com",
            "theme_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/themes\/agricola\/",
            "site_scheme": "scheme_light",
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
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/wp-content/themes/agricola/js/__scripts.js")}}' id='agricola-init-js'>
    </script>
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
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/js/mediaelement-mediaelement-and-player.min.js")}}' id='mediaelement-core-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/js/mediaelement-mediaelement-migrate.min.js")}}' id='mediaelement-migrate-js'></script>
    <script type='text/javascript' id='mediaelement-js-extra'>
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
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/js/mediaelement-wp-mediaelement.min.js")}}' id='wp-mediaelement-js'>
    </script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/js/default-skin.js")}}' id='agricola-skin-default-js'></script>
    <script type='text/javascript' defer="defer" src='{{ asset("public/theme/wp-content/themes/agricola/plugins/woocommerce/woocommerce.js")}}' id='agricola-woocommerce-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/js/webpack.runtime.min.js")}}' id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/js/frontend-modules.min.js")}}' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/lib/waypoints/waypoints.min.js")}}' id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/js/ui-core.min.js")}}' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/lib/share-link/share-link.min.js")}}' id='share-link-js'></script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/lib/dialog/dialog.min.js")}}' id='elementor-dialog-js'>
    </script>
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
                "id": 18091,
                "title": "Organic%20Farm%20%E2%80%93%20Agricola",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/js/frontend.min.js")}}' id='elementor-frontend-js'>
    </script>
    <script type='text/javascript' src='{{ asset("public/theme/css/plugins/elementor/assets/js/preloaded-modules.min.js")}}' id='preloaded-modules-js'></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;
        var revapi4;
        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider41"] = {
            once: RS_MODULES.modules["revslider41"] !== undefined ? RS_MODULES.modules["revslider41"].once : undefined,
            init: function() {
                window.revapi4 = window.revapi4 === undefined || window.revapi4 === null || window.revapi4
                    .length === 0 ? document.getElementById("rev_slider_4_1") : window.revapi4;
                if (window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length == 0) {
                    window.revapi4initTry = window.revapi4initTry === undefined ? 0 : window.revapi4initTry + 1;
                    if (window.revapi4initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider41"].init()
                    });
                    return;
                }
                window.revapi4 = jQuery(window.revapi4);
                if (window.revapi4.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_4_1");
                    return;
                }
                revapi4.revolutionInit({
                    revapi: "revapi4",
                    DPR: "dpr",
                    sliderLayout: "fullscreen",
                    visibilityLevels: "1240,1460,785,500",
                    gridwidth: "1920,1440,778,480",
                    gridheight: "980,700,480,480",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "global",
                    editorheight: "980,700,480,480",
                    responsiveLevels: "1240,1460,785,500",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                            touchOnDesktop: true
                        },
                        arrows: {
                            enable: true,
                            style: "arrows_simple",
                            hide_onmobile: true,
                            hide_under: "1136px",
                            animSpeed: "500ms",
                            animDelay: "500ms",
                            left: {
                                anim: "right",
                                h_offset: 66
                            },
                            right: {
                                anim: "left",
                                h_offset: 66
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "bullets_dots_fill",
                            v_offset: 50,
                            space: 22
                        }
                    },
                    parallax: {
                        levels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 15, 17, 20, 25, 30],
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 0
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }
        } // End of RevInitScript
        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    
    <script src="{{ asset('public/theme/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{ asset('public/theme/js/popper.min.js')}}"></script>
        <script src="{{ asset('public/theme/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('public/theme/js/jquery.steps.min.js')}}"></script>
        <script src="{{ asset('public/theme/js/bd-wizard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.0/js/uikit.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/theme/js/js-frontend.min.js')}}" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="{{ asset('public/theme/js/js-preloaded-modules.min.js')}}" id="preloaded-modules-js"></script>
    <script>
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
        
    <script src="{{ asset('public/scripts/authenticate.js') }}"></script>
    <script src="{{ asset('public/scripts/routes.js') }}"></script>
    
    <script src="{{ asset('public/scripts/realtime-cart.js') }}"></script>
    <script src="{{ asset('public/scripts/main.js') }}"></script>


    
</body>

<script>
        document.addEventListener("DOMContentLoaded", function () {
            const slider = document.querySelector(".slider");
            const slideTrack = document.querySelector(".slide-track");
            const slides = document.querySelectorAll(".slide");

            let currentIndex = 0;
            const totalSlides = slides.length;
            const slideWidth = slides[0].clientWidth;
            let startX;
            let isDragging = false;

            // Duplicate the first and last slides for looping
            slideTrack.innerHTML = slideTrack.innerHTML + slideTrack.innerHTML;

            // Set the initial position of the slide track
            slideTrack.style.transform = `translateX(${-currentIndex * slideWidth}px)`;

            // Auto slide every 3 seconds
            setInterval(() => {
                if (!isDragging) {
                currentIndex++;
                updateSlide();
                }
            }, 3000);

            // Handle touch and click events for navigation
            slider.addEventListener("touchstart", handleTouchStart);
            slider.addEventListener("touchmove", handleTouchMove);
            slider.addEventListener("touchend", handleTouchEnd);
            slider.addEventListener("mousedown", handleMouseDown);
            slider.addEventListener("mousemove", handleMouseMove);
            slider.addEventListener("mouseup", handleMouseUp);
            slider.addEventListener("mouseleave", handleMouseLeave);

            function handleTouchStart(e) {
                startX = e.touches[0].clientX;
                isDragging = true;
            }

            function handleTouchMove(e) {
                if (isDragging) {
                const currentX = e.touches[0].clientX;
                const deltaX = currentX - startX;

                currentIndex -= deltaX / slideWidth;
                updateSlide();
                startX = currentX;
                }
            }

            function handleTouchEnd() {
                isDragging = false;
            }

            function handleMouseDown(e) {
                startX = e.clientX;
                isDragging = true;
            }

            function handleMouseMove(e) {
                if (isDragging) {
                const currentX = e.clientX;
                const deltaX = currentX - startX;

                currentIndex -= deltaX / slideWidth;
                updateSlide();
                startX = currentX;
                }
            }

            function handleMouseUp() {
                isDragging = false;
                updateSlide();
            }

            function handleMouseLeave() {
                if (isDragging) {
                isDragging = false;
                updateSlide();
                }
            }

            function updateSlide() {
                const newPosition = -currentIndex * slideWidth;
                slideTrack.style.transition = "transform 0.5s ease-in-out";

                // Check if currentIndex exceeds the total number of slides
                if (currentIndex >= totalSlides * 2) {
                currentIndex = 0;
                slideTrack.style.transition = "none"; // Disable transition for instant jump
                slideTrack.style.transform = `translateX(${newPosition}px)`;
                setTimeout(() => {
                    currentIndex = 1;
                    slideTrack.style.transition = "transform 0.5s ease-in-out";
                    slideTrack.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
                }, 0);
                } else if (currentIndex < 0) {
                currentIndex = totalSlides - 1;
                slideTrack.style.transition = "none"; // Disable transition for instant jump
                slideTrack.style.transform = `translateX(${newPosition}px)`;
                setTimeout(() => {
                    currentIndex = totalSlides;
                    slideTrack.style.transition = "transform 0.5s ease-in-out";
                    slideTrack.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
                }, 0);
                } else {
                slideTrack.style.transform = `translateX(${newPosition}px)`;
                }
            }
            });
    </script>
</html> 