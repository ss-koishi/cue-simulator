<?php
require_once('Cut.php');
require_once('ConstantSkill.php');

class FirstCut extends Cut
{
    /**
     * カット1開始
     */
    public function start()
    {
        $skill = new ConstantSkill(156, 1.0, 'voice', ['all', 'all', 'all'], false);
        // 発動するかどうか事前に判定
        $skill->invoke($this->main_casts);

        // メインキャストがスキルの対象かどうか
        $skill->evaluate($this);

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
            // add_allは無条件で呼び出す
            $cast->add_all($this->upward_sum[$index]['all'] + $this->keep_upward_sum[$index]['all']);

            // こっちは現カットの属性だけ足せば計算はあう
            $action = 'add_' . $this->get_attr();
            $cast->$action($this->upward_sum[$index][$this->get_attr()] + $this->keep_upward_sum[$index][$this->get_attr()]);

            // TODO: 倍率バフ計算
        }
    }
}
