@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Cortes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @can('crear-usuarios')
                            <a class="btn btn-warning" href="{{ route('cortes.create') }}">Nuevo Corte</a>
                            @endcan

                            <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="display: none;">ID</th>
                                <th style="color: #fff;">Fecha</th>
                                <th style="color: #fff;">Isla</th>
                                <th style="color: #fff;">Turno</th>
                                <th style="color: #fff;">Empleado</th>
                                <th style="color:#fff;">Saldo Total</th>
                                <th style="color: #fff;">Acciones</th>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
@endsection