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
        Schema::create('reserve_infos', function (Blueprint $table) {
            $table->id();
            $table->date('reserved_at');
            $table->time('reserved_started_at');
            $table->time('reserved_ended_at');
            $table->foreignId('category_id');
            $table->foreignId('reserve_id')
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
        Schema::dropIfExists('reserve_infos');
    }
};
