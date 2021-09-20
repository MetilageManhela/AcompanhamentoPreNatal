<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Beneficiado;
use App\Models\Financiador;
use App\Models\Projecto;

class NavegacaoController extends Controller
{
   public function obterCodigo()
    {
      
      $p=Beneficiado::latest()->first();
      $codi= $p->id+1;
      return response()->json($codi);
    }
    
     public function obterProvincias()
    {
      $provincias= Provincia::all();
      return response()->json($provincias);
    }
    
     public function obterFinanciadores()
    {
      
      $financiadores= Financiador::all();
      return response()->json($financiadores);
    }
     public function obterFinanciadoresProjecto($id_projecto)
     {
       $projecto=Projecto::find($id_projecto);
       $financiadores=$projecto->financiadores()->get();
       return response()->json($financiadores);
    }
    public function obterDistritos()
    {
     $distritos= \App\Models\Distrito::all();
      return response()->json($distritos);
    }
    
     public function obterTiposBeneficiarios()
    {
      $tipoBeneficiario= \App\Models\BeneficiarioTipo::all();
      return response()->json($tipoBeneficiario);
    }
    
    

  


}
