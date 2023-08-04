<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        //mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        // mengirim data ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    // method ini untuk insert ke database
    public function store(Request $request)
    {
        // insert ke dalam table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // kembalikan ke view pegawai
        return redirect('/pegawai');
    }

    // method untuk edit data
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang di pilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        // mengembalikan data ke view yang di edit di blade edit
        return view('edit', ['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk hapus
    public function hapus(Request $request)
    {
        // menghapus data sesuai id
        DB::table('pegawai')->where('pegawai_id', $request->id)->delete();
        // arahkam ke view
        return redirect('/pegawai');
    }
}
