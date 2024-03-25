<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TepatWaktuJumlah;

class ChartController extends Controller
{
    public function index()
    {
        $tahun_now = date('Y'); // Tahun sekarang
        
        $data = tepatwaktujumlah::where('tahunnow', $tahun_now)->first();
        
        // Ambil label dan data untuk chart
        $labels = [$data->label1, $data->label2, $data->label3, $data->label4];
        $scores = [$data->skortahun1, $data->skortahun2, $data->baseline, $data->skortarget];
        //dd($scores);
        return view('/index', compact('labels', 'scores'));
    }
}
