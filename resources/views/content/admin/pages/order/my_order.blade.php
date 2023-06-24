@section('title', 'order_list')
<base href="/public">
@extends('layouts.admin')
@section('content')

<main class="w-full flex-grow p-6">

  <div class="w-full mt-12">
      <p class="text-xl pb-3 flex items-center">
          <i class="fas fa-list mr-3"></i> Latest Reports
      </p>
      <div class="bg-white overflow-auto">
          <table class="min-w-full bg-white">
              <thead class="bg-gray-800 text-white">
                  <tr>
                      {{-- <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                      <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                      <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th> --}}

                      <th>Name</th>
                      <th>Email</th> 
                      <th>Adress</th> 
                      <th>phone</th> 
                      <th>Product</th> 
                      <th>Quantity</th> 
                      <th>Price</th> 
                      <th>Payment status</th> 
                      <th>Delivery status</th> 
                      <th>Image</th> 
                      <th>Deliver</th> 
                      <th>Print Pdf</th> 
                      <th>SendEmail</th> 
                  </tr>

              </thead>
              <tbody class="text-gray-700">

                @foreach ($orders as $order )
                  <tr>

                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>

                    <td>
                      <img src="storage/product/{{$order->image}}" alt="image">
                    </td>
                
                    <td>
                      
                    @if($order->delivery_status == 'processing')
                      <a onclick="return confirm('Are Your this product delivered')" class="btn-redirect" href="{{url('delivered',$order->id)}}">Deliverd</a>
                
                      @else
                        <h1 style="color:aqua">Delivered</h1>
                
                      @endif
                
                    </td>
                
                    <td>
                      <a href="{{url('print_pdf',$order->id)}}" class="btn-redirect">Print Pdf</a>
                    </td>
                    <td>
                      <a href="{{url('send_email',$order->id)}}" class="btn-redirect">Send Email</a>
                    </td>
                 </tr>
                @endforeach
          
            
              </tbody>
          </table>
      </div>
  </div>
</main>

@endsection

