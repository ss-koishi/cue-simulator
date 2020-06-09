<?php
require_once('FirstCut.php');

class Recording
{
    public function start()
    {
        $first_cut = new FirstCut();
        $first_cut->start();
    }
}
