<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAuthController extends Controller
{
    public function sellerreg() 
    {
        return view('auth/sellerauth');
    }

    public function sellerPost(Request $request)
    {
        $seller = new Seller();

        $seller->seller_name = $request->seller_name;
        $seller->seller_type = $request->seller_type;
        $seller->seller_address = $request->seller_address;
        $seller->business_name = $request->business_name;
        $seller->shop_name = $request->shop_name;
        $seller->pickup_address = $request->pickup_address;
        $seller->email = $request->email;
        $seller->contact = $request->contact;
        $seller->phone_no = $request->phone_no;
        $seller->password = $request->password;
        $seller->confirm_password = $request->confirm_password;

        $seller->save();

        return back()->with('success', 'Register successfully');
    }

    public function sellerLogin() 
    {
        return view('auth/login');
    }

    public function sellerLoginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credentials)) {
            return redirect('/homee')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function sellerLogout()
    {
        Auth::logout();
 
        return redirect('/landing');
    }
}
