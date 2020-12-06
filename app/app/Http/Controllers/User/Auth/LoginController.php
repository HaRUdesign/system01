<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    // Guardの認証方法を指定
    protected function guard()
    {
        return Auth::guard('user');
    }

     // ログイン画面
    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    // ログイン処理
    public function authenticate(Request $request)
    {
         $request->validate([
           'user_mail' => 'email|string|required',
           'user_pass' => 'required|string|min:4',
       ]);

       $credentials = $request->only('user_mail', 'user_pass');

        if (Auth::attempt($credentials, true)){
            return redirect(route('user.home'))->with('message', 'ログインしました');
        } else {
            return redirect()->back()->withErrors(array('user_mail' => 'E-mailかPasswordが正しくありません'))->withInput();
        }
    }










    // ログアウト処理
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        return $this->loggedOut($request);
    }


    // ログアウトした時のリダイレクト先
    public function loggedOut(Request $request)
    {
        return redirect(route('user.login'));
    }
}
