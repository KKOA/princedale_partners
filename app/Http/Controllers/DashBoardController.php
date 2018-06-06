<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;

class DashBoardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());
        // echo $user;
        return view('dashboard',compact('user'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }

    
}
