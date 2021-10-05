<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(){
        $info = Informasi::orderBy('id', 'asc')->paginate(100);
        return view('pages.informasi.informasi', compact('info'));
    }
    public function pdfStream(Request $request){
        $data["info"] = "I is usefull!";
        $pdf = PDF::loadView('Panduan_Penggunaan_EDC_BRILink_VERIFONE(C680_VX520)', $data);
        return $pdf->stream('public/assets/dokumen/informasi/Panduan_Penggunaan_EDC_BRILink_VERIFONE(C680_VX520).pdf');
    }

}
