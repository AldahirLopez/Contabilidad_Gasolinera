@extends('layouts.app')

<!-- Agrega los archivos CSS de DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>

<!-- Agrega los archivos JavaScript de jQuery y DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crear corte</h3>
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
                        {!! Form::open(array('route' => 'usuarios.store', 'method' => 'POST')) !!}
                        <div class="row">


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="fecha">Fecha:</label>
                                    <input type="date" id="fecha" name="fecha">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="isla">Seleccione una Isla:</label>
                                    <select id="isla" name="isla">
                                        <option value="isla1">Isla 1</option>
                                        <option value="isla2">Isla 2</option>
                                        <option value="isla3">Isla 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <label for="turno">Seleccione el turno:</label>
                                    <select id="turno" name="turno">
                                        <option value="turno1">00:00 a 06:00</option>
                                        <option value="turno2">06:00 a 14:00</option>
                                        <option value="turno3">14:00 a 22:00</option>
                                        <option value="turno4">22:00 a 00:00</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                <label for="empleado">Seleccione el empleado:</label>
                                    <select id="empleado" name="empleado">
                                        <option value="emp1"></option>
                                        
                                    </select>
                                    <a class="btn btn-warning" href="#">Nuevo Empleado</a>
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