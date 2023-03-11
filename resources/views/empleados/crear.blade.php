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
                                   <label for="Nombre_Emp">Nombre</label>
                                   <input type="text" name="Nombre_Emp" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="Ap_Paterno_Emp">Apellido Paterno</label>
                                   <input type="text" name="Ap_Paterno_Emp" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="Ap_Materno_Emp">Apellido Materno</label>
                                   <input type="text" name="Ap_Materno_Emp" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label form="Id_Turno">Turno</label>
                                        <select class="form-control" name="Id_Turno">
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