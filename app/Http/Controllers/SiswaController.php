<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
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

        $user = Siswa::create($request->all());
        $user =  new User();
        $user->role = "siswa";
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt( 'password');
        //$user->remember_token = str_random(60);
        $user->save();

        $request->request->add([ 'user_id' => $user->id ]);
        $siswa = Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diinput');
    
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
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
