<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getSignUp()
    {
        return view('user.signup');
    }

    public function postSignUp(Request $request)
    {

//        $this->validate($request, [
//            'email' => 'required',
//            'password' => 'required'
//        ]);

        if(empty($request['email']) && !empty($request['password'])) {
            notify()->flash('The Email Is Required', 'error');
            return redirect()->back();
        } else if(empty($request['password']) && !empty($request['email'])) {
            notify()->flash('The Password Is Required', 'error');
            return redirect()->back();
        } elseif(empty($request['email']) && empty($request['password'])) {
            notify()->flash('The Password and Email Is Required', 'error');
            return redirect()->back();
        } else {
            notify()->flash('Successfully Signed Up', 'success');
        }

        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
        return redirect('/user/signup');
    }

    public function getSignIn()
    {
        return view('user.signin');
    }

    public function postSignIn(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'],'password' => $request['password']])) {
            if(Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget($oldUrl);
                return redirect()->to($oldUrl);
            }
            return redirect('/user/profile');
        } else {
            notify()->flash('Username Or Password Does not Match', 'error');
            return redirect()->back();
        }
    }

    public function profile()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile',['orders' => $orders]);
    }

    public function logout()
    {
        if(Session::has('oldUrl')) {
            Session::forget('oldUrl');
        }
        Auth::logout();
        return redirect('user/signin');
    }

}
