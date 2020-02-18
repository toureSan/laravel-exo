<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_movie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role_name',20);
            $table->string('movie_id')->unsigned();
            $table->string('movie_id')->references('id')->('movies');
            $table->string('artist_id')->unsigned();
            $table->string('artist_id')->references('id')->('artists');
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
        Schema::dropIfExists('artist_movie');
    }
}
