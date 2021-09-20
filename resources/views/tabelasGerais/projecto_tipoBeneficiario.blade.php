@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
 @section('title', 'Inicio | Projecto ')

@section('sidebar')
 @parent
@endsection

@section('content')
<html>
<head>
  
  
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
 <div class="content-wrapper">
   <div class="content-header">
       <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Tipos de Beneficiários </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active"> Lista de Tipos de Beneficiarios </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        
     
     
 <div class="container">
  <div class="row" style="margin-top: -50px">
     <div class="col-md-8">
       <div class="card mt-5">
           <div class="card-header" style="background-color:cadetblue">
            <div class="col-md-12">
                <div class="">
                    <button class="btn btn-warning hBack"><i class="fa fa-arrow-left"></i></button>
                     <a href="javascript:void(0)" id="createNewItem">
                          <button type="submit" class="btn btn-primary  border-dark fa fa-plus-square adicionar"> Adicionar </button>
                     </a>
                    
                     
                     <h5 style="float: right"> Tipos Beneficiarios </h5>
                  </div>
            </div>
         </div>
         <div class="card-body">
<!--                <table id="" class="table table-bordered table-hover">-->
                    <table id="" class="table table-sm  table-striped">
                        
                  <thead>
                  <tr>
                    <th>Código</th>
                    <th>Província</th>
                    
                    <th style="width:165px">Acções</th>

                  </tr>
                  </thead>
                  <tbody>
                  @if(!empty($data) && $data->count())
                     @foreach($data as $key => $beneficiarioTipo)
                  <tr>
                    <td> {{$beneficiarioTipo->id}}</td>
                    <td>{{$beneficiarioTipo->descricao}}</td>    
                    
                    
                    <td>
                        <form>
 <!--                           remove provincias de um projecto-->
                           <a href="{{route('apagarTipoBeneficiario', ['id_projecto' => Request::segment(2), 'id_tipoBeneficiario' => $beneficiarioTipo->id])}}"    class="apagar btn btn-danger btn-sm ">Apagar</a>
<!--                           adiciona distritos a um projecto-->
                 
                         </form>
                        </td>
                  </tr>
                      @endforeach
                      @else
                      <tr>
                      <td colspan="10">Sem dados.</td>
                      </tr>
                      @endif
                  </tbody>
                 </table>
             <div class="card-footer clearfix pagination pagination-sm m-0 float-right">
                <ul class="pagination pagination-sm m-0 float-right">
                   {!! $data->links() !!}
                </ul>
              </div>
            
         <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#0b301a; color: white">
                      
                        <h4 class="modal-title" id="modelHeading"></h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span style="color: red; "aria-hidden="true">&times; </span>
                        </button>  
                    </div>
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal" method="POST" action="{{route('salvarTiposBeneficiarios')}}">
                             @csrf
<!--                             input que leva por paramentro o id do projecto-->
                             <input type="hidden" name="projecto_id" id="projecto_id " value="{{Request::segment(2)}}">
                             <div class="form-group select2-purple col-md-12" >
                                 <label></label>
                                 <select class="mul-select " multiple="true" name="opcoes[]" id="provincia_id"  >
                                   
                                 </select>
                                </div>
                             <div class="col-md-12">
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
        <div class="col-md-4">
       <div class="card mt-5">
           <div class="card-header" style="">
            <div class="col-md-12">
                <h5> Dados Do Projecto </h5>
            </div>
         </div>
         <div class="card-body">
<!--                <table  class="table table-bordered table-hover">-->
                 <table class="table table-condensed  table-striped">
                  <thead>
                  
                  </thead>
                  <tbody>
                   <tr>
                     <th>Código do Projecto</th>
                    <td>{{$dataa->id}}</td>
                  </tr>
                   <tr>
                     <th>Descricao</th>
                    <td>{{$dataa->descricao}}</td>
                  </tr>
                  <tr>
                     <th>Data de Inicio</th>
                    <td>{{$dataa->dataInicio}}</td>
                  </tr>
                  <tr>
                     <th>Data de Término</th>
                    <td>{{$dataa->dataTermino}}</td>
                  </tr>
                  
                  </tbody>
                  
                </table>
         </div>
   </div>
 </div>
</div>
 </div> 
 </div>
<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="https://infordata.co.mz/"> Infodata</a>.</strong>
    Todos direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b> Versão </b> 1.0.0
    </div>
  </footer>
</body>


<script type="text/javascript">
 
  
   
  $(function () {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
        $('#createNewItem').click(function () {
        $('#saveBtn').val("create-Item");
        $('#Item_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Adicionar Tipos de Beneficiarios");
        $('#ajaxModel').modal('show');
    });
 });
  
  
</script>




<script>
 
    // funcao que permite voltar a tela anterior com o clique do botao "hBack"
 $(".hBack").on("click", function(e){
    e.preventDefault();
    
    window.history.back();
});
   
   jQuery(document).ready(function ($) {
  
       
         $.ajax({
           url:"{{ route('obterTiposBeneficiarios') }}",  
           type: 'GET',
           dataType: 'json',
           }).done(function (data) {
            var select=$('#provincia_id');
            select.empty();
            $.each(data,function(key, value) {
            select.append('<option value="' + value.id + '">' + value.descricao + '</option>');
           });
           console.log("sucesso");
           
           
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

<!---------------------------------------------------------------------------------->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{ asset('AdminLTE/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"> type="text/javascript"</script>
<!-- InputMask -->
<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/inputmask/jquery.inputmask.min.js') }}" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}" type="text/javascript"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- BS-Stepper -->
<script src="{{ asset('AdminLTE/plugins/bs-stepper/js/bs-stepper.min.js') }}" type="text/javascript"></script>
<!-- dropzonejs -->
<script src="{{ asset('AdminLTE/plugins/dropzone/min/dropzone.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>
<!-- Page specific script -->


  <script>
        $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "Tipos de Beneficiários", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>

    
  

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      form.submit();
     }
  });
  $('#ItemForm').validate({
    rules: {
      descricao: {
        required: true,
       
      },
      financiador_id: {
        required: true,
       
      },
    
      dataInicio: {
        required: true
      },
      dataTermino: {
        required: true
      },
    },
    messages: {
      descricao: {
        required: "Por favor digite a descricao",
        descricao: "A descricao deve conter no min 4 caracters"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: ""
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
})
</script>


  

