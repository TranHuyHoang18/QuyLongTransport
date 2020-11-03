<?php

namespace App\Http\Controllers\QTV;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QTVLoginController extends Controller
{
    use AuthenticatesUsers;
    public function showLoginForm() {

        return view('qtv.auth.login');
    }
    public function login(Request $request) {
        $this->validate($request, array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        ));
        // Đăng nhập
        if (Auth::guard('qtv')->attempt(
            ['email' => $request->email, 'password' => $request->password],  $request->remember
        )) {
            // nếu đăng nhập thành công thì chuyển hướng về view dashboard của admin
            return redirect()->intended(route('qtv'));
        }

        // nếu đăng nhập thất bại thì quay trở về form đăng nhập
        // với giá trị của 2 ô input cũ là email và remember
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function logout() {
        Auth::guard('qtv')->logout();
        return redirect()->route('qtv.auth.login');
    }
}
