<?php

use Illuminate\Database\Seeder;

class HostingPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('hosting_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'websites' => '0',
      'storage' => '0',
      'bandwidth' => '0',
      'emails' => '0',
      'OS' => '0',
      ]);

      DB::table('hosting_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'websites' => '1',
      'storage' => '100 GB',
      'bandwidth' => 'limited',
      'emails' => '100',
      'OS' => 'Windows',
      ]);

      DB::table('hosting_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'websites' => '5',
      'storage' => '500 GB',
      'bandwidth' => 'unlimited',
      'emails' => '500',
      'OS' => 'Windows',
      ]);

      DB::table('hosting_plans')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'websites' => '10',
      'storage' => '750 GB',
      'bandwidth' => 'unlimited',
      'emails' => '200',
      'OS' => 'Linux',
      ]);

    }
}
