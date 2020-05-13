<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{
    /**
     * Show Ajax Register page
     */

    public function getRegister()
    {
        return view('custom/auth/ajax/register');
    }

    /**
     * Validate Ajax Register page
     */

    public function postRegister(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|min:2',
            'password' => 'required|alphaNum|min:6|same:password_confirmation',
        ]);

        if ($validator->fails()) {
            $message = ['errors' => $validator->messages()->all()];
            $response = Response::json($message, 202);
        } else {
            // Create a new user
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user->save();
            Auth::login($user);
            $message = ['success' => 'Thank you for joining us!', 'url' => '/', 'name' => $request->name];
            $response = Response::json($message, 200);
        }
        return $response;
    }

    /**
     * Show Ajax Login page
     */

    public function getLogin()
    {
        return view('custom/auth/ajax/login');
    }

    /**
     * Validate Ajax Login page
     */

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $message = ['errors' => $validator->messages()->all()];
            $response = Response::json($message, 202);
        } else {
            $remember = $request->remember ? true : false;

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {

                $message = ['success' => 'Love to see you here!', 'url' => '/'];

                $response = Response::json($message, 200);
            } else {
                $message = ['errors' => 'Please check your email or password again.'];
                $response = Response::json($message, 202);
            }
        }

        return $response;
    }
}
