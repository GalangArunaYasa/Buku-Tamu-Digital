<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index() {
        return view('home'); //menghubungkan controller ke view Beranda
    }
    function form() {
        return view('formulir'); //menghubungkan controller ke view Beranda
    }

    function about() {
        return view('tentang'); //menghubungkan controller ke view Beranda
    }


    function formulir_tambah(Request $request) {
        $tamu = new Tamu();
        $tamu -> nama_lengkap = $request->nama_lengkap;
        $tamu -> jenis_instansi = $request->jenis_instansi;
        $tamu -> nama_instansi = $request->nama_instansi;
        $tamu -> email = $request->email;
        $tamu -> no_wa = $request->no_wa;
        $tamu -> keperluan = $request->keperluan;    
        $tamu -> save();

        return redirect()->route('formulir_sukses');
    }

    function formulir_sukses(){
        return view('formulir_sukses');
    }
};
