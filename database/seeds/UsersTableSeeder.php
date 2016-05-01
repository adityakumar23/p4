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
        //
        $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
        $user->first_name = 'Jill';
        $user->last_name = '';
        $user->email = 'jill@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();

        $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
        $user->first_name = 'Jamal';
        $user->last_name = '';
        $user->email = 'jamal@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();

    }
}
