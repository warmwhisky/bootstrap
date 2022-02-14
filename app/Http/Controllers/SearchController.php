<?php

namespace App\Http\Controllers;

use App\Models\CustomerEmails;
use App\Models\Products;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SearchController extends Controller
{

    public static function products(Request $request) {

        $products = Products::where('shop',1)->get();

        return view('products',compact('products'));
    }


}
