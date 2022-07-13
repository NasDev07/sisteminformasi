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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('judul');
            $table->text('paragrafdepan');
            $table->date('tanggal');
            $table->text('paragrafsatu');
            $table->text('paragrafdua');
            $table->text('paragraftiga');
            $table->text('paragrafempat');
            $table->text('paragraflima');
            $table->text('paragrafenam');
            $table->text('paragraftujuh');
            $table->text('paragrafdelapan');
            $table->text('paragrafsembilan');
            $table->text('paragrafsepuluh');
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
