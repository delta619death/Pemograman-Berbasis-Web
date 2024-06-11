<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class APIController extends Controller
{
    public function searchphone(Request $request){
        $cari = $request->input('q');
        $phone = Phone::where('namahp', 'LIKE', "%$cari%")->get();
        
        if ($phone->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => []
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        } else {
            return response()->json([
                'success' => true,
                'data' => $phone
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
    }
}
    