<?php

namespace App\Library;

use App\Library\Cast;
use App\Library\Attribute;

class RecordingDataParser
{
    private const KEY_MAIN_CASTS = 'main_casts';
    private const KEY_SUB_CASTS = 'sub_casts';

    private $data;
    private $main_casts, $sub_casts;

    public function __construct($data)
    {
        $main_casts = $sub_casts = [];
        $this->data = $data['data'];
        $this->transform();
    }

    public function get_main_casts()
    {
        return $this->main_casts;
    }

    public function get_sub_casts()
    {
        return $this->sub_casts;
    }

    private function transform()
    {
        foreach ($data[self::KEY_MAIN_CASTS] as $cast_data) {
            $main_cast[] = new Cast(
                $cast_data[Attribute::VOICE],
                $cast_data[Attribute::TECHNIQUE],
                $cast_data[Attribute::MENTAL],
                $cast_data[Attribute::CHARISMA],
            );
        }

        foreach ($data[self::KEY_SUB_CASTS] as $cast_data) {
            // サブキャスト変換処理
        }
    }
}
