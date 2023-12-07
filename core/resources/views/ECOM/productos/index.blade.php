@extends('layouts.app')

@section('title')
  {{'Productos'}}
@endsection

@section('breadcrumb')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">
          <i class="nav-icon fas fa-tshirt"></i>   
          {{'Productos'}}
        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">{{'Home'}}</a></li>
          <li class="breadcrumb-item active">{{'Productos'}}</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="card card-primary card-outline">
  <div class="card-header">
    <h3 class="card-title">{{ 'Tabla productos'}}</h3>
    
    <a href="{{route('productos.create')}}" class="btn btn-primary btn-sm float-right">
     <i class="fa fa-plus"></i> {{ 'Crear' }}
    </a>
    
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row table-responsive">
      <div class="col-12">
        <table id="productos_table" class="table table-striped table-hover table-bordered"  width="100%">
          <thead>
            <tr>
              <th>{{ 'ID'}}</th>
              <th>{{ 'APP' }}</th>
              <th>{{ 'PRODUCTO' }}</th>
              <th>{{ 'URL' }}</th>
              <th>{{ 'MODELO' }}</th>
              <th>{{ 'DESCRIPCION' }}</th>
              <th width="100px">{{ 'Acciones' }}</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>

@endsection
@section('scripts')
  <script src="{{url('js/ECOM/productos.js')}}"></script>
@endsection