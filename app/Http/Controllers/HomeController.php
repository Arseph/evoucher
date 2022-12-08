<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voucher;
use Auth;
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
    public function voucher(Request $req) {
        $user_id = Auth::user()->id;
        $voucher = Voucher::where('user_id', $user_id)->get();
        return view('vouchers.home',[
            'vouchers' => $voucher
        ]);
    }
}
