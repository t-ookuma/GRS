<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_infos', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_name');
            $table->date('tournament_started_at');
            $table->date('tournament_finished_at')->nullable();
            $table->integer('tournament_numbering');
            $table->integer('tournament_team_limit');
            $table->foreignId('tournament_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tournament_infos');
    }
};
