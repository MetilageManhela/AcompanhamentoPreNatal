<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class fdnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
////sofala
//     App\Models\Distrito::create(['nomeDistrito'=>'Beira','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Búzi','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Caia','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Cheringoma','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Chibabava','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Dondo','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Gorongosa','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Machanga','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Marromeu','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Muanza','provincia_id'=>4]);
//       App\Models\Distrito::create(['nomeDistrito'=>'Nhamatanda','provincia_id'=>4]);               
//       App\Models\Distrito::create(['nomeDistrito'=>'Maringué','provincia_id'=>4]);  
//       App\Models\Distrito::create(['nomeDistrito'=>'Chemba','provincia_id'=>4]);   
//       
//       
//       //manica
//       App\Models\Distrito::create(['nomeDistrito'=>'Chimoio','provincia_id'=>5]); 
//       App\Models\Distrito::create(['nomeDistrito'=>'Tambara','provincia_id'=>5]); 
//        App\Models\Distrito::create(['nomeDistrito'=>'Sussundenga','provincia_id'=>5]); 
//         App\Models\Distrito::create(['nomeDistrito'=>'Mossurize','provincia_id'=>5]); 
//          App\Models\Distrito::create(['nomeDistrito'=>'Manica','provincia_id'=>5]); 
//           App\Models\Distrito::create(['nomeDistrito'=>'Macossa','provincia_id'=>5]); 
//            App\Models\Distrito::create(['nomeDistrito'=>'Machaze','provincia_id'=>5]); 
//             App\Models\Distrito::create(['nomeDistrito'=>'Macate','provincia_id'=>5]); 
//              App\Models\Distrito::create(['nomeDistrito'=>'Guro','provincia_id'=>5]); 
//               App\Models\Distrito::create(['nomeDistrito'=>'Gondola','provincia_id'=>5]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Vanduzi','provincia_id'=>5]);
// //   tete   
//  App\Models\Distrito::create(['nomeDistrito'=>'Marávia','provincia_id'=>6]);  
//    App\Models\Distrito::create(['nomeDistrito'=>'Marara','provincia_id'=>6]); 
//      App\Models\Distrito::create(['nomeDistrito'=>'Magoé','provincia_id'=>6]); 
//    App\Models\Distrito::create(['nomeDistrito'=>'Macanga','provincia_id'=>6]); 
//      App\Models\Distrito::create(['nomeDistrito'=>'Dôa','provincia_id'=>6]); 
//        App\Models\Distrito::create(['nomeDistrito'=>'Chiuta','provincia_id'=>6]);
//  App\Models\Distrito::create(['nomeDistrito'=>'Chifunde','provincia_id'=>6]); 
//    App\Models\Distrito::create(['nomeDistrito'=>'Changara','provincia_id'=>6]); 
//      App\Models\Distrito::create(['nomeDistrito'=>'Cahora-Bassa','provincia_id'=>6]); 
//        App\Models\Distrito::create(['nomeDistrito'=>'Angónia','provincia_id'=>6]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Mutarara','provincia_id'=>6]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Moatize','provincia_id'=>6]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Tete','provincia_id'=>6]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Tsangano','provincia_id'=>6]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Zumbo','provincia_id'=>6]); 
//
// //   zambezia   
// App\Models\Distrito::create(['nomeDistrito'=>'Mocubela','provincia_id'=>7]); 
//  App\Models\Distrito::create(['nomeDistrito'=>'Inhassunge','provincia_id'=>7]); 
//   App\Models\Distrito::create(['nomeDistrito'=>'Ile','provincia_id'=>7]); 
//    App\Models\Distrito::create(['nomeDistrito'=>'Gurué','provincia_id'=>7]); 
//     App\Models\Distrito::create(['nomeDistrito'=>'Gilé','provincia_id'=>7]); 
//      App\Models\Distrito::create(['nomeDistrito'=>'Derre','provincia_id'=>7]); 
//       App\Models\Distrito::create(['nomeDistrito'=>'Chinde','provincia_id'=>7]); 
//        App\Models\Distrito::create(['nomeDistrito'=>'Alto Molócue','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Mocuba','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Milange','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Maganja da Costa','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Lugela','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Luabo','provincia_id'=>7]);      
//App\Models\Distrito::create(['nomeDistrito'=>'Mopeia','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Morrumbala','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Mulevala','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Namacurra','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Namarroi','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Nicoadala','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Pebane','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Quelimane','provincia_id'=>7]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Molumbo','provincia_id'=>7]);
//
////   Nampula  
// App\Models\Distrito::create(['nomeDistrito'=>'Mogovolas','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Mogincual','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Memba','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Mecubúri','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Meconta','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Malema','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Liúpo','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Larde','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Lalaua','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Ilha de Moçambique','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Eráti','provincia_id'=>8]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Angoche','provincia_id'=>8]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Muecate','provincia_id'=>8]);
//  App\Models\Distrito::create(['nomeDistrito'=>'Mossuril','provincia_id'=>8]);
//   App\Models\Distrito::create(['nomeDistrito'=>'Monapo','provincia_id'=>8]);
//    App\Models\Distrito::create(['nomeDistrito'=>'Moma','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Ribaué','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Rapale','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Nampula','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Nacala Porto','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Nacala-a-Velha','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Nacarôa','provincia_id'=>8]);
//App\Models\Distrito::create(['nomeDistrito'=>'Murrupula','provincia_id'=>8]);
//
////   Niassa  
//App\Models\Distrito::create(['nomeDistrito'=>'Metarica','provincia_id'=>9]); 
//  App\Models\Distrito::create(['nomeDistrito'=>'Mecula','provincia_id'=>9]); 
//   App\Models\Distrito::create(['nomeDistrito'=>'Mecanhelas','provincia_id'=>9]); 
//    App\Models\Distrito::create(['nomeDistrito'=>'Mavago','provincia_id'=>9]); 
//     App\Models\Distrito::create(['nomeDistrito'=>'Maúa','provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Marrupa','provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Mandimba','provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Majune','provincia_id'=>9]); 
//  App\Models\Distrito::create(['nomeDistrito'=>'Lichinga','provincia_id'=>9]); 
//   App\Models\Distrito::create(['nomeDistrito'=>'Lago','provincia_id'=>9]); 
//    App\Models\Distrito::create(['nomeDistrito'=>'Cuamba','provincia_id'=>9]); 
//     App\Models\Distrito::create(['nomeDistrito'=>'Chimbonila','provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Sanga','provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Nipepe','provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>"N'gauma",'provincia_id'=>9]); 
// App\Models\Distrito::create(['nomeDistrito'=>'Muembe','provincia_id'=>9]); 
//
// //   Cabo Delgado 
//App\Models\Distrito::create(['nomeDistrito'=>'Mueda','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Montepuez','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Mocímboa da Praia','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Metuge','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Meluco','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Mecúfi','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Macomia','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Ibo','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Chiúre','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Balama','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Ancuabe','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Quissanga','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Pemba','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Palma','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Nangade','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Namuno','provincia_id'=>10]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Muidumbe','provincia_id'=>10]); 
//
// // Maputo Cidade 
//App\Models\Distrito::create(['nomeDistrito'=>'KaNyaka','provincia_id'=>11]); 
//App\Models\Distrito::create(['nomeDistrito'=>'KaTembe','provincia_id'=>11]); 
//App\Models\Distrito::create(['nomeDistrito'=>'KaMubukwana','provincia_id'=>11]); 
//App\Models\Distrito::create(['nomeDistrito'=>'KaMavota','provincia_id'=>11]); 
//App\Models\Distrito::create(['nomeDistrito'=>'KaMaxaquene','provincia_id'=>11]); 
//App\Models\Distrito::create(['nomeDistrito'=>'Nlhamankulu','provincia_id'=>11]); 
//App\Models\Distrito::create(['nomeDistrito'=>'KaMpfumo','provincia_id'=>11]); 
//Distrito Urbano de KaMpfumo
//Distrito Urbano de Nlhamankulu
//Distrito Urbano de KaMaxaquene
//Distrito Urbano de KaMavota
//Distrito Urbano de KaMubukwana
//Distrito Municipal de KaTembe
//Distrito Municipal de KaNyaka 

 

               // Gaza
                //Bilene
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chissano','distrito_id'=>9]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mazivila','distrito_id'=>9]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Messano','distrito_id'=>9]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Praia de Bilene','distrito_id'=>9]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macuane','distrito_id'=>9]);

