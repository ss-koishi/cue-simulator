<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Recording;
use App\Models\Attribute;

use App\Library\Simulator;
use App\Library\RecordingDataParser;

class RecordingController extends Controller
{
    public function index(Request $request)
    {
        $parser = new RecordingDataParser($request->all());

        $simulator = new Simulator($parser->get_main_casts(), $parser->get_sub_casts());
        $simulator->run();

        // MEMO: 本来なら計算された値を返却
        return response()->json($request->all(), 200, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES
    }
  
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
