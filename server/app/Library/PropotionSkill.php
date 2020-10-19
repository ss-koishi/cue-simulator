<?php
require_once('Skill.php');

/**
 * is_invoke()する前に必ずinvoke()する
 */
class PropotionSkill extends Skill
{
    private $propotion_value;

    public function __construct(float $propotion, float $prob, string $kind_of, array $targets, bool $is_keep)
    {
        parent::__construct($prob, $kind_of, $targets, 'Propotion', $is_keep);
        $this->propotion_value = $propotion;
    }

    /**
     * Cutを渡してメインキャストがスキルの対象になるかどうか判定して計算
     * （実際に加算するのは後）
     * @param   $cut    Cut カット
     */
    // MEMO: Cutクラスごと渡して評価するのが良さそう
    public function evaluate(&$cut): void
    {
        $main_casts = $cut->get_main_casts();
        if ($this->is_invoke()) {
            $index = -1;
            foreach ($main_casts as $cast) {
                $index++;

                $attr = $this->get_target_attr();
                if ($attr !== 'all' && $cast->get_attr() !== $attr) {  // タイプ制約
                    continue;
                }

                $team = $this->get_target_team();
                if ($team !== 'all' && $cast->get_team() !== $team) {  // チーム制約
                    continue;
                }

                $name = $this->get_target_name();
                if ($name !== 'all' && $cast->get_name() !== $name) {  // キャラ制約
                    continue;
                }

                if ($this->is_keep()) {    // ３カット継続
                    $cut->keep_propotion_sum[$index][$this->get_kind_of()] += $this->get_propotion_value();
                } else {                   // カット限定
                    $cut->propotion_sum[$index][$this->get_kind_of()] += $this->get_propotion_value();
                }
            }
        }
    }

    /**
     * 定数スキルの上昇値を設定する
     * @param float $propotion 上昇値
     */
    public function set_propotion_value(float $propotion)
    {
        $this->propotion_value = $propotion;
    }

    /**
     * 定数スキルの上昇値を取得
     * @return flaot 上昇値　
     */
    public function get_propotion_value(): float
    {
        return $this->propotion_value;
    }
}
