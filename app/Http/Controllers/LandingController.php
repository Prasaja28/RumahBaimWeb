<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\FotoHome;
use App\Models\GaleriPorto;
use App\Models\Kontak;
use App\Models\Portofolio;
use App\Models\Tentang_Kami;
use Session;

class LandingController extends Controller
{
    //
    public function index()
    {
        $faq = Faq::all();
        $foto = FotoHome::all();
        $galeri = GaleriPorto::all();
        $kontak = Kontak::all();
        $portofolio = Portofolio::all();
        $tentang = Tentang_Kami::all();
        // foreach($tentang as $data){
        //     echo $data->deskripsi;
        // }
        return view('index',compact('faq','foto','galeri','kontak','portofolio','tentang'));
    }
}
