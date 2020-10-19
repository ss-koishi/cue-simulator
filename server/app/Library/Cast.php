<?php

// TODO:  スキル系の変数、クラス追加
class Cast
{
    protected $rare;
    protected $name; // 声優名
    protected $card_name; // カード名
    protected $attr;
    protected $team;
    protected $voice;
    protected $technique;
    protected $mental;
    protected $charisma;
    protected $lesson_skill;
    protected $record_skills;

    public function __construct($voice, $technique, $mental, $charisma)
    {
        $this->set_voice($voice);
        $this->set_technique($technique);
        $this->set_mental($mental);
        $this->set_charisma($charisma);
    }

    public function stringfy()
    {
        return "{$this->name}: voice => {$this->voice}, technique => {$this->technique}, mental => {$this->mental}, charisma => {$this->charisma}";
    }

    // adder
    public function add_voice($val)
    {
        $this->voice += $val;
    }

    public function add_technique($val)
    {
        $this->technique += $val;
    }

    public function add_mental($val)
    {
        $this->mental += $val;
    }

    public function add_charisma($val)
    {
        $this->charisma += $val;
    }

    public function add_all($val)
    {
        $this->add_voice($val);
        $this->add_technique($val);
        $this->add_mental($val);
        $this->add_charisma($val);
    }

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

    public function set_attr($attr)
    {
        $this->attr = $attr;
    }

    public function set_team($team)
    {
        $this->team = $team;
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

    public function get_attr()
    {
        return $this->attr;
    }

    public function get_team()
    {
        return $this->team;
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
