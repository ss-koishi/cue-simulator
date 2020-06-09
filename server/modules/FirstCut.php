<?php
require_once('Cut.php');
require_once('ConstantSkill.php');

class FirstCut implements Cut
{
    public function start()
    {
        $skill = new ConstantSkill();
        $skill->set_value(100);
        echo $skill->calc(1000);
    }

    public function calc_point()
    {
    }
}
