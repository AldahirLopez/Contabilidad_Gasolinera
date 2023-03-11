@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta de empleados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          @if($errors->any())
                             <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Rellene los campos correctamente!</strong>
                                @foreach($errors->all() as $error)
                                    <span class="badge badge-danger">{{$error}}</span>
                                @endforeach
                                    <button type="button" class="close" data-dismisss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>
                              @endif
                             {!! Form::open(array('route' => 'empleados.store', 'method' => 'POST')) !!}
                             <div class="row">


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label form="nombre">Nombre</label>
                                        {!! Form::text('nombre', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label form="paterno">Apellido Paterno</label>
                                        {!! Form::text('paterno', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label form="materno">Apellido Materno</label>
                                        {!! Form::text('materno', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label form="turnos">Roles</label>
                                        {!! Form::select('turnos[]', $turnos,[], array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                             
                             </div>                 
                             <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                             </div>                     
                         {!! Form::close() !!}      
                       </div>                 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection