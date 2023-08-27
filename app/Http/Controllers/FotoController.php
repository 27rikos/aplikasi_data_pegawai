<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function foto(){
        $fotos=Pegawai::select('file','nama','nip','jabatan','gol')->get();
        return view('admin.daftarfoto',compact(['fotos']));
    }
}