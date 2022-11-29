<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'fname' => 'DOH XII',
			'mname' => 'VOUCHER',
			'lname' => 'ADMIN',
			'username' => 'voucher_admin',
			'designation' => 'ADMIN',
			'division' => '',
			'section' => '',
			'password' => Hash::make('s3cur1ty'),
			'status' => '',
			'last_login' => '2022-01-01',
			'login_status' => '',
			'level' => 'admin',
			'void' => 0
        ]);
        DB::table('supervisors')->insert([
        	'name' => 'GODWIN LORD Y. GALLO, RN, MPH',
			'position' => 'CHIEF ADMINISTRATIVE OFFICER',
			'division' => 'MSD'
        ]);
        DB::table('supervisors')->insert([
        	'name' => 'AMEBELLA G. TARUC, MD, MPM',
			'position' => 'LHSD CHIEF MEDICAL OFFICER V',
			'division' => 'LHSD'
        ]);
        DB::table('supervisors')->insert([
        	'name' => 'FATIMA A. EMBAN, MD, MPH',
			'position' => 'CHIEF-RLED',
			'division' => 'RLED'
        ]);
    }
}
