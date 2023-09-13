<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Stroage;
use Illuminate\Http\Request;
use App\Models\UploadedFile;

class FileController extends Controller
{
    public function uploadpage()
    {
	    return view('upload');

    }

    public function uploadfile(Request $request)
    {
        
        $data=new UploadedFile();
	    $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;

        $data->name=$request->name;

        $data->save();

        return redirect()->back();

    }


    public function show()
    {   
	    $data=UploadedFile::all();
	    return view('upload',compact('data'));

    }

    public function download(Request $request, $file)
    {   
	    return response()->download(public_path('assets/'.$file));

    }


    public function view($id)
    {

        $data=UploadedFile::find($id);

        return view('view',compact('data'));
    }

    public function welcome()
    {
	    return view('welcome');

    }
}
