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
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function signup(Request $request)
    {
        $role = $request->role;
        $name = $request->name;
        $email = $request->email;
        $phoneno = $request->phoneno;
        $npwp = $request->npwp;
        $company_name = $request->company_name;
        $password = $request->password;

        if ($role == "freelancer") {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'phoneno' => $phoneno,
                'password' => Hash::make($password),
            ]);

            $user->assignRole('Freelancer');
        } else if ($role == "clients") {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phoneno = $phoneno;
            $user->password = Hash::make($password);
            $user->save();

            $clients = new Clients();
            $clients->user_id = $user->id;
            $clients->company_name = $company_name;
            $clients->npwp = $npwp;
            $clients->save();

            $user->assignRole('Clients');
        }else if ($role == "company") {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->phoneno = $phoneno;
            $user->password = Hash::make($password);
            $user->save();

            $company = new Company();
            $company->user_id = $user->id;
            $company->company_name = $company_name;
            $company->npwp = $npwp;
            $company->save();

            $user->assignRole('Company');
        }

        return redirect('/');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
