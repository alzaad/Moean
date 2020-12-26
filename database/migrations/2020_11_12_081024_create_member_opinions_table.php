<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_opinions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');
                
            $table->string('member_name');
            $table->string('committees_opinion')->nullable();
            $table->string('committees_reason')->nullable();
            $table->string('committees_note')->nullable();
            $table->string('location')->nullable();// هل موقع المنزل صحيح
            $table->string('attach')->nullable(); // هل مرفقات المنزل صحيحه
            $table->string('family')->nullable();// هل عدد التابعين صحيح
            $table->string('note')->nullable(); // ملاحظات آخرى
            
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
        Schema::dropIfExists('member_opinions');
    }
}
