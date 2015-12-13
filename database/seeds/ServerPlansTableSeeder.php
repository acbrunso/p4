<?php

use Illuminate\Database\Seeder;

class ServerPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('server_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'ram' => '0',
      'storage' => '0',
      'bandwidth' => '0',
      'type' => '0',
      'OS' => '0',
      ]);
      DB::table('server_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'ram' => '1 GB RAM',
      'storage' => '40 GB',
      'bandwidth' => '1 TB/mo',
      'type' => 'Virtual',
      'OS' => 'Windows',
      ]);

      DB::table('server_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'ram' => '2 GB RAM',
      'storage' => '60 GB',
      'bandwidth' => '2 TB/mo',
      'OS' => 'Windows',
      ]);


      DB::table('server_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'ram' => '3 GB RAM',
      'storage' => '90 GB',
      'bandwidth' => '3 TB/mo',
      'OS' => 'Linux',
      ]);

    }
}
