<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables; 
use App\Models\Provincia;
use App\Models\Projecto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL; 
//a classe sera Projecto_ConfiguracaoController 
class Projecto_Distritos_ProvinciasController extends Controller
{  
    //index de configuracao, nao provincias
    public function provincias($id)
    {
     $dataa=\App\Models\Projecto::find($id);
     $data=$dataa->provincias()->whereNull('distrito_id')->paginate(5);
     $dados=$dataa->tiposBeneficiario()->paginate(5);
     $files=$dataa->files()->get();
     return view('tabelasGerais.projecto_distritos_provincias', compact('data','dataa','dados','files'));
     
    }
     public function salvarProvincias(Request $request)
      {    
          $projecto=Projecto::find($request->Item_id);
          $projecto->provincias()->syncWithoutDetaching($request->opcoes);
          return back();
      }
      
    public function salvar_Provincias_Distritos(Request $request)
         {  
            $distritos_id=$request->opcoes;//e um array
            $provincia_id= $request->provincia_id; //e um valor
            $projecto_id=$request->projecto_id;   //e um valor
            $projecto=\App\Models\Projecto::find($projecto_id);
            
            foreach ($distritos_id as &$ids) {
              $projecto->distritos()->syncWithoutDetaching([
              $ids => [ 'provincia_id' => $provincia_id],
             ]);
             }
          return back();
    }

    //apaga as provincias uma de cada vez vinculado a um projecto
    public function apagarProvincias($id_projecto,$id_provincia)
    {
      $projecto=Projecto::find($id_projecto);
      $projecto->provincias()->Detach($id_provincia);
      return back();
    }
    //retorna a tela dos distritos com a respectiva provincia pertecente a um projecto
     public function index_adicionarDistritos($id_projecto,$id_provincia)
     {
         $projecto=\App\Models\Projecto::find($id_projecto);
         $provincia=\App\Models\Provincia::find($id_provincia);
         $projecto=\App\Models\Projecto::find($id_projecto);
         $data=$projecto->distritos()
         ->where('projecto__provincias__distritos.provincia_id',$id_provincia)->paginate(5);
         return view('tabelasGerais.projecto_distritos', compact('data','projecto','provincia'));
     }
     //apaga os distritos de uma provincia em um projecto
    public function apagarDistritos($projecto_id, $provincia_id, $distrito_id)
    {
        DB::table('projecto__provincias__distritos')
        ->where('projecto_id', $projecto_id)
        ->where('provincia_id', $provincia_id)
        ->where('distrito_id', $distrito_id)
      ->delete();
      return back();
      
    }
    
    
}  

