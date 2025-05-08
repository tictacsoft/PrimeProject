<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function authlogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            return response()->json([
                'code' => 'success'
            ]);
        }else{
            return response()->json([
                'code' => 'error'
            ]);
        }
    }

    public function authlogout(){
        Session::flush();
        Auth::logout();
        return redirect('/admin/login');
    }
}