//Chibuto
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Chibuto','distrito_id'=>10]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Alto Changane','distrito_id'=>10]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'chaimite','distrito_id'=>10]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Changanine','distrito_id'=>10]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Godide','distrito_id'=>10]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Malehice','distrito_id'=>10]);

///Chicualacuala
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chicualacuala','distrito_id'=>11]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mapai','distrito_id'=>11]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Pafuri','distrito_id'=>11]);


// chigubo
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chigubo','distrito_id'=>12]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ndindiza','distrito_id'=>12]);

// chokwe
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Chokwe','distrito_id'=>13]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lionde','distrito_id'=>13]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macarretane','distrito_id'=>13]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Xilembene','distrito_id'=>13]);


//chongoene
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chongoene','distrito_id'=>14]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mazucane','distrito_id'=>14]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nguzene','distrito_id'=>14]);

//guija
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Canicado','distrito_id'=>15]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chivonguene','distrito_id'=>15]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mubanguene','distrito_id'=>15]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nalazi','distrito_id'=>15]);


///Limpopo

App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chissano','distrito_id'=>16]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chicumbane','distrito_id'=>16]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zonguene','distrito_id'=>16]);


//Mabalane
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mabalane','distrito_id'=>17]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Combomune','distrito_id'=>17]);


//Manjacaze
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mandlacaza','distrito_id'=>18]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chalala','distrito_id'=>18]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chibonzane','distrito_id'=>18]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chidenguele','distrito_id'=>18]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macuacua','distrito_id'=>18]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mazucane','distrito_id'=>18]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nguzene','distrito_id'=>18]);


