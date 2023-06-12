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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100);
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('thumb')->nullable();
            $table->string('price')->nullable(20);
            $table->string('series')->nullable(50);
            $table->string('sale_date')->nullable();
            $table->string('type')->nullable();
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();

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
        Schema::dropIfExists('comics');
    }
};
