@section('title', 'product_details')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{$product->images}}"
                                                    alt="product image">
                                            </figure>
                                
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                            <div><img src="storage/product/{{$product->image}}"
                                                    alt="product image"></div>
                                        
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->title }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Brands: <a href="/">{{$product->featured}}</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> ({{$total_review}} reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">${{ $product->sale_price }}</span></ins>
                                                <ins><span class="old-price font-md ml-15">${{$product->regular_price}}</span></ins>
                                                <span class="save-price  font-md color3 ml-15">25% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i>{{$product->warranty}}
                                                  </li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i>{{$product->return}}
                                                </li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                    
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
 
                                        <form action="{{url('add_cart', $product->id)}}" method="POST">@csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="number" name="quantity" value="1" min="1" style="width:100px">
      
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="submit"  value="Add To Cart" min="1" style="">
      
                                                </div>
                                            </div>
                                          </form>
                                        </form>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">{{$product->SKU}}</a></li>
                                            <li>Availability:<span class="in-stock text-success ml-5">{{$product->stock_status}}</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            {{-- review --}}
                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                                <div class="wrap-product-detail">
                                    <div class="advance-info">
                                        <div class="tab-control normal">
                                            <a href="#description" class="tab-control-item active">description</a>
                                            <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                                            <a href="#review" class="tab-control-item">Reviews</a>
                                        </div>
                                        <div class="tab-contents">
                                            <div class="tab-content-item active" id="description">
                                                <p>{{$product->description}}</p>
                                                
                                            </div>
                                            <div class="tab-content-item " id="add_infomation">
                                                <table class="shop_attributes">
                                                    <tbody>
                                                        <tr>
                                                            <th>Weight</th>
                                                            <td class="product_weight">1 kg</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Dimensions</th>
                                                            <td class="product_dimensions">12 x 15 x 23 cm</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Color</th>
                                                            <td>
                                                                <p>Black, Blue, Grey, Violet, Yellow</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-content-item " id="review">

                                                <div class="wrap-review-form">

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">

                                                                <form action="{{ url('add_review', $product->id) }}"
                                                                    method="post" id="commentform" class="comment-form"
                                                                    novalidate="">@csrf
                                                                    <div class="comment-form-rating">
                                                                        <span>Your rating</span>
                                                                        <p class="stars">

                                                                            <label for="rated-1"></label>
                                                                            <input type="radio" id="rated-1"
                                                                                name="rating" value="1">
                                                                            <label for="rated-2"></label>
                                                                            <input type="radio" id="rated-2"
                                                                                name="rating" value="2">
                                                                            <label for="rated-3"></label>
                                                                            <input type="radio" id="rated-3"
                                                                                name="rating" value="3">
                                                                            <label for="rated-4"></label>
                                                                            <input type="radio" id="rated-4"
                                                                                name="rating" value="4">
                                                                            <label for="rated-5"></label>
                                                                            <input type="radio" id="rated-5"
                                                                                name="rating" value="5"
                                                                                checked="checked">
                                                                        </p>
                                                                    </div>

                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your review <span
                                                                                class="required">*</span>
                                                                        </label>
                                                                        <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit"
                                                                            id="submit" class="submit" value="Submit">
                                                                    </p>
                                                                </form>

                                                            </div><!-- .comment-respond-->
                                                        </div><!-- #review_form -->
                                                    </div><!-- #review_form_wrapper -->

                                                    <div id="comments">
                                                        <ol class="commentlist">
                                                            @foreach ($reviews as $review)
                                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                                    id="li-comment-20">
                                                                    <div id="comment-20" class="comment_container">

                                                                        <img class="w-full "
                                                                            src="/storage/profile-photos/{{ $review->profile }}"
                                                                            alt="image">"

                                                                        <div class="comment-text">
                                                                            <div class="star-rating">
                                                                                <span class="width-80-percent">Rated
                                                                                    <strong class="rating">5</strong>
                                                                                </span>
                                                                            </div>
                                                                            <p class="meta">
                                                                                <strong
                                                                                    class="woocommerce-review__author">{{ $review->name }}</strong>
                                                                                <span
                                                                                    class="woocommerce-review__dash">–</span>
                                                                                <time
                                                                                    class="woocommerce-review__published-date"
                                                                                    datetime="2008-02-14 20:00">{{ $review->created_at }}
                                                                                </time>
                                                                            </p>
                                                                            <div class="description">
                                                                                <p>{{ $review->comment }}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    </div><!-- #comments -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end main products area-->
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                <li><a href="shop.html">Shoes & Bags</a></li>
                                <li><a href="shop.html">Blouses & Shirts</a></li>
                                <li><a href="shop.html">Dresses</a></li>
                                <li><a href="shop.html">Swimwear</a></li>
                                <li><a href="shop.html">Beauty</a></li>
                                <li><a href="shop.html">Jewelry & Watch</a></li>
                                <li><a href="shop.html">Accessories</a></li>
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
    </main>

  


@endsection
