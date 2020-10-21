<?php

namespace App\Library;

use App\Library\FirstCut;

class Recording
{
    private $main_casts;
    private $sub_casts;

    public function __construct($main_casts, $sub_casts)
    {
        $this->main_casts = $main_casts;
        $this->sub_casts = $sub_casts;
    }

    /**
     * 収録開始
     */
    public function start(): void
    {
        $first_cut = new FirstCut('voice', $this->main_casts, $this->sub_casts);
        $first_cut->start();
    }
}
