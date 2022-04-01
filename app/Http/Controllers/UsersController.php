<?php

namespace App\Http\Controllers;

use App\Models\CustomerEmails;
use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{

    public static function registration() {

        return view('registration');
    }

    public static function registry_report() {

        $users = users::get();

        return view('registry_report', compact('users'));
    }

    public static function deleteUsers($user_id): RedirectResponse {

        Users::where('id', $user_id)->delete();
        return Redirect::back();
    }

    public static function editUsers($user_id) {

        $user = Users::where('id', $user_id)->first();

        return view('edit_registry_report', compact('user'));
    }

    public static function registrationPost(Request $request): RedirectResponse {

//dd($request);
       // Users::create($request->except('_token'));


       $new_registration = new Users();
        $new_registration->id = $request->input('id');
        $new_registration->name = $request->input('name');
        $new_registration->email = $request->input('email');
        $new_registration->password = $request->input('password');
//        $new_registration->address = $request->input('address');
//        $new_registration->occupation = $request->input('occupation');
//        $new_registration->gender = $request->input('gender');
//        $new_registration->city = $request->input('city');
//        $new_registration->state = $request->input('state');
//        $new_registration->zip = $request->input('zip');
//        $new_registration->check = $request->input('check');

        $new_registration->save();

        return Redirect::to('/registry_report');

    }

    public static function editUserPost(Request $request) {

        Users::where('id', $request->input('user_id'))
            ->update([
                "id" => $request->input('id'),
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "password" => $request->input('password'),
//                "address" => $request->input('address'),
//                "occupation" => $request->input('occupation'),
//                "gender" => $request->input('gender'),
//                "city" => $request->input('city'),
//                "state" => $request->input('state'),
//                "zip" => $request->input('zip'),
//                "check" => $request->input('check'),
            ]);

        return Redirect::to('/registration');
    }




}
