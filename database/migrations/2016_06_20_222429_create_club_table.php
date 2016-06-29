<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->increments('id');
            $table->string('club_id', 100)->unique();
            $table->string('short_name', 100);
            $table->string('full_name', 200);
            $table->text('address');
            $table->string('phone', 200);
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->enum('is_active', ['N', 'Y']);
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
        Schema::drop('club');
    }
}
