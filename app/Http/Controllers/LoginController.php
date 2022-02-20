<?php
namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Settings;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        $data = Session::get('user');
        $setting = Settings::get();
        return view('User.login', compact('data', 'setting'));
    }

    public function check(Request $request){
        $data = User::where('email', $request->email)->where('password', $request->password)->first();
        if($data){
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data);
            return redirect()->action([AdminController::class, 'dashboard']);
        }
        else{
            // return $data;
            return redirect()->action([LoginController::class, 'login']);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect()->action([LoginController::class, 'login']);
    }

    public function debug(Request $request){
        $data = Session::get('user')->role;
        return $data;
    }
}
