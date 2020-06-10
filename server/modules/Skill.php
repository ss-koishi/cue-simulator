<?php
abstract class Skill
{
    /**
     * スキル発動確率
     * @var double
     */
    private $probability;

    /**
     * 発動したかどうか
     * @var bool
     */
    private $is_invoke;

    /**
     * スキルの影響対象
     * @var array
     */
    private $targets;

    abstract public function calc($param);
    abstract public function invoke(); // 発動判定（確率とかメンバー限定とか）

    /**
     * 確率を設定 0 ~ 1
     * @param double $prob 確率
     */
    public function set_probability(double $prob): void
    {
        $this->probability = $prob;
    }

    /**
     * スキル対象の指定
     * @param array $targets
     */
    public function set_targets(array $targets)
    {
        $this->targets = $targets;
    }

    /**
     * スキルが発動したどうか
     * @return bool スキルが発動したどうか
     */
    public function is_invoke(): bool
    {
        return $this->is_invoke;
    }
}
