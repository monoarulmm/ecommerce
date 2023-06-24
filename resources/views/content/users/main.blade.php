@section('title', 'welc')

@extends('layouts.main')
@section('content')


<div class="row">
  @forelse ($products as $product)
      <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box">
              <div class="option_container">
                  <div class="options">
                      <a href="{{url('product_details',$product->slug)}}" class="option1">
                     Product Details
                      </a>

                      <form action="{{url('add_cart', $product->id)}}" method="POST">@csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="quantinty" value="1" min="1" style="width:100px">

                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="quantinty" value="Add To Cart" min="1" style="">

                            </div>


                        </div>



                      </form>
              
                  </div>
              </div>
              <div class="img-box">
                  <img src="product/{{ $product->image }}" alt="">
              </div>
              <div class="detail-box">
                  <h5>
                      {{ $product->title }}
                  </h5>

                  @if ($product->discount_price != null)
                      <h6 style="color:red">
                       Discount Price <br>
                          ${{ $product->discount_price }}
                      </h6>
            
                      <h6 style="text-decoration: line-through; ">
                       Regular Price <br>
                          ${{ $product->price }}
                      </h6>

                  @else
                      <h6 style="color:blue">
                       Regular Price <br>
                          ${{ $product->price }}
                      </h6>

                  @endif
              </div>
          </div>
      </div>
    
     @empty

     <div style="text-align: center; margin:auto; ">
        <p>Product Not Found</p>
    </div>


  @endforelse




</div>



@endsection