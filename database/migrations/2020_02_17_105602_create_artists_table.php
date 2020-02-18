<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',28);
            $table->string('firstname', 15); 
            $table->string('birthdate')->nullable();
            $table->timestamps(); 
            
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->string('year')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
