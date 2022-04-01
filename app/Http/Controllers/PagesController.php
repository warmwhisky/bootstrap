<?php

namespace App\Http\Controllers;

use App\Models\CustomerEmails;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class PagesController extends Controller
{
    public static function about(Request $request) {

        return view('about');
    }


    public static function contact() {

        return view('contact');
    }

    public static function contactPost(Request $request): RedirectResponse {

        $new_contact = new CustomerEmails();
        $new_contact->name = $request->input('name');
        $new_contact->email = $request->input('email');
        $new_contact->message = $request->input('message');
        $new_contact->save(); //saving to database

        return Redirect::to('/report');

    }


    public static function registration() {

        return view('registration');
    }

    public static function report() {

        $emails = CustomerEmails::get();

        return view('report', compact('emails'));
    }

    public static function deleteEmail($email_id): RedirectResponse {

        CustomerEmails::where('id', $email_id)->delete();
        return Redirect::back();

    }

    public static function editEmail($email_id) {

        $email = CustomerEmails::where('id', $email_id)->first();

        return view('edit_contact', compact('email'));
    }

    public static function editEmailPost(Request $request) {

        CustomerEmails::where('id', $request->input('customer_email_id'))
        ->update([
           "name" => $request->input('name'),
           "email" => $request->input('email'),
           "message" => $request->input('message'),
        ]);

        return Redirect::to('/report');
    }


}


