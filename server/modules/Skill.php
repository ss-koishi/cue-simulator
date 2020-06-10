<?php
abstract class Skill
{
    /**
     * スキル発動確率
     * @var float
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
    private $kind_of; // どの値があがるか ('all', 'voice', 'technique', 'mental', 'charisma')

    abstract public function calc(&$main_casts);

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

        $this->is_invoke = true;
    }

    /**
     * 確率を設定 0 ~ 1
     * @param float $prob 確率
     */
    public function set_probability(float $prob): void
    {
        $this->probability = $prob;
    }

    /**
     * スキル対象の指定
     */
    public function set_targets(string $type, string $team, string $name): void
    {
        $this->type = $type;
        $this->team = $team;
        $this->name = $name;
    }

    /**
     * どの値が上昇するか設定する
     * @param string $kind
     *               @see $kind_of
     */
    public function set_kind_of(string $kind): void
    {
        $this->kind_of = $kind;
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
     * 3カット継続かどうかを取得
     * @return bool is_keep
     */
    public function is_keep(): bool
    {
        return $this->is_keep;
    }

    /**
     * スキルの対象となるタイプを取得
     * @return string タイプ('all', 'voice', 'technique', 'mental', 'charisma')
     */
    public function get_target_type(): string
    {
        return $this->type;
    }

    /**
     * スキルの対象となるチームを取得
     * @return string タイプ('all', 'flower', 'bird', 'wind', 'moon')
     */
    public function get_target_team(): string
    {
        return $this->team;
    }

    /**
     * スキルの対象となる名前を取得
     * @return string 名前
     */
    public function get_target_name(): string
    {
        return $this->name;
    }

    /**
     * スキルが上昇させるパラメータタイプを取得
     * @return string [description]
     */
    public function get_kind_of(): string
    {
        return $this->kind_of;
    }

    /**
     * 乱数を取得
     * @param  int    $min 最小値
     * @param  int    $max 最大値
     * @return float      [$min, $max]の乱数
     */
    protected function get_rand(int $min, int $max): float
    {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
}
