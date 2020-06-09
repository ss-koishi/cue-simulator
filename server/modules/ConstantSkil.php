<?php
require_once('Skill.php');

class ConstantSkill implements Skill {
    private $value;
    private $probability;

    public function setValue( $_val){
        $this->$value = $_val;
    }

    public function Culc($param){
        return $param + $value;
    }
}
?>
