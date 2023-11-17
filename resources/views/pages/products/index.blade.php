@extends('layouts.app')
@section('content')

<div id="kt_app_content_container" class="app-container container-xxl">
    <div class="page-title d-flex flex-column me-5 py-2">
        <!--begin::Title-->
        <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">My Products</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">My Product</li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-dark">Product Listing</li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="published">Published</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <!--begin::Add product-->
                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
                <button type="button" class="btn btn-primary" id="bulkEditButton">Bulk Edit</button>

                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            
            
            <div id="indicator-success" class="alert alert-success">
                A request to place the products on top selling has been submitted.
            </div>
            <div id="indicator-error" class="alert alert-danger">
                Unable to request for featured listsing.
            </div>
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            {{-- <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                            </div> --}}
                        </th>
                        <th class="min-w-200px">Product</th>
                        <th class="text-end min-w-100px">SKU</th>
                        <th class="text-end min-w-70px">Qty</th>
                        <th class="text-end min-w-100px">Price</th>
                        {{-- <th class="text-end min-w-100px">Rating</th> --}}
                        <th class="text-end min-w-100px">Status</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="{{ $product->id }}" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a target="_blank" href="{{ route('product.edit', $product->id) }}" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url('{{asset("public/storage/" . $product->image)}}');"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a target="_blank" href="{{ route('product.edit', $product->id) }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">{{ $product->name }}</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">{{ $product->sku }}</span>
                        </td>
                        <td class="text-end pe-0" data-order="39">
                            <span class="fw-bold ms-3">{{ $product->shelf_qty ?? 0 }}</span>
                        </td>
                        <td class="text-end pe-0">K {{ $product->price }}</td>
                        {{-- <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">

                               
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td> --}}
                        <td class="text-end pe-0"  data-order="Inactive">
                            <!--begin::Badges-->
                            
                            @switch($product->status)
                                @case(0)
                                <div class="badge badge-light-danger text-primary">Inactive</div>
                                @break
                                @case(1)
                                    @if ($product->is_approved == 1)
                                    <div class="badge badge-success text-primary">Published</div>
                                    @else
                                    <div class="badge badge-light text-warning">Pending approval</div>
                                    @endif
                                    @break
                                @case(2)
                                    <div class="badge badge-light-danger text-primary">Inactive</div>
                                    @break
                                @case(3)
                                    <div class="badge badge-light-info text-primary">Scheduled</div>
                                    @break
                                @case(4)
                                    <div class="badge badge-light-primary text-primary">Inactive</div>
                                    @break
                                @default
                                    <div class="badge badge-light-danger text-primary">Inactive</div>
                            @endswitch
                            <!--end::Badges-->
                            
                            @if ($product->featured !== null)
                                @if ($product->featured[0]->status == 0)
                                    <div class="badge badge-light-warning text-warning">Pending bid approval</div>
                                @else
                                    <div class="badge badge-light-success text-success">Feature Item</div>
                                @endif 
                            @endif 
                           
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    {{-- <a href="#" class="menu-link px-3">Edit</a> --}}
                                    <a href="{{ route('product.edit', $product->id) }}" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" onclick="event.preventDefault(); document.getElementById('delete-product-form-{{ $product->id }}').submit();">Delete</a>
                                    <form id="delete-product-form-{{ $product->id }}" action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        
                    </tr>
                    
        @endforeach
                    {{-- <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/4.png);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04971002</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">155</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/6.png);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03340007</span>
                        </td>
                        <td class="text-end pe-0" data-order="49">
                            <span class="fw-bold ms-3">49</span>
                        </td>
                        <td class="text-end pe-0">114</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/7.png);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03181007</span>
                        </td>
                        <td class="text-end pe-0" data-order="38">
                            <span class="fw-bold ms-3">38</span>
                        </td>
                        <td class="text-end pe-0">299</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-outline ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo29/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr> --}}
                    
                    
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
@include('pages.___parts.products.update-status')

