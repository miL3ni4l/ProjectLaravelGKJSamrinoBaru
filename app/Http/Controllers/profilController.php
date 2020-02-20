<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Profil;
use App\Pendeta;
class profilController extends Controller
{
    public function index()
    {
        $profil=Profil::Find(1);
        $pendeta=Pendeta::all();
        // $data [
        //     'vprofil' => $profil,
        //     'vpendeta' => $pendeta,
        // ]
        // print_r($data);exit;
        return view('profil.index', array('profil' =>$profil, 'pendeta' =>$pendeta));
        
    }
    
    public function vcreate()
    {
        return view('profil.create');
    }

    public function create(Request $req)
    {
        $profil = new Profil();
        $profil ->nama_gereja = $req->input('nama_gereja');
        $profil ->alamat_gereja = $req->input('alamat_gereja');
        $profil ->tlp_gereja = $req->input('tlp_gereja');
        $profil ->email_gereja = $req->input('email_gereja');
        $profil ->sejarah_gereja = $req->input('sejarah_gereja');
        $profil ->visi_gereja = $req->input('visi_gereja');
        $profil ->misi_gereja = $req->input('misi_gereja');
        $profil ->save();
        
        return redirect('/profil');
    }

    public function vedit()
    {
        $profil = Profil::FInd(1);
        return view('profil.edit',compact('profil'));
    }
    public function edit(Request $req)
    {
        $profil = Profil::Find(1);
        $profil ->nama_gereja = $req->input('nama_gereja');
        $profil ->alamat_gereja = $req->input('alamat_gereja');
        $profil ->tlp_gereja = $req->input('tlp_gereja');
        $profil ->email_gereja = $req->input('email_gereja');
        $profil ->sejarah_gereja = $req->input('sejarah_gereja');
        $profil ->visi_gereja = $req->input('visi_gereja');
        $profil ->misi_gereja = $req->input('misi_gereja');
        $profil ->save();
        
        return redirect('/profil');
    }
    
    public function vCPendeta()
    {
        return view('profil.cPendeta');
    }
    public function cPendeta(Request $req)
    {
        $pendeta = new Pendeta();
        $pendeta ->nama_pendeta = $req->input('nama_pendeta');
        $pendeta ->tlp_pendeta = $req->input('tlp_pendeta');
        $pendeta ->keterangan_pendeta = $req->input('keterangan_pendeta');
        if($req->file('file')!=null){
            $photo = $req->file('file');
            $path = Storage::disk('local')->put('pendeta', $photo); //nama folder,file yang diinput
            $pendeta ->foto_pendeta = $path;
        }
        $pendeta ->save();
        //kurang foto
        return redirect('/profil');
    }
    public function vEPendeta($id)
    {
        $pendeta=Pendeta::Find($id);
        return view('profil.ePendeta',compact('pendeta'));
    }
    public function ependeta(Request $req,$id)
    {
        $pendeta=Pendeta::Find($id);
        
        $pendeta ->nama_pendeta = $req->input('nama_pendeta');
        $pendeta ->tlp_pendeta = $req->input('tlp_pendeta');
        $pendeta ->keterangan_pendeta = $req->input('keterangan_pendeta');
        if($req->file('file')!=null){
            if(!isset($req->foto_pendeta))
                {
                    $photo = Storage::disk('local')->delete($pendeta->foto_pendeta);
                }
            $photo = $req->file('file');
            $path = Storage::disk('local')->put('pendeta', $photo); //nama folder,file yang diinput
            $pendeta ->foto_pendeta = $path;
        }
        $pendeta ->save();
        return redirect('/profil');
    }
    public function dPendeta($id)
    {
        $pendeta=Pendeta::Find($id);
        $photo = Storage::disk('local')->delete($pendeta->foto_pendeta);
        $pendeta->delete();
        return redirect('/profil');
    }
    public function sPendeta($id)
    {
        $pendeta=Pendeta::Find($id);
        return view('profil.sPendeta',compact('pendeta'));
    }
}
