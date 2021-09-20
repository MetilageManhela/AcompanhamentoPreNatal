@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  
 @section('title', 'Inicio | Cadastro')

@section('sidebar')
 @parent
@endsection

@section('content')
<html>
<head>
  
  <script src="https://uicdn.toast.com/tui-app-loader/latest/tui-app-loader.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
    
    <!--datepicker-->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="/Content/demo.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.fr-fr.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.bg-bg.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.de-de.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.pt-br.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ru-ru.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.it-it.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.tr-tr.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.ja-jp.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.zh-cn.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.zh-tw.js" type="text/javascript"></script>
</head>
  <!--datepicker-->
    

</head>
 <div class="content-wrapper">
   <div class="content-header">
       <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Gestantes </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active"> Lista de Gestantes </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        
     
     
 <div class="container">
   <div class="row" style="margin-top: -50px">
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
<!--             <table class="table table-bordered data-table" id="tabela">-->
                 <table class="table table-condensed data-table stripe " id="tabela">
                     
                <thead>
                    <tr>
<!--                        <th width="5%">No</th>-->
                         <th>Código</th>
                         <th>Nome</th>
                         <th>Data de Entrada</th>
                         <th>Data de Nascimento</th>
                         <th>Morada</th>
                         <th>Estado Civil</th>
                        <th width="27%">Accoes</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
         <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#0b301a; color: white">
                      
                        <h4 class="modal-title" id="modelHeading"> </h4>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span style="color: red; "aria-hidden="true">&times; </span>
                        </button>  
                    </div>
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal"  enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" name="Item_id" id="Item_id">
                            
                           <div class="row ">    
                               <div class="form-group col-md-6">
                                 <label for="name" class=" control-label ">Nome</label>
                                  <div class="">
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Gestante" value="" maxlength="50" required="">
                                </div>
                               </div>
                                <div class="form-group col-md-4">
                                 <label for="" class=" control-label ">Bilhete de Identidade </label>
                                  <div class="">
                                
                                    <input class="form-control" id="nr_bi" name="nr_bi" placeholder="Bilhete de Identidade " value="" maxlength="50" >
                                </div>
                               </div>
                               <div class="form-group col-md-2">
                                 <label> Filhos</label>
                                 <select class="form-control" id="moeda" name="moeda">
                                 
                                 <option  value=1> 1 </option>
                                 <option  value=2> 2 </option>
                                 <option  value=3> 3 </option>
                                 <option  value=5> 4 </option>
                                 <option  value=6> 4 </option>
                                 <option  value=Mais> Mais </option>
                                </select>
                                </div>
                               
                             </div>
                             <div class="row ">  

                                 <div class="form-group col-md-4">
                                  <label> Data de Nascimento </label>
                                  <input id="dataNascimento" class="datepicker" readonly name="dataNascimento">
                                 </div>
                                 

                                  <div class="form-group col-md-4">
                                 <label for="name" class=" control-label ">Morada</label>
                                  <div class="">
                                    <input type="text" class="form-control" id="morada" name="morada" placeholder="Nome da Gestante" value="" maxlength="50" required="">
                                </div>
                               </div>
                                  <div class="form-group col-md-4">
                                 <label> Filhos</label>
                                 <select class="form-control" id="estadoCivil" name="estadoCivil">
                                  <option  value=null> Escolha </option>
                                 <option  value="Solteira"> Solteira </option>
                                 <option  value="Solteira"> Divorciada </option>
                                 <option  value="Solteira"> Casada</option>
                                
                                
                                </select>
                                </div>

                            </div>
  
                          <div class="">

                            <div class="row">
                              <div class="form-group col-md-12">
                                <label class=""> Observacao</label>
                                <div class="">
                                    <textarea id="observacao" name="observacao"  placeholder="Escreva aqui a sua observacao" class="form-control"></textarea>
                                </div>
                            </div>
                            </div>
                         
                            <div class="col-sm-offset-2 ">
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

 <script>
     //orcamentoBruto e o campo de orcamento com separacao de 
       $('body').on('blur', '#orcamentoBruto', function () {
          var numero=$('#orcamentoBruto').val();
          var clean=numero.replace(/[^0-9,]*/g,'').replace(',','.');
          $('#orcamento').val(clean);
      })
         //formata o campo dataTermino 
         $('#dataTermino').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
             locale: 'pt-br',
        });
        //formata o campo dataInicio 
         $('#dataNascimento').datepicker({
            uiLibrary: 'bootstrap4',
            format: "dd-mm-yyyy",
            locale: 'pt-br',
        });
       
    </script>


    
    
