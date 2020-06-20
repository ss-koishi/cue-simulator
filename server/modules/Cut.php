<?php
abstract class Cut
{
    protected $attr;

    protected $main_casts;
    protected $sub_casts;

    // 任意のカットでのみの上昇値の総和
    public $upward_sum;
    public $propotion_sum;
    // 3カット継続の上昇値の総和
    public $keep_upward_sum;
    public $keep_propotion_sum;

    abstract public function actual_calc();

    public function __construct($attr, $main_casts, $sub_casts)
    {
        $this->attr = $attr;
        $this->main_casts = $main_casts;
        $this->sub_casts = $sub_casts;
        $this->keep_upward_sum = $this->upward_sum = [];
        $this->keep_propotion_sum = $this->propotion_sum = [];

        $attrs = [
            'all' => 0,
            'voice' => 0,
            'technique' => 0,
            'mental' => 0,
            'charisma' => 0
        ];
        for ($i = 0; $i < 5; $i++) {
            $this->upward_sum[] = $attrs;
            $this->keep_upward_sum[] = $attrs;
            $this->propotion_sum[] = $attrs;
            $this->keep_propotion_sum[] = $attrs;
        }
    }

    /**
     * 現カットの対象属性を取得する
     * @return string ('voice', 'technique', 'mental', 'charisma')
     */
    public function get_attr(): string
    {
        return $this->attr;
    }

    /**
     * メインキャストを返す
     * @return array メインキャストが格納された配列
     */
    public function get_main_casts(): array
    {
        return $this->main_casts;
    }

    /**
     * ３カット継続の定数値アップの合計を取得
     * @return int 3カット継続の定数値アップの合計
     */
    public function get_keep_upward_sum(): int
    {
        return $this->keep_upward_sum;
    }

    /**
     * ３カット継続の倍率アップの合計を取得
     * @return float 3カット継続の定数値アップの合計
     */
    public function get_keep_propotion_sum(): float
    {
        return $this->keep_propotion_sum;
    }
}
