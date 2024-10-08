
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>
    /* Style for the dropdown content */
    #dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Style when the dropdown is open */
    #dropdown-content.show {
        margin-top: 13%;
        display: block;
        padding: 2%;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgb(255, 255, 255);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }


    #overlay img {
        /* Add custom styles for your loader image */
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
<div id="overlay">
    <!-- You can add a loading spinner or an image here -->
    <img src="fav.png" alt="Loading...">
</div>
<header class="top_panel top_panel_custom top_panel_custom_18654 top_panel_custom_header-modern without_bg_image">
    <div data-elementor-type="cpt_layouts" data-elementor-id="18654" class="elementor elementor-18654">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-b275fda elementor-section-full_width elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact scheme_light sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="b275fda" data-element_type="section" data-settings='{"background_background":"classic"}'>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-772feca sc_layouts_column_align_left sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="772feca" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="sc_layouts_item elementor-element elementor-element-f112344 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="f112344" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="https://ecoagrozm.com" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1675068927"><img style="width: 150px; height: 160px" class="logo_image" src="{{ asset('public/images/logo.png')}}" alt="Ecoagro" width="173" height="53"></a>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-29ff9f0 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="29ff9f0" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_zoom_line" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
                                                    <ul id="menu_main" class="sc_layouts_menu_nav menu_main_nav">
                                                        <li id="menu-item-18273" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-18273">
                                                            <a href="https://ecoagrozm.com"><span>Home</span></a>

                                                        </li>
                                                        <li id="menu-item-17651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17651">
                                                            <a href="https://ecoagrozm.com/services.php"><span>Services</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-18280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18280">
                                                                    <a href="https://callcenter.ecoagrozm.com"><span>Call Center</span></a>
                                                                </li>
                                                                <li id="menu-item-18286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18286">
                                                                    <a href="https://callcenter.ecoagrozm.com"><span>Online Advisory Services</span></a>
                                                                </li>
                                                                <li id="menu-item-18288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18288">
                                                                    <a  href="https://market.ecoagrozm.com"><span>Marketplace</span></a>
                                                                </li>
                                                                <!-- <li id="menu-item-18287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18287">
                                                                    <a href="#"><span>Ecopay Payment Gateway</span></a>
                                                                </li> -->

                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-18295" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18295">
                                                            <a href="about.php"><span>About</span></a>

                                                        </li>
                                                        <li id="menu-item-18300" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18300">
                                                            <a href="https://market.ecoagrozm.com"><span>Marketplace</span></a>

                                                        </li>
                                                        <li id="menu-item-17194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17194">
                                                            <a href="https://ecoagrozm.com/contact.php"><span>Contact</span></a>
                                                        </li>
                                                        
                                                        {{-- <li id="menu-item-17194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17194">
                                                            <a href="tel:+260773505560" style="color: #2B6A3B; font-weight:bold;"><span>+260 773 505 560</span></a>
                                                        </li> --}}
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-3fb9c4d sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search" data-id="3fb9c4d" data-element_type="widget" data-widget_type="trx_sc_layouts_search.default">
                                            <div class="elementor-widget-container">
                                                {{-- <div class="sc_layouts_search">
                                                    <div class="search_modern">
                                                        <span class="search_submit"></span>
                                                        <div class="search_wrap scheme_dark">
                                                            <div class="search_header_wrap">
                                                            <img class="logo_image" src="{{ asset('theme/images/logo-inverse.png') }}" srcset="{{ asset('theme/images/logo-inverse.png') }} 2x" alt="Ecoagro" width="173" height="53">
                                                                <a class="search_close" href="#"></a>
                                                            </div>
                                                            <div class="search_form_wrap">
                                                                <form role="search" method="get" class="search_form" action="#">
                                                                    <input type="hidden" value="" name="post_types">
                                                                    <input type="text" class="search_field" placeholder="Type words and hit enter" value="" name="s">
                                                                    <button type="submit" class="search_submit"></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="search_overlay scheme_dark"></div>
                                                    </div>


                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-18b55c6 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_cart" data-id="18b55c6" data-element_type="widget" data-widget_type="trx_sc_layouts_cart.default">
                                            <div class="elementor-widget-container">
                                                <div  onclick="showCart()" class="sc_layouts_cart sc_layouts_cart_market_woocommerce">
                                                    <span class="sc_layouts_item_icon sc_layouts_cart_icon sc_icons_type_icons trx_addons_icon-basket"></span>
                                                    <span class="sc_layouts_item_details sc_layouts_cart_details">
                                                        <span class="sc_layouts_item_details_line2 sc_layouts_cart_totals">
                                                            <span class="sc_layouts_cart_items" data-item="item" data-items="items">0
                                                                items</span>
                                                            -
                                                            <span class="sc_layouts_cart_summa">$0.00</span>
                                                        </span>
                                                    </span>
                                                    <span class="sc_layouts_cart_items_short" id="sc_layouts_cart_items_short2">0</span>
                                                    <div class="sc_layouts_cart_widget widget_area">
                                                        <span class="sc_layouts_cart_widget_close trx_addons_button_close"><span class="sc_layouts_cart_widget_close_icon trx_addons_button_close_icon"></span></span>
                                                        <div class="widget woocommerce widget_shopping_cart">
                                                            <div class="widget_shopping_cart_content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3e4e340 sc_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="3e4e340" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        
                                         <div class="sc_layouts_item elementor-element elementor-element-066af30 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_iconed_text" data-id="066af30" data-element_type="widget" data-widget_type="trx_sc_layouts_iconed_text.default">
                                            {{-- <div class="elementor-widget-container">
                                                <div class="sc_layouts_iconed_text">
                                                    <a href="tel:18004585697" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                                        <span class="sc_layouts_item_details sc_layouts_iconed_text_details">
                                                            <span class="sc_layouts_item_details_line1 sc_layouts_iconed_text_line1">+26 097 458 56 97</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div> 
                                        
                                        <div class="sc_layouts_item elementor-element elementor-element-d662b41 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="d662b41" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                            <div class="elementor-widget-container">
                                                
                                                @if (!auth()->check())
                                                {{-- <a id="register_now"   class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                                    <span class="sc_button_text">
                                                        <span class="sc_button_title">
                                                            Register
                                                        </span>
                                                    </span>
                                                </a> --}}
                                                <div id="dropdown-content" style="display: none; text-align:left; padding:3%; border-top:1px solid #2B6A3B">
                                                    
                                                    <p > <!-- Centering the content within the paragraph -->
                                                        <a href="https://auth.ecoagrozm.com/register?source=marketplace&destination=marketplace&type=farmer">
                                                            <span style="display: flex; justify-content: start; align-items: center;">
                                                                <img width="20" src="public/images/site/farmer.png" style="margin-right: 4px;">
                                                                <span style="margin-top: 0;">Farmer</span>
                                                            </span>
                                                        </a>
                                                    </p>
                                                    <p > <!-- Centering the content within the paragraph -->
                                                        <a href="https://auth.ecoagrozm.com/register?source=marketplace&destination=marketplace&type=agronomist">
                                                            <span style="display: flex; justify-content: start; align-items: center;">
                                                                <img width="20" src="public/images/site/agronomist.png" style="margin-right: 4px;">
                                                                <span style="margin-top: 0;">Agronomist</span>
                                                            </span>
                                                        </a>
                                                    </p>
                                                </div>
                                                @endif
                                                <div class="sc_item_button sc_button_wrap">
                                                    {{-- @auth --}}
                                                    <a href="{{ route('home') }}" id="isUser" class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">
                                                                {{ auth()->check() }}
                                                            </span>
                                                        </span>
                                                    </a>
                                                    {{-- @else --}}
                                                    <a id="showLoginLink" href="https://auth.ecoagrozm.com/login?source=website&destination=marketplace"  class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">
                                                                Login
                                                            </span>
                                                        </span>
                                                    </a>

                                                    {{-- @endauth --}}
                                                </div>
                                            </div>
                                        </div> 
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-97bba67 elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact scheme_light sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="97bba67" data-element_type="section" data-settings='{"background_background":"classic"}'>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-20ea2c9 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="20ea2c9" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="sc_layouts_item elementor-element elementor-element-703d5de sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo" data-id="703d5de" data-element_type="widget" data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="https://ecoagrozm.com" class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1726964019">
                                                <img class="logo_image" src="{{ asset('public/img/logo2.png') }}" srcset="{{ asset('public/img/logo2.png') }} 2x" alt="Ecoagro" width="173" height="53"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-89c39a1 sc_layouts_column_align_right sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="89c39a1" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">

                                        <div class="sc_layouts_item elementor-element elementor-element-f59f78f sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search" data-id="f59f78f" data-element_type="widget" data-widget_type="trx_sc_layouts_search.default">
                                            {{-- <div class="elementor-widget-container">
                                                <div class="sc_layouts_search">
                                                    <div class="search_modern">
                                                        <span class="search_submit"></span>
                                                        <div class="search_wrap scheme_dark">
                                                            <div class="search_header_wrap">
                                                                <img class="logo_image" src="{{ asset('theme/images/logo-inverse.png') }}" srcset="{{ asset('theme/images/logo-inverse.png') }} 2x" alt="Ecoagro" width="173" height="53">
                                                                <a class="search_close" href="agro-services.html"></a>
                                                            </div>
                                                            <div class="search_form_wrap">
                                                                <form role="search" method="get" class="search_form" action="#">
                                                                    <input type="hidden" value="" name="post_types">
                                                                    <input type="text" class="search_field" placeholder="Type words and hit enter" value="" name="s">
                                                                    <button type="submit" class="search_submit"></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="search_overlay scheme_dark"></div>
                                                    </div>


                                                </div><!-- /.sc_layouts_search -->
                                            </div> --}}
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-18b55c6 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_cart" data-id="18b55c6" data-element_type="widget" data-widget_type="trx_sc_layouts_cart.default">
                                            <div class="elementor-widget-container">
                                                <div  onclick="showCart()" class="sc_layouts_cart sc_layouts_cart_market_woocommerce">
                                                    <span class="sc_layouts_item_icon sc_layouts_cart_icon sc_icons_type_icons trx_addons_icon-basket"></span>
                                                    <span class="sc_layouts_item_details sc_layouts_cart_details">
                                                        <span class="sc_layouts_item_details_line2 sc_layouts_cart_totals">
                                                            <span class="sc_layouts_cart_items" data-item="item" data-items="items">0
                                                                items
                                                            </span>
                                                            -
                                                            <span class="sc_layouts_cart_summa">$0.00</span>
                                                        </span>
                                                    </span>
                                                    <span class="sc_layouts_cart_items_short" id="sc_layouts_cart_items_short">0</span>
                                                    <div class="sc_layouts_cart_widget widget_area">
                                                        <span class="sc_layouts_cart_widget_close trx_addons_button_close"><span class="sc_layouts_cart_widget_close_icon trx_addons_button_close_icon"></span></span>
                                                        <div class="widget woocommerce widget_shopping_cart">
                                                            <div class="widget_shopping_cart_content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-062ccbf sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu" data-id="062ccbf" data-element_type="widget" data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button_burger sc_layouts_menu_mobile_button without_menu">
                                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sc_layouts_item elementor-element elementor-element-feaea9d sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="feaea9d" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_item_button sc_button_wrap">
                                                    <a href="https://auth.ecoagrozm.com/register?source=website&destination=website&type=farmer" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="sc_button hide_on_mobile sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">Farmer</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sc_layouts_item elementor-element elementor-element-feaea9d sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="feaea9d" data-element_type="widget" data-widget_type="trx_sc_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_item_button sc_button_wrap">
                                                    <a href="https://auth.ecoagrozm.com/register?source=website&destination=website&type=agronomist" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="sc_button hide_on_mobile sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">Agronomist</span>
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
                </section>
            </div>
        </div>
    </div>
</header>



<div class="menu_mobile_overlay scheme_dark"></div>
<div class="menu_mobile menu_mobile_fullscreen scheme_dark">
    <div class="menu_mobile_inner with_widgets">
        <div class="menu_mobile_header_wrap">
            <a class="sc_layouts_logo" href="https://ecoagrozm.com">
                <img src="{{ asset('public/img/logo.png') }}" srcset="{{ asset('public/img/logo.png') }} 2x" alt="Ecoagro" width="173" height="53"> 
            </a>

            <a class="menu_mobile_close menu_button_close" tabindex="0" href="agro-services.html"><span class="menu_button_close_text">Close</span><span class="menu_button_close_icon"></span></a>
        </div>
        <div class="menu_mobile_content_wrap content_wrap">
            <div class="menu_mobile_content_wrap_inner">
                <nav class="menu_mobile_nav_area" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                    <ul id="menu_mobile_1599394569">
                        <li id="menu_mobile-item-18273" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-18273">
                            <a href="{{ route('welcome') }}"><span>Home</span></a>

                        </li>
                        <li id="menu_mobile-item-17651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17651">
                            <a href="https://ecoagrozm.com/services.php"><span>Services</span></a>
                            <ul class="sub-menu">
                                {{-- <li id="menu_mobile-item-18280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18280">
                                    <a href="https://callcenter.ecoagrozm.com"><span>The Call Center</span></a>
                                </li> --}}
                                <li id="menu_mobile-item-18286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18286">
                                    <a href="https://callcenter.ecoagrozm.com"><span>Online Advisory Services</span></a>
                                </li>
                                <li id="menu_mobile-item-18288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18288">
                                    <a href="https://market.ecoagrozm.com"><span>The Marketplace</span></a>
                                </li>
                                {{-- <li id="menu_mobile-item-18287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18287">
                                    <a href="#"><span>Ecopay Payment Gateway</span></a>
                                </li> --}}

                            </ul>
                        </li>
                        <li id="menu_mobile-item-18295" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18295">
                            <a href="https://ecoagrozm.com/about.php"><span>About Us</span></a>

                        </li>
                        <li id="menu_mobile-item-18300" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18300">
                            <a href="{{ route('welcome') }}"><span>Marketplace</span></a>

                        </li>
                        <li id="menu_mobile-item-17194" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17194">
                            <a href="https://ecoagrozm.com/contact.php"><span>Contact</span></a>
                        </li>
                    </ul>
                </nav>
                <br>
                <div class="sc_layouts_item elementor-element elementor-element-d662b41 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="d662b41" data-element_type="widget" data-widget_type="trx_sc_button.default">
                    <div class="elementor-widget-container">
                        <div class="sc_item_button sc_button_wrap"><a style="
                                            background: #770614;
                                        " href="https://auth.ecoagrozm.com/register?source=marketplace&destination=marketplace&type=farmer" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                        <span class="sc_button_text">
                                            <span class="sc_button_title">Open Buyer Account
                                        </span></span></a></div>
                    </div>
                </div>
                <br>
                <div class="sc_layouts_item elementor-element elementor-element-d662b41 sc_fly_static elementor-widget elementor-widget-trx_sc_button" data-id="d662b41" data-element_type="widget" data-widget_type="trx_sc_button.default">
                    <div class="elementor-widget-container">
                        <div class="sc_item_button sc_button_wrap"><a style="
                                            background: #770614;
                                        " href="https://auth.ecoagrozm.com/register?source=marketplace&destination=marketplace&type=seller" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link2">
                                        <span class="sc_button_text">
                                            <span class="sc_button_title">Become
                                        a Seller</span></span></a></div>
                    </div>
                </div>
                <div class="socials_mobile"><a target="_blank" href="https://www.facebook.com/" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span class="social_icon social_icon_facebook-1" style=""><span class="icon-facebook-1"></span></span></a><a target="_blank" href="https://twitter.com/ThemesAxiom" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span class="social_icon social_icon_twitter-new" style=""><span class="icon-twitter-new"></span></span></a><a target="_blank" href="https://dribbble.com/AxiomThemes" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span class="social_icon social_icon_dribble-new" style=""><span class="icon-dribble-new"></span></span></a><a target="_blank" href="https://www.instagram.com/axiom_themes/" class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span class="social_icon social_icon_instagram" style=""><span class="icon-instagram"></span></span></a></div>
            </div>
        </div>
        <div class="menu_mobile_widgets_area">
            <div class="widgets_additional_menu_mobile_fullscreen widgets_additional_menu_mobile_fullscreen_wrap widget_area">
                <div class="widgets_additional_menu_mobile_fullscreen_inner widgets_additional_menu_mobile_fullscreen_inner widget_area_inner">
                    <aside class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div class="extra_item">
                                <h6>Have a Project?</h6>
                                <a href="mailto:info@ecoagrozambia.com"><span>info@ecoagrozambia.com</span></a>
                            </div>

                            <div class="extra_item">
                                <h6>Want to Work With Us?</h6>
                                <a href="https://ecoagrozm.com/contact.php">Send Brief</a>
                            </div>

                            <div class="extra_item">
                                <h6>Want to Buy Products?</h6>
                                <a href="https://ecoagrozm.com/marketplace.php">Go to Marketplace</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const registerButton = document.getElementById("register_now");
        const dropdownContent = document.getElementById("dropdown-content");

        // Toggle the dropdown when the "Create an Account" button is clicked
        registerButton.addEventListener("click", function () {
            dropdownContent.classList.toggle("show");
        });
    });

</script>