<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.admin-akun.admin-akun-index',compact('user'));
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
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|string|min:8|unique:users|max:50',
            'password' => 'required|string|confirmed|min:8|max:32'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ]);
        return redirect('/admin-akun')->with('status','Data Berhasil Ditambahkan!!!');
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
        $user = User::where('id',$id)->get();
        if($user[0]->email == $request->email){
            $request->validate([
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|string|min:8|max:50',
                'password' => 'required|string|confirmed|min:8|max:32'
            ]);
        }else{
            $request->validate([
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|string|min:8|unique:users|max:50',
                'password' => 'required|string|confirmed|min:8|max:32'
            ]);
        }
        $user = User::where('id',$id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            //'password' => Hash::make($request->password),
            'password' => $request->password,
            'status' => $request->status
        ]);
        return redirect('/admin-akun')->with('status','Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)
        ->update([
            'status'=>0
        ]);
        return redirect('/admin-akun')->with('status','Data Berhasil Di Hapus!!!');
    }
}
