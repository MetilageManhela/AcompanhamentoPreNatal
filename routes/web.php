<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
Route::get('/', function () {
    return view('admin.painel');
});
Route::get('/tes', function () {
    return view('testes');
});

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/user', 'UserController@index')->name('user')->middleware('user');
Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::get('/manager2', 'ManagerController@index2')->name('manager2')->middleware('manager');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/lista', 'BeneficiadoController@indexx')->name('beneficiarioLista');
Route::get('/criar', 'BeneficiadoController@createe')->name('criarBeneficiario');

Route::get('/provincia/{id}/distritos', 'BeneficiadoController@obterDistritos');
Route::get('/distrito/{id}/postoAdministrativos', 'BeneficiadoController@obterPostoAdministratrivos');

//1 dejullo ...usado como 
Route::resource('ajaxItems','ItemController');
//2 de jullo
// ProjectoLicenciatura
Route::resource('consulta','ConsultaController');
Route::resource('doenca','DoencaController');
Route::resource('especialidade','EspecialidadeController');
Route::resource('tecnico_saude','TecnicoSaudeController');
Route::resource('receita','ReceitaController');
Route::resource('medicamento','MedicamentoController');
Route::resource('gestante','GestanteController');
///
Route::resource('beneficiado','BeneficiadoController');
Route::resource('distrito','DistritoController');
Route::resource('provincia','ProvinciaController');
Route::resource('projecto','ProjectoController');
Route::resource('financiamento','FinanciamentoTipoController');
Route::resource('financiador','FinanciadorController');
Route::resource('desembolso','DesembolsoController');
Route::resource('postoAdministrativo','PostoAdministrativoController'); 
Route::resource('tipo-beneficiario','BeneficiarioTipoController');
Route::resource('/projecto-provincias', 'Projecto_Distritos_ProvinciasController');
Route::resource('file','FileController');
Route::get('projectoProvincias/{id}', 'Projecto_Distritos_ProvinciasController@provincias')->name('p');
Route::post('salvarProvincias/', 'Projecto_Distritos_ProvinciasController@salvarProvincias')->name('salvarProvincias');
Route::get('apagarProvincias/{id_projecto}/{id_provincia}', 'Projecto_Distritos_ProvinciasController@apagarProvincias')->name('apagarProvincias');
Route::get('apagarDistritos/{id_projecto}/{id_provincia}/{id_distrito}', 'Projecto_Distritos_ProvinciasController@apagarDistritos')->name('apagarDistritos');
Route::get('index_adicionarDistritos/projecto/{id_projecto}/provincia/{id_provincia}', 'Projecto_Distritos_ProvinciasController@index_adicionarDistritos')->name('index_adicionarDistritos');
Route::post('salvar_Provincias_Distritos/', 'Projecto_Distritos_ProvinciasController@salvar_Provincias_Distritos')->name('salvar_Provincias_Distritos');

Route::post('projecto_tipoBeneficiario/', 'Projecto_TipoBeneficiarioController@salvarTiposBeneficiarios')->name('salvarTiposBeneficiarios');
Route::get('projecto-tipobeneficiario/{id_projecto}','Projecto_TipoBeneficiarioController@index')->name('projecto_tipoBeneficiario');;
Route::get('apagarTipoBeneficiario/{id_projecto}/{id_tipoBeneficiario}', 'Projecto_TipoBeneficiarioController@apagarTipoBeneficiario')->name('apagarTipoBeneficiario');
Route::delete('clearfile/{id_projecto}/{id_file}','FileController@delete')->name('clearfile');;
Route::get('/download_file/{file_id}', 'FileController@download_file')->name('download_file');
// index cadastro 
Route::get('/tabelasgerais', 'BeneficiadoController@tabelas')->name('tabelasgerais');


Route::get('/t', function() {
    
   
});


Route::get('/biblioteca', 'BibliotecaController@index')->name('biblioteca');
          
//pega o proximo id do beneficiario 
Route::get('codigo','NavegacaoController@obterCodigo');
//pega todas Provincias 
Route::get('obterProvincias','NavegacaoController@obterProvincias')->name('obterProvincias');
//todos financiadores para a tela dos projectos//combobox
Route::get('financiadores','NavegacaoController@obterFinanciadores');
//todos financiadores para a tela dos projectos//combobox
Route::get('distritos','NavegacaoController@obterDistritos');
//pega todas Provincias 
Route::get('obterTiposBeneficiarios','NavegacaoController@obterTiposBeneficiarios')->name('obterTiposBeneficiarios');
//pega todas financiadores de um projecto
Route::get('obterFinanciadoresProjecto/{id_projecto}','NavegacaoController@obterFinanciadoresProjecto')->name('obterFinanciadoresProjecto');




//usamos para testes
Route::resource('testes','TesteController');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
  
    dd("Cache Clear All");
});


Route::post('testar/', 'TesteController@store');