//Mapai
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mapai','distrito_id'=>19]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Machaila','distrito_id'=>19]);



///Massangena
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Massangena','distrito_id'=>20]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muvue','distrito_id'=>20]);


///	Massingir
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Massingir','distrito_id'=>21]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mavondze','distrito_id'=>21]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zulo','distrito_id'=>21]);

//xai-xai
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chicumbane','distrito_id'=>22]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chongoene','distrito_id'=>22]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zonguene','distrito_id'=>22]);



//Inhambane
//Funhalouro
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Funhalouro','distrito_id'=>23]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Tome','distrito_id'=>23]);


//Govuro
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nova Mambone','distrito_id'=>24]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Save','distrito_id'=>24]);


//Homoíne
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Homoine','distrito_id'=>25]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Homoine','distrito_id'=>25]);


//Inharrime
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inharrime','distrito_id'=>27]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucumbi','distrito_id'=>27]);


//Inhassoro
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inhassoro','distrito_id'=>28]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Bazaruto','distrito_id'=>28]);



//Jangamo
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Jangamo','distrito_id'=>29]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cumbana','distrito_id'=>29]);


//Mabote
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mabote','distrito_id'=>30]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zimane','distrito_id'=>30]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zinave','distrito_id'=>30]);


//Massinga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Massinga','distrito_id'=>31]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chicomo','distrito_id'=>31]);

//Morrumbene
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Morrumbene','distrito_id'=>32]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucodoene','distrito_id'=>32]);

//Vilanculos
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Vilanculos','distrito_id'=>33]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mapinhane','distrito_id'=>33]);


//Zavala
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quissico','distrito_id'=>34]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zandamela','distrito_id'=>34]);



