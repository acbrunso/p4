<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('customers')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'username' => 'joebryan',
      'last_name' => 'bryan',
      'first_name' => 'joe',
      'street_address' => '123 abc st',
      'city' => 'Los Angeles',
      'state' => 'CA',
      'zip' => 61104,
      'hosting_plan' => 0,
      'server_plan' => 0,
  ]);

    }
}
