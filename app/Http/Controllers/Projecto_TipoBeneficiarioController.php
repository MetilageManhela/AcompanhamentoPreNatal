<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projecto_TipoBeneficiarioController extends Controller
{
     public function index($id){
         $dataa=\App\Models\Projecto::find($id);
         $data=$dataa->tiposBeneficiario()->paginate(5);
        return view('tabelasGerais.projecto_tipoBeneficiario', compact('dataa','data'));
     }
     
     public function salvarTiposBeneficiarios(Request $request)
      {    
        // dd($request->all());
          $projecto=\App\Models\Projecto::find($request->projecto_id);
           $projecto->tiposBeneficiario()->syncWithoutDetaching($request->opcoes);
           return back();
      }
      
      //apaga as TipoBeneficiario uma de cada vez vinculado a um projecto
    public function apagarTipoBeneficiario($id_projecto,$id_tipoBeneficiario)
    {
      $projecto=\App\Models\Projecto::find($id_projecto);
      $projecto->tiposBeneficiario()->detach($id_tipoBeneficiario);
      return back();
    }
    
   
}


