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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("sejarah");
            $table->text("visi");
            $table->text("misi");
            $table->string("telp", 15);
            $table->string("no_hp", 13);
            $table->string("email");
            $table->string("foto_profil");
            $table->string("logo");
            $table->string("struktur_organisasi");
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
        Schema::dropIfExists('profiles');
    }
};
