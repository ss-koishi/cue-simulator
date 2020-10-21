<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recording;
use App\Models\Attribute;

class RecordingController extends Controller
{
    public function get_recording_attributes(int $id)
    {
        $recording = Recording::find($id);
        return [
            'cut1' => Attribute::find($recording->cut1)->name,
            'cut2' => Attribute::find($recording->cut2)->name,
            'cut3' => Attribute::find($recording->cut3)->name,
        ];
    }
}
