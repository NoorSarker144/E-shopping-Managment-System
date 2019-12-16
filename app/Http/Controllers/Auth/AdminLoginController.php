<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('admin.signin');
    }

    public function index()
    {
        view('admin.profile');
    }


    public function login(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password])) {
            return redirect('admin');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth('admin')->logout();
        Session::flush();
        return redirect('admin/login');
    }

}
