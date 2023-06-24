@section('title', 'welc')

@extends('layouts.main')
@section('content')
 

@include('sections.9_header')
@include('sections.header')
    <section class="banner-2 section-padding pb-0">
        <div class="container">
            <div class="banner-img banner-big wow fadeIn animated f-none">
                <img src="assets/imgs/banner/banner-4.png" alt="">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                    <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                    <a href="shop.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-categories section-padding mt-15 mb-25">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                <div class="carausel-6-columns" id="carausel-6-columns">
                    @foreach ($categories as $category)
                    <div class="card-1">
                        <figure class=" img-hover-scale overflow-hidden">
                            <a href="shop.html"><img src="storage/category/{{$category->image}}" alt=""></a>
                        </figure>
                        <h5><a href="shop.html">T-Shirt</a></h5>
                    </div>
                    @endforeach
                
             
                </div>
            </div>
        </div>
    </section>

    <section class="mt-50 mb-50">
        <div class="container">

            
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <div class="row">
                <div class="col-lg-9">
                    <div class="row product-grid-3">
                        @forelse ($products as $product)
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details',$product->slug)}}">
                                                <img class="default-img"
                                                    src="/storage/product/{{ $product->image }}" alt="">

                                                <img class="hover-img" src="/storage/product/{{ $product->images }}"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <form action="{{url('add_wishlist',$product->id)}}" method="POST">@csrf
                                            <a href="{{url('product_details',$product->slug)}}" aria-label="Quick view" class="action-btn hover-up" >
                                                <i class="fi-rs-eye"></i></a>
                                              

                                                <button aria-label="Add To Wishlist"  style="width:20px;"  type="submit"><i class="fi-rs-heart"></i></button>

                                                </form>   
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">{{$product->category}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('product_details',$product->slug)}}">{{ $product->shop}}</a>
                                        </div>
                                        <h2><a href="{{url('product_details',$product->slug)}}">{{ $product->product }}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>30%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>${{ $product->sale_price }}</span>
                                            <span class="old-price">${{ $product->regular_price }}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <form action="{{url('add_cart',$product->id)}}" method="POST">@csrf

                                                <input type="number" name="quantity" value="1" min="1" style="width:50px">
                                                
                                         
                                                
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href="javascript:$('form').submit();"><i
                                                    class="fi-rs-shopping-bag-add"></i></a>
                                            </form>
                     
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty
                            <div>Not Found</div>

                        @endforelse
                    </div>
                    <!--pagination-->
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-mg-6"></div>
                        <div class="col-lg-12 col-mg-6"></div>
                    </div>
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            @foreach ($categories as $category)
                            <li><a href="{{url('category_details',$category->id)}}">{{$category->title}}</a></li>
                            @endforeach
                  
                     
                        </ul>
                    </div>
                 
                    <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">New products</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>

                        @foreach ($nproducts as $nproduct)
                        <div class="single-post clearfix">
                            <div class="image">
                                <img src="storage/product/{{$nproduct->image}}" alt="#">
                            </div>
                            <div class="content pt-10">
                                <h5><a href="{{url('product_details',$nproduct->slug)}}">{{$nproduct->product}}</a></h5>
                                <p class="price mb-0 mt-5">{{$product->sale_price}}</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:90%"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banners mb-15">
        <div class="container">
            <div class="row">

                @foreach ($shops as  $shop)
                <div class="col-lg-4 col-md-6 mt-3 card-1">
                    <div class="banner-img wow fadeIn animated">
                        <img src="storage/shop/{{$shop->image}}" alt="">
                        <div class="banner-text">
                            <span>Smart Offer</span>
                            <h4>Save 20% on <br>Woman Bag</h4>
                            <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
              
           
            

                
            </div>
        </div>
    </section>
    {{-- <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows">
                </div>
                <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Lorem ipsum dolor</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$238.85 </span>
                                <span class="old-price">$245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Aliquam posuere</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$173.85 </span>
                                <span class="old-price">$185.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="sale">Sale</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Sed dapibus orci</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$215.85 </span>
                                <span class="old-price">$235.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">.33%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Donec congue</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$83.8 </span>
                                <span class="old-price">$125.2</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">-25%</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Curabitur porta</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$1238.85 </span>
                                <span class="old-price">$1245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="new">New</span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Praesent maximus</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$123 </span>
                                <span class="old-price">$156</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                    <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="">
                                    <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal">
                                    <i class="fi-rs-eye"></i></a>
                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php"
                                    tabindex="0"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn small hover-up" href="compare.php"
                                    tabindex="0"><i class="fi-rs-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="product-details.html">Vestibulum ante</a></h2>
                            <div class="rating-result" title="90%">
                                <span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span>$238.85 </span>
                                <span class="old-price">$245.8</span>
                            </div>
                        </div>
                    </div>
                    <!--End product-cart-wrap-2-->
                </div>
            </div>
        </div>
    </section> --}}

    




@endsection
