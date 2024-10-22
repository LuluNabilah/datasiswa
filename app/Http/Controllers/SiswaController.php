<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $datasiswa = Siswa::all(); // Fetch all records from the Siswa model
        return view('siswa.index', compact('datasiswa')); // Pass the variable to the view
    }

    public function create(Request $request)
    {
        return view('siswa/index');
    }
    
    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        return view('siswa/edit');
    }
}
