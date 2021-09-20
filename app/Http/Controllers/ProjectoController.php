<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Projecto;
use Carbon\Carbon;
use App\Models\File;


class ProjectoController extends Controller
{
    public function index(Request $request)
    {
      if ($request->ajax()) {
          //$data = Projecto::latest()->get();
            $data = Projecto::with('financiador')->latest()->get();
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
        return view('tabelasGerais.projecto');
    }
  
    public function store(Request $request)
    {      
        $projecto=Projecto::updateOrCreate(
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
          
                  $projectoo =Projecto::find($projecto->id);
                  $projectoo->financiadores()->sync($request->financiadores);
     
    return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Projecto::find($id);
        return response()->json($item);
    }
    //vai para detalhes controller
     public function show($id)
    {  
        $projecto=Projecto::find($id);
        $provincias=$projecto->provincias()->whereNull('distrito_id')->get();
        $financiadores=$projecto->financiadores()->get();
        $distritos=$projecto->distritos()->get();
        $inicio=$projecto->dataInicio;
        $termino=$projecto->dataTermino;
        $datework = Carbon::createFromDate($inicio);
        $dataDiferenca = $datework->diffInMonths($termino);
        $files=$projecto->files()->get();
        return view('tabelasGerais.detalhes_projecto'
        , compact('projecto','financiadores','dataDiferenca','provincias','distritos','files','p'));
        
    }
   
    public function destroy($id)
    {
       Projecto::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
    
}  





