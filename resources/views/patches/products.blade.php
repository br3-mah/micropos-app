<section class="elementor-section elementor-top-section elementor-element elementor-element-ed90b64 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="ed90b64" data-element_type="section">
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
                                                                    <div style="width: 80%" class="woocommerce columns-3">
                                                                        <ul class="products products_style_info_2 columns-3">
                                                                            @foreach ($products as $product)
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
                                                                            @endforeach


                                                                        </ul>
                                                                    </div>
                                                                    @if (Route::currentRouteName() !== 'welcome')
                                                                    <div class="sidebar widget_area right sidebar_below sidebar_default scheme_default" role="complementary">
                                                                        <a id="sidebar_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>
                                                                        <div class="sidebar_inner">
                                                                            <aside class="widget woocommerce widget_shopping_cart">
                                                                                <h5 class="widget_title">Cart</h5>
                                                                                <div class="widget_shopping_cart_content"></div>
                                                                            </aside>
                                                                            <aside class="widget woocommerce widget_product_search">
                                                                                <form role="search" method="get" class="search_form"
                                                                                    action="{{ route('product.search') }}">
                                                                                    @csrf
                                                                                    <input type="text" class="search_field" placeholder="Search for products &hellip;"
                                                                                        value="" name="s"><button class="search_button" type="submit">Search</button>
                                                                                    <input type="hidden" name="post_type" value="product">
                                                                                </form>
                                                                            </aside>
                                                                            <aside class="widget woocommerce widget_product_categories">
                                                                                <h5 class="widget_title">Categories</h5>
                                                                                <ul class="product-categories">
                                                                                    <li class="cat-item cat-item-185"><a href="#">Seeds</a></li>
                                                                                    <li class="cat-item cat-item-197"><a href="#">Crops</a></li>
                                                                                    <li class="cat-item cat-item-203"><a href="#">Fertilizers</a></li>
                                                                                    {{-- <li class="cat-item cat-item-198"><a href="harvesting.html">Harvesting</a></li>
                                                                                    <li class="cat-item cat-item-202"><a href="organic.html">Marketplace</a></li>
                                                                                    <li class="cat-item cat-item-201"><a href="parts.html">Parts</a></li>
                                                                                    <li class="cat-item cat-item-200"><a href="row-crops.html">Row Crops</a></li>
                                                                                    <li class="cat-item cat-item-184"><a href="salad.html">Salad</a></li>
                                                                                    <li class="cat-item cat-item-199"><a href="tractors.html">Tractors</a></li>
                                                                                    <li class="cat-item cat-item-72"><a href="uncategorized.html">Uncategorized</a></li>
                                                                                    <li class="cat-item cat-item-183"><a href="vegetables.html">Vegetables</a></li> --}}
                                                                                </ul>
                                                                            </aside>
                                                                            <aside class="widget woocommerce widget_price_filter">
                                                                                <h5 class="widget_title">Filter</h5>
                                                                                {{-- <form method="get" action="#">
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
                                                                                </form> --}}
                                                
                                                                            </aside>
                                                                            <aside class="widget woocommerce widget_product_tag_cloud">
                                                                                <h5 class="widget_title">Tags</h5>
                                                                                <div class="tagcloud"><a href="crop.html"
                                                                                        class="tag-cloud-link tag-link-192 tag-link-position-1" style="font-size: 22pt;"
                                                                                        aria-label="crop (28 products)">crop</a>
                                                                                    <a href="#" class="tag-cloud-link tag-link-189 tag-link-position-2"
                                                                                        style="font-size: 18.315789473684pt;" aria-label="farm (22 products)">farm</a>
                                                                                    <a href="#" class="tag-cloud-link tag-link-187 tag-link-position-3"
                                                                                        style="font-size: 18.315789473684pt;" aria-label="food (22 products)">food</a>
                                                                                    {{-- <a href="healthy.html" class="tag-cloud-link tag-link-188 tag-link-position-4"
                                                                                        style="font-size: 18.315789473684pt;"
                                                                                        aria-label="healthy (22 products)">healthy</a>
                                                                                    <a href="organic.html" class="tag-cloud-link tag-link-186 tag-link-position-5"
                                                                                        style="font-size: 8pt;" aria-label="organic (11 products)">Marketplace</a>
                                                                                    <a href="season.html" class="tag-cloud-link tag-link-190 tag-link-position-6"
                                                                                        style="font-size: 8pt;" aria-label="season (11 products)">season</a>
                                                                                    <a href="summer.html" class="tag-cloud-link tag-link-191 tag-link-position-7"
                                                                                        style="font-size: 8pt;" aria-label="summer (11 products)">summer</a> --}}
                                                                                </div>
                                                                            </aside>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    <div class="clearfix"></div>
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