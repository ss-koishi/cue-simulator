<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            [ 'name' => 'voice' ],
            [ 'name' => 'technique' ],
            [ 'name' => 'mental' ],
            [ 'name' => 'charisma' ],
        ]);
    }
}
