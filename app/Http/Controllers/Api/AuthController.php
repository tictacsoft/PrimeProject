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

        if ($role == "freelance") {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phoneno' => $phoneno,
                'password' => Hash::make($password),
            ]);

            $user->assignRole('freelance');
        } else if ($role == "client") {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phoneno = $phoneno;
            $user->password = Hash::make($password);
            $user->save();

            $user->assignRole('client');
        }else if ($role == "supplier") {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phoneno = $phoneno;
            $user->password = Hash::make($password);
            $user->save();

            $user->assignRole('supplier');
        }

        Session::flash('success', 'Registered Success');

        return redirect('/');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