///Sofala

//Cidade de Beira
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Central','distrito_id'=>35]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Munhava','distrito_id'=>35]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inhamizua','distrito_id'=>35]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Manga Loforte','distrito_id'=>35]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhangau','distrito_id'=>35]);

//buzi
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Buzi','distrito_id'=>36]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Estaquinha','distrito_id'=>36]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nova-Sofala','distrito_id'=>36]);
//Caia
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Caia','distrito_id'=>37]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Murraca','distrito_id'=>37]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Sena','distrito_id'=>37]);


//Cheringoma
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inhaminga','distrito_id'=>38]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inhamitanga','distrito_id'=>38]);


//Chibabava
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chibabava','distrito_id'=>39]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Goonda','distrito_id'=>39]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muxungue','distrito_id'=>39]);


//Dondo
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Dondo','distrito_id'=>40]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mafambisse','distrito_id'=>40]);

//Gorongosa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Gorongosa','distrito_id'=>41]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhamadzi','distrito_id'=>41]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Vanduzi','distrito_id'=>41]);


//Machanga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Machanga','distrito_id'=>42]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Divinhe','distrito_id'=>42]);



//Marromeu
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Marromeu','distrito_id'=>43]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chupanga','distrito_id'=>43]);



//Muanza
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muanza','distrito_id'=>44]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Galinha','distrito_id'=>44]);


//Nhamatanda
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhamatanda','distrito_id'=>45]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Tica','distrito_id'=>45]);

//Maringue
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maringue','distrito_id'=>46]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Canxixe','distrito_id'=>46]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Subui','distrito_id'=>46]);     
        
 
//Chemba
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chemba','distrito_id'=>47]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiramba','distrito_id'=>47]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mulima','distrito_id'=>47]);     
        
        
    
//manica
//Barue
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Catandica','distrito_id'=>159]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Choa','distrito_id'=>159]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhampassa','distrito_id'=>159]);     
        
    
//Gondola
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Gondola','distrito_id'=>57]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Amatongas','distrito_id'=>57]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cafumpe','distrito_id'=>57]);     
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inchope','distrito_id'=>57]);
 



//Macate
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macate','distrito_id'=>55]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zembe','distrito_id'=>55]);

    

//vanduze
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Matsinho','distrito_id'=>58]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Vanduzi','distrito_id'=>58]);


//Guro
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Guro','distrito_id'=>56]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mandie','distrito_id'=>56]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mungari','distrito_id'=>56]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhamassonge','distrito_id'=>56]);


  
//Machaze
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Machaze','distrito_id'=>54]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Save','distrito_id'=>54]);



//Macossa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macossa','distrito_id'=>53]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nguawala','distrito_id'=>53]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhamangua','distrito_id'=>47]);


//Manica
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Manica','distrito_id'=>52]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Machipanda','distrito_id'=>52]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Messica','distrito_id'=>52]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mavonde','distrito_id'=>52]);

//Mossurize
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Dacata','distrito_id'=>51]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Espungabera','distrito_id'=>51]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiurairue','distrito_id'=>51]);


//Sussundenga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Sussundenga','distrito_id'=>50]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Dombe','distrito_id'=>50]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muhoa','distrito_id'=>50]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Rotanda','distrito_id'=>50]);



//Tambara
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhacolo','distrito_id'=>49]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Buzua','distrito_id'=>49]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhacafula','distrito_id'=>49]);



//Tete
//angonia
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ulongoe','distrito_id'=>68]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Domue','distrito_id'=>68]);

//Cahora-Bassa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chitholo','distrito_id'=>67]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chitima','distrito_id'=>67]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Songo','distrito_id'=>67]);


//Changara
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Luenha','distrito_id'=>66]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chioco','distrito_id'=>66]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mavara','distrito_id'=>66]);



//Chifunde
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chifunde','distrito_id'=>65]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mualadzi','distrito_id'=>65]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'NSadzo','distrito_id'=>65]);


