<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutivePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executive_photos', function (Blueprint $table) {
            $table->string('member_id');
            $table->string('filename');
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
        Schema::dropIfExists('executive_photos');

        Schema::table('executive_photos', function (Blueprint $table) {
            //
            $table->foreign('member_id')->references('member_id')->on('members')->onDelete('cascade');
        });
    }
}
