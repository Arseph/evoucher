<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supervisor;
use App\Voucher;
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
        $supvi = Supervisor::find($req->supervisor_id);
        $v = Voucher::find($req->v_id);
        $s_name = $supvi->name;
        $s_position = $supvi->position;
        $user_id = $req->val['user_id'] ? $req->val['user_id'] : $v->user_id;
        $payee = $req->val['payee'] ? $req->val['payee'] : ($v != null ? $v->payee : '');
        $tin_no = $req->val['tin_no'] ? $req->val['tin_no'] : ($v != null ? $v->tin_no : '');
        $ors_burs = $req->val['ors_burs'] ? $req->val['ors_burs'] : ($v != null ? $v->ors_burs : '');
        $address = $req->val['address'] ? $req->val['address'] : ($v != null ? $v->address : '');
        $particulars = $req->val['particulars'] ? $req->val['particulars'] : ($v != null ? $v->particulars : '');
        $response_center = $req->val['response_center'] ? $req->val['response_center'] : ($v != null ? $v->response_center : '');
        $mfo_pap = $req->val['mfo_pap'] ? $req->val['mfo_pap'] : ($v? $v->mfo_pap : '');
        $amount = $req->val['amount'] ? $req->val['amount'] : ($v != null ? $v->amount : '');
        $support_docu = $req->val['support_docu'] ? $req->val['support_docu'] : ($v != null ? $v->support_docu : '');
        $sup_doc_arr = $support_docu ? explode('|', $support_docu) : ($v != null ? $v->support_docu : []);
        $supervisor_id = $req->supervisor_id;
        $acc_unit = $req->val['acc_unit'] ? $req->val['acc_unit'] :( $v != null ? $v->acc_unit : '');
        $acc_position = $req->val['acc_position'] ? $req->val['acc_position'] : ($v != null ? $v->acc_position : '');
        $agency_head = $req->val['agency_head'] ? $req->val['agency_head'] : ($v != null ? $v->agency_head : '');
        $agency_head_designation = $req->val['agency_head_designation'] ? $req->val['agency_head_designation'] : ($v != null ? $v->agency_head_designation : '');
        return view('vouchers.forms.dvall', [
            'payee' => $payee,
            'tin_no' => $tin_no,
            'ors_burs' => $ors_burs,
            'address' => $address,
            'particulars' => $particulars,
            'response_center' => $response_center,
            'mfo_pap' => $mfo_pap,
            'amount' => $amount,
            'sup_doc_arr' => $sup_doc_arr,
            's_name' => $s_name,
            's_position' => $s_position,
            'acc_unit' => $acc_unit,
            'acc_position' => $acc_position,
            'agency_head' => $agency_head,
            'agency_head_designation' => $agency_head_designation
        ]);

    }
    public function preob(Request $req) {
        $supvi = Supervisor::find($req->supervisor_id);
        $v = Voucher::find($req->v_id);
        $s_name = $supvi->name;
        $s_position = $supvi->position;
        $user_id = $req->val['user_id'] ? $req->val['user_id'] : $v->user_id;
        $payee = $req->val['payee'] ? $req->val['payee'] : ($v != null ? $v->payee : '');
        $tin_no = $req->val['tin_no'] ? $req->val['tin_no'] : ($v != null ? $v->tin_no : '');
        $ors_burs = $req->val['ors_burs'] ? $req->val['ors_burs'] : ($v != null ? $v->ors_burs : '');
        $address = $req->val['address'] ? $req->val['address'] : ($v != null ? $v->address : '');
        $particulars = $req->val['particulars'] ? $req->val['particulars'] : ($v != null ? $v->particulars : '');
        $response_center = $req->val['response_center'] ? $req->val['response_center'] : ($v != null ? $v->response_center : '');
        $mfo_pap = $req->val['mfo_pap'] ? $req->val['mfo_pap'] : ($v? $v->mfo_pap : '');
        $amount = $req->val['amount'] ? $req->val['amount'] : ($v != null ? $v->amount : '');
        $support_docu = $req->val['support_docu'] ? $req->val['support_docu'] : ($v != null ? $v->support_docu : '');
        $sup_doc_arr = $support_docu ? explode('|', $support_docu) : ($v != null ? $v->support_docu : []);
        $supervisor_id = $req->supervisor_id;
        $acc_unit = $req->val['acc_unit'] ? $req->val['acc_unit'] :( $v != null ? $v->acc_unit : '');
        $acc_position = $req->val['acc_position'] ? $req->val['acc_position'] : ($v != null ? $v->acc_position : '');
        $agency_head = $req->val['agency_head'] ? $req->val['agency_head'] : ($v != null ? $v->agency_head : '');
        $agency_head_designation = $req->val['agency_head_designation'] ? $req->val['agency_head_designation'] : ($v != null ? $v->agency_head_designation : '');
        return view('vouchers.forms.oball', [
            'payee' => $payee,
            'tin_no' => $tin_no,
            'ors_burs' => $ors_burs,
            'address' => $address,
            'particulars' => $particulars,
            'response_center' => $response_center,
            'mfo_pap' => $mfo_pap,
            'amount' => $amount,
            'sup_doc_arr' => $sup_doc_arr,
            's_name' => $s_name,
            's_position' => $s_position,
            'acc_unit' => $acc_unit,
            'acc_position' => $acc_position,
            'agency_head' => $agency_head,
            'agency_head_designation' => $agency_head_designation
        ]);
    }
}
