<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Beneficiado;


class BeneficiadoController extends Controller
{
    public function indexx()
    {
        $beneficiados= \App\Models\Beneficiado::paginate(10);
        return view('beneficiario.beneficiarioLista', compact('beneficiados'));
    }

   
     public function createe()
    {
    //Retorna a tela com as provincias para o cadastro
    $provincias= \App\Models\Provincia::all();
    return view ('beneficiario.cadastrar', compact('provincias'));
    }

  
    public function storee(Request $request)
    {
        \App\Models\Beneficiado::create($request->all());
       
        return redirect()->route('beneficiarioLista')->with('message','Produto Criado com sucesso');
    }
     //ajax
     public function obterDistritos ($id) { 
    	 if ( $id != 0 ) { 
    		$distritos   = \App\Models\Provincia:: find ( $id )->distritos () 
                        -> select ( 'id' ,'nomeDistrito' )-> get () -> toArray () ; 
    	 } else { 
    		 //$products   =Curso:: all () -> toArray ( ) ; 
    	 } 
    	 return   response ()-> json ($distritos) ; 
     } 
     //ajax
     public function obterPostoAdministratrivos ($id) { 
    	 if ( $id != 0 ) { 
    		$postos  = \App\Models\Distrito:: find ( $id )->postoAdministrativos () 
                        -> select ( 'id' ,'nomePostoAdministrativo' )-> get () -> toArray () ; 
    	 } else { 
    		 //$products   =Curso:: all () -> toArray ( ) ; 
    	 } 
    	 return   response ()-> json ($postos) ; 
     } 
     //----------------------------------------------------------------------------------------
     
     //----------------------------------------------------------------------------------------
     
     public function index(Request $request)
    {
        if ($request->ajax()) {
           
            
            $data = Beneficiado::latest()->get();
            return Datatables::of($data)
                    
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                          $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="View" class="btn btn-primary btn-sm viewItem">Ver</a>';
                           $btn =$btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editItem" >Editar</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Apagar</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
       //ajax
        return view('beneficiado.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Beneficiado::updateOrCreate(
                   ['id' => $request->Item_id],
                   ['nome' => $request->nome, 
                   'email' => $request->email,
                   'nuit' => $request->nuit,
                   'provincia' => $request->provincia,
                   'distrito' => $request->distrito,
                   'postoAdministrativo' => $request->postoAdministrativo, 
                   'sexo' => $request->sexo,
                   'endereco' => $request->endereco,
                   'data' => $request->data,   
                
                   ]);        
   
        return response()->json(['success'=>'Salvo com Sucesso.']);
    }
  
    public function edit($id)
    {
        $item = Beneficiado::find($id);
        return response()->json($item);
    }
   
    public function destroy($id)
    {
       Beneficiado::find($id)->delete();
     
       return response()->json(['success'=>'Movido pra lixeira.']);
    }
     public function tabelas()
    {
      return view ('beneficiado.tabelasgerais');
    }
   

    
    
    
}