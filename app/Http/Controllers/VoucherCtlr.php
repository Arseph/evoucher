<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supervisor;
class VoucherCtlr extends Controller
{
    public function aeVoucher(Request $req) {
        return view('vouchers.voucher');
    }

    public function selVoucher(Request $req) {
        $vtype = $req->vtype;
        $svisors = Supervisor::all();
        if($vtype != '13') {
            return view('vouchers.bodies.allv', [
                'svisors' => $svisors
            ]);
        }
    }
    public function prevoucher(Request $req) {

    }
    public function preob(Request $req) {
        
    }
}
