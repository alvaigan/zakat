<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        'nama_muzaqi' => 'Asep Rohman',
        'tanggal' => date("Y-m-d"),
        'rt' => '8',
        'jiwa' => '2',
        'jumlah_uang' => '50000',
        'foto' => 'belum ada'
      ];

      DB::table('t_muzaqi_uang')->insert($data);

      $data = [
        'nama_muzaqi' => 'Ujang Hermana',
        'tanggal' => date("Y-m-d"),
        'rt' => '2',
        'jiwa' => '3',
        'jumlah_uang' => '75000',
        'foto' => 'belum ada'
      ];

      DB::table('t_muzaqi_uang')->insert($data);
    }
}
