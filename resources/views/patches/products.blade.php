<style>
/* Default styles for larger screens */
.sc_extended_products_content {
    display: flex;
}

.woocommerce {
    display: flex;
    flex-wrap: wrap;
}

/* Sidebar styles */
.sidebar {
    width: 20%; /* Adjust the width as needed */
    margin-left: 20px; /* Add spacing between products and sidebar */
}

    /* Media query for smaller screens (e.g., tablets) */
    @media only screen and (max-width: 768px) {
        .sc_extended_products_content {
            flex-direction: column;
        }

        .sidebar {
            width: 100%; /* Make the sidebar full-width */
            margin: 0; /* Remove margin for full-width sidebar */
        }

        /* Adjust styles for smaller screens, such as increasing the width of product items */
        .post_layout_thumbs {
            width: 40px; /* Make product items full-width */
        }
        
    }
    
    @media only screen and (max-width: 767px) {
        .hide-on-mobile {
            display: none;
        }
    }
</style>

<style>
    @import "compass";
 .product-description {
	 transform: translate3d(0, 0, 0);
	 transform-style: preserve-3d;
	 perspective: 1000;
	 backface-visibility: hidden;
}
 body {
	 color: #212121;
}
 .container {
	 padding-top: 25px;
	 padding-bottom: 25px;
}
 img {
	 max-width: 100%;
}
 hr {
	 border-color: #e5e5e5;
	 margin: 15px 0;
}
 .secondary-text {
	 color: #b6b6b6;
}
 .list-inline {
	 margin: 0;
}
 .list-inline li {
	 padding: 0;
}
 .card-wrapper {
	 position: relative;
	 width: 100%;
	 height: 390px;
	 border: 1px solid #e5e5e5;
	 border-bottom-width: 2px;
	 overflow: hidden;
	 margin-bottom: 30px;
}
 .card-wrapper:after {
	 content: "";
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 opacity: 0;
	 box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
	 transition: opacity 0.6s cubic-bezier(0.65, 0.80, 0.44, 1);
}
 .card-wrapper:hover:after {
	 opacity: 1;
}
 .card-wrapper:hover .image-holder:before {
	 opacity: 0.75;
}
 .card-wrapper:hover .image-holder:after {
	 opacity: 1;
	 transform: translate(-50%, -50%);
}
 .card-wrapper:hover .image-holder--original {
	 transform: translateY(-15px);
}
 .card-wrapper:hover .product-description {
	 height: 205px;
}
 @media (min-width: 768px) {
	 .card-wrapper:hover .product-description {
		 height: 185px;
	}
}
 .image-holder {
	 display: block;
	 position: relative;
	 width: 100%;
	 height: 310px;
	 background-color: #fff;
	 z-index: 1;
}
 @media (min-width: 768px) {
	 .image-holder {
		 height: 325px;
	}
}
 .image-holder:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background-color: #4caf50;
	 opacity: 0;
	 z-index: 5;
	 transition: opacity 0.6s;
}
 .image-holder:after {
	 content: '+';
	 font-family: 'Raleway', sans-serif;
	 font-size: 70px;
	 color: #4caf50;
	 text-align: center;
	 position: absolute;
	 top: 92.5px;
	 left: 50%;
	 width: 75px;
	 height: 75px;
	 line-height: 75px;
	 background-color: #fff;
	 opacity: 0;
	 border-radius: 50%;
	 z-index: 10;
	 transform: translate(-50%, 100%);
	 box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
	 transition: all 0.4s ease-out;
}
 @media (min-width: 768px) {
	 .image-holder:after {
		 top: 107.5px;
	}
}
 .image-holder .image-holder__link {
	 display: block;
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 z-index: 15;
}
 .image-holder .image-holder--original {
	 transition: transform 0.8s cubic-bezier(0.65, 0.80, 0.44, 1);
}
 .image-liquid {
	 width: 100%;
	 height: 325px;
	 background-size: cover;
	 background-position: center center;
}
 .product-description {
	 position: absolute;
	 left: 0;
	 bottom: 0;
	 width: 100%;
	 height: 80px;
	 padding: 10px 15px;
	 overflow: hidden;
	 background-color: #fafafa;
	 border-top: 1px solid #e5e5e5;
	 transition: height 0.6s cubic-bezier(0.65, 0.80, 0.44, 1);
	 z-index: 2;
}
 @media (min-width: 768px) {
	 .product-description {
		 height: 65px;
	}
}
 .product-description p {
	 margin: 0 0 5px;
}
 .product-description .product-description__title {
	 font-family: 'Raleway', sans-serif;
	 position: relative;
	 white-space: nowrap;
	 overflow: hidden;
	 margin: 0;
	 font-size: 18px;
	 line-height: 1.25;
}
 .product-description .product-description__title:after {
	 content: '';
	 width: 60px;
	 height: 100%;
	 position: absolute;
	 top: 0;
	 right: 0;
	 background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(250, 250, 250, 1));
}
 .product-description .product-description__title a {
	 text-decoration: none;
	 color: inherit;
}
 .product-description .product-description__category {
	 white-space: nowrap;
	 overflow: hidden;
	 text-overflow: ellipsis;
}
 .product-description .product-description__price {
	 color: #4caf50;
	 text-align: left;
	 font-weight: bold;
	 letter-spacing: 0.06em;
}
 @media (min-width: 768px) {
	 .product-description .product-description__price {
		 text-align: right;
	}
}
 .product-description .sizes-wrapper {
	 margin-bottom: 15px;
}
 .product-description .color-list {
	 font-size: 0;
}
 .product-description .color-list__item {
	 width: 25px;
	 height: 10px;
	 position: relative;
	 z-index: 1;
	 transition: all 0.2s;
}
 .product-description .color-list__item:hover {
	 width: 40px;
}
 .product-description .color-list__item--red {
	 background-color: #f44336;
}
 .product-description .color-list__item--blue {
	 background-color: #448aff;
}
 .product-description .color-list__item--green {
	 background-color: #cddc39;
}
 .product-description .color-list__item--orange {
	 background-color: #ff9800;
}
 .product-description .color-list__item--purple {
	 background-color: #673ab7;
}
</style>

