<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('resume');
            $table->text('history')->nullable();
            $table->boolean('has_logo')->default(false);
            $table->string('logo_path')->nullable();
            $table->string('account');
            $table->unsignedBigInteger('type_of_artist_id');
            $table->integer('number_of_members')->nullable();

            $table->foreign('type_of_artist_id')->references('id')->on('type_of_artists')->onDelete('cascade');
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
