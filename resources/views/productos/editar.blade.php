@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('productos.update',$producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">Nombre</label>
                                   <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="categoria">Categoria</label>
                                   <input type="text" name="categoria" class="form-control" value="{{ $producto->categoria }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="cantidad">Cantidad</label>
                                   <input type="text" name="cantidad" class="form-control" value="{{ $producto->cantidad }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="precio">Precio</label>
                                   <input type="text" name="precio" class="form-control" value="{{ $producto->precio }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">                                            
                                <div class="form-floating">
                                <label for="descripcion">Descripcion</label>
                                <textarea class="form-control" name="descripcion" style="height: 100px">{{ $producto->descripcion }}</textarea>                                                               
                                </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection