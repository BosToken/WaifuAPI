<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Waifu;
use App\Models\Settings;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function waifu(){
        $lenght = Waifu::count();
        // $waifu = Waifu::where('id', rand(1, $lenght))->get("name");
        $waifu = Waifu::all()->random();
        return $waifu;
    }

    public function viewWaifu(){
        $data = Session::get('user');
        $waifu = Waifu::get();
        $setting = Settings::get();
        return view('Admin.Read.waifu', compact('waifu', 'data', 'setting'));
    }

    public function createWaifu(){
        $data = Session::get('user');
        $setting = Settings::get();
        return view('Admin.Create.waifu', compact('data', 'setting'));
    }

    public function storeWaifu(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'anime' => 'required',
            'picture' => 'required',
            'grade' => 'required'
        ]);
        Waifu::create([
            'name' => $request->name,
            'anime' => $request->anime,
            'picture' => $request->picture,
            'grade' => $request->grade
        ]);
        return redirect()->action([DataController::class, 'createWaifu']);
    }

    public function detailWaifu(Request $request, $id){
        $data = Session::get('user');
        $waifu = Waifu::where('id', $id)->get();
        $setting = Settings::get();
        return view('Admin.Read.waifuDetail', compact('data', 'waifu', 'setting'));
    }

    public function editWaifu(Request $request, $id){
        $data = Session::get('user');
        $waifu = Waifu::where('id', $id)->get();
        $setting = Settings::get();
        return view('Admin.Update.waifuEdit', compact('data', 'waifu', 'setting'));
    }

    public function updateWaifu(Request $request, $id){
        Waifu::where('id', $id)->update([
            'name' => $request->name,
            'picture' => $request->picture,
            'anime' => $request->anime,
            'grade' => $request->grade
        ]);

        return back();
    }

    public function deleteWaifu($id){
        Waifu::where('id', $id)->delete();
        return redirect()->action([DataController::class, 'viewWaifu']);
    }
    
}
