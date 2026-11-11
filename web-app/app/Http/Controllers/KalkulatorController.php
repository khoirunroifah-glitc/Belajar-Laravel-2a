<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Controller untuk kalkulator
class KalkulatorController extends Controller
{
    // Menampilkan halaman kalkulator segitiga
    public function segitiga()
    {
        $data['judul'] = 'Menghitung Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['luas'] = 0;
        return view('segitiga', $data);
    }
    // Menghitung luas segitiga berdasarkan input dari form
    public function hitung_segitiga(Request $request)
    {
        $data['judul'] = 'Menghitung Luas Segitiga';
        $data['alas'] = $request->alas;
        $data['tinggi'] = $request->tinggi;
        $data['luas'] = 0.5 * $data['alas'] * $data['tinggi'];
        return view('segitiga', $data);
    }
}