<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNounsEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nouns_es', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id');
            $table->foreignId('genre_id');
            $table->string('word', 255);
            $table->string('plural', 255);
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nouns_es');
    }
}
