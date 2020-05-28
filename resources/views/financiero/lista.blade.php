@extends('master.master')
@section('content')
<section class="admin-content">
        @component('components.titulo')
        @slot('titulo')
            <h4>Financiero</h4>
        @endslot
        @slot('button')
            <a href="{{ route('financiero.crear') }}" class="btn btn-light">Crear</a>
        @endslot
        @endcomponent

        <div class="container  pull-up">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive p-t-10">
                                <table id="example" class="table   " style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($financieros as $financiero)
                                            <tr>
                                                <td>{{ $financiero->id }}</td>
                                                <td>{{ $financiero->created_at->format('d/m/Y') }}</td>
                                                <td><a href="{{ route('financiero.editar' , $financiero->id) }}">editar </a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha</th>
                                        <th>Acción</th>
                                    
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection