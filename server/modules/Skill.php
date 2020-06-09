<?php
abstract class Skill {
    /**
     * スキル発動確率
     *
     * @var double
     */
    private $probability;

    public abstract function calc($param);
}
?>
