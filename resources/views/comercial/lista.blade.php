@extends('master.master')
@section('content')
<section class="admin-content">
        @component('components.titulo')
        @slot('titulo')
            <h4>Comercial</h4>
        @endslot
        @slot('button')
            <a href="{{ route('comercial.crear') }}" class="btn btn-light">Crear</a>
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
                                        @foreach($comerciales as $comercial)
                                            <tr>
                                                <td>{{ $comercial->id }}</td>
                                                <td>{{ $comercial->created_at->format('d/m/Y') }}</td>
                                                <td><a href="{{ route('comercial.editar' , $comercial->id) }}">editar </a></td>
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