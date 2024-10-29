<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $datasiswa = Siswa::all(); // Fetch all students
        return view('siswa.index', compact('datasiswa'));
    }

    public function create(Request $request)
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
        ]); 

        $datasiswa = Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }
    
    public function edit($id)
    {
        $datasiswa = Siswa::find($id); //SELECT * FROM id = $id
        return view('siswa.edit', compact('datasiswa'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis|max:8' .$id,

        ]);

        $datasiswa = Siswa::find($id);
        $datasiswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    public function profile($id)
    {
        $datasiswa = Siswa::find($id);
        return view('siswa.profile',['datasiswa' => $datasiswa]);
    }
}
