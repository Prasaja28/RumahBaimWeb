<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public  function dropzoneUi()  
    {  
        return view('upload-view');  
    }  
    public  function dropzoneFileUpload(Request $request)  
    {  
        $image = $request->file('file');
        $imageName = '/img/porto-img/'.time().'-'.$image->getClientOriginalName();
        $image->move(public_path('img/porto-img'),$imageName);  
        return response()->json(['success'=>$imageName]);
    }
}
