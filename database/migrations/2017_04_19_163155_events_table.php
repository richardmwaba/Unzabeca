<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->string('event_id', 10)->unique();
            $table->string('event_description', 255);
            $table->string('status');
            $table->date('date_of_event');
            $table->string('committee_id'); //foreign key on committees_table
            $table->string('email'); // foreign key on users table
            $table->string('location'); // foreign key on users table
            $table->string('added_by'); // foreign key on users table
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
        Schema::dropIfExists('events');
    }
}
