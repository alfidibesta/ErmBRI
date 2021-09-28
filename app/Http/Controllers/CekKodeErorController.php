<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CekKodeErorController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $cek_kode_eror = DB::table('cek_kode_eror')->get();

        // mengirim data pegawai ke view index
        return view('cekKodeEror/cekKodeEror', ['cek_kode_eror' => $cek_kode_eror]);
    }
}
