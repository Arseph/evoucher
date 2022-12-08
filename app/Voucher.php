<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';
    protected $guarded = array();
    public function svisor() {
        return $this->hasOne(Supervisor::class, 'id', 'supervisor_id');
    }
    public function v_type() {
    	if($this->vtype == '1') {
        	return 'Advertisement/Subscription';
        }if($this->vtype == '2') {
        	return 'Catering';
        }if($this->vtype == '3') {
        	return 'COVID Compensation';
        }if($this->vtype == '4') {
        	return 'Drugs and Meds';
        }if($this->vtype == '5') {
        	return 'Equipment';
        }if($this->vtype == '6') {
        	return 'Infra/Construction';
        }if($this->vtype == '7') {
        	return 'Office Supplies';
        }if($this->vtype == '8') {
        	return 'MAIP';
        }if($this->vtype == '9') {
        	return 'Remittances';
        }if($this->vtype == '10') {
        	return 'Repairs and Maintenance';
        }if($this->vtype == '11') {
        	return 'Salary and Benefits';
        }if($this->vtype == '12') {
        	return 'Scholarship';
        }if($this->vtype == '13') {
        	return 'Travel Expenses Voucher(TEV)';
        }if($this->vtype == '14') {
        	return 'Van Rental';
        }if($this->vtype == '15') {
        	return 'Utility Expenses';
        }
    }
}
