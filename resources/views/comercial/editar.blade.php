@extends('master.master')
@section('content')

<section class="admin-content">
        @component('components.titulo')
            @slot('titulo')
                @isset($comercial)
                <h4>Editar Comercial ID:{{ $comercial->id }}</h4>
                @else
                <h4>Crear Comercial</h4>
                @endisset
            @endslot

            
        @endcomponent

        <div class="container  pull-up">
            <div class="row">
                <div class="col">
                    <form action="{{ isset($comercial) ?  route('comercial.actualizar' , $comercial->id) : route('comercial.cargar') }}" method="post">
                    @csrf
                        <!--widget card begin-->
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="m-b-0">
                                    @isset($comercial)
                                    <input type="date" class="form-control" value="{{$comercial->created_at->format('Y-m-d')}}" name="created_at"> 
                                    @else
                                    <input type="date" class="form-control" value="{{ Carbon\Carbon::now()->format('Y-m-d')}}" name="created_at"> 
                                    @endisset
                                </h5>
                            </div>
                            <div class="card-body ">
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <td>Contactos</td>
                                        <td>Unidades</td>
                                        <td>$ Total</td>
                                        <td>Up Down</td>
                                        <td>Objetivo</td>
                                        <td>% Cumplimiento</td>
                                        <td>Promedio Mensual</td>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td>
                                                <p>Contactos</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="contactos_u" value="{{ isset($comercial) ? $comercial->contactos_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="contactos_total" value="{{ isset($comercial) ? $comercial->contactos_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('contactos') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control objetivo" name="contactos_objetivo" value="{{ isset($comercial) ? $comercial->contactos_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('contactos') , 2 ) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('contactos') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Prospectos</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="prospectos_u" value="{{ isset($comercial) ? $comercial->prospectos_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="prospectos_total" value="{{ isset($comercial) ? $comercial->prospectos_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('prospectos') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="prospectos_objetivo" value="{{ isset($comercial) ? $comercial->prospectos_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('prospectos') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('prospectos') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Boletos 0km TOTAL</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="boletos_u" value="{{ isset($comercial) ? $comercial->boletos_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="boletos_total" value="{{ isset($comercial) ? $comercial->boletos_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('boletos') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="boletos_objetivo" value="{{ isset($comercial) ? $comercial->boletos_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('boletos') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('boletos') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Declaraciones de boletos</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="declaraciones_u" value="{{ isset($comercial) ? $comercial->declaraciones_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="declaraciones_total" value="{{ isset($comercial) ? $comercial->declaraciones_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('declaraciones') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="declaraciones_objetivo" value="{{ isset($comercial) ? $comercial->declaraciones_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('declaraciones') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('declaraciones') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Etios</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="etios_u" value="{{ isset($comercial) ? $comercial->etios_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="etios_total" value="{{ isset($comercial) ? $comercial->etios_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('etios') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="etios_objetivo" value="{{ isset($comercial) ? $comercial->etios_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('etios') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('etios') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Yaris</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="yaris_u" value="{{ isset($comercial) ? $comercial->yaris_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="yaris_total" value="{{ isset($comercial) ? $comercial->yaris_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('yaris') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="yaris_objetivo" value="{{ isset($comercial) ? $comercial->yaris_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('yaris') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('yaris') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Corolla</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="corolla_u" value="{{ isset($comercial) ? $comercial->corolla_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="corolla_total" value="{{ isset($comercial) ? $comercial->corolla_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('corolla') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="corolla_objetivo" value="{{ isset($comercial) ? $comercial->corolla_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('corolla') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('corolla') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                         <tr>
                                            <td>
                                                <p>Hillux</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="hillux_u" value="{{ isset($comercial) ? $comercial->hillux_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="hillux_total" value="{{ isset($comercial) ? $comercial->hillux_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('hillux') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="hillux_objetivo" value="{{ isset($comercial) ? $comercial->hillux_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('hillux') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('hillux') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Alta Gama</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="alta_gama_u" value="{{ isset($comercial) ? $comercial->alta_gama_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="alta_gama_total" value="{{ isset($comercial) ? $comercial->alta_gama_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('alta_gama') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="alta_gama_objetivo" value="{{ isset($comercial) ? $comercial->alta_gama_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('alta_gama') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('alta_gama') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Boletos Usados</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="boletos_usados_u" value="{{ isset($comercial) ? $comercial->boletos_usados_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="boletos_usados_total" value="{{ isset($comercial) ? $comercial->boletos_usados_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('boletos_usados') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="boletos_usados_objetivo" value="{{ isset($comercial) ? $comercial->boletos_usados_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('boletos_usados') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('boletos_usados') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Entregas por Planes</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="entregas_u" value="{{ isset($comercial) ? $comercial->entregas_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="entregas_total" value="{{ isset($comercial) ? $comercial->entregas_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('entregas') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="entregas_objetivo" value="{{ isset($comercial) ? $comercial->entregas_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('entregas') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('entregas') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Suscripciones a Planes</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="suscripciones_u" value="{{ isset($comercial) ? $comercial->suscripciones_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="suscripciones_total" value="{{ isset($comercial) ? $comercial->suscripciones_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('suscripciones') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="suscripciones_objetivo" value="{{ isset($comercial) ? $comercial->suscripciones_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('suscripciones') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('suscripciones') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Ventas mostrador</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="ventas_u" value="{{ isset($comercial) ? $comercial->ventas_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="ventas_total" value="{{ isset($comercial) ? $comercial->ventas_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('ventas') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="ventas_objetivo" value="{{ isset($comercial) ? $comercial->ventas_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('ventas') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('ventas') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>CPUs</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="cpu_u" value="{{ isset($comercial) ? $comercial->cpu_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="cpu_total" value="{{ isset($comercial) ? $comercial->cpu_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('cpu') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="cpu_objetivo" value="{{ isset($comercial) ? $comercial->cpu_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('cpu') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('cpu') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>TUs</p>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control unidades" name="tu_u" value="{{ isset($comercial) ? $comercial->tu_u : '' }}">
                                            </td>
                                            <td>
                                                <input type="number" step="any" min="0" class="form-control total" name="tu_total" value="{{ isset($comercial) ? $comercial->tu_total : '' }}">
                                            </td>
                                            <td class="up-down">
                                                @isset($comercial)
                                                    {!! $comercial->upDown('tu') !!}
                                                @endisset
                                            </td>
                                            <td>
                                                <input type="text" class="form-control objetivo" name="tu_objetivo" value="{{ isset($comercial) ? $comercial->tu_objetivo : '' }}">
                                            </td>
                                            <td class="cumplimiento">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedio('tu') , 2) }}
                                                @endisset
                                            </td>
                                            <td class="promedio">
                                                @isset($comercial)
                                                    {{ number_format($comercial->promedioMensual('tu') , 2) }}
                                                @endisset
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                               

                              
                                <div class="form-group">
                                    <button class="btn btn-primary">{{ isset($comercial) ? 'Actualizar' : 'Crear' }}</button>
                                </div>
                            </div>
                        </div>
                        <!--widget card ends-->
                    </form>
                </div>
                
            </div>


        </div>
    </section>

@endsection