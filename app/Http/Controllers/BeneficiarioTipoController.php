<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\BeneficiarioTipo;

class BeneficiarioTipoController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           
            
            $data = BeneficiarioTipo::latest()->get();
            return Datatables::of($data)
                    
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           //$btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="View" class="btn btn-primary btn-sm viewItem">Ver</a>';
                           $btn =' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editItem" >Editar</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Apagar</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
       //ajax
        return view('tabelasGerais.tipoBeneficiario');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BeneficiarioTipo::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['descricao' => $request->descricao,
                   'observacao' => $request->observacao,
                   
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = BeneficiarioTipo::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       BeneficiarioTipo::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
}  











