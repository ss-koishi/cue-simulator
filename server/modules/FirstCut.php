<?php
require_once('Cut.php');
require_once('ConstantSkill.php');

class FirstCut implements Cut {
    public function Main(){
        $skill = new ConstantSkill();
        $skill.setValue(100);
        echo $skill.Culc(1000);
    }

    public function CulcPoint(){

    }
}
?>
