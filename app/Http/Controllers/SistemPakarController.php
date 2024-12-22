<?php
namespace App\Http\Controllers;

use App\Models\Kerusakan;
use App\Models\Gejala;
use Illuminate\Http\Request;

class SistemPakarController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function formGejala()
    {
        $gejala = Gejala::all();
        return view('input', ['gejala' => $gejala]);
    }

    public function hitungBayes(Request $request)
    {
        $inputGejala = $request->gejala;

        // Ambil data kerusakan dan probabilitas prior
        $kerusakan = Kerusakan::with('gejala')->get();

        $hasil = [];
        foreach ($kerusakan as $k) {
            $probabilitas = $k->prior_probability;

            foreach ($k->gejala as $gejala) {
                if (in_array($gejala->kode_gejala, $inputGejala)) {
                    $probabilitas *= $gejala->pivot->probability;
                }
            }

            $hasil[] = [
                'kerusakan' => $k->nama_kerusakan,
                'probabilitas' => $probabilitas,
                'solusi' => $k->solusi,
            ];
        }

        // Urutkan berdasarkan probabilitas tertinggi
        usort($hasil, fn($a, $b) => $b['probabilitas'] <=> $a['probabilitas']);

        return view('hasil', ['hasil' => $hasil]);
    }
}
