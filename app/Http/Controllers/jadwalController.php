<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
class jadwalController extends Controller
{
    public function index()
    {
            $jadwal=Jadwal::all();
            return view('jadwal.index',compact('jadwal'));   
    }
    public function vcreate()
    {
        return view('jadwal.create');
    }
    public function create(Request $req)
    {
        $jadwal = new Jadwal;
        $jadwal ->judul_ibadah = $req->input('judul');
        $jadwal ->waktu_ibadah = $req->input('waktu');
        $jadwal ->ket_ibadah = $req->input('keterangan');
        $jadwal ->save();
        return redirect('/jadwal');
        // return "aaaa";
    }

    public function vedit($id)
    {
        $jadwal = Jadwal::Find($id);
        return view('jadwal.edit',['jadwal' => $jadwal]);
    }

    public function edit(Request $req, $id )
    {
        $jadwal = Jadwal::Find($id);
        $jadwal ->judul_ibadah = $req->input('judul');
        $jadwal ->waktu_ibadah = $req->input('waktu');
        $jadwal ->ket_ibadah = $req->input('keterangan');
        // echo $jadwal ->judul_ibadah;
        $jadwal ->save();
        return redirect('/jadwal');
    }
    public function delete($id)
    {
        $jadwal = Jadwal::Find($id);
        $jadwal ->delete();
        return redirect()->back();
    }
}
