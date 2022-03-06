<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Session;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $profil = Profil::all();
        return view('admin.profil-admin.profil-admin-index',compact('profil'));
    }

    //

}
