<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $datasiswa = \App\Models\Siswa::all();
        return view("siswa.index",['datasiswa' => $datasiswa]);
    }
}
