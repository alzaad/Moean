<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');

            $table->integer('rent_home')->nullable();//ايجار شهري
            $table->integer('electricity_bill');//فاتورة كهرباء
            $table->integer('water_bill');//فاتورة ماء
            $table->integer('monthly_fees_eco_bank')->nullable();
            $table->integer('monthly_fees')->nullable();//أقساط شهرية
           
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
        Schema::dropIfExists('commitments');
    }
}