//Chiuta
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Kazula','distrito_id'=>64]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mange','distrito_id'=>64]);


//Macanga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Furancungo','distrito_id'=>62]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chidzolomondo','distrito_id'=>62]);

//Magoé
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mpheende','distrito_id'=>61]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chinthopo','distrito_id'=>61]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mukumbura','distrito_id'=>61]);


//Marávia
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiputo','distrito_id'=>59]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Fingoe','distrito_id'=>59]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Molowera','distrito_id'=>59]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chepera','distrito_id'=>59]);


//Moatize
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Moatize','distrito_id'=>70]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Kambulatsitsi','distrito_id'=>70]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zombue','distrito_id'=>70]);


//	Mutarara
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nhamayabué','distrito_id'=>69]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Inhangoma','distrito_id'=>69]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chare','distrito_id'=>69]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Doa','distrito_id'=>69]);




//	Tsangano
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ntengo-Wambalame','distrito_id'=>72]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Tsangano','distrito_id'=>72]);



//Zumbo
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zumbo','distrito_id'=>73]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muze','distrito_id'=>73]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Zambue','distrito_id'=>73]);




//zambezia
//	Alto Molócue
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Alto Molócue','distrito_id'=>81]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nauela','distrito_id'=>81]);






//	Chinde
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Luabo','distrito_id'=>80]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Micaune','distrito_id'=>80]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chinde - Sede','distrito_id'=>80]);

//	Derre
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Derre','distrito_id'=>79]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Machindo','distrito_id'=>79]);

//	Gilé
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Gilé','distrito_id'=>78]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Alto Ligonha','distrito_id'=>78]);


//	Gurué
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Gurué','distrito_id'=>77]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lioma','distrito_id'=>77]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nepuagiua','distrito_id'=>77]);


//		Ile
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ile','distrito_id'=>76]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mulevala','distrito_id'=>76]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Socone','distrito_id'=>76]);


//	Inhassunge
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucupia','distrito_id'=>75]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Gonhane','distrito_id'=>75]);


//		Lugela
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lugela','distrito_id'=>85]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Munhamade','distrito_id'=>85]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muabanama','distrito_id'=>85]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Tacuane','distrito_id'=>85]);



//Maganja da Costa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maganja da Costa','distrito_id'=>84]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Bojone','distrito_id'=>84]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mocubela','distrito_id'=>84]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Tacuane','distrito_id'=>84]);




//Milange
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Milange','distrito_id'=>83]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Majaua','distrito_id'=>83]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Molumbo','distrito_id'=>83]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mongue','distrito_id'=>83]);


//	Mocuba
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Mocuba','distrito_id'=>82]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mugeba','distrito_id'=>82]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namajavira','distrito_id'=>82]);


//Mopeia
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mopeia','distrito_id'=>87]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Campo','distrito_id'=>87]);



//Morrumbala
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Morrumbala','distrito_id'=>88]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chire','distrito_id'=>88]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Derre','distrito_id'=>88]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Megaza','distrito_id'=>88]);

//		Namacurra
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namacurra','distrito_id'=>90]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucuse','distrito_id'=>90]);



//Namarroi
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namarroi','distrito_id'=>91]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Regone','distrito_id'=>91]);

//Nicoadala
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nicoadala','distrito_id'=>92]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maquival','distrito_id'=>92]);


//	Pebane
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Pebane','distrito_id'=>93]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mulela Mualama','distrito_id'=>93]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Naburi','distrito_id'=>93]);


//Nampula
//	Cidade de Nampula
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muatala','distrito_id'=>114]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muhala','distrito_id'=>114]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namikopo','distrito_id'=>114]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Napipine','distrito_id'=>114]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Natikire','distrito_id'=>114]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Urbano Central','distrito_id'=>114]);


//	Angoche
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Angoche','distrito_id'=>107]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Aube','distrito_id'=>107]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namaponda','distrito_id'=>107]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Boila - Nametoria','distrito_id'=>107]);



