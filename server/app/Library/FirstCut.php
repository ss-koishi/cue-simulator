<?php
require_once('Cut.php');
require_once('ConstantSkill.php');
require_once('PropotionSkill.php');

class FirstCut extends Cut
{
    /**
     * カット1開始
     */
    public function start()
    {
        $skill = new ConstantSkill(156, 1.0, 'voice', ['all', 'all', 'all'], false);
        $skill1 = new PropotionSkill(0.1, 1.0, 'voice', ['all', 'all', 'all'], false);
        // 発動するかどうか事前に判定
        $skill->invoke($this->main_casts);
        $skill1->invoke($this->main_casts);

        // メインキャストがスキルの対象かどうか
        $skill->evaluate($this);
        $skill1->evaluate($this);

        $this->actual_calc();

        foreach ($this->main_casts as $cast) {
            echo $cast->stringfy() . "\n";
        }
    }

    /**
     * 実際の計算を行ってキャストのパラメータを上昇させる
     */
    public function actual_calc(): void
    {
        $index = -1;
        var_dump($this->upward_sum);
        foreach($this->main_casts as $cast) {
            $index++;
            $attr = $this->get_attr(); // カットの属性

            // まずは定数アップから
            // add_allは無条件で呼び出す
            $cast->add_all($this->upward_sum[$index]['all'] + $this->keep_upward_sum[$index]['all']);

            // こっちは現カットの属性だけ足せば計算はあう
            $action = 'add_' . $attr;
            $cast->$action($this->upward_sum[$index][$attr] + $this->keep_upward_sum[$index][$attr]);

            // 倍率アップ
            $getter = 'get_' . $attr;
            $setter = 'set_' . $attr;

            $propotion_sum_all = $this->propotion_sum[$index]['all'] + $this->keep_propotion_sum[$index]['all'];
            $propotion_sum_attr = $this->propotion_sum[$index][$attr] + $this->keep_propotion_sum[$index][$attr];

            // 必ず切り上げなので、1足してintにキャストすればok
            $cast->$setter((int)(1 + $cast->$getter() * (1 + $propotion_sum_all + $propotion_sum_attr)));
        }
    }
}
