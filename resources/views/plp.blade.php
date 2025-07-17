@extends('layouts.app-public')

@section('title', 'Shop')

@section('content')
<div class="site-wrapper-reveal pt-0 mt-0">
    <div class="product-wrapper section-space--ptb_90 border-bottom pb-5 mb-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filter -->
                <div class="col-lg-3 col-md-3 order-md-1 order-2 small-mt__40">
                    <!-- Our Partners -->
                    <div class="shop-widget widget-shop-publishers mt-3">
                        <div class="product-filter">
                            <h6 class="mb-20">Our Partners</h6>
                            <select class="filter form-select form-select-sm" name="_publisher" onchange="getData()">
                                <option value="" selected>All</option>
                                <option value="fendicasa">Fendi Casa</option>
                                <option value="kelly">Kelly Wearstler</option>
                                <option value="bentley home">Bentley Home</option>
                                <option value="bebitalia">B&B Italia</option>
                                <option value="poltro">Poltrona Frau</option>
                                <option value="moooi">Moooi</option>
                                <option value="armani">Armani/Casa</option>
                                <option value="roche">Roche Bobois</option>
                            </select>
                        </div>
                    </div>

                    <!-- Color -->
                    <div class="shop-widget widget-color">
                        <div class="product-filter">
                            <h6 class="mb-20">Color</h6>
                            <ul class="widget-nav-list">
                                <li><a href="#"><span class="swatch-color black"></span></a></li>
                                <li><a href="#"><span class="swatch-color red"></span></a></li>
                                <li><a href="#"><span class="swatch-color blue"></span></a></li>
                                <li><a href="#"><span class="swatch-color green"></span></a></li>
                                <li><a href="#"><span class="swatch-color yellow"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="shop-widget widget-price">
                        <div class="product-filter">
                            <h6 class="mb-20">Price</h6>
                            <ul class="widget-nav-list">
                                <li><a href="#">Package</a></li>
                                <li><a href="#">IDR 100JT</a></li>
                                <li><a href="#">IDR 300-500JT</a></li>
                                <li><a href="#">Up to 500JT</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="shop-widget">
                        <div class="product-filter">
                            <h6 class="mb-20">Tags</h6>
                            <div class="blog-tagcloud">
                                <a href="#" class="selected">Dream House</a>
                                <a href="#">QuietLuxury</a>
                                <a href="#">TimelessDesign</a>
                                <a href="#">OldMoneyAesthetic</a>
                                <a href="#">UnderstatedLuxury</a>
                                <a href="#">ClassyInteriors</a>
                                <a href="#">Classics</a>
                                <a href="#">MinimalElegance</a>
                                <a href="#">Young Adult</a>
                                <a href="#">LuxuryLiving</a>
                                <a href="#">Health</a>
                                <a href="#">RefinedSpaces</a>
                                <a href="#">EuropeanInteriors</a>
                                <a href="#">CustomFurniture</a>
                                <a href="#">ArtOfLiving</a>
                                <a href="#">DesignWithSoul</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product List -->
                <div class="col-lg-9 col-md-9 order-md-2 order-1">
                    @if(isset($products) && count($products) > 0)
                        <!-- Top Toolbar -->
                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-8">
                                <div class="shop-toolbar__items shop-toolbar__item--left">
                                    <p class="result-count">
                                        Showing <span id="products_count_start"></span>-
                                        <span id="products_count_end"></span>
                                        of <span id="products_count_total"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <select class="filter form-select form-select-sm" name="_sort_by" onchange="getData()">
                                    <option value="title_asc">Sort by A-Z</option>
                                    <option value="title_desc">Sort by Z-A</option>
                                    <option value="latest_publication">Sort by latest</option>
                                    <option value="latest_added">Sort by time added</option>
                                    <option value="price_asc">Sort by price: low to high</option>
                                    <option value="price_desc">Sort by price: high to low</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-12 mt-2 mt-md-0">
                                <div class="header-right-search">
                                    <div class="header-search-box">
                                        <input class="filter search-field" name="_search" type="text" 
                                               onkeypress="getDataEnter(event)" 
                                               placeholder="Search by title or author...">
                                        <button class="search-icon"><i class="icon-magnifier"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product Grid -->
                        <div class="row" id="product-list">
                            @php $i = 1; @endphp
                            @foreach ($products as $product)
                                <div class="col-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                                    <div class="card shadow-sm" style="width: 100%;">
                                        <img src="{{ asset("assets/images/product/product" . $i . ".png") }}" 
                                             class="card-img-top img-fluid" 
                                             alt="{{ $product->name }}" 
                                             style="max-height: 200px; object-fit: contain;">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">{{ $product->name }}</h6>
                                            <p class="card-text">IDR {{ number_format($product->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                                @php $i++; @endphp
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-12">
                                <ul class="page-pagination text-center mt-40" id="product-list-pagination"></ul>
                            </div>
                        </div>

  @else
<div class="row g-4 px-2 mb-5" id="product-placeholder-list">
    @for ($i = 1; $i <= 5; $i++)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/product/product' . $i . '.jpeg') }}" 
                     alt="Product {{ $i }}" 
                     class="card-img-top img-fluid" 
                     style="max-height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="card-title text-muted mb-0">Coming Soon</h6>
                </div>
            </div>
        </div>
    @endfor
</div>
@endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addition_css')
<style>
    .site-wrapper-reveal {
        padding-top: 0 !important;
        margin-top: 0 !important;
    }
</style>
@endsection

@section('addition_script')
<script src="{{ asset('pages/js/plp.js') }}"></script>
@endsection
