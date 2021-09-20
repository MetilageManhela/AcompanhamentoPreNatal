@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>


   <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="custom.css">
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Expandable-Bootstrap-Table-Rows/css/bootstrap-table-expandable.css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Expandable-Bootstrap-Table-Rows/js/bootstrap-table-expandable.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('.hiddenRow').hide();     
$('.accordion-toggle').click(function(){
$('.hiddenRow').hide();
$(this).next('tr').find('.hiddenRow').show();
});
</script>

</head>
  
 @section('title', 'Inicio | Detalhes Projecto')

@section('sidebar')
 @parent
@endsection

@section('content')
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}"
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->

  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css')}}"
</head>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detalhes do Projecto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detalhes do Projecto</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section><!-- Main content -->
    <section class="content">
<!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detalhes do Projecto </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>

          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Data de Inicio </span>
                      <span class="info-box-number text-center text-muted mb-0">{{Carbon \ Carbon :: parse ($projecto->dataInicio) -> format ('d-m-Y')}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Data de Termino</span>
                      <span class="info-box-number text-center text-muted mb-0">{{Carbon \ Carbon :: parse ($projecto->dataTermino) -> format ('d-m-Y')}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Duracao do projecto</span>
                      <span class="info-box-number text-center text-muted mb-0">{{$dataDiferenca}} Meses </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">

            <div class="card card-secondary collapsed-card">
              <div class="card-header">
                <h3 class="card-title"> Provincias do Projecto </h3>

                <div class="card-tools">
                  
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-sm" style="border-collapse:collapse;">
              <thead>
                  <tr>
                   <th> Provincia</th>
                   <th>Zona</th>
                  </tr>
                </thead>
               <tbody>
              @foreach($provincias as $key => $provincia)
               <tr colspan="6" data-toggle="collapse" data-target=".demo2{{$provincia->id}}" class="accordion-toggle">
                <td>{{$provincia->nomeProvincia}}</td>
                <td>{{$provincia->descricao}}</td>
                <td> <button style="float: right " class="btn-sm btn-success "> Distritos </button> </td>
               </tr>
              
             <tr>
               <td colspan="6" class="hiddenRow ">
                   <div style="background-color: #eeeeee;" class="demo2{{$provincia->id}}">
                  @php
                   $projecto= App\Models\Projecto::find(Request::segment(2));
                    $distritos=$projecto->distritos()->where('distritos.provincia_id', $provincia->id)->get();
                     @endphp
                     <strong>Distritos do projecto </strong> <br>
                      <ul>
                     @foreach($distritos as $key => $distrito)

                         <li>
                             {{$distrito->nomeDistrito}}
                         </li>

                   @endforeach
                                        </ul>
                </div>
               </td>
              </tr>
            @endforeach
          </tbody>
      </table>
     </div>
              <!-- /.card-body -->
   </div>

    <div class="card card-secondary collapsed-card">
       <div class="card-header">
          <h3 class="card-title"> Distritos do Projecto </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
             </button>
              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
             </button>
            </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-sm table-striped">
                <thead>
                  <tr>
                    <th>Distrito</th>
                    <th> Provincia</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($distritos) && $distritos->count())
                     @foreach($distritos as $key => $distrito)
                   <tr>
                    <th style="font-weight: 100">{{$distrito->nomeDistrito}}</th>
                    <th style="font-weight: 400"> {{$distrito->provincia_id}}</th>
                  </tr> 
                     @endforeach
                    @else
                      <tr>
                      <td colspan="10">Sem Distritos.</td>
                      </tr>
                      @endif

                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
     
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i>  {{  $projecto->descricao}}</h3>
             <hr>
              <p> <strong> Objectivo </strong></p>
              <p class="text-muted">
               {{$projecto->objectivo}}
               </p>
              <hr>
             
              
              <div class="text-muted">
               
                <p class="text-sm">Financiador
                    @if(!empty($financiadores))
                     @foreach($financiadores as $key => $financiador)
                  <b class="d-block">  {{$financiador->descricao}}</b>
                  @endforeach
                      @else
                    <b class="d-block"> Sem Financiadores</b>
                    @endif
                </p>
              </div>
              
          <hr>
              <h5 class="mt-5 text-muted">Arquivos do Projecto</h5>
              <ul class="list-unstyled">
                  @if(!empty($files))
                     @foreach($files as $key => $file)
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> {{$file->filename}}</a>
                </li>
                @endforeach
                      @else
                    <b class="d-block"> Sem Arquivos</b>
                    @endif
              </ul>
              
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
<script>
$('.hiddenRow').hide();     
$('.accordion-toggle').click(function(){
$('.hiddenRow').hide();
$(this).next('tr').find('.hiddenRow').show();

});
    
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Versao</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="https://infordata.co.mz/">Infordata </a>.</strong> Todos direitos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

</body>

</html>
@endsection

<script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('AdminLTE/plugins/jquery-validation/additional-methods.min.js') }}" type="text/javascript"></script>
