<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Waifu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $data = Session::get('user');
        return view('User.welcome', compact('data'));
    }

    public function doc(){
        $data = Session::get('user');
        $lenght = Waifu::count();
        $waifu = Waifu::where('id', rand(1, $lenght))->get();
        return view('User.doc', compact('data', 'waifu'));
    }
}
