<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function check_register()
    {
        request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|same:password_confirmation',
                'user_type' => 'required|in:Administrator,Student,Marketing Coordinator,University Marketing Manager',
                'faculty' => 'required|in:Business administration,Graphics and Digital Design,Information technology',
            ]

        );
        $request = request()->only('name', 'email', 'password', 'user_type', 'faculty');
        $request['password'] = bcrypt(request('password'));
        User::create($request);

        return redirect()->route('admin.login');
    }

    public function check_login()
    {
        request()->validate(
            [
                'email' => 'required|email|exists:users',
                'password' => 'required|min:6',
            ]
        );
        $credentials = request()->only('email', 'password');

        if (Auth()->attempt($credentials)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không chính xác. Vui lòng thử lại.');
        }
    }
}
