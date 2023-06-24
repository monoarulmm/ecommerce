<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use PDF;
use Notification;
use App\Notifications\ProductOrderNotification;


class OrderController extends Controller
{
    public function cash_order()
{
  $user=Auth::user();
  $userID = $user->id;
  // dd($userID);
        $data=cart::where('user_id', '=',$userID)->get();
        // dd($data);
        foreach($data as $data)
        {
          $order=new order;
          $order->name=$data->name;
          $order->email=$data->email;
          $order->phone=$data->phone;
          $order->address=$data->address;
          $order->user_id=$data->user_id;

          $order->product=$data->product;
          $order->quantity=$data->quantity;
          $order->price=$data->price;
          $order->image=$data->image;
          $order->product_id=$data->product_id;
          $order->payment_status='cash on delivery';
          $order->delivery_status='processing';
          $order->save();
          $cart_id=$data->id;
          $cart=cart::find($cart_id);
          $cart->delete();

        
        }

        
        return redirect()->back()->with('message','We Recived Your Order . We will Connect with you  soon');
}



public function show_order(){

    if(Auth::id())
  
  
    {
  
  
      $user=Auth::user();
      $userID=$user->id;
      $orders=order::where('user_id','=',$userID)->get();
  
          return view('content.users.pages.order.show_order',compact('orders'));
    }
    else{
      return redirect('login');
     }
  
  }
  
  
   public function cancel_order($id)
   {
  
    $order=order::find($id);
    $order->delivery_status='cancelled  Order';
    $order->delete();
  
    return redirect()->back()->with('message','Ordered Cancel Successfully');
  
  
  
   }



//    admin

 public function order()
{
  if(Auth::id())
  {
    $user=Auth::user(); 
    $id=Auth::user()->id;
    $orders=Order::all();
 
  
    return view ('content.admin.pages.order.my_order',compact('orders'));
  }
  else{
  
      return redirect('login');
   }

}


public function delivered($id)
{
    $order = order::find($id);
    $order->delivery_status="delivered";
    $order->payment_status='Paid';
    $order->save();

    return redirect()->back();
}


public function print_pdf($id){

  $order=order::find($id);

 $pdf=PDF::loadview('content.admin.print_pdf',compact('order'));
 return $pdf->download('order_details.pdf');

}
public function send_email($id){


  $order=order::find($id);
 return view('content.admin.email_info',compact('order'));

}
public function send_user_email(Request $request,$id){


  $order=order::find($id);

  $details= [

    'greeting'=>$request->greeting,
    'firstline'=>$request->firstline,
    'lastline'=>$request->lastline,
    'url'=>$request->url,

    'body'=>$request->body,
    'button'=>$request->button,

  ];

    Notification::send($order,new ProductOrderNotification($details));
 return view('content.admin.email_info',compact('order'));

}


}
