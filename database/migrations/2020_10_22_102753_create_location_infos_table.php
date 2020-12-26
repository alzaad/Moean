<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_infos', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');

            $table->string('place');//موقع السكن
            $table->string('description');//وصف السكن
            $table->string('building_num');//رقم المبنى
            $table->string('building_type');//نوع السكن
            $table->string('building_ownership');//ملكية السكن
            $table->integer('building_rent')->nullable();//قيمة الإيجار
            $table->string('location_N');//احداثيات السكن
            $table->string('location_E');//احداثيات السكن
            $table->string('rent_evaluate')->nullable();//قيمة الإيجار

            $table->string('room_number_all')->nullable();//عدد جميع الغرف
            $table->string('room_number')->nullable();//هل عدد الغرف كافية
            $table->string('home_status')->nullable();//هل المنزل مناسب للسكن
            $table->string('status_reason')->nullable();// السبب اذا كان المنزل غير مناسب
            $table->string('home_quality')->nullable();//جودة السكن

            $table->string('bedroom_evaluate')->nullable();//تقييم حالة النوم
            $table->string('kitchen_evaluate')->nullable();//تقييم حالة المطبخ
            $table->string('bathroom_evaluate')->nullable();//تقييم حالة دورات المياة
            $table->string('store_evaluate')->nullable();//تقييم حالة المستودع
            $table->string('driverroom_evaluate')->nullable();//تقييم غرفة السائق
            $table->string('hall_evaluate')->nullable();//تقييم حالة الصالة
            $table->string('dining_room_evaluate')->nullable();//تقييم غرفة الطعام
            $table->string('living_room_evaluate')->nullable();//تقييم المجلس
            $table->string('roof_evaluate')->nullable();//تقييم السطح
            $table->string('annex_evaluate')->nullable();//تقييم الملحق الخارجي
            $table->string('outdoor_evaluate')->nullable();//تقييم حالة الحوش

            $table->string('evaluate_furniture')->nullable();//تقييم حالة الأثاث
            $table->string('furnished')->nullable();// هل الغرف مؤثثة

            $table->string('washing_machine')->nullable();//غسالة
            $table->string('conditioner_1')->nullable();//عدد مكيفات الشبك
            $table->string('conditioner_2')->nullable();//عدد مكيفات السبيليت
            $table->string('conditioner_3')->nullable();//عدد مكيفات الصحراوي
            $table->string('refrigerator')->nullable();//عدد الثلاجات
            $table->string('fraser')->nullable();//عدد الفريزر
            $table->string('cleaner')->nullable();//عدد مكنسة الكهرب
            $table->string('heater')->nullable();//عدد السخانات
            $table->string('fan')->nullable();//عدد المراوح
            $table->string('fireplace')->nullable();//عدد الدفايات
            $table->string('water_cooler')->nullable();//برادة ماء
            //تقييم
            $table->string('washing_machineـevaluate')->nullable();//غسالة تقييم
            $table->string('conditioner_1_evaluate')->nullable();// مكيفات الشبك تقييم
            $table->string('conditioner_2_evaluate')->nullable();// مكيفات السبيليت تقييم
            $table->string('conditioner_3_evaluate')->nullable();// مكيفات الصحراوي تقييم
            $table->string('refrigerator_evaluate')->nullable();// الثلاجات تقييم
            $table->string('fraser_evaluate')->nullable();// الفريزر تقييم
            $table->string('cleaner_evaluate')->nullable();// مكنسة الكهرب تقييم
            $table->string('heater_evaluate')->nullable();// السخانات تقييم
            $table->string('fan_evaluate')->nullable();// المراوح تقييم
            $table->string('fireplace_evaluate')->nullable();// الدفايات تقييم
            $table->string('water_cooler_evaluate')->nullable();//برادة ماء تقييم
            
            $table->string('category')->nullable();//إلى ماذا يحتاج السكن
            $table->string('home_category')->nullable();//مكونات السكن
            $table->string('electric')->nullable();//ماهي الأجهزه الغير مترفرة

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
        Schema::dropIfExists('location_infos');
    }
}
