<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
//para efeitos de testes
class TesteController extends Controller
{
   public function index()
    {
      $p= \App\Models\Provincia::all();
       $d=\App\Models\Distrito::all();
     return view ('testes',compact('p','d'));
     
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
                $file->save();
//    
           
             }   
         
        }
        
    }
    
   
} 


