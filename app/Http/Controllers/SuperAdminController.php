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
}
