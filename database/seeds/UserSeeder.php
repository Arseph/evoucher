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
    }
}
