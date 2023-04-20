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
        Schema::create('question_set_masters', function (Blueprint $table) {
            $table->id();
            $table->string('set_name')->unique(true)->nullable(false);
            $table->date('date')->nullable(true);
            $table->foreignId('set_level_id')->references('id')->on('question_set_levels');
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
        Schema::dropIfExists('question_set_masters');
    }
};
