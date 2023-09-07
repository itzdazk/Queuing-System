<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->active) {

                $role = $user->role->name;

                if ($role == 'admin') {
                    return redirect()->intended('/devices');
                } else {
                    return redirect()->intended('/regisnumber/create');
                }
            } else {
                // Tài khoản đã bị vô hiệu hóa
                return redirect()->back()->with('error', 'Tài khoản bị vô hiệu hóa.');
            }
        }

        return redirect('/login')->with('error', 'Sai mật khẩu hoặc tên đăng nhập.');
    }

    public function showVerifyEmail()
    {
        return view('auth.verify-email');
    }

    public function verifyEmail(Request $request)
    {
        $emailRequest = $request->input('email');

        $foundUser = User::where('email', $emailRequest)->first();
        if ($foundUser) {
            $userId = $foundUser->id;
            return view('auth.reset-password', compact('userId'));
        }

        return redirect('/verify-email')->with('error', 'Không tìm thấy Email.');
    }

    public function showResetPassword()
    {
        return view('auth.reset-password');
    }

    public function resetPassword(Request $request)
    {
        $password = $request->input('password');
        $cfpassword = $request->input('cf-password');

        $user = User::find($request->input('userId'));
        if ($password == $cfpassword && $user) {
            $user->password = Hash::make($password);
            $user->save();
            return redirect('/login')->with('error', 'Đổi mật khẩu thành công.');
        }

        return redirect('/reset-password')->with('error', 'Mật khẩu nhập lại không đúng.');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function userLog()
    {
        return view('users.user-log');
    }

    public function showUserInfo()
    {
        $user = Auth::user();
        return view('auth.user-info', compact('user'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
