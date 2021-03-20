<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function create_key(Request $request){
        DB::table('users')->where('id', auth()->user()->id)->update(['client_id'=>$request->client_id, 'lincense_key'=> $request->lincense_key,'lincense_for'=> $request->lincense_for]);
        return view('userinfo');
    }
    public function update_key(Request $request){
        DB::table('users')->where('id', auth()->user()->id)->update(['client_id'=>$request->client_id, 'lincense_key'=> $request->lincense_key,'lincense_for'=> $request->lincense_for]);
        return view('activeLicensePage');
    }
    public function active_key(Request $request){
        $license_key = User::find(auth()->user()->id)->license_key;
        if($request->license_key == $license_key){
            DB::table('users')->where('id', auth()->user()->id)->update(['lincense_key' => 10]); // suppose 10 active license key status code
        }
        return redirect('home');
    }
}
