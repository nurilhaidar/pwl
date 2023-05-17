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
        Schema::dropIfExists('artikel');
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('img');
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
        Schema::dropIfExists('artikel');
        Schema::create('artikel', function (Blueprint $table) {
            $table->string("id_artikel")->primary();
            $table->string("judul");
            $table->string("penulis");
            $table->date("tgl");
            $table->timestamps();
        });
    }
};
