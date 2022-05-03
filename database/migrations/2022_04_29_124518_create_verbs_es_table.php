<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerbsEsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verbs_es', function (Blueprint $table) {
            $table->id();
            $table->string('grundform', 255);
            $table->foreignId('language_id');
            $table->string('perfect', 255)->nullable();
            $table->string('conditional', 255)->nullable();
            $table->string('imperfect_preterite', 255)->nullable();
            $table->foreignId('regular', 255);
            $table->string('1p_s', 255);
            $table->string('2p_s', 255);
            $table->string('3p_s', 255);
            $table->string('1p_p', 255);
            $table->string('2p_p', 255);
            $table->string('3p_p', 255);
            $table->string('formel_s', 255);
            $table->string('formel_p', 255);
            $table->string('2p_s_imperative', 255)->nullable();
            $table->string('1p_p_imperative', 255)->nullable();
            $table->string('2p_p_imperative', 255)->nullable();
            $table->string('formel_s_imperative', 255)->nullable();
            $table->string('formel_p_imperative', 255)->nullable();
            $table->string('preterite_1p_s', 255)->nullable();
            $table->string('preterite_2p_s', 255)->nullable();
            $table->string('preterite_3p_s', 255)->nullable();
            $table->string('preterite_1p_p', 255)->nullable();
            $table->string('preterite_2p_p', 255)->nullable();
            $table->string('preterite_3p_p', 255)->nullable();
            $table->string('preterite_formel_s', 255)->nullable();
            $table->string('preterite_formel_p', 255)->nullable();
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
        Schema::dropIfExists('verbs_es');
    }
}
