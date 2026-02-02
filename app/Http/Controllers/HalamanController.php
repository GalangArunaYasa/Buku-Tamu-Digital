<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index() {
        return view('beranda'); //menghubungkan controller ke view Beranda
    }
};
