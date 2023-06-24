<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{
    public function shop_page(){

        
        $user=Auth::user();
        $userid=$user->id;
        $shops =Shop::Where('user_id','=',$userid)->get();
        return view('content.admin.pages.store.store_pages',compact('shops'));
    }
    
    public function add_shop(Request $request)
    {

        $request->validate([
            
                 
            'title' => 'string|required',
            'location' => 'string|required',
            'owner' => 'string|required',
            'shop' => 'string|required',
            'description' => 'string|required',
            'image' => 'image|file|required|max:5120',
       
         
            
         ],
         
         
         [
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
            
            'location.string ' => 'location Mustbe a string ',
            'location.required ' => 'location Mustbe a required ',
            
            'owner.string ' => 'owner Mustbe a string ',
            'owner.required ' => 'owner Mustbe a required ',

            'shop.string ' => 'shop Mustbe a string ',
            'shop.required ' => 'shop Mustbe a required ',
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
        
                   
             ]
         );
        
   
         $user=Auth()->user();
         $userid=$user->id;
         $name=$user->name;
         $email=$user->email;

     
          // image file name
          $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
          // move the  image
          $request->image->move(public_path('storage/shop'), $file_name);
     
     
          $data = [
       
            'name' =>$name,
            'email' =>$email,
            'user_id' =>$userid,

     
            'title' =>$request->title,
            'shop' =>$request->shop,
            'location' =>$request->location,
            'owner' =>$request->owner,
            'description' =>$request->description,
            'image' =>$file_name,
         
          ];
       

      
       
       
       shop::create($data);
     


         return redirect()->back()->with('message','shop-added successfully');
 }
 
 

    


    
    public function delete_shop($id)
    {

        $shop=shop::find($id);


        $image_path =public_path('storage/shop/'.$shop->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $shop->delete();

        return redirect()->back()->with('message','shop deleted successfully');
            
        }
        
        
        
        public function update_shop($id)
        {
    

           
        $shop=shop::find($id);

            return view('content.admin.pages.store.store_update', compact('shop'));
                
            }
            
            

            public function update_shop_confirm(Request $request,  $id)
            {
                $request->validate([
            
                 
            'title' => 'string|required',
            'location' => 'string|required',
            'owner' => 'string|required',
            // 'shop' => 'string|required',
            'description' => 'string|required',
            'image' => 'image|file|required|max:10240',
    
            
         ],
         
         
         [
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
            
            'location.string ' => 'location Mustbe a string ',
            'location.required ' => 'location Mustbe a required ',
            
            'owner.string ' => 'owner Mustbe a string ',
            'owner.required ' => 'owner Mustbe a required ',

            'shop.string ' => 'shop Mustbe a string ',
            'shop.required ' => 'shop Mustbe a required ',
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10240KB',
            
        
                   
             ]
         );   $get_data = shop::where('id', $id)->first();
         $image_name =  $get_data->image;
      
       
       
       
         if($request->hasFile('image')){
       
           if(File::exists(public_path('storage/shop/') . $image_name)){
             File::delete(public_path('storage/shop/') . $image_name);
       
           }
       
       
         // image file name
            $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
         // move the  image
            $request->image->move(public_path('storage/shop'), $file_name);
       
         }else{
           $file_name = $get_data->image;
         }
       
       
     
 
       $data = [
           
        'title' =>$request->title,
        'shop' =>$request->shop,
        'location' =>$request->location,
        'owner' =>$request->owner,
        'description' =>$request->description,
        'image' =>$file_name,
       ];
    
 
   
    
    
        shop::findOrFail($id)->update($data);
 
 
                      
     return redirect()->back()->with('message','shop updated successfully');
      
              
    }


                 
            public function shop_details($id){ 


                   $shop=shop::find($id);

                return view('content.users.pages.shop_details',compact('shop'));
              }
             
}
