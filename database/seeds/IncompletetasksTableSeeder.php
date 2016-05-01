<?php

use Illuminate\Database\Seeder;

class IncompletetasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_id = \App\User::where('email','=','jamal@harvard.edu')->pluck('id')->first();
        DB::table('incomplete_tasks')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => $user_id,
            'task' => 'This is incomplete task 1',
        ]);

        $user_id = \App\User::where('email','=','jill@harvard.edu')->pluck('id')->first();
        DB::table('incomplete_tasks')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => $user_id,
            'task' => 'This is incomplete task 2',
        ]);

        $user_id = \App\User::where('email','=','jill@harvard.edu')->pluck('id')->first();
        DB::table('incomplete_tasks')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => $user_id,
            'task' => 'This is incomplete task 3',
        ]);


        $user_id = \App\User::where('email','=','jamal@harvard.edu')->pluck('id')->first();
        DB::table('incomplete_tasks')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => $user_id,
            'task' => 'This is incomplete task 4',
        ]);



        $user_id = \App\User::where('email','=','jill@harvard.edu')->pluck('id')->first();
        DB::table('incomplete_tasks')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'user_id' => $user_id,
            'task' => 'This is incomplete task 5',
        ]);
    }
}
