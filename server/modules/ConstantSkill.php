<?php
require_once('Skill.php');

class ConstantSkill implements Skill
{
    private $value;
    private $probability;

    public function set_value($_val)
    {
        $this->$value = $_val;
    }

    public function calc($param)
    {
        return $param + $value;
    }
}
