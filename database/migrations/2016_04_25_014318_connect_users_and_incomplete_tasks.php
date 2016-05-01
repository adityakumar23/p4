<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndIncompleteTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incomplete_tasks', function (Blueprint $table) {

            # Add a new INT field called `user_id` that has to be unsigned (i.e. positive)
            $table->integer('user_id')->unsigned();

            # This field `user_id` is a foreign key that connects to the `id` field in the `users` table
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incomplete_tasks', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('incomplete_tasks_user_id_foreign');

            $table->dropColumn('user_id');
        });
    }
}
