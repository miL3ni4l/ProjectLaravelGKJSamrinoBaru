<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Foto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
// use Intervention\Image\ImageManagerStatic as Image;
class kegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('Galery.index',compact('kegiatan'));
    }

    public function vcreate()
    {
        return view('Galery.Kcreate');
    }

    public function create(Request $req)
    {
        // print_r($kegiatan);exit;
        $kegiatan = new Kegiatan();
        $kegiatan ->nama_kegiatan = $req->input('nama_kegiatan');
        $kegiatan ->tanggal = $req->input('tanggal');
        $kegiatan ->save();
        return redirect('/kegiatan');
    }

    public function vedit($id)
    {
        $kegiatan = Kegiatan::Find($id);
        return view('Galery.Kedit',compact('kegiatan'));
    }

    public function edit(Request $req, $id)
    {
        $kegiatan = Kegiatan::Find($id);
        $kegiatan ->nama_kegiatan = $req->input('nama_kegiatan');
        $kegiatan ->tanggal = $req ->input('tanggal');
        $kegiatan->save();
        return redirect('/kegiatan');
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::Find($id);
        $kegiatan_id = DB::table('fotos')->select('foto_kegiatan')->where('kegiatan_id',$id)->get();

        foreach ($kegiatan_id as $key => $value) { //di looping karena dia tersimpan dalam arrray
            $foto = Storage::disk('local')->delete($value->foto_kegiatan);
            //value saja itu baru akses arraynya, maka harus di arahke lagi ke foto_kegiatan
        }
        $delete_foto = DB::table('fotos')->where('kegiatan_id',$id)->delete();
        $kegiatan->delete();
        return redirect()->back();
    }

  
    public function VFcreate()
    {
        $kegiatan =Kegiatan::all();
        return view('Galery.Fcreate',compact('kegiatan'));
    }
    public function Fcreate(Request $req)
    {
        $foto = new Foto();
        $foto ->kegiatan_id = $req->input('kegiatan_id');
        if($req->file('foto')!=null){
        $photo = $req->file('foto');
        // $photo2=Image::make($photo);
        // print_r($photo);exit;
        // $photo = Image::make($photo->getRealPath());
        // $photo->resize(300, 300);
        // $image_resize->save(public_path('images/ServiceImages/' .$filename));
        
        // print_r($photo);exit;
        $path = Storage::disk('local')->put('fotoKegiatan',$photo);
        $foto ->foto_kegiatan = $path;
        }
        $foto ->save();
        return redirect('/kegiatan');
    }

    public function show($kegiatan_id)
    { 
        $kegiatan = Kegiatan::Find($kegiatan_id);
        $query = DB::table('fotos')->select('foto_kegiatan','id')->where('kegiatan_id',$kegiatan_id)->get();
        // $foto_id=DB::table('fotos')->select('id')
        // print_r($query);exit;
        // $foto = Foto::Find($kegiatan_id);
        return view('Galery.show',array('foto' =>$query, 'kegiatan'=>$kegiatan));
    }

    public function Fdelete($id)
    {
        $foto = Foto::Find($id);
        // print_r($foto);exit;
        $photo = Storage::disk('local')->delete($foto->foto_kegiatan);
        // print_r($foto);exit;
        $foto->delete();
        
        return redirect()->back();
    }
}




