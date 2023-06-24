@section('title', 'shop_pages')

@extends('layouts.admin')
@section('content')


<main class="w-full flex-grow p-6">
    <h1 class="w-full text-3xl text-black pb-6"> shop</h1>



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
                <i class="fas fa-list mr-3"></i> shop Form
            </p>
            <div class="leading-loose">
                <form action="{{ url('add_shop') }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add shop</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="shop" type="text"
                            required="" placeholder="Your shop">

                        @error('shop')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add shop title</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="title" type="text"
                            required="" placeholder="Your shop">

                        @error('title')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Owner</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="owner" type="text"
                            required="" placeholder="owner this shop">

                        @error('owner')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add shop Location</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="location" type="text"
                            required="" placeholder="Your shop location">

                        @error('location')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">shop Image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" name="image" type="file"
                            required="">
                    </div>
                    <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="message">Description</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded"  name="description" rows="6" required="" placeholder="Your shop details.."></textarea>

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
                                shop
                            </th>

                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($shops as $shop)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="/storage/shop/{{ $shop->image }}" alt="image">"

                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $shop->title }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-10 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center gap-8">
                                        <div class=" w-10 h-10">

                                            <a class="btn-redirect" href="{{ url('update_shop', $shop->id) }}">
                                                Edit</a>
                                        </div>
                                        <div class="ml-3">

                                            <a class="btn-delete" href="{{ url('delete_shop', $shop->id) }}">
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


