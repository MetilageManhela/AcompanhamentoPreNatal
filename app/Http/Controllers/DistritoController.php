<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Distrito;

class DistritoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           
            
            $data = Distrito::with('provincia')->latest()->get();
           
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
        return view('tabelasGerais.distrito');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Distrito::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['nomeDistrito' => $request->nomeDistrito, 
                   'descricao' => $request->descricao,
                   'provincia_id' => $request->provincia_id,
                    
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Distrito::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       Distrito::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
}  




