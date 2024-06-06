<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Toko::create([
            'nama_toko' => 'Barbershop',
            'alamat_toko' => 'Semarang',
            'nohp_toko' => '0882005054236'
        ]);

        \App\Models\Admin::create([
            'nama_admin' => 'Pipin Dien Luxviana',
            'nohp_admin' => '0882005054236',
            'password' => bcrypt('12345')
        ]);

        \App\Models\Admin::create([
            'nama_admin' => 'Fathin Zhafira Fauzi',
            'nohp_admin' => '123456789',
            'password' => bcrypt('12345')
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Gentlemen Cut',
            'keterangan_paket' => 'Potong Rambut Saja',
            'harga' => '50.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Gentlemen Grooming & Hairspa',
            'keterangan_paket' => 'potong rambut,lalu keramas dan pijat kepala',
            'harga' => '90.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Anti-Dandruff Treatment',
            'keterangan_paket' => 'Perawatan untuk menjaga kesehatan kulit kepala',
            'harga' => '100.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Black Hair Coloring',
            'keterangan_paket' => 'Memberikan warna Hitam indah pada rambut',
            'harga' => '80.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Basic Hair Color',
            'keterangan_paket' => 'Warna dasar yang diaplikasikan ke seluruh bagian rambut',
            'harga' => '120.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Gentlemen Cut',
            'keterangan_paket' => 'Potong Rambut dan Keramas',
            'harga' => '70.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Smoothing',
            'keterangan_paket' => 'Membuat rambut Anda lembut, halus, lurus dan mudah diatur',
            'harga' => '200.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Premium Haircut',
            'keterangan_paket' => 'Potongan rambutmu menjadi ganteng',
            'harga' => '80.000'
        ]);

        \App\Models\Paket::create([
            'nama_paket' => 'Kids Haircut',
            'keterangan_paket' => 'Potongan rambut khusus anak-anak',
            'harga' => '60.000'
        ]);

        \App\Models\Barber::create([
            'nama_barber' => 'Ega',
            'nohp_barber' => '088246789054',
            'umur' => '21'
        ]);

        \App\Models\Barber::create([
            'nama_barber' => 'Hilmy',
            'nohp_barber' => '083178974921',
            'umur' => '21'
        ]);

        \App\Models\Reservasi::create([
            'persetujuan' => 'Pipin Dien Luxviana',
            'nama_pelanggan' => 'Ega',
            'no_pelanggan' => '087892444508',
            'nama_paket' => 'Gentlemen Cut',
            'keterangan_paket' => 'Potongan Rambut Saja',
            'nama_barber' => 'Hilmy',
            'jam_potong' => '17.00',
            'harga' => '50.000',
            'isApprove' => '1'
        ]);


        \App\Models\Reservasi::create([
            'persetujuan' => 'Pipin Dien Luxviana',
            'nama_pelanggan' => 'Fathin',
            'no_pelanggan' => '082261908382',
            'nama_paket' => 'Smoothing',
            'keterangan_paket' => 'Membuat rambut Anda lembut, halus, lurus dan mudah diatur',
            'nama_barber' => 'Retno',
            'jam_potong' => '19.00',
            'harga' => '200.000'
        ]);
    }
}
