<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titolo_viaggio');
            $table->string('descrizione', 1000);
            $table->string('localita');
            $table->string('trasporto', 50);
            $table->date('data_partenza', 8, 2);
            $table->date('data_ritorno', 8, 2);
            $table->decimal('price', 8, 2);
            $table->string('img', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaggios');
    }
}
