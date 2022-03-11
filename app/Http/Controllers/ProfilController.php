<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoHome;
use App\Models\Tentang_Kami;
use App\Models\Kontak;
use Session;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $foto = FotoHome::all();
        $tentang = Tentang_Kami::all();
        $kontak = Kontak::all();
        // echo $tentang->count();
        return view('admin.profil-admin.profil-admin-index',compact('foto','tentang','kontak'));
    }

    //tambah data video
    public function fotoStore(Request $request)
    {
        $path = null; 
        if($request->foto_home)
        {
            $file = $request->file('foto_home');
            $path = '/img/porto-img/'.time().'-'.$file->getClientOriginalName();
            $file->move(public_path('img/porto-img'), $path);
        }
            // echo $path;
        FotoHome::create([
            'foto' => $path
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di Simpan!!!');
    }
    
    public function fotoUpdate(Request $request, $id)
    {
       
            if($request->foto_home)
            {
                $request->validate([
                    'foto_home' => 'max:10000'
                ]);
                $path = null; 

                $file = $request->file('foto_home');
                $path = '/img/porto-img/'.time().'-'.$file->getClientOriginalName();
                $file->move(public_path('img/porto-img'), $path);

                FotoHome::where('id',$id)
                ->update([
                    'foto' => $path
                ]);
            }
            
        
        return redirect('/admin-profil')->with('Data Berhasil Di update!!!');
    }

    public function fotoDestroy($id)
    {
        FotoHome::where('id',$id)->delete();
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
