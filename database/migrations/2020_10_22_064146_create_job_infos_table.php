<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');
            
            $table->string('job');//العمل
            $table->string('job_place')->nullable();//مكان العمل
            $table->integer('phone_number')->nullable();//رقم العمل
            $table->string('education')->nullable();//التعليم
            $table->string('salary')->nullable();//مصدر الدخل
            $table->string('salary_month')->nullable();//الراتب



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
        Schema::dropIfExists('job_infos');
    }
}
