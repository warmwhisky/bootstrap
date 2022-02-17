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

        $glass_type = Products::select('mother_cat_1','glass_type_1')
            ->where('shop',1)
            ->groupBy('glass_type_1')
            ->get();

        if($request->input('filter_glasses')) {
            $products = Products::where('shop',1)
                ->where('glass_type_1', $request->input('filter_glasses'))
                ->get();

        } else {
            $products = Products::where('shop', 1)->get();
        }

        if($request->input('filter_animals')) {
            $products = Products::where('shop',1)
                ->where('animal_type', $request->input('filter_animals'))
                ->get();
        } else {
            if(!$request->input('filter_glasses')) { //Overrites so that it cannot appear
                $products = Products::where('shop', 1)->get();
            }
        }

        return view('products',compact('products','animal_types','glass_type'));


    }







    }