<div class="modal fade" id="bulkEditModal" tabindex="-1" role="dialog" aria-labelledby="bulkEditModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Add your modal content here -->
            <div class="modal-header">
                <h5 class="modal-title" id="bulkEditModalLabel">Bulk Edit Products</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form elements for bulk editing -->
                <div id="bulkEditForm">
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <a id="firstTab" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="stock">Stock Update</a>
                            <a id="secondTab" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="bidding">Featured Products</a>
                            {{-- <a class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</a> --}}
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                              
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-12">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_stock">
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="mb-10 fv-row">
                                                <!--begin::Label-->
                                                <label class="required form-label">Quantity</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="d-flex gap-3">
                                                    <input type="number" name="shelf_qty" class="form-control mb-2" placeholder="On shelf" value="" />
                                                    <input type="number" name="warehouse_qty" class="form-control mb-2" placeholder="In warehouse" />
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Enter the product quantity.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->

                                    <div class="tab-pane fade show" id="kt_upgrade_plan_bidding">
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <form id="kt_modal_bidding_form" class="form" method="POST" action="{{ route('store.feature') }}">
                                                @csrf
                                                <!--begin::Heading-->
                                                {{-- <div class="mb-13 text-center">
                                                    <!--begin::Title-->
                                                    <h1 class="mb-3">Place your bids</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                                    <a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.</div>
                                                    <!--end::Description-->
                                                </div> --}}
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span class="required">Available Plans</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify the bid amount to place in.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Bid options-->
                                                    <div class="d-flex flex-stack gap-5 mb-3">
                                                        <button onclick="setBidValue(100)" type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">100</button>
                                                        <button onclick="setBidValue(500)" type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">500</button>
                                                        <button onclick="setBidValue(900)" type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">900</button>
                                                    </div>
                                                    <!--begin::Bid options-->
                                                    <input id="bid_amount" type="hidden" class="form-control" placeholder="Enter Bid Amount" name="bid_amount" />
                                                    <input id="bid_days" type="hidden" class="form-control" placeholder="Days" name="days" />
                                                    {{-- <input id="setbidproducts" type="hidden" class="form-control" name="products[]" /> --}}
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                {{-- <div class="fv-row mb-8">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span class="required">Currency Type</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Select the currency type.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Select2-->
                                                    <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Select a Currency Type" name="currency_type">
                                                        <option value=""></option>
                                                        <option value="dollar" selected="selected">Dollar</option>
                                                        <option value="crypto">Crypto</option>
                                                    </select>
                                                    <!--end::Select2-->
                                                </div> --}}
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                {{-- <div class="fv-row mb-8">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span>Currency</span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Dollar type-->
                                                    <div class="" data-kt-modal-bidding-type="dollar">
                                                        <!--begin::Select2-->
                                                        <select name="currency_dollar" aria-label="Select a Currency" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                                            <option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD" selected="selected">
                                                            <b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                                            <option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
                                                            <b>GBP</b>&nbsp;-&nbsp;British pound</option>
                                                            <option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
                                                            <b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
                                                            <option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
                                                            <b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
                                                            <option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
                                                            <b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                                                            <option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
                                                            <b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                                                            <option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
                                                            <b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <!--end::Dollar type-->
                                                    <!--begin::Crypto type-->
                                                    <div class="d-none" data-kt-modal-bidding-type="crypto">
                                                        <!--begin::Select2-->
                                                        <select name="currency_crypto" aria-label="Select a Coin" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                                            <option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1" selected="selected">Bitcoin</option>
                                                            <option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance</option>
                                                            <option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">Chainlink</option>
                                                            <option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin</option>
                                                            <option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">Ethereum</option>
                                                            <option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">Filecoin</option>
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <!--end::Crypto type-->
                                                </div> --}}
                                                <!--end::Input group-->
                                                <!--begin::Notice-->
                                                <!--begin::Notice-->
                                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-wallet fs-2tx text-primary me-4">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1">
                                                        <!--begin::Content-->
                                                        <div class="fw-semibold">
                                                            <h4 class="text-gray-900 fw-bold">K <span id="bid_price_text"></span> Plan</h4>
                                                            <div class="fs-6 text-gray-700">Display your product on top featured products for <span id="bid_days_text"></span> days
                                                            {{-- <a href="../../demo10/dist/utilities/modals/wizards/top-up-wallet.html" class="text-bolder">Top up wallet</a>.</div> --}}
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                                <!--end::Notice-->
                                                <!--begin::Actions-->
                                                <div class="text-center w-full">
                                                    {{-- <button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">Cancel</button> --}}
                                                    <button id="applyBulkEdit" type="button" class="btn btn-primary">
                                                        <span class="indicator-label">Continue</span>
                                                        <span class="indicator-progress">
                                                            Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    // Global Variables
    $('#indicator-success').hide();
    $('#indicator-error').hide();
    $('#bulkEditButton').hide();
    var selectedProducts = [];

    // Display the modal when the bulk edit button is clicked
    $('#bulkEditButton').on('click', function() {
        $('#bulkEditModal').modal('show');
    });

    
    // Tab buttons
    $('#firstTab').on('click', function() {
        $('#kt_upgrade_plan_stock').addClass('show active');
        $('#kt_upgrade_plan_bidding').removeClass('show active');
    });

    $('#secondTab').on('click', function() {
        $('#kt_upgrade_plan_bidding').addClass('show active');
        $('#kt_upgrade_plan_stock').removeClass('show active');
    });

    // Handle the event when a checkbox is checked or unchecked
    $('#kt_ecommerce_products_table tbody').on('change', 'input[type="checkbox"]', function() {
        var isChecked = $(this).prop('checked');
        var productId = $(this).val();

        // TODO: Add your logic based on whether the checkbox is checked or unchecked
        if (isChecked) {
            console.log('Product with ID ' + productId + ' is checked.');
            
            // Add logic for when the checkbox is checked
            selectedProducts.push(productId);
        } else {
            console.log('Product with ID ' + productId + ' is unchecked.');
            
            // Add logic for when the checkbox is unchecked
            var index = selectedProducts.indexOf(productId);
            if (index !== -1) {
                selectedProducts.splice(index, 1);
            }
        }

        // Map selectedProducts to an array of objects with the key "products[]"
        // var serializedProducts = selectedProducts.map(product => ({ name: 'products[]', value: product }));

        // Assign the array to the products[] input field
        // $('#setbidproducts').val(selectedProducts);

        // Update the "Bulk Edit" button visibility based on the number of selected products
        if (selectedProducts.length > 0) {
            $('#bulkEditButton').show();
        } else {
            $('#bulkEditButton').hide();
        }
    });

    // Handle the bulk edit logic when the apply changes button is clicked
    $('#applyBulkEdit').on('click', function() {
        $('.indicator-label').hide();
        $('.indicator-progress').show();

        var bid_amount = $('#bid_amount').val();
        var bid_days = $('#bid_days').val();
        // Get the selected products
        console.log('Selected Products:', selectedProducts);
        const postData = {
            bid_amount: bid_amount,
            bid_days: bid_days,
            products: selectedProducts,
        };

        // console.log(postData);
        // Make an AJAX POST request to the Laravel controller
        $.ajax({
            type: 'POST',
            url: 'store-feature-product', // Replace with the actual URL of your Laravel controller
            data: postData,
            success: function (response) {
                if(response.data === 'true'){
                    $('.indicator-label').show();
                    $('.indicator-progress').hide();
                    $('#indicator-success').show();
                }else{
                    $('.indicator-label').show();
                    $('.indicator-progress').hide();
                    $('#indicator-error').show();
                }
            },
            error: function (error) {
                console.error('Could not auto register:', error);
            }
        });
        // Close the modal
        $('#bulkEditModal').modal('hide');
    });
});


// JavaScript
function setBidValue(val){
    $('#bid_amount').val(val);
    switch (val) {
        case 100:
            $('#bid_days').val(7);
            $('#bid_price_text').text('100');
            $('#bid_days_text').text('7');
            break;
        case 500:
            $('#bid_days').val(30);
            $('#bid_price_text').text('500');
            $('#bid_days_text').text('30');
            break;
        case 900:
            $('#bid_days').val(60);
            $('#bid_price_text').text('900');
            $('#bid_days_text').text('60');
            break;
    
        default:
            $('#bid_days').val(7);
            $('#bid_price_text').text('100');
            $('#bid_days_text').text('7');
            break;
    }
}
</script>
@endsection