<script type="text/javascript">
 $(function () {
      $.noConflict();
       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('gestante.index') }}",
        columns: [
           
           // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nome', name: ''},
            {data: 'nr_bi', name: ''},
            {data: 'morada', name: ''},
            {data: 'estadoCivil', name: ''},
          //  {data: 'observacao', name: 'observacao'},
            {data: 'dataNascimento', name: ''},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    $('#createNewItem').click(function () {
        $('#saveBtn').val("create-Item");
        $('#Item_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Adicionar Gestante");
        $('#ajaxModel').modal('show');
    });
             //formata a data para enviar ao text para editar
             function FormataStringData(data) {
             var ano  = data.split("-")[0];
             var mes  = data.split("-")[1];
             var dia  = data.split("-")[2];

             return dia.slice(-2) + '-' + ("0"+mes).slice(-2) + '-' + (ano);
  // Utilizo o .slice(-2) para garantir o formato com 2 digitos.
          }

    
    $('body').on('click', '.editItem', function () {
      var Item_id = $(this).data('id');
      $.get("{{ route('gestante.index') }}" +'/' + Item_id +'/edit', function (data) {
          $('#modelHeading').html("Editar Gestante");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#Item_id').val(data.id);
          $('#nome').val(data.nome);
          $('#nr_bi').val(data.nr_bi);
          $('#morada').val(data.morada);
           $('#estadoCivil').val(data.estadoCivil);
           $('#dataTermino').val(FormataStringData(data.dataTermino));
           $('#observacao').val(data.observacao);
           $('#moeda').val(data.moeda);
           //formata o valor antes de mandar para view
           var orcamento=new Intl.NumberFormat('de-DE', 
           ).format(data.orcamento);
           //recebe o valor formatados
           $('#orcamentoBruto').val(orcamento);
           $('#objectivo').val(data.objectivo);
           $('#financiador_id').val(data.financiador_id);
           $('#dataInicio').val(FormataStringData(data.dataInicio));
           $('.financiadores').val(FormataStringData(data.dataInicio));
           
           var url="{{ route('obterFinanciadoresProjecto',':projecto_id') }}";
           var urll=url.replace(':projecto_id', data.id);
          
           $.ajax({
           url: urll,
           type: 'GET',
           dataType: 'json',
           }).done(function (data) {
            var select = $('#financiadores');
            var financiadores_ids = [];
             
            $.each(data,function(key, value) {
            financiadores_ids.push(value.id);
           });
            console.log("sucesso");
            select .select2({}).select2('val', financiadores_ids);
          
          }) 
      })
   });

    
 $('#saveBtn').click(function (e) {  
    e.preventDefault();
       var myForm = document.getElementById('ItemForm');
       let formData = new FormData(myForm);
        var valido=$("#ItemForm").valid();
         if(valido) {
        $(this).html('A enviar..');
        $.ajax({
          type:'POST',
           url: "{{ route('gestante.store') }}",
           data: formData,
           contentType: false,
           processData: false,
           success: function (data) {
     
              $('#ItemForm').trigger("reset");
               $('#saveBtn').html('Gravar');
              $('#ajaxModel').modal('hide');
              
              table.draw();
              console.log(data);
         
          },
           error: function (data) {
               console.log('Error:', data);
               $('#saveBtn').html('Gravar');
                
           }
       });
   };
  });
  
    $('body').on('click', '.deleteItem', function () {
     
        var Item_id = $(this).data("id");
        var confirmar=confirm("Are You sure want to delete !");
        
        if(confirmar){
        $.ajax({
            type: "DELETE",
            url: "{{ route('gestante.store') }}"+'/'+Item_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
       }
    });
     
  });
</script>


<script>
    //puxa os financiadores no multi select //financiadores
      jQuery(document).ready(function ($) {
      $.ajax({
           url:'financiadores/',  
           type: 'GET',
           dataType: 'json',
           }).done(function (data) {
               
            var select = $('#financiadores');
           $('#financiadores').data('placeholder','This is a placeholder');
            select.empty();
            $.each(data,function(key, value) {
            select.append('<option value="' + value.id + '">' + value.descricao + '</option>');
           });
           console.log("sucesso");
          })
        
        
    });
</script>

       <script>
 
          $('body').on('click', '.conf', function () {
           selecte = $(this).closest('tr').find('td');
           selected=selecte[0].innerHTML;
           //window.location = '{{ url("projectoProvincias/8") }}';
           let url="{{ route('p',':id') }}";
           url=url.replace(':id', selected);
           window.location = url;
           })
           
           $('body').on('click', '.verItem', function () {
           selecte = $(this).closest('tr').find('td');
           selected=selecte[0].innerHTML;
           //window.location = '{{ url("projectoProvincias/8") }}';
           let url="{{ route('projecto.show',':id') }}";
           url=url.replace(':id', selected);
           window.location = url;
           })
       </script>

<script>
        $(document).ready(function(){
            $(".financiadores").select2({
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>


@endsection
<!-- jQuery -->

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

<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>

  


