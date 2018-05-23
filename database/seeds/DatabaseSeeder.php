<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Luigi Battaglioli',
            'email' => 'luigi@codegeek.org',
            'password' => Hash::make('snickers123')
        ]);

        DB::table('users')->insert([
            'name' => 'Luigi Battaglioli',
            'email' => 'luigi@codegeek.org',
            'password' => Hash::make('snickers123')
        ]);
    }
}
