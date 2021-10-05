<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekKodeEror extends Model
{
    use HasFactory;
    protected $fillable = [
        'idKode','kodeEror', 'keterangan', 'jenisTransaksi','tindakan'
    ];
}
