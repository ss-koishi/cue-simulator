<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

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
        return response()->json($request->all(), 200, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
