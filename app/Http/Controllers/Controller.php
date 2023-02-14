<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Settings;
use App\Models\Waifu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $setting = Settings::get();
        $data = Session::get('user');
        $lenght = Waifu::count();
        $waifu1 = Waifu::all()->random();
        $waifu2 = Waifu::all()->random();
        $waifu3 = Waifu::all()->random();
        $waifu4 = Waifu::all()->random();
        return view('User.welcome', compact('data', 'setting', 'waifu1', 'waifu2', 'waifu3', 'waifu4'));
    }

    public function doc(){
        $setting = Settings::get();
        $data = Session::get('user');
        $lenght = Waifu::count();
        $waifu = Waifu::where('id', rand(1, $lenght))->get();
        return view('User.doc', compact('data', 'waifu', 'setting'));
    }
}
