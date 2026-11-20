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
}
