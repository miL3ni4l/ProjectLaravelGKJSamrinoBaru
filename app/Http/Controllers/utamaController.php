<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Jadwal;
use App\Kegiatan;
use App\Pendeta;
use App\Profil;
use App\warta;
use Illuminate\Support\Facades\DB;
class utamaController extends Controller
{
    public function utama()
    {
        $jadwal = Jadwal::all();
        $kontak = Profil::find(1);
        $warta = warta::orderBy('created_at','DESC')->take(3)->get();
        return view('utama.1',array('jadwal' =>$jadwal, 'kontak' =>$kontak, 'warta' =>$warta));
    }

    public function warta()
    {
        $warta = warta::all();
        // print_r($warta);exit;
        return view('utama.2', array('warta' =>$warta, 'coba'=>$warta));
    }

    public function profil()
    {
        $profil=Profil::Find(1);
        // $pendeta=Pendeta::all();
        // return view('utama.3', array('profil' =>$profil, 'pendeta' =>$pendeta));
        return view('utama.3', array('profil' =>$profil));
    }

    public function pendeta()
    {
        $pendeta = Pendeta::all();
        return view('utama.pendeta', compact('pendeta'));
    }

    public function showWarta($id){
        $warta = warta::Find($id);
        return view('utama.Swarta',compact('warta'));
    }

    public function showKegiatan(){
        $kegiatan=Kegiatan::all();
        return view('utama.sKegiatan',compact('kegiatan'));
    }

    public function showFoto($id){
        $kegiatan = Kegiatan::Find($id);
        $query = DB::table('fotos')->select('foto_kegiatan','id')->where('kegiatan_id',$id)->get();
        

        return view('utama.sFoto', array('foto' =>$query, 'kegiatan'=>$kegiatan));
    }
}
