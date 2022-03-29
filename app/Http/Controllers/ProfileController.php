<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoHome;
use App\Models\Tentang_Kami;
use App\Models\Kontak;
use Session;
use File;

class ProfileController extends Controller
{
    //
    public function index(){
        $kontak = Kontak::all();
        $foto = FotoHome::all();
        $tentang = Tentang_Kami::all();
        return view('admin.profile-admin.profile-admin-index',compact('foto','tentang','kontak'));
    }

    public function fotoStore(Request $request){
        // return redirect('admin-profile')->with('Data Berhasil Di Simpan!!!');
        try {
            // return $request->file[0]->getClientOriginalName();
            $request->validate([
                'file' => 'max:10000'
            ]);
            foreach($request->file as $key => $value){
                $imgName = 'img/profil-img/'.time().'-'.$value->getClientOriginalName();
                // return $value;
                $value->move(public_path('img/profil-img'), $imgName);
                FotoHome::create([
                    'foto' => $imgName,
                    'status' => 1
                ]);
              
            }
        } catch (Throwable $th) {
            throw $th;
        }
      
    }

    public function fotoDestroy($id)
    {
        FotoHome::where('id',$id)->delete();
        return redirect('/admin-profile')->with('Data Berhasil Di Hapus!!!');
    }

    public function fotoUpdate(Request $request, $id)
    {
        $status = $request->get('status');
        FotoHome::where('id',$id)
            ->update([
            'status' => $status
        ]);
        return response('success');
    }

    public function tentangStore(Request $request)
    {
        Tentang_Kami::create([
            'deskripsi' => $request->content
        ]);
        return redirect('/admin-profile');
    }
    
    public function tentangDestroy($id)
    {
        Tentang_Kami::where('id',$id)->delete();
        return redirect('/admin-profile');
    }
    
    public function tentangUpdate(Request $request, $id)
    {
        Tentang_Kami::where('id',$id)->update([
            'deskripsi' => $request->content
        ]);
        return redirect('/admin-profile');
    }
    
    public function kontakStore(Request $request)
    {
        Kontak::where('jenis',$request->get('status'))->update([
            'isian' => $request->get('data')
        ]);
        return \response('success');
    }

}
