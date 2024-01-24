<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SellerAuthController extends Controller
{
    public function sellerreg() 
    {
        return view('auth/sellerauth');
    }

}
