@section('title', 'product_all')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')

    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                     <div class="row product-grid-4">
                        @forelse ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                            {{-- <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="product-details.html">
                                            <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                            <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop.html">Clothing</a>
                                    </div>
                                    <h2><a href="product-details.html">Plain Color Pocket Shirts</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <span>50%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$138.85 </span>
                                        <span class="old-price">$255.8</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                    </div>
                                </div>
                            </div> --}}
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
                                            <span>{{$product->sale_percent}}</span>
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
                        <div>Product Not Found</div>

                    @endforelse
                    </div>
                    <!--End product-grid-4-->
            </div>
        </div>
    </section>
@endsection
