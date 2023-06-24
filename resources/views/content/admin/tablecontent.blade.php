
@section('title', 'dashboard')

@extends('layouts.admin')
@section('content')


<main class="w-full flex-grow p-6">
  <h1 class="text-3xl text-black pb-6">Tabbed Content</h1>

  <div class="w-full mt-6" x-data="{ openTab: 1 }">
      <div>
          <ul class="flex border-b">
              <li class="-mb-px mr-1" @click="openTab = 1">
                  <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">shop</a>
              </li>
              <li class="mr-1" @click="openTab = 2">
                  <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Shop</a>
              </li>
              <li class="mr-1" @click="openTab = 3">
                  <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Catego</a>
              </li>
              <li class="mr-1" @click="openTab = 4">
                  <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Cat</a>
              </li>
          </ul>
      </div>
      <div class="bg-white p-6">
          <div id="" class="" x-show="openTab === 1">
            <main class="w-full flex-grow p-6">
              <div class="w-full mt-12">
                  <p class="text-xl pb-3 flex items-center">
                      <i class="fas fa-list mr-3"></i> Category_list
                  </p>
                  <div class="bg-white overflow-auto">
                      <table class="min-w-full bg-white">
                          <thead class="bg-gray-800 text-white">
                              <tr>
                                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                  <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                  <th class="text-left py-3 px-4 uppercase font-semibold text-sm">shop</th>
                                  </th>
                                  <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Delete</th>
                              </tr>
                          </thead>
                          <tbody class="text-gray-700">
                              @foreach ($categories as $category)
                                  <tr class="bg-gray-200">
                                      <td class="w-1/3 text-left py-3 px-4">{{ $category->name }}</td>
                                      <td class="w-1/3 text-left py-3 px-4">{{ $category->email }}</td>
                                      <td class="w-1/3 text-left py-3 px-4">
                                          <div class="flex items-center">
                                              <div class="flex-shrink-0 w-10 h-10">
                                                  <img class="w-full h-full rounded-full"
                                                      src="/storage/category/{{ $category->image }}" alt="image">
      
                                              </div>
                                              <div class="ml-3">
                                                  <p class="text-gray-900 whitespace-no-wrap">
                                                      {{ $category->title }}
                                                  </p>
                                              </div>
                                          </div>
                                      </td>
      
                                      <td class="w-1/3 text-left py-3 px-4">
                                          <a class="btn-delete" href="{{ url('delete_category', $category->id) }}">
                                              X</a>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </main>
          </div>
          <div id="" class="" x-show="openTab === 2">
            <main class="w-full flex-grow p-6">
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Shop_list
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">shop</th>
                                    </th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($shops as $shop)
                                    <tr class="bg-gray-200">
                                        <td class="w-1/3 text-left py-3 px-4">{{ $shop->name }}</td>
                                        <td class="w-1/3 text-left py-3 px-4">{{ $shop->email }}</td>
                                        <td class="w-1/3 text-left py-3 px-4">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="/storage/shop/{{ $shop->image }}" alt="image">
        
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $shop->title }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
        
                                        <td class="w-1/3 text-left py-3 px-4">
                                            <a class="btn-delete" href="{{ url('delete_shop', $shop->id) }}">
                                                X</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
          </div>
          <div id="" class="" x-show="openTab === 3">
              Duis imperdiet ullamcorper nibh, sed euismod dolor facilisis sit amet. Etiam quis cursus lorem. Vivamus euismod accumsan neque lobortis tempus. Praesent nec lacinia odio, a dictum risus. Sed eget dictum turpis, vitae iaculis orci. Vivamus laoreet consequat velit, non viverra diam pulvinar a. Aliquam bibendum ligula lacus, ac convallis ipsum hendrerit ut. Suspendisse rutrum dui libero, non aliquam lectus lobortis at. Donec gravida finibus sollicitudin. Nulla ut metus finibus purus vehicula porttitor. Fusce id sem non nisl pulvinar scelerisque.
          </div>
          <div id="" class="" x-show="openTab === 4">
              Mauris viverra viverra dolor quis gravida. Duis pharetra felis id tellus faucibus pulvinar. Integer non ligula lobortis, hendrerit est eget, maximus sapien. Suspendisse vel nibh feugiat, porta ex et, dignissim diam. Maecenas finibus consectetur efficitur. Sed tempus vehicula interdum. Nam porttitor id risus a ultrices. Proin mi nulla, ultricies eu ipsum vitae, fermentum congue nunc. Phasellus a dictum massa. Nunc quis lacus et ex vulputate molestie ac eget est. Integer porttitor placerat quam, eu convallis sem tristique sit amet. Nam at risus fringilla, pharetra mauris tincidunt, imperdiet nisi.
          </div>
      </div>
  </div>
</main>


@stop