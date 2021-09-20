<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\File;

class FileController extends Controller
{
    public function index(Request $request)
    {
       
    }
   
    public function store(Request $request)
    {
             
              if($request->hasFile('inputFileAnexos')) {
               $imageNameArr = [];
               foreach ($request->inputFileAnexos as $file) {
                // you can also use the original name
                $imageName = time().'-'.$file->getClientOriginalName();
                $imageNameArr[] = $imageName;
                // Upload file to public path in images directory
                $file->move(public_path('files'), $imageName);
                
                $file= new File();
                $file->filename=$imageName;
                $file->projecto_id=$request->projecto_id;
                $file->descricao=$request->descricao;
                $file->save();
               }   
         
        }
        return back();
    }
  
    public function show($id)
    {     $file=File::find($id);
          $filename = 'files/'.$file->filename;
          $path = public_path($filename);
          return response()->make(file_get_contents($path), 200, [
          'Content-Type' => 'application/pdf',
         'Content-Disposition' => 'inline; filename="'.('files/'.$file->filename).'"'
          ]);
//          $file_path = public_path('files/'.$file->filename);
//          return response()->download($file_path);
          
    }
   
    public function download_file($id)
    { 
      $file=File::find($id);
      $file_path = public_path('files/'.$file->filename);
      return response()->download($file_path);
    }
     public function delete($projecto_id, $file_id)
    {
     File::where('id', $file_id)->where('projecto_id', $projecto_id)->delete();
     //return back();
     return json_encode(array('statusCode'=>200));
    }
}  

