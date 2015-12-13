<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new \App\User();
      $user->last_name = 'Blah';
      $user->first_name = 'Jill';
      $user->street_address = '123 abc st';
      $user->city = 'Los Angeles';
      $user->state = 'CA';
      $user->zip = 61104;
      $user->hosting_plan_id = 1;
      $user->server_plan_id = 1;
      $user->email = 'jill@harvard.edu';
      $user->password = \Hash::make('helloworld');
      $user->save();

      $user = new \App\User();
      $user->last_name = 'Blah';
      $user->first_name = 'Jamal';
      $user->street_address = '123 abc st';
      $user->city = 'Los Angeles';
      $user->state = 'CA';
      $user->zip = 61104;
      $user->hosting_plan_id = 1;
      $user->server_plan_id = 1;
      $user->email = 'jamal@harvard.edu';
      $user->password = \Hash::make('helloworld');
      $user->save();
    }
}
