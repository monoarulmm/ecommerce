@section('title', 'product_all')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')

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
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> We found <strong class="text-brand">688</strong> items for you!</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">100</a></li>
                                        <li><a href="#">150</a></li>
                                        <li><a href="#">200</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection
