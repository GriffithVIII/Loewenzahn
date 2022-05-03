<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerbsDeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbs_de', function (Blueprint $table) {
            $table->id();
            $table->string('grundform', 255);
            $table->foreignId('language_id');
            $table->string('hilfsverb', 255);
            $table->string('preterite', 255)->nullable();
            $table->string('perfect', 255)->nullable();
            $table->string('konjunktiv_ii', 255)->nullable();
            $table->foreignId('regular');
            $table->string('1p_s', 255);
            $table->string('2p_s', 255);
            $table->string('3p_s', 255);
            $table->string('1p_p', 255);
            $table->string('2p_p', 255);
            $table->string('3p_p', 255);
            $table->string('formel', 255);
            $table->string('2p_s_imperative', 255)->nullable();
            $table->string('1p_p_imperative', 255)->nullable();
            $table->string('2p_p_imperative', 255)->nullable();
            $table->string('formel_imperative', 255)->nullable();
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
        Schema::dropIfExists('verbs_de');
    }
}