<style>
    .mobile-view {
        display: none; /* Show the element by default */
    }
        /* Media query for screens with a maximum width of 767px (typical for mobile devices) */
    @media screen and (max-width: 767px) {
        /* Styles for mobile screens */
        .mobile-view {
            display: block; /* Hide the element on mobile screens */
        }
    }

    /* Hide the element with ID "hideCategory" in mobile view */
    @media only screen and (max-width: 767px) {
        #hideCategory{
            display: none;
        }      
        #hideTags {
            display: none;
        }
    }
</style>
{{-- section class previous contents --}}
{{-- elementor-section elementor-top-section elementor-element elementor-element-ed90b64 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static --}}
<section class="" data-id="ed90b64" data-element_type="section">
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a46daf sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="4a46daf" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        
                        @if (Route::currentRouteName() == 'welcome')
                        <div class="elementor-element elementor-element-980b36f sc_fly_static elementor-widget elementor-widget-trx_sc_title" data-id="980b36f" data-element_type="widget" data-widget_type="trx_sc_title.default">
                            <div class="elementor-widget-container">
                                <div class="sc_title color_style_dark sc_title_default">
                                    <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Customers’
                                        Choice</span>
                                    <h1 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                                        <span class="sc_item_title_text">Check
                                            Our Products</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        @endif
                        

                        <div class="elementor-element elementor-element-bd16a90 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="bd16a90" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-66f6adb sc_fly_static elementor-widget elementor-widget-trx_sc_extended_products" data-id="66f6adb" data-element_type="widget" data-widget_type="trx_sc_extended_products.default">
                            <div class="elementor-widget-container">
                                <div class="sc_extended_products sc_extended_products_info_2">
                                    <div style="display: flex" class="sc_extended_products_content sc_item_content">
                                        @if (Route::currentRouteName() !== 'welcome')
                                        <div class="sidebar widget_area right sidebar_below sidebar_default scheme_default" role="complementary">
                                            <a id="sidebar_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>
                                            <div class="sidebar_inner">
                                                <aside class="widget woocommerce widget_product_search">
                                                    <form role="search" method="get" class="search_form"
                                                        action="{{ route('product.search') }}">
                                                        @csrf
                                                        <input type="text" class="search_field" placeholder="Search for products &hellip;"
                                                            value="" name="s"><button class="search_button" type="submit">Search</button>
                                                        <input type="hidden" name="post_type" value="product">
                                                    </form>
                                                </aside>
                                                <aside class="widget woocommerce widget_product_tag_cloud">
                                                    <h5 id="hideCategory" class="widget_title">Categories</h5>
                                                    <ul class="tagcloud">
                                                        @foreach($categories as $cat)
                                                        <a class="tag-cloud-link tag-link-192 tag-link-position-1" href="#">{{ $cat->name }}</a>
                                                        @endforeach
                                                    </ul>
                                                </aside>
                                                {{-- <aside class="widget woocommerce widget_price_filter">
                                                    <h5 class="widget_title">Price Range</h5>
                                                    <form method="get" action="#">
                                                        <div class="price_slider_wrapper">
                                                            <div class="price_slider" style="display:none;"></div>
                                                            <div class="price_slider_amount" data-step="10">
                                                                <label class="screen-reader-text" for="min_price">Min price</label>
                                                                <input type="text" id="min_price" name="min_price" value="10" data-min="10"
                                                                    placeholder="Min price">
                                                                <label class="screen-reader-text" for="max_price">Max price</label>
                                                                <input type="text" id="max_price" name="max_price" value="16000"
                                                                    data-max="16000" placeholder="Max price">
                                                                <button type="submit" class="button">Filter</button>
                                                                <div class="price_label" style="display:none;">
                                                                    Price: <span class="from"></span> &mdash; <span class="to"></span>
                                                                </div>
                                                                <input type="hidden" name="q" value="/shop/">
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </aside> --}}
                                                <aside id="hideTags" class="widget woocommerce widget_product_tag_cloud">
                                                    <h5 class="widget_title">Tags</h5>
                                                    <br><br>
                                                    <div class="tagcloud">
                                                        @foreach($tags as $tag)
                                                        <a href="#" class="tag-cloud-link tag-link-192 tag-link-position-1" style="font-size: 22pt;" aria-label="crop (28 products)">{{ $tag->name }}</a>
                                                        @endforeach
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="clearfix"></div>
                                        <div style="width: 80%" class="woocommerce columns-3 hide-on-mobile">
                                            <ul class="products products_style_info_2 columns-3 ">
                                                @forelse ($products as $product)
                                                <li class="product type-product post-{{ $product->id }} status-publish first instock product_cat-berries product_cat-fruits product_cat-organic product_tag-crop product_tag-organic product_tag-season product_tag-summer has-post-thumbnail shipping-taxable purchasable product-type-simple product_style_info_2">
                                                    <div class="post_item post_layout_thumbs">
                                                        <div class="post_featured hover_shop">
                                                            <a href="{{ route('detail.index', $product->id) }}">
                                                                <img width="430" height="430" src="{{asset("public/storage/" . $product->image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $product->name }}" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.src='https://www.rallis.com/Upload/Images/thumbnail/Product-inside.png';" />
                                                            </a>
                                                            <div class="mask">
                                                            </div>
                                                            <div class="icons">
                                                                {{-- <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper" data-tinvwl_product_id="18184">
                                                                    <div class="tinv-wishlist-clear">
                                                                    </div>
                                                                    <a role="button" tabindex="0" aria-label="Add to Wishlist" class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop" data-tinv-wl-list="[]" data-tinv-wl-product="18184" data-tinv-wl-productvariation="0" data-tinv-wl-productvariations="[0]" data-tinv-wl-producttype="simple" data-tinv-wl-action="add"><span class="tinvwl_add_to_wishlist-text">
                                                                        Add to Wishlist</span>
                                                                    </a>
                                                                    <div class="tinv-wishlist-clear">
                                                                    </div>
                                                                    <div class="tinvwl-tooltip">
                                                                        Add to Wishlist
                                                                    </div>
                                                                </div> --}}
                                                                {{-- href="?add-to-cart=18184" --}}
                                                                <a rel="nofollow"  aria-hidden="true" data-quantity="1" data-product-name="{{ $product->name }}" data-product-price="{{$product->price}}" data-product_id="{{ $product->id }}" data-product_sku="{{ $product->sku }}" class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock"><span class="icon-anim"></span></a>
                                                                <a href="{{ route('product.show', $product->id) }}" aria-hidden="true" class="shop_link">
                                                                    <span class="icon-anim"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="post_data">
                                                            <div class="post_data_inner">
                                                                <div class="post_header entry-header">
                                                                    <div class="post_tags product_tags">
                                                                        <a href="#" rel="tag">{{ $product->type }}</a>,
                                                                        {{-- <a href="product-tag/organic.html" rel="tag">Marketplace</a>,
                                                                        <a href="product-tag/season.html" rel="tag">season</a>,
                                                                        <a href="product-tag/summer.html" rel="tag">summer</a> --}}
                                                                    </div>
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        <a href="#">{{ $product->name }}</a>
                                                                    </h2>
                                                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                                        <span style="width:100%">Rated
                                                                            <strong class="rating">5.00</strong>
                                                                            out of 5
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">{{ $product->currency_symbol }}</span>{{ $product->price }}</bdi></span></span>
                                                                <a href="?add-to-cart=18184" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="18184" data-product_sku="285" aria-label="Add &ldquo;Strawberry&rdquo; to your cart" rel="nofollow">
                                                                    Buy now
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @empty
                                                <h4>No Results Found.</h4>
                                                @endforelse
                                            </ul>
                                        </div>
                                        
                                        {{-- For Mobile --}}
                                        <div class="mobile-view container">
                                            <div class="row">

                                                @forelse ($products as $product)
                                                <div class="col-6">
                                                    <article class="card-wrapper">
                                                        <div class="image-holder">
                                                            <a href="#" data-quantity="1" data-product-name="{{ $product->name }}" data-product-price="{{$product->price}}" data-product_id="{{ $product->id }}" data-product_sku="{{ $product->sku }}" class="image-holder__link add_to_cart_button"></a>
                                                                <div class="image-liquid image-holder--original" style="background-image: url('{{asset("public/storage/" . $product->image)}}')">
                                                            </div>
                                                        </div>

                                                        <a href="{{ route('detail.index', $product->id) }}">	
                                                            <div class="product-description">
                                                                <!-- title -->
                                                                <h1 class="product-description__title">
                                                                    <a href="{{ route('detail.index', $product->id) }}">						
                                                                        {{ $product->name }}
                                                                    </a>
                                                                </h1>
                                                                <div class="">
                                                                    <div class="col-xs-12 col-sm-8 product-description__category secondary-text">
                                                                        {{-- Men's running shirt --}}
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-4 product-description__price">
                                                                        K {{ $product->price }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </article>
                                                </div>
                                                @empty
                                                <h4>No Results Found.</h4>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f5276c7 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer" data-id="f5276c7" data-element_type="widget" data-widget_type="spacer.default">
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