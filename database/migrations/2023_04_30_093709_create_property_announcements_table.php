<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_announcements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('property_action_type_id');
            $table->unsignedBigInteger('neighbourhood_id');
            $table->integer('floor_num');
            $table->integer('room_num');
            $table->integer('salon_num');
            $table->integer('toliat_num');
            $table->integer('path_num');
            $table->integer('kitchen_num');
            $table->integer('price');
            $table->string('building_num');
            $table->string('street');
            $table->longText('description');
            $table->longText('note');
            $table->dateTime('added_date');
            $table->boolean('is_done')->default(false);
            $table->boolean('negotiable')->default(false);
            $table->string('announce_num');
            $table->enum('advertisement_type' , ['OFFERED' ,'NEEDED']);
            $table->softDeletes();
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
        Schema::dropIfExists('property_announcements');
    }
};
