@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Registrar Empleado</h3>
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

                    <form action="{{ route('empleados.store') }}" method="POST">
                        @csrf

                           <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">Nombre</label>
                                   <input type="text" name="nombre" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apellido_paterno">Apellido Paterno</label>
                                   <input type="text" name="apellido_paterno" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="apellido_materno">Apellido Materno</label>
                                   <input type="text" name="apellido_materno" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label form="turno">Turno</label>
                                        <select class="form-control" name="turno">
                                            @foreach($turnos as $turno)
                                            <option value="{{$turno->Id_Turno}}">{{$turno->hora_inicio}}-{{$turno->hora_fin}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                         </div>
                        </div>
                    </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection