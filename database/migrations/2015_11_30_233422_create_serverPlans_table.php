<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServerPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('server_plans', function (Blueprint $table) {

      # Increments method will make a Primary, Auto-Incrementing field.
      # Most tables start off this way
      $table->increments('id');

      # This generates two columns: `created_at` and `updated_at` to
      # keep track of changes to a row
      $table->timestamps();

      # The rest of the fields...
      $table->string('ram');
      $table->string('storage');
      $table->string('bandwidth');
      $table->string('type');
      $table->string('OS');
    });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('server_plans');
    }
}
