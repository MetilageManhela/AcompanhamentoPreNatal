<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Consulta;

class ConsultaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
         $data = Consulta::latest()->get();
           
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
        return view('consulta.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consulta::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['descricao' => $request->nomeDistrito, 
                   'descricao' => $request->descricao,
                   'provincia_id' => $request->provincia_id,
                    
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Consulta::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       Consulta::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
}  




