<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\PostoAdministrativo;

class PostoAdministrativoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           
             $data = PostoAdministrativo::with('distrito')->latest()->get();
           // $data = \App\Models\PostoAdministrativo::get();
           
            return Datatables::of($data)
                    
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Editar</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Apagar</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
       //ajax
        return view('tabelasGerais.postoAdministrativo');
    }
    
    
    public function store(Request $request)
    {
        PostoAdministrativo::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['nomePostoAdministrativo' => $request->nomePostoAdministrativo, 
                   'descricao' => $request->descricao,
                   'distrito_id' => $request->distrito_id,
                    
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = PostoAdministrativo::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       PostoAdministrativo::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
}  





