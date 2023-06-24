@section('title', 'product_pages')

@extends('layouts.admin')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="w-full text-3xl text-black pb-6">Products Update</h1>



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

    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/1 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i>Product Form
                <button class="btn-redirect"><a href="{{url('product')}}"> New Product</a></button>
            </p>
            <div class="leading-loose">
                <form action="{{ url('update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add Product Name</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="product" type="text"
                            required="" value="{{$product->product}}">

                        @error('product')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product title</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="title" type="text"
                            required="" value="{{$product->title}}">

                        @error('title')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">ADD Product Return days</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="return" type="text"
                            required="" value="{{$product->return}}">

                        @error('return')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Regular Price</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="regular_price" type="text"
                            required="" value="{{$product->regular_price}}">

                        @error('regular_price')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Sale_Price</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="sale_price" type="text"
                            required="" value="{{$product->sale_price}}">

                        @error('sale_price')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Percentage Sale</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="sale_percent" type="text"
                            required="" value="{{$product->sale_percent}}">

                        @error('sale_percent')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mt-3">
                        <label class="text-sm text-gray-600"  >Product Cetagory :  </label>
                         <select name="category" class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" mt-10">
                            <option value="" selected="">update a cetagory</option>
                            @foreach ($categories as $category) 

                                <option value="{{$category->title}}" >{{$category->title}}</option>
                            @endforeach
                         </select>

                         
                         
                        @error('category')
                        <div class="text-denger">{{ $message }}</div>
                      @enderror
                       
                    </div>

                    <div class="mt-3">
                        <label class="text-sm text-gray-600"  >Product Shop :  </label>
                         <select name="shop" class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" mt-10">
                            <option value="" selected="">update a Shop</option>
                            @foreach ($shops as $shop) 

                                <option value="{{$shop->shop}}" >{{$shop->shop}}</option>
                            @endforeach
                         </select>

                         
                        @error('shop')
                        <div class="text-denger">{{ $message }}</div>
                      @enderror
                       
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Prodouct Key</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="SKU" type="text"
                            required="" value="{{$product->SKU}}">

                        @error('SKU')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Stock_status</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="stock_status" type="text"
                            required="" value="{{$product->stock_status}}">

                        @error('stock_status')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Brand</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="featured" type="text"
                                required="" value="{{$product->featured}}">

                        @error('featured')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>


                   




                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Quantity</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="quantity" type="text"
                            required="" value="{{$product->product}}"="product quantity">

                        @error('quantity')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Color</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="color" type="text"
                            required=""value="{{$product->color}}">

                        @error('color')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Size</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="size" type="text"
                            required="" value="{{$product->size}}">

                        @error('size')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Warranty</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="warranty" type="text"
                            required=""value="{{$product->warranty}}">

                        @error('warranty')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Tag</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="tag" type="text"
                            required="" value="{{$product->tag}}">

                        @error('tag')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Authentic</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="authentic" type="text"
                            required="" value="{{$product->authentic}}">

                        @error('authentic')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">Current main Image</label>
                        <div>
                            <img class="w-full " src="/storage/product/{{ $product->image }}" alt="image">"
                        </div>
                    </div>


                    <div class="mt-2">
                        <label class="block text-sm text-gray-600">Change Image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="image" type="file" required=""  >

                        @error('image')
                        <div class="text-denger">{{ $message }}</div>
                      @enderror
                    </div>


                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">Current main Image</label>
                        <div>
                            <img class="w-full " src="/storage/product/{{ $product->images }}" alt="image">"
                        </div>
                    </div>


                    <div class="mt-2">
                        <label class="block text-sm text-gray-600">Change hover Image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="images" type="file" required=""  >

                        @error('images')
                        <div class="text-denger">{{ $message }}</div>
                      @enderror
                    </div>


                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">Current 3 Image</label>
                        <div>
                            <img class="w-full " src="/storage/product/{{ $product->img }}" alt="image">"
                        </div>
                    </div>


                    <div class="mt-2">
                        <label class="block text-sm text-gray-600">Change 3 Image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="img" type="file" required=""  >

                        @error('img')
                        <div class="text-denger">{{ $message }}</div>
                      @enderror
                    </div>




                    <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="message">Description</label>
                    <input type="text" class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded"  name="description" rows="6" required="" value="{{$product->description}}">

                    @error('description')
                    <div class="text-denger">{{ $message }}</div>
                @enderror


                </div>
                    <div class="mt-6">

                        <input type="submit" value="Submit" class="btn-submit">
                        <input type="reset" value="Reset" class="btn-cancel">



                    </div>
                </form>
            </div>
        </div>
    </div>

</main>


@endsection
