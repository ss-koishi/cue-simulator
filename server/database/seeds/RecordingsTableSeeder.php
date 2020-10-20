<?php

use Illuminate\Database\Seeder;

class RecordingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recordings')->insert([
            [
                'name' => '魔法少女協会 マジック◆ワークス',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 1,
                'cut2' => 4,
                'cut3' => 1,
            ],
            [
                'name' => 'ふぇありん∞ふぇありん',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 2,
                'cut2' => 1,
                'cut3' => 2,
            ],
            [
                'name' => 'こんにちは、いただきます。',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 3,
                'cut2' => 2,
                'cut3' => 3,
            ],
            [
                'name' => '黒白のグィネヴィア',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 4,
                'cut2' => 3,
                'cut3' => 4,
            ],
            [
                'name' => 'C.Q.',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 3,
                'cut2' => 4,
                'cut3' => 3,
            ],
            [
                'name' => 'トッケン',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 2,
                'cut2' => 3,
                'cut3' => 2,
            ],
            [
                'name' => 'まお国',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 4,
                'cut2' => 1,
                'cut3' => 4,
            ],
            [
                'name' => 'O.L.',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 1,
                'cut2' => 2,
                'cut3' => 1,
            ],
            [
                'name' => 'あしバシ',
                'chapter' => 3,
                'difficulty' => 3,
                'cut1' => 4,
                'cut2' => 2,
                'cut3' => 4,
            ],
        ]);
    }
}
