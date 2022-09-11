<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->text('title_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_tr')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->longText('info_ar')->nullable();
            $table->longText('info_en')->nullable();
            $table->longText('info_tr')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
