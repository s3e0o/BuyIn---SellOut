<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function sellerdashboard()
    {
        return view('sellerdashboard');
    }

    public function sellersa()
    {
        return view('superadmin/sellersa');
    }

    public function selleracc()
    {
        return view('superadmin/selleracc');
    }

    public function sellersales()
    {
        return view('superadmin/sales');
    }

    public function sellerprofile()
    {
        return view('superadmin/sellerprofile');
    }

    public function buyersa()
    {
        return view('superadmin/buyersa');
    }
}
