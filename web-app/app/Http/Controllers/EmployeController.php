<?php
namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Tampil Semua Data
    public function index()
    {
        $data['judul'] = 'Data Pegawai';
        $data['employes'] = Employe::all();
        return view('tampil_data', $data);
    }

    // Form Tambah Data
    public function create()
    {
        $data['judul'] = 'Tambah Data Pegawai';
        return view('tambah_data', $data);
    }

    // Simpan Data Baru
    public function store(Request $request)
    {
        $employe = new Employe;
        $employe->id = $request->id;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();
        return redirect('/employe');
    }
}
