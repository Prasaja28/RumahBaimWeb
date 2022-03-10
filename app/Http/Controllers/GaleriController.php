<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriPorto;
use App\Models\Portofolio;
use Session;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $galeri = null;
        $detail = null;
        $porto = Portofolio::all();
        return view('admin.galeri-admin.galeri-admin-index',compact('galeri','porto','detail'));
    }
    
    public function show(Request $request)
    {
        $porto = Portofolio::all();
        $detail = Portofolio::where('id',$request->selectPorto)->get();
        $galeri = GaleriPorto::where('porto_id',$request->selectPorto)->get();
        $id = $request->selectPorto;
        return redirect('/admin-galeri')->with(['detail' => $detail])->with(['galeri' => $galeri])->with(['idPorto' => $id]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'foto_utama' => 'max:88'
        // ]);
        $path = null; 
        if($request->foto_galeri)
        {
            $file = $request->file('foto_galeri');
            $path = '/img/porto-img/'.time().'-'.$file->getClientOriginalName();
            $file->move(public_path('img/porto-img'), $path);
        }
            // echo $path;
        GaleriPorto::create([
            'foto' => $path,
            'porto_id' => $request->idPorto
        ]);
        return redirect('/admin-galeri')->with('Data Berhasil Di Simpan!!!'); 
    }

    public function update(Request $request, $id)
    {
        if($request->foto_galeri)
        {
            $request->validate([
                'foto_galeri' => 'max:10000'
            ]);
            $path = null; 

            $file = $request->file('foto_galeri');
            $path = '/img/porto-img/'.time().'-'.$file->getClientOriginalName();
            $file->move(public_path('img/porto-img'), $path);

            GaleriPorto::where('id',$id)
            ->update([
                'foto' => $path
            ]);

        }
        
        return redirect('/admin-galeri')->with('Data Berhasil Di Simpan!!!');
    }

    public function destroy($id)
    {
        GaleriPorto::where('id',$id)->delete();
        return redirect('/admin-galeri')->with('Data Berhasil Di Hapus!!!');
    }

}
