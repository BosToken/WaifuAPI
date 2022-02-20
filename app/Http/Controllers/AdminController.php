<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Settings;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        $data = Session::get('user');
        $setting = Settings::get();
        return view('Admin.dashboard', compact('data', 'setting'));
    }

    public function agentSettings(){
        $agent = User::where('role', 2)->get();
        $data = Session::get('user');
        $setting = Settings::get();
        return view('Admin.agent', compact('data', 'agent', 'setting'));
    }

    public function webSettings(){
        $data = Session::get('user');
        $setting = Settings::get();
        return view('Admin.settings', compact('data', 'setting'));
    }

    public function updateWebTitle(Request $request, $id){
        Settings::where('id', $id)->update([
            'web_title' => $request->web_title,
        ]);
        return back();
    }

    public function updateEndpoint(Request $request, $id){
        Settings::where('id', $id)->update([
            'endpoint' => $request->endpoint,
        ]);
        return back();
    }

    public function updateCorp(Request $request, $id){
        Settings::where('id', $id)->update([
            'corp_name' => $request->corp_name,
        ]);
        return back();
    }
}
