<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function calculateShelter(Request $request)
    {
        $n = (int) $request->input('n');
        $heights = array_map('intval', explode(' ', trim($request->input('heights'))));

        if ($n < 1 || $n > 100000 || count($heights) !== $n) {
            return response()->json(['error' => 'contraintes non respecté'], 400);
        }

        $res = 0;
        $max = 0;

        foreach ($heights as $height) {
            if ($height >= $max) {
                $max = $height;
            } else {
                $res++;
            }
        }

        return response()->json(['montagnes protégées' => $res]);
    }
}
