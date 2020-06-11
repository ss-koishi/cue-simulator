<?php
require_once('Recording.php');
require_once('Card.php');

class Simulator
{
    /**
     * シミュレーションスタート
     */
    public function run(): void
    {
        $sample = new Card(1000, 2000, 3000, 4000);
        $sample->set_team('moon');
        $sample->set_attr('charisma');

        $rie = clone $sample;
        $satori = clone $sample;
        $rinne = clone $sample;
        $mei = clone $sample;
        $yuzuha = clone $sample;

        $rie->set_name('Rie');
        $satori->set_name('Satori');
        $rinne->set_name('Rinne');
        $mei->set_name('Mei');

        $yuzuha->set_name('yuzuha');
        $yuzuha->set_team('bird');
        $extra_cast = $yuzuha;

        $main_casts = [
            $rie,
            $satori,
            $rinne,
            $mei,
        ];

        $sub_casts = [$yuzuha];

        $main_casts[] = $extra_cast;

        $recording = new Recording($main_casts, $sub_casts);
        $recording->start();
    }
}

(new Simulator())->run();
