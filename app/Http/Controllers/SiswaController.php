<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Siswa::all();

        return view('page.siswa.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'kelas' => 'required',
            'date' => 'required'
        ]);

        Siswa::create([
            'name' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'kelas' => $request->kelas,
            'date' => $request->date,
        ]);

        return redirect('/siswa');
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

        $data = Siswa::findOrFail($id);

        return view('page.siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'kelas' => 'required',
            'date' => 'required'
        ]);

        $data = Siswa::findOrFail($id);

        $data->update([
            'name' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'kelas' => $request->kelas,
            'date' => $request->date,
        ]);

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Siswa::findOrFail($id);

        $data->delete();
        return redirect('/siswa');
    }
}