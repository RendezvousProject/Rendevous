<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Tainant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerTainantsController extends Controller
{
    public function index()
    {
        $tainents = Tainant::where('user_id', Auth::user()->id)->get();
        return view('customer.tainant.index', compact('tainents'));

    }
}
