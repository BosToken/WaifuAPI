<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        $data = Session::get('user');
        return view('Admin.dashboard', compact('data'));
    }
}
