<?php
require_once('Skill.php');

/**
 * is_invoke()する前に必ずinvoke()する
 */
class ConstantSkill extends Skill
{
    private $upward_value;

    public function __construct(int $up_val, float $prob, string $kind_of, array $targets, bool $is_keep)
    {
        parent::__construct($prob, $kind_of, $targets, 'Constant', $is_keep);
        $this->upward_value = $up_val;
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
        if (!$this->is_invoke()) {
            return;
        }

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
                $cut->keep_upward_sum[$index][$this->get_kind_of()] += $this->get_upward_value();
            } else {                   // カット限定
                $cut->upward_sum[$index][$this->get_kind_of()] += $this->get_upward_value();
            }
        }
    }

    /**
     * 定数スキルの上昇値を設定する
     * @param int $up_val 上昇値
     */
    public function set_upward_value(int $up_val)
    {
        $this->upward_value = $up_val;
    }

    /**
     * 定数スキルの上昇値を取得
     * @return int 上昇値　
     */
    public function get_upward_value(): int
    {
        return $this->upward_value;
    }
}
