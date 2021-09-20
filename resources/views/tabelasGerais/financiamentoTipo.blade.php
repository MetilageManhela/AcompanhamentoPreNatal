@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
 @section('title', 'Inicio | Cadastro')

@section('sidebar')
 @parent
@endsection

@section('content')
<html>
<head>
    <title> CRUD </title>
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
            <h1 class="m-0"> Tipos de Financiamentos </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active"> Lista de Tipos de Financiamentos </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="card mt-5">
           <div class="card-header" style="background-color:cadetblue" >
            <div class="col-md-12 row">
<!--                <div>
                    <button style="margin-right: 10px"class="btn btn-warning"> <i class="fas fa-fast-backward"></i> </button>  
                </div>-->
                 <div>
                      <a href="javascript:void(0)" id="createNewItem">
                          <button type="submit" class="btn btn-primary fa fa-plus-square"> Criar </button>
                      </a>
                </div>
            </div>
         </div>
         <div class="card-body">
           <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                         <th>Código</th>
                        <th>Nome</th>
                        <th>Taxa</th>
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
                     <div class="modal-header " style="background-color:#0b301a; color: white">
                       <h5 class="modal-title col-md-12" id="modelHeading"></h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span style="color: red; "aria-hidden="true">&times; </span>
                        </button>  
                    </div>
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal">
                           <input type="hidden" name="Item_id" id="Item_id">
                            <div class="form-group">
                               <label for="name" class=" control-label col-sm-12">Nome</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="" maxlength="50" required="">
                                </div>
                            </div>
                          
                            <div class="form-group">
                                 <label class="col-sm-12"> Descricao</label>
                                <div class="col-sm-12">
                                    <textarea id="descricao" name="descricao" required="" placeholder="Descricao" class="form-control"></textarea>
                                </div>
                            </div>
                             
                           <div class="form-group">
<!--                                <label for="name" class=" control-label col-sm-12">Nome</label>-->
                                <div class="col-sm-12">
                                    <label class="">Taxa</label>
                                    <input type="number" class="form-control" id="percentagem" min="0.00" max="100 "name="percentagem" placeholder="0.00" value="" maxlength="3" required="">
                                </div>
                            </div>
                           
                            <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-primary" id="saveBtn" value="create"> Gravar
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
        ajax: "{{ route('financiamento.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nome', name: 'nome'},
            {data: 'percentagem', name: 'percentagem'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewItem').click(function () {
        $('#saveBtn').val("create-Item");
        $('#Item_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Adicionar Tipo De Financiamento");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editItem', function () {
      var Item_id = $(this).data('id');
      $.get("{{ route('financiamento.index') }}" +'/' + Item_id +'/edit', function (data) {
          $('#modelHeading').html("Editar Tipo De Financiamento");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#Item_id').val(data.id);
          $('#nome').val(data.nome);
          $('#descricao').val(data.descricao);
         
          
      })
   });
    //salvar
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('A enviar..');
    
        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('financiamento.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#ItemForm').trigger("reset");
               $('#saveBtn').html('Gravar');
              $('#ajaxModel').modal('hide');
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
       var confirmar=confirm("Tem Certeza Que Deseja Apagar !");
        
        if(confirmar){
        $.ajax({
            type: "DELETE",
            url: "{{ route('financiamento.store') }}"+'/'+Item_id,
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
     
    }
  });
  $('#ItemFormm').validate({
    rules: {
      nome: {
       
        
      },
      nome: {
        required: true,
        minlength: 3
      },
      terms: {
        required: true
      },
    },
    messages: {
      nome: {
        required: "Coloque o nome",
        email: "Please no minimo 4"
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

