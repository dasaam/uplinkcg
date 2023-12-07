@extends('layouts.app')

@section('title')
{{ 'Editar producto' }}
@endsection

@section('css')
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">
            <h1 class="m-0">
              <i class="nav-icon fas fa-tshirt"></i>   
              {{ 'Productos' }}
            </h1>
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ 'Home' }}</a></li>
            <li class="breadcrumb-item "><a href="{{ route('productos.index') }}">{{ 'Productos' }}</a></li>
            <li class="breadcrumb-item active">{{ 'Editar producto' }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{ 'Editar producto' }}</h3>
    </div>
    <form method="POST" action="{{route('productos.update', $producto['idproductoapp'])}}">
        <!-- /.card-header -->
        <div class="card-body">
            @csrf
            @method('put')
            @include('ECOM.productos._form')
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-check"></i> {{ 'Guardar' }}
            </button>
        </div>
    </form>
</div>
@endsection
@section('scripts')
    <script src="{{url('js/ECOM/productos.js')}}"></script>
@endsection