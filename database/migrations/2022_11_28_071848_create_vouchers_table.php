<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('vtype');
            $table->string('payee');
            $table->string('tin_no')->nullable();
            $table->string('ors_burs')->nullable();
            $table->string('address')->nullable();
            $table->string('particulars');
            $table->string('response_center')->nullable();
            $table->string('mfo_pap')->nullable();
            $table->string('amount');
            $table->string('support_docu')->nullable();
            $table->integer('supervisor_id');
            $table->string('acc_unit');
            $table->string('acc_position');
            $table->string('agency_head');
            $table->string('agency_head_designation');
            $table->string('office')->nullable();
            $table->string('uacs')->nullable();
            $table->string('obligated');
            $table->string('ob_position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
