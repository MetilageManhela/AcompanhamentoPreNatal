@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
 @section('title', 'Inicio | Desembolso')

@section('sidebar')
 @parent
@endsection

@section('content')
<html>
<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
 <div class="content-wrapper">
   <div class="content-header">
       <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Desembolso </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active"> Lista de Desembolsos </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="card mt-5">
         <div class="card-header" style="background-color:cadetblue">
            <div class="col-md-12">
                 
                    <div>
                      <a href="javascript:void(0)" id="createNewItem">
                          <button type="submit" id="cod"class="btn btn-primary fa fa-plus-square cod"> Criar </button>
                    </a>
<!--                        <button>  <a class="btn btn-success ml-5" href="javascript:void(0)" id="createNewsem"> Criar</a> </button>-->
                  </div>
            </div>
         </div>
         <div class="card-body">
           <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                         <th>C??digo Beneficiario</th>
                        <th>Valor</th>
                        <th>Reembolso</th>
                        <th>Taxa de Execucao</th>
                       
                        <th width="18%">Accoes</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="modal fade " id="ajaxModel" aria-hidden="true" >
<!--            Mudamos essa classe para alterar o taman do modal //modal-dialog modal-lg-->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#0b301a; color: white">
                      
                        <h4 class="modal-title" id="modelHeading"></h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span style="color: red; "aria-hidden="true">&times; </span>
                        </button>  
                    </div>
           
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal">
                           <input type="hidden" name="Item_id" id="Item_id">
                           <input type="hidden" name="provincia" id="provincia">
                           <input type="hidden" name="distrito" id="distrito">
                          
                           
                            <div class="row col-md-12" >
                              <div class="col-sm-4">
                                <div class="form-group ">
                                  <label for="name" >Codigo</label>
                                     <div class="">
                                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" value="" maxlength="50" disabled="disabled">
                                    </div>
                               </div>
                            </div>
                          <div class="col-sm-8">
                              <div class="form-group">
                                <label for="nome" >Nome</label>
                                 <div class="">
                                 <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="" maxlength="50" required="">
                                </div>
                            </div>
                           </div>
                         </div>
                           <div class="row col-md-12">  
                             
                              <div class="form-group col-md-6">
                                 <label> Endereco </label>
                                 <input type="text" id= "endereco" name="endereco" required=""  class="form-control" placeholder="Endereco">
                            </div>
                                <div class="form-group col-md-6">
                                 <label> Email </label>
                                 <input type="text" id= "email" name="email" required=""  class="form-control" placeholder="Email">
                            </div>
                            </div>
                             <div class="row col-md-12">  
                             <div class="col-sm-3">
                                <div class="form-group ">
                                 <label>Sexo</label>
                                 <select class="form-control" id="inputState" name="sexo">
                                 <option selected value="M"> Masculino </option>
                                 <option selected value="F"> Feminino</option>
                                 <option selected value="null"> Selecione </option>
                                </select>
                                </div>
                               </div>
                              <div class="form-group col-md-4">
                                 <label> Nuit </label>
                                 <input type="text" id= "nuit" name="nuit" required=""  class="form-control" placeholder="Nuit">
                            </div>
                                <div class="col-sm-5">
                                <div class="form-group ">
                                 <label>Provincia</label>
                                 <select class="form-control" id="provincia_id" name="provincia_id">
                                
                                 <option selected value=1> Maputo</option>
                                 <option selected value=2> Gaza </option>
                                 <option selected value=3> Inhambane</option>
                                  <option selected value=4> Manica</option>
                                 <option selected value=5> Sofala </option>
                                 <option selected value=6> Zambezia</option>
                                 <option selected value=7> Tete </option>
                                 <option selected value=8"> Nampula </option>
                                  <option selected value=9> Niassa </option>
                                 <option selected value=10> Cabo Delgado </option>
                                </select>
                                </div>
                               </div>
                            </div>
                           
                           <div class="row col-md-12">  
                             <div class="col-sm-6">
                                <div class="form-group ">
                                 <label>Distrito</label>
                                 <select class="form-control" id="distrito_id" name="distrito_id">
                                 
                                 <option value="null"> Selecione a Provincia Primeiramente </option>
                                </select>
                                </div>
                               </div>
                              
                                <div class="col-sm-6">
                                <div class="form-group ">
                                 <label>Posto Administrativo</label>
                                 <select class="form-control" id="postoAdministrativo" name="postoAdministrativo">
                                 
                                 <option value="null"> Selecione </option>
                                </select>
                                </div>
                               </div>
                            </div>
                           
                      <div class="row col-md-12"> 
                          
                      
                            <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-primary" id="saveBtn" value="create"> Gravar
                             </button>
                                </div>
                            </div>
                        </form>
                    
                </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</body>
<script type="text/javascript">
  $(function () {
     
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('beneficiado.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nome', name: 'nome'},
            {data: 'nuit', name: 'nuit'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewItem').click(function () {
        $('#saveBtn').val("create-Item");
        $('#Item_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Efectuar o Reembolso");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editItem', function () {
      var Item_id = $(this).data('id');
      $.get("{{ route('beneficiado.index') }}" +'/' + Item_id +'/edit', function (data) {
          $('#modelHeading').html("Editar o Reembolso");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#codigo').val(data.id);
          $('#Item_id').val(data.id);
          $('#nome').val(data.nome);
          $('#email').val(data.email);
          $('#endereco').val(data.endereco);
          $('#nuit').val(data.nuit);
          
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('A enviar..');
    
        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('beneficiado.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#ItemForm').trigger("reset");
              $('#ajaxModel').modal('hide');
               $('#saveBtn').html('Gravar');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Gravar');
          }
      });
    });
        $('body').on('click', '.deleteItem', function () {
        var Item_id = $(this).data("id");
        var confirmar=confirm("Tem a Certeza Que Deseja Apagar!");
        
        if(confirmar){
        $.ajax({
            type: "DELETE",
            url: "{{ route('beneficiado.store') }}"+'/'+Item_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
       };
    });
    
     
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

         $('#cod').click(function () {
          $.ajax({
          url: "codigo",
          type: "GET",
          dataType: 'json',
          success: function (data) {
          $('#codigo').val(data);
          }
         });
    });
</script>
<!--<script>
 $('body').on('click', '.editItem', function () {
     $('#ItemForm').trigger("reset");
     });
    </script>-->

@endsection
<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<!-- ChartJS -->
<script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminLTE/plugins/sparklines/sparkline.js') }}" type="text/javascript"></script>
<!-- JQVMap -->
<script src="{{ asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}" type="text/javascript"></script>
<!-- Summernote -->
<script src="{{ asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}" type="text/javascript"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-validation/additional-methods.min.js') }}" type="text/javascript"></script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      form.submit();
     // alert( "Formulario Submetido" );
    }
  });
  $('#registroEstudante').validate({
    rules: {
//      email: {
//        required: true,
//        email: true,
//      },
      telefone: {
        required: true,
        minlength: 9
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

