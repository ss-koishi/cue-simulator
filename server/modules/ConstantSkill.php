<?php
require_once('Skill.php');

class ConstantSkill extends Skill
{
    private $value;
    private $probability;

    function __construct() {
        $this->value = 0;
        $this->probability = 1;
    }

    public function set_value($_val)
    {
        $this->value = $_val;
    }

    public function get_value()
    {
        $this->$value;
    }

    public function calc($param)
    {
        // TODO: 確率計算
        if( $this->probability >= 1 )
        {
            return $this->value + $param;
        }
        else
        {
            return $this->value;
        }
    }
}
