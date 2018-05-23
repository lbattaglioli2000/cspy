<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'title' => "Getting Started",
            'description' => "&lt;p&gt;This unit will focus on teaching you how to setup your environment, we'll introduce you to functions, and we'll also talk about comments.&lt;/p&gt;"
        ]);

        DB::table('units')->insert([
            'title' => "Variables",
            'description' => "This unit will focus on introducing you to variables, data types, and the various logical and conditional opperators available to you in Python."
        ]);
    }
}
