<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\Category;
Use App\Models\Product;
Use App\Models\Shop;
Use App\Models\Cart;
Use App\Models\Wishlist;

class HomeController extends Controller
{
    public function index(){


        if(Auth::id())
        {
          $id=Auth::user()->id;
          $carts=cart::where('user_id','=' ,$id)->get();
          $total_cart=Cart::where('user_id','=' ,$id)->get()->count();

          
          $wishlists=Wishlist::where('user_id','=' ,$id)->get();
          $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();

          
          $categories=Category::Latest()->take(8)->get();
          $shops=Shop::Latest()->take(8)->get();


          $products=product::Latest()->take(8)->get();
          $nproducts = Product::Latest()->take(4)->get();
  
        
          return view('content.users.home',compact('carts','total_cart','total_wishlist','wishlists','categories','shops','products','nproducts'));
        }
        else{


            $categories=Category::Latest()->take(8)->get();
            $shops=Shop::Latest()->take(8)->get();
            
            $products=product::Latest()->take(8)->get();
            $nproducts = Product::Latest()->take(4)->get();
  
            return view('content.users.home',compact('categories','shops','products','nproducts'));
         }
   
    }

    
    public function admindashboard(){
        return view('content.admin.dashboard');
    }
    



    public function tablecontent(){

        $categories = category::all();
        $shops = Shop::all();

        return view('content.admin.tablecontent',compact('categories','shops'));



    }


}
    