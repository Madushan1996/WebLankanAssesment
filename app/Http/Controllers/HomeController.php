<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Illuminate\Http\Request;

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
        $users = DB::table('user')->select('id', 'name','email','address')->get();
        return view('home',['users'=>$users]);
    }
}
