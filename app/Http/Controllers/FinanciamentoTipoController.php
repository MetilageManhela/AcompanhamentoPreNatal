<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\FinanciamentoTipo;

class FinanciamentoTipoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           
            
            $data = FinanciamentoTipo::latest()->get();
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
        return view('tabelasGerais.financiamentoTipo');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FinanciamentoTipo::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['nome' => $request->nome,
                   'percentagem' => $request->percentagem,
                   'descricao' => $request->descricao,
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = FinanciamentoTipo::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       FinanciamentoTipo::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
}  











