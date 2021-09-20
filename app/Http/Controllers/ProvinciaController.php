<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Provincia;

class ProvinciaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           
            
            $data = Provincia::latest()->get();
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
        return view('tabelasGerais.provincia');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Provincia::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['nomeProvincia' => $request->nomeProvincia, 
                   'descricao' => $request->abrevicao,
                   
                    
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Provincia::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       Provincia::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
}  