//Eráti
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Alua','distrito_id'=>106]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namiroa','distrito_id'=>106]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namapa','distrito_id'=>106]);

//Ilha de Mocambique
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade Ilha de Mocambique','distrito_id'=>105]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lumbo','distrito_id'=>105]);

//Lalaua
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Meti','distrito_id'=>104]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lalaua','distrito_id'=>104]);



//	Malema
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Malema','distrito_id'=>101]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chihulo','distrito_id'=>101]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mutuali','distrito_id'=>101]);


//		Meconta
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Meconta','distrito_id'=>100]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Corrane','distrito_id'=>100]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namialo','distrito_id'=>100]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'7 de Abril','distrito_id'=>100]);


//Mecubúri
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mecubúri','distrito_id'=>99]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Milhana','distrito_id'=>99]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muite','distrito_id'=>99]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namina','distrito_id'=>99]);


//Memba
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Memba','distrito_id'=>98]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chipene','distrito_id'=>98]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lurio','distrito_id'=>98]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mazue','distrito_id'=>98]);

//	Mogincual
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mongicuala','distrito_id'=>97]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quinga','distrito_id'=>97]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chunga','distrito_id'=>97]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quixaxe','distrito_id'=>97]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Liupo','distrito_id'=>97]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nametil','distrito_id'=>97]);


//Mogovolas
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nametil','distrito_id'=>96]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Calipo','distrito_id'=>96]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ilute','distrito_id'=>96]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muatua','distrito_id'=>96]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nanhupo','distrito_id'=>96]);

//Moma
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macone','distrito_id'=>111]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chalaua','distrito_id'=>111]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Larde','distrito_id'=>111]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucuali','distrito_id'=>111]);

//Monapo
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Monapo','distrito_id'=>110]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Itoculo','distrito_id'=>110]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Netia','distrito_id'=>110]);


//Mossuril
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mossuril','distrito_id'=>109]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lunga','distrito_id'=>109]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Matibane','distrito_id'=>109]);




//	Muecate
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muecate','distrito_id'=>108]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Imala','distrito_id'=>108]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muculuone','distrito_id'=>108]);


//	Murrupula
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Murrupula','distrito_id'=>118]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chinga','distrito_id'=>118]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nehessine','distrito_id'=>118]);


//	Cidade de Nacala Porto
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maiaia','distrito_id'=>115]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mutiva','distrito_id'=>115]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muanona','distrito_id'=>115]);


//	Nacala-a-Velha
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nacala-a-Velha','distrito_id'=>116]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Covo','distrito_id'=>116]);


//Nacarôa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nacarôa','distrito_id'=>117]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Intete','distrito_id'=>117]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Saua-Saua','distrito_id'=>117]);

 //	Rapale
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Rapale','distrito_id'=>113]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Anchilo','distrito_id'=>113]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mutivaze','distrito_id'=>113]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namaita','distrito_id'=>113]);

  //Ribaué
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ribaué','distrito_id'=>112]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Kunle','distrito_id'=>112]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Iapala','distrito_id'=>112]);
      
  




//Niassa
//Cuamba
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Cuamba','distrito_id'=>129]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Etatara','distrito_id'=>129]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lurio','distrito_id'=>129]);

//Lago
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Metangula','distrito_id'=>128]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cobue','distrito_id'=>128]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lunho','distrito_id'=>128]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maniamba','distrito_id'=>128]);
    

//Lichinga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chimbonila','distrito_id'=>127]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lione','distrito_id'=>127]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Meponda','distrito_id'=>127]);

//Majune
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Majune','distrito_id'=>126]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muaquia','distrito_id'=>126]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nairrubi','distrito_id'=>126]);

  

//Mandimba
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mandimba','distrito_id'=>125]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mitande','distrito_id'=>125]);


//Marrupa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Marrupa','distrito_id'=>124]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Marangira','distrito_id'=>124]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nungo','distrito_id'=>124]);


