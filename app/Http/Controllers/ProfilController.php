<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\FotoHome;
use App\Models\Tentang_Kami;
use App\Models\Kontak;
use Session;

class ProfilController extends Controller
{
    private $mediaCollection = 'photo';

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
        try {
            $set = 0;
            foreach($request->file as $key => $value){
                $imgName = 'img/profil-img/'.time().'-'.$value->getClientOriginalName().'.'.$value->extension();
                // return $imgName;
                $value->move(public_path('img/profil-img/'), $imgName);
                if($set == 0){
                    FotoHome::create([
                        'foto' => $imgName,
                        'status' => 1
                    ]);
                }else{
                    FotoHome::create([
                        'foto' => $imgName,
                        'status' => 0
                    ]);
                }
                $set=$set+1;
            }
        } catch (Throwable $th) {
            throw $th;
        }
        
        return redirect('/admin-profile')->with('Data Berhasil Di Simpan!!!');
        
    }

    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
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

                $data = FotoHome::all();
                if($data->count() == 1){
                    FotoHome::where('id',$id)->update([
                    'foto' => $path,
                    'status' =>$request->status
                    ]);
                }else{
                    foreach($data as $data1){
                        
                        if($data1->id == $id){
                            
                            FotoHome::where('id',$id)->update([
                                'foto' => $path,
                                'status' => $request->status 
                            ]);
                        }else{
                            if($request->status == 1){
                                FotoHome::where('id',$data1->id)->update([
                                    'status' => 0
                                ]);
                            }else{
                                FotoHome::where('id',$data1->id)->update([
                                    'status' => 1
                                ]);
                            }
                            echo "gagal";
                        }
                        
                    }
                }
                
            }else{
                $data = FotoHome::all();
                if($data->count() == 1){
                    FotoHome::where('id',$id)->update([
                    'status' =>$request->status
                    ]);
                }else{
                    foreach($data as $data1){
                        
                        if($data1->id == $id){
                            
                            FotoHome::where('id',$id)->update([
                                'status' => $request->status 
                            ]);
                        }else{
                            if($request->status == 1){
                                FotoHome::where('id',$data1->id)->update([
                                    'status' => 0
                                ]);
                            }else{
                                FotoHome::where('id',$data1->id)->update([
                                    'status' => 1
                                ]);
                            }
                        }
                        
                    }
                }
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
        // echo $request->tentang;
        Tentang_Kami::create([
            'deskripsi' => $request->tentang
        ]);
        return redirect('/admin-profil')->with('Data Berhasil Di Simpan!!!');
    }
    
    public function tentangUpdate(Request $request, $id)
    {
        Tentang_Kami::where('id',$id)->update([
            'deskripsi' => $request->tentang
            
        ]);
        // echo $request->tentang;
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
