<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:siswa',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'alamat' => 'required|string',
        ]);
    
        // Menambahkan user_id dari pengguna yang sedang login
        $data = $request->all();
        $data['user_id'] = Auth::id(); // Mengambil ID pengguna yang sedang login
    
        $user = Siswa::create($data);
    
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id); // Find the student by ID
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request,$id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all()); // Update the student data
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function profile($id)
    {
        $datasiswa = Siswa::find($id);
        return view('siswa.profile',['datasiswa' => $datasiswa]);
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}
