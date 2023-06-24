@section('title', 'product_pages')

@extends('layouts.admin')
@section('content')

<main class="w-full flex-grow p-6">
    <h1 class="w-full text-3xl text-black pb-6"> Categories</h1>



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
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i>Product Form
            </p>
            <div class="leading-loose">
                <form action="{{ url('add_product') }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add Product Name</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="product" type="text"
                            required="" placeholder="Your product Name">

                        @error('product')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product title</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="title" type="text"
                            required="" placeholder="Your product title">

                        @error('title')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">ADD Product Return days</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="return" type="text"
                            required="" placeholder="return days with product">

                        @error('return')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Regular Price</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="regular_price" type="text"
                            required="" placeholder="Price In Product">

                        @error('regular_price')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Color</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="color" type="text"
                            required="" placeholder="red,green,black">

                        @error('color')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Size</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="size" type="text"
                            required="" placeholder="M,L,XL,XXL">

                        @error('size')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Warranty</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="warranty" type="text"
                            required="" placeholder="1 Year warranty">

                        @error('warranty')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Tag</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="tag" type="text"
                            required="" placeholder="Femail, Mail">

                        @error('tag')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Authentic</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="authentic" type="text"
                            required="" placeholder="100% Pure">

                        @error('authentic')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Sale_Price</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="sale_price" type="text"
                            required="" placeholder="Your product sale price">

                        @error('sale_price')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Percentage Sale</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="sale_percent" type="text"
                            required="" placeholder="Your product percenteg sale">

                        @error('sale_percent')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="mt-3">
                        <label class="text-sm text-gray-600"  >Product Cetagory :  </label>
                         <select name="category" class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" mt-10">
                            <option value="" selected="">Add a cetagory</option>
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
                            <option value="" selected="">Add a Shop</option>
                            @foreach ($shops as $shop) 

                                <option value="{{$shop->shop}}" >{{$shop->shop}}</option>
                            @endforeach
                         </select>

                         
                        @error('shop_id')
                        <div class="text-denger">{{ $message }}</div>
                      @enderror
                       
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Key</label></label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="SKU" type="text"
                            required="" placeholder="product validate">

                        @error('SKU')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Stock_status</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="stock_status" type="text"
                            required="" placeholder="Your product">

                        @error('stock_status')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Brand</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="featured" type="text"
                            required="" placeholder="Your product Brand /Non Brand">

                        @error('featured')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Product Quantity</label>
                        <input class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded" name="quantity" type="text"
                            required="" placeholder="product quantity">

                        @error('quantity')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">product Image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="image" type="file"
                            required="">
                            @error('image')
                            <div class="text-denger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">product 2nd image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="images" type="file"
                            required="">

                            @error('images')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">product 2nd image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="img" type="file"
                            required="">

                            @error('img')
                            <div class="text-denger">{{ $message }}</div>
                          @enderror
                    </div>


                    <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="message">Description</label>
                    <textarea class="w-full px-5 py-3 text-gray-700 bg-gray-200 rounded"  name="description" rows="6" required="" placeholder="Your product _details.."></textarea>

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


        <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Table Example
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                             Product
                            </th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="/storage/product/{{ $product->image}}" alt="image">"

                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $product->title }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-10 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center gap-8">
                                        <div class=" w-10 h-10">

                                            <a class="btn-redirect" href="{{ url('update_product', $product->id) }}">
                                                Edit</a>
                                        </div>
                                        <div class="ml-3">

                                            <a class="btn-delete" href="{{ url('delete_product', $product->id) }}">
                                                X</a>
                                        </div>
                                    </div>
                                </td>



                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>


    </div>

</main>




@endsection
