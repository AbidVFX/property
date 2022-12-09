<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


        $owners = User::where('type','Owner')->count();
        $users = User::whereNotIn('type',['Owner', 'Tenant'])->count();
        $tenants = User::where('type','Tenant')->count();
        return view('home',compact('owners','tenants','users'));
    }
}
