<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customers', function (Blueprint $table) {

      # Increments method will make a Primary, Auto-Incrementing field.
      # Most tables start off this way
      $table->increments('id');

      # This generates two columns: `created_at` and `updated_at` to
      # keep track of changes to a row
      $table->timestamps();

      # The rest of the fields...
      $table->string('username');
      $table->string('last_name');
      $table->string('first_name');
      $table->string('street_address');
      $table->string('city');
      $table->string('state');
      $table->integer('zip');
      $table->integer('hosting_plan');
      $table->integer('server_plan');


      # FYI: We're skipping the 'tags' field for now; more on that later.

  });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('customers');

    }
}
