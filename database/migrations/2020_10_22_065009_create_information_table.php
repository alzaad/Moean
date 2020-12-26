<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');

            $table->string('disease')->nullable();//هل تشكو من أمراض
            $table->string('disease_informations')->nullable(); //علومات المريض
           
            $table->string('social_status');//الحالة الإجتماعية
        
            $table->string('family_number');//عدد أفراد الأسرة
            $table->string('wife_number')->nullable();//عدد الزوجات
            $table->string('male_number');//عدد الذكور
            $table->string('female_number');//الإناث
            $table->string('children_informations');//معلومات الأبناء

            $table->string('who_spend');//من يتولى الإنفاق على الأسرة

            $table->string('other_person')->nullable();//هل يتولى العائل أفراد آخرين
            $table->string('other_person_num')->nullable();//عدد الأفراد الذي يتولى العائل امرهم
            $table->string('other_person_reason')->nullable();//لماذا يتولى أمرهم

            $table->string('primary_school')->nullable();//اعداد الدارسين بالمرحلة الإبتدائية
            $table->string('middle_school')->nullable();//المرحلة المتوسطة
            $table->string('high_school')->nullable();// المرحلة الثانوية
            $table->string('university')->nullable();// الجامعية
            $table->string('graduated')->nullable();//الخريجين
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
        Schema::dropIfExists('information');
    }
}
