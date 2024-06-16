<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $pesan = new Pemesanan();
        $pesan->nama = $req->nama_pemesan;
        $pesan->no_identitas = $req->no_id;
        $pesan->jenis_kelamin = $req->jenis_kelamin;
        $pesan->tgl_pesan = $req->tgl_pesan;
        $pesan->nama_paket = $req->nama_paket;
        $pesan->durasi = $req->durasi;
        $pesan->sarapan = $req->sarapan;
        $pesan->harga_paket = $req->harga_paket;
        $pesan->harga_layanan = $req->harga_layanan;
        $pesan->diskon = $req->diskon;
        $pesan->total_tagihan = $req->total_tagihan;
        $pesan->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Request $req)
    {
        $pesan = Pemesanan::find($req->id);
        return view('edit')->with("pemesanan", $pesan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $validatedData = $req->validate(
            [
                'jenis_kelamin' => ['required|in:Laki-laki,Perempuan'],
            ],

        );
        $pesan = Pemesanan::find($req->id);
        $pesan->update([
            'nama' => $req->nama_pemesan,
            'no_identitas' => $req->no_id,
            'jenis_kelamin' => $req->jenis_kelamin,
            'tgl_pesan' => $req->tgl_pesan,
            'nama_paket' => $req->nama_paket,
            'durasi' => $req->durasi,
            'sarapan' => $req->sarapan,
            'harga_paket' => $req->harga_paket,
            'harga_layanan' => $req->harga_layanan,
            'diskon' => $req->diskon,
            'total_tagihan' => $req->total_tagihan,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $pesan = Pemesanan::find($req->id);
        $pesan->delete();
        return redirect()->back();
    }
}
