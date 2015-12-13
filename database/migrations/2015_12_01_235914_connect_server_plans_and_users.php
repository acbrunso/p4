<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectServerPlansAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {

          # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
          $table->integer('server_plan_id')->unsigned();

          # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
          $table->foreign('server_plan_id')->references('id')->on('server_plans');

      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {

          # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
          # combine tablename + fk field name + the word "foreign"
          $table->dropForeign('users_server_plan_id_foreign');

          $table->dropColumn('server_plan_id');
      });

    }
}
