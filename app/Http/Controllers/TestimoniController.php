<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testi = Testimoni::all();
        return view('admin.testimoni-admin.testi-admin-index',compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = null; 
        if($request->foto)
        {
            $file = $request->file('foto');
            $path = '/img/testimoni-img/'.time().'-'.$file->getClientOriginalName();
            $file->move(public_path('img/testimoni-img'), $path);
        }
        // return $path;

        Testimoni::create([
            'foto' => $path,
            'nama' => $request->nama,
            'service' => $request->service,
            'review' => $request->review,
            'service' => $request->service,
            'status' => 1
        ]);
        return redirect('/admin-testi')->with('Data Berhasil Di Simpan!!!');
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
            'foto' => 'max:10000'
        ]);
        $path = null; 
        if($request->foto)
        {
            $file = $request->file('foto');
            $path = '/img/testimoni-img/'.time().'-'.$file->getClientOriginalName();
            $file->move(public_path('img/testimoni-img'), $path);
        }else{
                $path = $request->foto2;
        }
        Testimoni::where('id',$id)
            ->update([
                'foto' => $path,
                'nama' => $request->nama,
                'service' => $request->service,
                'review' => $request->review,
                'service' => $request->service,
                'status' => 1
        ]);
        return redirect('/admin-testi')->with('Data Berhasil Di Simpan!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar = Testimoni::findOrFail($id);
        // $image_path = app_path("/img/testimoni-img/{$avatar->foto}");
        $image_path = public_path().'/img/testimoni-img/'.$avatar->foto;

        if (File::exists($image_path)) {
            // unlink($image_path);
            File::delete($image_path);
        }
        $avatar->delete();

        return redirect('/admin-testi')->with('Data Berhasil Di dihapus!!!');
    }
}
