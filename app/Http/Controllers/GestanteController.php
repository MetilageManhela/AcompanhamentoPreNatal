<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Projecto;
use Carbon\Carbon;
use App\Models\Gestante;


class GestanteController extends Controller
{
    public function index(Request $request)
    {
      if ($request->ajax()) {
          //$data = Projecto::latest()->get();
            $data = Gestante::latest()->get();
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
        return view('gestante.index');
    }
  
    public function store(Request $request)
    {      
        Gestante::updateOrCreate(
                   ['id' => $request->Item_id ],
                   ['nome' => $request->nome,
                    'morada' => $request->morada,
                    'dataNascimento' => Carbon::parse($request->dataNascimento)->format('Y-m-d'),  
                    'nr_bi' =>$request->nr_bi, 
                    'estadoCivil' =>$request->estadoCivil, 
                   ]); 
          
     
    return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Gestante::find($id);
        return response()->json($item);
    }
    //vai para detalhes controller
     public function show($id)
    {  
//        $projecto=Gestante::find($id);
//        $provincias=$projecto->provincias()->whereNull('distrito_id')->get();
//        $financiadores=$projecto->financiadores()->get();
//        $distritos=$projecto->distritos()->get();
//        $inicio=$projecto->dataInicio;
//        $termino=$projecto->dataTermino;
//        $datework = Carbon::createFromDate($inicio);
//        $dataDiferenca = $datework->diffInMonths($termino);
//        $files=$projecto->files()->get();
//        return view('tabelasGerais.detalhes_projecto'
//        , compact('projecto','financiadores','dataDiferenca','provincias','distritos','files','p'));
//        
    }
   
    public function destroy($id)
    {
       Gestante::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
    
}  





