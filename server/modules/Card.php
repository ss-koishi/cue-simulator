<?php

// TODO:  スキル系の変数、クラス追加
abstract class Card
{
    protected $rare;
    protected $name;
    protected $card_name;
    protected $voice;
    protected $technique;
    protected $mental;
    protected $charisma;
    protected $lesson_skill;
    protected $record_skills;


    // setter
    public function set_rare($rare)
    {
        $this->rare = $rare;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_card_name($card_name)
    {
        $this->card_name = $card_name;
    }

    public function set_voice($voice)
    {
        $this->voice = $voice;
    }

    public function set_technique($technique)
    {
        $this->technique = $technique;
    }

    public function set_mental($mental)
    {
        $this->mental = $mental;
    }

    public function set_charisma($charisma)
    {
        $this->charisma = $charisma;
    }

    // getter
    public function get_rare()
    {
        return $this->rare;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_card_name()
    {
        return $this->card_name;
    }

    public function get_voice()
    {
        return $this->voice;
    }

    public function get_technique()
    {
        return $this->technique;
    }

    public function get_mental()
    {
        return $this->mental;
    }

    public function get_charisma()
    {
        return $this->charisma;
    }
}
