<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_widgets', function (Blueprint $table) {
            $table->integer('club_id')->unsigned()->index();
            $table->integer('widgets_id')->unsigned()->index();
            $table->tinyInteger('view_order');
            $table->date('expired_date');
            $table->enum('is_expired', ['N', 'Y']);
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
        Schema::drop('club_widgets');
    }
}
