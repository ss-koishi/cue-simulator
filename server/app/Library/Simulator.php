<?php

namespace App\Library;

use App\Library\Recording;

class Simulator
{
    private $main_cast, $sub_casts;

    public function __construct($main_casts, $sub_casts)
    {
        $this->main_casts = $main_casts;
        $this->sub_casts = $sub_casts;
    }

    /**
     * シミュレーションスタート
     */
    public function run(): void
    {
        // TODO: カードのキャラ名とチームのセットしないと動かないよ
        $recording = new Recording($this->main_casts, $this->sub_casts);
        $recording->start();
    }
}
