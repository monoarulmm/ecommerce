@section('title', 'dashboard')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')



 

<main class="main">
  <section class="mt-50 mb-50">
      <div class="container custom">
          <div class="row">
              <div class="col-lg-9">
                  <div class="single-page pr-30">
                      <div class="single-header style-2">
                          <h1 class="mb-30">Best smartwatch 2022: the top wearables you can buy today</h1>
                          <div class="single-header-meta">
                              <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                  <span class="post-by">By <a href="#">Jonh</a></span>
                                  <span class="post-on has-dot">9 April 2020</span>
                                  <span class="time-reading has-dot">8 mins read</span>
                                  <span class="hit-count  has-dot">29k Views</span>
                              </div>
                              <div class="social-icons single-share">
                                  <ul class="text-grey-5 d-inline-block">
                                      <li><strong class="mr-10">Share this:</strong></li>
                                      <li class="social-facebook"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                      <li class="social-twitter"> <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                      <li class="social-instagram"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                      <li class="social-linkedin"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <figure class="single-thumbnail">
                        <img style="height:700px; width:100%;" class="img-fluid"
                        src="/storage/shop/{{ $shop->image }}" alt="image">
                      </figure>
                      <div class="single-content">
                          <p>The best smartwatch needs to be able to monitor your health, track your location when exercising, offer a variety of other apps that you wouldn't normally see on your smartphone, sport good battery life and, perhaps most importantly, have an affordable price.</p>
                          <p>We've reviewed and ranked all of the best smartwatches on the market right now, and we've made a definitive list of the top 10 devices you can buy today. One of the 10 picks below may just be your perfect next smartwatch.</p>
                          <p>Those top-end wearables span from the Apple Watch to Fitbits, Garmin watches to Tizen-sporting Samsung watches. There's also Wear OS which is Google's own wearable operating system in the vein of Apple's watchOS - you’ll see it show up in a lot of these devices.</p>
                          <p>Throughout our review process, we look at the design, features, battery life, spec, price and more for each smartwatch, rank it against the competition and enter it into the list you'll find below.</p>
                          <h4>1. Apple Watch SE</h4>
                          <ul class="mb-20">
                              <li>Updated content on a regular basis</li>
                              <li>Secure &amp; hassle-free payment</li>
                              <li>1-click checkout</li>
                              <li>Easy access &amp; smart user dashboard</li>
                          </ul>
                          <h4>2. Samsung Galaxy Watch 3</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque esse eos minima. Eius quo autem impedit quibusdam maiores, voluptatum quae sunt sit nisi voluptatem sed, esse quisquam labore, at est!</p>
                         
                          <h4>3. Apple Watch 6</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque esse eos minima. Eius quo autem impedit quibusdam maiores, voluptatum quae sunt sit nisi voluptatem sed, esse quisquam labore, at est!</p>
                          <ul class="product-more-infor mb-30">
                              <li><span>Type Of Packing</span> Bottle</li>
                              <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                              <li><span>Quantity Per Case</span> 100ml</li>
                              <li><span>Ethyl Alcohol</span> 70%</li>
                              <li><span>Piece In One</span> Carton</li>
                          </ul>
                          <h4>4. Fitbit Versa 3</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque esse eos minima. Eius quo autem impedit quibusdam maiores, voluptatum quae sunt sit nisi voluptatem sed, esse quisquam labore, at est!</p>
                     
                          <h4>5. Samsung Galaxy Watch Active 2</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque esse eos minima. Eius quo autem impedit quibusdam maiores, voluptatum quae sunt sit nisi voluptatem sed, esse quisquam labore, at est!</p>
                          <ul class="product-more-infor mt-30">
                              <li><span>Type Of Packing</span> Bottle</li>
                              <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                              <li><span>Quantity Per Case</span> 100ml</li>
                              <li><span>Ethyl Alcohol</span> 70%</li>
                              <li><span>Piece In One</span> Carton</li>
                          </ul>
                      </div>
                   
                   
                   
                  </div>
              </div>
              <div class="col-lg-3 primary-sidebar sticky-sidebar">
                  <div class="widget-area">
                      <!--Widget categories-->
                      <div class="sidebar-widget widget_categories mb-40">
                          <div class="widget-header position-relative mb-20 pb-10">
                              <h5 class="widget-title">Categories</h5>
                          </div>
                          <div class="post-block-list post-module-1 post-module-5">
                              <ul>
                                  <li class="cat-item cat-item-2"><a href="blog.html">Beauty</a> (3)</li>
                                  <li class="cat-item cat-item-3"><a href="blog.html">Book</a> (6)</li>
                                  <li class="cat-item cat-item-4"><a href="blog.html">Design</a> (4)</li>
                                  <li class="cat-item cat-item-5"><a href="blog.html">Fashion</a> (3)</li>
                                  <li class="cat-item cat-item-6"><a href="blog.html">Lifestyle</a> (6)</li>
                                  <li class="cat-item cat-item-7"><a href="blog.html">Travel</a> (2)</li>
                              </ul>
                          </div>
                      </div>
                      <!--Widget latest posts style 1-->
                      <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                          <div class="widget-header position-relative mb-20 pb-10">
                              <h5 class="widget-title">Trending Now</h5>
                          </div>
                          <div class="row">
                              <div class="col-12 sm-grid-content mb-30">
                                  <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                      <a href="blog-details.html">
                                          <img src="{{asset('assets/imgs/blog/blog-1.j')}}pg" alt="">
                                      </a>
                                  </div>
                                  <div class="post-content media-body">
                                      <h4 class="post-title mb-10 text-limit-2-row">The litigants on the screen are not actors </h4>
                                      <div class="entry-meta meta-13 font-xxs color-grey">
                                          <span class="post-on mr-10">25 April</span>
                                          <span class="hit-count has-dot ">126k Views</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                  <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                      <a href="blog-details.html">
                                          <img src="{{asset('assets/imgs/blog/blog-3.j')}}pg" alt="">
                                      </a>
                                  </div>
                                  <div class="post-content media-body">
                                      <h6 class="post-title mb-10 text-limit-2-row">Water Partners With Rag &amp; Bone To Consume</h6>
                                      <div class="entry-meta meta-13 font-xxs color-grey">
                                          <span class="post-on mr-10">25 April</span>
                                          <span class="hit-count has-dot ">126k Views</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                  <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                      <a href="blog-details.html">
                                          <img src="{{asset('assets/imgs/blog/blog-4.j')}}pg" alt="">
                                      </a>
                                  </div>
                                  <div class="post-content media-body">
                                      <h6 class="post-title mb-10 text-limit-2-row">The loss is not all that surprising</h6>
                                      <div class="entry-meta meta-13 font-xxs color-grey">
                                          <span class="post-on mr-10">25 April</span>
                                          <span class="hit-count has-dot ">126k Views</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                  <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                      <a href="blog-details.html">
                                          <img src="{{asset('assets/imgs/blog/blog-5.j')}}pg" alt="">
                                      </a>
                                  </div>
                                  <div class="post-content media-body">
                                      <h6 class="post-title mb-10 text-limit-2-row">We got a right to pick a little fight, Bonanza </h6>
                                      <div class="entry-meta meta-13 font-xxs color-grey">
                                          <span class="post-on mr-10">25 April</span>
                                          <span class="hit-count has-dot ">126k Views</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                  <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                      <a href="blog-details.html">
                                          <img src="{{asset('assets/imgs/blog/blog-6.j')}}pg" alt="">
                                      </a>
                                  </div>
                                  <div class="post-content media-body">
                                      <h6 class="post-title mb-10 text-limit-2-row">My entrance exam was on a book of matches </h6>
                                      <div class="entry-meta meta-13 font-xxs color-grey">
                                          <span class="post-on mr-10">25 April</span>
                                          <span class="hit-count has-dot ">126k Views</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--Widget ads-->
                      <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                          <img src="{{asset('assets/imgs/banner/banner-11.j')}}pg" alt="">
                          <div class="banner-text">
                              <span>Women Zone</span>
                              <h4>Save 17% on <br>Office Dress</h4>
                              <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                          </div>
                      </div>
                      <!--Widget Tags-->
                      <div class="sidebar-widget widget_tags mb-50">
                          <div class="widget-header position-relative mb-20 pb-10">
                              <h5 class="widget-title">Popular tags </h5>
                          </div>
                          <div class="tagcloud">
                              <a class="tag-cloud-link" href="blog.html">beautiful</a>
                              <a class="tag-cloud-link" href="blog.html">New York</a>
                              <a class="tag-cloud-link" href="blog.html">droll</a>
                              <a class="tag-cloud-link" href="blog.html">intimate</a>
                              <a class="tag-cloud-link" href="blog.html">loving</a>
                              <a class="tag-cloud-link" href="blog.html">travel</a>
                              <a class="tag-cloud-link" href="blog.html">fighting </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>

@endsection
