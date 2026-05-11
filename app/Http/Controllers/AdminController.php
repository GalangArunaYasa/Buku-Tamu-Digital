<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //menampilkan halaman dashboard dan data buku tamu
    function dashboard() {
        $buku_tamu = Tamu::orderBy('id','desc')->get();
        return view('dashboard',compact('buku_tamu'));
    }


    // menghapus data buku tamu di dashboard
    function buku_tamu_delete($id) {
        Tamu::find($id)->delete();
        return redirect()->back();
    }

    function buku_tamu_tambah(request $request){
        $tamu = new Tamu();
        $tamu -> nama_lengkap = $request->nama_lengkap;
        $tamu -> jenis_instansi = $request->jenis_instansi;
        $tamu -> nama_instansi = $request->nama_instansi;
        $tamu -> email = $request->email;
        $tamu -> no_wa = $request->no_wa;
        $tamu -> keperluan = $request->keperluan;
        $tamu -> save();
        return redirect()->back();
    }


    //menampilkan halamat edit
    function buku_tamu_edit($id){
        $tamu = Tamu::find($id);
        return view('formulir_edit',compact('tamu'));
    }

    //memproses update
    function buku_tamu_update(Request $request, $id){
        $tamu = Tamu::find($id);
        $tamu -> nama_lengkap = $request->nama_lengkap;
        $tamu -> jenis_instansi = $request->jenis_instansi;
        $tamu -> nama_instansi = $request->nama_instansi;
        $tamu -> email = $request->email;
        $tamu -> no_wa = $request->no_wa;
        $tamu -> keperluan = $request->keperluan;
        $tamu -> update();
        return redirect('/dashboard');
    }
}
