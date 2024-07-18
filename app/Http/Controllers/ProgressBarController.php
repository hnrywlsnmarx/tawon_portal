<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DetailFileModel;

class ProgressBarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    

    public function index()
    {
        return view('data-file.welcome');
    }
 
    public function uploadToServer(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
 
       $name = $request->type.time().'.'.request()->file->getClientOriginalExtension();
  
       $request->file->move(public_path('uploads'), $name);
 
       $file = new DetailFileModel;
       $file->file = $name;
       $file->save();
  
        return response()->json(['success'=>'Successfully uploaded.']);
    }

}