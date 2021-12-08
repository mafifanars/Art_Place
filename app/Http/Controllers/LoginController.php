<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $input=$request->all();
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(auth()->attempt(array('email'=> $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->is_admin == 1){
                return redirect()->intended('/');
            }else{
                return redirect()->intended('/');
            }
        } else{
            return back()->with('loginError', 'Login gagal!');;
        }

        // SELECT * FROM 'users' WHERE 'email' = $request->email AND 'password' = request->password
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
