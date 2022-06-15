<?php

namespace App\Http\Controllers;
use App\Models\bottle;
use App\Models\profile;
use App\Models\order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    function shopshow(){
        return view('Shoppage');

        // $obj=new bottle;
        // return $obj->all();
      
    }
    function showbottles(Request $req)
    {
        $db=new bottle();
        $data=$db->all();
      
        return view('Shoppage',['data'=>$data]);
        
    }
    function addbottle(Request $req){


       
        $btobj=new bottle;
        $btobj->Product_id=$req->prdid;
        $btobj->Product_name=$req->prdnam;
        $btobj->Product_details=$req->prdit;
        $btobj->Product_price=$req->prdpr;
        $btimg=$req->file('prdimg')->store('btimg','public');
        $btobj->Product_image=$btimg;
        $btobj->save();
        $msg=session()->flash('success','Product add succesfully!');
        return redirect('/Shop');



    }
    function AddintoBucket(request $req,$id)
    {
       
        $Product=bottle::where('Product_id',$id)->first();
        $cart=session()->get('cart',[]);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
           
        }
        else
        {
            $cart[$id]=[
                "Pro_id"=>$Product->Product_id,
                "Pro_name"=>$Product->Product_name,
                "Pro_price"=>$Product->Product_price,
                "quantity"=>1
            ];
            
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product add to bucket succesfully!');
    
    }
    function ViewBucket()
    {
        $collect=0;
        return view('Bucket',['collect'=>$collect]);
    }
    function BuyNowCall(request $req,$pid)
    {
        //return $pid;
        $user=session()->get('AuthUser');
        $customer=profile::where('Email',$user)->first();
        $prdobj=bottle::where('Product_id',$pid)->first();
        return view('buyProduct',['Product'=>$prdobj],['customer'=>$customer]);
    }
    function PlaceOrder(request $req)
    {
       $order_obj=new order;
       $order_obj->Product_id=$req->pro_id;
       $order_obj->Buyer_Email=$req->cust_name;
       $order_obj->Buyer_Phone=$req->cust_con;
       $order_obj->Buyer_Address=$req->cust_add;
       $order_obj->Order_date=$req->OrderDate;
       $order_obj->Delivery_date=$req->DeliveryDate;
       $order_obj->Total_Pay=$req->total_pay;
       $order_obj->save();
       $order_msg=session()->flash('orderdone','Your order place succesfully thanks you!');
       return redirect('Profile');

    }
    function AdminToken($token)
    {
        
        return view('addbottle',['AdminToken'=>$token]);
    }
 
    
    function ApiCall(request $req)
    {
        $data=Http::get("https://jsonplaceholder.typicode.com/users")->collect();
        // $getdata=$data::paginate(5);
         //$jsondecode=json_decode($data);
        //return $data[1];
        
        return view('apidata',['collections'=>$data]);
    }
}
