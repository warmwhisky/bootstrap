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

        $animal_types = Products::select('animal_type')
            ->where('shop',1)
            ->where('animal_type', '!=', '')
            ->groupBy('animal_type')
            ->get();

        if($request->input('filter')) {
            $products = Products::where('shop',1)
                ->where('animal_type', $request->input('filter'))
                ->get();
        } else {
            $products = Products::where('shop',1)->get();
        }

        return view('products',compact('products','animal_types'));



    }





    }
