<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\JenisBunga;
use App\Models\ModelBunga;
use App\Models\MomentBunga;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@mail.com',
             'password' => 'mimin123',
             'nomortelp' => '0812345678',
             'admin' => true,
         ]);

         $jenis_bungas = array('Mawar', 'Lily', 'Tulip', 'Melati', 'Anggrek', 'Daisy');
         $model_bungas = array('Bucket', 'Papan', 'Box', 'Standing');
         $moment_bungas = array('Romantis', 'Dukacita', 'Kesembuhan', 'Terimakasih', 'Ulang Tahun',
             'Valentine', 'Anniversary', 'Hari Raya', 'Wisuda', 'Pernikahan', 'Kelahiran', 'Peresmian');

         foreach ($jenis_bungas as $jenis){
             JenisBunga::factory()->create([
                 'nama_bunga' => $jenis
             ]);
         }
         foreach ($model_bungas as $model){
             ModelBunga::factory()->create([
                 'nama_model' => $model
             ]);
         }
         foreach ($moment_bungas as $moment){
             MomentBunga::factory()->create([
                 'nama_moment' => $moment
             ]);
         }
    }
}
