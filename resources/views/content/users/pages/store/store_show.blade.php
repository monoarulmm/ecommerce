@section('title', 'dashboard')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')


<div id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu right-menu">
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'ADM')
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">

                                                <li class="menu-item">
                                                    <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                </li>



                                                <li class="menu-item">
                                                    <a title="My Profile" href="{{ route('profile.show') }}">My Profile</a>
                                                </li>



                                                <li class="menu-item">

                                                    <a
                                                        href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                </li>

                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>

                                            </ul>
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="submenu curency">

                                                {{-- <li class="menu-item">
                                                    <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                </li> --}}


                                                <li class="menu-item">
                                                    <a title="My Profile" href="{{ route('profile.show') }}">My Profile</a>
                                                </li>

                                                <li class="menu-item">

                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                </li>

                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>


                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item"><a title="Register or Login" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="menu-item "><a title="Register or Login"
                                            href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<main class="main">
  <section class="mt-50 mb-50">
      <div class="container custom">
          <div class="row">
              <div class="col-lg-9">
                 
                @forelse($shops as  $shop)
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                  <div class="banner-features wow fadeIn animated hover-up">
                      <img src="storage/shop/{{$shop->image}}" alt="">
                      <h4 class="bg-1">{{$shop->shop}}</h4>
                      <a href="{{url('shop_details',$shop->id)}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                  </div>
              </div>
                @empty

                <div>Not shop found</div>
                  
                @endforelse 
         
         
              </div>
              <div class="col-lg-3 primary-sidebar sticky-sidebar">
                  <div class="widget-area">
                      <div class="sidebar-widget widget_search mb-50">
                          <div class="search-form">


                          
                            <form action="{{url('shop_search')}}" method="get">@csrf
                                  <input type="text"  name="search" placeholder="Search…">
                                  <button type="submit"> <i class="fi-rs-search"></i> </button>
                              </form>

                              {{-- <form action="{{url('product_search')}}" method="get">@csrf
                                <input type="text" name="search" placeholder="Search here...">
                                <button  type="submit"><i class="fa fa-search"></i></button>
                              
                            </form> --}}
                          </div>
                      </div>
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
                                          <img src="assets/imgs/blog/blog-1.jpg" alt="">
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
                                          <img src="assets/imgs/blog/blog-3.jpg" alt="">
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
                                          <img src="assets/imgs/blog/blog-4.jpg" alt="">
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
                                          <img src="assets/imgs/blog/blog-5.jpg" alt="">
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
                                          <img src="assets/imgs/blog/blog-6.jpg" alt="">
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
                          <img src="assets/imgs/banner/banner-11.jpg" alt="">
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
