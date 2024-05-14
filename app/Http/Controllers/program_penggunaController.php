<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;
use Illuminate\Support\Facades\Session;
use Illumintae\Http\RedirectResponse\with;

class program_penggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = program::where('nama_program', 'like', "%$katakunci%")
                    ->orWhere('detail_program', 'like', "%$katakunci%")
                    ->paginate($jumlahbaris);
        } else{
            $data = program::orderBy('nama_program')->paginate($jumlahbaris);
        }
        return view('program.index')->with('data', $data);
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        Session::flash('nama_program', $request->nama_program);
        Session::flash('detail_program', $request->detail_program);

        $request->validate([
            'nama_program'=>'required|unique:program,nama_program',
            'detail_program'=>'required|unique:program,detail_program',
        ],[
            'nama_program.required'=>'Nama program wajib diisi',
            'nama_program.unique'=>'Nama program sudah ada',
            'detail_program.required'=>'Detail program wajib diisi',
            'detail_program.unique'=>'Detail program sudah ada',
        ]);
        $data = [
            'nama_program'=>$request->nama_program,
            'detail_program'=>$request->detail_program,
        ];
        program::create($data);
        return redirect()->to('program')->with('success', 'Berhasil Menambahkan Data');
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
      $data = program::where('nama_program', $id)->first();
      return view('program.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_program'=>'required',
            'detail_program'=>'required',
        ],[
            'nama_program.required'=>'Nama program wajib diisi',
            'detail_program.required'=>'Detail program wajib diisi',
        ]);
        $data = [
            'nama_program'=>$request->nama_program,
            'detail_program'=>$request->detail_program,
        ];
        program::where('nama_program',$id)->update($data);
        return redirect()->to('program')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       program::where('nama_program', $id)->delete();
       return redirect()->to('program')->with('success', 'Berhasil Menghapus Data');
    }
}