<?php
require_once('Recording.php');

class Simulator
{
    public function run()
    {
        $recording = new Recording();
        $recording->start();
    }
}

(new Simulator())->run();
