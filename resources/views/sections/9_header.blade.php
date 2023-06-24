


    
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="mobile-header-content-area">
                    <div class="mobile-menu-wrap mobile-header-border">
                        <div class="main-categori-wrap mobile-header-border">
                            <a class="categori-button-active-2" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-small">
                                <ul>
                                    @foreach ($categories as $category)
                                    <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>{{$category->title}}</a></li>
                                    @endforeach     
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-social-icon">
                        <h5 class="mb-15 text-grey-4">Follow Us</h5>
                        <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"
                                alt=""></a>
                        <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"
                                alt=""></a>
                        <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"
                                alt=""></a>
                        <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                alt=""></a>
                        <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>


<div class="header-area header-style-1 header-height-2">
  <div class="header-top header-top-ptb-1 d-none d-lg-block">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-3 col-lg-4">
              </div>
              <div class="col-xl-6 col-lg-4">
                  <div class="text-center">
                      <div id="news-flash" class="d-inline-block">
                          <ul>
                              <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                              <li>dinajmar welcome</li>
                              <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-4">
             
                  </div>
              </div>
          </div>
      </div>
      <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
          <div class="container">
              <div class="header-wrap">
                  <div class="logo logo-width-1">
                      <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                  </div>
                  <div class="header-right">
                      <div class="search-style-1">
                          {{-- <form action="#">
                              <input type="text" placeholder="Search for items...">
                          </form> --}}
                      </div>

                      @if (Auth::id())
                      <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="{{url('my_wishlist')}}">
                                    <img class="svgInject" alt="Surfside Media"
                                        src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                    <span class="pro-count blue">{{$total_wishlist}}</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{url('my_cart')}}">
                                    <img alt="Surfside Media"
                                        src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                    <span class="pro-count blue">{{$total_cart}}</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                    <?php $totalprice=0; ?>
                                      @foreach ($carts as $cart)
                                      <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media" src="storage/product/{{$cart->image}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                            <h3><span>{{$cart->quantity}} × ${{$cart->price}} </span> = {{$cart->subtotal}} </h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="{{url('delete_cart',$cart->id)}}"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>

                                    <?php $totalprice=$totalprice + $cart->subtotal ?>
                                      @endforeach
                                      
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>${{$totalprice}}</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{url('my_cart')}}">View cart</a>
                                            <a href="{{url('show_order')}}">My Order</a></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  @else

                  <div class="header-action-right">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.php">
                                <img class="svgInject" alt="Surfside Media"
                                    src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                <span class="pro-count blue">0</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="{{url('my_cart')}}">
                                <img alt="Surfside Media"
                                    src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                <span class="pro-count blue">0</span>
                            </a>
                           
                        </div>
                    </div>
                  </div>
                  @endif



                  </div>
              </div>
          </div>
      </div>
      <div class="header-bottom header-bottom-bg-color sticky-bar">
          <div class="container">
              <div class="header-wrap header-space-between position-relative">
                  <div class="logo logo-width-1 d-block d-lg-none">
                      <a href="index.html"><img src="assets/imgs/logo/logo.png" alt="logo"></a>
                  </div>
                  <div class="header-nav d-none d-lg-flex">
                      <div class="main-categori-wrap d-none d-lg-block">
                          <a class="categori-button-active" href="#">
                              <span class="fi-rs-apps"></span> Browse Categories
                          </a>
                          <div class="categori-dropdown-wrap categori-dropdown-active-large">
                              <ul>
                                  
                                   @foreach ($categories as $category)
                                   <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>{{$category->title}}</a></li>
                                   @endforeach      
                              
                           
                              </ul>
                            
                          </div>
                      </div>
                      <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                      </div>
                  </div>
                  <div class="hotline d-none d-lg-block">
                      <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+1) 0000-000-000 </p>
                  </div>
                  <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                  </p>
                  
                  <div class="header-action-right d-block d-lg-none">
                      <div class="header-action-2">

                        @if (Auth::id())
                          <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="{{url('my_wishlist')}}">
                                        <img class="svgInject" alt="Surfside Media"
                                            src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                        <span class="pro-count blue">{{$total_wishlist}}</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{url('my_cart')}}">
                                        <img alt="Surfside Media"
                                            src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                        <span class="pro-count blue">{{$total_cart}}</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                        <?php $totalprice=0; ?>
                                          @foreach ($carts as $cart)
                                          <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Surfside Media" src="storage/product/{{$cart->image}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                                <h3><span>{{$cart->quantity}} × ${{$cart->price}} </span> = {{$cart->subtotal}} </h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="{{url('delete_cart',$cart->id)}}"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
    
                                        <?php $totalprice=$totalprice + $cart->subtotal ?>
                                          @endforeach
                                          
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>${{$totalprice}}</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="cart.html">View cart</a>
                                                <a href="shop-checkout.php">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          

                        @else

                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.php">
                                        <img class="svgInject" alt="Surfside Media"
                                            src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                        <span class="pro-count blue">0</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="{{url('my_cart')}}">
                                        <img alt="Surfside Media"
                                            src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                        <span class="pro-count blue">0</span>
                                    </a>
                                   
                                </div>
                            </div>
                          </div>
                        @endif  


                          <div class="header-action-icon-2 d-block d-lg-none">
                              <div class="burger-icon burger-icon-white">
                                  <span class="burger-icon-top"></span>
                                  <span class="burger-icon-mid"></span>
                                  <span class="burger-icon-bottom"></span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>