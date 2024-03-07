<?php

namespace App\Http\Controllers;

use App\Models\KartuPelajar;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KartuPelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'kartus' => KartuPelajar::with('siswa')->get()
        );

        return view('page.kartuPelajar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = array(
            'siswas' => Siswa::all()
        );

        return view('page.kartuPelajar.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'tgl_buat' => 'required|date',
        ]);

        $kartuPelajar = new KartuPelajar();

        $kartuPelajar->siswa_id = $request->siswa_id;
        $kartuPelajar->tgl_buat = $request->tgl_buat;

        $kartuPelajar->save();

        return redirect('/kartu');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = KartuPelajar::findOrFail($id);

        $data->delete();
        return redirect('/kartu');
    }
}
