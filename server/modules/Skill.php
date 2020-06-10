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
     * ３カット継続かどうか
     * @var bool
     */
    private $is_keep;

    /**
     * スキルの影響対象
     * @var array
     */
    private $type;
    private $team;
    private $name;
    private $target; // どの値があがるか ('all', 'voice', 'technique', 'mental', 'charisma')

    abstract public function calc($param);

    /**
     * このスキルが発動するかどうかシミュレート
     * @param  card_class メインキャスト全員
     */
    public function invoke($main_casts): void
    {
        $rand = $this->get_rand(0, 1);
        if ($this->probability < $rand) { // 発動しない確率
            $this->is_invoke = false;
        }

        // TODO: 対象声優の条件を満たすか
        // タイプ、チーム etc...
    }

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
     * 3カット継続かどうか
     * @param bool $is_keep
     */
    public function set_keep(bool $is_keep): void
    {
        $this->is_keep = $is_keep;
    }

    /**
     * スキルが発動したどうか
     * @return bool スキルが発動したどうか
     */
    public function is_invoke(): bool
    {
        return $this->is_invoke;
    }

    /**
     * 乱数を取得
     * @param  int    $min 最小値
     * @param  int    $max 最大値
     * @return double      [$min, $max]の乱数
     */
    protected function get_rand(int $min, int $max): double
    {
        return rand($min, $max);
    }
}