//Maúa
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maúa','distrito_id'=>123]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Maiaca','distrito_id'=>123]);



//Mavago
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mavago','distrito_id'=>122]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'MSawize','distrito_id'=>122]);

  //Mecanhelas
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mecanhelas','distrito_id'=>121]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiuta','distrito_id'=>121]);

  
//Mecula
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mecula','distrito_id'=>120]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Matondovela','distrito_id'=>120]);

  
//Metarica
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Metarica','distrito_id'=>119]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucumua','distrito_id'=>119]);

  
//Muembe
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muembe','distrito_id'=>134]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiconono','distrito_id'=>134]);

 //N'gauma
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Massangulo','distrito_id'=>133]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Itepela','distrito_id'=>133]);

 //Nipepe
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nipepe','distrito_id'=>132]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muipite','distrito_id'=>132]);

//Sanga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Sanga','distrito_id'=>131]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Lussimbeze','distrito_id'=>131]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macaloge','distrito_id'=>131]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Matchedje','distrito_id'=>131]);


//Cabo delgado

//Ancuabe
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ancuabe','distrito_id'=>145]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Metoro','distrito_id'=>145]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Meza','distrito_id'=>145]);


//Balama
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Balama','distrito_id'=>144]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Impiri','distrito_id'=>144]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Kwekwe','distrito_id'=>144]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mavala','distrito_id'=>144]);


//Chiúre
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiúre','distrito_id'=>143]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chiúre Velho','distrito_id'=>143]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Katapua','distrito_id'=>143]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mazeze','distrito_id'=>143]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namogelia','distrito_id'=>143]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ocua','distrito_id'=>143]);


//Ibo
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ibo','distrito_id'=>142]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quirimba Velho','distrito_id'=>142]);

//MAcomia
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Macomia','distrito_id'=>141]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chai','distrito_id'=>141]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mucojo','distrito_id'=>141]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quiterajo','distrito_id'=>141]);


//Mecúfi
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mecúfi','distrito_id'=>140]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Murrebue','distrito_id'=>140]);



//Meluco
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Meluco','distrito_id'=>139]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'	Muaguide','distrito_id'=>139]);


//Mocímboa da Praia
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mocímboa da Praia','distrito_id'=>137]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Diaca','distrito_id'=>137]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mbau','distrito_id'=>137]);



//Montepuez
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Cidade de Montepuez','distrito_id'=>136]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mapupulo','distrito_id'=>136]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mirate','distrito_id'=>136]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nairoto','distrito_id'=>136]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namanhumbir','distrito_id'=>136]);



//Mueda
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mueda','distrito_id'=>135]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chapa','distrito_id'=>135]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Imbuho','distrito_id'=>135]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Negomano','distrito_id'=>135]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'NGapa','distrito_id'=>135]);

//Muidumbe
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Muidumbe','distrito_id'=>151]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Chitunda','distrito_id'=>151]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Miteda','distrito_id'=>151]);



//	Namuno
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Namuno','distrito_id'=>150]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Hucula','distrito_id'=>150]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Machoca','distrito_id'=>150]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Meloco','distrito_id'=>150]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ncumpe','distrito_id'=>150]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Luli','distrito_id'=>150]);

//	Nangade
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Nangade','distrito_id'=>149]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Ntamba','distrito_id'=>149]);



//Palma
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Palma','distrito_id'=>148]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Olumbe','distrito_id'=>148]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Pundanhar','distrito_id'=>148]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quionga','distrito_id'=>148]);



//Metuge
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Metuge','distrito_id'=>138]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mieze','distrito_id'=>138]);


//Quissanga
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Quissanga','distrito_id'=>146]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Bilibiza','distrito_id'=>146]);
App\Models\PostoAdministrativo::create(['nomePostoAdministrativo'=>'Mahate','distrito_id'=>146]);













 











 
        
                 
         
         
         
         
         
         
         
         
    }
}
