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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('part_id')->constrained();
            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_tr')->nullable();
            $table->longText('info_ar')->nullable();
            $table->longText('info_tr')->nullable();
            $table->longText('info_en')->nullable();
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
        Schema::dropIfExists('works');
    }
};
