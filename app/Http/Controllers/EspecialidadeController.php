<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Projecto;
use Carbon\Carbon;
use App\Models\Especialidade;


class EspecialidadeController extends Controller
{
    public function index(Request $request)
    {
      if ($request->ajax()) {
          //$data = Projecto::latest()->get();
            $data = Especialidade::latest()->get();
            return Datatables::of($data)
                    
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn ='<a href="javascript:void(0)" data-toggle="tooltip"  data-original-title="Ver" class="btn btn-primary btn-sm verItem">Ver</a>';
                           $btn = $btn. ' <a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'"  data-original-title="View" class="btn btn-secondary btn-sm conf" id="conf">Configurar</a>';
                           $btn = $btn. ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'"  data-original-title="Edit" class="edit btn btn-warning btn-sm editItem">Editar</a>';
                           $btn = $btn. ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'"  data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Apagar</a>';
                     return $btn;
                    })
                    ->rawColumns(['action'])
                            
                       ->addColumn('dataInicio', function ($row) {
                          return Carbon::parse($row->dataInicio)->format('d-m-Y');;
                       })
                       ->addColumn('dataTermino', function ($row) {
                          return Carbon::parse($row->dataTermino)->format('d-m-Y');
                       })
                    ->make(true);
        }
       //ajax
        return view('especialidade.index');
    }
  
    public function store(Request $request)
    {      
        $projecto= Especialidade::updateOrCreate(
                   ['id' => $request->Item_id ],
                   ['descricao' => $request->descricao,
                    'dataInicio' => Carbon::parse($request->dataInicio)->format('Y-m-d'),  
                    'dataTermino' =>Carbon::parse($request->dataTermino)->format('Y-m-d'), 
                   // 'financiador_id' => $request->financiador_id, 
                    'observacao' => $request->observacao,   
                    'orcamento' => $request->orcamento,  
                    'moeda' => $request->moeda, 
                    'objectivo' => $request->objectivo, 
                   ]); 
          
     
    return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Especialidade::find($id);
        return response()->json($item);
    }
    //vai para detalhes controller
     public function show($id)
    {  
        Especialidade::find($id);
       
        
    }
   
    public function destroy($id)
    {
       Especialidade::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
    
}  





