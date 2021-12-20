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
            $table->string('subdomain');
            $table->enum('type', ['band', 'soloist']);
            $table->integer('number_of_members')->nullable();
            $table->string('account')->nullable();
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
