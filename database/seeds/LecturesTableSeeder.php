<?php

use Illuminate\Database\Seeder;

class LecturesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            'unit' => 1,
            'lesson' => 1,
            'url' => "GS6papY5JTU"
        ]);

        DB::table('lectures')->insert([
            'unit' => 1,
            'lesson' => 1,
            'url' => "KQtcxkcEgis"
        ]);
    }
}
