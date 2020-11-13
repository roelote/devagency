<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('tour_name');
            $table->string('passenger_name');
            $table->string('email');
            $table->string('date_tour');
            $table->string('date_briefing');
            $table->string('number_packs');
            $table->string('price');
            $table->string('advancement');
            $table->string('missing');
            $table->text('message');
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
        Schema::dropIfExists('files');
    }
}
