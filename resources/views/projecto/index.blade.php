<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multilpe Select</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    
</head>
<body>

    <style>
        .mul-select{
            width: 100%;
            background-color:  yellow;
            
        }
    </style>
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Select Multilpe</h1>    
        </div>
        <br>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="form-group">
                    <select class="mul-select" multiple="true" id="distrito_id" name="distrito_id">
                       <option value="Cambodia">Cambodia</option>
                       <option value="Cambodia">Cambodia</option>
                       <option value="Cambodia">Cambodia</option>
                       <option value="Cambodia">Cambodia</option>
                       <option value="Cambodia">Cambodia</option>
                       <option value="Cambodia">Cambodia</option>
                       
                    </select>
                </div> 
           </div>
        </div>
    </div>
    
     <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="form-group">
                    <select class="mul-select" multiple="true" id="distrito_id" name="distrito_id">
                       <option value="Cambodia">Cambodia</option>
                       
                    </select>
                </div> 
           </div>
        </div>
    <div class="col-sm-5">
                                <div class="form-group ">
                                 <label>Provincia</label>
                                 <select class="form-control" id="provincia_id" name="provincia_id">
                                 </select>
                                </div>
                               </div>
                            </div>
                           
                           <div class="row col-md-12">  
                             <div class="col-sm-6">
                                <div class="form-group ">
                                 <label>Distrito</label>
                                 <select class="form-control" id="distrito_idd" name="distrito_idd">
                                 
                                 <option value=""> Selecione a Provincia Primeiramente </option>
                                </select>
                                </div>
                               </div>
     
    <script>
//        jQuery.noConflict();
        $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "select country", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>
     <script>
    jQuery(document).ready(function ($) {
           $.ajax({
           url:'provincias/',  
           type: 'GET',
           dataType: 'json',
           }).done(function (data) {
            var select = $('select[name=provincia_id]');
            select.empty();
            select.append('<option value="" > Seleciona a  Provincia </option>');
            $.each(data,function(key, value) {
            select.append('<option value="' + value.id + '">' + value.nomeProvincia + '</option>');
           });
           console.log("sucesso");
           })
          });
          
          
          
           jQuery(document).ready(function ($) {
   $('select[name=provincia_id]').on('change', function () {
        //guarda  no input a provincia
        var provincia = $('#provincia_id').find(":selected").text();//pega a provincia
         var distrito=$('input[name=provincia]'); 
          distrito.val(provincia);
          var selected = $(this).find(":selected").attr('value');
           $.ajax({
           url:'provincia/'+selected+'/distritos/',  
           type: 'GET',
           dataType: 'json',
           }).done(function (data) {
            var select = $('select[name=distrito_id]');
            select.empty();
            select.append('<option value="" > Seleciona o Distrito </option>');
            $.each(data,function(key, value) {
            select.append('<option value="' + value.id + '">' + value.nomeDistrito + '</option>');
           });
           console.log("sucesso");
          })
        });
        
    });
    </script>
    
</body>
</html>