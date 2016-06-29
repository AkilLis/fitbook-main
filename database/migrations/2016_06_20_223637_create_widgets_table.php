<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->unsigned();
            $table->string('name', 30)->unique();
            $table->string('display_name', 200);
            $table->text('description');
            $table->string('img_url', 100);
            $table->integer('price')->unsigned();
            $table->integer('total_used')->unsigned();
            $table->decimal('star_count', 1, 1);
            $table->enum('is_default', ['N', 'Y']);
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
        Schema::drop('widgets');
    }
}
