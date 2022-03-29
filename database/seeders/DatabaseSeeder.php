<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\History;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $table->foreignId('patient_id'); //Foreign key dari tabel Category
        //     $table->string('nama_dokter');
        //     $table->string('spesialis');
        //Doctor
        Doctor::create([
            'patient_id' => '1',
            'nama_dokter'=> 'Dokter Budi',
            'spesialis' => 'Gizi'
        ]);
        // Doctor::create([
        //     'patient_id' => '2',
        //     'nama_dokter'=> 'Dokter Murif',
        //     'spesialis' => 'Bedah Tumor'
        // ]);
        // Doctor::create([
        //     'patient_id' => '2',
        //     'nama_dokter'=> 'Dokter Tabah',
        //     'spesialis' => 'Anestesi'
        // ]);
        // Doctor::create([
        //     'patient_id' => '3',
        //     'nama_dokter'=> 'Dokter James',
        //     'spesialis' => 'Saraf'
        // ]);
        // $table->string('nama_pasien');
        //     $table->string('jenis_kelamin');
        //     $table->string('pekerjaan');
        //     $table->string('nomor_ktp');
        //     $table->string('alamat_pasien');
        //     $table->string('gejala penyakit');
        
        // Category
        Patient::create([
            'nama_pasien' => 'Ahmad Mael',
            'jenis_kelamin'=> 'Laki-laki',
            'pekerjaan' => 'PNS',
            'nomor_ktp' => '12343212211',
            'alamat_pasien' => 'Jalan Mangga No 1',
            'gejala_penyakit' => 'kurang nafsu makan, cacingan'
        ]);
        Patient::create([
            'nama_pasien' => 'Ahmad Mael',
            'jenis_kelamin'=> 'Laki-laki',
            'pekerjaan' => 'PNS',
            'nomor_ktp' => '12343212211',
            'alamat_pasien' => 'Jalan Mangga No 1',
            'gejala_penyakit' => 'kurang nafsu makan, cacingan'
        ]);
    }
}
