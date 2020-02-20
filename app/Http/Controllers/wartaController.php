<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\warta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class wartaController extends Controller
{
    public function vcreate ()
    {
        return View('warta.create');
    }

    public function create (Request $request)
    {
        $warta = new warta();
        $warta->judul = $request->input('judul');
        $warta->keterangan = $request->input('keterangan');
        $warta->isi = $request->input('isi');
        if ($request->file('file') !=null){
            $photo = $request->file('file');
            $path = Storage::disk('local')->put('foto', $photo); //nama folder,file yang diinput
        // $name = $photo->getClientOriginalName();
        // $photo->move('foto',$name);
            $warta->foto = $path;
        }

        // $photo = $request->file('file');
        // //print_r($photo);exit;
        // //$path = $request->file->store('foto');
        // //$path = Storage::put('foto', $photo); //nama folder,file yang diinput
        // $path = Storage::disk('local')->put('foto', $photo); //nama folder,file yang diinput
        // $warta->foto = $path;
     
        $warta->save();

        return redirect('/warta');
    }

    public function index()
    {
        $warta = warta::all();
        return view ('warta.index', compact ('warta'));
    }

    public function Show($id)
    {
        $warta = warta::find($id);
        //$photo = warta::select('foto')->where('id',$id);
       // $foto = Storage::get('foto',)
        return view ('warta.show', compact('warta'));
    }
    public function delete($id)
    {
        $warta = warta::Find($id);
        // print_r($warta->foto);exit;
        $photo =Storage::disk('local')->delete($warta->foto);
        $warta->delete();
        return redirect('/warta');
    }

    public function vedit($id)
    {
        $warta = warta::Find($id);
        return view ('warta.edit',compact('warta'));
    }

    public function edit(Request $req, $id)
    {
        $warta = warta::Find($id);
        $warta ->judul = $req->input('judul');
        $warta ->keterangan = $req->input('keterangan');
        $warta ->isi = $req->input('isi');
        if ($req->file('file') !=null){
            if(!isset($req->foto))
                    {
                     $photo = Storage::disk('local')->delete($warta->foto);
                    }
            $photo = $req->file('file');
            $path = Storage::disk('local')->put('foto', $photo); //nama folder,file yang diinput
        // $name = $photo->getClientOriginalName();
        // $photo->move('foto',$name);
            $warta->foto = $path;
        }

        $warta->save();
        return redirect('/warta');

    }
}
 