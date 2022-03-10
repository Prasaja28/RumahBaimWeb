<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video_profil;
use App\Models\Tentang_Kami;
use App\Models\Kontak;
use Session;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $video = Video_profil::all();
        $tentang = Tentang_Kami::all();
        $kontak = Kontak::all();
        return view('admin.profil-admin.profil-admin-index',compact('video','tentang','kontak'));
    }

    //tambah data video
    public function videoStore(Request $request)
    {
        Video_profil::create([
            'link' => $request->link
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di Simpan!!!');
    }
    
    public function videoUpdate(Request $request, $id)
    {
        Video_profil::where('id',$id)
            ->update([
            'link' => $request->link
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di update!!!');
    }

    public function videoDestroy($id)
    {
        Video_profil::where('id',$id)
        ->update([
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di Hapus!!!');
    }
    
    public function tentangStore(Request $request)
    {
        Tentang_Kami::create([
            'deskripsi' => $request->tentang
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di Simpan!!!');
    }
    
    public function tentangUpdate(Request $request, $id)
    {
        Tentang_Kami::where('id',$id)
            ->update([
            'deskripsi' => $request->tentang
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di update!!!');
    }

    public function tentangDestroy($id)
    {
        Tentang_Kami::where('id',$id)->delete();
        return redirect('/admin-profil')->with('Data Berhasil Di Hapus!!!');
    }
    
    public function kontakStore(Request $request)
    {
        Kontak::create([
            'jenis' => $request->jenis,
            'isian' => $request->isian
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di Simpan!!!');
    }
    
    public function kontakUpdate(Request $request, $id)
    {
        Kontak::where('id',$id)
            ->update([
            'jenis' => $request->jenis,
            'isian' => $request->isian
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di update!!!');
    }

    public function kontakDestroy($id)
    {
        Kontak::where('id',$id)->delete();
        return redirect('/admin-profil')->with('Data Berhasil Di Hapus!!!');
    }

    //

}
