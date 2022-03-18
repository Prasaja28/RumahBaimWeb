<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\GaleriPorto;
use Session;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porto = Portofolio::all();
        return view('admin.porto-admin.porto-admin-index',compact('porto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'foto_utama' => 'max:88'
        // ]);
        $path = null; 
        if($request->foto_utama)
        {
            $file = $request->file('foto_utama');
            $path = '/img/porto-img/'.time().'-'.$file->extension();
            $file->move(public_path('img/porto-img'), $path);
        }
            // echo $path;
        Portofolio::create([
            'nama_desain' => $request->nama_desain,
            'deskripsi' => $request->deskripsi,
            'foto_utama' => $path
        ]);
        return redirect('/admin-porto')->with('Data Berhasil Di Simpan!!!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detail = Portofolio::where('id',$id)->get();
        $galeri = GaleriPorto::where('porto_id', $id)->get();
        return view('admin.porto-admin.porto-admin-detail',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto_utama' => 'max:10000'
        ]);
        $path = null; 
            if($request->foto_utama)
            {
                $file = $request->file('foto_utama');
                $path = '/img/porto-img/'.time().'-'.$file->getClientOriginalName();
                $file->move(public_path('img/porto-img'), $path);
            }else{
                $path = $request->foto_utama2;
            }
            Portofolio::where('id',$id)
            ->update([
                'nama_desain' => $request->nama_desain,
                'deskripsi' => $request->deskripsi,
                'foto_utama' => $path
            ]);
            return redirect('/admin-porto')->with('Data Berhasil Di Simpan!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portofolio::where('id',$id)->delete();
        return redirect('/admin-porto')->with('Data Berhasil Di Hapus!!!');
    }
}
