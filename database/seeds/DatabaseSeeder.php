<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
<<<<<<< HEAD
     * Seed the application's database.
=======
     * Run the database seeds.
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
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
=======
        // $this->call(UsersTableSeeder::class);
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    }
}
