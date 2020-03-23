<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headphones', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 50);
            $table->string('modello', 50);
            $table->mediumInteger('peso');
            $table->string('caratteristiche');
            $table->mediumText('descrizione');
            $table->float('prezzo', 7, 2);
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
        Schema::dropIfExists('headphones');
    }
}
