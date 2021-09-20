@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
 @section('title', 'Inicio | Posto Administrativo')

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
            <h1 class="m-0"> Postos Administrativos </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active"> Lista de Postos Administrativos </li>
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
                          <button type="submit" class="btn btn-primary fa fa-plus-square"> Criar </button>
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
                         <th>Código</th>
                        <th>Posto Administrativo</th>
                        <th>Distrito</th>
                      
                       
                        <th width="15%">Accoes</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
           <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title" id="modelHeading"></h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span style="color: red; "aria-hidden="true">&times; </span>
                        </button>  
                    </div>
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal">
                           <input type="hidden" name="Item_id" id="Item_id">
                           
                                <div class="form-group col-md-12">
                                 <label>Distrito</label>
                                 <select class="form-control" id="distrito_id" name="distrito_id">
                                 <option selected value=1> Um </option>
                                 <option selected value="null"> Aguarde... </option>
                                </select>
                                </div>
                            
                            <div class="form-group">
                                <label for="nome" class=" control-label col-sm-12">Nome Do Posto Administrativo</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nomePostoAdministrativo" name="nomePostoAdministrativo" placeholder="Introduza Nome do Posto" value="" maxlength="50" required="">
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label for="name" class=" control-label col-sm-12">Descricao</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Introduza Descricao" value="" maxlength="50" required="">
                                </div>
                            </div>
                           
                            <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Gravar
                             </button>
                            </div>
                        </form>
                    </div>
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
        ajax: "{{ route('postoAdministrativo.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nomePostoAdministrativo', name: 'nomePostoAdministrativo'},
            {data: 'distrito.nomeDistrito', name: 'nomeDistrito'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewItem').click(function () {
        $('#saveBtn').val("create-Item");
        $('#Item_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Adicionar Posto Administrativo");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editItem', function () {
      var Item_id = $(this).data('id');
      $.get("{{ route('postoAdministrativo.index') }}" +'/' + Item_id +'/edit', function (data) {
          $('#modelHeading').html("Editar Posto Administrativo");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#Item_id').val(data.id);
          $('#nomePostoAdministrativo').val(data.nomePostoAdministrativo);
          $('#descricao').val(data.descricao);
          
          
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('A enviar..');
    
        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('postoAdministrativo.store') }}",
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
        var confirmar=confirm("Tem Certeza Que DesejaApagar !");
        
        if(confirmar){
        $.ajax({
            type: "DELETE",
            url: "{{ route('postoAdministrativo.store') }}"+'/'+Item_id,
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
</script>


<script>
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
<script>
   jQuery(document).ready(function ($) {
     $('body').on('click', '#createNewItem', function () {
      $.ajax({
      url:'distritos/',  
      type: 'GET',
      dataType: 'json',
        }).done(function (data) {
         var select = $('select[name=distrito_id]');
         select.empty();
         select.append('<option value="" > Seleciona O Distrito </option>');
         $.each(data,function(key, value) {
         select.append('<option value="' + value.id + '">' + value.nomeDistrito + '</option>');
         });
         console.log("sucesso");
          })
        });
        
    });
    
    
</script>
<script>
   jQuery(document).ready(function ($) {
     $('body').on('click', '.edit', function () {
      $.ajax({
      url:'distritos/',  
      type: 'GET',
      dataType: 'json',
        }).done(function (data) {
         var select = $('select[name=distrito_id]');
         select.empty();
         select.append('<option value="" > Seleciona O Distrito </option>');
         $.each(data,function(key, value) {
         select.append('<option value="' + value.id + '">' + value.nomeDistrito + '</option>');
         });
         console.log("sucesso");
          })
        });
        
    });
    
    
</script>


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

