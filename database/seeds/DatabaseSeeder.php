<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(HostingPlansTableSeeder::class);
        $this->call(ServerPlansTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}
