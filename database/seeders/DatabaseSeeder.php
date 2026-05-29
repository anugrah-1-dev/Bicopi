<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@bicopi.com'],
            [
                'name'     => 'Admin Bicopi',
                'password' => Hash::make('Bicopi26.'),
            ]
        );

        Contact::updateOrCreate(
            ['id' => 1],
            [
                'alamat'      => 'Jl. Dr. Ir. H. Soekarno Merr No.678, Gn. Anyar, Kec. Gn. Anyar, Surabaya, Jawa Timur 60294',
                'email'       => 'info@bicopi.com',
                'telepon'     => '087855804679',
                'telepon_2'   => '087855804679',
                'jam_buka'    => 'Senin - Minggu: 08.00 - 02.00',
                'maps_embed'  => 'https://maps.google.com/maps?q=-7.3416796,112.7856501&z=17&output=embed',
                'twitter'     => 'https://twitter.com/bicopi',
                'facebook'    => 'https://facebook.com/bicopi',
                'instagram'   => 'https://instagram.com/bicopi',
                'lynkin'      => 'https://linkedin.com/company/bicopi',
            ]
        );
    }
}
