<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();
        $profile->name = "RSUD Pasaman Barat";
        $profile->sejarah = "Ea fugit magnam, error aperiam aliquam ratione consectetur impedit, ex, quis corrupti ullam expedita. Odit minima expedita saepe asperiores mollitia, corrupti aperiam?";
        $profile->visi = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum iste soluta repellat officia! Cupiditate suscipit assumenda quas unde fugit ipsa nostrum repudiandae aut iusto sint quidem, asperiores fuga repellendus recusandae?";
        $profile->misi = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum iste soluta repellat officia! Cupiditate suscipit assumenda quas unde fugit ipsa nostrum repudiandae aut iusto sint quidem, asperiores fuga repellendus recusandae?";
        $profile->telp = "(0753) 65960";
        $profile->no_hp = "081267325091";
        $profile->email = "rsudpasmanbarat@yahoo.co.id";
        $profile->foto_profil = "";
        $profile->logo = "";
        $profile->struktur_organisasi = "";
        $profile->save();
    }
}
