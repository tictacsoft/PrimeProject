<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\JobRequest;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register($url = null)
    {

        if ($url == 'freelancer') {
            return view('frontend.auth.components.freelancer');
        } else if ($url == 'clients') {
            return view('frontend.auth.components.clients');
        } else if ($url == 'supplier') {
            return view('frontend.auth.components.supplier');
        } else {
            return view('frontend.auth.register');
        }
    }

    public function forgotpassword()
    {
        return view('frontend.auth.forgotpassword');
    }

    public function dashboard()
    {
        return view('frontend.dashboard.index');
    }

    public function profile()
    {
        return view('frontend.profile.index');
    }

    public function getcompany(Request $request)
    {
        $data = Company::select("name")
            ->where('name', 'LIKE', '%' . $request->get('query') . '%')
            ->take(10)
            ->get();

        return response()->json($data);
    }
}
