<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Controller untuk menampilkan daftar mahasiswa
class MahasiswaController extends Controller
{
   // Menampilkan daftar mahasiswa
    public function index()
    {
        $data['judul'] = 'DAFTAR MAHASISWA';
        
        $data['mahasiswa'] = [
            ['nama' => 'Anton', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'Budi', 'alamat' => 'Kediri', 'gender' => 'L'],
            ['nama' => 'Ani', 'alamat' => 'Malang', 'gender' => 'P'],
            ['nama' => 'Sinta', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];
        
        return view('daftar_mahasiswa', $data);
    }
}