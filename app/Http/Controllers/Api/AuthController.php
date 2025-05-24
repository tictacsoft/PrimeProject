<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            Session::flash('success', 'Login Success');
            return redirect('/');
        } else {
            Session::flash('success', 'Email and password wrong');
            return redirect('/login');
        }
    }

    public function signup(Request $request)
    {

        $role = $request->role;
        $name = $request->name;
        $email = $request->email;
        $phoneno = $request->phoneno;
        $password = $request->password;
        $company = $request->company;

        if ($role == "freelance") {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phoneno' => $phoneno,
                'role' => $role,
                'password' => Hash::make($password),
            ]);

        } else if ($role == "client") {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phoneno' => $phoneno,
                'role' => $role,
                'company_id' => $company,
                'password' => Hash::make($password),

            ]);
        }else if ($role == "supplier") {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phoneno' => $phoneno,
                'role' => $role,
                'company_id' => $company,
                'password' => Hash::make($password),
            ]);
        }

        if ($user) {
            Session::flash('success', 'Registered Success');
        }else{
            Session::flash('success', 'Registered Failed');
        }

        return redirect('/');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
