<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use Illuminate\Support\Facades\Session;
use Illumintae\Http\RedirectResponse\with;

class kelas_penggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = kelas::where('nama_kelas', 'like', "%$katakunci%")
                    ->orWhere('id_program', 'like', "%$katakunci%")
                    ->paginate($jumlahbaris);
        } else{
            $data = kelas::orderBy('nama_kelas')->paginate($jumlahbaris);
        }
        return view('kelas.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_kelas', $request->nama_kelas);
        Session::flash('id_program', $request->id_program);

        $request->validate([
            'nama_kelas'=>'required|unique:kelas,nama_kelas',
            'id_program'=>'required|unique:kelas,id_program',
        ],[
            'nama_kelas.required'=>'Nama kelas wajib diisi',
            'nama_kelas.unique'=>'Nama kelas sudah ada',
            'id_program.required'=>'id program wajib diisi',
            'id_program.unique'=>'id program sudah ada',
        ]);
        $data = [
            'nama_kelas'=>$request->nama_kelas,
            'id_program'=>$request->id_program,
        ];
        kelas::create($data);
        return redirect()->to('kelas')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kelas::where('nama_kelas', $id)->first();
        return view('kelas.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas'=>'required',
            'did_program'=>'required',
        ],[
            'nama_kelasrequired'=>'Nama kelas wajib diisi',
            'id_program.required'=>'Id program wajib diisi',
        ]);
        $data = [
            'nama_kelas'=>$request->nama_kelas,
            'id_program'=>$request->id_program,
        ];
        kelas::where('nama_kelas',$id)->update($data);
        return redirect()->to('kelas')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kelas::where('nama_kelas', $id)->delete();
       return redirect()->to('kelas')->with('success', 'Berhasil Menghapus Data');
    }
}