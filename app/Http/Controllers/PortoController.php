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
        // $id = Portofolio::select('id')->orderBy('created_at','desc')->take(1)->get();
        
        try {
            $data = Portofolio::create([
                'nama_desain' => $request->get('nama'),
                'deskripsi' => $request->get('desk'),
                'status' => 1
            ]);
            
        } catch (Throwable $th) {
            throw $th;
        }
        return $data->id;
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

    public function savePhoto(Request $request)
    {
        $i = 0;
        $id = Portofolio::select('id')->orderBy('created_at','desc')->take(1)->get();
        $id = $id[0]['id'];
        try {
            // return $request->file[0]->getClientOriginalName();
            $request->validate([
                'file' => 'max:10000'
            ]);
            foreach($request->file as $key => $value){
                $imgName = 'img/porto-img/'.time().'-'.$value->getClientOriginalName();
                // return $value;
                $value->move(public_path('img/porto-img'), $imgName);
                if($i == 0){
                    Portofolio::where('id',$id)
                    ->update([
                        'foto_utama' => $imgName
                    ]);
                }else{
                    GaleriPorto::create([
                        'foto' => $imgName,
                        'tampilkan' => 1,
                        'porto_id' => $id
                    ]);
                }
                $i++;
                // array_push($dataPath,$imgName);
                return;
            }
        } catch (Throwable $th) {
            throw $th;
        }
        
    }

}
