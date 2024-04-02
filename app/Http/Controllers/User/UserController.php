<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function check_register()
    {
        request()->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|same:password_confirmation',
                'user_type' => 'required|in:student',
                'faculty' => 'required|in:Business administration,Graphics and Digital Design,Information technology',
            ]

        );
        $request = request()->only('name', 'email', 'password', 'user_type', 'faculty');
        $request['password'] = bcrypt(request('password'));
        User::create($request);

        return redirect()->route('user.login');
    }

    public function check_login()
    {
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6',
        ]);

        $credentials = request()->only('email', 'password');

        if (Auth()->attempt($credentials)) {
            $user = Auth()->user();

            // Kiểm tra vai trò của người dùng và chuyển hướng tương ứng
            if ($user->user_type === 'Administrator') {
                return redirect()->route('admin.home');
            } elseif ($user->user_type === 'Student') {
                return redirect()->route('student.index');
            } else {
                return redirect()->route('admin.home');
            }
        } else {
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không chính xác. Vui lòng thử lại.');
        }
    }

    public function index()
    {
        /* $user = user::where('user_type', 'student')->get();*/
        $user = user::orderby('id', 'DESC')->paginate(50);

        return view('admin.action.user', compact('user')); /*->with('users', $user);*/
    }

    public function create()
    {
        return view('admin.action.create');
    }

    public function store()
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

        return redirect()->route('user.index');
    }

    public function edit(user $user)
    {
        return view('admin.action.edit', compact('user'));
    }

    public function update(user $user)
    {
        request()->validate([
            'user_type' => 'required|in:administrator,student,Marketing Coordinator,University Marketing Manager', 'Guest',
            'faculty' => 'required|in:Business administration,Graphics and Digital Design,Information technology',
        ]);
        $data = request()->only('user_type', 'faculty');
        $user->update($data);

        return redirect()->route('user.index');
    }

    public function destroy(user $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }

    public function home()
    {
        return view('welcome');
    }
}
