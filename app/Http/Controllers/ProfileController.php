<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\order;
use Auth;
use Hash;
use Crypt;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    function index()
    {
        $LoginUser=session()->get('AuthUser');
        $ord_obj=DB::select("select * from orders where Buyer_Email='$LoginUser'");
        // return $ord_obj;
        return view('profile',['orderdata'=>$ord_obj]);
    }
    function Logincall(Request $req){

        
       $objpr=profile::where('Email',$req->txeml)->first();
       //return $objpr->Password;
       if(crypt::decrypt($objpr->Password)==$req->txpw)
       {
           $req->session()->put('AuthUser',$req->txeml);
           return redirect("/");
       }
       else
       {
           $notvalid=session()->flash('notvalid',"Plese give correct details!");
           return redirect('/Profile');
       }


    }
    function newuser()
    {
        return view('registerpage');
    }
    function saveuser(Request $req){
       $objdb=new profile;
       $objdb->Email=$req->ademl;
       $objdb->Password=Crypt::encrypt($req->adpwd);
       $objdb->Contanct=$req->adpn;
       $objdb->Address=$req->adadr;
       $objdb->save();
       $msg=session()->flash('msg','Register Succesfully');
       return redirect('Register');
    }
}
