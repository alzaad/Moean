<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');
            $table->string('first_name');//الاسم الأول
            $table->string('second_name');// الإسم الثاني
            $table->string('third_name');// الإسم الثالث
            $table->string('family_name');// اسم العائلة
            $table->string('gender');// الجنس
            $table->integer('national_id')->nullable();//الهوية الوطنية
            $table->string('place_national')->nullable();//جهة الاصدار
            $table->date('date_national')->nullable();//تاريخ اصدار الهوية الوطنية
            $table->date('date_ex_national')->nullable();//تاريخ انتهاء الهوية الوطنية
            $table->string('place_birth')->nullable();//مكان الميلاد
            $table->string('date_birth')->nullable();//تاريخ الميلاد
            $table->string('residency_number')->nullable();//رقم الاقامة 
            $table->string('visa_name')->nullable();//اسم صاحب التأشيرة   
            $table->date('passport_number')->nullable();// تاريخ اصدار جواز السفر
            $table->date('passport_ex_date')->nullable();//تاريخ انتهاء جواز السفر
            $table->string('passport_place')->nullable();//مكان اصدار جواز السفر
            $table->string('nationality')->nullable();//الجنسية
            $table->string('visa_visit')->nullable();// رقم تأشيرة الزيارة
            $table->date('visa_date')->nullable();//تاريخ اصدار التأشيرة
            $table->date('visa_ex_date')->nullable();//تاريخ انتهاء التأشيرة
            $table->date('entry__date')->nullable();//تاريخ الدخول
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
        Schema::dropIfExists('beneficiary_infos');
    }
}
