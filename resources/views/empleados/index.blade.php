@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-empleados')
                            <a class="btn btn-warning" href="{{ route('empleados.create') }}">Nuevo</a>
                            @endcan

                            <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="display: none;">ID</th>
                                <th style="color: #fff;">Nombre</th>
                                <th style="color: #fff;">Apellidos</th>
                                <th style="color: #fff;">Turno</th>
                                <th style="color: #fff;">Acciones</th>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $empleados->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection