<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => '六石陽菜',
                'team_id' => 1,
            ],
            [
                'name' => '鷹取舞花',
                'team_id' => 1,
            ],
            [
                'name' => '鹿野志穂',
                'team_id' => 1,
            ],
            [
                'name' => '月居ほのか',
                'team_id' => 1,
            ],
            [
                'name' => '天童悠希',
                'team_id' => 2,
            ],
            [
                'name' => '赤川千紗',
                'team_id' => 2,
            ],
            [
                'name' => '恵庭あいり',
                'team_id' => 2,
            ],
            [
                'name' => '九条柚葉',
                'team_id' => 2,
            ],
            [
                'name' => '夜峰美晴',
                'team_id' => 3,
            ],
            [
                'name' => '神室絢',
                'team_id' => 3,
            ],
            [
                'name' => '宮路まほろ',
                'team_id' => 3,
            ],
            [
                'name' => '日名倉莉子',
                'team_id' => 3,
            ],
            [
                'name' => '丸山利恵',
                'team_id' => 4,
            ],
            [
                'name' => '宇津木聡里',
                'team_id' => 4,
            ],
            [
                'name' => '明神凛音',
                'team_id' => 4,
            ],
            [
                'name' => '遠見鳴',
                'team_id' => 4,
            ],
        ]);
    }
}
