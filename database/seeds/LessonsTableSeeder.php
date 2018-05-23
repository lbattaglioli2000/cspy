<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'unitId' => 1,
            'title' => "Setup and Getting Started",
            'description' => "&lt;p&gt;This lesson will focus on how to set up the Python language on your computer, and also how to install an IDE so you can actually write code.&lt;/p&gt;"
        ]);

        DB::table('lessons')->insert([
            'unitId' => 1,
            'title' => "Printing",
            'description' => "&lt;p&gt;In this lesson, we'll explore functions a little bit by learning how to make our first &quot;Hello, world!&quot; Python script.&lt;/p&gt;"
        ]);

        DB::table('lessons')->insert([
            'unitId' => 1,
            'title' => "Commenting",
            'description' => "&lt;p&gt;In this lesson, we'll explore what comments are, why they're good to include in your code, and how we can actually write comments.&lt;/p&gt;"
        ]);

        DB::table('lessons')->insert([
            'unitId' => 2,
            'title' => "Variables",
            'description' => "&lt;p&gt;In this lesson, we'll look at what variables are and why they're useful and we'll look at how we can actually instantiate a variable.&lt;/p&gt;"
        ]);


    }
}
