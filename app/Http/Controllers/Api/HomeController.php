<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        } else if ($url == 'company') {
            return view('frontend.auth.components.company');
        } else {
            return view('frontend.auth.register');
        }
    }

    public function forgotpassword(){
        return view('frontend.auth.forgotpassword');
    }

    public function dashboard(){
        $jobRequests = JobRequest::where('user_id', auth::id())->get();
        return view('frontend.dashboard.index', compact('jobRequests'));
    }

    public function profile(){
        return view('frontend.profile.index');
    }

}
