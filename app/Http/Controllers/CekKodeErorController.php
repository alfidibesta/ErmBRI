<?php

namespace App\Http\Controllers;


use App\Models\CekKodeEror;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CekKodeErorController extends Controller
{
    public function index()
    {
        $KodeEror = CekKodeEror::orderBy('idKode','asc')->paginate(100);
        return view('pages.cekKodeEror.cekKodeEror', compact('KodeEror'));
    }
}
