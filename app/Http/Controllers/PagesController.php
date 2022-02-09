<?php

namespace App\Http\Controllers;

use App\Models\CustomerEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public static function about() {

        return view('about');
    }

    public static  function contact(){

        return view('contact');
    }
}
